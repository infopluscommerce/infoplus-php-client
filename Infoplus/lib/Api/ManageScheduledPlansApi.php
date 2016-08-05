<?php
/**
 * ManageScheduledPlansApi
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
 * ManageScheduledPlansApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManageScheduledPlansApi
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
     * @return ManageScheduledPlansApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addManageScheduledPlans
     *
     * Create a manageScheduledPlans
     *
     * @param \Infoplus\Model\ManageScheduledPlans $body ManageScheduledPlans to be inserted. (required)
     * @return \Infoplus\Model\ManageScheduledPlans
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addManageScheduledPlans($body)
    {
        list($response, $statusCode, $httpHeader) = $this->addManageScheduledPlansWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addManageScheduledPlansWithHttpInfo
     *
     * Create a manageScheduledPlans
     *
     * @param \Infoplus\Model\ManageScheduledPlans $body ManageScheduledPlans to be inserted. (required)
     * @return Array of \Infoplus\Model\ManageScheduledPlans, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addManageScheduledPlansWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addManageScheduledPlans');
        }
  
        // parse inputs
        $resourcePath = "/beta/manageScheduledPlans";
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
                $headerParams, '\Infoplus\Model\ManageScheduledPlans'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ManageScheduledPlans', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ManageScheduledPlans', $e->getResponseHeaders());
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
     * deleteManageScheduledPlans
     *
     * Delete a manageScheduledPlans
     *
     * @param int $manage_scheduled_plans_id Id of the manageScheduledPlans to be deleted. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteManageScheduledPlans($manage_scheduled_plans_id)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteManageScheduledPlansWithHttpInfo ($manage_scheduled_plans_id);
        return $response; 
    }


    /**
     * deleteManageScheduledPlansWithHttpInfo
     *
     * Delete a manageScheduledPlans
     *
     * @param int $manage_scheduled_plans_id Id of the manageScheduledPlans to be deleted. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteManageScheduledPlansWithHttpInfo($manage_scheduled_plans_id)
    {
        
        // verify the required parameter 'manage_scheduled_plans_id' is set
        if ($manage_scheduled_plans_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $manage_scheduled_plans_id when calling deleteManageScheduledPlans');
        }
  
        // parse inputs
        $resourcePath = "/beta/manageScheduledPlans/{manageScheduledPlansId}";
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
        
        if ($manage_scheduled_plans_id !== null) {
            $resourcePath = str_replace(
                "{" . "manageScheduledPlansId" . "}",
                $this->apiClient->getSerializer()->toPathValue($manage_scheduled_plans_id),
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
     * getManageScheduledPlansByFilter
     *
     * Search manageScheduledPlanses by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\ManageScheduledPlans[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getManageScheduledPlansByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getManageScheduledPlansByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getManageScheduledPlansByFilterWithHttpInfo
     *
     * Search manageScheduledPlanses by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\ManageScheduledPlans[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getManageScheduledPlansByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/manageScheduledPlans/search";
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
                $headerParams, '\Infoplus\Model\ManageScheduledPlans[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ManageScheduledPlans[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ManageScheduledPlans[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getManageScheduledPlansById
     *
     * Get a manageScheduledPlans by id
     *
     * @param int $manage_scheduled_plans_id Id of the manageScheduledPlans to be returned. (required)
     * @return \Infoplus\Model\ManageScheduledPlans
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getManageScheduledPlansById($manage_scheduled_plans_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getManageScheduledPlansByIdWithHttpInfo ($manage_scheduled_plans_id);
        return $response; 
    }


    /**
     * getManageScheduledPlansByIdWithHttpInfo
     *
     * Get a manageScheduledPlans by id
     *
     * @param int $manage_scheduled_plans_id Id of the manageScheduledPlans to be returned. (required)
     * @return Array of \Infoplus\Model\ManageScheduledPlans, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getManageScheduledPlansByIdWithHttpInfo($manage_scheduled_plans_id)
    {
        
        // verify the required parameter 'manage_scheduled_plans_id' is set
        if ($manage_scheduled_plans_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $manage_scheduled_plans_id when calling getManageScheduledPlansById');
        }
  
        // parse inputs
        $resourcePath = "/beta/manageScheduledPlans/{manageScheduledPlansId}";
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
        
        if ($manage_scheduled_plans_id !== null) {
            $resourcePath = str_replace(
                "{" . "manageScheduledPlansId" . "}",
                $this->apiClient->getSerializer()->toPathValue($manage_scheduled_plans_id),
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
                $headerParams, '\Infoplus\Model\ManageScheduledPlans'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ManageScheduledPlans', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ManageScheduledPlans', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * updateManageScheduledPlans
     *
     * Update a manageScheduledPlans
     *
     * @param \Infoplus\Model\ManageScheduledPlans $body ManageScheduledPlans to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateManageScheduledPlans($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateManageScheduledPlansWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateManageScheduledPlansWithHttpInfo
     *
     * Update a manageScheduledPlans
     *
     * @param \Infoplus\Model\ManageScheduledPlans $body ManageScheduledPlans to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateManageScheduledPlansWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateManageScheduledPlans');
        }
  
        // parse inputs
        $resourcePath = "/beta/manageScheduledPlans";
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