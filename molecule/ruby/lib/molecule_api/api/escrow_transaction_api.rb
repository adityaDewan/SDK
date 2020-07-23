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
  class EscrowTransactionApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Create a new Escrow Transaction
    # @param escrow_deposit_params It enables a user to create a escrow transaction
    # @param [Hash] opts the optional parameters
    # @return [EscrowTransactionResponse]
    def create_escrow_transaction_using_post(escrow_deposit_params, opts = {})
      data, _status_code, _headers = create_escrow_transaction_using_post_with_http_info(escrow_deposit_params, opts)
      data
    end

    # Create a new Escrow Transaction
    # @param escrow_deposit_params It enables a user to create a escrow transaction
    # @param [Hash] opts the optional parameters
    # @return [Array<(EscrowTransactionResponse, Fixnum, Hash)>] EscrowTransactionResponse data, response status code and response headers
    def create_escrow_transaction_using_post_with_http_info(escrow_deposit_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EscrowTransactionApi.create_escrow_transaction_using_post ...'
      end
      # verify the required parameter 'escrow_deposit_params' is set
      if @api_client.config.client_side_validation && escrow_deposit_params.nil?
        fail ArgumentError, "Missing the required parameter 'escrow_deposit_params' when calling EscrowTransactionApi.create_escrow_transaction_using_post"
      end
      # resource path
      local_var_path = '/escrow_transaction'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(escrow_deposit_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'EscrowTransactionResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EscrowTransactionApi#create_escrow_transaction_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # List all Escrow Transaction
    # @param [Hash] opts the optional parameters
    # @option opts [Integer] :page To filter response Escrow Transaction list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [PageEscrowTransactionResponse]
    def get_escrow_transaction_all_using_get(opts = {})
      data, _status_code, _headers = get_escrow_transaction_all_using_get_with_http_info(opts)
      data
    end

    # List all Escrow Transaction
    # @param [Hash] opts the optional parameters
    # @option opts [Integer] :page To filter response Escrow Transaction list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [Array<(PageEscrowTransactionResponse, Fixnum, Hash)>] PageEscrowTransactionResponse data, response status code and response headers
    def get_escrow_transaction_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EscrowTransactionApi.get_escrow_transaction_all_using_get ...'
      end
      # resource path
      local_var_path = '/escrow_transaction'

      # query parameters
      query_params = {}
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
        :return_type => 'PageEscrowTransactionResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EscrowTransactionApi#get_escrow_transaction_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Fetch Escrow Transaction
    # @param escrow_transaction_id Escrow Transaction ID
    # @param [Hash] opts the optional parameters
    # @return [EscrowTransactionResponse]
    def get_escrow_transaction_using_get(escrow_transaction_id, opts = {})
      data, _status_code, _headers = get_escrow_transaction_using_get_with_http_info(escrow_transaction_id, opts)
      data
    end

    # Fetch Escrow Transaction
    # @param escrow_transaction_id Escrow Transaction ID
    # @param [Hash] opts the optional parameters
    # @return [Array<(EscrowTransactionResponse, Fixnum, Hash)>] EscrowTransactionResponse data, response status code and response headers
    def get_escrow_transaction_using_get_with_http_info(escrow_transaction_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EscrowTransactionApi.get_escrow_transaction_using_get ...'
      end
      # verify the required parameter 'escrow_transaction_id' is set
      if @api_client.config.client_side_validation && escrow_transaction_id.nil?
        fail ArgumentError, "Missing the required parameter 'escrow_transaction_id' when calling EscrowTransactionApi.get_escrow_transaction_using_get"
      end
      # resource path
      local_var_path = '/escrow_transaction/{escrow_transaction_id}'.sub('{' + 'escrow_transaction_id' + '}', escrow_transaction_id.to_s)

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
        :return_type => 'EscrowTransactionResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EscrowTransactionApi#get_escrow_transaction_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Update Escrow Transaction
    # @param escrow_transaction_id Escrow Transaction ID
    # @param [Hash] opts the optional parameters
    # @option opts [EscrowDepositParams] :escrow_deposit_params It enables a user to create a escrow transaction
    # @return [EscrowTransactionResponse]
    def update_escrow_transaction_using_put(escrow_transaction_id, opts = {})
      data, _status_code, _headers = update_escrow_transaction_using_put_with_http_info(escrow_transaction_id, opts)
      data
    end

    # Update Escrow Transaction
    # @param escrow_transaction_id Escrow Transaction ID
    # @param [Hash] opts the optional parameters
    # @option opts [EscrowDepositParams] :escrow_deposit_params It enables a user to create a escrow transaction
    # @return [Array<(EscrowTransactionResponse, Fixnum, Hash)>] EscrowTransactionResponse data, response status code and response headers
    def update_escrow_transaction_using_put_with_http_info(escrow_transaction_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EscrowTransactionApi.update_escrow_transaction_using_put ...'
      end
      # verify the required parameter 'escrow_transaction_id' is set
      if @api_client.config.client_side_validation && escrow_transaction_id.nil?
        fail ArgumentError, "Missing the required parameter 'escrow_transaction_id' when calling EscrowTransactionApi.update_escrow_transaction_using_put"
      end
      # resource path
      local_var_path = '/escrow_transaction/{escrow_transaction_id}'.sub('{' + 'escrow_transaction_id' + '}', escrow_transaction_id.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(opts[:'escrow_deposit_params'])
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:PUT, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'EscrowTransactionResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EscrowTransactionApi#update_escrow_transaction_using_put\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
