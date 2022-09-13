<?php

namespace SnapBusinessSDK\Api;

use SnapBusinessSDK\ApiException;
use SnapBusinessSDK\Configuration;
use SnapBusinessSDK\Model\CapiEvent;
use SnapBusinessSDK\Model\Response;
use SnapBusinessSDK\Model\ResponseLogs;
use SnapBusinessSDK\Model\ResponseStats;
use SnapBusinessSDK\ObjectSerializer;
use SnapBusinessSDK\Util\CapiConstants;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;
use function GuzzleHttp\Promise\settle;


class ConversionApi
{
    protected bool $isLaunchPadEnabled = false;
    protected Configuration $config;
    protected DefaultApi $apiInstance;
    protected LoggerInterface $logger;

    public function __construct($longLivedToken, $launchPadUrl = '')
    {
        $this->isLaunchPadEnabled = !($launchPadUrl === null || trim($launchPadUrl) === '');
        $this->config = (new Configuration())->setAccessToken($longLivedToken)
            ->addCustomHeader(CapiConstants::SDK_VER_HEADER, CapiConstants::SDK_LANGUAGE . '/' . CapiConstants::SDK_VERSION);

        if ($this->isLaunchPadEnabled) {
            $this->config->setUserAgent(CapiConstants::USER_AGENT_WITH_PAD)
                ->setHost(trim($launchPadUrl));
        } else {
            $this->config->setUserAgent(CapiConstants::USER_AGENT);
        }

        $this->apiInstance = new DefaultApi(
            new \GuzzleHttp\Client(),
            $this->config
        );

        $this->logger = new NullLogger();
    }

    /**
     * @param bool $isEnabled
     * @param string $debugFilePath
     * @return void
     */
    public function setDebugging(bool $isEnabled, string $debugFilePath = 'php://output') {
        //$this->config->setDebug($isEnabled);
        if($isEnabled) {
            if (empty($debugFilePath) || !@fopen($debugFilePath, 'a')) {
                $errMsg = 'Failed to open and append to the given stream: ' . $debugFilePath;
                $debugFilePath = 'php://output';
            }
            $this->logger = new Logger(get_class($this));
            $this->logger->pushHandler((new StreamHandler($debugFilePath))
                ->setFormatter(
                    new LineFormatter(null, null, true, true))
            );
            if (isset($errMsg)) {
                $this->logger->error($errMsg);
            }
        }
        else {
            $this->logger = new NullLogger();
        }
    }

    /**
     * @param CapiEvent $capiEvent
     * @return mixed
     */
    public function sendEventSync(CapiEvent $capiEvent) {
        return $this->sendEventsSync([$capiEvent]);
    }

    /**
     * @param array $capiEvents
     * @return mixed
     */
    public function sendEventsSync(array $capiEvents) {
        if (empty($capiEvents)) {
            return;
        }

        foreach ($capiEvents as $capiEvent) {
            $capiEvent->setIntegration(CapiConstants::INTEGRATION_SDK);
        }

        $responses = [];
        foreach (array_chunk($capiEvents, CapiConstants::MAX_BATCH) as $batchEvents) {
            try {
                $meta = $this->apiInstance->sendDataWithHttpInfo($batchEvents);
            }
            catch (\Exception $exception) {
                $meta = $this->castToResponseMetaData($exception);
            }
            $this->logCapi($batchEvents, $meta[0], $meta[1]);
            $responses[] = $meta[0];
        }

        return $responses;
    }

    /**
     * @param CapiEvent $capiEvent
     * @return array
     */
    public function sendTestEvent(CapiEvent $capiEvent) {
        return $this->sendTestEvents([$capiEvent]);
    }

    /**
     * @param array $capiEvents
     * @return array
     */
    public function sendTestEvents(array $capiEvents) {
        foreach ($capiEvents as $capiEvent) {
            $capiEvent->setIntegration(CapiConstants::INTEGRATION_SDK);
        }

        $responses = [];
        foreach (array_chunk($capiEvents, CapiConstants::MAX_BATCH) as $batchEvents) {
            try {
                $meta = $this->apiInstance->sendTestDataWithHttpInfo($batchEvents);
                $lvl = Logger::INFO;
            }
            catch (\Exception $exception) {
                $meta = $this->castToResponseMetaData($exception, '\SnapBusinessSDK\Model\TestResponse');
                $lvl = Logger::ERROR;
            }

            foreach ($batchEvents as $i => $testEvent) {
                $this->logger->log($lvl, $testEvent);
                $this->logger->log($lvl, $meta[0]);
            }

            $responses[] = $meta[0];
        }

        return $responses;
    }

    public function getTestEventLogs(string $assetId) {
        try {
            $res = $this->apiInstance->conversionValidateLogs($assetId);
            $lvl = Logger::INFO;
        }
        catch (\Exception $exception) {
            $res = (new ResponseLogs())->setStatus('FAILED')->setReason($exception->getMessage());   //->castToResponseMetaData($exception, '\SnapBusinessSDK\Model\TestResponse');
            $lvl = Logger::ERROR;
        }
        $this->logger->log($lvl, $res);
        return $res;
    }

    public function getTestEventStats(string $assetId) {
        try {
            $res = $this->apiInstance->conversionValidateStats($assetId);
            $lvl = Logger::INFO;
        }
        catch (\Exception $exception) {
            $res = (new ResponseStats())->setStatus('FAILED')->setReason($exception->getMessage());   //->castToResponseMetaData($exception, '\SnapBusinessSDK\Model\TestResponse');
            $lvl = Logger::ERROR;
        }
        $this->logger->log($lvl, $res);
        return $res;
    }

    /**
     * @param CapiEvent $capiEvent
     * @return void
     */
    public function sendEvent(CapiEvent $capiEvent) {
        $this->sendEvents([$capiEvent]);
    }

    /**
     * @param array $capiEvents
     * @return \GuzzleHttp\Promise\PromiseInterface|null
     */
    public function sendEventsWithHttpInfo(array $capiEvents)
    {
        foreach ($capiEvents as $capiEvent) {
            $capiEvent->setIntegration(CapiConstants::INTEGRATION_SDK);
        }

        try {
            //throw new \Exception('test');
            return $this->apiInstance->sendDataAsyncWithHttpInfo($capiEvents);
        } catch (\Exception $e) {
            $meta = $this->castToResponseMetaData($e);
            $this->logCapi($capiEvents, $meta[0], $meta[1]);
            return null;
        }
    }


    /**
     * @param array $capiEvents
     * @return void
     */
    public function sendEvents(array $capiEvents) {
        if (empty($capiEvents)) {
            return;
        }

        $promises = [];
        foreach (array_chunk($capiEvents, CapiConstants::MAX_BATCH) as $batchEvents) {
            $promise = $this->sendEventsWithHttpInfo($batchEvents);
            if ($promise !== null) {
                $promises[] = $promise->otherwise(
                    function($exception) {
                        return $this->castToResponseMetaData($exception);
                    })->then(
                    function ($response) use ($batchEvents) {
                        $this->logCapi($batchEvents, $response[0], $response[1]);
                    },
                    function ($exception) {
                        $this->logger->error($exception->getMessage());
                    });
            }
        }

        settle($promises)->wait();
    }

    private function groupErrorRecordsByIndex($response){
        $i2r = array();
        foreach((array)($response->getErrorRecords()) as $err) {
            $reason = $err->getReason() ?? ($response->getReason() ?? 'N/A');
            foreach((array)($err->getRecordIndexes()) as $i) {
                if (!isset($i2r[$i])) {
                    $i2r[$i] = array();
                }
                $i2r[$i][] = $reason;
            }
        }

        foreach($i2r as $i => $reasons) {
            $i2r[$i] = implode("; ", array_unique($reasons));
        }

        return $i2r;
    }

    private function logCapi(array $capiEvents, Response $response, int $code=null){
        $defaultRes = $code == 200 ? 'SUCCESS' : 'FAILED: ' . $response->getReason();
        $defaultLvl = $code == 200 ? Logger::INFO : Logger::ERROR;

        $reasons = $this->groupErrorRecordsByIndex($response);
        foreach ($capiEvents as $i => $capiEvent) {
            //1-based array indexing
            if (array_key_exists($i + 1, $reasons)){
                $res = 'FAILED: ' . $reasons[$i + 1];
                $lvl = Logger::ERROR;
            }
            else{
                $res = $defaultRes;
                $lvl = $defaultLvl;
            }
            $this->logger->log($lvl, sprintf("CapiEvent %s => [%d] %s", $capiEvent, $code, $res));

        }
    }

    private function castToResponseMetaData(\Exception $exception, string $responseType='\SnapBusinessSDK\Model\Response') {
        try {
            if($exception instanceof ApiException) {
                $responseBody = $exception->getResponseBody();
                $response = ObjectSerializer::deserialize(json_decode($responseBody), $responseType, []);
                if ($response) {
                    return [
                        $response,
                        $exception->getCode(),
                        $exception->getResponseHeaders()];
                }
            }
            $reason = $exception->getMessage();
        }
        catch (\Exception $ex) {
            $reason = $ex->getMessage();
        }
        return [(new $responseType())->setStatus('FAILED')->setReason($reason),
            null,
            null];
    }
}
