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
    describe('Sort', function() {
      beforeEach(function() {
        instance = new HydrogenIntegrationApi.Sort();
      });

      it('should create an instance of Sort', function() {
        // TODO: update the code to test Sort
        expect(instance).to.be.a(HydrogenIntegrationApi.Sort);
      });

      it('should have the property ascending (base name: "ascending")', function() {
        // TODO: update the code to test the property ascending
        expect(instance).to.have.property('ascending');
        // expect(instance.ascending).to.be(expectedValueLiteral);
      });

      it('should have the property descending (base name: "descending")', function() {
        // TODO: update the code to test the property descending
        expect(instance).to.have.property('descending');
        // expect(instance.descending).to.be(expectedValueLiteral);
      });

      it('should have the property direction (base name: "direction")', function() {
        // TODO: update the code to test the property direction
        expect(instance).to.have.property('direction');
        // expect(instance.direction).to.be(expectedValueLiteral);
      });

      it('should have the property ignoreCase (base name: "ignore_case")', function() {
        // TODO: update the code to test the property ignoreCase
        expect(instance).to.have.property('ignoreCase');
        // expect(instance.ignoreCase).to.be(expectedValueLiteral);
      });

      it('should have the property nullHandling (base name: "null_handling")', function() {
        // TODO: update the code to test the property nullHandling
        expect(instance).to.have.property('nullHandling');
        // expect(instance.nullHandling).to.be(expectedValueLiteral);
      });

      it('should have the property property (base name: "property")', function() {
        // TODO: update the code to test the property property
        expect(instance).to.have.property('property');
        // expect(instance.property).to.be(expectedValueLiteral);
      });

    });
  });

}));
