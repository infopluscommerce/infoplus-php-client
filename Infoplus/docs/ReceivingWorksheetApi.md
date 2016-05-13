# Infoplus\ReceivingWorksheetApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReceivingWorksheet**](ReceivingWorksheetApi.md#addReceivingWorksheet) | **POST** /v1.0/receivingWorksheet | Create a receivingWorksheet
[**deleteReceivingWorksheet**](ReceivingWorksheetApi.md#deleteReceivingWorksheet) | **DELETE** /v1.0/receivingWorksheet/{receivingWorksheetId} | Delete a receivingWorksheet
[**getReceivingWorksheetByFilter**](ReceivingWorksheetApi.md#getReceivingWorksheetByFilter) | **GET** /v1.0/receivingWorksheet/search | Search receivingWorksheets by filter
[**getReceivingWorksheetById**](ReceivingWorksheetApi.md#getReceivingWorksheetById) | **GET** /v1.0/receivingWorksheet/{receivingWorksheetId} | Get a receivingWorksheet by id
[**updateReceivingWorksheet**](ReceivingWorksheetApi.md#updateReceivingWorksheet) | **PUT** /v1.0/receivingWorksheet | Update a receivingWorksheet


# **addReceivingWorksheet**
> \Infoplus\Model\ReceivingWorksheet addReceivingWorksheet($body)

Create a receivingWorksheet

Inserts a new receivingWorksheet using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingWorksheetApi();
$body = new \Infoplus\Model\ReceivingWorksheet(); // \Infoplus\Model\ReceivingWorksheet | ReceivingWorksheet to be inserted.

try { 
    $result = $api_instance->addReceivingWorksheet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ReceivingWorksheet**](\Infoplus\Model\ReceivingWorksheet.md)| ReceivingWorksheet to be inserted. | 

### Return type

[**\Infoplus\Model\ReceivingWorksheet**](ReceivingWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteReceivingWorksheet**
> deleteReceivingWorksheet($receiving_worksheet_id)

Delete a receivingWorksheet

Deletes the receivingWorksheet identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingWorksheetApi();
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to be deleted.

try { 
    $api_instance->deleteReceivingWorksheet($receiving_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->deleteReceivingWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceivingWorksheetByFilter**
> \Infoplus\Model\ReceivingWorksheet[] getReceivingWorksheetByFilter($filter, $page, $limit, $sort)

Search receivingWorksheets by filter

Returns the list of receivingWorksheets that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingWorksheetApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getReceivingWorksheetByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ReceivingWorksheet[]**](ReceivingWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReceivingWorksheetById**
> \Infoplus\Model\ReceivingWorksheet getReceivingWorksheetById($receiving_worksheet_id)

Get a receivingWorksheet by id

Returns the receivingWorksheet identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingWorksheetApi();
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to be returned.

try { 
    $result = $api_instance->getReceivingWorksheetById($receiving_worksheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to be returned. | 

### Return type

[**\Infoplus\Model\ReceivingWorksheet**](ReceivingWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReceivingWorksheet**
> updateReceivingWorksheet($body)

Update a receivingWorksheet

Updates an existing receivingWorksheet using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReceivingWorksheetApi();
$body = new \Infoplus\Model\ReceivingWorksheet(); // \Infoplus\Model\ReceivingWorksheet | ReceivingWorksheet to be updated.

try { 
    $api_instance->updateReceivingWorksheet($body);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->updateReceivingWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ReceivingWorksheet**](\Infoplus\Model\ReceivingWorksheet.md)| ReceivingWorksheet to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

