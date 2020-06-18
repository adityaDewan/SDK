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
    instance = new HydrogenNucleusApi.StatisticResourceVO();
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

  describe('StatisticResourceVO', function() {
    it('should create an instance of StatisticResourceVO', function() {
      // uncomment below and update the code to test StatisticResourceVO
      //var instane = new HydrogenNucleusApi.StatisticResourceVO();
      //expect(instance).to.be.a(HydrogenNucleusApi.StatisticResourceVO);
    });

    it('should have the property description (base name: "description")', function() {
      // uncomment below and update the code to test the property description
      //var instane = new HydrogenNucleusApi.StatisticResourceVO();
      //expect(instance).to.be();
    });

    it('should have the property parameter (base name: "parameter")', function() {
      // uncomment below and update the code to test the property parameter
      //var instane = new HydrogenNucleusApi.StatisticResourceVO();
      //expect(instance).to.be();
    });

    it('should have the property statName (base name: "stat_name")', function() {
      // uncomment below and update the code to test the property statName
      //var instane = new HydrogenNucleusApi.StatisticResourceVO();
      //expect(instance).to.be();
    });

    it('should have the property type (base name: "type")', function() {
      // uncomment below and update the code to test the property type
      //var instane = new HydrogenNucleusApi.StatisticResourceVO();
      //expect(instance).to.be();
    });

  });

}));
