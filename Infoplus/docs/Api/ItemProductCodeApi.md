# Infoplus\ItemProductCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemProductCode**](ItemProductCodeApi.md#addItemProductCode) | **POST** /beta/itemProductCode | Create an itemProductCode
[**addItemProductCodeAudit**](ItemProductCodeApi.md#addItemProductCodeAudit) | **PUT** /beta/itemProductCode/{itemProductCodeId}/audit/{itemProductCodeAudit} | Add new audit for an itemProductCode
[**addItemProductCodeFile**](ItemProductCodeApi.md#addItemProductCodeFile) | **POST** /beta/itemProductCode/{itemProductCodeId}/file/{fileName} | Attach a file to an itemProductCode
[**addItemProductCodeFileByURL**](ItemProductCodeApi.md#addItemProductCodeFileByURL) | **POST** /beta/itemProductCode/{itemProductCodeId}/file | Attach a file to an itemProductCode by URL.
[**addItemProductCodeTag**](ItemProductCodeApi.md#addItemProductCodeTag) | **PUT** /beta/itemProductCode/{itemProductCodeId}/tag/{itemProductCodeTag} | Add new tags for an itemProductCode.
[**deleteItemProductCode**](ItemProductCodeApi.md#deleteItemProductCode) | **DELETE** /beta/itemProductCode/{itemProductCodeId} | Delete an itemProductCode
[**deleteItemProductCodeFile**](ItemProductCodeApi.md#deleteItemProductCodeFile) | **DELETE** /beta/itemProductCode/{itemProductCodeId}/file/{fileId} | Delete a file for an itemProductCode.
[**deleteItemProductCodeTag**](ItemProductCodeApi.md#deleteItemProductCodeTag) | **DELETE** /beta/itemProductCode/{itemProductCodeId}/tag/{itemProductCodeTag} | Delete a tag for an itemProductCode.
[**getDuplicateItemProductCodeById**](ItemProductCodeApi.md#getDuplicateItemProductCodeById) | **GET** /beta/itemProductCode/duplicate/{itemProductCodeId} | Get a duplicated an itemProductCode by id
[**getItemProductCodeByFilter**](ItemProductCodeApi.md#getItemProductCodeByFilter) | **GET** /beta/itemProductCode/search | Search itemProductCodes by filter
[**getItemProductCodeById**](ItemProductCodeApi.md#getItemProductCodeById) | **GET** /beta/itemProductCode/{itemProductCodeId} | Get an itemProductCode by id
[**getItemProductCodeFiles**](ItemProductCodeApi.md#getItemProductCodeFiles) | **GET** /beta/itemProductCode/{itemProductCodeId}/file | Get the files for an itemProductCode.
[**getItemProductCodeTags**](ItemProductCodeApi.md#getItemProductCodeTags) | **GET** /beta/itemProductCode/{itemProductCodeId}/tag | Get the tags for an itemProductCode.
[**updateItemProductCode**](ItemProductCodeApi.md#updateItemProductCode) | **PUT** /beta/itemProductCode | Update an itemProductCode


# **addItemProductCode**
> \Infoplus\Infoplus\Model\ItemProductCode addItemProductCode($body)

Create an itemProductCode

Inserts a new itemProductCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemProductCode(); // \Infoplus\Infoplus\Model\ItemProductCode | ItemProductCode to be inserted.

try {
    $result = $apiInstance->addItemProductCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemProductCode**](../Model/ItemProductCode.md)| ItemProductCode to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemProductCode**](../Model/ItemProductCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemProductCodeAudit**
> addItemProductCodeAudit($item_product_code_id, $item_product_code_audit)

Add new audit for an itemProductCode

Adds an audit to an existing itemProductCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to add an audit to
$item_product_code_audit = "item_product_code_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemProductCodeAudit($item_product_code_id, $item_product_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to add an audit to |
 **item_product_code_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemProductCodeFile**
> addItemProductCodeFile($item_product_code_id, $file_name)

Attach a file to an itemProductCode

Adds a file to an existing itemProductCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemProductCodeFile($item_product_code_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemProductCodeFileByURL**
> addItemProductCodeFileByURL($body, $item_product_code_id)

Attach a file to an itemProductCode by URL.

Adds a file to an existing itemProductCode by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_product_code_id = 56; // int | Id of the itemProductCode to add an file to

try {
    $apiInstance->addItemProductCodeFileByURL($body, $item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_product_code_id** | **int**| Id of the itemProductCode to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemProductCodeTag**
> addItemProductCodeTag($item_product_code_id, $item_product_code_tag)

Add new tags for an itemProductCode.

Adds a tag to an existing itemProductCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to add a tag to
$item_product_code_tag = "item_product_code_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemProductCodeTag($item_product_code_id, $item_product_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->addItemProductCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to add a tag to |
 **item_product_code_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemProductCode**
> deleteItemProductCode($item_product_code_id)

Delete an itemProductCode

Deletes the itemProductCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to be deleted.

try {
    $apiInstance->deleteItemProductCode($item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->deleteItemProductCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemProductCodeFile**
> deleteItemProductCodeFile($item_product_code_id, $file_id)

Delete a file for an itemProductCode.

Deletes an existing itemProductCode file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemProductCodeFile($item_product_code_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->deleteItemProductCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemProductCodeTag**
> deleteItemProductCodeTag($item_product_code_id, $item_product_code_tag)

Delete a tag for an itemProductCode.

Deletes an existing itemProductCode tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to remove tag from
$item_product_code_tag = "item_product_code_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemProductCodeTag($item_product_code_id, $item_product_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->deleteItemProductCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to remove tag from |
 **item_product_code_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemProductCodeById**
> \Infoplus\Infoplus\Model\ItemProductCode getDuplicateItemProductCodeById($item_product_code_id)

Get a duplicated an itemProductCode by id

Returns a duplicated itemProductCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemProductCodeById($item_product_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getDuplicateItemProductCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemProductCode**](../Model/ItemProductCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemProductCodeByFilter**
> \Infoplus\Infoplus\Model\ItemProductCode[] getItemProductCodeByFilter($filter, $page, $limit, $sort)

Search itemProductCodes by filter

Returns the list of itemProductCodes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
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
    $result = $apiInstance->getItemProductCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemProductCode[]**](../Model/ItemProductCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemProductCodeById**
> \Infoplus\Infoplus\Model\ItemProductCode getItemProductCodeById($item_product_code_id)

Get an itemProductCode by id

Returns the itemProductCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to be returned.

try {
    $result = $apiInstance->getItemProductCodeById($item_product_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemProductCode**](../Model/ItemProductCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemProductCodeFiles**
> getItemProductCodeFiles($item_product_code_id)

Get the files for an itemProductCode.

Get all existing itemProductCode files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to get files for

try {
    $apiInstance->getItemProductCodeFiles($item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemProductCodeTags**
> getItemProductCodeTags($item_product_code_id)

Get the tags for an itemProductCode.

Get all existing itemProductCode tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_product_code_id = 56; // int | Id of the itemProductCode to get tags for

try {
    $apiInstance->getItemProductCodeTags($item_product_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->getItemProductCodeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_product_code_id** | **int**| Id of the itemProductCode to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemProductCode**
> updateItemProductCode($body)

Update an itemProductCode

Updates an existing itemProductCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemProductCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemProductCode(); // \Infoplus\Infoplus\Model\ItemProductCode | ItemProductCode to be updated.

try {
    $apiInstance->updateItemProductCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemProductCodeApi->updateItemProductCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemProductCode**](../Model/ItemProductCode.md)| ItemProductCode to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

