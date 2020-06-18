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
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.HydrogenIntegrationApi);
  }
}(this, function(expect, HydrogenIntegrationApi) {
  'use strict';

  var instance;

  describe('(package)', function() {
    describe('IavBankLinkResponseVo', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.IavBankLinkResponseVo();
      });

      it('should create an instance of IavBankLinkResponseVo', function() {
        // TODO: update the code to test IavBankLinkResponseVo
        expect(instance).to.be.a(HydrogenIntegrationApi.IavBankLinkResponseVo);
      });

      it('should have the property isErrorOccurred (base name: "is_error_occurred")', function() {
        // TODO: update the code to test the property isErrorOccurred
        expect(instance).to.have.property('isErrorOccurred');
        // expect(instance.isErrorOccurred).to.be(expectedValueLiteral);
      });

      it('should have the property message (base name: "message")', function() {
        // TODO: update the code to test the property message
        expect(instance).to.have.property('message');
        // expect(instance.message).to.be(expectedValueLiteral);
      });

      it('should have the property response (base name: "response")', function() {
        // TODO: update the code to test the property response
        expect(instance).to.have.property('response');
        // expect(instance.response).to.be(expectedValueLiteral);
      });

    });
  });

}));
