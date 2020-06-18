<?php
/**
 * CashFlowAnalysisRequest
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
 * CashFlowAnalysisRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashFlowAnalysisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cashFlowAnalysisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'show_history' => 'bool',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'client_id' => 'string',
        'currency_code' => 'string',
        'show_income_details' => 'bool',
        'benchmark_end_date' => '\DateTime',
        'show_spending_details' => 'bool',
        'benchmark_start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'show_history' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'client_id' => 'uuid',
        'currency_code' => null,
        'show_income_details' => null,
        'benchmark_end_date' => 'date',
        'show_spending_details' => null,
        'benchmark_start_date' => 'date'
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
        'show_history' => 'show_history',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'client_id' => 'client_id',
        'currency_code' => 'currency_code',
        'show_income_details' => 'show_income_details',
        'benchmark_end_date' => 'benchmark_end_date',
        'show_spending_details' => 'show_spending_details',
        'benchmark_start_date' => 'benchmark_start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_history' => 'setShowHistory',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'client_id' => 'setClientId',
        'currency_code' => 'setCurrencyCode',
        'show_income_details' => 'setShowIncomeDetails',
        'benchmark_end_date' => 'setBenchmarkEndDate',
        'show_spending_details' => 'setShowSpendingDetails',
        'benchmark_start_date' => 'setBenchmarkStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_history' => 'getShowHistory',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'client_id' => 'getClientId',
        'currency_code' => 'getCurrencyCode',
        'show_income_details' => 'getShowIncomeDetails',
        'benchmark_end_date' => 'getBenchmarkEndDate',
        'show_spending_details' => 'getShowSpendingDetails',
        'benchmark_start_date' => 'getBenchmarkStartDate'
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
        $this->container['show_history'] = isset($data['show_history']) ? $data['show_history'] : false;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : 'USD';
        $this->container['show_income_details'] = isset($data['show_income_details']) ? $data['show_income_details'] : false;
        $this->container['benchmark_end_date'] = isset($data['benchmark_end_date']) ? $data['benchmark_end_date'] : null;
        $this->container['show_spending_details'] = isset($data['show_spending_details']) ? $data['show_spending_details'] : false;
        $this->container['benchmark_start_date'] = isset($data['benchmark_start_date']) ? $data['benchmark_start_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
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
     * Gets show_history
     *
     * @return bool
     */
    public function getShowHistory()
    {
        return $this->container['show_history'];
    }

    /**
     * Sets show_history
     *
     * @param bool $show_history show_history
     *
     * @return $this
     */
    public function setShowHistory($show_history)
    {
        $this->container['show_history'] = $show_history;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets show_income_details
     *
     * @return bool
     */
    public function getShowIncomeDetails()
    {
        return $this->container['show_income_details'];
    }

    /**
     * Sets show_income_details
     *
     * @param bool $show_income_details show_income_details
     *
     * @return $this
     */
    public function setShowIncomeDetails($show_income_details)
    {
        $this->container['show_income_details'] = $show_income_details;

        return $this;
    }

    /**
     * Gets benchmark_end_date
     *
     * @return \DateTime
     */
    public function getBenchmarkEndDate()
    {
        return $this->container['benchmark_end_date'];
    }

    /**
     * Sets benchmark_end_date
     *
     * @param \DateTime $benchmark_end_date benchmark_end_date
     *
     * @return $this
     */
    public function setBenchmarkEndDate($benchmark_end_date)
    {
        $this->container['benchmark_end_date'] = $benchmark_end_date;

        return $this;
    }

    /**
     * Gets show_spending_details
     *
     * @return bool
     */
    public function getShowSpendingDetails()
    {
        return $this->container['show_spending_details'];
    }

    /**
     * Sets show_spending_details
     *
     * @param bool $show_spending_details show_spending_details
     *
     * @return $this
     */
    public function setShowSpendingDetails($show_spending_details)
    {
        $this->container['show_spending_details'] = $show_spending_details;

        return $this;
    }

    /**
     * Gets benchmark_start_date
     *
     * @return \DateTime
     */
    public function getBenchmarkStartDate()
    {
        return $this->container['benchmark_start_date'];
    }

    /**
     * Sets benchmark_start_date
     *
     * @param \DateTime $benchmark_start_date benchmark_start_date
     *
     * @return $this
     */
    public function setBenchmarkStartDate($benchmark_start_date)
    {
        $this->container['benchmark_start_date'] = $benchmark_start_date;

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


