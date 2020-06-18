<?php
/**
 * StatementModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Integration API
 *
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\integration\Model;

use \ArrayAccess;
use \com\hydrogen\integration\ObjectSerializer;

/**
 * StatementModel Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatementModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StatementModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'statement_date' => '\DateTime',
        'statement_link' => 'string',
        'statement_link_expiry' => 'string',
        'statement_name' => 'string',
        'statement_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'statement_date' => 'date-time',
        'statement_link' => null,
        'statement_link_expiry' => null,
        'statement_name' => null,
        'statement_type' => null
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
        'statement_date' => 'statement_date',
        'statement_link' => 'statement_link',
        'statement_link_expiry' => 'statement_link_expiry',
        'statement_name' => 'statement_name',
        'statement_type' => 'statement_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statement_date' => 'setStatementDate',
        'statement_link' => 'setStatementLink',
        'statement_link_expiry' => 'setStatementLinkExpiry',
        'statement_name' => 'setStatementName',
        'statement_type' => 'setStatementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statement_date' => 'getStatementDate',
        'statement_link' => 'getStatementLink',
        'statement_link_expiry' => 'getStatementLinkExpiry',
        'statement_name' => 'getStatementName',
        'statement_type' => 'getStatementType'
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
        $this->container['statement_date'] = isset($data['statement_date']) ? $data['statement_date'] : null;
        $this->container['statement_link'] = isset($data['statement_link']) ? $data['statement_link'] : null;
        $this->container['statement_link_expiry'] = isset($data['statement_link_expiry']) ? $data['statement_link_expiry'] : null;
        $this->container['statement_name'] = isset($data['statement_name']) ? $data['statement_name'] : null;
        $this->container['statement_type'] = isset($data['statement_type']) ? $data['statement_type'] : null;
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
     * Gets statement_date
     *
     * @return \DateTime
     */
    public function getStatementDate()
    {
        return $this->container['statement_date'];
    }

    /**
     * Sets statement_date
     *
     * @param \DateTime $statement_date statement_date
     *
     * @return $this
     */
    public function setStatementDate($statement_date)
    {
        $this->container['statement_date'] = $statement_date;

        return $this;
    }

    /**
     * Gets statement_link
     *
     * @return string
     */
    public function getStatementLink()
    {
        return $this->container['statement_link'];
    }

    /**
     * Sets statement_link
     *
     * @param string $statement_link statement_link
     *
     * @return $this
     */
    public function setStatementLink($statement_link)
    {
        $this->container['statement_link'] = $statement_link;

        return $this;
    }

    /**
     * Gets statement_link_expiry
     *
     * @return string
     */
    public function getStatementLinkExpiry()
    {
        return $this->container['statement_link_expiry'];
    }

    /**
     * Sets statement_link_expiry
     *
     * @param string $statement_link_expiry statement_link_expiry
     *
     * @return $this
     */
    public function setStatementLinkExpiry($statement_link_expiry)
    {
        $this->container['statement_link_expiry'] = $statement_link_expiry;

        return $this;
    }

    /**
     * Gets statement_name
     *
     * @return string
     */
    public function getStatementName()
    {
        return $this->container['statement_name'];
    }

    /**
     * Sets statement_name
     *
     * @param string $statement_name statement_name
     *
     * @return $this
     */
    public function setStatementName($statement_name)
    {
        $this->container['statement_name'] = $statement_name;

        return $this;
    }

    /**
     * Gets statement_type
     *
     * @return string
     */
    public function getStatementType()
    {
        return $this->container['statement_type'];
    }

    /**
     * Sets statement_type
     *
     * @param string $statement_type statement_type
     *
     * @return $this
     */
    public function setStatementType($statement_type)
    {
        $this->container['statement_type'] = $statement_type;

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


