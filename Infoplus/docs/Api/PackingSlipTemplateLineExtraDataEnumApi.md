# Infoplus\PackingSlipTemplateLineExtraDataEnumApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackingSlipTemplateLineExtraDataEnumById**](PackingSlipTemplateLineExtraDataEnumApi.md#getPackingSlipTemplateLineExtraDataEnumById) | **GET** /beta/packingSlipTemplateLineExtraDataEnum/{packingSlipTemplateLineExtraDataEnumId} | Get a packingSlipTemplateLineExtraDataEnum by id
[**getPackingSlipTemplateLineExtraDataEnumBySearchText**](PackingSlipTemplateLineExtraDataEnumApi.md#getPackingSlipTemplateLineExtraDataEnumBySearchText) | **GET** /beta/packingSlipTemplateLineExtraDataEnum/search | Search packingSlipTemplateLineExtraDataEnums


# **getPackingSlipTemplateLineExtraDataEnumById**
> \Infoplus\Infoplus\Model\PackingSlipTemplateLineExtraDataEnum getPackingSlipTemplateLineExtraDataEnumById($packing_slip_template_line_extra_data_enum_id)

Get a packingSlipTemplateLineExtraDataEnum by id

Returns the packingSlipTemplateLineExtraDataEnum identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingSlipTemplateLineExtraDataEnumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_slip_template_line_extra_data_enum_id = "packing_slip_template_line_extra_data_enum_id_example"; // string | Id of packingSlipTemplateLineExtraDataEnum to be returned.

try {
    $result = $apiInstance->getPackingSlipTemplateLineExtraDataEnumById($packing_slip_template_line_extra_data_enum_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingSlipTemplateLineExtraDataEnumApi->getPackingSlipTemplateLineExtraDataEnumById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_slip_template_line_extra_data_enum_id** | **string**| Id of packingSlipTemplateLineExtraDataEnum to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PackingSlipTemplateLineExtraDataEnum**](../Model/PackingSlipTemplateLineExtraDataEnum.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingSlipTemplateLineExtraDataEnumBySearchText**
> \Infoplus\Infoplus\Model\PackingSlipTemplateLineExtraDataEnum[] getPackingSlipTemplateLineExtraDataEnumBySearchText($search_text, $page, $limit)

Search packingSlipTemplateLineExtraDataEnums

Returns the list of packingSlipTemplateLineExtraDataEnums that match the given searchText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingSlipTemplateLineExtraDataEnumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try {
    $result = $apiInstance->getPackingSlipTemplateLineExtraDataEnumBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingSlipTemplateLineExtraDataEnumApi->getPackingSlipTemplateLineExtraDataEnumBySearchText: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PackingSlipTemplateLineExtraDataEnum[]**](../Model/PackingSlipTemplateLineExtraDataEnum.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

