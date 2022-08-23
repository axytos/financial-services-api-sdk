<?php
/**
 * AxytosApiModelsReturnRequestModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Axytos\FinancialServicesAPI\Client
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

namespace Axytos\FinancialServicesAPI\Client\Model;

use \ArrayAccess;
use \Axytos\FinancialServicesAPI\Client\ObjectSerializer;

/**
 * AxytosApiModelsReturnRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Axytos\FinancialServicesAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosApiModelsReturnRequestModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Axytos.Api.Models.ReturnRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_order_id' => 'string',
        'external_sub_order_id' => 'string',
        'return_date' => 'string',
        'positions' => '\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonModelsOrderReturnPositionModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_order_id' => null,
        'external_sub_order_id' => null,
        'return_date' => 'date-time',
        'positions' => null
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
        'external_order_id' => 'externalOrderId',
        'external_sub_order_id' => 'externalSubOrderId',
        'return_date' => 'returnDate',
        'positions' => 'positions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_order_id' => 'setExternalOrderId',
        'external_sub_order_id' => 'setExternalSubOrderId',
        'return_date' => 'setReturnDate',
        'positions' => 'setPositions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_order_id' => 'getExternalOrderId',
        'external_sub_order_id' => 'getExternalSubOrderId',
        'return_date' => 'getReturnDate',
        'positions' => 'getPositions'
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
        $this->container['external_order_id'] = $data['external_order_id'] ?? null;
        $this->container['external_sub_order_id'] = $data['external_sub_order_id'] ?? null;
        $this->container['return_date'] = $data['return_date'] ?? null;
        $this->container['positions'] = $data['positions'] ?? null;
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
        if ($this->container['positions'] === null) {
            $invalidProperties[] = "'positions' can't be null";
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
     * Gets return_date
     *
     * @return string|null
     */
    public function getReturnDate()
    {
        return $this->container['return_date'];
    }

    /**
     * Sets return_date
     *
     * @param string|null $return_date return_date
     *
     * @return self
     */
    public function setReturnDate($return_date)
    {
        $this->container['return_date'] = $return_date;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonModelsOrderReturnPositionModel[]
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonModelsOrderReturnPositionModel[] $positions positions
     *
     * @return self
     */
    public function setPositions($positions)
    {
        $this->container['positions'] = $positions;

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


