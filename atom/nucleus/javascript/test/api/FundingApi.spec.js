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
    instance = new HydrogenNucleusApi.FundingApi();
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

  describe('FundingApi', function() {
    describe('createBankLinkUsingPost', function() {
      it('should call createBankLinkUsingPost successfully', function(done) {
        //uncomment below and update the code to test createBankLinkUsingPost
        //instance.createBankLinkUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('createDepositUsingPost', function() {
      it('should call createDepositUsingPost successfully', function(done) {
        //uncomment below and update the code to test createDepositUsingPost
        //instance.createDepositUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('createFundingUsingPost', function() {
      it('should call createFundingUsingPost successfully', function(done) {
        //uncomment below and update the code to test createFundingUsingPost
        //instance.createFundingUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('createTransferUsingPost', function() {
      it('should call createTransferUsingPost successfully', function(done) {
        //uncomment below and update the code to test createTransferUsingPost
        //instance.createTransferUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('createWithdrawalUsingPost', function() {
      it('should call createWithdrawalUsingPost successfully', function(done) {
        //uncomment below and update the code to test createWithdrawalUsingPost
        //instance.createWithdrawalUsingPost(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteBankLinkUsingDelete', function() {
      it('should call deleteBankLinkUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteBankLinkUsingDelete
        //instance.deleteBankLinkUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteDepositUsingDelete', function() {
      it('should call deleteDepositUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteDepositUsingDelete
        //instance.deleteDepositUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteFundingUsingDelete', function() {
      it('should call deleteFundingUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteFundingUsingDelete
        //instance.deleteFundingUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteTransferUsingDelete', function() {
      it('should call deleteTransferUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteTransferUsingDelete
        //instance.deleteTransferUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteWithdrawalUsingDelete', function() {
      it('should call deleteWithdrawalUsingDelete successfully', function(done) {
        //uncomment below and update the code to test deleteWithdrawalUsingDelete
        //instance.deleteWithdrawalUsingDelete(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getBankLinkAllUsingGet', function() {
      it('should call getBankLinkAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getBankLinkAllUsingGet
        //instance.getBankLinkAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getBankLinkUsingGet', function() {
      it('should call getBankLinkUsingGet successfully', function(done) {
        //uncomment below and update the code to test getBankLinkUsingGet
        //instance.getBankLinkUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getDepositAllUsingGet', function() {
      it('should call getDepositAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getDepositAllUsingGet
        //instance.getDepositAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getDepositUsingGet', function() {
      it('should call getDepositUsingGet successfully', function(done) {
        //uncomment below and update the code to test getDepositUsingGet
        //instance.getDepositUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getFundingAllUsingGet', function() {
      it('should call getFundingAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getFundingAllUsingGet
        //instance.getFundingAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getFundingUsingGet', function() {
      it('should call getFundingUsingGet successfully', function(done) {
        //uncomment below and update the code to test getFundingUsingGet
        //instance.getFundingUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getTransferAllUsingGet', function() {
      it('should call getTransferAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getTransferAllUsingGet
        //instance.getTransferAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getTransferUsingGet', function() {
      it('should call getTransferUsingGet successfully', function(done) {
        //uncomment below and update the code to test getTransferUsingGet
        //instance.getTransferUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getWithdrawalAllUsingGet', function() {
      it('should call getWithdrawalAllUsingGet successfully', function(done) {
        //uncomment below and update the code to test getWithdrawalAllUsingGet
        //instance.getWithdrawalAllUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getWithdrawalUsingGet', function() {
      it('should call getWithdrawalUsingGet successfully', function(done) {
        //uncomment below and update the code to test getWithdrawalUsingGet
        //instance.getWithdrawalUsingGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateBankLinkBulkUsingPut', function() {
      it('should call updateBankLinkBulkUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateBankLinkBulkUsingPut
        //instance.updateBankLinkBulkUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateBankLinkUsingPut', function() {
      it('should call updateBankLinkUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateBankLinkUsingPut
        //instance.updateBankLinkUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateDepositUsingPut', function() {
      it('should call updateDepositUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateDepositUsingPut
        //instance.updateDepositUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateFundingUsingPut', function() {
      it('should call updateFundingUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateFundingUsingPut
        //instance.updateFundingUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateTransferUsingPut', function() {
      it('should call updateTransferUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateTransferUsingPut
        //instance.updateTransferUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('updateWithdrawalUsingPut', function() {
      it('should call updateWithdrawalUsingPut successfully', function(done) {
        //uncomment below and update the code to test updateWithdrawalUsingPut
        //instance.updateWithdrawalUsingPut(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));