# coding: utf-8

"""
    Hydrogen Integration API

    The Hydrogen Integration API  # noqa: E501

    OpenAPI spec version: 1.2.1
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import re  # noqa: F401

# python 2 and python 3 compatibility library
import six

from integration_api.api_client import ApiClient


class BaasApi(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def create_baas_account_using_post(self, baas_account_co, **kwargs):  # noqa: E501
        """create a Baas account  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_account_using_post(baas_account_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasAccountCO baas_account_co: baasAccountCO (required)
        :return: BaasAccountVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_baas_account_using_post_with_http_info(baas_account_co, **kwargs)  # noqa: E501
        else:
            (data) = self.create_baas_account_using_post_with_http_info(baas_account_co, **kwargs)  # noqa: E501
            return data

    def create_baas_account_using_post_with_http_info(self, baas_account_co, **kwargs):  # noqa: E501
        """create a Baas account  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_account_using_post_with_http_info(baas_account_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasAccountCO baas_account_co: baasAccountCO (required)
        :return: BaasAccountVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['baas_account_co']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_baas_account_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'baas_account_co' is set
        if ('baas_account_co' not in params or
                params['baas_account_co'] is None):
            raise ValueError("Missing the required parameter `baas_account_co` when calling `create_baas_account_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'baas_account_co' in params:
            body_params = params['baas_account_co']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/account', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasAccountVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def create_baas_client_using_post(self, baas_client_co, **kwargs):  # noqa: E501
        """Create a Baas Client  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_client_using_post(baas_client_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasClientCO baas_client_co: baasClientCO (required)
        :return: BaasClientVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_baas_client_using_post_with_http_info(baas_client_co, **kwargs)  # noqa: E501
        else:
            (data) = self.create_baas_client_using_post_with_http_info(baas_client_co, **kwargs)  # noqa: E501
            return data

    def create_baas_client_using_post_with_http_info(self, baas_client_co, **kwargs):  # noqa: E501
        """Create a Baas Client  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_client_using_post_with_http_info(baas_client_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasClientCO baas_client_co: baasClientCO (required)
        :return: BaasClientVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['baas_client_co']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_baas_client_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'baas_client_co' is set
        if ('baas_client_co' not in params or
                params['baas_client_co'] is None):
            raise ValueError("Missing the required parameter `baas_client_co` when calling `create_baas_client_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'baas_client_co' in params:
            body_params = params['baas_client_co']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/client', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasClientVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def create_baas_sub_account_using_post(self, baas_sub_account_co, **kwargs):  # noqa: E501
        """create a Baas subaccount  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_sub_account_using_post(baas_sub_account_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasSubAccountCO baas_sub_account_co: baasSubAccountCO (required)
        :return: BaasSubAccountVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_baas_sub_account_using_post_with_http_info(baas_sub_account_co, **kwargs)  # noqa: E501
        else:
            (data) = self.create_baas_sub_account_using_post_with_http_info(baas_sub_account_co, **kwargs)  # noqa: E501
            return data

    def create_baas_sub_account_using_post_with_http_info(self, baas_sub_account_co, **kwargs):  # noqa: E501
        """create a Baas subaccount  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_baas_sub_account_using_post_with_http_info(baas_sub_account_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasSubAccountCO baas_sub_account_co: baasSubAccountCO (required)
        :return: BaasSubAccountVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['baas_sub_account_co']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_baas_sub_account_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'baas_sub_account_co' is set
        if ('baas_sub_account_co' not in params or
                params['baas_sub_account_co'] is None):
            raise ValueError("Missing the required parameter `baas_sub_account_co` when calling `create_baas_sub_account_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'baas_sub_account_co' in params:
            body_params = params['baas_sub_account_co']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/subaccount', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasSubAccountVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_baas_account_statement_using_get(self, end_date, nucleus_account_id, start_date, **kwargs):  # noqa: E501
        """Get a Baas account statement  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_account_statement_using_get(end_date, nucleus_account_id, start_date, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param date end_date: end_date (required)
        :param str nucleus_account_id: nucleus_account_id (required)
        :param date start_date: start_date (required)
        :param str statement_type: statement_type
        :return: BaasStatementsVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_baas_account_statement_using_get_with_http_info(end_date, nucleus_account_id, start_date, **kwargs)  # noqa: E501
        else:
            (data) = self.get_baas_account_statement_using_get_with_http_info(end_date, nucleus_account_id, start_date, **kwargs)  # noqa: E501
            return data

    def get_baas_account_statement_using_get_with_http_info(self, end_date, nucleus_account_id, start_date, **kwargs):  # noqa: E501
        """Get a Baas account statement  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_account_statement_using_get_with_http_info(end_date, nucleus_account_id, start_date, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param date end_date: end_date (required)
        :param str nucleus_account_id: nucleus_account_id (required)
        :param date start_date: start_date (required)
        :param str statement_type: statement_type
        :return: BaasStatementsVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['end_date', 'nucleus_account_id', 'start_date', 'statement_type']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_baas_account_statement_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'end_date' is set
        if ('end_date' not in params or
                params['end_date'] is None):
            raise ValueError("Missing the required parameter `end_date` when calling `get_baas_account_statement_using_get`")  # noqa: E501
        # verify the required parameter 'nucleus_account_id' is set
        if ('nucleus_account_id' not in params or
                params['nucleus_account_id'] is None):
            raise ValueError("Missing the required parameter `nucleus_account_id` when calling `get_baas_account_statement_using_get`")  # noqa: E501
        # verify the required parameter 'start_date' is set
        if ('start_date' not in params or
                params['start_date'] is None):
            raise ValueError("Missing the required parameter `start_date` when calling `get_baas_account_statement_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'nucleus_account_id' in params:
            path_params['nucleus_account_id'] = params['nucleus_account_id']  # noqa: E501

        query_params = []
        if 'end_date' in params:
            query_params.append(('end_date', params['end_date']))  # noqa: E501
        if 'start_date' in params:
            query_params.append(('start_date', params['start_date']))  # noqa: E501
        if 'statement_type' in params:
            query_params.append(('statement_type', params['statement_type']))  # noqa: E501

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/statement/{nucleus_account_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasStatementsVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_baas_portfolio_balance_using_get(self, nucleus_portfolio_id, **kwargs):  # noqa: E501
        """Get a Baas portfolio balance  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_portfolio_balance_using_get(nucleus_portfolio_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_portfolio_id: nucleus_portfolio_id (required)
        :param date end_date: end_date
        :param date start_date: start_date
        :return: BaasBalanceVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_baas_portfolio_balance_using_get_with_http_info(nucleus_portfolio_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_baas_portfolio_balance_using_get_with_http_info(nucleus_portfolio_id, **kwargs)  # noqa: E501
            return data

    def get_baas_portfolio_balance_using_get_with_http_info(self, nucleus_portfolio_id, **kwargs):  # noqa: E501
        """Get a Baas portfolio balance  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_portfolio_balance_using_get_with_http_info(nucleus_portfolio_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_portfolio_id: nucleus_portfolio_id (required)
        :param date end_date: end_date
        :param date start_date: start_date
        :return: BaasBalanceVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['nucleus_portfolio_id', 'end_date', 'start_date']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_baas_portfolio_balance_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'nucleus_portfolio_id' is set
        if ('nucleus_portfolio_id' not in params or
                params['nucleus_portfolio_id'] is None):
            raise ValueError("Missing the required parameter `nucleus_portfolio_id` when calling `get_baas_portfolio_balance_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'nucleus_portfolio_id' in params:
            path_params['nucleus_portfolio_id'] = params['nucleus_portfolio_id']  # noqa: E501

        query_params = []
        if 'end_date' in params:
            query_params.append(('end_date', params['end_date']))  # noqa: E501
        if 'start_date' in params:
            query_params.append(('start_date', params['start_date']))  # noqa: E501

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/balance/{nucleus_portfolio_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasBalanceVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_baas_portfolio_transaction_using_get(self, nucleus_portfolio_id, **kwargs):  # noqa: E501
        """Get a Baas portfolio transaction  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_portfolio_transaction_using_get(nucleus_portfolio_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_portfolio_id: nucleus_portfolio_id (required)
        :param date end_date: end_date
        :param date start_date: start_date
        :return: BaasTransactionsVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_baas_portfolio_transaction_using_get_with_http_info(nucleus_portfolio_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_baas_portfolio_transaction_using_get_with_http_info(nucleus_portfolio_id, **kwargs)  # noqa: E501
            return data

    def get_baas_portfolio_transaction_using_get_with_http_info(self, nucleus_portfolio_id, **kwargs):  # noqa: E501
        """Get a Baas portfolio transaction  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_baas_portfolio_transaction_using_get_with_http_info(nucleus_portfolio_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_portfolio_id: nucleus_portfolio_id (required)
        :param date end_date: end_date
        :param date start_date: start_date
        :return: BaasTransactionsVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['nucleus_portfolio_id', 'end_date', 'start_date']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_baas_portfolio_transaction_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'nucleus_portfolio_id' is set
        if ('nucleus_portfolio_id' not in params or
                params['nucleus_portfolio_id'] is None):
            raise ValueError("Missing the required parameter `nucleus_portfolio_id` when calling `get_baas_portfolio_transaction_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'nucleus_portfolio_id' in params:
            path_params['nucleus_portfolio_id'] = params['nucleus_portfolio_id']  # noqa: E501

        query_params = []
        if 'end_date' in params:
            query_params.append(('end_date', params['end_date']))  # noqa: E501
        if 'start_date' in params:
            query_params.append(('start_date', params['start_date']))  # noqa: E501

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/transaction/{nucleus_portfolio_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasTransactionsVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def update_baas_client_using_put(self, baas_client_co, **kwargs):  # noqa: E501
        """Update a Baas client  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_baas_client_using_put(baas_client_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasClientCO baas_client_co: baasClientCO (required)
        :return: BaasClientVO
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.update_baas_client_using_put_with_http_info(baas_client_co, **kwargs)  # noqa: E501
        else:
            (data) = self.update_baas_client_using_put_with_http_info(baas_client_co, **kwargs)  # noqa: E501
            return data

    def update_baas_client_using_put_with_http_info(self, baas_client_co, **kwargs):  # noqa: E501
        """Update a Baas client  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_baas_client_using_put_with_http_info(baas_client_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param BaasClientCO baas_client_co: baasClientCO (required)
        :return: BaasClientVO
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['baas_client_co']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method update_baas_client_using_put" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'baas_client_co' is set
        if ('baas_client_co' not in params or
                params['baas_client_co'] is None):
            raise ValueError("Missing the required parameter `baas_client_co` when calling `update_baas_client_using_put`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'baas_client_co' in params:
            body_params = params['baas_client_co']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/baas/client', 'PUT',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='BaasClientVO',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)
