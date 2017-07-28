# Infoplus\JobTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobType**](JobTypeApi.md#addJobType) | **POST** /beta/jobType | Create a jobType
[**addJobTypeAudit**](JobTypeApi.md#addJobTypeAudit) | **PUT** /beta/jobType/{jobTypeId}/audit/{jobTypeAudit} | Add new audit for a jobType
[**addJobTypeTag**](JobTypeApi.md#addJobTypeTag) | **PUT** /beta/jobType/{jobTypeId}/tag/{jobTypeTag} | Add new tags for a jobType.
[**deleteJobType**](JobTypeApi.md#deleteJobType) | **DELETE** /beta/jobType/{jobTypeId} | Delete a jobType
[**deleteJobTypeTag**](JobTypeApi.md#deleteJobTypeTag) | **DELETE** /beta/jobType/{jobTypeId}/tag/{jobTypeTag} | Delete a tag for a jobType.
[**getDuplicateJobTypeById**](JobTypeApi.md#getDuplicateJobTypeById) | **GET** /beta/jobType/duplicate/{jobTypeId} | Get a duplicated a jobType by id
[**getJobTypeByFilter**](JobTypeApi.md#getJobTypeByFilter) | **GET** /beta/jobType/search | Search jobTypes by filter
[**getJobTypeById**](JobTypeApi.md#getJobTypeById) | **GET** /beta/jobType/{jobTypeId} | Get a jobType by id
[**getJobTypeTags**](JobTypeApi.md#getJobTypeTags) | **GET** /beta/jobType/{jobTypeId}/tag | Get the tags for a jobType.
[**updateJobType**](JobTypeApi.md#updateJobType) | **PUT** /beta/jobType | Update a jobType
[**updateJobTypeCustomFields**](JobTypeApi.md#updateJobTypeCustomFields) | **PUT** /beta/jobType/customFields | Update a jobType custom fields


# **addJobType**
> \Infoplus\Model\JobType addJobType($body)

Create a jobType

Inserts a new jobType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$body = new \Infoplus\Model\JobType(); // \Infoplus\Model\JobType | JobType to be inserted.

try { 
    $result = $api_instance->addJobType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\JobType**](\Infoplus\Model\JobType.md)| JobType to be inserted. | 

### Return type

[**\Infoplus\Model\JobType**](JobType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addJobTypeAudit**
> addJobTypeAudit($job_type_id, $job_type_audit)

Add new audit for a jobType

Adds an audit to an existing jobType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to add an audit to
$job_type_audit = "job_type_audit_example"; // string | The audit to add

try { 
    $api_instance->addJobTypeAudit($job_type_id, $job_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to add an audit to | 
 **job_type_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addJobTypeTag**
> addJobTypeTag($job_type_id, $job_type_tag)

Add new tags for a jobType.

Adds a tag to an existing jobType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to add a tag to
$job_type_tag = "job_type_tag_example"; // string | The tag to add

try { 
    $api_instance->addJobTypeTag($job_type_id, $job_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to add a tag to | 
 **job_type_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteJobType**
> deleteJobType($job_type_id)

Delete a jobType

Deletes the jobType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to be deleted.

try { 
    $api_instance->deleteJobType($job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->deleteJobType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteJobTypeTag**
> deleteJobTypeTag($job_type_id, $job_type_tag)

Delete a tag for a jobType.

Deletes an existing jobType tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to remove tag from
$job_type_tag = "job_type_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteJobTypeTag($job_type_id, $job_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->deleteJobTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to remove tag from | 
 **job_type_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateJobTypeById**
> \Infoplus\Model\JobType getDuplicateJobTypeById($job_type_id)

Get a duplicated a jobType by id

Returns a duplicated jobType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to be duplicated.

try { 
    $result = $api_instance->getDuplicateJobTypeById($job_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getDuplicateJobTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to be duplicated. | 

### Return type

[**\Infoplus\Model\JobType**](JobType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJobTypeByFilter**
> \Infoplus\Model\JobType[] getJobTypeByFilter($filter, $page, $limit, $sort)

Search jobTypes by filter

Returns the list of jobTypes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getJobTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\JobType[]**](JobType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJobTypeById**
> \Infoplus\Model\JobType getJobTypeById($job_type_id)

Get a jobType by id

Returns the jobType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to be returned.

try { 
    $result = $api_instance->getJobTypeById($job_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to be returned. | 

### Return type

[**\Infoplus\Model\JobType**](JobType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJobTypeTags**
> getJobTypeTags($job_type_id)

Get the tags for a jobType.

Get all existing jobType tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$job_type_id = 56; // int | Id of the jobType to get tags for

try { 
    $api_instance->getJobTypeTags($job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateJobType**
> updateJobType($body)

Update a jobType

Updates an existing jobType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$body = new \Infoplus\Model\JobType(); // \Infoplus\Model\JobType | JobType to be updated.

try { 
    $api_instance->updateJobType($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->updateJobType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\JobType**](\Infoplus\Model\JobType.md)| JobType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateJobTypeCustomFields**
> updateJobTypeCustomFields($body)

Update a jobType custom fields

Updates an existing jobType custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\JobTypeApi();
$body = new \Infoplus\Model\JobType(); // \Infoplus\Model\JobType | JobType to be updated.

try { 
    $api_instance->updateJobTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->updateJobTypeCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\JobType**](\Infoplus\Model\JobType.md)| JobType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

