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
    describe('MdHistoryRequestCO', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.MdHistoryRequestCO();
      });

      it('should create an instance of MdHistoryRequestCO', function() {
        // TODO: update the code to test MdHistoryRequestCO
        expect(instance).to.be.a(HydrogenIntegrationApi.MdHistoryRequestCO);
      });

      it('should have the property endDate (base name: "end_date")', function() {
        // TODO: update the code to test the property endDate
        expect(instance).to.have.property('endDate');
        // expect(instance.endDate).to.be(expectedValueLiteral);
      });

      it('should have the property nucleusSecurityId (base name: "nucleus_security_id")', function() {
        // TODO: update the code to test the property nucleusSecurityId
        expect(instance).to.have.property('nucleusSecurityId');
        // expect(instance.nucleusSecurityId).to.be(expectedValueLiteral);
      });

      it('should have the property product (base name: "product")', function() {
        // TODO: update the code to test the property product
        expect(instance).to.have.property('product');
        // expect(instance.product).to.be(expectedValueLiteral);
      });

      it('should have the property startDate (base name: "start_date")', function() {
        // TODO: update the code to test the property startDate
        expect(instance).to.have.property('startDate');
        // expect(instance.startDate).to.be(expectedValueLiteral);
      });

      it('should have the property ticker (base name: "ticker")', function() {
        // TODO: update the code to test the property ticker
        expect(instance).to.have.property('ticker');
        // expect(instance.ticker).to.be(expectedValueLiteral);
      });

    });
  });

}));
