# Infoplus\ItemActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemActivityAudit**](ItemActivityApi.md#addItemActivityAudit) | **PUT** /beta/itemActivity/{itemActivityId}/audit/{itemActivityAudit} | Add new audit for an itemActivity
[**addItemActivityFile**](ItemActivityApi.md#addItemActivityFile) | **POST** /beta/itemActivity/{itemActivityId}/file/{fileName} | Attach a file to an itemActivity
[**addItemActivityFileByURL**](ItemActivityApi.md#addItemActivityFileByURL) | **POST** /beta/itemActivity/{itemActivityId}/file | Attach a file to an itemActivity by URL.
[**addItemActivityTag**](ItemActivityApi.md#addItemActivityTag) | **PUT** /beta/itemActivity/{itemActivityId}/tag/{itemActivityTag} | Add new tags for an itemActivity.
[**deleteItemActivityFile**](ItemActivityApi.md#deleteItemActivityFile) | **DELETE** /beta/itemActivity/{itemActivityId}/file/{fileId} | Delete a file for an itemActivity.
[**deleteItemActivityTag**](ItemActivityApi.md#deleteItemActivityTag) | **DELETE** /beta/itemActivity/{itemActivityId}/tag/{itemActivityTag} | Delete a tag for an itemActivity.
[**getDuplicateItemActivityById**](ItemActivityApi.md#getDuplicateItemActivityById) | **GET** /beta/itemActivity/duplicate/{itemActivityId} | Get a duplicated an itemActivity by id
[**getItemActivityByFilter**](ItemActivityApi.md#getItemActivityByFilter) | **GET** /beta/itemActivity/search | Search itemActivitys by filter
[**getItemActivityById**](ItemActivityApi.md#getItemActivityById) | **GET** /beta/itemActivity/{itemActivityId} | Get an itemActivity by id
[**getItemActivityFiles**](ItemActivityApi.md#getItemActivityFiles) | **GET** /beta/itemActivity/{itemActivityId}/file | Get the files for an itemActivity.
[**getItemActivityTags**](ItemActivityApi.md#getItemActivityTags) | **GET** /beta/itemActivity/{itemActivityId}/tag | Get the tags for an itemActivity.


# **addItemActivityAudit**
> addItemActivityAudit($item_activity_id, $item_activity_audit)

Add new audit for an itemActivity

Adds an audit to an existing itemActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to add an audit to
$item_activity_audit = "item_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemActivityAudit($item_activity_id, $item_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->addItemActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to add an audit to |
 **item_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemActivityFile**
> addItemActivityFile($item_activity_id, $file_name)

Attach a file to an itemActivity

Adds a file to an existing itemActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemActivityFile($item_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->addItemActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemActivityFileByURL**
> addItemActivityFileByURL($body, $item_activity_id)

Attach a file to an itemActivity by URL.

Adds a file to an existing itemActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_activity_id = 56; // int | Id of the itemActivity to add an file to

try {
    $apiInstance->addItemActivityFileByURL($body, $item_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->addItemActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_activity_id** | **int**| Id of the itemActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemActivityTag**
> addItemActivityTag($item_activity_id, $item_activity_tag)

Add new tags for an itemActivity.

Adds a tag to an existing itemActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to add a tag to
$item_activity_tag = "item_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemActivityTag($item_activity_id, $item_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->addItemActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to add a tag to |
 **item_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemActivityFile**
> deleteItemActivityFile($item_activity_id, $file_id)

Delete a file for an itemActivity.

Deletes an existing itemActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemActivityFile($item_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->deleteItemActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemActivityTag**
> deleteItemActivityTag($item_activity_id, $item_activity_tag)

Delete a tag for an itemActivity.

Deletes an existing itemActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to remove tag from
$item_activity_tag = "item_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemActivityTag($item_activity_id, $item_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->deleteItemActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to remove tag from |
 **item_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemActivityById**
> \Infoplus\Infoplus\Model\ItemActivity getDuplicateItemActivityById($item_activity_id)

Get a duplicated an itemActivity by id

Returns a duplicated itemActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemActivityById($item_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->getDuplicateItemActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemActivity**](../Model/ItemActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemActivityByFilter**
> \Infoplus\Infoplus\Model\ItemActivity[] getItemActivityByFilter($filter, $page, $limit, $sort)

Search itemActivitys by filter

Returns the list of itemActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
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
    $result = $apiInstance->getItemActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->getItemActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemActivity[]**](../Model/ItemActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemActivityById**
> \Infoplus\Infoplus\Model\ItemActivity getItemActivityById($item_activity_id)

Get an itemActivity by id

Returns the itemActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to be returned.

try {
    $result = $apiInstance->getItemActivityById($item_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->getItemActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemActivity**](../Model/ItemActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemActivityFiles**
> getItemActivityFiles($item_activity_id)

Get the files for an itemActivity.

Get all existing itemActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to get files for

try {
    $apiInstance->getItemActivityFiles($item_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->getItemActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemActivityTags**
> getItemActivityTags($item_activity_id)

Get the tags for an itemActivity.

Get all existing itemActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_activity_id = 56; // int | Id of the itemActivity to get tags for

try {
    $apiInstance->getItemActivityTags($item_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemActivityApi->getItemActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_activity_id** | **int**| Id of the itemActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

