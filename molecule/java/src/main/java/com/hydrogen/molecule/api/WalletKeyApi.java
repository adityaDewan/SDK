/*
 * Molecule API Documentation
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.molecule.api;

import com.hydrogen.molecule.ApiCallback;
import com.hydrogen.molecule.ApiClient;
import com.hydrogen.molecule.ApiException;
import com.hydrogen.molecule.ApiResponse;
import com.hydrogen.molecule.Configuration;
import com.hydrogen.molecule.Pair;
import com.hydrogen.molecule.ProgressRequestBody;
import com.hydrogen.molecule.ProgressResponseBody;

import com.google.gson.reflect.TypeToken;

import java.io.IOException;


import com.hydrogen.molecule.model.PageWalletKeyResponse;
import java.util.UUID;
import com.hydrogen.molecule.model.WalletKeyGenerateParams;
import com.hydrogen.molecule.model.WalletKeyParams;
import com.hydrogen.molecule.model.WalletKeyResponse;

import java.lang.reflect.Type;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class WalletKeyApi {
    private ApiClient apiClient;

    public WalletKeyApi() {
        this(Configuration.getDefaultApiClient());
    }

    public WalletKeyApi(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    public ApiClient getApiClient() {
        return apiClient;
    }

    public void setApiClient(ApiClient apiClient) {
        this.apiClient = apiClient;
    }

    /**
     * Build call for createWalletKeyUsingPost
     * @param walletKeyParams It enables a user to create a Wallet Key record (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call createWalletKeyUsingPostCall(WalletKeyParams walletKeyParams, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = walletKeyParams;

        // create path and map variables
        String localVarPath = "/wallet_key";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
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
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call createWalletKeyUsingPostValidateBeforeCall(WalletKeyParams walletKeyParams, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'walletKeyParams' is set
        if (walletKeyParams == null) {
            throw new ApiException("Missing the required parameter 'walletKeyParams' when calling createWalletKeyUsingPost(Async)");
        }
        

        com.squareup.okhttp.Call call = createWalletKeyUsingPostCall(walletKeyParams, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Creates a new Wallet Key for provided Wallet ID
     * 
     * @param walletKeyParams It enables a user to create a Wallet Key record (required)
     * @return WalletKeyResponse
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public WalletKeyResponse createWalletKeyUsingPost(WalletKeyParams walletKeyParams) throws ApiException {
        ApiResponse<WalletKeyResponse> resp = createWalletKeyUsingPostWithHttpInfo(walletKeyParams);
        return resp.getData();
    }

    /**
     * Creates a new Wallet Key for provided Wallet ID
     * 
     * @param walletKeyParams It enables a user to create a Wallet Key record (required)
     * @return ApiResponse&lt;WalletKeyResponse&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<WalletKeyResponse> createWalletKeyUsingPostWithHttpInfo(WalletKeyParams walletKeyParams) throws ApiException {
        com.squareup.okhttp.Call call = createWalletKeyUsingPostValidateBeforeCall(walletKeyParams, null, null);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Creates a new Wallet Key for provided Wallet ID (asynchronously)
     * 
     * @param walletKeyParams It enables a user to create a Wallet Key record (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call createWalletKeyUsingPostAsync(WalletKeyParams walletKeyParams, final ApiCallback<WalletKeyResponse> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = createWalletKeyUsingPostValidateBeforeCall(walletKeyParams, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for generateWalletKeyUsingPost
     * @param walletKeyGenerateParams It enables a user to generate a Wallet Key record (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call generateWalletKeyUsingPostCall(WalletKeyGenerateParams walletKeyGenerateParams, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = walletKeyGenerateParams;

        // create path and map variables
        String localVarPath = "/wallet_key/generator";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
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
        return apiClient.buildCall(localVarPath, "POST", localVarQueryParams, localVarCollectionQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarAuthNames, progressRequestListener);
    }

    @SuppressWarnings("rawtypes")
    private com.squareup.okhttp.Call generateWalletKeyUsingPostValidateBeforeCall(WalletKeyGenerateParams walletKeyGenerateParams, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'walletKeyGenerateParams' is set
        if (walletKeyGenerateParams == null) {
            throw new ApiException("Missing the required parameter 'walletKeyGenerateParams' when calling generateWalletKeyUsingPost(Async)");
        }
        

        com.squareup.okhttp.Call call = generateWalletKeyUsingPostCall(walletKeyGenerateParams, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Generates Wallet Key for provided Wallet ID
     * 
     * @param walletKeyGenerateParams It enables a user to generate a Wallet Key record (required)
     * @return WalletKeyResponse
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public WalletKeyResponse generateWalletKeyUsingPost(WalletKeyGenerateParams walletKeyGenerateParams) throws ApiException {
        ApiResponse<WalletKeyResponse> resp = generateWalletKeyUsingPostWithHttpInfo(walletKeyGenerateParams);
        return resp.getData();
    }

    /**
     * Generates Wallet Key for provided Wallet ID
     * 
     * @param walletKeyGenerateParams It enables a user to generate a Wallet Key record (required)
     * @return ApiResponse&lt;WalletKeyResponse&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<WalletKeyResponse> generateWalletKeyUsingPostWithHttpInfo(WalletKeyGenerateParams walletKeyGenerateParams) throws ApiException {
        com.squareup.okhttp.Call call = generateWalletKeyUsingPostValidateBeforeCall(walletKeyGenerateParams, null, null);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Generates Wallet Key for provided Wallet ID (asynchronously)
     * 
     * @param walletKeyGenerateParams It enables a user to generate a Wallet Key record (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call generateWalletKeyUsingPostAsync(WalletKeyGenerateParams walletKeyGenerateParams, final ApiCallback<WalletKeyResponse> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = generateWalletKeyUsingPostValidateBeforeCall(walletKeyGenerateParams, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getWalletKeyAllUsingGet
     * @param page To filter response wallet list page number (optional)
     * @param size Number of records per page (optional)
     * @param orderBy Field to sort record list (optional)
     * @param ascending Sorting order (optional)
     * @param getLatest To fetch latest (one) record (optional)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getWalletKeyAllUsingGetCall(Integer page, Integer size, String orderBy, Boolean ascending, Boolean getLatest, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/wallet_key";

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();
        if (page != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("page", page));
        if (size != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("size", size));
        if (orderBy != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("order_by", orderBy));
        if (ascending != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("ascending", ascending));
        if (getLatest != null)
        localVarQueryParams.addAll(apiClient.parameterToPair("get_latest", getLatest));

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
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
    private com.squareup.okhttp.Call getWalletKeyAllUsingGetValidateBeforeCall(Integer page, Integer size, String orderBy, Boolean ascending, Boolean getLatest, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        

        com.squareup.okhttp.Call call = getWalletKeyAllUsingGetCall(page, size, orderBy, ascending, getLatest, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Fetch Wallet Key list
     * 
     * @param page To filter response wallet list page number (optional)
     * @param size Number of records per page (optional)
     * @param orderBy Field to sort record list (optional)
     * @param ascending Sorting order (optional)
     * @param getLatest To fetch latest (one) record (optional)
     * @return PageWalletKeyResponse
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public PageWalletKeyResponse getWalletKeyAllUsingGet(Integer page, Integer size, String orderBy, Boolean ascending, Boolean getLatest) throws ApiException {
        ApiResponse<PageWalletKeyResponse> resp = getWalletKeyAllUsingGetWithHttpInfo(page, size, orderBy, ascending, getLatest);
        return resp.getData();
    }

    /**
     * Fetch Wallet Key list
     * 
     * @param page To filter response wallet list page number (optional)
     * @param size Number of records per page (optional)
     * @param orderBy Field to sort record list (optional)
     * @param ascending Sorting order (optional)
     * @param getLatest To fetch latest (one) record (optional)
     * @return ApiResponse&lt;PageWalletKeyResponse&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<PageWalletKeyResponse> getWalletKeyAllUsingGetWithHttpInfo(Integer page, Integer size, String orderBy, Boolean ascending, Boolean getLatest) throws ApiException {
        com.squareup.okhttp.Call call = getWalletKeyAllUsingGetValidateBeforeCall(page, size, orderBy, ascending, getLatest, null, null);
        Type localVarReturnType = new TypeToken<PageWalletKeyResponse>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Fetch Wallet Key list (asynchronously)
     * 
     * @param page To filter response wallet list page number (optional)
     * @param size Number of records per page (optional)
     * @param orderBy Field to sort record list (optional)
     * @param ascending Sorting order (optional)
     * @param getLatest To fetch latest (one) record (optional)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getWalletKeyAllUsingGetAsync(Integer page, Integer size, String orderBy, Boolean ascending, Boolean getLatest, final ApiCallback<PageWalletKeyResponse> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getWalletKeyAllUsingGetValidateBeforeCall(page, size, orderBy, ascending, getLatest, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<PageWalletKeyResponse>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
    /**
     * Build call for getWalletKeyUsingGet
     * @param walletKeyId Wallet Key ID (required)
     * @param progressListener Progress listener
     * @param progressRequestListener Progress request listener
     * @return Call to execute
     * @throws ApiException If fail to serialize the request body object
     */
    public com.squareup.okhttp.Call getWalletKeyUsingGetCall(UUID walletKeyId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        Object localVarPostBody = null;

        // create path and map variables
        String localVarPath = "/wallet_key/{wallet_key_id}"
            .replaceAll("\\{" + "wallet_key_id" + "\\}", apiClient.escapeString(walletKeyId.toString()));

        List<Pair> localVarQueryParams = new ArrayList<Pair>();
        List<Pair> localVarCollectionQueryParams = new ArrayList<Pair>();

        Map<String, String> localVarHeaderParams = new HashMap<String, String>();

        Map<String, Object> localVarFormParams = new HashMap<String, Object>();

        final String[] localVarAccepts = {
            "application/json"
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
    private com.squareup.okhttp.Call getWalletKeyUsingGetValidateBeforeCall(UUID walletKeyId, final ProgressResponseBody.ProgressListener progressListener, final ProgressRequestBody.ProgressRequestListener progressRequestListener) throws ApiException {
        
        // verify the required parameter 'walletKeyId' is set
        if (walletKeyId == null) {
            throw new ApiException("Missing the required parameter 'walletKeyId' when calling getWalletKeyUsingGet(Async)");
        }
        

        com.squareup.okhttp.Call call = getWalletKeyUsingGetCall(walletKeyId, progressListener, progressRequestListener);
        return call;

    }

    /**
     * Fetch Wallet Key details
     * 
     * @param walletKeyId Wallet Key ID (required)
     * @return WalletKeyResponse
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public WalletKeyResponse getWalletKeyUsingGet(UUID walletKeyId) throws ApiException {
        ApiResponse<WalletKeyResponse> resp = getWalletKeyUsingGetWithHttpInfo(walletKeyId);
        return resp.getData();
    }

    /**
     * Fetch Wallet Key details
     * 
     * @param walletKeyId Wallet Key ID (required)
     * @return ApiResponse&lt;WalletKeyResponse&gt;
     * @throws ApiException If fail to call the API, e.g. server error or cannot deserialize the response body
     */
    public ApiResponse<WalletKeyResponse> getWalletKeyUsingGetWithHttpInfo(UUID walletKeyId) throws ApiException {
        com.squareup.okhttp.Call call = getWalletKeyUsingGetValidateBeforeCall(walletKeyId, null, null);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        return apiClient.execute(call, localVarReturnType);
    }

    /**
     * Fetch Wallet Key details (asynchronously)
     * 
     * @param walletKeyId Wallet Key ID (required)
     * @param callback The callback to be executed when the API call finishes
     * @return The request call
     * @throws ApiException If fail to process the API call, e.g. serializing the request body object
     */
    public com.squareup.okhttp.Call getWalletKeyUsingGetAsync(UUID walletKeyId, final ApiCallback<WalletKeyResponse> callback) throws ApiException {

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

        com.squareup.okhttp.Call call = getWalletKeyUsingGetValidateBeforeCall(walletKeyId, progressListener, progressRequestListener);
        Type localVarReturnType = new TypeToken<WalletKeyResponse>(){}.getType();
        apiClient.executeAsync(call, localVarReturnType, callback);
        return call;
    }
}
