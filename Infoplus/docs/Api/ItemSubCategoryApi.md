# Infoplus\ItemSubCategoryApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSubCategory**](ItemSubCategoryApi.md#addItemSubCategory) | **POST** /beta/itemSubCategory | Create an itemSubCategory
[**addItemSubCategoryAudit**](ItemSubCategoryApi.md#addItemSubCategoryAudit) | **PUT** /beta/itemSubCategory/{itemSubCategoryId}/audit/{itemSubCategoryAudit} | Add new audit for an itemSubCategory
[**addItemSubCategoryFile**](ItemSubCategoryApi.md#addItemSubCategoryFile) | **POST** /beta/itemSubCategory/{itemSubCategoryId}/file/{fileName} | Attach a file to an itemSubCategory
[**addItemSubCategoryFileByURL**](ItemSubCategoryApi.md#addItemSubCategoryFileByURL) | **POST** /beta/itemSubCategory/{itemSubCategoryId}/file | Attach a file to an itemSubCategory by URL.
[**addItemSubCategoryTag**](ItemSubCategoryApi.md#addItemSubCategoryTag) | **PUT** /beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag} | Add new tags for an itemSubCategory.
[**deleteItemSubCategory**](ItemSubCategoryApi.md#deleteItemSubCategory) | **DELETE** /beta/itemSubCategory/{itemSubCategoryId} | Delete an itemSubCategory
[**deleteItemSubCategoryFile**](ItemSubCategoryApi.md#deleteItemSubCategoryFile) | **DELETE** /beta/itemSubCategory/{itemSubCategoryId}/file/{fileId} | Delete a file for an itemSubCategory.
[**deleteItemSubCategoryTag**](ItemSubCategoryApi.md#deleteItemSubCategoryTag) | **DELETE** /beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag} | Delete a tag for an itemSubCategory.
[**getDuplicateItemSubCategoryById**](ItemSubCategoryApi.md#getDuplicateItemSubCategoryById) | **GET** /beta/itemSubCategory/duplicate/{itemSubCategoryId} | Get a duplicated an itemSubCategory by id
[**getItemSubCategoryByFilter**](ItemSubCategoryApi.md#getItemSubCategoryByFilter) | **GET** /beta/itemSubCategory/search | Search itemSubCategorys by filter
[**getItemSubCategoryById**](ItemSubCategoryApi.md#getItemSubCategoryById) | **GET** /beta/itemSubCategory/{itemSubCategoryId} | Get an itemSubCategory by id
[**getItemSubCategoryFiles**](ItemSubCategoryApi.md#getItemSubCategoryFiles) | **GET** /beta/itemSubCategory/{itemSubCategoryId}/file | Get the files for an itemSubCategory.
[**getItemSubCategoryTags**](ItemSubCategoryApi.md#getItemSubCategoryTags) | **GET** /beta/itemSubCategory/{itemSubCategoryId}/tag | Get the tags for an itemSubCategory.
[**updateItemSubCategory**](ItemSubCategoryApi.md#updateItemSubCategory) | **PUT** /beta/itemSubCategory | Update an itemSubCategory


# **addItemSubCategory**
> \Infoplus\Infoplus\Model\ItemSubCategory addItemSubCategory($body)

Create an itemSubCategory

Inserts a new itemSubCategory using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSubCategory(); // \Infoplus\Infoplus\Model\ItemSubCategory | ItemSubCategory to be inserted.

try {
    $result = $apiInstance->addItemSubCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSubCategory**](../Model/ItemSubCategory.md)| ItemSubCategory to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSubCategory**](../Model/ItemSubCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSubCategoryAudit**
> addItemSubCategoryAudit($item_sub_category_id, $item_sub_category_audit)

Add new audit for an itemSubCategory

Adds an audit to an existing itemSubCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add an audit to
$item_sub_category_audit = "item_sub_category_audit_example"; // string | The audit to add

try {
    $apiInstance->addItemSubCategoryAudit($item_sub_category_id, $item_sub_category_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add an audit to |
 **item_sub_category_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSubCategoryFile**
> addItemSubCategoryFile($item_sub_category_id, $file_name)

Attach a file to an itemSubCategory

Adds a file to an existing itemSubCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addItemSubCategoryFile($item_sub_category_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSubCategoryFileByURL**
> addItemSubCategoryFileByURL($body, $item_sub_category_id)

Attach a file to an itemSubCategory by URL.

Adds a file to an existing itemSubCategory by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add an file to

try {
    $apiInstance->addItemSubCategoryFileByURL($body, $item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemSubCategoryTag**
> addItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)

Add new tags for an itemSubCategory.

Adds a tag to an existing itemSubCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add a tag to
$item_sub_category_tag = "item_sub_category_tag_example"; // string | The tag to add

try {
    $apiInstance->addItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add a tag to |
 **item_sub_category_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSubCategory**
> deleteItemSubCategory($item_sub_category_id)

Delete an itemSubCategory

Deletes the itemSubCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be deleted.

try {
    $apiInstance->deleteItemSubCategory($item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->deleteItemSubCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSubCategoryFile**
> deleteItemSubCategoryFile($item_sub_category_id, $file_id)

Delete a file for an itemSubCategory.

Deletes an existing itemSubCategory file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteItemSubCategoryFile($item_sub_category_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->deleteItemSubCategoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemSubCategoryTag**
> deleteItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)

Delete a tag for an itemSubCategory.

Deletes an existing itemSubCategory tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to remove tag from
$item_sub_category_tag = "item_sub_category_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->deleteItemSubCategoryTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to remove tag from |
 **item_sub_category_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateItemSubCategoryById**
> \Infoplus\Infoplus\Model\ItemSubCategory getDuplicateItemSubCategoryById($item_sub_category_id)

Get a duplicated an itemSubCategory by id

Returns a duplicated itemSubCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be duplicated.

try {
    $result = $apiInstance->getDuplicateItemSubCategoryById($item_sub_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getDuplicateItemSubCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSubCategory**](../Model/ItemSubCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSubCategoryByFilter**
> \Infoplus\Infoplus\Model\ItemSubCategory[] getItemSubCategoryByFilter($filter, $page, $limit, $sort)

Search itemSubCategorys by filter

Returns the list of itemSubCategorys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
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
    $result = $apiInstance->getItemSubCategoryByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ItemSubCategory[]**](../Model/ItemSubCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSubCategoryById**
> \Infoplus\Infoplus\Model\ItemSubCategory getItemSubCategoryById($item_sub_category_id)

Get an itemSubCategory by id

Returns the itemSubCategory identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be returned.

try {
    $result = $apiInstance->getItemSubCategoryById($item_sub_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ItemSubCategory**](../Model/ItemSubCategory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSubCategoryFiles**
> getItemSubCategoryFiles($item_sub_category_id)

Get the files for an itemSubCategory.

Get all existing itemSubCategory files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to get files for

try {
    $apiInstance->getItemSubCategoryFiles($item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemSubCategoryTags**
> getItemSubCategoryTags($item_sub_category_id)

Get the tags for an itemSubCategory.

Get all existing itemSubCategory tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_sub_category_id = 56; // int | Id of the itemSubCategory to get tags for

try {
    $apiInstance->getItemSubCategoryTags($item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemSubCategory**
> updateItemSubCategory($body)

Update an itemSubCategory

Updates an existing itemSubCategory using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ItemSubCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ItemSubCategory(); // \Infoplus\Infoplus\Model\ItemSubCategory | ItemSubCategory to be updated.

try {
    $apiInstance->updateItemSubCategory($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->updateItemSubCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ItemSubCategory**](../Model/ItemSubCategory.md)| ItemSubCategory to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

