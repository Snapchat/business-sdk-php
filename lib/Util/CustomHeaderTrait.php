<?php

namespace SnapBusinessSDK\Util;

use SnapBusinessSDK\Configuration;

trait CustomHeaderTrait
{
    /**
     * Associate array to store custom headers (e.g. X-CAPI-Test-Mode)
     *
     * @var string[]
     */
    protected $customHeaders = [];

    /**
     * Add a default header
     *
     * @param string $key Key
     * @param string $value Value
     *
     * @return $this
     */
    public function addCustomHeader (string $key, string $value)
    {
        $this->customHeaders[$key] = $value;
        return $this;
    }

    /**
     * Returns an array of custom headers
     *
     * @return array an array of custom headers
     */
    public function getCustomHeaders()
    {
        return $this->customHeaders;
    }
}