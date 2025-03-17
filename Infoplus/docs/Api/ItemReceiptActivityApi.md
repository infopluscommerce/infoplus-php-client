# Infoplus\ItemReceiptActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemReceiptActivity**](ItemReceiptActivityApi.md#addItemReceiptActivity) | **POST** /beta/itemReceiptActivity | Create an itemReceiptActivity
[**addItemReceiptActivityAudit**](ItemReceiptActivityApi.md#addItemReceiptActivityAudit) | **PUT** /beta/itemReceiptActivity/{itemReceiptActivityId}/audit/{itemReceiptActivityAudit} | Add new audit for an itemReceiptActivity
[**addItemReceiptActivityFile**](ItemReceiptActivityApi.md#addItemReceiptActivityFile) | **POST** /beta/itemReceiptActivity/{itemReceiptActivityId}/file/{fileName} | Attach a file to an itemReceiptActivity
[**addItemReceiptActivityFileByURL**](ItemReceiptActivityApi.md#addItemReceiptActivityFileByURL) | **POST** /beta/itemReceiptActivity/{itemReceiptActivityId}/file | Attach a file to an itemReceiptActivity by URL.
[**addItemReceiptActivityTag**](ItemReceiptActivityApi.md#addItemReceiptActivityTag) | **PUT** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag/{itemReceiptActivityTag} | Add new tags for an itemReceiptActivity.
[**deleteItemReceiptActivity**](ItemReceiptActivityApi.md#deleteItemReceiptActivity) | **DELETE** /beta/itemReceiptActivity/{itemReceiptActivityId} | Delete an itemReceiptActivity
[**deleteItemReceiptActivityFile**](ItemReceiptActivityApi.md#deleteItemReceiptActivityFile) | **DELETE** /beta/itemReceiptActivity/{itemReceiptActivityId}/file/{fileId} | Delete a file for an itemReceiptActivity.
[**deleteItemReceiptActivityTag**](ItemReceiptActivityApi.md#deleteItemReceiptActivityTag) | **DELETE** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag/{itemReceiptActivityTag} | Delete a tag for an itemReceiptActivity.
[**getDuplicateItemReceiptActivityById**](ItemReceiptActivityApi.md#getDuplicateItemReceiptActivityById) | **GET** /beta/itemReceiptActivity/duplicate/{itemReceiptActivityId} | Get a duplicated an itemReceiptActivity by id
[**getItemReceiptActivityByFilter**](ItemReceiptActivityApi.md#getItemReceiptActivityByFilter) | **GET** /beta/itemReceiptActivity/search | Search itemReceiptActivitys by filter
[**getItemReceiptActivityById**](ItemReceiptActivityApi.md#getItemReceiptActivityById) | **GET** /beta/itemReceiptActivity/{itemReceiptActivityId} | Get an itemReceiptActivity by id
[**getItemReceiptActivityFiles**](ItemReceiptActivityApi.md#getItemReceiptActivityFiles) | **GET** /beta/itemReceiptActivity/{itemReceiptActivityId}/file | Get the files for an itemReceiptActivity.
[**getItemReceiptActivityTags**](ItemReceiptActivityApi.md#getItemReceiptActivityTags) | **GET** /beta/itemReceiptActivity/{itemReceiptActivityId}/tag | Get the tags for an itemReceiptActivity.
[**updateItemReceiptActivity**](ItemReceiptActivityApi.md#updateItemReceiptActivity) | **PUT** /beta/itemReceiptActivity | Update an itemReceiptActivity


# **addItemReceiptActivity**
> \Infoplus\Infoplus\Model\ItemReceiptActivity addItemReceiptActivity($body)

Create an itemReceiptActivity

Inserts a new itemReceiptActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemReceiptActivity(); // \Infoplus\Infoplus\Model\ItemReceiptActivity | ItemReceiptActivity to be inserted.

try {
    $result = $apiInstance->addItemReceiptActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemReceiptActivity**](../Model/ItemReceiptActivity.md)| ItemReceiptActivity to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemReceiptActivity**](../Model/ItemReceiptActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptActivityAudit**
> addItemReceiptActivityAudit($item_receipt_activity_id, $item_receipt_activity_audit)

Add new audit for an itemReceiptActivity

Adds an audit to an existing itemReceiptActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add an audit to
$item_receipt_activity_audit = "item_receipt_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemReceiptActivityAudit($item_receipt_activity_id, $item_receipt_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add an audit to |
 **item_receipt_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptActivityFile**
> addItemReceiptActivityFile($item_receipt_activity_id, $file_name)

Attach a file to an itemReceiptActivity

Adds a file to an existing itemReceiptActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemReceiptActivityFile($item_receipt_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptActivityFileByURL**
> addItemReceiptActivityFileByURL($body, $item_receipt_activity_id)

Attach a file to an itemReceiptActivity by URL.

Adds a file to an existing itemReceiptActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add an file to

try {
    $apiInstance->addItemReceiptActivityFileByURL($body, $item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemReceiptActivityTag**
> addItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag)

Add new tags for an itemReceiptActivity.

Adds a tag to an existing itemReceiptActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to add a tag to
$item_receipt_activity_tag = "item_receipt_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->addItemReceiptActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to add a tag to |
 **item_receipt_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemReceiptActivity**
> deleteItemReceiptActivity($item_receipt_activity_id)

Delete an itemReceiptActivity

Deletes the itemReceiptActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be deleted.

try {
    $apiInstance->deleteItemReceiptActivity($item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->deleteItemReceiptActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemReceiptActivityFile**
> deleteItemReceiptActivityFile($item_receipt_activity_id, $file_id)

Delete a file for an itemReceiptActivity.

Deletes an existing itemReceiptActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemReceiptActivityFile($item_receipt_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->deleteItemReceiptActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemReceiptActivityTag**
> deleteItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag)

Delete a tag for an itemReceiptActivity.

Deletes an existing itemReceiptActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to remove tag from
$item_receipt_activity_tag = "item_receipt_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemReceiptActivityTag($item_receipt_activity_id, $item_receipt_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->deleteItemReceiptActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to remove tag from |
 **item_receipt_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemReceiptActivityById**
> \Infoplus\Infoplus\Model\ItemReceiptActivity getDuplicateItemReceiptActivityById($item_receipt_activity_id)

Get a duplicated an itemReceiptActivity by id

Returns a duplicated itemReceiptActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemReceiptActivityById($item_receipt_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getDuplicateItemReceiptActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemReceiptActivity**](../Model/ItemReceiptActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptActivityByFilter**
> \Infoplus\Infoplus\Model\ItemReceiptActivity[] getItemReceiptActivityByFilter($filter, $page, $limit, $sort)

Search itemReceiptActivitys by filter

Returns the list of itemReceiptActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
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
    $result = $apiInstance->getItemReceiptActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemReceiptActivity[]**](../Model/ItemReceiptActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptActivityById**
> \Infoplus\Infoplus\Model\ItemReceiptActivity getItemReceiptActivityById($item_receipt_activity_id)

Get an itemReceiptActivity by id

Returns the itemReceiptActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to be returned.

try {
    $result = $apiInstance->getItemReceiptActivityById($item_receipt_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemReceiptActivity**](../Model/ItemReceiptActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptActivityFiles**
> getItemReceiptActivityFiles($item_receipt_activity_id)

Get the files for an itemReceiptActivity.

Get all existing itemReceiptActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to get files for

try {
    $apiInstance->getItemReceiptActivityFiles($item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReceiptActivityTags**
> getItemReceiptActivityTags($item_receipt_activity_id)

Get the tags for an itemReceiptActivity.

Get all existing itemReceiptActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_receipt_activity_id = 56; // int | Id of the itemReceiptActivity to get tags for

try {
    $apiInstance->getItemReceiptActivityTags($item_receipt_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->getItemReceiptActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_receipt_activity_id** | **int**| Id of the itemReceiptActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemReceiptActivity**
> updateItemReceiptActivity($body)

Update an itemReceiptActivity

Updates an existing itemReceiptActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemReceiptActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemReceiptActivity(); // \Infoplus\Infoplus\Model\ItemReceiptActivity | ItemReceiptActivity to be updated.

try {
    $apiInstance->updateItemReceiptActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemReceiptActivityApi->updateItemReceiptActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemReceiptActivity**](../Model/ItemReceiptActivity.md)| ItemReceiptActivity to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

