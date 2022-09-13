<?php
/**
 * CapiEvent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapBusinessSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Snap Conversions API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SnapBusinessSDK\Model;

use \ArrayAccess;
use \SnapBusinessSDK\ObjectSerializer;

/**
 * CapiEvent Class Doc Comment
 *
 * @category Class
 * @package  SnapBusinessSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CapiEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    use CapiEventTrait;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'capi_event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pixel_id' => 'string',
        'app_id' => 'string',
        'snap_app_id' => 'string',
        'event_type' => 'string',
        'event_conversion_type' => 'string',
        'event_tag' => 'string',
        'timestamp' => 'string',
        'hashed_email' => 'string',
        'hashed_mobile_ad_id' => 'string',
        'uuid_c1' => 'string',
        'hashed_idfv' => 'string',
        'hashed_phone_number' => 'string',
        'user_agent' => 'string',
        'hashed_ip_address' => 'string',
        'item_category' => 'string',
        'item_ids' => 'string',
        'description' => 'string',
        'number_items' => 'string',
        'price' => 'string',
        'currency' => 'string',
        'transaction_id' => 'string',
        'level' => 'string',
        'client_dedup_id' => 'string',
        'data_use' => 'string',
        'search_string' => 'string',
        'page_url' => 'string',
        'sign_up_method' => 'string',
        'hashed_first_name_sha' => 'string',
        'hashed_first_name_sdx' => 'string',
        'hashed_middle_name_sha' => 'string',
        'hashed_middle_name_sdx' => 'string',
        'hashed_last_name_sha' => 'string',
        'hashed_last_name_sdx' => 'string',
        'hashed_city_sha' => 'string',
        'hashed_city_sdx' => 'string',
        'hashed_state_sha' => 'string',
        'hashed_state_sdx' => 'string',
        'hashed_zip' => 'string',
        'hashed_dob_month' => 'string',
        'hashed_dob_day' => 'string',
        'integration' => 'string',
        'click_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pixel_id' => null,
        'app_id' => null,
        'snap_app_id' => null,
        'event_type' => null,
        'event_conversion_type' => null,
        'event_tag' => null,
        'timestamp' => null,
        'hashed_email' => null,
        'hashed_mobile_ad_id' => null,
        'uuid_c1' => null,
        'hashed_idfv' => null,
        'hashed_phone_number' => null,
        'user_agent' => null,
        'hashed_ip_address' => null,
        'item_category' => null,
        'item_ids' => null,
        'description' => null,
        'number_items' => null,
        'price' => null,
        'currency' => null,
        'transaction_id' => null,
        'level' => null,
        'client_dedup_id' => null,
        'data_use' => null,
        'search_string' => null,
        'page_url' => null,
        'sign_up_method' => null,
        'hashed_first_name_sha' => null,
        'hashed_first_name_sdx' => null,
        'hashed_middle_name_sha' => null,
        'hashed_middle_name_sdx' => null,
        'hashed_last_name_sha' => null,
        'hashed_last_name_sdx' => null,
        'hashed_city_sha' => null,
        'hashed_city_sdx' => null,
        'hashed_state_sha' => null,
        'hashed_state_sdx' => null,
        'hashed_zip' => null,
        'hashed_dob_month' => null,
        'hashed_dob_day' => null,
        'integration' => null,
        'click_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'pixel_id' => 'pixel_id',
        'app_id' => 'app_id',
        'snap_app_id' => 'snap_app_id',
        'event_type' => 'event_type',
        'event_conversion_type' => 'event_conversion_type',
        'event_tag' => 'event_tag',
        'timestamp' => 'timestamp',
        'hashed_email' => 'hashed_email',
        'hashed_mobile_ad_id' => 'hashed_mobile_ad_id',
        'uuid_c1' => 'uuid_c1',
        'hashed_idfv' => 'hashed_idfv',
        'hashed_phone_number' => 'hashed_phone_number',
        'user_agent' => 'user_agent',
        'hashed_ip_address' => 'hashed_ip_address',
        'item_category' => 'item_category',
        'item_ids' => 'item_ids',
        'description' => 'description',
        'number_items' => 'number_items',
        'price' => 'price',
        'currency' => 'currency',
        'transaction_id' => 'transaction_id',
        'level' => 'level',
        'client_dedup_id' => 'client_dedup_id',
        'data_use' => 'data_use',
        'search_string' => 'search_string',
        'page_url' => 'page_url',
        'sign_up_method' => 'sign_up_method',
        'hashed_first_name_sha' => 'hashed_first_name_sha',
        'hashed_first_name_sdx' => 'hashed_first_name_sdx',
        'hashed_middle_name_sha' => 'hashed_middle_name_sha',
        'hashed_middle_name_sdx' => 'hashed_middle_name_sdx',
        'hashed_last_name_sha' => 'hashed_last_name_sha',
        'hashed_last_name_sdx' => 'hashed_last_name_sdx',
        'hashed_city_sha' => 'hashed_city_sha',
        'hashed_city_sdx' => 'hashed_city_sdx',
        'hashed_state_sha' => 'hashed_state_sha',
        'hashed_state_sdx' => 'hashed_state_sdx',
        'hashed_zip' => 'hashed_zip',
        'hashed_dob_month' => 'hashed_dob_month',
        'hashed_dob_day' => 'hashed_dob_day',
        'integration' => 'integration',
        'click_id' => 'click_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pixel_id' => 'setPixelId',
        'app_id' => 'setAppId',
        'snap_app_id' => 'setSnapAppId',
        'event_type' => 'setEventType',
        'event_conversion_type' => 'setEventConversionType',
        'event_tag' => 'setEventTag',
        'timestamp' => 'setTimestamp',
        'hashed_email' => 'setHashedEmail',
        'hashed_mobile_ad_id' => 'setHashedMobileAdId',
        'uuid_c1' => 'setUuidC1',
        'hashed_idfv' => 'setHashedIdfv',
        'hashed_phone_number' => 'setHashedPhoneNumber',
        'user_agent' => 'setUserAgent',
        'hashed_ip_address' => 'setHashedIpAddress',
        'item_category' => 'setItemCategory',
        'item_ids' => 'setItemIds',
        'description' => 'setDescription',
        'number_items' => 'setNumberItems',
        'price' => 'setPrice',
        'currency' => 'setCurrency',
        'transaction_id' => 'setTransactionId',
        'level' => 'setLevel',
        'client_dedup_id' => 'setClientDedupId',
        'data_use' => 'setDataUse',
        'search_string' => 'setSearchString',
        'page_url' => 'setPageUrl',
        'sign_up_method' => 'setSignUpMethod',
        'hashed_first_name_sha' => 'setHashedFirstNameSha',
        'hashed_first_name_sdx' => 'setHashedFirstNameSdx',
        'hashed_middle_name_sha' => 'setHashedMiddleNameSha',
        'hashed_middle_name_sdx' => 'setHashedMiddleNameSdx',
        'hashed_last_name_sha' => 'setHashedLastNameSha',
        'hashed_last_name_sdx' => 'setHashedLastNameSdx',
        'hashed_city_sha' => 'setHashedCitySha',
        'hashed_city_sdx' => 'setHashedCitySdx',
        'hashed_state_sha' => 'setHashedStateSha',
        'hashed_state_sdx' => 'setHashedStateSdx',
        'hashed_zip' => 'setHashedZip',
        'hashed_dob_month' => 'setHashedDobMonth',
        'hashed_dob_day' => 'setHashedDobDay',
        'integration' => 'setIntegration',
        'click_id' => 'setClickId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pixel_id' => 'getPixelId',
        'app_id' => 'getAppId',
        'snap_app_id' => 'getSnapAppId',
        'event_type' => 'getEventType',
        'event_conversion_type' => 'getEventConversionType',
        'event_tag' => 'getEventTag',
        'timestamp' => 'getTimestamp',
        'hashed_email' => 'getHashedEmail',
        'hashed_mobile_ad_id' => 'getHashedMobileAdId',
        'uuid_c1' => 'getUuidC1',
        'hashed_idfv' => 'getHashedIdfv',
        'hashed_phone_number' => 'getHashedPhoneNumber',
        'user_agent' => 'getUserAgent',
        'hashed_ip_address' => 'getHashedIpAddress',
        'item_category' => 'getItemCategory',
        'item_ids' => 'getItemIds',
        'description' => 'getDescription',
        'number_items' => 'getNumberItems',
        'price' => 'getPrice',
        'currency' => 'getCurrency',
        'transaction_id' => 'getTransactionId',
        'level' => 'getLevel',
        'client_dedup_id' => 'getClientDedupId',
        'data_use' => 'getDataUse',
        'search_string' => 'getSearchString',
        'page_url' => 'getPageUrl',
        'sign_up_method' => 'getSignUpMethod',
        'hashed_first_name_sha' => 'getHashedFirstNameSha',
        'hashed_first_name_sdx' => 'getHashedFirstNameSdx',
        'hashed_middle_name_sha' => 'getHashedMiddleNameSha',
        'hashed_middle_name_sdx' => 'getHashedMiddleNameSdx',
        'hashed_last_name_sha' => 'getHashedLastNameSha',
        'hashed_last_name_sdx' => 'getHashedLastNameSdx',
        'hashed_city_sha' => 'getHashedCitySha',
        'hashed_city_sdx' => 'getHashedCitySdx',
        'hashed_state_sha' => 'getHashedStateSha',
        'hashed_state_sdx' => 'getHashedStateSdx',
        'hashed_zip' => 'getHashedZip',
        'hashed_dob_month' => 'getHashedDobMonth',
        'hashed_dob_day' => 'getHashedDobDay',
        'integration' => 'getIntegration',
        'click_id' => 'getClickId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['pixel_id'] = $data['pixel_id'] ?? null;
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['snap_app_id'] = $data['snap_app_id'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['event_conversion_type'] = $data['event_conversion_type'] ?? null;
        $this->container['event_tag'] = $data['event_tag'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['hashed_email'] = $data['hashed_email'] ?? null;
        $this->container['hashed_mobile_ad_id'] = $data['hashed_mobile_ad_id'] ?? null;
        $this->container['uuid_c1'] = $data['uuid_c1'] ?? null;
        $this->container['hashed_idfv'] = $data['hashed_idfv'] ?? null;
        $this->container['hashed_phone_number'] = $data['hashed_phone_number'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['hashed_ip_address'] = $data['hashed_ip_address'] ?? null;
        $this->container['item_category'] = $data['item_category'] ?? null;
        $this->container['item_ids'] = $data['item_ids'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['number_items'] = $data['number_items'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['client_dedup_id'] = $data['client_dedup_id'] ?? null;
        $this->container['data_use'] = $data['data_use'] ?? null;
        $this->container['search_string'] = $data['search_string'] ?? null;
        $this->container['page_url'] = $data['page_url'] ?? null;
        $this->container['sign_up_method'] = $data['sign_up_method'] ?? null;
        $this->container['hashed_first_name_sha'] = $data['hashed_first_name_sha'] ?? null;
        $this->container['hashed_first_name_sdx'] = $data['hashed_first_name_sdx'] ?? null;
        $this->container['hashed_middle_name_sha'] = $data['hashed_middle_name_sha'] ?? null;
        $this->container['hashed_middle_name_sdx'] = $data['hashed_middle_name_sdx'] ?? null;
        $this->container['hashed_last_name_sha'] = $data['hashed_last_name_sha'] ?? null;
        $this->container['hashed_last_name_sdx'] = $data['hashed_last_name_sdx'] ?? null;
        $this->container['hashed_city_sha'] = $data['hashed_city_sha'] ?? null;
        $this->container['hashed_city_sdx'] = $data['hashed_city_sdx'] ?? null;
        $this->container['hashed_state_sha'] = $data['hashed_state_sha'] ?? null;
        $this->container['hashed_state_sdx'] = $data['hashed_state_sdx'] ?? null;
        $this->container['hashed_zip'] = $data['hashed_zip'] ?? null;
        $this->container['hashed_dob_month'] = $data['hashed_dob_month'] ?? null;
        $this->container['hashed_dob_day'] = $data['hashed_dob_day'] ?? null;
        $this->container['integration'] = $data['integration'] ?? null;
        $this->container['click_id'] = $data['click_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets pixel_id
     *
     * @return string|null
     */
    public function getPixelId()
    {
        return $this->container['pixel_id'];
    }

    /**
     * Sets pixel_id
     *
     * @param string|null $pixel_id pixel_id
     *
     * @return self
     */
    public function setPixelId($pixel_id)
    {
        $this->container['pixel_id'] = $pixel_id;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string|null $app_id app_id
     *
     * @return self
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets snap_app_id
     *
     * @return string|null
     */
    public function getSnapAppId()
    {
        return $this->container['snap_app_id'];
    }

    /**
     * Sets snap_app_id
     *
     * @param string|null $snap_app_id snap_app_id
     *
     * @return self
     */
    public function setSnapAppId($snap_app_id)
    {
        $this->container['snap_app_id'] = $snap_app_id;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type event_type
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_conversion_type
     *
     * @return string|null
     */
    public function getEventConversionType()
    {
        return $this->container['event_conversion_type'];
    }

    /**
     * Sets event_conversion_type
     *
     * @param string|null $event_conversion_type event_conversion_type
     *
     * @return self
     */
    public function setEventConversionType($event_conversion_type)
    {
        $this->container['event_conversion_type'] = $event_conversion_type;

        return $this;
    }

    /**
     * Gets event_tag
     *
     * @return string|null
     */
    public function getEventTag()
    {
        return $this->container['event_tag'];
    }

    /**
     * Sets event_tag
     *
     * @param string|null $event_tag event_tag
     *
     * @return self
     */
    public function setEventTag($event_tag)
    {
        $this->container['event_tag'] = $event_tag;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets hashed_email
     *
     * @return string|null
     */
    public function getHashedEmail()
    {
        return $this->container['hashed_email'];
    }

    /**
     * Sets hashed_email
     *
     * @param string|null $hashed_email hashed_email
     *
     * @return self
     */
    public function setHashedEmail($hashed_email)
    {
        $this->container['hashed_email'] = $hashed_email;

        return $this;
    }

    /**
     * Gets hashed_mobile_ad_id
     *
     * @return string|null
     */
    public function getHashedMobileAdId()
    {
        return $this->container['hashed_mobile_ad_id'];
    }

    /**
     * Sets hashed_mobile_ad_id
     *
     * @param string|null $hashed_mobile_ad_id hashed_mobile_ad_id
     *
     * @return self
     */
    public function setHashedMobileAdId($hashed_mobile_ad_id)
    {
        $this->container['hashed_mobile_ad_id'] = $hashed_mobile_ad_id;

        return $this;
    }

    /**
     * Gets uuid_c1
     *
     * @return string|null
     */
    public function getUuidC1()
    {
        return $this->container['uuid_c1'];
    }

    /**
     * Sets uuid_c1
     *
     * @param string|null $uuid_c1 uuid_c1
     *
     * @return self
     */
    public function setUuidC1($uuid_c1)
    {
        $this->container['uuid_c1'] = $uuid_c1;

        return $this;
    }

    /**
     * Gets hashed_idfv
     *
     * @return string|null
     */
    public function getHashedIdfv()
    {
        return $this->container['hashed_idfv'];
    }

    /**
     * Sets hashed_idfv
     *
     * @param string|null $hashed_idfv hashed_idfv
     *
     * @return self
     */
    public function setHashedIdfv($hashed_idfv)
    {
        $this->container['hashed_idfv'] = $hashed_idfv;

        return $this;
    }

    /**
     * Gets hashed_phone_number
     *
     * @return string|null
     */
    public function getHashedPhoneNumber()
    {
        return $this->container['hashed_phone_number'];
    }

    /**
     * Sets hashed_phone_number
     *
     * @param string|null $hashed_phone_number hashed_phone_number
     *
     * @return self
     */
    public function setHashedPhoneNumber($hashed_phone_number)
    {
        $this->container['hashed_phone_number'] = $hashed_phone_number;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent user_agent
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets hashed_ip_address
     *
     * @return string|null
     */
    public function getHashedIpAddress()
    {
        return $this->container['hashed_ip_address'];
    }

    /**
     * Sets hashed_ip_address
     *
     * @param string|null $hashed_ip_address hashed_ip_address
     *
     * @return self
     */
    public function setHashedIpAddress($hashed_ip_address)
    {
        $this->container['hashed_ip_address'] = $hashed_ip_address;

        return $this;
    }

    /**
     * Gets item_category
     *
     * @return string|null
     */
    public function getItemCategory()
    {
        return $this->container['item_category'];
    }

    /**
     * Sets item_category
     *
     * @param string|null $item_category item_category
     *
     * @return self
     */
    public function setItemCategory($item_category)
    {
        $this->container['item_category'] = $item_category;

        return $this;
    }

    /**
     * Gets item_ids
     *
     * @return string|null
     */
    public function getItemIds()
    {
        return $this->container['item_ids'];
    }

    /**
     * Sets item_ids
     *
     * @param string|null $item_ids item_ids
     *
     * @return self
     */
    public function setItemIds($item_ids)
    {
        $this->container['item_ids'] = $item_ids;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets number_items
     *
     * @return string|null
     */
    public function getNumberItems()
    {
        return $this->container['number_items'];
    }

    /**
     * Sets number_items
     *
     * @param string|null $number_items number_items
     *
     * @return self
     */
    public function setNumberItems($number_items)
    {
        $this->container['number_items'] = $number_items;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string|null $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets client_dedup_id
     *
     * @return string|null
     */
    public function getClientDedupId()
    {
        return $this->container['client_dedup_id'];
    }

    /**
     * Sets client_dedup_id
     *
     * @param string|null $client_dedup_id client_dedup_id
     *
     * @return self
     */
    public function setClientDedupId($client_dedup_id)
    {
        $this->container['client_dedup_id'] = $client_dedup_id;

        return $this;
    }

    /**
     * Gets data_use
     *
     * @return string|null
     */
    public function getDataUse()
    {
        return $this->container['data_use'];
    }

    /**
     * Sets data_use
     *
     * @param string|null $data_use data_use
     *
     * @return self
     */
    public function setDataUse($data_use)
    {
        $this->container['data_use'] = $data_use;

        return $this;
    }

    /**
     * Gets search_string
     *
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->container['search_string'];
    }

    /**
     * Sets search_string
     *
     * @param string|null $search_string search_string
     *
     * @return self
     */
    public function setSearchString($search_string)
    {
        $this->container['search_string'] = $search_string;

        return $this;
    }

    /**
     * Gets page_url
     *
     * @return string|null
     */
    public function getPageUrl()
    {
        return $this->container['page_url'];
    }

    /**
     * Sets page_url
     *
     * @param string|null $page_url page_url
     *
     * @return self
     */
    public function setPageUrl($page_url)
    {
        $this->container['page_url'] = $page_url;

        return $this;
    }

    /**
     * Gets sign_up_method
     *
     * @return string|null
     */
    public function getSignUpMethod()
    {
        return $this->container['sign_up_method'];
    }

    /**
     * Sets sign_up_method
     *
     * @param string|null $sign_up_method sign_up_method
     *
     * @return self
     */
    public function setSignUpMethod($sign_up_method)
    {
        $this->container['sign_up_method'] = $sign_up_method;

        return $this;
    }

    /**
     * Gets hashed_first_name_sha
     *
     * @return string|null
     */
    public function getHashedFirstNameSha()
    {
        return $this->container['hashed_first_name_sha'];
    }

    /**
     * Sets hashed_first_name_sha
     *
     * @param string|null $hashed_first_name_sha hashed_first_name_sha
     *
     * @return self
     */
    public function setHashedFirstNameSha($hashed_first_name_sha)
    {
        $this->container['hashed_first_name_sha'] = $hashed_first_name_sha;

        return $this;
    }

    /**
     * Gets hashed_first_name_sdx
     *
     * @return string|null
     */
    public function getHashedFirstNameSdx()
    {
        return $this->container['hashed_first_name_sdx'];
    }

    /**
     * Sets hashed_first_name_sdx
     *
     * @param string|null $hashed_first_name_sdx hashed_first_name_sdx
     *
     * @return self
     */
    public function setHashedFirstNameSdx($hashed_first_name_sdx)
    {
        $this->container['hashed_first_name_sdx'] = $hashed_first_name_sdx;

        return $this;
    }

    /**
     * Gets hashed_middle_name_sha
     *
     * @return string|null
     */
    public function getHashedMiddleNameSha()
    {
        return $this->container['hashed_middle_name_sha'];
    }

    /**
     * Sets hashed_middle_name_sha
     *
     * @param string|null $hashed_middle_name_sha hashed_middle_name_sha
     *
     * @return self
     */
    public function setHashedMiddleNameSha($hashed_middle_name_sha)
    {
        $this->container['hashed_middle_name_sha'] = $hashed_middle_name_sha;

        return $this;
    }

    /**
     * Gets hashed_middle_name_sdx
     *
     * @return string|null
     */
    public function getHashedMiddleNameSdx()
    {
        return $this->container['hashed_middle_name_sdx'];
    }

    /**
     * Sets hashed_middle_name_sdx
     *
     * @param string|null $hashed_middle_name_sdx hashed_middle_name_sdx
     *
     * @return self
     */
    public function setHashedMiddleNameSdx($hashed_middle_name_sdx)
    {
        $this->container['hashed_middle_name_sdx'] = $hashed_middle_name_sdx;

        return $this;
    }

    /**
     * Gets hashed_last_name_sha
     *
     * @return string|null
     */
    public function getHashedLastNameSha()
    {
        return $this->container['hashed_last_name_sha'];
    }

    /**
     * Sets hashed_last_name_sha
     *
     * @param string|null $hashed_last_name_sha hashed_last_name_sha
     *
     * @return self
     */
    public function setHashedLastNameSha($hashed_last_name_sha)
    {
        $this->container['hashed_last_name_sha'] = $hashed_last_name_sha;

        return $this;
    }

    /**
     * Gets hashed_last_name_sdx
     *
     * @return string|null
     */
    public function getHashedLastNameSdx()
    {
        return $this->container['hashed_last_name_sdx'];
    }

    /**
     * Sets hashed_last_name_sdx
     *
     * @param string|null $hashed_last_name_sdx hashed_last_name_sdx
     *
     * @return self
     */
    public function setHashedLastNameSdx($hashed_last_name_sdx)
    {
        $this->container['hashed_last_name_sdx'] = $hashed_last_name_sdx;

        return $this;
    }

    /**
     * Gets hashed_city_sha
     *
     * @return string|null
     */
    public function getHashedCitySha()
    {
        return $this->container['hashed_city_sha'];
    }

    /**
     * Sets hashed_city_sha
     *
     * @param string|null $hashed_city_sha hashed_city_sha
     *
     * @return self
     */
    public function setHashedCitySha($hashed_city_sha)
    {
        $this->container['hashed_city_sha'] = $hashed_city_sha;

        return $this;
    }

    /**
     * Gets hashed_city_sdx
     *
     * @return string|null
     */
    public function getHashedCitySdx()
    {
        return $this->container['hashed_city_sdx'];
    }

    /**
     * Sets hashed_city_sdx
     *
     * @param string|null $hashed_city_sdx hashed_city_sdx
     *
     * @return self
     */
    public function setHashedCitySdx($hashed_city_sdx)
    {
        $this->container['hashed_city_sdx'] = $hashed_city_sdx;

        return $this;
    }

    /**
     * Gets hashed_state_sha
     *
     * @return string|null
     */
    public function getHashedStateSha()
    {
        return $this->container['hashed_state_sha'];
    }

    /**
     * Sets hashed_state_sha
     *
     * @param string|null $hashed_state_sha hashed_state_sha
     *
     * @return self
     */
    public function setHashedStateSha($hashed_state_sha)
    {
        $this->container['hashed_state_sha'] = $hashed_state_sha;

        return $this;
    }

    /**
     * Gets hashed_state_sdx
     *
     * @return string|null
     */
    public function getHashedStateSdx()
    {
        return $this->container['hashed_state_sdx'];
    }

    /**
     * Sets hashed_state_sdx
     *
     * @param string|null $hashed_state_sdx hashed_state_sdx
     *
     * @return self
     */
    public function setHashedStateSdx($hashed_state_sdx)
    {
        $this->container['hashed_state_sdx'] = $hashed_state_sdx;

        return $this;
    }

    /**
     * Gets hashed_zip
     *
     * @return string|null
     */
    public function getHashedZip()
    {
        return $this->container['hashed_zip'];
    }

    /**
     * Sets hashed_zip
     *
     * @param string|null $hashed_zip hashed_zip
     *
     * @return self
     */
    public function setHashedZip($hashed_zip)
    {
        $this->container['hashed_zip'] = $hashed_zip;

        return $this;
    }

    /**
     * Gets hashed_dob_month
     *
     * @return string|null
     */
    public function getHashedDobMonth()
    {
        return $this->container['hashed_dob_month'];
    }

    /**
     * Sets hashed_dob_month
     *
     * @param string|null $hashed_dob_month hashed_dob_month
     *
     * @return self
     */
    public function setHashedDobMonth($hashed_dob_month)
    {
        $this->container['hashed_dob_month'] = $hashed_dob_month;

        return $this;
    }

    /**
     * Gets hashed_dob_day
     *
     * @return string|null
     */
    public function getHashedDobDay()
    {
        return $this->container['hashed_dob_day'];
    }

    /**
     * Sets hashed_dob_day
     *
     * @param string|null $hashed_dob_day hashed_dob_day
     *
     * @return self
     */
    public function setHashedDobDay($hashed_dob_day)
    {
        $this->container['hashed_dob_day'] = $hashed_dob_day;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return string|null
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string|null $integration integration
     *
     * @return self
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets click_id
     *
     * @return string|null
     */
    public function getClickId()
    {
        return $this->container['click_id'];
    }

    /**
     * Sets click_id
     *
     * @param string|null $click_id click_id
     *
     * @return self
     */
    public function setClickId($click_id)
    {
        $this->container['click_id'] = $click_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


