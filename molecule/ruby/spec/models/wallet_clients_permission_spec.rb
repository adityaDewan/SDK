=begin
#Molecule API Documentation

#The Hydrogen Molecule API

OpenAPI spec version: 1.3.0
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'spec_helper'
require 'json'
require 'date'

# Unit tests for MoleculeApi::WalletClientsPermission
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'WalletClientsPermission' do
  before do
    # run before each test
    @instance = MoleculeApi::WalletClientsPermission.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of WalletClientsPermission' do
    it 'should create an instance of WalletClientsPermission' do
      expect(@instance).to be_instance_of(MoleculeApi::WalletClientsPermission)
    end
  end
  describe 'test attribute "nucleus_client_id"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  describe 'test attribute "client_wallet_association_type"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
      # validator = Petstore::EnumTest::EnumAttributeValidator.new('String', ["joint", "owner", "trustee", "viewer", "admin"])
      # validator.allowable_values.each do |value|
      #   expect { @instance.client_wallet_association_type = value }.not_to raise_error
      # end
    end
  end

  describe 'test attribute "permission_type"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
      # validator = Petstore::EnumTest::EnumAttributeValidator.new('String', ["INQUIRY_ACCESS", "LIMITED_AUTHORITY", "POWER_OF_ATTORNEY", "FULL_AUTHORITY"])
      # validator.allowable_values.each do |value|
      #   expect { @instance.permission_type = value }.not_to raise_error
      # end
    end
  end

  describe 'test attribute "is_primary"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
