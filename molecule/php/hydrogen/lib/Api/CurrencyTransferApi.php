<?php
/**
 * CurrencyTransferApi
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\molecule
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Molecule API Documentation
 *
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\molecule\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com\hydrogen\molecule\ApiException;
use com\hydrogen\molecule\Configuration;
use com\hydrogen\molecule\HeaderSelector;
use com\hydrogen\molecule\ObjectSerializer;

/**
 * CurrencyTransferApi Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\molecule
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyTransferApi
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
     * Operation createCurrencyTransferUsingPost
     *
     * Creates Currency Transfer record
     *
     * @param  \com\hydrogen\molecule\Model\CurrencyTransferParams $currency_transfer_params It enables a user to transfer Currency (required)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\molecule\Model\TransactionSuccessResponse
     */
    public function createCurrencyTransferUsingPost($currency_transfer_params)
    {
        list($response) = $this->createCurrencyTransferUsingPostWithHttpInfo($currency_transfer_params);
        return $response;
    }

    /**
     * Operation createCurrencyTransferUsingPostWithHttpInfo
     *
     * Creates Currency Transfer record
     *
     * @param  \com\hydrogen\molecule\Model\CurrencyTransferParams $currency_transfer_params It enables a user to transfer Currency (required)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\molecule\Model\TransactionSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCurrencyTransferUsingPostWithHttpInfo($currency_transfer_params)
    {
        $returnType = '\com\hydrogen\molecule\Model\TransactionSuccessResponse';
        $request = $this->createCurrencyTransferUsingPostRequest($currency_transfer_params);

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
                        '\com\hydrogen\molecule\Model\TransactionSuccessResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createCurrencyTransferUsingPostAsync
     *
     * Creates Currency Transfer record
     *
     * @param  \com\hydrogen\molecule\Model\CurrencyTransferParams $currency_transfer_params It enables a user to transfer Currency (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCurrencyTransferUsingPostAsync($currency_transfer_params)
    {
        return $this->createCurrencyTransferUsingPostAsyncWithHttpInfo($currency_transfer_params)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCurrencyTransferUsingPostAsyncWithHttpInfo
     *
     * Creates Currency Transfer record
     *
     * @param  \com\hydrogen\molecule\Model\CurrencyTransferParams $currency_transfer_params It enables a user to transfer Currency (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCurrencyTransferUsingPostAsyncWithHttpInfo($currency_transfer_params)
    {
        $returnType = '\com\hydrogen\molecule\Model\TransactionSuccessResponse';
        $request = $this->createCurrencyTransferUsingPostRequest($currency_transfer_params);

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
     * Create request for operation 'createCurrencyTransferUsingPost'
     *
     * @param  \com\hydrogen\molecule\Model\CurrencyTransferParams $currency_transfer_params It enables a user to transfer Currency (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createCurrencyTransferUsingPostRequest($currency_transfer_params)
    {
        // verify the required parameter 'currency_transfer_params' is set
        if ($currency_transfer_params === null || (is_array($currency_transfer_params) && count($currency_transfer_params) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_transfer_params when calling createCurrencyTransferUsingPost'
            );
        }

        $resourcePath = '/currency_transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($currency_transfer_params)) {
            $_tempBody = $currency_transfer_params;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCurrencyTransferAllUsingGet
     *
     * Fetch Currency Transfer record list
     *
     * @param  string $wallet_id To filter response Currency Transfer list by Wallet ID (optional)
     * @param  string $currency_id To filter response Currency Transfer list by Currency ID (optional)
     * @param  int $page To filter response Currency Transfer list by page number (optional)
     * @param  int $size Number of records per page (optional)
     * @param  string $order_by Field to sort record list (optional)
     * @param  bool $ascending Sorting order (optional)
     * @param  bool $get_latest To fetch latest (one) record (optional)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\molecule\Model\PageCurrencyTransferResponse_
     */
    public function getCurrencyTransferAllUsingGet($wallet_id = null, $currency_id = null, $page = null, $size = null, $order_by = null, $ascending = null, $get_latest = null)
    {
        list($response) = $this->getCurrencyTransferAllUsingGetWithHttpInfo($wallet_id, $currency_id, $page, $size, $order_by, $ascending, $get_latest);
        return $response;
    }

    /**
     * Operation getCurrencyTransferAllUsingGetWithHttpInfo
     *
     * Fetch Currency Transfer record list
     *
     * @param  string $wallet_id To filter response Currency Transfer list by Wallet ID (optional)
     * @param  string $currency_id To filter response Currency Transfer list by Currency ID (optional)
     * @param  int $page To filter response Currency Transfer list by page number (optional)
     * @param  int $size Number of records per page (optional)
     * @param  string $order_by Field to sort record list (optional)
     * @param  bool $ascending Sorting order (optional)
     * @param  bool $get_latest To fetch latest (one) record (optional)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\molecule\Model\PageCurrencyTransferResponse_, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrencyTransferAllUsingGetWithHttpInfo($wallet_id = null, $currency_id = null, $page = null, $size = null, $order_by = null, $ascending = null, $get_latest = null)
    {
        $returnType = '\com\hydrogen\molecule\Model\PageCurrencyTransferResponse_';
        $request = $this->getCurrencyTransferAllUsingGetRequest($wallet_id, $currency_id, $page, $size, $order_by, $ascending, $get_latest);

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
                        '\com\hydrogen\molecule\Model\PageCurrencyTransferResponse_',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCurrencyTransferAllUsingGetAsync
     *
     * Fetch Currency Transfer record list
     *
     * @param  string $wallet_id To filter response Currency Transfer list by Wallet ID (optional)
     * @param  string $currency_id To filter response Currency Transfer list by Currency ID (optional)
     * @param  int $page To filter response Currency Transfer list by page number (optional)
     * @param  int $size Number of records per page (optional)
     * @param  string $order_by Field to sort record list (optional)
     * @param  bool $ascending Sorting order (optional)
     * @param  bool $get_latest To fetch latest (one) record (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyTransferAllUsingGetAsync($wallet_id = null, $currency_id = null, $page = null, $size = null, $order_by = null, $ascending = null, $get_latest = null)
    {
        return $this->getCurrencyTransferAllUsingGetAsyncWithHttpInfo($wallet_id, $currency_id, $page, $size, $order_by, $ascending, $get_latest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCurrencyTransferAllUsingGetAsyncWithHttpInfo
     *
     * Fetch Currency Transfer record list
     *
     * @param  string $wallet_id To filter response Currency Transfer list by Wallet ID (optional)
     * @param  string $currency_id To filter response Currency Transfer list by Currency ID (optional)
     * @param  int $page To filter response Currency Transfer list by page number (optional)
     * @param  int $size Number of records per page (optional)
     * @param  string $order_by Field to sort record list (optional)
     * @param  bool $ascending Sorting order (optional)
     * @param  bool $get_latest To fetch latest (one) record (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyTransferAllUsingGetAsyncWithHttpInfo($wallet_id = null, $currency_id = null, $page = null, $size = null, $order_by = null, $ascending = null, $get_latest = null)
    {
        $returnType = '\com\hydrogen\molecule\Model\PageCurrencyTransferResponse_';
        $request = $this->getCurrencyTransferAllUsingGetRequest($wallet_id, $currency_id, $page, $size, $order_by, $ascending, $get_latest);

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
     * Create request for operation 'getCurrencyTransferAllUsingGet'
     *
     * @param  string $wallet_id To filter response Currency Transfer list by Wallet ID (optional)
     * @param  string $currency_id To filter response Currency Transfer list by Currency ID (optional)
     * @param  int $page To filter response Currency Transfer list by page number (optional)
     * @param  int $size Number of records per page (optional)
     * @param  string $order_by Field to sort record list (optional)
     * @param  bool $ascending Sorting order (optional)
     * @param  bool $get_latest To fetch latest (one) record (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCurrencyTransferAllUsingGetRequest($wallet_id = null, $currency_id = null, $page = null, $size = null, $order_by = null, $ascending = null, $get_latest = null)
    {

        $resourcePath = '/currency_transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($wallet_id !== null) {
            $queryParams['wallet_id'] = ObjectSerializer::toQueryValue($wallet_id);
        }
        // query params
        if ($currency_id !== null) {
            $queryParams['currency_id'] = ObjectSerializer::toQueryValue($currency_id);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = ObjectSerializer::toQueryValue($size);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['order_by'] = ObjectSerializer::toQueryValue($order_by);
        }
        // query params
        if ($ascending !== null) {
            $queryParams['ascending'] = ObjectSerializer::toQueryValue($ascending);
        }
        // query params
        if ($get_latest !== null) {
            $queryParams['get_latest'] = ObjectSerializer::toQueryValue($get_latest);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation getCurrencyTransferUsingGet
     *
     * Fetch Currency Transfer record details
     *
     * @param  string $currency_transfer_id Currency Transfer ID (required)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com\hydrogen\molecule\Model\CurrencyTransferResponse
     */
    public function getCurrencyTransferUsingGet($currency_transfer_id)
    {
        list($response) = $this->getCurrencyTransferUsingGetWithHttpInfo($currency_transfer_id);
        return $response;
    }

    /**
     * Operation getCurrencyTransferUsingGetWithHttpInfo
     *
     * Fetch Currency Transfer record details
     *
     * @param  string $currency_transfer_id Currency Transfer ID (required)
     *
     * @throws \com\hydrogen\molecule\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com\hydrogen\molecule\Model\CurrencyTransferResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrencyTransferUsingGetWithHttpInfo($currency_transfer_id)
    {
        $returnType = '\com\hydrogen\molecule\Model\CurrencyTransferResponse';
        $request = $this->getCurrencyTransferUsingGetRequest($currency_transfer_id);

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
                        '\com\hydrogen\molecule\Model\CurrencyTransferResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com\hydrogen\molecule\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCurrencyTransferUsingGetAsync
     *
     * Fetch Currency Transfer record details
     *
     * @param  string $currency_transfer_id Currency Transfer ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyTransferUsingGetAsync($currency_transfer_id)
    {
        return $this->getCurrencyTransferUsingGetAsyncWithHttpInfo($currency_transfer_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCurrencyTransferUsingGetAsyncWithHttpInfo
     *
     * Fetch Currency Transfer record details
     *
     * @param  string $currency_transfer_id Currency Transfer ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyTransferUsingGetAsyncWithHttpInfo($currency_transfer_id)
    {
        $returnType = '\com\hydrogen\molecule\Model\CurrencyTransferResponse';
        $request = $this->getCurrencyTransferUsingGetRequest($currency_transfer_id);

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
     * Create request for operation 'getCurrencyTransferUsingGet'
     *
     * @param  string $currency_transfer_id Currency Transfer ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCurrencyTransferUsingGetRequest($currency_transfer_id)
    {
        // verify the required parameter 'currency_transfer_id' is set
        if ($currency_transfer_id === null || (is_array($currency_transfer_id) && count($currency_transfer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_transfer_id when calling getCurrencyTransferUsingGet'
            );
        }

        $resourcePath = '/currency_transfer/{currency_transfer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($currency_transfer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'currency_transfer_id' . '}',
                ObjectSerializer::toPathValue($currency_transfer_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
