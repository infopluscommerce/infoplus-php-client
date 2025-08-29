# Infoplus\ReturnOrderApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReturnOrderAudit**](ReturnOrderApi.md#addReturnOrderAudit) | **PUT** /beta/returnOrder/{returnOrderId}/audit/{returnOrderAudit} | Add new audit for a returnOrder
[**addReturnOrderFile**](ReturnOrderApi.md#addReturnOrderFile) | **POST** /beta/returnOrder/{returnOrderId}/file/{fileName} | Attach a file to a returnOrder
[**addReturnOrderFileByURL**](ReturnOrderApi.md#addReturnOrderFileByURL) | **POST** /beta/returnOrder/{returnOrderId}/file | Attach a file to a returnOrder by URL.
[**addReturnOrderTag**](ReturnOrderApi.md#addReturnOrderTag) | **PUT** /beta/returnOrder/{returnOrderId}/tag/{returnOrderTag} | Add new tags for a returnOrder.
[**deleteReturnOrderFile**](ReturnOrderApi.md#deleteReturnOrderFile) | **DELETE** /beta/returnOrder/{returnOrderId}/file/{fileId} | Delete a file for a returnOrder.
[**deleteReturnOrderTag**](ReturnOrderApi.md#deleteReturnOrderTag) | **DELETE** /beta/returnOrder/{returnOrderId}/tag/{returnOrderTag} | Delete a tag for a returnOrder.
[**getDuplicateReturnOrderById**](ReturnOrderApi.md#getDuplicateReturnOrderById) | **GET** /beta/returnOrder/duplicate/{returnOrderId} | Get a duplicated a returnOrder by id
[**getReturnOrderByFilter**](ReturnOrderApi.md#getReturnOrderByFilter) | **GET** /beta/returnOrder/search | Search returnOrders by filter
[**getReturnOrderById**](ReturnOrderApi.md#getReturnOrderById) | **GET** /beta/returnOrder/{returnOrderId} | Get a returnOrder by id
[**getReturnOrderFiles**](ReturnOrderApi.md#getReturnOrderFiles) | **GET** /beta/returnOrder/{returnOrderId}/file | Get the files for a returnOrder.
[**getReturnOrderTags**](ReturnOrderApi.md#getReturnOrderTags) | **GET** /beta/returnOrder/{returnOrderId}/tag | Get the tags for a returnOrder.
[**updateReturnOrder**](ReturnOrderApi.md#updateReturnOrder) | **PUT** /beta/returnOrder | Update a returnOrder
[**updateReturnOrderCustomFields**](ReturnOrderApi.md#updateReturnOrderCustomFields) | **PUT** /beta/returnOrder/customFields | Update a returnOrder custom fields


# **addReturnOrderAudit**
> addReturnOrderAudit($return_order_id, $return_order_audit)

Add new audit for a returnOrder

Adds an audit to an existing returnOrder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to add an audit to
$return_order_audit = "return_order_audit_example"; // string | The audit to add

try {
    $apiInstance->addReturnOrderAudit($return_order_id, $return_order_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->addReturnOrderAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to add an audit to |
 **return_order_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderFile**
> addReturnOrderFile($return_order_id, $file_name)

Attach a file to a returnOrder

Adds a file to an existing returnOrder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReturnOrderFile($return_order_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->addReturnOrderFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderFileByURL**
> addReturnOrderFileByURL($body, $return_order_id)

Attach a file to a returnOrder by URL.

Adds a file to an existing returnOrder by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$return_order_id = 56; // int | Id of the returnOrder to add an file to

try {
    $apiInstance->addReturnOrderFileByURL($body, $return_order_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->addReturnOrderFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **return_order_id** | **int**| Id of the returnOrder to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderTag**
> addReturnOrderTag($return_order_id, $return_order_tag)

Add new tags for a returnOrder.

Adds a tag to an existing returnOrder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to add a tag to
$return_order_tag = "return_order_tag_example"; // string | The tag to add

try {
    $apiInstance->addReturnOrderTag($return_order_id, $return_order_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->addReturnOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to add a tag to |
 **return_order_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderFile**
> deleteReturnOrderFile($return_order_id, $file_id)

Delete a file for a returnOrder.

Deletes an existing returnOrder file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReturnOrderFile($return_order_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->deleteReturnOrderFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderTag**
> deleteReturnOrderTag($return_order_id, $return_order_tag)

Delete a tag for a returnOrder.

Deletes an existing returnOrder tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to remove tag from
$return_order_tag = "return_order_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReturnOrderTag($return_order_id, $return_order_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->deleteReturnOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to remove tag from |
 **return_order_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReturnOrderById**
> \Infoplus\Infoplus\Model\ReturnOrder getDuplicateReturnOrderById($return_order_id)

Get a duplicated a returnOrder by id

Returns a duplicated returnOrder identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to be duplicated.

try {
    $result = $apiInstance->getDuplicateReturnOrderById($return_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->getDuplicateReturnOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrder**](../Model/ReturnOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderByFilter**
> \Infoplus\Infoplus\Model\ReturnOrder[] getReturnOrderByFilter($filter, $page, $limit, $sort)

Search returnOrders by filter

Returns the list of returnOrders that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
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
    $result = $apiInstance->getReturnOrderByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->getReturnOrderByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReturnOrder[]**](../Model/ReturnOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderById**
> \Infoplus\Infoplus\Model\ReturnOrder getReturnOrderById($return_order_id)

Get a returnOrder by id

Returns the returnOrder identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to be returned.

try {
    $result = $apiInstance->getReturnOrderById($return_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->getReturnOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrder**](../Model/ReturnOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderFiles**
> getReturnOrderFiles($return_order_id)

Get the files for a returnOrder.

Get all existing returnOrder files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to get files for

try {
    $apiInstance->getReturnOrderFiles($return_order_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->getReturnOrderFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderTags**
> getReturnOrderTags($return_order_id)

Get the tags for a returnOrder.

Get all existing returnOrder tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_id = 56; // int | Id of the returnOrder to get tags for

try {
    $apiInstance->getReturnOrderTags($return_order_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->getReturnOrderTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_id** | **int**| Id of the returnOrder to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnOrder**
> updateReturnOrder($body)

Update a returnOrder

Updates an existing returnOrder using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReturnOrder(); // \Infoplus\Infoplus\Model\ReturnOrder | ReturnOrder to be updated.

try {
    $apiInstance->updateReturnOrder($body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->updateReturnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReturnOrder**](../Model/ReturnOrder.md)| ReturnOrder to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnOrderCustomFields**
> updateReturnOrderCustomFields($body)

Update a returnOrder custom fields

Updates an existing returnOrder custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReturnOrder(); // \Infoplus\Infoplus\Model\ReturnOrder | ReturnOrder to be updated.

try {
    $apiInstance->updateReturnOrderCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderApi->updateReturnOrderCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReturnOrder**](../Model/ReturnOrder.md)| ReturnOrder to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

