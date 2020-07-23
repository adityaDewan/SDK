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
    describe('TokenUpdateParams', function() {
      beforeEach(function() {
        instance = new MoleculeApiDocumentation.TokenUpdateParams();
      });

      it('should create an instance of TokenUpdateParams', function() {
        // TODO: update the code to test TokenUpdateParams
        expect(instance).to.be.a(MoleculeApiDocumentation.TokenUpdateParams);
      });

      it('should have the property name (base name: "name")', function() {
        // TODO: update the code to test the property name
        expect(instance).to.have.property('name');
        // expect(instance.name).to.be(expectedValueLiteral);
      });

      it('should have the property symbol (base name: "symbol")', function() {
        // TODO: update the code to test the property symbol
        expect(instance).to.have.property('symbol');
        // expect(instance.symbol).to.be(expectedValueLiteral);
      });

      it('should have the property nucleusModelId (base name: "nucleus_model_id")', function() {
        // TODO: update the code to test the property nucleusModelId
        expect(instance).to.have.property('nucleusModelId');
        // expect(instance.nucleusModelId).to.be(expectedValueLiteral);
      });

      it('should have the property ownerWalletId (base name: "owner_wallet_id")', function() {
        // TODO: update the code to test the property ownerWalletId
        expect(instance).to.have.property('ownerWalletId');
        // expect(instance.ownerWalletId).to.be(expectedValueLiteral);
      });

      it('should have the property isMintable (base name: "is_mintable")', function() {
        // TODO: update the code to test the property isMintable
        expect(instance).to.have.property('isMintable');
        // expect(instance.isMintable).to.be(expectedValueLiteral);
      });

      it('should have the property isBurnable (base name: "is_burnable")', function() {
        // TODO: update the code to test the property isBurnable
        expect(instance).to.have.property('isBurnable');
        // expect(instance.isBurnable).to.be(expectedValueLiteral);
      });

      it('should have the property whitelistAddress (base name: "whitelist_address")', function() {
        // TODO: update the code to test the property whitelistAddress
        expect(instance).to.have.property('whitelistAddress');
        // expect(instance.whitelistAddress).to.be(expectedValueLiteral);
      });

      it('should have the property contractAddress (base name: "contract_address")', function() {
        // TODO: update the code to test the property contractAddress
        expect(instance).to.have.property('contractAddress');
        // expect(instance.contractAddress).to.be(expectedValueLiteral);
      });

      it('should have the property crowdsaleAddress (base name: "crowdsale_address")', function() {
        // TODO: update the code to test the property crowdsaleAddress
        expect(instance).to.have.property('crowdsaleAddress');
        // expect(instance.crowdsaleAddress).to.be(expectedValueLiteral);
      });

      it('should have the property isActive (base name: "is_active")', function() {
        // TODO: update the code to test the property isActive
        expect(instance).to.have.property('isActive');
        // expect(instance.isActive).to.be(expectedValueLiteral);
      });

      it('should have the property secondaryId (base name: "secondary_id")', function() {
        // TODO: update the code to test the property secondaryId
        expect(instance).to.have.property('secondaryId');
        // expect(instance.secondaryId).to.be(expectedValueLiteral);
      });

      it('should have the property recordStatus (base name: "record_status")', function() {
        // TODO: update the code to test the property recordStatus
        expect(instance).to.have.property('recordStatus');
        // expect(instance.recordStatus).to.be(expectedValueLiteral);
      });

      it('should have the property offeringSettings (base name: "offering_settings")', function() {
        // TODO: update the code to test the property offeringSettings
        expect(instance).to.have.property('offeringSettings');
        // expect(instance.offeringSettings).to.be(expectedValueLiteral);
      });

      it('should have the property metadata (base name: "metadata")', function() {
        // TODO: update the code to test the property metadata
        expect(instance).to.have.property('metadata');
        // expect(instance.metadata).to.be(expectedValueLiteral);
      });

      it('should have the property restrictions (base name: "restrictions")', function() {
        // TODO: update the code to test the property restrictions
        expect(instance).to.have.property('restrictions');
        // expect(instance.restrictions).to.be(expectedValueLiteral);
      });

    });
  });

}));
