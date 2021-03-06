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


class Accounting(object):
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
        'client_id': 'str',
        'create_date': 'datetime',
        'currency_code': 'str',
        'id': 'str',
        'metadata': 'dict(str, str)',
        'period_type': 'str',
        'period_year': 'int',
        'secondary_id': 'str',
        'stat_date': 'datetime',
        'stat_name': 'str',
        'stat_value': 'float',
        'update_date': 'datetime'
    }

    attribute_map = {
        'client_id': 'client_id',
        'create_date': 'create_date',
        'currency_code': 'currency_code',
        'id': 'id',
        'metadata': 'metadata',
        'period_type': 'period_type',
        'period_year': 'period_year',
        'secondary_id': 'secondary_id',
        'stat_date': 'stat_date',
        'stat_name': 'stat_name',
        'stat_value': 'stat_value',
        'update_date': 'update_date'
    }

    def __init__(self, client_id=None, create_date=None, currency_code=None, id=None, metadata=None, period_type=None, period_year=None, secondary_id=None, stat_date=None, stat_name=None, stat_value=None, update_date=None):  # noqa: E501
        """Accounting - a model defined in Swagger"""  # noqa: E501

        self._client_id = None
        self._create_date = None
        self._currency_code = None
        self._id = None
        self._metadata = None
        self._period_type = None
        self._period_year = None
        self._secondary_id = None
        self._stat_date = None
        self._stat_name = None
        self._stat_value = None
        self._update_date = None
        self.discriminator = None

        if client_id is not None:
            self.client_id = client_id
        if create_date is not None:
            self.create_date = create_date
        self.currency_code = currency_code
        if id is not None:
            self.id = id
        if metadata is not None:
            self.metadata = metadata
        if period_type is not None:
            self.period_type = period_type
        if period_year is not None:
            self.period_year = period_year
        if secondary_id is not None:
            self.secondary_id = secondary_id
        self.stat_date = stat_date
        self.stat_name = stat_name
        self.stat_value = stat_value
        if update_date is not None:
            self.update_date = update_date

    @property
    def client_id(self):
        """Gets the client_id of this Accounting.  # noqa: E501

        clientId  # noqa: E501

        :return: The client_id of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """Sets the client_id of this Accounting.

        clientId  # noqa: E501

        :param client_id: The client_id of this Accounting.  # noqa: E501
        :type: str
        """

        self._client_id = client_id

    @property
    def create_date(self):
        """Gets the create_date of this Accounting.  # noqa: E501


        :return: The create_date of this Accounting.  # noqa: E501
        :rtype: datetime
        """
        return self._create_date

    @create_date.setter
    def create_date(self, create_date):
        """Sets the create_date of this Accounting.


        :param create_date: The create_date of this Accounting.  # noqa: E501
        :type: datetime
        """

        self._create_date = create_date

    @property
    def currency_code(self):
        """Gets the currency_code of this Accounting.  # noqa: E501

        currencyCode  # noqa: E501

        :return: The currency_code of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._currency_code

    @currency_code.setter
    def currency_code(self, currency_code):
        """Sets the currency_code of this Accounting.

        currencyCode  # noqa: E501

        :param currency_code: The currency_code of this Accounting.  # noqa: E501
        :type: str
        """
        if currency_code is None:
            raise ValueError("Invalid value for `currency_code`, must not be `None`")  # noqa: E501

        self._currency_code = currency_code

    @property
    def id(self):
        """Gets the id of this Accounting.  # noqa: E501


        :return: The id of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """Sets the id of this Accounting.


        :param id: The id of this Accounting.  # noqa: E501
        :type: str
        """

        self._id = id

    @property
    def metadata(self):
        """Gets the metadata of this Accounting.  # noqa: E501


        :return: The metadata of this Accounting.  # noqa: E501
        :rtype: dict(str, str)
        """
        return self._metadata

    @metadata.setter
    def metadata(self, metadata):
        """Sets the metadata of this Accounting.


        :param metadata: The metadata of this Accounting.  # noqa: E501
        :type: dict(str, str)
        """

        self._metadata = metadata

    @property
    def period_type(self):
        """Gets the period_type of this Accounting.  # noqa: E501

        periodType  # noqa: E501

        :return: The period_type of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._period_type

    @period_type.setter
    def period_type(self, period_type):
        """Sets the period_type of this Accounting.

        periodType  # noqa: E501

        :param period_type: The period_type of this Accounting.  # noqa: E501
        :type: str
        """

        self._period_type = period_type

    @property
    def period_year(self):
        """Gets the period_year of this Accounting.  # noqa: E501

        periodYear  # noqa: E501

        :return: The period_year of this Accounting.  # noqa: E501
        :rtype: int
        """
        return self._period_year

    @period_year.setter
    def period_year(self, period_year):
        """Sets the period_year of this Accounting.

        periodYear  # noqa: E501

        :param period_year: The period_year of this Accounting.  # noqa: E501
        :type: int
        """

        self._period_year = period_year

    @property
    def secondary_id(self):
        """Gets the secondary_id of this Accounting.  # noqa: E501


        :return: The secondary_id of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._secondary_id

    @secondary_id.setter
    def secondary_id(self, secondary_id):
        """Sets the secondary_id of this Accounting.


        :param secondary_id: The secondary_id of this Accounting.  # noqa: E501
        :type: str
        """

        self._secondary_id = secondary_id

    @property
    def stat_date(self):
        """Gets the stat_date of this Accounting.  # noqa: E501

        statDate  # noqa: E501

        :return: The stat_date of this Accounting.  # noqa: E501
        :rtype: datetime
        """
        return self._stat_date

    @stat_date.setter
    def stat_date(self, stat_date):
        """Sets the stat_date of this Accounting.

        statDate  # noqa: E501

        :param stat_date: The stat_date of this Accounting.  # noqa: E501
        :type: datetime
        """
        if stat_date is None:
            raise ValueError("Invalid value for `stat_date`, must not be `None`")  # noqa: E501

        self._stat_date = stat_date

    @property
    def stat_name(self):
        """Gets the stat_name of this Accounting.  # noqa: E501

        statName  # noqa: E501

        :return: The stat_name of this Accounting.  # noqa: E501
        :rtype: str
        """
        return self._stat_name

    @stat_name.setter
    def stat_name(self, stat_name):
        """Sets the stat_name of this Accounting.

        statName  # noqa: E501

        :param stat_name: The stat_name of this Accounting.  # noqa: E501
        :type: str
        """
        if stat_name is None:
            raise ValueError("Invalid value for `stat_name`, must not be `None`")  # noqa: E501

        self._stat_name = stat_name

    @property
    def stat_value(self):
        """Gets the stat_value of this Accounting.  # noqa: E501

        statValue  # noqa: E501

        :return: The stat_value of this Accounting.  # noqa: E501
        :rtype: float
        """
        return self._stat_value

    @stat_value.setter
    def stat_value(self, stat_value):
        """Sets the stat_value of this Accounting.

        statValue  # noqa: E501

        :param stat_value: The stat_value of this Accounting.  # noqa: E501
        :type: float
        """
        if stat_value is None:
            raise ValueError("Invalid value for `stat_value`, must not be `None`")  # noqa: E501

        self._stat_value = stat_value

    @property
    def update_date(self):
        """Gets the update_date of this Accounting.  # noqa: E501


        :return: The update_date of this Accounting.  # noqa: E501
        :rtype: datetime
        """
        return self._update_date

    @update_date.setter
    def update_date(self, update_date):
        """Sets the update_date of this Accounting.


        :param update_date: The update_date of this Accounting.  # noqa: E501
        :type: datetime
        """

        self._update_date = update_date

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
        if issubclass(Accounting, dict):
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
        if not isinstance(other, Accounting):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
