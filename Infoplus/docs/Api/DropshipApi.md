# Infoplus\DropshipApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDropshipAudit**](DropshipApi.md#addDropshipAudit) | **PUT** /beta/dropship/{dropshipId}/audit/{dropshipAudit} | Add new audit for a dropship
[**addDropshipFile**](DropshipApi.md#addDropshipFile) | **POST** /beta/dropship/{dropshipId}/file/{fileName} | Attach a file to a dropship
[**addDropshipFileByURL**](DropshipApi.md#addDropshipFileByURL) | **POST** /beta/dropship/{dropshipId}/file | Attach a file to a dropship by URL.
[**addDropshipTag**](DropshipApi.md#addDropshipTag) | **PUT** /beta/dropship/{dropshipId}/tag/{dropshipTag} | Add new tags for a dropship.
[**deleteDropshipFile**](DropshipApi.md#deleteDropshipFile) | **DELETE** /beta/dropship/{dropshipId}/file/{fileId} | Delete a file for a dropship.
[**deleteDropshipTag**](DropshipApi.md#deleteDropshipTag) | **DELETE** /beta/dropship/{dropshipId}/tag/{dropshipTag} | Delete a tag for a dropship.
[**getDropshipByFilter**](DropshipApi.md#getDropshipByFilter) | **GET** /beta/dropship/search | Search dropships by filter
[**getDropshipById**](DropshipApi.md#getDropshipById) | **GET** /beta/dropship/{dropshipId} | Get a dropship by id
[**getDropshipFiles**](DropshipApi.md#getDropshipFiles) | **GET** /beta/dropship/{dropshipId}/file | Get the files for a dropship.
[**getDropshipTags**](DropshipApi.md#getDropshipTags) | **GET** /beta/dropship/{dropshipId}/tag | Get the tags for a dropship.
[**getDuplicateDropshipById**](DropshipApi.md#getDuplicateDropshipById) | **GET** /beta/dropship/duplicate/{dropshipId} | Get a duplicated a dropship by id
[**updateDropship**](DropshipApi.md#updateDropship) | **PUT** /beta/dropship | Update a dropship


# **addDropshipAudit**
> addDropshipAudit($dropship_id, $dropship_audit)

Add new audit for a dropship

Adds an audit to an existing dropship.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to add an audit to
$dropship_audit = "dropship_audit_example"; // string | The audit to add

try {
    $apiInstance->addDropshipAudit($dropship_id, $dropship_audit);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->addDropshipAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to add an audit to |
 **dropship_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDropshipFile**
> addDropshipFile($dropship_id, $file_name)

Attach a file to a dropship

Adds a file to an existing dropship.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addDropshipFile($dropship_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->addDropshipFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDropshipFileByURL**
> addDropshipFileByURL($body, $dropship_id)

Attach a file to a dropship by URL.

Adds a file to an existing dropship by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$dropship_id = 56; // int | Id of the dropship to add an file to

try {
    $apiInstance->addDropshipFileByURL($body, $dropship_id);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->addDropshipFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **dropship_id** | **int**| Id of the dropship to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDropshipTag**
> addDropshipTag($dropship_id, $dropship_tag)

Add new tags for a dropship.

Adds a tag to an existing dropship.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to add a tag to
$dropship_tag = "dropship_tag_example"; // string | The tag to add

try {
    $apiInstance->addDropshipTag($dropship_id, $dropship_tag);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->addDropshipTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to add a tag to |
 **dropship_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDropshipFile**
> deleteDropshipFile($dropship_id, $file_id)

Delete a file for a dropship.

Deletes an existing dropship file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteDropshipFile($dropship_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->deleteDropshipFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDropshipTag**
> deleteDropshipTag($dropship_id, $dropship_tag)

Delete a tag for a dropship.

Deletes an existing dropship tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to remove tag from
$dropship_tag = "dropship_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteDropshipTag($dropship_id, $dropship_tag);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->deleteDropshipTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to remove tag from |
 **dropship_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropshipByFilter**
> \Infoplus\Infoplus\Model\Dropship[] getDropshipByFilter($filter, $page, $limit, $sort)

Search dropships by filter

Returns the list of dropships that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
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
    $result = $apiInstance->getDropshipByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->getDropshipByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Dropship[]**](../Model/Dropship.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropshipById**
> \Infoplus\Infoplus\Model\Dropship getDropshipById($dropship_id)

Get a dropship by id

Returns the dropship identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to be returned.

try {
    $result = $apiInstance->getDropshipById($dropship_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->getDropshipById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Dropship**](../Model/Dropship.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropshipFiles**
> getDropshipFiles($dropship_id)

Get the files for a dropship.

Get all existing dropship files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to get files for

try {
    $apiInstance->getDropshipFiles($dropship_id);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->getDropshipFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDropshipTags**
> getDropshipTags($dropship_id)

Get the tags for a dropship.

Get all existing dropship tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to get tags for

try {
    $apiInstance->getDropshipTags($dropship_id);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->getDropshipTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateDropshipById**
> \Infoplus\Infoplus\Model\Dropship getDuplicateDropshipById($dropship_id)

Get a duplicated a dropship by id

Returns a duplicated dropship identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dropship_id = 56; // int | Id of the dropship to be duplicated.

try {
    $result = $apiInstance->getDuplicateDropshipById($dropship_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->getDuplicateDropshipById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dropship_id** | **int**| Id of the dropship to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Dropship**](../Model/Dropship.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDropship**
> updateDropship($body)

Update a dropship

Updates an existing dropship using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DropshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Dropship(); // \Infoplus\Infoplus\Model\Dropship | Dropship to be updated.

try {
    $apiInstance->updateDropship($body);
} catch (Exception $e) {
    echo 'Exception when calling DropshipApi->updateDropship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Dropship**](../Model/Dropship.md)| Dropship to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

