# Infoplus\FulfillmentProcessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFulfillmentProcessAudit**](FulfillmentProcessApi.md#addFulfillmentProcessAudit) | **PUT** /beta/fulfillmentProcess/{fulfillmentProcessId}/audit/{fulfillmentProcessAudit} | Add new audit for a fulfillmentProcess
[**addFulfillmentProcessFile**](FulfillmentProcessApi.md#addFulfillmentProcessFile) | **POST** /beta/fulfillmentProcess/{fulfillmentProcessId}/file/{fileName} | Attach a file to a fulfillmentProcess
[**addFulfillmentProcessFileByURL**](FulfillmentProcessApi.md#addFulfillmentProcessFileByURL) | **POST** /beta/fulfillmentProcess/{fulfillmentProcessId}/file | Attach a file to a fulfillmentProcess by URL.
[**addFulfillmentProcessTag**](FulfillmentProcessApi.md#addFulfillmentProcessTag) | **PUT** /beta/fulfillmentProcess/{fulfillmentProcessId}/tag/{fulfillmentProcessTag} | Add new tags for a fulfillmentProcess.
[**deleteFulfillmentProcessFile**](FulfillmentProcessApi.md#deleteFulfillmentProcessFile) | **DELETE** /beta/fulfillmentProcess/{fulfillmentProcessId}/file/{fileId} | Delete a file for a fulfillmentProcess.
[**deleteFulfillmentProcessTag**](FulfillmentProcessApi.md#deleteFulfillmentProcessTag) | **DELETE** /beta/fulfillmentProcess/{fulfillmentProcessId}/tag/{fulfillmentProcessTag} | Delete a tag for a fulfillmentProcess.
[**getDuplicateFulfillmentProcessById**](FulfillmentProcessApi.md#getDuplicateFulfillmentProcessById) | **GET** /beta/fulfillmentProcess/duplicate/{fulfillmentProcessId} | Get a duplicated a fulfillmentProcess by id
[**getFulfillmentProcessByFilter**](FulfillmentProcessApi.md#getFulfillmentProcessByFilter) | **GET** /beta/fulfillmentProcess/search | Search fulfillmentProcesses by filter
[**getFulfillmentProcessById**](FulfillmentProcessApi.md#getFulfillmentProcessById) | **GET** /beta/fulfillmentProcess/{fulfillmentProcessId} | Get a fulfillmentProcess by id
[**getFulfillmentProcessFiles**](FulfillmentProcessApi.md#getFulfillmentProcessFiles) | **GET** /beta/fulfillmentProcess/{fulfillmentProcessId}/file | Get the files for a fulfillmentProcess.
[**getFulfillmentProcessTags**](FulfillmentProcessApi.md#getFulfillmentProcessTags) | **GET** /beta/fulfillmentProcess/{fulfillmentProcessId}/tag | Get the tags for a fulfillmentProcess.
[**updateFulfillmentProcessCustomFields**](FulfillmentProcessApi.md#updateFulfillmentProcessCustomFields) | **PUT** /beta/fulfillmentProcess/customFields | Update a fulfillmentProcess custom fields


# **addFulfillmentProcessAudit**
> addFulfillmentProcessAudit($fulfillment_process_id, $fulfillment_process_audit)

Add new audit for a fulfillmentProcess

Adds an audit to an existing fulfillmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to add an audit to
$fulfillment_process_audit = "fulfillment_process_audit_example"; // string | The audit to add

try {
    $apiInstance->addFulfillmentProcessAudit($fulfillment_process_id, $fulfillment_process_audit);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->addFulfillmentProcessAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to add an audit to |
 **fulfillment_process_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessFile**
> addFulfillmentProcessFile($fulfillment_process_id, $file_name)

Attach a file to a fulfillmentProcess

Adds a file to an existing fulfillmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFulfillmentProcessFile($fulfillment_process_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->addFulfillmentProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessFileByURL**
> addFulfillmentProcessFileByURL($body, $fulfillment_process_id)

Attach a file to a fulfillmentProcess by URL.

Adds a file to an existing fulfillmentProcess by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to add an file to

try {
    $apiInstance->addFulfillmentProcessFileByURL($body, $fulfillment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->addFulfillmentProcessFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentProcessTag**
> addFulfillmentProcessTag($fulfillment_process_id, $fulfillment_process_tag)

Add new tags for a fulfillmentProcess.

Adds a tag to an existing fulfillmentProcess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to add a tag to
$fulfillment_process_tag = "fulfillment_process_tag_example"; // string | The tag to add

try {
    $apiInstance->addFulfillmentProcessTag($fulfillment_process_id, $fulfillment_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->addFulfillmentProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to add a tag to |
 **fulfillment_process_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentProcessFile**
> deleteFulfillmentProcessFile($fulfillment_process_id, $file_id)

Delete a file for a fulfillmentProcess.

Deletes an existing fulfillmentProcess file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFulfillmentProcessFile($fulfillment_process_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->deleteFulfillmentProcessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentProcessTag**
> deleteFulfillmentProcessTag($fulfillment_process_id, $fulfillment_process_tag)

Delete a tag for a fulfillmentProcess.

Deletes an existing fulfillmentProcess tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to remove tag from
$fulfillment_process_tag = "fulfillment_process_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFulfillmentProcessTag($fulfillment_process_id, $fulfillment_process_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->deleteFulfillmentProcessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to remove tag from |
 **fulfillment_process_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFulfillmentProcessById**
> \Infoplus\Infoplus\Model\FulfillmentProcess getDuplicateFulfillmentProcessById($fulfillment_process_id)

Get a duplicated a fulfillmentProcess by id

Returns a duplicated fulfillmentProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to be duplicated.

try {
    $result = $apiInstance->getDuplicateFulfillmentProcessById($fulfillment_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->getDuplicateFulfillmentProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcess**](../Model/FulfillmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessByFilter**
> \Infoplus\Infoplus\Model\FulfillmentProcess[] getFulfillmentProcessByFilter($filter, $page, $limit, $sort)

Search fulfillmentProcesses by filter

Returns the list of fulfillmentProcesses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
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
    $result = $apiInstance->getFulfillmentProcessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->getFulfillmentProcessByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FulfillmentProcess[]**](../Model/FulfillmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessById**
> \Infoplus\Infoplus\Model\FulfillmentProcess getFulfillmentProcessById($fulfillment_process_id)

Get a fulfillmentProcess by id

Returns the fulfillmentProcess identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to be returned.

try {
    $result = $apiInstance->getFulfillmentProcessById($fulfillment_process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->getFulfillmentProcessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcess**](../Model/FulfillmentProcess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessFiles**
> getFulfillmentProcessFiles($fulfillment_process_id)

Get the files for a fulfillmentProcess.

Get all existing fulfillmentProcess files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to get files for

try {
    $apiInstance->getFulfillmentProcessFiles($fulfillment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->getFulfillmentProcessFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessTags**
> getFulfillmentProcessTags($fulfillment_process_id)

Get the tags for a fulfillmentProcess.

Get all existing fulfillmentProcess tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_id = 56; // int | Id of the fulfillmentProcess to get tags for

try {
    $apiInstance->getFulfillmentProcessTags($fulfillment_process_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->getFulfillmentProcessTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_id** | **int**| Id of the fulfillmentProcess to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentProcessCustomFields**
> updateFulfillmentProcessCustomFields($body)

Update a fulfillmentProcess custom fields

Updates an existing fulfillmentProcess custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FulfillmentProcess(); // \Infoplus\Infoplus\Model\FulfillmentProcess | FulfillmentProcess to be updated.

try {
    $apiInstance->updateFulfillmentProcessCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessApi->updateFulfillmentProcessCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FulfillmentProcess**](../Model/FulfillmentProcess.md)| FulfillmentProcess to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

