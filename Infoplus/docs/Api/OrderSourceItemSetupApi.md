# Infoplus\OrderSourceItemSetupApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderSourceItemSetup**](OrderSourceItemSetupApi.md#addOrderSourceItemSetup) | **POST** /beta/orderSourceItemSetup | Create an orderSourceItemSetup
[**addOrderSourceItemSetupAudit**](OrderSourceItemSetupApi.md#addOrderSourceItemSetupAudit) | **PUT** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/audit/{orderSourceItemSetupAudit} | Add new audit for an orderSourceItemSetup
[**addOrderSourceItemSetupFile**](OrderSourceItemSetupApi.md#addOrderSourceItemSetupFile) | **POST** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/file/{fileName} | Attach a file to an orderSourceItemSetup
[**addOrderSourceItemSetupFileByURL**](OrderSourceItemSetupApi.md#addOrderSourceItemSetupFileByURL) | **POST** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/file | Attach a file to an orderSourceItemSetup by URL.
[**addOrderSourceItemSetupTag**](OrderSourceItemSetupApi.md#addOrderSourceItemSetupTag) | **PUT** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/tag/{orderSourceItemSetupTag} | Add new tags for an orderSourceItemSetup.
[**deleteOrderSourceItemSetup**](OrderSourceItemSetupApi.md#deleteOrderSourceItemSetup) | **DELETE** /beta/orderSourceItemSetup/{orderSourceItemSetupId} | Delete an orderSourceItemSetup
[**deleteOrderSourceItemSetupFile**](OrderSourceItemSetupApi.md#deleteOrderSourceItemSetupFile) | **DELETE** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/file/{fileId} | Delete a file for an orderSourceItemSetup.
[**deleteOrderSourceItemSetupTag**](OrderSourceItemSetupApi.md#deleteOrderSourceItemSetupTag) | **DELETE** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/tag/{orderSourceItemSetupTag} | Delete a tag for an orderSourceItemSetup.
[**getDuplicateOrderSourceItemSetupById**](OrderSourceItemSetupApi.md#getDuplicateOrderSourceItemSetupById) | **GET** /beta/orderSourceItemSetup/duplicate/{orderSourceItemSetupId} | Get a duplicated an orderSourceItemSetup by id
[**getOrderSourceItemSetupByFilter**](OrderSourceItemSetupApi.md#getOrderSourceItemSetupByFilter) | **GET** /beta/orderSourceItemSetup/search | Search orderSourceItemSetups by filter
[**getOrderSourceItemSetupById**](OrderSourceItemSetupApi.md#getOrderSourceItemSetupById) | **GET** /beta/orderSourceItemSetup/{orderSourceItemSetupId} | Get an orderSourceItemSetup by id
[**getOrderSourceItemSetupFiles**](OrderSourceItemSetupApi.md#getOrderSourceItemSetupFiles) | **GET** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/file | Get the files for an orderSourceItemSetup.
[**getOrderSourceItemSetupTags**](OrderSourceItemSetupApi.md#getOrderSourceItemSetupTags) | **GET** /beta/orderSourceItemSetup/{orderSourceItemSetupId}/tag | Get the tags for an orderSourceItemSetup.
[**updateOrderSourceItemSetup**](OrderSourceItemSetupApi.md#updateOrderSourceItemSetup) | **PUT** /beta/orderSourceItemSetup | Update an orderSourceItemSetup
[**updateOrderSourceItemSetupCustomFields**](OrderSourceItemSetupApi.md#updateOrderSourceItemSetupCustomFields) | **PUT** /beta/orderSourceItemSetup/customFields | Update an orderSourceItemSetup custom fields


# **addOrderSourceItemSetup**
> \Infoplus\Infoplus\Model\OrderSourceItemSetup addOrderSourceItemSetup($body)

Create an orderSourceItemSetup

Inserts a new orderSourceItemSetup using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceItemSetup(); // \Infoplus\Infoplus\Model\OrderSourceItemSetup | OrderSourceItemSetup to be inserted.

try {
    $result = $apiInstance->addOrderSourceItemSetup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->addOrderSourceItemSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)| OrderSourceItemSetup to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceItemSetupAudit**
> addOrderSourceItemSetupAudit($order_source_item_setup_id, $order_source_item_setup_audit)

Add new audit for an orderSourceItemSetup

Adds an audit to an existing orderSourceItemSetup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to add an audit to
$order_source_item_setup_audit = "order_source_item_setup_audit_example"; // string | The audit to add

try {
    $apiInstance->addOrderSourceItemSetupAudit($order_source_item_setup_id, $order_source_item_setup_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->addOrderSourceItemSetupAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to add an audit to |
 **order_source_item_setup_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceItemSetupFile**
> addOrderSourceItemSetupFile($order_source_item_setup_id, $file_name)

Attach a file to an orderSourceItemSetup

Adds a file to an existing orderSourceItemSetup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addOrderSourceItemSetupFile($order_source_item_setup_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->addOrderSourceItemSetupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceItemSetupFileByURL**
> addOrderSourceItemSetupFileByURL($body, $order_source_item_setup_id)

Attach a file to an orderSourceItemSetup by URL.

Adds a file to an existing orderSourceItemSetup by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to add an file to

try {
    $apiInstance->addOrderSourceItemSetupFileByURL($body, $order_source_item_setup_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->addOrderSourceItemSetupFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderSourceItemSetupTag**
> addOrderSourceItemSetupTag($order_source_item_setup_id, $order_source_item_setup_tag)

Add new tags for an orderSourceItemSetup.

Adds a tag to an existing orderSourceItemSetup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to add a tag to
$order_source_item_setup_tag = "order_source_item_setup_tag_example"; // string | The tag to add

try {
    $apiInstance->addOrderSourceItemSetupTag($order_source_item_setup_id, $order_source_item_setup_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->addOrderSourceItemSetupTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to add a tag to |
 **order_source_item_setup_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceItemSetup**
> deleteOrderSourceItemSetup($order_source_item_setup_id)

Delete an orderSourceItemSetup

Deletes the orderSourceItemSetup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to be deleted.

try {
    $apiInstance->deleteOrderSourceItemSetup($order_source_item_setup_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->deleteOrderSourceItemSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceItemSetupFile**
> deleteOrderSourceItemSetupFile($order_source_item_setup_id, $file_id)

Delete a file for an orderSourceItemSetup.

Deletes an existing orderSourceItemSetup file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteOrderSourceItemSetupFile($order_source_item_setup_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->deleteOrderSourceItemSetupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderSourceItemSetupTag**
> deleteOrderSourceItemSetupTag($order_source_item_setup_id, $order_source_item_setup_tag)

Delete a tag for an orderSourceItemSetup.

Deletes an existing orderSourceItemSetup tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to remove tag from
$order_source_item_setup_tag = "order_source_item_setup_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteOrderSourceItemSetupTag($order_source_item_setup_id, $order_source_item_setup_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->deleteOrderSourceItemSetupTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to remove tag from |
 **order_source_item_setup_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateOrderSourceItemSetupById**
> \Infoplus\Infoplus\Model\OrderSourceItemSetup getDuplicateOrderSourceItemSetupById($order_source_item_setup_id)

Get a duplicated an orderSourceItemSetup by id

Returns a duplicated orderSourceItemSetup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to be duplicated.

try {
    $result = $apiInstance->getDuplicateOrderSourceItemSetupById($order_source_item_setup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->getDuplicateOrderSourceItemSetupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceItemSetupByFilter**
> \Infoplus\Infoplus\Model\OrderSourceItemSetup[] getOrderSourceItemSetupByFilter($filter, $page, $limit, $sort)

Search orderSourceItemSetups by filter

Returns the list of orderSourceItemSetups that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
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
    $result = $apiInstance->getOrderSourceItemSetupByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->getOrderSourceItemSetupByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\OrderSourceItemSetup[]**](../Model/OrderSourceItemSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceItemSetupById**
> \Infoplus\Infoplus\Model\OrderSourceItemSetup getOrderSourceItemSetupById($order_source_item_setup_id)

Get an orderSourceItemSetup by id

Returns the orderSourceItemSetup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to be returned.

try {
    $result = $apiInstance->getOrderSourceItemSetupById($order_source_item_setup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->getOrderSourceItemSetupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceItemSetupFiles**
> getOrderSourceItemSetupFiles($order_source_item_setup_id)

Get the files for an orderSourceItemSetup.

Get all existing orderSourceItemSetup files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to get files for

try {
    $apiInstance->getOrderSourceItemSetupFiles($order_source_item_setup_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->getOrderSourceItemSetupFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderSourceItemSetupTags**
> getOrderSourceItemSetupTags($order_source_item_setup_id)

Get the tags for an orderSourceItemSetup.

Get all existing orderSourceItemSetup tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_source_item_setup_id = 56; // int | Id of the orderSourceItemSetup to get tags for

try {
    $apiInstance->getOrderSourceItemSetupTags($order_source_item_setup_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->getOrderSourceItemSetupTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_item_setup_id** | **int**| Id of the orderSourceItemSetup to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSourceItemSetup**
> updateOrderSourceItemSetup($body)

Update an orderSourceItemSetup

Updates an existing orderSourceItemSetup using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceItemSetup(); // \Infoplus\Infoplus\Model\OrderSourceItemSetup | OrderSourceItemSetup to be updated.

try {
    $apiInstance->updateOrderSourceItemSetup($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->updateOrderSourceItemSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)| OrderSourceItemSetup to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderSourceItemSetupCustomFields**
> updateOrderSourceItemSetupCustomFields($body)

Update an orderSourceItemSetup custom fields

Updates an existing orderSourceItemSetup custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\OrderSourceItemSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\OrderSourceItemSetup(); // \Infoplus\Infoplus\Model\OrderSourceItemSetup | OrderSourceItemSetup to be updated.

try {
    $apiInstance->updateOrderSourceItemSetupCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceItemSetupApi->updateOrderSourceItemSetupCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\OrderSourceItemSetup**](../Model/OrderSourceItemSetup.md)| OrderSourceItemSetup to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

