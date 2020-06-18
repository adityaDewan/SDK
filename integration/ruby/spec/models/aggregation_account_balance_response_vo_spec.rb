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
require 'date'

# Unit tests for IntegrationApi::AggregationAccountBalanceResponseVO
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'AggregationAccountBalanceResponseVO' do
  before do
    # run before each test
    @instance = IntegrationApi::AggregationAccountBalanceResponseVO.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of AggregationAccountBalanceResponseVO' do
    it 'should create an instance of AggregationAccountBalanceResponseVO' do
      expect(@instance).to be_instance_of(IntegrationApi::AggregationAccountBalanceResponseVO)
    end
  end
  describe 'test attribute "message"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  describe 'test attribute "nucleus_aggregation_account_id"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  describe 'test attribute "nucleus_balance_posted"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  describe 'test attribute "vendor_name"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
