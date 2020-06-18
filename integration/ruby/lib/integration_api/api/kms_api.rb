=begin
#Hydrogen Integration API

#The Hydrogen Integration API

OpenAPI spec version: 1.2.1
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'uri'

module IntegrationApi
  class KMSApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Create an secret key
    # Create an secret key.
    # @param kms_config kmsConfig
    # @param [Hash] opts the optional parameters
    # @return [KmsConfig]
    def create_kms_using_post(kms_config, opts = {})
      data, _status_code, _headers = create_kms_using_post_with_http_info(kms_config, opts)
      data
    end

    # Create an secret key
    # Create an secret key.
    # @param kms_config kmsConfig
    # @param [Hash] opts the optional parameters
    # @return [Array<(KmsConfig, Fixnum, Hash)>] KmsConfig data, response status code and response headers
    def create_kms_using_post_with_http_info(kms_config, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: KMSApi.create_kms_using_post ...'
      end
      # verify the required parameter 'kms_config' is set
      if @api_client.config.client_side_validation && kms_config.nil?
        fail ArgumentError, "Missing the required parameter 'kms_config' when calling KMSApi.create_kms_using_post"
      end
      # resource path
      local_var_path = '/kms'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(kms_config)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'KmsConfig')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: KMSApi#create_kms_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Delete an secret key value
    # Permanently delete an secret key value under a tenant.
    # @param kms_id KMS Id
    # @param [Hash] opts the optional parameters
    # @return [nil]
    def delete_kms_using_delete(kms_id, opts = {})
      delete_kms_using_delete_with_http_info(kms_id, opts)
      nil
    end

    # Delete an secret key value
    # Permanently delete an secret key value under a tenant.
    # @param kms_id KMS Id
    # @param [Hash] opts the optional parameters
    # @return [Array<(nil, Fixnum, Hash)>] nil, response status code and response headers
    def delete_kms_using_delete_with_http_info(kms_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: KMSApi.delete_kms_using_delete ...'
      end
      # verify the required parameter 'kms_id' is set
      if @api_client.config.client_side_validation && kms_id.nil?
        fail ArgumentError, "Missing the required parameter 'kms_id' when calling KMSApi.delete_kms_using_delete"
      end
      # resource path
      local_var_path = '/kms/{kms_id}'.sub('{' + 'kms_id' + '}', kms_id.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['*/*'])

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
        @api_client.config.logger.debug "API called: KMSApi#delete_kms_using_delete\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # List all KMS Clients
    # Get details for all clients registered with your firm.
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending (default to false)
    # @option opts [String] :order_by order_by (default to update_date)
    # @option opts [Integer] :page page (default to 0)
    # @option opts [Integer] :size size (default to 25)
    # @return [PageKmsConfig]
    def get_kms_all_using_get(opts = {})
      data, _status_code, _headers = get_kms_all_using_get_with_http_info(opts)
      data
    end

    # List all KMS Clients
    # Get details for all clients registered with your firm.
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending
    # @option opts [String] :order_by order_by
    # @option opts [Integer] :page page
    # @option opts [Integer] :size size
    # @return [Array<(PageKmsConfig, Fixnum, Hash)>] PageKmsConfig data, response status code and response headers
    def get_kms_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: KMSApi.get_kms_all_using_get ...'
      end
      # resource path
      local_var_path = '/kms'

      # query parameters
      query_params = {}
      query_params[:'ascending'] = opts[:'ascending'] if !opts[:'ascending'].nil?
      query_params[:'order_by'] = opts[:'order_by'] if !opts[:'order_by'].nil?
      query_params[:'page'] = opts[:'page'] if !opts[:'page'].nil?
      query_params[:'size'] = opts[:'size'] if !opts[:'size'].nil?

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
        :return_type => 'PageKmsConfig')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: KMSApi#get_kms_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Retrieve an secret key value
    # Retrieve the information for a specific value associated with a Secret key.
    # @param kms_id KMS Id
    # @param [Hash] opts the optional parameters
    # @return [KmsConfig]
    def get_kms_using_get(kms_id, opts = {})
      data, _status_code, _headers = get_kms_using_get_with_http_info(kms_id, opts)
      data
    end

    # Retrieve an secret key value
    # Retrieve the information for a specific value associated with a Secret key.
    # @param kms_id KMS Id
    # @param [Hash] opts the optional parameters
    # @return [Array<(KmsConfig, Fixnum, Hash)>] KmsConfig data, response status code and response headers
    def get_kms_using_get_with_http_info(kms_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: KMSApi.get_kms_using_get ...'
      end
      # verify the required parameter 'kms_id' is set
      if @api_client.config.client_side_validation && kms_id.nil?
        fail ArgumentError, "Missing the required parameter 'kms_id' when calling KMSApi.get_kms_using_get"
      end
      # resource path
      local_var_path = '/kms/{kms_id}'.sub('{' + 'kms_id' + '}', kms_id.to_s)

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
        :return_type => 'KmsConfig')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: KMSApi#get_kms_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Update an Key Value
    # Update the information for an key value.
    # @param kms_config kmsConfig
    # @param kms_id kms_id
    # @param [Hash] opts the optional parameters
    # @return [KmsConfig]
    def update_kms_using_put(kms_config, kms_id, opts = {})
      data, _status_code, _headers = update_kms_using_put_with_http_info(kms_config, kms_id, opts)
      data
    end

    # Update an Key Value
    # Update the information for an key value.
    # @param kms_config kmsConfig
    # @param kms_id kms_id
    # @param [Hash] opts the optional parameters
    # @return [Array<(KmsConfig, Fixnum, Hash)>] KmsConfig data, response status code and response headers
    def update_kms_using_put_with_http_info(kms_config, kms_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: KMSApi.update_kms_using_put ...'
      end
      # verify the required parameter 'kms_config' is set
      if @api_client.config.client_side_validation && kms_config.nil?
        fail ArgumentError, "Missing the required parameter 'kms_config' when calling KMSApi.update_kms_using_put"
      end
      # verify the required parameter 'kms_id' is set
      if @api_client.config.client_side_validation && kms_id.nil?
        fail ArgumentError, "Missing the required parameter 'kms_id' when calling KMSApi.update_kms_using_put"
      end
      # resource path
      local_var_path = '/kms/{kms_id}'.sub('{' + 'kms_id' + '}', kms_id.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(kms_config)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:PUT, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'KmsConfig')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: KMSApi#update_kms_using_put\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
