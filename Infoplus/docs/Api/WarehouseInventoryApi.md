# Infoplus\WarehouseInventoryApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWarehouseInventoryAudit**](WarehouseInventoryApi.md#addWarehouseInventoryAudit) | **PUT** /beta/warehouseInventory/{warehouseInventoryId}/audit/{warehouseInventoryAudit} | Add new audit for a warehouseInventory
[**addWarehouseInventoryFile**](WarehouseInventoryApi.md#addWarehouseInventoryFile) | **POST** /beta/warehouseInventory/{warehouseInventoryId}/file/{fileName} | Attach a file to a warehouseInventory
[**addWarehouseInventoryFileByURL**](WarehouseInventoryApi.md#addWarehouseInventoryFileByURL) | **POST** /beta/warehouseInventory/{warehouseInventoryId}/file | Attach a file to a warehouseInventory by URL.
[**addWarehouseInventoryTag**](WarehouseInventoryApi.md#addWarehouseInventoryTag) | **PUT** /beta/warehouseInventory/{warehouseInventoryId}/tag/{warehouseInventoryTag} | Add new tags for a warehouseInventory.
[**deleteWarehouseInventoryFile**](WarehouseInventoryApi.md#deleteWarehouseInventoryFile) | **DELETE** /beta/warehouseInventory/{warehouseInventoryId}/file/{fileId} | Delete a file for a warehouseInventory.
[**deleteWarehouseInventoryTag**](WarehouseInventoryApi.md#deleteWarehouseInventoryTag) | **DELETE** /beta/warehouseInventory/{warehouseInventoryId}/tag/{warehouseInventoryTag} | Delete a tag for a warehouseInventory.
[**getDuplicateWarehouseInventoryById**](WarehouseInventoryApi.md#getDuplicateWarehouseInventoryById) | **GET** /beta/warehouseInventory/duplicate/{warehouseInventoryId} | Get a duplicated a warehouseInventory by id
[**getWarehouseInventoryByFilter**](WarehouseInventoryApi.md#getWarehouseInventoryByFilter) | **GET** /beta/warehouseInventory/search | Search warehouseInventorys by filter
[**getWarehouseInventoryById**](WarehouseInventoryApi.md#getWarehouseInventoryById) | **GET** /beta/warehouseInventory/{warehouseInventoryId} | Get a warehouseInventory by id
[**getWarehouseInventoryFiles**](WarehouseInventoryApi.md#getWarehouseInventoryFiles) | **GET** /beta/warehouseInventory/{warehouseInventoryId}/file | Get the files for a warehouseInventory.
[**getWarehouseInventoryTags**](WarehouseInventoryApi.md#getWarehouseInventoryTags) | **GET** /beta/warehouseInventory/{warehouseInventoryId}/tag | Get the tags for a warehouseInventory.


# **addWarehouseInventoryAudit**
> addWarehouseInventoryAudit($warehouse_inventory_id, $warehouse_inventory_audit)

Add new audit for a warehouseInventory

Adds an audit to an existing warehouseInventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to add an audit to
$warehouse_inventory_audit = "warehouse_inventory_audit_example"; // string | The audit to add

try {
    $apiInstance->addWarehouseInventoryAudit($warehouse_inventory_id, $warehouse_inventory_audit);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->addWarehouseInventoryAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to add an audit to |
 **warehouse_inventory_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseInventoryFile**
> addWarehouseInventoryFile($warehouse_inventory_id, $file_name)

Attach a file to a warehouseInventory

Adds a file to an existing warehouseInventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addWarehouseInventoryFile($warehouse_inventory_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->addWarehouseInventoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseInventoryFileByURL**
> addWarehouseInventoryFileByURL($body, $warehouse_inventory_id)

Attach a file to a warehouseInventory by URL.

Adds a file to an existing warehouseInventory by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to add an file to

try {
    $apiInstance->addWarehouseInventoryFileByURL($body, $warehouse_inventory_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->addWarehouseInventoryFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseInventoryTag**
> addWarehouseInventoryTag($warehouse_inventory_id, $warehouse_inventory_tag)

Add new tags for a warehouseInventory.

Adds a tag to an existing warehouseInventory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to add a tag to
$warehouse_inventory_tag = "warehouse_inventory_tag_example"; // string | The tag to add

try {
    $apiInstance->addWarehouseInventoryTag($warehouse_inventory_id, $warehouse_inventory_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->addWarehouseInventoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to add a tag to |
 **warehouse_inventory_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseInventoryFile**
> deleteWarehouseInventoryFile($warehouse_inventory_id, $file_id)

Delete a file for a warehouseInventory.

Deletes an existing warehouseInventory file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteWarehouseInventoryFile($warehouse_inventory_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->deleteWarehouseInventoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseInventoryTag**
> deleteWarehouseInventoryTag($warehouse_inventory_id, $warehouse_inventory_tag)

Delete a tag for a warehouseInventory.

Deletes an existing warehouseInventory tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to remove tag from
$warehouse_inventory_tag = "warehouse_inventory_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteWarehouseInventoryTag($warehouse_inventory_id, $warehouse_inventory_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->deleteWarehouseInventoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to remove tag from |
 **warehouse_inventory_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateWarehouseInventoryById**
> \Infoplus\Infoplus\Model\WarehouseInventory getDuplicateWarehouseInventoryById($warehouse_inventory_id)

Get a duplicated a warehouseInventory by id

Returns a duplicated warehouseInventory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to be duplicated.

try {
    $result = $apiInstance->getDuplicateWarehouseInventoryById($warehouse_inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->getDuplicateWarehouseInventoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseInventory**](../Model/WarehouseInventory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseInventoryByFilter**
> \Infoplus\Infoplus\Model\WarehouseInventory[] getWarehouseInventoryByFilter($filter, $page, $limit, $sort)

Search warehouseInventorys by filter

Returns the list of warehouseInventorys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
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
    $result = $apiInstance->getWarehouseInventoryByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->getWarehouseInventoryByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\WarehouseInventory[]**](../Model/WarehouseInventory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseInventoryById**
> \Infoplus\Infoplus\Model\WarehouseInventory getWarehouseInventoryById($warehouse_inventory_id)

Get a warehouseInventory by id

Returns the warehouseInventory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to be returned.

try {
    $result = $apiInstance->getWarehouseInventoryById($warehouse_inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->getWarehouseInventoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseInventory**](../Model/WarehouseInventory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseInventoryFiles**
> getWarehouseInventoryFiles($warehouse_inventory_id)

Get the files for a warehouseInventory.

Get all existing warehouseInventory files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to get files for

try {
    $apiInstance->getWarehouseInventoryFiles($warehouse_inventory_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->getWarehouseInventoryFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseInventoryTags**
> getWarehouseInventoryTags($warehouse_inventory_id)

Get the tags for a warehouseInventory.

Get all existing warehouseInventory tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_inventory_id = 56; // int | Id of the warehouseInventory to get tags for

try {
    $apiInstance->getWarehouseInventoryTags($warehouse_inventory_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseInventoryApi->getWarehouseInventoryTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_inventory_id** | **int**| Id of the warehouseInventory to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

