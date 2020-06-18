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
    define(['ApiClient', 'model/PageSecurity', 'model/PageSecurityExclusion', 'model/PageSecurityPrice', 'model/Security', 'model/SecurityExclusion', 'model/SecurityPrice'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/PageSecurity'), require('../model/PageSecurityExclusion'), require('../model/PageSecurityPrice'), require('../model/Security'), require('../model/SecurityExclusion'), require('../model/SecurityPrice'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenNucleusApi) {
      root.HydrogenNucleusApi = {};
    }
    root.HydrogenNucleusApi.SecuritiesApi = factory(root.HydrogenNucleusApi.ApiClient, root.HydrogenNucleusApi.PageSecurity, root.HydrogenNucleusApi.PageSecurityExclusion, root.HydrogenNucleusApi.PageSecurityPrice, root.HydrogenNucleusApi.Security, root.HydrogenNucleusApi.SecurityExclusion, root.HydrogenNucleusApi.SecurityPrice);
  }
}(this, function(ApiClient, PageSecurity, PageSecurityExclusion, PageSecurityPrice, Security, SecurityExclusion, SecurityPrice) {
  'use strict';

  /**
   * Securities service.
   * @module api/SecuritiesApi
   * @version 1.7.0
   */

  /**
   * Constructs a new SecuritiesApi. 
   * @alias module:api/SecuritiesApi
   * @class
   * @param {module:ApiClient} apiClient Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createSecurityExclusionUsingPost operation.
     * @callback module:api/SecuritiesApi~createSecurityExclusionUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityExclusion} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a security exclusion
     * Create a new security exclusion for a specific account or portfolio.
     * @param {module:model/SecurityExclusion} securityExclusionRequest securityExclusionRequest
     * @param {module:api/SecuritiesApi~createSecurityExclusionUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityExclusion}
     */
    this.createSecurityExclusionUsingPost = function(securityExclusionRequest, callback) {
      var postBody = securityExclusionRequest;

      // verify the required parameter 'securityExclusionRequest' is set
      if (securityExclusionRequest === undefined || securityExclusionRequest === null) {
        throw new Error("Missing the required parameter 'securityExclusionRequest' when calling createSecurityExclusionUsingPost");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = SecurityExclusion;

      return this.apiClient.callApi(
        '/security_exclusion', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the createSecurityPriceUsingPost operation.
     * @callback module:api/SecuritiesApi~createSecurityPriceUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityPrice} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a security price
     * Create a new price for a security defined for your firm.
     * @param {module:model/SecurityPrice} securityPriceRequest securityPriceRequest
     * @param {module:api/SecuritiesApi~createSecurityPriceUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityPrice}
     */
    this.createSecurityPriceUsingPost = function(securityPriceRequest, callback) {
      var postBody = securityPriceRequest;

      // verify the required parameter 'securityPriceRequest' is set
      if (securityPriceRequest === undefined || securityPriceRequest === null) {
        throw new Error("Missing the required parameter 'securityPriceRequest' when calling createSecurityPriceUsingPost");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = SecurityPrice;

      return this.apiClient.callApi(
        '/security_price', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the createSecurityUsingPost operation.
     * @callback module:api/SecuritiesApi~createSecurityUsingPostCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Security} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a security
     * Create a new security for your firm.
     * @param {module:model/Security} securitiesInfoRequest securitiesInfoRequest
     * @param {module:api/SecuritiesApi~createSecurityUsingPostCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Security}
     */
    this.createSecurityUsingPost = function(securitiesInfoRequest, callback) {
      var postBody = securitiesInfoRequest;

      // verify the required parameter 'securitiesInfoRequest' is set
      if (securitiesInfoRequest === undefined || securitiesInfoRequest === null) {
        throw new Error("Missing the required parameter 'securitiesInfoRequest' when calling createSecurityUsingPost");
      }


      var pathParams = {
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = Security;

      return this.apiClient.callApi(
        '/security', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteSecurityExclusionUsingDelete operation.
     * @callback module:api/SecuritiesApi~deleteSecurityExclusionUsingDeleteCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete a security exclusion
     * Permanently delete a security exclusion
     * @param {String} securityExclusionId UUID security_exclusion_id
     * @param {module:api/SecuritiesApi~deleteSecurityExclusionUsingDeleteCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deleteSecurityExclusionUsingDelete = function(securityExclusionId, callback) {
      var postBody = null;

      // verify the required parameter 'securityExclusionId' is set
      if (securityExclusionId === undefined || securityExclusionId === null) {
        throw new Error("Missing the required parameter 'securityExclusionId' when calling deleteSecurityExclusionUsingDelete");
      }


      var pathParams = {
        'security_exclusion_id': securityExclusionId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = null;

      return this.apiClient.callApi(
        '/security_exclusion/{security_exclusion_id}', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteSecurityPriceUsingDelete operation.
     * @callback module:api/SecuritiesApi~deleteSecurityPriceUsingDeleteCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete a security price
     * Permanently delete a security price from a security.
     * @param {String} securityPriceId UUID security_price_id
     * @param {module:api/SecuritiesApi~deleteSecurityPriceUsingDeleteCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deleteSecurityPriceUsingDelete = function(securityPriceId, callback) {
      var postBody = null;

      // verify the required parameter 'securityPriceId' is set
      if (securityPriceId === undefined || securityPriceId === null) {
        throw new Error("Missing the required parameter 'securityPriceId' when calling deleteSecurityPriceUsingDelete");
      }


      var pathParams = {
        'security_price_id': securityPriceId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = null;

      return this.apiClient.callApi(
        '/security_price/{security_price_id}', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteSecurityUsingDelete operation.
     * @callback module:api/SecuritiesApi~deleteSecurityUsingDeleteCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete a security
     * Permanently delete a security for your firm.
     * @param {String} securityId UUID security_id
     * @param {module:api/SecuritiesApi~deleteSecurityUsingDeleteCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deleteSecurityUsingDelete = function(securityId, callback) {
      var postBody = null;

      // verify the required parameter 'securityId' is set
      if (securityId === undefined || securityId === null) {
        throw new Error("Missing the required parameter 'securityId' when calling deleteSecurityUsingDelete");
      }


      var pathParams = {
        'security_id': securityId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = null;

      return this.apiClient.callApi(
        '/security/{security_id}', 'DELETE',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityAllUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/PageSecurity} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List all securities
     * Get details for all securities defined for your firm.
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.ascending ascending (default to false)
     * @param {String} opts.filter filter
     * @param {String} opts.orderBy order_by (default to update_date)
     * @param {Number} opts.page page (default to 0)
     * @param {Number} opts.size size (default to 25)
     * @param {module:api/SecuritiesApi~getSecurityAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/PageSecurity}
     */
    this.getSecurityAllUsingGet = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'ascending': opts['ascending'],
        'filter': opts['filter'],
        'order_by': opts['orderBy'],
        'page': opts['page'],
        'size': opts['size']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = PageSecurity;

      return this.apiClient.callApi(
        '/security', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityExclusionAllUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityExclusionAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/PageSecurityExclusion} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List all security exclusions
     * Get details for all security exclusions defined for your firm.
     * @param {String} securityExclusionId UUID security_exclusion_id
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.ascending ascending (default to false)
     * @param {String} opts.filter filter
     * @param {String} opts.orderBy order_by (default to update_date)
     * @param {Number} opts.page page (default to 0)
     * @param {Number} opts.size size (default to 25)
     * @param {module:api/SecuritiesApi~getSecurityExclusionAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/PageSecurityExclusion}
     */
    this.getSecurityExclusionAllUsingGet = function(securityExclusionId, opts, callback) {
      opts = opts || {};
      var postBody = null;

      // verify the required parameter 'securityExclusionId' is set
      if (securityExclusionId === undefined || securityExclusionId === null) {
        throw new Error("Missing the required parameter 'securityExclusionId' when calling getSecurityExclusionAllUsingGet");
      }


      var pathParams = {
        'security_exclusion_id': securityExclusionId
      };
      var queryParams = {
        'ascending': opts['ascending'],
        'filter': opts['filter'],
        'order_by': opts['orderBy'],
        'page': opts['page'],
        'size': opts['size']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = PageSecurityExclusion;

      return this.apiClient.callApi(
        '/security_exclusion', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityExclusionUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityExclusionUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityExclusion} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Retrieve a security exclusion
     * Retrieve the information for a security exclusion.
     * @param {String} securityExclusionId security exclusion id
     * @param {module:api/SecuritiesApi~getSecurityExclusionUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityExclusion}
     */
    this.getSecurityExclusionUsingGet = function(securityExclusionId, callback) {
      var postBody = null;

      // verify the required parameter 'securityExclusionId' is set
      if (securityExclusionId === undefined || securityExclusionId === null) {
        throw new Error("Missing the required parameter 'securityExclusionId' when calling getSecurityExclusionUsingGet");
      }


      var pathParams = {
        'security_exclusion_id': securityExclusionId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = SecurityExclusion;

      return this.apiClient.callApi(
        '/security_exclusion/{security_exclusion_id}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityPriceAllUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityPriceAllUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/PageSecurityPrice} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List all security prices
     * Get prices for all securities defined for your firm.
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.ascending ascending (default to false)
     * @param {String} opts.filter filter
     * @param {String} opts.orderBy order_by (default to update_date)
     * @param {Number} opts.page page (default to 0)
     * @param {Number} opts.size size (default to 25)
     * @param {module:api/SecuritiesApi~getSecurityPriceAllUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/PageSecurityPrice}
     */
    this.getSecurityPriceAllUsingGet = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
        'ascending': opts['ascending'],
        'filter': opts['filter'],
        'order_by': opts['orderBy'],
        'page': opts['page'],
        'size': opts['size']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = PageSecurityPrice;

      return this.apiClient.callApi(
        '/security_price', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityPriceUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityPriceUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityPrice} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Retrieve a security price
     * Retrieve the information for a security price for a security.
     * @param {String} securityPriceId UUID security_price_id
     * @param {module:api/SecuritiesApi~getSecurityPriceUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityPrice}
     */
    this.getSecurityPriceUsingGet = function(securityPriceId, callback) {
      var postBody = null;

      // verify the required parameter 'securityPriceId' is set
      if (securityPriceId === undefined || securityPriceId === null) {
        throw new Error("Missing the required parameter 'securityPriceId' when calling getSecurityPriceUsingGet");
      }


      var pathParams = {
        'security_price_id': securityPriceId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = SecurityPrice;

      return this.apiClient.callApi(
        '/security_price/{security_price_id}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getSecurityUsingGet operation.
     * @callback module:api/SecuritiesApi~getSecurityUsingGetCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Security} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Retrieve a security
     * Retrieve the information for a security defined for your firm.
     * @param {String} securityId UUID security_id
     * @param {module:api/SecuritiesApi~getSecurityUsingGetCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Security}
     */
    this.getSecurityUsingGet = function(securityId, callback) {
      var postBody = null;

      // verify the required parameter 'securityId' is set
      if (securityId === undefined || securityId === null) {
        throw new Error("Missing the required parameter 'securityId' when calling getSecurityUsingGet");
      }


      var pathParams = {
        'security_id': securityId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = [];
      var accepts = ['*/*'];
      var returnType = Security;

      return this.apiClient.callApi(
        '/security/{security_id}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the updateSecurityExclusionUsingPut operation.
     * @callback module:api/SecuritiesApi~updateSecurityExclusionUsingPutCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityExclusion} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Update a security exclusion
     * Update the information for a security exclusion.
     * @param {module:model/SecurityExclusion} securityExclusion security_exclusion
     * @param {String} securityExclusionId UUID security_exclusion_id
     * @param {module:api/SecuritiesApi~updateSecurityExclusionUsingPutCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityExclusion}
     */
    this.updateSecurityExclusionUsingPut = function(securityExclusion, securityExclusionId, callback) {
      var postBody = securityExclusion;

      // verify the required parameter 'securityExclusion' is set
      if (securityExclusion === undefined || securityExclusion === null) {
        throw new Error("Missing the required parameter 'securityExclusion' when calling updateSecurityExclusionUsingPut");
      }

      // verify the required parameter 'securityExclusionId' is set
      if (securityExclusionId === undefined || securityExclusionId === null) {
        throw new Error("Missing the required parameter 'securityExclusionId' when calling updateSecurityExclusionUsingPut");
      }


      var pathParams = {
        'security_exclusion_id': securityExclusionId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = SecurityExclusion;

      return this.apiClient.callApi(
        '/security_exclusion/{security_exclusion_id}', 'PUT',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the updateSecurityPriceUsingPut operation.
     * @callback module:api/SecuritiesApi~updateSecurityPriceUsingPutCallback
     * @param {String} error Error message, if any.
     * @param {module:model/SecurityPrice} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Update a security price
     * Update a security price for a security.
     * @param {module:model/SecurityPrice} securityPrice security_price
     * @param {String} securityPriceId UUID security_price_id
     * @param {module:api/SecuritiesApi~updateSecurityPriceUsingPutCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/SecurityPrice}
     */
    this.updateSecurityPriceUsingPut = function(securityPrice, securityPriceId, callback) {
      var postBody = securityPrice;

      // verify the required parameter 'securityPrice' is set
      if (securityPrice === undefined || securityPrice === null) {
        throw new Error("Missing the required parameter 'securityPrice' when calling updateSecurityPriceUsingPut");
      }

      // verify the required parameter 'securityPriceId' is set
      if (securityPriceId === undefined || securityPriceId === null) {
        throw new Error("Missing the required parameter 'securityPriceId' when calling updateSecurityPriceUsingPut");
      }


      var pathParams = {
        'security_price_id': securityPriceId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = SecurityPrice;

      return this.apiClient.callApi(
        '/security_price/{security_price_id}', 'PUT',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the updateSecurityUsingPut operation.
     * @callback module:api/SecuritiesApi~updateSecurityUsingPutCallback
     * @param {String} error Error message, if any.
     * @param {module:model/Security} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Update a security
     * Update a security for your firm.
     * @param {module:model/Security} security security
     * @param {String} securityId UUID security_id
     * @param {module:api/SecuritiesApi~updateSecurityUsingPutCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/Security}
     */
    this.updateSecurityUsingPut = function(security, securityId, callback) {
      var postBody = security;

      // verify the required parameter 'security' is set
      if (security === undefined || security === null) {
        throw new Error("Missing the required parameter 'security' when calling updateSecurityUsingPut");
      }

      // verify the required parameter 'securityId' is set
      if (securityId === undefined || securityId === null) {
        throw new Error("Missing the required parameter 'securityId' when calling updateSecurityUsingPut");
      }


      var pathParams = {
        'security_id': securityId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2'];
      var contentTypes = ['application/json'];
      var accepts = ['*/*'];
      var returnType = Security;

      return this.apiClient.callApi(
        '/security/{security_id}', 'PUT',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
