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


class IAVApi(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def create_iav_using_post(self, iav_request_co, **kwargs):  # noqa: E501
        """Instant Account Verification of an account.  # noqa: E501

        Endpoint is used to verify account.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_iav_using_post(iav_request_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param IavCO iav_request_co: iavRequestCO (required)
        :return: IavResponseVo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.create_iav_using_post_with_http_info(iav_request_co, **kwargs)  # noqa: E501
        else:
            (data) = self.create_iav_using_post_with_http_info(iav_request_co, **kwargs)  # noqa: E501
            return data

    def create_iav_using_post_with_http_info(self, iav_request_co, **kwargs):  # noqa: E501
        """Instant Account Verification of an account.  # noqa: E501

        Endpoint is used to verify account.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.create_iav_using_post_with_http_info(iav_request_co, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param IavCO iav_request_co: iavRequestCO (required)
        :return: IavResponseVo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['iav_request_co']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method create_iav_using_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'iav_request_co' is set
        if ('iav_request_co' not in params or
                params['iav_request_co'] is None):
            raise ValueError("Missing the required parameter `iav_request_co` when calling `create_iav_using_post`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'iav_request_co' in params:
            body_params = params['iav_request_co']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['*/*'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json'])  # noqa: E501

        # Authentication setting
        auth_settings = ['oauth2']  # noqa: E501

        return self.api_client.call_api(
            '/iav', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='IavResponseVo',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def get_iav_using_get(self, nucleus_bank_link_id, **kwargs):  # noqa: E501
        """Get verified account based on id.  # noqa: E501

        Get verified account based on id.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_iav_using_get(nucleus_bank_link_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_bank_link_id: nucleus_bank_link_id (required)
        :return: IavResponseVo
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.get_iav_using_get_with_http_info(nucleus_bank_link_id, **kwargs)  # noqa: E501
        else:
            (data) = self.get_iav_using_get_with_http_info(nucleus_bank_link_id, **kwargs)  # noqa: E501
            return data

    def get_iav_using_get_with_http_info(self, nucleus_bank_link_id, **kwargs):  # noqa: E501
        """Get verified account based on id.  # noqa: E501

        Get verified account based on id.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True
        >>> thread = api.get_iav_using_get_with_http_info(nucleus_bank_link_id, async_req=True)
        >>> result = thread.get()

        :param async_req bool
        :param str nucleus_bank_link_id: nucleus_bank_link_id (required)
        :return: IavResponseVo
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['nucleus_bank_link_id']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method get_iav_using_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'nucleus_bank_link_id' is set
        if ('nucleus_bank_link_id' not in params or
                params['nucleus_bank_link_id'] is None):
            raise ValueError("Missing the required parameter `nucleus_bank_link_id` when calling `get_iav_using_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'nucleus_bank_link_id' in params:
            path_params['nucleus_bank_link_id'] = params['nucleus_bank_link_id']  # noqa: E501

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
            '/iav/{nucleus_bank_link_id}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='IavResponseVo',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)
