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
    root.MoleculeApiDocumentation.TokenWhitelistParams = factory(root.MoleculeApiDocumentation.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The TokenWhitelistParams model module.
   * @module model/TokenWhitelistParams
   * @version 1.3.0
   */

  /**
   * Constructs a new <code>TokenWhitelistParams</code>.
   * @alias module:model/TokenWhitelistParams
   * @class
   * @param walletId {String} 
   * @param tokenId {String} 
   */
  var exports = function(walletId, tokenId) {
    this.walletId = walletId;
    this.tokenId = tokenId;
  };

  /**
   * Constructs a <code>TokenWhitelistParams</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/TokenWhitelistParams} obj Optional instance to populate.
   * @return {module:model/TokenWhitelistParams} The populated <code>TokenWhitelistParams</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('wallet_id'))
        obj.walletId = ApiClient.convertToType(data['wallet_id'], 'String');
      if (data.hasOwnProperty('token_id'))
        obj.tokenId = ApiClient.convertToType(data['token_id'], 'String');
    }
    return obj;
  }

  /**
   * @member {String} walletId
   */
  exports.prototype.walletId = undefined;

  /**
   * @member {String} tokenId
   */
  exports.prototype.tokenId = undefined;

  return exports;

}));
