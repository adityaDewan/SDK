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
    instance = new HydrogenNucleusApi.Notification();
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

  describe('Notification', function() {
    it('should create an instance of Notification', function() {
      // uncomment below and update the code to test Notification
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be.a(HydrogenNucleusApi.Notification);
    });

    it('should have the property applicationId (base name: "application_id")', function() {
      // uncomment below and update the code to test the property applicationId
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property createDate (base name: "create_date")', function() {
      // uncomment below and update the code to test the property createDate
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property description (base name: "description")', function() {
      // uncomment below and update the code to test the property description
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property featureId (base name: "feature_id")', function() {
      // uncomment below and update the code to test the property featureId
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property frequencyUnit (base name: "frequency_unit")', function() {
      // uncomment below and update the code to test the property frequencyUnit
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property id (base name: "id")', function() {
      // uncomment below and update the code to test the property id
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property isActive (base name: "is_active")', function() {
      // uncomment below and update the code to test the property isActive
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property metadata (base name: "metadata")', function() {
      // uncomment below and update the code to test the property metadata
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property notificationType (base name: "notification_type")', function() {
      // uncomment below and update the code to test the property notificationType
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property secondaryId (base name: "secondary_id")', function() {
      // uncomment below and update the code to test the property secondaryId
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property thresholdType (base name: "threshold_type")', function() {
      // uncomment below and update the code to test the property thresholdType
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

    it('should have the property updateDate (base name: "update_date")', function() {
      // uncomment below and update the code to test the property updateDate
      //var instane = new HydrogenNucleusApi.Notification();
      //expect(instance).to.be();
    });

  });

}));
