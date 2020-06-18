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
    instance = new HydrogenNucleusApi.Consultation();
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

  describe('Consultation', function() {
    it('should create an instance of Consultation', function() {
      // uncomment below and update the code to test Consultation
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be.a(HydrogenNucleusApi.Consultation);
    });

    it('should have the property accountTypeId (base name: "account_type_id")', function() {
      // uncomment below and update the code to test the property accountTypeId
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property additionalQuestions (base name: "additional_questions")', function() {
      // uncomment below and update the code to test the property additionalQuestions
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property assets (base name: "assets")', function() {
      // uncomment below and update the code to test the property assets
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property assigned (base name: "assigned")', function() {
      // uncomment below and update the code to test the property assigned
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property calendar (base name: "calendar")', function() {
      // uncomment below and update the code to test the property calendar
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property category (base name: "category")', function() {
      // uncomment below and update the code to test the property category
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property clientId (base name: "client_id")', function() {
      // uncomment below and update the code to test the property clientId
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property closeTime (base name: "close_time")', function() {
      // uncomment below and update the code to test the property closeTime
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property closedBy (base name: "closed_by")', function() {
      // uncomment below and update the code to test the property closedBy
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property comments (base name: "comments")', function() {
      // uncomment below and update the code to test the property comments
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property completed (base name: "completed")', function() {
      // uncomment below and update the code to test the property completed
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property createDate (base name: "create_date")', function() {
      // uncomment below and update the code to test the property createDate
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property email (base name: "email")', function() {
      // uncomment below and update the code to test the property email
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property firmname (base name: "firmname")', function() {
      // uncomment below and update the code to test the property firmname
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property id (base name: "id")', function() {
      // uncomment below and update the code to test the property id
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property investmentAllocation (base name: "investment_allocation")', function() {
      // uncomment below and update the code to test the property investmentAllocation
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property investmentLocation (base name: "investment_location")', function() {
      // uncomment below and update the code to test the property investmentLocation
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property investmentObjectives (base name: "investment_objectives")', function() {
      // uncomment below and update the code to test the property investmentObjectives
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property isActive (base name: "is_active")', function() {
      // uncomment below and update the code to test the property isActive
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property metadata (base name: "metadata")', function() {
      // uncomment below and update the code to test the property metadata
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property phone (base name: "phone")', function() {
      // uncomment below and update the code to test the property phone
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property reminded (base name: "reminded")', function() {
      // uncomment below and update the code to test the property reminded
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property secondaryId (base name: "secondary_id")', function() {
      // uncomment below and update the code to test the property secondaryId
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property source (base name: "source")', function() {
      // uncomment below and update the code to test the property source
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property time (base name: "time")', function() {
      // uncomment below and update the code to test the property time
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

    it('should have the property updateDate (base name: "update_date")', function() {
      // uncomment below and update the code to test the property updateDate
      //var instane = new HydrogenNucleusApi.Consultation();
      //expect(instance).to.be();
    });

  });

}));
