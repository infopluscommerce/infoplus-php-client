# Infoplus\OrderSourceReservationApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderSourceReservation**](OrderSourceReservationApi.md#addOrderSourceReservation) | **POST** /beta/orderSourceReservation | Create an orderSourceReservation
[**addOrderSourceReservationAudit**](OrderSourceReservationApi.md#addOrderSourceReservationAudit) | **PUT** /beta/orderSourceReservation/{orderSourceReservationId}/audit/{orderSourceReservationAudit} | Add new audit for an orderSourceReservation
[**addOrderSourceReservationFile**](OrderSourceReservationApi.md#addOrderSourceReservationFile) | **POST** /beta/orderSourceReservation/{orderSourceReservationId}/file/{fileName} | Attach a file to an orderSourceReservation
[**addOrderSourceReservationFileByURL**](OrderSourceReservationApi.md#addOrderSourceReservationFileByURL) | **POST** /beta/orderSourceReservation/{orderSourceReservationId}/file | Attach a file to an orderSourceReservation by URL.
[**addOrderSourceReservationTag**](OrderSourceReservationApi.md#addOrderSourceReservationTag) | **PUT** /beta/orderSourceReservation/{orderSourceReservationId}/tag/{orderSourceReservationTag} | Add new tags for an orderSourceReservation.
[**deleteOrderSourceReservation**](OrderSourceReservationApi.md#deleteOrderSourceReservation) | **DELETE** /beta/orderSourceReservation/{orderSourceReservationId} | Delete an orderSourceReservation
[**deleteOrderSourceReservationFile**](OrderSourceReservationApi.md#deleteOrderSourceReservationFile) | **DELETE** /beta/orderSourceReservation/{orderSourceReservationId}/file/{fileId} | Delete a file for an orderSourceReservation.
[**deleteOrderSourceReservationTag**](OrderSourceReservationApi.md#deleteOrderSourceReservationTag) | **DELETE** /beta/orderSourceReservation/{orderSourceReservationId}/tag/{orderSourceReservationTag} | Delete a tag for an orderSourceReservation.
[**getDuplicateOrderSourceReservationById**](OrderSourceReservationApi.md#getDuplicateOrderSourceReservationById) | **GET** /beta/orderSourceReservation/duplicate/{orderSourceReservationId} | Get a duplicated an orderSourceReservation by id
[**getOrderSourceReservationByFilter**](OrderSourceReservationApi.md#getOrderSourceReservationByFilter) | **GET** /beta/orderSourceReservation/search | Search orderSourceReservations by filter
[**getOrderSourceReservationById**](OrderSourceReservationApi.md#getOrderSourceReservationById) | **GET** /beta/orderSourceReservation/{orderSourceReservationId} | Get an orderSourceReservation by id
[**getOrderSourceReservationFiles**](OrderSourceReservationApi.md#getOrderSourceReservationFiles) | **GET** /beta/orderSourceReservation/{orderSourceReservationId}/file | Get the files for an orderSourceReservation.
[**getOrderSourceReservationTags**](OrderSourceReservationApi.md#getOrderSourceReservationTags) | **GET** /beta/orderSourceReservation/{orderSourceReservationId}/tag | Get the tags for an orderSourceReservation.
[**updateOrderSourceReservation**](OrderSourceReservationApi.md#updateOrderSourceReservation) | **PUT** /beta/orderSourceReservation | Update an orderSourceReservation
[**updateOrderSourceReservationCustomFields**](OrderSourceReservationApi.md#updateOrderSourceReservationCustomFields) | **PUT** /beta/orderSourceReservation/customFields | Update an orderSourceReservation custom fields


# **addOrderSourceReservation**
> \Infoplus\Infoplus\Model\OrderSourceReservation addOrderSourceReservation($body)

Create an orderSourceReservation

Inserts a new orderSourceReservation using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceReservation(); // \Infoplus\Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be inserted.

try {
    $result = $apiInstance->addOrderSourceReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)| OrderSourceReservation to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceReservationAudit**
> addOrderSourceReservationAudit($order_source_reservation_id, $order_source_reservation_audit)

Add new audit for an orderSourceReservation

Adds an audit to an existing orderSourceReservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add an audit to
$order_source_reservation_audit = "order_source_reservation_audit_example"; // string | The audit to add

try {
    $apiInstance->addOrderSourceReservationAudit($order_source_reservation_id, $order_source_reservation_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add an audit to |
 **order_source_reservation_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceReservationFile**
> addOrderSourceReservationFile($order_source_reservation_id, $file_name)

Attach a file to an orderSourceReservation

Adds a file to an existing orderSourceReservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addOrderSourceReservationFile($order_source_reservation_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceReservationFileByURL**
> addOrderSourceReservationFileByURL($body, $order_source_reservation_id)

Attach a file to an orderSourceReservation by URL.

Adds a file to an existing orderSourceReservation by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add an file to

try {
    $apiInstance->addOrderSourceReservationFileByURL($body, $order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceReservationTag**
> addOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag)

Add new tags for an orderSourceReservation.

Adds a tag to an existing orderSourceReservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add a tag to
$order_source_reservation_tag = "order_source_reservation_tag_example"; // string | The tag to add

try {
    $apiInstance->addOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add a tag to |
 **order_source_reservation_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceReservation**
> deleteOrderSourceReservation($order_source_reservation_id)

Delete an orderSourceReservation

Deletes the orderSourceReservation identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be deleted.

try {
    $apiInstance->deleteOrderSourceReservation($order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->deleteOrderSourceReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceReservationFile**
> deleteOrderSourceReservationFile($order_source_reservation_id, $file_id)

Delete a file for an orderSourceReservation.

Deletes an existing orderSourceReservation file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteOrderSourceReservationFile($order_source_reservation_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->deleteOrderSourceReservationFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceReservationTag**
> deleteOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag)

Delete a tag for an orderSourceReservation.

Deletes an existing orderSourceReservation tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to remove tag from
$order_source_reservation_tag = "order_source_reservation_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->deleteOrderSourceReservationTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to remove tag from |
 **order_source_reservation_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateOrderSourceReservationById**
> \Infoplus\Infoplus\Model\OrderSourceReservation getDuplicateOrderSourceReservationById($order_source_reservation_id)

Get a duplicated an orderSourceReservation by id

Returns a duplicated orderSourceReservation identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be duplicated.

try {
    $result = $apiInstance->getDuplicateOrderSourceReservationById($order_source_reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getDuplicateOrderSourceReservationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceReservationByFilter**
> \Infoplus\Infoplus\Model\OrderSourceReservation[] getOrderSourceReservationByFilter($filter, $page, $limit, $sort)

Search orderSourceReservations by filter

Returns the list of orderSourceReservations that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
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
    $result = $apiInstance->getOrderSourceReservationByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\OrderSourceReservation[]**](../Model/OrderSourceReservation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceReservationById**
> \Infoplus\Infoplus\Model\OrderSourceReservation getOrderSourceReservationById($order_source_reservation_id)

Get an orderSourceReservation by id

Returns the orderSourceReservation identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be returned.

try {
    $result = $apiInstance->getOrderSourceReservationById($order_source_reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceReservationFiles**
> getOrderSourceReservationFiles($order_source_reservation_id)

Get the files for an orderSourceReservation.

Get all existing orderSourceReservation files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to get files for

try {
    $apiInstance->getOrderSourceReservationFiles($order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceReservationTags**
> getOrderSourceReservationTags($order_source_reservation_id)

Get the tags for an orderSourceReservation.

Get all existing orderSourceReservation tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to get tags for

try {
    $apiInstance->getOrderSourceReservationTags($order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSourceReservation**
> updateOrderSourceReservation($body)

Update an orderSourceReservation

Updates an existing orderSourceReservation using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceReservation(); // \Infoplus\Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be updated.

try {
    $apiInstance->updateOrderSourceReservation($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->updateOrderSourceReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)| OrderSourceReservation to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSourceReservationCustomFields**
> updateOrderSourceReservationCustomFields($body)

Update an orderSourceReservation custom fields

Updates an existing orderSourceReservation custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceReservationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceReservation(); // \Infoplus\Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be updated.

try {
    $apiInstance->updateOrderSourceReservationCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->updateOrderSourceReservationCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceReservation**](../Model/OrderSourceReservation.md)| OrderSourceReservation to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

