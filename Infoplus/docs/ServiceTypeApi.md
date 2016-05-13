# Infoplus\ServiceTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServiceTypeById**](ServiceTypeApi.md#getServiceTypeById) | **GET** /v1.0/serviceType/{serviceTypeId} | Get a serviceType by id
[**getServiceTypeBySearchText**](ServiceTypeApi.md#getServiceTypeBySearchText) | **GET** /v1.0/serviceType/search | Search serviceTypes


# **getServiceTypeById**
> \Infoplus\Model\ServiceType getServiceTypeById($service_type_id)

Get a serviceType by id

Returns the serviceType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ServiceTypeApi();
$service_type_id = "service_type_id_example"; // string | Id of serviceType to be returned.

try { 
    $result = $api_instance->getServiceTypeById($service_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTypeApi->getServiceTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_type_id** | **string**| Id of serviceType to be returned. | 

### Return type

[**\Infoplus\Model\ServiceType**](ServiceType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getServiceTypeBySearchText**
> \Infoplus\Model\ServiceType[] getServiceTypeBySearchText($search_text, $page, $limit)

Search serviceTypes

Returns the list of serviceTypes that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ServiceTypeApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getServiceTypeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceTypeApi->getServiceTypeBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ServiceType[]**](ServiceType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

