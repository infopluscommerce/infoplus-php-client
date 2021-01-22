# Infoplus\OrderSourceStockStatusApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderSourceStockStatusAudit**](OrderSourceStockStatusApi.md#addOrderSourceStockStatusAudit) | **PUT** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/audit/{orderSourceStockStatusAudit} | Add new audit for an orderSourceStockStatus
[**addOrderSourceStockStatusFile**](OrderSourceStockStatusApi.md#addOrderSourceStockStatusFile) | **POST** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/file/{fileName} | Attach a file to an orderSourceStockStatus
[**addOrderSourceStockStatusFileByURL**](OrderSourceStockStatusApi.md#addOrderSourceStockStatusFileByURL) | **POST** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/file | Attach a file to an orderSourceStockStatus by URL.
[**addOrderSourceStockStatusTag**](OrderSourceStockStatusApi.md#addOrderSourceStockStatusTag) | **PUT** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/tag/{orderSourceStockStatusTag} | Add new tags for an orderSourceStockStatus.
[**deleteOrderSourceStockStatusFile**](OrderSourceStockStatusApi.md#deleteOrderSourceStockStatusFile) | **DELETE** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/file/{fileId} | Delete a file for an orderSourceStockStatus.
[**deleteOrderSourceStockStatusTag**](OrderSourceStockStatusApi.md#deleteOrderSourceStockStatusTag) | **DELETE** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/tag/{orderSourceStockStatusTag} | Delete a tag for an orderSourceStockStatus.
[**getDuplicateOrderSourceStockStatusById**](OrderSourceStockStatusApi.md#getDuplicateOrderSourceStockStatusById) | **GET** /beta/orderSourceStockStatus/duplicate/{orderSourceStockStatusId} | Get a duplicated an orderSourceStockStatus by id
[**getOrderSourceStockStatusByFilter**](OrderSourceStockStatusApi.md#getOrderSourceStockStatusByFilter) | **GET** /beta/orderSourceStockStatus/search | Search orderSourceStockStatuses by filter
[**getOrderSourceStockStatusById**](OrderSourceStockStatusApi.md#getOrderSourceStockStatusById) | **GET** /beta/orderSourceStockStatus/{orderSourceStockStatusId} | Get an orderSourceStockStatus by id
[**getOrderSourceStockStatusFiles**](OrderSourceStockStatusApi.md#getOrderSourceStockStatusFiles) | **GET** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/file | Get the files for an orderSourceStockStatus.
[**getOrderSourceStockStatusTags**](OrderSourceStockStatusApi.md#getOrderSourceStockStatusTags) | **GET** /beta/orderSourceStockStatus/{orderSourceStockStatusId}/tag | Get the tags for an orderSourceStockStatus.


# **addOrderSourceStockStatusAudit**
> addOrderSourceStockStatusAudit($order_source_stock_status_id, $order_source_stock_status_audit)

Add new audit for an orderSourceStockStatus

Adds an audit to an existing orderSourceStockStatus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to add an audit to
$order_source_stock_status_audit = "order_source_stock_status_audit_example"; // string | The audit to add

try {
    $apiInstance->addOrderSourceStockStatusAudit($order_source_stock_status_id, $order_source_stock_status_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->addOrderSourceStockStatusAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to add an audit to |
 **order_source_stock_status_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceStockStatusFile**
> addOrderSourceStockStatusFile($order_source_stock_status_id, $file_name)

Attach a file to an orderSourceStockStatus

Adds a file to an existing orderSourceStockStatus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addOrderSourceStockStatusFile($order_source_stock_status_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->addOrderSourceStockStatusFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceStockStatusFileByURL**
> addOrderSourceStockStatusFileByURL($body, $order_source_stock_status_id)

Attach a file to an orderSourceStockStatus by URL.

Adds a file to an existing orderSourceStockStatus by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to add an file to

try {
    $apiInstance->addOrderSourceStockStatusFileByURL($body, $order_source_stock_status_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->addOrderSourceStockStatusFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceStockStatusTag**
> addOrderSourceStockStatusTag($order_source_stock_status_id, $order_source_stock_status_tag)

Add new tags for an orderSourceStockStatus.

Adds a tag to an existing orderSourceStockStatus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to add a tag to
$order_source_stock_status_tag = "order_source_stock_status_tag_example"; // string | The tag to add

try {
    $apiInstance->addOrderSourceStockStatusTag($order_source_stock_status_id, $order_source_stock_status_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->addOrderSourceStockStatusTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to add a tag to |
 **order_source_stock_status_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceStockStatusFile**
> deleteOrderSourceStockStatusFile($order_source_stock_status_id, $file_id)

Delete a file for an orderSourceStockStatus.

Deletes an existing orderSourceStockStatus file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteOrderSourceStockStatusFile($order_source_stock_status_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->deleteOrderSourceStockStatusFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceStockStatusTag**
> deleteOrderSourceStockStatusTag($order_source_stock_status_id, $order_source_stock_status_tag)

Delete a tag for an orderSourceStockStatus.

Deletes an existing orderSourceStockStatus tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to remove tag from
$order_source_stock_status_tag = "order_source_stock_status_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteOrderSourceStockStatusTag($order_source_stock_status_id, $order_source_stock_status_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->deleteOrderSourceStockStatusTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to remove tag from |
 **order_source_stock_status_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateOrderSourceStockStatusById**
> \Infoplus\Infoplus\Model\OrderSourceStockStatus getDuplicateOrderSourceStockStatusById($order_source_stock_status_id)

Get a duplicated an orderSourceStockStatus by id

Returns a duplicated orderSourceStockStatus identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to be duplicated.

try {
    $result = $apiInstance->getDuplicateOrderSourceStockStatusById($order_source_stock_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->getDuplicateOrderSourceStockStatusById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceStockStatus**](../Model/OrderSourceStockStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceStockStatusByFilter**
> \Infoplus\Infoplus\Model\OrderSourceStockStatus[] getOrderSourceStockStatusByFilter($filter, $page, $limit, $sort)

Search orderSourceStockStatuses by filter

Returns the list of orderSourceStockStatuses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
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
    $result = $apiInstance->getOrderSourceStockStatusByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->getOrderSourceStockStatusByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\OrderSourceStockStatus[]**](../Model/OrderSourceStockStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceStockStatusById**
> \Infoplus\Infoplus\Model\OrderSourceStockStatus getOrderSourceStockStatusById($order_source_stock_status_id)

Get an orderSourceStockStatus by id

Returns the orderSourceStockStatus identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to be returned.

try {
    $result = $apiInstance->getOrderSourceStockStatusById($order_source_stock_status_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->getOrderSourceStockStatusById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceStockStatus**](../Model/OrderSourceStockStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceStockStatusFiles**
> getOrderSourceStockStatusFiles($order_source_stock_status_id)

Get the files for an orderSourceStockStatus.

Get all existing orderSourceStockStatus files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to get files for

try {
    $apiInstance->getOrderSourceStockStatusFiles($order_source_stock_status_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->getOrderSourceStockStatusFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceStockStatusTags**
> getOrderSourceStockStatusTags($order_source_stock_status_id)

Get the tags for an orderSourceStockStatus.

Get all existing orderSourceStockStatus tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceStockStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_stock_status_id = 56; // int | Id of the orderSourceStockStatus to get tags for

try {
    $apiInstance->getOrderSourceStockStatusTags($order_source_stock_status_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceStockStatusApi->getOrderSourceStockStatusTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_stock_status_id** | **int**| Id of the orderSourceStockStatus to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

