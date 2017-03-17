# Infoplus\WorkBatchApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWorkBatchAudit**](WorkBatchApi.md#addWorkBatchAudit) | **PUT** /beta/workBatch/{workBatchId}/audit/{workBatchAudit} | Add new audit for a workBatch
[**addWorkBatchTag**](WorkBatchApi.md#addWorkBatchTag) | **PUT** /beta/workBatch/{workBatchId}/tag/{workBatchTag} | Add new tags for a workBatch.
[**deleteWorkBatchTag**](WorkBatchApi.md#deleteWorkBatchTag) | **DELETE** /beta/workBatch/{workBatchId}/tag/{workBatchTag} | Delete a tag for a workBatch.
[**getDuplicateWorkBatchById**](WorkBatchApi.md#getDuplicateWorkBatchById) | **GET** /beta/workBatch/duplicate/{workBatchId} | Get a duplicated a workBatch by id
[**getWorkBatchByFilter**](WorkBatchApi.md#getWorkBatchByFilter) | **GET** /beta/workBatch/search | Search workBatchs by filter
[**getWorkBatchById**](WorkBatchApi.md#getWorkBatchById) | **GET** /beta/workBatch/{workBatchId} | Get a workBatch by id
[**getWorkBatchTags**](WorkBatchApi.md#getWorkBatchTags) | **GET** /beta/workBatch/{workBatchId}/tag | Get the tags for a workBatch.
[**updateWorkBatchCustomFields**](WorkBatchApi.md#updateWorkBatchCustomFields) | **PUT** /beta/workBatch/customFields | Update a workBatch custom fields


# **addWorkBatchAudit**
> addWorkBatchAudit($work_batch_id, $work_batch_audit)

Add new audit for a workBatch

Adds an audit to an existing workBatch.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to add an audit to
$work_batch_audit = "work_batch_audit_example"; // string | The audit to add

try { 
    $api_instance->addWorkBatchAudit($work_batch_id, $work_batch_audit);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to add an audit to | 
 **work_batch_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addWorkBatchTag**
> addWorkBatchTag($work_batch_id, $work_batch_tag)

Add new tags for a workBatch.

Adds a tag to an existing workBatch.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to add a tag to
$work_batch_tag = "work_batch_tag_example"; // string | The tag to add

try { 
    $api_instance->addWorkBatchTag($work_batch_id, $work_batch_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to add a tag to | 
 **work_batch_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteWorkBatchTag**
> deleteWorkBatchTag($work_batch_id, $work_batch_tag)

Delete a tag for a workBatch.

Deletes an existing workBatch tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to remove tag from
$work_batch_tag = "work_batch_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteWorkBatchTag($work_batch_id, $work_batch_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->deleteWorkBatchTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to remove tag from | 
 **work_batch_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateWorkBatchById**
> \Infoplus\Model\WorkBatch getDuplicateWorkBatchById($work_batch_id)

Get a duplicated a workBatch by id

Returns a duplicated workBatch identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to be duplicated.

try { 
    $result = $api_instance->getDuplicateWorkBatchById($work_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getDuplicateWorkBatchById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to be duplicated. | 

### Return type

[**\Infoplus\Model\WorkBatch**](WorkBatch.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkBatchByFilter**
> \Infoplus\Model\WorkBatch[] getWorkBatchByFilter($filter, $page, $limit, $sort)

Search workBatchs by filter

Returns the list of workBatchs that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWorkBatchByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\WorkBatch[]**](WorkBatch.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkBatchById**
> \Infoplus\Model\WorkBatch getWorkBatchById($work_batch_id)

Get a workBatch by id

Returns the workBatch identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to be returned.

try { 
    $result = $api_instance->getWorkBatchById($work_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to be returned. | 

### Return type

[**\Infoplus\Model\WorkBatch**](WorkBatch.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkBatchTags**
> getWorkBatchTags($work_batch_id)

Get the tags for a workBatch.

Get all existing workBatch tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$work_batch_id = 56; // int | Id of the workBatch to get tags for

try { 
    $api_instance->getWorkBatchTags($work_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateWorkBatchCustomFields**
> updateWorkBatchCustomFields($body)

Update a workBatch custom fields

Updates an existing workBatch custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkBatchApi();
$body = new \Infoplus\Model\WorkBatch(); // \Infoplus\Model\WorkBatch | WorkBatch to be updated.

try { 
    $api_instance->updateWorkBatchCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->updateWorkBatchCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\WorkBatch**](\Infoplus\Model\WorkBatch.md)| WorkBatch to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

