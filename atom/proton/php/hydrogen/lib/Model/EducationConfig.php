<?php
/**
 * EducationConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Proton API
 *
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.7.18
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\proton\Model;

use \ArrayAccess;
use \com\hydrogen\proton\ObjectSerializer;

/**
 * EducationConfig Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EducationConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EducationConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_age' => 'int',
        'total_annual_cost' => 'float',
        'end_age' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_age' => 'int32',
        'total_annual_cost' => null,
        'end_age' => 'int32'
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
        'start_age' => 'start_age',
        'total_annual_cost' => 'total_annual_cost',
        'end_age' => 'end_age'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_age' => 'setStartAge',
        'total_annual_cost' => 'setTotalAnnualCost',
        'end_age' => 'setEndAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_age' => 'getStartAge',
        'total_annual_cost' => 'getTotalAnnualCost',
        'end_age' => 'getEndAge'
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
        $this->container['start_age'] = isset($data['start_age']) ? $data['start_age'] : null;
        $this->container['total_annual_cost'] = isset($data['total_annual_cost']) ? $data['total_annual_cost'] : null;
        $this->container['end_age'] = isset($data['end_age']) ? $data['end_age'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_age'] === null) {
            $invalidProperties[] = "'start_age' can't be null";
        }
        if (($this->container['start_age'] < 0)) {
            $invalidProperties[] = "invalid value for 'start_age', must be bigger than or equal to 0.";
        }

        if ($this->container['total_annual_cost'] === null) {
            $invalidProperties[] = "'total_annual_cost' can't be null";
        }
        if (($this->container['total_annual_cost'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_annual_cost', must be bigger than or equal to 0.";
        }

        if ($this->container['end_age'] === null) {
            $invalidProperties[] = "'end_age' can't be null";
        }
        if (($this->container['end_age'] < 0)) {
            $invalidProperties[] = "invalid value for 'end_age', must be bigger than or equal to 0.";
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
     * Gets start_age
     *
     * @return int
     */
    public function getStartAge()
    {
        return $this->container['start_age'];
    }

    /**
     * Sets start_age
     *
     * @param int $start_age start_age
     *
     * @return $this
     */
    public function setStartAge($start_age)
    {

        if (($start_age < 0)) {
            throw new \InvalidArgumentException('invalid value for $start_age when calling EducationConfig., must be bigger than or equal to 0.');
        }

        $this->container['start_age'] = $start_age;

        return $this;
    }

    /**
     * Gets total_annual_cost
     *
     * @return float
     */
    public function getTotalAnnualCost()
    {
        return $this->container['total_annual_cost'];
    }

    /**
     * Sets total_annual_cost
     *
     * @param float $total_annual_cost total_annual_cost
     *
     * @return $this
     */
    public function setTotalAnnualCost($total_annual_cost)
    {

        if (($total_annual_cost < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_annual_cost when calling EducationConfig., must be bigger than or equal to 0.');
        }

        $this->container['total_annual_cost'] = $total_annual_cost;

        return $this;
    }

    /**
     * Gets end_age
     *
     * @return int
     */
    public function getEndAge()
    {
        return $this->container['end_age'];
    }

    /**
     * Sets end_age
     *
     * @param int $end_age end_age
     *
     * @return $this
     */
    public function setEndAge($end_age)
    {

        if (($end_age < 0)) {
            throw new \InvalidArgumentException('invalid value for $end_age when calling EducationConfig., must be bigger than or equal to 0.');
        }

        $this->container['end_age'] = $end_age;

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


