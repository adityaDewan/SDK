/**
 * Hydrogen Atom API
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenNucleusApi) {
      root.HydrogenNucleusApi = {};
    }
    root.HydrogenNucleusApi.AggregateDataByCategoryForClientFromDbVO = factory(root.HydrogenNucleusApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The AggregateDataByCategoryForClientFromDbVO model module.
   * @module model/AggregateDataByCategoryForClientFromDbVO
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>AggregateDataByCategoryForClientFromDbVO</code>.
   * @alias module:model/AggregateDataByCategoryForClientFromDbVO
   * @class
   */
  var exports = function() {
    var _this = this;




















  };

  /**
   * Constructs a <code>AggregateDataByCategoryForClientFromDbVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/AggregateDataByCategoryForClientFromDbVO} obj Optional instance to populate.
   * @return {module:model/AggregateDataByCategoryForClientFromDbVO} The populated <code>AggregateDataByCategoryForClientFromDbVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('account_holder')) {
        obj['account_holder'] = ApiClient.convertToType(data['account_holder'], 'String');
      }
      if (data.hasOwnProperty('account_name')) {
        obj['account_name'] = ApiClient.convertToType(data['account_name'], 'String');
      }
      if (data.hasOwnProperty('account_number')) {
        obj['account_number'] = ApiClient.convertToType(data['account_number'], 'String');
      }
      if (data.hasOwnProperty('aggregation_account_balance_id')) {
        obj['aggregation_account_balance_id'] = ApiClient.convertToType(data['aggregation_account_balance_id'], 'String');
      }
      if (data.hasOwnProperty('aggregation_account_id')) {
        obj['aggregation_account_id'] = ApiClient.convertToType(data['aggregation_account_id'], 'String');
      }
      if (data.hasOwnProperty('available_balance')) {
        obj['available_balance'] = ApiClient.convertToType(data['available_balance'], 'String');
      }
      if (data.hasOwnProperty('available_credit')) {
        obj['available_credit'] = ApiClient.convertToType(data['available_credit'], 'String');
      }
      if (data.hasOwnProperty('balance')) {
        obj['balance'] = ApiClient.convertToType(data['balance'], 'String');
      }
      if (data.hasOwnProperty('balance_time_stamp')) {
        obj['balance_time_stamp'] = ApiClient.convertToType(data['balance_time_stamp'], 'Date');
      }
      if (data.hasOwnProperty('category')) {
        obj['category'] = ApiClient.convertToType(data['category'], 'String');
      }
      if (data.hasOwnProperty('client_id')) {
        obj['client_id'] = ApiClient.convertToType(data['client_id'], 'String');
      }
      if (data.hasOwnProperty('currency_code')) {
        obj['currency_code'] = ApiClient.convertToType(data['currency_code'], 'String');
      }
      if (data.hasOwnProperty('financial_offer_id')) {
        obj['financial_offer_id'] = ApiClient.convertToType(data['financial_offer_id'], 'String');
      }
      if (data.hasOwnProperty('institution_name')) {
        obj['institution_name'] = ApiClient.convertToType(data['institution_name'], 'String');
      }
      if (data.hasOwnProperty('is_active')) {
        obj['is_active'] = ApiClient.convertToType(data['is_active'], 'Boolean');
      }
      if (data.hasOwnProperty('is_asset')) {
        obj['is_asset'] = ApiClient.convertToType(data['is_asset'], 'Boolean');
      }
      if (data.hasOwnProperty('mask')) {
        obj['mask'] = ApiClient.convertToType(data['mask'], 'String');
      }
      if (data.hasOwnProperty('metadata')) {
        obj['metadata'] = ApiClient.convertToType(data['metadata'], {'String': 'String'});
      }
      if (data.hasOwnProperty('subcategory')) {
        obj['subcategory'] = ApiClient.convertToType(data['subcategory'], 'String');
      }
    }
    return obj;
  }

  /**
   * @member {String} account_holder
   */
  exports.prototype['account_holder'] = undefined;
  /**
   * @member {String} account_name
   */
  exports.prototype['account_name'] = undefined;
  /**
   * @member {String} account_number
   */
  exports.prototype['account_number'] = undefined;
  /**
   * @member {String} aggregation_account_balance_id
   */
  exports.prototype['aggregation_account_balance_id'] = undefined;
  /**
   * @member {String} aggregation_account_id
   */
  exports.prototype['aggregation_account_id'] = undefined;
  /**
   * @member {String} available_balance
   */
  exports.prototype['available_balance'] = undefined;
  /**
   * @member {String} available_credit
   */
  exports.prototype['available_credit'] = undefined;
  /**
   * @member {String} balance
   */
  exports.prototype['balance'] = undefined;
  /**
   * @member {Date} balance_time_stamp
   */
  exports.prototype['balance_time_stamp'] = undefined;
  /**
   * @member {String} category
   */
  exports.prototype['category'] = undefined;
  /**
   * @member {String} client_id
   */
  exports.prototype['client_id'] = undefined;
  /**
   * @member {String} currency_code
   */
  exports.prototype['currency_code'] = undefined;
  /**
   * @member {String} financial_offer_id
   */
  exports.prototype['financial_offer_id'] = undefined;
  /**
   * @member {String} institution_name
   */
  exports.prototype['institution_name'] = undefined;
  /**
   * @member {Boolean} is_active
   */
  exports.prototype['is_active'] = undefined;
  /**
   * @member {Boolean} is_asset
   */
  exports.prototype['is_asset'] = undefined;
  /**
   * @member {String} mask
   */
  exports.prototype['mask'] = undefined;
  /**
   * @member {Object.<String, String>} metadata
   */
  exports.prototype['metadata'] = undefined;
  /**
   * @member {String} subcategory
   */
  exports.prototype['subcategory'] = undefined;



  return exports;
}));


