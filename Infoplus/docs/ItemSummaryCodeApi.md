# Infoplus\ItemSummaryCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSummaryCode**](ItemSummaryCodeApi.md#addItemSummaryCode) | **POST** /beta/itemSummaryCode | Create an itemSummaryCode
[**addItemSummaryCodeAudit**](ItemSummaryCodeApi.md#addItemSummaryCodeAudit) | **PUT** /beta/itemSummaryCode/{itemSummaryCodeId}/audit/{itemSummaryCodeAudit} | Add new audit for an itemSummaryCode
[**addItemSummaryCodeTag**](ItemSummaryCodeApi.md#addItemSummaryCodeTag) | **PUT** /beta/itemSummaryCode/{itemSummaryCodeId}/tag/{itemSummaryCodeTag} | Add new tags for an itemSummaryCode.
[**deleteItemSummaryCode**](ItemSummaryCodeApi.md#deleteItemSummaryCode) | **DELETE** /beta/itemSummaryCode/{itemSummaryCodeId} | Delete an itemSummaryCode
[**deleteItemSummaryCodeTag**](ItemSummaryCodeApi.md#deleteItemSummaryCodeTag) | **DELETE** /beta/itemSummaryCode/{itemSummaryCodeId}/tag/{itemSummaryCodeTag} | Delete a tag for an itemSummaryCode.
[**getDuplicateItemSummaryCodeById**](ItemSummaryCodeApi.md#getDuplicateItemSummaryCodeById) | **GET** /beta/itemSummaryCode/duplicate/{itemSummaryCodeId} | Get a duplicated an itemSummaryCode by id
[**getItemSummaryCodeByFilter**](ItemSummaryCodeApi.md#getItemSummaryCodeByFilter) | **GET** /beta/itemSummaryCode/search | Search itemSummaryCodes by filter
[**getItemSummaryCodeById**](ItemSummaryCodeApi.md#getItemSummaryCodeById) | **GET** /beta/itemSummaryCode/{itemSummaryCodeId} | Get an itemSummaryCode by id
[**getItemSummaryCodeTags**](ItemSummaryCodeApi.md#getItemSummaryCodeTags) | **GET** /beta/itemSummaryCode/{itemSummaryCodeId}/tag | Get the tags for an itemSummaryCode.
[**updateItemSummaryCode**](ItemSummaryCodeApi.md#updateItemSummaryCode) | **PUT** /beta/itemSummaryCode | Update an itemSummaryCode


# **addItemSummaryCode**
> \Infoplus\Model\ItemSummaryCode addItemSummaryCode($body)

Create an itemSummaryCode

Inserts a new itemSummaryCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$body = new \Infoplus\Model\ItemSummaryCode(); // \Infoplus\Model\ItemSummaryCode | ItemSummaryCode to be inserted.

try { 
    $result = $api_instance->addItemSummaryCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->addItemSummaryCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSummaryCode**](\Infoplus\Model\ItemSummaryCode.md)| ItemSummaryCode to be inserted. | 

### Return type

[**\Infoplus\Model\ItemSummaryCode**](ItemSummaryCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemSummaryCodeAudit**
> addItemSummaryCodeAudit($item_summary_code_id, $item_summary_code_audit)

Add new audit for an itemSummaryCode

Adds an audit to an existing itemSummaryCode.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to add an audit to
$item_summary_code_audit = "item_summary_code_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemSummaryCodeAudit($item_summary_code_id, $item_summary_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->addItemSummaryCodeAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to add an audit to | 
 **item_summary_code_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemSummaryCodeTag**
> addItemSummaryCodeTag($item_summary_code_id, $item_summary_code_tag)

Add new tags for an itemSummaryCode.

Adds a tag to an existing itemSummaryCode.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to add a tag to
$item_summary_code_tag = "item_summary_code_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemSummaryCodeTag($item_summary_code_id, $item_summary_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->addItemSummaryCodeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to add a tag to | 
 **item_summary_code_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemSummaryCode**
> deleteItemSummaryCode($item_summary_code_id)

Delete an itemSummaryCode

Deletes the itemSummaryCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to be deleted.

try { 
    $api_instance->deleteItemSummaryCode($item_summary_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->deleteItemSummaryCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemSummaryCodeTag**
> deleteItemSummaryCodeTag($item_summary_code_id, $item_summary_code_tag)

Delete a tag for an itemSummaryCode.

Deletes an existing itemSummaryCode tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to remove tag from
$item_summary_code_tag = "item_summary_code_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemSummaryCodeTag($item_summary_code_id, $item_summary_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->deleteItemSummaryCodeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to remove tag from | 
 **item_summary_code_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemSummaryCodeById**
> \Infoplus\Model\ItemSummaryCode getDuplicateItemSummaryCodeById($item_summary_code_id)

Get a duplicated an itemSummaryCode by id

Returns a duplicated itemSummaryCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemSummaryCodeById($item_summary_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->getDuplicateItemSummaryCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemSummaryCode**](ItemSummaryCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSummaryCodeByFilter**
> \Infoplus\Model\ItemSummaryCode[] getItemSummaryCodeByFilter($filter, $page, $limit, $sort)

Search itemSummaryCodes by filter

Returns the list of itemSummaryCodes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemSummaryCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->getItemSummaryCodeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemSummaryCode[]**](ItemSummaryCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSummaryCodeById**
> \Infoplus\Model\ItemSummaryCode getItemSummaryCodeById($item_summary_code_id)

Get an itemSummaryCode by id

Returns the itemSummaryCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to be returned.

try { 
    $result = $api_instance->getItemSummaryCodeById($item_summary_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->getItemSummaryCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to be returned. | 

### Return type

[**\Infoplus\Model\ItemSummaryCode**](ItemSummaryCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSummaryCodeTags**
> getItemSummaryCodeTags($item_summary_code_id)

Get the tags for an itemSummaryCode.

Get all existing itemSummaryCode tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$item_summary_code_id = 56; // int | Id of the itemSummaryCode to get tags for

try { 
    $api_instance->getItemSummaryCodeTags($item_summary_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->getItemSummaryCodeTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_summary_code_id** | **int**| Id of the itemSummaryCode to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemSummaryCode**
> updateItemSummaryCode($body)

Update an itemSummaryCode

Updates an existing itemSummaryCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSummaryCodeApi();
$body = new \Infoplus\Model\ItemSummaryCode(); // \Infoplus\Model\ItemSummaryCode | ItemSummaryCode to be updated.

try { 
    $api_instance->updateItemSummaryCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSummaryCodeApi->updateItemSummaryCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSummaryCode**](\Infoplus\Model\ItemSummaryCode.md)| ItemSummaryCode to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

