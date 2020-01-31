# Infoplus\EdiDocumentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEdiDocument**](EdiDocumentApi.md#addEdiDocument) | **POST** /beta/ediDocument | Create an ediDocument
[**addEdiDocumentAudit**](EdiDocumentApi.md#addEdiDocumentAudit) | **PUT** /beta/ediDocument/{ediDocumentId}/audit/{ediDocumentAudit} | Add new audit for an ediDocument
[**addEdiDocumentFile**](EdiDocumentApi.md#addEdiDocumentFile) | **POST** /beta/ediDocument/{ediDocumentId}/file/{fileName} | Attach a file to an ediDocument
[**addEdiDocumentFileByURL**](EdiDocumentApi.md#addEdiDocumentFileByURL) | **POST** /beta/ediDocument/{ediDocumentId}/file | Attach a file to an ediDocument by URL.
[**addEdiDocumentTag**](EdiDocumentApi.md#addEdiDocumentTag) | **PUT** /beta/ediDocument/{ediDocumentId}/tag/{ediDocumentTag} | Add new tags for an ediDocument.
[**deleteEdiDocumentFile**](EdiDocumentApi.md#deleteEdiDocumentFile) | **DELETE** /beta/ediDocument/{ediDocumentId}/file/{fileId} | Delete a file for an ediDocument.
[**deleteEdiDocumentTag**](EdiDocumentApi.md#deleteEdiDocumentTag) | **DELETE** /beta/ediDocument/{ediDocumentId}/tag/{ediDocumentTag} | Delete a tag for an ediDocument.
[**getDuplicateEdiDocumentById**](EdiDocumentApi.md#getDuplicateEdiDocumentById) | **GET** /beta/ediDocument/duplicate/{ediDocumentId} | Get a duplicated an ediDocument by id
[**getEdiDocumentByFilter**](EdiDocumentApi.md#getEdiDocumentByFilter) | **GET** /beta/ediDocument/search | Search ediDocuments by filter
[**getEdiDocumentById**](EdiDocumentApi.md#getEdiDocumentById) | **GET** /beta/ediDocument/{ediDocumentId} | Get an ediDocument by id
[**getEdiDocumentFiles**](EdiDocumentApi.md#getEdiDocumentFiles) | **GET** /beta/ediDocument/{ediDocumentId}/file | Get the files for an ediDocument.
[**getEdiDocumentTags**](EdiDocumentApi.md#getEdiDocumentTags) | **GET** /beta/ediDocument/{ediDocumentId}/tag | Get the tags for an ediDocument.


# **addEdiDocument**
> \Infoplus\Infoplus\Model\EdiDocument addEdiDocument($body)

Create an ediDocument

Inserts a new ediDocument using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\EdiDocument(); // \Infoplus\Infoplus\Model\EdiDocument | EdiDocument to be inserted.

try {
    $result = $apiInstance->addEdiDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->addEdiDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\EdiDocument**](../Model/EdiDocument.md)| EdiDocument to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\EdiDocument**](../Model/EdiDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEdiDocumentAudit**
> addEdiDocumentAudit($edi_document_id, $edi_document_audit)

Add new audit for an ediDocument

Adds an audit to an existing ediDocument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to add an audit to
$edi_document_audit = "edi_document_audit_example"; // string | The audit to add

try {
    $apiInstance->addEdiDocumentAudit($edi_document_id, $edi_document_audit);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->addEdiDocumentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to add an audit to |
 **edi_document_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEdiDocumentFile**
> addEdiDocumentFile($edi_document_id, $file_name)

Attach a file to an ediDocument

Adds a file to an existing ediDocument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addEdiDocumentFile($edi_document_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->addEdiDocumentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEdiDocumentFileByURL**
> addEdiDocumentFileByURL($body, $edi_document_id)

Attach a file to an ediDocument by URL.

Adds a file to an existing ediDocument by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$edi_document_id = 56; // int | Id of the ediDocument to add an file to

try {
    $apiInstance->addEdiDocumentFileByURL($body, $edi_document_id);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->addEdiDocumentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **edi_document_id** | **int**| Id of the ediDocument to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEdiDocumentTag**
> addEdiDocumentTag($edi_document_id, $edi_document_tag)

Add new tags for an ediDocument.

Adds a tag to an existing ediDocument.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to add a tag to
$edi_document_tag = "edi_document_tag_example"; // string | The tag to add

try {
    $apiInstance->addEdiDocumentTag($edi_document_id, $edi_document_tag);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->addEdiDocumentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to add a tag to |
 **edi_document_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEdiDocumentFile**
> deleteEdiDocumentFile($edi_document_id, $file_id)

Delete a file for an ediDocument.

Deletes an existing ediDocument file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteEdiDocumentFile($edi_document_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->deleteEdiDocumentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEdiDocumentTag**
> deleteEdiDocumentTag($edi_document_id, $edi_document_tag)

Delete a tag for an ediDocument.

Deletes an existing ediDocument tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to remove tag from
$edi_document_tag = "edi_document_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteEdiDocumentTag($edi_document_id, $edi_document_tag);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->deleteEdiDocumentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to remove tag from |
 **edi_document_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateEdiDocumentById**
> \Infoplus\Infoplus\Model\EdiDocument getDuplicateEdiDocumentById($edi_document_id)

Get a duplicated an ediDocument by id

Returns a duplicated ediDocument identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to be duplicated.

try {
    $result = $apiInstance->getDuplicateEdiDocumentById($edi_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->getDuplicateEdiDocumentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\EdiDocument**](../Model/EdiDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdiDocumentByFilter**
> \Infoplus\Infoplus\Model\EdiDocument[] getEdiDocumentByFilter($filter, $page, $limit, $sort)

Search ediDocuments by filter

Returns the list of ediDocuments that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
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
    $result = $apiInstance->getEdiDocumentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->getEdiDocumentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\EdiDocument[]**](../Model/EdiDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdiDocumentById**
> \Infoplus\Infoplus\Model\EdiDocument getEdiDocumentById($edi_document_id)

Get an ediDocument by id

Returns the ediDocument identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to be returned.

try {
    $result = $apiInstance->getEdiDocumentById($edi_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->getEdiDocumentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\EdiDocument**](../Model/EdiDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdiDocumentFiles**
> getEdiDocumentFiles($edi_document_id)

Get the files for an ediDocument.

Get all existing ediDocument files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to get files for

try {
    $apiInstance->getEdiDocumentFiles($edi_document_id);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->getEdiDocumentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdiDocumentTags**
> getEdiDocumentTags($edi_document_id)

Get the tags for an ediDocument.

Get all existing ediDocument tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EdiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edi_document_id = 56; // int | Id of the ediDocument to get tags for

try {
    $apiInstance->getEdiDocumentTags($edi_document_id);
} catch (Exception $e) {
    echo 'Exception when calling EdiDocumentApi->getEdiDocumentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edi_document_id** | **int**| Id of the ediDocument to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

