# Infoplus\ScheduledPlanLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addScheduledPlanLogAudit**](ScheduledPlanLogApi.md#addScheduledPlanLogAudit) | **PUT** /beta/scheduledPlanLog/{scheduledPlanLogId}/audit/{scheduledPlanLogAudit} | Add new audit for a scheduledPlanLog
[**addScheduledPlanLogFile**](ScheduledPlanLogApi.md#addScheduledPlanLogFile) | **POST** /beta/scheduledPlanLog/{scheduledPlanLogId}/file/{fileName} | Attach a file to a scheduledPlanLog
[**addScheduledPlanLogFileByURL**](ScheduledPlanLogApi.md#addScheduledPlanLogFileByURL) | **POST** /beta/scheduledPlanLog/{scheduledPlanLogId}/file | Attach a file to a scheduledPlanLog by URL.
[**addScheduledPlanLogTag**](ScheduledPlanLogApi.md#addScheduledPlanLogTag) | **PUT** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag/{scheduledPlanLogTag} | Add new tags for a scheduledPlanLog.
[**deleteScheduledPlanLogFile**](ScheduledPlanLogApi.md#deleteScheduledPlanLogFile) | **DELETE** /beta/scheduledPlanLog/{scheduledPlanLogId}/file/{fileId} | Delete a file for a scheduledPlanLog.
[**deleteScheduledPlanLogTag**](ScheduledPlanLogApi.md#deleteScheduledPlanLogTag) | **DELETE** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag/{scheduledPlanLogTag} | Delete a tag for a scheduledPlanLog.
[**getDuplicateScheduledPlanLogById**](ScheduledPlanLogApi.md#getDuplicateScheduledPlanLogById) | **GET** /beta/scheduledPlanLog/duplicate/{scheduledPlanLogId} | Get a duplicated a scheduledPlanLog by id
[**getScheduledPlanLogByFilter**](ScheduledPlanLogApi.md#getScheduledPlanLogByFilter) | **GET** /beta/scheduledPlanLog/search | Search scheduledPlanLogs by filter
[**getScheduledPlanLogById**](ScheduledPlanLogApi.md#getScheduledPlanLogById) | **GET** /beta/scheduledPlanLog/{scheduledPlanLogId} | Get a scheduledPlanLog by id
[**getScheduledPlanLogFiles**](ScheduledPlanLogApi.md#getScheduledPlanLogFiles) | **GET** /beta/scheduledPlanLog/{scheduledPlanLogId}/file | Get the files for a scheduledPlanLog.
[**getScheduledPlanLogTags**](ScheduledPlanLogApi.md#getScheduledPlanLogTags) | **GET** /beta/scheduledPlanLog/{scheduledPlanLogId}/tag | Get the tags for a scheduledPlanLog.


# **addScheduledPlanLogAudit**
> addScheduledPlanLogAudit($scheduled_plan_log_id, $scheduled_plan_log_audit)

Add new audit for a scheduledPlanLog

Adds an audit to an existing scheduledPlanLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add an audit to
$scheduled_plan_log_audit = "scheduled_plan_log_audit_example"; // string | The audit to add

try {
    $apiInstance->addScheduledPlanLogAudit($scheduled_plan_log_id, $scheduled_plan_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add an audit to |
 **scheduled_plan_log_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addScheduledPlanLogFile**
> addScheduledPlanLogFile($scheduled_plan_log_id, $file_name)

Attach a file to a scheduledPlanLog

Adds a file to an existing scheduledPlanLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addScheduledPlanLogFile($scheduled_plan_log_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addScheduledPlanLogFileByURL**
> addScheduledPlanLogFileByURL($body, $scheduled_plan_log_id)

Attach a file to a scheduledPlanLog by URL.

Adds a file to an existing scheduledPlanLog by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add an file to

try {
    $apiInstance->addScheduledPlanLogFileByURL($body, $scheduled_plan_log_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addScheduledPlanLogTag**
> addScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag)

Add new tags for a scheduledPlanLog.

Adds a tag to an existing scheduledPlanLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to add a tag to
$scheduled_plan_log_tag = "scheduled_plan_log_tag_example"; // string | The tag to add

try {
    $apiInstance->addScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->addScheduledPlanLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to add a tag to |
 **scheduled_plan_log_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledPlanLogFile**
> deleteScheduledPlanLogFile($scheduled_plan_log_id, $file_id)

Delete a file for a scheduledPlanLog.

Deletes an existing scheduledPlanLog file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteScheduledPlanLogFile($scheduled_plan_log_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->deleteScheduledPlanLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledPlanLogTag**
> deleteScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag)

Delete a tag for a scheduledPlanLog.

Deletes an existing scheduledPlanLog tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to remove tag from
$scheduled_plan_log_tag = "scheduled_plan_log_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteScheduledPlanLogTag($scheduled_plan_log_id, $scheduled_plan_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->deleteScheduledPlanLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to remove tag from |
 **scheduled_plan_log_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateScheduledPlanLogById**
> \Infoplus\Infoplus\Model\ScheduledPlanLog getDuplicateScheduledPlanLogById($scheduled_plan_log_id)

Get a duplicated a scheduledPlanLog by id

Returns a duplicated scheduledPlanLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to be duplicated.

try {
    $result = $apiInstance->getDuplicateScheduledPlanLogById($scheduled_plan_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getDuplicateScheduledPlanLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ScheduledPlanLog**](../Model/ScheduledPlanLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledPlanLogByFilter**
> \Infoplus\Infoplus\Model\ScheduledPlanLog[] getScheduledPlanLogByFilter($filter, $page, $limit, $sort)

Search scheduledPlanLogs by filter

Returns the list of scheduledPlanLogs that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
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
    $result = $apiInstance->getScheduledPlanLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ScheduledPlanLog[]**](../Model/ScheduledPlanLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledPlanLogById**
> \Infoplus\Infoplus\Model\ScheduledPlanLog getScheduledPlanLogById($scheduled_plan_log_id)

Get a scheduledPlanLog by id

Returns the scheduledPlanLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to be returned.

try {
    $result = $apiInstance->getScheduledPlanLogById($scheduled_plan_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ScheduledPlanLog**](../Model/ScheduledPlanLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledPlanLogFiles**
> getScheduledPlanLogFiles($scheduled_plan_log_id)

Get the files for a scheduledPlanLog.

Get all existing scheduledPlanLog files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to get files for

try {
    $apiInstance->getScheduledPlanLogFiles($scheduled_plan_log_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledPlanLogTags**
> getScheduledPlanLogTags($scheduled_plan_log_id)

Get the tags for a scheduledPlanLog.

Get all existing scheduledPlanLog tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ScheduledPlanLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduled_plan_log_id = 56; // int | Id of the scheduledPlanLog to get tags for

try {
    $apiInstance->getScheduledPlanLogTags($scheduled_plan_log_id);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledPlanLogApi->getScheduledPlanLogTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduled_plan_log_id** | **int**| Id of the scheduledPlanLog to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

