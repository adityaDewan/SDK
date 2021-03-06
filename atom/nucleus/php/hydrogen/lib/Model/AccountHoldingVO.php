<?php
/**
 * AccountHoldingVO
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
 * AccountHoldingVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountHoldingVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountHoldingVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_holding_date' => '\DateTime',
        'amount' => 'double',
        'security_asset_class' => 'string',
        'security_category' => 'string',
        'security_id' => 'string',
        'security_industry' => 'string',
        'security_name' => 'string',
        'security_sector' => 'string',
        'security_ticker' => 'string',
        'shares' => 'double',
        'weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_holding_date' => 'date-time',
        'amount' => 'double',
        'security_asset_class' => null,
        'security_category' => null,
        'security_id' => 'uuid',
        'security_industry' => null,
        'security_name' => null,
        'security_sector' => null,
        'security_ticker' => null,
        'shares' => 'double',
        'weight' => 'double'
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
        'account_holding_date' => 'account_holding_date',
        'amount' => 'amount',
        'security_asset_class' => 'security_asset_class',
        'security_category' => 'security_category',
        'security_id' => 'security_id',
        'security_industry' => 'security_industry',
        'security_name' => 'security_name',
        'security_sector' => 'security_sector',
        'security_ticker' => 'security_ticker',
        'shares' => 'shares',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_holding_date' => 'setAccountHoldingDate',
        'amount' => 'setAmount',
        'security_asset_class' => 'setSecurityAssetClass',
        'security_category' => 'setSecurityCategory',
        'security_id' => 'setSecurityId',
        'security_industry' => 'setSecurityIndustry',
        'security_name' => 'setSecurityName',
        'security_sector' => 'setSecuritySector',
        'security_ticker' => 'setSecurityTicker',
        'shares' => 'setShares',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_holding_date' => 'getAccountHoldingDate',
        'amount' => 'getAmount',
        'security_asset_class' => 'getSecurityAssetClass',
        'security_category' => 'getSecurityCategory',
        'security_id' => 'getSecurityId',
        'security_industry' => 'getSecurityIndustry',
        'security_name' => 'getSecurityName',
        'security_sector' => 'getSecuritySector',
        'security_ticker' => 'getSecurityTicker',
        'shares' => 'getShares',
        'weight' => 'getWeight'
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
        $this->container['account_holding_date'] = isset($data['account_holding_date']) ? $data['account_holding_date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['security_asset_class'] = isset($data['security_asset_class']) ? $data['security_asset_class'] : null;
        $this->container['security_category'] = isset($data['security_category']) ? $data['security_category'] : null;
        $this->container['security_id'] = isset($data['security_id']) ? $data['security_id'] : null;
        $this->container['security_industry'] = isset($data['security_industry']) ? $data['security_industry'] : null;
        $this->container['security_name'] = isset($data['security_name']) ? $data['security_name'] : null;
        $this->container['security_sector'] = isset($data['security_sector']) ? $data['security_sector'] : null;
        $this->container['security_ticker'] = isset($data['security_ticker']) ? $data['security_ticker'] : null;
        $this->container['shares'] = isset($data['shares']) ? $data['shares'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
     * Gets account_holding_date
     *
     * @return \DateTime
     */
    public function getAccountHoldingDate()
    {
        return $this->container['account_holding_date'];
    }

    /**
     * Sets account_holding_date
     *
     * @param \DateTime $account_holding_date account_holding_date
     *
     * @return $this
     */
    public function setAccountHoldingDate($account_holding_date)
    {
        $this->container['account_holding_date'] = $account_holding_date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets security_asset_class
     *
     * @return string
     */
    public function getSecurityAssetClass()
    {
        return $this->container['security_asset_class'];
    }

    /**
     * Sets security_asset_class
     *
     * @param string $security_asset_class security_asset_class
     *
     * @return $this
     */
    public function setSecurityAssetClass($security_asset_class)
    {
        $this->container['security_asset_class'] = $security_asset_class;

        return $this;
    }

    /**
     * Gets security_category
     *
     * @return string
     */
    public function getSecurityCategory()
    {
        return $this->container['security_category'];
    }

    /**
     * Sets security_category
     *
     * @param string $security_category security_category
     *
     * @return $this
     */
    public function setSecurityCategory($security_category)
    {
        $this->container['security_category'] = $security_category;

        return $this;
    }

    /**
     * Gets security_id
     *
     * @return string
     */
    public function getSecurityId()
    {
        return $this->container['security_id'];
    }

    /**
     * Sets security_id
     *
     * @param string $security_id security_id
     *
     * @return $this
     */
    public function setSecurityId($security_id)
    {
        $this->container['security_id'] = $security_id;

        return $this;
    }

    /**
     * Gets security_industry
     *
     * @return string
     */
    public function getSecurityIndustry()
    {
        return $this->container['security_industry'];
    }

    /**
     * Sets security_industry
     *
     * @param string $security_industry security_industry
     *
     * @return $this
     */
    public function setSecurityIndustry($security_industry)
    {
        $this->container['security_industry'] = $security_industry;

        return $this;
    }

    /**
     * Gets security_name
     *
     * @return string
     */
    public function getSecurityName()
    {
        return $this->container['security_name'];
    }

    /**
     * Sets security_name
     *
     * @param string $security_name security_name
     *
     * @return $this
     */
    public function setSecurityName($security_name)
    {
        $this->container['security_name'] = $security_name;

        return $this;
    }

    /**
     * Gets security_sector
     *
     * @return string
     */
    public function getSecuritySector()
    {
        return $this->container['security_sector'];
    }

    /**
     * Sets security_sector
     *
     * @param string $security_sector security_sector
     *
     * @return $this
     */
    public function setSecuritySector($security_sector)
    {
        $this->container['security_sector'] = $security_sector;

        return $this;
    }

    /**
     * Gets security_ticker
     *
     * @return string
     */
    public function getSecurityTicker()
    {
        return $this->container['security_ticker'];
    }

    /**
     * Sets security_ticker
     *
     * @param string $security_ticker security_ticker
     *
     * @return $this
     */
    public function setSecurityTicker($security_ticker)
    {
        $this->container['security_ticker'] = $security_ticker;

        return $this;
    }

    /**
     * Gets shares
     *
     * @return double
     */
    public function getShares()
    {
        return $this->container['shares'];
    }

    /**
     * Sets shares
     *
     * @param double $shares shares
     *
     * @return $this
     */
    public function setShares($shares)
    {
        $this->container['shares'] = $shares;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


