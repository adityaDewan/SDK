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
    define(['ApiClient', 'model/ErrorResponse', 'model/PageTokenBalanceResponse', 'model/TokenBalanceResponse'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/ErrorResponse'), require('../model/PageTokenBalanceResponse'), require('../model/TokenBalanceResponse'));
  } else {
    // Browser globals (root is window)
    if (!root.MoleculeApiDocumentation) {
      root.MoleculeApiDocumentation = {};
    }
    root.MoleculeApiDocumentation.TokenBalanceApi = factory(root.MoleculeApiDocumentation.ApiClient, root.MoleculeApiDocumentation.ErrorResponse, root.MoleculeApiDocumentation.PageTokenBalanceResponse, root.MoleculeApiDocumentation.TokenBalanceResponse);
  }
}(this, function(ApiClient, ErrorResponse, PageTokenBalanceResponse, TokenBalanceResponse) {
  'use strict';

  /**
   * TokenBalance service.
   * @module api/TokenBalanceApi
   * @version 1.3.0
   */

  /**
   * Constructs a new TokenBalanceApi. 
   * @alias module:api/TokenBalanceApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the getTokenBalanceAllUsingGet operation.
     * @callback module:api/TokenBalanceApi~getTokenBalanceAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/PageTokenBalanceResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Fetch Token Balance list
     * @param {Object} opts Optional parameters
     * @param {String} opts.walletId To filter response Token Balance list by wallet ID
     * @param {String} opts.tokenId To filter response Token Balance list by Token ID
     * @param {Number} opts.page To filter response Token Balance list by page number
     * @param {Number} opts.size Number of records per page
     * @param {String} opts.orderBy Field to sort record list
     * @param {Boolean} opts.ascending Sorting order
     * @param {Boolean} opts.getLatest To fetch latest (one) record
     * @param {module:api/TokenBalanceApi~getTokenBalanceAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/PageTokenBalanceResponse}
     */
    this.getTokenBalanceAllUsingGet = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'wallet_id': opts['walletId'],
        'token_id': opts['tokenId'],
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
      var returnType = PageTokenBalanceResponse;

      return this.apiClient.callApi(
        '/token_balance', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getTokenBalanceUsingGet operation.
     * @callback module:api/TokenBalanceApi~getTokenBalanceUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/TokenBalanceResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Fetch Token Balance details
     * @param {String} tokenBalanceId Token Balance ID
     * @param {module:api/TokenBalanceApi~getTokenBalanceUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/TokenBalanceResponse}
     */
    this.getTokenBalanceUsingGet = function(tokenBalanceId, callback) {
      var postBody = null;

      // verify the required parameter 'tokenBalanceId' is set
      if (tokenBalanceId === undefined || tokenBalanceId === null) {
        throw new Error("Missing the required parameter 'tokenBalanceId' when calling getTokenBalanceUsingGet");
      }


      var pathParams = {
        'token_balance_id': tokenBalanceId
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
      var returnType = TokenBalanceResponse;

      return this.apiClient.callApi(
        '/token_balance/{token_balance_id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
