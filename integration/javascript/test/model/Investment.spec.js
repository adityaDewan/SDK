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
    describe('Investment', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.Investment();
      });

      it('should create an instance of Investment', function() {
        // TODO: update the code to test Investment
        expect(instance).to.be.a(HydrogenIntegrationApi.Investment);
      });

      it('should have the property fee (base name: "fee")', function() {
        // TODO: update the code to test the property fee
        expect(instance).to.have.property('fee');
        // expect(instance.fee).to.be(expectedValueLiteral);
      });

      it('should have the property price (base name: "price")', function() {
        // TODO: update the code to test the property price
        expect(instance).to.have.property('price');
        // expect(instance.price).to.be(expectedValueLiteral);
      });

      it('should have the property quantity (base name: "quantity")', function() {
        // TODO: update the code to test the property quantity
        expect(instance).to.have.property('quantity');
        // expect(instance.quantity).to.be(expectedValueLiteral);
      });

      it('should have the property settleDate (base name: "settle_date")', function() {
        // TODO: update the code to test the property settleDate
        expect(instance).to.have.property('settleDate');
        // expect(instance.settleDate).to.be(expectedValueLiteral);
      });

      it('should have the property ticker (base name: "ticker")', function() {
        // TODO: update the code to test the property ticker
        expect(instance).to.have.property('ticker');
        // expect(instance.ticker).to.be(expectedValueLiteral);
      });

      it('should have the property tickerName (base name: "ticker_name")', function() {
        // TODO: update the code to test the property tickerName
        expect(instance).to.have.property('tickerName');
        // expect(instance.tickerName).to.be(expectedValueLiteral);
      });

      it('should have the property tradeSignal (base name: "trade_signal")', function() {
        // TODO: update the code to test the property tradeSignal
        expect(instance).to.have.property('tradeSignal');
        // expect(instance.tradeSignal).to.be(expectedValueLiteral);
      });

      it('should have the property value (base name: "value")', function() {
        // TODO: update the code to test the property value
        expect(instance).to.have.property('value');
        // expect(instance.value).to.be(expectedValueLiteral);
      });

    });
  });

}));
