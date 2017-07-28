<?php
/**
 * ItemSectorApi
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
 * ItemSectorApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemSectorApi
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
     * @return ItemSectorApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addItemSector
     *
     * Create an itemSector
     *
     * @param \Infoplus\Model\ItemSector $body ItemSector to be inserted. (required)
     * @return \Infoplus\Model\ItemSector
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSector($body)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSectorWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addItemSectorWithHttpInfo
     *
     * Create an itemSector
     *
     * @param \Infoplus\Model\ItemSector $body ItemSector to be inserted. (required)
     * @return Array of \Infoplus\Model\ItemSector, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSectorWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addItemSector');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\ItemSector'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSector', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSector', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 405:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ApiResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * addItemSectorAudit
     *
     * Add new audit for an itemSector
     *
     * @param int $item_sector_id Id of the itemSector to add an audit to (required)
     * @param string $item_sector_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSectorAudit($item_sector_id, $item_sector_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSectorAuditWithHttpInfo ($item_sector_id, $item_sector_audit);
        return $response; 
    }


    /**
     * addItemSectorAuditWithHttpInfo
     *
     * Add new audit for an itemSector
     *
     * @param int $item_sector_id Id of the itemSector to add an audit to (required)
     * @param string $item_sector_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSectorAuditWithHttpInfo($item_sector_id, $item_sector_audit)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling addItemSectorAudit');
        }
        // verify the required parameter 'item_sector_audit' is set
        if ($item_sector_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_audit when calling addItemSectorAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}/audit/{itemSectorAudit}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sector_audit !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_audit),
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * addItemSectorTag
     *
     * Add new tags for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to add a tag to (required)
     * @param string $item_sector_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSectorTag($item_sector_id, $item_sector_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addItemSectorTagWithHttpInfo ($item_sector_id, $item_sector_tag);
        return $response; 
    }


    /**
     * addItemSectorTagWithHttpInfo
     *
     * Add new tags for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to add a tag to (required)
     * @param string $item_sector_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addItemSectorTagWithHttpInfo($item_sector_id, $item_sector_tag)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling addItemSectorTag');
        }
        // verify the required parameter 'item_sector_tag' is set
        if ($item_sector_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_tag when calling addItemSectorTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}/tag/{itemSectorTag}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sector_tag !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_tag),
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteItemSector
     *
     * Delete an itemSector
     *
     * @param int $item_sector_id Id of the itemSector to be deleted. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSector($item_sector_id)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteItemSectorWithHttpInfo ($item_sector_id);
        return $response; 
    }


    /**
     * deleteItemSectorWithHttpInfo
     *
     * Delete an itemSector
     *
     * @param int $item_sector_id Id of the itemSector to be deleted. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSectorWithHttpInfo($item_sector_id)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling deleteItemSector');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}";
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
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
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
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteItemSectorTag
     *
     * Delete a tag for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to remove tag from (required)
     * @param string $item_sector_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSectorTag($item_sector_id, $item_sector_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteItemSectorTagWithHttpInfo ($item_sector_id, $item_sector_tag);
        return $response; 
    }


    /**
     * deleteItemSectorTagWithHttpInfo
     *
     * Delete a tag for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to remove tag from (required)
     * @param string $item_sector_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteItemSectorTagWithHttpInfo($item_sector_id, $item_sector_tag)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling deleteItemSectorTag');
        }
        // verify the required parameter 'item_sector_tag' is set
        if ($item_sector_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_tag when calling deleteItemSectorTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}/tag/{itemSectorTag}";
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
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
                $resourcePath
            );
        }// path params
        
        if ($item_sector_tag !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_tag),
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
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getDuplicateItemSectorById
     *
     * Get a duplicated an itemSector by id
     *
     * @param int $item_sector_id Id of the itemSector to be duplicated. (required)
     * @return \Infoplus\Model\ItemSector
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateItemSectorById($item_sector_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateItemSectorByIdWithHttpInfo ($item_sector_id);
        return $response; 
    }


    /**
     * getDuplicateItemSectorByIdWithHttpInfo
     *
     * Get a duplicated an itemSector by id
     *
     * @param int $item_sector_id Id of the itemSector to be duplicated. (required)
     * @return Array of \Infoplus\Model\ItemSector, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateItemSectorByIdWithHttpInfo($item_sector_id)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling getDuplicateItemSectorById');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/duplicate/{itemSectorId}";
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
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
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
                $headerParams, '\Infoplus\Model\ItemSector'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSector', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSector', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSectorByFilter
     *
     * Search itemSectors by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\ItemSector[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSectorByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getItemSectorByFilterWithHttpInfo
     *
     * Search itemSectors by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\ItemSector[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/itemSector/search";
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
        
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams, '\Infoplus\Model\ItemSector[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSector[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSector[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSectorById
     *
     * Get an itemSector by id
     *
     * @param int $item_sector_id Id of the itemSector to be returned. (required)
     * @return \Infoplus\Model\ItemSector
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorById($item_sector_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSectorByIdWithHttpInfo ($item_sector_id);
        return $response; 
    }


    /**
     * getItemSectorByIdWithHttpInfo
     *
     * Get an itemSector by id
     *
     * @param int $item_sector_id Id of the itemSector to be returned. (required)
     * @return Array of \Infoplus\Model\ItemSector, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorByIdWithHttpInfo($item_sector_id)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling getItemSectorById');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}";
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
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
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
                $headerParams, '\Infoplus\Model\ItemSector'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ItemSector', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ItemSector', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getItemSectorTags
     *
     * Get the tags for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorTags($item_sector_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getItemSectorTagsWithHttpInfo ($item_sector_id);
        return $response; 
    }


    /**
     * getItemSectorTagsWithHttpInfo
     *
     * Get the tags for an itemSector.
     *
     * @param int $item_sector_id Id of the itemSector to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getItemSectorTagsWithHttpInfo($item_sector_id)
    {
        
        // verify the required parameter 'item_sector_id' is set
        if ($item_sector_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $item_sector_id when calling getItemSectorTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector/{itemSectorId}/tag";
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
        
        if ($item_sector_id !== null) {
            $resourcePath = str_replace(
                "{" . "itemSectorId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_sector_id),
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
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * updateItemSector
     *
     * Update an itemSector
     *
     * @param \Infoplus\Model\ItemSector $body ItemSector to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateItemSector($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateItemSectorWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateItemSectorWithHttpInfo
     *
     * Update an itemSector
     *
     * @param \Infoplus\Model\ItemSector $body ItemSector to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateItemSectorWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateItemSector');
        }
  
        // parse inputs
        $resourcePath = "/beta/itemSector";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}