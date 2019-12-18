# coding: utf-8

"""
    Hydrogen Molecule API

    The Hydrogen Molecule API  # noqa: E501

    OpenAPI spec version: 1.0.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six

from molecule_api.models.webhook_create_payload import WebhookCreatePayload  # noqa: F401,E501


class WebhookCreateResponse(object):
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
        'molecule_service': 'list[str]',
        'url': 'str',
        'is_active': 'bool',
        'id': 'str',
        'create_date': 'str'
    }

    attribute_map = {
        'molecule_service': 'molecule_service',
        'url': 'url',
        'is_active': 'is_active',
        'id': 'id',
        'create_date': 'create_date'
    }

    def __init__(self, molecule_service=None, url=None, is_active=None, id=None, create_date=None):  # noqa: E501
        """WebhookCreateResponse - a model defined in Swagger"""  # noqa: E501

        self._molecule_service = None
        self._url = None
        self._is_active = None
        self._id = None
        self._create_date = None
        self.discriminator = None

        self.molecule_service = molecule_service
        self.url = url
        if is_active is not None:
            self.is_active = is_active
        if id is not None:
            self.id = id
        if create_date is not None:
            self.create_date = create_date

    @property
    def molecule_service(self):
        """Gets the molecule_service of this WebhookCreateResponse.  # noqa: E501

        The array of molecule services for a webhook to notify.  # noqa: E501

        :return: The molecule_service of this WebhookCreateResponse.  # noqa: E501
        :rtype: list[str]
        """
        return self._molecule_service

    @molecule_service.setter
    def molecule_service(self, molecule_service):
        """Sets the molecule_service of this WebhookCreateResponse.

        The array of molecule services for a webhook to notify.  # noqa: E501

        :param molecule_service: The molecule_service of this WebhookCreateResponse.  # noqa: E501
        :type: list[str]
        """
        if molecule_service is None:
            raise ValueError("Invalid value for `molecule_service`, must not be `None`")  # noqa: E501

        self._molecule_service = molecule_service

    @property
    def url(self):
        """Gets the url of this WebhookCreateResponse.  # noqa: E501

        The url you want to receive the payloads to.  # noqa: E501

        :return: The url of this WebhookCreateResponse.  # noqa: E501
        :rtype: str
        """
        return self._url

    @url.setter
    def url(self, url):
        """Sets the url of this WebhookCreateResponse.

        The url you want to receive the payloads to.  # noqa: E501

        :param url: The url of this WebhookCreateResponse.  # noqa: E501
        :type: str
        """
        if url is None:
            raise ValueError("Invalid value for `url`, must not be `None`")  # noqa: E501

        self._url = url

    @property
    def is_active(self):
        """Gets the is_active of this WebhookCreateResponse.  # noqa: E501

        Indicates if this webhook is active.  # noqa: E501

        :return: The is_active of this WebhookCreateResponse.  # noqa: E501
        :rtype: bool
        """
        return self._is_active

    @is_active.setter
    def is_active(self, is_active):
        """Sets the is_active of this WebhookCreateResponse.

        Indicates if this webhook is active.  # noqa: E501

        :param is_active: The is_active of this WebhookCreateResponse.  # noqa: E501
        :type: bool
        """

        self._is_active = is_active

    @property
    def id(self):
        """Gets the id of this WebhookCreateResponse.  # noqa: E501

        ID of the webhook record  # noqa: E501

        :return: The id of this WebhookCreateResponse.  # noqa: E501
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """Sets the id of this WebhookCreateResponse.

        ID of the webhook record  # noqa: E501

        :param id: The id of this WebhookCreateResponse.  # noqa: E501
        :type: str
        """

        self._id = id

    @property
    def create_date(self):
        """Gets the create_date of this WebhookCreateResponse.  # noqa: E501

        Datetime the webhook record was created  # noqa: E501

        :return: The create_date of this WebhookCreateResponse.  # noqa: E501
        :rtype: str
        """
        return self._create_date

    @create_date.setter
    def create_date(self, create_date):
        """Sets the create_date of this WebhookCreateResponse.

        Datetime the webhook record was created  # noqa: E501

        :param create_date: The create_date of this WebhookCreateResponse.  # noqa: E501
        :type: str
        """

        self._create_date = create_date

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
        if issubclass(WebhookCreateResponse, dict):
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
        if not isinstance(other, WebhookCreateResponse):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
