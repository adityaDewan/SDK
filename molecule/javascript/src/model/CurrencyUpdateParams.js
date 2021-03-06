/*
 * Molecule API Documentation
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
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
    if (!root.MoleculeApiDocumentation) {
      root.MoleculeApiDocumentation = {};
    }
    root.MoleculeApiDocumentation.CurrencyUpdateParams = factory(root.MoleculeApiDocumentation.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The CurrencyUpdateParams model module.
   * @module model/CurrencyUpdateParams
   * @version 1.3.0
   */

  /**
   * Constructs a new <code>CurrencyUpdateParams</code>.
   * @alias module:model/CurrencyUpdateParams
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>CurrencyUpdateParams</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/CurrencyUpdateParams} obj Optional instance to populate.
   * @return {module:model/CurrencyUpdateParams} The populated <code>CurrencyUpdateParams</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('logo'))
        obj.logo = ApiClient.convertToType(data['logo'], 'String');
      if (data.hasOwnProperty('is_allowed'))
        obj.isAllowed = ApiClient.convertToType(data['is_allowed'], 'Boolean');
    }
    return obj;
  }

  /**
   * @member {String} logo
   */
  exports.prototype.logo = undefined;

  /**
   * @member {Boolean} isAllowed
   */
  exports.prototype.isAllowed = undefined;

  return exports;

}));
