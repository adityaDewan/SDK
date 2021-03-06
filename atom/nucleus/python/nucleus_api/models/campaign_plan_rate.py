# coding: utf-8

"""
    Hydrogen Atom API

    The Hydrogen Atom API  # noqa: E501

    OpenAPI spec version: 1.7.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class CampaignPlanRate(object):
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
        'max_asset': 'float',
        'min_asset': 'float',
        'rate': 'float'
    }

    attribute_map = {
        'max_asset': 'max_asset',
        'min_asset': 'min_asset',
        'rate': 'rate'
    }

    def __init__(self, max_asset=None, min_asset=None, rate=None):  # noqa: E501
        """CampaignPlanRate - a model defined in Swagger"""  # noqa: E501

        self._max_asset = None
        self._min_asset = None
        self._rate = None
        self.discriminator = None

        self.max_asset = max_asset
        self.min_asset = min_asset
        self.rate = rate

    @property
    def max_asset(self):
        """Gets the max_asset of this CampaignPlanRate.  # noqa: E501

        maxAsset  # noqa: E501

        :return: The max_asset of this CampaignPlanRate.  # noqa: E501
        :rtype: float
        """
        return self._max_asset

    @max_asset.setter
    def max_asset(self, max_asset):
        """Sets the max_asset of this CampaignPlanRate.

        maxAsset  # noqa: E501

        :param max_asset: The max_asset of this CampaignPlanRate.  # noqa: E501
        :type: float
        """
        if max_asset is None:
            raise ValueError("Invalid value for `max_asset`, must not be `None`")  # noqa: E501

        self._max_asset = max_asset

    @property
    def min_asset(self):
        """Gets the min_asset of this CampaignPlanRate.  # noqa: E501

        maxAsset  # noqa: E501

        :return: The min_asset of this CampaignPlanRate.  # noqa: E501
        :rtype: float
        """
        return self._min_asset

    @min_asset.setter
    def min_asset(self, min_asset):
        """Sets the min_asset of this CampaignPlanRate.

        maxAsset  # noqa: E501

        :param min_asset: The min_asset of this CampaignPlanRate.  # noqa: E501
        :type: float
        """
        if min_asset is None:
            raise ValueError("Invalid value for `min_asset`, must not be `None`")  # noqa: E501

        self._min_asset = min_asset

    @property
    def rate(self):
        """Gets the rate of this CampaignPlanRate.  # noqa: E501

        maxAsset  # noqa: E501

        :return: The rate of this CampaignPlanRate.  # noqa: E501
        :rtype: float
        """
        return self._rate

    @rate.setter
    def rate(self, rate):
        """Sets the rate of this CampaignPlanRate.

        maxAsset  # noqa: E501

        :param rate: The rate of this CampaignPlanRate.  # noqa: E501
        :type: float
        """
        if rate is None:
            raise ValueError("Invalid value for `rate`, must not be `None`")  # noqa: E501

        self._rate = rate

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
        if issubclass(CampaignPlanRate, dict):
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
        if not isinstance(other, CampaignPlanRate):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
