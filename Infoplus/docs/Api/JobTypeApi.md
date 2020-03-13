# Infoplus\JobTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobType**](JobTypeApi.md#addJobType) | **POST** /beta/jobType | Create a jobType
[**addJobTypeAudit**](JobTypeApi.md#addJobTypeAudit) | **PUT** /beta/jobType/{jobTypeId}/audit/{jobTypeAudit} | Add new audit for a jobType
[**addJobTypeFile**](JobTypeApi.md#addJobTypeFile) | **POST** /beta/jobType/{jobTypeId}/file/{fileName} | Attach a file to a jobType
[**addJobTypeFileByURL**](JobTypeApi.md#addJobTypeFileByURL) | **POST** /beta/jobType/{jobTypeId}/file | Attach a file to a jobType by URL.
[**addJobTypeTag**](JobTypeApi.md#addJobTypeTag) | **PUT** /beta/jobType/{jobTypeId}/tag/{jobTypeTag} | Add new tags for a jobType.
[**deleteJobType**](JobTypeApi.md#deleteJobType) | **DELETE** /beta/jobType/{jobTypeId} | Delete a jobType
[**deleteJobTypeFile**](JobTypeApi.md#deleteJobTypeFile) | **DELETE** /beta/jobType/{jobTypeId}/file/{fileId} | Delete a file for a jobType.
[**deleteJobTypeTag**](JobTypeApi.md#deleteJobTypeTag) | **DELETE** /beta/jobType/{jobTypeId}/tag/{jobTypeTag} | Delete a tag for a jobType.
[**getDuplicateJobTypeById**](JobTypeApi.md#getDuplicateJobTypeById) | **GET** /beta/jobType/duplicate/{jobTypeId} | Get a duplicated a jobType by id
[**getJobTypeByFilter**](JobTypeApi.md#getJobTypeByFilter) | **GET** /beta/jobType/search | Search jobTypes by filter
[**getJobTypeById**](JobTypeApi.md#getJobTypeById) | **GET** /beta/jobType/{jobTypeId} | Get a jobType by id
[**getJobTypeFiles**](JobTypeApi.md#getJobTypeFiles) | **GET** /beta/jobType/{jobTypeId}/file | Get the files for a jobType.
[**getJobTypeTags**](JobTypeApi.md#getJobTypeTags) | **GET** /beta/jobType/{jobTypeId}/tag | Get the tags for a jobType.
[**updateJobType**](JobTypeApi.md#updateJobType) | **PUT** /beta/jobType | Update a jobType
[**updateJobTypeCustomFields**](JobTypeApi.md#updateJobTypeCustomFields) | **PUT** /beta/jobType/customFields | Update a jobType custom fields


# **addJobType**
> \Infoplus\Infoplus\Model\JobType addJobType($body)

Create a jobType

Inserts a new jobType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobType(); // \Infoplus\Infoplus\Model\JobType | JobType to be inserted.

try {
    $result = $apiInstance->addJobType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)| JobType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTypeAudit**
> addJobTypeAudit($job_type_id, $job_type_audit)

Add new audit for a jobType

Adds an audit to an existing jobType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to add an audit to
$job_type_audit = "job_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addJobTypeAudit($job_type_id, $job_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeAudit: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTypeFile**
> addJobTypeFile($job_type_id, $file_name)

Attach a file to a jobType

Adds a file to an existing jobType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addJobTypeFile($job_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTypeFileByURL**
> addJobTypeFileByURL($body, $job_type_id)

Attach a file to a jobType by URL.

Adds a file to an existing jobType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$job_type_id = 56; // int | Id of the jobType to add an file to

try {
    $apiInstance->addJobTypeFileByURL($body, $job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **job_type_id** | **int**| Id of the jobType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobTypeTag**
> addJobTypeTag($job_type_id, $job_type_tag)

Add new tags for a jobType.

Adds a tag to an existing jobType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to add a tag to
$job_type_tag = "job_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addJobTypeTag($job_type_id, $job_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->addJobTypeTag: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobType**
> deleteJobType($job_type_id)

Delete a jobType

Deletes the jobType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to be deleted.

try {
    $apiInstance->deleteJobType($job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->deleteJobType: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTypeFile**
> deleteJobTypeFile($job_type_id, $file_id)

Delete a file for a jobType.

Deletes an existing jobType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteJobTypeFile($job_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->deleteJobTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobTypeTag**
> deleteJobTypeTag($job_type_id, $job_type_tag)

Delete a tag for a jobType.

Deletes an existing jobType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to remove tag from
$job_type_tag = "job_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteJobTypeTag($job_type_id, $job_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->deleteJobTypeTag: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateJobTypeById**
> \Infoplus\Infoplus\Model\JobType getDuplicateJobTypeById($job_type_id)

Get a duplicated a jobType by id

Returns a duplicated jobType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to be duplicated.

try {
    $result = $apiInstance->getDuplicateJobTypeById($job_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getDuplicateJobTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTypeByFilter**
> \Infoplus\Infoplus\Model\JobType[] getJobTypeByFilter($filter, $page, $limit, $sort)

Search jobTypes by filter

Returns the list of jobTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
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
    $result = $apiInstance->getJobTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\JobType[]**](../Model/JobType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTypeById**
> \Infoplus\Infoplus\Model\JobType getJobTypeById($job_type_id)

Get a jobType by id

Returns the jobType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to be returned.

try {
    $result = $apiInstance->getJobTypeById($job_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTypeFiles**
> getJobTypeFiles($job_type_id)

Get the files for a jobType.

Get all existing jobType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to get files for

try {
    $apiInstance->getJobTypeFiles($job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_type_id** | **int**| Id of the jobType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobTypeTags**
> getJobTypeTags($job_type_id)

Get the tags for a jobType.

Get all existing jobType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_type_id = 56; // int | Id of the jobType to get tags for

try {
    $apiInstance->getJobTypeTags($job_type_id);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->getJobTypeTags: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobType**
> updateJobType($body)

Update a jobType

Updates an existing jobType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobType(); // \Infoplus\Infoplus\Model\JobType | JobType to be updated.

try {
    $apiInstance->updateJobType($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->updateJobType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)| JobType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobTypeCustomFields**
> updateJobTypeCustomFields($body)

Update a jobType custom fields

Updates an existing jobType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobType(); // \Infoplus\Infoplus\Model\JobType | JobType to be updated.

try {
    $apiInstance->updateJobTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling JobTypeApi->updateJobTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobType**](../Model/JobType.md)| JobType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

