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
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.BaasBalanceVO = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The BaasBalanceVO model module.
   * @module model/BaasBalanceVO
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>BaasBalanceVO</code>.
   * @alias module:model/BaasBalanceVO
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>BaasBalanceVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/BaasBalanceVO} obj Optional instance to populate.
   * @return {module:model/BaasBalanceVO} The populated <code>BaasBalanceVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('message'))
        obj.message = ApiClient.convertToType(data['message'], 'String');
      if (data.hasOwnProperty('nucleus_asset_sizes_posted'))
        obj.nucleusAssetSizesPosted = ApiClient.convertToType(data['nucleus_asset_sizes_posted'], [Object]);
      if (data.hasOwnProperty('nucleus_asset_sizes_updated'))
        obj.nucleusAssetSizesUpdated = ApiClient.convertToType(data['nucleus_asset_sizes_updated'], [Object]);
      if (data.hasOwnProperty('nucleus_portfolio_id'))
        obj.nucleusPortfolioId = ApiClient.convertToType(data['nucleus_portfolio_id'], 'String');
      if (data.hasOwnProperty('vendor_name'))
        obj.vendorName = ApiClient.convertToType(data['vendor_name'], Object);
    }
    return obj;
  }

  /**
   * @member {String} message
   */
  exports.prototype.message = undefined;

  /**
   * @member {Array.<Object>} nucleusAssetSizesPosted
   */
  exports.prototype.nucleusAssetSizesPosted = undefined;

  /**
   * @member {Array.<Object>} nucleusAssetSizesUpdated
   */
  exports.prototype.nucleusAssetSizesUpdated = undefined;

  /**
   * @member {String} nucleusPortfolioId
   */
  exports.prototype.nucleusPortfolioId = undefined;

  /**
   * @member {Object} vendorName
   */
  exports.prototype.vendorName = undefined;

  return exports;

}));
