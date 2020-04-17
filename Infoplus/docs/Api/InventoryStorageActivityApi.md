# Infoplus\InventoryStorageActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventoryStorageActivity**](InventoryStorageActivityApi.md#addInventoryStorageActivity) | **POST** /beta/inventoryStorageActivity | Create an inventoryStorageActivity
[**addInventoryStorageActivityAudit**](InventoryStorageActivityApi.md#addInventoryStorageActivityAudit) | **PUT** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/audit/{inventoryStorageActivityAudit} | Add new audit for an inventoryStorageActivity
[**addInventoryStorageActivityFile**](InventoryStorageActivityApi.md#addInventoryStorageActivityFile) | **POST** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/file/{fileName} | Attach a file to an inventoryStorageActivity
[**addInventoryStorageActivityFileByURL**](InventoryStorageActivityApi.md#addInventoryStorageActivityFileByURL) | **POST** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/file | Attach a file to an inventoryStorageActivity by URL.
[**addInventoryStorageActivityTag**](InventoryStorageActivityApi.md#addInventoryStorageActivityTag) | **PUT** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/tag/{inventoryStorageActivityTag} | Add new tags for an inventoryStorageActivity.
[**deleteInventoryStorageActivity**](InventoryStorageActivityApi.md#deleteInventoryStorageActivity) | **DELETE** /beta/inventoryStorageActivity/{inventoryStorageActivityId} | Delete an inventoryStorageActivity
[**deleteInventoryStorageActivityFile**](InventoryStorageActivityApi.md#deleteInventoryStorageActivityFile) | **DELETE** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/file/{fileId} | Delete a file for an inventoryStorageActivity.
[**deleteInventoryStorageActivityTag**](InventoryStorageActivityApi.md#deleteInventoryStorageActivityTag) | **DELETE** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/tag/{inventoryStorageActivityTag} | Delete a tag for an inventoryStorageActivity.
[**getDuplicateInventoryStorageActivityById**](InventoryStorageActivityApi.md#getDuplicateInventoryStorageActivityById) | **GET** /beta/inventoryStorageActivity/duplicate/{inventoryStorageActivityId} | Get a duplicated an inventoryStorageActivity by id
[**getInventoryStorageActivityByFilter**](InventoryStorageActivityApi.md#getInventoryStorageActivityByFilter) | **GET** /beta/inventoryStorageActivity/search | Search inventoryStorageActivitys by filter
[**getInventoryStorageActivityById**](InventoryStorageActivityApi.md#getInventoryStorageActivityById) | **GET** /beta/inventoryStorageActivity/{inventoryStorageActivityId} | Get an inventoryStorageActivity by id
[**getInventoryStorageActivityFiles**](InventoryStorageActivityApi.md#getInventoryStorageActivityFiles) | **GET** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/file | Get the files for an inventoryStorageActivity.
[**getInventoryStorageActivityTags**](InventoryStorageActivityApi.md#getInventoryStorageActivityTags) | **GET** /beta/inventoryStorageActivity/{inventoryStorageActivityId}/tag | Get the tags for an inventoryStorageActivity.
[**updateInventoryStorageActivity**](InventoryStorageActivityApi.md#updateInventoryStorageActivity) | **PUT** /beta/inventoryStorageActivity | Update an inventoryStorageActivity


# **addInventoryStorageActivity**
> \Infoplus\Infoplus\Model\InventoryStorageActivity addInventoryStorageActivity($body)

Create an inventoryStorageActivity

Inserts a new inventoryStorageActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\InventoryStorageActivity(); // \Infoplus\Infoplus\Model\InventoryStorageActivity | InventoryStorageActivity to be inserted.

try {
    $result = $apiInstance->addInventoryStorageActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->addInventoryStorageActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\InventoryStorageActivity**](../Model/InventoryStorageActivity.md)| InventoryStorageActivity to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\InventoryStorageActivity**](../Model/InventoryStorageActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInventoryStorageActivityAudit**
> addInventoryStorageActivityAudit($inventory_storage_activity_id, $inventory_storage_activity_audit)

Add new audit for an inventoryStorageActivity

Adds an audit to an existing inventoryStorageActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to add an audit to
$inventory_storage_activity_audit = "inventory_storage_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addInventoryStorageActivityAudit($inventory_storage_activity_id, $inventory_storage_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->addInventoryStorageActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to add an audit to |
 **inventory_storage_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInventoryStorageActivityFile**
> addInventoryStorageActivityFile($inventory_storage_activity_id, $file_name)

Attach a file to an inventoryStorageActivity

Adds a file to an existing inventoryStorageActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addInventoryStorageActivityFile($inventory_storage_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->addInventoryStorageActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInventoryStorageActivityFileByURL**
> addInventoryStorageActivityFileByURL($body, $inventory_storage_activity_id)

Attach a file to an inventoryStorageActivity by URL.

Adds a file to an existing inventoryStorageActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to add an file to

try {
    $apiInstance->addInventoryStorageActivityFileByURL($body, $inventory_storage_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->addInventoryStorageActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInventoryStorageActivityTag**
> addInventoryStorageActivityTag($inventory_storage_activity_id, $inventory_storage_activity_tag)

Add new tags for an inventoryStorageActivity.

Adds a tag to an existing inventoryStorageActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to add a tag to
$inventory_storage_activity_tag = "inventory_storage_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addInventoryStorageActivityTag($inventory_storage_activity_id, $inventory_storage_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->addInventoryStorageActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to add a tag to |
 **inventory_storage_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryStorageActivity**
> deleteInventoryStorageActivity($inventory_storage_activity_id)

Delete an inventoryStorageActivity

Deletes the inventoryStorageActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to be deleted.

try {
    $apiInstance->deleteInventoryStorageActivity($inventory_storage_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->deleteInventoryStorageActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryStorageActivityFile**
> deleteInventoryStorageActivityFile($inventory_storage_activity_id, $file_id)

Delete a file for an inventoryStorageActivity.

Deletes an existing inventoryStorageActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteInventoryStorageActivityFile($inventory_storage_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->deleteInventoryStorageActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryStorageActivityTag**
> deleteInventoryStorageActivityTag($inventory_storage_activity_id, $inventory_storage_activity_tag)

Delete a tag for an inventoryStorageActivity.

Deletes an existing inventoryStorageActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to remove tag from
$inventory_storage_activity_tag = "inventory_storage_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteInventoryStorageActivityTag($inventory_storage_activity_id, $inventory_storage_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->deleteInventoryStorageActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to remove tag from |
 **inventory_storage_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateInventoryStorageActivityById**
> \Infoplus\Infoplus\Model\InventoryStorageActivity getDuplicateInventoryStorageActivityById($inventory_storage_activity_id)

Get a duplicated an inventoryStorageActivity by id

Returns a duplicated inventoryStorageActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateInventoryStorageActivityById($inventory_storage_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->getDuplicateInventoryStorageActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\InventoryStorageActivity**](../Model/InventoryStorageActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryStorageActivityByFilter**
> \Infoplus\Infoplus\Model\InventoryStorageActivity[] getInventoryStorageActivityByFilter($filter, $page, $limit, $sort)

Search inventoryStorageActivitys by filter

Returns the list of inventoryStorageActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
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
    $result = $apiInstance->getInventoryStorageActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->getInventoryStorageActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\InventoryStorageActivity[]**](../Model/InventoryStorageActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryStorageActivityById**
> \Infoplus\Infoplus\Model\InventoryStorageActivity getInventoryStorageActivityById($inventory_storage_activity_id)

Get an inventoryStorageActivity by id

Returns the inventoryStorageActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to be returned.

try {
    $result = $apiInstance->getInventoryStorageActivityById($inventory_storage_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->getInventoryStorageActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\InventoryStorageActivity**](../Model/InventoryStorageActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryStorageActivityFiles**
> getInventoryStorageActivityFiles($inventory_storage_activity_id)

Get the files for an inventoryStorageActivity.

Get all existing inventoryStorageActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to get files for

try {
    $apiInstance->getInventoryStorageActivityFiles($inventory_storage_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->getInventoryStorageActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryStorageActivityTags**
> getInventoryStorageActivityTags($inventory_storage_activity_id)

Get the tags for an inventoryStorageActivity.

Get all existing inventoryStorageActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_storage_activity_id = 56; // int | Id of the inventoryStorageActivity to get tags for

try {
    $apiInstance->getInventoryStorageActivityTags($inventory_storage_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->getInventoryStorageActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_storage_activity_id** | **int**| Id of the inventoryStorageActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventoryStorageActivity**
> updateInventoryStorageActivity($body)

Update an inventoryStorageActivity

Updates an existing inventoryStorageActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InventoryStorageActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\InventoryStorageActivity(); // \Infoplus\Infoplus\Model\InventoryStorageActivity | InventoryStorageActivity to be updated.

try {
    $apiInstance->updateInventoryStorageActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryStorageActivityApi->updateInventoryStorageActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\InventoryStorageActivity**](../Model/InventoryStorageActivity.md)| InventoryStorageActivity to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

