# Infoplus\ItemLowstockCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemLowstockCode**](ItemLowstockCodeApi.md#addItemLowstockCode) | **POST** /beta/itemLowstockCode | Create an itemLowstockCode
[**addItemLowstockCodeAudit**](ItemLowstockCodeApi.md#addItemLowstockCodeAudit) | **PUT** /beta/itemLowstockCode/{itemLowstockCodeId}/audit/{itemLowstockCodeAudit} | Add new audit for an itemLowstockCode
[**addItemLowstockCodeFile**](ItemLowstockCodeApi.md#addItemLowstockCodeFile) | **POST** /beta/itemLowstockCode/{itemLowstockCodeId}/file/{fileName} | Attach a file to an itemLowstockCode
[**addItemLowstockCodeFileByURL**](ItemLowstockCodeApi.md#addItemLowstockCodeFileByURL) | **POST** /beta/itemLowstockCode/{itemLowstockCodeId}/file | Attach a file to an itemLowstockCode by URL.
[**addItemLowstockCodeTag**](ItemLowstockCodeApi.md#addItemLowstockCodeTag) | **PUT** /beta/itemLowstockCode/{itemLowstockCodeId}/tag/{itemLowstockCodeTag} | Add new tags for an itemLowstockCode.
[**deleteItemLowstockCode**](ItemLowstockCodeApi.md#deleteItemLowstockCode) | **DELETE** /beta/itemLowstockCode/{itemLowstockCodeId} | Delete an itemLowstockCode
[**deleteItemLowstockCodeFile**](ItemLowstockCodeApi.md#deleteItemLowstockCodeFile) | **DELETE** /beta/itemLowstockCode/{itemLowstockCodeId}/file/{fileId} | Delete a file for an itemLowstockCode.
[**deleteItemLowstockCodeTag**](ItemLowstockCodeApi.md#deleteItemLowstockCodeTag) | **DELETE** /beta/itemLowstockCode/{itemLowstockCodeId}/tag/{itemLowstockCodeTag} | Delete a tag for an itemLowstockCode.
[**getDuplicateItemLowstockCodeById**](ItemLowstockCodeApi.md#getDuplicateItemLowstockCodeById) | **GET** /beta/itemLowstockCode/duplicate/{itemLowstockCodeId} | Get a duplicated an itemLowstockCode by id
[**getItemLowstockCodeByFilter**](ItemLowstockCodeApi.md#getItemLowstockCodeByFilter) | **GET** /beta/itemLowstockCode/search | Search itemLowstockCodes by filter
[**getItemLowstockCodeById**](ItemLowstockCodeApi.md#getItemLowstockCodeById) | **GET** /beta/itemLowstockCode/{itemLowstockCodeId} | Get an itemLowstockCode by id
[**getItemLowstockCodeFiles**](ItemLowstockCodeApi.md#getItemLowstockCodeFiles) | **GET** /beta/itemLowstockCode/{itemLowstockCodeId}/file | Get the files for an itemLowstockCode.
[**getItemLowstockCodeTags**](ItemLowstockCodeApi.md#getItemLowstockCodeTags) | **GET** /beta/itemLowstockCode/{itemLowstockCodeId}/tag | Get the tags for an itemLowstockCode.
[**updateItemLowstockCode**](ItemLowstockCodeApi.md#updateItemLowstockCode) | **PUT** /beta/itemLowstockCode | Update an itemLowstockCode


# **addItemLowstockCode**
> \Infoplus\Infoplus\Model\ItemLowstockCode addItemLowstockCode($body)

Create an itemLowstockCode

Inserts a new itemLowstockCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemLowstockCode(); // \Infoplus\Infoplus\Model\ItemLowstockCode | ItemLowstockCode to be inserted.

try {
    $result = $apiInstance->addItemLowstockCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemLowstockCode**](../Model/ItemLowstockCode.md)| ItemLowstockCode to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemLowstockCode**](../Model/ItemLowstockCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemLowstockCodeAudit**
> addItemLowstockCodeAudit($item_lowstock_code_id, $item_lowstock_code_audit)

Add new audit for an itemLowstockCode

Adds an audit to an existing itemLowstockCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to add an audit to
$item_lowstock_code_audit = "item_lowstock_code_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemLowstockCodeAudit($item_lowstock_code_id, $item_lowstock_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCodeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to add an audit to |
 **item_lowstock_code_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemLowstockCodeFile**
> addItemLowstockCodeFile($item_lowstock_code_id, $file_name)

Attach a file to an itemLowstockCode

Adds a file to an existing itemLowstockCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemLowstockCodeFile($item_lowstock_code_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemLowstockCodeFileByURL**
> addItemLowstockCodeFileByURL($body, $item_lowstock_code_id)

Attach a file to an itemLowstockCode by URL.

Adds a file to an existing itemLowstockCode by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to add an file to

try {
    $apiInstance->addItemLowstockCodeFileByURL($body, $item_lowstock_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCodeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemLowstockCodeTag**
> addItemLowstockCodeTag($item_lowstock_code_id, $item_lowstock_code_tag)

Add new tags for an itemLowstockCode.

Adds a tag to an existing itemLowstockCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to add a tag to
$item_lowstock_code_tag = "item_lowstock_code_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemLowstockCodeTag($item_lowstock_code_id, $item_lowstock_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to add a tag to |
 **item_lowstock_code_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemLowstockCode**
> deleteItemLowstockCode($item_lowstock_code_id)

Delete an itemLowstockCode

Deletes the itemLowstockCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be deleted.

try {
    $apiInstance->deleteItemLowstockCode($item_lowstock_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->deleteItemLowstockCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemLowstockCodeFile**
> deleteItemLowstockCodeFile($item_lowstock_code_id, $file_id)

Delete a file for an itemLowstockCode.

Deletes an existing itemLowstockCode file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemLowstockCodeFile($item_lowstock_code_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->deleteItemLowstockCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemLowstockCodeTag**
> deleteItemLowstockCodeTag($item_lowstock_code_id, $item_lowstock_code_tag)

Delete a tag for an itemLowstockCode.

Deletes an existing itemLowstockCode tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to remove tag from
$item_lowstock_code_tag = "item_lowstock_code_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemLowstockCodeTag($item_lowstock_code_id, $item_lowstock_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->deleteItemLowstockCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to remove tag from |
 **item_lowstock_code_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemLowstockCodeById**
> \Infoplus\Infoplus\Model\ItemLowstockCode getDuplicateItemLowstockCodeById($item_lowstock_code_id)

Get a duplicated an itemLowstockCode by id

Returns a duplicated itemLowstockCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemLowstockCodeById($item_lowstock_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getDuplicateItemLowstockCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemLowstockCode**](../Model/ItemLowstockCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemLowstockCodeByFilter**
> \Infoplus\Infoplus\Model\ItemLowstockCode[] getItemLowstockCodeByFilter($filter, $page, $limit, $sort)

Search itemLowstockCodes by filter

Returns the list of itemLowstockCodes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
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
    $result = $apiInstance->getItemLowstockCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemLowstockCode[]**](../Model/ItemLowstockCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemLowstockCodeById**
> \Infoplus\Infoplus\Model\ItemLowstockCode getItemLowstockCodeById($item_lowstock_code_id)

Get an itemLowstockCode by id

Returns the itemLowstockCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be returned.

try {
    $result = $apiInstance->getItemLowstockCodeById($item_lowstock_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemLowstockCode**](../Model/ItemLowstockCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemLowstockCodeFiles**
> getItemLowstockCodeFiles($item_lowstock_code_id)

Get the files for an itemLowstockCode.

Get all existing itemLowstockCode files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to get files for

try {
    $apiInstance->getItemLowstockCodeFiles($item_lowstock_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemLowstockCodeTags**
> getItemLowstockCodeTags($item_lowstock_code_id)

Get the tags for an itemLowstockCode.

Get all existing itemLowstockCode tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to get tags for

try {
    $apiInstance->getItemLowstockCodeTags($item_lowstock_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemLowstockCode**
> updateItemLowstockCode($body)

Update an itemLowstockCode

Updates an existing itemLowstockCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemLowstockCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemLowstockCode(); // \Infoplus\Infoplus\Model\ItemLowstockCode | ItemLowstockCode to be updated.

try {
    $apiInstance->updateItemLowstockCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->updateItemLowstockCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemLowstockCode**](../Model/ItemLowstockCode.md)| ItemLowstockCode to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

