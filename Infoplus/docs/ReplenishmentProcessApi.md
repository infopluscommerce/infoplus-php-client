# Infoplus\ReplenishmentProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReplenishmentProcessByFilter**](ReplenishmentProcessApi.md#getReplenishmentProcessByFilter) | **GET** /v1.0/replenishmentProcess/search | Search replenishmentProcesses by filter
[**getReplenishmentProcessById**](ReplenishmentProcessApi.md#getReplenishmentProcessById) | **GET** /v1.0/replenishmentProcess/{replenishmentProcessId} | Get a replenishmentProcess by id


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

