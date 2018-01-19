<?php
/**
 * PackingSlipTemplateLineItemDescriptionEnumApi
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
 * Swagger Codegen version: 2.3.0
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
 * PackingSlipTemplateLineItemDescriptionEnumApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackingSlipTemplateLineItemDescriptionEnumApi
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
     * Operation getPackingSlipTemplateLineItemDescriptionEnumById
     *
     * Get a packingSlipTemplateLineItemDescriptionEnum by id
     *
     * @param  string $packing_slip_template_line_item_description_enum_id Id of packingSlipTemplateLineItemDescriptionEnum to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumById($packing_slip_template_line_item_description_enum_id)
    {
        list($response) = $this->getPackingSlipTemplateLineItemDescriptionEnumByIdWithHttpInfo($packing_slip_template_line_item_description_enum_id);
        return $response;
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumByIdWithHttpInfo
     *
     * Get a packingSlipTemplateLineItemDescriptionEnum by id
     *
     * @param  string $packing_slip_template_line_item_description_enum_id Id of packingSlipTemplateLineItemDescriptionEnum to be returned. (required)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumByIdWithHttpInfo($packing_slip_template_line_item_description_enum_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum';
        $request = $this->getPackingSlipTemplateLineItemDescriptionEnumByIdRequest($packing_slip_template_line_item_description_enum_id);

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
                        '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumByIdAsync
     *
     * Get a packingSlipTemplateLineItemDescriptionEnum by id
     *
     * @param  string $packing_slip_template_line_item_description_enum_id Id of packingSlipTemplateLineItemDescriptionEnum to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumByIdAsync($packing_slip_template_line_item_description_enum_id)
    {
        return $this->getPackingSlipTemplateLineItemDescriptionEnumByIdAsyncWithHttpInfo($packing_slip_template_line_item_description_enum_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumByIdAsyncWithHttpInfo
     *
     * Get a packingSlipTemplateLineItemDescriptionEnum by id
     *
     * @param  string $packing_slip_template_line_item_description_enum_id Id of packingSlipTemplateLineItemDescriptionEnum to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumByIdAsyncWithHttpInfo($packing_slip_template_line_item_description_enum_id)
    {
        $returnType = '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum';
        $request = $this->getPackingSlipTemplateLineItemDescriptionEnumByIdRequest($packing_slip_template_line_item_description_enum_id);

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
     * Create request for operation 'getPackingSlipTemplateLineItemDescriptionEnumById'
     *
     * @param  string $packing_slip_template_line_item_description_enum_id Id of packingSlipTemplateLineItemDescriptionEnum to be returned. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPackingSlipTemplateLineItemDescriptionEnumByIdRequest($packing_slip_template_line_item_description_enum_id)
    {
        // verify the required parameter 'packing_slip_template_line_item_description_enum_id' is set
        if ($packing_slip_template_line_item_description_enum_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $packing_slip_template_line_item_description_enum_id when calling getPackingSlipTemplateLineItemDescriptionEnumById'
            );
        }

        $resourcePath = '/beta/packingSlipTemplateLineItemDescriptionEnum/{packingSlipTemplateLineItemDescriptionEnumId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($packing_slip_template_line_item_description_enum_id !== null) {
            $resourcePath = str_replace(
                '{' . 'packingSlipTemplateLineItemDescriptionEnumId' . '}',
                ObjectSerializer::toPathValue($packing_slip_template_line_item_description_enum_id),
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
     * Operation getPackingSlipTemplateLineItemDescriptionEnumBySearchText
     *
     * Search packingSlipTemplateLineItemDescriptionEnums
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[]
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumBySearchText($search_text = null, $page = null, $limit = null)
    {
        list($response) = $this->getPackingSlipTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo($search_text, $page, $limit);
        return $response;
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo
     *
     * Search packingSlipTemplateLineItemDescriptionEnums
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \Infoplus\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[]';
        $request = $this->getPackingSlipTemplateLineItemDescriptionEnumBySearchTextRequest($search_text, $page, $limit);

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
                        '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumBySearchTextAsync
     *
     * Search packingSlipTemplateLineItemDescriptionEnums
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumBySearchTextAsync($search_text = null, $page = null, $limit = null)
    {
        return $this->getPackingSlipTemplateLineItemDescriptionEnumBySearchTextAsyncWithHttpInfo($search_text, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPackingSlipTemplateLineItemDescriptionEnumBySearchTextAsyncWithHttpInfo
     *
     * Search packingSlipTemplateLineItemDescriptionEnums
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackingSlipTemplateLineItemDescriptionEnumBySearchTextAsyncWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        $returnType = '\Infoplus\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[]';
        $request = $this->getPackingSlipTemplateLineItemDescriptionEnumBySearchTextRequest($search_text, $page, $limit);

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
     * Create request for operation 'getPackingSlipTemplateLineItemDescriptionEnumBySearchText'
     *
     * @param  string $search_text Search text, used to filter results. (optional)
     * @param  int $page Result page number.  Defaults to 1. (optional)
     * @param  int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPackingSlipTemplateLineItemDescriptionEnumBySearchTextRequest($search_text = null, $page = null, $limit = null)
    {

        $resourcePath = '/beta/packingSlipTemplateLineItemDescriptionEnum/search';
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
