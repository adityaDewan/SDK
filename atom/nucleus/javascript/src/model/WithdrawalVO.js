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
    root.HydrogenNucleusApi.WithdrawalVO = factory(root.HydrogenNucleusApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The WithdrawalVO model module.
   * @module model/WithdrawalVO
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>WithdrawalVO</code>.
   * @alias module:model/WithdrawalVO
   * @class
   */
  var exports = function() {
    var _this = this;





  };

  /**
   * Constructs a <code>WithdrawalVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/WithdrawalVO} obj Optional instance to populate.
   * @return {module:model/WithdrawalVO} The populated <code>WithdrawalVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('withdrawal_amount')) {
        obj['withdrawal_amount'] = ApiClient.convertToType(data['withdrawal_amount'], 'Number');
      }
      if (data.hasOwnProperty('withdrawal_date')) {
        obj['withdrawal_date'] = ApiClient.convertToType(data['withdrawal_date'], 'Date');
      }
      if (data.hasOwnProperty('withdrawal_direction')) {
        obj['withdrawal_direction'] = ApiClient.convertToType(data['withdrawal_direction'], 'String');
      }
      if (data.hasOwnProperty('withdrawal_id')) {
        obj['withdrawal_id'] = ApiClient.convertToType(data['withdrawal_id'], 'String');
      }
    }
    return obj;
  }

  /**
   * @member {Number} withdrawal_amount
   */
  exports.prototype['withdrawal_amount'] = undefined;
  /**
   * @member {Date} withdrawal_date
   */
  exports.prototype['withdrawal_date'] = undefined;
  /**
   * @member {String} withdrawal_direction
   */
  exports.prototype['withdrawal_direction'] = undefined;
  /**
   * @member {String} withdrawal_id
   */
  exports.prototype['withdrawal_id'] = undefined;



  return exports;
}));


