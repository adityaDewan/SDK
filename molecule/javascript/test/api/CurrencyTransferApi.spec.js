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

  beforeEach(function() {
    instance = new MoleculeApiDocumentation.CurrencyTransferApi();
  });

  describe('(package)', function() {
    describe('CurrencyTransferApi', function() {
      describe('createCurrencyTransferUsingPost', function() {
        it('should call createCurrencyTransferUsingPost successfully', function(done) {
          // TODO: uncomment, update parameter values for createCurrencyTransferUsingPost call and complete the assertions
          /*
          var currencyTransferParams = new MoleculeApiDocumentation.CurrencyTransferParams();
          currencyTransferParams.senderWalletId = """00000000-0000-0000-0000-000000000000";
          currencyTransferParams.receiverWalletId = """00000000-0000-0000-0000-000000000000";
          currencyTransferParams.currencyId = """00000000-0000-0000-0000-000000000000";
          currencyTransferParams.amount = 0.0;
          currencyTransferParams.isActive = false;
          currencyTransferParams.recordStatus = "";

          instance.createCurrencyTransferUsingPost(currencyTransferParams, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            // TODO: update response assertions
            expect(data).to.be.a(MoleculeApiDocumentation.TransactionSuccessResponse);
            expect(data.id).to.be.a('string');
            expect(data.id).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.walletId).to.be.a('string');
            expect(data.walletId).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.hash).to.be.a('string');
            expect(data.hash).to.be("");
            expect(data.status).to.be.a('string');
            expect(data.status).to.be("");
            expect(data.createDate).to.be.a(Date);
            expect(data.createDate).to.be(new Date());
            expect(data.updateDate).to.be.a(Date);
            expect(data.updateDate).to.be(new Date());

            done();
          });
          */
          // TODO: uncomment and complete method invocation above, then delete this line and the next:
          done();
        });
      });
      describe('getCurrencyTransferAllUsingGet', function() {
        it('should call getCurrencyTransferAllUsingGet successfully', function(done) {
          // TODO: uncomment, update parameter values for getCurrencyTransferAllUsingGet call and complete the assertions
          /*
          var opts = {};
          opts.walletId = "walletId_example";
          opts.currencyId = "currencyId_example";
          opts.page = 56;
          opts.size = 56;
          opts.orderBy = "orderBy_example";
          opts.ascending = true;
          opts.getLatest = true;

          instance.getCurrencyTransferAllUsingGet(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            // TODO: update response assertions
            expect(data).to.be.a(MoleculeApiDocumentation.PageCurrencyTransferResponse);
            {
              let dataCtr = data.content;
              expect(dataCtr).to.be.an(Array);
              expect(dataCtr).to.not.be.empty();
              for (let p in dataCtr) {
                let data = dataCtr[p];
                expect(data).to.be.a(MoleculeApiDocumentation.CurrencyTransferResponse);
                expect(data.id).to.be.a('string');
                expect(data.id).to.be("""00000000-0000-0000-0000-000000000000");
                expect(data.senderWalletId).to.be.a('string');
                expect(data.senderWalletId).to.be("""00000000-0000-0000-0000-000000000000");
                expect(data.receiverWalletId).to.be.a('string');
                expect(data.receiverWalletId).to.be("""00000000-0000-0000-0000-000000000000");
                expect(data.currencyId).to.be.a('string');
                expect(data.currencyId).to.be("""00000000-0000-0000-0000-000000000000");
                expect(data.amount).to.be.a('number');
                expect(data.amount).to.be(0.0);
                expect(data.transactionHash).to.be.a('string');
                expect(data.transactionHash).to.be("");
                expect(data.isActive).to.be.a('boolean');
                expect(data.isActive).to.be(false);
                expect(data.recordStatus).to.be.a('string');
                expect(data.recordStatus).to.be("");
                expect(data.createDate).to.be.a(Date);
                expect(data.createDate).to.be(new Date());
                expect(data.updateDate).to.be.a(Date);
                expect(data.updateDate).to.be(new Date());

                      }
            }
            expect(data.first).to.be.a('boolean');
            expect(data.first).to.be(false);
            expect(data.last).to.be.a('boolean');
            expect(data.last).to.be(false);
            expect(data._number).to.be.a('number');
            expect(data._number).to.be(0);
            expect(data.numberOfElements).to.be.a('number');
            expect(data.numberOfElements).to.be(0);
            expect(data.size).to.be.a('number');
            expect(data.size).to.be(0);
            {
              let dataCtr = data.sort;
              expect(dataCtr).to.be.an(Array);
              expect(dataCtr).to.not.be.empty();
              for (let p in dataCtr) {
                let data = dataCtr[p];
                expect(data).to.be.a(MoleculeApiDocumentation.Sort);
                expect(data.ascending).to.be.a('boolean');
                expect(data.ascending).to.be(true);
                expect(data.descending).to.be.a('boolean');
                expect(data.descending).to.be(false);
                expect(data.direction).to.be.a('string');
                expect(data.direction).to.be("DESC");
                expect(data.ignoreCase).to.be.a('boolean');
                expect(data.ignoreCase).to.be(false);
                expect(data.nullHandling).to.be.a('string');
                expect(data.nullHandling).to.be("NATIVE");
                expect(data.property).to.be.a('string');
                expect(data.property).to.be("updateDate");

                      }
            }
            expect(data.totalElements).to.be.a('number');
            expect(data.totalElements).to.be("0");
            expect(data.totalPages).to.be.a('number');
            expect(data.totalPages).to.be(0);

            done();
          });
          */
          // TODO: uncomment and complete method invocation above, then delete this line and the next:
          done();
        });
      });
      describe('getCurrencyTransferUsingGet', function() {
        it('should call getCurrencyTransferUsingGet successfully', function(done) {
          // TODO: uncomment, update parameter values for getCurrencyTransferUsingGet call and complete the assertions
          /*
          var currencyTransferId = "currencyTransferId_example";

          instance.getCurrencyTransferUsingGet(currencyTransferId, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            // TODO: update response assertions
            expect(data).to.be.a(MoleculeApiDocumentation.CurrencyTransferResponse);
            expect(data.id).to.be.a('string');
            expect(data.id).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.senderWalletId).to.be.a('string');
            expect(data.senderWalletId).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.receiverWalletId).to.be.a('string');
            expect(data.receiverWalletId).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.currencyId).to.be.a('string');
            expect(data.currencyId).to.be("""00000000-0000-0000-0000-000000000000");
            expect(data.amount).to.be.a('number');
            expect(data.amount).to.be(0.0);
            expect(data.transactionHash).to.be.a('string');
            expect(data.transactionHash).to.be("");
            expect(data.isActive).to.be.a('boolean');
            expect(data.isActive).to.be(false);
            expect(data.recordStatus).to.be.a('string');
            expect(data.recordStatus).to.be("");
            expect(data.createDate).to.be.a(Date);
            expect(data.createDate).to.be(new Date());
            expect(data.updateDate).to.be.a(Date);
            expect(data.updateDate).to.be(new Date());

            done();
          });
          */
          // TODO: uncomment and complete method invocation above, then delete this line and the next:
          done();
        });
      });
    });
  });

}));
