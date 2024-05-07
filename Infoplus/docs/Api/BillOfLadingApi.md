# Infoplus\BillOfLadingApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillOfLading**](BillOfLadingApi.md#addBillOfLading) | **POST** /beta/billOfLading | Create a billOfLading
[**addBillOfLadingAudit**](BillOfLadingApi.md#addBillOfLadingAudit) | **PUT** /beta/billOfLading/{billOfLadingId}/audit/{billOfLadingAudit} | Add new audit for a billOfLading
[**addBillOfLadingFile**](BillOfLadingApi.md#addBillOfLadingFile) | **POST** /beta/billOfLading/{billOfLadingId}/file/{fileName} | Attach a file to a billOfLading
[**addBillOfLadingFileByURL**](BillOfLadingApi.md#addBillOfLadingFileByURL) | **POST** /beta/billOfLading/{billOfLadingId}/file | Attach a file to a billOfLading by URL.
[**addBillOfLadingTag**](BillOfLadingApi.md#addBillOfLadingTag) | **PUT** /beta/billOfLading/{billOfLadingId}/tag/{billOfLadingTag} | Add new tags for a billOfLading.
[**deleteBillOfLading**](BillOfLadingApi.md#deleteBillOfLading) | **DELETE** /beta/billOfLading/{billOfLadingId} | Delete a billOfLading
[**deleteBillOfLadingFile**](BillOfLadingApi.md#deleteBillOfLadingFile) | **DELETE** /beta/billOfLading/{billOfLadingId}/file/{fileId} | Delete a file for a billOfLading.
[**deleteBillOfLadingTag**](BillOfLadingApi.md#deleteBillOfLadingTag) | **DELETE** /beta/billOfLading/{billOfLadingId}/tag/{billOfLadingTag} | Delete a tag for a billOfLading.
[**getBillOfLadingByFilter**](BillOfLadingApi.md#getBillOfLadingByFilter) | **GET** /beta/billOfLading/search | Search billOfLadings by filter
[**getBillOfLadingById**](BillOfLadingApi.md#getBillOfLadingById) | **GET** /beta/billOfLading/{billOfLadingId} | Get a billOfLading by id
[**getBillOfLadingFiles**](BillOfLadingApi.md#getBillOfLadingFiles) | **GET** /beta/billOfLading/{billOfLadingId}/file | Get the files for a billOfLading.
[**getBillOfLadingTags**](BillOfLadingApi.md#getBillOfLadingTags) | **GET** /beta/billOfLading/{billOfLadingId}/tag | Get the tags for a billOfLading.
[**getDuplicateBillOfLadingById**](BillOfLadingApi.md#getDuplicateBillOfLadingById) | **GET** /beta/billOfLading/duplicate/{billOfLadingId} | Get a duplicated a billOfLading by id
[**updateBillOfLading**](BillOfLadingApi.md#updateBillOfLading) | **PUT** /beta/billOfLading | Update a billOfLading
[**updateBillOfLadingCustomFields**](BillOfLadingApi.md#updateBillOfLadingCustomFields) | **PUT** /beta/billOfLading/customFields | Update a billOfLading custom fields


# **addBillOfLading**
> \Infoplus\Infoplus\Model\BillOfLading addBillOfLading($body)

Create a billOfLading

Inserts a new billOfLading using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillOfLading(); // \Infoplus\Infoplus\Model\BillOfLading | BillOfLading to be inserted.

try {
    $result = $apiInstance->addBillOfLading($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)| BillOfLading to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillOfLadingAudit**
> addBillOfLadingAudit($bill_of_lading_id, $bill_of_lading_audit)

Add new audit for a billOfLading

Adds an audit to an existing billOfLading.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to add an audit to
$bill_of_lading_audit = "bill_of_lading_audit_example"; // string | The audit to add

try {
    $apiInstance->addBillOfLadingAudit($bill_of_lading_id, $bill_of_lading_audit);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLadingAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to add an audit to |
 **bill_of_lading_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillOfLadingFile**
> addBillOfLadingFile($bill_of_lading_id, $file_name)

Attach a file to a billOfLading

Adds a file to an existing billOfLading.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addBillOfLadingFile($bill_of_lading_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLadingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillOfLadingFileByURL**
> addBillOfLadingFileByURL($body, $bill_of_lading_id)

Attach a file to a billOfLading by URL.

Adds a file to an existing billOfLading by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$bill_of_lading_id = 56; // int | Id of the billOfLading to add an file to

try {
    $apiInstance->addBillOfLadingFileByURL($body, $bill_of_lading_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLadingFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **bill_of_lading_id** | **int**| Id of the billOfLading to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillOfLadingTag**
> addBillOfLadingTag($bill_of_lading_id, $bill_of_lading_tag)

Add new tags for a billOfLading.

Adds a tag to an existing billOfLading.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to add a tag to
$bill_of_lading_tag = "bill_of_lading_tag_example"; // string | The tag to add

try {
    $apiInstance->addBillOfLadingTag($bill_of_lading_id, $bill_of_lading_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLadingTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to add a tag to |
 **bill_of_lading_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillOfLading**
> deleteBillOfLading($bill_of_lading_id)

Delete a billOfLading

Deletes the billOfLading identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to be deleted.

try {
    $apiInstance->deleteBillOfLading($bill_of_lading_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->deleteBillOfLading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillOfLadingFile**
> deleteBillOfLadingFile($bill_of_lading_id, $file_id)

Delete a file for a billOfLading.

Deletes an existing billOfLading file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteBillOfLadingFile($bill_of_lading_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->deleteBillOfLadingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillOfLadingTag**
> deleteBillOfLadingTag($bill_of_lading_id, $bill_of_lading_tag)

Delete a tag for a billOfLading.

Deletes an existing billOfLading tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to remove tag from
$bill_of_lading_tag = "bill_of_lading_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteBillOfLadingTag($bill_of_lading_id, $bill_of_lading_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->deleteBillOfLadingTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to remove tag from |
 **bill_of_lading_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillOfLadingByFilter**
> \Infoplus\Infoplus\Model\BillOfLading[] getBillOfLadingByFilter($filter, $page, $limit, $sort)

Search billOfLadings by filter

Returns the list of billOfLadings that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
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
    $result = $apiInstance->getBillOfLadingByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\BillOfLading[]**](../Model/BillOfLading.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillOfLadingById**
> \Infoplus\Infoplus\Model\BillOfLading getBillOfLadingById($bill_of_lading_id)

Get a billOfLading by id

Returns the billOfLading identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to be returned.

try {
    $result = $apiInstance->getBillOfLadingById($bill_of_lading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillOfLadingFiles**
> getBillOfLadingFiles($bill_of_lading_id)

Get the files for a billOfLading.

Get all existing billOfLading files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to get files for

try {
    $apiInstance->getBillOfLadingFiles($bill_of_lading_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillOfLadingTags**
> getBillOfLadingTags($bill_of_lading_id)

Get the tags for a billOfLading.

Get all existing billOfLading tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to get tags for

try {
    $apiInstance->getBillOfLadingTags($bill_of_lading_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateBillOfLadingById**
> \Infoplus\Infoplus\Model\BillOfLading getDuplicateBillOfLadingById($bill_of_lading_id)

Get a duplicated a billOfLading by id

Returns a duplicated billOfLading identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_lading_id = 56; // int | Id of the billOfLading to be duplicated.

try {
    $result = $apiInstance->getDuplicateBillOfLadingById($bill_of_lading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getDuplicateBillOfLadingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillOfLading**
> updateBillOfLading($body)

Update a billOfLading

Updates an existing billOfLading using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillOfLading(); // \Infoplus\Infoplus\Model\BillOfLading | BillOfLading to be updated.

try {
    $apiInstance->updateBillOfLading($body);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->updateBillOfLading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)| BillOfLading to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillOfLadingCustomFields**
> updateBillOfLadingCustomFields($body)

Update a billOfLading custom fields

Updates an existing billOfLading custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillOfLadingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillOfLading(); // \Infoplus\Infoplus\Model\BillOfLading | BillOfLading to be updated.

try {
    $apiInstance->updateBillOfLadingCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->updateBillOfLadingCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillOfLading**](../Model/BillOfLading.md)| BillOfLading to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

