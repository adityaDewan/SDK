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


class PortfolioComment(object):
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
        'account_id': 'str',
        'create_date': 'datetime',
        'id': 'str',
        'is_read': 'bool',
        'model_comment_id': 'str',
        'model_id': 'str',
        'portfolio_id': 'str',
        'secondary_id': 'str',
        'update_date': 'datetime'
    }

    attribute_map = {
        'account_id': 'account_id',
        'create_date': 'create_date',
        'id': 'id',
        'is_read': 'is_read',
        'model_comment_id': 'model_comment_id',
        'model_id': 'model_id',
        'portfolio_id': 'portfolio_id',
        'secondary_id': 'secondary_id',
        'update_date': 'update_date'
    }

    def __init__(self, account_id=None, create_date=None, id=None, is_read=None, model_comment_id=None, model_id=None, portfolio_id=None, secondary_id=None, update_date=None):  # noqa: E501
        """PortfolioComment - a model defined in Swagger"""  # noqa: E501

        self._account_id = None
        self._create_date = None
        self._id = None
        self._is_read = None
        self._model_comment_id = None
        self._model_id = None
        self._portfolio_id = None
        self._secondary_id = None
        self._update_date = None
        self.discriminator = None

        self.account_id = account_id
        if create_date is not None:
            self.create_date = create_date
        if id is not None:
            self.id = id
        if is_read is not None:
            self.is_read = is_read
        self.model_comment_id = model_comment_id
        self.model_id = model_id
        self.portfolio_id = portfolio_id
        if secondary_id is not None:
            self.secondary_id = secondary_id
        if update_date is not None:
            self.update_date = update_date

    @property
    def account_id(self):
        """Gets the account_id of this PortfolioComment.  # noqa: E501

        accountId  # noqa: E501

        :return: The account_id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._account_id

    @account_id.setter
    def account_id(self, account_id):
        """Sets the account_id of this PortfolioComment.

        accountId  # noqa: E501

        :param account_id: The account_id of this PortfolioComment.  # noqa: E501
        :type: str
        """
        if account_id is None:
            raise ValueError("Invalid value for `account_id`, must not be `None`")  # noqa: E501

        self._account_id = account_id

    @property
    def create_date(self):
        """Gets the create_date of this PortfolioComment.  # noqa: E501


        :return: The create_date of this PortfolioComment.  # noqa: E501
        :rtype: datetime
        """
        return self._create_date

    @create_date.setter
    def create_date(self, create_date):
        """Sets the create_date of this PortfolioComment.


        :param create_date: The create_date of this PortfolioComment.  # noqa: E501
        :type: datetime
        """

        self._create_date = create_date

    @property
    def id(self):
        """Gets the id of this PortfolioComment.  # noqa: E501


        :return: The id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """Sets the id of this PortfolioComment.


        :param id: The id of this PortfolioComment.  # noqa: E501
        :type: str
        """

        self._id = id

    @property
    def is_read(self):
        """Gets the is_read of this PortfolioComment.  # noqa: E501

        isRead  # noqa: E501

        :return: The is_read of this PortfolioComment.  # noqa: E501
        :rtype: bool
        """
        return self._is_read

    @is_read.setter
    def is_read(self, is_read):
        """Sets the is_read of this PortfolioComment.

        isRead  # noqa: E501

        :param is_read: The is_read of this PortfolioComment.  # noqa: E501
        :type: bool
        """

        self._is_read = is_read

    @property
    def model_comment_id(self):
        """Gets the model_comment_id of this PortfolioComment.  # noqa: E501

        modelCommentId  # noqa: E501

        :return: The model_comment_id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._model_comment_id

    @model_comment_id.setter
    def model_comment_id(self, model_comment_id):
        """Sets the model_comment_id of this PortfolioComment.

        modelCommentId  # noqa: E501

        :param model_comment_id: The model_comment_id of this PortfolioComment.  # noqa: E501
        :type: str
        """
        if model_comment_id is None:
            raise ValueError("Invalid value for `model_comment_id`, must not be `None`")  # noqa: E501

        self._model_comment_id = model_comment_id

    @property
    def model_id(self):
        """Gets the model_id of this PortfolioComment.  # noqa: E501

        modelId  # noqa: E501

        :return: The model_id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._model_id

    @model_id.setter
    def model_id(self, model_id):
        """Sets the model_id of this PortfolioComment.

        modelId  # noqa: E501

        :param model_id: The model_id of this PortfolioComment.  # noqa: E501
        :type: str
        """
        if model_id is None:
            raise ValueError("Invalid value for `model_id`, must not be `None`")  # noqa: E501

        self._model_id = model_id

    @property
    def portfolio_id(self):
        """Gets the portfolio_id of this PortfolioComment.  # noqa: E501

        portfolioId  # noqa: E501

        :return: The portfolio_id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._portfolio_id

    @portfolio_id.setter
    def portfolio_id(self, portfolio_id):
        """Sets the portfolio_id of this PortfolioComment.

        portfolioId  # noqa: E501

        :param portfolio_id: The portfolio_id of this PortfolioComment.  # noqa: E501
        :type: str
        """
        if portfolio_id is None:
            raise ValueError("Invalid value for `portfolio_id`, must not be `None`")  # noqa: E501

        self._portfolio_id = portfolio_id

    @property
    def secondary_id(self):
        """Gets the secondary_id of this PortfolioComment.  # noqa: E501


        :return: The secondary_id of this PortfolioComment.  # noqa: E501
        :rtype: str
        """
        return self._secondary_id

    @secondary_id.setter
    def secondary_id(self, secondary_id):
        """Sets the secondary_id of this PortfolioComment.


        :param secondary_id: The secondary_id of this PortfolioComment.  # noqa: E501
        :type: str
        """

        self._secondary_id = secondary_id

    @property
    def update_date(self):
        """Gets the update_date of this PortfolioComment.  # noqa: E501


        :return: The update_date of this PortfolioComment.  # noqa: E501
        :rtype: datetime
        """
        return self._update_date

    @update_date.setter
    def update_date(self, update_date):
        """Sets the update_date of this PortfolioComment.


        :param update_date: The update_date of this PortfolioComment.  # noqa: E501
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
        if issubclass(PortfolioComment, dict):
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
        if not isinstance(other, PortfolioComment):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other