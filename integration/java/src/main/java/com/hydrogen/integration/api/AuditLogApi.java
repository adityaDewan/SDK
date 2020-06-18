/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.integration.api;

import com.hydrogen.integration.ApiCallback;
import com.hydrogen.integration.ApiClient;
import com.hydrogen.integration.ApiException;
import com.hydrogen.integration.ApiResponse;
import com.hydrogen.integration.Configuration;
import com.hydrogen.integration.Pair;
import com.hydrogen.integration.ProgressRequestBody;
import com.hydrogen.integration.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import com.hydrogen.integration.model.Pageobject;
import org.threeten.bp.OffsetDateTime;

import java.util.UUID;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class AuditLogApi {
    private ApiClient apiClient;

    public AuditLogApi() {
        this(Configuration.getDefaultApiClient());
    }

    public AuditLogApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for getAuditLogAllUsingGet
     * @param ascending ascending (optional, default to false)
     * @param endDate end_date (optional, default to null)
     * @param event event (optional)
     * @param integrationType integration_type (optional)
     * @param isRequest is_request (optional, default to false)
     * @param nucleusClientId nucleus_client_id (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param requestType request_type (optional)
     * @param size size (optional, default to 25)
     * @param startDate start_date (optional, default to null)
     * @param vendorName vendor_name (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getAuditLogAllUsingGetCall(Boolean ascending, OffsetDateTime endDate, String event, String integrationType, Boolean isRequest, UUID nucleusClientId, String orderBy, Integer page, String requestType, Integer size, OffsetDateTime startDate, String vendorName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/audit_log";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();
        if (ascending != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("ascending", ascending));
        if (endDate != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("end_date", endDate));
        if (event != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("event", event));
        if (integrationType != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("integration_type", integrationType));
        if (isRequest != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("is_request", isRequest));
        if (nucleusClientId != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("nucleus_client_id", nucleusClientId));
        if (orderBy != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("order_by", orderBy));
        if (page != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("page", page));
        if (requestType != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("request_type", requestType));
        if (size != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("size", size));
        if (startDate != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("start_date", startDate));
        if (vendorName != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("vendor_name", vendorName));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "*/*"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            
        };
        final String localVarContentType = apiClient.selectHeaderContentType(localVarContentTypes);
        localVarHeaderParams.put("Content-Type", localVarContentType);

        if(progressListener != null) {
            apiClient.getHttpClient().networkInterceptors().add(new com.squareup.okhttp.Interceptor() {
                @Override
                public com.squareup.okhttp.Response intercept(com.squareup.okhttp.Interceptor.Chain chain) throws IOException {
                    com.squareup.okhttp.Response originalResponse = chain.proceed(chain.request());
                    return originalResponse.newBuilder()
                    .body(new ProgressResponseBody(originalResponse.body(), progressListener))
                    .build();
                }
            });
        }

        String[] localVarAuthNames = new String[] { "oauth2" };
        return apiClient.buildCall(localVarPath, "GET", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call getAuditLogAllUsingGetValidateBeforeCall(Boolean ascending, OffsetDateTime endDate, String event, String integrationType, Boolean isRequest, UUID nucleusClientId, String orderBy, Integer page, String requestType, Integer size, OffsetDateTime startDate, String vendorName, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        

        com.squareup.okhttp.Call call = getAuditLogAllUsingGetCall(ascending, endDate, event, integrationType, isRequest, nucleusClientId, orderBy, page, requestType, size, startDate, vendorName, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Gel all audit log
     * 
     * @param ascending ascending (optional, default to false)
     * @param endDate end_date (optional, default to null)
     * @param event event (optional)
     * @param integrationType integration_type (optional)
     * @param isRequest is_request (optional, default to false)
     * @param nucleusClientId nucleus_client_id (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param requestType request_type (optional)
     * @param size size (optional, default to 25)
     * @param startDate start_date (optional, default to null)
     * @param vendorName vendor_name (optional)
     * @return Pageobject
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Pageobject getAuditLogAllUsingGet(Boolean ascending, OffsetDateTime endDate, String event, String integrationType, Boolean isRequest, UUID nucleusClientId, String orderBy, Integer page, String requestType, Integer size, OffsetDateTime startDate, String vendorName) throws ApiException {
        ApiResponse<Pageobject> resp = getAuditLogAllUsingGetWithHttpInfo(ascending, endDate, event, integrationType, isRequest, nucleusClientId, orderBy, page, requestType, size, startDate, vendorName);
        return resp.getData();
    }

    /**
     * Gel all audit log
     * 
     * @param ascending ascending (optional, default to false)
     * @param endDate end_date (optional, default to null)
     * @param event event (optional)
     * @param integrationType integration_type (optional)
     * @param isRequest is_request (optional, default to false)
     * @param nucleusClientId nucleus_client_id (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param requestType request_type (optional)
     * @param size size (optional, default to 25)
     * @param startDate start_date (optional, default to null)
     * @param vendorName vendor_name (optional)
     * @return ApiResponse&lt;Pageobject&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Pageobject> getAuditLogAllUsingGetWithHttpInfo(Boolean ascending, OffsetDateTime endDate, String event, String integrationType, Boolean isRequest, UUID nucleusClientId, String orderBy, Integer page, String requestType, Integer size, OffsetDateTime startDate, String vendorName) throws ApiException {
        com.squareup.okhttp.Call call = getAuditLogAllUsingGetValidateBeforeCall(ascending, endDate, event, integrationType, isRequest, nucleusClientId, orderBy, page, requestType, size, startDate, vendorName, null, null);
        Type localVarReturnType = new TypeToken<Pageobject>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Gel all audit log (asynchronously)
     * 
     * @param ascending ascending (optional, default to false)
     * @param endDate end_date (optional, default to null)
     * @param event event (optional)
     * @param integrationType integration_type (optional)
     * @param isRequest is_request (optional, default to false)
     * @param nucleusClientId nucleus_client_id (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param requestType request_type (optional)
     * @param size size (optional, default to 25)
     * @param startDate start_date (optional, default to null)
     * @param vendorName vendor_name (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getAuditLogAllUsingGetAsync(Boolean ascending, OffsetDateTime endDate, String event, String integrationType, Boolean isRequest, UUID nucleusClientId, String orderBy, Integer page, String requestType, Integer size, OffsetDateTime startDate, String vendorName, final ApiCallback<Pageobject> callback) throws ApiException {

        ProgressResponseBody.ProgressListener progressListener = null;
        ProgressRequestBody.ProgressRequestListener progressRequestListener = null;

        if (callback != null) {
            progressListener = new ProgressResponseBody.ProgressListener() {
                @Override
                public void update(long bytesRead, long contentLength, boolean done) {
                    callback.onDownloadProgress(bytesRead, contentLength, done);
                }
            };

            progressRequestListener = new ProgressRequestBody.ProgressRequestListener() {
                @Override
                public void onRequestProgress(long bytesWritten, long contentLength, boolean done) {
                    callback.onUploadProgress(bytesWritten, contentLength, done);
                }
            };
        }

        com.squareup.okhttp.Call call = getAuditLogAllUsingGetValidateBeforeCall(ascending, endDate, event, integrationType, isRequest, nucleusClientId, orderBy, page, requestType, size, startDate, vendorName, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Pageobject>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
