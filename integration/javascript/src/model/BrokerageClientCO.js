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
    root.HydrogenIntegrationApi.BrokerageClientCO = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The BrokerageClientCO model module.
   * @module model/BrokerageClientCO
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>BrokerageClientCO</code>.
   * @alias module:model/BrokerageClientCO
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>BrokerageClientCO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/BrokerageClientCO} obj Optional instance to populate.
   * @return {module:model/BrokerageClientCO} The populated <code>BrokerageClientCO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('nucleus_account_id'))
        obj.nucleusAccountId = ApiClient.convertToType(data['nucleus_account_id'], 'String');
      if (data.hasOwnProperty('nucleus_client_id'))
        obj.nucleusClientId = ApiClient.convertToType(data['nucleus_client_id'], 'String');
    }
    return obj;
  }

  /**
   * @member {String} nucleusAccountId
   */
  exports.prototype.nucleusAccountId = undefined;

  /**
   * @member {String} nucleusClientId
   */
  exports.prototype.nucleusClientId = undefined;

  return exports;

}));
