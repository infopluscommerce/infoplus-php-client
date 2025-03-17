# Infoplus\ParcelInvoiceApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addParcelInvoiceAudit**](ParcelInvoiceApi.md#addParcelInvoiceAudit) | **PUT** /beta/parcelInvoice/{parcelInvoiceId}/audit/{parcelInvoiceAudit} | Add new audit for a parcelInvoice
[**addParcelInvoiceFile**](ParcelInvoiceApi.md#addParcelInvoiceFile) | **POST** /beta/parcelInvoice/{parcelInvoiceId}/file/{fileName} | Attach a file to a parcelInvoice
[**addParcelInvoiceFileByURL**](ParcelInvoiceApi.md#addParcelInvoiceFileByURL) | **POST** /beta/parcelInvoice/{parcelInvoiceId}/file | Attach a file to a parcelInvoice by URL.
[**addParcelInvoiceTag**](ParcelInvoiceApi.md#addParcelInvoiceTag) | **PUT** /beta/parcelInvoice/{parcelInvoiceId}/tag/{parcelInvoiceTag} | Add new tags for a parcelInvoice.
[**deleteParcelInvoice**](ParcelInvoiceApi.md#deleteParcelInvoice) | **DELETE** /beta/parcelInvoice/{parcelInvoiceId} | Delete a parcelInvoice
[**deleteParcelInvoiceFile**](ParcelInvoiceApi.md#deleteParcelInvoiceFile) | **DELETE** /beta/parcelInvoice/{parcelInvoiceId}/file/{fileId} | Delete a file for a parcelInvoice.
[**deleteParcelInvoiceTag**](ParcelInvoiceApi.md#deleteParcelInvoiceTag) | **DELETE** /beta/parcelInvoice/{parcelInvoiceId}/tag/{parcelInvoiceTag} | Delete a tag for a parcelInvoice.
[**getDuplicateParcelInvoiceById**](ParcelInvoiceApi.md#getDuplicateParcelInvoiceById) | **GET** /beta/parcelInvoice/duplicate/{parcelInvoiceId} | Get a duplicated a parcelInvoice by id
[**getParcelInvoiceByFilter**](ParcelInvoiceApi.md#getParcelInvoiceByFilter) | **GET** /beta/parcelInvoice/search | Search parcelInvoices by filter
[**getParcelInvoiceById**](ParcelInvoiceApi.md#getParcelInvoiceById) | **GET** /beta/parcelInvoice/{parcelInvoiceId} | Get a parcelInvoice by id
[**getParcelInvoiceFiles**](ParcelInvoiceApi.md#getParcelInvoiceFiles) | **GET** /beta/parcelInvoice/{parcelInvoiceId}/file | Get the files for a parcelInvoice.
[**getParcelInvoiceTags**](ParcelInvoiceApi.md#getParcelInvoiceTags) | **GET** /beta/parcelInvoice/{parcelInvoiceId}/tag | Get the tags for a parcelInvoice.


# **addParcelInvoiceAudit**
> addParcelInvoiceAudit($parcel_invoice_id, $parcel_invoice_audit)

Add new audit for a parcelInvoice

Adds an audit to an existing parcelInvoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to add an audit to
$parcel_invoice_audit = "parcel_invoice_audit_example"; // string | The audit to add

try {
    $apiInstance->addParcelInvoiceAudit($parcel_invoice_id, $parcel_invoice_audit);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->addParcelInvoiceAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to add an audit to |
 **parcel_invoice_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceFile**
> addParcelInvoiceFile($parcel_invoice_id, $file_name)

Attach a file to a parcelInvoice

Adds a file to an existing parcelInvoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addParcelInvoiceFile($parcel_invoice_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->addParcelInvoiceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceFileByURL**
> addParcelInvoiceFileByURL($body, $parcel_invoice_id)

Attach a file to a parcelInvoice by URL.

Adds a file to an existing parcelInvoice by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to add an file to

try {
    $apiInstance->addParcelInvoiceFileByURL($body, $parcel_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->addParcelInvoiceFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelInvoiceTag**
> addParcelInvoiceTag($parcel_invoice_id, $parcel_invoice_tag)

Add new tags for a parcelInvoice.

Adds a tag to an existing parcelInvoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to add a tag to
$parcel_invoice_tag = "parcel_invoice_tag_example"; // string | The tag to add

try {
    $apiInstance->addParcelInvoiceTag($parcel_invoice_id, $parcel_invoice_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->addParcelInvoiceTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to add a tag to |
 **parcel_invoice_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelInvoice**
> deleteParcelInvoice($parcel_invoice_id)

Delete a parcelInvoice

Deletes the parcelInvoice identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to be deleted.

try {
    $apiInstance->deleteParcelInvoice($parcel_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->deleteParcelInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelInvoiceFile**
> deleteParcelInvoiceFile($parcel_invoice_id, $file_id)

Delete a file for a parcelInvoice.

Deletes an existing parcelInvoice file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteParcelInvoiceFile($parcel_invoice_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->deleteParcelInvoiceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelInvoiceTag**
> deleteParcelInvoiceTag($parcel_invoice_id, $parcel_invoice_tag)

Delete a tag for a parcelInvoice.

Deletes an existing parcelInvoice tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to remove tag from
$parcel_invoice_tag = "parcel_invoice_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteParcelInvoiceTag($parcel_invoice_id, $parcel_invoice_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->deleteParcelInvoiceTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to remove tag from |
 **parcel_invoice_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateParcelInvoiceById**
> \Infoplus\Infoplus\Model\ParcelInvoice getDuplicateParcelInvoiceById($parcel_invoice_id)

Get a duplicated a parcelInvoice by id

Returns a duplicated parcelInvoice identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to be duplicated.

try {
    $result = $apiInstance->getDuplicateParcelInvoiceById($parcel_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->getDuplicateParcelInvoiceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelInvoice**](../Model/ParcelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceByFilter**
> \Infoplus\Infoplus\Model\ParcelInvoice[] getParcelInvoiceByFilter($filter, $page, $limit, $sort)

Search parcelInvoices by filter

Returns the list of parcelInvoices that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
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
    $result = $apiInstance->getParcelInvoiceByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->getParcelInvoiceByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ParcelInvoice[]**](../Model/ParcelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceById**
> \Infoplus\Infoplus\Model\ParcelInvoice getParcelInvoiceById($parcel_invoice_id)

Get a parcelInvoice by id

Returns the parcelInvoice identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to be returned.

try {
    $result = $apiInstance->getParcelInvoiceById($parcel_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->getParcelInvoiceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelInvoice**](../Model/ParcelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceFiles**
> getParcelInvoiceFiles($parcel_invoice_id)

Get the files for a parcelInvoice.

Get all existing parcelInvoice files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to get files for

try {
    $apiInstance->getParcelInvoiceFiles($parcel_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->getParcelInvoiceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelInvoiceTags**
> getParcelInvoiceTags($parcel_invoice_id)

Get the tags for a parcelInvoice.

Get all existing parcelInvoice tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_invoice_id = 56; // int | Id of the parcelInvoice to get tags for

try {
    $apiInstance->getParcelInvoiceTags($parcel_invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelInvoiceApi->getParcelInvoiceTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_invoice_id** | **int**| Id of the parcelInvoice to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

