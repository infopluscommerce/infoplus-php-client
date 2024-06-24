# Infoplus\ParcelInvoiceLineApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addParcelInvoiceLineAudit**](ParcelInvoiceLineApi.md#addParcelInvoiceLineAudit) | **PUT** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/audit/{parcelInvoiceLineAudit} | Add new audit for a parcelInvoiceLine
[**addParcelInvoiceLineFile**](ParcelInvoiceLineApi.md#addParcelInvoiceLineFile) | **POST** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/file/{fileName} | Attach a file to a parcelInvoiceLine
[**addParcelInvoiceLineFileByURL**](ParcelInvoiceLineApi.md#addParcelInvoiceLineFileByURL) | **POST** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/file | Attach a file to a parcelInvoiceLine by URL.
[**addParcelInvoiceLineTag**](ParcelInvoiceLineApi.md#addParcelInvoiceLineTag) | **PUT** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/tag/{parcelInvoiceLineTag} | Add new tags for a parcelInvoiceLine.
[**deleteParcelInvoiceLineFile**](ParcelInvoiceLineApi.md#deleteParcelInvoiceLineFile) | **DELETE** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/file/{fileId} | Delete a file for a parcelInvoiceLine.
[**deleteParcelInvoiceLineTag**](ParcelInvoiceLineApi.md#deleteParcelInvoiceLineTag) | **DELETE** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/tag/{parcelInvoiceLineTag} | Delete a tag for a parcelInvoiceLine.
[**getDuplicateParcelInvoiceLineById**](ParcelInvoiceLineApi.md#getDuplicateParcelInvoiceLineById) | **GET** /beta/parcelInvoiceLine/duplicate/{parcelInvoiceLineId} | Get a duplicated a parcelInvoiceLine by id
[**getParcelInvoiceLineByFilter**](ParcelInvoiceLineApi.md#getParcelInvoiceLineByFilter) | **GET** /beta/parcelInvoiceLine/search | Search parcelInvoiceLines by filter
[**getParcelInvoiceLineById**](ParcelInvoiceLineApi.md#getParcelInvoiceLineById) | **GET** /beta/parcelInvoiceLine/{parcelInvoiceLineId} | Get a parcelInvoiceLine by id
[**getParcelInvoiceLineFiles**](ParcelInvoiceLineApi.md#getParcelInvoiceLineFiles) | **GET** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/file | Get the files for a parcelInvoiceLine.
[**getParcelInvoiceLineTags**](ParcelInvoiceLineApi.md#getParcelInvoiceLineTags) | **GET** /beta/parcelInvoiceLine/{parcelInvoiceLineId}/tag | Get the tags for a parcelInvoiceLine.
[**updateParcelInvoiceLine**](ParcelInvoiceLineApi.md#updateParcelInvoiceLine) | **PUT** /beta/parcelInvoiceLine | Update a parcelInvoiceLine


# **addParcelInvoiceLineAudit**
> addParcelInvoiceLineAudit($parcel_invoice_line_id, $parcel_invoice_line_audit)

Add new audit for a parcelInvoiceLine

Adds an audit to an existing parcelInvoiceLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to add an audit to
$parcel_invoice_line_audit = "parcel_invoice_line_audit_example"; // string | The audit to add

try {
    $apiInstance->addParcelInvoiceLineAudit($parcel_invoice_line_id, $parcel_invoice_line_audit);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->addParcelInvoiceLineAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to add an audit to |
 **parcel_invoice_line_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceLineFile**
> addParcelInvoiceLineFile($parcel_invoice_line_id, $file_name)

Attach a file to a parcelInvoiceLine

Adds a file to an existing parcelInvoiceLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addParcelInvoiceLineFile($parcel_invoice_line_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->addParcelInvoiceLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceLineFileByURL**
> addParcelInvoiceLineFileByURL($body, $parcel_invoice_line_id)

Attach a file to a parcelInvoiceLine by URL.

Adds a file to an existing parcelInvoiceLine by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to add an file to

try {
    $apiInstance->addParcelInvoiceLineFileByURL($body, $parcel_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->addParcelInvoiceLineFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceLineTag**
> addParcelInvoiceLineTag($parcel_invoice_line_id, $parcel_invoice_line_tag)

Add new tags for a parcelInvoiceLine.

Adds a tag to an existing parcelInvoiceLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to add a tag to
$parcel_invoice_line_tag = "parcel_invoice_line_tag_example"; // string | The tag to add

try {
    $apiInstance->addParcelInvoiceLineTag($parcel_invoice_line_id, $parcel_invoice_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->addParcelInvoiceLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to add a tag to |
 **parcel_invoice_line_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelInvoiceLineFile**
> deleteParcelInvoiceLineFile($parcel_invoice_line_id, $file_id)

Delete a file for a parcelInvoiceLine.

Deletes an existing parcelInvoiceLine file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteParcelInvoiceLineFile($parcel_invoice_line_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->deleteParcelInvoiceLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelInvoiceLineTag**
> deleteParcelInvoiceLineTag($parcel_invoice_line_id, $parcel_invoice_line_tag)

Delete a tag for a parcelInvoiceLine.

Deletes an existing parcelInvoiceLine tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to remove tag from
$parcel_invoice_line_tag = "parcel_invoice_line_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteParcelInvoiceLineTag($parcel_invoice_line_id, $parcel_invoice_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->deleteParcelInvoiceLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to remove tag from |
 **parcel_invoice_line_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateParcelInvoiceLineById**
> \Infoplus\Infoplus\Model\ParcelInvoiceLine getDuplicateParcelInvoiceLineById($parcel_invoice_line_id)

Get a duplicated a parcelInvoiceLine by id

Returns a duplicated parcelInvoiceLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to be duplicated.

try {
    $result = $apiInstance->getDuplicateParcelInvoiceLineById($parcel_invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->getDuplicateParcelInvoiceLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelInvoiceLine**](../Model/ParcelInvoiceLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceLineByFilter**
> \Infoplus\Infoplus\Model\ParcelInvoiceLine[] getParcelInvoiceLineByFilter($filter, $page, $limit, $sort)

Search parcelInvoiceLines by filter

Returns the list of parcelInvoiceLines that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
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
    $result = $apiInstance->getParcelInvoiceLineByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->getParcelInvoiceLineByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ParcelInvoiceLine[]**](../Model/ParcelInvoiceLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceLineById**
> \Infoplus\Infoplus\Model\ParcelInvoiceLine getParcelInvoiceLineById($parcel_invoice_line_id)

Get a parcelInvoiceLine by id

Returns the parcelInvoiceLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to be returned.

try {
    $result = $apiInstance->getParcelInvoiceLineById($parcel_invoice_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->getParcelInvoiceLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelInvoiceLine**](../Model/ParcelInvoiceLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceLineFiles**
> getParcelInvoiceLineFiles($parcel_invoice_line_id)

Get the files for a parcelInvoiceLine.

Get all existing parcelInvoiceLine files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to get files for

try {
    $apiInstance->getParcelInvoiceLineFiles($parcel_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->getParcelInvoiceLineFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceLineTags**
> getParcelInvoiceLineTags($parcel_invoice_line_id)

Get the tags for a parcelInvoiceLine.

Get all existing parcelInvoiceLine tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_line_id = 56; // int | Id of the parcelInvoiceLine to get tags for

try {
    $apiInstance->getParcelInvoiceLineTags($parcel_invoice_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->getParcelInvoiceLineTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_line_id** | **int**| Id of the parcelInvoiceLine to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParcelInvoiceLine**
> updateParcelInvoiceLine($body)

Update a parcelInvoiceLine

Updates an existing parcelInvoiceLine using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ParcelInvoiceLine(); // \Infoplus\Infoplus\Model\ParcelInvoiceLine | ParcelInvoiceLine to be updated.

try {
    $apiInstance->updateParcelInvoiceLine($body);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceLineApi->updateParcelInvoiceLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ParcelInvoiceLine**](../Model/ParcelInvoiceLine.md)| ParcelInvoiceLine to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

