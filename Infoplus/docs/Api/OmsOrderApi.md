# Infoplus\OmsOrderApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOmsOrder**](OmsOrderApi.md#addOmsOrder) | **POST** /beta/omsOrder | Create an omsOrder
[**addOmsOrderAudit**](OmsOrderApi.md#addOmsOrderAudit) | **PUT** /beta/omsOrder/{omsOrderId}/audit/{omsOrderAudit} | Add new audit for an omsOrder
[**addOmsOrderTag**](OmsOrderApi.md#addOmsOrderTag) | **PUT** /beta/omsOrder/{omsOrderId}/tag/{omsOrderTag} | Add new tags for an omsOrder.
[**deleteOmsOrderTag**](OmsOrderApi.md#deleteOmsOrderTag) | **DELETE** /beta/omsOrder/{omsOrderId}/tag/{omsOrderTag} | Delete a tag for an omsOrder.
[**getDuplicateOmsOrderById**](OmsOrderApi.md#getDuplicateOmsOrderById) | **GET** /beta/omsOrder/duplicate/{omsOrderId} | Get a duplicated an omsOrder by id
[**getOmsOrderByFilter**](OmsOrderApi.md#getOmsOrderByFilter) | **GET** /beta/omsOrder/search | Search omsOrders by filter
[**getOmsOrderById**](OmsOrderApi.md#getOmsOrderById) | **GET** /beta/omsOrder/{omsOrderId} | Get an omsOrder by id
[**getOmsOrderTags**](OmsOrderApi.md#getOmsOrderTags) | **GET** /beta/omsOrder/{omsOrderId}/tag | Get the tags for an omsOrder.
[**updateOmsOrder**](OmsOrderApi.md#updateOmsOrder) | **PUT** /beta/omsOrder | Update an omsOrder
[**updateOmsOrderCustomFields**](OmsOrderApi.md#updateOmsOrderCustomFields) | **PUT** /beta/omsOrder/customFields | Update an omsOrder custom fields


# **addOmsOrder**
> \Infoplus\Infoplus\Model\OmsOrder addOmsOrder($body)

Create an omsOrder

Inserts a new omsOrder using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OmsOrder(); // \Infoplus\Infoplus\Model\OmsOrder | OmsOrder to be inserted.

try {
    $result = $apiInstance->addOmsOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->addOmsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)| OmsOrder to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOmsOrderAudit**
> addOmsOrderAudit($oms_order_id, $oms_order_audit)

Add new audit for an omsOrder

Adds an audit to an existing omsOrder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to add an audit to
$oms_order_audit = "oms_order_audit_example"; // string | The audit to add

try {
    $apiInstance->addOmsOrderAudit($oms_order_id, $oms_order_audit);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->addOmsOrderAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to add an audit to |
 **oms_order_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOmsOrderTag**
> addOmsOrderTag($oms_order_id, $oms_order_tag)

Add new tags for an omsOrder.

Adds a tag to an existing omsOrder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to add a tag to
$oms_order_tag = "oms_order_tag_example"; // string | The tag to add

try {
    $apiInstance->addOmsOrderTag($oms_order_id, $oms_order_tag);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->addOmsOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to add a tag to |
 **oms_order_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOmsOrderTag**
> deleteOmsOrderTag($oms_order_id, $oms_order_tag)

Delete a tag for an omsOrder.

Deletes an existing omsOrder tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to remove tag from
$oms_order_tag = "oms_order_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteOmsOrderTag($oms_order_id, $oms_order_tag);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->deleteOmsOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to remove tag from |
 **oms_order_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateOmsOrderById**
> \Infoplus\Infoplus\Model\OmsOrder getDuplicateOmsOrderById($oms_order_id)

Get a duplicated an omsOrder by id

Returns a duplicated omsOrder identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to be duplicated.

try {
    $result = $apiInstance->getDuplicateOmsOrderById($oms_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->getDuplicateOmsOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOmsOrderByFilter**
> \Infoplus\Infoplus\Model\OmsOrder[] getOmsOrderByFilter($filter, $page, $limit, $sort)

Search omsOrders by filter

Returns the list of omsOrders that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
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
    $result = $apiInstance->getOmsOrderByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->getOmsOrderByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\OmsOrder[]**](../Model/OmsOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOmsOrderById**
> \Infoplus\Infoplus\Model\OmsOrder getOmsOrderById($oms_order_id)

Get an omsOrder by id

Returns the omsOrder identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to be returned.

try {
    $result = $apiInstance->getOmsOrderById($oms_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->getOmsOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOmsOrderTags**
> getOmsOrderTags($oms_order_id)

Get the tags for an omsOrder.

Get all existing omsOrder tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oms_order_id = 56; // int | Id of the omsOrder to get tags for

try {
    $apiInstance->getOmsOrderTags($oms_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->getOmsOrderTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oms_order_id** | **int**| Id of the omsOrder to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOmsOrder**
> updateOmsOrder($body)

Update an omsOrder

Updates an existing omsOrder using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OmsOrder(); // \Infoplus\Infoplus\Model\OmsOrder | OmsOrder to be updated.

try {
    $apiInstance->updateOmsOrder($body);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->updateOmsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)| OmsOrder to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOmsOrderCustomFields**
> updateOmsOrderCustomFields($body)

Update an omsOrder custom fields

Updates an existing omsOrder custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OmsOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OmsOrder(); // \Infoplus\Infoplus\Model\OmsOrder | OmsOrder to be updated.

try {
    $apiInstance->updateOmsOrderCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OmsOrderApi->updateOmsOrderCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OmsOrder**](../Model/OmsOrder.md)| OmsOrder to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

