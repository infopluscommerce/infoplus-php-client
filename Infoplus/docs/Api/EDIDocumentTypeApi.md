# Infoplus\EDIDocumentTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEDIDocumentTypeById**](EDIDocumentTypeApi.md#getEDIDocumentTypeById) | **GET** /beta/eDIDocumentType/{eDIDocumentTypeId} | Get an eDIDocumentType by id
[**getEDIDocumentTypeBySearchText**](EDIDocumentTypeApi.md#getEDIDocumentTypeBySearchText) | **GET** /beta/eDIDocumentType/search | Search eDIDocumentTypes


# **getEDIDocumentTypeById**
> \Infoplus\Infoplus\Model\EDIDocumentType getEDIDocumentTypeById($e_di_document_type_id)

Get an eDIDocumentType by id

Returns the eDIDocumentType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EDIDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$e_di_document_type_id = "e_di_document_type_id_example"; // string | Id of eDIDocumentType to be returned.

try {
    $result = $apiInstance->getEDIDocumentTypeById($e_di_document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EDIDocumentTypeApi->getEDIDocumentTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **e_di_document_type_id** | **string**| Id of eDIDocumentType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\EDIDocumentType**](../Model/EDIDocumentType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEDIDocumentTypeBySearchText**
> \Infoplus\Infoplus\Model\EDIDocumentType[] getEDIDocumentTypeBySearchText($search_text, $page, $limit)

Search eDIDocumentTypes

Returns the list of eDIDocumentTypes that match the given searchText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EDIDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try {
    $result = $apiInstance->getEDIDocumentTypeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EDIDocumentTypeApi->getEDIDocumentTypeBySearchText: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\EDIDocumentType[]**](../Model/EDIDocumentType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

