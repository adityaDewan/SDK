<?php
/**
 * UtilsApi
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Integration API
 *
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\integration\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com\hydrogen\integration\ApiException;
use com\hydrogen\integration\Configuration;
use com\hydrogen\integration\HeaderSelector;
use com\hydrogen\integration\ObjectSerializer;

/**
 * UtilsApi Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\integration
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UtilsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createTokenExchangeUsingPost
     *
     * Retrieve token based on certain vendor specific value
     *
     * @param  \com\hydrogen\integration\Model\ExchangeTokenCO $exchange_token_co exchangeTokenCO (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\integration\Model\ExchangePublicTokenVO
     */
    public function createTokenExchangeUsingPost($exchange_token_co)
    {
        list($response) = $this->createTokenExchangeUsingPostWithHttpInfo($exchange_token_co);
        return $response;
    }

    /**
     * Operation createTokenExchangeUsingPostWithHttpInfo
     *
     * Retrieve token based on certain vendor specific value
     *
     * @param  \com\hydrogen\integration\Model\ExchangeTokenCO $exchange_token_co exchangeTokenCO (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\integration\Model\ExchangePublicTokenVO, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTokenExchangeUsingPostWithHttpInfo($exchange_token_co)
    {
        $returnType = '\com\hydrogen\integration\Model\ExchangePublicTokenVO';
        $request = $this->createTokenExchangeUsingPostRequest($exchange_token_co);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\integration\Model\ExchangePublicTokenVO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTokenExchangeUsingPostAsync
     *
     * Retrieve token based on certain vendor specific value
     *
     * @param  \com\hydrogen\integration\Model\ExchangeTokenCO $exchange_token_co exchangeTokenCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenExchangeUsingPostAsync($exchange_token_co)
    {
        return $this->createTokenExchangeUsingPostAsyncWithHttpInfo($exchange_token_co)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTokenExchangeUsingPostAsyncWithHttpInfo
     *
     * Retrieve token based on certain vendor specific value
     *
     * @param  \com\hydrogen\integration\Model\ExchangeTokenCO $exchange_token_co exchangeTokenCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenExchangeUsingPostAsyncWithHttpInfo($exchange_token_co)
    {
        $returnType = '\com\hydrogen\integration\Model\ExchangePublicTokenVO';
        $request = $this->createTokenExchangeUsingPostRequest($exchange_token_co);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createTokenExchangeUsingPost'
     *
     * @param  \com\hydrogen\integration\Model\ExchangeTokenCO $exchange_token_co exchangeTokenCO (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTokenExchangeUsingPostRequest($exchange_token_co)
    {
        // verify the required parameter 'exchange_token_co' is set
        if ($exchange_token_co === null || (is_array($exchange_token_co) && count($exchange_token_co) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $exchange_token_co when calling createTokenExchangeUsingPost'
            );
        }

        $resourcePath = '/token_exchange';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($exchange_token_co)) {
            $_tempBody = $exchange_token_co;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createUserUsingPost
     *
     * Create user in vendor
     *
     * @param  \com\hydrogen\integration\Model\CreateUserRequest $create_user_request createUserRequest (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\integration\Model\UserResponseVO
     */
    public function createUserUsingPost($create_user_request)
    {
        list($response) = $this->createUserUsingPostWithHttpInfo($create_user_request);
        return $response;
    }

    /**
     * Operation createUserUsingPostWithHttpInfo
     *
     * Create user in vendor
     *
     * @param  \com\hydrogen\integration\Model\CreateUserRequest $create_user_request createUserRequest (required)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\integration\Model\UserResponseVO, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserUsingPostWithHttpInfo($create_user_request)
    {
        $returnType = '\com\hydrogen\integration\Model\UserResponseVO';
        $request = $this->createUserUsingPostRequest($create_user_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\integration\Model\UserResponseVO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createUserUsingPostAsync
     *
     * Create user in vendor
     *
     * @param  \com\hydrogen\integration\Model\CreateUserRequest $create_user_request createUserRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUserUsingPostAsync($create_user_request)
    {
        return $this->createUserUsingPostAsyncWithHttpInfo($create_user_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createUserUsingPostAsyncWithHttpInfo
     *
     * Create user in vendor
     *
     * @param  \com\hydrogen\integration\Model\CreateUserRequest $create_user_request createUserRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUserUsingPostAsyncWithHttpInfo($create_user_request)
    {
        $returnType = '\com\hydrogen\integration\Model\UserResponseVO';
        $request = $this->createUserUsingPostRequest($create_user_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createUserUsingPost'
     *
     * @param  \com\hydrogen\integration\Model\CreateUserRequest $create_user_request createUserRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createUserUsingPostRequest($create_user_request)
    {
        // verify the required parameter 'create_user_request' is set
        if ($create_user_request === null || (is_array($create_user_request) && count($create_user_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_user_request when calling createUserUsingPost'
            );
        }

        $resourcePath = '/user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($create_user_request)) {
            $_tempBody = $create_user_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getWidgetLinkUsingGet
     *
     * Retrieve widget link
     *
     * @param  string $nucleus_client_id nucleus_client_id (required)
     * @param  bool $is_mobile_webview is_mobile_webview (optional, default to false)
     * @param  string $mode mode (optional, default to aggregation)
     * @param  string $vendor_name vendor_name (optional)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\integration\Model\WidgetUrlVO
     */
    public function getWidgetLinkUsingGet($nucleus_client_id, $is_mobile_webview = 'false', $mode = 'aggregation', $vendor_name = null)
    {
        list($response) = $this->getWidgetLinkUsingGetWithHttpInfo($nucleus_client_id, $is_mobile_webview, $mode, $vendor_name);
        return $response;
    }

    /**
     * Operation getWidgetLinkUsingGetWithHttpInfo
     *
     * Retrieve widget link
     *
     * @param  string $nucleus_client_id nucleus_client_id (required)
     * @param  bool $is_mobile_webview is_mobile_webview (optional, default to false)
     * @param  string $mode mode (optional, default to aggregation)
     * @param  string $vendor_name vendor_name (optional)
     *
     * @throws \com\hydrogen\integration\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\integration\Model\WidgetUrlVO, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWidgetLinkUsingGetWithHttpInfo($nucleus_client_id, $is_mobile_webview = 'false', $mode = 'aggregation', $vendor_name = null)
    {
        $returnType = '\com\hydrogen\integration\Model\WidgetUrlVO';
        $request = $this->getWidgetLinkUsingGetRequest($nucleus_client_id, $is_mobile_webview, $mode, $vendor_name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\integration\Model\WidgetUrlVO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWidgetLinkUsingGetAsync
     *
     * Retrieve widget link
     *
     * @param  string $nucleus_client_id nucleus_client_id (required)
     * @param  bool $is_mobile_webview is_mobile_webview (optional, default to false)
     * @param  string $mode mode (optional, default to aggregation)
     * @param  string $vendor_name vendor_name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWidgetLinkUsingGetAsync($nucleus_client_id, $is_mobile_webview = 'false', $mode = 'aggregation', $vendor_name = null)
    {
        return $this->getWidgetLinkUsingGetAsyncWithHttpInfo($nucleus_client_id, $is_mobile_webview, $mode, $vendor_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWidgetLinkUsingGetAsyncWithHttpInfo
     *
     * Retrieve widget link
     *
     * @param  string $nucleus_client_id nucleus_client_id (required)
     * @param  bool $is_mobile_webview is_mobile_webview (optional, default to false)
     * @param  string $mode mode (optional, default to aggregation)
     * @param  string $vendor_name vendor_name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWidgetLinkUsingGetAsyncWithHttpInfo($nucleus_client_id, $is_mobile_webview = 'false', $mode = 'aggregation', $vendor_name = null)
    {
        $returnType = '\com\hydrogen\integration\Model\WidgetUrlVO';
        $request = $this->getWidgetLinkUsingGetRequest($nucleus_client_id, $is_mobile_webview, $mode, $vendor_name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getWidgetLinkUsingGet'
     *
     * @param  string $nucleus_client_id nucleus_client_id (required)
     * @param  bool $is_mobile_webview is_mobile_webview (optional, default to false)
     * @param  string $mode mode (optional, default to aggregation)
     * @param  string $vendor_name vendor_name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getWidgetLinkUsingGetRequest($nucleus_client_id, $is_mobile_webview = 'false', $mode = 'aggregation', $vendor_name = null)
    {
        // verify the required parameter 'nucleus_client_id' is set
        if ($nucleus_client_id === null || (is_array($nucleus_client_id) && count($nucleus_client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $nucleus_client_id when calling getWidgetLinkUsingGet'
            );
        }

        $resourcePath = '/widget_link/{nucleus_client_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($is_mobile_webview !== null) {
            $queryParams['is_mobile_webview'] = ObjectSerializer::toQueryValue($is_mobile_webview);
        }
        // query params
        if ($mode !== null) {
            $queryParams['mode'] = ObjectSerializer::toQueryValue($mode);
        }
        // query params
        if ($vendor_name !== null) {
            $queryParams['vendor_name'] = ObjectSerializer::toQueryValue($vendor_name);
        }

        // path params
        if ($nucleus_client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'nucleus_client_id' . '}',
                ObjectSerializer::toPathValue($nucleus_client_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
