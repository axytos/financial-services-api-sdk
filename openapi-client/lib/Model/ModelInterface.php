<?php

/**
 * ModelInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client\Model
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

/**
 * Interface abstracting model access.
 *
 * @package Axytos\FinancialServices\OpenAPI\Client\Model
 * @author  OpenAPI Generator team
 * @internal
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();
    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();
    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
