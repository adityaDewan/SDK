# coding: utf-8

"""
    Molecule API Documentation

    The Hydrogen Molecule API  # noqa: E501

    OpenAPI spec version: 1.3.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import unittest

import molecule_api
from molecule_api.api.transaction_status_api import TransactionStatusApi  # noqa: E501
from molecule_api.rest import ApiException


class TestTransactionStatusApi(unittest.TestCase):
    """TransactionStatusApi unit test stubs"""

    def setUp(self):
        self.api = molecule_api.api.transaction_status_api.TransactionStatusApi()  # noqa: E501

    def tearDown(self):
        pass

    def test_get_transaction_status_all_using_get(self):
        """Test case for get_transaction_status_all_using_get

        Fetch Transaction Status list  # noqa: E501
        """
        pass

    def test_get_transaction_status_using_get(self):
        """Test case for get_transaction_status_using_get

        Fetch Transaction record details  # noqa: E501
        """
        pass


if __name__ == '__main__':
    unittest.main()
