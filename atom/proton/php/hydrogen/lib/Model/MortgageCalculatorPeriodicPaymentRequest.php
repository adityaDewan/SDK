<?php
/**
 * MortgageCalculatorPeriodicPaymentRequest
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
 * MortgageCalculatorPeriodicPaymentRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MortgageCalculatorPeriodicPaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mortgageCalculatorPeriodicPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'down_payment' => 'float',
        'mortgage_term' => 'int',
        'home_price' => 'float',
        'interest_rate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'down_payment' => 'float',
        'mortgage_term' => 'int32',
        'home_price' => 'float',
        'interest_rate' => 'float'
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
        'down_payment' => 'down_payment',
        'mortgage_term' => 'mortgage_term',
        'home_price' => 'home_price',
        'interest_rate' => 'interest_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'down_payment' => 'setDownPayment',
        'mortgage_term' => 'setMortgageTerm',
        'home_price' => 'setHomePrice',
        'interest_rate' => 'setInterestRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'down_payment' => 'getDownPayment',
        'mortgage_term' => 'getMortgageTerm',
        'home_price' => 'getHomePrice',
        'interest_rate' => 'getInterestRate'
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
        $this->container['down_payment'] = isset($data['down_payment']) ? $data['down_payment'] : null;
        $this->container['mortgage_term'] = isset($data['mortgage_term']) ? $data['mortgage_term'] : 360;
        $this->container['home_price'] = isset($data['home_price']) ? $data['home_price'] : null;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : 0.04;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['down_payment'] === null) {
            $invalidProperties[] = "'down_payment' can't be null";
        }
        if (($this->container['down_payment'] < 0)) {
            $invalidProperties[] = "invalid value for 'down_payment', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['mortgage_term']) && ($this->container['mortgage_term'] > 600)) {
            $invalidProperties[] = "invalid value for 'mortgage_term', must be smaller than or equal to 600.";
        }

        if (!is_null($this->container['mortgage_term']) && ($this->container['mortgage_term'] < 0)) {
            $invalidProperties[] = "invalid value for 'mortgage_term', must be bigger than or equal to 0.";
        }

        if ($this->container['home_price'] === null) {
            $invalidProperties[] = "'home_price' can't be null";
        }
        if (($this->container['home_price'] < 0)) {
            $invalidProperties[] = "invalid value for 'home_price', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['interest_rate']) && ($this->container['interest_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'interest_rate', must be bigger than or equal to -1.";
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
     * Gets down_payment
     *
     * @return float
     */
    public function getDownPayment()
    {
        return $this->container['down_payment'];
    }

    /**
     * Sets down_payment
     *
     * @param float $down_payment down_payment
     *
     * @return $this
     */
    public function setDownPayment($down_payment)
    {

        if (($down_payment < 0)) {
            throw new \InvalidArgumentException('invalid value for $down_payment when calling MortgageCalculatorPeriodicPaymentRequest., must be bigger than or equal to 0.');
        }

        $this->container['down_payment'] = $down_payment;

        return $this;
    }

    /**
     * Gets mortgage_term
     *
     * @return int
     */
    public function getMortgageTerm()
    {
        return $this->container['mortgage_term'];
    }

    /**
     * Sets mortgage_term
     *
     * @param int $mortgage_term mortgage_term
     *
     * @return $this
     */
    public function setMortgageTerm($mortgage_term)
    {

        if (!is_null($mortgage_term) && ($mortgage_term > 600)) {
            throw new \InvalidArgumentException('invalid value for $mortgage_term when calling MortgageCalculatorPeriodicPaymentRequest., must be smaller than or equal to 600.');
        }
        if (!is_null($mortgage_term) && ($mortgage_term < 0)) {
            throw new \InvalidArgumentException('invalid value for $mortgage_term when calling MortgageCalculatorPeriodicPaymentRequest., must be bigger than or equal to 0.');
        }

        $this->container['mortgage_term'] = $mortgage_term;

        return $this;
    }

    /**
     * Gets home_price
     *
     * @return float
     */
    public function getHomePrice()
    {
        return $this->container['home_price'];
    }

    /**
     * Sets home_price
     *
     * @param float $home_price home_price
     *
     * @return $this
     */
    public function setHomePrice($home_price)
    {

        if (($home_price < 0)) {
            throw new \InvalidArgumentException('invalid value for $home_price when calling MortgageCalculatorPeriodicPaymentRequest., must be bigger than or equal to 0.');
        }

        $this->container['home_price'] = $home_price;

        return $this;
    }

    /**
     * Gets interest_rate
     *
     * @return float
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param float $interest_rate interest_rate
     *
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {

        if (!is_null($interest_rate) && ($interest_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $interest_rate when calling MortgageCalculatorPeriodicPaymentRequest., must be bigger than or equal to -1.');
        }

        $this->container['interest_rate'] = $interest_rate;

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


