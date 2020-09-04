# Infoplus\ReceivingWorksheetApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReceivingWorksheet**](ReceivingWorksheetApi.md#addReceivingWorksheet) | **POST** /beta/receivingWorksheet | Create a receivingWorksheet
[**addReceivingWorksheetAudit**](ReceivingWorksheetApi.md#addReceivingWorksheetAudit) | **PUT** /beta/receivingWorksheet/{receivingWorksheetId}/audit/{receivingWorksheetAudit} | Add new audit for a receivingWorksheet
[**addReceivingWorksheetFile**](ReceivingWorksheetApi.md#addReceivingWorksheetFile) | **POST** /beta/receivingWorksheet/{receivingWorksheetId}/file/{fileName} | Attach a file to a receivingWorksheet
[**addReceivingWorksheetFileByURL**](ReceivingWorksheetApi.md#addReceivingWorksheetFileByURL) | **POST** /beta/receivingWorksheet/{receivingWorksheetId}/file | Attach a file to a receivingWorksheet by URL.
[**addReceivingWorksheetTag**](ReceivingWorksheetApi.md#addReceivingWorksheetTag) | **PUT** /beta/receivingWorksheet/{receivingWorksheetId}/tag/{receivingWorksheetTag} | Add new tags for a receivingWorksheet.
[**deleteReceivingWorksheet**](ReceivingWorksheetApi.md#deleteReceivingWorksheet) | **DELETE** /beta/receivingWorksheet/{receivingWorksheetId} | Delete a receivingWorksheet
[**deleteReceivingWorksheetFile**](ReceivingWorksheetApi.md#deleteReceivingWorksheetFile) | **DELETE** /beta/receivingWorksheet/{receivingWorksheetId}/file/{fileId} | Delete a file for a receivingWorksheet.
[**deleteReceivingWorksheetTag**](ReceivingWorksheetApi.md#deleteReceivingWorksheetTag) | **DELETE** /beta/receivingWorksheet/{receivingWorksheetId}/tag/{receivingWorksheetTag} | Delete a tag for a receivingWorksheet.
[**getDuplicateReceivingWorksheetById**](ReceivingWorksheetApi.md#getDuplicateReceivingWorksheetById) | **GET** /beta/receivingWorksheet/duplicate/{receivingWorksheetId} | Get a duplicated a receivingWorksheet by id
[**getReceivingWorksheetByFilter**](ReceivingWorksheetApi.md#getReceivingWorksheetByFilter) | **GET** /beta/receivingWorksheet/search | Search receivingWorksheets by filter
[**getReceivingWorksheetById**](ReceivingWorksheetApi.md#getReceivingWorksheetById) | **GET** /beta/receivingWorksheet/{receivingWorksheetId} | Get a receivingWorksheet by id
[**getReceivingWorksheetFiles**](ReceivingWorksheetApi.md#getReceivingWorksheetFiles) | **GET** /beta/receivingWorksheet/{receivingWorksheetId}/file | Get the files for a receivingWorksheet.
[**getReceivingWorksheetTags**](ReceivingWorksheetApi.md#getReceivingWorksheetTags) | **GET** /beta/receivingWorksheet/{receivingWorksheetId}/tag | Get the tags for a receivingWorksheet.
[**updateReceivingWorksheet**](ReceivingWorksheetApi.md#updateReceivingWorksheet) | **PUT** /beta/receivingWorksheet | Update a receivingWorksheet
[**updateReceivingWorksheetCustomFields**](ReceivingWorksheetApi.md#updateReceivingWorksheetCustomFields) | **PUT** /beta/receivingWorksheet/customFields | Update a receivingWorksheet custom fields


# **addReceivingWorksheet**
> \Infoplus\Infoplus\Model\ReceivingWorksheet addReceivingWorksheet($body)

Create a receivingWorksheet

Inserts a new receivingWorksheet using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReceivingWorksheet(); // \Infoplus\Infoplus\Model\ReceivingWorksheet | ReceivingWorksheet to be inserted.

try {
    $result = $apiInstance->addReceivingWorksheet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)| ReceivingWorksheet to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingWorksheetAudit**
> addReceivingWorksheetAudit($receiving_worksheet_id, $receiving_worksheet_audit)

Add new audit for a receivingWorksheet

Adds an audit to an existing receivingWorksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to add an audit to
$receiving_worksheet_audit = "receiving_worksheet_audit_example"; // string | The audit to add

try {
    $apiInstance->addReceivingWorksheetAudit($receiving_worksheet_id, $receiving_worksheet_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheetAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to add an audit to |
 **receiving_worksheet_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingWorksheetFile**
> addReceivingWorksheetFile($receiving_worksheet_id, $file_name)

Attach a file to a receivingWorksheet

Adds a file to an existing receivingWorksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReceivingWorksheetFile($receiving_worksheet_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingWorksheetFileByURL**
> addReceivingWorksheetFileByURL($body, $receiving_worksheet_id)

Attach a file to a receivingWorksheet by URL.

Adds a file to an existing receivingWorksheet by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to add an file to

try {
    $apiInstance->addReceivingWorksheetFileByURL($body, $receiving_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheetFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReceivingWorksheetTag**
> addReceivingWorksheetTag($receiving_worksheet_id, $receiving_worksheet_tag)

Add new tags for a receivingWorksheet.

Adds a tag to an existing receivingWorksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to add a tag to
$receiving_worksheet_tag = "receiving_worksheet_tag_example"; // string | The tag to add

try {
    $apiInstance->addReceivingWorksheetTag($receiving_worksheet_id, $receiving_worksheet_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->addReceivingWorksheetTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to add a tag to |
 **receiving_worksheet_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReceivingWorksheet**
> deleteReceivingWorksheet($receiving_worksheet_id)

Delete a receivingWorksheet

Deletes the receivingWorksheet identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to be deleted.

try {
    $apiInstance->deleteReceivingWorksheet($receiving_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->deleteReceivingWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReceivingWorksheetFile**
> deleteReceivingWorksheetFile($receiving_worksheet_id, $file_id)

Delete a file for a receivingWorksheet.

Deletes an existing receivingWorksheet file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReceivingWorksheetFile($receiving_worksheet_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->deleteReceivingWorksheetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReceivingWorksheetTag**
> deleteReceivingWorksheetTag($receiving_worksheet_id, $receiving_worksheet_tag)

Delete a tag for a receivingWorksheet.

Deletes an existing receivingWorksheet tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to remove tag from
$receiving_worksheet_tag = "receiving_worksheet_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReceivingWorksheetTag($receiving_worksheet_id, $receiving_worksheet_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->deleteReceivingWorksheetTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to remove tag from |
 **receiving_worksheet_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReceivingWorksheetById**
> \Infoplus\Infoplus\Model\ReceivingWorksheet getDuplicateReceivingWorksheetById($receiving_worksheet_id)

Get a duplicated a receivingWorksheet by id

Returns a duplicated receivingWorksheet identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to be duplicated.

try {
    $result = $apiInstance->getDuplicateReceivingWorksheetById($receiving_worksheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getDuplicateReceivingWorksheetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingWorksheetByFilter**
> \Infoplus\Infoplus\Model\ReceivingWorksheet[] getReceivingWorksheetByFilter($filter, $page, $limit, $sort)

Search receivingWorksheets by filter

Returns the list of receivingWorksheets that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
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
    $result = $apiInstance->getReceivingWorksheetByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReceivingWorksheet[]**](../Model/ReceivingWorksheet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingWorksheetById**
> \Infoplus\Infoplus\Model\ReceivingWorksheet getReceivingWorksheetById($receiving_worksheet_id)

Get a receivingWorksheet by id

Returns the receivingWorksheet identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to be returned.

try {
    $result = $apiInstance->getReceivingWorksheetById($receiving_worksheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingWorksheetFiles**
> getReceivingWorksheetFiles($receiving_worksheet_id)

Get the files for a receivingWorksheet.

Get all existing receivingWorksheet files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to get files for

try {
    $apiInstance->getReceivingWorksheetFiles($receiving_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceivingWorksheetTags**
> getReceivingWorksheetTags($receiving_worksheet_id)

Get the tags for a receivingWorksheet.

Get all existing receivingWorksheet tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_worksheet_id = 56; // int | Id of the receivingWorksheet to get tags for

try {
    $apiInstance->getReceivingWorksheetTags($receiving_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->getReceivingWorksheetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_worksheet_id** | **int**| Id of the receivingWorksheet to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReceivingWorksheet**
> updateReceivingWorksheet($body)

Update a receivingWorksheet

Updates an existing receivingWorksheet using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReceivingWorksheet(); // \Infoplus\Infoplus\Model\ReceivingWorksheet | ReceivingWorksheet to be updated.

try {
    $apiInstance->updateReceivingWorksheet($body);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->updateReceivingWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)| ReceivingWorksheet to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReceivingWorksheetCustomFields**
> updateReceivingWorksheetCustomFields($body)

Update a receivingWorksheet custom fields

Updates an existing receivingWorksheet custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReceivingWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReceivingWorksheet(); // \Infoplus\Infoplus\Model\ReceivingWorksheet | ReceivingWorksheet to be updated.

try {
    $apiInstance->updateReceivingWorksheetCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingWorksheetApi->updateReceivingWorksheetCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReceivingWorksheet**](../Model/ReceivingWorksheet.md)| ReceivingWorksheet to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

