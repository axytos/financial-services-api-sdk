<?php

/**
 * AxytosApiModelsDebitorCreationModel
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
 * AxytosApiModelsDebitorCreationModel Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 * @internal
 */
class AxytosApiModelsDebitorCreationModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Api.Models.DebitorCreationModel';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['name' => 'string', 'external_customer_id' => 'string', 'language' => 'string', 'customer_type' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonEnumsCustomerType', 'payment_type' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonEnumsPaymentType', 'invoice_address' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosApiModelsAddressCreationModel', 'direct_debit_bank_account' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosApiModelsBankAccountCreationModel', 'due_date_offset_days' => 'int', 'direct_debit_mandate_reference' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['name' => null, 'external_customer_id' => null, 'language' => null, 'customer_type' => null, 'payment_type' => null, 'invoice_address' => null, 'direct_debit_bank_account' => null, 'due_date_offset_days' => 'int32', 'direct_debit_mandate_reference' => null];
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
    protected static $attributeMap = ['name' => 'name', 'external_customer_id' => 'externalCustomerId', 'language' => 'language', 'customer_type' => 'customerType', 'payment_type' => 'paymentType', 'invoice_address' => 'invoiceAddress', 'direct_debit_bank_account' => 'directDebitBankAccount', 'due_date_offset_days' => 'dueDateOffsetDays', 'direct_debit_mandate_reference' => 'directDebitMandateReference'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['name' => 'setName', 'external_customer_id' => 'setExternalCustomerId', 'language' => 'setLanguage', 'customer_type' => 'setCustomerType', 'payment_type' => 'setPaymentType', 'invoice_address' => 'setInvoiceAddress', 'direct_debit_bank_account' => 'setDirectDebitBankAccount', 'due_date_offset_days' => 'setDueDateOffsetDays', 'direct_debit_mandate_reference' => 'setDirectDebitMandateReference'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['name' => 'getName', 'external_customer_id' => 'getExternalCustomerId', 'language' => 'getLanguage', 'customer_type' => 'getCustomerType', 'payment_type' => 'getPaymentType', 'invoice_address' => 'getInvoiceAddress', 'direct_debit_bank_account' => 'getDirectDebitBankAccount', 'due_date_offset_days' => 'getDueDateOffsetDays', 'direct_debit_mandate_reference' => 'getDirectDebitMandateReference'];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_customer_id'] = isset($data['external_customer_id']) ? $data['external_customer_id'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['customer_type'] = isset($data['customer_type']) ? $data['customer_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['invoice_address'] = isset($data['invoice_address']) ? $data['invoice_address'] : null;
        $this->container['direct_debit_bank_account'] = isset($data['direct_debit_bank_account']) ? $data['direct_debit_bank_account'] : null;
        $this->container['due_date_offset_days'] = isset($data['due_date_offset_days']) ? $data['due_date_offset_days'] : null;
        $this->container['direct_debit_mandate_reference'] = isset($data['direct_debit_mandate_reference']) ? $data['direct_debit_mandate_reference'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['external_customer_id'] === null) {
            $invalidProperties[] = "'external_customer_id' can't be null";
        }
        if ($this->container['customer_type'] === null) {
            $invalidProperties[] = "'customer_type' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }
    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    /**
     * Gets external_customer_id
     *
     * @return string
     */
    public function getExternalCustomerId()
    {
        return $this->container['external_customer_id'];
    }
    /**
     * Sets external_customer_id
     *
     * @param string $external_customer_id external_customer_id
     *
     * @return self
     */
    public function setExternalCustomerId($external_customer_id)
    {
        $this->container['external_customer_id'] = $external_customer_id;
        return $this;
    }
    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }
    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }
    /**
     * Gets customer_type
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsCustomerType
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }
    /**
     * Sets customer_type
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsCustomerType $customer_type customer_type
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        $this->container['customer_type'] = $customer_type;
        return $this;
    }
    /**
     * Gets payment_type
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }
    /**
     * Sets payment_type
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsPaymentType $payment_type payment_type
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;
        return $this;
    }
    /**
     * Gets invoice_address
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsAddressCreationModel|null
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }
    /**
     * Sets invoice_address
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsAddressCreationModel|null $invoice_address invoice_address
     *
     * @return self
     */
    public function setInvoiceAddress($invoice_address)
    {
        $this->container['invoice_address'] = $invoice_address;
        return $this;
    }
    /**
     * Gets direct_debit_bank_account
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsBankAccountCreationModel|null
     */
    public function getDirectDebitBankAccount()
    {
        return $this->container['direct_debit_bank_account'];
    }
    /**
     * Sets direct_debit_bank_account
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsBankAccountCreationModel|null $direct_debit_bank_account direct_debit_bank_account
     *
     * @return self
     */
    public function setDirectDebitBankAccount($direct_debit_bank_account)
    {
        $this->container['direct_debit_bank_account'] = $direct_debit_bank_account;
        return $this;
    }
    /**
     * Gets due_date_offset_days
     *
     * @return int|null
     */
    public function getDueDateOffsetDays()
    {
        return $this->container['due_date_offset_days'];
    }
    /**
     * Sets due_date_offset_days
     *
     * @param int|null $due_date_offset_days due_date_offset_days
     *
     * @return self
     */
    public function setDueDateOffsetDays($due_date_offset_days)
    {
        $this->container['due_date_offset_days'] = $due_date_offset_days;
        return $this;
    }
    /**
     * Gets direct_debit_mandate_reference
     *
     * @return string|null
     */
    public function getDirectDebitMandateReference()
    {
        return $this->container['direct_debit_mandate_reference'];
    }
    /**
     * Sets direct_debit_mandate_reference
     *
     * @param string|null $direct_debit_mandate_reference direct_debit_mandate_reference
     *
     * @return self
     */
    public function setDirectDebitMandateReference($direct_debit_mandate_reference)
    {
        $this->container['direct_debit_mandate_reference'] = $direct_debit_mandate_reference;
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
