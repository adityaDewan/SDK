# coding: utf-8

"""
    Hydrogen Integration API

    The Hydrogen Integration API  # noqa: E501

    OpenAPI spec version: 1.2.1
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class PropertyValueResponseVO(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'integration_type': 'str',
        'nucleus_client_id': 'str',
        'product': 'str',
        'vendor_name': 'str',
        'vendor_response': 'ZillowPropertyVendorResponseVO'
    }

    attribute_map = {
        'integration_type': 'integration_type',
        'nucleus_client_id': 'nucleus_client_id',
        'product': 'product',
        'vendor_name': 'vendor_name',
        'vendor_response': 'vendor_response'
    }

    def __init__(self, integration_type=None, nucleus_client_id=None, product=None, vendor_name=None, vendor_response=None):  # noqa: E501
        """PropertyValueResponseVO - a model defined in Swagger"""  # noqa: E501

        self._integration_type = None
        self._nucleus_client_id = None
        self._product = None
        self._vendor_name = None
        self._vendor_response = None
        self.discriminator = None

        if integration_type is not None:
            self.integration_type = integration_type
        if nucleus_client_id is not None:
            self.nucleus_client_id = nucleus_client_id
        if product is not None:
            self.product = product
        if vendor_name is not None:
            self.vendor_name = vendor_name
        if vendor_response is not None:
            self.vendor_response = vendor_response

    @property
    def integration_type(self):
        """Gets the integration_type of this PropertyValueResponseVO.  # noqa: E501


        :return: The integration_type of this PropertyValueResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._integration_type

    @integration_type.setter
    def integration_type(self, integration_type):
        """Sets the integration_type of this PropertyValueResponseVO.


        :param integration_type: The integration_type of this PropertyValueResponseVO.  # noqa: E501
        :type: str
        """

        self._integration_type = integration_type

    @property
    def nucleus_client_id(self):
        """Gets the nucleus_client_id of this PropertyValueResponseVO.  # noqa: E501


        :return: The nucleus_client_id of this PropertyValueResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._nucleus_client_id

    @nucleus_client_id.setter
    def nucleus_client_id(self, nucleus_client_id):
        """Sets the nucleus_client_id of this PropertyValueResponseVO.


        :param nucleus_client_id: The nucleus_client_id of this PropertyValueResponseVO.  # noqa: E501
        :type: str
        """

        self._nucleus_client_id = nucleus_client_id

    @property
    def product(self):
        """Gets the product of this PropertyValueResponseVO.  # noqa: E501


        :return: The product of this PropertyValueResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._product

    @product.setter
    def product(self, product):
        """Sets the product of this PropertyValueResponseVO.


        :param product: The product of this PropertyValueResponseVO.  # noqa: E501
        :type: str
        """

        self._product = product

    @property
    def vendor_name(self):
        """Gets the vendor_name of this PropertyValueResponseVO.  # noqa: E501


        :return: The vendor_name of this PropertyValueResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._vendor_name

    @vendor_name.setter
    def vendor_name(self, vendor_name):
        """Sets the vendor_name of this PropertyValueResponseVO.


        :param vendor_name: The vendor_name of this PropertyValueResponseVO.  # noqa: E501
        :type: str
        """

        self._vendor_name = vendor_name

    @property
    def vendor_response(self):
        """Gets the vendor_response of this PropertyValueResponseVO.  # noqa: E501


        :return: The vendor_response of this PropertyValueResponseVO.  # noqa: E501
        :rtype: ZillowPropertyVendorResponseVO
        """
        return self._vendor_response

    @vendor_response.setter
    def vendor_response(self, vendor_response):
        """Sets the vendor_response of this PropertyValueResponseVO.


        :param vendor_response: The vendor_response of this PropertyValueResponseVO.  # noqa: E501
        :type: ZillowPropertyVendorResponseVO
        """

        self._vendor_response = vendor_response

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(PropertyValueResponseVO, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, PropertyValueResponseVO):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
