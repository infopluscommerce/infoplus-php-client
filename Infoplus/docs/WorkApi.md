# Infoplus\WorkApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWorkAudit**](WorkApi.md#addWorkAudit) | **PUT** /beta/work/{workId}/audit/{workAudit} | Add new audit for a work
[**addWorkTag**](WorkApi.md#addWorkTag) | **PUT** /beta/work/{workId}/tag/{workTag} | Add new tags for a work.
[**deleteWorkTag**](WorkApi.md#deleteWorkTag) | **DELETE** /beta/work/{workId}/tag/{workTag} | Delete a tag for a work.
[**getDuplicateWorkById**](WorkApi.md#getDuplicateWorkById) | **GET** /beta/work/duplicate/{workId} | Get a duplicated a work by id
[**getWorkByFilter**](WorkApi.md#getWorkByFilter) | **GET** /beta/work/search | Search works by filter
[**getWorkById**](WorkApi.md#getWorkById) | **GET** /beta/work/{workId} | Get a work by id
[**getWorkTags**](WorkApi.md#getWorkTags) | **GET** /beta/work/{workId}/tag | Get the tags for a work.
[**updateWorkCustomFields**](WorkApi.md#updateWorkCustomFields) | **PUT** /beta/work/customFields | Update a work custom fields


# **addWorkAudit**
> addWorkAudit($work_id, $work_audit)

Add new audit for a work

Adds an audit to an existing work.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to add an audit to
$work_audit = "work_audit_example"; // string | The audit to add

try { 
    $api_instance->addWorkAudit($work_id, $work_audit);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->addWorkAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to add an audit to | 
 **work_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addWorkTag**
> addWorkTag($work_id, $work_tag)

Add new tags for a work.

Adds a tag to an existing work.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to add a tag to
$work_tag = "work_tag_example"; // string | The tag to add

try { 
    $api_instance->addWorkTag($work_id, $work_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->addWorkTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to add a tag to | 
 **work_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteWorkTag**
> deleteWorkTag($work_id, $work_tag)

Delete a tag for a work.

Deletes an existing work tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to remove tag from
$work_tag = "work_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteWorkTag($work_id, $work_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->deleteWorkTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to remove tag from | 
 **work_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateWorkById**
> \Infoplus\Model\Work getDuplicateWorkById($work_id)

Get a duplicated a work by id

Returns a duplicated work identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to be duplicated.

try { 
    $result = $api_instance->getDuplicateWorkById($work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->getDuplicateWorkById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to be duplicated. | 

### Return type

[**\Infoplus\Model\Work**](Work.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkByFilter**
> \Infoplus\Model\Work[] getWorkByFilter($filter, $page, $limit, $sort)

Search works by filter

Returns the list of works that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWorkByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->getWorkByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Work[]**](Work.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkById**
> \Infoplus\Model\Work getWorkById($work_id)

Get a work by id

Returns the work identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to be returned.

try { 
    $result = $api_instance->getWorkById($work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->getWorkById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to be returned. | 

### Return type

[**\Infoplus\Model\Work**](Work.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkTags**
> getWorkTags($work_id)

Get the tags for a work.

Get all existing work tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$work_id = 56; // int | Id of the work to get tags for

try { 
    $api_instance->getWorkTags($work_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->getWorkTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_id** | **int**| Id of the work to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateWorkCustomFields**
> updateWorkCustomFields($body)

Update a work custom fields

Updates an existing work custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkApi();
$body = new \Infoplus\Model\Work(); // \Infoplus\Model\Work | Work to be updated.

try { 
    $api_instance->updateWorkCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkApi->updateWorkCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Work**](\Infoplus\Model\Work.md)| Work to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

