# Infoplus\ItemReceiptApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemReceiptAudit**](ItemReceiptApi.md#addItemReceiptAudit) | **PUT** /beta/itemReceipt/{itemReceiptId}/audit/{itemReceiptAudit} | Add new audit for an itemReceipt
[**addItemReceiptFile**](ItemReceiptApi.md#addItemReceiptFile) | **POST** /beta/itemReceipt/{itemReceiptId}/file/{fileName} | Attach a file to an itemReceipt
[**addItemReceiptFileByURL**](ItemReceiptApi.md#addItemReceiptFileByURL) | **POST** /beta/itemReceipt/{itemReceiptId}/file | Attach a file to an itemReceipt by URL.
[**addItemReceiptTag**](ItemReceiptApi.md#addItemReceiptTag) | **PUT** /beta/itemReceipt/{itemReceiptId}/tag/{itemReceiptTag} | Add new tags for an itemReceipt.
[**deleteItemReceiptFile**](ItemReceiptApi.md#deleteItemReceiptFile) | **DELETE** /beta/itemReceipt/{itemReceiptId}/file/{fileId} | Delete a file for an itemReceipt.
[**deleteItemReceiptTag**](ItemReceiptApi.md#deleteItemReceiptTag) | **DELETE** /beta/itemReceipt/{itemReceiptId}/tag/{itemReceiptTag} | Delete a tag for an itemReceipt.
[**getDuplicateItemReceiptById**](ItemReceiptApi.md#getDuplicateItemReceiptById) | **GET** /beta/itemReceipt/duplicate/{itemReceiptId} | Get a duplicated an itemReceipt by id
[**getItemReceiptByFilter**](ItemReceiptApi.md#getItemReceiptByFilter) | **GET** /beta/itemReceipt/search | Search itemReceipts by filter
[**getItemReceiptById**](ItemReceiptApi.md#getItemReceiptById) | **GET** /beta/itemReceipt/{itemReceiptId} | Get an itemReceipt by id
[**getItemReceiptFiles**](ItemReceiptApi.md#getItemReceiptFiles) | **GET** /beta/itemReceipt/{itemReceiptId}/file | Get the files for an itemReceipt.
[**getItemReceiptTags**](ItemReceiptApi.md#getItemReceiptTags) | **GET** /beta/itemReceipt/{itemReceiptId}/tag | Get the tags for an itemReceipt.
[**updateItemReceipt**](ItemReceiptApi.md#updateItemReceipt) | **PUT** /beta/itemReceipt | Update an itemReceipt
[**updateItemReceiptCustomFields**](ItemReceiptApi.md#updateItemReceiptCustomFields) | **PUT** /beta/itemReceipt/customFields | Update an itemReceipt custom fields


# **addItemReceiptAudit**
> addItemReceiptAudit($item_receipt_id, $item_receipt_audit)

Add new audit for an itemReceipt

Adds an audit to an existing itemReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to add an audit to
$item_receipt_audit = "item_receipt_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemReceiptAudit($item_receipt_id, $item_receipt_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to add an audit to |
 **item_receipt_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptFile**
> addItemReceiptFile($item_receipt_id, $file_name)

Attach a file to an itemReceipt

Adds a file to an existing itemReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemReceiptFile($item_receipt_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptFileByURL**
> addItemReceiptFileByURL($body, $item_receipt_id)

Attach a file to an itemReceipt by URL.

Adds a file to an existing itemReceipt by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_receipt_id = 56; // int | Id of the itemReceipt to add an file to

try {
    $apiInstance->addItemReceiptFileByURL($body, $item_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_receipt_id** | **int**| Id of the itemReceipt to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptTag**
> addItemReceiptTag($item_receipt_id, $item_receipt_tag)

Add new tags for an itemReceipt.

Adds a tag to an existing itemReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to add a tag to
$item_receipt_tag = "item_receipt_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemReceiptTag($item_receipt_id, $item_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->addItemReceiptTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to add a tag to |
 **item_receipt_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemReceiptFile**
> deleteItemReceiptFile($item_receipt_id, $file_id)

Delete a file for an itemReceipt.

Deletes an existing itemReceipt file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemReceiptFile($item_receipt_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->deleteItemReceiptFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemReceiptTag**
> deleteItemReceiptTag($item_receipt_id, $item_receipt_tag)

Delete a tag for an itemReceipt.

Deletes an existing itemReceipt tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to remove tag from
$item_receipt_tag = "item_receipt_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemReceiptTag($item_receipt_id, $item_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->deleteItemReceiptTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to remove tag from |
 **item_receipt_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemReceiptById**
> \Infoplus\Infoplus\Model\ItemReceipt getDuplicateItemReceiptById($item_receipt_id)

Get a duplicated an itemReceipt by id

Returns a duplicated itemReceipt identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemReceiptById($item_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getDuplicateItemReceiptById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemReceipt**](../Model/ItemReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptByFilter**
> \Infoplus\Infoplus\Model\ItemReceipt[] getItemReceiptByFilter($filter, $page, $limit, $sort)

Search itemReceipts by filter

Returns the list of itemReceipts that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
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
    $result = $apiInstance->getItemReceiptByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemReceipt[]**](../Model/ItemReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptById**
> \Infoplus\Infoplus\Model\ItemReceipt getItemReceiptById($item_receipt_id)

Get an itemReceipt by id

Returns the itemReceipt identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to be returned.

try {
    $result = $apiInstance->getItemReceiptById($item_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemReceipt**](../Model/ItemReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptFiles**
> getItemReceiptFiles($item_receipt_id)

Get the files for an itemReceipt.

Get all existing itemReceipt files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to get files for

try {
    $apiInstance->getItemReceiptFiles($item_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptTags**
> getItemReceiptTags($item_receipt_id)

Get the tags for an itemReceipt.

Get all existing itemReceipt tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_id = 56; // int | Id of the itemReceipt to get tags for

try {
    $apiInstance->getItemReceiptTags($item_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->getItemReceiptTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_id** | **int**| Id of the itemReceipt to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemReceipt**
> updateItemReceipt($body)

Update an itemReceipt

Updates an existing itemReceipt using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemReceipt(); // \Infoplus\Infoplus\Model\ItemReceipt | ItemReceipt to be updated.

try {
    $apiInstance->updateItemReceipt($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->updateItemReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemReceipt**](../Model/ItemReceipt.md)| ItemReceipt to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemReceiptCustomFields**
> updateItemReceiptCustomFields($body)

Update an itemReceipt custom fields

Updates an existing itemReceipt custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemReceipt(); // \Infoplus\Infoplus\Model\ItemReceipt | ItemReceipt to be updated.

try {
    $apiInstance->updateItemReceiptCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptApi->updateItemReceiptCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemReceipt**](../Model/ItemReceipt.md)| ItemReceipt to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

