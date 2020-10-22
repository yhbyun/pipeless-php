<?php
/**
 * GetRecentEventsResultItemEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipeless
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipeless\Model;

use \ArrayAccess;
use \Pipeless\ObjectSerializer;

/**
 * GetRecentEventsResultItemEvent Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetRecentEventsResultItemEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRecentEventsResultItem_event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_object' => '\Pipeless\Model\ObjectReadable',
        'relationship' => '\Pipeless\Model\RelationshipReadable',
        'end_object' => '\Pipeless\Model\ObjectReadable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'start_object' => null,
        'relationship' => null,
        'end_object' => null
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
        'start_object' => 'start_object',
        'relationship' => 'relationship',
        'end_object' => 'end_object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_object' => 'setStartObject',
        'relationship' => 'setRelationship',
        'end_object' => 'setEndObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_object' => 'getStartObject',
        'relationship' => 'getRelationship',
        'end_object' => 'getEndObject'
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
        $this->container['start_object'] = isset($data['start_object']) ? $data['start_object'] : null;
        $this->container['relationship'] = isset($data['relationship']) ? $data['relationship'] : null;
        $this->container['end_object'] = isset($data['end_object']) ? $data['end_object'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_object'] === null) {
            $invalidProperties[] = "'start_object' can't be null";
        }
        if ($this->container['relationship'] === null) {
            $invalidProperties[] = "'relationship' can't be null";
        }
        if ($this->container['end_object'] === null) {
            $invalidProperties[] = "'end_object' can't be null";
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
     * Gets start_object
     *
     * @return \Pipeless\Model\ObjectReadable
     */
    public function getStartObject()
    {
        return $this->container['start_object'];
    }

    /**
     * Sets start_object
     *
     * @param \Pipeless\Model\ObjectReadable $start_object start_object
     *
     * @return $this
     */
    public function setStartObject($start_object)
    {
        $this->container['start_object'] = $start_object;

        return $this;
    }

    /**
     * Gets relationship
     *
     * @return \Pipeless\Model\RelationshipReadable
     */
    public function getRelationship()
    {
        return $this->container['relationship'];
    }

    /**
     * Sets relationship
     *
     * @param \Pipeless\Model\RelationshipReadable $relationship relationship
     *
     * @return $this
     */
    public function setRelationship($relationship)
    {
        $this->container['relationship'] = $relationship;

        return $this;
    }

    /**
     * Gets end_object
     *
     * @return \Pipeless\Model\ObjectReadable
     */
    public function getEndObject()
    {
        return $this->container['end_object'];
    }

    /**
     * Sets end_object
     *
     * @param \Pipeless\Model\ObjectReadable $end_object end_object
     *
     * @return $this
     */
    public function setEndObject($end_object)
    {
        $this->container['end_object'] = $end_object;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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


