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
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/AccountClientsOverviewVO', 'model/AccountHoldingVO', 'model/AllocationVO', 'model/DepositVO', 'model/WithdrawalVO'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('./AccountClientsOverviewVO'), require('./AccountHoldingVO'), require('./AllocationVO'), require('./DepositVO'), require('./WithdrawalVO'));
  } else {
    // Browser globals (root is window)
    if (!root.HydrogenNucleusApi) {
      root.HydrogenNucleusApi = {};
    }
    root.HydrogenNucleusApi.AccountOverviewVO = factory(root.HydrogenNucleusApi.ApiClient, root.HydrogenNucleusApi.AccountClientsOverviewVO, root.HydrogenNucleusApi.AccountHoldingVO, root.HydrogenNucleusApi.AllocationVO, root.HydrogenNucleusApi.DepositVO, root.HydrogenNucleusApi.WithdrawalVO);
  }
}(this, function(ApiClient, AccountClientsOverviewVO, AccountHoldingVO, AllocationVO, DepositVO, WithdrawalVO) {
  'use strict';




  /**
   * The AccountOverviewVO model module.
   * @module model/AccountOverviewVO
   * @version 1.7.0
   */

  /**
   * Constructs a new <code>AccountOverviewVO</code>.
   * @alias module:model/AccountOverviewVO
   * @class
   */
  var exports = function() {
    var _this = this;












  };

  /**
   * Constructs a <code>AccountOverviewVO</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/AccountOverviewVO} obj Optional instance to populate.
   * @return {module:model/AccountOverviewVO} The populated <code>AccountOverviewVO</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('account_asset_size')) {
        obj['account_asset_size'] = ApiClient.convertToType(data['account_asset_size'], 'Number');
      }
      if (data.hasOwnProperty('account_asset_size_date')) {
        obj['account_asset_size_date'] = ApiClient.convertToType(data['account_asset_size_date'], 'Date');
      }
      if (data.hasOwnProperty('account_holdings')) {
        obj['account_holdings'] = ApiClient.convertToType(data['account_holdings'], [AccountHoldingVO]);
      }
      if (data.hasOwnProperty('account_id')) {
        obj['account_id'] = ApiClient.convertToType(data['account_id'], 'String');
      }
      if (data.hasOwnProperty('account_name')) {
        obj['account_name'] = ApiClient.convertToType(data['account_name'], 'String');
      }
      if (data.hasOwnProperty('account_type_id')) {
        obj['account_type_id'] = ApiClient.convertToType(data['account_type_id'], 'String');
      }
      if (data.hasOwnProperty('account_type_name')) {
        obj['account_type_name'] = ApiClient.convertToType(data['account_type_name'], 'String');
      }
      if (data.hasOwnProperty('allocations')) {
        obj['allocations'] = ApiClient.convertToType(data['allocations'], [AllocationVO]);
      }
      if (data.hasOwnProperty('clients')) {
        obj['clients'] = ApiClient.convertToType(data['clients'], [AccountClientsOverviewVO]);
      }
      if (data.hasOwnProperty('deposits')) {
        obj['deposits'] = ApiClient.convertToType(data['deposits'], [DepositVO]);
      }
      if (data.hasOwnProperty('withdrawals')) {
        obj['withdrawals'] = ApiClient.convertToType(data['withdrawals'], [WithdrawalVO]);
      }
    }
    return obj;
  }

  /**
   * @member {Number} account_asset_size
   */
  exports.prototype['account_asset_size'] = undefined;
  /**
   * @member {Date} account_asset_size_date
   */
  exports.prototype['account_asset_size_date'] = undefined;
  /**
   * @member {Array.<module:model/AccountHoldingVO>} account_holdings
   */
  exports.prototype['account_holdings'] = undefined;
  /**
   * @member {String} account_id
   */
  exports.prototype['account_id'] = undefined;
  /**
   * @member {String} account_name
   */
  exports.prototype['account_name'] = undefined;
  /**
   * @member {String} account_type_id
   */
  exports.prototype['account_type_id'] = undefined;
  /**
   * @member {String} account_type_name
   */
  exports.prototype['account_type_name'] = undefined;
  /**
   * @member {Array.<module:model/AllocationVO>} allocations
   */
  exports.prototype['allocations'] = undefined;
  /**
   * @member {Array.<module:model/AccountClientsOverviewVO>} clients
   */
  exports.prototype['clients'] = undefined;
  /**
   * @member {Array.<module:model/DepositVO>} deposits
   */
  exports.prototype['deposits'] = undefined;
  /**
   * @member {Array.<module:model/WithdrawalVO>} withdrawals
   */
  exports.prototype['withdrawals'] = undefined;



  return exports;
}));


