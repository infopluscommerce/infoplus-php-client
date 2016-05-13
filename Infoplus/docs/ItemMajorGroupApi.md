# Infoplus\ItemMajorGroupApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItemMajorGroupBySearchText**](ItemMajorGroupApi.md#getItemMajorGroupBySearchText) | **GET** /v1.0/itemMajorGroup/search | Search itemMajorGroups
[**getTranslateMajorGroupById**](ItemMajorGroupApi.md#getTranslateMajorGroupById) | **GET** /v1.0/itemMajorGroup/{itemMajorGroupId} | Get an itemMajorGroup by id


# **getItemMajorGroupBySearchText**
> \Infoplus\Model\ItemMajorGroup[] getItemMajorGroupBySearchText($search_text, $page, $limit)

Search itemMajorGroups

Returns the list of itemMajorGroups that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemMajorGroupApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getItemMajorGroupBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemMajorGroupApi->getItemMajorGroupBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemMajorGroup[]**](ItemMajorGroup.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTranslateMajorGroupById**
> \Infoplus\Model\ItemMajorGroup getTranslateMajorGroupById($item_major_group_id)

Get an itemMajorGroup by id

Returns the itemMajorGroup identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemMajorGroupApi();
$item_major_group_id = "item_major_group_id_example"; // string | Id of itemMajorGroup to be returned.

try { 
    $result = $api_instance->getTranslateMajorGroupById($item_major_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemMajorGroupApi->getTranslateMajorGroupById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_major_group_id** | **string**| Id of itemMajorGroup to be returned. | 

### Return type

[**\Infoplus\Model\ItemMajorGroup**](ItemMajorGroup.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

