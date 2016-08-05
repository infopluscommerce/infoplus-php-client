# Infoplus\ItemLowStockCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemLowStockCodeBySearchText**](ItemLowStockCodeApi.md#getItemLowStockCodeBySearchText) | **GET** /beta/itemLowStockCode/search | Search itemLowStockCodes
[**getTranslateLowStockCodeById**](ItemLowStockCodeApi.md#getTranslateLowStockCodeById) | **GET** /beta/itemLowStockCode/{itemLowStockCodeId} | Get an itemLowStockCode by id


# **getItemLowStockCodeBySearchText**
> \Infoplus\Model\ItemLowStockCode[] getItemLowStockCodeBySearchText($search_text, $page, $limit)

Search itemLowStockCodes

Returns the list of itemLowStockCodes that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowStockCodeApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemLowStockCodeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowStockCodeApi->getItemLowStockCodeBySearchText: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 

### Return type

[**\Infoplus\Model\ItemLowStockCode[]**](ItemLowStockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTranslateLowStockCodeById**
> \Infoplus\Model\ItemLowStockCode getTranslateLowStockCodeById($item_low_stock_code_id)

Get an itemLowStockCode by id

Returns the itemLowStockCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowStockCodeApi();
$item_low_stock_code_id = "item_low_stock_code_id_example"; // string | Id of itemLowStockCode to be returned.

try { 
    $result = $api_instance->getTranslateLowStockCodeById($item_low_stock_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowStockCodeApi->getTranslateLowStockCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_low_stock_code_id** | **string**| Id of itemLowStockCode to be returned. | 

### Return type

[**\Infoplus\Model\ItemLowStockCode**](ItemLowStockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
