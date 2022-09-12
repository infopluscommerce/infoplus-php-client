# Infoplus\FinanceSystemConnectionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFinanceSystemConnection**](FinanceSystemConnectionApi.md#addFinanceSystemConnection) | **POST** /beta/financeSystemConnection | Create a financeSystemConnection
[**addFinanceSystemConnectionAudit**](FinanceSystemConnectionApi.md#addFinanceSystemConnectionAudit) | **PUT** /beta/financeSystemConnection/{financeSystemConnectionId}/audit/{financeSystemConnectionAudit} | Add new audit for a financeSystemConnection
[**addFinanceSystemConnectionFile**](FinanceSystemConnectionApi.md#addFinanceSystemConnectionFile) | **POST** /beta/financeSystemConnection/{financeSystemConnectionId}/file/{fileName} | Attach a file to a financeSystemConnection
[**addFinanceSystemConnectionFileByURL**](FinanceSystemConnectionApi.md#addFinanceSystemConnectionFileByURL) | **POST** /beta/financeSystemConnection/{financeSystemConnectionId}/file | Attach a file to a financeSystemConnection by URL.
[**addFinanceSystemConnectionTag**](FinanceSystemConnectionApi.md#addFinanceSystemConnectionTag) | **PUT** /beta/financeSystemConnection/{financeSystemConnectionId}/tag/{financeSystemConnectionTag} | Add new tags for a financeSystemConnection.
[**deleteFinanceSystemConnection**](FinanceSystemConnectionApi.md#deleteFinanceSystemConnection) | **DELETE** /beta/financeSystemConnection/{financeSystemConnectionId} | Delete a financeSystemConnection
[**deleteFinanceSystemConnectionFile**](FinanceSystemConnectionApi.md#deleteFinanceSystemConnectionFile) | **DELETE** /beta/financeSystemConnection/{financeSystemConnectionId}/file/{fileId} | Delete a file for a financeSystemConnection.
[**deleteFinanceSystemConnectionTag**](FinanceSystemConnectionApi.md#deleteFinanceSystemConnectionTag) | **DELETE** /beta/financeSystemConnection/{financeSystemConnectionId}/tag/{financeSystemConnectionTag} | Delete a tag for a financeSystemConnection.
[**getDuplicateFinanceSystemConnectionById**](FinanceSystemConnectionApi.md#getDuplicateFinanceSystemConnectionById) | **GET** /beta/financeSystemConnection/duplicate/{financeSystemConnectionId} | Get a duplicated a financeSystemConnection by id
[**getFinanceSystemConnectionByFilter**](FinanceSystemConnectionApi.md#getFinanceSystemConnectionByFilter) | **GET** /beta/financeSystemConnection/search | Search financeSystemConnections by filter
[**getFinanceSystemConnectionById**](FinanceSystemConnectionApi.md#getFinanceSystemConnectionById) | **GET** /beta/financeSystemConnection/{financeSystemConnectionId} | Get a financeSystemConnection by id
[**getFinanceSystemConnectionFiles**](FinanceSystemConnectionApi.md#getFinanceSystemConnectionFiles) | **GET** /beta/financeSystemConnection/{financeSystemConnectionId}/file | Get the files for a financeSystemConnection.
[**getFinanceSystemConnectionTags**](FinanceSystemConnectionApi.md#getFinanceSystemConnectionTags) | **GET** /beta/financeSystemConnection/{financeSystemConnectionId}/tag | Get the tags for a financeSystemConnection.
[**updateFinanceSystemConnection**](FinanceSystemConnectionApi.md#updateFinanceSystemConnection) | **PUT** /beta/financeSystemConnection | Update a financeSystemConnection
[**updateFinanceSystemConnectionCustomFields**](FinanceSystemConnectionApi.md#updateFinanceSystemConnectionCustomFields) | **PUT** /beta/financeSystemConnection/customFields | Update a financeSystemConnection custom fields


# **addFinanceSystemConnection**
> \Infoplus\Infoplus\Model\FinanceSystemConnection addFinanceSystemConnection($body)

Create a financeSystemConnection

Inserts a new financeSystemConnection using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FinanceSystemConnection(); // \Infoplus\Infoplus\Model\FinanceSystemConnection | FinanceSystemConnection to be inserted.

try {
    $result = $apiInstance->addFinanceSystemConnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->addFinanceSystemConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)| FinanceSystemConnection to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionAudit**
> addFinanceSystemConnectionAudit($finance_system_connection_id, $finance_system_connection_audit)

Add new audit for a financeSystemConnection

Adds an audit to an existing financeSystemConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to add an audit to
$finance_system_connection_audit = "finance_system_connection_audit_example"; // string | The audit to add

try {
    $apiInstance->addFinanceSystemConnectionAudit($finance_system_connection_id, $finance_system_connection_audit);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->addFinanceSystemConnectionAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to add an audit to |
 **finance_system_connection_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionFile**
> addFinanceSystemConnectionFile($finance_system_connection_id, $file_name)

Attach a file to a financeSystemConnection

Adds a file to an existing financeSystemConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFinanceSystemConnectionFile($finance_system_connection_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->addFinanceSystemConnectionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionFileByURL**
> addFinanceSystemConnectionFileByURL($body, $finance_system_connection_id)

Attach a file to a financeSystemConnection by URL.

Adds a file to an existing financeSystemConnection by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to add an file to

try {
    $apiInstance->addFinanceSystemConnectionFileByURL($body, $finance_system_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->addFinanceSystemConnectionFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFinanceSystemConnectionTag**
> addFinanceSystemConnectionTag($finance_system_connection_id, $finance_system_connection_tag)

Add new tags for a financeSystemConnection.

Adds a tag to an existing financeSystemConnection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to add a tag to
$finance_system_connection_tag = "finance_system_connection_tag_example"; // string | The tag to add

try {
    $apiInstance->addFinanceSystemConnectionTag($finance_system_connection_id, $finance_system_connection_tag);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->addFinanceSystemConnectionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to add a tag to |
 **finance_system_connection_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFinanceSystemConnection**
> deleteFinanceSystemConnection($finance_system_connection_id)

Delete a financeSystemConnection

Deletes the financeSystemConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to be deleted.

try {
    $apiInstance->deleteFinanceSystemConnection($finance_system_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->deleteFinanceSystemConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFinanceSystemConnectionFile**
> deleteFinanceSystemConnectionFile($finance_system_connection_id, $file_id)

Delete a file for a financeSystemConnection.

Deletes an existing financeSystemConnection file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFinanceSystemConnectionFile($finance_system_connection_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->deleteFinanceSystemConnectionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFinanceSystemConnectionTag**
> deleteFinanceSystemConnectionTag($finance_system_connection_id, $finance_system_connection_tag)

Delete a tag for a financeSystemConnection.

Deletes an existing financeSystemConnection tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to remove tag from
$finance_system_connection_tag = "finance_system_connection_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFinanceSystemConnectionTag($finance_system_connection_id, $finance_system_connection_tag);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->deleteFinanceSystemConnectionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to remove tag from |
 **finance_system_connection_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFinanceSystemConnectionById**
> \Infoplus\Infoplus\Model\FinanceSystemConnection getDuplicateFinanceSystemConnectionById($finance_system_connection_id)

Get a duplicated a financeSystemConnection by id

Returns a duplicated financeSystemConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to be duplicated.

try {
    $result = $apiInstance->getDuplicateFinanceSystemConnectionById($finance_system_connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->getDuplicateFinanceSystemConnectionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionByFilter**
> \Infoplus\Infoplus\Model\FinanceSystemConnection[] getFinanceSystemConnectionByFilter($filter, $page, $limit, $sort)

Search financeSystemConnections by filter

Returns the list of financeSystemConnections that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
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
    $result = $apiInstance->getFinanceSystemConnectionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->getFinanceSystemConnectionByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FinanceSystemConnection[]**](../Model/FinanceSystemConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionById**
> \Infoplus\Infoplus\Model\FinanceSystemConnection getFinanceSystemConnectionById($finance_system_connection_id)

Get a financeSystemConnection by id

Returns the financeSystemConnection identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to be returned.

try {
    $result = $apiInstance->getFinanceSystemConnectionById($finance_system_connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->getFinanceSystemConnectionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionFiles**
> getFinanceSystemConnectionFiles($finance_system_connection_id)

Get the files for a financeSystemConnection.

Get all existing financeSystemConnection files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to get files for

try {
    $apiInstance->getFinanceSystemConnectionFiles($finance_system_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->getFinanceSystemConnectionFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceSystemConnectionTags**
> getFinanceSystemConnectionTags($finance_system_connection_id)

Get the tags for a financeSystemConnection.

Get all existing financeSystemConnection tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$finance_system_connection_id = 56; // int | Id of the financeSystemConnection to get tags for

try {
    $apiInstance->getFinanceSystemConnectionTags($finance_system_connection_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->getFinanceSystemConnectionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **finance_system_connection_id** | **int**| Id of the financeSystemConnection to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFinanceSystemConnection**
> updateFinanceSystemConnection($body)

Update a financeSystemConnection

Updates an existing financeSystemConnection using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FinanceSystemConnection(); // \Infoplus\Infoplus\Model\FinanceSystemConnection | FinanceSystemConnection to be updated.

try {
    $apiInstance->updateFinanceSystemConnection($body);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->updateFinanceSystemConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)| FinanceSystemConnection to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFinanceSystemConnectionCustomFields**
> updateFinanceSystemConnectionCustomFields($body)

Update a financeSystemConnection custom fields

Updates an existing financeSystemConnection custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FinanceSystemConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FinanceSystemConnection(); // \Infoplus\Infoplus\Model\FinanceSystemConnection | FinanceSystemConnection to be updated.

try {
    $apiInstance->updateFinanceSystemConnectionCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling FinanceSystemConnectionApi->updateFinanceSystemConnectionCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FinanceSystemConnection**](../Model/FinanceSystemConnection.md)| FinanceSystemConnection to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

