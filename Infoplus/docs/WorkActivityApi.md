# Infoplus\WorkActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWorkActivity**](WorkActivityApi.md#addWorkActivity) | **POST** /beta/workActivity | Create a workActivity
[**addWorkActivityAudit**](WorkActivityApi.md#addWorkActivityAudit) | **PUT** /beta/workActivity/{workActivityId}/audit/{workActivityAudit} | Add new audit for a workActivity
[**addWorkActivityTag**](WorkActivityApi.md#addWorkActivityTag) | **PUT** /beta/workActivity/{workActivityId}/tag/{workActivityTag} | Add new tags for a workActivity.
[**deleteWorkActivity**](WorkActivityApi.md#deleteWorkActivity) | **DELETE** /beta/workActivity/{workActivityId} | Delete a workActivity
[**deleteWorkActivityTag**](WorkActivityApi.md#deleteWorkActivityTag) | **DELETE** /beta/workActivity/{workActivityId}/tag/{workActivityTag} | Delete a tag for a workActivity.
[**getDuplicateWorkActivityById**](WorkActivityApi.md#getDuplicateWorkActivityById) | **GET** /beta/workActivity/duplicate/{workActivityId} | Get a duplicated a workActivity by id
[**getWorkActivityByFilter**](WorkActivityApi.md#getWorkActivityByFilter) | **GET** /beta/workActivity/search | Search workActivitys by filter
[**getWorkActivityById**](WorkActivityApi.md#getWorkActivityById) | **GET** /beta/workActivity/{workActivityId} | Get a workActivity by id
[**getWorkActivityTags**](WorkActivityApi.md#getWorkActivityTags) | **GET** /beta/workActivity/{workActivityId}/tag | Get the tags for a workActivity.
[**updateWorkActivity**](WorkActivityApi.md#updateWorkActivity) | **PUT** /beta/workActivity | Update a workActivity


# **addWorkActivity**
> \Infoplus\Model\WorkActivity addWorkActivity($body)

Create a workActivity

Inserts a new workActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$body = new \Infoplus\Model\WorkActivity(); // \Infoplus\Model\WorkActivity | WorkActivity to be inserted.

try { 
    $result = $api_instance->addWorkActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->addWorkActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\WorkActivity**](\Infoplus\Model\WorkActivity.md)| WorkActivity to be inserted. | 

### Return type

[**\Infoplus\Model\WorkActivity**](WorkActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addWorkActivityAudit**
> addWorkActivityAudit($work_activity_id, $work_activity_audit)

Add new audit for a workActivity

Adds an audit to an existing workActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to add an audit to
$work_activity_audit = "work_activity_audit_example"; // string | The audit to add

try { 
    $api_instance->addWorkActivityAudit($work_activity_id, $work_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->addWorkActivityAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to add an audit to | 
 **work_activity_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addWorkActivityTag**
> addWorkActivityTag($work_activity_id, $work_activity_tag)

Add new tags for a workActivity.

Adds a tag to an existing workActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to add a tag to
$work_activity_tag = "work_activity_tag_example"; // string | The tag to add

try { 
    $api_instance->addWorkActivityTag($work_activity_id, $work_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->addWorkActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to add a tag to | 
 **work_activity_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteWorkActivity**
> deleteWorkActivity($work_activity_id)

Delete a workActivity

Deletes the workActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to be deleted.

try { 
    $api_instance->deleteWorkActivity($work_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->deleteWorkActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteWorkActivityTag**
> deleteWorkActivityTag($work_activity_id, $work_activity_tag)

Delete a tag for a workActivity.

Deletes an existing workActivity tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to remove tag from
$work_activity_tag = "work_activity_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteWorkActivityTag($work_activity_id, $work_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->deleteWorkActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to remove tag from | 
 **work_activity_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateWorkActivityById**
> \Infoplus\Model\WorkActivity getDuplicateWorkActivityById($work_activity_id)

Get a duplicated a workActivity by id

Returns a duplicated workActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to be duplicated.

try { 
    $result = $api_instance->getDuplicateWorkActivityById($work_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->getDuplicateWorkActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to be duplicated. | 

### Return type

[**\Infoplus\Model\WorkActivity**](WorkActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkActivityByFilter**
> \Infoplus\Model\WorkActivity[] getWorkActivityByFilter($filter, $page, $limit, $sort)

Search workActivitys by filter

Returns the list of workActivitys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWorkActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->getWorkActivityByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\WorkActivity[]**](WorkActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkActivityById**
> \Infoplus\Model\WorkActivity getWorkActivityById($work_activity_id)

Get a workActivity by id

Returns the workActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to be returned.

try { 
    $result = $api_instance->getWorkActivityById($work_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->getWorkActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to be returned. | 

### Return type

[**\Infoplus\Model\WorkActivity**](WorkActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWorkActivityTags**
> getWorkActivityTags($work_activity_id)

Get the tags for a workActivity.

Get all existing workActivity tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$work_activity_id = 56; // int | Id of the workActivity to get tags for

try { 
    $api_instance->getWorkActivityTags($work_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->getWorkActivityTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_activity_id** | **int**| Id of the workActivity to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateWorkActivity**
> updateWorkActivity($body)

Update a workActivity

Updates an existing workActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WorkActivityApi();
$body = new \Infoplus\Model\WorkActivity(); // \Infoplus\Model\WorkActivity | WorkActivity to be updated.

try { 
    $api_instance->updateWorkActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkActivityApi->updateWorkActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\WorkActivity**](\Infoplus\Model\WorkActivity.md)| WorkActivity to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

