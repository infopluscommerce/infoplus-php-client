<?php
/**
 * OrderInvoiceTemplateLineItemDescriptionEnumApi
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Infoplus\Api;

use \Infoplus\Configuration;
use \Infoplus\ApiClient;
use \Infoplus\ApiException;
use \Infoplus\ObjectSerializer;

/**
 * OrderInvoiceTemplateLineItemDescriptionEnumApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderInvoiceTemplateLineItemDescriptionEnumApi
{

    /**
     * API Client
     * @var \Infoplus\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Infoplus\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Infoplus\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Infoplus\ApiClient $apiClient set the API client
     * @return OrderInvoiceTemplateLineItemDescriptionEnumApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getOrderInvoiceTemplateLineItemDescriptionEnumById
     *
     * Get an orderInvoiceTemplateLineItemDescriptionEnum by id
     *
     * @param string $order_invoice_template_line_item_description_enum_id Id of orderInvoiceTemplateLineItemDescriptionEnum to be returned. (required)
     * @return \Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getOrderInvoiceTemplateLineItemDescriptionEnumById($order_invoice_template_line_item_description_enum_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getOrderInvoiceTemplateLineItemDescriptionEnumByIdWithHttpInfo ($order_invoice_template_line_item_description_enum_id);
        return $response; 
    }


    /**
     * getOrderInvoiceTemplateLineItemDescriptionEnumByIdWithHttpInfo
     *
     * Get an orderInvoiceTemplateLineItemDescriptionEnum by id
     *
     * @param string $order_invoice_template_line_item_description_enum_id Id of orderInvoiceTemplateLineItemDescriptionEnum to be returned. (required)
     * @return Array of \Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getOrderInvoiceTemplateLineItemDescriptionEnumByIdWithHttpInfo($order_invoice_template_line_item_description_enum_id)
    {
        
        // verify the required parameter 'order_invoice_template_line_item_description_enum_id' is set
        if ($order_invoice_template_line_item_description_enum_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_invoice_template_line_item_description_enum_id when calling getOrderInvoiceTemplateLineItemDescriptionEnumById');
        }
  
        // parse inputs
        $resourcePath = "/beta/orderInvoiceTemplateLineItemDescriptionEnum/{orderInvoiceTemplateLineItemDescriptionEnumId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($order_invoice_template_line_item_description_enum_id !== null) {
            $resourcePath = str_replace(
                "{" . "orderInvoiceTemplateLineItemDescriptionEnumId" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_invoice_template_line_item_description_enum_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getOrderInvoiceTemplateLineItemDescriptionEnumBySearchText
     *
     * Search orderInvoiceTemplateLineItemDescriptionEnums
     *
     * @param string $search_text Search text, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @return \Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getOrderInvoiceTemplateLineItemDescriptionEnumBySearchText($search_text = null, $page = null, $limit = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getOrderInvoiceTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo ($search_text, $page, $limit);
        return $response; 
    }


    /**
     * getOrderInvoiceTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo
     *
     * Search orderInvoiceTemplateLineItemDescriptionEnums
     *
     * @param string $search_text Search text, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @return Array of \Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getOrderInvoiceTemplateLineItemDescriptionEnumBySearchTextWithHttpInfo($search_text = null, $page = null, $limit = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/orderInvoiceTemplateLineItemDescriptionEnum/search";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($search_text !== null) {
            $queryParams['searchText'] = $this->apiClient->getSerializer()->toQueryValue($search_text);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\OrderInvoiceTemplateLineItemDescriptionEnum[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}