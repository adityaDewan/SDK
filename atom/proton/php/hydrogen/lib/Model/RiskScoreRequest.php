<?php
/**
 * RiskScoreRequest
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
 * RiskScoreRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskScoreRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'riskScoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'answers' => 'float[]',
        'weights' => 'float[]',
        'max_answers' => 'float[]',
        'questionnaire_id' => 'string',
        'post_score' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => 'uuid',
        'answers' => null,
        'weights' => 'float',
        'max_answers' => null,
        'questionnaire_id' => 'uuid',
        'post_score' => null
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
        'client_id' => 'client_id',
        'answers' => 'answers',
        'weights' => 'weights',
        'max_answers' => 'max_answers',
        'questionnaire_id' => 'questionnaire_id',
        'post_score' => 'post_score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'answers' => 'setAnswers',
        'weights' => 'setWeights',
        'max_answers' => 'setMaxAnswers',
        'questionnaire_id' => 'setQuestionnaireId',
        'post_score' => 'setPostScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'answers' => 'getAnswers',
        'weights' => 'getWeights',
        'max_answers' => 'getMaxAnswers',
        'questionnaire_id' => 'getQuestionnaireId',
        'post_score' => 'getPostScore'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['weights'] = isset($data['weights']) ? $data['weights'] : null;
        $this->container['max_answers'] = isset($data['max_answers']) ? $data['max_answers'] : null;
        $this->container['questionnaire_id'] = isset($data['questionnaire_id']) ? $data['questionnaire_id'] : null;
        $this->container['post_score'] = isset($data['post_score']) ? $data['post_score'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['max_answers'] === null) {
            $invalidProperties[] = "'max_answers' can't be null";
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
     * Gets answers
     *
     * @return float[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param float[] $answers answers
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets weights
     *
     * @return float[]
     */
    public function getWeights()
    {
        return $this->container['weights'];
    }

    /**
     * Sets weights
     *
     * @param float[] $weights weights
     *
     * @return $this
     */
    public function setWeights($weights)
    {
        $this->container['weights'] = $weights;

        return $this;
    }

    /**
     * Gets max_answers
     *
     * @return float[]
     */
    public function getMaxAnswers()
    {
        return $this->container['max_answers'];
    }

    /**
     * Sets max_answers
     *
     * @param float[] $max_answers max_answers
     *
     * @return $this
     */
    public function setMaxAnswers($max_answers)
    {
        $this->container['max_answers'] = $max_answers;

        return $this;
    }

    /**
     * Gets questionnaire_id
     *
     * @return string
     */
    public function getQuestionnaireId()
    {
        return $this->container['questionnaire_id'];
    }

    /**
     * Sets questionnaire_id
     *
     * @param string $questionnaire_id questionnaire_id
     *
     * @return $this
     */
    public function setQuestionnaireId($questionnaire_id)
    {
        $this->container['questionnaire_id'] = $questionnaire_id;

        return $this;
    }

    /**
     * Gets post_score
     *
     * @return bool
     */
    public function getPostScore()
    {
        return $this->container['post_score'];
    }

    /**
     * Sets post_score
     *
     * @param bool $post_score post_score
     *
     * @return $this
     */
    public function setPostScore($post_score)
    {
        $this->container['post_score'] = $post_score;

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


