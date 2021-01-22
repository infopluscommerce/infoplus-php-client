# Infoplus\QuickReceiptApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuickReceipt**](QuickReceiptApi.md#addQuickReceipt) | **POST** /beta/quickReceipt | Create a quickReceipt
[**addQuickReceiptAudit**](QuickReceiptApi.md#addQuickReceiptAudit) | **PUT** /beta/quickReceipt/{quickReceiptId}/audit/{quickReceiptAudit} | Add new audit for a quickReceipt
[**addQuickReceiptFile**](QuickReceiptApi.md#addQuickReceiptFile) | **POST** /beta/quickReceipt/{quickReceiptId}/file/{fileName} | Attach a file to a quickReceipt
[**addQuickReceiptFileByURL**](QuickReceiptApi.md#addQuickReceiptFileByURL) | **POST** /beta/quickReceipt/{quickReceiptId}/file | Attach a file to a quickReceipt by URL.
[**addQuickReceiptTag**](QuickReceiptApi.md#addQuickReceiptTag) | **PUT** /beta/quickReceipt/{quickReceiptId}/tag/{quickReceiptTag} | Add new tags for a quickReceipt.
[**deleteQuickReceipt**](QuickReceiptApi.md#deleteQuickReceipt) | **DELETE** /beta/quickReceipt/{quickReceiptId} | Delete a quickReceipt
[**deleteQuickReceiptFile**](QuickReceiptApi.md#deleteQuickReceiptFile) | **DELETE** /beta/quickReceipt/{quickReceiptId}/file/{fileId} | Delete a file for a quickReceipt.
[**deleteQuickReceiptTag**](QuickReceiptApi.md#deleteQuickReceiptTag) | **DELETE** /beta/quickReceipt/{quickReceiptId}/tag/{quickReceiptTag} | Delete a tag for a quickReceipt.
[**executeQuickReceipt**](QuickReceiptApi.md#executeQuickReceipt) | **POST** /beta/quickReceipt/executeQuickReceipt | Run the ExecuteQuickReceipt process.
[**getDuplicateQuickReceiptById**](QuickReceiptApi.md#getDuplicateQuickReceiptById) | **GET** /beta/quickReceipt/duplicate/{quickReceiptId} | Get a duplicated a quickReceipt by id
[**getQuickReceiptByFilter**](QuickReceiptApi.md#getQuickReceiptByFilter) | **GET** /beta/quickReceipt/search | Search quickReceipts by filter
[**getQuickReceiptById**](QuickReceiptApi.md#getQuickReceiptById) | **GET** /beta/quickReceipt/{quickReceiptId} | Get a quickReceipt by id
[**getQuickReceiptFiles**](QuickReceiptApi.md#getQuickReceiptFiles) | **GET** /beta/quickReceipt/{quickReceiptId}/file | Get the files for a quickReceipt.
[**getQuickReceiptTags**](QuickReceiptApi.md#getQuickReceiptTags) | **GET** /beta/quickReceipt/{quickReceiptId}/tag | Get the tags for a quickReceipt.
[**updateQuickReceipt**](QuickReceiptApi.md#updateQuickReceipt) | **PUT** /beta/quickReceipt | Update a quickReceipt
[**updateQuickReceiptCustomFields**](QuickReceiptApi.md#updateQuickReceiptCustomFields) | **PUT** /beta/quickReceipt/customFields | Update a quickReceipt custom fields


# **addQuickReceipt**
> \Infoplus\Infoplus\Model\QuickReceipt addQuickReceipt($body)

Create a quickReceipt

Inserts a new quickReceipt using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickReceipt(); // \Infoplus\Infoplus\Model\QuickReceipt | QuickReceipt to be inserted.

try {
    $result = $apiInstance->addQuickReceipt($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)| QuickReceipt to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickReceiptAudit**
> addQuickReceiptAudit($quick_receipt_id, $quick_receipt_audit)

Add new audit for a quickReceipt

Adds an audit to an existing quickReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to add an audit to
$quick_receipt_audit = "quick_receipt_audit_example"; // string | The audit to add

try {
    $apiInstance->addQuickReceiptAudit($quick_receipt_id, $quick_receipt_audit);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceiptAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to add an audit to |
 **quick_receipt_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickReceiptFile**
> addQuickReceiptFile($quick_receipt_id, $file_name)

Attach a file to a quickReceipt

Adds a file to an existing quickReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addQuickReceiptFile($quick_receipt_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceiptFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickReceiptFileByURL**
> addQuickReceiptFileByURL($body, $quick_receipt_id)

Attach a file to a quickReceipt by URL.

Adds a file to an existing quickReceipt by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$quick_receipt_id = 56; // int | Id of the quickReceipt to add an file to

try {
    $apiInstance->addQuickReceiptFileByURL($body, $quick_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceiptFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **quick_receipt_id** | **int**| Id of the quickReceipt to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickReceiptTag**
> addQuickReceiptTag($quick_receipt_id, $quick_receipt_tag)

Add new tags for a quickReceipt.

Adds a tag to an existing quickReceipt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to add a tag to
$quick_receipt_tag = "quick_receipt_tag_example"; // string | The tag to add

try {
    $apiInstance->addQuickReceiptTag($quick_receipt_id, $quick_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->addQuickReceiptTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to add a tag to |
 **quick_receipt_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickReceipt**
> deleteQuickReceipt($quick_receipt_id)

Delete a quickReceipt

Deletes the quickReceipt identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to be deleted.

try {
    $apiInstance->deleteQuickReceipt($quick_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->deleteQuickReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickReceiptFile**
> deleteQuickReceiptFile($quick_receipt_id, $file_id)

Delete a file for a quickReceipt.

Deletes an existing quickReceipt file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteQuickReceiptFile($quick_receipt_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->deleteQuickReceiptFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickReceiptTag**
> deleteQuickReceiptTag($quick_receipt_id, $quick_receipt_tag)

Delete a tag for a quickReceipt.

Deletes an existing quickReceipt tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to remove tag from
$quick_receipt_tag = "quick_receipt_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteQuickReceiptTag($quick_receipt_id, $quick_receipt_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->deleteQuickReceiptTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to remove tag from |
 **quick_receipt_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeQuickReceipt**
> \Infoplus\Infoplus\Model\ProcessOutputAPIModel[] executeQuickReceipt($body)

Run the ExecuteQuickReceipt process.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ExecuteQuickReceiptInputAPIModel(); // \Infoplus\Infoplus\Model\ExecuteQuickReceiptInputAPIModel | Input data for ExecuteQuickReceipt process.

try {
    $result = $apiInstance->executeQuickReceipt($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->executeQuickReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ExecuteQuickReceiptInputAPIModel**](../Model/ExecuteQuickReceiptInputAPIModel.md)| Input data for ExecuteQuickReceipt process. |

### Return type

[**\Infoplus\Infoplus\Model\ProcessOutputAPIModel[]**](../Model/ProcessOutputAPIModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateQuickReceiptById**
> \Infoplus\Infoplus\Model\QuickReceipt getDuplicateQuickReceiptById($quick_receipt_id)

Get a duplicated a quickReceipt by id

Returns a duplicated quickReceipt identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to be duplicated.

try {
    $result = $apiInstance->getDuplicateQuickReceiptById($quick_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getDuplicateQuickReceiptById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickReceiptByFilter**
> \Infoplus\Infoplus\Model\QuickReceipt[] getQuickReceiptByFilter($filter, $page, $limit, $sort)

Search quickReceipts by filter

Returns the list of quickReceipts that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
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
    $result = $apiInstance->getQuickReceiptByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\QuickReceipt[]**](../Model/QuickReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickReceiptById**
> \Infoplus\Infoplus\Model\QuickReceipt getQuickReceiptById($quick_receipt_id)

Get a quickReceipt by id

Returns the quickReceipt identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to be returned.

try {
    $result = $apiInstance->getQuickReceiptById($quick_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickReceiptFiles**
> getQuickReceiptFiles($quick_receipt_id)

Get the files for a quickReceipt.

Get all existing quickReceipt files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to get files for

try {
    $apiInstance->getQuickReceiptFiles($quick_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickReceiptTags**
> getQuickReceiptTags($quick_receipt_id)

Get the tags for a quickReceipt.

Get all existing quickReceipt tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_receipt_id = 56; // int | Id of the quickReceipt to get tags for

try {
    $apiInstance->getQuickReceiptTags($quick_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->getQuickReceiptTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_receipt_id** | **int**| Id of the quickReceipt to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuickReceipt**
> updateQuickReceipt($body)

Update a quickReceipt

Updates an existing quickReceipt using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickReceipt(); // \Infoplus\Infoplus\Model\QuickReceipt | QuickReceipt to be updated.

try {
    $apiInstance->updateQuickReceipt($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->updateQuickReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)| QuickReceipt to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuickReceiptCustomFields**
> updateQuickReceiptCustomFields($body)

Update a quickReceipt custom fields

Updates an existing quickReceipt custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickReceiptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickReceipt(); // \Infoplus\Infoplus\Model\QuickReceipt | QuickReceipt to be updated.

try {
    $apiInstance->updateQuickReceiptCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickReceiptApi->updateQuickReceiptCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickReceipt**](../Model/QuickReceipt.md)| QuickReceipt to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

