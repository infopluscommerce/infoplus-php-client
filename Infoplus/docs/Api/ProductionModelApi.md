# Infoplus\ProductionModelApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductionModel**](ProductionModelApi.md#addProductionModel) | **POST** /beta/productionModel | Create a productionModel
[**addProductionModelAudit**](ProductionModelApi.md#addProductionModelAudit) | **PUT** /beta/productionModel/{productionModelId}/audit/{productionModelAudit} | Add new audit for a productionModel
[**addProductionModelFile**](ProductionModelApi.md#addProductionModelFile) | **POST** /beta/productionModel/{productionModelId}/file/{fileName} | Attach a file to a productionModel
[**addProductionModelFileByURL**](ProductionModelApi.md#addProductionModelFileByURL) | **POST** /beta/productionModel/{productionModelId}/file | Attach a file to a productionModel by URL.
[**addProductionModelTag**](ProductionModelApi.md#addProductionModelTag) | **PUT** /beta/productionModel/{productionModelId}/tag/{productionModelTag} | Add new tags for a productionModel.
[**deleteProductionModel**](ProductionModelApi.md#deleteProductionModel) | **DELETE** /beta/productionModel/{productionModelId} | Delete a productionModel
[**deleteProductionModelFile**](ProductionModelApi.md#deleteProductionModelFile) | **DELETE** /beta/productionModel/{productionModelId}/file/{fileId} | Delete a file for a productionModel.
[**deleteProductionModelTag**](ProductionModelApi.md#deleteProductionModelTag) | **DELETE** /beta/productionModel/{productionModelId}/tag/{productionModelTag} | Delete a tag for a productionModel.
[**getDuplicateProductionModelById**](ProductionModelApi.md#getDuplicateProductionModelById) | **GET** /beta/productionModel/duplicate/{productionModelId} | Get a duplicated a productionModel by id
[**getProductionModelByFilter**](ProductionModelApi.md#getProductionModelByFilter) | **GET** /beta/productionModel/search | Search productionModels by filter
[**getProductionModelById**](ProductionModelApi.md#getProductionModelById) | **GET** /beta/productionModel/{productionModelId} | Get a productionModel by id
[**getProductionModelFiles**](ProductionModelApi.md#getProductionModelFiles) | **GET** /beta/productionModel/{productionModelId}/file | Get the files for a productionModel.
[**getProductionModelTags**](ProductionModelApi.md#getProductionModelTags) | **GET** /beta/productionModel/{productionModelId}/tag | Get the tags for a productionModel.
[**updateProductionModel**](ProductionModelApi.md#updateProductionModel) | **PUT** /beta/productionModel | Update a productionModel
[**updateProductionModelCustomFields**](ProductionModelApi.md#updateProductionModelCustomFields) | **PUT** /beta/productionModel/customFields | Update a productionModel custom fields


# **addProductionModel**
> \Infoplus\Infoplus\Model\ProductionModel addProductionModel($body)

Create a productionModel

Inserts a new productionModel using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionModel(); // \Infoplus\Infoplus\Model\ProductionModel | ProductionModel to be inserted.

try {
    $result = $apiInstance->addProductionModel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->addProductionModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)| ProductionModel to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionModelAudit**
> addProductionModelAudit($production_model_id, $production_model_audit)

Add new audit for a productionModel

Adds an audit to an existing productionModel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to add an audit to
$production_model_audit = "production_model_audit_example"; // string | The audit to add

try {
    $apiInstance->addProductionModelAudit($production_model_id, $production_model_audit);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->addProductionModelAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to add an audit to |
 **production_model_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionModelFile**
> addProductionModelFile($production_model_id, $file_name)

Attach a file to a productionModel

Adds a file to an existing productionModel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addProductionModelFile($production_model_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->addProductionModelFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionModelFileByURL**
> addProductionModelFileByURL($body, $production_model_id)

Attach a file to a productionModel by URL.

Adds a file to an existing productionModel by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$production_model_id = 56; // int | Id of the productionModel to add an file to

try {
    $apiInstance->addProductionModelFileByURL($body, $production_model_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->addProductionModelFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **production_model_id** | **int**| Id of the productionModel to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductionModelTag**
> addProductionModelTag($production_model_id, $production_model_tag)

Add new tags for a productionModel.

Adds a tag to an existing productionModel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to add a tag to
$production_model_tag = "production_model_tag_example"; // string | The tag to add

try {
    $apiInstance->addProductionModelTag($production_model_id, $production_model_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->addProductionModelTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to add a tag to |
 **production_model_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionModel**
> deleteProductionModel($production_model_id)

Delete a productionModel

Deletes the productionModel identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to be deleted.

try {
    $apiInstance->deleteProductionModel($production_model_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->deleteProductionModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionModelFile**
> deleteProductionModelFile($production_model_id, $file_id)

Delete a file for a productionModel.

Deletes an existing productionModel file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteProductionModelFile($production_model_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->deleteProductionModelFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionModelTag**
> deleteProductionModelTag($production_model_id, $production_model_tag)

Delete a tag for a productionModel.

Deletes an existing productionModel tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to remove tag from
$production_model_tag = "production_model_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteProductionModelTag($production_model_id, $production_model_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->deleteProductionModelTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to remove tag from |
 **production_model_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateProductionModelById**
> \Infoplus\Infoplus\Model\ProductionModel getDuplicateProductionModelById($production_model_id)

Get a duplicated a productionModel by id

Returns a duplicated productionModel identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to be duplicated.

try {
    $result = $apiInstance->getDuplicateProductionModelById($production_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->getDuplicateProductionModelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionModelByFilter**
> \Infoplus\Infoplus\Model\ProductionModel[] getProductionModelByFilter($filter, $page, $limit, $sort)

Search productionModels by filter

Returns the list of productionModels that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
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
    $result = $apiInstance->getProductionModelByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->getProductionModelByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ProductionModel[]**](../Model/ProductionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionModelById**
> \Infoplus\Infoplus\Model\ProductionModel getProductionModelById($production_model_id)

Get a productionModel by id

Returns the productionModel identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to be returned.

try {
    $result = $apiInstance->getProductionModelById($production_model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->getProductionModelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionModelFiles**
> getProductionModelFiles($production_model_id)

Get the files for a productionModel.

Get all existing productionModel files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to get files for

try {
    $apiInstance->getProductionModelFiles($production_model_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->getProductionModelFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionModelTags**
> getProductionModelTags($production_model_id)

Get the tags for a productionModel.

Get all existing productionModel tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_model_id = 56; // int | Id of the productionModel to get tags for

try {
    $apiInstance->getProductionModelTags($production_model_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->getProductionModelTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **production_model_id** | **int**| Id of the productionModel to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductionModel**
> updateProductionModel($body)

Update a productionModel

Updates an existing productionModel using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionModel(); // \Infoplus\Infoplus\Model\ProductionModel | ProductionModel to be updated.

try {
    $apiInstance->updateProductionModel($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->updateProductionModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)| ProductionModel to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductionModelCustomFields**
> updateProductionModelCustomFields($body)

Update a productionModel custom fields

Updates an existing productionModel custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductionModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductionModel(); // \Infoplus\Infoplus\Model\ProductionModel | ProductionModel to be updated.

try {
    $apiInstance->updateProductionModelCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductionModelApi->updateProductionModelCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductionModel**](../Model/ProductionModel.md)| ProductionModel to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

