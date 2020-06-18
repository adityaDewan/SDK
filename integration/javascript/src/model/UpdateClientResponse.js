/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.4.14
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/ExpandedProperty', 'model/ParentIB'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./ExpandedProperty'), require('./ParentIB'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.UpdateClientResponse = factory(root.HydrogenIntegrationApi.ApiClient, root.HydrogenIntegrationApi.ExpandedProperty, root.HydrogenIntegrationApi.ParentIB);
  }
}(this, function(ApiClient, ExpandedProperty, ParentIB) {
  'use strict';

  /**
   * The UpdateClientResponse model module.
   * @module model/UpdateClientResponse
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>UpdateClientResponse</code>.
   * @alias module:model/UpdateClientResponse
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>UpdateClientResponse</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/UpdateClientResponse} obj Optional instance to populate.
   * @return {module:model/UpdateClientResponse} The populated <code>UpdateClientResponse</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('ack_customer_agreement'))
        obj.ackCustomerAgreement = ApiClient.convertToType(data['ack_customer_agreement'], 'Boolean');
      if (data.hasOwnProperty('ack_disclosure_rule14b'))
        obj.ackDisclosureRule14b = ApiClient.convertToType(data['ack_disclosure_rule14b'], 'Boolean');
      if (data.hasOwnProperty('ack_finders_fee'))
        obj.ackFindersFee = ApiClient.convertToType(data['ack_finders_fee'], 'Boolean');
      if (data.hasOwnProperty('ack_foreign_finders_fee'))
        obj.ackForeignFindersFee = ApiClient.convertToType(data['ack_foreign_finders_fee'], 'Boolean');
      if (data.hasOwnProperty('ack_joint_customer_agreement'))
        obj.ackJointCustomerAgreement = ApiClient.convertToType(data['ack_joint_customer_agreement'], 'Boolean');
      if (data.hasOwnProperty('ack_joint_disclosure_rule14b'))
        obj.ackJointDisclosureRule14b = ApiClient.convertToType(data['ack_joint_disclosure_rule14b'], 'Boolean');
      if (data.hasOwnProperty('ack_joint_finders_fee'))
        obj.ackJointFindersFee = ApiClient.convertToType(data['ack_joint_finders_fee'], 'Boolean');
      if (data.hasOwnProperty('ack_joint_foreign_finders_fee'))
        obj.ackJointForeignFindersFee = ApiClient.convertToType(data['ack_joint_foreign_finders_fee'], 'Boolean');
      if (data.hasOwnProperty('ack_joint_market_data'))
        obj.ackJointMarketData = ApiClient.convertToType(data['ack_joint_market_data'], 'Boolean');
      if (data.hasOwnProperty('ack_market_data'))
        obj.ackMarketData = ApiClient.convertToType(data['ack_market_data'], 'Boolean');
      if (data.hasOwnProperty('ack_signed_by'))
        obj.ackSignedBy = ApiClient.convertToType(data['ack_signed_by'], 'String');
      if (data.hasOwnProperty('ack_signed_when'))
        obj.ackSignedWhen = ApiClient.convertToType(data['ack_signed_when'], 'String');
      if (data.hasOwnProperty('address_line1'))
        obj.addressLine1 = ApiClient.convertToType(data['address_line1'], 'String');
      if (data.hasOwnProperty('address_line2'))
        obj.addressLine2 = ApiClient.convertToType(data['address_line2'], 'String');
      if (data.hasOwnProperty('address_proof_review_by'))
        obj.addressProofReviewBy = ApiClient.convertToType(data['address_proof_review_by'], 'String');
      if (data.hasOwnProperty('address_proof_review_when'))
        obj.addressProofReviewWhen = ApiClient.convertToType(data['address_proof_review_when'], 'Date');
      if (data.hasOwnProperty('annual_income'))
        obj.annualIncome = ApiClient.convertToType(data['annual_income'], 'String');
      if (data.hasOwnProperty('annual_income_number'))
        obj.annualIncomeNumber = ApiClient.convertToType(data['annual_income_number'], 'Number');
      if (data.hasOwnProperty('approved_by'))
        obj.approvedBy = ApiClient.convertToType(data['approved_by'], 'String');
      if (data.hasOwnProperty('approved_when'))
        obj.approvedWhen = ApiClient.convertToType(data['approved_when'], 'Date');
      if (data.hasOwnProperty('avatar_url'))
        obj.avatarUrl = ApiClient.convertToType(data['avatar_url'], 'String');
      if (data.hasOwnProperty('bad_password_count'))
        obj.badPasswordCount = ApiClient.convertToType(data['bad_password_count'], 'Number');
      if (data.hasOwnProperty('brand_ambassador'))
        obj.brandAmbassador = ApiClient.convertToType(data['brand_ambassador'], 'Boolean');
      if (data.hasOwnProperty('citizenship'))
        obj.citizenship = ApiClient.convertToType(data['citizenship'], 'String');
      if (data.hasOwnProperty('city'))
        obj.city = ApiClient.convertToType(data['city'], 'String');
      if (data.hasOwnProperty('country_id'))
        obj.countryId = ApiClient.convertToType(data['country_id'], 'String');
      if (data.hasOwnProperty('created_when'))
        obj.createdWhen = ApiClient.convertToType(data['created_when'], 'Date');
      if (data.hasOwnProperty('director'))
        obj.director = ApiClient.convertToType(data['director'], 'Boolean');
      if (data.hasOwnProperty('display_name'))
        obj.displayName = ApiClient.convertToType(data['display_name'], 'String');
      if (data.hasOwnProperty('dob'))
        obj.dob = ApiClient.convertToType(data['dob'], 'Date');
      if (data.hasOwnProperty('email'))
        obj.email = ApiClient.convertToType(data['email'], 'String');
      if (data.hasOwnProperty('employer_business'))
        obj.employerBusiness = ApiClient.convertToType(data['employer_business'], 'String');
      if (data.hasOwnProperty('employer_company'))
        obj.employerCompany = ApiClient.convertToType(data['employer_company'], 'String');
      if (data.hasOwnProperty('employer_country_id'))
        obj.employerCountryId = ApiClient.convertToType(data['employer_country_id'], 'String');
      if (data.hasOwnProperty('employer_is_broker'))
        obj.employerIsBroker = ApiClient.convertToType(data['employer_is_broker'], 'Boolean');
      if (data.hasOwnProperty('employment_status'))
        obj.employmentStatus = ExpandedProperty.constructFromObject(data['employment_status']);
      if (data.hasOwnProperty('employment_years'))
        obj.employmentYears = ApiClient.convertToType(data['employment_years'], 'Number');
      if (data.hasOwnProperty('first_name'))
        obj.firstName = ApiClient.convertToType(data['first_name'], 'String');
      if (data.hasOwnProperty('gender'))
        obj.gender = ExpandedProperty.constructFromObject(data['gender']);
      if (data.hasOwnProperty('id'))
        obj.id = ApiClient.convertToType(data['id'], 'String');
      if (data.hasOwnProperty('id_no'))
        obj.idNo = ApiClient.convertToType(data['id_no'], 'String');
      if (data.hasOwnProperty('investment_experience'))
        obj.investmentExperience = ExpandedProperty.constructFromObject(data['investment_experience']);
      if (data.hasOwnProperty('investment_objectives'))
        obj.investmentObjectives = ExpandedProperty.constructFromObject(data['investment_objectives']);
      if (data.hasOwnProperty('kyc_when'))
        obj.kycWhen = ApiClient.convertToType(data['kyc_when'], 'Date');
      if (data.hasOwnProperty('language_id'))
        obj.languageId = ApiClient.convertToType(data['language_id'], 'String');
      if (data.hasOwnProperty('last_login_when'))
        obj.lastLoginWhen = ApiClient.convertToType(data['last_login_when'], 'Date');
      if (data.hasOwnProperty('last_name'))
        obj.lastName = ApiClient.convertToType(data['last_name'], 'String');
      if (data.hasOwnProperty('margin_default'))
        obj.marginDefault = ApiClient.convertToType(data['margin_default'], 'Number');
      if (data.hasOwnProperty('marital_status'))
        obj.maritalStatus = ExpandedProperty.constructFromObject(data['marital_status']);
      if (data.hasOwnProperty('networth_liquid'))
        obj.networthLiquid = ApiClient.convertToType(data['networth_liquid'], 'String');
      if (data.hasOwnProperty('networth_total'))
        obj.networthTotal = ApiClient.convertToType(data['networth_total'], 'String');
      if (data.hasOwnProperty('ownership_type'))
        obj.ownershipType = ApiClient.convertToType(data['ownership_type'], 'String');
      if (data.hasOwnProperty('parent_ib'))
        obj.parentIb = ParentIB.constructFromObject(data['parent_ib']);
      if (data.hasOwnProperty('phone'))
        obj.phone = ApiClient.convertToType(data['phone'], 'String');
      if (data.hasOwnProperty('picture_review_by'))
        obj.pictureReviewBy = ApiClient.convertToType(data['picture_review_by'], 'String');
      if (data.hasOwnProperty('picture_review_when'))
        obj.pictureReviewWhen = ApiClient.convertToType(data['picture_review_when'], 'Date');
      if (data.hasOwnProperty('politcally_exposed'))
        obj.politcallyExposed = ApiClient.convertToType(data['politcally_exposed'], 'Boolean');
      if (data.hasOwnProperty('referral_code'))
        obj.referralCode = ApiClient.convertToType(data['referral_code'], 'String');
      if (data.hasOwnProperty('risk_tolerance'))
        obj.riskTolerance = ApiClient.convertToType(data['risk_tolerance'], 'String');
      if (data.hasOwnProperty('state_province'))
        obj.stateProvince = ApiClient.convertToType(data['state_province'], 'String');
      if (data.hasOwnProperty('status'))
        obj.status = ExpandedProperty.constructFromObject(data['status']);
      if (data.hasOwnProperty('terms_of_use'))
        obj.termsOfUse = ApiClient.convertToType(data['terms_of_use'], 'Boolean');
      if (data.hasOwnProperty('updated_when'))
        obj.updatedWhen = ApiClient.convertToType(data['updated_when'], 'Date');
      if (data.hasOwnProperty('us_citizen'))
        obj.usCitizen = ApiClient.convertToType(data['us_citizen'], 'Boolean');
      if (data.hasOwnProperty('user_note_qty'))
        obj.userNoteQty = ApiClient.convertToType(data['user_note_qty'], 'Number');
      if (data.hasOwnProperty('user_type'))
        obj.userType = ExpandedProperty.constructFromObject(data['user_type']);
      if (data.hasOwnProperty('username'))
        obj.username = ApiClient.convertToType(data['username'], 'String');
      if (data.hasOwnProperty('wlp_id'))
        obj.wlpId = ApiClient.convertToType(data['wlp_id'], 'String');
      if (data.hasOwnProperty('zip_postal_code'))
        obj.zipPostalCode = ApiClient.convertToType(data['zip_postal_code'], 'Number');
    }
    return obj;
  }

  /**
   * @member {Boolean} ackCustomerAgreement
   */
  exports.prototype.ackCustomerAgreement = undefined;

  /**
   * @member {Boolean} ackDisclosureRule14b
   */
  exports.prototype.ackDisclosureRule14b = undefined;

  /**
   * @member {Boolean} ackFindersFee
   */
  exports.prototype.ackFindersFee = undefined;

  /**
   * @member {Boolean} ackForeignFindersFee
   */
  exports.prototype.ackForeignFindersFee = undefined;

  /**
   * @member {Boolean} ackJointCustomerAgreement
   */
  exports.prototype.ackJointCustomerAgreement = undefined;

  /**
   * @member {Boolean} ackJointDisclosureRule14b
   */
  exports.prototype.ackJointDisclosureRule14b = undefined;

  /**
   * @member {Boolean} ackJointFindersFee
   */
  exports.prototype.ackJointFindersFee = undefined;

  /**
   * @member {Boolean} ackJointForeignFindersFee
   */
  exports.prototype.ackJointForeignFindersFee = undefined;

  /**
   * @member {Boolean} ackJointMarketData
   */
  exports.prototype.ackJointMarketData = undefined;

  /**
   * @member {Boolean} ackMarketData
   */
  exports.prototype.ackMarketData = undefined;

  /**
   * @member {String} ackSignedBy
   */
  exports.prototype.ackSignedBy = undefined;

  /**
   * @member {String} ackSignedWhen
   */
  exports.prototype.ackSignedWhen = undefined;

  /**
   * @member {String} addressLine1
   */
  exports.prototype.addressLine1 = undefined;

  /**
   * @member {String} addressLine2
   */
  exports.prototype.addressLine2 = undefined;

  /**
   * @member {String} addressProofReviewBy
   */
  exports.prototype.addressProofReviewBy = undefined;

  /**
   * @member {Date} addressProofReviewWhen
   */
  exports.prototype.addressProofReviewWhen = undefined;

  /**
   * @member {String} annualIncome
   */
  exports.prototype.annualIncome = undefined;

  /**
   * @member {Number} annualIncomeNumber
   */
  exports.prototype.annualIncomeNumber = undefined;

  /**
   * @member {String} approvedBy
   */
  exports.prototype.approvedBy = undefined;

  /**
   * @member {Date} approvedWhen
   */
  exports.prototype.approvedWhen = undefined;

  /**
   * @member {String} avatarUrl
   */
  exports.prototype.avatarUrl = undefined;

  /**
   * @member {Number} badPasswordCount
   */
  exports.prototype.badPasswordCount = undefined;

  /**
   * @member {Boolean} brandAmbassador
   */
  exports.prototype.brandAmbassador = undefined;

  /**
   * @member {String} citizenship
   */
  exports.prototype.citizenship = undefined;

  /**
   * @member {String} city
   */
  exports.prototype.city = undefined;

  /**
   * @member {String} countryId
   */
  exports.prototype.countryId = undefined;

  /**
   * @member {Date} createdWhen
   */
  exports.prototype.createdWhen = undefined;

  /**
   * @member {Boolean} director
   */
  exports.prototype.director = undefined;

  /**
   * @member {String} displayName
   */
  exports.prototype.displayName = undefined;

  /**
   * @member {Date} dob
   */
  exports.prototype.dob = undefined;

  /**
   * @member {String} email
   */
  exports.prototype.email = undefined;

  /**
   * @member {String} employerBusiness
   */
  exports.prototype.employerBusiness = undefined;

  /**
   * @member {String} employerCompany
   */
  exports.prototype.employerCompany = undefined;

  /**
   * @member {String} employerCountryId
   */
  exports.prototype.employerCountryId = undefined;

  /**
   * @member {Boolean} employerIsBroker
   */
  exports.prototype.employerIsBroker = undefined;

  /**
   * @member {module:model/ExpandedProperty} employmentStatus
   */
  exports.prototype.employmentStatus = undefined;

  /**
   * @member {Number} employmentYears
   */
  exports.prototype.employmentYears = undefined;

  /**
   * @member {String} firstName
   */
  exports.prototype.firstName = undefined;

  /**
   * @member {module:model/ExpandedProperty} gender
   */
  exports.prototype.gender = undefined;

  /**
   * @member {String} id
   */
  exports.prototype.id = undefined;

  /**
   * @member {String} idNo
   */
  exports.prototype.idNo = undefined;

  /**
   * @member {module:model/ExpandedProperty} investmentExperience
   */
  exports.prototype.investmentExperience = undefined;

  /**
   * @member {module:model/ExpandedProperty} investmentObjectives
   */
  exports.prototype.investmentObjectives = undefined;

  /**
   * @member {Date} kycWhen
   */
  exports.prototype.kycWhen = undefined;

  /**
   * @member {module:model/UpdateClientResponse.LanguageIdEnum} languageId
   */
  exports.prototype.languageId = undefined;

  /**
   * @member {Date} lastLoginWhen
   */
  exports.prototype.lastLoginWhen = undefined;

  /**
   * @member {String} lastName
   */
  exports.prototype.lastName = undefined;

  /**
   * @member {Number} marginDefault
   */
  exports.prototype.marginDefault = undefined;

  /**
   * @member {module:model/ExpandedProperty} maritalStatus
   */
  exports.prototype.maritalStatus = undefined;

  /**
   * @member {String} networthLiquid
   */
  exports.prototype.networthLiquid = undefined;

  /**
   * @member {String} networthTotal
   */
  exports.prototype.networthTotal = undefined;

  /**
   * @member {String} ownershipType
   */
  exports.prototype.ownershipType = undefined;

  /**
   * @member {module:model/ParentIB} parentIb
   */
  exports.prototype.parentIb = undefined;

  /**
   * @member {String} phone
   */
  exports.prototype.phone = undefined;

  /**
   * @member {String} pictureReviewBy
   */
  exports.prototype.pictureReviewBy = undefined;

  /**
   * @member {Date} pictureReviewWhen
   */
  exports.prototype.pictureReviewWhen = undefined;

  /**
   * @member {Boolean} politcallyExposed
   */
  exports.prototype.politcallyExposed = undefined;

  /**
   * @member {String} referralCode
   */
  exports.prototype.referralCode = undefined;

  /**
   * @member {String} riskTolerance
   */
  exports.prototype.riskTolerance = undefined;

  /**
   * @member {String} stateProvince
   */
  exports.prototype.stateProvince = undefined;

  /**
   * @member {module:model/ExpandedProperty} status
   */
  exports.prototype.status = undefined;

  /**
   * @member {Boolean} termsOfUse
   */
  exports.prototype.termsOfUse = undefined;

  /**
   * @member {Date} updatedWhen
   */
  exports.prototype.updatedWhen = undefined;

  /**
   * @member {Boolean} usCitizen
   */
  exports.prototype.usCitizen = undefined;

  /**
   * @member {Number} userNoteQty
   */
  exports.prototype.userNoteQty = undefined;

  /**
   * @member {module:model/ExpandedProperty} userType
   */
  exports.prototype.userType = undefined;

  /**
   * @member {String} username
   */
  exports.prototype.username = undefined;

  /**
   * @member {String} wlpId
   */
  exports.prototype.wlpId = undefined;

  /**
   * @member {Number} zipPostalCode
   */
  exports.prototype.zipPostalCode = undefined;


  /**
   * Allowed values for the <code>languageId</code> property.
   * @enum {String}
   * @readonly
   */
  exports.LanguageIdEnum = {
    /**
     * value: "en_US"
     * @const
     */
    enUS: "en_US",

    /**
     * value: "zh_CN"
     * @const
     */
    zhCN: "zh_CN",

    /**
     * value: "es_ES"
     * @const
     */
    esES: "es_ES",

    /**
     * value: "pt_BR"
     * @const
     */
    ptBR: "pt_BR"
  };

  return exports;

}));
