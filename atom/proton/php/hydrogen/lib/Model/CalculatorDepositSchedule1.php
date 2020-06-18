<?php
/**
 * CalculatorDepositSchedule1
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
 * CalculatorDepositSchedule1 Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalculatorDepositSchedule1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CalculatorDepositSchedule1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deposit_amount' => 'float',
        'deposit_frequency_interval' => 'string',
        'adjust_deposit_for_inflation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deposit_amount' => 'float',
        'deposit_frequency_interval' => null,
        'adjust_deposit_for_inflation' => null
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
        'deposit_amount' => 'deposit_amount',
        'deposit_frequency_interval' => 'deposit_frequency_interval',
        'adjust_deposit_for_inflation' => 'adjust_deposit_for_inflation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deposit_amount' => 'setDepositAmount',
        'deposit_frequency_interval' => 'setDepositFrequencyInterval',
        'adjust_deposit_for_inflation' => 'setAdjustDepositForInflation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deposit_amount' => 'getDepositAmount',
        'deposit_frequency_interval' => 'getDepositFrequencyInterval',
        'adjust_deposit_for_inflation' => 'getAdjustDepositForInflation'
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

    const DEPOSIT_FREQUENCY_INTERVAL_YEAR = 'year';
    const DEPOSIT_FREQUENCY_INTERVAL_MONTH = 'month';
    const DEPOSIT_FREQUENCY_INTERVAL_QUARTER = 'quarter';
    const DEPOSIT_FREQUENCY_INTERVAL_WEEK = 'week';
    const DEPOSIT_FREQUENCY_INTERVAL_DAY = 'day';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepositFrequencyIntervalAllowableValues()
    {
        return [
            self::DEPOSIT_FREQUENCY_INTERVAL_YEAR,
            self::DEPOSIT_FREQUENCY_INTERVAL_MONTH,
            self::DEPOSIT_FREQUENCY_INTERVAL_QUARTER,
            self::DEPOSIT_FREQUENCY_INTERVAL_WEEK,
            self::DEPOSIT_FREQUENCY_INTERVAL_DAY,
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
        $this->container['deposit_amount'] = isset($data['deposit_amount']) ? $data['deposit_amount'] : 0.0;
        $this->container['deposit_frequency_interval'] = isset($data['deposit_frequency_interval']) ? $data['deposit_frequency_interval'] : 'year';
        $this->container['adjust_deposit_for_inflation'] = isset($data['adjust_deposit_for_inflation']) ? $data['adjust_deposit_for_inflation'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['deposit_amount']) && ($this->container['deposit_amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'deposit_amount', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getDepositFrequencyIntervalAllowableValues();
        if (!is_null($this->container['deposit_frequency_interval']) && !in_array($this->container['deposit_frequency_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deposit_frequency_interval', must be one of '%s'",
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
     * Gets deposit_amount
     *
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->container['deposit_amount'];
    }

    /**
     * Sets deposit_amount
     *
     * @param float $deposit_amount deposit_amount
     *
     * @return $this
     */
    public function setDepositAmount($deposit_amount)
    {

        if (!is_null($deposit_amount) && ($deposit_amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $deposit_amount when calling CalculatorDepositSchedule1., must be bigger than or equal to 0.');
        }

        $this->container['deposit_amount'] = $deposit_amount;

        return $this;
    }

    /**
     * Gets deposit_frequency_interval
     *
     * @return string
     */
    public function getDepositFrequencyInterval()
    {
        return $this->container['deposit_frequency_interval'];
    }

    /**
     * Sets deposit_frequency_interval
     *
     * @param string $deposit_frequency_interval deposit_frequency_interval
     *
     * @return $this
     */
    public function setDepositFrequencyInterval($deposit_frequency_interval)
    {
        $allowedValues = $this->getDepositFrequencyIntervalAllowableValues();
        if (!is_null($deposit_frequency_interval) && !in_array($deposit_frequency_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deposit_frequency_interval', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deposit_frequency_interval'] = $deposit_frequency_interval;

        return $this;
    }

    /**
     * Gets adjust_deposit_for_inflation
     *
     * @return bool
     */
    public function getAdjustDepositForInflation()
    {
        return $this->container['adjust_deposit_for_inflation'];
    }

    /**
     * Sets adjust_deposit_for_inflation
     *
     * @param bool $adjust_deposit_for_inflation adjust_deposit_for_inflation
     *
     * @return $this
     */
    public function setAdjustDepositForInflation($adjust_deposit_for_inflation)
    {
        $this->container['adjust_deposit_for_inflation'] = $adjust_deposit_for_inflation;

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


