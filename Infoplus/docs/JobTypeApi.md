# Infoplus\JobTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobType**](JobTypeApi.md#addJobType) | **POST** /v1.0/jobType | Create a jobType
[**deleteJobType**](JobTypeApi.md#deleteJobType) | **DELETE** /v1.0/jobType/{jobTypeId} | Delete a jobType
[**getJobTypeByFilter**](JobTypeApi.md#getJobTypeByFilter) | **GET** /v1.0/jobType/search | Search jobTypes by filter
[**getJobTypeById**](JobTypeApi.md#getJobTypeById) | **GET** /v1.0/jobType/{jobTypeId} | Get a jobType by id
[**updateJobType**](JobTypeApi.md#updateJobType) | **PUT** /v1.0/jobType | Update a jobType


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

