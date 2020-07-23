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
  class TokenApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Burn tokens
    # @param token_burn_params Burns provided amount of existing tokens
    # @param [Hash] opts the optional parameters
    # @return [TransactionSuccessResponse]
    def burn_token_using_post(token_burn_params, opts = {})
      data, _status_code, _headers = burn_token_using_post_with_http_info(token_burn_params, opts)
      data
    end

    # Burn tokens
    # @param token_burn_params Burns provided amount of existing tokens
    # @param [Hash] opts the optional parameters
    # @return [Array<(TransactionSuccessResponse, Fixnum, Hash)>] TransactionSuccessResponse data, response status code and response headers
    def burn_token_using_post_with_http_info(token_burn_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.burn_token_using_post ...'
      end
      # verify the required parameter 'token_burn_params' is set
      if @api_client.config.client_side_validation && token_burn_params.nil?
        fail ArgumentError, "Missing the required parameter 'token_burn_params' when calling TokenApi.burn_token_using_post"
      end
      # resource path
      local_var_path = '/token/burn'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(token_burn_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TransactionSuccessResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#burn_token_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Creates a new Token
    # @param token_params It enables a user to create a Token
    # @param [Hash] opts the optional parameters
    # @return [TokenResponse]
    def create_token_using_post(token_params, opts = {})
      data, _status_code, _headers = create_token_using_post_with_http_info(token_params, opts)
      data
    end

    # Creates a new Token
    # @param token_params It enables a user to create a Token
    # @param [Hash] opts the optional parameters
    # @return [Array<(TokenResponse, Fixnum, Hash)>] TokenResponse data, response status code and response headers
    def create_token_using_post_with_http_info(token_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.create_token_using_post ...'
      end
      # verify the required parameter 'token_params' is set
      if @api_client.config.client_side_validation && token_params.nil?
        fail ArgumentError, "Missing the required parameter 'token_params' when calling TokenApi.create_token_using_post"
      end
      # resource path
      local_var_path = '/token'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(token_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TokenResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#create_token_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Delete Token
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @return [nil]
    def delete_token_using_delete(token_id, opts = {})
      delete_token_using_delete_with_http_info(token_id, opts)
      nil
    end

    # Delete Token
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @return [Array<(nil, Fixnum, Hash)>] nil, response status code and response headers
    def delete_token_using_delete_with_http_info(token_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.delete_token_using_delete ...'
      end
      # verify the required parameter 'token_id' is set
      if @api_client.config.client_side_validation && token_id.nil?
        fail ArgumentError, "Missing the required parameter 'token_id' when calling TokenApi.delete_token_using_delete"
      end
      # resource path
      local_var_path = '/token/{token_id}'.sub('{' + 'token_id' + '}', token_id.to_s)

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
      data, status_code, headers = @api_client.call_api(:DELETE, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#delete_token_using_delete\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Deploys provided Token to network
    # @param token_deploy_params Deploys provided Token to network
    # @param [Hash] opts the optional parameters
    # @return [TransactionSuccessResponse]
    def deploy_token_using_post(token_deploy_params, opts = {})
      data, _status_code, _headers = deploy_token_using_post_with_http_info(token_deploy_params, opts)
      data
    end

    # Deploys provided Token to network
    # @param token_deploy_params Deploys provided Token to network
    # @param [Hash] opts the optional parameters
    # @return [Array<(TransactionSuccessResponse, Fixnum, Hash)>] TransactionSuccessResponse data, response status code and response headers
    def deploy_token_using_post_with_http_info(token_deploy_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.deploy_token_using_post ...'
      end
      # verify the required parameter 'token_deploy_params' is set
      if @api_client.config.client_side_validation && token_deploy_params.nil?
        fail ArgumentError, "Missing the required parameter 'token_deploy_params' when calling TokenApi.deploy_token_using_post"
      end
      # resource path
      local_var_path = '/token/deploy'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(token_deploy_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TransactionSuccessResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#deploy_token_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Fetch Token list
    # @param [Hash] opts the optional parameters
    # @option opts [Integer] :page To filter response Token list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [PageTokenResponse]
    def get_token_all_using_get(opts = {})
      data, _status_code, _headers = get_token_all_using_get_with_http_info(opts)
      data
    end

    # Fetch Token list
    # @param [Hash] opts the optional parameters
    # @option opts [Integer] :page To filter response Token list by page number
    # @option opts [Integer] :size Number of records per page
    # @option opts [String] :order_by Field to sort record list
    # @option opts [BOOLEAN] :ascending Sorting order
    # @option opts [BOOLEAN] :get_latest To fetch latest (one) record
    # @return [Array<(PageTokenResponse, Fixnum, Hash)>] PageTokenResponse data, response status code and response headers
    def get_token_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.get_token_all_using_get ...'
      end
      # resource path
      local_var_path = '/token'

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
        :return_type => 'PageTokenResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#get_token_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Fetch Token details
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @return [TokenResponse]
    def get_token_using_get(token_id, opts = {})
      data, _status_code, _headers = get_token_using_get_with_http_info(token_id, opts)
      data
    end

    # Fetch Token details
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @return [Array<(TokenResponse, Fixnum, Hash)>] TokenResponse data, response status code and response headers
    def get_token_using_get_with_http_info(token_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.get_token_using_get ...'
      end
      # verify the required parameter 'token_id' is set
      if @api_client.config.client_side_validation && token_id.nil?
        fail ArgumentError, "Missing the required parameter 'token_id' when calling TokenApi.get_token_using_get"
      end
      # resource path
      local_var_path = '/token/{token_id}'.sub('{' + 'token_id' + '}', token_id.to_s)

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
        :return_type => 'TokenResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#get_token_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Mint new tokens
    # @param token_mint_params Mint new tokens
    # @param [Hash] opts the optional parameters
    # @return [TransactionSuccessResponse]
    def mint_token_using_post(token_mint_params, opts = {})
      data, _status_code, _headers = mint_token_using_post_with_http_info(token_mint_params, opts)
      data
    end

    # Mint new tokens
    # @param token_mint_params Mint new tokens
    # @param [Hash] opts the optional parameters
    # @return [Array<(TransactionSuccessResponse, Fixnum, Hash)>] TransactionSuccessResponse data, response status code and response headers
    def mint_token_using_post_with_http_info(token_mint_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.mint_token_using_post ...'
      end
      # verify the required parameter 'token_mint_params' is set
      if @api_client.config.client_side_validation && token_mint_params.nil?
        fail ArgumentError, "Missing the required parameter 'token_mint_params' when calling TokenApi.mint_token_using_post"
      end
      # resource path
      local_var_path = '/token/mint'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(token_mint_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TransactionSuccessResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#mint_token_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Update Token details
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @option opts [TokenUpdateParams] :token_update_params Token details to be updated
    # @return [TokenResponse]
    def update_token_using_put(token_id, opts = {})
      data, _status_code, _headers = update_token_using_put_with_http_info(token_id, opts)
      data
    end

    # Update Token details
    # @param token_id Token ID
    # @param [Hash] opts the optional parameters
    # @option opts [TokenUpdateParams] :token_update_params Token details to be updated
    # @return [Array<(TokenResponse, Fixnum, Hash)>] TokenResponse data, response status code and response headers
    def update_token_using_put_with_http_info(token_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.update_token_using_put ...'
      end
      # verify the required parameter 'token_id' is set
      if @api_client.config.client_side_validation && token_id.nil?
        fail ArgumentError, "Missing the required parameter 'token_id' when calling TokenApi.update_token_using_put"
      end
      # resource path
      local_var_path = '/token/{token_id}'.sub('{' + 'token_id' + '}', token_id.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(opts[:'token_update_params'])
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:PUT, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TokenResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#update_token_using_put\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Whitelist token for provided wallet
    # @param token_whitelist_params Whitelist token for provided wallet
    # @param [Hash] opts the optional parameters
    # @return [TransactionSuccessResponse]
    def whitelist_token_using_post(token_whitelist_params, opts = {})
      data, _status_code, _headers = whitelist_token_using_post_with_http_info(token_whitelist_params, opts)
      data
    end

    # Whitelist token for provided wallet
    # @param token_whitelist_params Whitelist token for provided wallet
    # @param [Hash] opts the optional parameters
    # @return [Array<(TransactionSuccessResponse, Fixnum, Hash)>] TransactionSuccessResponse data, response status code and response headers
    def whitelist_token_using_post_with_http_info(token_whitelist_params, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: TokenApi.whitelist_token_using_post ...'
      end
      # verify the required parameter 'token_whitelist_params' is set
      if @api_client.config.client_side_validation && token_whitelist_params.nil?
        fail ArgumentError, "Missing the required parameter 'token_whitelist_params' when calling TokenApi.whitelist_token_using_post"
      end
      # resource path
      local_var_path = '/token/whitelist'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(token_whitelist_params)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'TransactionSuccessResponse')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: TokenApi#whitelist_token_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
