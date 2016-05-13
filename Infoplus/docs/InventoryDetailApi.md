# Infoplus\InventoryDetailApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventoryDetailByFilter**](InventoryDetailApi.md#getInventoryDetailByFilter) | **GET** /v1.0/inventoryDetail/search | Search inventoryDetails by filter
[**getInventoryDetailById**](InventoryDetailApi.md#getInventoryDetailById) | **GET** /v1.0/inventoryDetail/{inventoryDetailId} | Get an inventoryDetail by id


# **getInventoryDetailByFilter**
> \Infoplus\Model\InventoryDetail[] getInventoryDetailByFilter($filter, $page, $limit, $sort)

Search inventoryDetails by filter

Returns the list of inventoryDetails that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInventoryDetailByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getInventoryDetailByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InventoryDetail[]**](InventoryDetail.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryDetailById**
> \Infoplus\Model\InventoryDetail getInventoryDetailById($inventory_detail_id)

Get an inventoryDetail by id

Returns the inventoryDetail identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to be returned.

try { 
    $result = $api_instance->getInventoryDetailById($inventory_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getInventoryDetailById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to be returned. | 

### Return type

[**\Infoplus\Model\InventoryDetail**](InventoryDetail.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

