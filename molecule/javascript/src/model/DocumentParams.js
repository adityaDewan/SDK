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
    root.MoleculeApiDocumentation.DocumentParams = factory(root.MoleculeApiDocumentation.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The DocumentParams model module.
   * @module model/DocumentParams
   * @version 1.3.0
   */

  /**
   * Constructs a new <code>DocumentParams</code>.
   * @alias module:model/DocumentParams
   * @class
   * @param documentId {String} 
   * @param walletId {String} 
   */
  var exports = function(documentId, walletId) {
    this.documentId = documentId;
    this.walletId = walletId;
  };

  /**
   * Constructs a <code>DocumentParams</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/DocumentParams} obj Optional instance to populate.
   * @return {module:model/DocumentParams} The populated <code>DocumentParams</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('document_id'))
        obj.documentId = ApiClient.convertToType(data['document_id'], 'String');
      if (data.hasOwnProperty('wallet_id'))
        obj.walletId = ApiClient.convertToType(data['wallet_id'], 'String');
    }
    return obj;
  }

  /**
   * @member {String} documentId
   */
  exports.prototype.documentId = undefined;

  /**
   * @member {String} walletId
   */
  exports.prototype.walletId = undefined;

  return exports;

}));
