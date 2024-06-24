# Infoplus\LoggedTimeTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLoggedTimeTypeById**](LoggedTimeTypeApi.md#getLoggedTimeTypeById) | **GET** /beta/loggedTimeType/{loggedTimeTypeId} | Get a loggedTimeType by id
[**getLoggedTimeTypeBySearchText**](LoggedTimeTypeApi.md#getLoggedTimeTypeBySearchText) | **GET** /beta/loggedTimeType/search | Search loggedTimeTypes


# **getLoggedTimeTypeById**
> \Infoplus\Infoplus\Model\LoggedTimeType getLoggedTimeTypeById($logged_time_type_id)

Get a loggedTimeType by id

Returns the loggedTimeType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_type_id = "logged_time_type_id_example"; // string | Id of loggedTimeType to be returned.

try {
    $result = $apiInstance->getLoggedTimeTypeById($logged_time_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeTypeApi->getLoggedTimeTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_type_id** | **string**| Id of loggedTimeType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LoggedTimeType**](../Model/LoggedTimeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedTimeTypeBySearchText**
> \Infoplus\Infoplus\Model\LoggedTimeType[] getLoggedTimeTypeBySearchText($search_text, $page, $limit)

Search loggedTimeTypes

Returns the list of loggedTimeTypes that match the given searchText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try {
    $result = $apiInstance->getLoggedTimeTypeBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeTypeApi->getLoggedTimeTypeBySearchText: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LoggedTimeType[]**](../Model/LoggedTimeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

