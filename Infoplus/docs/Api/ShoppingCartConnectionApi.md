# Infoplus\ShoppingCartConnectionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addShoppingCartConnection**](ShoppingCartConnectionApi.md#addShoppingCartConnection) | **POST** /beta/shoppingCartConnection | Create a shoppingCartConnection
[**addShoppingCartConnectionAudit**](ShoppingCartConnectionApi.md#addShoppingCartConnectionAudit) | **PUT** /beta/shoppingCartConnection/{shoppingCartConnectionId}/audit/{shoppingCartConnectionAudit} | Add new audit for a shoppingCartConnection
[**addShoppingCartConnectionFile**](ShoppingCartConnectionApi.md#addShoppingCartConnectionFile) | **POST** /beta/shoppingCartConnection/{shoppingCartConnectionId}/file/{fileName} | Attach a file to a shoppingCartConnection
[**addShoppingCartConnectionFileByURL**](ShoppingCartConnectionApi.md#addShoppingCartConnectionFileByURL) | **POST** /beta/shoppingCartConnection/{shoppingCartConnectionId}/file | Attach a file to a shoppingCartConnection by URL.
[**addShoppingCartConnectionTag**](ShoppingCartConnectionApi.md#addShoppingCartConnectionTag) | **PUT** /beta/shoppingCartConnection/{shoppingCartConnectionId}/tag/{shoppingCartConnectionTag} | Add new tags for a shoppingCartConnection.
[**deleteShoppingCartConnection**](ShoppingCartConnectionApi.md#deleteShoppingCartConnection) | **DELETE** /beta/shoppingCartConnection/{shoppingCartConnectionId} | Delete a shoppingCartConnection
[**deleteShoppingCartConnectionFile**](ShoppingCartConnectionApi.md#deleteShoppingCartConnectionFile) | **DELETE** /beta/shoppingCartConnection/{shoppingCartConnectionId}/file/{fileId} | Delete a file for a shoppingCartConnection.
[**deleteShoppingCartConnectionTag**](ShoppingCartConnectionApi.md#deleteShoppingCartConnectionTag) | **DELETE** /beta/shoppingCartConnection/{shoppingCartConnectionId}/tag/{shoppingCartConnectionTag} | Delete a tag for a shoppingCartConnection.
[**getDuplicateShoppingCartConnectionById**](ShoppingCartConnectionApi.md#getDuplicateShoppingCartConnectionById) | **GET** /beta/shoppingCartConnection/duplicate/{shoppingCartConnectionId} | Get a duplicated a shoppingCartConnection by id
[**getShoppingCartConnectionByFilter**](ShoppingCartConnectionApi.md#getShoppingCartConnectionByFilter) | **GET** /beta/shoppingCartConnection/search | Search shoppingCartConnections by filter
[**getShoppingCartConnectionById**](ShoppingCartConnectionApi.md#getShoppingCartConnectionById) | **GET** /beta/shoppingCartConnection/{shoppingCartConnectionId} | Get a shoppingCartConnection by id
[**getShoppingCartConnectionFiles**](ShoppingCartConnectionApi.md#getShoppingCartConnectionFiles) | **GET** /beta/shoppingCartConnection/{shoppingCartConnectionId}/file | Get the files for a shoppingCartConnection.
[**getShoppingCartConnectionTags**](ShoppingCartConnectionApi.md#getShoppingCartConnectionTags) | **GET** /beta/shoppingCartConnection/{shoppingCartConnectionId}/tag | Get the tags for a shoppingCartConnection.
[**updateShoppingCartConnection**](ShoppingCartConnectionApi.md#updateShoppingCartConnection) | **PUT** /beta/shoppingCartConnection | Update a shoppingCartConnection
[**updateShoppingCartConnectionCustomFields**](ShoppingCartConnectionApi.md#updateShoppingCartConnectionCustomFields) | **PUT** /beta/shoppingCartConnection/customFields | Update a shoppingCartConnection custom fields


# **addShoppingCartConnection**
> \Infoplus\Infoplus\Model\ShoppingCartConnection addShoppingCartConnection($body)

Create a shoppingCartConnection

Inserts a new shoppingCartConnection using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ShoppingCartConnection(); // \Infoplus\Infoplus\Model\ShoppingCartConnection | ShoppingCartConnection to be inserted.

try {
    $result = $apiInstance->addShoppingCartConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->addShoppingCartConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)| ShoppingCartConnection to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addShoppingCartConnectionAudit**
> addShoppingCartConnectionAudit($shopping_cart_connection_id, $shopping_cart_connection_audit)

Add new audit for a shoppingCartConnection

Adds an audit to an existing shoppingCartConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to add an audit to
$shopping_cart_connection_audit = "shopping_cart_connection_audit_example"; // string | The audit to add

try {
    $apiInstance->addShoppingCartConnectionAudit($shopping_cart_connection_id, $shopping_cart_connection_audit);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->addShoppingCartConnectionAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to add an audit to |
 **shopping_cart_connection_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addShoppingCartConnectionFile**
> addShoppingCartConnectionFile($shopping_cart_connection_id, $file_name)

Attach a file to a shoppingCartConnection

Adds a file to an existing shoppingCartConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addShoppingCartConnectionFile($shopping_cart_connection_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->addShoppingCartConnectionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addShoppingCartConnectionFileByURL**
> addShoppingCartConnectionFileByURL($body, $shopping_cart_connection_id)

Attach a file to a shoppingCartConnection by URL.

Adds a file to an existing shoppingCartConnection by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to add an file to

try {
    $apiInstance->addShoppingCartConnectionFileByURL($body, $shopping_cart_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->addShoppingCartConnectionFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addShoppingCartConnectionTag**
> addShoppingCartConnectionTag($shopping_cart_connection_id, $shopping_cart_connection_tag)

Add new tags for a shoppingCartConnection.

Adds a tag to an existing shoppingCartConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to add a tag to
$shopping_cart_connection_tag = "shopping_cart_connection_tag_example"; // string | The tag to add

try {
    $apiInstance->addShoppingCartConnectionTag($shopping_cart_connection_id, $shopping_cart_connection_tag);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->addShoppingCartConnectionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to add a tag to |
 **shopping_cart_connection_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShoppingCartConnection**
> deleteShoppingCartConnection($shopping_cart_connection_id)

Delete a shoppingCartConnection

Deletes the shoppingCartConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to be deleted.

try {
    $apiInstance->deleteShoppingCartConnection($shopping_cart_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->deleteShoppingCartConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShoppingCartConnectionFile**
> deleteShoppingCartConnectionFile($shopping_cart_connection_id, $file_id)

Delete a file for a shoppingCartConnection.

Deletes an existing shoppingCartConnection file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteShoppingCartConnectionFile($shopping_cart_connection_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->deleteShoppingCartConnectionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShoppingCartConnectionTag**
> deleteShoppingCartConnectionTag($shopping_cart_connection_id, $shopping_cart_connection_tag)

Delete a tag for a shoppingCartConnection.

Deletes an existing shoppingCartConnection tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to remove tag from
$shopping_cart_connection_tag = "shopping_cart_connection_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteShoppingCartConnectionTag($shopping_cart_connection_id, $shopping_cart_connection_tag);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->deleteShoppingCartConnectionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to remove tag from |
 **shopping_cart_connection_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateShoppingCartConnectionById**
> \Infoplus\Infoplus\Model\ShoppingCartConnection getDuplicateShoppingCartConnectionById($shopping_cart_connection_id)

Get a duplicated a shoppingCartConnection by id

Returns a duplicated shoppingCartConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to be duplicated.

try {
    $result = $apiInstance->getDuplicateShoppingCartConnectionById($shopping_cart_connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->getDuplicateShoppingCartConnectionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartConnectionByFilter**
> \Infoplus\Infoplus\Model\ShoppingCartConnection[] getShoppingCartConnectionByFilter($filter, $page, $limit, $sort)

Search shoppingCartConnections by filter

Returns the list of shoppingCartConnections that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
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
    $result = $apiInstance->getShoppingCartConnectionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->getShoppingCartConnectionByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ShoppingCartConnection[]**](../Model/ShoppingCartConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartConnectionById**
> \Infoplus\Infoplus\Model\ShoppingCartConnection getShoppingCartConnectionById($shopping_cart_connection_id)

Get a shoppingCartConnection by id

Returns the shoppingCartConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to be returned.

try {
    $result = $apiInstance->getShoppingCartConnectionById($shopping_cart_connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->getShoppingCartConnectionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartConnectionFiles**
> getShoppingCartConnectionFiles($shopping_cart_connection_id)

Get the files for a shoppingCartConnection.

Get all existing shoppingCartConnection files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to get files for

try {
    $apiInstance->getShoppingCartConnectionFiles($shopping_cart_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->getShoppingCartConnectionFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShoppingCartConnectionTags**
> getShoppingCartConnectionTags($shopping_cart_connection_id)

Get the tags for a shoppingCartConnection.

Get all existing shoppingCartConnection tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopping_cart_connection_id = 56; // int | Id of the shoppingCartConnection to get tags for

try {
    $apiInstance->getShoppingCartConnectionTags($shopping_cart_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->getShoppingCartConnectionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopping_cart_connection_id** | **int**| Id of the shoppingCartConnection to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShoppingCartConnection**
> updateShoppingCartConnection($body)

Update a shoppingCartConnection

Updates an existing shoppingCartConnection using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ShoppingCartConnection(); // \Infoplus\Infoplus\Model\ShoppingCartConnection | ShoppingCartConnection to be updated.

try {
    $apiInstance->updateShoppingCartConnection($body);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->updateShoppingCartConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)| ShoppingCartConnection to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShoppingCartConnectionCustomFields**
> updateShoppingCartConnectionCustomFields($body)

Update a shoppingCartConnection custom fields

Updates an existing shoppingCartConnection custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ShoppingCartConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ShoppingCartConnection(); // \Infoplus\Infoplus\Model\ShoppingCartConnection | ShoppingCartConnection to be updated.

try {
    $apiInstance->updateShoppingCartConnectionCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ShoppingCartConnectionApi->updateShoppingCartConnectionCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ShoppingCartConnection**](../Model/ShoppingCartConnection.md)| ShoppingCartConnection to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

