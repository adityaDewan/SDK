# coding: utf-8

"""
    Hydrogen Proton API

    Financial engineering module of Hydrogen Atom  # noqa: E501

    OpenAPI spec version: 1.7.18
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class RebalancingSignalRequest(object):
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
        'start_date': 'date',
        'end_date': 'date',
        'model_id': 'str',
        'initial_weights': 'object',
        'settings': 'object',
        'update_model': 'bool'
    }

    attribute_map = {
        'start_date': 'start_date',
        'end_date': 'end_date',
        'model_id': 'model_id',
        'initial_weights': 'initial_weights',
        'settings': 'settings',
        'update_model': 'update_model'
    }

    def __init__(self, start_date=None, end_date=None, model_id=None, initial_weights=None, settings=None, update_model=False):  # noqa: E501
        """RebalancingSignalRequest - a model defined in Swagger"""  # noqa: E501

        self._start_date = None
        self._end_date = None
        self._model_id = None
        self._initial_weights = None
        self._settings = None
        self._update_model = None
        self.discriminator = None

        self.start_date = start_date
        self.end_date = end_date
        if model_id is not None:
            self.model_id = model_id
        if initial_weights is not None:
            self.initial_weights = initial_weights
        if settings is not None:
            self.settings = settings
        if update_model is not None:
            self.update_model = update_model

    @property
    def start_date(self):
        """Gets the start_date of this RebalancingSignalRequest.  # noqa: E501


        :return: The start_date of this RebalancingSignalRequest.  # noqa: E501
        :rtype: date
        """
        return self._start_date

    @start_date.setter
    def start_date(self, start_date):
        """Sets the start_date of this RebalancingSignalRequest.


        :param start_date: The start_date of this RebalancingSignalRequest.  # noqa: E501
        :type: date
        """
        if start_date is None:
            raise ValueError("Invalid value for `start_date`, must not be `None`")  # noqa: E501

        self._start_date = start_date

    @property
    def end_date(self):
        """Gets the end_date of this RebalancingSignalRequest.  # noqa: E501


        :return: The end_date of this RebalancingSignalRequest.  # noqa: E501
        :rtype: date
        """
        return self._end_date

    @end_date.setter
    def end_date(self, end_date):
        """Sets the end_date of this RebalancingSignalRequest.


        :param end_date: The end_date of this RebalancingSignalRequest.  # noqa: E501
        :type: date
        """
        if end_date is None:
            raise ValueError("Invalid value for `end_date`, must not be `None`")  # noqa: E501

        self._end_date = end_date

    @property
    def model_id(self):
        """Gets the model_id of this RebalancingSignalRequest.  # noqa: E501


        :return: The model_id of this RebalancingSignalRequest.  # noqa: E501
        :rtype: str
        """
        return self._model_id

    @model_id.setter
    def model_id(self, model_id):
        """Sets the model_id of this RebalancingSignalRequest.


        :param model_id: The model_id of this RebalancingSignalRequest.  # noqa: E501
        :type: str
        """

        self._model_id = model_id

    @property
    def initial_weights(self):
        """Gets the initial_weights of this RebalancingSignalRequest.  # noqa: E501


        :return: The initial_weights of this RebalancingSignalRequest.  # noqa: E501
        :rtype: object
        """
        return self._initial_weights

    @initial_weights.setter
    def initial_weights(self, initial_weights):
        """Sets the initial_weights of this RebalancingSignalRequest.


        :param initial_weights: The initial_weights of this RebalancingSignalRequest.  # noqa: E501
        :type: object
        """

        self._initial_weights = initial_weights

    @property
    def settings(self):
        """Gets the settings of this RebalancingSignalRequest.  # noqa: E501


        :return: The settings of this RebalancingSignalRequest.  # noqa: E501
        :rtype: object
        """
        return self._settings

    @settings.setter
    def settings(self, settings):
        """Sets the settings of this RebalancingSignalRequest.


        :param settings: The settings of this RebalancingSignalRequest.  # noqa: E501
        :type: object
        """

        self._settings = settings

    @property
    def update_model(self):
        """Gets the update_model of this RebalancingSignalRequest.  # noqa: E501


        :return: The update_model of this RebalancingSignalRequest.  # noqa: E501
        :rtype: bool
        """
        return self._update_model

    @update_model.setter
    def update_model(self, update_model):
        """Sets the update_model of this RebalancingSignalRequest.


        :param update_model: The update_model of this RebalancingSignalRequest.  # noqa: E501
        :type: bool
        """

        self._update_model = update_model

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
        if issubclass(RebalancingSignalRequest, dict):
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
        if not isinstance(other, RebalancingSignalRequest):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
