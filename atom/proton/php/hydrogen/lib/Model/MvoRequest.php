<?php
/**
 * MvoRequest
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
 * MvoRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MvoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mvoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use_proxy_data' => 'bool',
        'start_date' => '\DateTime',
        'tgt_val' => 'float',
        'end_date' => '\DateTime',
        'w_config' => '\com\hydrogen\proton\Model\WConfig',
        'sec_types' => 'string[]',
        'tgt_type' => 'string',
        'min_assets' => 'int',
        'market_data_source' => 'string',
        'w_asset_config' => 'object',
        'tickers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'use_proxy_data' => null,
        'start_date' => 'date',
        'tgt_val' => 'float',
        'end_date' => 'date',
        'w_config' => null,
        'sec_types' => null,
        'tgt_type' => null,
        'min_assets' => 'int32',
        'market_data_source' => null,
        'w_asset_config' => null,
        'tickers' => null
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
        'use_proxy_data' => 'use_proxy_data',
        'start_date' => 'start_date',
        'tgt_val' => 'tgt_val',
        'end_date' => 'end_date',
        'w_config' => 'w_config',
        'sec_types' => 'sec_types',
        'tgt_type' => 'tgt_type',
        'min_assets' => 'min_assets',
        'market_data_source' => 'market_data_source',
        'w_asset_config' => 'w_asset_config',
        'tickers' => 'tickers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_proxy_data' => 'setUseProxyData',
        'start_date' => 'setStartDate',
        'tgt_val' => 'setTgtVal',
        'end_date' => 'setEndDate',
        'w_config' => 'setWConfig',
        'sec_types' => 'setSecTypes',
        'tgt_type' => 'setTgtType',
        'min_assets' => 'setMinAssets',
        'market_data_source' => 'setMarketDataSource',
        'w_asset_config' => 'setWAssetConfig',
        'tickers' => 'setTickers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_proxy_data' => 'getUseProxyData',
        'start_date' => 'getStartDate',
        'tgt_val' => 'getTgtVal',
        'end_date' => 'getEndDate',
        'w_config' => 'getWConfig',
        'sec_types' => 'getSecTypes',
        'tgt_type' => 'getTgtType',
        'min_assets' => 'getMinAssets',
        'market_data_source' => 'getMarketDataSource',
        'w_asset_config' => 'getWAssetConfig',
        'tickers' => 'getTickers'
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

    const SEC_TYPES_MAJOR = 'major';
    const SEC_TYPES_MINOR = 'minor';
    const SEC_TYPES_CASH = 'cash';
    const TGT_TYPE_RISK = 'risk';
    const TGT_TYPE__RETURN = 'return';
    const MARKET_DATA_SOURCE_NUCLEUS = 'nucleus';
    const MARKET_DATA_SOURCE_INTEGRATION = 'integration';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecTypesAllowableValues()
    {
        return [
            self::SEC_TYPES_MAJOR,
            self::SEC_TYPES_MINOR,
            self::SEC_TYPES_CASH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTgtTypeAllowableValues()
    {
        return [
            self::TGT_TYPE_RISK,
            self::TGT_TYPE__RETURN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketDataSourceAllowableValues()
    {
        return [
            self::MARKET_DATA_SOURCE_NUCLEUS,
            self::MARKET_DATA_SOURCE_INTEGRATION,
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
        $this->container['use_proxy_data'] = isset($data['use_proxy_data']) ? $data['use_proxy_data'] : false;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['tgt_val'] = isset($data['tgt_val']) ? $data['tgt_val'] : 0.0;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['w_config'] = isset($data['w_config']) ? $data['w_config'] : null;
        $this->container['sec_types'] = isset($data['sec_types']) ? $data['sec_types'] : null;
        $this->container['tgt_type'] = isset($data['tgt_type']) ? $data['tgt_type'] : 'null';
        $this->container['min_assets'] = isset($data['min_assets']) ? $data['min_assets'] : null;
        $this->container['market_data_source'] = isset($data['market_data_source']) ? $data['market_data_source'] : 'nucleus';
        $this->container['w_asset_config'] = isset($data['w_asset_config']) ? $data['w_asset_config'] : null;
        $this->container['tickers'] = isset($data['tickers']) ? $data['tickers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['w_config'] === null) {
            $invalidProperties[] = "'w_config' can't be null";
        }
        if ($this->container['sec_types'] === null) {
            $invalidProperties[] = "'sec_types' can't be null";
        }
        $allowedValues = $this->getTgtTypeAllowableValues();
        if (!is_null($this->container['tgt_type']) && !in_array($this->container['tgt_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tgt_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['min_assets'] === null) {
            $invalidProperties[] = "'min_assets' can't be null";
        }
        if (($this->container['min_assets'] < 1)) {
            $invalidProperties[] = "invalid value for 'min_assets', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getMarketDataSourceAllowableValues();
        if (!is_null($this->container['market_data_source']) && !in_array($this->container['market_data_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'market_data_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tickers'] === null) {
            $invalidProperties[] = "'tickers' can't be null";
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
     * Gets use_proxy_data
     *
     * @return bool
     */
    public function getUseProxyData()
    {
        return $this->container['use_proxy_data'];
    }

    /**
     * Sets use_proxy_data
     *
     * @param bool $use_proxy_data use_proxy_data
     *
     * @return $this
     */
    public function setUseProxyData($use_proxy_data)
    {
        $this->container['use_proxy_data'] = $use_proxy_data;

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
     * Gets tgt_val
     *
     * @return float
     */
    public function getTgtVal()
    {
        return $this->container['tgt_val'];
    }

    /**
     * Sets tgt_val
     *
     * @param float $tgt_val tgt_val
     *
     * @return $this
     */
    public function setTgtVal($tgt_val)
    {
        $this->container['tgt_val'] = $tgt_val;

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
     * Gets w_config
     *
     * @return \com\hydrogen\proton\Model\WConfig
     */
    public function getWConfig()
    {
        return $this->container['w_config'];
    }

    /**
     * Sets w_config
     *
     * @param \com\hydrogen\proton\Model\WConfig $w_config w_config
     *
     * @return $this
     */
    public function setWConfig($w_config)
    {
        $this->container['w_config'] = $w_config;

        return $this;
    }

    /**
     * Gets sec_types
     *
     * @return string[]
     */
    public function getSecTypes()
    {
        return $this->container['sec_types'];
    }

    /**
     * Sets sec_types
     *
     * @param string[] $sec_types sec_types
     *
     * @return $this
     */
    public function setSecTypes($sec_types)
    {
        $allowedValues = $this->getSecTypesAllowableValues();
        if (array_diff($sec_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sec_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sec_types'] = $sec_types;

        return $this;
    }

    /**
     * Gets tgt_type
     *
     * @return string
     */
    public function getTgtType()
    {
        return $this->container['tgt_type'];
    }

    /**
     * Sets tgt_type
     *
     * @param string $tgt_type tgt_type
     *
     * @return $this
     */
    public function setTgtType($tgt_type)
    {
        $allowedValues = $this->getTgtTypeAllowableValues();
        if (!is_null($tgt_type) && !in_array($tgt_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tgt_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tgt_type'] = $tgt_type;

        return $this;
    }

    /**
     * Gets min_assets
     *
     * @return int
     */
    public function getMinAssets()
    {
        return $this->container['min_assets'];
    }

    /**
     * Sets min_assets
     *
     * @param int $min_assets min_assets
     *
     * @return $this
     */
    public function setMinAssets($min_assets)
    {

        if (($min_assets < 1)) {
            throw new \InvalidArgumentException('invalid value for $min_assets when calling MvoRequest., must be bigger than or equal to 1.');
        }

        $this->container['min_assets'] = $min_assets;

        return $this;
    }

    /**
     * Gets market_data_source
     *
     * @return string
     */
    public function getMarketDataSource()
    {
        return $this->container['market_data_source'];
    }

    /**
     * Sets market_data_source
     *
     * @param string $market_data_source market_data_source
     *
     * @return $this
     */
    public function setMarketDataSource($market_data_source)
    {
        $allowedValues = $this->getMarketDataSourceAllowableValues();
        if (!is_null($market_data_source) && !in_array($market_data_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'market_data_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['market_data_source'] = $market_data_source;

        return $this;
    }

    /**
     * Gets w_asset_config
     *
     * @return object
     */
    public function getWAssetConfig()
    {
        return $this->container['w_asset_config'];
    }

    /**
     * Sets w_asset_config
     *
     * @param object $w_asset_config w_asset_config
     *
     * @return $this
     */
    public function setWAssetConfig($w_asset_config)
    {
        $this->container['w_asset_config'] = $w_asset_config;

        return $this;
    }

    /**
     * Gets tickers
     *
     * @return string[]
     */
    public function getTickers()
    {
        return $this->container['tickers'];
    }

    /**
     * Sets tickers
     *
     * @param string[] $tickers tickers
     *
     * @return $this
     */
    public function setTickers($tickers)
    {
        $this->container['tickers'] = $tickers;

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


