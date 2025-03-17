# Infoplus\ProductTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductTypeById**](ProductTypeApi.md#getProductTypeById) | **GET** /beta/productType/{productTypeId} | Get a productType by id
[**getProductTypeBySearchText**](ProductTypeApi.md#getProductTypeBySearchText) | **GET** /beta/productType/search | Search productTypes


# **getProductTypeById**
> \Infoplus\Infoplus\Model\ProductType getProductTypeById($product_type_id)

Get a productType by id

Returns the productType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_type_id = "product_type_id_example"; // string | Id of productType to be returned.

try {
    $result = $apiInstance->getProductTypeById($product_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_type_id** | **string**| Id of productType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ProductType**](../Model/ProductType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductTypeBySearchText**
> \Infoplus\Infoplus\Model\ProductType[] getProductTypeBySearchText($search_text, $page, $limit)

Search productTypes

Returns the list of productTypes that match the given searchText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try {
    $result = $apiInstance->getProductTypeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeBySearchText: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

