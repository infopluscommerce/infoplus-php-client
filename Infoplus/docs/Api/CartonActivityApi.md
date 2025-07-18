# Infoplus\CartonActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCartonActivity**](CartonActivityApi.md#addCartonActivity) | **POST** /beta/cartonActivity | Create a cartonActivity
[**addCartonActivityAudit**](CartonActivityApi.md#addCartonActivityAudit) | **PUT** /beta/cartonActivity/{cartonActivityId}/audit/{cartonActivityAudit} | Add new audit for a cartonActivity
[**addCartonActivityFile**](CartonActivityApi.md#addCartonActivityFile) | **POST** /beta/cartonActivity/{cartonActivityId}/file/{fileName} | Attach a file to a cartonActivity
[**addCartonActivityFileByURL**](CartonActivityApi.md#addCartonActivityFileByURL) | **POST** /beta/cartonActivity/{cartonActivityId}/file | Attach a file to a cartonActivity by URL.
[**addCartonActivityTag**](CartonActivityApi.md#addCartonActivityTag) | **PUT** /beta/cartonActivity/{cartonActivityId}/tag/{cartonActivityTag} | Add new tags for a cartonActivity.
[**deleteCartonActivity**](CartonActivityApi.md#deleteCartonActivity) | **DELETE** /beta/cartonActivity/{cartonActivityId} | Delete a cartonActivity
[**deleteCartonActivityFile**](CartonActivityApi.md#deleteCartonActivityFile) | **DELETE** /beta/cartonActivity/{cartonActivityId}/file/{fileId} | Delete a file for a cartonActivity.
[**deleteCartonActivityTag**](CartonActivityApi.md#deleteCartonActivityTag) | **DELETE** /beta/cartonActivity/{cartonActivityId}/tag/{cartonActivityTag} | Delete a tag for a cartonActivity.
[**getCartonActivityByFilter**](CartonActivityApi.md#getCartonActivityByFilter) | **GET** /beta/cartonActivity/search | Search cartonActivitys by filter
[**getCartonActivityById**](CartonActivityApi.md#getCartonActivityById) | **GET** /beta/cartonActivity/{cartonActivityId} | Get a cartonActivity by id
[**getCartonActivityFiles**](CartonActivityApi.md#getCartonActivityFiles) | **GET** /beta/cartonActivity/{cartonActivityId}/file | Get the files for a cartonActivity.
[**getCartonActivityTags**](CartonActivityApi.md#getCartonActivityTags) | **GET** /beta/cartonActivity/{cartonActivityId}/tag | Get the tags for a cartonActivity.
[**getDuplicateCartonActivityById**](CartonActivityApi.md#getDuplicateCartonActivityById) | **GET** /beta/cartonActivity/duplicate/{cartonActivityId} | Get a duplicated a cartonActivity by id
[**updateCartonActivity**](CartonActivityApi.md#updateCartonActivity) | **PUT** /beta/cartonActivity | Update a cartonActivity


# **addCartonActivity**
> \Infoplus\Infoplus\Model\CartonActivity addCartonActivity($body)

Create a cartonActivity

Inserts a new cartonActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CartonActivity(); // \Infoplus\Infoplus\Model\CartonActivity | CartonActivity to be inserted.

try {
    $result = $apiInstance->addCartonActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->addCartonActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CartonActivity**](../Model/CartonActivity.md)| CartonActivity to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\CartonActivity**](../Model/CartonActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonActivityAudit**
> addCartonActivityAudit($carton_activity_id, $carton_activity_audit)

Add new audit for a cartonActivity

Adds an audit to an existing cartonActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to add an audit to
$carton_activity_audit = "carton_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addCartonActivityAudit($carton_activity_id, $carton_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->addCartonActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to add an audit to |
 **carton_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonActivityFile**
> addCartonActivityFile($carton_activity_id, $file_name)

Attach a file to a cartonActivity

Adds a file to an existing cartonActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addCartonActivityFile($carton_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->addCartonActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonActivityFileByURL**
> addCartonActivityFileByURL($body, $carton_activity_id)

Attach a file to a cartonActivity by URL.

Adds a file to an existing cartonActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$carton_activity_id = 56; // int | Id of the cartonActivity to add an file to

try {
    $apiInstance->addCartonActivityFileByURL($body, $carton_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->addCartonActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **carton_activity_id** | **int**| Id of the cartonActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonActivityTag**
> addCartonActivityTag($carton_activity_id, $carton_activity_tag)

Add new tags for a cartonActivity.

Adds a tag to an existing cartonActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to add a tag to
$carton_activity_tag = "carton_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addCartonActivityTag($carton_activity_id, $carton_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->addCartonActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to add a tag to |
 **carton_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonActivity**
> deleteCartonActivity($carton_activity_id)

Delete a cartonActivity

Deletes the cartonActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to be deleted.

try {
    $apiInstance->deleteCartonActivity($carton_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->deleteCartonActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonActivityFile**
> deleteCartonActivityFile($carton_activity_id, $file_id)

Delete a file for a cartonActivity.

Deletes an existing cartonActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteCartonActivityFile($carton_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->deleteCartonActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonActivityTag**
> deleteCartonActivityTag($carton_activity_id, $carton_activity_tag)

Delete a tag for a cartonActivity.

Deletes an existing cartonActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to remove tag from
$carton_activity_tag = "carton_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteCartonActivityTag($carton_activity_id, $carton_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->deleteCartonActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to remove tag from |
 **carton_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonActivityByFilter**
> \Infoplus\Infoplus\Model\CartonActivity[] getCartonActivityByFilter($filter, $page, $limit, $sort)

Search cartonActivitys by filter

Returns the list of cartonActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
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
    $result = $apiInstance->getCartonActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->getCartonActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\CartonActivity[]**](../Model/CartonActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonActivityById**
> \Infoplus\Infoplus\Model\CartonActivity getCartonActivityById($carton_activity_id)

Get a cartonActivity by id

Returns the cartonActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to be returned.

try {
    $result = $apiInstance->getCartonActivityById($carton_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->getCartonActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\CartonActivity**](../Model/CartonActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonActivityFiles**
> getCartonActivityFiles($carton_activity_id)

Get the files for a cartonActivity.

Get all existing cartonActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to get files for

try {
    $apiInstance->getCartonActivityFiles($carton_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->getCartonActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonActivityTags**
> getCartonActivityTags($carton_activity_id)

Get the tags for a cartonActivity.

Get all existing cartonActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to get tags for

try {
    $apiInstance->getCartonActivityTags($carton_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->getCartonActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateCartonActivityById**
> \Infoplus\Infoplus\Model\CartonActivity getDuplicateCartonActivityById($carton_activity_id)

Get a duplicated a cartonActivity by id

Returns a duplicated cartonActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_activity_id = 56; // int | Id of the cartonActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateCartonActivityById($carton_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->getDuplicateCartonActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_activity_id** | **int**| Id of the cartonActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\CartonActivity**](../Model/CartonActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCartonActivity**
> updateCartonActivity($body)

Update a cartonActivity

Updates an existing cartonActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CartonActivity(); // \Infoplus\Infoplus\Model\CartonActivity | CartonActivity to be updated.

try {
    $apiInstance->updateCartonActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling CartonActivityApi->updateCartonActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CartonActivity**](../Model/CartonActivity.md)| CartonActivity to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

