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
    define(['ApiClient', 'model/ErrorResponse', 'model/EscrowDepositParams', 'model/EscrowTransactionResponse', 'model/PageEscrowTransactionResponse'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/ErrorResponse'), require('../model/EscrowDepositParams'), require('../model/EscrowTransactionResponse'), require('../model/PageEscrowTransactionResponse'));
  } else {
    // Browser globals (root is window)
    if (!root.MoleculeApiDocumentation) {
      root.MoleculeApiDocumentation = {};
    }
    root.MoleculeApiDocumentation.EscrowTransactionApi = factory(root.MoleculeApiDocumentation.ApiClient, root.MoleculeApiDocumentation.ErrorResponse, root.MoleculeApiDocumentation.EscrowDepositParams, root.MoleculeApiDocumentation.EscrowTransactionResponse, root.MoleculeApiDocumentation.PageEscrowTransactionResponse);
  }
}(this, function(ApiClient, ErrorResponse, EscrowDepositParams, EscrowTransactionResponse, PageEscrowTransactionResponse) {
  'use strict';

  /**
   * EscrowTransaction service.
   * @module api/EscrowTransactionApi
   * @version 1.3.0
   */

  /**
   * Constructs a new EscrowTransactionApi. 
   * @alias module:api/EscrowTransactionApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createEscrowTransactionUsingPost operation.
     * @callback module:api/EscrowTransactionApi~createEscrowTransactionUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/EscrowTransactionResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a new Escrow Transaction
     * @param {module:model/EscrowDepositParams} escrowDepositParams It enables a user to create a escrow transaction
     * @param {module:api/EscrowTransactionApi~createEscrowTransactionUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/EscrowTransactionResponse}
     */
    this.createEscrowTransactionUsingPost = function(escrowDepositParams, callback) {
      var postBody = escrowDepositParams;

      // verify the required parameter 'escrowDepositParams' is set
      if (escrowDepositParams === undefined || escrowDepositParams === null) {
        throw new Error("Missing the required parameter 'escrowDepositParams' when calling createEscrowTransactionUsingPost");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = EscrowTransactionResponse;

      return this.apiClient.callApi(
        '/escrow_transaction', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getEscrowTransactionAllUsingGet operation.
     * @callback module:api/EscrowTransactionApi~getEscrowTransactionAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/PageEscrowTransactionResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List all Escrow Transaction
     * @param {Object} opts Optional parameters
     * @param {Number} opts.page To filter response Escrow Transaction list by page number
     * @param {Number} opts.size Number of records per page
     * @param {String} opts.orderBy Field to sort record list
     * @param {Boolean} opts.ascending Sorting order
     * @param {Boolean} opts.getLatest To fetch latest (one) record
     * @param {module:api/EscrowTransactionApi~getEscrowTransactionAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/PageEscrowTransactionResponse}
     */
    this.getEscrowTransactionAllUsingGet = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'page': opts['page'],
        'size': opts['size'],
        'order_by': opts['orderBy'],
        'ascending': opts['ascending'],
        'get_latest': opts['getLatest'],
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = PageEscrowTransactionResponse;

      return this.apiClient.callApi(
        '/escrow_transaction', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getEscrowTransactionUsingGet operation.
     * @callback module:api/EscrowTransactionApi~getEscrowTransactionUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/EscrowTransactionResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Fetch Escrow Transaction
     * @param {String} escrowTransactionId Escrow Transaction ID
     * @param {module:api/EscrowTransactionApi~getEscrowTransactionUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/EscrowTransactionResponse}
     */
    this.getEscrowTransactionUsingGet = function(escrowTransactionId, callback) {
      var postBody = null;

      // verify the required parameter 'escrowTransactionId' is set
      if (escrowTransactionId === undefined || escrowTransactionId === null) {
        throw new Error("Missing the required parameter 'escrowTransactionId' when calling getEscrowTransactionUsingGet");
      }


      var pathParams = {
        'escrow_transaction_id': escrowTransactionId
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = EscrowTransactionResponse;

      return this.apiClient.callApi(
        '/escrow_transaction/{escrow_transaction_id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the updateEscrowTransactionUsingPut operation.
     * @callback module:api/EscrowTransactionApi~updateEscrowTransactionUsingPutCallback
     * @param {String} error Error message, if any.
     * @param {module:model/EscrowTransactionResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Update Escrow Transaction
     * @param {String} escrowTransactionId Escrow Transaction ID
     * @param {Object} opts Optional parameters
     * @param {module:model/EscrowDepositParams} opts.escrowDepositParams It enables a user to create a escrow transaction
     * @param {module:api/EscrowTransactionApi~updateEscrowTransactionUsingPutCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/EscrowTransactionResponse}
     */
    this.updateEscrowTransactionUsingPut = function(escrowTransactionId, opts, callback) {
      opts = opts || {};
      var postBody = opts['escrowDepositParams'];

      // verify the required parameter 'escrowTransactionId' is set
      if (escrowTransactionId === undefined || escrowTransactionId === null) {
        throw new Error("Missing the required parameter 'escrowTransactionId' when calling updateEscrowTransactionUsingPut");
      }


      var pathParams = {
        'escrow_transaction_id': escrowTransactionId
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = EscrowTransactionResponse;

      return this.apiClient.callApi(
        '/escrow_transaction/{escrow_transaction_id}', 'PUT',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
