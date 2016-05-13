# Infoplus\ReceivingProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReceivingProcess**](ReceivingProcessApi.md#deleteReceivingProcess) | **DELETE** /v1.0/receivingProcess/{receivingProcessId} | Delete a receivingProcess
[**getReceivingProcessByFilter**](ReceivingProcessApi.md#getReceivingProcessByFilter) | **GET** /v1.0/receivingProcess/search | Search receivingProcesses by filter
[**getReceivingProcessById**](ReceivingProcessApi.md#getReceivingProcessById) | **GET** /v1.0/receivingProcess/{receivingProcessId} | Get a receivingProcess by id


# **deleteReceivingProcess**
> deleteReceivingProcess($receiving_process_id)

Delete a receivingProcess

Deletes the receivingProcess identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingProcessApi();
$receiving_process_id = 56; // int | Id of the receivingProcess to be deleted.

try { 
    $api_instance->deleteReceivingProcess($receiving_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->deleteReceivingProcess: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceivingProcessByFilter**
> \Infoplus\Model\ReceivingProcess[] getReceivingProcessByFilter($filter, $page, $limit, $sort)

Search receivingProcesses by filter

Returns the list of receivingProcesses that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingProcessApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getReceivingProcessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ReceivingProcess[]**](ReceivingProcess.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceivingProcessById**
> \Infoplus\Model\ReceivingProcess getReceivingProcessById($receiving_process_id)

Get a receivingProcess by id

Returns the receivingProcess identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingProcessApi();
$receiving_process_id = 56; // int | Id of the receivingProcess to be returned.

try { 
    $result = $api_instance->getReceivingProcessById($receiving_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to be returned. | 

### Return type

[**\Infoplus\Model\ReceivingProcess**](ReceivingProcess.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

