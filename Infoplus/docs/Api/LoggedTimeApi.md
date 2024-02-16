# Infoplus\LoggedTimeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoggedTimeAudit**](LoggedTimeApi.md#addLoggedTimeAudit) | **PUT** /beta/loggedTime/{loggedTimeId}/audit/{loggedTimeAudit} | Add new audit for a loggedTime
[**addLoggedTimeFile**](LoggedTimeApi.md#addLoggedTimeFile) | **POST** /beta/loggedTime/{loggedTimeId}/file/{fileName} | Attach a file to a loggedTime
[**addLoggedTimeFileByURL**](LoggedTimeApi.md#addLoggedTimeFileByURL) | **POST** /beta/loggedTime/{loggedTimeId}/file | Attach a file to a loggedTime by URL.
[**addLoggedTimeTag**](LoggedTimeApi.md#addLoggedTimeTag) | **PUT** /beta/loggedTime/{loggedTimeId}/tag/{loggedTimeTag} | Add new tags for a loggedTime.
[**deleteLoggedTimeFile**](LoggedTimeApi.md#deleteLoggedTimeFile) | **DELETE** /beta/loggedTime/{loggedTimeId}/file/{fileId} | Delete a file for a loggedTime.
[**deleteLoggedTimeTag**](LoggedTimeApi.md#deleteLoggedTimeTag) | **DELETE** /beta/loggedTime/{loggedTimeId}/tag/{loggedTimeTag} | Delete a tag for a loggedTime.
[**getDuplicateLoggedTimeById**](LoggedTimeApi.md#getDuplicateLoggedTimeById) | **GET** /beta/loggedTime/duplicate/{loggedTimeId} | Get a duplicated a loggedTime by id
[**getLoggedTimeByFilter**](LoggedTimeApi.md#getLoggedTimeByFilter) | **GET** /beta/loggedTime/search | Search loggedTimes by filter
[**getLoggedTimeById**](LoggedTimeApi.md#getLoggedTimeById) | **GET** /beta/loggedTime/{loggedTimeId} | Get a loggedTime by id
[**getLoggedTimeFiles**](LoggedTimeApi.md#getLoggedTimeFiles) | **GET** /beta/loggedTime/{loggedTimeId}/file | Get the files for a loggedTime.
[**getLoggedTimeTags**](LoggedTimeApi.md#getLoggedTimeTags) | **GET** /beta/loggedTime/{loggedTimeId}/tag | Get the tags for a loggedTime.
[**updateLoggedTimeCustomFields**](LoggedTimeApi.md#updateLoggedTimeCustomFields) | **PUT** /beta/loggedTime/customFields | Update a loggedTime custom fields


# **addLoggedTimeAudit**
> addLoggedTimeAudit($logged_time_id, $logged_time_audit)

Add new audit for a loggedTime

Adds an audit to an existing loggedTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to add an audit to
$logged_time_audit = "logged_time_audit_example"; // string | The audit to add

try {
    $apiInstance->addLoggedTimeAudit($logged_time_id, $logged_time_audit);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->addLoggedTimeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to add an audit to |
 **logged_time_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoggedTimeFile**
> addLoggedTimeFile($logged_time_id, $file_name)

Attach a file to a loggedTime

Adds a file to an existing loggedTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLoggedTimeFile($logged_time_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->addLoggedTimeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoggedTimeFileByURL**
> addLoggedTimeFileByURL($body, $logged_time_id)

Attach a file to a loggedTime by URL.

Adds a file to an existing loggedTime by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$logged_time_id = 56; // int | Id of the loggedTime to add an file to

try {
    $apiInstance->addLoggedTimeFileByURL($body, $logged_time_id);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->addLoggedTimeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **logged_time_id** | **int**| Id of the loggedTime to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoggedTimeTag**
> addLoggedTimeTag($logged_time_id, $logged_time_tag)

Add new tags for a loggedTime.

Adds a tag to an existing loggedTime.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to add a tag to
$logged_time_tag = "logged_time_tag_example"; // string | The tag to add

try {
    $apiInstance->addLoggedTimeTag($logged_time_id, $logged_time_tag);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->addLoggedTimeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to add a tag to |
 **logged_time_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoggedTimeFile**
> deleteLoggedTimeFile($logged_time_id, $file_id)

Delete a file for a loggedTime.

Deletes an existing loggedTime file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLoggedTimeFile($logged_time_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->deleteLoggedTimeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoggedTimeTag**
> deleteLoggedTimeTag($logged_time_id, $logged_time_tag)

Delete a tag for a loggedTime.

Deletes an existing loggedTime tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to remove tag from
$logged_time_tag = "logged_time_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLoggedTimeTag($logged_time_id, $logged_time_tag);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->deleteLoggedTimeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to remove tag from |
 **logged_time_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLoggedTimeById**
> \Infoplus\Infoplus\Model\LoggedTime getDuplicateLoggedTimeById($logged_time_id)

Get a duplicated a loggedTime by id

Returns a duplicated loggedTime identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to be duplicated.

try {
    $result = $apiInstance->getDuplicateLoggedTimeById($logged_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getDuplicateLoggedTimeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LoggedTime**](../Model/LoggedTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedTimeByFilter**
> \Infoplus\Infoplus\Model\LoggedTime[] getLoggedTimeByFilter($filter, $page, $limit, $sort)

Search loggedTimes by filter

Returns the list of loggedTimes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
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
    $result = $apiInstance->getLoggedTimeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LoggedTime[]**](../Model/LoggedTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedTimeById**
> \Infoplus\Infoplus\Model\LoggedTime getLoggedTimeById($logged_time_id)

Get a loggedTime by id

Returns the loggedTime identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to be returned.

try {
    $result = $apiInstance->getLoggedTimeById($logged_time_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LoggedTime**](../Model/LoggedTime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedTimeFiles**
> getLoggedTimeFiles($logged_time_id)

Get the files for a loggedTime.

Get all existing loggedTime files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to get files for

try {
    $apiInstance->getLoggedTimeFiles($logged_time_id);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedTimeTags**
> getLoggedTimeTags($logged_time_id)

Get the tags for a loggedTime.

Get all existing loggedTime tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$logged_time_id = 56; // int | Id of the loggedTime to get tags for

try {
    $apiInstance->getLoggedTimeTags($logged_time_id);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->getLoggedTimeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logged_time_id** | **int**| Id of the loggedTime to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoggedTimeCustomFields**
> updateLoggedTimeCustomFields($body)

Update a loggedTime custom fields

Updates an existing loggedTime custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoggedTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LoggedTime(); // \Infoplus\Infoplus\Model\LoggedTime | LoggedTime to be updated.

try {
    $apiInstance->updateLoggedTimeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LoggedTimeApi->updateLoggedTimeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LoggedTime**](../Model/LoggedTime.md)| LoggedTime to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

