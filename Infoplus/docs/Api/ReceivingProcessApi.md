# Infoplus\ReceivingProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReceivingProcessAudit**](ReceivingProcessApi.md#addReceivingProcessAudit) | **PUT** /beta/receivingProcess/{receivingProcessId}/audit/{receivingProcessAudit} | Add new audit for a receivingProcess
[**addReceivingProcessFile**](ReceivingProcessApi.md#addReceivingProcessFile) | **POST** /beta/receivingProcess/{receivingProcessId}/file/{fileName} | Attach a file to a receivingProcess
[**addReceivingProcessFileByURL**](ReceivingProcessApi.md#addReceivingProcessFileByURL) | **POST** /beta/receivingProcess/{receivingProcessId}/file | Attach a file to a receivingProcess by URL.
[**addReceivingProcessTag**](ReceivingProcessApi.md#addReceivingProcessTag) | **PUT** /beta/receivingProcess/{receivingProcessId}/tag/{receivingProcessTag} | Add new tags for a receivingProcess.
[**deleteReceivingProcessFile**](ReceivingProcessApi.md#deleteReceivingProcessFile) | **DELETE** /beta/receivingProcess/{receivingProcessId}/file/{fileId} | Delete a file for a receivingProcess.
[**deleteReceivingProcessTag**](ReceivingProcessApi.md#deleteReceivingProcessTag) | **DELETE** /beta/receivingProcess/{receivingProcessId}/tag/{receivingProcessTag} | Delete a tag for a receivingProcess.
[**getDuplicateReceivingProcessById**](ReceivingProcessApi.md#getDuplicateReceivingProcessById) | **GET** /beta/receivingProcess/duplicate/{receivingProcessId} | Get a duplicated a receivingProcess by id
[**getReceivingProcessByFilter**](ReceivingProcessApi.md#getReceivingProcessByFilter) | **GET** /beta/receivingProcess/search | Search receivingProcesses by filter
[**getReceivingProcessById**](ReceivingProcessApi.md#getReceivingProcessById) | **GET** /beta/receivingProcess/{receivingProcessId} | Get a receivingProcess by id
[**getReceivingProcessFiles**](ReceivingProcessApi.md#getReceivingProcessFiles) | **GET** /beta/receivingProcess/{receivingProcessId}/file | Get the files for a receivingProcess.
[**getReceivingProcessTags**](ReceivingProcessApi.md#getReceivingProcessTags) | **GET** /beta/receivingProcess/{receivingProcessId}/tag | Get the tags for a receivingProcess.
[**updateReceivingProcessCustomFields**](ReceivingProcessApi.md#updateReceivingProcessCustomFields) | **PUT** /beta/receivingProcess/customFields | Update a receivingProcess custom fields


# **addReceivingProcessAudit**
> addReceivingProcessAudit($receiving_process_id, $receiving_process_audit)

Add new audit for a receivingProcess

Adds an audit to an existing receivingProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to add an audit to
$receiving_process_audit = "receiving_process_audit_example"; // string | The audit to add

try {
    $apiInstance->addReceivingProcessAudit($receiving_process_id, $receiving_process_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->addReceivingProcessAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to add an audit to |
 **receiving_process_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingProcessFile**
> addReceivingProcessFile($receiving_process_id, $file_name)

Attach a file to a receivingProcess

Adds a file to an existing receivingProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReceivingProcessFile($receiving_process_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->addReceivingProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingProcessFileByURL**
> addReceivingProcessFileByURL($body, $receiving_process_id)

Attach a file to a receivingProcess by URL.

Adds a file to an existing receivingProcess by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$receiving_process_id = 56; // int | Id of the receivingProcess to add an file to

try {
    $apiInstance->addReceivingProcessFileByURL($body, $receiving_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->addReceivingProcessFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **receiving_process_id** | **int**| Id of the receivingProcess to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingProcessTag**
> addReceivingProcessTag($receiving_process_id, $receiving_process_tag)

Add new tags for a receivingProcess.

Adds a tag to an existing receivingProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to add a tag to
$receiving_process_tag = "receiving_process_tag_example"; // string | The tag to add

try {
    $apiInstance->addReceivingProcessTag($receiving_process_id, $receiving_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->addReceivingProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to add a tag to |
 **receiving_process_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReceivingProcessFile**
> deleteReceivingProcessFile($receiving_process_id, $file_id)

Delete a file for a receivingProcess.

Deletes an existing receivingProcess file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReceivingProcessFile($receiving_process_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->deleteReceivingProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReceivingProcessTag**
> deleteReceivingProcessTag($receiving_process_id, $receiving_process_tag)

Delete a tag for a receivingProcess.

Deletes an existing receivingProcess tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to remove tag from
$receiving_process_tag = "receiving_process_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReceivingProcessTag($receiving_process_id, $receiving_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->deleteReceivingProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to remove tag from |
 **receiving_process_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReceivingProcessById**
> \Infoplus\Infoplus\Model\ReceivingProcess getDuplicateReceivingProcessById($receiving_process_id)

Get a duplicated a receivingProcess by id

Returns a duplicated receivingProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to be duplicated.

try {
    $result = $apiInstance->getDuplicateReceivingProcessById($receiving_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getDuplicateReceivingProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReceivingProcess**](../Model/ReceivingProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingProcessByFilter**
> \Infoplus\Infoplus\Model\ReceivingProcess[] getReceivingProcessByFilter($filter, $page, $limit, $sort)

Search receivingProcesses by filter

Returns the list of receivingProcesses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
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
    $result = $apiInstance->getReceivingProcessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReceivingProcess[]**](../Model/ReceivingProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingProcessById**
> \Infoplus\Infoplus\Model\ReceivingProcess getReceivingProcessById($receiving_process_id)

Get a receivingProcess by id

Returns the receivingProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to be returned.

try {
    $result = $apiInstance->getReceivingProcessById($receiving_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReceivingProcess**](../Model/ReceivingProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingProcessFiles**
> getReceivingProcessFiles($receiving_process_id)

Get the files for a receivingProcess.

Get all existing receivingProcess files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to get files for

try {
    $apiInstance->getReceivingProcessFiles($receiving_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingProcessTags**
> getReceivingProcessTags($receiving_process_id)

Get the tags for a receivingProcess.

Get all existing receivingProcess tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_process_id = 56; // int | Id of the receivingProcess to get tags for

try {
    $apiInstance->getReceivingProcessTags($receiving_process_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->getReceivingProcessTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_process_id** | **int**| Id of the receivingProcess to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReceivingProcessCustomFields**
> updateReceivingProcessCustomFields($body)

Update a receivingProcess custom fields

Updates an existing receivingProcess custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReceivingProcess(); // \Infoplus\Infoplus\Model\ReceivingProcess | ReceivingProcess to be updated.

try {
    $apiInstance->updateReceivingProcessCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingProcessApi->updateReceivingProcessCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReceivingProcess**](../Model/ReceivingProcess.md)| ReceivingProcess to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

