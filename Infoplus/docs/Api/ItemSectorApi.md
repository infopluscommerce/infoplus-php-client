# Infoplus\ItemSectorApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSector**](ItemSectorApi.md#addItemSector) | **POST** /beta/itemSector | Create an itemSector
[**addItemSectorAudit**](ItemSectorApi.md#addItemSectorAudit) | **PUT** /beta/itemSector/{itemSectorId}/audit/{itemSectorAudit} | Add new audit for an itemSector
[**addItemSectorFile**](ItemSectorApi.md#addItemSectorFile) | **POST** /beta/itemSector/{itemSectorId}/file/{fileName} | Attach a file to an itemSector
[**addItemSectorFileByURL**](ItemSectorApi.md#addItemSectorFileByURL) | **POST** /beta/itemSector/{itemSectorId}/file | Attach a file to an itemSector by URL.
[**addItemSectorTag**](ItemSectorApi.md#addItemSectorTag) | **PUT** /beta/itemSector/{itemSectorId}/tag/{itemSectorTag} | Add new tags for an itemSector.
[**deleteItemSector**](ItemSectorApi.md#deleteItemSector) | **DELETE** /beta/itemSector/{itemSectorId} | Delete an itemSector
[**deleteItemSectorFile**](ItemSectorApi.md#deleteItemSectorFile) | **DELETE** /beta/itemSector/{itemSectorId}/file/{fileId} | Delete a file for an itemSector.
[**deleteItemSectorTag**](ItemSectorApi.md#deleteItemSectorTag) | **DELETE** /beta/itemSector/{itemSectorId}/tag/{itemSectorTag} | Delete a tag for an itemSector.
[**getDuplicateItemSectorById**](ItemSectorApi.md#getDuplicateItemSectorById) | **GET** /beta/itemSector/duplicate/{itemSectorId} | Get a duplicated an itemSector by id
[**getItemSectorByFilter**](ItemSectorApi.md#getItemSectorByFilter) | **GET** /beta/itemSector/search | Search itemSectors by filter
[**getItemSectorById**](ItemSectorApi.md#getItemSectorById) | **GET** /beta/itemSector/{itemSectorId} | Get an itemSector by id
[**getItemSectorFiles**](ItemSectorApi.md#getItemSectorFiles) | **GET** /beta/itemSector/{itemSectorId}/file | Get the files for an itemSector.
[**getItemSectorTags**](ItemSectorApi.md#getItemSectorTags) | **GET** /beta/itemSector/{itemSectorId}/tag | Get the tags for an itemSector.
[**updateItemSector**](ItemSectorApi.md#updateItemSector) | **PUT** /beta/itemSector | Update an itemSector


# **addItemSector**
> \Infoplus\Infoplus\Model\ItemSector addItemSector($body)

Create an itemSector

Inserts a new itemSector using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSector(); // \Infoplus\Infoplus\Model\ItemSector | ItemSector to be inserted.

try {
    $result = $apiInstance->addItemSector($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSector**](../Model/ItemSector.md)| ItemSector to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSector**](../Model/ItemSector.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSectorAudit**
> addItemSectorAudit($item_sector_id, $item_sector_audit)

Add new audit for an itemSector

Adds an audit to an existing itemSector.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to add an audit to
$item_sector_audit = "item_sector_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemSectorAudit($item_sector_id, $item_sector_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSectorAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to add an audit to |
 **item_sector_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSectorFile**
> addItemSectorFile($item_sector_id, $file_name)

Attach a file to an itemSector

Adds a file to an existing itemSector.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemSectorFile($item_sector_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSectorFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSectorFileByURL**
> addItemSectorFileByURL($body, $item_sector_id)

Attach a file to an itemSector by URL.

Adds a file to an existing itemSector by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_sector_id = 56; // int | Id of the itemSector to add an file to

try {
    $apiInstance->addItemSectorFileByURL($body, $item_sector_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSectorFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_sector_id** | **int**| Id of the itemSector to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSectorTag**
> addItemSectorTag($item_sector_id, $item_sector_tag)

Add new tags for an itemSector.

Adds a tag to an existing itemSector.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to add a tag to
$item_sector_tag = "item_sector_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemSectorTag($item_sector_id, $item_sector_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSectorTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to add a tag to |
 **item_sector_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSector**
> deleteItemSector($item_sector_id)

Delete an itemSector

Deletes the itemSector identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to be deleted.

try {
    $apiInstance->deleteItemSector($item_sector_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->deleteItemSector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSectorFile**
> deleteItemSectorFile($item_sector_id, $file_id)

Delete a file for an itemSector.

Deletes an existing itemSector file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemSectorFile($item_sector_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->deleteItemSectorFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSectorTag**
> deleteItemSectorTag($item_sector_id, $item_sector_tag)

Delete a tag for an itemSector.

Deletes an existing itemSector tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to remove tag from
$item_sector_tag = "item_sector_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemSectorTag($item_sector_id, $item_sector_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->deleteItemSectorTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to remove tag from |
 **item_sector_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemSectorById**
> \Infoplus\Infoplus\Model\ItemSector getDuplicateItemSectorById($item_sector_id)

Get a duplicated an itemSector by id

Returns a duplicated itemSector identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemSectorById($item_sector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getDuplicateItemSectorById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSector**](../Model/ItemSector.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSectorByFilter**
> \Infoplus\Infoplus\Model\ItemSector[] getItemSectorByFilter($filter, $page, $limit, $sort)

Search itemSectors by filter

Returns the list of itemSectors that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
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
    $result = $apiInstance->getItemSectorByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemSector[]**](../Model/ItemSector.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSectorById**
> \Infoplus\Infoplus\Model\ItemSector getItemSectorById($item_sector_id)

Get an itemSector by id

Returns the itemSector identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to be returned.

try {
    $result = $apiInstance->getItemSectorById($item_sector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSector**](../Model/ItemSector.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSectorFiles**
> getItemSectorFiles($item_sector_id)

Get the files for an itemSector.

Get all existing itemSector files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to get files for

try {
    $apiInstance->getItemSectorFiles($item_sector_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSectorTags**
> getItemSectorTags($item_sector_id)

Get the tags for an itemSector.

Get all existing itemSector tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sector_id = 56; // int | Id of the itemSector to get tags for

try {
    $apiInstance->getItemSectorTags($item_sector_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemSector**
> updateItemSector($body)

Update an itemSector

Updates an existing itemSector using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSector(); // \Infoplus\Infoplus\Model\ItemSector | ItemSector to be updated.

try {
    $apiInstance->updateItemSector($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->updateItemSector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSector**](../Model/ItemSector.md)| ItemSector to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

