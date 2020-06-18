<?php
/**
 * FinancialOffer
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
 * FinancialOffer Class Doc Comment
 *
 * @category Class
 * @description Financial Offer Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialOffer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate_rate' => 'double',
        'campaign_id' => 'string',
        'category' => 'string',
        'client_review' => 'string',
        'create_date' => '\DateTime',
        'currency_code' => 'string',
        'description' => 'string',
        'document_id' => 'string',
        'fee_amount' => 'double',
        'fee_type' => 'string',
        'financial_rate' => 'double',
        'financial_rate_term' => 'double',
        'financial_rate_term_unit' => 'string',
        'financial_rate_type' => 'string',
        'id' => 'string',
        'image' => 'string',
        'institution_name' => 'string',
        'is_active' => 'bool',
        'metadata' => 'map[string,string]',
        'minimum_contribution' => 'double',
        'minimum_contribution_term' => 'double',
        'minimum_contribution_term_unit' => 'string',
        'name' => 'string',
        'node_map' => '\com\hydrogen\nucleus\Model\AllocationNodeMap[]',
        'offer_link' => 'string',
        'offer_term' => 'double',
        'offer_term_unit' => 'string',
        'prerequisite' => 'string',
        'prerequisite_type' => 'string',
        'rating' => 'string',
        'secondary_id' => 'string',
        'subcategory' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate_rate' => 'double',
        'campaign_id' => 'uuid',
        'category' => null,
        'client_review' => null,
        'create_date' => 'date-time',
        'currency_code' => null,
        'description' => null,
        'document_id' => null,
        'fee_amount' => 'double',
        'fee_type' => null,
        'financial_rate' => 'double',
        'financial_rate_term' => 'double',
        'financial_rate_term_unit' => null,
        'financial_rate_type' => null,
        'id' => 'uuid',
        'image' => null,
        'institution_name' => null,
        'is_active' => null,
        'metadata' => null,
        'minimum_contribution' => 'double',
        'minimum_contribution_term' => 'double',
        'minimum_contribution_term_unit' => null,
        'name' => null,
        'node_map' => null,
        'offer_link' => null,
        'offer_term' => 'double',
        'offer_term_unit' => null,
        'prerequisite' => null,
        'prerequisite_type' => null,
        'rating' => null,
        'secondary_id' => null,
        'subcategory' => null,
        'update_date' => 'date-time'
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
        'affiliate_rate' => 'affiliate_rate',
        'campaign_id' => 'campaign_id',
        'category' => 'category',
        'client_review' => 'client_review',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'description' => 'description',
        'document_id' => 'document_id',
        'fee_amount' => 'fee_amount',
        'fee_type' => 'fee_type',
        'financial_rate' => 'financial_rate',
        'financial_rate_term' => 'financial_rate_term',
        'financial_rate_term_unit' => 'financial_rate_term_unit',
        'financial_rate_type' => 'financial_rate_type',
        'id' => 'id',
        'image' => 'image',
        'institution_name' => 'institution_name',
        'is_active' => 'is_active',
        'metadata' => 'metadata',
        'minimum_contribution' => 'minimum_contribution',
        'minimum_contribution_term' => 'minimum_contribution_term',
        'minimum_contribution_term_unit' => 'minimum_contribution_term_unit',
        'name' => 'name',
        'node_map' => 'node_map',
        'offer_link' => 'offer_link',
        'offer_term' => 'offer_term',
        'offer_term_unit' => 'offer_term_unit',
        'prerequisite' => 'prerequisite',
        'prerequisite_type' => 'prerequisite_type',
        'rating' => 'rating',
        'secondary_id' => 'secondary_id',
        'subcategory' => 'subcategory',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate_rate' => 'setAffiliateRate',
        'campaign_id' => 'setCampaignId',
        'category' => 'setCategory',
        'client_review' => 'setClientReview',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'description' => 'setDescription',
        'document_id' => 'setDocumentId',
        'fee_amount' => 'setFeeAmount',
        'fee_type' => 'setFeeType',
        'financial_rate' => 'setFinancialRate',
        'financial_rate_term' => 'setFinancialRateTerm',
        'financial_rate_term_unit' => 'setFinancialRateTermUnit',
        'financial_rate_type' => 'setFinancialRateType',
        'id' => 'setId',
        'image' => 'setImage',
        'institution_name' => 'setInstitutionName',
        'is_active' => 'setIsActive',
        'metadata' => 'setMetadata',
        'minimum_contribution' => 'setMinimumContribution',
        'minimum_contribution_term' => 'setMinimumContributionTerm',
        'minimum_contribution_term_unit' => 'setMinimumContributionTermUnit',
        'name' => 'setName',
        'node_map' => 'setNodeMap',
        'offer_link' => 'setOfferLink',
        'offer_term' => 'setOfferTerm',
        'offer_term_unit' => 'setOfferTermUnit',
        'prerequisite' => 'setPrerequisite',
        'prerequisite_type' => 'setPrerequisiteType',
        'rating' => 'setRating',
        'secondary_id' => 'setSecondaryId',
        'subcategory' => 'setSubcategory',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate_rate' => 'getAffiliateRate',
        'campaign_id' => 'getCampaignId',
        'category' => 'getCategory',
        'client_review' => 'getClientReview',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'description' => 'getDescription',
        'document_id' => 'getDocumentId',
        'fee_amount' => 'getFeeAmount',
        'fee_type' => 'getFeeType',
        'financial_rate' => 'getFinancialRate',
        'financial_rate_term' => 'getFinancialRateTerm',
        'financial_rate_term_unit' => 'getFinancialRateTermUnit',
        'financial_rate_type' => 'getFinancialRateType',
        'id' => 'getId',
        'image' => 'getImage',
        'institution_name' => 'getInstitutionName',
        'is_active' => 'getIsActive',
        'metadata' => 'getMetadata',
        'minimum_contribution' => 'getMinimumContribution',
        'minimum_contribution_term' => 'getMinimumContributionTerm',
        'minimum_contribution_term_unit' => 'getMinimumContributionTermUnit',
        'name' => 'getName',
        'node_map' => 'getNodeMap',
        'offer_link' => 'getOfferLink',
        'offer_term' => 'getOfferTerm',
        'offer_term_unit' => 'getOfferTermUnit',
        'prerequisite' => 'getPrerequisite',
        'prerequisite_type' => 'getPrerequisiteType',
        'rating' => 'getRating',
        'secondary_id' => 'getSecondaryId',
        'subcategory' => 'getSubcategory',
        'update_date' => 'getUpdateDate'
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
        $this->container['affiliate_rate'] = isset($data['affiliate_rate']) ? $data['affiliate_rate'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['client_review'] = isset($data['client_review']) ? $data['client_review'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['financial_rate'] = isset($data['financial_rate']) ? $data['financial_rate'] : null;
        $this->container['financial_rate_term'] = isset($data['financial_rate_term']) ? $data['financial_rate_term'] : null;
        $this->container['financial_rate_term_unit'] = isset($data['financial_rate_term_unit']) ? $data['financial_rate_term_unit'] : null;
        $this->container['financial_rate_type'] = isset($data['financial_rate_type']) ? $data['financial_rate_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['institution_name'] = isset($data['institution_name']) ? $data['institution_name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['minimum_contribution'] = isset($data['minimum_contribution']) ? $data['minimum_contribution'] : null;
        $this->container['minimum_contribution_term'] = isset($data['minimum_contribution_term']) ? $data['minimum_contribution_term'] : null;
        $this->container['minimum_contribution_term_unit'] = isset($data['minimum_contribution_term_unit']) ? $data['minimum_contribution_term_unit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['node_map'] = isset($data['node_map']) ? $data['node_map'] : null;
        $this->container['offer_link'] = isset($data['offer_link']) ? $data['offer_link'] : null;
        $this->container['offer_term'] = isset($data['offer_term']) ? $data['offer_term'] : null;
        $this->container['offer_term_unit'] = isset($data['offer_term_unit']) ? $data['offer_term_unit'] : null;
        $this->container['prerequisite'] = isset($data['prerequisite']) ? $data['prerequisite'] : null;
        $this->container['prerequisite_type'] = isset($data['prerequisite_type']) ? $data['prerequisite_type'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['subcategory'] = isset($data['subcategory']) ? $data['subcategory'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['institution_name'] === null) {
            $invalidProperties[] = "'institution_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['offer_link'] === null) {
            $invalidProperties[] = "'offer_link' can't be null";
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
     * Gets affiliate_rate
     *
     * @return double
     */
    public function getAffiliateRate()
    {
        return $this->container['affiliate_rate'];
    }

    /**
     * Sets affiliate_rate
     *
     * @param double $affiliate_rate affiliateRate
     *
     * @return $this
     */
    public function setAffiliateRate($affiliate_rate)
    {
        $this->container['affiliate_rate'] = $affiliate_rate;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets client_review
     *
     * @return string
     */
    public function getClientReview()
    {
        return $this->container['client_review'];
    }

    /**
     * Sets client_review
     *
     * @param string $client_review client_review
     *
     * @return $this
     */
    public function setClientReview($client_review)
    {
        $this->container['client_review'] = $client_review;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

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
     * @param string $currency_code currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return double
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param double $fee_amount feeAmount
     *
     * @return $this
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type fee_type
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets financial_rate
     *
     * @return double
     */
    public function getFinancialRate()
    {
        return $this->container['financial_rate'];
    }

    /**
     * Sets financial_rate
     *
     * @param double $financial_rate financialRate
     *
     * @return $this
     */
    public function setFinancialRate($financial_rate)
    {
        $this->container['financial_rate'] = $financial_rate;

        return $this;
    }

    /**
     * Gets financial_rate_term
     *
     * @return double
     */
    public function getFinancialRateTerm()
    {
        return $this->container['financial_rate_term'];
    }

    /**
     * Sets financial_rate_term
     *
     * @param double $financial_rate_term financialRateTerm
     *
     * @return $this
     */
    public function setFinancialRateTerm($financial_rate_term)
    {
        $this->container['financial_rate_term'] = $financial_rate_term;

        return $this;
    }

    /**
     * Gets financial_rate_term_unit
     *
     * @return string
     */
    public function getFinancialRateTermUnit()
    {
        return $this->container['financial_rate_term_unit'];
    }

    /**
     * Sets financial_rate_term_unit
     *
     * @param string $financial_rate_term_unit financialRateTermUnit
     *
     * @return $this
     */
    public function setFinancialRateTermUnit($financial_rate_term_unit)
    {
        $this->container['financial_rate_term_unit'] = $financial_rate_term_unit;

        return $this;
    }

    /**
     * Gets financial_rate_type
     *
     * @return string
     */
    public function getFinancialRateType()
    {
        return $this->container['financial_rate_type'];
    }

    /**
     * Sets financial_rate_type
     *
     * @param string $financial_rate_type financialRateType
     *
     * @return $this
     */
    public function setFinancialRateType($financial_rate_type)
    {
        $this->container['financial_rate_type'] = $financial_rate_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets institution_name
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->container['institution_name'];
    }

    /**
     * Sets institution_name
     *
     * @param string $institution_name institution_name
     *
     * @return $this
     */
    public function setInstitutionName($institution_name)
    {
        $this->container['institution_name'] = $institution_name;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets minimum_contribution
     *
     * @return double
     */
    public function getMinimumContribution()
    {
        return $this->container['minimum_contribution'];
    }

    /**
     * Sets minimum_contribution
     *
     * @param double $minimum_contribution minimumContribution
     *
     * @return $this
     */
    public function setMinimumContribution($minimum_contribution)
    {
        $this->container['minimum_contribution'] = $minimum_contribution;

        return $this;
    }

    /**
     * Gets minimum_contribution_term
     *
     * @return double
     */
    public function getMinimumContributionTerm()
    {
        return $this->container['minimum_contribution_term'];
    }

    /**
     * Sets minimum_contribution_term
     *
     * @param double $minimum_contribution_term minimumContributionTerm
     *
     * @return $this
     */
    public function setMinimumContributionTerm($minimum_contribution_term)
    {
        $this->container['minimum_contribution_term'] = $minimum_contribution_term;

        return $this;
    }

    /**
     * Gets minimum_contribution_term_unit
     *
     * @return string
     */
    public function getMinimumContributionTermUnit()
    {
        return $this->container['minimum_contribution_term_unit'];
    }

    /**
     * Sets minimum_contribution_term_unit
     *
     * @param string $minimum_contribution_term_unit minimumContributionTermUnit
     *
     * @return $this
     */
    public function setMinimumContributionTermUnit($minimum_contribution_term_unit)
    {
        $this->container['minimum_contribution_term_unit'] = $minimum_contribution_term_unit;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets node_map
     *
     * @return \com\hydrogen\nucleus\Model\AllocationNodeMap[]
     */
    public function getNodeMap()
    {
        return $this->container['node_map'];
    }

    /**
     * Sets node_map
     *
     * @param \com\hydrogen\nucleus\Model\AllocationNodeMap[] $node_map node_map
     *
     * @return $this
     */
    public function setNodeMap($node_map)
    {
        $this->container['node_map'] = $node_map;

        return $this;
    }

    /**
     * Gets offer_link
     *
     * @return string
     */
    public function getOfferLink()
    {
        return $this->container['offer_link'];
    }

    /**
     * Sets offer_link
     *
     * @param string $offer_link offerLink
     *
     * @return $this
     */
    public function setOfferLink($offer_link)
    {
        $this->container['offer_link'] = $offer_link;

        return $this;
    }

    /**
     * Gets offer_term
     *
     * @return double
     */
    public function getOfferTerm()
    {
        return $this->container['offer_term'];
    }

    /**
     * Sets offer_term
     *
     * @param double $offer_term offerTerm
     *
     * @return $this
     */
    public function setOfferTerm($offer_term)
    {
        $this->container['offer_term'] = $offer_term;

        return $this;
    }

    /**
     * Gets offer_term_unit
     *
     * @return string
     */
    public function getOfferTermUnit()
    {
        return $this->container['offer_term_unit'];
    }

    /**
     * Sets offer_term_unit
     *
     * @param string $offer_term_unit offerTermUnit
     *
     * @return $this
     */
    public function setOfferTermUnit($offer_term_unit)
    {
        $this->container['offer_term_unit'] = $offer_term_unit;

        return $this;
    }

    /**
     * Gets prerequisite
     *
     * @return string
     */
    public function getPrerequisite()
    {
        return $this->container['prerequisite'];
    }

    /**
     * Sets prerequisite
     *
     * @param string $prerequisite prerequisite
     *
     * @return $this
     */
    public function setPrerequisite($prerequisite)
    {
        $this->container['prerequisite'] = $prerequisite;

        return $this;
    }

    /**
     * Gets prerequisite_type
     *
     * @return string
     */
    public function getPrerequisiteType()
    {
        return $this->container['prerequisite_type'];
    }

    /**
     * Sets prerequisite_type
     *
     * @param string $prerequisite_type prerequisite_type
     *
     * @return $this
     */
    public function setPrerequisiteType($prerequisite_type)
    {
        $this->container['prerequisite_type'] = $prerequisite_type;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param string $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets secondary_id
     *
     * @return string
     */
    public function getSecondaryId()
    {
        return $this->container['secondary_id'];
    }

    /**
     * Sets secondary_id
     *
     * @param string $secondary_id secondary_id
     *
     * @return $this
     */
    public function setSecondaryId($secondary_id)
    {
        $this->container['secondary_id'] = $secondary_id;

        return $this;
    }

    /**
     * Gets subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->container['subcategory'];
    }

    /**
     * Sets subcategory
     *
     * @param string $subcategory subcategory
     *
     * @return $this
     */
    public function setSubcategory($subcategory)
    {
        $this->container['subcategory'] = $subcategory;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

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


