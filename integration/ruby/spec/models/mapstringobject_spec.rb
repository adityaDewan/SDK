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

# Unit tests for IntegrationApi::Mapstringobject
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'Mapstringobject' do
  before do
    # run before each test
    @instance = IntegrationApi::Mapstringobject.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of Mapstringobject' do
    it 'should create an instance of Mapstringobject' do
      expect(@instance).to be_instance_of(IntegrationApi::Mapstringobject)
    end
  end
end
