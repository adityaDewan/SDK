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
    root.HydrogenNucleusApi.SecurityCountryVO = factory(root.HydrogenNucleusApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The SecurityCountryVO model module.
   * @module model/SecurityCountryVO
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>SecurityCountryVO</code>.
   * @alias module:model/SecurityCountryVO
   * @class
   */
  var exports = function() {
    var _this = this;



  };

  /**
   * Constructs a <code>SecurityCountryVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/SecurityCountryVO} obj Optional instance to populate.
   * @return {module:model/SecurityCountryVO} The populated <code>SecurityCountryVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('country')) {
        obj['country'] = ApiClient.convertToType(data['country'], 'String');
      }
      if (data.hasOwnProperty('weight')) {
        obj['weight'] = ApiClient.convertToType(data['weight'], 'Number');
      }
    }
    return obj;
  }

  /**
   * @member {String} country
   */
  exports.prototype['country'] = undefined;
  /**
   * @member {Number} weight
   */
  exports.prototype['weight'] = undefined;



  return exports;
}));


