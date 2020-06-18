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
    instance = new HydrogenNucleusApi.RiskProfileApi();
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

  describe('RiskProfileApi', function() {
    describe('createRiskProfileUsingPost', function() {
      it('should call createRiskProfileUsingPost successfully', function(done) {
        //uncomment below and update the code to test createRiskProfileUsingPost
        //instance.createRiskProfileUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteRiskProfileUsingDelete', function() {
      it('should call deleteRiskProfileUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteRiskProfileUsingDelete
        //instance.deleteRiskProfileUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getRiskProfileAllUsingGet', function() {
      it('should call getRiskProfileAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getRiskProfileAllUsingGet
        //instance.getRiskProfileAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getRiskProfileUsingGet', function() {
      it('should call getRiskProfileUsingGet successfully', function(done) {
        //uncomment below and update the code to test getRiskProfileUsingGet
        //instance.getRiskProfileUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateRiskProfileUsingPut', function() {
      it('should call updateRiskProfileUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateRiskProfileUsingPut
        //instance.updateRiskProfileUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));
