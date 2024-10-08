<?php

/**
 * AxytosCommonDebitorCustomerData
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
 * AxytosCommonDebitorCustomerData Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AxytosCommonDebitorCustomerData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Common.Debitor.CustomerData';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['external_customer_id' => 'string', 'language' => 'string', 'date_of_birth' => 'string', 'gender' => 'Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsGender', 'email' => 'string', 'fix_net_phone_number' => 'string', 'mobile_phone_number' => 'string', 'company' => 'Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonDebitorCompany'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['external_customer_id' => null, 'language' => null, 'date_of_birth' => 'date-time', 'gender' => null, 'email' => null, 'fix_net_phone_number' => null, 'mobile_phone_number' => null, 'company' => null];
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
    protected static $attributeMap = ['external_customer_id' => 'externalCustomerId', 'language' => 'language', 'date_of_birth' => 'dateOfBirth', 'gender' => 'gender', 'email' => 'email', 'fix_net_phone_number' => 'fixNetPhoneNumber', 'mobile_phone_number' => 'mobilePhoneNumber', 'company' => 'company'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['external_customer_id' => 'setExternalCustomerId', 'language' => 'setLanguage', 'date_of_birth' => 'setDateOfBirth', 'gender' => 'setGender', 'email' => 'setEmail', 'fix_net_phone_number' => 'setFixNetPhoneNumber', 'mobile_phone_number' => 'setMobilePhoneNumber', 'company' => 'setCompany'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['external_customer_id' => 'getExternalCustomerId', 'language' => 'getLanguage', 'date_of_birth' => 'getDateOfBirth', 'gender' => 'getGender', 'email' => 'getEmail', 'fix_net_phone_number' => 'getFixNetPhoneNumber', 'mobile_phone_number' => 'getMobilePhoneNumber', 'company' => 'getCompany'];
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
        $this->container['external_customer_id'] = isset($data['external_customer_id']) ? $data['external_customer_id'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fix_net_phone_number'] = isset($data['fix_net_phone_number']) ? $data['fix_net_phone_number'] : null;
        $this->container['mobile_phone_number'] = isset($data['mobile_phone_number']) ? $data['mobile_phone_number'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
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
     * Gets external_customer_id
     *
     * @return string|null
     */
    public function getExternalCustomerId()
    {
        return $this->container['external_customer_id'];
    }
    /**
     * Sets external_customer_id
     *
     * @param string|null $external_customer_id external_customer_id
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
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }
    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;
        return $this;
    }
    /**
     * Gets gender
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsGender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }
    /**
     * Sets gender
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsGender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;
        return $this;
    }
    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }
    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }
    /**
     * Gets fix_net_phone_number
     *
     * @return string|null
     */
    public function getFixNetPhoneNumber()
    {
        return $this->container['fix_net_phone_number'];
    }
    /**
     * Sets fix_net_phone_number
     *
     * @param string|null $fix_net_phone_number fix_net_phone_number
     *
     * @return self
     */
    public function setFixNetPhoneNumber($fix_net_phone_number)
    {
        $this->container['fix_net_phone_number'] = $fix_net_phone_number;
        return $this;
    }
    /**
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }
    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number mobile_phone_number
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        $this->container['mobile_phone_number'] = $mobile_phone_number;
        return $this;
    }
    /**
     * Gets company
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonDebitorCompany|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }
    /**
     * Sets company
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonDebitorCompany|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
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
