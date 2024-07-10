# Infoplus\FinanceSystemConnectionLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFinanceSystemConnectionLogAudit**](FinanceSystemConnectionLogApi.md#addFinanceSystemConnectionLogAudit) | **PUT** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/audit/{financeSystemConnectionLogAudit} | Add new audit for a financeSystemConnectionLog
[**addFinanceSystemConnectionLogFile**](FinanceSystemConnectionLogApi.md#addFinanceSystemConnectionLogFile) | **POST** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/file/{fileName} | Attach a file to a financeSystemConnectionLog
[**addFinanceSystemConnectionLogFileByURL**](FinanceSystemConnectionLogApi.md#addFinanceSystemConnectionLogFileByURL) | **POST** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/file | Attach a file to a financeSystemConnectionLog by URL.
[**addFinanceSystemConnectionLogTag**](FinanceSystemConnectionLogApi.md#addFinanceSystemConnectionLogTag) | **PUT** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/tag/{financeSystemConnectionLogTag} | Add new tags for a financeSystemConnectionLog.
[**deleteFinanceSystemConnectionLogFile**](FinanceSystemConnectionLogApi.md#deleteFinanceSystemConnectionLogFile) | **DELETE** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/file/{fileId} | Delete a file for a financeSystemConnectionLog.
[**deleteFinanceSystemConnectionLogTag**](FinanceSystemConnectionLogApi.md#deleteFinanceSystemConnectionLogTag) | **DELETE** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/tag/{financeSystemConnectionLogTag} | Delete a tag for a financeSystemConnectionLog.
[**getDuplicateFinanceSystemConnectionLogById**](FinanceSystemConnectionLogApi.md#getDuplicateFinanceSystemConnectionLogById) | **GET** /beta/financeSystemConnectionLog/duplicate/{financeSystemConnectionLogId} | Get a duplicated a financeSystemConnectionLog by id
[**getFinanceSystemConnectionLogByFilter**](FinanceSystemConnectionLogApi.md#getFinanceSystemConnectionLogByFilter) | **GET** /beta/financeSystemConnectionLog/search | Search financeSystemConnectionLogs by filter
[**getFinanceSystemConnectionLogById**](FinanceSystemConnectionLogApi.md#getFinanceSystemConnectionLogById) | **GET** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId} | Get a financeSystemConnectionLog by id
[**getFinanceSystemConnectionLogFiles**](FinanceSystemConnectionLogApi.md#getFinanceSystemConnectionLogFiles) | **GET** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/file | Get the files for a financeSystemConnectionLog.
[**getFinanceSystemConnectionLogTags**](FinanceSystemConnectionLogApi.md#getFinanceSystemConnectionLogTags) | **GET** /beta/financeSystemConnectionLog/{financeSystemConnectionLogId}/tag | Get the tags for a financeSystemConnectionLog.


# **addFinanceSystemConnectionLogAudit**
> addFinanceSystemConnectionLogAudit($finance_system_connection_log_id, $finance_system_connection_log_audit)

Add new audit for a financeSystemConnectionLog

Adds an audit to an existing financeSystemConnectionLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to add an audit to
$finance_system_connection_log_audit = "finance_system_connection_log_audit_example"; // string | The audit to add

try {
    $apiInstance->addFinanceSystemConnectionLogAudit($finance_system_connection_log_id, $finance_system_connection_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->addFinanceSystemConnectionLogAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to add an audit to |
 **finance_system_connection_log_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionLogFile**
> addFinanceSystemConnectionLogFile($finance_system_connection_log_id, $file_name)

Attach a file to a financeSystemConnectionLog

Adds a file to an existing financeSystemConnectionLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFinanceSystemConnectionLogFile($finance_system_connection_log_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->addFinanceSystemConnectionLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionLogFileByURL**
> addFinanceSystemConnectionLogFileByURL($body, $finance_system_connection_log_id)

Attach a file to a financeSystemConnectionLog by URL.

Adds a file to an existing financeSystemConnectionLog by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to add an file to

try {
    $apiInstance->addFinanceSystemConnectionLogFileByURL($body, $finance_system_connection_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->addFinanceSystemConnectionLogFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionLogTag**
> addFinanceSystemConnectionLogTag($finance_system_connection_log_id, $finance_system_connection_log_tag)

Add new tags for a financeSystemConnectionLog.

Adds a tag to an existing financeSystemConnectionLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to add a tag to
$finance_system_connection_log_tag = "finance_system_connection_log_tag_example"; // string | The tag to add

try {
    $apiInstance->addFinanceSystemConnectionLogTag($finance_system_connection_log_id, $finance_system_connection_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->addFinanceSystemConnectionLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to add a tag to |
 **finance_system_connection_log_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFinanceSystemConnectionLogFile**
> deleteFinanceSystemConnectionLogFile($finance_system_connection_log_id, $file_id)

Delete a file for a financeSystemConnectionLog.

Deletes an existing financeSystemConnectionLog file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFinanceSystemConnectionLogFile($finance_system_connection_log_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->deleteFinanceSystemConnectionLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFinanceSystemConnectionLogTag**
> deleteFinanceSystemConnectionLogTag($finance_system_connection_log_id, $finance_system_connection_log_tag)

Delete a tag for a financeSystemConnectionLog.

Deletes an existing financeSystemConnectionLog tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to remove tag from
$finance_system_connection_log_tag = "finance_system_connection_log_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFinanceSystemConnectionLogTag($finance_system_connection_log_id, $finance_system_connection_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->deleteFinanceSystemConnectionLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to remove tag from |
 **finance_system_connection_log_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFinanceSystemConnectionLogById**
> \Infoplus\Infoplus\Model\FinanceSystemConnectionLog getDuplicateFinanceSystemConnectionLogById($finance_system_connection_log_id)

Get a duplicated a financeSystemConnectionLog by id

Returns a duplicated financeSystemConnectionLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to be duplicated.

try {
    $result = $apiInstance->getDuplicateFinanceSystemConnectionLogById($finance_system_connection_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->getDuplicateFinanceSystemConnectionLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FinanceSystemConnectionLog**](../Model/FinanceSystemConnectionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionLogByFilter**
> \Infoplus\Infoplus\Model\FinanceSystemConnectionLog[] getFinanceSystemConnectionLogByFilter($filter, $page, $limit, $sort)

Search financeSystemConnectionLogs by filter

Returns the list of financeSystemConnectionLogs that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
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
    $result = $apiInstance->getFinanceSystemConnectionLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->getFinanceSystemConnectionLogByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FinanceSystemConnectionLog[]**](../Model/FinanceSystemConnectionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionLogById**
> \Infoplus\Infoplus\Model\FinanceSystemConnectionLog getFinanceSystemConnectionLogById($finance_system_connection_log_id)

Get a financeSystemConnectionLog by id

Returns the financeSystemConnectionLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to be returned.

try {
    $result = $apiInstance->getFinanceSystemConnectionLogById($finance_system_connection_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->getFinanceSystemConnectionLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FinanceSystemConnectionLog**](../Model/FinanceSystemConnectionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionLogFiles**
> getFinanceSystemConnectionLogFiles($finance_system_connection_log_id)

Get the files for a financeSystemConnectionLog.

Get all existing financeSystemConnectionLog files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to get files for

try {
    $apiInstance->getFinanceSystemConnectionLogFiles($finance_system_connection_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->getFinanceSystemConnectionLogFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionLogTags**
> getFinanceSystemConnectionLogTags($finance_system_connection_log_id)

Get the tags for a financeSystemConnectionLog.

Get all existing financeSystemConnectionLog tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_log_id = 56; // int | Id of the financeSystemConnectionLog to get tags for

try {
    $apiInstance->getFinanceSystemConnectionLogTags($finance_system_connection_log_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionLogApi->getFinanceSystemConnectionLogTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_log_id** | **int**| Id of the financeSystemConnectionLog to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

