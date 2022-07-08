# Infoplus\ItemSerialApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSerial**](ItemSerialApi.md#addItemSerial) | **POST** /beta/itemSerial | Create an itemSerial
[**addItemSerialAudit**](ItemSerialApi.md#addItemSerialAudit) | **PUT** /beta/itemSerial/{itemSerialId}/audit/{itemSerialAudit} | Add new audit for an itemSerial
[**addItemSerialFile**](ItemSerialApi.md#addItemSerialFile) | **POST** /beta/itemSerial/{itemSerialId}/file/{fileName} | Attach a file to an itemSerial
[**addItemSerialFileByURL**](ItemSerialApi.md#addItemSerialFileByURL) | **POST** /beta/itemSerial/{itemSerialId}/file | Attach a file to an itemSerial by URL.
[**addItemSerialTag**](ItemSerialApi.md#addItemSerialTag) | **PUT** /beta/itemSerial/{itemSerialId}/tag/{itemSerialTag} | Add new tags for an itemSerial.
[**deleteItemSerial**](ItemSerialApi.md#deleteItemSerial) | **DELETE** /beta/itemSerial/{itemSerialId} | Delete an itemSerial
[**deleteItemSerialFile**](ItemSerialApi.md#deleteItemSerialFile) | **DELETE** /beta/itemSerial/{itemSerialId}/file/{fileId} | Delete a file for an itemSerial.
[**deleteItemSerialTag**](ItemSerialApi.md#deleteItemSerialTag) | **DELETE** /beta/itemSerial/{itemSerialId}/tag/{itemSerialTag} | Delete a tag for an itemSerial.
[**getDuplicateItemSerialById**](ItemSerialApi.md#getDuplicateItemSerialById) | **GET** /beta/itemSerial/duplicate/{itemSerialId} | Get a duplicated an itemSerial by id
[**getItemSerialByFilter**](ItemSerialApi.md#getItemSerialByFilter) | **GET** /beta/itemSerial/search | Search itemSerials by filter
[**getItemSerialById**](ItemSerialApi.md#getItemSerialById) | **GET** /beta/itemSerial/{itemSerialId} | Get an itemSerial by id
[**getItemSerialFiles**](ItemSerialApi.md#getItemSerialFiles) | **GET** /beta/itemSerial/{itemSerialId}/file | Get the files for an itemSerial.
[**getItemSerialTags**](ItemSerialApi.md#getItemSerialTags) | **GET** /beta/itemSerial/{itemSerialId}/tag | Get the tags for an itemSerial.
[**updateItemSerial**](ItemSerialApi.md#updateItemSerial) | **PUT** /beta/itemSerial | Update an itemSerial


# **addItemSerial**
> \Infoplus\Infoplus\Model\ItemSerial addItemSerial($body)

Create an itemSerial

Inserts a new itemSerial using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSerial(); // \Infoplus\Infoplus\Model\ItemSerial | ItemSerial to be inserted.

try {
    $result = $apiInstance->addItemSerial($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->addItemSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSerial**](../Model/ItemSerial.md)| ItemSerial to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerial**](../Model/ItemSerial.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialAudit**
> addItemSerialAudit($item_serial_id, $item_serial_audit)

Add new audit for an itemSerial

Adds an audit to an existing itemSerial.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to add an audit to
$item_serial_audit = "item_serial_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemSerialAudit($item_serial_id, $item_serial_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->addItemSerialAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to add an audit to |
 **item_serial_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialFile**
> addItemSerialFile($item_serial_id, $file_name)

Attach a file to an itemSerial

Adds a file to an existing itemSerial.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemSerialFile($item_serial_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->addItemSerialFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialFileByURL**
> addItemSerialFileByURL($body, $item_serial_id)

Attach a file to an itemSerial by URL.

Adds a file to an existing itemSerial by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_serial_id = 56; // int | Id of the itemSerial to add an file to

try {
    $apiInstance->addItemSerialFileByURL($body, $item_serial_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->addItemSerialFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_serial_id** | **int**| Id of the itemSerial to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSerialTag**
> addItemSerialTag($item_serial_id, $item_serial_tag)

Add new tags for an itemSerial.

Adds a tag to an existing itemSerial.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to add a tag to
$item_serial_tag = "item_serial_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemSerialTag($item_serial_id, $item_serial_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->addItemSerialTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to add a tag to |
 **item_serial_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerial**
> deleteItemSerial($item_serial_id)

Delete an itemSerial

Deletes the itemSerial identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to be deleted.

try {
    $apiInstance->deleteItemSerial($item_serial_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->deleteItemSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerialFile**
> deleteItemSerialFile($item_serial_id, $file_id)

Delete a file for an itemSerial.

Deletes an existing itemSerial file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemSerialFile($item_serial_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->deleteItemSerialFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSerialTag**
> deleteItemSerialTag($item_serial_id, $item_serial_tag)

Delete a tag for an itemSerial.

Deletes an existing itemSerial tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to remove tag from
$item_serial_tag = "item_serial_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemSerialTag($item_serial_id, $item_serial_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->deleteItemSerialTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to remove tag from |
 **item_serial_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemSerialById**
> \Infoplus\Infoplus\Model\ItemSerial getDuplicateItemSerialById($item_serial_id)

Get a duplicated an itemSerial by id

Returns a duplicated itemSerial identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemSerialById($item_serial_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->getDuplicateItemSerialById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerial**](../Model/ItemSerial.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialByFilter**
> \Infoplus\Infoplus\Model\ItemSerial[] getItemSerialByFilter($filter, $page, $limit, $sort)

Search itemSerials by filter

Returns the list of itemSerials that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
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
    $result = $apiInstance->getItemSerialByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->getItemSerialByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemSerial[]**](../Model/ItemSerial.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialById**
> \Infoplus\Infoplus\Model\ItemSerial getItemSerialById($item_serial_id)

Get an itemSerial by id

Returns the itemSerial identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to be returned.

try {
    $result = $apiInstance->getItemSerialById($item_serial_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->getItemSerialById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSerial**](../Model/ItemSerial.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialFiles**
> getItemSerialFiles($item_serial_id)

Get the files for an itemSerial.

Get all existing itemSerial files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to get files for

try {
    $apiInstance->getItemSerialFiles($item_serial_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->getItemSerialFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSerialTags**
> getItemSerialTags($item_serial_id)

Get the tags for an itemSerial.

Get all existing itemSerial tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_serial_id = 56; // int | Id of the itemSerial to get tags for

try {
    $apiInstance->getItemSerialTags($item_serial_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->getItemSerialTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_serial_id** | **int**| Id of the itemSerial to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemSerial**
> updateItemSerial($body)

Update an itemSerial

Updates an existing itemSerial using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSerialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSerial(); // \Infoplus\Infoplus\Model\ItemSerial | ItemSerial to be updated.

try {
    $apiInstance->updateItemSerial($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSerialApi->updateItemSerial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSerial**](../Model/ItemSerial.md)| ItemSerial to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

