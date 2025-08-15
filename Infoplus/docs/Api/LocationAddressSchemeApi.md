# Infoplus\LocationAddressSchemeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocationAddressScheme**](LocationAddressSchemeApi.md#addLocationAddressScheme) | **POST** /beta/locationAddressScheme | Create a locationAddressScheme
[**addLocationAddressSchemeAudit**](LocationAddressSchemeApi.md#addLocationAddressSchemeAudit) | **PUT** /beta/locationAddressScheme/{locationAddressSchemeId}/audit/{locationAddressSchemeAudit} | Add new audit for a locationAddressScheme
[**addLocationAddressSchemeFile**](LocationAddressSchemeApi.md#addLocationAddressSchemeFile) | **POST** /beta/locationAddressScheme/{locationAddressSchemeId}/file/{fileName} | Attach a file to a locationAddressScheme
[**addLocationAddressSchemeFileByURL**](LocationAddressSchemeApi.md#addLocationAddressSchemeFileByURL) | **POST** /beta/locationAddressScheme/{locationAddressSchemeId}/file | Attach a file to a locationAddressScheme by URL.
[**addLocationAddressSchemeTag**](LocationAddressSchemeApi.md#addLocationAddressSchemeTag) | **PUT** /beta/locationAddressScheme/{locationAddressSchemeId}/tag/{locationAddressSchemeTag} | Add new tags for a locationAddressScheme.
[**deleteLocationAddressScheme**](LocationAddressSchemeApi.md#deleteLocationAddressScheme) | **DELETE** /beta/locationAddressScheme/{locationAddressSchemeId} | Delete a locationAddressScheme
[**deleteLocationAddressSchemeFile**](LocationAddressSchemeApi.md#deleteLocationAddressSchemeFile) | **DELETE** /beta/locationAddressScheme/{locationAddressSchemeId}/file/{fileId} | Delete a file for a locationAddressScheme.
[**deleteLocationAddressSchemeTag**](LocationAddressSchemeApi.md#deleteLocationAddressSchemeTag) | **DELETE** /beta/locationAddressScheme/{locationAddressSchemeId}/tag/{locationAddressSchemeTag} | Delete a tag for a locationAddressScheme.
[**getDuplicateLocationAddressSchemeById**](LocationAddressSchemeApi.md#getDuplicateLocationAddressSchemeById) | **GET** /beta/locationAddressScheme/duplicate/{locationAddressSchemeId} | Get a duplicated a locationAddressScheme by id
[**getLocationAddressSchemeByFilter**](LocationAddressSchemeApi.md#getLocationAddressSchemeByFilter) | **GET** /beta/locationAddressScheme/search | Search locationAddressSchemes by filter
[**getLocationAddressSchemeById**](LocationAddressSchemeApi.md#getLocationAddressSchemeById) | **GET** /beta/locationAddressScheme/{locationAddressSchemeId} | Get a locationAddressScheme by id
[**getLocationAddressSchemeFiles**](LocationAddressSchemeApi.md#getLocationAddressSchemeFiles) | **GET** /beta/locationAddressScheme/{locationAddressSchemeId}/file | Get the files for a locationAddressScheme.
[**getLocationAddressSchemeTags**](LocationAddressSchemeApi.md#getLocationAddressSchemeTags) | **GET** /beta/locationAddressScheme/{locationAddressSchemeId}/tag | Get the tags for a locationAddressScheme.
[**updateLocationAddressScheme**](LocationAddressSchemeApi.md#updateLocationAddressScheme) | **PUT** /beta/locationAddressScheme | Update a locationAddressScheme
[**updateLocationAddressSchemeCustomFields**](LocationAddressSchemeApi.md#updateLocationAddressSchemeCustomFields) | **PUT** /beta/locationAddressScheme/customFields | Update a locationAddressScheme custom fields


# **addLocationAddressScheme**
> \Infoplus\Infoplus\Model\LocationAddressScheme addLocationAddressScheme($body)

Create a locationAddressScheme

Inserts a new locationAddressScheme using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationAddressScheme(); // \Infoplus\Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be inserted.

try {
    $result = $apiInstance->addLocationAddressScheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)| LocationAddressScheme to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationAddressSchemeAudit**
> addLocationAddressSchemeAudit($location_address_scheme_id, $location_address_scheme_audit)

Add new audit for a locationAddressScheme

Adds an audit to an existing locationAddressScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to add an audit to
$location_address_scheme_audit = "location_address_scheme_audit_example"; // string | The audit to add

try {
    $apiInstance->addLocationAddressSchemeAudit($location_address_scheme_id, $location_address_scheme_audit);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressSchemeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to add an audit to |
 **location_address_scheme_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationAddressSchemeFile**
> addLocationAddressSchemeFile($location_address_scheme_id, $file_name)

Attach a file to a locationAddressScheme

Adds a file to an existing locationAddressScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLocationAddressSchemeFile($location_address_scheme_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressSchemeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationAddressSchemeFileByURL**
> addLocationAddressSchemeFileByURL($body, $location_address_scheme_id)

Attach a file to a locationAddressScheme by URL.

Adds a file to an existing locationAddressScheme by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to add an file to

try {
    $apiInstance->addLocationAddressSchemeFileByURL($body, $location_address_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressSchemeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationAddressSchemeTag**
> addLocationAddressSchemeTag($location_address_scheme_id, $location_address_scheme_tag)

Add new tags for a locationAddressScheme.

Adds a tag to an existing locationAddressScheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to add a tag to
$location_address_scheme_tag = "location_address_scheme_tag_example"; // string | The tag to add

try {
    $apiInstance->addLocationAddressSchemeTag($location_address_scheme_id, $location_address_scheme_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressSchemeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to add a tag to |
 **location_address_scheme_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationAddressScheme**
> deleteLocationAddressScheme($location_address_scheme_id)

Delete a locationAddressScheme

Deletes the locationAddressScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to be deleted.

try {
    $apiInstance->deleteLocationAddressScheme($location_address_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->deleteLocationAddressScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationAddressSchemeFile**
> deleteLocationAddressSchemeFile($location_address_scheme_id, $file_id)

Delete a file for a locationAddressScheme.

Deletes an existing locationAddressScheme file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLocationAddressSchemeFile($location_address_scheme_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->deleteLocationAddressSchemeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationAddressSchemeTag**
> deleteLocationAddressSchemeTag($location_address_scheme_id, $location_address_scheme_tag)

Delete a tag for a locationAddressScheme.

Deletes an existing locationAddressScheme tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to remove tag from
$location_address_scheme_tag = "location_address_scheme_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLocationAddressSchemeTag($location_address_scheme_id, $location_address_scheme_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->deleteLocationAddressSchemeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to remove tag from |
 **location_address_scheme_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLocationAddressSchemeById**
> \Infoplus\Infoplus\Model\LocationAddressScheme getDuplicateLocationAddressSchemeById($location_address_scheme_id)

Get a duplicated a locationAddressScheme by id

Returns a duplicated locationAddressScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to be duplicated.

try {
    $result = $apiInstance->getDuplicateLocationAddressSchemeById($location_address_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getDuplicateLocationAddressSchemeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationAddressSchemeByFilter**
> \Infoplus\Infoplus\Model\LocationAddressScheme[] getLocationAddressSchemeByFilter($filter, $page, $limit, $sort)

Search locationAddressSchemes by filter

Returns the list of locationAddressSchemes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
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
    $result = $apiInstance->getLocationAddressSchemeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LocationAddressScheme[]**](../Model/LocationAddressScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationAddressSchemeById**
> \Infoplus\Infoplus\Model\LocationAddressScheme getLocationAddressSchemeById($location_address_scheme_id)

Get a locationAddressScheme by id

Returns the locationAddressScheme identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to be returned.

try {
    $result = $apiInstance->getLocationAddressSchemeById($location_address_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationAddressSchemeFiles**
> getLocationAddressSchemeFiles($location_address_scheme_id)

Get the files for a locationAddressScheme.

Get all existing locationAddressScheme files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to get files for

try {
    $apiInstance->getLocationAddressSchemeFiles($location_address_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationAddressSchemeTags**
> getLocationAddressSchemeTags($location_address_scheme_id)

Get the tags for a locationAddressScheme.

Get all existing locationAddressScheme tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to get tags for

try {
    $apiInstance->getLocationAddressSchemeTags($location_address_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationAddressScheme**
> updateLocationAddressScheme($body)

Update a locationAddressScheme

Updates an existing locationAddressScheme using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationAddressScheme(); // \Infoplus\Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be updated.

try {
    $apiInstance->updateLocationAddressScheme($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->updateLocationAddressScheme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)| LocationAddressScheme to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationAddressSchemeCustomFields**
> updateLocationAddressSchemeCustomFields($body)

Update a locationAddressScheme custom fields

Updates an existing locationAddressScheme custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationAddressSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationAddressScheme(); // \Infoplus\Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be updated.

try {
    $apiInstance->updateLocationAddressSchemeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->updateLocationAddressSchemeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationAddressScheme**](../Model/LocationAddressScheme.md)| LocationAddressScheme to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

