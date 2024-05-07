# Infoplus\QuickAdjustmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuickAdjustment**](QuickAdjustmentApi.md#addQuickAdjustment) | **POST** /beta/quickAdjustment | Create a quickAdjustment
[**addQuickAdjustmentAudit**](QuickAdjustmentApi.md#addQuickAdjustmentAudit) | **PUT** /beta/quickAdjustment/{quickAdjustmentId}/audit/{quickAdjustmentAudit} | Add new audit for a quickAdjustment
[**addQuickAdjustmentFile**](QuickAdjustmentApi.md#addQuickAdjustmentFile) | **POST** /beta/quickAdjustment/{quickAdjustmentId}/file/{fileName} | Attach a file to a quickAdjustment
[**addQuickAdjustmentFileByURL**](QuickAdjustmentApi.md#addQuickAdjustmentFileByURL) | **POST** /beta/quickAdjustment/{quickAdjustmentId}/file | Attach a file to a quickAdjustment by URL.
[**addQuickAdjustmentTag**](QuickAdjustmentApi.md#addQuickAdjustmentTag) | **PUT** /beta/quickAdjustment/{quickAdjustmentId}/tag/{quickAdjustmentTag} | Add new tags for a quickAdjustment.
[**deleteQuickAdjustment**](QuickAdjustmentApi.md#deleteQuickAdjustment) | **DELETE** /beta/quickAdjustment/{quickAdjustmentId} | Delete a quickAdjustment
[**deleteQuickAdjustmentFile**](QuickAdjustmentApi.md#deleteQuickAdjustmentFile) | **DELETE** /beta/quickAdjustment/{quickAdjustmentId}/file/{fileId} | Delete a file for a quickAdjustment.
[**deleteQuickAdjustmentTag**](QuickAdjustmentApi.md#deleteQuickAdjustmentTag) | **DELETE** /beta/quickAdjustment/{quickAdjustmentId}/tag/{quickAdjustmentTag} | Delete a tag for a quickAdjustment.
[**executeQuickAdjustment**](QuickAdjustmentApi.md#executeQuickAdjustment) | **POST** /beta/quickAdjustment/executeQuickAdjustment | Run the ExecuteQuickAdjustment process.
[**getDuplicateQuickAdjustmentById**](QuickAdjustmentApi.md#getDuplicateQuickAdjustmentById) | **GET** /beta/quickAdjustment/duplicate/{quickAdjustmentId} | Get a duplicated a quickAdjustment by id
[**getQuickAdjustmentByFilter**](QuickAdjustmentApi.md#getQuickAdjustmentByFilter) | **GET** /beta/quickAdjustment/search | Search quickAdjustments by filter
[**getQuickAdjustmentById**](QuickAdjustmentApi.md#getQuickAdjustmentById) | **GET** /beta/quickAdjustment/{quickAdjustmentId} | Get a quickAdjustment by id
[**getQuickAdjustmentFiles**](QuickAdjustmentApi.md#getQuickAdjustmentFiles) | **GET** /beta/quickAdjustment/{quickAdjustmentId}/file | Get the files for a quickAdjustment.
[**getQuickAdjustmentTags**](QuickAdjustmentApi.md#getQuickAdjustmentTags) | **GET** /beta/quickAdjustment/{quickAdjustmentId}/tag | Get the tags for a quickAdjustment.
[**updateQuickAdjustment**](QuickAdjustmentApi.md#updateQuickAdjustment) | **PUT** /beta/quickAdjustment | Update a quickAdjustment
[**updateQuickAdjustmentCustomFields**](QuickAdjustmentApi.md#updateQuickAdjustmentCustomFields) | **PUT** /beta/quickAdjustment/customFields | Update a quickAdjustment custom fields


# **addQuickAdjustment**
> \Infoplus\Infoplus\Model\QuickAdjustment addQuickAdjustment($body)

Create a quickAdjustment

Inserts a new quickAdjustment using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickAdjustment(); // \Infoplus\Infoplus\Model\QuickAdjustment | QuickAdjustment to be inserted.

try {
    $result = $apiInstance->addQuickAdjustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)| QuickAdjustment to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickAdjustmentAudit**
> addQuickAdjustmentAudit($quick_adjustment_id, $quick_adjustment_audit)

Add new audit for a quickAdjustment

Adds an audit to an existing quickAdjustment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add an audit to
$quick_adjustment_audit = "quick_adjustment_audit_example"; // string | The audit to add

try {
    $apiInstance->addQuickAdjustmentAudit($quick_adjustment_id, $quick_adjustment_audit);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add an audit to |
 **quick_adjustment_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickAdjustmentFile**
> addQuickAdjustmentFile($quick_adjustment_id, $file_name)

Attach a file to a quickAdjustment

Adds a file to an existing quickAdjustment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addQuickAdjustmentFile($quick_adjustment_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickAdjustmentFileByURL**
> addQuickAdjustmentFileByURL($body, $quick_adjustment_id)

Attach a file to a quickAdjustment by URL.

Adds a file to an existing quickAdjustment by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add an file to

try {
    $apiInstance->addQuickAdjustmentFileByURL($body, $quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addQuickAdjustmentTag**
> addQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag)

Add new tags for a quickAdjustment.

Adds a tag to an existing quickAdjustment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add a tag to
$quick_adjustment_tag = "quick_adjustment_tag_example"; // string | The tag to add

try {
    $apiInstance->addQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add a tag to |
 **quick_adjustment_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickAdjustment**
> deleteQuickAdjustment($quick_adjustment_id)

Delete a quickAdjustment

Deletes the quickAdjustment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be deleted.

try {
    $apiInstance->deleteQuickAdjustment($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickAdjustmentFile**
> deleteQuickAdjustmentFile($quick_adjustment_id, $file_id)

Delete a file for a quickAdjustment.

Deletes an existing quickAdjustment file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteQuickAdjustmentFile($quick_adjustment_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuickAdjustmentTag**
> deleteQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag)

Delete a tag for a quickAdjustment.

Deletes an existing quickAdjustment tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to remove tag from
$quick_adjustment_tag = "quick_adjustment_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to remove tag from |
 **quick_adjustment_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeQuickAdjustment**
> \Infoplus\Infoplus\Model\ProcessOutputAPIModel[] executeQuickAdjustment($body)

Run the ExecuteQuickAdjustment process.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel(); // \Infoplus\Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel | Input data for ExecuteQuickAdjustment process.

try {
    $result = $apiInstance->executeQuickAdjustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->executeQuickAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel**](../Model/ExecuteQuickAdjustmentInputAPIModel.md)| Input data for ExecuteQuickAdjustment process. |

### Return type

[**\Infoplus\Infoplus\Model\ProcessOutputAPIModel[]**](../Model/ProcessOutputAPIModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateQuickAdjustmentById**
> \Infoplus\Infoplus\Model\QuickAdjustment getDuplicateQuickAdjustmentById($quick_adjustment_id)

Get a duplicated a quickAdjustment by id

Returns a duplicated quickAdjustment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be duplicated.

try {
    $result = $apiInstance->getDuplicateQuickAdjustmentById($quick_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getDuplicateQuickAdjustmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickAdjustmentByFilter**
> \Infoplus\Infoplus\Model\QuickAdjustment[] getQuickAdjustmentByFilter($filter, $page, $limit, $sort)

Search quickAdjustments by filter

Returns the list of quickAdjustments that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
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
    $result = $apiInstance->getQuickAdjustmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\QuickAdjustment[]**](../Model/QuickAdjustment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickAdjustmentById**
> \Infoplus\Infoplus\Model\QuickAdjustment getQuickAdjustmentById($quick_adjustment_id)

Get a quickAdjustment by id

Returns the quickAdjustment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be returned.

try {
    $result = $apiInstance->getQuickAdjustmentById($quick_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickAdjustmentFiles**
> getQuickAdjustmentFiles($quick_adjustment_id)

Get the files for a quickAdjustment.

Get all existing quickAdjustment files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to get files for

try {
    $apiInstance->getQuickAdjustmentFiles($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickAdjustmentTags**
> getQuickAdjustmentTags($quick_adjustment_id)

Get the tags for a quickAdjustment.

Get all existing quickAdjustment tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to get tags for

try {
    $apiInstance->getQuickAdjustmentTags($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuickAdjustment**
> updateQuickAdjustment($body)

Update a quickAdjustment

Updates an existing quickAdjustment using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickAdjustment(); // \Infoplus\Infoplus\Model\QuickAdjustment | QuickAdjustment to be updated.

try {
    $apiInstance->updateQuickAdjustment($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->updateQuickAdjustment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)| QuickAdjustment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuickAdjustmentCustomFields**
> updateQuickAdjustmentCustomFields($body)

Update a quickAdjustment custom fields

Updates an existing quickAdjustment custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\QuickAdjustmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\QuickAdjustment(); // \Infoplus\Infoplus\Model\QuickAdjustment | QuickAdjustment to be updated.

try {
    $apiInstance->updateQuickAdjustmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->updateQuickAdjustmentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\QuickAdjustment**](../Model/QuickAdjustment.md)| QuickAdjustment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

