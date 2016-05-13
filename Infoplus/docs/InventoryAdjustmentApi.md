# Infoplus\InventoryAdjustmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInventoryAdjustmentByFilter**](InventoryAdjustmentApi.md#getInventoryAdjustmentByFilter) | **GET** /v1.0/inventoryAdjustment/search | Search inventoryAdjustments by filter
[**getInventoryAdjustmentById**](InventoryAdjustmentApi.md#getInventoryAdjustmentById) | **GET** /v1.0/inventoryAdjustment/{inventoryAdjustmentId} | Get an inventoryAdjustment by id


# **getInventoryAdjustmentByFilter**
> \Infoplus\Model\InventoryAdjustment[] getInventoryAdjustmentByFilter($filter, $page, $limit, $sort)

Search inventoryAdjustments by filter

Returns the list of inventoryAdjustments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInventoryAdjustmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getInventoryAdjustmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InventoryAdjustment[]**](InventoryAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryAdjustmentById**
> \Infoplus\Model\InventoryAdjustment getInventoryAdjustmentById($inventory_adjustment_id)

Get an inventoryAdjustment by id

Returns the inventoryAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to be returned.

try { 
    $result = $api_instance->getInventoryAdjustmentById($inventory_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getInventoryAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to be returned. | 

### Return type

[**\Infoplus\Model\InventoryAdjustment**](InventoryAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

