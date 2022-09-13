<?php
/**
 * ValidatedFieldsItems
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
 * ValidatedFieldsItems Class Doc Comment
 *
 * @category Class
 * @package  SnapBusinessSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ValidatedFieldsItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'validated_fields_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pixel_id' => 'string',
        'snap_app_id' => 'string',
        'currency' => 'string',
        'price' => 'string',
        'event_conversion_type' => 'string',
        'event_type' => 'string'
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
        'snap_app_id' => null,
        'currency' => null,
        'price' => null,
        'event_conversion_type' => null,
        'event_type' => null
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
        'snap_app_id' => 'snap_app_id',
        'currency' => 'currency',
        'price' => 'price',
        'event_conversion_type' => 'event_conversion_type',
        'event_type' => 'event_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pixel_id' => 'setPixelId',
        'snap_app_id' => 'setSnapAppId',
        'currency' => 'setCurrency',
        'price' => 'setPrice',
        'event_conversion_type' => 'setEventConversionType',
        'event_type' => 'setEventType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pixel_id' => 'getPixelId',
        'snap_app_id' => 'getSnapAppId',
        'currency' => 'getCurrency',
        'price' => 'getPrice',
        'event_conversion_type' => 'getEventConversionType',
        'event_type' => 'getEventType'
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
        $this->container['snap_app_id'] = $data['snap_app_id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['event_conversion_type'] = $data['event_conversion_type'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
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


