# business-sdk-php

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer
To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Snapchat/business-sdk-php.git"
    }
  ],
  "require": {
    "snapchat/business-sdk-php": "dev-release"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/SnapBusinessSDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

namespace SnapBusinessSDK;

require_once(__DIR__ . '../../..'. '/vendor/autoload.php');

use \SnapBusinessSDK\Api\ConversionApi;
use \SnapBusinessSDK\Model\CapiEvent;
use SnapBusinessSDK\Util\CapiConstants;

const API_TOKEN = 'YOUR_API_TOKEN';
const PIXEL_ID = 'YOUR_PIXEL_ID';
const LAUNCH_PAD_URL = 'http://localhost:8080';

$capi = new ConversionApi(API_TOKEN);
// Please use the following line if the LaunchPad is available.
// $capi = new ConversionApi(API_TOKEN, LAUNCH_PAD_URL);

// (Optional) Enable logging
$capi->setDebugging(true);

// Use Case 1: Send an event asynchronously
$capiEvent1 = (new CapiEvent())
    ->setPixelId(PIXEL_ID)
    ->setEventConversionType('WEB')
    ->setEventType('CUSTOM_EVENT_1')
    ->setTimestamp('1656022510346')
    // The following PII fields are hashed by SHA256 before being sent to CAPI.
    // Alternatively, you can use hashed-field setters (e.g. setHashedEmail()) to set the hashed value directly.
    ->setEmail('mocking-email')
    ->setIpAddress('mocking-ip')
    ->setPhoneNumber('mocking-phone-num');

$capi->sendEvent($capiEvent1);

// Use Case 2: Send batching events asynchronously (up to 2000 events in one batch)
$capiEvent2 = (new CapiEvent())
    ->setPixelId(PIXEL_ID)
    ->setEventConversionType('WEB')
    ->setEventType('CUSTOM_EVENT_2')
    ->setTimestamp('1656022510346')
    ->setEmail('mocking-email')
    ->setIpAddress('mocking-ip')
    ->setPhoneNumber('mocking-phone-num');

$capi->sendEvents([$capiEvent1, $capiEvent2]);

// Use Case 3: Test event tools
// Send the test event(s).
$response1 = $capi->sendTestEvent($capiEvent1);
echo implode($response1);
$response2 = $capi->sendTestEvents([$capiEvent1, $capiEvent2]);
echo implode($response2);
 
// Get the test event logs in the last 24 hrs
$response3 = $capi->getTestEventLogs(PIXEL_ID);
echo $response3;

// Get the stats in the last hour
$response4 = $capi->getTestEventStats(PIXEL_ID);
echo $response4;
```

### Initialization
- Please use ConversionApi(API_TOKEN, LAUNCH_PAD_URL) if the Launch Pad has been set up under your domain. Conversion events will be forwarded to Snap transparently. (Other MPC features will be introduced in later versions).
- Otherwise, you can initiate the instance using ConversionApi(API_TOKEN).Conversion events are sent back to Snap from the business SDK directly.

### API Token
- To use the Conversions API, you need to use the access token for auth. See here to generate the token.

### Build CapiEvent
- Please check with the section [Conversion Parameters](https://marketingapi.snapchat.com/docs/conversion.html#conversion-parameters) and provide as much information as possible when creating the CapiEvent object.
- Every CAPI attribute has a corresponding setter in the CapiEvent class following the camelcase naming convention.  
- At least one of the following parameters is required in order to successfully send events via the Conversions API. When possible, we recommend passing all of the below parameters to improve performance:

  - hashed_email
  - hashed_phone
  - hashed_ip and user_agent
  - hashed_mobile_ad_id
  
- Any setter starting with the prefix of “hashed” (e.g. hashedEmail()) accepts the hashing PII value only (see [Data Hygiene](https://marketingapi.snapchat.com/docs/conversion.html#data-hygiene)). Please use the unhashed setter (e.g. email()) if you want the business sdk to normalize and hash the PII field on your behalf.
- We highly recommend passing cookie1 uuid_c1, if available, as this will increase your match rate. You can access a 1st party cookie by looking at the _scid value under your domain if you are using the Pixel SDK.

### Send event(s) asynchronously
- Conversion events can be sent individually via sendEvent.
- Conversion events can be reported in batch using sendEvents if they are buffered in your application.
- Events are encapsulated in an asynchronous request in both solutions by which your application won’t be blocked. The response is logged by a default callback (under debugging mode)
- We recommend a 1000 QPS limit for sending us requests. You may send up to 2000 events per batch request, and can thus send up to 2M events/sec. BSDK/PHP automatically splits the event lists into small batches (2000) and sends them out. Please avoid super long list to avoid being rate-limited.

### Test Events, Logs, and Stats
- Conversion events can be sent for testing and validation via the api_instance.send_test_event(event).
- Conversion API also provides a logging endpoint. It provides a summary of test CAPI events sent to the test endpoint within the past day
- Conversion API’s stats endpoint provides basic stats and summary of the test events sent.

### Debugging mode
- The cAPI requests and responses will be logged once the debugging mode is on.
- When debugging mode is turned on, we will log the events, api call response and exceptions to php://output
- The debug file path can be modified by the default parameter in setDebugging.

Please open a GitHub issue if you want to record a bug report, enhancement proposal, or give any other product feedback. 
