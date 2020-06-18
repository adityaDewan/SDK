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
    root.HydrogenIntegrationApi.BrokerageAccountCO = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The BrokerageAccountCO model module.
   * @module model/BrokerageAccountCO
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>BrokerageAccountCO</code>.
   * @alias module:model/BrokerageAccountCO
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>BrokerageAccountCO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/BrokerageAccountCO} obj Optional instance to populate.
   * @return {module:model/BrokerageAccountCO} The populated <code>BrokerageAccountCO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('electron_document_id'))
        obj.electronDocumentId = ApiClient.convertToType(data['electron_document_id'], ['String']);
      if (data.hasOwnProperty('nucleus_account_id'))
        obj.nucleusAccountId = ApiClient.convertToType(data['nucleus_account_id'], 'String');
      if (data.hasOwnProperty('nucleus_account_type_id'))
        obj.nucleusAccountTypeId = ApiClient.convertToType(data['nucleus_account_type_id'], 'String');
    }
    return obj;
  }

  /**
   * @member {Array.<String>} electronDocumentId
   */
  exports.prototype.electronDocumentId = undefined;

  /**
   * @member {String} nucleusAccountId
   */
  exports.prototype.nucleusAccountId = undefined;

  /**
   * @member {String} nucleusAccountTypeId
   */
  exports.prototype.nucleusAccountTypeId = undefined;

  return exports;

}));
