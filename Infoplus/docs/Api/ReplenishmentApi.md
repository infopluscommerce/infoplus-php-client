# Infoplus\ReplenishmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReplenishmentAudit**](ReplenishmentApi.md#addReplenishmentAudit) | **PUT** /beta/replenishment/{replenishmentId}/audit/{replenishmentAudit} | Add new audit for a replenishment
[**addReplenishmentFile**](ReplenishmentApi.md#addReplenishmentFile) | **POST** /beta/replenishment/{replenishmentId}/file/{fileName} | Attach a file to a replenishment
[**addReplenishmentFileByURL**](ReplenishmentApi.md#addReplenishmentFileByURL) | **POST** /beta/replenishment/{replenishmentId}/file | Attach a file to a replenishment by URL.
[**addReplenishmentTag**](ReplenishmentApi.md#addReplenishmentTag) | **PUT** /beta/replenishment/{replenishmentId}/tag/{replenishmentTag} | Add new tags for a replenishment.
[**deleteReplenishmentFile**](ReplenishmentApi.md#deleteReplenishmentFile) | **DELETE** /beta/replenishment/{replenishmentId}/file/{fileId} | Delete a file for a replenishment.
[**deleteReplenishmentTag**](ReplenishmentApi.md#deleteReplenishmentTag) | **DELETE** /beta/replenishment/{replenishmentId}/tag/{replenishmentTag} | Delete a tag for a replenishment.
[**getDuplicateReplenishmentById**](ReplenishmentApi.md#getDuplicateReplenishmentById) | **GET** /beta/replenishment/duplicate/{replenishmentId} | Get a duplicated a replenishment by id
[**getReplenishmentByFilter**](ReplenishmentApi.md#getReplenishmentByFilter) | **GET** /beta/replenishment/search | Search replenishments by filter
[**getReplenishmentById**](ReplenishmentApi.md#getReplenishmentById) | **GET** /beta/replenishment/{replenishmentId} | Get a replenishment by id
[**getReplenishmentFiles**](ReplenishmentApi.md#getReplenishmentFiles) | **GET** /beta/replenishment/{replenishmentId}/file | Get the files for a replenishment.
[**getReplenishmentTags**](ReplenishmentApi.md#getReplenishmentTags) | **GET** /beta/replenishment/{replenishmentId}/tag | Get the tags for a replenishment.
[**updateReplenishmentCustomFields**](ReplenishmentApi.md#updateReplenishmentCustomFields) | **PUT** /beta/replenishment/customFields | Update a replenishment custom fields


# **addReplenishmentAudit**
> addReplenishmentAudit($replenishment_id, $replenishment_audit)

Add new audit for a replenishment

Adds an audit to an existing replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to add an audit to
$replenishment_audit = "replenishment_audit_example"; // string | The audit to add

try {
    $apiInstance->addReplenishmentAudit($replenishment_id, $replenishment_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to add an audit to |
 **replenishment_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentFile**
> addReplenishmentFile($replenishment_id, $file_name)

Attach a file to a replenishment

Adds a file to an existing replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReplenishmentFile($replenishment_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentFileByURL**
> addReplenishmentFileByURL($body, $replenishment_id)

Attach a file to a replenishment by URL.

Adds a file to an existing replenishment by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$replenishment_id = 56; // int | Id of the replenishment to add an file to

try {
    $apiInstance->addReplenishmentFileByURL($body, $replenishment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **replenishment_id** | **int**| Id of the replenishment to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReplenishmentTag**
> addReplenishmentTag($replenishment_id, $replenishment_tag)

Add new tags for a replenishment.

Adds a tag to an existing replenishment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to add a tag to
$replenishment_tag = "replenishment_tag_example"; // string | The tag to add

try {
    $apiInstance->addReplenishmentTag($replenishment_id, $replenishment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to add a tag to |
 **replenishment_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReplenishmentFile**
> deleteReplenishmentFile($replenishment_id, $file_id)

Delete a file for a replenishment.

Deletes an existing replenishment file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReplenishmentFile($replenishment_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->deleteReplenishmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReplenishmentTag**
> deleteReplenishmentTag($replenishment_id, $replenishment_tag)

Delete a tag for a replenishment.

Deletes an existing replenishment tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to remove tag from
$replenishment_tag = "replenishment_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReplenishmentTag($replenishment_id, $replenishment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->deleteReplenishmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to remove tag from |
 **replenishment_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReplenishmentById**
> \Infoplus\Infoplus\Model\Replenishment getDuplicateReplenishmentById($replenishment_id)

Get a duplicated a replenishment by id

Returns a duplicated replenishment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to be duplicated.

try {
    $result = $apiInstance->getDuplicateReplenishmentById($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getDuplicateReplenishmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Replenishment**](../Model/Replenishment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentByFilter**
> \Infoplus\Infoplus\Model\Replenishment[] getReplenishmentByFilter($filter, $page, $limit, $sort)

Search replenishments by filter

Returns the list of replenishments that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
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
    $result = $apiInstance->getReplenishmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Replenishment[]**](../Model/Replenishment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentById**
> \Infoplus\Infoplus\Model\Replenishment getReplenishmentById($replenishment_id)

Get a replenishment by id

Returns the replenishment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to be returned.

try {
    $result = $apiInstance->getReplenishmentById($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Replenishment**](../Model/Replenishment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentFiles**
> getReplenishmentFiles($replenishment_id)

Get the files for a replenishment.

Get all existing replenishment files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to get files for

try {
    $apiInstance->getReplenishmentFiles($replenishment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReplenishmentTags**
> getReplenishmentTags($replenishment_id)

Get the tags for a replenishment.

Get all existing replenishment tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishment_id = 56; // int | Id of the replenishment to get tags for

try {
    $apiInstance->getReplenishmentTags($replenishment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReplenishmentCustomFields**
> updateReplenishmentCustomFields($body)

Update a replenishment custom fields

Updates an existing replenishment custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReplenishmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Replenishment(); // \Infoplus\Infoplus\Model\Replenishment | Replenishment to be updated.

try {
    $apiInstance->updateReplenishmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->updateReplenishmentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Replenishment**](../Model/Replenishment.md)| Replenishment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

