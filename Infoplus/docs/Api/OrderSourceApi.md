# Infoplus\OrderSourceApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderSource**](OrderSourceApi.md#addOrderSource) | **POST** /beta/orderSource | Create an orderSource
[**addOrderSourceAudit**](OrderSourceApi.md#addOrderSourceAudit) | **PUT** /beta/orderSource/{orderSourceId}/audit/{orderSourceAudit} | Add new audit for an orderSource
[**addOrderSourceFile**](OrderSourceApi.md#addOrderSourceFile) | **POST** /beta/orderSource/{orderSourceId}/file/{fileName} | Attach a file to an orderSource
[**addOrderSourceFileByURL**](OrderSourceApi.md#addOrderSourceFileByURL) | **POST** /beta/orderSource/{orderSourceId}/file | Attach a file to an orderSource by URL.
[**addOrderSourceTag**](OrderSourceApi.md#addOrderSourceTag) | **PUT** /beta/orderSource/{orderSourceId}/tag/{orderSourceTag} | Add new tags for an orderSource.
[**deleteOrderSource**](OrderSourceApi.md#deleteOrderSource) | **DELETE** /beta/orderSource/{orderSourceId} | Delete an orderSource
[**deleteOrderSourceFile**](OrderSourceApi.md#deleteOrderSourceFile) | **DELETE** /beta/orderSource/{orderSourceId}/file/{fileId} | Delete a file for an orderSource.
[**deleteOrderSourceTag**](OrderSourceApi.md#deleteOrderSourceTag) | **DELETE** /beta/orderSource/{orderSourceId}/tag/{orderSourceTag} | Delete a tag for an orderSource.
[**getDuplicateOrderSourceById**](OrderSourceApi.md#getDuplicateOrderSourceById) | **GET** /beta/orderSource/duplicate/{orderSourceId} | Get a duplicated an orderSource by id
[**getOrderSourceByFilter**](OrderSourceApi.md#getOrderSourceByFilter) | **GET** /beta/orderSource/search | Search orderSources by filter
[**getOrderSourceById**](OrderSourceApi.md#getOrderSourceById) | **GET** /beta/orderSource/{orderSourceId} | Get an orderSource by id
[**getOrderSourceFiles**](OrderSourceApi.md#getOrderSourceFiles) | **GET** /beta/orderSource/{orderSourceId}/file | Get the files for an orderSource.
[**getOrderSourceTags**](OrderSourceApi.md#getOrderSourceTags) | **GET** /beta/orderSource/{orderSourceId}/tag | Get the tags for an orderSource.
[**updateOrderSource**](OrderSourceApi.md#updateOrderSource) | **PUT** /beta/orderSource | Update an orderSource
[**updateOrderSourceCustomFields**](OrderSourceApi.md#updateOrderSourceCustomFields) | **PUT** /beta/orderSource/customFields | Update an orderSource custom fields


# **addOrderSource**
> \Infoplus\Infoplus\Model\OrderSource addOrderSource($body)

Create an orderSource

Inserts a new orderSource using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSource(); // \Infoplus\Infoplus\Model\OrderSource | OrderSource to be inserted.

try {
    $result = $apiInstance->addOrderSource($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->addOrderSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)| OrderSource to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceAudit**
> addOrderSourceAudit($order_source_id, $order_source_audit)

Add new audit for an orderSource

Adds an audit to an existing orderSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to add an audit to
$order_source_audit = "order_source_audit_example"; // string | The audit to add

try {
    $apiInstance->addOrderSourceAudit($order_source_id, $order_source_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->addOrderSourceAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to add an audit to |
 **order_source_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceFile**
> addOrderSourceFile($order_source_id, $file_name)

Attach a file to an orderSource

Adds a file to an existing orderSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addOrderSourceFile($order_source_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->addOrderSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceFileByURL**
> addOrderSourceFileByURL($body, $order_source_id)

Attach a file to an orderSource by URL.

Adds a file to an existing orderSource by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$order_source_id = 56; // int | Id of the orderSource to add an file to

try {
    $apiInstance->addOrderSourceFileByURL($body, $order_source_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->addOrderSourceFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **order_source_id** | **int**| Id of the orderSource to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceTag**
> addOrderSourceTag($order_source_id, $order_source_tag)

Add new tags for an orderSource.

Adds a tag to an existing orderSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to add a tag to
$order_source_tag = "order_source_tag_example"; // string | The tag to add

try {
    $apiInstance->addOrderSourceTag($order_source_id, $order_source_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->addOrderSourceTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to add a tag to |
 **order_source_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSource**
> deleteOrderSource($order_source_id)

Delete an orderSource

Deletes the orderSource identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to be deleted.

try {
    $apiInstance->deleteOrderSource($order_source_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->deleteOrderSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceFile**
> deleteOrderSourceFile($order_source_id, $file_id)

Delete a file for an orderSource.

Deletes an existing orderSource file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteOrderSourceFile($order_source_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->deleteOrderSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceTag**
> deleteOrderSourceTag($order_source_id, $order_source_tag)

Delete a tag for an orderSource.

Deletes an existing orderSource tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to remove tag from
$order_source_tag = "order_source_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteOrderSourceTag($order_source_id, $order_source_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->deleteOrderSourceTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to remove tag from |
 **order_source_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateOrderSourceById**
> \Infoplus\Infoplus\Model\OrderSource getDuplicateOrderSourceById($order_source_id)

Get a duplicated an orderSource by id

Returns a duplicated orderSource identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to be duplicated.

try {
    $result = $apiInstance->getDuplicateOrderSourceById($order_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->getDuplicateOrderSourceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceByFilter**
> \Infoplus\Infoplus\Model\OrderSource[] getOrderSourceByFilter($filter, $page, $limit, $sort)

Search orderSources by filter

Returns the list of orderSources that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
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
    $result = $apiInstance->getOrderSourceByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->getOrderSourceByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\OrderSource[]**](../Model/OrderSource.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceById**
> \Infoplus\Infoplus\Model\OrderSource getOrderSourceById($order_source_id)

Get an orderSource by id

Returns the orderSource identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to be returned.

try {
    $result = $apiInstance->getOrderSourceById($order_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->getOrderSourceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceFiles**
> getOrderSourceFiles($order_source_id)

Get the files for an orderSource.

Get all existing orderSource files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to get files for

try {
    $apiInstance->getOrderSourceFiles($order_source_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->getOrderSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceTags**
> getOrderSourceTags($order_source_id)

Get the tags for an orderSource.

Get all existing orderSource tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_id = 56; // int | Id of the orderSource to get tags for

try {
    $apiInstance->getOrderSourceTags($order_source_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->getOrderSourceTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_id** | **int**| Id of the orderSource to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSource**
> updateOrderSource($body)

Update an orderSource

Updates an existing orderSource using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSource(); // \Infoplus\Infoplus\Model\OrderSource | OrderSource to be updated.

try {
    $apiInstance->updateOrderSource($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->updateOrderSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)| OrderSource to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSourceCustomFields**
> updateOrderSourceCustomFields($body)

Update an orderSource custom fields

Updates an existing orderSource custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSource(); // \Infoplus\Infoplus\Model\OrderSource | OrderSource to be updated.

try {
    $apiInstance->updateOrderSourceCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceApi->updateOrderSourceCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSource**](../Model/OrderSource.md)| OrderSource to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

