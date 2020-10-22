<?php
/**
 * InlineObject14
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
 * InlineObject14 Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject14 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_14';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object' => '\Pipeless\Model\ObjectLookup',
        'followed_relationship_type' => 'string',
        'content_tagged_relationship_type' => 'string',
        'content_tagged_object_type' => 'string',
        'content_object_type' => 'string',
        'content_published_relationship_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'object' => null,
        'followed_relationship_type' => null,
        'content_tagged_relationship_type' => null,
        'content_tagged_object_type' => null,
        'content_object_type' => null,
        'content_published_relationship_type' => null
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
        'followed_relationship_type' => 'followed_relationship_type',
        'content_tagged_relationship_type' => 'content_tagged_relationship_type',
        'content_tagged_object_type' => 'content_tagged_object_type',
        'content_object_type' => 'content_object_type',
        'content_published_relationship_type' => 'content_published_relationship_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'followed_relationship_type' => 'setFollowedRelationshipType',
        'content_tagged_relationship_type' => 'setContentTaggedRelationshipType',
        'content_tagged_object_type' => 'setContentTaggedObjectType',
        'content_object_type' => 'setContentObjectType',
        'content_published_relationship_type' => 'setContentPublishedRelationshipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'followed_relationship_type' => 'getFollowedRelationshipType',
        'content_tagged_relationship_type' => 'getContentTaggedRelationshipType',
        'content_tagged_object_type' => 'getContentTaggedObjectType',
        'content_object_type' => 'getContentObjectType',
        'content_published_relationship_type' => 'getContentPublishedRelationshipType'
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

    const FOLLOWED_RELATIONSHIP_TYPE_POSTED = 'posted';
    const FOLLOWED_RELATIONSHIP_TYPE_FOLLOWED = 'followed';
    const FOLLOWED_RELATIONSHIP_TYPE_LIKED = 'liked';
    const FOLLOWED_RELATIONSHIP_TYPE_FAVORITED = 'favorited';
    const FOLLOWED_RELATIONSHIP_TYPE_SAVED = 'saved';
    const FOLLOWED_RELATIONSHIP_TYPE_DISLIKED = 'disliked';
    const FOLLOWED_RELATIONSHIP_TYPE_PURCHASED = 'purchased';
    const FOLLOWED_RELATIONSHIP_TYPE_COMMENTED_ON = 'commentedOn';
    const FOLLOWED_RELATIONSHIP_TYPE_CREATED = 'created';
    const FOLLOWED_RELATIONSHIP_TYPE_VIEWED = 'viewed';
    const FOLLOWED_RELATIONSHIP_TYPE_REPORTED = 'reported';
    const FOLLOWED_RELATIONSHIP_TYPE_BLOCKED = 'blocked';
    const FOLLOWED_RELATIONSHIP_TYPE_DELETED = 'deleted';
    const FOLLOWED_RELATIONSHIP_TYPE_AUTHORED = 'authored';
    const FOLLOWED_RELATIONSHIP_TYPE_USED = 'used';
    const FOLLOWED_RELATIONSHIP_TYPE_DISMISSED = 'dismissed';
    const FOLLOWED_RELATIONSHIP_TYPE_LOGGED_IN = 'loggedIn';
    const FOLLOWED_RELATIONSHIP_TYPE_TAGGED_WITH = 'taggedWith';
    const FOLLOWED_RELATIONSHIP_TYPE_CATEGORIZED_IN = 'categorizedIn';
    const FOLLOWED_RELATIONSHIP_TYPE_INTERESTED_IN = 'interestedIn';
    const FOLLOWED_RELATIONSHIP_TYPE_LOCATED_IN = 'locatedIn';
    const FOLLOWED_RELATIONSHIP_TYPE_READ_QUARTER = 'readQuarter';
    const FOLLOWED_RELATIONSHIP_TYPE_READ_HALF = 'readHalf';
    const FOLLOWED_RELATIONSHIP_TYPE_READ_ALL = 'readAll';
    const FOLLOWED_RELATIONSHIP_TYPE_SUBSCRIBED_TO = 'subscribedTo';
    const FOLLOWED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM = 'subscribedFrom';
    const FOLLOWED_RELATIONSHIP_TYPE_ADDED_TO = 'addedTo';
    const FOLLOWED_RELATIONSHIP_TYPE_MADE_BY = 'madeBy';
    const FOLLOWED_RELATIONSHIP_TYPE_PAUSED_ON = 'pausedOn';
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
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_POSTED = 'posted';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_FOLLOWED = 'followed';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LIKED = 'liked';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_FAVORITED = 'favorited';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SAVED = 'saved';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DISLIKED = 'disliked';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_PURCHASED = 'purchased';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_COMMENTED_ON = 'commentedOn';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_CREATED = 'created';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_VIEWED = 'viewed';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_REPORTED = 'reported';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_BLOCKED = 'blocked';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DELETED = 'deleted';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_AUTHORED = 'authored';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_USED = 'used';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DISMISSED = 'dismissed';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LOGGED_IN = 'loggedIn';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_TAGGED_WITH = 'taggedWith';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_CATEGORIZED_IN = 'categorizedIn';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_INTERESTED_IN = 'interestedIn';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LOCATED_IN = 'locatedIn';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_QUARTER = 'readQuarter';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_HALF = 'readHalf';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_ALL = 'readAll';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SUBSCRIBED_TO = 'subscribedTo';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM = 'subscribedFrom';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_ADDED_TO = 'addedTo';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_MADE_BY = 'madeBy';
    const CONTENT_PUBLISHED_RELATIONSHIP_TYPE_PAUSED_ON = 'pausedOn';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFollowedRelationshipTypeAllowableValues()
    {
        return [
            self::FOLLOWED_RELATIONSHIP_TYPE_POSTED,
            self::FOLLOWED_RELATIONSHIP_TYPE_FOLLOWED,
            self::FOLLOWED_RELATIONSHIP_TYPE_LIKED,
            self::FOLLOWED_RELATIONSHIP_TYPE_FAVORITED,
            self::FOLLOWED_RELATIONSHIP_TYPE_SAVED,
            self::FOLLOWED_RELATIONSHIP_TYPE_DISLIKED,
            self::FOLLOWED_RELATIONSHIP_TYPE_PURCHASED,
            self::FOLLOWED_RELATIONSHIP_TYPE_COMMENTED_ON,
            self::FOLLOWED_RELATIONSHIP_TYPE_CREATED,
            self::FOLLOWED_RELATIONSHIP_TYPE_VIEWED,
            self::FOLLOWED_RELATIONSHIP_TYPE_REPORTED,
            self::FOLLOWED_RELATIONSHIP_TYPE_BLOCKED,
            self::FOLLOWED_RELATIONSHIP_TYPE_DELETED,
            self::FOLLOWED_RELATIONSHIP_TYPE_AUTHORED,
            self::FOLLOWED_RELATIONSHIP_TYPE_USED,
            self::FOLLOWED_RELATIONSHIP_TYPE_DISMISSED,
            self::FOLLOWED_RELATIONSHIP_TYPE_LOGGED_IN,
            self::FOLLOWED_RELATIONSHIP_TYPE_TAGGED_WITH,
            self::FOLLOWED_RELATIONSHIP_TYPE_CATEGORIZED_IN,
            self::FOLLOWED_RELATIONSHIP_TYPE_INTERESTED_IN,
            self::FOLLOWED_RELATIONSHIP_TYPE_LOCATED_IN,
            self::FOLLOWED_RELATIONSHIP_TYPE_READ_QUARTER,
            self::FOLLOWED_RELATIONSHIP_TYPE_READ_HALF,
            self::FOLLOWED_RELATIONSHIP_TYPE_READ_ALL,
            self::FOLLOWED_RELATIONSHIP_TYPE_SUBSCRIBED_TO,
            self::FOLLOWED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM,
            self::FOLLOWED_RELATIONSHIP_TYPE_ADDED_TO,
            self::FOLLOWED_RELATIONSHIP_TYPE_MADE_BY,
            self::FOLLOWED_RELATIONSHIP_TYPE_PAUSED_ON,
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
    public function getContentPublishedRelationshipTypeAllowableValues()
    {
        return [
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_POSTED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_FOLLOWED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LIKED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_FAVORITED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SAVED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DISLIKED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_PURCHASED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_COMMENTED_ON,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_CREATED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_VIEWED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_REPORTED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_BLOCKED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DELETED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_AUTHORED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_USED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_DISMISSED,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LOGGED_IN,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_TAGGED_WITH,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_CATEGORIZED_IN,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_INTERESTED_IN,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_LOCATED_IN,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_QUARTER,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_HALF,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_READ_ALL,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SUBSCRIBED_TO,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_SUBSCRIBED_FROM,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_ADDED_TO,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_MADE_BY,
            self::CONTENT_PUBLISHED_RELATIONSHIP_TYPE_PAUSED_ON,
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
        $this->container['followed_relationship_type'] = isset($data['followed_relationship_type']) ? $data['followed_relationship_type'] : 'followed';
        $this->container['content_tagged_relationship_type'] = isset($data['content_tagged_relationship_type']) ? $data['content_tagged_relationship_type'] : 'taggedWith';
        $this->container['content_tagged_object_type'] = isset($data['content_tagged_object_type']) ? $data['content_tagged_object_type'] : null;
        $this->container['content_object_type'] = isset($data['content_object_type']) ? $data['content_object_type'] : null;
        $this->container['content_published_relationship_type'] = isset($data['content_published_relationship_type']) ? $data['content_published_relationship_type'] : null;
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
        $allowedValues = $this->getFollowedRelationshipTypeAllowableValues();
        if (!is_null($this->container['followed_relationship_type']) && !in_array($this->container['followed_relationship_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'followed_relationship_type', must be one of '%s'",
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

        $allowedValues = $this->getContentTaggedObjectTypeAllowableValues();
        if (!is_null($this->container['content_tagged_object_type']) && !in_array($this->container['content_tagged_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_tagged_object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContentObjectTypeAllowableValues();
        if (!is_null($this->container['content_object_type']) && !in_array($this->container['content_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getContentPublishedRelationshipTypeAllowableValues();
        if (!is_null($this->container['content_published_relationship_type']) && !in_array($this->container['content_published_relationship_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_published_relationship_type', must be one of '%s'",
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
     * Gets followed_relationship_type
     *
     * @return string|null
     */
    public function getFollowedRelationshipType()
    {
        return $this->container['followed_relationship_type'];
    }

    /**
     * Sets followed_relationship_type
     *
     * @param string|null $followed_relationship_type The relationship type used to represent a user following another user. If this value is not provided, then collabrative filtering will not be used for the algo.
     *
     * @return $this
     */
    public function setFollowedRelationshipType($followed_relationship_type)
    {
        $allowedValues = $this->getFollowedRelationshipTypeAllowableValues();
        if (!is_null($followed_relationship_type) && !in_array($followed_relationship_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'followed_relationship_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['followed_relationship_type'] = $followed_relationship_type;

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
     * @param string|null $content_tagged_relationship_type The relationship type that represents content (created by users) being tagged. If this value is not provided, then tag data will not be used for the algo.
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
     * @param string|null $content_tagged_object_type The object tyoe that represents a tag for the content a user can publish. If this value is not set, and content tagged relationship type has been set, then this will default to \"tag\".
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
     * Gets content_object_type
     *
     * @return string|null
     */
    public function getContentObjectType()
    {
        return $this->container['content_object_type'];
    }

    /**
     * Sets content_object_type
     *
     * @param string|null $content_object_type Object type of the content users publish. If this value is not set, and content tagged relationship type has been set, then this value will default to \"post\".
     *
     * @return $this
     */
    public function setContentObjectType($content_object_type)
    {
        $allowedValues = $this->getContentObjectTypeAllowableValues();
        if (!is_null($content_object_type) && !in_array($content_object_type, $allowedValues, true)) {
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
     * Gets content_published_relationship_type
     *
     * @return string|null
     */
    public function getContentPublishedRelationshipType()
    {
        return $this->container['content_published_relationship_type'];
    }

    /**
     * Sets content_published_relationship_type
     *
     * @param string|null $content_published_relationship_type Teh relationship type that represents a user publishing content. If this value is not set, and content tagged relationship type has been set, then this value will default to \"posted\".
     *
     * @return $this
     */
    public function setContentPublishedRelationshipType($content_published_relationship_type)
    {
        $allowedValues = $this->getContentPublishedRelationshipTypeAllowableValues();
        if (!is_null($content_published_relationship_type) && !in_array($content_published_relationship_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_published_relationship_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_published_relationship_type'] = $content_published_relationship_type;

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


