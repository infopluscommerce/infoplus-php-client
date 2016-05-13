# Infoplus\QuickAdjustmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuickAdjustment**](QuickAdjustmentApi.md#addQuickAdjustment) | **POST** /v1.0/quickAdjustment | Create a quickAdjustment
[**deleteQuickAdjustment**](QuickAdjustmentApi.md#deleteQuickAdjustment) | **DELETE** /v1.0/quickAdjustment/{quickAdjustmentId} | Delete a quickAdjustment
[**getQuickAdjustmentByFilter**](QuickAdjustmentApi.md#getQuickAdjustmentByFilter) | **GET** /v1.0/quickAdjustment/search | Search quickAdjustments by filter
[**getQuickAdjustmentById**](QuickAdjustmentApi.md#getQuickAdjustmentById) | **GET** /v1.0/quickAdjustment/{quickAdjustmentId} | Get a quickAdjustment by id
[**updateQuickAdjustment**](QuickAdjustmentApi.md#updateQuickAdjustment) | **PUT** /v1.0/quickAdjustment | Update a quickAdjustment


# **addQuickAdjustment**
> \Infoplus\Model\QuickAdjustment addQuickAdjustment($body)

Create a quickAdjustment

Inserts a new quickAdjustment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\QuickAdjustment(); // \Infoplus\Model\QuickAdjustment | QuickAdjustment to be inserted.

try { 
    $result = $api_instance->addQuickAdjustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickAdjustment**](\Infoplus\Model\QuickAdjustment.md)| QuickAdjustment to be inserted. | 

### Return type

[**\Infoplus\Model\QuickAdjustment**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteQuickAdjustment**
> deleteQuickAdjustment($quick_adjustment_id)

Delete a quickAdjustment

Deletes the quickAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be deleted.

try { 
    $api_instance->deleteQuickAdjustment($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickAdjustmentByFilter**
> \Infoplus\Model\QuickAdjustment[] getQuickAdjustmentByFilter($filter, $page, $limit, $sort)

Search quickAdjustments by filter

Returns the list of quickAdjustments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getQuickAdjustmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\QuickAdjustment[]**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickAdjustmentById**
> \Infoplus\Model\QuickAdjustment getQuickAdjustmentById($quick_adjustment_id)

Get a quickAdjustment by id

Returns the quickAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be returned.

try { 
    $result = $api_instance->getQuickAdjustmentById($quick_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be returned. | 

### Return type

[**\Infoplus\Model\QuickAdjustment**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateQuickAdjustment**
> updateQuickAdjustment($body)

Update a quickAdjustment

Updates an existing quickAdjustment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\QuickAdjustment(); // \Infoplus\Model\QuickAdjustment | QuickAdjustment to be updated.

try { 
    $api_instance->updateQuickAdjustment($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->updateQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickAdjustment**](\Infoplus\Model\QuickAdjustment.md)| QuickAdjustment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

