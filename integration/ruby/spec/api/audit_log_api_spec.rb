=begin
#Hydrogen Integration API

#The Hydrogen Integration API

OpenAPI spec version: 1.2.1
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'spec_helper'
require 'json'

# Unit tests for IntegrationApi::AuditLogApi
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'AuditLogApi' do
  before do
    # run before each test
    @instance = IntegrationApi::AuditLogApi.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of AuditLogApi' do
    it 'should create an instance of AuditLogApi' do
      expect(@instance).to be_instance_of(IntegrationApi::AuditLogApi)
    end
  end

  # unit tests for get_audit_log_all_using_get
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
  # @return [Pageobject]
  describe 'get_audit_log_all_using_get test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
