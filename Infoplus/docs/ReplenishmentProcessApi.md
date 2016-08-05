# Infoplus\ReplenishmentProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReplenishmentProcessByFilter**](ReplenishmentProcessApi.md#getReplenishmentProcessByFilter) | **GET** /beta/replenishmentProcess/search | Search replenishmentProcesses by filter
[**getReplenishmentProcessById**](ReplenishmentProcessApi.md#getReplenishmentProcessById) | **GET** /beta/replenishmentProcess/{replenishmentProcessId} | Get a replenishmentProcess by id
[**updateReplenishmentProcessCustomFields**](ReplenishmentProcessApi.md#updateReplenishmentProcessCustomFields) | **PUT** /beta/replenishmentProcess/customFields | Update a replenishmentProcess custom fields


# **getReplenishmentProcessByFilter**
> \Infoplus\Model\ReplenishmentProcess[] getReplenishmentProcessByFilter($filter, $page, $limit, $sort)

Search replenishmentProcesses by filter

Returns the list of replenishmentProcesses that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentProcessApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getReplenishmentProcessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessByFilter: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Query string, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 
 **sort** | **string**| Sort results by specified field. | [optional] 

### Return type

[**\Infoplus\Model\ReplenishmentProcess[]**](ReplenishmentProcess.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentProcessById**
> \Infoplus\Model\ReplenishmentProcess getReplenishmentProcessById($replenishment_process_id)

Get a replenishmentProcess by id

Returns the replenishmentProcess identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentProcessApi();
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to be returned.

try { 
    $result = $api_instance->getReplenishmentProcessById($replenishment_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to be returned. | 

### Return type

[**\Infoplus\Model\ReplenishmentProcess**](ReplenishmentProcess.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReplenishmentProcessCustomFields**
> updateReplenishmentProcessCustomFields($body)

Update a replenishmentProcess custom fields

Updates an existing replenishmentProcess custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentProcessApi();
$body = new \Infoplus\Model\ReplenishmentProcess(); // \Infoplus\Model\ReplenishmentProcess | ReplenishmentProcess to be updated.

try { 
    $api_instance->updateReplenishmentProcessCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->updateReplenishmentProcessCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ReplenishmentProcess**](\Infoplus\Model\ReplenishmentProcess.md)| ReplenishmentProcess to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

