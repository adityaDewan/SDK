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
  class AuditLogApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Gel all audit log
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending (default to false)
    # @option opts [DateTime] :end_date end_date (default to null)
    # @option opts [String] :event event
    # @option opts [String] :integration_type integration_type
    # @option opts [BOOLEAN] :is_request is_request (default to false)
    # @option opts [String] :nucleus_client_id nucleus_client_id
    # @option opts [String] :order_by order_by (default to update_date)
    # @option opts [Integer] :page page (default to 0)
    # @option opts [String] :request_type request_type
    # @option opts [Integer] :size size (default to 25)
    # @option opts [DateTime] :start_date start_date (default to null)
    # @option opts [String] :vendor_name vendor_name
    # @return [Pageobject]
    def get_audit_log_all_using_get(opts = {})
      data, _status_code, _headers = get_audit_log_all_using_get_with_http_info(opts)
      data
    end

    # Gel all audit log
    # @param [Hash] opts the optional parameters
    # @option opts [BOOLEAN] :ascending ascending
    # @option opts [DateTime] :end_date end_date
    # @option opts [String] :event event
    # @option opts [String] :integration_type integration_type
    # @option opts [BOOLEAN] :is_request is_request
    # @option opts [String] :nucleus_client_id nucleus_client_id
    # @option opts [String] :order_by order_by
    # @option opts [Integer] :page page
    # @option opts [String] :request_type request_type
    # @option opts [Integer] :size size
    # @option opts [DateTime] :start_date start_date
    # @option opts [String] :vendor_name vendor_name
    # @return [Array<(Pageobject, Fixnum, Hash)>] Pageobject data, response status code and response headers
    def get_audit_log_all_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: AuditLogApi.get_audit_log_all_using_get ...'
      end
      # resource path
      local_var_path = '/audit_log'

      # query parameters
      query_params = {}
      query_params[:'ascending'] = opts[:'ascending'] if !opts[:'ascending'].nil?
      query_params[:'end_date'] = opts[:'end_date'] if !opts[:'end_date'].nil?
      query_params[:'event'] = opts[:'event'] if !opts[:'event'].nil?
      query_params[:'integration_type'] = opts[:'integration_type'] if !opts[:'integration_type'].nil?
      query_params[:'is_request'] = opts[:'is_request'] if !opts[:'is_request'].nil?
      query_params[:'nucleus_client_id'] = opts[:'nucleus_client_id'] if !opts[:'nucleus_client_id'].nil?
      query_params[:'order_by'] = opts[:'order_by'] if !opts[:'order_by'].nil?
      query_params[:'page'] = opts[:'page'] if !opts[:'page'].nil?
      query_params[:'request_type'] = opts[:'request_type'] if !opts[:'request_type'].nil?
      query_params[:'size'] = opts[:'size'] if !opts[:'size'].nil?
      query_params[:'start_date'] = opts[:'start_date'] if !opts[:'start_date'].nil?
      query_params[:'vendor_name'] = opts[:'vendor_name'] if !opts[:'vendor_name'].nil?

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
        :return_type => 'Pageobject')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: AuditLogApi#get_audit_log_all_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
