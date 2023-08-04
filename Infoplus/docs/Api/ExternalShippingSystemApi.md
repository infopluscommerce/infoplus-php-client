# Infoplus\ExternalShippingSystemApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExternalShippingSystem**](ExternalShippingSystemApi.md#addExternalShippingSystem) | **POST** /beta/externalShippingSystem | Create an externalShippingSystem
[**addExternalShippingSystemAudit**](ExternalShippingSystemApi.md#addExternalShippingSystemAudit) | **PUT** /beta/externalShippingSystem/{externalShippingSystemId}/audit/{externalShippingSystemAudit} | Add new audit for an externalShippingSystem
[**addExternalShippingSystemFile**](ExternalShippingSystemApi.md#addExternalShippingSystemFile) | **POST** /beta/externalShippingSystem/{externalShippingSystemId}/file/{fileName} | Attach a file to an externalShippingSystem
[**addExternalShippingSystemFileByURL**](ExternalShippingSystemApi.md#addExternalShippingSystemFileByURL) | **POST** /beta/externalShippingSystem/{externalShippingSystemId}/file | Attach a file to an externalShippingSystem by URL.
[**addExternalShippingSystemTag**](ExternalShippingSystemApi.md#addExternalShippingSystemTag) | **PUT** /beta/externalShippingSystem/{externalShippingSystemId}/tag/{externalShippingSystemTag} | Add new tags for an externalShippingSystem.
[**deleteExternalShippingSystem**](ExternalShippingSystemApi.md#deleteExternalShippingSystem) | **DELETE** /beta/externalShippingSystem/{externalShippingSystemId} | Delete an externalShippingSystem
[**deleteExternalShippingSystemFile**](ExternalShippingSystemApi.md#deleteExternalShippingSystemFile) | **DELETE** /beta/externalShippingSystem/{externalShippingSystemId}/file/{fileId} | Delete a file for an externalShippingSystem.
[**deleteExternalShippingSystemTag**](ExternalShippingSystemApi.md#deleteExternalShippingSystemTag) | **DELETE** /beta/externalShippingSystem/{externalShippingSystemId}/tag/{externalShippingSystemTag} | Delete a tag for an externalShippingSystem.
[**getDuplicateExternalShippingSystemById**](ExternalShippingSystemApi.md#getDuplicateExternalShippingSystemById) | **GET** /beta/externalShippingSystem/duplicate/{externalShippingSystemId} | Get a duplicated an externalShippingSystem by id
[**getExternalShippingSystemByFilter**](ExternalShippingSystemApi.md#getExternalShippingSystemByFilter) | **GET** /beta/externalShippingSystem/search | Search externalShippingSystems by filter
[**getExternalShippingSystemById**](ExternalShippingSystemApi.md#getExternalShippingSystemById) | **GET** /beta/externalShippingSystem/{externalShippingSystemId} | Get an externalShippingSystem by id
[**getExternalShippingSystemFiles**](ExternalShippingSystemApi.md#getExternalShippingSystemFiles) | **GET** /beta/externalShippingSystem/{externalShippingSystemId}/file | Get the files for an externalShippingSystem.
[**getExternalShippingSystemTags**](ExternalShippingSystemApi.md#getExternalShippingSystemTags) | **GET** /beta/externalShippingSystem/{externalShippingSystemId}/tag | Get the tags for an externalShippingSystem.
[**updateExternalShippingSystem**](ExternalShippingSystemApi.md#updateExternalShippingSystem) | **PUT** /beta/externalShippingSystem | Update an externalShippingSystem
[**updateExternalShippingSystemCustomFields**](ExternalShippingSystemApi.md#updateExternalShippingSystemCustomFields) | **PUT** /beta/externalShippingSystem/customFields | Update an externalShippingSystem custom fields


# **addExternalShippingSystem**
> \Infoplus\Infoplus\Model\ExternalShippingSystem addExternalShippingSystem($body)

Create an externalShippingSystem

Inserts a new externalShippingSystem using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be inserted.

try {
    $result = $apiInstance->addExternalShippingSystem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)| ExternalShippingSystem to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addExternalShippingSystemAudit**
> addExternalShippingSystemAudit($external_shipping_system_id, $external_shipping_system_audit)

Add new audit for an externalShippingSystem

Adds an audit to an existing externalShippingSystem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add an audit to
$external_shipping_system_audit = "external_shipping_system_audit_example"; // string | The audit to add

try {
    $apiInstance->addExternalShippingSystemAudit($external_shipping_system_id, $external_shipping_system_audit);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add an audit to |
 **external_shipping_system_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addExternalShippingSystemFile**
> addExternalShippingSystemFile($external_shipping_system_id, $file_name)

Attach a file to an externalShippingSystem

Adds a file to an existing externalShippingSystem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addExternalShippingSystemFile($external_shipping_system_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addExternalShippingSystemFileByURL**
> addExternalShippingSystemFileByURL($body, $external_shipping_system_id)

Attach a file to an externalShippingSystem by URL.

Adds a file to an existing externalShippingSystem by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add an file to

try {
    $apiInstance->addExternalShippingSystemFileByURL($body, $external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addExternalShippingSystemTag**
> addExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag)

Add new tags for an externalShippingSystem.

Adds a tag to an existing externalShippingSystem.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add a tag to
$external_shipping_system_tag = "external_shipping_system_tag_example"; // string | The tag to add

try {
    $apiInstance->addExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add a tag to |
 **external_shipping_system_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalShippingSystem**
> deleteExternalShippingSystem($external_shipping_system_id)

Delete an externalShippingSystem

Deletes the externalShippingSystem identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be deleted.

try {
    $apiInstance->deleteExternalShippingSystem($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalShippingSystemFile**
> deleteExternalShippingSystemFile($external_shipping_system_id, $file_id)

Delete a file for an externalShippingSystem.

Deletes an existing externalShippingSystem file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteExternalShippingSystemFile($external_shipping_system_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystemFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalShippingSystemTag**
> deleteExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag)

Delete a tag for an externalShippingSystem.

Deletes an existing externalShippingSystem tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to remove tag from
$external_shipping_system_tag = "external_shipping_system_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystemTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to remove tag from |
 **external_shipping_system_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateExternalShippingSystemById**
> \Infoplus\Infoplus\Model\ExternalShippingSystem getDuplicateExternalShippingSystemById($external_shipping_system_id)

Get a duplicated an externalShippingSystem by id

Returns a duplicated externalShippingSystem identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be duplicated.

try {
    $result = $apiInstance->getDuplicateExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getDuplicateExternalShippingSystemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalShippingSystemByFilter**
> \Infoplus\Infoplus\Model\ExternalShippingSystem[] getExternalShippingSystemByFilter($filter, $page, $limit, $sort)

Search externalShippingSystems by filter

Returns the list of externalShippingSystems that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
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
    $result = $apiInstance->getExternalShippingSystemByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ExternalShippingSystem[]**](../Model/ExternalShippingSystem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalShippingSystemById**
> \Infoplus\Infoplus\Model\ExternalShippingSystem getExternalShippingSystemById($external_shipping_system_id)

Get an externalShippingSystem by id

Returns the externalShippingSystem identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be returned.

try {
    $result = $apiInstance->getExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalShippingSystemFiles**
> getExternalShippingSystemFiles($external_shipping_system_id)

Get the files for an externalShippingSystem.

Get all existing externalShippingSystem files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to get files for

try {
    $apiInstance->getExternalShippingSystemFiles($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalShippingSystemTags**
> getExternalShippingSystemTags($external_shipping_system_id)

Get the tags for an externalShippingSystem.

Get all existing externalShippingSystem tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to get tags for

try {
    $apiInstance->getExternalShippingSystemTags($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalShippingSystem**
> updateExternalShippingSystem($body)

Update an externalShippingSystem

Updates an existing externalShippingSystem using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try {
    $apiInstance->updateExternalShippingSystem($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)| ExternalShippingSystem to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalShippingSystemCustomFields**
> updateExternalShippingSystemCustomFields($body)

Update an externalShippingSystem custom fields

Updates an existing externalShippingSystem custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ExternalShippingSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try {
    $apiInstance->updateExternalShippingSystemCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystemCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ExternalShippingSystem**](../Model/ExternalShippingSystem.md)| ExternalShippingSystem to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

