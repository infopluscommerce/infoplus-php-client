# Infoplus\BusinessTransactionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBusinessTransactionByFilter**](BusinessTransactionApi.md#getBusinessTransactionByFilter) | **GET** /v1.0/businessTransaction/search | Search businessTransactions by filter
[**getBusinessTransactionById**](BusinessTransactionApi.md#getBusinessTransactionById) | **GET** /v1.0/businessTransaction/{businessTransactionId} | Get a businessTransaction by id


# **getBusinessTransactionByFilter**
> \Infoplus\Model\BusinessTransaction[] getBusinessTransactionByFilter($filter, $page, $limit, $sort)

Search businessTransactions by filter

Returns the list of businessTransactions that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getBusinessTransactionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getBusinessTransactionByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\BusinessTransaction[]**](BusinessTransaction.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBusinessTransactionById**
> \Infoplus\Model\BusinessTransaction getBusinessTransactionById($business_transaction_id)

Get a businessTransaction by id

Returns the businessTransaction identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to be returned.

try { 
    $result = $api_instance->getBusinessTransactionById($business_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getBusinessTransactionById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to be returned. | 

### Return type

[**\Infoplus\Model\BusinessTransaction**](BusinessTransaction.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

