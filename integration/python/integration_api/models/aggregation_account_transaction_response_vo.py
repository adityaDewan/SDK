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


class AggregationAccountTransactionResponseVO(object):
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
        'message': 'str',
        'nucleus_aggregation_account_id': 'str',
        'nucleus_transactions_canceled': 'list[AggregationAccountTransactionResponseInternalObjectVO]',
        'nucleus_transactions_posted': 'list[AggregationAccountTransactionResponseInternalObjectVO]',
        'vendor_name': 'str'
    }

    attribute_map = {
        'message': 'message',
        'nucleus_aggregation_account_id': 'nucleus_aggregation_account_id',
        'nucleus_transactions_canceled': 'nucleus_transactions_canceled',
        'nucleus_transactions_posted': 'nucleus_transactions_posted',
        'vendor_name': 'vendor_name'
    }

    def __init__(self, message=None, nucleus_aggregation_account_id=None, nucleus_transactions_canceled=None, nucleus_transactions_posted=None, vendor_name=None):  # noqa: E501
        """AggregationAccountTransactionResponseVO - a model defined in Swagger"""  # noqa: E501

        self._message = None
        self._nucleus_aggregation_account_id = None
        self._nucleus_transactions_canceled = None
        self._nucleus_transactions_posted = None
        self._vendor_name = None
        self.discriminator = None

        if message is not None:
            self.message = message
        if nucleus_aggregation_account_id is not None:
            self.nucleus_aggregation_account_id = nucleus_aggregation_account_id
        if nucleus_transactions_canceled is not None:
            self.nucleus_transactions_canceled = nucleus_transactions_canceled
        if nucleus_transactions_posted is not None:
            self.nucleus_transactions_posted = nucleus_transactions_posted
        if vendor_name is not None:
            self.vendor_name = vendor_name

    @property
    def message(self):
        """Gets the message of this AggregationAccountTransactionResponseVO.  # noqa: E501


        :return: The message of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._message

    @message.setter
    def message(self, message):
        """Sets the message of this AggregationAccountTransactionResponseVO.


        :param message: The message of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :type: str
        """

        self._message = message

    @property
    def nucleus_aggregation_account_id(self):
        """Gets the nucleus_aggregation_account_id of this AggregationAccountTransactionResponseVO.  # noqa: E501


        :return: The nucleus_aggregation_account_id of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._nucleus_aggregation_account_id

    @nucleus_aggregation_account_id.setter
    def nucleus_aggregation_account_id(self, nucleus_aggregation_account_id):
        """Sets the nucleus_aggregation_account_id of this AggregationAccountTransactionResponseVO.


        :param nucleus_aggregation_account_id: The nucleus_aggregation_account_id of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :type: str
        """

        self._nucleus_aggregation_account_id = nucleus_aggregation_account_id

    @property
    def nucleus_transactions_canceled(self):
        """Gets the nucleus_transactions_canceled of this AggregationAccountTransactionResponseVO.  # noqa: E501


        :return: The nucleus_transactions_canceled of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :rtype: list[AggregationAccountTransactionResponseInternalObjectVO]
        """
        return self._nucleus_transactions_canceled

    @nucleus_transactions_canceled.setter
    def nucleus_transactions_canceled(self, nucleus_transactions_canceled):
        """Sets the nucleus_transactions_canceled of this AggregationAccountTransactionResponseVO.


        :param nucleus_transactions_canceled: The nucleus_transactions_canceled of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :type: list[AggregationAccountTransactionResponseInternalObjectVO]
        """

        self._nucleus_transactions_canceled = nucleus_transactions_canceled

    @property
    def nucleus_transactions_posted(self):
        """Gets the nucleus_transactions_posted of this AggregationAccountTransactionResponseVO.  # noqa: E501


        :return: The nucleus_transactions_posted of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :rtype: list[AggregationAccountTransactionResponseInternalObjectVO]
        """
        return self._nucleus_transactions_posted

    @nucleus_transactions_posted.setter
    def nucleus_transactions_posted(self, nucleus_transactions_posted):
        """Sets the nucleus_transactions_posted of this AggregationAccountTransactionResponseVO.


        :param nucleus_transactions_posted: The nucleus_transactions_posted of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :type: list[AggregationAccountTransactionResponseInternalObjectVO]
        """

        self._nucleus_transactions_posted = nucleus_transactions_posted

    @property
    def vendor_name(self):
        """Gets the vendor_name of this AggregationAccountTransactionResponseVO.  # noqa: E501


        :return: The vendor_name of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :rtype: str
        """
        return self._vendor_name

    @vendor_name.setter
    def vendor_name(self, vendor_name):
        """Sets the vendor_name of this AggregationAccountTransactionResponseVO.


        :param vendor_name: The vendor_name of this AggregationAccountTransactionResponseVO.  # noqa: E501
        :type: str
        """

        self._vendor_name = vendor_name

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
        if issubclass(AggregationAccountTransactionResponseVO, dict):
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
        if not isinstance(other, AggregationAccountTransactionResponseVO):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
