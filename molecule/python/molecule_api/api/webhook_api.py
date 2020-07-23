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


class WebhookApi(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def create_webhook_using_post(self, webhook_params, **kwargs):  # noqa: E501
        """Creates a new Webhook record  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_webhook_using_post(webhook_params, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param WebhookParams webhook_params: It enables a user to create a Webhook record (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_webhook_using_post_with_http_info(webhook_params, **kwargs)  # noqa: E501
        else:
            (data) = self.create_webhook_using_post_with_http_info(webhook_params, **kwargs)  # noqa: E501
            return data

    def create_webhook_using_post_with_http_info(self, webhook_params, **kwargs):  # noqa: E501
        """Creates a new Webhook record  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_webhook_using_post_with_http_info(webhook_params, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param WebhookParams webhook_params: It enables a user to create a Webhook record (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['webhook_params']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_webhook_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'webhook_params' is set
        if ('webhook_params' not in params or
                params['webhook_params'] is None):
            raise ValueError("Missing the required parameter `webhook_params` when calling `create_webhook_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'webhook_params' in params:
            body_params = params['webhook_params']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/webhook', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='WebhookResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def delete_webhook_using_delete(self, webhook_id, **kwargs):  # noqa: E501
        """Delete Webhook  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.delete_webhook_using_delete(webhook_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.delete_webhook_using_delete_with_http_info(webhook_id, **kwargs)  # noqa: E501
        else:
            (data) = self.delete_webhook_using_delete_with_http_info(webhook_id, **kwargs)  # noqa: E501
            return data

    def delete_webhook_using_delete_with_http_info(self, webhook_id, **kwargs):  # noqa: E501
        """Delete Webhook  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.delete_webhook_using_delete_with_http_info(webhook_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :return: None
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['webhook_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method delete_webhook_using_delete" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'webhook_id' is set
        if ('webhook_id' not in params or
                params['webhook_id'] is None):
            raise ValueError("Missing the required parameter `webhook_id` when calling `delete_webhook_using_delete`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'webhook_id' in params:
            path_params['webhook_id'] = params['webhook_id']  # noqa: E501

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
            '/webhook/{webhook_id}', 'DELETE',
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

    def get_webhook_all_using_get(self, **kwargs):  # noqa: E501
        """Fetch Webhook list  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_webhook_all_using_get(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param int page: To filter response webhook list by page number
        :param int size: Number of records per page
        :param str order_by: Field to sort record list
        :param bool ascending: Sorting order
        :param bool get_latest: To fetch latest (one) record
        :return: PageWebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_webhook_all_using_get_with_http_info(**kwargs)  # noqa: E501
        else:
            (data) = self.get_webhook_all_using_get_with_http_info(**kwargs)  # noqa: E501
            return data

    def get_webhook_all_using_get_with_http_info(self, **kwargs):  # noqa: E501
        """Fetch Webhook list  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_webhook_all_using_get_with_http_info(async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param int page: To filter response webhook list by page number
        :param int size: Number of records per page
        :param str order_by: Field to sort record list
        :param bool ascending: Sorting order
        :param bool get_latest: To fetch latest (one) record
        :return: PageWebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['page', 'size', 'order_by', 'ascending', 'get_latest']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_webhook_all_using_get" % key
                )
            params[key] = val
        del params['kwargs']

        collection_formats = {}

        path_params = {}

        query_params = []
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
            '/webhook', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='PageWebhookResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_webhook_using_get(self, webhook_id, **kwargs):  # noqa: E501
        """Fetch Webhook details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_webhook_using_get(webhook_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_webhook_using_get_with_http_info(webhook_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_webhook_using_get_with_http_info(webhook_id, **kwargs)  # noqa: E501
            return data

    def get_webhook_using_get_with_http_info(self, webhook_id, **kwargs):  # noqa: E501
        """Fetch Webhook details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_webhook_using_get_with_http_info(webhook_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['webhook_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_webhook_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'webhook_id' is set
        if ('webhook_id' not in params or
                params['webhook_id'] is None):
            raise ValueError("Missing the required parameter `webhook_id` when calling `get_webhook_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'webhook_id' in params:
            path_params['webhook_id'] = params['webhook_id']  # noqa: E501

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
            '/webhook/{webhook_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='WebhookResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def update_webhook_using_put(self, webhook_id, webhook_update_params, **kwargs):  # noqa: E501
        """Update Webhook details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_webhook_using_put(webhook_id, webhook_update_params, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :param WebhookParams webhook_update_params: Webhook details to be updated (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.update_webhook_using_put_with_http_info(webhook_id, webhook_update_params, **kwargs)  # noqa: E501
        else:
            (data) = self.update_webhook_using_put_with_http_info(webhook_id, webhook_update_params, **kwargs)  # noqa: E501
            return data

    def update_webhook_using_put_with_http_info(self, webhook_id, webhook_update_params, **kwargs):  # noqa: E501
        """Update Webhook details  # noqa: E501

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.update_webhook_using_put_with_http_info(webhook_id, webhook_update_params, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str webhook_id: Webhook ID (required)
        :param WebhookParams webhook_update_params: Webhook details to be updated (required)
        :return: WebhookResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['webhook_id', 'webhook_update_params']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method update_webhook_using_put" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'webhook_id' is set
        if ('webhook_id' not in params or
                params['webhook_id'] is None):
            raise ValueError("Missing the required parameter `webhook_id` when calling `update_webhook_using_put`")  # noqa: E501
        # verify the required parameter 'webhook_update_params' is set
        if ('webhook_update_params' not in params or
                params['webhook_update_params'] is None):
            raise ValueError("Missing the required parameter `webhook_update_params` when calling `update_webhook_using_put`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'webhook_id' in params:
            path_params['webhook_id'] = params['webhook_id']  # noqa: E501

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'webhook_update_params' in params:
            body_params = params['webhook_update_params']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/webhook/{webhook_id}', 'PUT',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='WebhookResponse',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)
