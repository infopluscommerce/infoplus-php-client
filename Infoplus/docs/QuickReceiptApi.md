# Infoplus\QuickReceiptApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuickReceipt**](QuickReceiptApi.md#addQuickReceipt) | **POST** /v2.0/quickReceipt | Create a quickReceipt
[**deleteQuickReceipt**](QuickReceiptApi.md#deleteQuickReceipt) | **DELETE** /v2.0/quickReceipt/{quickReceiptId} | Delete a quickReceipt
[**getDuplicateQuickReceiptById**](QuickReceiptApi.md#getDuplicateQuickReceiptById) | **GET** /v2.0/quickReceipt/duplicate/{quickReceiptId} | Get a duplicated a quickReceipt by id
[**getQuickReceiptByFilter**](QuickReceiptApi.md#getQuickReceiptByFilter) | **GET** /v2.0/quickReceipt/search | Search quickReceipts by filter
[**getQuickReceiptById**](QuickReceiptApi.md#getQuickReceiptById) | **GET** /v2.0/quickReceipt/{quickReceiptId} | Get a quickReceipt by id
[**updateQuickReceipt**](QuickReceiptApi.md#updateQuickReceipt) | **PUT** /v2.0/quickReceipt | Update a quickReceipt
[**updateQuickReceiptCustomFields**](QuickReceiptApi.md#updateQuickReceiptCustomFields) | **PUT** /v2.0/quickReceipt/customFields | Update a quickReceipt custom fields


# **addQuickReceipt**
> \Infoplus\Model\QuickReceipt addQuickReceipt($body)

Create a quickReceipt

Inserts a new quickReceipt using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$body = new \Infoplus\Model\QuickReceipt(); // \Infoplus\Model\QuickReceipt | QuickReceipt to be inserted.

try { 
    $result = $api_instance->addQuickReceipt($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceipt: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickReceipt**](\Infoplus\Model\QuickReceipt.md)| QuickReceipt to be inserted. | 

### Return type

[**\Infoplus\Model\QuickReceipt**](QuickReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteQuickReceipt**
> deleteQuickReceipt($quick_receipt_id)

Delete a quickReceipt

Deletes the quickReceipt identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$quick_receipt_id = 56; // int | Id of the quickReceipt to be deleted.

try { 
    $api_instance->deleteQuickReceipt($quick_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->deleteQuickReceipt: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateQuickReceiptById**
> \Infoplus\Model\QuickReceipt getDuplicateQuickReceiptById($quick_receipt_id)

Get a duplicated a quickReceipt by id

Returns a duplicated quickReceipt identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$quick_receipt_id = 56; // int | Id of the quickReceipt to be duplicated.

try { 
    $result = $api_instance->getDuplicateQuickReceiptById($quick_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getDuplicateQuickReceiptById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be duplicated. | 

### Return type

[**\Infoplus\Model\QuickReceipt**](QuickReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickReceiptByFilter**
> \Infoplus\Model\QuickReceipt[] getQuickReceiptByFilter($filter, $page, $limit, $sort)

Search quickReceipts by filter

Returns the list of quickReceipts that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getQuickReceiptByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\QuickReceipt[]**](QuickReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickReceiptById**
> \Infoplus\Model\QuickReceipt getQuickReceiptById($quick_receipt_id)

Get a quickReceipt by id

Returns the quickReceipt identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$quick_receipt_id = 56; // int | Id of the quickReceipt to be returned.

try { 
    $result = $api_instance->getQuickReceiptById($quick_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be returned. | 

### Return type

[**\Infoplus\Model\QuickReceipt**](QuickReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateQuickReceipt**
> updateQuickReceipt($body)

Update a quickReceipt

Updates an existing quickReceipt using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$body = new \Infoplus\Model\QuickReceipt(); // \Infoplus\Model\QuickReceipt | QuickReceipt to be updated.

try { 
    $api_instance->updateQuickReceipt($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->updateQuickReceipt: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickReceipt**](\Infoplus\Model\QuickReceipt.md)| QuickReceipt to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateQuickReceiptCustomFields**
> updateQuickReceiptCustomFields($body)

Update a quickReceipt custom fields

Updates an existing quickReceipt custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickReceiptApi();
$body = new \Infoplus\Model\QuickReceipt(); // \Infoplus\Model\QuickReceipt | QuickReceipt to be updated.

try { 
    $api_instance->updateQuickReceiptCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->updateQuickReceiptCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickReceipt**](\Infoplus\Model\QuickReceipt.md)| QuickReceipt to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

