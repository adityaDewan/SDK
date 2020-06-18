<?php
/**
 * MdQuoteItemVO
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
 * MdQuoteItemVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MdQuoteItemVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MdQuoteItemVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ask' => 'double',
        'bid' => 'double',
        'change' => 'double',
        'close' => 'double',
        'currency_code' => 'string',
        'day_range' => 'string',
        'exchange' => 'string',
        'high' => 'double',
        'last_trade' => 'double',
        'last_trade_time_stamp' => '\DateTime',
        'low' => 'double',
        'market_cap' => 'string',
        'nucleus_security_id' => 'string',
        'open' => 'double',
        'prev_close' => 'double',
        'ticker' => 'string',
        'volume' => 'int',
        'year_range' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ask' => 'double',
        'bid' => 'double',
        'change' => 'double',
        'close' => 'double',
        'currency_code' => null,
        'day_range' => null,
        'exchange' => null,
        'high' => 'double',
        'last_trade' => 'double',
        'last_trade_time_stamp' => 'date-time',
        'low' => 'double',
        'market_cap' => null,
        'nucleus_security_id' => 'uuid',
        'open' => 'double',
        'prev_close' => 'double',
        'ticker' => null,
        'volume' => 'int64',
        'year_range' => null
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
        'ask' => 'ask',
        'bid' => 'bid',
        'change' => 'change',
        'close' => 'close',
        'currency_code' => 'currency_code',
        'day_range' => 'day_range',
        'exchange' => 'exchange',
        'high' => 'high',
        'last_trade' => 'last_trade',
        'last_trade_time_stamp' => 'last_trade_time_stamp',
        'low' => 'low',
        'market_cap' => 'market_cap',
        'nucleus_security_id' => 'nucleus_security_id',
        'open' => 'open',
        'prev_close' => 'prev_close',
        'ticker' => 'ticker',
        'volume' => 'volume',
        'year_range' => 'year_range'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ask' => 'setAsk',
        'bid' => 'setBid',
        'change' => 'setChange',
        'close' => 'setClose',
        'currency_code' => 'setCurrencyCode',
        'day_range' => 'setDayRange',
        'exchange' => 'setExchange',
        'high' => 'setHigh',
        'last_trade' => 'setLastTrade',
        'last_trade_time_stamp' => 'setLastTradeTimeStamp',
        'low' => 'setLow',
        'market_cap' => 'setMarketCap',
        'nucleus_security_id' => 'setNucleusSecurityId',
        'open' => 'setOpen',
        'prev_close' => 'setPrevClose',
        'ticker' => 'setTicker',
        'volume' => 'setVolume',
        'year_range' => 'setYearRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ask' => 'getAsk',
        'bid' => 'getBid',
        'change' => 'getChange',
        'close' => 'getClose',
        'currency_code' => 'getCurrencyCode',
        'day_range' => 'getDayRange',
        'exchange' => 'getExchange',
        'high' => 'getHigh',
        'last_trade' => 'getLastTrade',
        'last_trade_time_stamp' => 'getLastTradeTimeStamp',
        'low' => 'getLow',
        'market_cap' => 'getMarketCap',
        'nucleus_security_id' => 'getNucleusSecurityId',
        'open' => 'getOpen',
        'prev_close' => 'getPrevClose',
        'ticker' => 'getTicker',
        'volume' => 'getVolume',
        'year_range' => 'getYearRange'
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
        $this->container['ask'] = isset($data['ask']) ? $data['ask'] : null;
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['change'] = isset($data['change']) ? $data['change'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['day_range'] = isset($data['day_range']) ? $data['day_range'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['high'] = isset($data['high']) ? $data['high'] : null;
        $this->container['last_trade'] = isset($data['last_trade']) ? $data['last_trade'] : null;
        $this->container['last_trade_time_stamp'] = isset($data['last_trade_time_stamp']) ? $data['last_trade_time_stamp'] : null;
        $this->container['low'] = isset($data['low']) ? $data['low'] : null;
        $this->container['market_cap'] = isset($data['market_cap']) ? $data['market_cap'] : null;
        $this->container['nucleus_security_id'] = isset($data['nucleus_security_id']) ? $data['nucleus_security_id'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['prev_close'] = isset($data['prev_close']) ? $data['prev_close'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['year_range'] = isset($data['year_range']) ? $data['year_range'] : null;
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
     * Gets ask
     *
     * @return double
     */
    public function getAsk()
    {
        return $this->container['ask'];
    }

    /**
     * Sets ask
     *
     * @param double $ask ask
     *
     * @return $this
     */
    public function setAsk($ask)
    {
        $this->container['ask'] = $ask;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return double
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param double $bid bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets change
     *
     * @return double
     */
    public function getChange()
    {
        return $this->container['change'];
    }

    /**
     * Sets change
     *
     * @param double $change change
     *
     * @return $this
     */
    public function setChange($change)
    {
        $this->container['change'] = $change;

        return $this;
    }

    /**
     * Gets close
     *
     * @return double
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param double $close close
     *
     * @return $this
     */
    public function setClose($close)
    {
        $this->container['close'] = $close;

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
     * Gets day_range
     *
     * @return string
     */
    public function getDayRange()
    {
        return $this->container['day_range'];
    }

    /**
     * Sets day_range
     *
     * @param string $day_range day_range
     *
     * @return $this
     */
    public function setDayRange($day_range)
    {
        $this->container['day_range'] = $day_range;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange exchange
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets high
     *
     * @return double
     */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
     * Sets high
     *
     * @param double $high high
     *
     * @return $this
     */
    public function setHigh($high)
    {
        $this->container['high'] = $high;

        return $this;
    }

    /**
     * Gets last_trade
     *
     * @return double
     */
    public function getLastTrade()
    {
        return $this->container['last_trade'];
    }

    /**
     * Sets last_trade
     *
     * @param double $last_trade last_trade
     *
     * @return $this
     */
    public function setLastTrade($last_trade)
    {
        $this->container['last_trade'] = $last_trade;

        return $this;
    }

    /**
     * Gets last_trade_time_stamp
     *
     * @return \DateTime
     */
    public function getLastTradeTimeStamp()
    {
        return $this->container['last_trade_time_stamp'];
    }

    /**
     * Sets last_trade_time_stamp
     *
     * @param \DateTime $last_trade_time_stamp last_trade_time_stamp
     *
     * @return $this
     */
    public function setLastTradeTimeStamp($last_trade_time_stamp)
    {
        $this->container['last_trade_time_stamp'] = $last_trade_time_stamp;

        return $this;
    }

    /**
     * Gets low
     *
     * @return double
     */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
     * Sets low
     *
     * @param double $low low
     *
     * @return $this
     */
    public function setLow($low)
    {
        $this->container['low'] = $low;

        return $this;
    }

    /**
     * Gets market_cap
     *
     * @return string
     */
    public function getMarketCap()
    {
        return $this->container['market_cap'];
    }

    /**
     * Sets market_cap
     *
     * @param string $market_cap market_cap
     *
     * @return $this
     */
    public function setMarketCap($market_cap)
    {
        $this->container['market_cap'] = $market_cap;

        return $this;
    }

    /**
     * Gets nucleus_security_id
     *
     * @return string
     */
    public function getNucleusSecurityId()
    {
        return $this->container['nucleus_security_id'];
    }

    /**
     * Sets nucleus_security_id
     *
     * @param string $nucleus_security_id nucleus_security_id
     *
     * @return $this
     */
    public function setNucleusSecurityId($nucleus_security_id)
    {
        $this->container['nucleus_security_id'] = $nucleus_security_id;

        return $this;
    }

    /**
     * Gets open
     *
     * @return double
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param double $open open
     *
     * @return $this
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets prev_close
     *
     * @return double
     */
    public function getPrevClose()
    {
        return $this->container['prev_close'];
    }

    /**
     * Sets prev_close
     *
     * @param double $prev_close prev_close
     *
     * @return $this
     */
    public function setPrevClose($prev_close)
    {
        $this->container['prev_close'] = $prev_close;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets year_range
     *
     * @return string
     */
    public function getYearRange()
    {
        return $this->container['year_range'];
    }

    /**
     * Sets year_range
     *
     * @param string $year_range year_range
     *
     * @return $this
     */
    public function setYearRange($year_range)
    {
        $this->container['year_range'] = $year_range;

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


