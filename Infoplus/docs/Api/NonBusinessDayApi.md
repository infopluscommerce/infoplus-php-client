# Infoplus\NonBusinessDayApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNonBusinessDay**](NonBusinessDayApi.md#addNonBusinessDay) | **POST** /beta/nonBusinessDay | Create a nonBusinessDay
[**addNonBusinessDayAudit**](NonBusinessDayApi.md#addNonBusinessDayAudit) | **PUT** /beta/nonBusinessDay/{nonBusinessDayId}/audit/{nonBusinessDayAudit} | Add new audit for a nonBusinessDay
[**addNonBusinessDayFile**](NonBusinessDayApi.md#addNonBusinessDayFile) | **POST** /beta/nonBusinessDay/{nonBusinessDayId}/file/{fileName} | Attach a file to a nonBusinessDay
[**addNonBusinessDayFileByURL**](NonBusinessDayApi.md#addNonBusinessDayFileByURL) | **POST** /beta/nonBusinessDay/{nonBusinessDayId}/file | Attach a file to a nonBusinessDay by URL.
[**addNonBusinessDayTag**](NonBusinessDayApi.md#addNonBusinessDayTag) | **PUT** /beta/nonBusinessDay/{nonBusinessDayId}/tag/{nonBusinessDayTag} | Add new tags for a nonBusinessDay.
[**deleteNonBusinessDay**](NonBusinessDayApi.md#deleteNonBusinessDay) | **DELETE** /beta/nonBusinessDay/{nonBusinessDayId} | Delete a nonBusinessDay
[**deleteNonBusinessDayFile**](NonBusinessDayApi.md#deleteNonBusinessDayFile) | **DELETE** /beta/nonBusinessDay/{nonBusinessDayId}/file/{fileId} | Delete a file for a nonBusinessDay.
[**deleteNonBusinessDayTag**](NonBusinessDayApi.md#deleteNonBusinessDayTag) | **DELETE** /beta/nonBusinessDay/{nonBusinessDayId}/tag/{nonBusinessDayTag} | Delete a tag for a nonBusinessDay.
[**getDuplicateNonBusinessDayById**](NonBusinessDayApi.md#getDuplicateNonBusinessDayById) | **GET** /beta/nonBusinessDay/duplicate/{nonBusinessDayId} | Get a duplicated a nonBusinessDay by id
[**getNonBusinessDayByFilter**](NonBusinessDayApi.md#getNonBusinessDayByFilter) | **GET** /beta/nonBusinessDay/search | Search nonBusinessDays by filter
[**getNonBusinessDayById**](NonBusinessDayApi.md#getNonBusinessDayById) | **GET** /beta/nonBusinessDay/{nonBusinessDayId} | Get a nonBusinessDay by id
[**getNonBusinessDayFiles**](NonBusinessDayApi.md#getNonBusinessDayFiles) | **GET** /beta/nonBusinessDay/{nonBusinessDayId}/file | Get the files for a nonBusinessDay.
[**getNonBusinessDayTags**](NonBusinessDayApi.md#getNonBusinessDayTags) | **GET** /beta/nonBusinessDay/{nonBusinessDayId}/tag | Get the tags for a nonBusinessDay.
[**updateNonBusinessDay**](NonBusinessDayApi.md#updateNonBusinessDay) | **PUT** /beta/nonBusinessDay | Update a nonBusinessDay


# **addNonBusinessDay**
> \Infoplus\Infoplus\Model\NonBusinessDay addNonBusinessDay($body)

Create a nonBusinessDay

Inserts a new nonBusinessDay using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\NonBusinessDay(); // \Infoplus\Infoplus\Model\NonBusinessDay | NonBusinessDay to be inserted.

try {
    $result = $apiInstance->addNonBusinessDay($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->addNonBusinessDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\NonBusinessDay**](../Model/NonBusinessDay.md)| NonBusinessDay to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\NonBusinessDay**](../Model/NonBusinessDay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNonBusinessDayAudit**
> addNonBusinessDayAudit($non_business_day_id, $non_business_day_audit)

Add new audit for a nonBusinessDay

Adds an audit to an existing nonBusinessDay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to add an audit to
$non_business_day_audit = "non_business_day_audit_example"; // string | The audit to add

try {
    $apiInstance->addNonBusinessDayAudit($non_business_day_id, $non_business_day_audit);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->addNonBusinessDayAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to add an audit to |
 **non_business_day_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNonBusinessDayFile**
> addNonBusinessDayFile($non_business_day_id, $file_name)

Attach a file to a nonBusinessDay

Adds a file to an existing nonBusinessDay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addNonBusinessDayFile($non_business_day_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->addNonBusinessDayFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNonBusinessDayFileByURL**
> addNonBusinessDayFileByURL($body, $non_business_day_id)

Attach a file to a nonBusinessDay by URL.

Adds a file to an existing nonBusinessDay by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$non_business_day_id = 56; // int | Id of the nonBusinessDay to add an file to

try {
    $apiInstance->addNonBusinessDayFileByURL($body, $non_business_day_id);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->addNonBusinessDayFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **non_business_day_id** | **int**| Id of the nonBusinessDay to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNonBusinessDayTag**
> addNonBusinessDayTag($non_business_day_id, $non_business_day_tag)

Add new tags for a nonBusinessDay.

Adds a tag to an existing nonBusinessDay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to add a tag to
$non_business_day_tag = "non_business_day_tag_example"; // string | The tag to add

try {
    $apiInstance->addNonBusinessDayTag($non_business_day_id, $non_business_day_tag);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->addNonBusinessDayTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to add a tag to |
 **non_business_day_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNonBusinessDay**
> deleteNonBusinessDay($non_business_day_id)

Delete a nonBusinessDay

Deletes the nonBusinessDay identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to be deleted.

try {
    $apiInstance->deleteNonBusinessDay($non_business_day_id);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->deleteNonBusinessDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNonBusinessDayFile**
> deleteNonBusinessDayFile($non_business_day_id, $file_id)

Delete a file for a nonBusinessDay.

Deletes an existing nonBusinessDay file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteNonBusinessDayFile($non_business_day_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->deleteNonBusinessDayFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNonBusinessDayTag**
> deleteNonBusinessDayTag($non_business_day_id, $non_business_day_tag)

Delete a tag for a nonBusinessDay.

Deletes an existing nonBusinessDay tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to remove tag from
$non_business_day_tag = "non_business_day_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteNonBusinessDayTag($non_business_day_id, $non_business_day_tag);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->deleteNonBusinessDayTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to remove tag from |
 **non_business_day_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateNonBusinessDayById**
> \Infoplus\Infoplus\Model\NonBusinessDay getDuplicateNonBusinessDayById($non_business_day_id)

Get a duplicated a nonBusinessDay by id

Returns a duplicated nonBusinessDay identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to be duplicated.

try {
    $result = $apiInstance->getDuplicateNonBusinessDayById($non_business_day_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->getDuplicateNonBusinessDayById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\NonBusinessDay**](../Model/NonBusinessDay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNonBusinessDayByFilter**
> \Infoplus\Infoplus\Model\NonBusinessDay[] getNonBusinessDayByFilter($filter, $page, $limit, $sort)

Search nonBusinessDays by filter

Returns the list of nonBusinessDays that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
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
    $result = $apiInstance->getNonBusinessDayByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->getNonBusinessDayByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\NonBusinessDay[]**](../Model/NonBusinessDay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNonBusinessDayById**
> \Infoplus\Infoplus\Model\NonBusinessDay getNonBusinessDayById($non_business_day_id)

Get a nonBusinessDay by id

Returns the nonBusinessDay identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to be returned.

try {
    $result = $apiInstance->getNonBusinessDayById($non_business_day_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->getNonBusinessDayById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\NonBusinessDay**](../Model/NonBusinessDay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNonBusinessDayFiles**
> getNonBusinessDayFiles($non_business_day_id)

Get the files for a nonBusinessDay.

Get all existing nonBusinessDay files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to get files for

try {
    $apiInstance->getNonBusinessDayFiles($non_business_day_id);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->getNonBusinessDayFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNonBusinessDayTags**
> getNonBusinessDayTags($non_business_day_id)

Get the tags for a nonBusinessDay.

Get all existing nonBusinessDay tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$non_business_day_id = 56; // int | Id of the nonBusinessDay to get tags for

try {
    $apiInstance->getNonBusinessDayTags($non_business_day_id);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->getNonBusinessDayTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **non_business_day_id** | **int**| Id of the nonBusinessDay to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNonBusinessDay**
> updateNonBusinessDay($body)

Update a nonBusinessDay

Updates an existing nonBusinessDay using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\NonBusinessDayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\NonBusinessDay(); // \Infoplus\Infoplus\Model\NonBusinessDay | NonBusinessDay to be updated.

try {
    $apiInstance->updateNonBusinessDay($body);
} catch (Exception $e) {
    echo 'Exception when calling NonBusinessDayApi->updateNonBusinessDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\NonBusinessDay**](../Model/NonBusinessDay.md)| NonBusinessDay to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

