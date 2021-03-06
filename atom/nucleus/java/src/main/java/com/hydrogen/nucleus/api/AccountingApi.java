/*
 * Hydrogen Atom API
 * The Hydrogen Atom API
 *
 * OpenAPI spec version: 1.7.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.nucleus.api;

import com.hydrogen.nucleus.ApiCallback;
import com.hydrogen.nucleus.ApiClient;
import com.hydrogen.nucleus.ApiException;
import com.hydrogen.nucleus.ApiResponse;
import com.hydrogen.nucleus.Configuration;
import com.hydrogen.nucleus.Pair;
import com.hydrogen.nucleus.ProgressRequestBody;
import com.hydrogen.nucleus.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import com.hydrogen.nucleus.model.Accounting;
import com.hydrogen.nucleus.model.PageAccounting;

import java.util.UUID;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class AccountingApi {
    private ApiClient apiClient;

    public AccountingApi() {
        this(Configuration.getDefaultApiClient());
    }

    public AccountingApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for createAccountingUsingPost
     * @param accounting accounting (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call createAccountingUsingPostCall(Accounting accounting, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = accounting;

        // create path and map variables
        String localVarPath = "/accounting";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "*/*"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            "application/json"
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
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call createAccountingUsingPostValidateBeforeCall(Accounting accounting, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'accounting' is set
        if (accounting == null) {
            throw new ApiException("Missing the required parameter 'accounting' when calling createAccountingUsingPost(Async)");
        }
        

        com.squareup.okhttp.Call call = createAccountingUsingPostCall(accounting, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Create an accounting
     * Store stats pulled from accounting vendors.
     * @param accounting accounting (required)
     * @return Accounting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Accounting createAccountingUsingPost(Accounting accounting) throws ApiException {
        ApiResponse<Accounting> resp = createAccountingUsingPostWithHttpInfo(accounting);
        return resp.getData();
    }

    /**
     * Create an accounting
     * Store stats pulled from accounting vendors.
     * @param accounting accounting (required)
     * @return ApiResponse&lt;Accounting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Accounting> createAccountingUsingPostWithHttpInfo(Accounting accounting) throws ApiException {
        com.squareup.okhttp.Call call = createAccountingUsingPostValidateBeforeCall(accounting, null, null);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Create an accounting (asynchronously)
     * Store stats pulled from accounting vendors.
     * @param accounting accounting (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call createAccountingUsingPostAsync(Accounting accounting, final ApiCallback<Accounting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = createAccountingUsingPostValidateBeforeCall(accounting, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for deleteAccountingUsingDelete
     * @param accountingId UUID accounting_id (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call deleteAccountingUsingDeleteCall(UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/accounting/{accounting_id}"
            .replaceAll("\\{" + "accounting_id" + "\\}", apiClient.escapeString(accountingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
        return apiClient.buildCall(localVarPath, "DELETE", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call deleteAccountingUsingDeleteValidateBeforeCall(UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'accountingId' is set
        if (accountingId == null) {
            throw new ApiException("Missing the required parameter 'accountingId' when calling deleteAccountingUsingDelete(Async)");
        }
        

        com.squareup.okhttp.Call call = deleteAccountingUsingDeleteCall(accountingId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Delete an accounting
     * Permanently delete an accounting.
     * @param accountingId UUID accounting_id (required)
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public void deleteAccountingUsingDelete(UUID accountingId) throws ApiException {
        deleteAccountingUsingDeleteWithHttpInfo(accountingId);
    }

    /**
     * Delete an accounting
     * Permanently delete an accounting.
     * @param accountingId UUID accounting_id (required)
     * @return ApiResponse&lt;Void&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Void> deleteAccountingUsingDeleteWithHttpInfo(UUID accountingId) throws ApiException {
        com.squareup.okhttp.Call call = deleteAccountingUsingDeleteValidateBeforeCall(accountingId, null, null);
        return apiClient.execute(call);
    }

    /**
     * Delete an accounting (asynchronously)
     * Permanently delete an accounting.
     * @param accountingId UUID accounting_id (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call deleteAccountingUsingDeleteAsync(UUID accountingId, final ApiCallback<Void> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = deleteAccountingUsingDeleteValidateBeforeCall(accountingId, progressListener, progressRequestListener);
        apiClient.executeAsync(call, callback);
        return call;
    }
    /**
     * Build call for getAccountingAllUsingGet
     * @param ascending ascending (optional, default to false)
     * @param filter filter (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param size size (optional, default to 25)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getAccountingAllUsingGetCall(Boolean ascending, String filter, String orderBy, Integer page, Integer size, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/accounting";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();
        if (ascending != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("ascending", ascending));
        if (filter != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("filter", filter));
        if (orderBy != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("order_by", orderBy));
        if (page != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("page", page));
        if (size != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("size", size));

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
    private com.squareup.okhttp.Call getAccountingAllUsingGetValidateBeforeCall(Boolean ascending, String filter, String orderBy, Integer page, Integer size, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        

        com.squareup.okhttp.Call call = getAccountingAllUsingGetCall(ascending, filter, orderBy, page, size, progressListener, progressRequestListener);
        return call;

    }

    /**
     * List all accounting
     * Get information for all accounting for all clients defined for your firm.
     * @param ascending ascending (optional, default to false)
     * @param filter filter (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param size size (optional, default to 25)
     * @return PageAccounting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public PageAccounting getAccountingAllUsingGet(Boolean ascending, String filter, String orderBy, Integer page, Integer size) throws ApiException {
        ApiResponse<PageAccounting> resp = getAccountingAllUsingGetWithHttpInfo(ascending, filter, orderBy, page, size);
        return resp.getData();
    }

    /**
     * List all accounting
     * Get information for all accounting for all clients defined for your firm.
     * @param ascending ascending (optional, default to false)
     * @param filter filter (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param size size (optional, default to 25)
     * @return ApiResponse&lt;PageAccounting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<PageAccounting> getAccountingAllUsingGetWithHttpInfo(Boolean ascending, String filter, String orderBy, Integer page, Integer size) throws ApiException {
        com.squareup.okhttp.Call call = getAccountingAllUsingGetValidateBeforeCall(ascending, filter, orderBy, page, size, null, null);
        Type localVarReturnType = new TypeToken<PageAccounting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * List all accounting (asynchronously)
     * Get information for all accounting for all clients defined for your firm.
     * @param ascending ascending (optional, default to false)
     * @param filter filter (optional)
     * @param orderBy order_by (optional, default to update_date)
     * @param page page (optional, default to 0)
     * @param size size (optional, default to 25)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getAccountingAllUsingGetAsync(Boolean ascending, String filter, String orderBy, Integer page, Integer size, final ApiCallback<PageAccounting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getAccountingAllUsingGetValidateBeforeCall(ascending, filter, orderBy, page, size, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<PageAccounting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getAccountingUsingGet
     * @param accountingId UUID accounting_id (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getAccountingUsingGetCall(UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/accounting/{accounting_id}"
            .replaceAll("\\{" + "accounting_id" + "\\}", apiClient.escapeString(accountingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

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
    private com.squareup.okhttp.Call getAccountingUsingGetValidateBeforeCall(UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'accountingId' is set
        if (accountingId == null) {
            throw new ApiException("Missing the required parameter 'accountingId' when calling getAccountingUsingGet(Async)");
        }
        

        com.squareup.okhttp.Call call = getAccountingUsingGetCall(accountingId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Retrieve an accounting
     * Retrieve the information for a specific accounting associated with a client.
     * @param accountingId UUID accounting_id (required)
     * @return Accounting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Accounting getAccountingUsingGet(UUID accountingId) throws ApiException {
        ApiResponse<Accounting> resp = getAccountingUsingGetWithHttpInfo(accountingId);
        return resp.getData();
    }

    /**
     * Retrieve an accounting
     * Retrieve the information for a specific accounting associated with a client.
     * @param accountingId UUID accounting_id (required)
     * @return ApiResponse&lt;Accounting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Accounting> getAccountingUsingGetWithHttpInfo(UUID accountingId) throws ApiException {
        com.squareup.okhttp.Call call = getAccountingUsingGetValidateBeforeCall(accountingId, null, null);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Retrieve an accounting (asynchronously)
     * Retrieve the information for a specific accounting associated with a client.
     * @param accountingId UUID accounting_id (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getAccountingUsingGetAsync(UUID accountingId, final ApiCallback<Accounting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getAccountingUsingGetValidateBeforeCall(accountingId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for updateAccountingUsingPut
     * @param accounting accounting (required)
     * @param accountingId UUID accounting_id (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call updateAccountingUsingPutCall(Accounting accounting, UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = accounting;

        // create path and map variables
        String localVarPath = "/accounting/{accounting_id}"
            .replaceAll("\\{" + "accounting_id" + "\\}", apiClient.escapeString(accountingId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "*/*"
        };
        final String localVarAccept = apiClient.selectHeaderAccept(localVarAccepts);
        if (localVarAccept != null) localVarHeaderParams.put("Accept", localVarAccept);

        final String[] localVarContentTypes = {
            "application/json"
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
        return apiClient.buildCall(localVarPath, "PUT", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call updateAccountingUsingPutValidateBeforeCall(Accounting accounting, UUID accountingId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'accounting' is set
        if (accounting == null) {
            throw new ApiException("Missing the required parameter 'accounting' when calling updateAccountingUsingPut(Async)");
        }
        
        // verify the required parameter 'accountingId' is set
        if (accountingId == null) {
            throw new ApiException("Missing the required parameter 'accountingId' when calling updateAccountingUsingPut(Async)");
        }
        

        com.squareup.okhttp.Call call = updateAccountingUsingPutCall(accounting, accountingId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Update an accounting
     * Update the information for an accounting.
     * @param accounting accounting (required)
     * @param accountingId UUID accounting_id (required)
     * @return Accounting
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public Accounting updateAccountingUsingPut(Accounting accounting, UUID accountingId) throws ApiException {
        ApiResponse<Accounting> resp = updateAccountingUsingPutWithHttpInfo(accounting, accountingId);
        return resp.getData();
    }

    /**
     * Update an accounting
     * Update the information for an accounting.
     * @param accounting accounting (required)
     * @param accountingId UUID accounting_id (required)
     * @return ApiResponse&lt;Accounting&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<Accounting> updateAccountingUsingPutWithHttpInfo(Accounting accounting, UUID accountingId) throws ApiException {
        com.squareup.okhttp.Call call = updateAccountingUsingPutValidateBeforeCall(accounting, accountingId, null, null);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Update an accounting (asynchronously)
     * Update the information for an accounting.
     * @param accounting accounting (required)
     * @param accountingId UUID accounting_id (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call updateAccountingUsingPutAsync(Accounting accounting, UUID accountingId, final ApiCallback<Accounting> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = updateAccountingUsingPutValidateBeforeCall(accounting, accountingId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<Accounting>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
