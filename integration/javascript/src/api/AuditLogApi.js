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
    define(['ApiClient', 'model/Pageobject'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/Pageobject'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.AuditLogApi = factory(root.HydrogenIntegrationApi.ApiClient, root.HydrogenIntegrationApi.Pageobject);
  }
}(this, function(ApiClient, Pageobject) {
  'use strict';

  /**
   * AuditLog service.
   * @module api/AuditLogApi
   * @version 1.2.1
   */

  /**
   * Constructs a new AuditLogApi. 
   * @alias module:api/AuditLogApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the getAuditLogAllUsingGet operation.
     * @callback module:api/AuditLogApi~getAuditLogAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Pageobject} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Gel all audit log
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.ascending ascending (default to false)
     * @param {Date} opts.endDate end_date (default to null)
     * @param {String} opts.event event
     * @param {String} opts.integrationType integration_type
     * @param {Boolean} opts.isRequest is_request (default to false)
     * @param {String} opts.nucleusClientId nucleus_client_id
     * @param {String} opts.orderBy order_by (default to update_date)
     * @param {Number} opts.page page (default to 0)
     * @param {String} opts.requestType request_type
     * @param {Number} opts.size size (default to 25)
     * @param {Date} opts.startDate start_date (default to null)
     * @param {String} opts.vendorName vendor_name
     * @param {module:api/AuditLogApi~getAuditLogAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Pageobject}
     */
    this.getAuditLogAllUsingGet = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'ascending': opts['ascending'],
        'end_date': opts['endDate'],
        'event': opts['event'],
        'integration_type': opts['integrationType'],
        'is_request': opts['isRequest'],
        'nucleus_client_id': opts['nucleusClientId'],
        'order_by': opts['orderBy'],
        'page': opts['page'],
        'request_type': opts['requestType'],
        'size': opts['size'],
        'start_date': opts['startDate'],
        'vendor_name': opts['vendorName'],
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = Pageobject;

      return this.apiClient.callApi(
        '/audit_log', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));