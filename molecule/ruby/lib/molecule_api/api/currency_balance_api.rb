=begin
#Molecule API Documentation

#The Hydrogen Molecule API

OpenAPI spec version: 1.3.0
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'uri'

module MoleculeApi
  class CurrencyBalanceApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Fetch Currency Balance list
    # @param [Hash] opts the optional parameters
    # @option opts [String] :wallet_id To filter response Currency Balance list by wallet ID
    # @option opts [String] :currency_id To filter response Currency Balance list by currency ID
    # @option opts [Integer] :page To filter response Currency Balance list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [PageCurrencyBalanceResponse]
    def get_currency_balance_all_using_get(opts = {})
      data, _status_code, _headers = get_currency_balance_all_using_get_with_http_info(opts)
      data
    end

    # Fetch Currency Balance list
    # @param [Hash] opts the optional parameters
    # @option opts [String] :wallet_id To filter response Currency Balance list by wallet ID
    # @option opts [String] :currency_id To filter response Currency Balance list by currency ID
    # @option opts [Integer] :page To filter response Currency Balance list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [Array<(PageCurrencyBalanceResponse, Fixnum, Hash)>] PageCurrencyBalanceResponse data, response status code and response headers
    def get_currency_balance_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: CurrencyBalanceApi.get_currency_balance_all_using_get ...'
      end
      # resource path
      local_var_path = '/currency_balance'

      # query parameters
      query_params = {}
      query_params[:'wallet_id'] = opts[:'wallet_id'] if !opts[:'wallet_id'].nil?
      query_params[:'currency_id'] = opts[:'currency_id'] if !opts[:'currency_id'].nil?
      query_params[:'page'] = opts[:'page'] if !opts[:'page'].nil?
      query_params[:'size'] = opts[:'size'] if !opts[:'size'].nil?
      query_params[:'order_by'] = opts[:'order_by'] if !opts[:'order_by'].nil?
      query_params[:'ascending'] = opts[:'ascending'] if !opts[:'ascending'].nil?
      query_params[:'get_latest'] = opts[:'get_latest'] if !opts[:'get_latest'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = nil
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'PageCurrencyBalanceResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CurrencyBalanceApi#get_currency_balance_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Fetch Currency Balance details
    # @param currency_balance_id Currency Balance ID
    # @param [Hash] opts the optional parameters
    # @return [CurrencyBalanceResponse]
    def get_currency_balance_using_get(currency_balance_id, opts = {})
      data, _status_code, _headers = get_currency_balance_using_get_with_http_info(currency_balance_id, opts)
      data
    end

    # Fetch Currency Balance details
    # @param currency_balance_id Currency Balance ID
    # @param [Hash] opts the optional parameters
    # @return [Array<(CurrencyBalanceResponse, Fixnum, Hash)>] CurrencyBalanceResponse data, response status code and response headers
    def get_currency_balance_using_get_with_http_info(currency_balance_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: CurrencyBalanceApi.get_currency_balance_using_get ...'
      end
      # verify the required parameter 'currency_balance_id' is set
      if @api_client.config.client_side_validation && currency_balance_id.nil?
        fail ArgumentError, "Missing the required parameter 'currency_balance_id' when calling CurrencyBalanceApi.get_currency_balance_using_get"
      end
      # resource path
      local_var_path = '/currency_balance/{currency_balance_id}'.sub('{' + 'currency_balance_id' + '}', currency_balance_id.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = nil
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'CurrencyBalanceResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CurrencyBalanceApi#get_currency_balance_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Update(Fetch) latest Currency Balance
    # @param currency_balance_update_params To fetch/update latest record
    # @param [Hash] opts the optional parameters
    # @return [CurrencyBalanceResponse]
    def update_currency_balance_using_post(currency_balance_update_params, opts = {})
      data, _status_code, _headers = update_currency_balance_using_post_with_http_info(currency_balance_update_params, opts)
      data
    end

    # Update(Fetch) latest Currency Balance
    # @param currency_balance_update_params To fetch/update latest record
    # @param [Hash] opts the optional parameters
    # @return [Array<(CurrencyBalanceResponse, Fixnum, Hash)>] CurrencyBalanceResponse data, response status code and response headers
    def update_currency_balance_using_post_with_http_info(currency_balance_update_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: CurrencyBalanceApi.update_currency_balance_using_post ...'
      end
      # verify the required parameter 'currency_balance_update_params' is set
      if @api_client.config.client_side_validation && currency_balance_update_params.nil?
        fail ArgumentError, "Missing the required parameter 'currency_balance_update_params' when calling CurrencyBalanceApi.update_currency_balance_using_post"
      end
      # resource path
      local_var_path = '/currency_balance/update'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(currency_balance_update_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'CurrencyBalanceResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CurrencyBalanceApi#update_currency_balance_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
