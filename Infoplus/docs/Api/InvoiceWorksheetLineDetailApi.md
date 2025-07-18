# Infoplus\InvoiceWorksheetLineDetailApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoiceWorksheetLineDetailAudit**](InvoiceWorksheetLineDetailApi.md#addInvoiceWorksheetLineDetailAudit) | **PUT** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/audit/{invoiceWorksheetLineDetailAudit} | Add new audit for an invoiceWorksheetLineDetail
[**addInvoiceWorksheetLineDetailFile**](InvoiceWorksheetLineDetailApi.md#addInvoiceWorksheetLineDetailFile) | **POST** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/file/{fileName} | Attach a file to an invoiceWorksheetLineDetail
[**addInvoiceWorksheetLineDetailFileByURL**](InvoiceWorksheetLineDetailApi.md#addInvoiceWorksheetLineDetailFileByURL) | **POST** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/file | Attach a file to an invoiceWorksheetLineDetail by URL.
[**addInvoiceWorksheetLineDetailTag**](InvoiceWorksheetLineDetailApi.md#addInvoiceWorksheetLineDetailTag) | **PUT** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/tag/{invoiceWorksheetLineDetailTag} | Add new tags for an invoiceWorksheetLineDetail.
[**deleteInvoiceWorksheetLineDetailFile**](InvoiceWorksheetLineDetailApi.md#deleteInvoiceWorksheetLineDetailFile) | **DELETE** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/file/{fileId} | Delete a file for an invoiceWorksheetLineDetail.
[**deleteInvoiceWorksheetLineDetailTag**](InvoiceWorksheetLineDetailApi.md#deleteInvoiceWorksheetLineDetailTag) | **DELETE** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/tag/{invoiceWorksheetLineDetailTag} | Delete a tag for an invoiceWorksheetLineDetail.
[**getDuplicateInvoiceWorksheetLineDetailById**](InvoiceWorksheetLineDetailApi.md#getDuplicateInvoiceWorksheetLineDetailById) | **GET** /beta/invoiceWorksheetLineDetail/duplicate/{invoiceWorksheetLineDetailId} | Get a duplicated an invoiceWorksheetLineDetail by id
[**getInvoiceWorksheetLineDetailByFilter**](InvoiceWorksheetLineDetailApi.md#getInvoiceWorksheetLineDetailByFilter) | **GET** /beta/invoiceWorksheetLineDetail/search | Search invoiceWorksheetLineDetails by filter
[**getInvoiceWorksheetLineDetailById**](InvoiceWorksheetLineDetailApi.md#getInvoiceWorksheetLineDetailById) | **GET** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId} | Get an invoiceWorksheetLineDetail by id
[**getInvoiceWorksheetLineDetailFiles**](InvoiceWorksheetLineDetailApi.md#getInvoiceWorksheetLineDetailFiles) | **GET** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/file | Get the files for an invoiceWorksheetLineDetail.
[**getInvoiceWorksheetLineDetailTags**](InvoiceWorksheetLineDetailApi.md#getInvoiceWorksheetLineDetailTags) | **GET** /beta/invoiceWorksheetLineDetail/{invoiceWorksheetLineDetailId}/tag | Get the tags for an invoiceWorksheetLineDetail.
[**updateInvoiceWorksheetLineDetailCustomFields**](InvoiceWorksheetLineDetailApi.md#updateInvoiceWorksheetLineDetailCustomFields) | **PUT** /beta/invoiceWorksheetLineDetail/customFields | Update an invoiceWorksheetLineDetail custom fields


# **addInvoiceWorksheetLineDetailAudit**
> addInvoiceWorksheetLineDetailAudit($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_audit)

Add new audit for an invoiceWorksheetLineDetail

Adds an audit to an existing invoiceWorksheetLineDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to add an audit to
$invoice_worksheet_line_detail_audit = "invoice_worksheet_line_detail_audit_example"; // string | The audit to add

try {
    $apiInstance->addInvoiceWorksheetLineDetailAudit($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_audit);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->addInvoiceWorksheetLineDetailAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to add an audit to |
 **invoice_worksheet_line_detail_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineDetailFile**
> addInvoiceWorksheetLineDetailFile($invoice_worksheet_line_detail_id, $file_name)

Attach a file to an invoiceWorksheetLineDetail

Adds a file to an existing invoiceWorksheetLineDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addInvoiceWorksheetLineDetailFile($invoice_worksheet_line_detail_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->addInvoiceWorksheetLineDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineDetailFileByURL**
> addInvoiceWorksheetLineDetailFileByURL($body, $invoice_worksheet_line_detail_id)

Attach a file to an invoiceWorksheetLineDetail by URL.

Adds a file to an existing invoiceWorksheetLineDetail by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to add an file to

try {
    $apiInstance->addInvoiceWorksheetLineDetailFileByURL($body, $invoice_worksheet_line_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->addInvoiceWorksheetLineDetailFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineDetailTag**
> addInvoiceWorksheetLineDetailTag($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_tag)

Add new tags for an invoiceWorksheetLineDetail.

Adds a tag to an existing invoiceWorksheetLineDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to add a tag to
$invoice_worksheet_line_detail_tag = "invoice_worksheet_line_detail_tag_example"; // string | The tag to add

try {
    $apiInstance->addInvoiceWorksheetLineDetailTag($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->addInvoiceWorksheetLineDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to add a tag to |
 **invoice_worksheet_line_detail_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceWorksheetLineDetailFile**
> deleteInvoiceWorksheetLineDetailFile($invoice_worksheet_line_detail_id, $file_id)

Delete a file for an invoiceWorksheetLineDetail.

Deletes an existing invoiceWorksheetLineDetail file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteInvoiceWorksheetLineDetailFile($invoice_worksheet_line_detail_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->deleteInvoiceWorksheetLineDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceWorksheetLineDetailTag**
> deleteInvoiceWorksheetLineDetailTag($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_tag)

Delete a tag for an invoiceWorksheetLineDetail.

Deletes an existing invoiceWorksheetLineDetail tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to remove tag from
$invoice_worksheet_line_detail_tag = "invoice_worksheet_line_detail_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteInvoiceWorksheetLineDetailTag($invoice_worksheet_line_detail_id, $invoice_worksheet_line_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->deleteInvoiceWorksheetLineDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to remove tag from |
 **invoice_worksheet_line_detail_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateInvoiceWorksheetLineDetailById**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail getDuplicateInvoiceWorksheetLineDetailById($invoice_worksheet_line_detail_id)

Get a duplicated an invoiceWorksheetLineDetail by id

Returns a duplicated invoiceWorksheetLineDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to be duplicated.

try {
    $result = $apiInstance->getDuplicateInvoiceWorksheetLineDetailById($invoice_worksheet_line_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->getDuplicateInvoiceWorksheetLineDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail**](../Model/InvoiceWorksheetLineDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineDetailByFilter**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail[] getInvoiceWorksheetLineDetailByFilter($filter, $page, $limit, $sort)

Search invoiceWorksheetLineDetails by filter

Returns the list of invoiceWorksheetLineDetails that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
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
    $result = $apiInstance->getInvoiceWorksheetLineDetailByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->getInvoiceWorksheetLineDetailByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail[]**](../Model/InvoiceWorksheetLineDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineDetailById**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail getInvoiceWorksheetLineDetailById($invoice_worksheet_line_detail_id)

Get an invoiceWorksheetLineDetail by id

Returns the invoiceWorksheetLineDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to be returned.

try {
    $result = $apiInstance->getInvoiceWorksheetLineDetailById($invoice_worksheet_line_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->getInvoiceWorksheetLineDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail**](../Model/InvoiceWorksheetLineDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineDetailFiles**
> getInvoiceWorksheetLineDetailFiles($invoice_worksheet_line_detail_id)

Get the files for an invoiceWorksheetLineDetail.

Get all existing invoiceWorksheetLineDetail files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to get files for

try {
    $apiInstance->getInvoiceWorksheetLineDetailFiles($invoice_worksheet_line_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->getInvoiceWorksheetLineDetailFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineDetailTags**
> getInvoiceWorksheetLineDetailTags($invoice_worksheet_line_detail_id)

Get the tags for an invoiceWorksheetLineDetail.

Get all existing invoiceWorksheetLineDetail tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_detail_id = 56; // int | Id of the invoiceWorksheetLineDetail to get tags for

try {
    $apiInstance->getInvoiceWorksheetLineDetailTags($invoice_worksheet_line_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->getInvoiceWorksheetLineDetailTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_detail_id** | **int**| Id of the invoiceWorksheetLineDetail to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceWorksheetLineDetailCustomFields**
> updateInvoiceWorksheetLineDetailCustomFields($body)

Update an invoiceWorksheetLineDetail custom fields

Updates an existing invoiceWorksheetLineDetail custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail(); // \Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail | InvoiceWorksheetLineDetail to be updated.

try {
    $apiInstance->updateInvoiceWorksheetLineDetailCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineDetailApi->updateInvoiceWorksheetLineDetailCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\InvoiceWorksheetLineDetail**](../Model/InvoiceWorksheetLineDetail.md)| InvoiceWorksheetLineDetail to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

