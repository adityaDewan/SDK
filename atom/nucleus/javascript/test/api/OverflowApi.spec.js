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
    instance = new HydrogenNucleusApi.OverflowApi();
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

  describe('OverflowApi', function() {
    describe('createOverflowSettingsUsingPost', function() {
      it('should call createOverflowSettingsUsingPost successfully', function(done) {
        //uncomment below and update the code to test createOverflowSettingsUsingPost
        //instance.createOverflowSettingsUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('createOverflowUsingPost', function() {
      it('should call createOverflowUsingPost successfully', function(done) {
        //uncomment below and update the code to test createOverflowUsingPost
        //instance.createOverflowUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteOverflowSettingsUsingDelete', function() {
      it('should call deleteOverflowSettingsUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteOverflowSettingsUsingDelete
        //instance.deleteOverflowSettingsUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getOverflowAllUsingGet', function() {
      it('should call getOverflowAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getOverflowAllUsingGet
        //instance.getOverflowAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getOverflowSettingsAllUsingGet', function() {
      it('should call getOverflowSettingsAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getOverflowSettingsAllUsingGet
        //instance.getOverflowSettingsAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getOverflowSettingsUsingGet', function() {
      it('should call getOverflowSettingsUsingGet successfully', function(done) {
        //uncomment below and update the code to test getOverflowSettingsUsingGet
        //instance.getOverflowSettingsUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getOverflowUsingGet', function() {
      it('should call getOverflowUsingGet successfully', function(done) {
        //uncomment below and update the code to test getOverflowUsingGet
        //instance.getOverflowUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateOverflowSettingsUsingPut', function() {
      it('should call updateOverflowSettingsUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateOverflowSettingsUsingPut
        //instance.updateOverflowSettingsUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));
