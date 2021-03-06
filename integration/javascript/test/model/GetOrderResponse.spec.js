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
    describe('GetOrderResponse', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.GetOrderResponse();
      });

      it('should create an instance of GetOrderResponse', function() {
        // TODO: update the code to test GetOrderResponse
        expect(instance).to.be.a(HydrogenIntegrationApi.GetOrderResponse);
      });

      it('should have the property accountId (base name: "account_id")', function() {
        // TODO: update the code to test the property accountId
        expect(instance).to.have.property('accountId');
        // expect(instance.accountId).to.be(expectedValueLiteral);
      });

      it('should have the property accountNo (base name: "account_no")', function() {
        // TODO: update the code to test the property accountNo
        expect(instance).to.have.property('accountNo');
        // expect(instance.accountNo).to.be(expectedValueLiteral);
      });

      it('should have the property amountCash (base name: "amount_cash")', function() {
        // TODO: update the code to test the property amountCash
        expect(instance).to.have.property('amountCash');
        // expect(instance.amountCash).to.be(expectedValueLiteral);
      });

      it('should have the property averagePrice (base name: "average_price")', function() {
        // TODO: update the code to test the property averagePrice
        expect(instance).to.have.property('averagePrice');
        // expect(instance.averagePrice).to.be(expectedValueLiteral);
      });

      it('should have the property created (base name: "created")', function() {
        // TODO: update the code to test the property created
        expect(instance).to.have.property('created');
        // expect(instance.created).to.be(expectedValueLiteral);
      });

      it('should have the property createdBy (base name: "created_by")', function() {
        // TODO: update the code to test the property createdBy
        expect(instance).to.have.property('createdBy');
        // expect(instance.createdBy).to.be(expectedValueLiteral);
      });

      it('should have the property cumulativeQuantity (base name: "cumulative_quantity")', function() {
        // TODO: update the code to test the property cumulativeQuantity
        expect(instance).to.have.property('cumulativeQuantity');
        // expect(instance.cumulativeQuantity).to.be(expectedValueLiteral);
      });

      it('should have the property fees (base name: "fees")', function() {
        // TODO: update the code to test the property fees
        expect(instance).to.have.property('fees');
        // expect(instance.fees).to.be(expectedValueLiteral);
      });

      it('should have the property id (base name: "id")', function() {
        // TODO: update the code to test the property id
        expect(instance).to.have.property('id');
        // expect(instance.id).to.be(expectedValueLiteral);
      });

      it('should have the property orderExpires (base name: "order_expires")', function() {
        // TODO: update the code to test the property orderExpires
        expect(instance).to.have.property('orderExpires');
        // expect(instance.orderExpires).to.be(expectedValueLiteral);
      });

      it('should have the property orderNo (base name: "order_no")', function() {
        // TODO: update the code to test the property orderNo
        expect(instance).to.have.property('orderNo');
        // expect(instance.orderNo).to.be(expectedValueLiteral);
      });

      it('should have the property quantity (base name: "quantity")', function() {
        // TODO: update the code to test the property quantity
        expect(instance).to.have.property('quantity');
        // expect(instance.quantity).to.be(expectedValueLiteral);
      });

      it('should have the property side (base name: "side")', function() {
        // TODO: update the code to test the property side
        expect(instance).to.have.property('side');
        // expect(instance.side).to.be(expectedValueLiteral);
      });

      it('should have the property status (base name: "status")', function() {
        // TODO: update the code to test the property status
        expect(instance).to.have.property('status');
        // expect(instance.status).to.be(expectedValueLiteral);
      });

      it('should have the property statusMessage (base name: "status_message")', function() {
        // TODO: update the code to test the property statusMessage
        expect(instance).to.have.property('statusMessage');
        // expect(instance.statusMessage).to.be(expectedValueLiteral);
      });

      it('should have the property symbol (base name: "symbol")', function() {
        // TODO: update the code to test the property symbol
        expect(instance).to.have.property('symbol');
        // expect(instance.symbol).to.be(expectedValueLiteral);
      });

      it('should have the property totalOrderAmount (base name: "total_order_amount")', function() {
        // TODO: update the code to test the property totalOrderAmount
        expect(instance).to.have.property('totalOrderAmount');
        // expect(instance.totalOrderAmount).to.be(expectedValueLiteral);
      });

      it('should have the property type (base name: "type")', function() {
        // TODO: update the code to test the property type
        expect(instance).to.have.property('type');
        // expect(instance.type).to.be(expectedValueLiteral);
      });

      it('should have the property userId (base name: "user_id")', function() {
        // TODO: update the code to test the property userId
        expect(instance).to.have.property('userId');
        // expect(instance.userId).to.be(expectedValueLiteral);
      });

    });
  });

}));
