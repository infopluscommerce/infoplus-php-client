# Infoplus\ZipCodeZoneApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addZipCodeZone**](ZipCodeZoneApi.md#addZipCodeZone) | **POST** /beta/zipCodeZone | Create a zipCodeZone
[**addZipCodeZoneAudit**](ZipCodeZoneApi.md#addZipCodeZoneAudit) | **PUT** /beta/zipCodeZone/{zipCodeZoneId}/audit/{zipCodeZoneAudit} | Add new audit for a zipCodeZone
[**addZipCodeZoneFile**](ZipCodeZoneApi.md#addZipCodeZoneFile) | **POST** /beta/zipCodeZone/{zipCodeZoneId}/file/{fileName} | Attach a file to a zipCodeZone
[**addZipCodeZoneFileByURL**](ZipCodeZoneApi.md#addZipCodeZoneFileByURL) | **POST** /beta/zipCodeZone/{zipCodeZoneId}/file | Attach a file to a zipCodeZone by URL.
[**addZipCodeZoneTag**](ZipCodeZoneApi.md#addZipCodeZoneTag) | **PUT** /beta/zipCodeZone/{zipCodeZoneId}/tag/{zipCodeZoneTag} | Add new tags for a zipCodeZone.
[**deleteZipCodeZone**](ZipCodeZoneApi.md#deleteZipCodeZone) | **DELETE** /beta/zipCodeZone/{zipCodeZoneId} | Delete a zipCodeZone
[**deleteZipCodeZoneFile**](ZipCodeZoneApi.md#deleteZipCodeZoneFile) | **DELETE** /beta/zipCodeZone/{zipCodeZoneId}/file/{fileId} | Delete a file for a zipCodeZone.
[**deleteZipCodeZoneTag**](ZipCodeZoneApi.md#deleteZipCodeZoneTag) | **DELETE** /beta/zipCodeZone/{zipCodeZoneId}/tag/{zipCodeZoneTag} | Delete a tag for a zipCodeZone.
[**getDuplicateZipCodeZoneById**](ZipCodeZoneApi.md#getDuplicateZipCodeZoneById) | **GET** /beta/zipCodeZone/duplicate/{zipCodeZoneId} | Get a duplicated a zipCodeZone by id
[**getZipCodeZoneByFilter**](ZipCodeZoneApi.md#getZipCodeZoneByFilter) | **GET** /beta/zipCodeZone/search | Search zipCodeZones by filter
[**getZipCodeZoneById**](ZipCodeZoneApi.md#getZipCodeZoneById) | **GET** /beta/zipCodeZone/{zipCodeZoneId} | Get a zipCodeZone by id
[**getZipCodeZoneFiles**](ZipCodeZoneApi.md#getZipCodeZoneFiles) | **GET** /beta/zipCodeZone/{zipCodeZoneId}/file | Get the files for a zipCodeZone.
[**getZipCodeZoneTags**](ZipCodeZoneApi.md#getZipCodeZoneTags) | **GET** /beta/zipCodeZone/{zipCodeZoneId}/tag | Get the tags for a zipCodeZone.
[**updateZipCodeZone**](ZipCodeZoneApi.md#updateZipCodeZone) | **PUT** /beta/zipCodeZone | Update a zipCodeZone


# **addZipCodeZone**
> \Infoplus\Infoplus\Model\ZipCodeZone addZipCodeZone($body)

Create a zipCodeZone

Inserts a new zipCodeZone using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ZipCodeZone(); // \Infoplus\Infoplus\Model\ZipCodeZone | ZipCodeZone to be inserted.

try {
    $result = $apiInstance->addZipCodeZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->addZipCodeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ZipCodeZone**](../Model/ZipCodeZone.md)| ZipCodeZone to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ZipCodeZone**](../Model/ZipCodeZone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZipCodeZoneAudit**
> addZipCodeZoneAudit($zip_code_zone_id, $zip_code_zone_audit)

Add new audit for a zipCodeZone

Adds an audit to an existing zipCodeZone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to add an audit to
$zip_code_zone_audit = "zip_code_zone_audit_example"; // string | The audit to add

try {
    $apiInstance->addZipCodeZoneAudit($zip_code_zone_id, $zip_code_zone_audit);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->addZipCodeZoneAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to add an audit to |
 **zip_code_zone_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZipCodeZoneFile**
> addZipCodeZoneFile($zip_code_zone_id, $file_name)

Attach a file to a zipCodeZone

Adds a file to an existing zipCodeZone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addZipCodeZoneFile($zip_code_zone_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->addZipCodeZoneFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZipCodeZoneFileByURL**
> addZipCodeZoneFileByURL($body, $zip_code_zone_id)

Attach a file to a zipCodeZone by URL.

Adds a file to an existing zipCodeZone by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to add an file to

try {
    $apiInstance->addZipCodeZoneFileByURL($body, $zip_code_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->addZipCodeZoneFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZipCodeZoneTag**
> addZipCodeZoneTag($zip_code_zone_id, $zip_code_zone_tag)

Add new tags for a zipCodeZone.

Adds a tag to an existing zipCodeZone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to add a tag to
$zip_code_zone_tag = "zip_code_zone_tag_example"; // string | The tag to add

try {
    $apiInstance->addZipCodeZoneTag($zip_code_zone_id, $zip_code_zone_tag);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->addZipCodeZoneTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to add a tag to |
 **zip_code_zone_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZipCodeZone**
> deleteZipCodeZone($zip_code_zone_id)

Delete a zipCodeZone

Deletes the zipCodeZone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to be deleted.

try {
    $apiInstance->deleteZipCodeZone($zip_code_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->deleteZipCodeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZipCodeZoneFile**
> deleteZipCodeZoneFile($zip_code_zone_id, $file_id)

Delete a file for a zipCodeZone.

Deletes an existing zipCodeZone file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteZipCodeZoneFile($zip_code_zone_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->deleteZipCodeZoneFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZipCodeZoneTag**
> deleteZipCodeZoneTag($zip_code_zone_id, $zip_code_zone_tag)

Delete a tag for a zipCodeZone.

Deletes an existing zipCodeZone tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to remove tag from
$zip_code_zone_tag = "zip_code_zone_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteZipCodeZoneTag($zip_code_zone_id, $zip_code_zone_tag);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->deleteZipCodeZoneTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to remove tag from |
 **zip_code_zone_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateZipCodeZoneById**
> \Infoplus\Infoplus\Model\ZipCodeZone getDuplicateZipCodeZoneById($zip_code_zone_id)

Get a duplicated a zipCodeZone by id

Returns a duplicated zipCodeZone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to be duplicated.

try {
    $result = $apiInstance->getDuplicateZipCodeZoneById($zip_code_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->getDuplicateZipCodeZoneById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ZipCodeZone**](../Model/ZipCodeZone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipCodeZoneByFilter**
> \Infoplus\Infoplus\Model\ZipCodeZone[] getZipCodeZoneByFilter($filter, $page, $limit, $sort)

Search zipCodeZones by filter

Returns the list of zipCodeZones that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
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
    $result = $apiInstance->getZipCodeZoneByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->getZipCodeZoneByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ZipCodeZone[]**](../Model/ZipCodeZone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipCodeZoneById**
> \Infoplus\Infoplus\Model\ZipCodeZone getZipCodeZoneById($zip_code_zone_id)

Get a zipCodeZone by id

Returns the zipCodeZone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to be returned.

try {
    $result = $apiInstance->getZipCodeZoneById($zip_code_zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->getZipCodeZoneById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ZipCodeZone**](../Model/ZipCodeZone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipCodeZoneFiles**
> getZipCodeZoneFiles($zip_code_zone_id)

Get the files for a zipCodeZone.

Get all existing zipCodeZone files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to get files for

try {
    $apiInstance->getZipCodeZoneFiles($zip_code_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->getZipCodeZoneFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipCodeZoneTags**
> getZipCodeZoneTags($zip_code_zone_id)

Get the tags for a zipCodeZone.

Get all existing zipCodeZone tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_code_zone_id = 56; // int | Id of the zipCodeZone to get tags for

try {
    $apiInstance->getZipCodeZoneTags($zip_code_zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->getZipCodeZoneTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code_zone_id** | **int**| Id of the zipCodeZone to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZipCodeZone**
> updateZipCodeZone($body)

Update a zipCodeZone

Updates an existing zipCodeZone using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZipCodeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ZipCodeZone(); // \Infoplus\Infoplus\Model\ZipCodeZone | ZipCodeZone to be updated.

try {
    $apiInstance->updateZipCodeZone($body);
} catch (Exception $e) {
    echo 'Exception when calling ZipCodeZoneApi->updateZipCodeZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ZipCodeZone**](../Model/ZipCodeZone.md)| ZipCodeZone to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

