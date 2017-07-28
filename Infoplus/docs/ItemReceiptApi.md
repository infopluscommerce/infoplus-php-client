# Infoplus\ItemReceiptApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemReceiptAudit**](ItemReceiptApi.md#addItemReceiptAudit) | **PUT** /beta/itemReceipt/{itemReceiptId}/audit/{itemReceiptAudit} | Add new audit for an itemReceipt
[**addItemReceiptTag**](ItemReceiptApi.md#addItemReceiptTag) | **PUT** /beta/itemReceipt/{itemReceiptId}/tag/{itemReceiptTag} | Add new tags for an itemReceipt.
[**deleteItemReceiptTag**](ItemReceiptApi.md#deleteItemReceiptTag) | **DELETE** /beta/itemReceipt/{itemReceiptId}/tag/{itemReceiptTag} | Delete a tag for an itemReceipt.
[**getDuplicateItemReceiptById**](ItemReceiptApi.md#getDuplicateItemReceiptById) | **GET** /beta/itemReceipt/duplicate/{itemReceiptId} | Get a duplicated an itemReceipt by id
[**getItemReceiptByFilter**](ItemReceiptApi.md#getItemReceiptByFilter) | **GET** /beta/itemReceipt/search | Search itemReceipts by filter
[**getItemReceiptById**](ItemReceiptApi.md#getItemReceiptById) | **GET** /beta/itemReceipt/{itemReceiptId} | Get an itemReceipt by id
[**getItemReceiptTags**](ItemReceiptApi.md#getItemReceiptTags) | **GET** /beta/itemReceipt/{itemReceiptId}/tag | Get the tags for an itemReceipt.
[**updateItemReceipt**](ItemReceiptApi.md#updateItemReceipt) | **PUT** /beta/itemReceipt | Update an itemReceipt
[**updateItemReceiptCustomFields**](ItemReceiptApi.md#updateItemReceiptCustomFields) | **PUT** /beta/itemReceipt/customFields | Update an itemReceipt custom fields


# **addItemReceiptAudit**
> addItemReceiptAudit($item_receipt_id, $item_receipt_audit)

Add new audit for an itemReceipt

Adds an audit to an existing itemReceipt.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to add an audit to
$item_receipt_audit = "item_receipt_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemReceiptAudit($item_receipt_id, $item_receipt_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to add an audit to | 
 **item_receipt_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemReceiptTag**
> addItemReceiptTag($item_receipt_id, $item_receipt_tag)

Add new tags for an itemReceipt.

Adds a tag to an existing itemReceipt.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to add a tag to
$item_receipt_tag = "item_receipt_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemReceiptTag($item_receipt_id, $item_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to add a tag to | 
 **item_receipt_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemReceiptTag**
> deleteItemReceiptTag($item_receipt_id, $item_receipt_tag)

Delete a tag for an itemReceipt.

Deletes an existing itemReceipt tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to remove tag from
$item_receipt_tag = "item_receipt_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemReceiptTag($item_receipt_id, $item_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->deleteItemReceiptTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to remove tag from | 
 **item_receipt_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemReceiptById**
> \Infoplus\Model\ItemReceipt getDuplicateItemReceiptById($item_receipt_id)

Get a duplicated an itemReceipt by id

Returns a duplicated itemReceipt identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemReceiptById($item_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getDuplicateItemReceiptById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemReceipt**](ItemReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptByFilter**
> \Infoplus\Model\ItemReceipt[] getItemReceiptByFilter($filter, $page, $limit, $sort)

Search itemReceipts by filter

Returns the list of itemReceipts that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemReceiptByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemReceipt[]**](ItemReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptById**
> \Infoplus\Model\ItemReceipt getItemReceiptById($item_receipt_id)

Get an itemReceipt by id

Returns the itemReceipt identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to be returned.

try { 
    $result = $api_instance->getItemReceiptById($item_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to be returned. | 

### Return type

[**\Infoplus\Model\ItemReceipt**](ItemReceipt.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptTags**
> getItemReceiptTags($item_receipt_id)

Get the tags for an itemReceipt.

Get all existing itemReceipt tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$item_receipt_id = 56; // int | Id of the itemReceipt to get tags for

try { 
    $api_instance->getItemReceiptTags($item_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemReceipt**
> updateItemReceipt($body)

Update an itemReceipt

Updates an existing itemReceipt using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$body = new \Infoplus\Model\ItemReceipt(); // \Infoplus\Model\ItemReceipt | ItemReceipt to be updated.

try { 
    $api_instance->updateItemReceipt($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->updateItemReceipt: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemReceipt**](\Infoplus\Model\ItemReceipt.md)| ItemReceipt to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemReceiptCustomFields**
> updateItemReceiptCustomFields($body)

Update an itemReceipt custom fields

Updates an existing itemReceipt custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptApi();
$body = new \Infoplus\Model\ItemReceipt(); // \Infoplus\Model\ItemReceipt | ItemReceipt to be updated.

try { 
    $api_instance->updateItemReceiptCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->updateItemReceiptCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemReceipt**](\Infoplus\Model\ItemReceipt.md)| ItemReceipt to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

