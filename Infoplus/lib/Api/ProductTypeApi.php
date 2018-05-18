<?php
/**
 * ProductTypeApi
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Infoplus\ApiException;
use Infoplus\Configuration;
use Infoplus\HeaderSelector;
use Infoplus\ObjectSerializer;

/**
 * ProductTypeApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductTypeApi
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
     * Operation getProductTypeById
     *
     * Get a productType by id
     *
     * @param  string $product_type_id Id of productType to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\ProductType
     */
    public function getProductTypeById($product_type_id)
    {
        list($response) = $this->getProductTypeByIdWithHttpInfo($product_type_id);
        return $response;
    }

    /**
     * Operation getProductTypeByIdWithHttpInfo
     *
     * Get a productType by id
     *
     * @param  string $product_type_id Id of productType to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\ProductType, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductTypeByIdWithHttpInfo($product_type_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\ProductType';
        $request = $this->getProductTypeByIdRequest($product_type_id);

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
                        '\Infoplus\Infoplus\Model\ProductType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductTypeByIdAsync
     *
     * Get a productType by id
     *
     * @param  string $product_type_id Id of productType to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTypeByIdAsync($product_type_id)
    {
        return $this->getProductTypeByIdAsyncWithHttpInfo($product_type_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductTypeByIdAsyncWithHttpInfo
     *
     * Get a productType by id
     *
     * @param  string $product_type_id Id of productType to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTypeByIdAsyncWithHttpInfo($product_type_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\ProductType';
        $request = $this->getProductTypeByIdRequest($product_type_id);

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
     * Create request for operation 'getProductTypeById'
     *
     * @param  string $product_type_id Id of productType to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductTypeByIdRequest($product_type_id)
    {
        // verify the required parameter 'product_type_id' is set
        if ($product_type_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_type_id when calling getProductTypeById'
            );
        }

        $resourcePath = '/beta/productType/{productTypeId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($product_type_id !== null) {
            $resourcePath = str_replace(
                '{' . 'productTypeId' . '}',
                ObjectSerializer::toPathValue($product_type_id),
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('API-Key');
        if ($apiKey !== null) {
            $headers['API-Key'] = $apiKey;
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
     * Operation getProductTypeBySearchText
     *
     * Search productTypes
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\ProductType[]
     */
    public function getProductTypeBySearchText($search_text = null, $page = null, $limit = null)
    {
        list($response) = $this->getProductTypeBySearchTextWithHttpInfo($search_text, $page, $limit);
        return $response;
    }

    /**
     * Operation getProductTypeBySearchTextWithHttpInfo
     *
     * Search productTypes
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\ProductType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductTypeBySearchTextWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\ProductType[]';
        $request = $this->getProductTypeBySearchTextRequest($search_text, $page, $limit);

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
                        '\Infoplus\Infoplus\Model\ProductType[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductTypeBySearchTextAsync
     *
     * Search productTypes
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTypeBySearchTextAsync($search_text = null, $page = null, $limit = null)
    {
        return $this->getProductTypeBySearchTextAsyncWithHttpInfo($search_text, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductTypeBySearchTextAsyncWithHttpInfo
     *
     * Search productTypes
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTypeBySearchTextAsyncWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\ProductType[]';
        $request = $this->getProductTypeBySearchTextRequest($search_text, $page, $limit);

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
     * Create request for operation 'getProductTypeBySearchText'
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductTypeBySearchTextRequest($search_text = null, $page = null, $limit = null)
    {

        $resourcePath = '/beta/productType/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search_text !== null) {
            $queryParams['searchText'] = ObjectSerializer::toQueryValue($search_text);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('API-Key');
        if ($apiKey !== null) {
            $headers['API-Key'] = $apiKey;
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
