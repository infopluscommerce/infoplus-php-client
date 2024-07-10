# Infoplus\ReplenishmentProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReplenishmentProcessAudit**](ReplenishmentProcessApi.md#addReplenishmentProcessAudit) | **PUT** /beta/replenishmentProcess/{replenishmentProcessId}/audit/{replenishmentProcessAudit} | Add new audit for a replenishmentProcess
[**addReplenishmentProcessFile**](ReplenishmentProcessApi.md#addReplenishmentProcessFile) | **POST** /beta/replenishmentProcess/{replenishmentProcessId}/file/{fileName} | Attach a file to a replenishmentProcess
[**addReplenishmentProcessFileByURL**](ReplenishmentProcessApi.md#addReplenishmentProcessFileByURL) | **POST** /beta/replenishmentProcess/{replenishmentProcessId}/file | Attach a file to a replenishmentProcess by URL.
[**addReplenishmentProcessTag**](ReplenishmentProcessApi.md#addReplenishmentProcessTag) | **PUT** /beta/replenishmentProcess/{replenishmentProcessId}/tag/{replenishmentProcessTag} | Add new tags for a replenishmentProcess.
[**deleteReplenishmentProcessFile**](ReplenishmentProcessApi.md#deleteReplenishmentProcessFile) | **DELETE** /beta/replenishmentProcess/{replenishmentProcessId}/file/{fileId} | Delete a file for a replenishmentProcess.
[**deleteReplenishmentProcessTag**](ReplenishmentProcessApi.md#deleteReplenishmentProcessTag) | **DELETE** /beta/replenishmentProcess/{replenishmentProcessId}/tag/{replenishmentProcessTag} | Delete a tag for a replenishmentProcess.
[**getDuplicateReplenishmentProcessById**](ReplenishmentProcessApi.md#getDuplicateReplenishmentProcessById) | **GET** /beta/replenishmentProcess/duplicate/{replenishmentProcessId} | Get a duplicated a replenishmentProcess by id
[**getReplenishmentProcessByFilter**](ReplenishmentProcessApi.md#getReplenishmentProcessByFilter) | **GET** /beta/replenishmentProcess/search | Search replenishmentProcesses by filter
[**getReplenishmentProcessById**](ReplenishmentProcessApi.md#getReplenishmentProcessById) | **GET** /beta/replenishmentProcess/{replenishmentProcessId} | Get a replenishmentProcess by id
[**getReplenishmentProcessFiles**](ReplenishmentProcessApi.md#getReplenishmentProcessFiles) | **GET** /beta/replenishmentProcess/{replenishmentProcessId}/file | Get the files for a replenishmentProcess.
[**getReplenishmentProcessTags**](ReplenishmentProcessApi.md#getReplenishmentProcessTags) | **GET** /beta/replenishmentProcess/{replenishmentProcessId}/tag | Get the tags for a replenishmentProcess.
[**updateReplenishmentProcessCustomFields**](ReplenishmentProcessApi.md#updateReplenishmentProcessCustomFields) | **PUT** /beta/replenishmentProcess/customFields | Update a replenishmentProcess custom fields


# **addReplenishmentProcessAudit**
> addReplenishmentProcessAudit($replenishment_process_id, $replenishment_process_audit)

Add new audit for a replenishmentProcess

Adds an audit to an existing replenishmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to add an audit to
$replenishment_process_audit = "replenishment_process_audit_example"; // string | The audit to add

try {
    $apiInstance->addReplenishmentProcessAudit($replenishment_process_id, $replenishment_process_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->addReplenishmentProcessAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to add an audit to |
 **replenishment_process_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentProcessFile**
> addReplenishmentProcessFile($replenishment_process_id, $file_name)

Attach a file to a replenishmentProcess

Adds a file to an existing replenishmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReplenishmentProcessFile($replenishment_process_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->addReplenishmentProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentProcessFileByURL**
> addReplenishmentProcessFileByURL($body, $replenishment_process_id)

Attach a file to a replenishmentProcess by URL.

Adds a file to an existing replenishmentProcess by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to add an file to

try {
    $apiInstance->addReplenishmentProcessFileByURL($body, $replenishment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->addReplenishmentProcessFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentProcessTag**
> addReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag)

Add new tags for a replenishmentProcess.

Adds a tag to an existing replenishmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to add a tag to
$replenishment_process_tag = "replenishment_process_tag_example"; // string | The tag to add

try {
    $apiInstance->addReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->addReplenishmentProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to add a tag to |
 **replenishment_process_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReplenishmentProcessFile**
> deleteReplenishmentProcessFile($replenishment_process_id, $file_id)

Delete a file for a replenishmentProcess.

Deletes an existing replenishmentProcess file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReplenishmentProcessFile($replenishment_process_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->deleteReplenishmentProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReplenishmentProcessTag**
> deleteReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag)

Delete a tag for a replenishmentProcess.

Deletes an existing replenishmentProcess tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to remove tag from
$replenishment_process_tag = "replenishment_process_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->deleteReplenishmentProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to remove tag from |
 **replenishment_process_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReplenishmentProcessById**
> \Infoplus\Infoplus\Model\ReplenishmentProcess getDuplicateReplenishmentProcessById($replenishment_process_id)

Get a duplicated a replenishmentProcess by id

Returns a duplicated replenishmentProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to be duplicated.

try {
    $result = $apiInstance->getDuplicateReplenishmentProcessById($replenishment_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getDuplicateReplenishmentProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReplenishmentProcess**](../Model/ReplenishmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentProcessByFilter**
> \Infoplus\Infoplus\Model\ReplenishmentProcess[] getReplenishmentProcessByFilter($filter, $page, $limit, $sort)

Search replenishmentProcesses by filter

Returns the list of replenishmentProcesses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
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
    $result = $apiInstance->getReplenishmentProcessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReplenishmentProcess[]**](../Model/ReplenishmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentProcessById**
> \Infoplus\Infoplus\Model\ReplenishmentProcess getReplenishmentProcessById($replenishment_process_id)

Get a replenishmentProcess by id

Returns the replenishmentProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to be returned.

try {
    $result = $apiInstance->getReplenishmentProcessById($replenishment_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReplenishmentProcess**](../Model/ReplenishmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentProcessFiles**
> getReplenishmentProcessFiles($replenishment_process_id)

Get the files for a replenishmentProcess.

Get all existing replenishmentProcess files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to get files for

try {
    $apiInstance->getReplenishmentProcessFiles($replenishment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentProcessTags**
> getReplenishmentProcessTags($replenishment_process_id)

Get the tags for a replenishmentProcess.

Get all existing replenishmentProcess tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_process_id = 56; // int | Id of the replenishmentProcess to get tags for

try {
    $apiInstance->getReplenishmentProcessTags($replenishment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->getReplenishmentProcessTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_process_id** | **int**| Id of the replenishmentProcess to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReplenishmentProcessCustomFields**
> updateReplenishmentProcessCustomFields($body)

Update a replenishmentProcess custom fields

Updates an existing replenishmentProcess custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReplenishmentProcess(); // \Infoplus\Infoplus\Model\ReplenishmentProcess | ReplenishmentProcess to be updated.

try {
    $apiInstance->updateReplenishmentProcessCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentProcessApi->updateReplenishmentProcessCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReplenishmentProcess**](../Model/ReplenishmentProcess.md)| ReplenishmentProcess to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

