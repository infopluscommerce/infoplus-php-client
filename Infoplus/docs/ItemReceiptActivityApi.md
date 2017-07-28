# Infoplus\ItemReceiptActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemReceiptActivity**](ItemReceiptActivityApi.md#addItemReceiptActivity) | **POST** /beta/itemReceiptActivity | Create an itemReceiptActivity
[**addItemReceiptActivityAudit**](ItemReceiptActivityApi.md#addItemReceiptActivityAudit) | **PUT** /beta/itemReceiptActivity/{itemReceiptActivityId}/audit/{itemReceiptActivityAudit} | Add new audit for an itemReceiptActivity
[**addItemReceiptActivityTag**](ItemReceiptActivityApi.md#addItemReceiptActivityTag) | **PUT** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag/{itemReceiptActivityTag} | Add new tags for an itemReceiptActivity.
[**deleteItemReceiptActivity**](ItemReceiptActivityApi.md#deleteItemReceiptActivity) | **DELETE** /beta/itemReceiptActivity/{itemReceiptActivityId} | Delete an itemReceiptActivity
[**deleteItemReceiptActivityTag**](ItemReceiptActivityApi.md#deleteItemReceiptActivityTag) | **DELETE** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag/{itemReceiptActivityTag} | Delete a tag for an itemReceiptActivity.
[**getDuplicateItemReceiptActivityById**](ItemReceiptActivityApi.md#getDuplicateItemReceiptActivityById) | **GET** /beta/itemReceiptActivity/duplicate/{itemReceiptActivityId} | Get a duplicated an itemReceiptActivity by id
[**getItemReceiptActivityByFilter**](ItemReceiptActivityApi.md#getItemReceiptActivityByFilter) | **GET** /beta/itemReceiptActivity/search | Search itemReceiptActivitys by filter
[**getItemReceiptActivityById**](ItemReceiptActivityApi.md#getItemReceiptActivityById) | **GET** /beta/itemReceiptActivity/{itemReceiptActivityId} | Get an itemReceiptActivity by id
[**getItemReceiptActivityTags**](ItemReceiptActivityApi.md#getItemReceiptActivityTags) | **GET** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag | Get the tags for an itemReceiptActivity.
[**updateItemReceiptActivity**](ItemReceiptActivityApi.md#updateItemReceiptActivity) | **PUT** /beta/itemReceiptActivity | Update an itemReceiptActivity


# **addItemReceiptActivity**
> \Infoplus\Model\ItemReceiptActivity addItemReceiptActivity($body)

Create an itemReceiptActivity

Inserts a new itemReceiptActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$body = new \Infoplus\Model\ItemReceiptActivity(); // \Infoplus\Model\ItemReceiptActivity | ItemReceiptActivity to be inserted.

try { 
    $result = $api_instance->addItemReceiptActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemReceiptActivity**](\Infoplus\Model\ItemReceiptActivity.md)| ItemReceiptActivity to be inserted. | 

### Return type

[**\Infoplus\Model\ItemReceiptActivity**](ItemReceiptActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemReceiptActivityAudit**
> addItemReceiptActivityAudit($item_receipt_activity_id, $item_receipt_activity_audit)

Add new audit for an itemReceiptActivity

Adds an audit to an existing itemReceiptActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add an audit to
$item_receipt_activity_audit = "item_receipt_activity_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemReceiptActivityAudit($item_receipt_activity_id, $item_receipt_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add an audit to | 
 **item_receipt_activity_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemReceiptActivityTag**
> addItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag)

Add new tags for an itemReceiptActivity.

Adds a tag to an existing itemReceiptActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add a tag to
$item_receipt_activity_tag = "item_receipt_activity_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add a tag to | 
 **item_receipt_activity_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemReceiptActivity**
> deleteItemReceiptActivity($item_receipt_activity_id)

Delete an itemReceiptActivity

Deletes the itemReceiptActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be deleted.

try { 
    $api_instance->deleteItemReceiptActivity($item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->deleteItemReceiptActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemReceiptActivityTag**
> deleteItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag)

Delete a tag for an itemReceiptActivity.

Deletes an existing itemReceiptActivity tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to remove tag from
$item_receipt_activity_tag = "item_receipt_activity_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->deleteItemReceiptActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to remove tag from | 
 **item_receipt_activity_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemReceiptActivityById**
> \Infoplus\Model\ItemReceiptActivity getDuplicateItemReceiptActivityById($item_receipt_activity_id)

Get a duplicated an itemReceiptActivity by id

Returns a duplicated itemReceiptActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemReceiptActivityById($item_receipt_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getDuplicateItemReceiptActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemReceiptActivity**](ItemReceiptActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptActivityByFilter**
> \Infoplus\Model\ItemReceiptActivity[] getItemReceiptActivityByFilter($filter, $page, $limit, $sort)

Search itemReceiptActivitys by filter

Returns the list of itemReceiptActivitys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemReceiptActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemReceiptActivity[]**](ItemReceiptActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptActivityById**
> \Infoplus\Model\ItemReceiptActivity getItemReceiptActivityById($item_receipt_activity_id)

Get an itemReceiptActivity by id

Returns the itemReceiptActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be returned.

try { 
    $result = $api_instance->getItemReceiptActivityById($item_receipt_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be returned. | 

### Return type

[**\Infoplus\Model\ItemReceiptActivity**](ItemReceiptActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemReceiptActivityTags**
> getItemReceiptActivityTags($item_receipt_activity_id)

Get the tags for an itemReceiptActivity.

Get all existing itemReceiptActivity tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to get tags for

try { 
    $api_instance->getItemReceiptActivityTags($item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemReceiptActivity**
> updateItemReceiptActivity($body)

Update an itemReceiptActivity

Updates an existing itemReceiptActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemReceiptActivityApi();
$body = new \Infoplus\Model\ItemReceiptActivity(); // \Infoplus\Model\ItemReceiptActivity | ItemReceiptActivity to be updated.

try { 
    $api_instance->updateItemReceiptActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->updateItemReceiptActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemReceiptActivity**](\Infoplus\Model\ItemReceiptActivity.md)| ItemReceiptActivity to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

