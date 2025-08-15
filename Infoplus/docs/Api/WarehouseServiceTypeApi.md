# Infoplus\WarehouseServiceTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWarehouseServiceType**](WarehouseServiceTypeApi.md#addWarehouseServiceType) | **POST** /beta/warehouseServiceType | Create a warehouseServiceType
[**addWarehouseServiceTypeAudit**](WarehouseServiceTypeApi.md#addWarehouseServiceTypeAudit) | **PUT** /beta/warehouseServiceType/{warehouseServiceTypeId}/audit/{warehouseServiceTypeAudit} | Add new audit for a warehouseServiceType
[**addWarehouseServiceTypeFile**](WarehouseServiceTypeApi.md#addWarehouseServiceTypeFile) | **POST** /beta/warehouseServiceType/{warehouseServiceTypeId}/file/{fileName} | Attach a file to a warehouseServiceType
[**addWarehouseServiceTypeFileByURL**](WarehouseServiceTypeApi.md#addWarehouseServiceTypeFileByURL) | **POST** /beta/warehouseServiceType/{warehouseServiceTypeId}/file | Attach a file to a warehouseServiceType by URL.
[**addWarehouseServiceTypeTag**](WarehouseServiceTypeApi.md#addWarehouseServiceTypeTag) | **PUT** /beta/warehouseServiceType/{warehouseServiceTypeId}/tag/{warehouseServiceTypeTag} | Add new tags for a warehouseServiceType.
[**deleteWarehouseServiceType**](WarehouseServiceTypeApi.md#deleteWarehouseServiceType) | **DELETE** /beta/warehouseServiceType/{warehouseServiceTypeId} | Delete a warehouseServiceType
[**deleteWarehouseServiceTypeFile**](WarehouseServiceTypeApi.md#deleteWarehouseServiceTypeFile) | **DELETE** /beta/warehouseServiceType/{warehouseServiceTypeId}/file/{fileId} | Delete a file for a warehouseServiceType.
[**deleteWarehouseServiceTypeTag**](WarehouseServiceTypeApi.md#deleteWarehouseServiceTypeTag) | **DELETE** /beta/warehouseServiceType/{warehouseServiceTypeId}/tag/{warehouseServiceTypeTag} | Delete a tag for a warehouseServiceType.
[**getDuplicateWarehouseServiceTypeById**](WarehouseServiceTypeApi.md#getDuplicateWarehouseServiceTypeById) | **GET** /beta/warehouseServiceType/duplicate/{warehouseServiceTypeId} | Get a duplicated a warehouseServiceType by id
[**getWarehouseServiceTypeByFilter**](WarehouseServiceTypeApi.md#getWarehouseServiceTypeByFilter) | **GET** /beta/warehouseServiceType/search | Search warehouseServiceTypes by filter
[**getWarehouseServiceTypeById**](WarehouseServiceTypeApi.md#getWarehouseServiceTypeById) | **GET** /beta/warehouseServiceType/{warehouseServiceTypeId} | Get a warehouseServiceType by id
[**getWarehouseServiceTypeFiles**](WarehouseServiceTypeApi.md#getWarehouseServiceTypeFiles) | **GET** /beta/warehouseServiceType/{warehouseServiceTypeId}/file | Get the files for a warehouseServiceType.
[**getWarehouseServiceTypeTags**](WarehouseServiceTypeApi.md#getWarehouseServiceTypeTags) | **GET** /beta/warehouseServiceType/{warehouseServiceTypeId}/tag | Get the tags for a warehouseServiceType.
[**updateWarehouseServiceType**](WarehouseServiceTypeApi.md#updateWarehouseServiceType) | **PUT** /beta/warehouseServiceType | Update a warehouseServiceType
[**updateWarehouseServiceTypeCustomFields**](WarehouseServiceTypeApi.md#updateWarehouseServiceTypeCustomFields) | **PUT** /beta/warehouseServiceType/customFields | Update a warehouseServiceType custom fields


# **addWarehouseServiceType**
> \Infoplus\Infoplus\Model\WarehouseServiceType addWarehouseServiceType($body)

Create a warehouseServiceType

Inserts a new warehouseServiceType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\WarehouseServiceType(); // \Infoplus\Infoplus\Model\WarehouseServiceType | WarehouseServiceType to be inserted.

try {
    $result = $apiInstance->addWarehouseServiceType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->addWarehouseServiceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)| WarehouseServiceType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseServiceTypeAudit**
> addWarehouseServiceTypeAudit($warehouse_service_type_id, $warehouse_service_type_audit)

Add new audit for a warehouseServiceType

Adds an audit to an existing warehouseServiceType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to add an audit to
$warehouse_service_type_audit = "warehouse_service_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addWarehouseServiceTypeAudit($warehouse_service_type_id, $warehouse_service_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->addWarehouseServiceTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to add an audit to |
 **warehouse_service_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseServiceTypeFile**
> addWarehouseServiceTypeFile($warehouse_service_type_id, $file_name)

Attach a file to a warehouseServiceType

Adds a file to an existing warehouseServiceType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addWarehouseServiceTypeFile($warehouse_service_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->addWarehouseServiceTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseServiceTypeFileByURL**
> addWarehouseServiceTypeFileByURL($body, $warehouse_service_type_id)

Attach a file to a warehouseServiceType by URL.

Adds a file to an existing warehouseServiceType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to add an file to

try {
    $apiInstance->addWarehouseServiceTypeFileByURL($body, $warehouse_service_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->addWarehouseServiceTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseServiceTypeTag**
> addWarehouseServiceTypeTag($warehouse_service_type_id, $warehouse_service_type_tag)

Add new tags for a warehouseServiceType.

Adds a tag to an existing warehouseServiceType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to add a tag to
$warehouse_service_type_tag = "warehouse_service_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addWarehouseServiceTypeTag($warehouse_service_type_id, $warehouse_service_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->addWarehouseServiceTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to add a tag to |
 **warehouse_service_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseServiceType**
> deleteWarehouseServiceType($warehouse_service_type_id)

Delete a warehouseServiceType

Deletes the warehouseServiceType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to be deleted.

try {
    $apiInstance->deleteWarehouseServiceType($warehouse_service_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->deleteWarehouseServiceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseServiceTypeFile**
> deleteWarehouseServiceTypeFile($warehouse_service_type_id, $file_id)

Delete a file for a warehouseServiceType.

Deletes an existing warehouseServiceType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteWarehouseServiceTypeFile($warehouse_service_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->deleteWarehouseServiceTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseServiceTypeTag**
> deleteWarehouseServiceTypeTag($warehouse_service_type_id, $warehouse_service_type_tag)

Delete a tag for a warehouseServiceType.

Deletes an existing warehouseServiceType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to remove tag from
$warehouse_service_type_tag = "warehouse_service_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteWarehouseServiceTypeTag($warehouse_service_type_id, $warehouse_service_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->deleteWarehouseServiceTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to remove tag from |
 **warehouse_service_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateWarehouseServiceTypeById**
> \Infoplus\Infoplus\Model\WarehouseServiceType getDuplicateWarehouseServiceTypeById($warehouse_service_type_id)

Get a duplicated a warehouseServiceType by id

Returns a duplicated warehouseServiceType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to be duplicated.

try {
    $result = $apiInstance->getDuplicateWarehouseServiceTypeById($warehouse_service_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->getDuplicateWarehouseServiceTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseServiceTypeByFilter**
> \Infoplus\Infoplus\Model\WarehouseServiceType[] getWarehouseServiceTypeByFilter($filter, $page, $limit, $sort)

Search warehouseServiceTypes by filter

Returns the list of warehouseServiceTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
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
    $result = $apiInstance->getWarehouseServiceTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->getWarehouseServiceTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\WarehouseServiceType[]**](../Model/WarehouseServiceType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseServiceTypeById**
> \Infoplus\Infoplus\Model\WarehouseServiceType getWarehouseServiceTypeById($warehouse_service_type_id)

Get a warehouseServiceType by id

Returns the warehouseServiceType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to be returned.

try {
    $result = $apiInstance->getWarehouseServiceTypeById($warehouse_service_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->getWarehouseServiceTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseServiceTypeFiles**
> getWarehouseServiceTypeFiles($warehouse_service_type_id)

Get the files for a warehouseServiceType.

Get all existing warehouseServiceType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to get files for

try {
    $apiInstance->getWarehouseServiceTypeFiles($warehouse_service_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->getWarehouseServiceTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseServiceTypeTags**
> getWarehouseServiceTypeTags($warehouse_service_type_id)

Get the tags for a warehouseServiceType.

Get all existing warehouseServiceType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_service_type_id = 56; // int | Id of the warehouseServiceType to get tags for

try {
    $apiInstance->getWarehouseServiceTypeTags($warehouse_service_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->getWarehouseServiceTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_service_type_id** | **int**| Id of the warehouseServiceType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWarehouseServiceType**
> updateWarehouseServiceType($body)

Update a warehouseServiceType

Updates an existing warehouseServiceType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\WarehouseServiceType(); // \Infoplus\Infoplus\Model\WarehouseServiceType | WarehouseServiceType to be updated.

try {
    $apiInstance->updateWarehouseServiceType($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->updateWarehouseServiceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)| WarehouseServiceType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWarehouseServiceTypeCustomFields**
> updateWarehouseServiceTypeCustomFields($body)

Update a warehouseServiceType custom fields

Updates an existing warehouseServiceType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseServiceTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\WarehouseServiceType(); // \Infoplus\Infoplus\Model\WarehouseServiceType | WarehouseServiceType to be updated.

try {
    $apiInstance->updateWarehouseServiceTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseServiceTypeApi->updateWarehouseServiceTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\WarehouseServiceType**](../Model/WarehouseServiceType.md)| WarehouseServiceType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

