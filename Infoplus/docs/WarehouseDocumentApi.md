# Infoplus\WarehouseDocumentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWarehouseDocumentByFilter**](WarehouseDocumentApi.md#getWarehouseDocumentByFilter) | **GET** /v1.0/warehouseDocument/search | Search warehouseDocuments by filter
[**getWarehouseDocumentById**](WarehouseDocumentApi.md#getWarehouseDocumentById) | **GET** /v1.0/warehouseDocument/{warehouseDocumentId} | Get a warehouseDocument by id


# **getWarehouseDocumentByFilter**
> \Infoplus\Model\WarehouseDocument[] getWarehouseDocumentByFilter($filter, $page, $limit, $sort)

Search warehouseDocuments by filter

Returns the list of warehouseDocuments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWarehouseDocumentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getWarehouseDocumentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\WarehouseDocument[]**](WarehouseDocument.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWarehouseDocumentById**
> \Infoplus\Model\WarehouseDocument getWarehouseDocumentById($warehouse_document_id)

Get a warehouseDocument by id

Returns the warehouseDocument identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to be returned.

try { 
    $result = $api_instance->getWarehouseDocumentById($warehouse_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getWarehouseDocumentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to be returned. | 

### Return type

[**\Infoplus\Model\WarehouseDocument**](WarehouseDocument.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

