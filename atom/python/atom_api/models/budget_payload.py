# coding: utf-8

"""
    Hydrogen Atom API

    The Hydrogen Atom API  # noqa: E501

    OpenAPI spec version: 1.0.1
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six

from atom_api.models.budget_payload_aggregation_accounts import BudgetPayloadAggregationAccounts  # noqa: F401,E501
from atom_api.models.budget_payload_budget import BudgetPayloadBudget  # noqa: F401,E501
from atom_api.models.secondary_id import SecondaryId  # noqa: F401,E501


class BudgetPayload(object):
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
        'name': 'str',
        'client_id': 'str',
        'currency_code': 'str',
        'budget': 'list[BudgetPayloadBudget]',
        'frequency_unit': 'str',
        'frequency': 'float',
        'account_id': 'str',
        'goal_id': 'str',
        'aggregation_accounts': 'list[BudgetPayloadAggregationAccounts]',
        'start_date': 'date',
        'end_date': 'date',
        'metadata': 'object',
        'secondary_id': 'SecondaryId'
    }

    attribute_map = {
        'name': 'name',
        'client_id': 'client_id',
        'currency_code': 'currency_code',
        'budget': 'budget',
        'frequency_unit': 'frequency_unit',
        'frequency': 'frequency',
        'account_id': 'account_id',
        'goal_id': 'goal_id',
        'aggregation_accounts': 'aggregation_accounts',
        'start_date': 'start_date',
        'end_date': 'end date',
        'metadata': 'metadata',
        'secondary_id': 'secondary_id'
    }

    def __init__(self, name=None, client_id=None, currency_code=None, budget=None, frequency_unit=None, frequency=None, account_id=None, goal_id=None, aggregation_accounts=None, start_date=None, end_date=None, metadata=None, secondary_id=None):  # noqa: E501
        """BudgetPayload - a model defined in Swagger"""  # noqa: E501

        self._name = None
        self._client_id = None
        self._currency_code = None
        self._budget = None
        self._frequency_unit = None
        self._frequency = None
        self._account_id = None
        self._goal_id = None
        self._aggregation_accounts = None
        self._start_date = None
        self._end_date = None
        self._metadata = None
        self._secondary_id = None
        self.discriminator = None

        self.name = name
        self.client_id = client_id
        self.currency_code = currency_code
        self.budget = budget
        self.frequency_unit = frequency_unit
        if frequency is not None:
            self.frequency = frequency
        if account_id is not None:
            self.account_id = account_id
        if goal_id is not None:
            self.goal_id = goal_id
        if aggregation_accounts is not None:
            self.aggregation_accounts = aggregation_accounts
        if start_date is not None:
            self.start_date = start_date
        if end_date is not None:
            self.end_date = end_date
        if metadata is not None:
            self.metadata = metadata
        if secondary_id is not None:
            self.secondary_id = secondary_id

    @property
    def name(self):
        """Gets the name of this BudgetPayload.  # noqa: E501

        Name of the budget  # noqa: E501

        :return: The name of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._name

    @name.setter
    def name(self, name):
        """Sets the name of this BudgetPayload.

        Name of the budget  # noqa: E501

        :param name: The name of this BudgetPayload.  # noqa: E501
        :type: str
        """
        if name is None:
            raise ValueError("Invalid value for `name`, must not be `None`")  # noqa: E501

        self._name = name

    @property
    def client_id(self):
        """Gets the client_id of this BudgetPayload.  # noqa: E501

        The ID of the client the budget belongs to  # noqa: E501

        :return: The client_id of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """Sets the client_id of this BudgetPayload.

        The ID of the client the budget belongs to  # noqa: E501

        :param client_id: The client_id of this BudgetPayload.  # noqa: E501
        :type: str
        """
        if client_id is None:
            raise ValueError("Invalid value for `client_id`, must not be `None`")  # noqa: E501

        self._client_id = client_id

    @property
    def currency_code(self):
        """Gets the currency_code of this BudgetPayload.  # noqa: E501

        Alphabetic currency code for the base currency of the budget, limited to 3 characters.  # noqa: E501

        :return: The currency_code of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._currency_code

    @currency_code.setter
    def currency_code(self, currency_code):
        """Sets the currency_code of this BudgetPayload.

        Alphabetic currency code for the base currency of the budget, limited to 3 characters.  # noqa: E501

        :param currency_code: The currency_code of this BudgetPayload.  # noqa: E501
        :type: str
        """
        if currency_code is None:
            raise ValueError("Invalid value for `currency_code`, must not be `None`")  # noqa: E501

        self._currency_code = currency_code

    @property
    def budget(self):
        """Gets the budget of this BudgetPayload.  # noqa: E501


        :return: The budget of this BudgetPayload.  # noqa: E501
        :rtype: list[BudgetPayloadBudget]
        """
        return self._budget

    @budget.setter
    def budget(self, budget):
        """Sets the budget of this BudgetPayload.


        :param budget: The budget of this BudgetPayload.  # noqa: E501
        :type: list[BudgetPayloadBudget]
        """
        if budget is None:
            raise ValueError("Invalid value for `budget`, must not be `None`")  # noqa: E501

        self._budget = budget

    @property
    def frequency_unit(self):
        """Gets the frequency_unit of this BudgetPayload.  # noqa: E501

        Frequency of the budget. Value may be daily, weekly, bi-weekly, monthly, semi-monthly, quarterly, or annually  # noqa: E501

        :return: The frequency_unit of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._frequency_unit

    @frequency_unit.setter
    def frequency_unit(self, frequency_unit):
        """Sets the frequency_unit of this BudgetPayload.

        Frequency of the budget. Value may be daily, weekly, bi-weekly, monthly, semi-monthly, quarterly, or annually  # noqa: E501

        :param frequency_unit: The frequency_unit of this BudgetPayload.  # noqa: E501
        :type: str
        """
        if frequency_unit is None:
            raise ValueError("Invalid value for `frequency_unit`, must not be `None`")  # noqa: E501
        allowed_values = ["daily", "weekly", "bi-weekly", "monthly", "semi-monthly", "quarterly", "annually"]  # noqa: E501
        if frequency_unit not in allowed_values:
            raise ValueError(
                "Invalid value for `frequency_unit` ({0}), must be one of {1}"  # noqa: E501
                .format(frequency_unit, allowed_values)
            )

        self._frequency_unit = frequency_unit

    @property
    def frequency(self):
        """Gets the frequency of this BudgetPayload.  # noqa: E501

        Number of frequency_unit between each budget. For example, if the frequency_unit is weekly and the frequency is 2, this means the budget occurs every two weeks. Default is 1  # noqa: E501

        :return: The frequency of this BudgetPayload.  # noqa: E501
        :rtype: float
        """
        return self._frequency

    @frequency.setter
    def frequency(self, frequency):
        """Sets the frequency of this BudgetPayload.

        Number of frequency_unit between each budget. For example, if the frequency_unit is weekly and the frequency is 2, this means the budget occurs every two weeks. Default is 1  # noqa: E501

        :param frequency: The frequency of this BudgetPayload.  # noqa: E501
        :type: float
        """

        self._frequency = frequency

    @property
    def account_id(self):
        """Gets the account_id of this BudgetPayload.  # noqa: E501

        The ID of the account the budget belongs to  # noqa: E501

        :return: The account_id of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._account_id

    @account_id.setter
    def account_id(self, account_id):
        """Sets the account_id of this BudgetPayload.

        The ID of the account the budget belongs to  # noqa: E501

        :param account_id: The account_id of this BudgetPayload.  # noqa: E501
        :type: str
        """

        self._account_id = account_id

    @property
    def goal_id(self):
        """Gets the goal_id of this BudgetPayload.  # noqa: E501

        The ID of a goal mapped to the budget  # noqa: E501

        :return: The goal_id of this BudgetPayload.  # noqa: E501
        :rtype: str
        """
        return self._goal_id

    @goal_id.setter
    def goal_id(self, goal_id):
        """Sets the goal_id of this BudgetPayload.

        The ID of a goal mapped to the budget  # noqa: E501

        :param goal_id: The goal_id of this BudgetPayload.  # noqa: E501
        :type: str
        """

        self._goal_id = goal_id

    @property
    def aggregation_accounts(self):
        """Gets the aggregation_accounts of this BudgetPayload.  # noqa: E501


        :return: The aggregation_accounts of this BudgetPayload.  # noqa: E501
        :rtype: list[BudgetPayloadAggregationAccounts]
        """
        return self._aggregation_accounts

    @aggregation_accounts.setter
    def aggregation_accounts(self, aggregation_accounts):
        """Sets the aggregation_accounts of this BudgetPayload.


        :param aggregation_accounts: The aggregation_accounts of this BudgetPayload.  # noqa: E501
        :type: list[BudgetPayloadAggregationAccounts]
        """

        self._aggregation_accounts = aggregation_accounts

    @property
    def start_date(self):
        """Gets the start_date of this BudgetPayload.  # noqa: E501

        The start date for the budget  # noqa: E501

        :return: The start_date of this BudgetPayload.  # noqa: E501
        :rtype: date
        """
        return self._start_date

    @start_date.setter
    def start_date(self, start_date):
        """Sets the start_date of this BudgetPayload.

        The start date for the budget  # noqa: E501

        :param start_date: The start_date of this BudgetPayload.  # noqa: E501
        :type: date
        """

        self._start_date = start_date

    @property
    def end_date(self):
        """Gets the end_date of this BudgetPayload.  # noqa: E501

        The end date for the budget  # noqa: E501

        :return: The end_date of this BudgetPayload.  # noqa: E501
        :rtype: date
        """
        return self._end_date

    @end_date.setter
    def end_date(self, end_date):
        """Sets the end_date of this BudgetPayload.

        The end date for the budget  # noqa: E501

        :param end_date: The end_date of this BudgetPayload.  # noqa: E501
        :type: date
        """

        self._end_date = end_date

    @property
    def metadata(self):
        """Gets the metadata of this BudgetPayload.  # noqa: E501

        Custom information associated with the budget in the format key:value  # noqa: E501

        :return: The metadata of this BudgetPayload.  # noqa: E501
        :rtype: object
        """
        return self._metadata

    @metadata.setter
    def metadata(self, metadata):
        """Sets the metadata of this BudgetPayload.

        Custom information associated with the budget in the format key:value  # noqa: E501

        :param metadata: The metadata of this BudgetPayload.  # noqa: E501
        :type: object
        """

        self._metadata = metadata

    @property
    def secondary_id(self):
        """Gets the secondary_id of this BudgetPayload.  # noqa: E501


        :return: The secondary_id of this BudgetPayload.  # noqa: E501
        :rtype: SecondaryId
        """
        return self._secondary_id

    @secondary_id.setter
    def secondary_id(self, secondary_id):
        """Sets the secondary_id of this BudgetPayload.


        :param secondary_id: The secondary_id of this BudgetPayload.  # noqa: E501
        :type: SecondaryId
        """

        self._secondary_id = secondary_id

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
        if issubclass(BudgetPayload, dict):
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
        if not isinstance(other, BudgetPayload):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other