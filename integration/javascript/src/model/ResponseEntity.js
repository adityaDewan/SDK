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
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenIntegrationApi) {
      root.HydrogenIntegrationApi = {};
    }
    root.HydrogenIntegrationApi.ResponseEntity = factory(root.HydrogenIntegrationApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';

  /**
   * The ResponseEntity model module.
   * @module model/ResponseEntity
   * @version 1.2.1
   */

  /**
   * Constructs a new <code>ResponseEntity</code>.
   * @alias module:model/ResponseEntity
   * @class
   */
  var exports = function() {
  };

  /**
   * Constructs a <code>ResponseEntity</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/ResponseEntity} obj Optional instance to populate.
   * @return {module:model/ResponseEntity} The populated <code>ResponseEntity</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();
      if (data.hasOwnProperty('body'))
        obj.body = ApiClient.convertToType(data['body'], Object);
      if (data.hasOwnProperty('status'))
        obj.status = ApiClient.convertToType(data['status'], Object);
      if (data.hasOwnProperty('status_code'))
        obj.statusCode = ApiClient.convertToType(data['status_code'], 'String');
      if (data.hasOwnProperty('status_code_value'))
        obj.statusCodeValue = ApiClient.convertToType(data['status_code_value'], 'Number');
    }
    return obj;
  }

  /**
   * @member {Object} body
   */
  exports.prototype.body = undefined;

  /**
   * @member {Object} status
   */
  exports.prototype.status = undefined;

  /**
   * @member {module:model/ResponseEntity.StatusCodeEnum} statusCode
   */
  exports.prototype.statusCode = undefined;

  /**
   * @member {Number} statusCodeValue
   */
  exports.prototype.statusCodeValue = undefined;


  /**
   * Allowed values for the <code>statusCode</code> property.
   * @enum {String}
   * @readonly
   */
  exports.StatusCodeEnum = {
    /**
     * value: "100 CONTINUE"
     * @const
     */
    _100CONTINUE: "100 CONTINUE",

    /**
     * value: "101 SWITCHING_PROTOCOLS"
     * @const
     */
    _101SWITCHINGPROTOCOLS: "101 SWITCHING_PROTOCOLS",

    /**
     * value: "102 PROCESSING"
     * @const
     */
    _102PROCESSING: "102 PROCESSING",

    /**
     * value: "103 CHECKPOINT"
     * @const
     */
    _103CHECKPOINT: "103 CHECKPOINT",

    /**
     * value: "200 OK"
     * @const
     */
    _200OK: "200 OK",

    /**
     * value: "201 CREATED"
     * @const
     */
    _201CREATED: "201 CREATED",

    /**
     * value: "202 ACCEPTED"
     * @const
     */
    _202ACCEPTED: "202 ACCEPTED",

    /**
     * value: "203 NON_AUTHORITATIVE_INFORMATION"
     * @const
     */
    _203NONAUTHORITATIVEINFORMATION: "203 NON_AUTHORITATIVE_INFORMATION",

    /**
     * value: "204 NO_CONTENT"
     * @const
     */
    _204NOCONTENT: "204 NO_CONTENT",

    /**
     * value: "205 RESET_CONTENT"
     * @const
     */
    _205RESETCONTENT: "205 RESET_CONTENT",

    /**
     * value: "206 PARTIAL_CONTENT"
     * @const
     */
    _206PARTIALCONTENT: "206 PARTIAL_CONTENT",

    /**
     * value: "207 MULTI_STATUS"
     * @const
     */
    _207MULTISTATUS: "207 MULTI_STATUS",

    /**
     * value: "208 ALREADY_REPORTED"
     * @const
     */
    _208ALREADYREPORTED: "208 ALREADY_REPORTED",

    /**
     * value: "226 IM_USED"
     * @const
     */
    _226IMUSED: "226 IM_USED",

    /**
     * value: "300 MULTIPLE_CHOICES"
     * @const
     */
    _300MULTIPLECHOICES: "300 MULTIPLE_CHOICES",

    /**
     * value: "301 MOVED_PERMANENTLY"
     * @const
     */
    _301MOVEDPERMANENTLY: "301 MOVED_PERMANENTLY",

    /**
     * value: "302 FOUND"
     * @const
     */
    _302FOUND: "302 FOUND",

    /**
     * value: "302 MOVED_TEMPORARILY"
     * @const
     */
    _302MOVEDTEMPORARILY: "302 MOVED_TEMPORARILY",

    /**
     * value: "303 SEE_OTHER"
     * @const
     */
    _303SEEOTHER: "303 SEE_OTHER",

    /**
     * value: "304 NOT_MODIFIED"
     * @const
     */
    _304NOTMODIFIED: "304 NOT_MODIFIED",

    /**
     * value: "305 USE_PROXY"
     * @const
     */
    _305USEPROXY: "305 USE_PROXY",

    /**
     * value: "307 TEMPORARY_REDIRECT"
     * @const
     */
    _307TEMPORARYREDIRECT: "307 TEMPORARY_REDIRECT",

    /**
     * value: "308 PERMANENT_REDIRECT"
     * @const
     */
    _308PERMANENTREDIRECT: "308 PERMANENT_REDIRECT",

    /**
     * value: "400 BAD_REQUEST"
     * @const
     */
    _400BADREQUEST: "400 BAD_REQUEST",

    /**
     * value: "401 UNAUTHORIZED"
     * @const
     */
    _401UNAUTHORIZED: "401 UNAUTHORIZED",

    /**
     * value: "402 PAYMENT_REQUIRED"
     * @const
     */
    _402PAYMENTREQUIRED: "402 PAYMENT_REQUIRED",

    /**
     * value: "403 FORBIDDEN"
     * @const
     */
    _403FORBIDDEN: "403 FORBIDDEN",

    /**
     * value: "404 NOT_FOUND"
     * @const
     */
    _404NOTFOUND: "404 NOT_FOUND",

    /**
     * value: "405 METHOD_NOT_ALLOWED"
     * @const
     */
    _405METHODNOTALLOWED: "405 METHOD_NOT_ALLOWED",

    /**
     * value: "406 NOT_ACCEPTABLE"
     * @const
     */
    _406NOTACCEPTABLE: "406 NOT_ACCEPTABLE",

    /**
     * value: "407 PROXY_AUTHENTICATION_REQUIRED"
     * @const
     */
    _407PROXYAUTHENTICATIONREQUIRED: "407 PROXY_AUTHENTICATION_REQUIRED",

    /**
     * value: "408 REQUEST_TIMEOUT"
     * @const
     */
    _408REQUESTTIMEOUT: "408 REQUEST_TIMEOUT",

    /**
     * value: "409 CONFLICT"
     * @const
     */
    _409CONFLICT: "409 CONFLICT",

    /**
     * value: "410 GONE"
     * @const
     */
    _410GONE: "410 GONE",

    /**
     * value: "411 LENGTH_REQUIRED"
     * @const
     */
    _411LENGTHREQUIRED: "411 LENGTH_REQUIRED",

    /**
     * value: "412 PRECONDITION_FAILED"
     * @const
     */
    _412PRECONDITIONFAILED: "412 PRECONDITION_FAILED",

    /**
     * value: "413 PAYLOAD_TOO_LARGE"
     * @const
     */
    _413PAYLOADTOOLARGE: "413 PAYLOAD_TOO_LARGE",

    /**
     * value: "413 REQUEST_ENTITY_TOO_LARGE"
     * @const
     */
    _413REQUESTENTITYTOOLARGE: "413 REQUEST_ENTITY_TOO_LARGE",

    /**
     * value: "414 URI_TOO_LONG"
     * @const
     */
    _414URITOOLONG: "414 URI_TOO_LONG",

    /**
     * value: "414 REQUEST_URI_TOO_LONG"
     * @const
     */
    _414REQUESTURITOOLONG: "414 REQUEST_URI_TOO_LONG",

    /**
     * value: "415 UNSUPPORTED_MEDIA_TYPE"
     * @const
     */
    _415UNSUPPORTEDMEDIATYPE: "415 UNSUPPORTED_MEDIA_TYPE",

    /**
     * value: "416 REQUESTED_RANGE_NOT_SATISFIABLE"
     * @const
     */
    _416REQUESTEDRANGENOTSATISFIABLE: "416 REQUESTED_RANGE_NOT_SATISFIABLE",

    /**
     * value: "417 EXPECTATION_FAILED"
     * @const
     */
    _417EXPECTATIONFAILED: "417 EXPECTATION_FAILED",

    /**
     * value: "418 I_AM_A_TEAPOT"
     * @const
     */
    _418IAMATEAPOT: "418 I_AM_A_TEAPOT",

    /**
     * value: "419 INSUFFICIENT_SPACE_ON_RESOURCE"
     * @const
     */
    _419INSUFFICIENTSPACEONRESOURCE: "419 INSUFFICIENT_SPACE_ON_RESOURCE",

    /**
     * value: "420 METHOD_FAILURE"
     * @const
     */
    _420METHODFAILURE: "420 METHOD_FAILURE",

    /**
     * value: "421 DESTINATION_LOCKED"
     * @const
     */
    _421DESTINATIONLOCKED: "421 DESTINATION_LOCKED",

    /**
     * value: "422 UNPROCESSABLE_ENTITY"
     * @const
     */
    _422UNPROCESSABLEENTITY: "422 UNPROCESSABLE_ENTITY",

    /**
     * value: "423 LOCKED"
     * @const
     */
    _423LOCKED: "423 LOCKED",

    /**
     * value: "424 FAILED_DEPENDENCY"
     * @const
     */
    _424FAILEDDEPENDENCY: "424 FAILED_DEPENDENCY",

    /**
     * value: "426 UPGRADE_REQUIRED"
     * @const
     */
    _426UPGRADEREQUIRED: "426 UPGRADE_REQUIRED",

    /**
     * value: "428 PRECONDITION_REQUIRED"
     * @const
     */
    _428PRECONDITIONREQUIRED: "428 PRECONDITION_REQUIRED",

    /**
     * value: "429 TOO_MANY_REQUESTS"
     * @const
     */
    _429TOOMANYREQUESTS: "429 TOO_MANY_REQUESTS",

    /**
     * value: "431 REQUEST_HEADER_FIELDS_TOO_LARGE"
     * @const
     */
    _431REQUESTHEADERFIELDSTOOLARGE: "431 REQUEST_HEADER_FIELDS_TOO_LARGE",

    /**
     * value: "451 UNAVAILABLE_FOR_LEGAL_REASONS"
     * @const
     */
    _451UNAVAILABLEFORLEGALREASONS: "451 UNAVAILABLE_FOR_LEGAL_REASONS",

    /**
     * value: "500 INTERNAL_SERVER_ERROR"
     * @const
     */
    _500INTERNALSERVERERROR: "500 INTERNAL_SERVER_ERROR",

    /**
     * value: "501 NOT_IMPLEMENTED"
     * @const
     */
    _501NOTIMPLEMENTED: "501 NOT_IMPLEMENTED",

    /**
     * value: "502 BAD_GATEWAY"
     * @const
     */
    _502BADGATEWAY: "502 BAD_GATEWAY",

    /**
     * value: "503 SERVICE_UNAVAILABLE"
     * @const
     */
    _503SERVICEUNAVAILABLE: "503 SERVICE_UNAVAILABLE",

    /**
     * value: "504 GATEWAY_TIMEOUT"
     * @const
     */
    _504GATEWAYTIMEOUT: "504 GATEWAY_TIMEOUT",

    /**
     * value: "505 HTTP_VERSION_NOT_SUPPORTED"
     * @const
     */
    _505HTTPVERSIONNOTSUPPORTED: "505 HTTP_VERSION_NOT_SUPPORTED",

    /**
     * value: "506 VARIANT_ALSO_NEGOTIATES"
     * @const
     */
    _506VARIANTALSONEGOTIATES: "506 VARIANT_ALSO_NEGOTIATES",

    /**
     * value: "507 INSUFFICIENT_STORAGE"
     * @const
     */
    _507INSUFFICIENTSTORAGE: "507 INSUFFICIENT_STORAGE",

    /**
     * value: "508 LOOP_DETECTED"
     * @const
     */
    _508LOOPDETECTED: "508 LOOP_DETECTED",

    /**
     * value: "509 BANDWIDTH_LIMIT_EXCEEDED"
     * @const
     */
    _509BANDWIDTHLIMITEXCEEDED: "509 BANDWIDTH_LIMIT_EXCEEDED",

    /**
     * value: "510 NOT_EXTENDED"
     * @const
     */
    _510NOTEXTENDED: "510 NOT_EXTENDED",

    /**
     * value: "511 NETWORK_AUTHENTICATION_REQUIRED"
     * @const
     */
    _511NETWORKAUTHENTICATIONREQUIRED: "511 NETWORK_AUTHENTICATION_REQUIRED"
  };

  return exports;

}));