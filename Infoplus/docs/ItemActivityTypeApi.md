# Infoplus\ItemActivityTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemActivityTypeById**](ItemActivityTypeApi.md#getItemActivityTypeById) | **GET** /v2.0/itemActivityType/{itemActivityTypeId} | Get an itemActivityType by id
[**getItemActivityTypeBySearchText**](ItemActivityTypeApi.md#getItemActivityTypeBySearchText) | **GET** /v2.0/itemActivityType/search | Search itemActivityTypes


# **getItemActivityTypeById**
> \Infoplus\Model\ItemActivityType getItemActivityTypeById($item_activity_type_id)

Get an itemActivityType by id

Returns the itemActivityType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemActivityTypeApi();
$item_activity_type_id = "item_activity_type_id_example"; // string | Id of itemActivityType to be returned.

try { 
    $result = $api_instance->getItemActivityTypeById($item_activity_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityTypeApi->getItemActivityTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_type_id** | **string**| Id of itemActivityType to be returned. | 

### Return type

[**\Infoplus\Model\ItemActivityType**](ItemActivityType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemActivityTypeBySearchText**
> \Infoplus\Model\ItemActivityType[] getItemActivityTypeBySearchText($search_text, $page, $limit)

Search itemActivityTypes

Returns the list of itemActivityTypes that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemActivityTypeApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemActivityTypeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityTypeApi->getItemActivityTypeBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemActivityType[]**](ItemActivityType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

