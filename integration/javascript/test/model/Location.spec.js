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
    describe('Location', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.Location();
      });

      it('should create an instance of Location', function() {
        // TODO: update the code to test Location
        expect(instance).to.be.a(HydrogenIntegrationApi.Location);
      });

      it('should have the property addressLine1 (base name: "address_line1")', function() {
        // TODO: update the code to test the property addressLine1
        expect(instance).to.have.property('addressLine1');
        // expect(instance.addressLine1).to.be(expectedValueLiteral);
      });

      it('should have the property addressLine2 (base name: "address_line2")', function() {
        // TODO: update the code to test the property addressLine2
        expect(instance).to.have.property('addressLine2');
        // expect(instance.addressLine2).to.be(expectedValueLiteral);
      });

      it('should have the property city (base name: "city")', function() {
        // TODO: update the code to test the property city
        expect(instance).to.have.property('city');
        // expect(instance.city).to.be(expectedValueLiteral);
      });

      it('should have the property country (base name: "country")', function() {
        // TODO: update the code to test the property country
        expect(instance).to.have.property('country');
        // expect(instance.country).to.be(expectedValueLiteral);
      });

      it('should have the property latitude (base name: "latitude")', function() {
        // TODO: update the code to test the property latitude
        expect(instance).to.have.property('latitude');
        // expect(instance.latitude).to.be(expectedValueLiteral);
      });

      it('should have the property longitude (base name: "longitude")', function() {
        // TODO: update the code to test the property longitude
        expect(instance).to.have.property('longitude');
        // expect(instance.longitude).to.be(expectedValueLiteral);
      });

      it('should have the property postalcode (base name: "postalcode")', function() {
        // TODO: update the code to test the property postalcode
        expect(instance).to.have.property('postalcode');
        // expect(instance.postalcode).to.be(expectedValueLiteral);
      });

      it('should have the property state (base name: "state")', function() {
        // TODO: update the code to test the property state
        expect(instance).to.have.property('state');
        // expect(instance.state).to.be(expectedValueLiteral);
      });

    });
  });

}));
