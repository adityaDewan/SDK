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
    root.HydrogenIntegrationApi.CardTransferRequestCO = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The CardTransferRequestCO model module.
   * @module model/CardTransferRequestCO
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>CardTransferRequestCO</code>.
   * @alias module:model/CardTransferRequestCO
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>CardTransferRequestCO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/CardTransferRequestCO} obj Optional instance to populate.
   * @return {module:model/CardTransferRequestCO} The populated <code>CardTransferRequestCO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('nucleus_card_id_from'))
        obj.nucleusCardIdFrom = ApiClient.convertToType(data['nucleus_card_id_from'], 'String');
      if (data.hasOwnProperty('nucleus_card_id_to'))
        obj.nucleusCardIdTo = ApiClient.convertToType(data['nucleus_card_id_to'], 'String');
      if (data.hasOwnProperty('reason'))
        obj.reason = ApiClient.convertToType(data['reason'], 'String');
    }
    return obj;
  }

  /**
   * @member {String} nucleusCardIdFrom
   */
  exports.prototype.nucleusCardIdFrom = undefined;

  /**
   * @member {String} nucleusCardIdTo
   */
  exports.prototype.nucleusCardIdTo = undefined;

  /**
   * @member {String} reason
   */
  exports.prototype.reason = undefined;

  return exports;

}));
