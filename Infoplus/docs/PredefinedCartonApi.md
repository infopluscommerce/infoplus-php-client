# Infoplus\PredefinedCartonApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPredefinedCartonById**](PredefinedCartonApi.md#getPredefinedCartonById) | **GET** /beta/predefinedCarton/{predefinedCartonId} | Get a predefinedCarton by id
[**getPredefinedCartonBySearchText**](PredefinedCartonApi.md#getPredefinedCartonBySearchText) | **GET** /beta/predefinedCarton/search | Search predefinedCartons


# **getPredefinedCartonById**
> \Infoplus\Model\PredefinedCarton getPredefinedCartonById($predefined_carton_id)

Get a predefinedCarton by id

Returns the predefinedCarton identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PredefinedCartonApi();
$predefined_carton_id = "predefined_carton_id_example"; // string | Id of predefinedCarton to be returned.

try { 
    $result = $api_instance->getPredefinedCartonById($predefined_carton_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedCartonApi->getPredefinedCartonById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_carton_id** | **string**| Id of predefinedCarton to be returned. | 

### Return type

[**\Infoplus\Model\PredefinedCarton**](PredefinedCarton.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPredefinedCartonBySearchText**
> \Infoplus\Model\PredefinedCarton[] getPredefinedCartonBySearchText($search_text, $page, $limit)

Search predefinedCartons

Returns the list of predefinedCartons that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PredefinedCartonApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getPredefinedCartonBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedCartonApi->getPredefinedCartonBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\PredefinedCarton[]**](PredefinedCarton.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

