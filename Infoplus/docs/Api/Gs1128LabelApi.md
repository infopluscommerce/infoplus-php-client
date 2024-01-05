# Infoplus\Gs1128LabelApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGs1128LabelAudit**](Gs1128LabelApi.md#addGs1128LabelAudit) | **PUT** /beta/gs1128Label/{gs1128LabelId}/audit/{gs1128LabelAudit} | Add new audit for a gs1128Label
[**addGs1128LabelFile**](Gs1128LabelApi.md#addGs1128LabelFile) | **POST** /beta/gs1128Label/{gs1128LabelId}/file/{fileName} | Attach a file to a gs1128Label
[**addGs1128LabelFileByURL**](Gs1128LabelApi.md#addGs1128LabelFileByURL) | **POST** /beta/gs1128Label/{gs1128LabelId}/file | Attach a file to a gs1128Label by URL.
[**addGs1128LabelTag**](Gs1128LabelApi.md#addGs1128LabelTag) | **PUT** /beta/gs1128Label/{gs1128LabelId}/tag/{gs1128LabelTag} | Add new tags for a gs1128Label.
[**deleteGs1128Label**](Gs1128LabelApi.md#deleteGs1128Label) | **DELETE** /beta/gs1128Label/{gs1128LabelId} | Delete a gs1128Label
[**deleteGs1128LabelFile**](Gs1128LabelApi.md#deleteGs1128LabelFile) | **DELETE** /beta/gs1128Label/{gs1128LabelId}/file/{fileId} | Delete a file for a gs1128Label.
[**deleteGs1128LabelTag**](Gs1128LabelApi.md#deleteGs1128LabelTag) | **DELETE** /beta/gs1128Label/{gs1128LabelId}/tag/{gs1128LabelTag} | Delete a tag for a gs1128Label.
[**getDuplicateGs1128LabelById**](Gs1128LabelApi.md#getDuplicateGs1128LabelById) | **GET** /beta/gs1128Label/duplicate/{gs1128LabelId} | Get a duplicated a gs1128Label by id
[**getGs1128LabelByFilter**](Gs1128LabelApi.md#getGs1128LabelByFilter) | **GET** /beta/gs1128Label/search | Search gs1128Labels by filter
[**getGs1128LabelById**](Gs1128LabelApi.md#getGs1128LabelById) | **GET** /beta/gs1128Label/{gs1128LabelId} | Get a gs1128Label by id
[**getGs1128LabelFiles**](Gs1128LabelApi.md#getGs1128LabelFiles) | **GET** /beta/gs1128Label/{gs1128LabelId}/file | Get the files for a gs1128Label.
[**getGs1128LabelTags**](Gs1128LabelApi.md#getGs1128LabelTags) | **GET** /beta/gs1128Label/{gs1128LabelId}/tag | Get the tags for a gs1128Label.
[**updateGs1128LabelCustomFields**](Gs1128LabelApi.md#updateGs1128LabelCustomFields) | **PUT** /beta/gs1128Label/customFields | Update a gs1128Label custom fields


# **addGs1128LabelAudit**
> addGs1128LabelAudit($gs1128_label_id, $gs1128_label_audit)

Add new audit for a gs1128Label

Adds an audit to an existing gs1128Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to add an audit to
$gs1128_label_audit = "gs1128_label_audit_example"; // string | The audit to add

try {
    $apiInstance->addGs1128LabelAudit($gs1128_label_id, $gs1128_label_audit);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->addGs1128LabelAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to add an audit to |
 **gs1128_label_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128LabelFile**
> addGs1128LabelFile($gs1128_label_id, $file_name)

Attach a file to a gs1128Label

Adds a file to an existing gs1128Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addGs1128LabelFile($gs1128_label_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->addGs1128LabelFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128LabelFileByURL**
> addGs1128LabelFileByURL($body, $gs1128_label_id)

Attach a file to a gs1128Label by URL.

Adds a file to an existing gs1128Label by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$gs1128_label_id = 56; // int | Id of the gs1128Label to add an file to

try {
    $apiInstance->addGs1128LabelFileByURL($body, $gs1128_label_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->addGs1128LabelFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **gs1128_label_id** | **int**| Id of the gs1128Label to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128LabelTag**
> addGs1128LabelTag($gs1128_label_id, $gs1128_label_tag)

Add new tags for a gs1128Label.

Adds a tag to an existing gs1128Label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to add a tag to
$gs1128_label_tag = "gs1128_label_tag_example"; // string | The tag to add

try {
    $apiInstance->addGs1128LabelTag($gs1128_label_id, $gs1128_label_tag);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->addGs1128LabelTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to add a tag to |
 **gs1128_label_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128Label**
> deleteGs1128Label($gs1128_label_id)

Delete a gs1128Label

Deletes the gs1128Label identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to be deleted.

try {
    $apiInstance->deleteGs1128Label($gs1128_label_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->deleteGs1128Label: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128LabelFile**
> deleteGs1128LabelFile($gs1128_label_id, $file_id)

Delete a file for a gs1128Label.

Deletes an existing gs1128Label file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteGs1128LabelFile($gs1128_label_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->deleteGs1128LabelFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128LabelTag**
> deleteGs1128LabelTag($gs1128_label_id, $gs1128_label_tag)

Delete a tag for a gs1128Label.

Deletes an existing gs1128Label tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to remove tag from
$gs1128_label_tag = "gs1128_label_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteGs1128LabelTag($gs1128_label_id, $gs1128_label_tag);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->deleteGs1128LabelTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to remove tag from |
 **gs1128_label_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateGs1128LabelById**
> \Infoplus\Infoplus\Model\Gs1128Label getDuplicateGs1128LabelById($gs1128_label_id)

Get a duplicated a gs1128Label by id

Returns a duplicated gs1128Label identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to be duplicated.

try {
    $result = $apiInstance->getDuplicateGs1128LabelById($gs1128_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->getDuplicateGs1128LabelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Gs1128Label**](../Model/Gs1128Label.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128LabelByFilter**
> \Infoplus\Infoplus\Model\Gs1128Label[] getGs1128LabelByFilter($filter, $page, $limit, $sort)

Search gs1128Labels by filter

Returns the list of gs1128Labels that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
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
    $result = $apiInstance->getGs1128LabelByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->getGs1128LabelByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Gs1128Label[]**](../Model/Gs1128Label.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128LabelById**
> \Infoplus\Infoplus\Model\Gs1128Label getGs1128LabelById($gs1128_label_id)

Get a gs1128Label by id

Returns the gs1128Label identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to be returned.

try {
    $result = $apiInstance->getGs1128LabelById($gs1128_label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->getGs1128LabelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Gs1128Label**](../Model/Gs1128Label.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128LabelFiles**
> getGs1128LabelFiles($gs1128_label_id)

Get the files for a gs1128Label.

Get all existing gs1128Label files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to get files for

try {
    $apiInstance->getGs1128LabelFiles($gs1128_label_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->getGs1128LabelFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128LabelTags**
> getGs1128LabelTags($gs1128_label_id)

Get the tags for a gs1128Label.

Get all existing gs1128Label tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_label_id = 56; // int | Id of the gs1128Label to get tags for

try {
    $apiInstance->getGs1128LabelTags($gs1128_label_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->getGs1128LabelTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_label_id** | **int**| Id of the gs1128Label to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGs1128LabelCustomFields**
> updateGs1128LabelCustomFields($body)

Update a gs1128Label custom fields

Updates an existing gs1128Label custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128LabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Gs1128Label(); // \Infoplus\Infoplus\Model\Gs1128Label | Gs1128Label to be updated.

try {
    $apiInstance->updateGs1128LabelCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128LabelApi->updateGs1128LabelCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Gs1128Label**](../Model/Gs1128Label.md)| Gs1128Label to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

