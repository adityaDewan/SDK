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
    root.HydrogenProtonApi.EducationConfig = factory(root.HydrogenProtonApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The EducationConfig model module.
   * @module model/EducationConfig
   * @version 1.7.18
   */

  /**
   * Constructs a new <code>EducationConfig</code>.
   * @alias module:model/EducationConfig
   * @class
   * @param startAge {Number} 
   * @param totalAnnualCost {Number} 
   * @param endAge {Number} 
   */
  var exports = function(startAge, totalAnnualCost, endAge) {
    this.startAge = startAge;
    this.totalAnnualCost = totalAnnualCost;
    this.endAge = endAge;
  };

  /**
   * Constructs a <code>EducationConfig</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/EducationConfig} obj Optional instance to populate.
   * @return {module:model/EducationConfig} The populated <code>EducationConfig</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('start_age'))
        obj.startAge = ApiClient.convertToType(data['start_age'], 'Number');
      if (data.hasOwnProperty('total_annual_cost'))
        obj.totalAnnualCost = ApiClient.convertToType(data['total_annual_cost'], 'Number');
      if (data.hasOwnProperty('end_age'))
        obj.endAge = ApiClient.convertToType(data['end_age'], 'Number');
    }
    return obj;
  }

  /**
   * @member {Number} startAge
   */
  exports.prototype.startAge = undefined;

  /**
   * @member {Number} totalAnnualCost
   */
  exports.prototype.totalAnnualCost = undefined;

  /**
   * @member {Number} endAge
   */
  exports.prototype.endAge = undefined;

  return exports;

}));