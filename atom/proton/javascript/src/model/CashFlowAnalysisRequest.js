/*
 * Hydrogen Proton API
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.7.18
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
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenProtonApi) {
      root.HydrogenProtonApi = {};
    }
    root.HydrogenProtonApi.CashFlowAnalysisRequest = factory(root.HydrogenProtonApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The CashFlowAnalysisRequest model module.
   * @module model/CashFlowAnalysisRequest
   * @version 1.7.18
   */

  /**
   * Constructs a new <code>CashFlowAnalysisRequest</code>.
   * @alias module:model/CashFlowAnalysisRequest
   * @class
   * @param clientId {String} 
   */
  var exports = function(clientId) {
    this.clientId = clientId;
  };

  /**
   * Constructs a <code>CashFlowAnalysisRequest</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/CashFlowAnalysisRequest} obj Optional instance to populate.
   * @return {module:model/CashFlowAnalysisRequest} The populated <code>CashFlowAnalysisRequest</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('show_history'))
        obj.showHistory = ApiClient.convertToType(data['show_history'], 'Boolean');
      if (data.hasOwnProperty('start_date'))
        obj.startDate = ApiClient.convertToType(data['start_date'], 'Date');
      if (data.hasOwnProperty('end_date'))
        obj.endDate = ApiClient.convertToType(data['end_date'], 'Date');
      if (data.hasOwnProperty('client_id'))
        obj.clientId = ApiClient.convertToType(data['client_id'], 'String');
      if (data.hasOwnProperty('currency_code'))
        obj.currencyCode = ApiClient.convertToType(data['currency_code'], 'String');
      if (data.hasOwnProperty('show_income_details'))
        obj.showIncomeDetails = ApiClient.convertToType(data['show_income_details'], 'Boolean');
      if (data.hasOwnProperty('benchmark_end_date'))
        obj.benchmarkEndDate = ApiClient.convertToType(data['benchmark_end_date'], 'Date');
      if (data.hasOwnProperty('show_spending_details'))
        obj.showSpendingDetails = ApiClient.convertToType(data['show_spending_details'], 'Boolean');
      if (data.hasOwnProperty('benchmark_start_date'))
        obj.benchmarkStartDate = ApiClient.convertToType(data['benchmark_start_date'], 'Date');
    }
    return obj;
  }

  /**
   * @member {Boolean} showHistory
   * @default false
   */
  exports.prototype.showHistory = false;

  /**
   * @member {Date} startDate
   */
  exports.prototype.startDate = undefined;

  /**
   * @member {Date} endDate
   */
  exports.prototype.endDate = undefined;

  /**
   * @member {String} clientId
   */
  exports.prototype.clientId = undefined;

  /**
   * @member {String} currencyCode
   * @default 'USD'
   */
  exports.prototype.currencyCode = 'USD';

  /**
   * @member {Boolean} showIncomeDetails
   * @default false
   */
  exports.prototype.showIncomeDetails = false;

  /**
   * @member {Date} benchmarkEndDate
   */
  exports.prototype.benchmarkEndDate = undefined;

  /**
   * @member {Boolean} showSpendingDetails
   * @default false
   */
  exports.prototype.showSpendingDetails = false;

  /**
   * @member {Date} benchmarkStartDate
   */
  exports.prototype.benchmarkStartDate = undefined;

  return exports;

}));
