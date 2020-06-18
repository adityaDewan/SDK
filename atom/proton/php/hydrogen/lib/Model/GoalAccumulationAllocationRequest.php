<?php
/**
 * GoalAccumulationAllocationRequest
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
 * GoalAccumulationAllocationRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GoalAccumulationAllocationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'goalAccumulationAllocationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allocations' => 'string[]',
        'client_id' => 'string',
        'adjust_for_compounding' => 'bool',
        'compounding_rate' => 'float',
        'horizon_frequency' => 'string',
        'conf_tgt' => 'float',
        'risk_score' => 'float',
        'market_data_source' => 'string',
        'trading_days_per_year' => 'int',
        'withdrawal_tax' => 'float',
        'thresh_type' => 'string',
        'recommend_type' => 'string',
        'goal_id' => 'string',
        'deposit_config' => 'object[]',
        'opt_config' => 'object',
        'goal_config' => 'object',
        'n' => 'int',
        'recommendation_config' => 'object',
        'use_proxy_data' => 'bool',
        'thresh' => 'float',
        'curr_inv' => 'float',
        'remove_outliers' => 'bool',
        'allocation_priority' => 'string',
        'allocation_method' => 'string',
        'horizon' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allocations' => 'uuid',
        'client_id' => 'uuid',
        'adjust_for_compounding' => null,
        'compounding_rate' => 'float',
        'horizon_frequency' => null,
        'conf_tgt' => 'float',
        'risk_score' => null,
        'market_data_source' => null,
        'trading_days_per_year' => 'int32',
        'withdrawal_tax' => 'float',
        'thresh_type' => null,
        'recommend_type' => null,
        'goal_id' => 'uuid',
        'deposit_config' => null,
        'opt_config' => null,
        'goal_config' => null,
        'n' => 'int32',
        'recommendation_config' => null,
        'use_proxy_data' => null,
        'thresh' => null,
        'curr_inv' => null,
        'remove_outliers' => null,
        'allocation_priority' => null,
        'allocation_method' => null,
        'horizon' => 'int32'
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
        'allocations' => 'allocations',
        'client_id' => 'client_id',
        'adjust_for_compounding' => 'adjust_for_compounding',
        'compounding_rate' => 'compounding_rate',
        'horizon_frequency' => 'horizon_frequency',
        'conf_tgt' => 'conf_tgt',
        'risk_score' => 'risk_score',
        'market_data_source' => 'market_data_source',
        'trading_days_per_year' => 'trading_days_per_year',
        'withdrawal_tax' => 'withdrawal_tax',
        'thresh_type' => 'thresh_type',
        'recommend_type' => 'recommend_type',
        'goal_id' => 'goal_id',
        'deposit_config' => 'deposit_config',
        'opt_config' => 'opt_config',
        'goal_config' => 'goal_config',
        'n' => 'n',
        'recommendation_config' => 'recommendation_config',
        'use_proxy_data' => 'use_proxy_data',
        'thresh' => 'thresh',
        'curr_inv' => 'curr_inv',
        'remove_outliers' => 'remove_outliers',
        'allocation_priority' => 'allocation_priority',
        'allocation_method' => 'allocation_method',
        'horizon' => 'horizon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocations' => 'setAllocations',
        'client_id' => 'setClientId',
        'adjust_for_compounding' => 'setAdjustForCompounding',
        'compounding_rate' => 'setCompoundingRate',
        'horizon_frequency' => 'setHorizonFrequency',
        'conf_tgt' => 'setConfTgt',
        'risk_score' => 'setRiskScore',
        'market_data_source' => 'setMarketDataSource',
        'trading_days_per_year' => 'setTradingDaysPerYear',
        'withdrawal_tax' => 'setWithdrawalTax',
        'thresh_type' => 'setThreshType',
        'recommend_type' => 'setRecommendType',
        'goal_id' => 'setGoalId',
        'deposit_config' => 'setDepositConfig',
        'opt_config' => 'setOptConfig',
        'goal_config' => 'setGoalConfig',
        'n' => 'setN',
        'recommendation_config' => 'setRecommendationConfig',
        'use_proxy_data' => 'setUseProxyData',
        'thresh' => 'setThresh',
        'curr_inv' => 'setCurrInv',
        'remove_outliers' => 'setRemoveOutliers',
        'allocation_priority' => 'setAllocationPriority',
        'allocation_method' => 'setAllocationMethod',
        'horizon' => 'setHorizon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocations' => 'getAllocations',
        'client_id' => 'getClientId',
        'adjust_for_compounding' => 'getAdjustForCompounding',
        'compounding_rate' => 'getCompoundingRate',
        'horizon_frequency' => 'getHorizonFrequency',
        'conf_tgt' => 'getConfTgt',
        'risk_score' => 'getRiskScore',
        'market_data_source' => 'getMarketDataSource',
        'trading_days_per_year' => 'getTradingDaysPerYear',
        'withdrawal_tax' => 'getWithdrawalTax',
        'thresh_type' => 'getThreshType',
        'recommend_type' => 'getRecommendType',
        'goal_id' => 'getGoalId',
        'deposit_config' => 'getDepositConfig',
        'opt_config' => 'getOptConfig',
        'goal_config' => 'getGoalConfig',
        'n' => 'getN',
        'recommendation_config' => 'getRecommendationConfig',
        'use_proxy_data' => 'getUseProxyData',
        'thresh' => 'getThresh',
        'curr_inv' => 'getCurrInv',
        'remove_outliers' => 'getRemoveOutliers',
        'allocation_priority' => 'getAllocationPriority',
        'allocation_method' => 'getAllocationMethod',
        'horizon' => 'getHorizon'
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

    const HORIZON_FREQUENCY_YEAR = 'year';
    const HORIZON_FREQUENCY_SIX_MONTHS = 'six_months';
    const HORIZON_FREQUENCY_QUARTER = 'quarter';
    const HORIZON_FREQUENCY_MONTH = 'month';
    const HORIZON_FREQUENCY_TWO_WEEKS = 'two_weeks';
    const HORIZON_FREQUENCY_WEEK = 'week';
    const HORIZON_FREQUENCY_DAY = 'day';
    const MARKET_DATA_SOURCE_NUCLEUS = 'nucleus';
    const MARKET_DATA_SOURCE_INTEGRATION = 'integration';
    const THRESH_TYPE_AMNT = 'amnt';
    const THRESH_TYPE_PERC = 'perc';
    const RECOMMEND_TYPE_RECURRING = 'recurring';
    const RECOMMEND_TYPE_ONE_TIME = 'one-time';
    const RECOMMEND_TYPE_COMBO = 'combo';
    const RECOMMEND_TYPE_HORIZON = 'horizon';
    const ALLOCATION_PRIORITY_GOAL = 'goal';
    const ALLOCATION_PRIORITY_RISK = 'risk';
    const ALLOCATION_METHOD_SELECT = 'select';
    const ALLOCATION_METHOD_CREATE = 'create';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizonFrequencyAllowableValues()
    {
        return [
            self::HORIZON_FREQUENCY_YEAR,
            self::HORIZON_FREQUENCY_SIX_MONTHS,
            self::HORIZON_FREQUENCY_QUARTER,
            self::HORIZON_FREQUENCY_MONTH,
            self::HORIZON_FREQUENCY_TWO_WEEKS,
            self::HORIZON_FREQUENCY_WEEK,
            self::HORIZON_FREQUENCY_DAY,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreshTypeAllowableValues()
    {
        return [
            self::THRESH_TYPE_AMNT,
            self::THRESH_TYPE_PERC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecommendTypeAllowableValues()
    {
        return [
            self::RECOMMEND_TYPE_RECURRING,
            self::RECOMMEND_TYPE_ONE_TIME,
            self::RECOMMEND_TYPE_COMBO,
            self::RECOMMEND_TYPE_HORIZON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllocationPriorityAllowableValues()
    {
        return [
            self::ALLOCATION_PRIORITY_GOAL,
            self::ALLOCATION_PRIORITY_RISK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllocationMethodAllowableValues()
    {
        return [
            self::ALLOCATION_METHOD_SELECT,
            self::ALLOCATION_METHOD_CREATE,
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
        $this->container['allocations'] = isset($data['allocations']) ? $data['allocations'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['adjust_for_compounding'] = isset($data['adjust_for_compounding']) ? $data['adjust_for_compounding'] : false;
        $this->container['compounding_rate'] = isset($data['compounding_rate']) ? $data['compounding_rate'] : 0.0;
        $this->container['horizon_frequency'] = isset($data['horizon_frequency']) ? $data['horizon_frequency'] : 'year';
        $this->container['conf_tgt'] = isset($data['conf_tgt']) ? $data['conf_tgt'] : 0.9;
        $this->container['risk_score'] = isset($data['risk_score']) ? $data['risk_score'] : null;
        $this->container['market_data_source'] = isset($data['market_data_source']) ? $data['market_data_source'] : 'nucleus';
        $this->container['trading_days_per_year'] = isset($data['trading_days_per_year']) ? $data['trading_days_per_year'] : 252;
        $this->container['withdrawal_tax'] = isset($data['withdrawal_tax']) ? $data['withdrawal_tax'] : 0.0;
        $this->container['thresh_type'] = isset($data['thresh_type']) ? $data['thresh_type'] : 'perc';
        $this->container['recommend_type'] = isset($data['recommend_type']) ? $data['recommend_type'] : 'horizon';
        $this->container['goal_id'] = isset($data['goal_id']) ? $data['goal_id'] : null;
        $this->container['deposit_config'] = isset($data['deposit_config']) ? $data['deposit_config'] : null;
        $this->container['opt_config'] = isset($data['opt_config']) ? $data['opt_config'] : null;
        $this->container['goal_config'] = isset($data['goal_config']) ? $data['goal_config'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : 1000;
        $this->container['recommendation_config'] = isset($data['recommendation_config']) ? $data['recommendation_config'] : null;
        $this->container['use_proxy_data'] = isset($data['use_proxy_data']) ? $data['use_proxy_data'] : false;
        $this->container['thresh'] = isset($data['thresh']) ? $data['thresh'] : null;
        $this->container['curr_inv'] = isset($data['curr_inv']) ? $data['curr_inv'] : null;
        $this->container['remove_outliers'] = isset($data['remove_outliers']) ? $data['remove_outliers'] : true;
        $this->container['allocation_priority'] = isset($data['allocation_priority']) ? $data['allocation_priority'] : null;
        $this->container['allocation_method'] = isset($data['allocation_method']) ? $data['allocation_method'] : null;
        $this->container['horizon'] = isset($data['horizon']) ? $data['horizon'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['compounding_rate']) && ($this->container['compounding_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'compounding_rate', must be bigger than or equal to -1.";
        }

        $allowedValues = $this->getHorizonFrequencyAllowableValues();
        if (!is_null($this->container['horizon_frequency']) && !in_array($this->container['horizon_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizon_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['conf_tgt']) && ($this->container['conf_tgt'] > 1)) {
            $invalidProperties[] = "invalid value for 'conf_tgt', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['conf_tgt']) && ($this->container['conf_tgt'] < 0)) {
            $invalidProperties[] = "invalid value for 'conf_tgt', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['risk_score']) && ($this->container['risk_score'] > 100)) {
            $invalidProperties[] = "invalid value for 'risk_score', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['risk_score']) && ($this->container['risk_score'] < 0)) {
            $invalidProperties[] = "invalid value for 'risk_score', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getMarketDataSourceAllowableValues();
        if (!is_null($this->container['market_data_source']) && !in_array($this->container['market_data_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'market_data_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['trading_days_per_year']) && ($this->container['trading_days_per_year'] > 365)) {
            $invalidProperties[] = "invalid value for 'trading_days_per_year', must be smaller than or equal to 365.";
        }

        if (!is_null($this->container['trading_days_per_year']) && ($this->container['trading_days_per_year'] < 1)) {
            $invalidProperties[] = "invalid value for 'trading_days_per_year', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['withdrawal_tax']) && ($this->container['withdrawal_tax'] > 1)) {
            $invalidProperties[] = "invalid value for 'withdrawal_tax', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['withdrawal_tax']) && ($this->container['withdrawal_tax'] < 0)) {
            $invalidProperties[] = "invalid value for 'withdrawal_tax', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getThreshTypeAllowableValues();
        if (!is_null($this->container['thresh_type']) && !in_array($this->container['thresh_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'thresh_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecommendTypeAllowableValues();
        if (!is_null($this->container['recommend_type']) && !in_array($this->container['recommend_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recommend_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['n']) && ($this->container['n'] > 10000)) {
            $invalidProperties[] = "invalid value for 'n', must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['n']) && ($this->container['n'] < 1)) {
            $invalidProperties[] = "invalid value for 'n', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['thresh']) && ($this->container['thresh'] < 0)) {
            $invalidProperties[] = "invalid value for 'thresh', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['curr_inv']) && ($this->container['curr_inv'] < 0)) {
            $invalidProperties[] = "invalid value for 'curr_inv', must be bigger than or equal to 0.";
        }

        if ($this->container['allocation_priority'] === null) {
            $invalidProperties[] = "'allocation_priority' can't be null";
        }
        $allowedValues = $this->getAllocationPriorityAllowableValues();
        if (!is_null($this->container['allocation_priority']) && !in_array($this->container['allocation_priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'allocation_priority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['allocation_method'] === null) {
            $invalidProperties[] = "'allocation_method' can't be null";
        }
        $allowedValues = $this->getAllocationMethodAllowableValues();
        if (!is_null($this->container['allocation_method']) && !in_array($this->container['allocation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'allocation_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['horizon']) && ($this->container['horizon'] > 350)) {
            $invalidProperties[] = "invalid value for 'horizon', must be smaller than or equal to 350.";
        }

        if (!is_null($this->container['horizon']) && ($this->container['horizon'] < 0)) {
            $invalidProperties[] = "invalid value for 'horizon', must be bigger than or equal to 0.";
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
     * Gets allocations
     *
     * @return string[]
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param string[] $allocations allocations
     *
     * @return $this
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

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
     * Gets adjust_for_compounding
     *
     * @return bool
     */
    public function getAdjustForCompounding()
    {
        return $this->container['adjust_for_compounding'];
    }

    /**
     * Sets adjust_for_compounding
     *
     * @param bool $adjust_for_compounding adjust_for_compounding
     *
     * @return $this
     */
    public function setAdjustForCompounding($adjust_for_compounding)
    {
        $this->container['adjust_for_compounding'] = $adjust_for_compounding;

        return $this;
    }

    /**
     * Gets compounding_rate
     *
     * @return float
     */
    public function getCompoundingRate()
    {
        return $this->container['compounding_rate'];
    }

    /**
     * Sets compounding_rate
     *
     * @param float $compounding_rate compounding_rate
     *
     * @return $this
     */
    public function setCompoundingRate($compounding_rate)
    {

        if (!is_null($compounding_rate) && ($compounding_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $compounding_rate when calling GoalAccumulationAllocationRequest., must be bigger than or equal to -1.');
        }

        $this->container['compounding_rate'] = $compounding_rate;

        return $this;
    }

    /**
     * Gets horizon_frequency
     *
     * @return string
     */
    public function getHorizonFrequency()
    {
        return $this->container['horizon_frequency'];
    }

    /**
     * Sets horizon_frequency
     *
     * @param string $horizon_frequency horizon_frequency
     *
     * @return $this
     */
    public function setHorizonFrequency($horizon_frequency)
    {
        $allowedValues = $this->getHorizonFrequencyAllowableValues();
        if (!is_null($horizon_frequency) && !in_array($horizon_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'horizon_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['horizon_frequency'] = $horizon_frequency;

        return $this;
    }

    /**
     * Gets conf_tgt
     *
     * @return float
     */
    public function getConfTgt()
    {
        return $this->container['conf_tgt'];
    }

    /**
     * Sets conf_tgt
     *
     * @param float $conf_tgt conf_tgt
     *
     * @return $this
     */
    public function setConfTgt($conf_tgt)
    {

        if (!is_null($conf_tgt) && ($conf_tgt > 1)) {
            throw new \InvalidArgumentException('invalid value for $conf_tgt when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($conf_tgt) && ($conf_tgt < 0)) {
            throw new \InvalidArgumentException('invalid value for $conf_tgt when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['conf_tgt'] = $conf_tgt;

        return $this;
    }

    /**
     * Gets risk_score
     *
     * @return float
     */
    public function getRiskScore()
    {
        return $this->container['risk_score'];
    }

    /**
     * Sets risk_score
     *
     * @param float $risk_score risk_score
     *
     * @return $this
     */
    public function setRiskScore($risk_score)
    {

        if (!is_null($risk_score) && ($risk_score > 100)) {
            throw new \InvalidArgumentException('invalid value for $risk_score when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($risk_score) && ($risk_score < 0)) {
            throw new \InvalidArgumentException('invalid value for $risk_score when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['risk_score'] = $risk_score;

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
     * Gets trading_days_per_year
     *
     * @return int
     */
    public function getTradingDaysPerYear()
    {
        return $this->container['trading_days_per_year'];
    }

    /**
     * Sets trading_days_per_year
     *
     * @param int $trading_days_per_year trading_days_per_year
     *
     * @return $this
     */
    public function setTradingDaysPerYear($trading_days_per_year)
    {

        if (!is_null($trading_days_per_year) && ($trading_days_per_year > 365)) {
            throw new \InvalidArgumentException('invalid value for $trading_days_per_year when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 365.');
        }
        if (!is_null($trading_days_per_year) && ($trading_days_per_year < 1)) {
            throw new \InvalidArgumentException('invalid value for $trading_days_per_year when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 1.');
        }

        $this->container['trading_days_per_year'] = $trading_days_per_year;

        return $this;
    }

    /**
     * Gets withdrawal_tax
     *
     * @return float
     */
    public function getWithdrawalTax()
    {
        return $this->container['withdrawal_tax'];
    }

    /**
     * Sets withdrawal_tax
     *
     * @param float $withdrawal_tax withdrawal_tax
     *
     * @return $this
     */
    public function setWithdrawalTax($withdrawal_tax)
    {

        if (!is_null($withdrawal_tax) && ($withdrawal_tax > 1)) {
            throw new \InvalidArgumentException('invalid value for $withdrawal_tax when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($withdrawal_tax) && ($withdrawal_tax < 0)) {
            throw new \InvalidArgumentException('invalid value for $withdrawal_tax when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['withdrawal_tax'] = $withdrawal_tax;

        return $this;
    }

    /**
     * Gets thresh_type
     *
     * @return string
     */
    public function getThreshType()
    {
        return $this->container['thresh_type'];
    }

    /**
     * Sets thresh_type
     *
     * @param string $thresh_type thresh_type
     *
     * @return $this
     */
    public function setThreshType($thresh_type)
    {
        $allowedValues = $this->getThreshTypeAllowableValues();
        if (!is_null($thresh_type) && !in_array($thresh_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'thresh_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['thresh_type'] = $thresh_type;

        return $this;
    }

    /**
     * Gets recommend_type
     *
     * @return string
     */
    public function getRecommendType()
    {
        return $this->container['recommend_type'];
    }

    /**
     * Sets recommend_type
     *
     * @param string $recommend_type recommend_type
     *
     * @return $this
     */
    public function setRecommendType($recommend_type)
    {
        $allowedValues = $this->getRecommendTypeAllowableValues();
        if (!is_null($recommend_type) && !in_array($recommend_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recommend_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recommend_type'] = $recommend_type;

        return $this;
    }

    /**
     * Gets goal_id
     *
     * @return string
     */
    public function getGoalId()
    {
        return $this->container['goal_id'];
    }

    /**
     * Sets goal_id
     *
     * @param string $goal_id goal_id
     *
     * @return $this
     */
    public function setGoalId($goal_id)
    {
        $this->container['goal_id'] = $goal_id;

        return $this;
    }

    /**
     * Gets deposit_config
     *
     * @return object[]
     */
    public function getDepositConfig()
    {
        return $this->container['deposit_config'];
    }

    /**
     * Sets deposit_config
     *
     * @param object[] $deposit_config deposit_config
     *
     * @return $this
     */
    public function setDepositConfig($deposit_config)
    {
        $this->container['deposit_config'] = $deposit_config;

        return $this;
    }

    /**
     * Gets opt_config
     *
     * @return object
     */
    public function getOptConfig()
    {
        return $this->container['opt_config'];
    }

    /**
     * Sets opt_config
     *
     * @param object $opt_config opt_config
     *
     * @return $this
     */
    public function setOptConfig($opt_config)
    {
        $this->container['opt_config'] = $opt_config;

        return $this;
    }

    /**
     * Gets goal_config
     *
     * @return object
     */
    public function getGoalConfig()
    {
        return $this->container['goal_config'];
    }

    /**
     * Sets goal_config
     *
     * @param object $goal_config goal_config
     *
     * @return $this
     */
    public function setGoalConfig($goal_config)
    {
        $this->container['goal_config'] = $goal_config;

        return $this;
    }

    /**
     * Gets n
     *
     * @return int
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param int $n n
     *
     * @return $this
     */
    public function setN($n)
    {

        if (!is_null($n) && ($n > 10000)) {
            throw new \InvalidArgumentException('invalid value for $n when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 10000.');
        }
        if (!is_null($n) && ($n < 1)) {
            throw new \InvalidArgumentException('invalid value for $n when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 1.');
        }

        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets recommendation_config
     *
     * @return object
     */
    public function getRecommendationConfig()
    {
        return $this->container['recommendation_config'];
    }

    /**
     * Sets recommendation_config
     *
     * @param object $recommendation_config recommendation_config
     *
     * @return $this
     */
    public function setRecommendationConfig($recommendation_config)
    {
        $this->container['recommendation_config'] = $recommendation_config;

        return $this;
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
     * Gets thresh
     *
     * @return float
     */
    public function getThresh()
    {
        return $this->container['thresh'];
    }

    /**
     * Sets thresh
     *
     * @param float $thresh thresh
     *
     * @return $this
     */
    public function setThresh($thresh)
    {

        if (!is_null($thresh) && ($thresh < 0)) {
            throw new \InvalidArgumentException('invalid value for $thresh when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['thresh'] = $thresh;

        return $this;
    }

    /**
     * Gets curr_inv
     *
     * @return float
     */
    public function getCurrInv()
    {
        return $this->container['curr_inv'];
    }

    /**
     * Sets curr_inv
     *
     * @param float $curr_inv curr_inv
     *
     * @return $this
     */
    public function setCurrInv($curr_inv)
    {

        if (!is_null($curr_inv) && ($curr_inv < 0)) {
            throw new \InvalidArgumentException('invalid value for $curr_inv when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['curr_inv'] = $curr_inv;

        return $this;
    }

    /**
     * Gets remove_outliers
     *
     * @return bool
     */
    public function getRemoveOutliers()
    {
        return $this->container['remove_outliers'];
    }

    /**
     * Sets remove_outliers
     *
     * @param bool $remove_outliers remove_outliers
     *
     * @return $this
     */
    public function setRemoveOutliers($remove_outliers)
    {
        $this->container['remove_outliers'] = $remove_outliers;

        return $this;
    }

    /**
     * Gets allocation_priority
     *
     * @return string
     */
    public function getAllocationPriority()
    {
        return $this->container['allocation_priority'];
    }

    /**
     * Sets allocation_priority
     *
     * @param string $allocation_priority allocation_priority
     *
     * @return $this
     */
    public function setAllocationPriority($allocation_priority)
    {
        $allowedValues = $this->getAllocationPriorityAllowableValues();
        if (!in_array($allocation_priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allocation_priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allocation_priority'] = $allocation_priority;

        return $this;
    }

    /**
     * Gets allocation_method
     *
     * @return string
     */
    public function getAllocationMethod()
    {
        return $this->container['allocation_method'];
    }

    /**
     * Sets allocation_method
     *
     * @param string $allocation_method allocation_method
     *
     * @return $this
     */
    public function setAllocationMethod($allocation_method)
    {
        $allowedValues = $this->getAllocationMethodAllowableValues();
        if (!in_array($allocation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allocation_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allocation_method'] = $allocation_method;

        return $this;
    }

    /**
     * Gets horizon
     *
     * @return int
     */
    public function getHorizon()
    {
        return $this->container['horizon'];
    }

    /**
     * Sets horizon
     *
     * @param int $horizon horizon
     *
     * @return $this
     */
    public function setHorizon($horizon)
    {

        if (!is_null($horizon) && ($horizon > 350)) {
            throw new \InvalidArgumentException('invalid value for $horizon when calling GoalAccumulationAllocationRequest., must be smaller than or equal to 350.');
        }
        if (!is_null($horizon) && ($horizon < 0)) {
            throw new \InvalidArgumentException('invalid value for $horizon when calling GoalAccumulationAllocationRequest., must be bigger than or equal to 0.');
        }

        $this->container['horizon'] = $horizon;

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


