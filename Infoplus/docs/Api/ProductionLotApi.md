# Infoplus\ProductionLotApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductionLot**](ProductionLotApi.md#addProductionLot) | **POST** /beta/productionLot | Create a productionLot
[**addProductionLotAudit**](ProductionLotApi.md#addProductionLotAudit) | **PUT** /beta/productionLot/{productionLotId}/audit/{productionLotAudit} | Add new audit for a productionLot
[**addProductionLotFile**](ProductionLotApi.md#addProductionLotFile) | **POST** /beta/productionLot/{productionLotId}/file/{fileName} | Attach a file to a productionLot
[**addProductionLotFileByURL**](ProductionLotApi.md#addProductionLotFileByURL) | **POST** /beta/productionLot/{productionLotId}/file | Attach a file to a productionLot by URL.
[**addProductionLotTag**](ProductionLotApi.md#addProductionLotTag) | **PUT** /beta/productionLot/{productionLotId}/tag/{productionLotTag} | Add new tags for a productionLot.
[**deleteProductionLot**](ProductionLotApi.md#deleteProductionLot) | **DELETE** /beta/productionLot/{productionLotId} | Delete a productionLot
[**deleteProductionLotFile**](ProductionLotApi.md#deleteProductionLotFile) | **DELETE** /beta/productionLot/{productionLotId}/file/{fileId} | Delete a file for a productionLot.
[**deleteProductionLotTag**](ProductionLotApi.md#deleteProductionLotTag) | **DELETE** /beta/productionLot/{productionLotId}/tag/{productionLotTag} | Delete a tag for a productionLot.
[**getDuplicateProductionLotById**](ProductionLotApi.md#getDuplicateProductionLotById) | **GET** /beta/productionLot/duplicate/{productionLotId} | Get a duplicated a productionLot by id
[**getProductionLotByFilter**](ProductionLotApi.md#getProductionLotByFilter) | **GET** /beta/productionLot/search | Search productionLots by filter
[**getProductionLotById**](ProductionLotApi.md#getProductionLotById) | **GET** /beta/productionLot/{productionLotId} | Get a productionLot by id
[**getProductionLotFiles**](ProductionLotApi.md#getProductionLotFiles) | **GET** /beta/productionLot/{productionLotId}/file | Get the files for a productionLot.
[**getProductionLotTags**](ProductionLotApi.md#getProductionLotTags) | **GET** /beta/productionLot/{productionLotId}/tag | Get the tags for a productionLot.
[**updateProductionLot**](ProductionLotApi.md#updateProductionLot) | **PUT** /beta/productionLot | Update a productionLot
[**updateProductionLotCustomFields**](ProductionLotApi.md#updateProductionLotCustomFields) | **PUT** /beta/productionLot/customFields | Update a productionLot custom fields


# **addProductionLot**
> \Infoplus\Infoplus\Model\ProductionLot addProductionLot($body)

Create a productionLot

Inserts a new productionLot using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionLot(); // \Infoplus\Infoplus\Model\ProductionLot | ProductionLot to be inserted.

try {
    $result = $apiInstance->addProductionLot($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->addProductionLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)| ProductionLot to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionLotAudit**
> addProductionLotAudit($production_lot_id, $production_lot_audit)

Add new audit for a productionLot

Adds an audit to an existing productionLot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to add an audit to
$production_lot_audit = "production_lot_audit_example"; // string | The audit to add

try {
    $apiInstance->addProductionLotAudit($production_lot_id, $production_lot_audit);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->addProductionLotAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to add an audit to |
 **production_lot_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionLotFile**
> addProductionLotFile($production_lot_id, $file_name)

Attach a file to a productionLot

Adds a file to an existing productionLot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addProductionLotFile($production_lot_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->addProductionLotFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionLotFileByURL**
> addProductionLotFileByURL($body, $production_lot_id)

Attach a file to a productionLot by URL.

Adds a file to an existing productionLot by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$production_lot_id = 56; // int | Id of the productionLot to add an file to

try {
    $apiInstance->addProductionLotFileByURL($body, $production_lot_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->addProductionLotFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **production_lot_id** | **int**| Id of the productionLot to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionLotTag**
> addProductionLotTag($production_lot_id, $production_lot_tag)

Add new tags for a productionLot.

Adds a tag to an existing productionLot.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to add a tag to
$production_lot_tag = "production_lot_tag_example"; // string | The tag to add

try {
    $apiInstance->addProductionLotTag($production_lot_id, $production_lot_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->addProductionLotTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to add a tag to |
 **production_lot_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionLot**
> deleteProductionLot($production_lot_id)

Delete a productionLot

Deletes the productionLot identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to be deleted.

try {
    $apiInstance->deleteProductionLot($production_lot_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->deleteProductionLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionLotFile**
> deleteProductionLotFile($production_lot_id, $file_id)

Delete a file for a productionLot.

Deletes an existing productionLot file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteProductionLotFile($production_lot_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->deleteProductionLotFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionLotTag**
> deleteProductionLotTag($production_lot_id, $production_lot_tag)

Delete a tag for a productionLot.

Deletes an existing productionLot tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to remove tag from
$production_lot_tag = "production_lot_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteProductionLotTag($production_lot_id, $production_lot_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->deleteProductionLotTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to remove tag from |
 **production_lot_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateProductionLotById**
> \Infoplus\Infoplus\Model\ProductionLot getDuplicateProductionLotById($production_lot_id)

Get a duplicated a productionLot by id

Returns a duplicated productionLot identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to be duplicated.

try {
    $result = $apiInstance->getDuplicateProductionLotById($production_lot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->getDuplicateProductionLotById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionLotByFilter**
> \Infoplus\Infoplus\Model\ProductionLot[] getProductionLotByFilter($filter, $page, $limit, $sort)

Search productionLots by filter

Returns the list of productionLots that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
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
    $result = $apiInstance->getProductionLotByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->getProductionLotByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ProductionLot[]**](../Model/ProductionLot.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionLotById**
> \Infoplus\Infoplus\Model\ProductionLot getProductionLotById($production_lot_id)

Get a productionLot by id

Returns the productionLot identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to be returned.

try {
    $result = $apiInstance->getProductionLotById($production_lot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->getProductionLotById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionLotFiles**
> getProductionLotFiles($production_lot_id)

Get the files for a productionLot.

Get all existing productionLot files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to get files for

try {
    $apiInstance->getProductionLotFiles($production_lot_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->getProductionLotFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionLotTags**
> getProductionLotTags($production_lot_id)

Get the tags for a productionLot.

Get all existing productionLot tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_lot_id = 56; // int | Id of the productionLot to get tags for

try {
    $apiInstance->getProductionLotTags($production_lot_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->getProductionLotTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_lot_id** | **int**| Id of the productionLot to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductionLot**
> updateProductionLot($body)

Update a productionLot

Updates an existing productionLot using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionLot(); // \Infoplus\Infoplus\Model\ProductionLot | ProductionLot to be updated.

try {
    $apiInstance->updateProductionLot($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->updateProductionLot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)| ProductionLot to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductionLotCustomFields**
> updateProductionLotCustomFields($body)

Update a productionLot custom fields

Updates an existing productionLot custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionLotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionLot(); // \Infoplus\Infoplus\Model\ProductionLot | ProductionLot to be updated.

try {
    $apiInstance->updateProductionLotCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductionLotApi->updateProductionLotCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionLot**](../Model/ProductionLot.md)| ProductionLot to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

