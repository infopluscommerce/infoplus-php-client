# Infoplus\ProductChargesApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductCharges**](ProductChargesApi.md#addProductCharges) | **POST** /beta/productCharges | Create a productCharges
[**addProductChargesAudit**](ProductChargesApi.md#addProductChargesAudit) | **PUT** /beta/productCharges/{productChargesId}/audit/{productChargesAudit} | Add new audit for a productCharges
[**addProductChargesFile**](ProductChargesApi.md#addProductChargesFile) | **POST** /beta/productCharges/{productChargesId}/file/{fileName} | Attach a file to a productCharges
[**addProductChargesFileByURL**](ProductChargesApi.md#addProductChargesFileByURL) | **POST** /beta/productCharges/{productChargesId}/file | Attach a file to a productCharges by URL.
[**addProductChargesTag**](ProductChargesApi.md#addProductChargesTag) | **PUT** /beta/productCharges/{productChargesId}/tag/{productChargesTag} | Add new tags for a productCharges.
[**deleteProductCharges**](ProductChargesApi.md#deleteProductCharges) | **DELETE** /beta/productCharges/{productChargesId} | Delete a productCharges
[**deleteProductChargesFile**](ProductChargesApi.md#deleteProductChargesFile) | **DELETE** /beta/productCharges/{productChargesId}/file/{fileId} | Delete a file for a productCharges.
[**deleteProductChargesTag**](ProductChargesApi.md#deleteProductChargesTag) | **DELETE** /beta/productCharges/{productChargesId}/tag/{productChargesTag} | Delete a tag for a productCharges.
[**getDuplicateProductChargesById**](ProductChargesApi.md#getDuplicateProductChargesById) | **GET** /beta/productCharges/duplicate/{productChargesId} | Get a duplicated a productCharges by id
[**getProductChargesByFilter**](ProductChargesApi.md#getProductChargesByFilter) | **GET** /beta/productCharges/search | Search productChargeses by filter
[**getProductChargesById**](ProductChargesApi.md#getProductChargesById) | **GET** /beta/productCharges/{productChargesId} | Get a productCharges by id
[**getProductChargesFiles**](ProductChargesApi.md#getProductChargesFiles) | **GET** /beta/productCharges/{productChargesId}/file | Get the files for a productCharges.
[**getProductChargesTags**](ProductChargesApi.md#getProductChargesTags) | **GET** /beta/productCharges/{productChargesId}/tag | Get the tags for a productCharges.
[**updateProductCharges**](ProductChargesApi.md#updateProductCharges) | **PUT** /beta/productCharges | Update a productCharges


# **addProductCharges**
> \Infoplus\Infoplus\Model\ProductCharges addProductCharges($body)

Create a productCharges

Inserts a new productCharges using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductCharges(); // \Infoplus\Infoplus\Model\ProductCharges | ProductCharges to be inserted.

try {
    $result = $apiInstance->addProductCharges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->addProductCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductCharges**](../Model/ProductCharges.md)| ProductCharges to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ProductCharges**](../Model/ProductCharges.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductChargesAudit**
> addProductChargesAudit($product_charges_id, $product_charges_audit)

Add new audit for a productCharges

Adds an audit to an existing productCharges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to add an audit to
$product_charges_audit = "product_charges_audit_example"; // string | The audit to add

try {
    $apiInstance->addProductChargesAudit($product_charges_id, $product_charges_audit);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->addProductChargesAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to add an audit to |
 **product_charges_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductChargesFile**
> addProductChargesFile($product_charges_id, $file_name)

Attach a file to a productCharges

Adds a file to an existing productCharges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addProductChargesFile($product_charges_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->addProductChargesFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductChargesFileByURL**
> addProductChargesFileByURL($body, $product_charges_id)

Attach a file to a productCharges by URL.

Adds a file to an existing productCharges by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$product_charges_id = 56; // int | Id of the productCharges to add an file to

try {
    $apiInstance->addProductChargesFileByURL($body, $product_charges_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->addProductChargesFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **product_charges_id** | **int**| Id of the productCharges to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProductChargesTag**
> addProductChargesTag($product_charges_id, $product_charges_tag)

Add new tags for a productCharges.

Adds a tag to an existing productCharges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to add a tag to
$product_charges_tag = "product_charges_tag_example"; // string | The tag to add

try {
    $apiInstance->addProductChargesTag($product_charges_id, $product_charges_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->addProductChargesTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to add a tag to |
 **product_charges_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductCharges**
> deleteProductCharges($product_charges_id)

Delete a productCharges

Deletes the productCharges identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to be deleted.

try {
    $apiInstance->deleteProductCharges($product_charges_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->deleteProductCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductChargesFile**
> deleteProductChargesFile($product_charges_id, $file_id)

Delete a file for a productCharges.

Deletes an existing productCharges file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteProductChargesFile($product_charges_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->deleteProductChargesFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductChargesTag**
> deleteProductChargesTag($product_charges_id, $product_charges_tag)

Delete a tag for a productCharges.

Deletes an existing productCharges tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to remove tag from
$product_charges_tag = "product_charges_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteProductChargesTag($product_charges_id, $product_charges_tag);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->deleteProductChargesTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to remove tag from |
 **product_charges_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateProductChargesById**
> \Infoplus\Infoplus\Model\ProductCharges getDuplicateProductChargesById($product_charges_id)

Get a duplicated a productCharges by id

Returns a duplicated productCharges identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to be duplicated.

try {
    $result = $apiInstance->getDuplicateProductChargesById($product_charges_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->getDuplicateProductChargesById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ProductCharges**](../Model/ProductCharges.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductChargesByFilter**
> \Infoplus\Infoplus\Model\ProductCharges[] getProductChargesByFilter($filter, $page, $limit, $sort)

Search productChargeses by filter

Returns the list of productChargeses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
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
    $result = $apiInstance->getProductChargesByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->getProductChargesByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ProductCharges[]**](../Model/ProductCharges.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductChargesById**
> \Infoplus\Infoplus\Model\ProductCharges getProductChargesById($product_charges_id)

Get a productCharges by id

Returns the productCharges identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to be returned.

try {
    $result = $apiInstance->getProductChargesById($product_charges_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->getProductChargesById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ProductCharges**](../Model/ProductCharges.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductChargesFiles**
> getProductChargesFiles($product_charges_id)

Get the files for a productCharges.

Get all existing productCharges files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to get files for

try {
    $apiInstance->getProductChargesFiles($product_charges_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->getProductChargesFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductChargesTags**
> getProductChargesTags($product_charges_id)

Get the tags for a productCharges.

Get all existing productCharges tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_charges_id = 56; // int | Id of the productCharges to get tags for

try {
    $apiInstance->getProductChargesTags($product_charges_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->getProductChargesTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_charges_id** | **int**| Id of the productCharges to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCharges**
> updateProductCharges($body)

Update a productCharges

Updates an existing productCharges using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ProductChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ProductCharges(); // \Infoplus\Infoplus\Model\ProductCharges | ProductCharges to be updated.

try {
    $apiInstance->updateProductCharges($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductChargesApi->updateProductCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ProductCharges**](../Model/ProductCharges.md)| ProductCharges to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

