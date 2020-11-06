# Infoplus\LowStockApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLowStockAudit**](LowStockApi.md#addLowStockAudit) | **PUT** /beta/lowStock/{lowStockId}/audit/{lowStockAudit} | Add new audit for a lowStock
[**addLowStockFile**](LowStockApi.md#addLowStockFile) | **POST** /beta/lowStock/{lowStockId}/file/{fileName} | Attach a file to a lowStock
[**addLowStockFileByURL**](LowStockApi.md#addLowStockFileByURL) | **POST** /beta/lowStock/{lowStockId}/file | Attach a file to a lowStock by URL.
[**addLowStockTag**](LowStockApi.md#addLowStockTag) | **PUT** /beta/lowStock/{lowStockId}/tag/{lowStockTag} | Add new tags for a lowStock.
[**deleteLowStockFile**](LowStockApi.md#deleteLowStockFile) | **DELETE** /beta/lowStock/{lowStockId}/file/{fileId} | Delete a file for a lowStock.
[**deleteLowStockTag**](LowStockApi.md#deleteLowStockTag) | **DELETE** /beta/lowStock/{lowStockId}/tag/{lowStockTag} | Delete a tag for a lowStock.
[**getDuplicateLowStockById**](LowStockApi.md#getDuplicateLowStockById) | **GET** /beta/lowStock/duplicate/{lowStockId} | Get a duplicated a lowStock by id
[**getLowStockByFilter**](LowStockApi.md#getLowStockByFilter) | **GET** /beta/lowStock/search | Search lowStocks by filter
[**getLowStockById**](LowStockApi.md#getLowStockById) | **GET** /beta/lowStock/{lowStockId} | Get a lowStock by id
[**getLowStockFiles**](LowStockApi.md#getLowStockFiles) | **GET** /beta/lowStock/{lowStockId}/file | Get the files for a lowStock.
[**getLowStockTags**](LowStockApi.md#getLowStockTags) | **GET** /beta/lowStock/{lowStockId}/tag | Get the tags for a lowStock.


# **addLowStockAudit**
> addLowStockAudit($low_stock_id, $low_stock_audit)

Add new audit for a lowStock

Adds an audit to an existing lowStock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to add an audit to
$low_stock_audit = "low_stock_audit_example"; // string | The audit to add

try {
    $apiInstance->addLowStockAudit($low_stock_id, $low_stock_audit);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->addLowStockAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to add an audit to |
 **low_stock_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLowStockFile**
> addLowStockFile($low_stock_id, $file_name)

Attach a file to a lowStock

Adds a file to an existing lowStock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLowStockFile($low_stock_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->addLowStockFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLowStockFileByURL**
> addLowStockFileByURL($body, $low_stock_id)

Attach a file to a lowStock by URL.

Adds a file to an existing lowStock by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$low_stock_id = 56; // int | Id of the lowStock to add an file to

try {
    $apiInstance->addLowStockFileByURL($body, $low_stock_id);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->addLowStockFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **low_stock_id** | **int**| Id of the lowStock to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLowStockTag**
> addLowStockTag($low_stock_id, $low_stock_tag)

Add new tags for a lowStock.

Adds a tag to an existing lowStock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to add a tag to
$low_stock_tag = "low_stock_tag_example"; // string | The tag to add

try {
    $apiInstance->addLowStockTag($low_stock_id, $low_stock_tag);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->addLowStockTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to add a tag to |
 **low_stock_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLowStockFile**
> deleteLowStockFile($low_stock_id, $file_id)

Delete a file for a lowStock.

Deletes an existing lowStock file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLowStockFile($low_stock_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->deleteLowStockFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLowStockTag**
> deleteLowStockTag($low_stock_id, $low_stock_tag)

Delete a tag for a lowStock.

Deletes an existing lowStock tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to remove tag from
$low_stock_tag = "low_stock_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLowStockTag($low_stock_id, $low_stock_tag);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->deleteLowStockTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to remove tag from |
 **low_stock_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLowStockById**
> \Infoplus\Infoplus\Model\LowStock getDuplicateLowStockById($low_stock_id)

Get a duplicated a lowStock by id

Returns a duplicated lowStock identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to be duplicated.

try {
    $result = $apiInstance->getDuplicateLowStockById($low_stock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->getDuplicateLowStockById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LowStock**](../Model/LowStock.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLowStockByFilter**
> \Infoplus\Infoplus\Model\LowStock[] getLowStockByFilter($filter, $page, $limit, $sort)

Search lowStocks by filter

Returns the list of lowStocks that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
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
    $result = $apiInstance->getLowStockByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->getLowStockByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LowStock[]**](../Model/LowStock.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLowStockById**
> \Infoplus\Infoplus\Model\LowStock getLowStockById($low_stock_id)

Get a lowStock by id

Returns the lowStock identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to be returned.

try {
    $result = $apiInstance->getLowStockById($low_stock_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->getLowStockById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LowStock**](../Model/LowStock.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLowStockFiles**
> getLowStockFiles($low_stock_id)

Get the files for a lowStock.

Get all existing lowStock files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to get files for

try {
    $apiInstance->getLowStockFiles($low_stock_id);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->getLowStockFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLowStockTags**
> getLowStockTags($low_stock_id)

Get the tags for a lowStock.

Get all existing lowStock tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LowStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$low_stock_id = 56; // int | Id of the lowStock to get tags for

try {
    $apiInstance->getLowStockTags($low_stock_id);
} catch (Exception $e) {
    echo 'Exception when calling LowStockApi->getLowStockTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **low_stock_id** | **int**| Id of the lowStock to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

