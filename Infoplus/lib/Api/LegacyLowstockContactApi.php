<?php
/**
 * LegacyLowstockContactApi
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
 * LegacyLowstockContactApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyLowstockContactApi
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
     * @return LegacyLowstockContactApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addLegacyLowstockContact
     *
     * Create a legacyLowstockContact
     *
     * @param \Infoplus\Model\LegacyLowstockContact $body LegacyLowstockContact to be inserted. (required)
     * @return \Infoplus\Model\LegacyLowstockContact
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addLegacyLowstockContact($body)
    {
        list($response, $statusCode, $httpHeader) = $this->addLegacyLowstockContactWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addLegacyLowstockContactWithHttpInfo
     *
     * Create a legacyLowstockContact
     *
     * @param \Infoplus\Model\LegacyLowstockContact $body LegacyLowstockContact to be inserted. (required)
     * @return Array of \Infoplus\Model\LegacyLowstockContact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addLegacyLowstockContactWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addLegacyLowstockContact');
        }
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact";
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
                $headerParams, '\Infoplus\Model\LegacyLowstockContact'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\LegacyLowstockContact', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\LegacyLowstockContact', $e->getResponseHeaders());
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
     * deleteLegacyLowstockContact
     *
     * Delete a legacyLowstockContact
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be deleted. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteLegacyLowstockContact($legacy_lowstock_contact_id)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteLegacyLowstockContactWithHttpInfo ($legacy_lowstock_contact_id);
        return $response; 
    }


    /**
     * deleteLegacyLowstockContactWithHttpInfo
     *
     * Delete a legacyLowstockContact
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be deleted. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteLegacyLowstockContactWithHttpInfo($legacy_lowstock_contact_id)
    {
        
        // verify the required parameter 'legacy_lowstock_contact_id' is set
        if ($legacy_lowstock_contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $legacy_lowstock_contact_id when calling deleteLegacyLowstockContact');
        }
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact/{legacyLowstockContactId}";
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
        
        if ($legacy_lowstock_contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "legacyLowstockContactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($legacy_lowstock_contact_id),
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
     * getDuplicateLegacyLowstockContactById
     *
     * Get a duplicated a legacyLowstockContact by id
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be duplicated. (required)
     * @return \Infoplus\Model\LegacyLowstockContact
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateLegacyLowstockContactById($legacy_lowstock_contact_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateLegacyLowstockContactByIdWithHttpInfo ($legacy_lowstock_contact_id);
        return $response; 
    }


    /**
     * getDuplicateLegacyLowstockContactByIdWithHttpInfo
     *
     * Get a duplicated a legacyLowstockContact by id
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be duplicated. (required)
     * @return Array of \Infoplus\Model\LegacyLowstockContact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateLegacyLowstockContactByIdWithHttpInfo($legacy_lowstock_contact_id)
    {
        
        // verify the required parameter 'legacy_lowstock_contact_id' is set
        if ($legacy_lowstock_contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $legacy_lowstock_contact_id when calling getDuplicateLegacyLowstockContactById');
        }
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact/duplicate/{legacyLowstockContactId}";
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
        
        if ($legacy_lowstock_contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "legacyLowstockContactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($legacy_lowstock_contact_id),
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
                $headerParams, '\Infoplus\Model\LegacyLowstockContact'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\LegacyLowstockContact', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\LegacyLowstockContact', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getLegacyLowstockContactByFilter
     *
     * Search legacyLowstockContacts by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\LegacyLowstockContact[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getLegacyLowstockContactByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getLegacyLowstockContactByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getLegacyLowstockContactByFilterWithHttpInfo
     *
     * Search legacyLowstockContacts by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\LegacyLowstockContact[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getLegacyLowstockContactByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact/search";
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
                $headerParams, '\Infoplus\Model\LegacyLowstockContact[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\LegacyLowstockContact[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\LegacyLowstockContact[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getLegacyLowstockContactById
     *
     * Get a legacyLowstockContact by id
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be returned. (required)
     * @return \Infoplus\Model\LegacyLowstockContact
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getLegacyLowstockContactById($legacy_lowstock_contact_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getLegacyLowstockContactByIdWithHttpInfo ($legacy_lowstock_contact_id);
        return $response; 
    }


    /**
     * getLegacyLowstockContactByIdWithHttpInfo
     *
     * Get a legacyLowstockContact by id
     *
     * @param int $legacy_lowstock_contact_id Id of the legacyLowstockContact to be returned. (required)
     * @return Array of \Infoplus\Model\LegacyLowstockContact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getLegacyLowstockContactByIdWithHttpInfo($legacy_lowstock_contact_id)
    {
        
        // verify the required parameter 'legacy_lowstock_contact_id' is set
        if ($legacy_lowstock_contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $legacy_lowstock_contact_id when calling getLegacyLowstockContactById');
        }
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact/{legacyLowstockContactId}";
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
        
        if ($legacy_lowstock_contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "legacyLowstockContactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($legacy_lowstock_contact_id),
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
                $headerParams, '\Infoplus\Model\LegacyLowstockContact'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\LegacyLowstockContact', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\LegacyLowstockContact', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * updateLegacyLowstockContact
     *
     * Update a legacyLowstockContact
     *
     * @param \Infoplus\Model\LegacyLowstockContact $body LegacyLowstockContact to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateLegacyLowstockContact($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateLegacyLowstockContactWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateLegacyLowstockContactWithHttpInfo
     *
     * Update a legacyLowstockContact
     *
     * @param \Infoplus\Model\LegacyLowstockContact $body LegacyLowstockContact to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateLegacyLowstockContactWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateLegacyLowstockContact');
        }
  
        // parse inputs
        $resourcePath = "/v2.0/legacyLowstockContact";
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
