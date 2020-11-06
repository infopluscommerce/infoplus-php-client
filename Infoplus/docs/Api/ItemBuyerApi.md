# Infoplus\ItemBuyerApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemBuyer**](ItemBuyerApi.md#addItemBuyer) | **POST** /beta/itemBuyer | Create an itemBuyer
[**addItemBuyerAudit**](ItemBuyerApi.md#addItemBuyerAudit) | **PUT** /beta/itemBuyer/{itemBuyerId}/audit/{itemBuyerAudit} | Add new audit for an itemBuyer
[**addItemBuyerFile**](ItemBuyerApi.md#addItemBuyerFile) | **POST** /beta/itemBuyer/{itemBuyerId}/file/{fileName} | Attach a file to an itemBuyer
[**addItemBuyerFileByURL**](ItemBuyerApi.md#addItemBuyerFileByURL) | **POST** /beta/itemBuyer/{itemBuyerId}/file | Attach a file to an itemBuyer by URL.
[**addItemBuyerTag**](ItemBuyerApi.md#addItemBuyerTag) | **PUT** /beta/itemBuyer/{itemBuyerId}/tag/{itemBuyerTag} | Add new tags for an itemBuyer.
[**deleteItemBuyer**](ItemBuyerApi.md#deleteItemBuyer) | **DELETE** /beta/itemBuyer/{itemBuyerId} | Delete an itemBuyer
[**deleteItemBuyerFile**](ItemBuyerApi.md#deleteItemBuyerFile) | **DELETE** /beta/itemBuyer/{itemBuyerId}/file/{fileId} | Delete a file for an itemBuyer.
[**deleteItemBuyerTag**](ItemBuyerApi.md#deleteItemBuyerTag) | **DELETE** /beta/itemBuyer/{itemBuyerId}/tag/{itemBuyerTag} | Delete a tag for an itemBuyer.
[**getDuplicateItemBuyerById**](ItemBuyerApi.md#getDuplicateItemBuyerById) | **GET** /beta/itemBuyer/duplicate/{itemBuyerId} | Get a duplicated an itemBuyer by id
[**getItemBuyerByFilter**](ItemBuyerApi.md#getItemBuyerByFilter) | **GET** /beta/itemBuyer/search | Search itemBuyers by filter
[**getItemBuyerById**](ItemBuyerApi.md#getItemBuyerById) | **GET** /beta/itemBuyer/{itemBuyerId} | Get an itemBuyer by id
[**getItemBuyerFiles**](ItemBuyerApi.md#getItemBuyerFiles) | **GET** /beta/itemBuyer/{itemBuyerId}/file | Get the files for an itemBuyer.
[**getItemBuyerTags**](ItemBuyerApi.md#getItemBuyerTags) | **GET** /beta/itemBuyer/{itemBuyerId}/tag | Get the tags for an itemBuyer.
[**updateItemBuyer**](ItemBuyerApi.md#updateItemBuyer) | **PUT** /beta/itemBuyer | Update an itemBuyer


# **addItemBuyer**
> \Infoplus\Infoplus\Model\ItemBuyer addItemBuyer($body)

Create an itemBuyer

Inserts a new itemBuyer using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemBuyer(); // \Infoplus\Infoplus\Model\ItemBuyer | ItemBuyer to be inserted.

try {
    $result = $apiInstance->addItemBuyer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemBuyer**](../Model/ItemBuyer.md)| ItemBuyer to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemBuyer**](../Model/ItemBuyer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemBuyerAudit**
> addItemBuyerAudit($item_buyer_id, $item_buyer_audit)

Add new audit for an itemBuyer

Adds an audit to an existing itemBuyer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to add an audit to
$item_buyer_audit = "item_buyer_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemBuyerAudit($item_buyer_id, $item_buyer_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to add an audit to |
 **item_buyer_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemBuyerFile**
> addItemBuyerFile($item_buyer_id, $file_name)

Attach a file to an itemBuyer

Adds a file to an existing itemBuyer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemBuyerFile($item_buyer_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemBuyerFileByURL**
> addItemBuyerFileByURL($body, $item_buyer_id)

Attach a file to an itemBuyer by URL.

Adds a file to an existing itemBuyer by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_buyer_id = 56; // int | Id of the itemBuyer to add an file to

try {
    $apiInstance->addItemBuyerFileByURL($body, $item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_buyer_id** | **int**| Id of the itemBuyer to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemBuyerTag**
> addItemBuyerTag($item_buyer_id, $item_buyer_tag)

Add new tags for an itemBuyer.

Adds a tag to an existing itemBuyer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to add a tag to
$item_buyer_tag = "item_buyer_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemBuyerTag($item_buyer_id, $item_buyer_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to add a tag to |
 **item_buyer_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemBuyer**
> deleteItemBuyer($item_buyer_id)

Delete an itemBuyer

Deletes the itemBuyer identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to be deleted.

try {
    $apiInstance->deleteItemBuyer($item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->deleteItemBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemBuyerFile**
> deleteItemBuyerFile($item_buyer_id, $file_id)

Delete a file for an itemBuyer.

Deletes an existing itemBuyer file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemBuyerFile($item_buyer_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->deleteItemBuyerFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemBuyerTag**
> deleteItemBuyerTag($item_buyer_id, $item_buyer_tag)

Delete a tag for an itemBuyer.

Deletes an existing itemBuyer tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to remove tag from
$item_buyer_tag = "item_buyer_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemBuyerTag($item_buyer_id, $item_buyer_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->deleteItemBuyerTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to remove tag from |
 **item_buyer_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemBuyerById**
> \Infoplus\Infoplus\Model\ItemBuyer getDuplicateItemBuyerById($item_buyer_id)

Get a duplicated an itemBuyer by id

Returns a duplicated itemBuyer identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemBuyerById($item_buyer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getDuplicateItemBuyerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemBuyer**](../Model/ItemBuyer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemBuyerByFilter**
> \Infoplus\Infoplus\Model\ItemBuyer[] getItemBuyerByFilter($filter, $page, $limit, $sort)

Search itemBuyers by filter

Returns the list of itemBuyers that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
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
    $result = $apiInstance->getItemBuyerByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemBuyer[]**](../Model/ItemBuyer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemBuyerById**
> \Infoplus\Infoplus\Model\ItemBuyer getItemBuyerById($item_buyer_id)

Get an itemBuyer by id

Returns the itemBuyer identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to be returned.

try {
    $result = $apiInstance->getItemBuyerById($item_buyer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemBuyer**](../Model/ItemBuyer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemBuyerFiles**
> getItemBuyerFiles($item_buyer_id)

Get the files for an itemBuyer.

Get all existing itemBuyer files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to get files for

try {
    $apiInstance->getItemBuyerFiles($item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemBuyerTags**
> getItemBuyerTags($item_buyer_id)

Get the tags for an itemBuyer.

Get all existing itemBuyer tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_buyer_id = 56; // int | Id of the itemBuyer to get tags for

try {
    $apiInstance->getItemBuyerTags($item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemBuyer**
> updateItemBuyer($body)

Update an itemBuyer

Updates an existing itemBuyer using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemBuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemBuyer(); // \Infoplus\Infoplus\Model\ItemBuyer | ItemBuyer to be updated.

try {
    $apiInstance->updateItemBuyer($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->updateItemBuyer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemBuyer**](../Model/ItemBuyer.md)| ItemBuyer to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

