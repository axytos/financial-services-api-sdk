<?php

/**
 * AxytosCommonModelsOrderRefundPositionModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Axytos API
 *
 * Note: Please provide proper values in \"Try it out\". See schemas and endpoint description for possible values. <br/>DateTimes should always be provided in UTC and with the timezone attached, see ISO-8601 (example: 2021-10-13T20:00:30Z)
 *
 * The version of the OpenAPI document: v1
 * Contact:
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace Axytos\FinancialServices\OpenAPI\Client\Model;

use ArrayAccess;
use Axytos\FinancialServices\OpenAPI\Client\ObjectSerializer;
/**
 * AxytosCommonModelsOrderRefundPositionModel Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosCommonModelsOrderRefundPositionModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Common.Models.Order.RefundPositionModel';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['product_id' => 'string', 'net_refund_total' => 'double', 'gross_refund_total' => 'double'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['product_id' => null, 'net_refund_total' => 'double', 'gross_refund_total' => 'double'];
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
    protected static $attributeMap = ['product_id' => 'productId', 'net_refund_total' => 'netRefundTotal', 'gross_refund_total' => 'grossRefundTotal'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['product_id' => 'setProductId', 'net_refund_total' => 'setNetRefundTotal', 'gross_refund_total' => 'setGrossRefundTotal'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['product_id' => 'getProductId', 'net_refund_total' => 'getNetRefundTotal', 'gross_refund_total' => 'getGrossRefundTotal'];
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['net_refund_total'] = isset($data['net_refund_total']) ? $data['net_refund_total'] : null;
        $this->container['gross_refund_total'] = isset($data['gross_refund_total']) ? $data['gross_refund_total'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['net_refund_total'] === null) {
            $invalidProperties[] = "'net_refund_total' can't be null";
        }
        if ($this->container['net_refund_total'] < 0) {
            $invalidProperties[] = "invalid value for 'net_refund_total', must be bigger than or equal to 0.";
        }
        if ($this->container['gross_refund_total'] === null) {
            $invalidProperties[] = "'gross_refund_total' can't be null";
        }
        if ($this->container['gross_refund_total'] < 0) {
            $invalidProperties[] = "invalid value for 'gross_refund_total', must be bigger than or equal to 0.";
        }
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
        return \count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }
    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;
        return $this;
    }
    /**
     * Gets net_refund_total
     *
     * @return double
     */
    public function getNetRefundTotal()
    {
        return $this->container['net_refund_total'];
    }
    /**
     * Sets net_refund_total
     *
     * @param double $net_refund_total net_refund_total
     *
     * @return self
     */
    public function setNetRefundTotal($net_refund_total)
    {
        if ($net_refund_total < 0) {
            throw new \InvalidArgumentException('invalid value for $net_refund_total when calling AxytosCommonModelsOrderRefundPositionModel., must be bigger than or equal to 0.');
        }
        $this->container['net_refund_total'] = $net_refund_total;
        return $this;
    }
    /**
     * Gets gross_refund_total
     *
     * @return double
     */
    public function getGrossRefundTotal()
    {
        return $this->container['gross_refund_total'];
    }
    /**
     * Sets gross_refund_total
     *
     * @param double $gross_refund_total gross_refund_total
     *
     * @return self
     */
    public function setGrossRefundTotal($gross_refund_total)
    {
        if ($gross_refund_total < 0) {
            throw new \InvalidArgumentException('invalid value for $gross_refund_total when calling AxytosCommonModelsOrderRefundPositionModel., must be bigger than or equal to 0.');
        }
        $this->container['gross_refund_total'] = $gross_refund_total;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (\is_null($offset)) {
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), \JSON_PRETTY_PRINT);
    }
    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
