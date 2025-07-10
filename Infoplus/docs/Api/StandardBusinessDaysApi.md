# Infoplus\StandardBusinessDaysApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addStandardBusinessDays**](StandardBusinessDaysApi.md#addStandardBusinessDays) | **POST** /beta/standardBusinessDays | Create a standardBusinessDays
[**addStandardBusinessDaysAudit**](StandardBusinessDaysApi.md#addStandardBusinessDaysAudit) | **PUT** /beta/standardBusinessDays/{standardBusinessDaysId}/audit/{standardBusinessDaysAudit} | Add new audit for a standardBusinessDays
[**addStandardBusinessDaysFile**](StandardBusinessDaysApi.md#addStandardBusinessDaysFile) | **POST** /beta/standardBusinessDays/{standardBusinessDaysId}/file/{fileName} | Attach a file to a standardBusinessDays
[**addStandardBusinessDaysFileByURL**](StandardBusinessDaysApi.md#addStandardBusinessDaysFileByURL) | **POST** /beta/standardBusinessDays/{standardBusinessDaysId}/file | Attach a file to a standardBusinessDays by URL.
[**addStandardBusinessDaysTag**](StandardBusinessDaysApi.md#addStandardBusinessDaysTag) | **PUT** /beta/standardBusinessDays/{standardBusinessDaysId}/tag/{standardBusinessDaysTag} | Add new tags for a standardBusinessDays.
[**deleteStandardBusinessDays**](StandardBusinessDaysApi.md#deleteStandardBusinessDays) | **DELETE** /beta/standardBusinessDays/{standardBusinessDaysId} | Delete a standardBusinessDays
[**deleteStandardBusinessDaysFile**](StandardBusinessDaysApi.md#deleteStandardBusinessDaysFile) | **DELETE** /beta/standardBusinessDays/{standardBusinessDaysId}/file/{fileId} | Delete a file for a standardBusinessDays.
[**deleteStandardBusinessDaysTag**](StandardBusinessDaysApi.md#deleteStandardBusinessDaysTag) | **DELETE** /beta/standardBusinessDays/{standardBusinessDaysId}/tag/{standardBusinessDaysTag} | Delete a tag for a standardBusinessDays.
[**getDuplicateStandardBusinessDaysById**](StandardBusinessDaysApi.md#getDuplicateStandardBusinessDaysById) | **GET** /beta/standardBusinessDays/duplicate/{standardBusinessDaysId} | Get a duplicated a standardBusinessDays by id
[**getStandardBusinessDaysByFilter**](StandardBusinessDaysApi.md#getStandardBusinessDaysByFilter) | **GET** /beta/standardBusinessDays/search | Search standardBusinessDayses by filter
[**getStandardBusinessDaysById**](StandardBusinessDaysApi.md#getStandardBusinessDaysById) | **GET** /beta/standardBusinessDays/{standardBusinessDaysId} | Get a standardBusinessDays by id
[**getStandardBusinessDaysFiles**](StandardBusinessDaysApi.md#getStandardBusinessDaysFiles) | **GET** /beta/standardBusinessDays/{standardBusinessDaysId}/file | Get the files for a standardBusinessDays.
[**getStandardBusinessDaysTags**](StandardBusinessDaysApi.md#getStandardBusinessDaysTags) | **GET** /beta/standardBusinessDays/{standardBusinessDaysId}/tag | Get the tags for a standardBusinessDays.
[**updateStandardBusinessDays**](StandardBusinessDaysApi.md#updateStandardBusinessDays) | **PUT** /beta/standardBusinessDays | Update a standardBusinessDays


# **addStandardBusinessDays**
> \Infoplus\Infoplus\Model\StandardBusinessDays addStandardBusinessDays($body)

Create a standardBusinessDays

Inserts a new standardBusinessDays using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\StandardBusinessDays(); // \Infoplus\Infoplus\Model\StandardBusinessDays | StandardBusinessDays to be inserted.

try {
    $result = $apiInstance->addStandardBusinessDays($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->addStandardBusinessDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\StandardBusinessDays**](../Model/StandardBusinessDays.md)| StandardBusinessDays to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\StandardBusinessDays**](../Model/StandardBusinessDays.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStandardBusinessDaysAudit**
> addStandardBusinessDaysAudit($standard_business_days_id, $standard_business_days_audit)

Add new audit for a standardBusinessDays

Adds an audit to an existing standardBusinessDays.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to add an audit to
$standard_business_days_audit = "standard_business_days_audit_example"; // string | The audit to add

try {
    $apiInstance->addStandardBusinessDaysAudit($standard_business_days_id, $standard_business_days_audit);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->addStandardBusinessDaysAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to add an audit to |
 **standard_business_days_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStandardBusinessDaysFile**
> addStandardBusinessDaysFile($standard_business_days_id, $file_name)

Attach a file to a standardBusinessDays

Adds a file to an existing standardBusinessDays.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addStandardBusinessDaysFile($standard_business_days_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->addStandardBusinessDaysFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStandardBusinessDaysFileByURL**
> addStandardBusinessDaysFileByURL($body, $standard_business_days_id)

Attach a file to a standardBusinessDays by URL.

Adds a file to an existing standardBusinessDays by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to add an file to

try {
    $apiInstance->addStandardBusinessDaysFileByURL($body, $standard_business_days_id);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->addStandardBusinessDaysFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStandardBusinessDaysTag**
> addStandardBusinessDaysTag($standard_business_days_id, $standard_business_days_tag)

Add new tags for a standardBusinessDays.

Adds a tag to an existing standardBusinessDays.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to add a tag to
$standard_business_days_tag = "standard_business_days_tag_example"; // string | The tag to add

try {
    $apiInstance->addStandardBusinessDaysTag($standard_business_days_id, $standard_business_days_tag);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->addStandardBusinessDaysTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to add a tag to |
 **standard_business_days_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStandardBusinessDays**
> deleteStandardBusinessDays($standard_business_days_id)

Delete a standardBusinessDays

Deletes the standardBusinessDays identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to be deleted.

try {
    $apiInstance->deleteStandardBusinessDays($standard_business_days_id);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->deleteStandardBusinessDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStandardBusinessDaysFile**
> deleteStandardBusinessDaysFile($standard_business_days_id, $file_id)

Delete a file for a standardBusinessDays.

Deletes an existing standardBusinessDays file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteStandardBusinessDaysFile($standard_business_days_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->deleteStandardBusinessDaysFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStandardBusinessDaysTag**
> deleteStandardBusinessDaysTag($standard_business_days_id, $standard_business_days_tag)

Delete a tag for a standardBusinessDays.

Deletes an existing standardBusinessDays tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to remove tag from
$standard_business_days_tag = "standard_business_days_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteStandardBusinessDaysTag($standard_business_days_id, $standard_business_days_tag);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->deleteStandardBusinessDaysTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to remove tag from |
 **standard_business_days_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateStandardBusinessDaysById**
> \Infoplus\Infoplus\Model\StandardBusinessDays getDuplicateStandardBusinessDaysById($standard_business_days_id)

Get a duplicated a standardBusinessDays by id

Returns a duplicated standardBusinessDays identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to be duplicated.

try {
    $result = $apiInstance->getDuplicateStandardBusinessDaysById($standard_business_days_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->getDuplicateStandardBusinessDaysById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\StandardBusinessDays**](../Model/StandardBusinessDays.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStandardBusinessDaysByFilter**
> \Infoplus\Infoplus\Model\StandardBusinessDays[] getStandardBusinessDaysByFilter($filter, $page, $limit, $sort)

Search standardBusinessDayses by filter

Returns the list of standardBusinessDayses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
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
    $result = $apiInstance->getStandardBusinessDaysByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->getStandardBusinessDaysByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\StandardBusinessDays[]**](../Model/StandardBusinessDays.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStandardBusinessDaysById**
> \Infoplus\Infoplus\Model\StandardBusinessDays getStandardBusinessDaysById($standard_business_days_id)

Get a standardBusinessDays by id

Returns the standardBusinessDays identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to be returned.

try {
    $result = $apiInstance->getStandardBusinessDaysById($standard_business_days_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->getStandardBusinessDaysById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\StandardBusinessDays**](../Model/StandardBusinessDays.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStandardBusinessDaysFiles**
> getStandardBusinessDaysFiles($standard_business_days_id)

Get the files for a standardBusinessDays.

Get all existing standardBusinessDays files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to get files for

try {
    $apiInstance->getStandardBusinessDaysFiles($standard_business_days_id);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->getStandardBusinessDaysFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStandardBusinessDaysTags**
> getStandardBusinessDaysTags($standard_business_days_id)

Get the tags for a standardBusinessDays.

Get all existing standardBusinessDays tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$standard_business_days_id = 56; // int | Id of the standardBusinessDays to get tags for

try {
    $apiInstance->getStandardBusinessDaysTags($standard_business_days_id);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->getStandardBusinessDaysTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **standard_business_days_id** | **int**| Id of the standardBusinessDays to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStandardBusinessDays**
> updateStandardBusinessDays($body)

Update a standardBusinessDays

Updates an existing standardBusinessDays using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\StandardBusinessDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\StandardBusinessDays(); // \Infoplus\Infoplus\Model\StandardBusinessDays | StandardBusinessDays to be updated.

try {
    $apiInstance->updateStandardBusinessDays($body);
} catch (Exception $e) {
    echo 'Exception when calling StandardBusinessDaysApi->updateStandardBusinessDays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\StandardBusinessDays**](../Model/StandardBusinessDays.md)| StandardBusinessDays to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

