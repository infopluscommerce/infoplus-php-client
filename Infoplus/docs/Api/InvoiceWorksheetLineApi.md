# Infoplus\InvoiceWorksheetLineApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoiceWorksheetLine**](InvoiceWorksheetLineApi.md#addInvoiceWorksheetLine) | **POST** /beta/invoiceWorksheetLine | Create an invoiceWorksheetLine
[**addInvoiceWorksheetLineAudit**](InvoiceWorksheetLineApi.md#addInvoiceWorksheetLineAudit) | **PUT** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/audit/{invoiceWorksheetLineAudit} | Add new audit for an invoiceWorksheetLine
[**addInvoiceWorksheetLineFile**](InvoiceWorksheetLineApi.md#addInvoiceWorksheetLineFile) | **POST** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/file/{fileName} | Attach a file to an invoiceWorksheetLine
[**addInvoiceWorksheetLineFileByURL**](InvoiceWorksheetLineApi.md#addInvoiceWorksheetLineFileByURL) | **POST** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/file | Attach a file to an invoiceWorksheetLine by URL.
[**addInvoiceWorksheetLineTag**](InvoiceWorksheetLineApi.md#addInvoiceWorksheetLineTag) | **PUT** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/tag/{invoiceWorksheetLineTag} | Add new tags for an invoiceWorksheetLine.
[**deleteInvoiceWorksheetLine**](InvoiceWorksheetLineApi.md#deleteInvoiceWorksheetLine) | **DELETE** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId} | Delete an invoiceWorksheetLine
[**deleteInvoiceWorksheetLineFile**](InvoiceWorksheetLineApi.md#deleteInvoiceWorksheetLineFile) | **DELETE** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/file/{fileId} | Delete a file for an invoiceWorksheetLine.
[**deleteInvoiceWorksheetLineTag**](InvoiceWorksheetLineApi.md#deleteInvoiceWorksheetLineTag) | **DELETE** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/tag/{invoiceWorksheetLineTag} | Delete a tag for an invoiceWorksheetLine.
[**getDuplicateInvoiceWorksheetLineById**](InvoiceWorksheetLineApi.md#getDuplicateInvoiceWorksheetLineById) | **GET** /beta/invoiceWorksheetLine/duplicate/{invoiceWorksheetLineId} | Get a duplicated an invoiceWorksheetLine by id
[**getInvoiceWorksheetLineByFilter**](InvoiceWorksheetLineApi.md#getInvoiceWorksheetLineByFilter) | **GET** /beta/invoiceWorksheetLine/search | Search invoiceWorksheetLines by filter
[**getInvoiceWorksheetLineById**](InvoiceWorksheetLineApi.md#getInvoiceWorksheetLineById) | **GET** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId} | Get an invoiceWorksheetLine by id
[**getInvoiceWorksheetLineFiles**](InvoiceWorksheetLineApi.md#getInvoiceWorksheetLineFiles) | **GET** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/file | Get the files for an invoiceWorksheetLine.
[**getInvoiceWorksheetLineTags**](InvoiceWorksheetLineApi.md#getInvoiceWorksheetLineTags) | **GET** /beta/invoiceWorksheetLine/{invoiceWorksheetLineId}/tag | Get the tags for an invoiceWorksheetLine.
[**updateInvoiceWorksheetLine**](InvoiceWorksheetLineApi.md#updateInvoiceWorksheetLine) | **PUT** /beta/invoiceWorksheetLine | Update an invoiceWorksheetLine


# **addInvoiceWorksheetLine**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLine addInvoiceWorksheetLine($body)

Create an invoiceWorksheetLine

Inserts a new invoiceWorksheetLine using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\InvoiceWorksheetLine(); // \Infoplus\Infoplus\Model\InvoiceWorksheetLine | InvoiceWorksheetLine to be inserted.

try {
    $result = $apiInstance->addInvoiceWorksheetLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->addInvoiceWorksheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\InvoiceWorksheetLine**](../Model/InvoiceWorksheetLine.md)| InvoiceWorksheetLine to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLine**](../Model/InvoiceWorksheetLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineAudit**
> addInvoiceWorksheetLineAudit($invoice_worksheet_line_id, $invoice_worksheet_line_audit)

Add new audit for an invoiceWorksheetLine

Adds an audit to an existing invoiceWorksheetLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to add an audit to
$invoice_worksheet_line_audit = "invoice_worksheet_line_audit_example"; // string | The audit to add

try {
    $apiInstance->addInvoiceWorksheetLineAudit($invoice_worksheet_line_id, $invoice_worksheet_line_audit);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->addInvoiceWorksheetLineAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to add an audit to |
 **invoice_worksheet_line_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineFile**
> addInvoiceWorksheetLineFile($invoice_worksheet_line_id, $file_name)

Attach a file to an invoiceWorksheetLine

Adds a file to an existing invoiceWorksheetLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addInvoiceWorksheetLineFile($invoice_worksheet_line_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->addInvoiceWorksheetLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineFileByURL**
> addInvoiceWorksheetLineFileByURL($body, $invoice_worksheet_line_id)

Attach a file to an invoiceWorksheetLine by URL.

Adds a file to an existing invoiceWorksheetLine by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to add an file to

try {
    $apiInstance->addInvoiceWorksheetLineFileByURL($body, $invoice_worksheet_line_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->addInvoiceWorksheetLineFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoiceWorksheetLineTag**
> addInvoiceWorksheetLineTag($invoice_worksheet_line_id, $invoice_worksheet_line_tag)

Add new tags for an invoiceWorksheetLine.

Adds a tag to an existing invoiceWorksheetLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to add a tag to
$invoice_worksheet_line_tag = "invoice_worksheet_line_tag_example"; // string | The tag to add

try {
    $apiInstance->addInvoiceWorksheetLineTag($invoice_worksheet_line_id, $invoice_worksheet_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->addInvoiceWorksheetLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to add a tag to |
 **invoice_worksheet_line_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceWorksheetLine**
> deleteInvoiceWorksheetLine($invoice_worksheet_line_id)

Delete an invoiceWorksheetLine

Deletes the invoiceWorksheetLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to be deleted.

try {
    $apiInstance->deleteInvoiceWorksheetLine($invoice_worksheet_line_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->deleteInvoiceWorksheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceWorksheetLineFile**
> deleteInvoiceWorksheetLineFile($invoice_worksheet_line_id, $file_id)

Delete a file for an invoiceWorksheetLine.

Deletes an existing invoiceWorksheetLine file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteInvoiceWorksheetLineFile($invoice_worksheet_line_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->deleteInvoiceWorksheetLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceWorksheetLineTag**
> deleteInvoiceWorksheetLineTag($invoice_worksheet_line_id, $invoice_worksheet_line_tag)

Delete a tag for an invoiceWorksheetLine.

Deletes an existing invoiceWorksheetLine tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to remove tag from
$invoice_worksheet_line_tag = "invoice_worksheet_line_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteInvoiceWorksheetLineTag($invoice_worksheet_line_id, $invoice_worksheet_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->deleteInvoiceWorksheetLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to remove tag from |
 **invoice_worksheet_line_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateInvoiceWorksheetLineById**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLine getDuplicateInvoiceWorksheetLineById($invoice_worksheet_line_id)

Get a duplicated an invoiceWorksheetLine by id

Returns a duplicated invoiceWorksheetLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to be duplicated.

try {
    $result = $apiInstance->getDuplicateInvoiceWorksheetLineById($invoice_worksheet_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->getDuplicateInvoiceWorksheetLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLine**](../Model/InvoiceWorksheetLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineByFilter**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLine[] getInvoiceWorksheetLineByFilter($filter, $page, $limit, $sort)

Search invoiceWorksheetLines by filter

Returns the list of invoiceWorksheetLines that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
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
    $result = $apiInstance->getInvoiceWorksheetLineByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->getInvoiceWorksheetLineByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLine[]**](../Model/InvoiceWorksheetLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineById**
> \Infoplus\Infoplus\Model\InvoiceWorksheetLine getInvoiceWorksheetLineById($invoice_worksheet_line_id)

Get an invoiceWorksheetLine by id

Returns the invoiceWorksheetLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to be returned.

try {
    $result = $apiInstance->getInvoiceWorksheetLineById($invoice_worksheet_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->getInvoiceWorksheetLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\InvoiceWorksheetLine**](../Model/InvoiceWorksheetLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineFiles**
> getInvoiceWorksheetLineFiles($invoice_worksheet_line_id)

Get the files for an invoiceWorksheetLine.

Get all existing invoiceWorksheetLine files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to get files for

try {
    $apiInstance->getInvoiceWorksheetLineFiles($invoice_worksheet_line_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->getInvoiceWorksheetLineFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceWorksheetLineTags**
> getInvoiceWorksheetLineTags($invoice_worksheet_line_id)

Get the tags for an invoiceWorksheetLine.

Get all existing invoiceWorksheetLine tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_worksheet_line_id = 56; // int | Id of the invoiceWorksheetLine to get tags for

try {
    $apiInstance->getInvoiceWorksheetLineTags($invoice_worksheet_line_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->getInvoiceWorksheetLineTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_line_id** | **int**| Id of the invoiceWorksheetLine to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceWorksheetLine**
> updateInvoiceWorksheetLine($body)

Update an invoiceWorksheetLine

Updates an existing invoiceWorksheetLine using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\InvoiceWorksheetLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\InvoiceWorksheetLine(); // \Infoplus\Infoplus\Model\InvoiceWorksheetLine | InvoiceWorksheetLine to be updated.

try {
    $apiInstance->updateInvoiceWorksheetLine($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetLineApi->updateInvoiceWorksheetLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\InvoiceWorksheetLine**](../Model/InvoiceWorksheetLine.md)| InvoiceWorksheetLine to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

