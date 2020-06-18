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
    describe('AggregationAccountBalanceResponseVO', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.AggregationAccountBalanceResponseVO();
      });

      it('should create an instance of AggregationAccountBalanceResponseVO', function() {
        // TODO: update the code to test AggregationAccountBalanceResponseVO
        expect(instance).to.be.a(HydrogenIntegrationApi.AggregationAccountBalanceResponseVO);
      });

      it('should have the property message (base name: "message")', function() {
        // TODO: update the code to test the property message
        expect(instance).to.have.property('message');
        // expect(instance.message).to.be(expectedValueLiteral);
      });

      it('should have the property nucleusAggregationAccountId (base name: "nucleus_aggregation_account_id")', function() {
        // TODO: update the code to test the property nucleusAggregationAccountId
        expect(instance).to.have.property('nucleusAggregationAccountId');
        // expect(instance.nucleusAggregationAccountId).to.be(expectedValueLiteral);
      });

      it('should have the property nucleusBalancePosted (base name: "nucleus_balance_posted")', function() {
        // TODO: update the code to test the property nucleusBalancePosted
        expect(instance).to.have.property('nucleusBalancePosted');
        // expect(instance.nucleusBalancePosted).to.be(expectedValueLiteral);
      });

      it('should have the property vendorName (base name: "vendor_name")', function() {
        // TODO: update the code to test the property vendorName
        expect(instance).to.have.property('vendorName');
        // expect(instance.vendorName).to.be(expectedValueLiteral);
      });

    });
  });

}));
