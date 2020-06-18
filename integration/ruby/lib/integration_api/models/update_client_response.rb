=begin
#Hydrogen Integration API

#The Hydrogen Integration API

OpenAPI spec version: 1.2.1
Contact: info@hydrogenplatform.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.4.14

=end

require 'date'

module IntegrationApi
  class UpdateClientResponse
    attr_accessor :ack_customer_agreement

    attr_accessor :ack_disclosure_rule14b

    attr_accessor :ack_finders_fee

    attr_accessor :ack_foreign_finders_fee

    attr_accessor :ack_joint_customer_agreement

    attr_accessor :ack_joint_disclosure_rule14b

    attr_accessor :ack_joint_finders_fee

    attr_accessor :ack_joint_foreign_finders_fee

    attr_accessor :ack_joint_market_data

    attr_accessor :ack_market_data

    attr_accessor :ack_signed_by

    attr_accessor :ack_signed_when

    attr_accessor :address_line1

    attr_accessor :address_line2

    attr_accessor :address_proof_review_by

    attr_accessor :address_proof_review_when

    attr_accessor :annual_income

    attr_accessor :annual_income_number

    attr_accessor :approved_by

    attr_accessor :approved_when

    attr_accessor :avatar_url

    attr_accessor :bad_password_count

    attr_accessor :brand_ambassador

    attr_accessor :citizenship

    attr_accessor :city

    attr_accessor :country_id

    attr_accessor :created_when

    attr_accessor :director

    attr_accessor :display_name

    attr_accessor :dob

    attr_accessor :email

    attr_accessor :employer_business

    attr_accessor :employer_company

    attr_accessor :employer_country_id

    attr_accessor :employer_is_broker

    attr_accessor :employment_status

    attr_accessor :employment_years

    attr_accessor :first_name

    attr_accessor :gender

    attr_accessor :id

    attr_accessor :id_no

    attr_accessor :investment_experience

    attr_accessor :investment_objectives

    attr_accessor :kyc_when

    attr_accessor :language_id

    attr_accessor :last_login_when

    attr_accessor :last_name

    attr_accessor :margin_default

    attr_accessor :marital_status

    attr_accessor :networth_liquid

    attr_accessor :networth_total

    attr_accessor :ownership_type

    attr_accessor :parent_ib

    attr_accessor :phone

    attr_accessor :picture_review_by

    attr_accessor :picture_review_when

    attr_accessor :politcally_exposed

    attr_accessor :referral_code

    attr_accessor :risk_tolerance

    attr_accessor :state_province

    attr_accessor :status

    attr_accessor :terms_of_use

    attr_accessor :updated_when

    attr_accessor :us_citizen

    attr_accessor :user_note_qty

    attr_accessor :user_type

    attr_accessor :username

    attr_accessor :wlp_id

    attr_accessor :zip_postal_code

    class EnumAttributeValidator
      attr_reader :datatype
      attr_reader :allowable_values

      def initialize(datatype, allowable_values)
        @allowable_values = allowable_values.map do |value|
          case datatype.to_s
          when /Integer/i
            value.to_i
          when /Float/i
            value.to_f
          else
            value
          end
        end
      end

      def valid?(value)
        !value || allowable_values.include?(value)
      end
    end

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
          :'ack_customer_agreement' => :'ack_customer_agreement',
          :'ack_disclosure_rule14b' => :'ack_disclosure_rule14b',
          :'ack_finders_fee' => :'ack_finders_fee',
          :'ack_foreign_finders_fee' => :'ack_foreign_finders_fee',
          :'ack_joint_customer_agreement' => :'ack_joint_customer_agreement',
          :'ack_joint_disclosure_rule14b' => :'ack_joint_disclosure_rule14b',
          :'ack_joint_finders_fee' => :'ack_joint_finders_fee',
          :'ack_joint_foreign_finders_fee' => :'ack_joint_foreign_finders_fee',
          :'ack_joint_market_data' => :'ack_joint_market_data',
          :'ack_market_data' => :'ack_market_data',
          :'ack_signed_by' => :'ack_signed_by',
          :'ack_signed_when' => :'ack_signed_when',
          :'address_line1' => :'address_line1',
          :'address_line2' => :'address_line2',
          :'address_proof_review_by' => :'address_proof_review_by',
          :'address_proof_review_when' => :'address_proof_review_when',
          :'annual_income' => :'annual_income',
          :'annual_income_number' => :'annual_income_number',
          :'approved_by' => :'approved_by',
          :'approved_when' => :'approved_when',
          :'avatar_url' => :'avatar_url',
          :'bad_password_count' => :'bad_password_count',
          :'brand_ambassador' => :'brand_ambassador',
          :'citizenship' => :'citizenship',
          :'city' => :'city',
          :'country_id' => :'country_id',
          :'created_when' => :'created_when',
          :'director' => :'director',
          :'display_name' => :'display_name',
          :'dob' => :'dob',
          :'email' => :'email',
          :'employer_business' => :'employer_business',
          :'employer_company' => :'employer_company',
          :'employer_country_id' => :'employer_country_id',
          :'employer_is_broker' => :'employer_is_broker',
          :'employment_status' => :'employment_status',
          :'employment_years' => :'employment_years',
          :'first_name' => :'first_name',
          :'gender' => :'gender',
          :'id' => :'id',
          :'id_no' => :'id_no',
          :'investment_experience' => :'investment_experience',
          :'investment_objectives' => :'investment_objectives',
          :'kyc_when' => :'kyc_when',
          :'language_id' => :'language_id',
          :'last_login_when' => :'last_login_when',
          :'last_name' => :'last_name',
          :'margin_default' => :'margin_default',
          :'marital_status' => :'marital_status',
          :'networth_liquid' => :'networth_liquid',
          :'networth_total' => :'networth_total',
          :'ownership_type' => :'ownership_type',
          :'parent_ib' => :'parent_ib',
          :'phone' => :'phone',
          :'picture_review_by' => :'picture_review_by',
          :'picture_review_when' => :'picture_review_when',
          :'politcally_exposed' => :'politcally_exposed',
          :'referral_code' => :'referral_code',
          :'risk_tolerance' => :'risk_tolerance',
          :'state_province' => :'state_province',
          :'status' => :'status',
          :'terms_of_use' => :'terms_of_use',
          :'updated_when' => :'updated_when',
          :'us_citizen' => :'us_citizen',
          :'user_note_qty' => :'user_note_qty',
          :'user_type' => :'user_type',
          :'username' => :'username',
          :'wlp_id' => :'wlp_id',
          :'zip_postal_code' => :'zip_postal_code'
      }
    end

    # Attribute type mapping.
    def self.swagger_types
      {
          :'ack_customer_agreement' => :'BOOLEAN',
          :'ack_disclosure_rule14b' => :'BOOLEAN',
          :'ack_finders_fee' => :'BOOLEAN',
          :'ack_foreign_finders_fee' => :'BOOLEAN',
          :'ack_joint_customer_agreement' => :'BOOLEAN',
          :'ack_joint_disclosure_rule14b' => :'BOOLEAN',
          :'ack_joint_finders_fee' => :'BOOLEAN',
          :'ack_joint_foreign_finders_fee' => :'BOOLEAN',
          :'ack_joint_market_data' => :'BOOLEAN',
          :'ack_market_data' => :'BOOLEAN',
          :'ack_signed_by' => :'String',
          :'ack_signed_when' => :'String',
          :'address_line1' => :'String',
          :'address_line2' => :'String',
          :'address_proof_review_by' => :'String',
          :'address_proof_review_when' => :'DateTime',
          :'annual_income' => :'String',
          :'annual_income_number' => :'Integer',
          :'approved_by' => :'String',
          :'approved_when' => :'DateTime',
          :'avatar_url' => :'String',
          :'bad_password_count' => :'Integer',
          :'brand_ambassador' => :'BOOLEAN',
          :'citizenship' => :'String',
          :'city' => :'String',
          :'country_id' => :'String',
          :'created_when' => :'DateTime',
          :'director' => :'BOOLEAN',
          :'display_name' => :'String',
          :'dob' => :'DateTime',
          :'email' => :'String',
          :'employer_business' => :'String',
          :'employer_company' => :'String',
          :'employer_country_id' => :'String',
          :'employer_is_broker' => :'BOOLEAN',
          :'employment_status' => :'ExpandedProperty',
          :'employment_years' => :'Integer',
          :'first_name' => :'String',
          :'gender' => :'ExpandedProperty',
          :'id' => :'String',
          :'id_no' => :'String',
          :'investment_experience' => :'ExpandedProperty',
          :'investment_objectives' => :'ExpandedProperty',
          :'kyc_when' => :'DateTime',
          :'language_id' => :'String',
          :'last_login_when' => :'DateTime',
          :'last_name' => :'String',
          :'margin_default' => :'Integer',
          :'marital_status' => :'ExpandedProperty',
          :'networth_liquid' => :'String',
          :'networth_total' => :'String',
          :'ownership_type' => :'String',
          :'parent_ib' => :'ParentIB',
          :'phone' => :'String',
          :'picture_review_by' => :'String',
          :'picture_review_when' => :'DateTime',
          :'politcally_exposed' => :'BOOLEAN',
          :'referral_code' => :'String',
          :'risk_tolerance' => :'String',
          :'state_province' => :'String',
          :'status' => :'ExpandedProperty',
          :'terms_of_use' => :'BOOLEAN',
          :'updated_when' => :'DateTime',
          :'us_citizen' => :'BOOLEAN',
          :'user_note_qty' => :'Integer',
          :'user_type' => :'ExpandedProperty',
          :'username' => :'String',
          :'wlp_id' => :'String',
          :'zip_postal_code' => :'Integer'
      }
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      return unless attributes.is_a?(Hash)

      # convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h| h[k.to_sym] = v }

      if attributes.has_key?(:'ack_customer_agreement')
        self.ack_customer_agreement = attributes[:'ack_customer_agreement']
      end

      if attributes.has_key?(:'ack_disclosure_rule14b')
        self.ack_disclosure_rule14b = attributes[:'ack_disclosure_rule14b']
      end

      if attributes.has_key?(:'ack_finders_fee')
        self.ack_finders_fee = attributes[:'ack_finders_fee']
      end

      if attributes.has_key?(:'ack_foreign_finders_fee')
        self.ack_foreign_finders_fee = attributes[:'ack_foreign_finders_fee']
      end

      if attributes.has_key?(:'ack_joint_customer_agreement')
        self.ack_joint_customer_agreement = attributes[:'ack_joint_customer_agreement']
      end

      if attributes.has_key?(:'ack_joint_disclosure_rule14b')
        self.ack_joint_disclosure_rule14b = attributes[:'ack_joint_disclosure_rule14b']
      end

      if attributes.has_key?(:'ack_joint_finders_fee')
        self.ack_joint_finders_fee = attributes[:'ack_joint_finders_fee']
      end

      if attributes.has_key?(:'ack_joint_foreign_finders_fee')
        self.ack_joint_foreign_finders_fee = attributes[:'ack_joint_foreign_finders_fee']
      end

      if attributes.has_key?(:'ack_joint_market_data')
        self.ack_joint_market_data = attributes[:'ack_joint_market_data']
      end

      if attributes.has_key?(:'ack_market_data')
        self.ack_market_data = attributes[:'ack_market_data']
      end

      if attributes.has_key?(:'ack_signed_by')
        self.ack_signed_by = attributes[:'ack_signed_by']
      end

      if attributes.has_key?(:'ack_signed_when')
        self.ack_signed_when = attributes[:'ack_signed_when']
      end

      if attributes.has_key?(:'address_line1')
        self.address_line1 = attributes[:'address_line1']
      end

      if attributes.has_key?(:'address_line2')
        self.address_line2 = attributes[:'address_line2']
      end

      if attributes.has_key?(:'address_proof_review_by')
        self.address_proof_review_by = attributes[:'address_proof_review_by']
      end

      if attributes.has_key?(:'address_proof_review_when')
        self.address_proof_review_when = attributes[:'address_proof_review_when']
      end

      if attributes.has_key?(:'annual_income')
        self.annual_income = attributes[:'annual_income']
      end

      if attributes.has_key?(:'annual_income_number')
        self.annual_income_number = attributes[:'annual_income_number']
      end

      if attributes.has_key?(:'approved_by')
        self.approved_by = attributes[:'approved_by']
      end

      if attributes.has_key?(:'approved_when')
        self.approved_when = attributes[:'approved_when']
      end

      if attributes.has_key?(:'avatar_url')
        self.avatar_url = attributes[:'avatar_url']
      end

      if attributes.has_key?(:'bad_password_count')
        self.bad_password_count = attributes[:'bad_password_count']
      end

      if attributes.has_key?(:'brand_ambassador')
        self.brand_ambassador = attributes[:'brand_ambassador']
      end

      if attributes.has_key?(:'citizenship')
        self.citizenship = attributes[:'citizenship']
      end

      if attributes.has_key?(:'city')
        self.city = attributes[:'city']
      end

      if attributes.has_key?(:'country_id')
        self.country_id = attributes[:'country_id']
      end

      if attributes.has_key?(:'created_when')
        self.created_when = attributes[:'created_when']
      end

      if attributes.has_key?(:'director')
        self.director = attributes[:'director']
      end

      if attributes.has_key?(:'display_name')
        self.display_name = attributes[:'display_name']
      end

      if attributes.has_key?(:'dob')
        self.dob = attributes[:'dob']
      end

      if attributes.has_key?(:'email')
        self.email = attributes[:'email']
      end

      if attributes.has_key?(:'employer_business')
        self.employer_business = attributes[:'employer_business']
      end

      if attributes.has_key?(:'employer_company')
        self.employer_company = attributes[:'employer_company']
      end

      if attributes.has_key?(:'employer_country_id')
        self.employer_country_id = attributes[:'employer_country_id']
      end

      if attributes.has_key?(:'employer_is_broker')
        self.employer_is_broker = attributes[:'employer_is_broker']
      end

      if attributes.has_key?(:'employment_status')
        self.employment_status = attributes[:'employment_status']
      end

      if attributes.has_key?(:'employment_years')
        self.employment_years = attributes[:'employment_years']
      end

      if attributes.has_key?(:'first_name')
        self.first_name = attributes[:'first_name']
      end

      if attributes.has_key?(:'gender')
        self.gender = attributes[:'gender']
      end

      if attributes.has_key?(:'id')
        self.id = attributes[:'id']
      end

      if attributes.has_key?(:'id_no')
        self.id_no = attributes[:'id_no']
      end

      if attributes.has_key?(:'investment_experience')
        self.investment_experience = attributes[:'investment_experience']
      end

      if attributes.has_key?(:'investment_objectives')
        self.investment_objectives = attributes[:'investment_objectives']
      end

      if attributes.has_key?(:'kyc_when')
        self.kyc_when = attributes[:'kyc_when']
      end

      if attributes.has_key?(:'language_id')
        self.language_id = attributes[:'language_id']
      end

      if attributes.has_key?(:'last_login_when')
        self.last_login_when = attributes[:'last_login_when']
      end

      if attributes.has_key?(:'last_name')
        self.last_name = attributes[:'last_name']
      end

      if attributes.has_key?(:'margin_default')
        self.margin_default = attributes[:'margin_default']
      end

      if attributes.has_key?(:'marital_status')
        self.marital_status = attributes[:'marital_status']
      end

      if attributes.has_key?(:'networth_liquid')
        self.networth_liquid = attributes[:'networth_liquid']
      end

      if attributes.has_key?(:'networth_total')
        self.networth_total = attributes[:'networth_total']
      end

      if attributes.has_key?(:'ownership_type')
        self.ownership_type = attributes[:'ownership_type']
      end

      if attributes.has_key?(:'parent_ib')
        self.parent_ib = attributes[:'parent_ib']
      end

      if attributes.has_key?(:'phone')
        self.phone = attributes[:'phone']
      end

      if attributes.has_key?(:'picture_review_by')
        self.picture_review_by = attributes[:'picture_review_by']
      end

      if attributes.has_key?(:'picture_review_when')
        self.picture_review_when = attributes[:'picture_review_when']
      end

      if attributes.has_key?(:'politcally_exposed')
        self.politcally_exposed = attributes[:'politcally_exposed']
      end

      if attributes.has_key?(:'referral_code')
        self.referral_code = attributes[:'referral_code']
      end

      if attributes.has_key?(:'risk_tolerance')
        self.risk_tolerance = attributes[:'risk_tolerance']
      end

      if attributes.has_key?(:'state_province')
        self.state_province = attributes[:'state_province']
      end

      if attributes.has_key?(:'status')
        self.status = attributes[:'status']
      end

      if attributes.has_key?(:'terms_of_use')
        self.terms_of_use = attributes[:'terms_of_use']
      end

      if attributes.has_key?(:'updated_when')
        self.updated_when = attributes[:'updated_when']
      end

      if attributes.has_key?(:'us_citizen')
        self.us_citizen = attributes[:'us_citizen']
      end

      if attributes.has_key?(:'user_note_qty')
        self.user_note_qty = attributes[:'user_note_qty']
      end

      if attributes.has_key?(:'user_type')
        self.user_type = attributes[:'user_type']
      end

      if attributes.has_key?(:'username')
        self.username = attributes[:'username']
      end

      if attributes.has_key?(:'wlp_id')
        self.wlp_id = attributes[:'wlp_id']
      end

      if attributes.has_key?(:'zip_postal_code')
        self.zip_postal_code = attributes[:'zip_postal_code']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      language_id_validator = EnumAttributeValidator.new('String', ['en_US', 'zh_CN', 'es_ES', 'pt_BR'])
      return false unless language_id_validator.valid?(@language_id)
      true
    end

    # Custom attribute writer method checking allowed values (enum).
    # @param [Object] language_id Object to be assigned
    def language_id=(language_id)
      validator = EnumAttributeValidator.new('String', ['en_US', 'zh_CN', 'es_ES', 'pt_BR'])
      unless validator.valid?(language_id)
        fail ArgumentError, 'invalid value for "language_id", must be one of #{validator.allowable_values}.'
      end
      @language_id = language_id
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          ack_customer_agreement == o.ack_customer_agreement &&
          ack_disclosure_rule14b == o.ack_disclosure_rule14b &&
          ack_finders_fee == o.ack_finders_fee &&
          ack_foreign_finders_fee == o.ack_foreign_finders_fee &&
          ack_joint_customer_agreement == o.ack_joint_customer_agreement &&
          ack_joint_disclosure_rule14b == o.ack_joint_disclosure_rule14b &&
          ack_joint_finders_fee == o.ack_joint_finders_fee &&
          ack_joint_foreign_finders_fee == o.ack_joint_foreign_finders_fee &&
          ack_joint_market_data == o.ack_joint_market_data &&
          ack_market_data == o.ack_market_data &&
          ack_signed_by == o.ack_signed_by &&
          ack_signed_when == o.ack_signed_when &&
          address_line1 == o.address_line1 &&
          address_line2 == o.address_line2 &&
          address_proof_review_by == o.address_proof_review_by &&
          address_proof_review_when == o.address_proof_review_when &&
          annual_income == o.annual_income &&
          annual_income_number == o.annual_income_number &&
          approved_by == o.approved_by &&
          approved_when == o.approved_when &&
          avatar_url == o.avatar_url &&
          bad_password_count == o.bad_password_count &&
          brand_ambassador == o.brand_ambassador &&
          citizenship == o.citizenship &&
          city == o.city &&
          country_id == o.country_id &&
          created_when == o.created_when &&
          director == o.director &&
          display_name == o.display_name &&
          dob == o.dob &&
          email == o.email &&
          employer_business == o.employer_business &&
          employer_company == o.employer_company &&
          employer_country_id == o.employer_country_id &&
          employer_is_broker == o.employer_is_broker &&
          employment_status == o.employment_status &&
          employment_years == o.employment_years &&
          first_name == o.first_name &&
          gender == o.gender &&
          id == o.id &&
          id_no == o.id_no &&
          investment_experience == o.investment_experience &&
          investment_objectives == o.investment_objectives &&
          kyc_when == o.kyc_when &&
          language_id == o.language_id &&
          last_login_when == o.last_login_when &&
          last_name == o.last_name &&
          margin_default == o.margin_default &&
          marital_status == o.marital_status &&
          networth_liquid == o.networth_liquid &&
          networth_total == o.networth_total &&
          ownership_type == o.ownership_type &&
          parent_ib == o.parent_ib &&
          phone == o.phone &&
          picture_review_by == o.picture_review_by &&
          picture_review_when == o.picture_review_when &&
          politcally_exposed == o.politcally_exposed &&
          referral_code == o.referral_code &&
          risk_tolerance == o.risk_tolerance &&
          state_province == o.state_province &&
          status == o.status &&
          terms_of_use == o.terms_of_use &&
          updated_when == o.updated_when &&
          us_citizen == o.us_citizen &&
          user_note_qty == o.user_note_qty &&
          user_type == o.user_type &&
          username == o.username &&
          wlp_id == o.wlp_id &&
          zip_postal_code == o.zip_postal_code
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Fixnum] Hash code
    def hash
      [ack_customer_agreement, ack_disclosure_rule14b, ack_finders_fee, ack_foreign_finders_fee, ack_joint_customer_agreement, ack_joint_disclosure_rule14b, ack_joint_finders_fee, ack_joint_foreign_finders_fee, ack_joint_market_data, ack_market_data, ack_signed_by, ack_signed_when, address_line1, address_line2, address_proof_review_by, address_proof_review_when, annual_income, annual_income_number, approved_by, approved_when, avatar_url, bad_password_count, brand_ambassador, citizenship, city, country_id, created_when, director, display_name, dob, email, employer_business, employer_company, employer_country_id, employer_is_broker, employment_status, employment_years, first_name, gender, id, id_no, investment_experience, investment_objectives, kyc_when, language_id, last_login_when, last_name, margin_default, marital_status, networth_liquid, networth_total, ownership_type, parent_ib, phone, picture_review_by, picture_review_when, politcally_exposed, referral_code, risk_tolerance, state_province, status, terms_of_use, updated_when, us_citizen, user_note_qty, user_type, username, wlp_id, zip_postal_code].hash
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def build_from_hash(attributes)
      self.class.swagger_types.each_pair do |key, type|
        if type =~ /\AArray<(.*)>/i
          # check to ensure the input is an array given that the the attribute
          # is documented as an array but the input is not
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map { |v| _deserialize($1, v) })
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        elsif attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", attributes[self.class.attribute_map[key]])
        end # or else data not found in attributes(hash), not an issue as the data can be optional
      end
      self
    end

    # Deserializes the data based on type
    # @param string type Data type
    # @param string value Value to be deserialized
    # @return [Object] Deserialized data
    def _deserialize(type, value)
      case type.to_sym
      when :DateTime
        value
      when :Date
        value
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :BOOLEAN
        if value.to_s =~ /\A(true|t|yes|y|1)\z/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+?), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        temp_model = IntegrationApi.const_get(type).new
        temp_model.build_from_hash(value)
      end
    end

    # Returns the string representation of the object
    # @return [String] String presentation of the object
    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_hash (backward compatibility)
    # @return [Hash] Returns the object in the form of hash
    def to_body
      to_hash
    end

    # Returns the object in the form of hash
    # @return [Hash] Returns the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        hash[param] = _to_hash(value)
      end
      hash
    end

    # Outputs non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    # @param [Object] value Any valid value
    # @return [Hash] Returns the value in the form of hash
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map { |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end
end
