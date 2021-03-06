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
    root.HydrogenNucleusApi.AggregationAccountBalanceAggregateDataVO = factory(root.HydrogenNucleusApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The AggregationAccountBalanceAggregateDataVO model module.
   * @module model/AggregationAccountBalanceAggregateDataVO
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>AggregationAccountBalanceAggregateDataVO</code>.
   * @alias module:model/AggregationAccountBalanceAggregateDataVO
   * @class
   */
  var exports = function() {
    var _this = this;










  };

  /**
   * Constructs a <code>AggregationAccountBalanceAggregateDataVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/AggregationAccountBalanceAggregateDataVO} obj Optional instance to populate.
   * @return {module:model/AggregationAccountBalanceAggregateDataVO} The populated <code>AggregationAccountBalanceAggregateDataVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('aggregation_account_balance_id')) {
        obj['aggregation_account_balance_id'] = ApiClient.convertToType(data['aggregation_account_balance_id'], 'String');
      }
      if (data.hasOwnProperty('available_balance')) {
        obj['available_balance'] = ApiClient.convertToType(data['available_balance'], 'Number');
      }
      if (data.hasOwnProperty('available_credit')) {
        obj['available_credit'] = ApiClient.convertToType(data['available_credit'], 'Number');
      }
      if (data.hasOwnProperty('balance')) {
        obj['balance'] = ApiClient.convertToType(data['balance'], 'Number');
      }
      if (data.hasOwnProperty('balance_time_stamp')) {
        obj['balance_time_stamp'] = ApiClient.convertToType(data['balance_time_stamp'], 'Date');
      }
      if (data.hasOwnProperty('create_date')) {
        obj['create_date'] = ApiClient.convertToType(data['create_date'], 'Date');
      }
      if (data.hasOwnProperty('currency_code')) {
        obj['currency_code'] = ApiClient.convertToType(data['currency_code'], 'String');
      }
      if (data.hasOwnProperty('secondary_id')) {
        obj['secondary_id'] = ApiClient.convertToType(data['secondary_id'], 'String');
      }
      if (data.hasOwnProperty('update_date')) {
        obj['update_date'] = ApiClient.convertToType(data['update_date'], 'Date');
      }
    }
    return obj;
  }

  /**
   * @member {String} aggregation_account_balance_id
   */
  exports.prototype['aggregation_account_balance_id'] = undefined;
  /**
   * @member {Number} available_balance
   */
  exports.prototype['available_balance'] = undefined;
  /**
   * @member {Number} available_credit
   */
  exports.prototype['available_credit'] = undefined;
  /**
   * @member {Number} balance
   */
  exports.prototype['balance'] = undefined;
  /**
   * @member {Date} balance_time_stamp
   */
  exports.prototype['balance_time_stamp'] = undefined;
  /**
   * @member {Date} create_date
   */
  exports.prototype['create_date'] = undefined;
  /**
   * @member {String} currency_code
   */
  exports.prototype['currency_code'] = undefined;
  /**
   * @member {String} secondary_id
   */
  exports.prototype['secondary_id'] = undefined;
  /**
   * @member {Date} update_date
   */
  exports.prototype['update_date'] = undefined;



  return exports;
}));


