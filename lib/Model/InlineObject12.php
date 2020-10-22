<?php
/**
 * InlineObject12
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
 * InlineObject12 Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject12 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object' => '\Pipeless\Model\ObjectLookup',
        'content_object_type' => 'string',
        'content_tagged_relationship_type' => 'string',
        'disregard_tag_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'object' => null,
        'content_object_type' => null,
        'content_tagged_relationship_type' => null,
        'disregard_tag_ids' => null
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
        'object' => 'object',
        'content_object_type' => 'content_object_type',
        'content_tagged_relationship_type' => 'content_tagged_relationship_type',
        'disregard_tag_ids' => 'disregard_tag_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'content_object_type' => 'setContentObjectType',
        'content_tagged_relationship_type' => 'setContentTaggedRelationshipType',
        'disregard_tag_ids' => 'setDisregardTagIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'content_object_type' => 'getContentObjectType',
        'content_tagged_relationship_type' => 'getContentTaggedRelationshipType',
        'disregard_tag_ids' => 'getDisregardTagIds'
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

    const CONTENT_OBJECT_TYPE_USER = 'user';
    const CONTENT_OBJECT_TYPE_PRODUCT = 'product';
    const CONTENT_OBJECT_TYPE_IMAGE = 'image';
    const CONTENT_OBJECT_TYPE_COMMENT = 'comment';
    const CONTENT_OBJECT_TYPE_ARTICLE = 'article';
    const CONTENT_OBJECT_TYPE_POST = 'post';
    const CONTENT_OBJECT_TYPE_VIDEO = 'video';
    const CONTENT_OBJECT_TYPE_CONTENT = 'content';
    const CONTENT_OBJECT_TYPE_TAG = 'tag';
    const CONTENT_OBJECT_TYPE_CATEGORY = 'category';
    const CONTENT_OBJECT_TYPE_APP = 'app';
    const CONTENT_OBJECT_TYPE_BOOK = 'book';
    const CONTENT_OBJECT_TYPE_PERSON = 'person';
    const CONTENT_OBJECT_TYPE_SKILL = 'skill';
    const CONTENT_OBJECT_TYPE_JOB = 'job';
    const CONTENT_OBJECT_TYPE_COMPANY = 'company';
    const CONTENT_OBJECT_TYPE_ACCOUNT = 'account';
    const CONTENT_OBJECT_TYPE_CARD = 'card';
    const CONTENT_OBJECT_TYPE_COUNTRY = 'country';
    const CONTENT_OBJECT_TYPE_STATE = 'state';
    const CONTENT_OBJECT_TYPE_FILM = 'film';
    const CONTENT_OBJECT_TYPE_CART = 'cart';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_POSTED = 'posted';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_FOLLOWED = 'followed';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_LIKED = 'liked';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_FAVORITED = 'favorited';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_SAVED = 'saved';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_DISLIKED = 'disliked';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_PURCHASED = 'purchased';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_COMMENTED_ON = 'commentedOn';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_CREATED = 'created';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_VIEWED = 'viewed';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_REPORTED = 'reported';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_BLOCKED = 'blocked';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_DELETED = 'deleted';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_AUTHORED = 'authored';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_USED = 'used';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_DISMISSED = 'dismissed';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_LOGGED_IN = 'loggedIn';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_TAGGED_WITH = 'taggedWith';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_CATEGORIZED_IN = 'categorizedIn';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_INTERESTED_IN = 'interestedIn';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_LOCATED_IN = 'locatedIn';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_QUARTER = 'readQuarter';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_HALF = 'readHalf';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_ALL = 'readAll';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_SUBSCRIBED_TO = 'subscribedTo';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM = 'subscribedFrom';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_ADDED_TO = 'addedTo';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_MADE_BY = 'madeBy';
    const CONTENT_TAGGED_RELATIONSHIP_TYPE_PAUSED_ON = 'pausedOn';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentObjectTypeAllowableValues()
    {
        return [
            self::CONTENT_OBJECT_TYPE_USER,
            self::CONTENT_OBJECT_TYPE_PRODUCT,
            self::CONTENT_OBJECT_TYPE_IMAGE,
            self::CONTENT_OBJECT_TYPE_COMMENT,
            self::CONTENT_OBJECT_TYPE_ARTICLE,
            self::CONTENT_OBJECT_TYPE_POST,
            self::CONTENT_OBJECT_TYPE_VIDEO,
            self::CONTENT_OBJECT_TYPE_CONTENT,
            self::CONTENT_OBJECT_TYPE_TAG,
            self::CONTENT_OBJECT_TYPE_CATEGORY,
            self::CONTENT_OBJECT_TYPE_APP,
            self::CONTENT_OBJECT_TYPE_BOOK,
            self::CONTENT_OBJECT_TYPE_PERSON,
            self::CONTENT_OBJECT_TYPE_SKILL,
            self::CONTENT_OBJECT_TYPE_JOB,
            self::CONTENT_OBJECT_TYPE_COMPANY,
            self::CONTENT_OBJECT_TYPE_ACCOUNT,
            self::CONTENT_OBJECT_TYPE_CARD,
            self::CONTENT_OBJECT_TYPE_COUNTRY,
            self::CONTENT_OBJECT_TYPE_STATE,
            self::CONTENT_OBJECT_TYPE_FILM,
            self::CONTENT_OBJECT_TYPE_CART,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTaggedRelationshipTypeAllowableValues()
    {
        return [
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_POSTED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_FOLLOWED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_LIKED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_FAVORITED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_SAVED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_DISLIKED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_PURCHASED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_COMMENTED_ON,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_CREATED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_VIEWED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_REPORTED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_BLOCKED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_DELETED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_AUTHORED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_USED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_DISMISSED,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_LOGGED_IN,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_TAGGED_WITH,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_CATEGORIZED_IN,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_INTERESTED_IN,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_LOCATED_IN,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_QUARTER,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_HALF,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_READ_ALL,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_SUBSCRIBED_TO,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_ADDED_TO,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_MADE_BY,
            self::CONTENT_TAGGED_RELATIONSHIP_TYPE_PAUSED_ON,
        ];
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['content_object_type'] = isset($data['content_object_type']) ? $data['content_object_type'] : null;
        $this->container['content_tagged_relationship_type'] = isset($data['content_tagged_relationship_type']) ? $data['content_tagged_relationship_type'] : null;
        $this->container['disregard_tag_ids'] = isset($data['disregard_tag_ids']) ? $data['disregard_tag_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['content_object_type'] === null) {
            $invalidProperties[] = "'content_object_type' can't be null";
        }
        $allowedValues = $this->getContentObjectTypeAllowableValues();
        if (!is_null($this->container['content_object_type']) && !in_array($this->container['content_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContentTaggedRelationshipTypeAllowableValues();
        if (!is_null($this->container['content_tagged_relationship_type']) && !in_array($this->container['content_tagged_relationship_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_tagged_relationship_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets object
     *
     * @return \Pipeless\Model\ObjectLookup
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param \Pipeless\Model\ObjectLookup $object object
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets content_object_type
     *
     * @return string
     */
    public function getContentObjectType()
    {
        return $this->container['content_object_type'];
    }

    /**
     * Sets content_object_type
     *
     * @param string $content_object_type The object type of the content associated to your tags. Ex. if the tags in your dataset are found on posts, then this value should be \"post\".
     *
     * @return $this
     */
    public function setContentObjectType($content_object_type)
    {
        $allowedValues = $this->getContentObjectTypeAllowableValues();
        if (!in_array($content_object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_object_type'] = $content_object_type;

        return $this;
    }

    /**
     * Gets content_tagged_relationship_type
     *
     * @return string|null
     */
    public function getContentTaggedRelationshipType()
    {
        return $this->container['content_tagged_relationship_type'];
    }

    /**
     * Sets content_tagged_relationship_type
     *
     * @param string|null $content_tagged_relationship_type The relationship type that represents content being tagged in your set. If no value is provided, this will default to taggedWith.
     *
     * @return $this
     */
    public function setContentTaggedRelationshipType($content_tagged_relationship_type)
    {
        $allowedValues = $this->getContentTaggedRelationshipTypeAllowableValues();
        if (!is_null($content_tagged_relationship_type) && !in_array($content_tagged_relationship_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_tagged_relationship_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_tagged_relationship_type'] = $content_tagged_relationship_type;

        return $this;
    }

    /**
     * Gets disregard_tag_ids
     *
     * @return string[]|null
     */
    public function getDisregardTagIds()
    {
        return $this->container['disregard_tag_ids'];
    }

    /**
     * Sets disregard_tag_ids
     *
     * @param string[]|null $disregard_tag_ids Object ids that you want not to be included in the resulting tags (or whatever type target object is).
     *
     * @return $this
     */
    public function setDisregardTagIds($disregard_tag_ids)
    {
        $this->container['disregard_tag_ids'] = $disregard_tag_ids;

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


