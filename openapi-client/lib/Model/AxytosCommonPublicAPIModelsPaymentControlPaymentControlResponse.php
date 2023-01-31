<?php

/**
 * AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse
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
 * AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Common.PublicAPI.Models.PaymentControl.PaymentControlResponse';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['approved_payment_type_securities' => '\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIEnumsPaymentTypeSecurity[]', 'process_id' => 'string', 'decision' => 'string', 'transaction_metadata' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPITransactionTransactionMetadata', 'step' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['approved_payment_type_securities' => null, 'process_id' => null, 'decision' => null, 'transaction_metadata' => null, 'step' => null];
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
    protected static $attributeMap = ['approved_payment_type_securities' => 'approvedPaymentTypeSecurities', 'process_id' => 'processId', 'decision' => 'decision', 'transaction_metadata' => 'transactionMetadata', 'step' => 'step'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['approved_payment_type_securities' => 'setApprovedPaymentTypeSecurities', 'process_id' => 'setProcessId', 'decision' => 'setDecision', 'transaction_metadata' => 'setTransactionMetadata', 'step' => 'setStep'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['approved_payment_type_securities' => 'getApprovedPaymentTypeSecurities', 'process_id' => 'getProcessId', 'decision' => 'getDecision', 'transaction_metadata' => 'getTransactionMetadata', 'step' => 'getStep'];
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
        $this->container['approved_payment_type_securities'] = isset($data['approved_payment_type_securities']) ? $data['approved_payment_type_securities'] : null;
        $this->container['process_id'] = isset($data['process_id']) ? $data['process_id'] : null;
        $this->container['decision'] = isset($data['decision']) ? $data['decision'] : null;
        $this->container['transaction_metadata'] = isset($data['transaction_metadata']) ? $data['transaction_metadata'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['approved_payment_type_securities'] === null) {
            $invalidProperties[] = "'approved_payment_type_securities' can't be null";
        }
        if ($this->container['process_id'] === null) {
            $invalidProperties[] = "'process_id' can't be null";
        }
        if ($this->container['decision'] === null) {
            $invalidProperties[] = "'decision' can't be null";
        }
        if ($this->container['transaction_metadata'] === null) {
            $invalidProperties[] = "'transaction_metadata' can't be null";
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
     * Gets approved_payment_type_securities
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsPaymentTypeSecurity[]
     */
    public function getApprovedPaymentTypeSecurities()
    {
        return $this->container['approved_payment_type_securities'];
    }
    /**
     * Sets approved_payment_type_securities
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsPaymentTypeSecurity[] $approved_payment_type_securities approved_payment_type_securities
     *
     * @return self
     */
    public function setApprovedPaymentTypeSecurities($approved_payment_type_securities)
    {
        $this->container['approved_payment_type_securities'] = $approved_payment_type_securities;
        return $this;
    }
    /**
     * Gets process_id
     *
     * @return string
     */
    public function getProcessId()
    {
        return $this->container['process_id'];
    }
    /**
     * Sets process_id
     *
     * @param string $process_id process_id
     *
     * @return self
     */
    public function setProcessId($process_id)
    {
        $this->container['process_id'] = $process_id;
        return $this;
    }
    /**
     * Gets decision
     *
     * @return string
     */
    public function getDecision()
    {
        return $this->container['decision'];
    }
    /**
     * Sets decision
     *
     * @param string $decision decision
     *
     * @return self
     */
    public function setDecision($decision)
    {
        $this->container['decision'] = $decision;
        return $this;
    }
    /**
     * Gets transaction_metadata
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPITransactionTransactionMetadata
     */
    public function getTransactionMetadata()
    {
        return $this->container['transaction_metadata'];
    }
    /**
     * Sets transaction_metadata
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPITransactionTransactionMetadata $transaction_metadata transaction_metadata
     *
     * @return self
     */
    public function setTransactionMetadata($transaction_metadata)
    {
        $this->container['transaction_metadata'] = $transaction_metadata;
        return $this;
    }
    /**
     * Gets step
     *
     * @return string|null
     */
    public function getStep()
    {
        return $this->container['step'];
    }
    /**
     * Sets step
     *
     * @param string|null $step step
     *
     * @return self
     */
    public function setStep($step)
    {
        $this->container['step'] = $step;
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
