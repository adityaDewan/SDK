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
    root.HydrogenIntegrationApi.CardTokenRequestCO = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The CardTokenRequestCO model module.
   * @module model/CardTokenRequestCO
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>CardTokenRequestCO</code>.
   * @alias module:model/CardTokenRequestCO
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>CardTokenRequestCO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/CardTokenRequestCO} obj Optional instance to populate.
   * @return {module:model/CardTokenRequestCO} The populated <code>CardTokenRequestCO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('nucleus_card_id'))
        obj.nucleusCardId = ApiClient.convertToType(data['nucleus_card_id'], 'String');
      if (data.hasOwnProperty('reason'))
        obj.reason = ApiClient.convertToType(data['reason'], 'String');
      if (data.hasOwnProperty('vendor_request'))
        obj.vendorRequest = ApiClient.convertToType(data['vendor_request'], {'String': 'String'});
      if (data.hasOwnProperty('wallet'))
        obj.wallet = ApiClient.convertToType(data['wallet'], 'String');
    }
    return obj;
  }

  /**
   * @member {String} nucleusCardId
   */
  exports.prototype.nucleusCardId = undefined;

  /**
   * @member {String} reason
   */
  exports.prototype.reason = undefined;

  /**
   * @member {Object.<String, String>} vendorRequest
   */
  exports.prototype.vendorRequest = undefined;

  /**
   * @member {module:model/CardTokenRequestCO.WalletEnum} wallet
   */
  exports.prototype.wallet = undefined;


  /**
   * Allowed values for the <code>wallet</code> property.
   * @enum {String}
   * @readonly
   */
  exports.WalletEnum = {
    /**
     * value: "apple"
     * @const
     */
    apple: "apple",

    /**
     * value: "google"
     * @const
     */
    google: "google",

    /**
     * value: "samsung"
     * @const
     */
    samsung: "samsung"
  };

  return exports;

}));