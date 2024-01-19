# Infoplus\LoadContentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLoadContentAudit**](LoadContentApi.md#addLoadContentAudit) | **PUT** /beta/loadContent/{loadContentId}/audit/{loadContentAudit} | Add new audit for a loadContent
[**addLoadContentFile**](LoadContentApi.md#addLoadContentFile) | **POST** /beta/loadContent/{loadContentId}/file/{fileName} | Attach a file to a loadContent
[**addLoadContentFileByURL**](LoadContentApi.md#addLoadContentFileByURL) | **POST** /beta/loadContent/{loadContentId}/file | Attach a file to a loadContent by URL.
[**addLoadContentTag**](LoadContentApi.md#addLoadContentTag) | **PUT** /beta/loadContent/{loadContentId}/tag/{loadContentTag} | Add new tags for a loadContent.
[**deleteLoadContentFile**](LoadContentApi.md#deleteLoadContentFile) | **DELETE** /beta/loadContent/{loadContentId}/file/{fileId} | Delete a file for a loadContent.
[**deleteLoadContentTag**](LoadContentApi.md#deleteLoadContentTag) | **DELETE** /beta/loadContent/{loadContentId}/tag/{loadContentTag} | Delete a tag for a loadContent.
[**getDuplicateLoadContentById**](LoadContentApi.md#getDuplicateLoadContentById) | **GET** /beta/loadContent/duplicate/{loadContentId} | Get a duplicated a loadContent by id
[**getLoadContentByFilter**](LoadContentApi.md#getLoadContentByFilter) | **GET** /beta/loadContent/search | Search loadContents by filter
[**getLoadContentById**](LoadContentApi.md#getLoadContentById) | **GET** /beta/loadContent/{loadContentId} | Get a loadContent by id
[**getLoadContentFiles**](LoadContentApi.md#getLoadContentFiles) | **GET** /beta/loadContent/{loadContentId}/file | Get the files for a loadContent.
[**getLoadContentTags**](LoadContentApi.md#getLoadContentTags) | **GET** /beta/loadContent/{loadContentId}/tag | Get the tags for a loadContent.
[**updateLoadContentCustomFields**](LoadContentApi.md#updateLoadContentCustomFields) | **PUT** /beta/loadContent/customFields | Update a loadContent custom fields


# **addLoadContentAudit**
> addLoadContentAudit($load_content_id, $load_content_audit)

Add new audit for a loadContent

Adds an audit to an existing loadContent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to add an audit to
$load_content_audit = "load_content_audit_example"; // string | The audit to add

try {
    $apiInstance->addLoadContentAudit($load_content_id, $load_content_audit);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->addLoadContentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to add an audit to |
 **load_content_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoadContentFile**
> addLoadContentFile($load_content_id, $file_name)

Attach a file to a loadContent

Adds a file to an existing loadContent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLoadContentFile($load_content_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->addLoadContentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoadContentFileByURL**
> addLoadContentFileByURL($body, $load_content_id)

Attach a file to a loadContent by URL.

Adds a file to an existing loadContent by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$load_content_id = 56; // int | Id of the loadContent to add an file to

try {
    $apiInstance->addLoadContentFileByURL($body, $load_content_id);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->addLoadContentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **load_content_id** | **int**| Id of the loadContent to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLoadContentTag**
> addLoadContentTag($load_content_id, $load_content_tag)

Add new tags for a loadContent.

Adds a tag to an existing loadContent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to add a tag to
$load_content_tag = "load_content_tag_example"; // string | The tag to add

try {
    $apiInstance->addLoadContentTag($load_content_id, $load_content_tag);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->addLoadContentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to add a tag to |
 **load_content_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoadContentFile**
> deleteLoadContentFile($load_content_id, $file_id)

Delete a file for a loadContent.

Deletes an existing loadContent file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLoadContentFile($load_content_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->deleteLoadContentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLoadContentTag**
> deleteLoadContentTag($load_content_id, $load_content_tag)

Delete a tag for a loadContent.

Deletes an existing loadContent tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to remove tag from
$load_content_tag = "load_content_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLoadContentTag($load_content_id, $load_content_tag);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->deleteLoadContentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to remove tag from |
 **load_content_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLoadContentById**
> \Infoplus\Infoplus\Model\LoadContent getDuplicateLoadContentById($load_content_id)

Get a duplicated a loadContent by id

Returns a duplicated loadContent identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to be duplicated.

try {
    $result = $apiInstance->getDuplicateLoadContentById($load_content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->getDuplicateLoadContentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LoadContent**](../Model/LoadContent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoadContentByFilter**
> \Infoplus\Infoplus\Model\LoadContent[] getLoadContentByFilter($filter, $page, $limit, $sort)

Search loadContents by filter

Returns the list of loadContents that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
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
    $result = $apiInstance->getLoadContentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->getLoadContentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LoadContent[]**](../Model/LoadContent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoadContentById**
> \Infoplus\Infoplus\Model\LoadContent getLoadContentById($load_content_id)

Get a loadContent by id

Returns the loadContent identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to be returned.

try {
    $result = $apiInstance->getLoadContentById($load_content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->getLoadContentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LoadContent**](../Model/LoadContent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoadContentFiles**
> getLoadContentFiles($load_content_id)

Get the files for a loadContent.

Get all existing loadContent files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to get files for

try {
    $apiInstance->getLoadContentFiles($load_content_id);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->getLoadContentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoadContentTags**
> getLoadContentTags($load_content_id)

Get the tags for a loadContent.

Get all existing loadContent tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$load_content_id = 56; // int | Id of the loadContent to get tags for

try {
    $apiInstance->getLoadContentTags($load_content_id);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->getLoadContentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **load_content_id** | **int**| Id of the loadContent to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoadContentCustomFields**
> updateLoadContentCustomFields($body)

Update a loadContent custom fields

Updates an existing loadContent custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LoadContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LoadContent(); // \Infoplus\Infoplus\Model\LoadContent | LoadContent to be updated.

try {
    $apiInstance->updateLoadContentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LoadContentApi->updateLoadContentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LoadContent**](../Model/LoadContent.md)| LoadContent to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

