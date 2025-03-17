# Infoplus\ItemAccountCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemAccountCode**](ItemAccountCodeApi.md#addItemAccountCode) | **POST** /beta/itemAccountCode | Create an itemAccountCode
[**addItemAccountCodeAudit**](ItemAccountCodeApi.md#addItemAccountCodeAudit) | **PUT** /beta/itemAccountCode/{itemAccountCodeId}/audit/{itemAccountCodeAudit} | Add new audit for an itemAccountCode
[**addItemAccountCodeFile**](ItemAccountCodeApi.md#addItemAccountCodeFile) | **POST** /beta/itemAccountCode/{itemAccountCodeId}/file/{fileName} | Attach a file to an itemAccountCode
[**addItemAccountCodeFileByURL**](ItemAccountCodeApi.md#addItemAccountCodeFileByURL) | **POST** /beta/itemAccountCode/{itemAccountCodeId}/file | Attach a file to an itemAccountCode by URL.
[**addItemAccountCodeTag**](ItemAccountCodeApi.md#addItemAccountCodeTag) | **PUT** /beta/itemAccountCode/{itemAccountCodeId}/tag/{itemAccountCodeTag} | Add new tags for an itemAccountCode.
[**deleteItemAccountCode**](ItemAccountCodeApi.md#deleteItemAccountCode) | **DELETE** /beta/itemAccountCode/{itemAccountCodeId} | Delete an itemAccountCode
[**deleteItemAccountCodeFile**](ItemAccountCodeApi.md#deleteItemAccountCodeFile) | **DELETE** /beta/itemAccountCode/{itemAccountCodeId}/file/{fileId} | Delete a file for an itemAccountCode.
[**deleteItemAccountCodeTag**](ItemAccountCodeApi.md#deleteItemAccountCodeTag) | **DELETE** /beta/itemAccountCode/{itemAccountCodeId}/tag/{itemAccountCodeTag} | Delete a tag for an itemAccountCode.
[**getDuplicateItemAccountCodeById**](ItemAccountCodeApi.md#getDuplicateItemAccountCodeById) | **GET** /beta/itemAccountCode/duplicate/{itemAccountCodeId} | Get a duplicated an itemAccountCode by id
[**getItemAccountCodeByFilter**](ItemAccountCodeApi.md#getItemAccountCodeByFilter) | **GET** /beta/itemAccountCode/search | Search itemAccountCodes by filter
[**getItemAccountCodeById**](ItemAccountCodeApi.md#getItemAccountCodeById) | **GET** /beta/itemAccountCode/{itemAccountCodeId} | Get an itemAccountCode by id
[**getItemAccountCodeFiles**](ItemAccountCodeApi.md#getItemAccountCodeFiles) | **GET** /beta/itemAccountCode/{itemAccountCodeId}/file | Get the files for an itemAccountCode.
[**getItemAccountCodeTags**](ItemAccountCodeApi.md#getItemAccountCodeTags) | **GET** /beta/itemAccountCode/{itemAccountCodeId}/tag | Get the tags for an itemAccountCode.
[**updateItemAccountCode**](ItemAccountCodeApi.md#updateItemAccountCode) | **PUT** /beta/itemAccountCode | Update an itemAccountCode


# **addItemAccountCode**
> \Infoplus\Infoplus\Model\ItemAccountCode addItemAccountCode($body)

Create an itemAccountCode

Inserts a new itemAccountCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemAccountCode(); // \Infoplus\Infoplus\Model\ItemAccountCode | ItemAccountCode to be inserted.

try {
    $result = $apiInstance->addItemAccountCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->addItemAccountCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemAccountCode**](../Model/ItemAccountCode.md)| ItemAccountCode to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemAccountCode**](../Model/ItemAccountCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemAccountCodeAudit**
> addItemAccountCodeAudit($item_account_code_id, $item_account_code_audit)

Add new audit for an itemAccountCode

Adds an audit to an existing itemAccountCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to add an audit to
$item_account_code_audit = "item_account_code_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemAccountCodeAudit($item_account_code_id, $item_account_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->addItemAccountCodeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to add an audit to |
 **item_account_code_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemAccountCodeFile**
> addItemAccountCodeFile($item_account_code_id, $file_name)

Attach a file to an itemAccountCode

Adds a file to an existing itemAccountCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemAccountCodeFile($item_account_code_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->addItemAccountCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemAccountCodeFileByURL**
> addItemAccountCodeFileByURL($body, $item_account_code_id)

Attach a file to an itemAccountCode by URL.

Adds a file to an existing itemAccountCode by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_account_code_id = 56; // int | Id of the itemAccountCode to add an file to

try {
    $apiInstance->addItemAccountCodeFileByURL($body, $item_account_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->addItemAccountCodeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_account_code_id** | **int**| Id of the itemAccountCode to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemAccountCodeTag**
> addItemAccountCodeTag($item_account_code_id, $item_account_code_tag)

Add new tags for an itemAccountCode.

Adds a tag to an existing itemAccountCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to add a tag to
$item_account_code_tag = "item_account_code_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemAccountCodeTag($item_account_code_id, $item_account_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->addItemAccountCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to add a tag to |
 **item_account_code_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemAccountCode**
> deleteItemAccountCode($item_account_code_id)

Delete an itemAccountCode

Deletes the itemAccountCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to be deleted.

try {
    $apiInstance->deleteItemAccountCode($item_account_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->deleteItemAccountCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemAccountCodeFile**
> deleteItemAccountCodeFile($item_account_code_id, $file_id)

Delete a file for an itemAccountCode.

Deletes an existing itemAccountCode file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemAccountCodeFile($item_account_code_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->deleteItemAccountCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemAccountCodeTag**
> deleteItemAccountCodeTag($item_account_code_id, $item_account_code_tag)

Delete a tag for an itemAccountCode.

Deletes an existing itemAccountCode tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to remove tag from
$item_account_code_tag = "item_account_code_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemAccountCodeTag($item_account_code_id, $item_account_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->deleteItemAccountCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to remove tag from |
 **item_account_code_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemAccountCodeById**
> \Infoplus\Infoplus\Model\ItemAccountCode getDuplicateItemAccountCodeById($item_account_code_id)

Get a duplicated an itemAccountCode by id

Returns a duplicated itemAccountCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemAccountCodeById($item_account_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->getDuplicateItemAccountCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemAccountCode**](../Model/ItemAccountCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemAccountCodeByFilter**
> \Infoplus\Infoplus\Model\ItemAccountCode[] getItemAccountCodeByFilter($filter, $page, $limit, $sort)

Search itemAccountCodes by filter

Returns the list of itemAccountCodes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
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
    $result = $apiInstance->getItemAccountCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->getItemAccountCodeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemAccountCode[]**](../Model/ItemAccountCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemAccountCodeById**
> \Infoplus\Infoplus\Model\ItemAccountCode getItemAccountCodeById($item_account_code_id)

Get an itemAccountCode by id

Returns the itemAccountCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to be returned.

try {
    $result = $apiInstance->getItemAccountCodeById($item_account_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->getItemAccountCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemAccountCode**](../Model/ItemAccountCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemAccountCodeFiles**
> getItemAccountCodeFiles($item_account_code_id)

Get the files for an itemAccountCode.

Get all existing itemAccountCode files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to get files for

try {
    $apiInstance->getItemAccountCodeFiles($item_account_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->getItemAccountCodeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemAccountCodeTags**
> getItemAccountCodeTags($item_account_code_id)

Get the tags for an itemAccountCode.

Get all existing itemAccountCode tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_account_code_id = 56; // int | Id of the itemAccountCode to get tags for

try {
    $apiInstance->getItemAccountCodeTags($item_account_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->getItemAccountCodeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_account_code_id** | **int**| Id of the itemAccountCode to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemAccountCode**
> updateItemAccountCode($body)

Update an itemAccountCode

Updates an existing itemAccountCode using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemAccountCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemAccountCode(); // \Infoplus\Infoplus\Model\ItemAccountCode | ItemAccountCode to be updated.

try {
    $apiInstance->updateItemAccountCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemAccountCodeApi->updateItemAccountCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemAccountCode**](../Model/ItemAccountCode.md)| ItemAccountCode to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

