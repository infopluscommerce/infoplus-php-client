# Infoplus\WorkBatchApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWorkBatchAudit**](WorkBatchApi.md#addWorkBatchAudit) | **PUT** /beta/workBatch/{workBatchId}/audit/{workBatchAudit} | Add new audit for a workBatch
[**addWorkBatchFile**](WorkBatchApi.md#addWorkBatchFile) | **POST** /beta/workBatch/{workBatchId}/file/{fileName} | Attach a file to a workBatch
[**addWorkBatchFileByURL**](WorkBatchApi.md#addWorkBatchFileByURL) | **POST** /beta/workBatch/{workBatchId}/file | Attach a file to a workBatch by URL.
[**addWorkBatchTag**](WorkBatchApi.md#addWorkBatchTag) | **PUT** /beta/workBatch/{workBatchId}/tag/{workBatchTag} | Add new tags for a workBatch.
[**deleteWorkBatchFile**](WorkBatchApi.md#deleteWorkBatchFile) | **DELETE** /beta/workBatch/{workBatchId}/file/{fileId} | Delete a file for a workBatch.
[**deleteWorkBatchTag**](WorkBatchApi.md#deleteWorkBatchTag) | **DELETE** /beta/workBatch/{workBatchId}/tag/{workBatchTag} | Delete a tag for a workBatch.
[**getDuplicateWorkBatchById**](WorkBatchApi.md#getDuplicateWorkBatchById) | **GET** /beta/workBatch/duplicate/{workBatchId} | Get a duplicated a workBatch by id
[**getWorkBatchByFilter**](WorkBatchApi.md#getWorkBatchByFilter) | **GET** /beta/workBatch/search | Search workBatchs by filter
[**getWorkBatchById**](WorkBatchApi.md#getWorkBatchById) | **GET** /beta/workBatch/{workBatchId} | Get a workBatch by id
[**getWorkBatchFiles**](WorkBatchApi.md#getWorkBatchFiles) | **GET** /beta/workBatch/{workBatchId}/file | Get the files for a workBatch.
[**getWorkBatchTags**](WorkBatchApi.md#getWorkBatchTags) | **GET** /beta/workBatch/{workBatchId}/tag | Get the tags for a workBatch.
[**updateWorkBatch**](WorkBatchApi.md#updateWorkBatch) | **PUT** /beta/workBatch | Update a workBatch
[**updateWorkBatchCustomFields**](WorkBatchApi.md#updateWorkBatchCustomFields) | **PUT** /beta/workBatch/customFields | Update a workBatch custom fields


# **addWorkBatchAudit**
> addWorkBatchAudit($work_batch_id, $work_batch_audit)

Add new audit for a workBatch

Adds an audit to an existing workBatch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to add an audit to
$work_batch_audit = "work_batch_audit_example"; // string | The audit to add

try {
    $apiInstance->addWorkBatchAudit($work_batch_id, $work_batch_audit);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to add an audit to |
 **work_batch_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWorkBatchFile**
> addWorkBatchFile($work_batch_id, $file_name)

Attach a file to a workBatch

Adds a file to an existing workBatch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addWorkBatchFile($work_batch_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWorkBatchFileByURL**
> addWorkBatchFileByURL($body, $work_batch_id)

Attach a file to a workBatch by URL.

Adds a file to an existing workBatch by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$work_batch_id = 56; // int | Id of the workBatch to add an file to

try {
    $apiInstance->addWorkBatchFileByURL($body, $work_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **work_batch_id** | **int**| Id of the workBatch to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWorkBatchTag**
> addWorkBatchTag($work_batch_id, $work_batch_tag)

Add new tags for a workBatch.

Adds a tag to an existing workBatch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to add a tag to
$work_batch_tag = "work_batch_tag_example"; // string | The tag to add

try {
    $apiInstance->addWorkBatchTag($work_batch_id, $work_batch_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->addWorkBatchTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to add a tag to |
 **work_batch_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkBatchFile**
> deleteWorkBatchFile($work_batch_id, $file_id)

Delete a file for a workBatch.

Deletes an existing workBatch file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteWorkBatchFile($work_batch_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->deleteWorkBatchFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkBatchTag**
> deleteWorkBatchTag($work_batch_id, $work_batch_tag)

Delete a tag for a workBatch.

Deletes an existing workBatch tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to remove tag from
$work_batch_tag = "work_batch_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteWorkBatchTag($work_batch_id, $work_batch_tag);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->deleteWorkBatchTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to remove tag from |
 **work_batch_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateWorkBatchById**
> \Infoplus\Infoplus\Model\WorkBatch getDuplicateWorkBatchById($work_batch_id)

Get a duplicated a workBatch by id

Returns a duplicated workBatch identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to be duplicated.

try {
    $result = $apiInstance->getDuplicateWorkBatchById($work_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getDuplicateWorkBatchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\WorkBatch**](../Model/WorkBatch.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkBatchByFilter**
> \Infoplus\Infoplus\Model\WorkBatch[] getWorkBatchByFilter($filter, $page, $limit, $sort)

Search workBatchs by filter

Returns the list of workBatchs that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
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
    $result = $apiInstance->getWorkBatchByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\WorkBatch[]**](../Model/WorkBatch.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkBatchById**
> \Infoplus\Infoplus\Model\WorkBatch getWorkBatchById($work_batch_id)

Get a workBatch by id

Returns the workBatch identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to be returned.

try {
    $result = $apiInstance->getWorkBatchById($work_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\WorkBatch**](../Model/WorkBatch.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkBatchFiles**
> getWorkBatchFiles($work_batch_id)

Get the files for a workBatch.

Get all existing workBatch files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to get files for

try {
    $apiInstance->getWorkBatchFiles($work_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkBatchTags**
> getWorkBatchTags($work_batch_id)

Get the tags for a workBatch.

Get all existing workBatch tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_batch_id = 56; // int | Id of the workBatch to get tags for

try {
    $apiInstance->getWorkBatchTags($work_batch_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->getWorkBatchTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_batch_id** | **int**| Id of the workBatch to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkBatch**
> updateWorkBatch($body)

Update a workBatch

Updates an existing workBatch using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\WorkBatch(); // \Infoplus\Infoplus\Model\WorkBatch | WorkBatch to be updated.

try {
    $apiInstance->updateWorkBatch($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->updateWorkBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\WorkBatch**](../Model/WorkBatch.md)| WorkBatch to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkBatchCustomFields**
> updateWorkBatchCustomFields($body)

Update a workBatch custom fields

Updates an existing workBatch custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WorkBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\WorkBatch(); // \Infoplus\Infoplus\Model\WorkBatch | WorkBatch to be updated.

try {
    $apiInstance->updateWorkBatchCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkBatchApi->updateWorkBatchCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\WorkBatch**](../Model/WorkBatch.md)| WorkBatch to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

