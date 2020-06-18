# coding: utf-8

"""
    Hydrogen Atom API

    The Hydrogen Atom API  # noqa: E501

    OpenAPI spec version: 1.7.0
    Contact: info@hydrogenplatform.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import re  # noqa: F401

# python 2 and python 3 compatibility library
import six

from nucleus_api.api_client import ApiClient


class BudgetApi(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def create_budget_using_post(self, budget_request, **kwargs):  # noqa: E501
        """Create a budget request  # noqa: E501

        Create a new budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_budget_using_post(budget_request, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param Budget budget_request: budgetRequest (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_budget_using_post_with_http_info(budget_request, **kwargs)  # noqa: E501
        else:
            (data) = self.create_budget_using_post_with_http_info(budget_request, **kwargs)  # noqa: E501
            return data

    def create_budget_using_post_with_http_info(self, budget_request, **kwargs):  # noqa: E501
        """Create a budget request  # noqa: E501

        Create a new budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_budget_using_post_with_http_info(budget_request, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param Budget budget_request: budgetRequest (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['budget_request']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_budget_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'budget_request' is set
        if ('budget_request' not in params or
                params['budget_request'] is None):
            raise ValueError("Missing the required parameter `budget_request` when calling `create_budget_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'budget_request' in params:
            body_params = params['budget_request']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/budget', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='Budget',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def delete_budget_using_delete(self, budget_id, **kwargs):  # noqa: E501
        """Delete a budget request  # noqa: E501

        Permanently delete a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.delete_budget_using_delete(budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str budget_id: UUID budget_id (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.delete_budget_using_delete_with_http_info(budget_id, **kwargs)  # noqa: E501
        else:
            (data) = self.delete_budget_using_delete_with_http_info(budget_id, **kwargs)  # noqa: E501
            return data

    def delete_budget_using_delete_with_http_info(self, budget_id, **kwargs):  # noqa: E501
        """Delete a budget request  # noqa: E501

        Permanently delete a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.delete_budget_using_delete_with_http_info(budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str budget_id: UUID budget_id (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['budget_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method delete_budget_using_delete" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'budget_id' is set
        if ('budget_id' not in params or
                params['budget_id'] is None):
            raise ValueError("Missing the required parameter `budget_id` when calling `delete_budget_using_delete`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'budget_id' in params:
            path_params['budget_id'] = params['budget_id']  # noqa: E501

        query_params = []

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
            '/budget/{budget_id}', 'DELETE',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type=None,  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_budget_all_using_get(self, **kwargs):  # noqa: E501
        """List all budget requests  # noqa: E501

        Get the information for all budget requests.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_budget_all_using_get(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param bool ascending: ascending
        :param str filter: filter
        :param str order_by: order_by
        :param int page: page
        :param int size: size
        :return: PageBudget
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_budget_all_using_get_with_http_info(**kwargs)  # noqa: E501
        else:
            (data) = self.get_budget_all_using_get_with_http_info(**kwargs)  # noqa: E501
            return data

    def get_budget_all_using_get_with_http_info(self, **kwargs):  # noqa: E501
        """List all budget requests  # noqa: E501

        Get the information for all budget requests.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_budget_all_using_get_with_http_info(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param bool ascending: ascending
        :param str filter: filter
        :param str order_by: order_by
        :param int page: page
        :param int size: size
        :return: PageBudget
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['ascending', 'filter', 'order_by', 'page', 'size']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_budget_all_using_get" % key
                )
            params[key] = val
        del params['kwargs']

        collection_formats = {}

        path_params = {}

        query_params = []
        if 'ascending' in params:
            query_params.append(('ascending', params['ascending']))  # noqa: E501
        if 'filter' in params:
            query_params.append(('filter', params['filter']))  # noqa: E501
        if 'order_by' in params:
            query_params.append(('order_by', params['order_by']))  # noqa: E501
        if 'page' in params:
            query_params.append(('page', params['page']))  # noqa: E501
        if 'size' in params:
            query_params.append(('size', params['size']))  # noqa: E501

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
            '/budget', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='PageBudget',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_budget_using_get(self, budget_id, **kwargs):  # noqa: E501
        """Retrieve a budget request  # noqa: E501

        Retrieve the information for a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_budget_using_get(budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str budget_id: UUID budget_id (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_budget_using_get_with_http_info(budget_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_budget_using_get_with_http_info(budget_id, **kwargs)  # noqa: E501
            return data

    def get_budget_using_get_with_http_info(self, budget_id, **kwargs):  # noqa: E501
        """Retrieve a budget request  # noqa: E501

        Retrieve the information for a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_budget_using_get_with_http_info(budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str budget_id: UUID budget_id (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['budget_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_budget_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'budget_id' is set
        if ('budget_id' not in params or
                params['budget_id'] is None):
            raise ValueError("Missing the required parameter `budget_id` when calling `get_budget_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'budget_id' in params:
            path_params['budget_id'] = params['budget_id']  # noqa: E501

        query_params = []

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
            '/budget/{budget_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='Budget',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def update_budget_using_put(self, budget, budget_id, **kwargs):  # noqa: E501
        """Update a budget request  # noqa: E501

        Update the information for a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_budget_using_put(budget, budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param Budget budget: budget (required)
        :param str budget_id: UUID budget_id (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.update_budget_using_put_with_http_info(budget, budget_id, **kwargs)  # noqa: E501
        else:
            (data) = self.update_budget_using_put_with_http_info(budget, budget_id, **kwargs)  # noqa: E501
            return data

    def update_budget_using_put_with_http_info(self, budget, budget_id, **kwargs):  # noqa: E501
        """Update a budget request  # noqa: E501

        Update the information for a budget request.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_budget_using_put_with_http_info(budget, budget_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param Budget budget: budget (required)
        :param str budget_id: UUID budget_id (required)
        :return: Budget
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['budget', 'budget_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method update_budget_using_put" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'budget' is set
        if ('budget' not in params or
                params['budget'] is None):
            raise ValueError("Missing the required parameter `budget` when calling `update_budget_using_put`")  # noqa: E501
        # verify the required parameter 'budget_id' is set
        if ('budget_id' not in params or
                params['budget_id'] is None):
            raise ValueError("Missing the required parameter `budget_id` when calling `update_budget_using_put`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'budget_id' in params:
            path_params['budget_id'] = params['budget_id']  # noqa: E501

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'budget' in params:
            body_params = params['budget']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/budget/{budget_id}', 'PUT',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='Budget',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)
