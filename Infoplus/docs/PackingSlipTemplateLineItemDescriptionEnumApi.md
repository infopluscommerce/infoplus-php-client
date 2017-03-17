# Infoplus\PackingSlipTemplateLineItemDescriptionEnumApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPackingSlipTemplateLineItemDescriptionEnumById**](PackingSlipTemplateLineItemDescriptionEnumApi.md#getPackingSlipTemplateLineItemDescriptionEnumById) | **GET** /beta/packingSlipTemplateLineItemDescriptionEnum/{packingSlipTemplateLineItemDescriptionEnumId} | Get a packingSlipTemplateLineItemDescriptionEnum by id
[**getPackingSlipTemplateLineItemDescriptionEnumBySearchText**](PackingSlipTemplateLineItemDescriptionEnumApi.md#getPackingSlipTemplateLineItemDescriptionEnumBySearchText) | **GET** /beta/packingSlipTemplateLineItemDescriptionEnum/search | Search packingSlipTemplateLineItemDescriptionEnums


# **getPackingSlipTemplateLineItemDescriptionEnumById**
> \Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum getPackingSlipTemplateLineItemDescriptionEnumById($packing_slip_template_line_item_description_enum_id)

Get a packingSlipTemplateLineItemDescriptionEnum by id

Returns the packingSlipTemplateLineItemDescriptionEnum identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PackingSlipTemplateLineItemDescriptionEnumApi();
$packing_slip_template_line_item_description_enum_id = "packing_slip_template_line_item_description_enum_id_example"; // string | Id of packingSlipTemplateLineItemDescriptionEnum to be returned.

try { 
    $result = $api_instance->getPackingSlipTemplateLineItemDescriptionEnumById($packing_slip_template_line_item_description_enum_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingSlipTemplateLineItemDescriptionEnumApi->getPackingSlipTemplateLineItemDescriptionEnumById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_slip_template_line_item_description_enum_id** | **string**| Id of packingSlipTemplateLineItemDescriptionEnum to be returned. | 

### Return type

[**\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum**](PackingSlipTemplateLineItemDescriptionEnum.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPackingSlipTemplateLineItemDescriptionEnumBySearchText**
> \Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[] getPackingSlipTemplateLineItemDescriptionEnumBySearchText($search_text, $page, $limit)

Search packingSlipTemplateLineItemDescriptionEnums

Returns the list of packingSlipTemplateLineItemDescriptionEnums that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PackingSlipTemplateLineItemDescriptionEnumApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getPackingSlipTemplateLineItemDescriptionEnumBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingSlipTemplateLineItemDescriptionEnumApi->getPackingSlipTemplateLineItemDescriptionEnumBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\PackingSlipTemplateLineItemDescriptionEnum[]**](PackingSlipTemplateLineItemDescriptionEnum.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

