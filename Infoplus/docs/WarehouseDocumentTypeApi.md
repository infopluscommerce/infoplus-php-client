# Infoplus\WarehouseDocumentTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWarehouseDocumentTypeByFilter**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeByFilter) | **GET** /v1.0/warehouseDocumentType/search | Search warehouseDocumentTypes by filter
[**getWarehouseDocumentTypeById**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeById) | **GET** /v1.0/warehouseDocumentType/{warehouseDocumentTypeId} | Get a warehouseDocumentType by id


# **getWarehouseDocumentTypeByFilter**
> \Infoplus\Model\WarehouseDocumentType[] getWarehouseDocumentTypeByFilter($filter, $page, $limit, $sort)

Search warehouseDocumentTypes by filter

Returns the list of warehouseDocumentTypes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentTypeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWarehouseDocumentTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\WarehouseDocumentType[]**](WarehouseDocumentType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWarehouseDocumentTypeById**
> \Infoplus\Model\WarehouseDocumentType getWarehouseDocumentTypeById($warehouse_document_type_id)

Get a warehouseDocumentType by id

Returns the warehouseDocumentType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentTypeApi();
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to be returned.

try { 
    $result = $api_instance->getWarehouseDocumentTypeById($warehouse_document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to be returned. | 

### Return type

[**\Infoplus\Model\WarehouseDocumentType**](WarehouseDocumentType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

