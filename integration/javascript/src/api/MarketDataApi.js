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
    define(['ApiClient', 'model/MdHistoryRequestCO', 'model/MdHistoryResponseVO', 'model/MdQuoteRequestCO', 'model/MdQuoteResponseVO'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/MdHistoryRequestCO'), require('../model/MdHistoryResponseVO'), require('../model/MdQuoteRequestCO'), require('../model/MdQuoteResponseVO'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.MarketDataApi = factory(root.HydrogenIntegrationApi.ApiClient, root.HydrogenIntegrationApi.MdHistoryRequestCO, root.HydrogenIntegrationApi.MdHistoryResponseVO, root.HydrogenIntegrationApi.MdQuoteRequestCO, root.HydrogenIntegrationApi.MdQuoteResponseVO);
  }
}(this, function(ApiClient, MdHistoryRequestCO, MdHistoryResponseVO, MdQuoteRequestCO, MdQuoteResponseVO) {
  'use strict';

  /**
   * MarketData service.
   * @module api/MarketDataApi
   * @version 1.2.1
   */

  /**
   * Constructs a new MarketDataApi. 
   * @alias module:api/MarketDataApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createMarketDataHistoricalUsingPost operation.
     * @callback module:api/MarketDataApi~createMarketDataHistoricalUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MdHistoryResponseVO} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create historical market data
     * @param {module:model/MdHistoryRequestCO} historyRequest historyRequest
     * @param {module:api/MarketDataApi~createMarketDataHistoricalUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MdHistoryResponseVO}
     */
    this.createMarketDataHistoricalUsingPost = function(historyRequest, callback) {
      var postBody = historyRequest;

      // verify the required parameter 'historyRequest' is set
      if (historyRequest === undefined || historyRequest === null) {
        throw new Error("Missing the required parameter 'historyRequest' when calling createMarketDataHistoricalUsingPost");
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
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = MdHistoryResponseVO;

      return this.apiClient.callApi(
        '/market_data/historical', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the createMarketDataQuoteUsingPost operation.
     * @callback module:api/MarketDataApi~createMarketDataQuoteUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/MdQuoteResponseVO} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create quote market data
     * @param {module:model/MdQuoteRequestCO} quoteRequest quoteRequest
     * @param {module:api/MarketDataApi~createMarketDataQuoteUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/MdQuoteResponseVO}
     */
    this.createMarketDataQuoteUsingPost = function(quoteRequest, callback) {
      var postBody = quoteRequest;

      // verify the required parameter 'quoteRequest' is set
      if (quoteRequest === undefined || quoteRequest === null) {
        throw new Error("Missing the required parameter 'quoteRequest' when calling createMarketDataQuoteUsingPost");
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
      var contentTypes = ['application/json'];
      var accepts = ['application/json'];
      var returnType = MdQuoteResponseVO;

      return this.apiClient.callApi(
        '/market_data/quote', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
