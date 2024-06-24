# Infoplus\JobTimeActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobTimeActivity**](JobTimeActivityApi.md#addJobTimeActivity) | **POST** /beta/jobTimeActivity | Create a jobTimeActivity
[**addJobTimeActivityAudit**](JobTimeActivityApi.md#addJobTimeActivityAudit) | **PUT** /beta/jobTimeActivity/{jobTimeActivityId}/audit/{jobTimeActivityAudit} | Add new audit for a jobTimeActivity
[**addJobTimeActivityFile**](JobTimeActivityApi.md#addJobTimeActivityFile) | **POST** /beta/jobTimeActivity/{jobTimeActivityId}/file/{fileName} | Attach a file to a jobTimeActivity
[**addJobTimeActivityFileByURL**](JobTimeActivityApi.md#addJobTimeActivityFileByURL) | **POST** /beta/jobTimeActivity/{jobTimeActivityId}/file | Attach a file to a jobTimeActivity by URL.
[**addJobTimeActivityTag**](JobTimeActivityApi.md#addJobTimeActivityTag) | **PUT** /beta/jobTimeActivity/{jobTimeActivityId}/tag/{jobTimeActivityTag} | Add new tags for a jobTimeActivity.
[**deleteJobTimeActivity**](JobTimeActivityApi.md#deleteJobTimeActivity) | **DELETE** /beta/jobTimeActivity/{jobTimeActivityId} | Delete a jobTimeActivity
[**deleteJobTimeActivityFile**](JobTimeActivityApi.md#deleteJobTimeActivityFile) | **DELETE** /beta/jobTimeActivity/{jobTimeActivityId}/file/{fileId} | Delete a file for a jobTimeActivity.
[**deleteJobTimeActivityTag**](JobTimeActivityApi.md#deleteJobTimeActivityTag) | **DELETE** /beta/jobTimeActivity/{jobTimeActivityId}/tag/{jobTimeActivityTag} | Delete a tag for a jobTimeActivity.
[**getDuplicateJobTimeActivityById**](JobTimeActivityApi.md#getDuplicateJobTimeActivityById) | **GET** /beta/jobTimeActivity/duplicate/{jobTimeActivityId} | Get a duplicated a jobTimeActivity by id
[**getJobTimeActivityByFilter**](JobTimeActivityApi.md#getJobTimeActivityByFilter) | **GET** /beta/jobTimeActivity/search | Search jobTimeActivitys by filter
[**getJobTimeActivityById**](JobTimeActivityApi.md#getJobTimeActivityById) | **GET** /beta/jobTimeActivity/{jobTimeActivityId} | Get a jobTimeActivity by id
[**getJobTimeActivityFiles**](JobTimeActivityApi.md#getJobTimeActivityFiles) | **GET** /beta/jobTimeActivity/{jobTimeActivityId}/file | Get the files for a jobTimeActivity.
[**getJobTimeActivityTags**](JobTimeActivityApi.md#getJobTimeActivityTags) | **GET** /beta/jobTimeActivity/{jobTimeActivityId}/tag | Get the tags for a jobTimeActivity.
[**updateJobTimeActivity**](JobTimeActivityApi.md#updateJobTimeActivity) | **PUT** /beta/jobTimeActivity | Update a jobTimeActivity


# **addJobTimeActivity**
> \Infoplus\Infoplus\Model\JobTimeActivity addJobTimeActivity($body)

Create a jobTimeActivity

Inserts a new jobTimeActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobTimeActivity(); // \Infoplus\Infoplus\Model\JobTimeActivity | JobTimeActivity to be inserted.

try {
    $result = $apiInstance->addJobTimeActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->addJobTimeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobTimeActivity**](../Model/JobTimeActivity.md)| JobTimeActivity to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\JobTimeActivity**](../Model/JobTimeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeActivityAudit**
> addJobTimeActivityAudit($job_time_activity_id, $job_time_activity_audit)

Add new audit for a jobTimeActivity

Adds an audit to an existing jobTimeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to add an audit to
$job_time_activity_audit = "job_time_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addJobTimeActivityAudit($job_time_activity_id, $job_time_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->addJobTimeActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to add an audit to |
 **job_time_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeActivityFile**
> addJobTimeActivityFile($job_time_activity_id, $file_name)

Attach a file to a jobTimeActivity

Adds a file to an existing jobTimeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addJobTimeActivityFile($job_time_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->addJobTimeActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeActivityFileByURL**
> addJobTimeActivityFileByURL($body, $job_time_activity_id)

Attach a file to a jobTimeActivity by URL.

Adds a file to an existing jobTimeActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to add an file to

try {
    $apiInstance->addJobTimeActivityFileByURL($body, $job_time_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->addJobTimeActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeActivityTag**
> addJobTimeActivityTag($job_time_activity_id, $job_time_activity_tag)

Add new tags for a jobTimeActivity.

Adds a tag to an existing jobTimeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to add a tag to
$job_time_activity_tag = "job_time_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addJobTimeActivityTag($job_time_activity_id, $job_time_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->addJobTimeActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to add a tag to |
 **job_time_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTimeActivity**
> deleteJobTimeActivity($job_time_activity_id)

Delete a jobTimeActivity

Deletes the jobTimeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to be deleted.

try {
    $apiInstance->deleteJobTimeActivity($job_time_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->deleteJobTimeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTimeActivityFile**
> deleteJobTimeActivityFile($job_time_activity_id, $file_id)

Delete a file for a jobTimeActivity.

Deletes an existing jobTimeActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteJobTimeActivityFile($job_time_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->deleteJobTimeActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTimeActivityTag**
> deleteJobTimeActivityTag($job_time_activity_id, $job_time_activity_tag)

Delete a tag for a jobTimeActivity.

Deletes an existing jobTimeActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to remove tag from
$job_time_activity_tag = "job_time_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteJobTimeActivityTag($job_time_activity_id, $job_time_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->deleteJobTimeActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to remove tag from |
 **job_time_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateJobTimeActivityById**
> \Infoplus\Infoplus\Model\JobTimeActivity getDuplicateJobTimeActivityById($job_time_activity_id)

Get a duplicated a jobTimeActivity by id

Returns a duplicated jobTimeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateJobTimeActivityById($job_time_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->getDuplicateJobTimeActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\JobTimeActivity**](../Model/JobTimeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeActivityByFilter**
> \Infoplus\Infoplus\Model\JobTimeActivity[] getJobTimeActivityByFilter($filter, $page, $limit, $sort)

Search jobTimeActivitys by filter

Returns the list of jobTimeActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try {
    $result = $apiInstance->getJobTimeActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->getJobTimeActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\JobTimeActivity[]**](../Model/JobTimeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeActivityById**
> \Infoplus\Infoplus\Model\JobTimeActivity getJobTimeActivityById($job_time_activity_id)

Get a jobTimeActivity by id

Returns the jobTimeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to be returned.

try {
    $result = $apiInstance->getJobTimeActivityById($job_time_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->getJobTimeActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\JobTimeActivity**](../Model/JobTimeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeActivityFiles**
> getJobTimeActivityFiles($job_time_activity_id)

Get the files for a jobTimeActivity.

Get all existing jobTimeActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to get files for

try {
    $apiInstance->getJobTimeActivityFiles($job_time_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->getJobTimeActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeActivityTags**
> getJobTimeActivityTags($job_time_activity_id)

Get the tags for a jobTimeActivity.

Get all existing jobTimeActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_activity_id = 56; // int | Id of the jobTimeActivity to get tags for

try {
    $apiInstance->getJobTimeActivityTags($job_time_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->getJobTimeActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_activity_id** | **int**| Id of the jobTimeActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobTimeActivity**
> updateJobTimeActivity($body)

Update a jobTimeActivity

Updates an existing jobTimeActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobTimeActivity(); // \Infoplus\Infoplus\Model\JobTimeActivity | JobTimeActivity to be updated.

try {
    $apiInstance->updateJobTimeActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeActivityApi->updateJobTimeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobTimeActivity**](../Model/JobTimeActivity.md)| JobTimeActivity to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

