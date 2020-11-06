# Infoplus\PerpetualInventoryLogApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPerpetualInventoryLogAudit**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogAudit) | **PUT** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/audit/{perpetualInventoryLogAudit} | Add new audit for a perpetualInventoryLog
[**addPerpetualInventoryLogFile**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogFile) | **POST** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/file/{fileName} | Attach a file to a perpetualInventoryLog
[**addPerpetualInventoryLogFileByURL**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogFileByURL) | **POST** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/file | Attach a file to a perpetualInventoryLog by URL.
[**addPerpetualInventoryLogTag**](PerpetualInventoryLogApi.md#addPerpetualInventoryLogTag) | **PUT** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag/{perpetualInventoryLogTag} | Add new tags for a perpetualInventoryLog.
[**deletePerpetualInventoryLogFile**](PerpetualInventoryLogApi.md#deletePerpetualInventoryLogFile) | **DELETE** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/file/{fileId} | Delete a file for a perpetualInventoryLog.
[**deletePerpetualInventoryLogTag**](PerpetualInventoryLogApi.md#deletePerpetualInventoryLogTag) | **DELETE** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag/{perpetualInventoryLogTag} | Delete a tag for a perpetualInventoryLog.
[**getDuplicatePerpetualInventoryLogById**](PerpetualInventoryLogApi.md#getDuplicatePerpetualInventoryLogById) | **GET** /beta/perpetualInventoryLog/duplicate/{perpetualInventoryLogId} | Get a duplicated a perpetualInventoryLog by id
[**getPerpetualInventoryLogByFilter**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogByFilter) | **GET** /beta/perpetualInventoryLog/search | Search perpetualInventoryLogs by filter
[**getPerpetualInventoryLogById**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogById) | **GET** /beta/perpetualInventoryLog/{perpetualInventoryLogId} | Get a perpetualInventoryLog by id
[**getPerpetualInventoryLogFiles**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogFiles) | **GET** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/file | Get the files for a perpetualInventoryLog.
[**getPerpetualInventoryLogTags**](PerpetualInventoryLogApi.md#getPerpetualInventoryLogTags) | **GET** /beta/perpetualInventoryLog/{perpetualInventoryLogId}/tag | Get the tags for a perpetualInventoryLog.


# **addPerpetualInventoryLogAudit**
> addPerpetualInventoryLogAudit($perpetual_inventory_log_id, $perpetual_inventory_log_audit)

Add new audit for a perpetualInventoryLog

Adds an audit to an existing perpetualInventoryLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add an audit to
$perpetual_inventory_log_audit = "perpetual_inventory_log_audit_example"; // string | The audit to add

try {
    $apiInstance->addPerpetualInventoryLogAudit($perpetual_inventory_log_id, $perpetual_inventory_log_audit);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add an audit to |
 **perpetual_inventory_log_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPerpetualInventoryLogFile**
> addPerpetualInventoryLogFile($perpetual_inventory_log_id, $file_name)

Attach a file to a perpetualInventoryLog

Adds a file to an existing perpetualInventoryLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPerpetualInventoryLogFile($perpetual_inventory_log_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPerpetualInventoryLogFileByURL**
> addPerpetualInventoryLogFileByURL($body, $perpetual_inventory_log_id)

Attach a file to a perpetualInventoryLog by URL.

Adds a file to an existing perpetualInventoryLog by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add an file to

try {
    $apiInstance->addPerpetualInventoryLogFileByURL($body, $perpetual_inventory_log_id);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPerpetualInventoryLogTag**
> addPerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag)

Add new tags for a perpetualInventoryLog.

Adds a tag to an existing perpetualInventoryLog.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to add a tag to
$perpetual_inventory_log_tag = "perpetual_inventory_log_tag_example"; // string | The tag to add

try {
    $apiInstance->addPerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->addPerpetualInventoryLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to add a tag to |
 **perpetual_inventory_log_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePerpetualInventoryLogFile**
> deletePerpetualInventoryLogFile($perpetual_inventory_log_id, $file_id)

Delete a file for a perpetualInventoryLog.

Deletes an existing perpetualInventoryLog file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePerpetualInventoryLogFile($perpetual_inventory_log_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->deletePerpetualInventoryLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePerpetualInventoryLogTag**
> deletePerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag)

Delete a tag for a perpetualInventoryLog.

Deletes an existing perpetualInventoryLog tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to remove tag from
$perpetual_inventory_log_tag = "perpetual_inventory_log_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePerpetualInventoryLogTag($perpetual_inventory_log_id, $perpetual_inventory_log_tag);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->deletePerpetualInventoryLogTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to remove tag from |
 **perpetual_inventory_log_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePerpetualInventoryLogById**
> \Infoplus\Infoplus\Model\PerpetualInventoryLog getDuplicatePerpetualInventoryLogById($perpetual_inventory_log_id)

Get a duplicated a perpetualInventoryLog by id

Returns a duplicated perpetualInventoryLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to be duplicated.

try {
    $result = $apiInstance->getDuplicatePerpetualInventoryLogById($perpetual_inventory_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getDuplicatePerpetualInventoryLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PerpetualInventoryLog**](../Model/PerpetualInventoryLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerpetualInventoryLogByFilter**
> \Infoplus\Infoplus\Model\PerpetualInventoryLog[] getPerpetualInventoryLogByFilter($filter, $page, $limit, $sort)

Search perpetualInventoryLogs by filter

Returns the list of perpetualInventoryLogs that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
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
    $result = $apiInstance->getPerpetualInventoryLogByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PerpetualInventoryLog[]**](../Model/PerpetualInventoryLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerpetualInventoryLogById**
> \Infoplus\Infoplus\Model\PerpetualInventoryLog getPerpetualInventoryLogById($perpetual_inventory_log_id)

Get a perpetualInventoryLog by id

Returns the perpetualInventoryLog identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to be returned.

try {
    $result = $apiInstance->getPerpetualInventoryLogById($perpetual_inventory_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PerpetualInventoryLog**](../Model/PerpetualInventoryLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerpetualInventoryLogFiles**
> getPerpetualInventoryLogFiles($perpetual_inventory_log_id)

Get the files for a perpetualInventoryLog.

Get all existing perpetualInventoryLog files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to get files for

try {
    $apiInstance->getPerpetualInventoryLogFiles($perpetual_inventory_log_id);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerpetualInventoryLogTags**
> getPerpetualInventoryLogTags($perpetual_inventory_log_id)

Get the tags for a perpetualInventoryLog.

Get all existing perpetualInventoryLog tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PerpetualInventoryLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$perpetual_inventory_log_id = 56; // int | Id of the perpetualInventoryLog to get tags for

try {
    $apiInstance->getPerpetualInventoryLogTags($perpetual_inventory_log_id);
} catch (Exception $e) {
    echo 'Exception when calling PerpetualInventoryLogApi->getPerpetualInventoryLogTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **perpetual_inventory_log_id** | **int**| Id of the perpetualInventoryLog to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

