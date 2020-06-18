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

(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['ApiClient'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // CommonJS-like environments that support module.exports, like Node.
        module.exports = factory(require('../ApiClient'), require('superagent'));
    } else {
        // Browser globals (root is window)
        if (!root.HydrogenIntegrationApi) {
            root.HydrogenIntegrationApi = {};
        }
        root.HydrogenIntegrationApi.AuthApi = factory(root.HydrogenIntegrationApi.ApiClient, root.superagent);
    }
}(this, function (ApiClient, superagent) {
    'use strict';

    /**
     * Auth service.
     * @module api/AuthApi
     * @version 1.7.0
     */

    /**
     * Constructs a new AuthApi.
     * @alias module:api/AuthApi
     * @class
     * @param {module:ApiClient} apiClient Optional API client implementation to use,
     * default to {@link module:ApiClient#instance} if unspecified.
     */
    var exports = function (apiClient) {
        this.apiClient = apiClient || ApiClient.instance;

        this.tokenUrl = this.apiClient.basePath.replace(/.com.*/, '.com/authorization/v1');


        /**
         * Callback function to receive the result of the operation.
         * @callback module:AuthApi~callApiCallback
         * @param {String} error Error message, if any.
         * @param data The data returned by the service call.
         * @param {String} response The complete HTTP response.
         */

        /**
         * Invokes the REST service using the supplied settings and parameters.
         * @param {String} path The base URL to invoke.
         * @param {String} httpMethod The HTTP method to use.
         * @param {Object.<String, String>} auth A map of auth parameters and their values.
         * @param {Object.<String, Object>} queryParams A map of query parameters and their values.
         * @param {Array.<String>} contentTypes An array of request MIME types.
         * @param {Array.<String>} accepts An array of acceptable response MIME types.
         * @param {(String|Array|ObjectFunction|Object)} returnType The required type to return; can be a string for simple types or the
         * constructor for a complex type.
         * @param {module:AuhApi~callApiCallback} callback The callback function.
         * @returns {Object} The SuperAgent request object.
         */

        this.callApi = function callApi(path, httpMethod, auth,
                                        queryParams, contentTypes, accepts,
                                        returnType, callback) {

            var _this = this;

            var request = superagent(httpMethod, this.tokenUrl + path);

            // apply authentications
            request.auth(auth['client_id'] || '', auth['client_secret'] || '');

            // set query parameters
            request.query(this.apiClient.normalizeParams(queryParams));

            request.end(function (error, response) {
                if (callback) {
                    var data = null;
                    if (!error) {
                        try {
                            data = _this.apiClient.deserialize(response, returnType);
                            if (_this.apiClient.enableCookies && typeof window === 'undefined') {
                                _this.apiClient.agent.saveCookies(response);
                            }
                        } catch (err) {
                            error = err;
                        }
                    }
                    callback(error, data, response);
                }
            });

            return request;
        };

        /**
         * Callback function to receive the result of the createUsingPostClientCredentials operation.
         * @callback module:api/AuthApi~createUsingPostClientCredentialsCallback
         * @param {String} error Error message, if any.
         * @param {JSON} data The data returned by the service call.
         * @param {String} response The complete HTTP response.
         */

        /**
         * Create an token
         * Create a new token for your calling APis.
         * @param {Object} opts Optional parameters
         * @param {module:api/AuthApi~createUsingPostClientCredentialsCallback} callback The callback function, accepting three arguments: error, data, response
         * data is of type: {@link JSON}
         */

        this.createUsingPostClientCredentials = function (opts, callback) {
            opts = opts || {};

            var queryParams = {
                'grant_type': opts['grant_type']
            };

            var auth = {
                'client_id': opts['client_id'],
                'client_secret': opts['client_secret']
            }

            var contentTypes = [];
            var accepts = ['*/*'];
            var returnType = Object;

            return this.callApi(
                '/oauth/token', 'POST', auth,
                queryParams, contentTypes, accepts, returnType, callback
            );
        }

        /**
         * Callback function to receive the result of the createUsingPostPasswordCallback operation.
         * @callback module:api/AuthApi~createUsingPostPasswordCallback
         * @param {String} error Error message, if any.
         * @param {JSON} data The data returned by the service call.
         * @param {String} response The complete HTTP response.
         */

        /**
         * Create an token
         * Create a new token for your calling APis.
         * @param {Object} opts Optional parameters
         * @param {module:api/AuthApi~createUsingPostPasswordCallback} callback The callback function, accepting three arguments: error, data, response
         * data is of type: {@link JSON}
         */

        this.createUsingPostPassword = function (opts, callback) {
            opts = opts || {};

            var queryParams = {
                'grant_type': opts['grant_type'],
                'username': opts['username'],
                'password': opts['password']
            };

            var auth = {
                'client_id': opts['client_id'],
                'client_secret': opts['client_secret']
            }

            var contentTypes = [];
            var accepts = ['*/*'];
            var returnType = Object;

            return this.callApi(
                '/oauth/token', 'POST', auth,
                queryParams, contentTypes, accepts, returnType, callback
            );
        }
    };

    return exports;
}));
