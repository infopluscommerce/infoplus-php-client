# Infoplus\ItemProductCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemProductCodeBySearchText**](ItemProductCodeApi.md#getItemProductCodeBySearchText) | **GET** /v1.0/itemProductCode/search | Search itemProductCodes
[**getTranslateProductCodeById**](ItemProductCodeApi.md#getTranslateProductCodeById) | **GET** /v1.0/itemProductCode/{itemProductCodeId} | Get an itemProductCode by id


# **getItemProductCodeBySearchText**
> \Infoplus\Model\ItemProductCode[] getItemProductCodeBySearchText($search_text, $page, $limit)

Search itemProductCodes

Returns the list of itemProductCodes that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemProductCodeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemProductCode[]**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTranslateProductCodeById**
> \Infoplus\Model\ItemProductCode getTranslateProductCodeById($item_product_code_id)

Get an itemProductCode by id

Returns the itemProductCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemProductCodeApi();
$item_product_code_id = "item_product_code_id_example"; // string | Id of itemProductCode to be returned.

try { 
    $result = $api_instance->getTranslateProductCodeById($item_product_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getTranslateProductCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **string**| Id of itemProductCode to be returned. | 

### Return type

[**\Infoplus\Model\ItemProductCode**](ItemProductCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

