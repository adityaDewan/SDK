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
    root.HydrogenNucleusApi.Invoice = factory(root.HydrogenNucleusApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The Invoice model module.
   * @module model/Invoice
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>Invoice</code>.
   * Invoice Object
   * @alias module:model/Invoice
   * @class
   * @param currencyCode {String} currency_code
   * @param customerId {String} invoice_number
   * @param dueDate {Date} due_date
   * @param invoiceDate {Date} invoice_date
   * @param invoiceName {String} invoice_name
   * @param invoiceNumber {String} invoice_number
   * @param paymentDetails {String} payment_details
   */
  var exports = function(currencyCode, customerId, dueDate, invoiceDate, invoiceName, invoiceNumber, paymentDetails) {
    var _this = this;



    _this['currency_code'] = currencyCode;
    _this['customer_id'] = customerId;



    _this['due_date'] = dueDate;


    _this['invoice_date'] = invoiceDate;
    _this['invoice_name'] = invoiceName;
    _this['invoice_number'] = invoiceNumber;


    _this['payment_details'] = paymentDetails;



  };

  /**
   * Constructs a <code>Invoice</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/Invoice} obj Optional instance to populate.
   * @return {module:model/Invoice} The populated <code>Invoice</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('client_id')) {
        obj['client_id'] = ApiClient.convertToType(data['client_id'], 'String');
      }
      if (data.hasOwnProperty('create_date')) {
        obj['create_date'] = ApiClient.convertToType(data['create_date'], 'Date');
      }
      if (data.hasOwnProperty('currency_code')) {
        obj['currency_code'] = ApiClient.convertToType(data['currency_code'], 'String');
      }
      if (data.hasOwnProperty('customer_id')) {
        obj['customer_id'] = ApiClient.convertToType(data['customer_id'], 'String');
      }
      if (data.hasOwnProperty('description')) {
        obj['description'] = ApiClient.convertToType(data['description'], 'String');
      }
      if (data.hasOwnProperty('division')) {
        obj['division'] = ApiClient.convertToType(data['division'], 'String');
      }
      if (data.hasOwnProperty('document_id')) {
        obj['document_id'] = ApiClient.convertToType(data['document_id'], 'String');
      }
      if (data.hasOwnProperty('due_date')) {
        obj['due_date'] = ApiClient.convertToType(data['due_date'], 'Date');
      }
      if (data.hasOwnProperty('id')) {
        obj['id'] = ApiClient.convertToType(data['id'], 'String');
      }
      if (data.hasOwnProperty('invoice_amount')) {
        obj['invoice_amount'] = ApiClient.convertToType(data['invoice_amount'], 'Number');
      }
      if (data.hasOwnProperty('invoice_date')) {
        obj['invoice_date'] = ApiClient.convertToType(data['invoice_date'], 'Date');
      }
      if (data.hasOwnProperty('invoice_name')) {
        obj['invoice_name'] = ApiClient.convertToType(data['invoice_name'], 'String');
      }
      if (data.hasOwnProperty('invoice_number')) {
        obj['invoice_number'] = ApiClient.convertToType(data['invoice_number'], 'String');
      }
      if (data.hasOwnProperty('is_active')) {
        obj['is_active'] = ApiClient.convertToType(data['is_active'], 'Boolean');
      }
      if (data.hasOwnProperty('metadata')) {
        obj['metadata'] = ApiClient.convertToType(data['metadata'], {'String': 'String'});
      }
      if (data.hasOwnProperty('payment_details')) {
        obj['payment_details'] = ApiClient.convertToType(data['payment_details'], 'String');
      }
      if (data.hasOwnProperty('secondary_id')) {
        obj['secondary_id'] = ApiClient.convertToType(data['secondary_id'], 'String');
      }
      if (data.hasOwnProperty('status')) {
        obj['status'] = ApiClient.convertToType(data['status'], 'String');
      }
      if (data.hasOwnProperty('update_date')) {
        obj['update_date'] = ApiClient.convertToType(data['update_date'], 'Date');
      }
    }
    return obj;
  }

  /**
   * client_id
   * @member {String} client_id
   */
  exports.prototype['client_id'] = undefined;
  /**
   * @member {Date} create_date
   */
  exports.prototype['create_date'] = undefined;
  /**
   * currency_code
   * @member {String} currency_code
   */
  exports.prototype['currency_code'] = undefined;
  /**
   * invoice_number
   * @member {String} customer_id
   */
  exports.prototype['customer_id'] = undefined;
  /**
   * description
   * @member {String} description
   */
  exports.prototype['description'] = undefined;
  /**
   * division
   * @member {String} division
   */
  exports.prototype['division'] = undefined;
  /**
   * document_id
   * @member {String} document_id
   */
  exports.prototype['document_id'] = undefined;
  /**
   * due_date
   * @member {Date} due_date
   */
  exports.prototype['due_date'] = undefined;
  /**
   * @member {String} id
   */
  exports.prototype['id'] = undefined;
  /**
   * @member {Number} invoice_amount
   */
  exports.prototype['invoice_amount'] = undefined;
  /**
   * invoice_date
   * @member {Date} invoice_date
   */
  exports.prototype['invoice_date'] = undefined;
  /**
   * invoice_name
   * @member {String} invoice_name
   */
  exports.prototype['invoice_name'] = undefined;
  /**
   * invoice_number
   * @member {String} invoice_number
   */
  exports.prototype['invoice_number'] = undefined;
  /**
   * is_active
   * @member {Boolean} is_active
   */
  exports.prototype['is_active'] = undefined;
  /**
   * @member {Object.<String, String>} metadata
   */
  exports.prototype['metadata'] = undefined;
  /**
   * payment_details
   * @member {String} payment_details
   */
  exports.prototype['payment_details'] = undefined;
  /**
   * @member {String} secondary_id
   */
  exports.prototype['secondary_id'] = undefined;
  /**
   * status
   * @member {String} status
   */
  exports.prototype['status'] = undefined;
  /**
   * @member {Date} update_date
   */
  exports.prototype['update_date'] = undefined;



  return exports;
}));


