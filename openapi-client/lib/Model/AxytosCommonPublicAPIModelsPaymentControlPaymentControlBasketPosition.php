<?php

/**
 * AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition
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
 * AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Common.PublicAPI.Models.PaymentControl.PaymentControlBasketPosition';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['product_id' => 'string', 'product_name' => 'string', 'product_category' => 'string', 'quantity' => 'int', 'tax_percent' => 'double', 'net_position_total' => 'double', 'gross_position_total' => 'double'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['product_id' => null, 'product_name' => null, 'product_category' => null, 'quantity' => 'int32', 'tax_percent' => 'double', 'net_position_total' => 'double', 'gross_position_total' => 'double'];
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
    protected static $attributeMap = ['product_id' => 'productId', 'product_name' => 'productName', 'product_category' => 'productCategory', 'quantity' => 'quantity', 'tax_percent' => 'taxPercent', 'net_position_total' => 'netPositionTotal', 'gross_position_total' => 'grossPositionTotal'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['product_id' => 'setProductId', 'product_name' => 'setProductName', 'product_category' => 'setProductCategory', 'quantity' => 'setQuantity', 'tax_percent' => 'setTaxPercent', 'net_position_total' => 'setNetPositionTotal', 'gross_position_total' => 'setGrossPositionTotal'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['product_id' => 'getProductId', 'product_name' => 'getProductName', 'product_category' => 'getProductCategory', 'quantity' => 'getQuantity', 'tax_percent' => 'getTaxPercent', 'net_position_total' => 'getNetPositionTotal', 'gross_position_total' => 'getGrossPositionTotal'];
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
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['tax_percent'] = isset($data['tax_percent']) ? $data['tax_percent'] : null;
        $this->container['net_position_total'] = isset($data['net_position_total']) ? $data['net_position_total'] : null;
        $this->container['gross_position_total'] = isset($data['gross_position_total']) ? $data['gross_position_total'] : null;
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
        return \count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }
    /**
     * Sets product_id
     *
     * @param string|null $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;
        return $this;
    }
    /**
     * Gets product_name
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }
    /**
     * Sets product_name
     *
     * @param string|null $product_name product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;
        return $this;
    }
    /**
     * Gets product_category
     *
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }
    /**
     * Sets product_category
     *
     * @param string|null $product_category product_category
     *
     * @return self
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;
        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }
    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }
    /**
     * Gets tax_percent
     *
     * @return double|null
     */
    public function getTaxPercent()
    {
        return $this->container['tax_percent'];
    }
    /**
     * Sets tax_percent
     *
     * @param double|null $tax_percent tax_percent
     *
     * @return self
     */
    public function setTaxPercent($tax_percent)
    {
        $this->container['tax_percent'] = $tax_percent;
        return $this;
    }
    /**
     * Gets net_position_total
     *
     * @return double|null
     */
    public function getNetPositionTotal()
    {
        return $this->container['net_position_total'];
    }
    /**
     * Sets net_position_total
     *
     * @param double|null $net_position_total net_position_total
     *
     * @return self
     */
    public function setNetPositionTotal($net_position_total)
    {
        $this->container['net_position_total'] = $net_position_total;
        return $this;
    }
    /**
     * Gets gross_position_total
     *
     * @return double|null
     */
    public function getGrossPositionTotal()
    {
        return $this->container['gross_position_total'];
    }
    /**
     * Sets gross_position_total
     *
     * @param double|null $gross_position_total gross_position_total
     *
     * @return self
     */
    public function setGrossPositionTotal($gross_position_total)
    {
        $this->container['gross_position_total'] = $gross_position_total;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
