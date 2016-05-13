# Infoplus\LoggedTimeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLoggedTimeByFilter**](LoggedTimeApi.md#getLoggedTimeByFilter) | **GET** /v1.0/loggedTime/search | Search loggedTimes by filter
[**getLoggedTimeById**](LoggedTimeApi.md#getLoggedTimeById) | **GET** /v1.0/loggedTime/{loggedTimeId} | Get a loggedTime by id


# **getLoggedTimeByFilter**
> \Infoplus\Model\LoggedTime[] getLoggedTimeByFilter($filter, $page, $limit, $sort)

Search loggedTimes by filter

Returns the list of loggedTimes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LoggedTimeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLoggedTimeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeByFilter: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Query string, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 
 **sort** | **string**| Sort results by specified field. | [optional] 

### Return type

[**\Infoplus\Model\LoggedTime[]**](LoggedTime.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLoggedTimeById**
> \Infoplus\Model\LoggedTime getLoggedTimeById($logged_time_id)

Get a loggedTime by id

Returns the loggedTime identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LoggedTimeApi();
$logged_time_id = 56; // int | Id of the loggedTime to be returned.

try { 
    $result = $api_instance->getLoggedTimeById($logged_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to be returned. | 

### Return type

[**\Infoplus\Model\LoggedTime**](LoggedTime.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

