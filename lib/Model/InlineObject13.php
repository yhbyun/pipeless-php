<?php
/**
 * InlineObject13
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
 * InlineObject13 Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject13 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object' => '\Pipeless\Model\ObjectLookup',
        'content_tagged_relationship_type' => 'string',
        'content_tagged_object_type' => 'string',
        'positive_rel' => 'string',
        'actor_object_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'object' => null,
        'content_tagged_relationship_type' => null,
        'content_tagged_object_type' => null,
        'positive_rel' => null,
        'actor_object_type' => null
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
        'content_tagged_relationship_type' => 'content_tagged_relationship_type',
        'content_tagged_object_type' => 'content_tagged_object_type',
        'positive_rel' => 'positive_rel',
        'actor_object_type' => 'actor_object_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'content_tagged_relationship_type' => 'setContentTaggedRelationshipType',
        'content_tagged_object_type' => 'setContentTaggedObjectType',
        'positive_rel' => 'setPositiveRel',
        'actor_object_type' => 'setActorObjectType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'content_tagged_relationship_type' => 'getContentTaggedRelationshipType',
        'content_tagged_object_type' => 'getContentTaggedObjectType',
        'positive_rel' => 'getPositiveRel',
        'actor_object_type' => 'getActorObjectType'
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
    const CONTENT_TAGGED_OBJECT_TYPE_USER = 'user';
    const CONTENT_TAGGED_OBJECT_TYPE_PRODUCT = 'product';
    const CONTENT_TAGGED_OBJECT_TYPE_IMAGE = 'image';
    const CONTENT_TAGGED_OBJECT_TYPE_COMMENT = 'comment';
    const CONTENT_TAGGED_OBJECT_TYPE_ARTICLE = 'article';
    const CONTENT_TAGGED_OBJECT_TYPE_POST = 'post';
    const CONTENT_TAGGED_OBJECT_TYPE_VIDEO = 'video';
    const CONTENT_TAGGED_OBJECT_TYPE_CONTENT = 'content';
    const CONTENT_TAGGED_OBJECT_TYPE_TAG = 'tag';
    const CONTENT_TAGGED_OBJECT_TYPE_CATEGORY = 'category';
    const CONTENT_TAGGED_OBJECT_TYPE_APP = 'app';
    const CONTENT_TAGGED_OBJECT_TYPE_BOOK = 'book';
    const CONTENT_TAGGED_OBJECT_TYPE_PERSON = 'person';
    const CONTENT_TAGGED_OBJECT_TYPE_SKILL = 'skill';
    const CONTENT_TAGGED_OBJECT_TYPE_JOB = 'job';
    const CONTENT_TAGGED_OBJECT_TYPE_COMPANY = 'company';
    const CONTENT_TAGGED_OBJECT_TYPE_ACCOUNT = 'account';
    const CONTENT_TAGGED_OBJECT_TYPE_CARD = 'card';
    const CONTENT_TAGGED_OBJECT_TYPE_COUNTRY = 'country';
    const CONTENT_TAGGED_OBJECT_TYPE_STATE = 'state';
    const CONTENT_TAGGED_OBJECT_TYPE_FILM = 'film';
    const CONTENT_TAGGED_OBJECT_TYPE_CART = 'cart';
    const POSITIVE_REL_POSTED = 'posted';
    const POSITIVE_REL_FOLLOWED = 'followed';
    const POSITIVE_REL_LIKED = 'liked';
    const POSITIVE_REL_FAVORITED = 'favorited';
    const POSITIVE_REL_SAVED = 'saved';
    const POSITIVE_REL_DISLIKED = 'disliked';
    const POSITIVE_REL_PURCHASED = 'purchased';
    const POSITIVE_REL_COMMENTED_ON = 'commentedOn';
    const POSITIVE_REL_CREATED = 'created';
    const POSITIVE_REL_VIEWED = 'viewed';
    const POSITIVE_REL_REPORTED = 'reported';
    const POSITIVE_REL_BLOCKED = 'blocked';
    const POSITIVE_REL_DELETED = 'deleted';
    const POSITIVE_REL_AUTHORED = 'authored';
    const POSITIVE_REL_USED = 'used';
    const POSITIVE_REL_DISMISSED = 'dismissed';
    const POSITIVE_REL_LOGGED_IN = 'loggedIn';
    const POSITIVE_REL_TAGGED_WITH = 'taggedWith';
    const POSITIVE_REL_CATEGORIZED_IN = 'categorizedIn';
    const POSITIVE_REL_INTERESTED_IN = 'interestedIn';
    const POSITIVE_REL_LOCATED_IN = 'locatedIn';
    const POSITIVE_REL_READ_QUARTER = 'readQuarter';
    const POSITIVE_REL_READ_HALF = 'readHalf';
    const POSITIVE_REL_READ_ALL = 'readAll';
    const POSITIVE_REL_SUBSCRIBED_TO = 'subscribedTo';
    const POSITIVE_REL_SUBSCRIBED_FROM = 'subscribedFrom';
    const POSITIVE_REL_ADDED_TO = 'addedTo';
    const POSITIVE_REL_MADE_BY = 'madeBy';
    const POSITIVE_REL_PAUSED_ON = 'pausedOn';
    const ACTOR_OBJECT_TYPE_USER = 'user';
    const ACTOR_OBJECT_TYPE_PRODUCT = 'product';
    const ACTOR_OBJECT_TYPE_IMAGE = 'image';
    const ACTOR_OBJECT_TYPE_COMMENT = 'comment';
    const ACTOR_OBJECT_TYPE_ARTICLE = 'article';
    const ACTOR_OBJECT_TYPE_POST = 'post';
    const ACTOR_OBJECT_TYPE_VIDEO = 'video';
    const ACTOR_OBJECT_TYPE_CONTENT = 'content';
    const ACTOR_OBJECT_TYPE_TAG = 'tag';
    const ACTOR_OBJECT_TYPE_CATEGORY = 'category';
    const ACTOR_OBJECT_TYPE_APP = 'app';
    const ACTOR_OBJECT_TYPE_BOOK = 'book';
    const ACTOR_OBJECT_TYPE_PERSON = 'person';
    const ACTOR_OBJECT_TYPE_SKILL = 'skill';
    const ACTOR_OBJECT_TYPE_JOB = 'job';
    const ACTOR_OBJECT_TYPE_COMPANY = 'company';
    const ACTOR_OBJECT_TYPE_ACCOUNT = 'account';
    const ACTOR_OBJECT_TYPE_CARD = 'card';
    const ACTOR_OBJECT_TYPE_COUNTRY = 'country';
    const ACTOR_OBJECT_TYPE_STATE = 'state';
    const ACTOR_OBJECT_TYPE_FILM = 'film';
    const ACTOR_OBJECT_TYPE_CART = 'cart';
    

    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTaggedObjectTypeAllowableValues()
    {
        return [
            self::CONTENT_TAGGED_OBJECT_TYPE_USER,
            self::CONTENT_TAGGED_OBJECT_TYPE_PRODUCT,
            self::CONTENT_TAGGED_OBJECT_TYPE_IMAGE,
            self::CONTENT_TAGGED_OBJECT_TYPE_COMMENT,
            self::CONTENT_TAGGED_OBJECT_TYPE_ARTICLE,
            self::CONTENT_TAGGED_OBJECT_TYPE_POST,
            self::CONTENT_TAGGED_OBJECT_TYPE_VIDEO,
            self::CONTENT_TAGGED_OBJECT_TYPE_CONTENT,
            self::CONTENT_TAGGED_OBJECT_TYPE_TAG,
            self::CONTENT_TAGGED_OBJECT_TYPE_CATEGORY,
            self::CONTENT_TAGGED_OBJECT_TYPE_APP,
            self::CONTENT_TAGGED_OBJECT_TYPE_BOOK,
            self::CONTENT_TAGGED_OBJECT_TYPE_PERSON,
            self::CONTENT_TAGGED_OBJECT_TYPE_SKILL,
            self::CONTENT_TAGGED_OBJECT_TYPE_JOB,
            self::CONTENT_TAGGED_OBJECT_TYPE_COMPANY,
            self::CONTENT_TAGGED_OBJECT_TYPE_ACCOUNT,
            self::CONTENT_TAGGED_OBJECT_TYPE_CARD,
            self::CONTENT_TAGGED_OBJECT_TYPE_COUNTRY,
            self::CONTENT_TAGGED_OBJECT_TYPE_STATE,
            self::CONTENT_TAGGED_OBJECT_TYPE_FILM,
            self::CONTENT_TAGGED_OBJECT_TYPE_CART,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositiveRelAllowableValues()
    {
        return [
            self::POSITIVE_REL_POSTED,
            self::POSITIVE_REL_FOLLOWED,
            self::POSITIVE_REL_LIKED,
            self::POSITIVE_REL_FAVORITED,
            self::POSITIVE_REL_SAVED,
            self::POSITIVE_REL_DISLIKED,
            self::POSITIVE_REL_PURCHASED,
            self::POSITIVE_REL_COMMENTED_ON,
            self::POSITIVE_REL_CREATED,
            self::POSITIVE_REL_VIEWED,
            self::POSITIVE_REL_REPORTED,
            self::POSITIVE_REL_BLOCKED,
            self::POSITIVE_REL_DELETED,
            self::POSITIVE_REL_AUTHORED,
            self::POSITIVE_REL_USED,
            self::POSITIVE_REL_DISMISSED,
            self::POSITIVE_REL_LOGGED_IN,
            self::POSITIVE_REL_TAGGED_WITH,
            self::POSITIVE_REL_CATEGORIZED_IN,
            self::POSITIVE_REL_INTERESTED_IN,
            self::POSITIVE_REL_LOCATED_IN,
            self::POSITIVE_REL_READ_QUARTER,
            self::POSITIVE_REL_READ_HALF,
            self::POSITIVE_REL_READ_ALL,
            self::POSITIVE_REL_SUBSCRIBED_TO,
            self::POSITIVE_REL_SUBSCRIBED_FROM,
            self::POSITIVE_REL_ADDED_TO,
            self::POSITIVE_REL_MADE_BY,
            self::POSITIVE_REL_PAUSED_ON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActorObjectTypeAllowableValues()
    {
        return [
            self::ACTOR_OBJECT_TYPE_USER,
            self::ACTOR_OBJECT_TYPE_PRODUCT,
            self::ACTOR_OBJECT_TYPE_IMAGE,
            self::ACTOR_OBJECT_TYPE_COMMENT,
            self::ACTOR_OBJECT_TYPE_ARTICLE,
            self::ACTOR_OBJECT_TYPE_POST,
            self::ACTOR_OBJECT_TYPE_VIDEO,
            self::ACTOR_OBJECT_TYPE_CONTENT,
            self::ACTOR_OBJECT_TYPE_TAG,
            self::ACTOR_OBJECT_TYPE_CATEGORY,
            self::ACTOR_OBJECT_TYPE_APP,
            self::ACTOR_OBJECT_TYPE_BOOK,
            self::ACTOR_OBJECT_TYPE_PERSON,
            self::ACTOR_OBJECT_TYPE_SKILL,
            self::ACTOR_OBJECT_TYPE_JOB,
            self::ACTOR_OBJECT_TYPE_COMPANY,
            self::ACTOR_OBJECT_TYPE_ACCOUNT,
            self::ACTOR_OBJECT_TYPE_CARD,
            self::ACTOR_OBJECT_TYPE_COUNTRY,
            self::ACTOR_OBJECT_TYPE_STATE,
            self::ACTOR_OBJECT_TYPE_FILM,
            self::ACTOR_OBJECT_TYPE_CART,
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
        $this->container['content_tagged_relationship_type'] = isset($data['content_tagged_relationship_type']) ? $data['content_tagged_relationship_type'] : null;
        $this->container['content_tagged_object_type'] = isset($data['content_tagged_object_type']) ? $data['content_tagged_object_type'] : null;
        $this->container['positive_rel'] = isset($data['positive_rel']) ? $data['positive_rel'] : null;
        $this->container['actor_object_type'] = isset($data['actor_object_type']) ? $data['actor_object_type'] : null;
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
        $allowedValues = $this->getContentTaggedRelationshipTypeAllowableValues();
        if (!is_null($this->container['content_tagged_relationship_type']) && !in_array($this->container['content_tagged_relationship_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_tagged_relationship_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContentTaggedObjectTypeAllowableValues();
        if (!is_null($this->container['content_tagged_object_type']) && !in_array($this->container['content_tagged_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_tagged_object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPositiveRelAllowableValues();
        if (!is_null($this->container['positive_rel']) && !in_array($this->container['positive_rel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'positive_rel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActorObjectTypeAllowableValues();
        if (!is_null($this->container['actor_object_type']) && !in_array($this->container['actor_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'actor_object_type', must be one of '%s'",
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
     * @param string|null $content_tagged_relationship_type The relationship type that represents content being tagged with a tag in your data. If not provided, then tags will not be considered in this algo.
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
     * Gets content_tagged_object_type
     *
     * @return string|null
     */
    public function getContentTaggedObjectType()
    {
        return $this->container['content_tagged_object_type'];
    }

    /**
     * Sets content_tagged_object_type
     *
     * @param string|null $content_tagged_object_type The object type that represents a tag in your data. If not provided, and content tagged relationship type was provided, this will default to \"tag\".
     *
     * @return $this
     */
    public function setContentTaggedObjectType($content_tagged_object_type)
    {
        $allowedValues = $this->getContentTaggedObjectTypeAllowableValues();
        if (!is_null($content_tagged_object_type) && !in_array($content_tagged_object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_tagged_object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_tagged_object_type'] = $content_tagged_object_type;

        return $this;
    }

    /**
     * Gets positive_rel
     *
     * @return string|null
     */
    public function getPositiveRel()
    {
        return $this->container['positive_rel'];
    }

    /**
     * Sets positive_rel
     *
     * @param string|null $positive_rel The relationship of a positive action that users (or whatever actor type) can take on the content type. If the value is not provided, then collabrative filtering will not be used in the algo.
     *
     * @return $this
     */
    public function setPositiveRel($positive_rel)
    {
        $allowedValues = $this->getPositiveRelAllowableValues();
        if (!is_null($positive_rel) && !in_array($positive_rel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'positive_rel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['positive_rel'] = $positive_rel;

        return $this;
    }

    /**
     * Gets actor_object_type
     *
     * @return string|null
     */
    public function getActorObjectType()
    {
        return $this->container['actor_object_type'];
    }

    /**
     * Sets actor_object_type
     *
     * @param string|null $actor_object_type The type of the object that acts on the target content (ex. user). If this value is not provided, and positive rel is set, then this will default to \"user\".
     *
     * @return $this
     */
    public function setActorObjectType($actor_object_type)
    {
        $allowedValues = $this->getActorObjectTypeAllowableValues();
        if (!is_null($actor_object_type) && !in_array($actor_object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actor_object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['actor_object_type'] = $actor_object_type;

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

