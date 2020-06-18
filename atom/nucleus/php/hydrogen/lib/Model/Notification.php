<?php
/**
 * Notification
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Atom API
 *
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\nucleus\Model;

use \ArrayAccess;
use \com\hydrogen\nucleus\ObjectSerializer;

/**
 * Notification Class Doc Comment
 *
 * @category Class
 * @description Notification Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application_id' => 'string',
        'create_date' => '\DateTime',
        'description' => 'string',
        'feature_id' => 'string',
        'frequency_unit' => 'string[]',
        'id' => 'string',
        'is_active' => 'bool',
        'metadata' => 'map[string,string]',
        'name' => 'string',
        'notification_type' => 'string',
        'secondary_id' => 'string',
        'threshold_type' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'application_id' => 'uuid',
        'create_date' => 'date-time',
        'description' => null,
        'feature_id' => 'uuid',
        'frequency_unit' => null,
        'id' => 'uuid',
        'is_active' => null,
        'metadata' => null,
        'name' => null,
        'notification_type' => null,
        'secondary_id' => null,
        'threshold_type' => null,
        'update_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'application_id' => 'application_id',
        'create_date' => 'create_date',
        'description' => 'description',
        'feature_id' => 'feature_id',
        'frequency_unit' => 'frequency_unit',
        'id' => 'id',
        'is_active' => 'is_active',
        'metadata' => 'metadata',
        'name' => 'name',
        'notification_type' => 'notification_type',
        'secondary_id' => 'secondary_id',
        'threshold_type' => 'threshold_type',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_id' => 'setApplicationId',
        'create_date' => 'setCreateDate',
        'description' => 'setDescription',
        'feature_id' => 'setFeatureId',
        'frequency_unit' => 'setFrequencyUnit',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'metadata' => 'setMetadata',
        'name' => 'setName',
        'notification_type' => 'setNotificationType',
        'secondary_id' => 'setSecondaryId',
        'threshold_type' => 'setThresholdType',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_id' => 'getApplicationId',
        'create_date' => 'getCreateDate',
        'description' => 'getDescription',
        'feature_id' => 'getFeatureId',
        'frequency_unit' => 'getFrequencyUnit',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'metadata' => 'getMetadata',
        'name' => 'getName',
        'notification_type' => 'getNotificationType',
        'secondary_id' => 'getSecondaryId',
        'threshold_type' => 'getThresholdType',
        'update_date' => 'getUpdateDate'
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
        return self::$swaggerModelName;
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
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['feature_id'] = isset($data['feature_id']) ? $data['feature_id'] : null;
        $this->container['frequency_unit'] = isset($data['frequency_unit']) ? $data['frequency_unit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notification_type'] = isset($data['notification_type']) ? $data['notification_type'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['threshold_type'] = isset($data['threshold_type']) ? $data['threshold_type'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
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
        if ($this->container['notification_type'] === null) {
            $invalidProperties[] = "'notification_type' can't be null";
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
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets feature_id
     *
     * @return string
     */
    public function getFeatureId()
    {
        return $this->container['feature_id'];
    }

    /**
     * Sets feature_id
     *
     * @param string $feature_id feature_id
     *
     * @return $this
     */
    public function setFeatureId($feature_id)
    {
        $this->container['feature_id'] = $feature_id;

        return $this;
    }

    /**
     * Gets frequency_unit
     *
     * @return string[]
     */
    public function getFrequencyUnit()
    {
        return $this->container['frequency_unit'];
    }

    /**
     * Sets frequency_unit
     *
     * @param string[] $frequency_unit frequency_unit
     *
     * @return $this
     */
    public function setFrequencyUnit($frequency_unit)
    {
        $this->container['frequency_unit'] = $frequency_unit;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notification_type
     *
     * @return string
     */
    public function getNotificationType()
    {
        return $this->container['notification_type'];
    }

    /**
     * Sets notification_type
     *
     * @param string $notification_type notificationType
     *
     * @return $this
     */
    public function setNotificationType($notification_type)
    {
        $this->container['notification_type'] = $notification_type;

        return $this;
    }

    /**
     * Gets secondary_id
     *
     * @return string
     */
    public function getSecondaryId()
    {
        return $this->container['secondary_id'];
    }

    /**
     * Sets secondary_id
     *
     * @param string $secondary_id secondary_id
     *
     * @return $this
     */
    public function setSecondaryId($secondary_id)
    {
        $this->container['secondary_id'] = $secondary_id;

        return $this;
    }

    /**
     * Gets threshold_type
     *
     * @return string
     */
    public function getThresholdType()
    {
        return $this->container['threshold_type'];
    }

    /**
     * Sets threshold_type
     *
     * @param string $threshold_type threshold_type
     *
     * @return $this
     */
    public function setThresholdType($threshold_type)
    {
        $this->container['threshold_type'] = $threshold_type;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


