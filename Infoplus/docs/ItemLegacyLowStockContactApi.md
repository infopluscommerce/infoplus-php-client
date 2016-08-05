# Infoplus\ItemLegacyLowStockContactApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemLegacyLowStockContactBySearchText**](ItemLegacyLowStockContactApi.md#getItemLegacyLowStockContactBySearchText) | **GET** /beta/itemLegacyLowStockContact/search | Search itemLegacyLowStockContacts
[**getTranslateLowStockContactById**](ItemLegacyLowStockContactApi.md#getTranslateLowStockContactById) | **GET** /beta/itemLegacyLowStockContact/{itemLegacyLowStockContactId} | Get an itemLegacyLowStockContact by id


# **getItemLegacyLowStockContactBySearchText**
> \Infoplus\Model\ItemLegacyLowStockContact[] getItemLegacyLowStockContactBySearchText($search_text, $page, $limit)

Search itemLegacyLowStockContacts

Returns the list of itemLegacyLowStockContacts that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLegacyLowStockContactApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemLegacyLowStockContactBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLegacyLowStockContactApi->getItemLegacyLowStockContactBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemLegacyLowStockContact[]**](ItemLegacyLowStockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTranslateLowStockContactById**
> \Infoplus\Model\ItemLegacyLowStockContact getTranslateLowStockContactById($item_legacy_low_stock_contact_id)

Get an itemLegacyLowStockContact by id

Returns the itemLegacyLowStockContact identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLegacyLowStockContactApi();
$item_legacy_low_stock_contact_id = "item_legacy_low_stock_contact_id_example"; // string | Id of itemLegacyLowStockContact to be returned.

try { 
    $result = $api_instance->getTranslateLowStockContactById($item_legacy_low_stock_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLegacyLowStockContactApi->getTranslateLowStockContactById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_legacy_low_stock_contact_id** | **string**| Id of itemLegacyLowStockContact to be returned. | 

### Return type

[**\Infoplus\Model\ItemLegacyLowStockContact**](ItemLegacyLowStockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

