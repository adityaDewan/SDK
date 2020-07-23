# coding: utf-8

"""
    Molecule API Documentation

    The Hydrogen Molecule API  # noqa: E501

    OpenAPI spec version: 1.3.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import re  # noqa: F401

# python 2 and python 3 compatibility library
import six

from molecule_api.api_client import ApiClient


class TokenBalanceApi(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def get_token_balance_all_using_get(self, **kwargs):  # noqa: E501
        """Fetch Token Balance list  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_token_balance_all_using_get(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str wallet_id: To filter response Token Balance list by wallet ID
        :param str token_id: To filter response Token Balance list by Token ID
        :param int page: To filter response Token Balance list by page number
        :param int size: Number of records per page
        :param str order_by: Field to sort record list
        :param bool ascending: Sorting order
        :param bool get_latest: To fetch latest (one) record
        :return: PageTokenBalanceResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_token_balance_all_using_get_with_http_info(**kwargs)  # noqa: E501
        else:
            (data) = self.get_token_balance_all_using_get_with_http_info(**kwargs)  # noqa: E501
            return data

    def get_token_balance_all_using_get_with_http_info(self, **kwargs):  # noqa: E501
        """Fetch Token Balance list  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_token_balance_all_using_get_with_http_info(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str wallet_id: To filter response Token Balance list by wallet ID
        :param str token_id: To filter response Token Balance list by Token ID
        :param int page: To filter response Token Balance list by page number
        :param int size: Number of records per page
        :param str order_by: Field to sort record list
        :param bool ascending: Sorting order
        :param bool get_latest: To fetch latest (one) record
        :return: PageTokenBalanceResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['wallet_id', 'token_id', 'page', 'size', 'order_by', 'ascending', 'get_latest']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_balance_all_using_get" % key
                )
            params[key] = val
        del params['kwargs']

        collection_formats = {}

        path_params = {}

        query_params = []
        if 'wallet_id' in params:
            query_params.append(('wallet_id', params['wallet_id']))  # noqa: E501
        if 'token_id' in params:
            query_params.append(('token_id', params['token_id']))  # noqa: E501
        if 'page' in params:
            query_params.append(('page', params['page']))  # noqa: E501
        if 'size' in params:
            query_params.append(('size', params['size']))  # noqa: E501
        if 'order_by' in params:
            query_params.append(('order_by', params['order_by']))  # noqa: E501
        if 'ascending' in params:
            query_params.append(('ascending', params['ascending']))  # noqa: E501
        if 'get_latest' in params:
            query_params.append(('get_latest', params['get_latest']))  # noqa: E501

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/token_balance', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='PageTokenBalanceResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_token_balance_using_get(self, token_balance_id, **kwargs):  # noqa: E501
        """Fetch Token Balance details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_token_balance_using_get(token_balance_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str token_balance_id: Token Balance ID (required)
        :return: TokenBalanceResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_token_balance_using_get_with_http_info(token_balance_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_token_balance_using_get_with_http_info(token_balance_id, **kwargs)  # noqa: E501
            return data

    def get_token_balance_using_get_with_http_info(self, token_balance_id, **kwargs):  # noqa: E501
        """Fetch Token Balance details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_token_balance_using_get_with_http_info(token_balance_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str token_balance_id: Token Balance ID (required)
        :return: TokenBalanceResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['token_balance_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_token_balance_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'token_balance_id' is set
        if ('token_balance_id' not in params or
                params['token_balance_id'] is None):
            raise ValueError("Missing the required parameter `token_balance_id` when calling `get_token_balance_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'token_balance_id' in params:
            path_params['token_balance_id'] = params['token_balance_id']  # noqa: E501

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/token_balance/{token_balance_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='TokenBalanceResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)
