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


class BaseResponseVO(object):
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
        'card_status': 'str',
        'message': 'str',
        'nucleus_card_id': 'str',
        'vendor_name': 'str',
        'vendor_response': 'object'
    }

    attribute_map = {
        'card_status': 'card_status',
        'message': 'message',
        'nucleus_card_id': 'nucleus_card_id',
        'vendor_name': 'vendor_name',
        'vendor_response': 'vendor_response'
    }

    def __init__(self, card_status=None, message=None, nucleus_card_id=None, vendor_name=None, vendor_response=None):  # noqa: E501
        """BaseResponseVO - a model defined in Swagger"""  # noqa: E501

        self._card_status = None
        self._message = None
        self._nucleus_card_id = None
        self._vendor_name = None
        self._vendor_response = None
        self.discriminator = None

        if card_status is not None:
            self.card_status = card_status
        if message is not None:
            self.message = message
        if nucleus_card_id is not None:
            self.nucleus_card_id = nucleus_card_id
        if vendor_name is not None:
            self.vendor_name = vendor_name
        if vendor_response is not None:
            self.vendor_response = vendor_response

    @property
    def card_status(self):
        """Gets the card_status of this BaseResponseVO.  # noqa: E501


        :return: The card_status of this BaseResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._card_status

    @card_status.setter
    def card_status(self, card_status):
        """Sets the card_status of this BaseResponseVO.


        :param card_status: The card_status of this BaseResponseVO.  # noqa: E501
        :type: str
        """

        self._card_status = card_status

    @property
    def message(self):
        """Gets the message of this BaseResponseVO.  # noqa: E501


        :return: The message of this BaseResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._message

    @message.setter
    def message(self, message):
        """Sets the message of this BaseResponseVO.


        :param message: The message of this BaseResponseVO.  # noqa: E501
        :type: str
        """

        self._message = message

    @property
    def nucleus_card_id(self):
        """Gets the nucleus_card_id of this BaseResponseVO.  # noqa: E501


        :return: The nucleus_card_id of this BaseResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._nucleus_card_id

    @nucleus_card_id.setter
    def nucleus_card_id(self, nucleus_card_id):
        """Sets the nucleus_card_id of this BaseResponseVO.


        :param nucleus_card_id: The nucleus_card_id of this BaseResponseVO.  # noqa: E501
        :type: str
        """

        self._nucleus_card_id = nucleus_card_id

    @property
    def vendor_name(self):
        """Gets the vendor_name of this BaseResponseVO.  # noqa: E501


        :return: The vendor_name of this BaseResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._vendor_name

    @vendor_name.setter
    def vendor_name(self, vendor_name):
        """Sets the vendor_name of this BaseResponseVO.


        :param vendor_name: The vendor_name of this BaseResponseVO.  # noqa: E501
        :type: str
        """

        self._vendor_name = vendor_name

    @property
    def vendor_response(self):
        """Gets the vendor_response of this BaseResponseVO.  # noqa: E501


        :return: The vendor_response of this BaseResponseVO.  # noqa: E501
        :rtype: object
        """
        return self._vendor_response

    @vendor_response.setter
    def vendor_response(self, vendor_response):
        """Sets the vendor_response of this BaseResponseVO.


        :param vendor_response: The vendor_response of this BaseResponseVO.  # noqa: E501
        :type: object
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
        if issubclass(BaseResponseVO, dict):
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
        if not isinstance(other, BaseResponseVO):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
