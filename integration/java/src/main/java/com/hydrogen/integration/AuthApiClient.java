package com.hydrogen.integration;

import com.google.gson.Gson;
import com.squareup.okhttp.Call;
import com.squareup.okhttp.Credentials;
import com.squareup.okhttp.HttpUrl;
import com.squareup.okhttp.OkHttpClient;
import com.squareup.okhttp.Request;
import com.squareup.okhttp.RequestBody;
import com.squareup.okhttp.Response;

import java.io.IOException;
import java.util.Map;
/**
 * @author Chandra Shekhar Paatni on 23/04/20
 */
public class AuthApiClient extends ApiClient {
    private final String authUri;
    private String AUTHORIZATION ="Authorization";
    private String GRANT_TYPE_KEY = "grant_type";
    private String CLIENT_CREDENTIAL = "client_credentials";
    private String PASSWORD = "password";
    private String USERNAME = "username";
    private String MESSAGE = "message";
    private String ACCESS_TOKEN = "access_token";
    private ApiClient defaultApiClient = Configuration.getDefaultApiClient();
    private String accessToken;
    public AuthApiClient() {
        String uri = defaultApiClient.getBasePath();
        authUri = uri.substring(0, uri.indexOf(".com")+4)+"/authorization/v1/oauth/token";
    }

    public void createClientCredential(String clientId, String clientSecret) throws ApiException {
        Request request = createRequest(createHttpUrl(CLIENT_CREDENTIAL), clientId, clientSecret);
        setToken(request);
    }

    public void createPasswordCredential(String clientId, String clientSecret, String userName, String password) throws ApiException {
        Request request = createRequest(createHttpUrl(PASSWORD, userName, password), clientId, clientSecret);
        setToken(request);
    }

    private Request createRequest(HttpUrl createHttpUrl, String clientId, String clientSecret) {
       return new Request.Builder()
                .url(createHttpUrl)
                .post(RequestBody.create(null, new byte[0]))
                .addHeader(AUTHORIZATION, Credentials.basic(clientId, clientSecret))
                .build();
    }

    private HttpUrl createHttpUrl(String grantType, String userName, String password) {
        return  HttpUrl.parse(authUri)
                .newBuilder()
                .addQueryParameter(GRANT_TYPE_KEY, grantType)
                .addQueryParameter(USERNAME, userName)
            .addQueryParameter(PASSWORD, password).build();
    }

    private HttpUrl createHttpUrl(String grantType) {
        return HttpUrl.parse(authUri)
                .newBuilder()
                .addQueryParameter(GRANT_TYPE_KEY, grantType).build();
    }

    private void setToken(Request request) throws ApiException {
        OkHttpClient okHttpClient = defaultApiClient.getHttpClient();
        Call call = okHttpClient.newCall(request);
        try {
            Response response = call.execute();
            if (!response.isSuccessful()) {
                throw new ApiException(new Gson().fromJson(response.body().string(), Map.class).get(MESSAGE).toString());
            }
            Map<String, String> responseKey = defaultApiClient.handleResponse(response, Map.class);
            accessToken = responseKey.get(ACCESS_TOKEN);
            defaultApiClient.setAccessToken(accessToken);
        } catch (IOException e) {
            throw new ApiException(e);
        }
    }
    public void setAccessToken(String accessToken) {
        this.accessToken = accessToken;
        defaultApiClient.setAccessToken(accessToken);
    }

    public String getAccessToken() {
        return accessToken;
    }
}
