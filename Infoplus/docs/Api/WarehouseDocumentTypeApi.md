# Infoplus\WarehouseDocumentTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWarehouseDocumentTypeAudit**](WarehouseDocumentTypeApi.md#addWarehouseDocumentTypeAudit) | **PUT** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/audit/{warehouseDocumentTypeAudit} | Add new audit for a warehouseDocumentType
[**addWarehouseDocumentTypeFile**](WarehouseDocumentTypeApi.md#addWarehouseDocumentTypeFile) | **POST** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/file/{fileName} | Attach a file to a warehouseDocumentType
[**addWarehouseDocumentTypeFileByURL**](WarehouseDocumentTypeApi.md#addWarehouseDocumentTypeFileByURL) | **POST** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/file | Attach a file to a warehouseDocumentType by URL.
[**addWarehouseDocumentTypeTag**](WarehouseDocumentTypeApi.md#addWarehouseDocumentTypeTag) | **PUT** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/tag/{warehouseDocumentTypeTag} | Add new tags for a warehouseDocumentType.
[**deleteWarehouseDocumentTypeFile**](WarehouseDocumentTypeApi.md#deleteWarehouseDocumentTypeFile) | **DELETE** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/file/{fileId} | Delete a file for a warehouseDocumentType.
[**deleteWarehouseDocumentTypeTag**](WarehouseDocumentTypeApi.md#deleteWarehouseDocumentTypeTag) | **DELETE** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/tag/{warehouseDocumentTypeTag} | Delete a tag for a warehouseDocumentType.
[**getDuplicateWarehouseDocumentTypeById**](WarehouseDocumentTypeApi.md#getDuplicateWarehouseDocumentTypeById) | **GET** /beta/warehouseDocumentType/duplicate/{warehouseDocumentTypeId} | Get a duplicated a warehouseDocumentType by id
[**getWarehouseDocumentTypeByFilter**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeByFilter) | **GET** /beta/warehouseDocumentType/search | Search warehouseDocumentTypes by filter
[**getWarehouseDocumentTypeById**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeById) | **GET** /beta/warehouseDocumentType/{warehouseDocumentTypeId} | Get a warehouseDocumentType by id
[**getWarehouseDocumentTypeFiles**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeFiles) | **GET** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/file | Get the files for a warehouseDocumentType.
[**getWarehouseDocumentTypeTags**](WarehouseDocumentTypeApi.md#getWarehouseDocumentTypeTags) | **GET** /beta/warehouseDocumentType/{warehouseDocumentTypeId}/tag | Get the tags for a warehouseDocumentType.


# **addWarehouseDocumentTypeAudit**
> addWarehouseDocumentTypeAudit($warehouse_document_type_id, $warehouse_document_type_audit)

Add new audit for a warehouseDocumentType

Adds an audit to an existing warehouseDocumentType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to add an audit to
$warehouse_document_type_audit = "warehouse_document_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addWarehouseDocumentTypeAudit($warehouse_document_type_id, $warehouse_document_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->addWarehouseDocumentTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to add an audit to |
 **warehouse_document_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseDocumentTypeFile**
> addWarehouseDocumentTypeFile($warehouse_document_type_id, $file_name)

Attach a file to a warehouseDocumentType

Adds a file to an existing warehouseDocumentType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addWarehouseDocumentTypeFile($warehouse_document_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->addWarehouseDocumentTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseDocumentTypeFileByURL**
> addWarehouseDocumentTypeFileByURL($body, $warehouse_document_type_id)

Attach a file to a warehouseDocumentType by URL.

Adds a file to an existing warehouseDocumentType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to add an file to

try {
    $apiInstance->addWarehouseDocumentTypeFileByURL($body, $warehouse_document_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->addWarehouseDocumentTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWarehouseDocumentTypeTag**
> addWarehouseDocumentTypeTag($warehouse_document_type_id, $warehouse_document_type_tag)

Add new tags for a warehouseDocumentType.

Adds a tag to an existing warehouseDocumentType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to add a tag to
$warehouse_document_type_tag = "warehouse_document_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addWarehouseDocumentTypeTag($warehouse_document_type_id, $warehouse_document_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->addWarehouseDocumentTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to add a tag to |
 **warehouse_document_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseDocumentTypeFile**
> deleteWarehouseDocumentTypeFile($warehouse_document_type_id, $file_id)

Delete a file for a warehouseDocumentType.

Deletes an existing warehouseDocumentType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteWarehouseDocumentTypeFile($warehouse_document_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->deleteWarehouseDocumentTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWarehouseDocumentTypeTag**
> deleteWarehouseDocumentTypeTag($warehouse_document_type_id, $warehouse_document_type_tag)

Delete a tag for a warehouseDocumentType.

Deletes an existing warehouseDocumentType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to remove tag from
$warehouse_document_type_tag = "warehouse_document_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteWarehouseDocumentTypeTag($warehouse_document_type_id, $warehouse_document_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->deleteWarehouseDocumentTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to remove tag from |
 **warehouse_document_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateWarehouseDocumentTypeById**
> \Infoplus\Infoplus\Model\WarehouseDocumentType getDuplicateWarehouseDocumentTypeById($warehouse_document_type_id)

Get a duplicated a warehouseDocumentType by id

Returns a duplicated warehouseDocumentType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to be duplicated.

try {
    $result = $apiInstance->getDuplicateWarehouseDocumentTypeById($warehouse_document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getDuplicateWarehouseDocumentTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseDocumentType**](../Model/WarehouseDocumentType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseDocumentTypeByFilter**
> \Infoplus\Infoplus\Model\WarehouseDocumentType[] getWarehouseDocumentTypeByFilter($filter, $page, $limit, $sort)

Search warehouseDocumentTypes by filter

Returns the list of warehouseDocumentTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
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
    $result = $apiInstance->getWarehouseDocumentTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\WarehouseDocumentType[]**](../Model/WarehouseDocumentType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseDocumentTypeById**
> \Infoplus\Infoplus\Model\WarehouseDocumentType getWarehouseDocumentTypeById($warehouse_document_type_id)

Get a warehouseDocumentType by id

Returns the warehouseDocumentType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to be returned.

try {
    $result = $apiInstance->getWarehouseDocumentTypeById($warehouse_document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\WarehouseDocumentType**](../Model/WarehouseDocumentType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseDocumentTypeFiles**
> getWarehouseDocumentTypeFiles($warehouse_document_type_id)

Get the files for a warehouseDocumentType.

Get all existing warehouseDocumentType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to get files for

try {
    $apiInstance->getWarehouseDocumentTypeFiles($warehouse_document_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWarehouseDocumentTypeTags**
> getWarehouseDocumentTypeTags($warehouse_document_type_id)

Get the tags for a warehouseDocumentType.

Get all existing warehouseDocumentType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\WarehouseDocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_document_type_id = 56; // int | Id of the warehouseDocumentType to get tags for

try {
    $apiInstance->getWarehouseDocumentTypeTags($warehouse_document_type_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentTypeApi->getWarehouseDocumentTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_type_id** | **int**| Id of the warehouseDocumentType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

