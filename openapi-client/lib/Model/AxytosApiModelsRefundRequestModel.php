<?php

/**
 * AxytosApiModelsRefundRequestModel
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
 * AxytosApiModelsRefundRequestModel Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosApiModelsRefundRequestModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Api.Models.RefundRequestModel';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['external_order_id' => 'string', 'refund_date' => 'string', 'original_invoice_number' => 'string', 'external_sub_order_id' => 'string', 'basket' => 'Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundBasket'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['external_order_id' => null, 'refund_date' => 'date-time', 'original_invoice_number' => null, 'external_sub_order_id' => null, 'basket' => null];
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
    protected static $attributeMap = ['external_order_id' => 'externalOrderId', 'refund_date' => 'refundDate', 'original_invoice_number' => 'originalInvoiceNumber', 'external_sub_order_id' => 'externalSubOrderId', 'basket' => 'basket'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['external_order_id' => 'setExternalOrderId', 'refund_date' => 'setRefundDate', 'original_invoice_number' => 'setOriginalInvoiceNumber', 'external_sub_order_id' => 'setExternalSubOrderId', 'basket' => 'setBasket'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['external_order_id' => 'getExternalOrderId', 'refund_date' => 'getRefundDate', 'original_invoice_number' => 'getOriginalInvoiceNumber', 'external_sub_order_id' => 'getExternalSubOrderId', 'basket' => 'getBasket'];
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
        $this->container['external_order_id'] = isset($data['external_order_id']) ? $data['external_order_id'] : null;
        $this->container['refund_date'] = isset($data['refund_date']) ? $data['refund_date'] : null;
        $this->container['original_invoice_number'] = isset($data['original_invoice_number']) ? $data['original_invoice_number'] : null;
        $this->container['external_sub_order_id'] = isset($data['external_sub_order_id']) ? $data['external_sub_order_id'] : null;
        $this->container['basket'] = isset($data['basket']) ? $data['basket'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['external_order_id'] === null) {
            $invalidProperties[] = "'external_order_id' can't be null";
        }
        if ($this->container['original_invoice_number'] === null) {
            $invalidProperties[] = "'original_invoice_number' can't be null";
        }
        if ($this->container['basket'] === null) {
            $invalidProperties[] = "'basket' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets external_order_id
     *
     * @return string
     */
    public function getExternalOrderId()
    {
        return $this->container['external_order_id'];
    }
    /**
     * Sets external_order_id
     *
     * @param string $external_order_id external_order_id
     *
     * @return self
     */
    public function setExternalOrderId($external_order_id)
    {
        $this->container['external_order_id'] = $external_order_id;
        return $this;
    }
    /**
     * Gets refund_date
     *
     * @return string|null
     */
    public function getRefundDate()
    {
        return $this->container['refund_date'];
    }
    /**
     * Sets refund_date
     *
     * @param string|null $refund_date refund_date
     *
     * @return self
     */
    public function setRefundDate($refund_date)
    {
        $this->container['refund_date'] = $refund_date;
        return $this;
    }
    /**
     * Gets original_invoice_number
     *
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->container['original_invoice_number'];
    }
    /**
     * Sets original_invoice_number
     *
     * @param string $original_invoice_number original_invoice_number
     *
     * @return self
     */
    public function setOriginalInvoiceNumber($original_invoice_number)
    {
        $this->container['original_invoice_number'] = $original_invoice_number;
        return $this;
    }
    /**
     * Gets external_sub_order_id
     *
     * @return string|null
     */
    public function getExternalSubOrderId()
    {
        return $this->container['external_sub_order_id'];
    }
    /**
     * Sets external_sub_order_id
     *
     * @param string|null $external_sub_order_id external_sub_order_id
     *
     * @return self
     */
    public function setExternalSubOrderId($external_sub_order_id)
    {
        $this->container['external_sub_order_id'] = $external_sub_order_id;
        return $this;
    }
    /**
     * Gets basket
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundBasket
     */
    public function getBasket()
    {
        return $this->container['basket'];
    }
    /**
     * Sets basket
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundBasket $basket basket
     *
     * @return self
     */
    public function setBasket($basket)
    {
        $this->container['basket'] = $basket;
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
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), \JSON_PRETTY_PRINT);
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
