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
    define(['ApiClient', 'model/SupportTicketDocument'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./SupportTicketDocument'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenNucleusApi) {
      root.HydrogenNucleusApi = {};
    }
    root.HydrogenNucleusApi.SupportTicketComment = factory(root.HydrogenNucleusApi.ApiClient, root.HydrogenNucleusApi.SupportTicketDocument);
  }
}(this, function(ApiClient, SupportTicketDocument) {
  'use strict';




  /**
   * The SupportTicketComment model module.
   * @module model/SupportTicketComment
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>SupportTicketComment</code>.
   * Support Ticket Comment
   * @alias module:model/SupportTicketComment
   * @class
   * @param supportTicketId {String} SupportTicket Id
   */
  var exports = function(supportTicketId) {
    var _this = this;










    _this['support_ticket_id'] = supportTicketId;

  };

  /**
   * Constructs a <code>SupportTicketComment</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/SupportTicketComment} obj Optional instance to populate.
   * @return {module:model/SupportTicketComment} The populated <code>SupportTicketComment</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('create_date')) {
        obj['create_date'] = ApiClient.convertToType(data['create_date'], 'Date');
      }
      if (data.hasOwnProperty('description')) {
        obj['description'] = ApiClient.convertToType(data['description'], 'String');
      }
      if (data.hasOwnProperty('has_attachment')) {
        obj['has_attachment'] = ApiClient.convertToType(data['has_attachment'], 'Boolean');
      }
      if (data.hasOwnProperty('id')) {
        obj['id'] = ApiClient.convertToType(data['id'], 'String');
      }
      if (data.hasOwnProperty('is_admin')) {
        obj['is_admin'] = ApiClient.convertToType(data['is_admin'], 'Boolean');
      }
      if (data.hasOwnProperty('is_read')) {
        obj['is_read'] = ApiClient.convertToType(data['is_read'], 'Boolean');
      }
      if (data.hasOwnProperty('metadata')) {
        obj['metadata'] = ApiClient.convertToType(data['metadata'], {'String': 'String'});
      }
      if (data.hasOwnProperty('secondary_id')) {
        obj['secondary_id'] = ApiClient.convertToType(data['secondary_id'], 'String');
      }
      if (data.hasOwnProperty('support_ticket_documents')) {
        obj['support_ticket_documents'] = ApiClient.convertToType(data['support_ticket_documents'], [SupportTicketDocument]);
      }
      if (data.hasOwnProperty('support_ticket_id')) {
        obj['support_ticket_id'] = ApiClient.convertToType(data['support_ticket_id'], 'String');
      }
      if (data.hasOwnProperty('update_date')) {
        obj['update_date'] = ApiClient.convertToType(data['update_date'], 'Date');
      }
    }
    return obj;
  }

  /**
   * @member {Date} create_date
   */
  exports.prototype['create_date'] = undefined;
  /**
   * SupportTicket Comment Description
   * @member {String} description
   */
  exports.prototype['description'] = undefined;
  /**
   * Does the SupportTicket Comment contain an attachment
   * @member {Boolean} has_attachment
   */
  exports.prototype['has_attachment'] = undefined;
  /**
   * @member {String} id
   */
  exports.prototype['id'] = undefined;
  /**
   * Is the SupportTicket Comment an admin
   * @member {Boolean} is_admin
   */
  exports.prototype['is_admin'] = undefined;
  /**
   * Is the SupportTicket Comment read
   * @member {Boolean} is_read
   */
  exports.prototype['is_read'] = undefined;
  /**
   * @member {Object.<String, String>} metadata
   */
  exports.prototype['metadata'] = undefined;
  /**
   * @member {String} secondary_id
   */
  exports.prototype['secondary_id'] = undefined;
  /**
   * @member {Array.<module:model/SupportTicketDocument>} support_ticket_documents
   */
  exports.prototype['support_ticket_documents'] = undefined;
  /**
   * SupportTicket Id
   * @member {String} support_ticket_id
   */
  exports.prototype['support_ticket_id'] = undefined;
  /**
   * @member {Date} update_date
   */
  exports.prototype['update_date'] = undefined;



  return exports;
}));


