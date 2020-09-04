# Infoplus\Gs1128TemplateApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGs1128Template**](Gs1128TemplateApi.md#addGs1128Template) | **POST** /beta/gs1128Template | Create a gs1128Template
[**addGs1128TemplateAudit**](Gs1128TemplateApi.md#addGs1128TemplateAudit) | **PUT** /beta/gs1128Template/{gs1128TemplateId}/audit/{gs1128TemplateAudit} | Add new audit for a gs1128Template
[**addGs1128TemplateFile**](Gs1128TemplateApi.md#addGs1128TemplateFile) | **POST** /beta/gs1128Template/{gs1128TemplateId}/file/{fileName} | Attach a file to a gs1128Template
[**addGs1128TemplateFileByURL**](Gs1128TemplateApi.md#addGs1128TemplateFileByURL) | **POST** /beta/gs1128Template/{gs1128TemplateId}/file | Attach a file to a gs1128Template by URL.
[**addGs1128TemplateTag**](Gs1128TemplateApi.md#addGs1128TemplateTag) | **PUT** /beta/gs1128Template/{gs1128TemplateId}/tag/{gs1128TemplateTag} | Add new tags for a gs1128Template.
[**deleteGs1128Template**](Gs1128TemplateApi.md#deleteGs1128Template) | **DELETE** /beta/gs1128Template/{gs1128TemplateId} | Delete a gs1128Template
[**deleteGs1128TemplateFile**](Gs1128TemplateApi.md#deleteGs1128TemplateFile) | **DELETE** /beta/gs1128Template/{gs1128TemplateId}/file/{fileId} | Delete a file for a gs1128Template.
[**deleteGs1128TemplateTag**](Gs1128TemplateApi.md#deleteGs1128TemplateTag) | **DELETE** /beta/gs1128Template/{gs1128TemplateId}/tag/{gs1128TemplateTag} | Delete a tag for a gs1128Template.
[**getDuplicateGs1128TemplateById**](Gs1128TemplateApi.md#getDuplicateGs1128TemplateById) | **GET** /beta/gs1128Template/duplicate/{gs1128TemplateId} | Get a duplicated a gs1128Template by id
[**getGs1128TemplateByFilter**](Gs1128TemplateApi.md#getGs1128TemplateByFilter) | **GET** /beta/gs1128Template/search | Search gs1128Templates by filter
[**getGs1128TemplateById**](Gs1128TemplateApi.md#getGs1128TemplateById) | **GET** /beta/gs1128Template/{gs1128TemplateId} | Get a gs1128Template by id
[**getGs1128TemplateFiles**](Gs1128TemplateApi.md#getGs1128TemplateFiles) | **GET** /beta/gs1128Template/{gs1128TemplateId}/file | Get the files for a gs1128Template.
[**getGs1128TemplateTags**](Gs1128TemplateApi.md#getGs1128TemplateTags) | **GET** /beta/gs1128Template/{gs1128TemplateId}/tag | Get the tags for a gs1128Template.
[**updateGs1128Template**](Gs1128TemplateApi.md#updateGs1128Template) | **PUT** /beta/gs1128Template | Update a gs1128Template


# **addGs1128Template**
> \Infoplus\Infoplus\Model\Gs1128Template addGs1128Template($body)

Create a gs1128Template

Inserts a new gs1128Template using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Gs1128Template(); // \Infoplus\Infoplus\Model\Gs1128Template | Gs1128Template to be inserted.

try {
    $result = $apiInstance->addGs1128Template($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->addGs1128Template: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Gs1128Template**](../Model/Gs1128Template.md)| Gs1128Template to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\Gs1128Template**](../Model/Gs1128Template.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128TemplateAudit**
> addGs1128TemplateAudit($gs1128_template_id, $gs1128_template_audit)

Add new audit for a gs1128Template

Adds an audit to an existing gs1128Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to add an audit to
$gs1128_template_audit = "gs1128_template_audit_example"; // string | The audit to add

try {
    $apiInstance->addGs1128TemplateAudit($gs1128_template_id, $gs1128_template_audit);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->addGs1128TemplateAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to add an audit to |
 **gs1128_template_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128TemplateFile**
> addGs1128TemplateFile($gs1128_template_id, $file_name)

Attach a file to a gs1128Template

Adds a file to an existing gs1128Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addGs1128TemplateFile($gs1128_template_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->addGs1128TemplateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128TemplateFileByURL**
> addGs1128TemplateFileByURL($body, $gs1128_template_id)

Attach a file to a gs1128Template by URL.

Adds a file to an existing gs1128Template by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$gs1128_template_id = 56; // int | Id of the gs1128Template to add an file to

try {
    $apiInstance->addGs1128TemplateFileByURL($body, $gs1128_template_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->addGs1128TemplateFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **gs1128_template_id** | **int**| Id of the gs1128Template to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGs1128TemplateTag**
> addGs1128TemplateTag($gs1128_template_id, $gs1128_template_tag)

Add new tags for a gs1128Template.

Adds a tag to an existing gs1128Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to add a tag to
$gs1128_template_tag = "gs1128_template_tag_example"; // string | The tag to add

try {
    $apiInstance->addGs1128TemplateTag($gs1128_template_id, $gs1128_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->addGs1128TemplateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to add a tag to |
 **gs1128_template_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128Template**
> deleteGs1128Template($gs1128_template_id)

Delete a gs1128Template

Deletes the gs1128Template identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to be deleted.

try {
    $apiInstance->deleteGs1128Template($gs1128_template_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->deleteGs1128Template: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128TemplateFile**
> deleteGs1128TemplateFile($gs1128_template_id, $file_id)

Delete a file for a gs1128Template.

Deletes an existing gs1128Template file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteGs1128TemplateFile($gs1128_template_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->deleteGs1128TemplateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGs1128TemplateTag**
> deleteGs1128TemplateTag($gs1128_template_id, $gs1128_template_tag)

Delete a tag for a gs1128Template.

Deletes an existing gs1128Template tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to remove tag from
$gs1128_template_tag = "gs1128_template_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteGs1128TemplateTag($gs1128_template_id, $gs1128_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->deleteGs1128TemplateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to remove tag from |
 **gs1128_template_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateGs1128TemplateById**
> \Infoplus\Infoplus\Model\Gs1128Template getDuplicateGs1128TemplateById($gs1128_template_id)

Get a duplicated a gs1128Template by id

Returns a duplicated gs1128Template identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to be duplicated.

try {
    $result = $apiInstance->getDuplicateGs1128TemplateById($gs1128_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->getDuplicateGs1128TemplateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Gs1128Template**](../Model/Gs1128Template.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128TemplateByFilter**
> \Infoplus\Infoplus\Model\Gs1128Template[] getGs1128TemplateByFilter($filter, $page, $limit, $sort)

Search gs1128Templates by filter

Returns the list of gs1128Templates that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
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
    $result = $apiInstance->getGs1128TemplateByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->getGs1128TemplateByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Gs1128Template[]**](../Model/Gs1128Template.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128TemplateById**
> \Infoplus\Infoplus\Model\Gs1128Template getGs1128TemplateById($gs1128_template_id)

Get a gs1128Template by id

Returns the gs1128Template identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to be returned.

try {
    $result = $apiInstance->getGs1128TemplateById($gs1128_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->getGs1128TemplateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Gs1128Template**](../Model/Gs1128Template.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128TemplateFiles**
> getGs1128TemplateFiles($gs1128_template_id)

Get the files for a gs1128Template.

Get all existing gs1128Template files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to get files for

try {
    $apiInstance->getGs1128TemplateFiles($gs1128_template_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->getGs1128TemplateFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGs1128TemplateTags**
> getGs1128TemplateTags($gs1128_template_id)

Get the tags for a gs1128Template.

Get all existing gs1128Template tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gs1128_template_id = 56; // int | Id of the gs1128Template to get tags for

try {
    $apiInstance->getGs1128TemplateTags($gs1128_template_id);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->getGs1128TemplateTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gs1128_template_id** | **int**| Id of the gs1128Template to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGs1128Template**
> updateGs1128Template($body)

Update a gs1128Template

Updates an existing gs1128Template using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\Gs1128TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Gs1128Template(); // \Infoplus\Infoplus\Model\Gs1128Template | Gs1128Template to be updated.

try {
    $apiInstance->updateGs1128Template($body);
} catch (Exception $e) {
    echo 'Exception when calling Gs1128TemplateApi->updateGs1128Template: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Gs1128Template**](../Model/Gs1128Template.md)| Gs1128Template to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

