# Infoplus\ItemCategoryApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemCategory**](ItemCategoryApi.md#addItemCategory) | **POST** /beta/itemCategory | Create an itemCategory
[**addItemCategoryAudit**](ItemCategoryApi.md#addItemCategoryAudit) | **PUT** /beta/itemCategory/{itemCategoryId}/audit/{itemCategoryAudit} | Add new audit for an itemCategory
[**addItemCategoryFile**](ItemCategoryApi.md#addItemCategoryFile) | **POST** /beta/itemCategory/{itemCategoryId}/file/{fileName} | Attach a file to an itemCategory
[**addItemCategoryFileByURL**](ItemCategoryApi.md#addItemCategoryFileByURL) | **POST** /beta/itemCategory/{itemCategoryId}/file | Attach a file to an itemCategory by URL.
[**addItemCategoryTag**](ItemCategoryApi.md#addItemCategoryTag) | **PUT** /beta/itemCategory/{itemCategoryId}/tag/{itemCategoryTag} | Add new tags for an itemCategory.
[**deleteItemCategory**](ItemCategoryApi.md#deleteItemCategory) | **DELETE** /beta/itemCategory/{itemCategoryId} | Delete an itemCategory
[**deleteItemCategoryFile**](ItemCategoryApi.md#deleteItemCategoryFile) | **DELETE** /beta/itemCategory/{itemCategoryId}/file/{fileId} | Delete a file for an itemCategory.
[**deleteItemCategoryTag**](ItemCategoryApi.md#deleteItemCategoryTag) | **DELETE** /beta/itemCategory/{itemCategoryId}/tag/{itemCategoryTag} | Delete a tag for an itemCategory.
[**getDuplicateItemCategoryById**](ItemCategoryApi.md#getDuplicateItemCategoryById) | **GET** /beta/itemCategory/duplicate/{itemCategoryId} | Get a duplicated an itemCategory by id
[**getItemCategoryByFilter**](ItemCategoryApi.md#getItemCategoryByFilter) | **GET** /beta/itemCategory/search | Search itemCategorys by filter
[**getItemCategoryById**](ItemCategoryApi.md#getItemCategoryById) | **GET** /beta/itemCategory/{itemCategoryId} | Get an itemCategory by id
[**getItemCategoryFiles**](ItemCategoryApi.md#getItemCategoryFiles) | **GET** /beta/itemCategory/{itemCategoryId}/file | Get the files for an itemCategory.
[**getItemCategoryTags**](ItemCategoryApi.md#getItemCategoryTags) | **GET** /beta/itemCategory/{itemCategoryId}/tag | Get the tags for an itemCategory.
[**updateItemCategory**](ItemCategoryApi.md#updateItemCategory) | **PUT** /beta/itemCategory | Update an itemCategory


# **addItemCategory**
> \Infoplus\Infoplus\Model\ItemCategory addItemCategory($body)

Create an itemCategory

Inserts a new itemCategory using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemCategory(); // \Infoplus\Infoplus\Model\ItemCategory | ItemCategory to be inserted.

try {
    $result = $apiInstance->addItemCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemCategory**](../Model/ItemCategory.md)| ItemCategory to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemCategoryAudit**
> addItemCategoryAudit($item_category_id, $item_category_audit)

Add new audit for an itemCategory

Adds an audit to an existing itemCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to add an audit to
$item_category_audit = "item_category_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemCategoryAudit($item_category_id, $item_category_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to add an audit to |
 **item_category_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemCategoryFile**
> addItemCategoryFile($item_category_id, $file_name)

Attach a file to an itemCategory

Adds a file to an existing itemCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemCategoryFile($item_category_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemCategoryFileByURL**
> addItemCategoryFileByURL($body, $item_category_id)

Attach a file to an itemCategory by URL.

Adds a file to an existing itemCategory by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_category_id = 56; // int | Id of the itemCategory to add an file to

try {
    $apiInstance->addItemCategoryFileByURL($body, $item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_category_id** | **int**| Id of the itemCategory to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemCategoryTag**
> addItemCategoryTag($item_category_id, $item_category_tag)

Add new tags for an itemCategory.

Adds a tag to an existing itemCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to add a tag to
$item_category_tag = "item_category_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemCategoryTag($item_category_id, $item_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to add a tag to |
 **item_category_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemCategory**
> deleteItemCategory($item_category_id)

Delete an itemCategory

Deletes the itemCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to be deleted.

try {
    $apiInstance->deleteItemCategory($item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemCategoryFile**
> deleteItemCategoryFile($item_category_id, $file_id)

Delete a file for an itemCategory.

Deletes an existing itemCategory file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemCategoryFile($item_category_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemCategoryTag**
> deleteItemCategoryTag($item_category_id, $item_category_tag)

Delete a tag for an itemCategory.

Deletes an existing itemCategory tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to remove tag from
$item_category_tag = "item_category_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemCategoryTag($item_category_id, $item_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to remove tag from |
 **item_category_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemCategoryById**
> \Infoplus\Infoplus\Model\ItemCategory getDuplicateItemCategoryById($item_category_id)

Get a duplicated an itemCategory by id

Returns a duplicated itemCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemCategoryById($item_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getDuplicateItemCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemCategoryByFilter**
> \Infoplus\Infoplus\Model\ItemCategory[] getItemCategoryByFilter($filter, $page, $limit, $sort)

Search itemCategorys by filter

Returns the list of itemCategorys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
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
    $result = $apiInstance->getItemCategoryByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemCategory[]**](../Model/ItemCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemCategoryById**
> \Infoplus\Infoplus\Model\ItemCategory getItemCategoryById($item_category_id)

Get an itemCategory by id

Returns the itemCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to be returned.

try {
    $result = $apiInstance->getItemCategoryById($item_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemCategory**](../Model/ItemCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemCategoryFiles**
> getItemCategoryFiles($item_category_id)

Get the files for an itemCategory.

Get all existing itemCategory files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to get files for

try {
    $apiInstance->getItemCategoryFiles($item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemCategoryTags**
> getItemCategoryTags($item_category_id)

Get the tags for an itemCategory.

Get all existing itemCategory tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_category_id = 56; // int | Id of the itemCategory to get tags for

try {
    $apiInstance->getItemCategoryTags($item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemCategory**
> updateItemCategory($body)

Update an itemCategory

Updates an existing itemCategory using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemCategory(); // \Infoplus\Infoplus\Model\ItemCategory | ItemCategory to be updated.

try {
    $apiInstance->updateItemCategory($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->updateItemCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemCategory**](../Model/ItemCategory.md)| ItemCategory to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

