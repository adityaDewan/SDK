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
    describe('TokenDeployParams', function() {
      beforeEach(function() {
        instance = new MoleculeApiDocumentation.TokenDeployParams();
      });

      it('should create an instance of TokenDeployParams', function() {
        // TODO: update the code to test TokenDeployParams
        expect(instance).to.be.a(MoleculeApiDocumentation.TokenDeployParams);
      });

      it('should have the property tokenId (base name: "token_id")', function() {
        // TODO: update the code to test the property tokenId
        expect(instance).to.have.property('tokenId');
        // expect(instance.tokenId).to.be(expectedValueLiteral);
      });

    });
  });

}));
