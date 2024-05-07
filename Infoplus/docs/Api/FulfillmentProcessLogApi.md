# Infoplus\FulfillmentProcessLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFulfillmentProcessLogAudit**](FulfillmentProcessLogApi.md#addFulfillmentProcessLogAudit) | **PUT** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/audit/{fulfillmentProcessLogAudit} | Add new audit for a fulfillmentProcessLog
[**addFulfillmentProcessLogFile**](FulfillmentProcessLogApi.md#addFulfillmentProcessLogFile) | **POST** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/file/{fileName} | Attach a file to a fulfillmentProcessLog
[**addFulfillmentProcessLogFileByURL**](FulfillmentProcessLogApi.md#addFulfillmentProcessLogFileByURL) | **POST** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/file | Attach a file to a fulfillmentProcessLog by URL.
[**addFulfillmentProcessLogTag**](FulfillmentProcessLogApi.md#addFulfillmentProcessLogTag) | **PUT** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/tag/{fulfillmentProcessLogTag} | Add new tags for a fulfillmentProcessLog.
[**deleteFulfillmentProcessLogFile**](FulfillmentProcessLogApi.md#deleteFulfillmentProcessLogFile) | **DELETE** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/file/{fileId} | Delete a file for a fulfillmentProcessLog.
[**deleteFulfillmentProcessLogTag**](FulfillmentProcessLogApi.md#deleteFulfillmentProcessLogTag) | **DELETE** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/tag/{fulfillmentProcessLogTag} | Delete a tag for a fulfillmentProcessLog.
[**getDuplicateFulfillmentProcessLogById**](FulfillmentProcessLogApi.md#getDuplicateFulfillmentProcessLogById) | **GET** /beta/fulfillmentProcessLog/duplicate/{fulfillmentProcessLogId} | Get a duplicated a fulfillmentProcessLog by id
[**getFulfillmentProcessLogByFilter**](FulfillmentProcessLogApi.md#getFulfillmentProcessLogByFilter) | **GET** /beta/fulfillmentProcessLog/search | Search fulfillmentProcessLogs by filter
[**getFulfillmentProcessLogById**](FulfillmentProcessLogApi.md#getFulfillmentProcessLogById) | **GET** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId} | Get a fulfillmentProcessLog by id
[**getFulfillmentProcessLogFiles**](FulfillmentProcessLogApi.md#getFulfillmentProcessLogFiles) | **GET** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/file | Get the files for a fulfillmentProcessLog.
[**getFulfillmentProcessLogTags**](FulfillmentProcessLogApi.md#getFulfillmentProcessLogTags) | **GET** /beta/fulfillmentProcessLog/{fulfillmentProcessLogId}/tag | Get the tags for a fulfillmentProcessLog.


# **addFulfillmentProcessLogAudit**
> addFulfillmentProcessLogAudit($fulfillment_process_log_id, $fulfillment_process_log_audit)

Add new audit for a fulfillmentProcessLog

Adds an audit to an existing fulfillmentProcessLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to add an audit to
$fulfillment_process_log_audit = "fulfillment_process_log_audit_example"; // string | The audit to add

try {
    $apiInstance->addFulfillmentProcessLogAudit($fulfillment_process_log_id, $fulfillment_process_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->addFulfillmentProcessLogAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to add an audit to |
 **fulfillment_process_log_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessLogFile**
> addFulfillmentProcessLogFile($fulfillment_process_log_id, $file_name)

Attach a file to a fulfillmentProcessLog

Adds a file to an existing fulfillmentProcessLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFulfillmentProcessLogFile($fulfillment_process_log_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->addFulfillmentProcessLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessLogFileByURL**
> addFulfillmentProcessLogFileByURL($body, $fulfillment_process_log_id)

Attach a file to a fulfillmentProcessLog by URL.

Adds a file to an existing fulfillmentProcessLog by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to add an file to

try {
    $apiInstance->addFulfillmentProcessLogFileByURL($body, $fulfillment_process_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->addFulfillmentProcessLogFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessLogTag**
> addFulfillmentProcessLogTag($fulfillment_process_log_id, $fulfillment_process_log_tag)

Add new tags for a fulfillmentProcessLog.

Adds a tag to an existing fulfillmentProcessLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to add a tag to
$fulfillment_process_log_tag = "fulfillment_process_log_tag_example"; // string | The tag to add

try {
    $apiInstance->addFulfillmentProcessLogTag($fulfillment_process_log_id, $fulfillment_process_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->addFulfillmentProcessLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to add a tag to |
 **fulfillment_process_log_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentProcessLogFile**
> deleteFulfillmentProcessLogFile($fulfillment_process_log_id, $file_id)

Delete a file for a fulfillmentProcessLog.

Deletes an existing fulfillmentProcessLog file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFulfillmentProcessLogFile($fulfillment_process_log_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->deleteFulfillmentProcessLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentProcessLogTag**
> deleteFulfillmentProcessLogTag($fulfillment_process_log_id, $fulfillment_process_log_tag)

Delete a tag for a fulfillmentProcessLog.

Deletes an existing fulfillmentProcessLog tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to remove tag from
$fulfillment_process_log_tag = "fulfillment_process_log_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFulfillmentProcessLogTag($fulfillment_process_log_id, $fulfillment_process_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->deleteFulfillmentProcessLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to remove tag from |
 **fulfillment_process_log_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFulfillmentProcessLogById**
> \Infoplus\Infoplus\Model\FulfillmentProcessLog getDuplicateFulfillmentProcessLogById($fulfillment_process_log_id)

Get a duplicated a fulfillmentProcessLog by id

Returns a duplicated fulfillmentProcessLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to be duplicated.

try {
    $result = $apiInstance->getDuplicateFulfillmentProcessLogById($fulfillment_process_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->getDuplicateFulfillmentProcessLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcessLog**](../Model/FulfillmentProcessLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessLogByFilter**
> \Infoplus\Infoplus\Model\FulfillmentProcessLog[] getFulfillmentProcessLogByFilter($filter, $page, $limit, $sort)

Search fulfillmentProcessLogs by filter

Returns the list of fulfillmentProcessLogs that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
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
    $result = $apiInstance->getFulfillmentProcessLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->getFulfillmentProcessLogByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FulfillmentProcessLog[]**](../Model/FulfillmentProcessLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessLogById**
> \Infoplus\Infoplus\Model\FulfillmentProcessLog getFulfillmentProcessLogById($fulfillment_process_log_id)

Get a fulfillmentProcessLog by id

Returns the fulfillmentProcessLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to be returned.

try {
    $result = $apiInstance->getFulfillmentProcessLogById($fulfillment_process_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->getFulfillmentProcessLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcessLog**](../Model/FulfillmentProcessLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessLogFiles**
> getFulfillmentProcessLogFiles($fulfillment_process_log_id)

Get the files for a fulfillmentProcessLog.

Get all existing fulfillmentProcessLog files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to get files for

try {
    $apiInstance->getFulfillmentProcessLogFiles($fulfillment_process_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->getFulfillmentProcessLogFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessLogTags**
> getFulfillmentProcessLogTags($fulfillment_process_log_id)

Get the tags for a fulfillmentProcessLog.

Get all existing fulfillmentProcessLog tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_log_id = 56; // int | Id of the fulfillmentProcessLog to get tags for

try {
    $apiInstance->getFulfillmentProcessLogTags($fulfillment_process_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessLogApi->getFulfillmentProcessLogTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_log_id** | **int**| Id of the fulfillmentProcessLog to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

