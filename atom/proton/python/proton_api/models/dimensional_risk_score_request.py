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


class DimensionalRiskScoreRequest(object):
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
        'dim_weights': 'list[float]',
        'answer_weights': 'list[float]',
        'client_id': 'str',
        'dims': 'list[str]',
        'answer_dims': 'list[list[str]]',
        'answers': 'list[float]',
        'max_answers': 'list[float]',
        'questionnaire_id': 'str',
        'post_score': 'bool'
    }

    attribute_map = {
        'dim_weights': 'dim_weights',
        'answer_weights': 'answer_weights',
        'client_id': 'client_id',
        'dims': 'dims',
        'answer_dims': 'answer_dims',
        'answers': 'answers',
        'max_answers': 'max_answers',
        'questionnaire_id': 'questionnaire_id',
        'post_score': 'post_score'
    }

    def __init__(self, dim_weights=None, answer_weights=None, client_id=None, dims=None, answer_dims=None, answers=None, max_answers=None, questionnaire_id=None, post_score=False):  # noqa: E501
        """DimensionalRiskScoreRequest - a model defined in Swagger"""  # noqa: E501

        self._dim_weights = None
        self._answer_weights = None
        self._client_id = None
        self._dims = None
        self._answer_dims = None
        self._answers = None
        self._max_answers = None
        self._questionnaire_id = None
        self._post_score = None
        self.discriminator = None

        if dim_weights is not None:
            self.dim_weights = dim_weights
        if answer_weights is not None:
            self.answer_weights = answer_weights
        if client_id is not None:
            self.client_id = client_id
        self.dims = dims
        self.answer_dims = answer_dims
        if answers is not None:
            self.answers = answers
        self.max_answers = max_answers
        if questionnaire_id is not None:
            self.questionnaire_id = questionnaire_id
        if post_score is not None:
            self.post_score = post_score

    @property
    def dim_weights(self):
        """Gets the dim_weights of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The dim_weights of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[float]
        """
        return self._dim_weights

    @dim_weights.setter
    def dim_weights(self, dim_weights):
        """Sets the dim_weights of this DimensionalRiskScoreRequest.


        :param dim_weights: The dim_weights of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[float]
        """

        self._dim_weights = dim_weights

    @property
    def answer_weights(self):
        """Gets the answer_weights of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The answer_weights of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[float]
        """
        return self._answer_weights

    @answer_weights.setter
    def answer_weights(self, answer_weights):
        """Sets the answer_weights of this DimensionalRiskScoreRequest.


        :param answer_weights: The answer_weights of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[float]
        """

        self._answer_weights = answer_weights

    @property
    def client_id(self):
        """Gets the client_id of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The client_id of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: str
        """
        return self._client_id

    @client_id.setter
    def client_id(self, client_id):
        """Sets the client_id of this DimensionalRiskScoreRequest.


        :param client_id: The client_id of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: str
        """

        self._client_id = client_id

    @property
    def dims(self):
        """Gets the dims of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The dims of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[str]
        """
        return self._dims

    @dims.setter
    def dims(self, dims):
        """Sets the dims of this DimensionalRiskScoreRequest.


        :param dims: The dims of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[str]
        """
        if dims is None:
            raise ValueError("Invalid value for `dims`, must not be `None`")  # noqa: E501

        self._dims = dims

    @property
    def answer_dims(self):
        """Gets the answer_dims of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The answer_dims of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[list[str]]
        """
        return self._answer_dims

    @answer_dims.setter
    def answer_dims(self, answer_dims):
        """Sets the answer_dims of this DimensionalRiskScoreRequest.


        :param answer_dims: The answer_dims of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[list[str]]
        """
        if answer_dims is None:
            raise ValueError("Invalid value for `answer_dims`, must not be `None`")  # noqa: E501

        self._answer_dims = answer_dims

    @property
    def answers(self):
        """Gets the answers of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The answers of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[float]
        """
        return self._answers

    @answers.setter
    def answers(self, answers):
        """Sets the answers of this DimensionalRiskScoreRequest.


        :param answers: The answers of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[float]
        """

        self._answers = answers

    @property
    def max_answers(self):
        """Gets the max_answers of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The max_answers of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: list[float]
        """
        return self._max_answers

    @max_answers.setter
    def max_answers(self, max_answers):
        """Sets the max_answers of this DimensionalRiskScoreRequest.


        :param max_answers: The max_answers of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: list[float]
        """
        if max_answers is None:
            raise ValueError("Invalid value for `max_answers`, must not be `None`")  # noqa: E501

        self._max_answers = max_answers

    @property
    def questionnaire_id(self):
        """Gets the questionnaire_id of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The questionnaire_id of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: str
        """
        return self._questionnaire_id

    @questionnaire_id.setter
    def questionnaire_id(self, questionnaire_id):
        """Sets the questionnaire_id of this DimensionalRiskScoreRequest.


        :param questionnaire_id: The questionnaire_id of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: str
        """

        self._questionnaire_id = questionnaire_id

    @property
    def post_score(self):
        """Gets the post_score of this DimensionalRiskScoreRequest.  # noqa: E501


        :return: The post_score of this DimensionalRiskScoreRequest.  # noqa: E501
        :rtype: bool
        """
        return self._post_score

    @post_score.setter
    def post_score(self, post_score):
        """Sets the post_score of this DimensionalRiskScoreRequest.


        :param post_score: The post_score of this DimensionalRiskScoreRequest.  # noqa: E501
        :type: bool
        """

        self._post_score = post_score

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
        if issubclass(DimensionalRiskScoreRequest, dict):
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
        if not isinstance(other, DimensionalRiskScoreRequest):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
