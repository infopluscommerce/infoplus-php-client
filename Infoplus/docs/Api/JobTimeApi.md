# Infoplus\JobTimeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobTime**](JobTimeApi.md#addJobTime) | **POST** /beta/jobTime | Create a jobTime
[**addJobTimeAudit**](JobTimeApi.md#addJobTimeAudit) | **PUT** /beta/jobTime/{jobTimeId}/audit/{jobTimeAudit} | Add new audit for a jobTime
[**addJobTimeFile**](JobTimeApi.md#addJobTimeFile) | **POST** /beta/jobTime/{jobTimeId}/file/{fileName} | Attach a file to a jobTime
[**addJobTimeFileByURL**](JobTimeApi.md#addJobTimeFileByURL) | **POST** /beta/jobTime/{jobTimeId}/file | Attach a file to a jobTime by URL.
[**addJobTimeTag**](JobTimeApi.md#addJobTimeTag) | **PUT** /beta/jobTime/{jobTimeId}/tag/{jobTimeTag} | Add new tags for a jobTime.
[**deleteJobTime**](JobTimeApi.md#deleteJobTime) | **DELETE** /beta/jobTime/{jobTimeId} | Delete a jobTime
[**deleteJobTimeFile**](JobTimeApi.md#deleteJobTimeFile) | **DELETE** /beta/jobTime/{jobTimeId}/file/{fileId} | Delete a file for a jobTime.
[**deleteJobTimeTag**](JobTimeApi.md#deleteJobTimeTag) | **DELETE** /beta/jobTime/{jobTimeId}/tag/{jobTimeTag} | Delete a tag for a jobTime.
[**getDuplicateJobTimeById**](JobTimeApi.md#getDuplicateJobTimeById) | **GET** /beta/jobTime/duplicate/{jobTimeId} | Get a duplicated a jobTime by id
[**getJobTimeByFilter**](JobTimeApi.md#getJobTimeByFilter) | **GET** /beta/jobTime/search | Search jobTimes by filter
[**getJobTimeById**](JobTimeApi.md#getJobTimeById) | **GET** /beta/jobTime/{jobTimeId} | Get a jobTime by id
[**getJobTimeFiles**](JobTimeApi.md#getJobTimeFiles) | **GET** /beta/jobTime/{jobTimeId}/file | Get the files for a jobTime.
[**getJobTimeTags**](JobTimeApi.md#getJobTimeTags) | **GET** /beta/jobTime/{jobTimeId}/tag | Get the tags for a jobTime.
[**updateJobTime**](JobTimeApi.md#updateJobTime) | **PUT** /beta/jobTime | Update a jobTime
[**updateJobTimeCustomFields**](JobTimeApi.md#updateJobTimeCustomFields) | **PUT** /beta/jobTime/customFields | Update a jobTime custom fields


# **addJobTime**
> \Infoplus\Infoplus\Model\JobTime addJobTime($body)

Create a jobTime

Inserts a new jobTime using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobTime(); // \Infoplus\Infoplus\Model\JobTime | JobTime to be inserted.

try {
    $result = $apiInstance->addJobTime($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->addJobTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)| JobTime to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeAudit**
> addJobTimeAudit($job_time_id, $job_time_audit)

Add new audit for a jobTime

Adds an audit to an existing jobTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to add an audit to
$job_time_audit = "job_time_audit_example"; // string | The audit to add

try {
    $apiInstance->addJobTimeAudit($job_time_id, $job_time_audit);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->addJobTimeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to add an audit to |
 **job_time_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeFile**
> addJobTimeFile($job_time_id, $file_name)

Attach a file to a jobTime

Adds a file to an existing jobTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addJobTimeFile($job_time_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->addJobTimeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeFileByURL**
> addJobTimeFileByURL($body, $job_time_id)

Attach a file to a jobTime by URL.

Adds a file to an existing jobTime by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$job_time_id = 56; // int | Id of the jobTime to add an file to

try {
    $apiInstance->addJobTimeFileByURL($body, $job_time_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->addJobTimeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **job_time_id** | **int**| Id of the jobTime to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTimeTag**
> addJobTimeTag($job_time_id, $job_time_tag)

Add new tags for a jobTime.

Adds a tag to an existing jobTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to add a tag to
$job_time_tag = "job_time_tag_example"; // string | The tag to add

try {
    $apiInstance->addJobTimeTag($job_time_id, $job_time_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->addJobTimeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to add a tag to |
 **job_time_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTime**
> deleteJobTime($job_time_id)

Delete a jobTime

Deletes the jobTime identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to be deleted.

try {
    $apiInstance->deleteJobTime($job_time_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->deleteJobTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTimeFile**
> deleteJobTimeFile($job_time_id, $file_id)

Delete a file for a jobTime.

Deletes an existing jobTime file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteJobTimeFile($job_time_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->deleteJobTimeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTimeTag**
> deleteJobTimeTag($job_time_id, $job_time_tag)

Delete a tag for a jobTime.

Deletes an existing jobTime tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to remove tag from
$job_time_tag = "job_time_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteJobTimeTag($job_time_id, $job_time_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->deleteJobTimeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to remove tag from |
 **job_time_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateJobTimeById**
> \Infoplus\Infoplus\Model\JobTime getDuplicateJobTimeById($job_time_id)

Get a duplicated a jobTime by id

Returns a duplicated jobTime identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to be duplicated.

try {
    $result = $apiInstance->getDuplicateJobTimeById($job_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->getDuplicateJobTimeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeByFilter**
> \Infoplus\Infoplus\Model\JobTime[] getJobTimeByFilter($filter, $page, $limit, $sort)

Search jobTimes by filter

Returns the list of jobTimes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
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
    $result = $apiInstance->getJobTimeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->getJobTimeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\JobTime[]**](../Model/JobTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeById**
> \Infoplus\Infoplus\Model\JobTime getJobTimeById($job_time_id)

Get a jobTime by id

Returns the jobTime identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to be returned.

try {
    $result = $apiInstance->getJobTimeById($job_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->getJobTimeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeFiles**
> getJobTimeFiles($job_time_id)

Get the files for a jobTime.

Get all existing jobTime files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to get files for

try {
    $apiInstance->getJobTimeFiles($job_time_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->getJobTimeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTimeTags**
> getJobTimeTags($job_time_id)

Get the tags for a jobTime.

Get all existing jobTime tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_time_id = 56; // int | Id of the jobTime to get tags for

try {
    $apiInstance->getJobTimeTags($job_time_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->getJobTimeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_time_id** | **int**| Id of the jobTime to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobTime**
> updateJobTime($body)

Update a jobTime

Updates an existing jobTime using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobTime(); // \Infoplus\Infoplus\Model\JobTime | JobTime to be updated.

try {
    $apiInstance->updateJobTime($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->updateJobTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)| JobTime to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobTimeCustomFields**
> updateJobTimeCustomFields($body)

Update a jobTime custom fields

Updates an existing jobTime custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobTime(); // \Infoplus\Infoplus\Model\JobTime | JobTime to be updated.

try {
    $apiInstance->updateJobTimeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTimeApi->updateJobTimeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobTime**](../Model/JobTime.md)| JobTime to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

