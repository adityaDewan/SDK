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
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.HydrogenNucleusApi);
  }
}(this, function(expect, HydrogenNucleusApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('AggregationAccountTransactionAggregateDataVO', function() {
    it('should create an instance of AggregationAccountTransactionAggregateDataVO', function() {
      // uncomment below and update the code to test AggregationAccountTransactionAggregateDataVO
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be.a(HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO);
    });

    it('should have the property aggregationAccountTransactionId (base name: "aggregation_account_transaction_id")', function() {
      // uncomment below and update the code to test the property aggregationAccountTransactionId
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property bankCredit (base name: "bank_credit")', function() {
      // uncomment below and update the code to test the property bankCredit
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property createDate (base name: "create_date")', function() {
      // uncomment below and update the code to test the property createDate
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property currencyCode (base name: "currency_code")', function() {
      // uncomment below and update the code to test the property currencyCode
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property investment (base name: "investment")', function() {
      // uncomment below and update the code to test the property investment
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property isExcludedAnalysis (base name: "is_excluded_analysis")', function() {
      // uncomment below and update the code to test the property isExcludedAnalysis
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property metadata (base name: "metadata")', function() {
      // uncomment below and update the code to test the property metadata
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property secondaryId (base name: "secondary_id")', function() {
      // uncomment below and update the code to test the property secondaryId
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property status (base name: "status")', function() {
      // uncomment below and update the code to test the property status
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property transactionDate (base name: "transaction_date")', function() {
      // uncomment below and update the code to test the property transactionDate
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

    it('should have the property updateDate (base name: "update_date")', function() {
      // uncomment below and update the code to test the property updateDate
      //var instane = new HydrogenNucleusApi.AggregationAccountTransactionAggregateDataVO();
      //expect(instance).to.be();
    });

  });

}));
