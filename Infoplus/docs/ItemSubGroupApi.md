# Infoplus\ItemSubGroupApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemSubGroupBySearchText**](ItemSubGroupApi.md#getItemSubGroupBySearchText) | **GET** /v1.0/itemSubGroup/search | Search itemSubGroups
[**getTranslateSubGroupById**](ItemSubGroupApi.md#getTranslateSubGroupById) | **GET** /v1.0/itemSubGroup/{itemSubGroupId} | Get an itemSubGroup by id


# **getItemSubGroupBySearchText**
> \Infoplus\Model\ItemSubGroup[] getItemSubGroupBySearchText($search_text, $page, $limit)

Search itemSubGroups

Returns the list of itemSubGroups that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubGroupApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemSubGroupBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubGroupApi->getItemSubGroupBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemSubGroup[]**](ItemSubGroup.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTranslateSubGroupById**
> \Infoplus\Model\ItemSubGroup getTranslateSubGroupById($item_sub_group_id)

Get an itemSubGroup by id

Returns the itemSubGroup identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubGroupApi();
$item_sub_group_id = "item_sub_group_id_example"; // string | Id of itemSubGroup to be returned.

try { 
    $result = $api_instance->getTranslateSubGroupById($item_sub_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubGroupApi->getTranslateSubGroupById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_group_id** | **string**| Id of itemSubGroup to be returned. | 

### Return type

[**\Infoplus\Model\ItemSubGroup**](ItemSubGroup.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

