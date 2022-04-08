# Infoplus\ItemSerialSchemeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSerialScheme**](ItemSerialSchemeApi.md#addItemSerialScheme) | **POST** /beta/itemSerialScheme | Create an itemSerialScheme
[**addItemSerialSchemeAudit**](ItemSerialSchemeApi.md#addItemSerialSchemeAudit) | **PUT** /beta/itemSerialScheme/{itemSerialSchemeId}/audit/{itemSerialSchemeAudit} | Add new audit for an itemSerialScheme
[**addItemSerialSchemeFile**](ItemSerialSchemeApi.md#addItemSerialSchemeFile) | **POST** /beta/itemSerialScheme/{itemSerialSchemeId}/file/{fileName} | Attach a file to an itemSerialScheme
[**addItemSerialSchemeFileByURL**](ItemSerialSchemeApi.md#addItemSerialSchemeFileByURL) | **POST** /beta/itemSerialScheme/{itemSerialSchemeId}/file | Attach a file to an itemSerialScheme by URL.
[**addItemSerialSchemeTag**](ItemSerialSchemeApi.md#addItemSerialSchemeTag) | **PUT** /beta/itemSerialScheme/{itemSerialSchemeId}/tag/{itemSerialSchemeTag} | Add new tags for an itemSerialScheme.
[**deleteItemSerialScheme**](ItemSerialSchemeApi.md#deleteItemSerialScheme) | **DELETE** /beta/itemSerialScheme/{itemSerialSchemeId} | Delete an itemSerialScheme
[**deleteItemSerialSchemeFile**](ItemSerialSchemeApi.md#deleteItemSerialSchemeFile) | **DELETE** /beta/itemSerialScheme/{itemSerialSchemeId}/file/{fileId} | Delete a file for an itemSerialScheme.
[**deleteItemSerialSchemeTag**](ItemSerialSchemeApi.md#deleteItemSerialSchemeTag) | **DELETE** /beta/itemSerialScheme/{itemSerialSchemeId}/tag/{itemSerialSchemeTag} | Delete a tag for an itemSerialScheme.
[**getDuplicateItemSerialSchemeById**](ItemSerialSchemeApi.md#getDuplicateItemSerialSchemeById) | **GET** /beta/itemSerialScheme/duplicate/{itemSerialSchemeId} | Get a duplicated an itemSerialScheme by id
[**getItemSerialSchemeByFilter**](ItemSerialSchemeApi.md#getItemSerialSchemeByFilter) | **GET** /beta/itemSerialScheme/search | Search itemSerialSchemes by filter
[**getItemSerialSchemeById**](ItemSerialSchemeApi.md#getItemSerialSchemeById) | **GET** /beta/itemSerialScheme/{itemSerialSchemeId} | Get an itemSerialScheme by id
[**getItemSerialSchemeFiles**](ItemSerialSchemeApi.md#getItemSerialSchemeFiles) | **GET** /beta/itemSerialScheme/{itemSerialSchemeId}/file | Get the files for an itemSerialScheme.
[**getItemSerialSchemeTags**](ItemSerialSchemeApi.md#getItemSerialSchemeTags) | **GET** /beta/itemSerialScheme/{itemSerialSchemeId}/tag | Get the tags for an itemSerialScheme.
[**updateItemSerialScheme**](ItemSerialSchemeApi.md#updateItemSerialScheme) | **PUT** /beta/itemSerialScheme | Update an itemSerialScheme


# **addItemSerialScheme**
> \Infoplus\Infoplus\Model\ItemSerialScheme addItemSerialScheme($body)

Create an itemSerialScheme

Inserts a new itemSerialScheme using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSerialScheme(); // \Infoplus\Infoplus\Model\ItemSerialScheme | ItemSerialScheme to be inserted.

try {
    $result = $apiInstance->addItemSerialScheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->addItemSerialScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSerialScheme**](../Model/ItemSerialScheme.md)| ItemSerialScheme to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerialScheme**](../Model/ItemSerialScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialSchemeAudit**
> addItemSerialSchemeAudit($item_serial_scheme_id, $item_serial_scheme_audit)

Add new audit for an itemSerialScheme

Adds an audit to an existing itemSerialScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to add an audit to
$item_serial_scheme_audit = "item_serial_scheme_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemSerialSchemeAudit($item_serial_scheme_id, $item_serial_scheme_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->addItemSerialSchemeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to add an audit to |
 **item_serial_scheme_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialSchemeFile**
> addItemSerialSchemeFile($item_serial_scheme_id, $file_name)

Attach a file to an itemSerialScheme

Adds a file to an existing itemSerialScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemSerialSchemeFile($item_serial_scheme_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->addItemSerialSchemeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialSchemeFileByURL**
> addItemSerialSchemeFileByURL($body, $item_serial_scheme_id)

Attach a file to an itemSerialScheme by URL.

Adds a file to an existing itemSerialScheme by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to add an file to

try {
    $apiInstance->addItemSerialSchemeFileByURL($body, $item_serial_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->addItemSerialSchemeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialSchemeTag**
> addItemSerialSchemeTag($item_serial_scheme_id, $item_serial_scheme_tag)

Add new tags for an itemSerialScheme.

Adds a tag to an existing itemSerialScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to add a tag to
$item_serial_scheme_tag = "item_serial_scheme_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemSerialSchemeTag($item_serial_scheme_id, $item_serial_scheme_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->addItemSerialSchemeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to add a tag to |
 **item_serial_scheme_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerialScheme**
> deleteItemSerialScheme($item_serial_scheme_id)

Delete an itemSerialScheme

Deletes the itemSerialScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to be deleted.

try {
    $apiInstance->deleteItemSerialScheme($item_serial_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->deleteItemSerialScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerialSchemeFile**
> deleteItemSerialSchemeFile($item_serial_scheme_id, $file_id)

Delete a file for an itemSerialScheme.

Deletes an existing itemSerialScheme file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemSerialSchemeFile($item_serial_scheme_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->deleteItemSerialSchemeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerialSchemeTag**
> deleteItemSerialSchemeTag($item_serial_scheme_id, $item_serial_scheme_tag)

Delete a tag for an itemSerialScheme.

Deletes an existing itemSerialScheme tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to remove tag from
$item_serial_scheme_tag = "item_serial_scheme_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemSerialSchemeTag($item_serial_scheme_id, $item_serial_scheme_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->deleteItemSerialSchemeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to remove tag from |
 **item_serial_scheme_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemSerialSchemeById**
> \Infoplus\Infoplus\Model\ItemSerialScheme getDuplicateItemSerialSchemeById($item_serial_scheme_id)

Get a duplicated an itemSerialScheme by id

Returns a duplicated itemSerialScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemSerialSchemeById($item_serial_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->getDuplicateItemSerialSchemeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerialScheme**](../Model/ItemSerialScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialSchemeByFilter**
> \Infoplus\Infoplus\Model\ItemSerialScheme[] getItemSerialSchemeByFilter($filter, $page, $limit, $sort)

Search itemSerialSchemes by filter

Returns the list of itemSerialSchemes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
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
    $result = $apiInstance->getItemSerialSchemeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->getItemSerialSchemeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemSerialScheme[]**](../Model/ItemSerialScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialSchemeById**
> \Infoplus\Infoplus\Model\ItemSerialScheme getItemSerialSchemeById($item_serial_scheme_id)

Get an itemSerialScheme by id

Returns the itemSerialScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to be returned.

try {
    $result = $apiInstance->getItemSerialSchemeById($item_serial_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->getItemSerialSchemeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerialScheme**](../Model/ItemSerialScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialSchemeFiles**
> getItemSerialSchemeFiles($item_serial_scheme_id)

Get the files for an itemSerialScheme.

Get all existing itemSerialScheme files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to get files for

try {
    $apiInstance->getItemSerialSchemeFiles($item_serial_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->getItemSerialSchemeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialSchemeTags**
> getItemSerialSchemeTags($item_serial_scheme_id)

Get the tags for an itemSerialScheme.

Get all existing itemSerialScheme tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_scheme_id = 56; // int | Id of the itemSerialScheme to get tags for

try {
    $apiInstance->getItemSerialSchemeTags($item_serial_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->getItemSerialSchemeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_scheme_id** | **int**| Id of the itemSerialScheme to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemSerialScheme**
> updateItemSerialScheme($body)

Update an itemSerialScheme

Updates an existing itemSerialScheme using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSerialScheme(); // \Infoplus\Infoplus\Model\ItemSerialScheme | ItemSerialScheme to be updated.

try {
    $apiInstance->updateItemSerialScheme($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialSchemeApi->updateItemSerialScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSerialScheme**](../Model/ItemSerialScheme.md)| ItemSerialScheme to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

