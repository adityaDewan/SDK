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
  class ResourceApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Get All Countries
    # Get All Countries. 
    # @param [Hash] opts the optional parameters
    # @return [Array<Country>]
    def get_all_country_using_get(opts = {})
      data, _status_code, _headers = get_all_country_using_get_with_http_info(opts)
      data
    end

    # Get All Countries
    # Get All Countries. 
    # @param [Hash] opts the optional parameters
    # @return [Array<(Array<Country>, Fixnum, Hash)>] Array<Country> data, response status code and response headers
    def get_all_country_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: ResourceApi.get_all_country_using_get ...'
      end
      # resource path
      local_var_path = '/resource/country'

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
        :return_type => 'Array<Country>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: ResourceApi#get_all_country_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # Get All Currencies
    # Get All Currencies. 
    # @param [Hash] opts the optional parameters
    # @return [Array<Currency>]
    def get_all_currency_using_get(opts = {})
      data, _status_code, _headers = get_all_currency_using_get_with_http_info(opts)
      data
    end

    # Get All Currencies
    # Get All Currencies. 
    # @param [Hash] opts the optional parameters
    # @return [Array<(Array<Currency>, Fixnum, Hash)>] Array<Currency> data, response status code and response headers
    def get_all_currency_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: ResourceApi.get_all_currency_using_get ...'
      end
      # resource path
      local_var_path = '/resource/currency'

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
        :return_type => 'Array<Currency>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: ResourceApi#get_all_currency_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # List all state resource
    # Get the information for all possible state resource.
    # @param [Hash] opts the optional parameters
    # @option opts [String] :country_code country_code (default to US)
    # @return [Array<State>]
    def get_all_states_using_get(opts = {})
      data, _status_code, _headers = get_all_states_using_get_with_http_info(opts)
      data
    end

    # List all state resource
    # Get the information for all possible state resource.
    # @param [Hash] opts the optional parameters
    # @option opts [String] :country_code country_code
    # @return [Array<(Array<State>, Fixnum, Hash)>] Array<State> data, response status code and response headers
    def get_all_states_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: ResourceApi.get_all_states_using_get ...'
      end
      # resource path
      local_var_path = '/resource/state'

      # query parameters
      query_params = {}
      query_params[:'country_code'] = opts[:'country_code'] if !opts[:'country_code'].nil?

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
        :return_type => 'Array<State>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: ResourceApi#get_all_states_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
    # List all statistic resource
    # Get the information for all possible statistic resource.
    # @param [Hash] opts the optional parameters
    # @return [Hash<String, Array<StatisticResourceVO>>]
    def get_all_statistics_using_get(opts = {})
      data, _status_code, _headers = get_all_statistics_using_get_with_http_info(opts)
      data
    end

    # List all statistic resource
    # Get the information for all possible statistic resource.
    # @param [Hash] opts the optional parameters
    # @return [Array<(Hash<String, Array<StatisticResourceVO>>, Fixnum, Hash)>] Hash<String, Array<StatisticResourceVO>> data, response status code and response headers
    def get_all_statistics_using_get_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: ResourceApi.get_all_statistics_using_get ...'
      end
      # resource path
      local_var_path = '/resource/statistic'

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
        :return_type => 'Hash<String, Array<StatisticResourceVO>>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: ResourceApi#get_all_statistics_using_get\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
