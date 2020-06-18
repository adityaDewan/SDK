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
    define(['ApiClient', 'model/AggregationVendorRequestCO'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./AggregationVendorRequestCO'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.AggregationRequestObject = factory(root.HydrogenIntegrationApi.ApiClient, root.HydrogenIntegrationApi.AggregationVendorRequestCO);
  }
}(this, function(ApiClient, AggregationVendorRequestCO) {
  'use strict';

  /**
   * The AggregationRequestObject model module.
   * @module model/AggregationRequestObject
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>AggregationRequestObject</code>.
   * @alias module:model/AggregationRequestObject
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>AggregationRequestObject</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/AggregationRequestObject} obj Optional instance to populate.
   * @return {module:model/AggregationRequestObject} The populated <code>AggregationRequestObject</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('nucleus_aggregation_account_id'))
        obj.nucleusAggregationAccountId = ApiClient.convertToType(data['nucleus_aggregation_account_id'], 'String');
      if (data.hasOwnProperty('nucleus_client_id'))
        obj.nucleusClientId = ApiClient.convertToType(data['nucleus_client_id'], 'String');
      if (data.hasOwnProperty('product'))
        obj.product = ApiClient.convertToType(data['product'], 'String');
      if (data.hasOwnProperty('vendor_config_id'))
        obj.vendorConfigId = ApiClient.convertToType(data['vendor_config_id'], 'String');
      if (data.hasOwnProperty('vendor_request'))
        obj.vendorRequest = AggregationVendorRequestCO.constructFromObject(data['vendor_request']);
    }
    return obj;
  }

  /**
   * @member {String} nucleusAggregationAccountId
   */
  exports.prototype.nucleusAggregationAccountId = undefined;

  /**
   * @member {String} nucleusClientId
   */
  exports.prototype.nucleusClientId = undefined;

  /**
   * @member {String} product
   */
  exports.prototype.product = undefined;

  /**
   * @member {String} vendorConfigId
   */
  exports.prototype.vendorConfigId = undefined;

  /**
   * @member {module:model/AggregationVendorRequestCO} vendorRequest
   */
  exports.prototype.vendorRequest = undefined;

  return exports;

}));
