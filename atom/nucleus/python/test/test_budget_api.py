# coding: utf-8

"""
    Hydrogen Atom API

    The Hydrogen Atom API  # noqa: E501

    OpenAPI spec version: 1.7.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import unittest

import nucleus_api
from nucleus_api.api.budget_api import BudgetApi  # noqa: E501
from nucleus_api.rest import ApiException


class TestBudgetApi(unittest.TestCase):
    """BudgetApi unit test stubs"""

    def setUp(self):
        self.api = nucleus_api.api.budget_api.BudgetApi()  # noqa: E501

    def tearDown(self):
        pass

    def test_create_budget_using_post(self):
        """Test case for create_budget_using_post

        Create a budget request  # noqa: E501
        """
        pass

    def test_delete_budget_using_delete(self):
        """Test case for delete_budget_using_delete

        Delete a budget request  # noqa: E501
        """
        pass

    def test_get_budget_all_using_get(self):
        """Test case for get_budget_all_using_get

        List all budget requests  # noqa: E501
        """
        pass

    def test_get_budget_using_get(self):
        """Test case for get_budget_using_get

        Retrieve a budget request  # noqa: E501
        """
        pass

    def test_update_budget_using_put(self):
        """Test case for update_budget_using_put

        Update a budget request  # noqa: E501
        """
        pass


if __name__ == '__main__':
    unittest.main()
