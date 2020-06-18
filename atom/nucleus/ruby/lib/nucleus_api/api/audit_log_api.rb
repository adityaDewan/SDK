=begin
#Hydrogen Atom API

#The Hydrogen Atom API

OpenAPI spec version: 1.7.0
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'uri'

module NucleusApi
  class AuditLogApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Create a audit log
    # Create a new audit log.
    # @param audit_log auditLog
    # @param [Hash] opts the optional parameters
    # @return [AuditLog]
    def create_audit_log_using_post(audit_log, opts = {})
      data, _status_code, _headers = create_audit_log_using_post_with_http_info(audit_log, opts)
      data
    end

    # Create a audit log
    # Create a new audit log.
    # @param audit_log auditLog
    # @param [Hash] opts the optional parameters
    # @return [Array<(AuditLog, Fixnum, Hash)>] AuditLog data, response status code and response headers
    def create_audit_log_using_post_with_http_info(audit_log, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: AuditLogApi.create_audit_log_using_post ...'
      end
      # verify the required parameter 'audit_log' is set
      if @api_client.config.client_side_validation && audit_log.nil?
        fail ArgumentError, "Missing the required parameter 'audit_log' when calling AuditLogApi.create_audit_log_using_post"
      end
      # resource path
      local_var_path = '/audit_log'

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['*/*'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(audit_log)
      auth_names = ['oauth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'AuditLog')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: AuditLogApi#create_audit_log_using_post\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # List all audit log
    # Get details for all audit log.
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending (default to false)
    # @option opts [String] :filter filter
    # @option opts [String] :order_by order_by (default to update_date)
    # @option opts [Integer] :page page (default to 0)
    # @option opts [Integer] :size size (default to 25)
    # @return [PageAuditLog]
    def get_audit_log_all_using_get(opts = {})
      data, _status_code, _headers = get_audit_log_all_using_get_with_http_info(opts)
      data
    end

    # List all audit log
    # Get details for all audit log.
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending
    # @option opts [String] :filter filter
    # @option opts [String] :order_by order_by
    # @option opts [Integer] :page page
    # @option opts [Integer] :size size
    # @return [Array<(PageAuditLog, Fixnum, Hash)>] PageAuditLog data, response status code and response headers
    def get_audit_log_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: AuditLogApi.get_audit_log_all_using_get ...'
      end
      # resource path
      local_var_path = '/audit_log'

      # query parameters
      query_params = {}
      query_params[:'ascending'] = opts[:'ascending'] if !opts[:'ascending'].nil?
      query_params[:'filter'] = opts[:'filter'] if !opts[:'filter'].nil?
      query_params[:'order_by'] = opts[:'order_by'] if !opts[:'order_by'].nil?
      query_params[:'page'] = opts[:'page'] if !opts[:'page'].nil?
      query_params[:'size'] = opts[:'size'] if !opts[:'size'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['*/*'])

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
        :return_type => 'PageAuditLog')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: AuditLogApi#get_audit_log_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Retrieve a audit log
    # Retrieve the information for a audit log.
    # @param audit_log_id UUID audit_log_id
    # @param [Hash] opts the optional parameters
    # @return [AuditLog]
    def get_audit_log_using_get(audit_log_id, opts = {})
      data, _status_code, _headers = get_audit_log_using_get_with_http_info(audit_log_id, opts)
      data
    end

    # Retrieve a audit log
    # Retrieve the information for a audit log.
    # @param audit_log_id UUID audit_log_id
    # @param [Hash] opts the optional parameters
    # @return [Array<(AuditLog, Fixnum, Hash)>] AuditLog data, response status code and response headers
    def get_audit_log_using_get_with_http_info(audit_log_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: AuditLogApi.get_audit_log_using_get ...'
      end
      # verify the required parameter 'audit_log_id' is set
      if @api_client.config.client_side_validation && audit_log_id.nil?
        fail ArgumentError, "Missing the required parameter 'audit_log_id' when calling AuditLogApi.get_audit_log_using_get"
      end
      # resource path
      local_var_path = '/audit_log/{audit_log_id}'.sub('{' + 'audit_log_id' + '}', audit_log_id.to_s)

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
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'AuditLog')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: AuditLogApi#get_audit_log_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
