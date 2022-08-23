<?php
/**
 * AxytosCommonPublicAPITransactionTransactionMetadata
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
 * AxytosCommonPublicAPITransactionTransactionMetadata Class Doc Comment
 *
 * @category Class
 * @package  Axytos\FinancialServicesAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosCommonPublicAPITransactionTransactionMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Axytos.Common.PublicAPI.Transaction.TransactionMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_id' => 'string',
        'transaction_info_signature' => 'string',
        'transaction_timestamp' => 'string',
        'transaction_expiration_timestamp' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_id' => null,
        'transaction_info_signature' => null,
        'transaction_timestamp' => 'date-time',
        'transaction_expiration_timestamp' => 'date-time'
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
        'transaction_id' => 'transactionId',
        'transaction_info_signature' => 'transactionInfoSignature',
        'transaction_timestamp' => 'transactionTimestamp',
        'transaction_expiration_timestamp' => 'transactionExpirationTimestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'transaction_info_signature' => 'setTransactionInfoSignature',
        'transaction_timestamp' => 'setTransactionTimestamp',
        'transaction_expiration_timestamp' => 'setTransactionExpirationTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'transaction_info_signature' => 'getTransactionInfoSignature',
        'transaction_timestamp' => 'getTransactionTimestamp',
        'transaction_expiration_timestamp' => 'getTransactionExpirationTimestamp'
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
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['transaction_info_signature'] = $data['transaction_info_signature'] ?? null;
        $this->container['transaction_timestamp'] = $data['transaction_timestamp'] ?? null;
        $this->container['transaction_expiration_timestamp'] = $data['transaction_expiration_timestamp'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['transaction_info_signature'] === null) {
            $invalidProperties[] = "'transaction_info_signature' can't be null";
        }
        if ($this->container['transaction_timestamp'] === null) {
            $invalidProperties[] = "'transaction_timestamp' can't be null";
        }
        if ($this->container['transaction_expiration_timestamp'] === null) {
            $invalidProperties[] = "'transaction_expiration_timestamp' can't be null";
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
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_info_signature
     *
     * @return string
     */
    public function getTransactionInfoSignature()
    {
        return $this->container['transaction_info_signature'];
    }

    /**
     * Sets transaction_info_signature
     *
     * @param string $transaction_info_signature transaction_info_signature
     *
     * @return self
     */
    public function setTransactionInfoSignature($transaction_info_signature)
    {
        $this->container['transaction_info_signature'] = $transaction_info_signature;

        return $this;
    }

    /**
     * Gets transaction_timestamp
     *
     * @return string
     */
    public function getTransactionTimestamp()
    {
        return $this->container['transaction_timestamp'];
    }

    /**
     * Sets transaction_timestamp
     *
     * @param string $transaction_timestamp transaction_timestamp
     *
     * @return self
     */
    public function setTransactionTimestamp($transaction_timestamp)
    {
        $this->container['transaction_timestamp'] = $transaction_timestamp;

        return $this;
    }

    /**
     * Gets transaction_expiration_timestamp
     *
     * @return string
     */
    public function getTransactionExpirationTimestamp()
    {
        return $this->container['transaction_expiration_timestamp'];
    }

    /**
     * Sets transaction_expiration_timestamp
     *
     * @param string $transaction_expiration_timestamp transaction_expiration_timestamp
     *
     * @return self
     */
    public function setTransactionExpirationTimestamp($transaction_expiration_timestamp)
    {
        $this->container['transaction_expiration_timestamp'] = $transaction_expiration_timestamp;

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


