<?php

/**
 * AxytosCommonPublicAPIModelsCommonDeliveryAddress
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
 * AxytosCommonPublicAPIModelsCommonDeliveryAddress Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 * @internal
 */
class AxytosCommonPublicAPIModelsCommonDeliveryAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Axytos.Common.PublicAPI.Models.Common.DeliveryAddress';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['salutation' => 'string', 'company' => 'string', 'firstname' => 'string', 'lastname' => 'string', 'zip_code' => 'string', 'city' => 'string', 'region' => 'string', 'country' => 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIEnumsCountryCode', 'vat_id' => 'string', 'address_line1' => 'string', 'address_line2' => 'string', 'address_line3' => 'string', 'address_line4' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['salutation' => null, 'company' => null, 'firstname' => null, 'lastname' => null, 'zip_code' => null, 'city' => null, 'region' => null, 'country' => null, 'vat_id' => null, 'address_line1' => null, 'address_line2' => null, 'address_line3' => null, 'address_line4' => null];
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
    protected static $attributeMap = ['salutation' => 'salutation', 'company' => 'company', 'firstname' => 'firstname', 'lastname' => 'lastname', 'zip_code' => 'zipCode', 'city' => 'city', 'region' => 'region', 'country' => 'country', 'vat_id' => 'vatId', 'address_line1' => 'addressLine1', 'address_line2' => 'addressLine2', 'address_line3' => 'addressLine3', 'address_line4' => 'addressLine4'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['salutation' => 'setSalutation', 'company' => 'setCompany', 'firstname' => 'setFirstname', 'lastname' => 'setLastname', 'zip_code' => 'setZipCode', 'city' => 'setCity', 'region' => 'setRegion', 'country' => 'setCountry', 'vat_id' => 'setVatId', 'address_line1' => 'setAddressLine1', 'address_line2' => 'setAddressLine2', 'address_line3' => 'setAddressLine3', 'address_line4' => 'setAddressLine4'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['salutation' => 'getSalutation', 'company' => 'getCompany', 'firstname' => 'getFirstname', 'lastname' => 'getLastname', 'zip_code' => 'getZipCode', 'city' => 'getCity', 'region' => 'getRegion', 'country' => 'getCountry', 'vat_id' => 'getVatId', 'address_line1' => 'getAddressLine1', 'address_line2' => 'getAddressLine2', 'address_line3' => 'getAddressLine3', 'address_line4' => 'getAddressLine4'];
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
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['address_line4'] = isset($data['address_line4']) ? $data['address_line4'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }
    /**
     * Sets salutation
     *
     * @param string|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;
        return $this;
    }
    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }
    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }
    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }
    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;
        return $this;
    }
    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }
    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;
        return $this;
    }
    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }
    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;
        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }
    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }
    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }
    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }
    /**
     * Gets country
     *
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsCountryCode
     */
    public function getCountry()
    {
        return $this->container['country'];
    }
    /**
     * Sets country
     *
     * @param \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsCountryCode $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }
    /**
     * Gets vat_id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }
    /**
     * Sets vat_id
     *
     * @param string|null $vat_id vat_id
     *
     * @return self
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;
        return $this;
    }
    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }
    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;
        return $this;
    }
    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }
    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;
        return $this;
    }
    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }
    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 address_line3
     *
     * @return self
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;
        return $this;
    }
    /**
     * Gets address_line4
     *
     * @return string|null
     */
    public function getAddressLine4()
    {
        return $this->container['address_line4'];
    }
    /**
     * Sets address_line4
     *
     * @param string|null $address_line4 address_line4
     *
     * @return self
     */
    public function setAddressLine4($address_line4)
    {
        $this->container['address_line4'] = $address_line4;
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
