/*
 * Molecule API Documentation
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
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
    factory(root.expect, root.MoleculeApiDocumentation);
  }
}(this, function(expect, MoleculeApiDocumentation) {
  'use strict';

  var instance;

  describe('(package)', function() {
    describe('PageTokenResponse', function() {
      beforeEach(function() {
        instance = new MoleculeApiDocumentation.PageTokenResponse();
      });

      it('should create an instance of PageTokenResponse', function() {
        // TODO: update the code to test PageTokenResponse
        expect(instance).to.be.a(MoleculeApiDocumentation.PageTokenResponse);
      });

      it('should have the property content (base name: "content")', function() {
        // TODO: update the code to test the property content
        expect(instance).to.have.property('content');
        // expect(instance.content).to.be(expectedValueLiteral);
      });

      it('should have the property first (base name: "first")', function() {
        // TODO: update the code to test the property first
        expect(instance).to.have.property('first');
        // expect(instance.first).to.be(expectedValueLiteral);
      });

      it('should have the property last (base name: "last")', function() {
        // TODO: update the code to test the property last
        expect(instance).to.have.property('last');
        // expect(instance.last).to.be(expectedValueLiteral);
      });

      it('should have the property _number (base name: "number")', function() {
        // TODO: update the code to test the property _number
        expect(instance).to.have.property('_number');
        // expect(instance._number).to.be(expectedValueLiteral);
      });

      it('should have the property numberOfElements (base name: "number_of_elements")', function() {
        // TODO: update the code to test the property numberOfElements
        expect(instance).to.have.property('numberOfElements');
        // expect(instance.numberOfElements).to.be(expectedValueLiteral);
      });

      it('should have the property size (base name: "size")', function() {
        // TODO: update the code to test the property size
        expect(instance).to.have.property('size');
        // expect(instance.size).to.be(expectedValueLiteral);
      });

      it('should have the property sort (base name: "sort")', function() {
        // TODO: update the code to test the property sort
        expect(instance).to.have.property('sort');
        // expect(instance.sort).to.be(expectedValueLiteral);
      });

      it('should have the property totalElements (base name: "total_elements")', function() {
        // TODO: update the code to test the property totalElements
        expect(instance).to.have.property('totalElements');
        // expect(instance.totalElements).to.be(expectedValueLiteral);
      });

      it('should have the property totalPages (base name: "total_pages")', function() {
        // TODO: update the code to test the property totalPages
        expect(instance).to.have.property('totalPages');
        // expect(instance.totalPages).to.be(expectedValueLiteral);
      });

    });
  });

}));
