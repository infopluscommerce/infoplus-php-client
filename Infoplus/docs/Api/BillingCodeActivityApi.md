# Infoplus\BillingCodeActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingCodeActivity**](BillingCodeActivityApi.md#addBillingCodeActivity) | **POST** /beta/billingCodeActivity | Create a billingCodeActivity
[**addBillingCodeActivityAudit**](BillingCodeActivityApi.md#addBillingCodeActivityAudit) | **PUT** /beta/billingCodeActivity/{billingCodeActivityId}/audit/{billingCodeActivityAudit} | Add new audit for a billingCodeActivity
[**addBillingCodeActivityFile**](BillingCodeActivityApi.md#addBillingCodeActivityFile) | **POST** /beta/billingCodeActivity/{billingCodeActivityId}/file/{fileName} | Attach a file to a billingCodeActivity
[**addBillingCodeActivityFileByURL**](BillingCodeActivityApi.md#addBillingCodeActivityFileByURL) | **POST** /beta/billingCodeActivity/{billingCodeActivityId}/file | Attach a file to a billingCodeActivity by URL.
[**addBillingCodeActivityTag**](BillingCodeActivityApi.md#addBillingCodeActivityTag) | **PUT** /beta/billingCodeActivity/{billingCodeActivityId}/tag/{billingCodeActivityTag} | Add new tags for a billingCodeActivity.
[**deleteBillingCodeActivity**](BillingCodeActivityApi.md#deleteBillingCodeActivity) | **DELETE** /beta/billingCodeActivity/{billingCodeActivityId} | Delete a billingCodeActivity
[**deleteBillingCodeActivityFile**](BillingCodeActivityApi.md#deleteBillingCodeActivityFile) | **DELETE** /beta/billingCodeActivity/{billingCodeActivityId}/file/{fileId} | Delete a file for a billingCodeActivity.
[**deleteBillingCodeActivityTag**](BillingCodeActivityApi.md#deleteBillingCodeActivityTag) | **DELETE** /beta/billingCodeActivity/{billingCodeActivityId}/tag/{billingCodeActivityTag} | Delete a tag for a billingCodeActivity.
[**getBillingCodeActivityByFilter**](BillingCodeActivityApi.md#getBillingCodeActivityByFilter) | **GET** /beta/billingCodeActivity/search | Search billingCodeActivitys by filter
[**getBillingCodeActivityById**](BillingCodeActivityApi.md#getBillingCodeActivityById) | **GET** /beta/billingCodeActivity/{billingCodeActivityId} | Get a billingCodeActivity by id
[**getBillingCodeActivityFiles**](BillingCodeActivityApi.md#getBillingCodeActivityFiles) | **GET** /beta/billingCodeActivity/{billingCodeActivityId}/file | Get the files for a billingCodeActivity.
[**getBillingCodeActivityTags**](BillingCodeActivityApi.md#getBillingCodeActivityTags) | **GET** /beta/billingCodeActivity/{billingCodeActivityId}/tag | Get the tags for a billingCodeActivity.
[**getDuplicateBillingCodeActivityById**](BillingCodeActivityApi.md#getDuplicateBillingCodeActivityById) | **GET** /beta/billingCodeActivity/duplicate/{billingCodeActivityId} | Get a duplicated a billingCodeActivity by id
[**updateBillingCodeActivity**](BillingCodeActivityApi.md#updateBillingCodeActivity) | **PUT** /beta/billingCodeActivity | Update a billingCodeActivity


# **addBillingCodeActivity**
> \Infoplus\Infoplus\Model\BillingCodeActivity addBillingCodeActivity($body)

Create a billingCodeActivity

Inserts a new billingCodeActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillingCodeActivity(); // \Infoplus\Infoplus\Model\BillingCodeActivity | BillingCodeActivity to be inserted.

try {
    $result = $apiInstance->addBillingCodeActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->addBillingCodeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillingCodeActivity**](../Model/BillingCodeActivity.md)| BillingCodeActivity to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeActivity**](../Model/BillingCodeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeActivityAudit**
> addBillingCodeActivityAudit($billing_code_activity_id, $billing_code_activity_audit)

Add new audit for a billingCodeActivity

Adds an audit to an existing billingCodeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to add an audit to
$billing_code_activity_audit = "billing_code_activity_audit_example"; // string | The audit to add

try {
    $apiInstance->addBillingCodeActivityAudit($billing_code_activity_id, $billing_code_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->addBillingCodeActivityAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to add an audit to |
 **billing_code_activity_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeActivityFile**
> addBillingCodeActivityFile($billing_code_activity_id, $file_name)

Attach a file to a billingCodeActivity

Adds a file to an existing billingCodeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addBillingCodeActivityFile($billing_code_activity_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->addBillingCodeActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeActivityFileByURL**
> addBillingCodeActivityFileByURL($body, $billing_code_activity_id)

Attach a file to a billingCodeActivity by URL.

Adds a file to an existing billingCodeActivity by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to add an file to

try {
    $apiInstance->addBillingCodeActivityFileByURL($body, $billing_code_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->addBillingCodeActivityFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeActivityTag**
> addBillingCodeActivityTag($billing_code_activity_id, $billing_code_activity_tag)

Add new tags for a billingCodeActivity.

Adds a tag to an existing billingCodeActivity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to add a tag to
$billing_code_activity_tag = "billing_code_activity_tag_example"; // string | The tag to add

try {
    $apiInstance->addBillingCodeActivityTag($billing_code_activity_id, $billing_code_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->addBillingCodeActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to add a tag to |
 **billing_code_activity_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeActivity**
> deleteBillingCodeActivity($billing_code_activity_id)

Delete a billingCodeActivity

Deletes the billingCodeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to be deleted.

try {
    $apiInstance->deleteBillingCodeActivity($billing_code_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->deleteBillingCodeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeActivityFile**
> deleteBillingCodeActivityFile($billing_code_activity_id, $file_id)

Delete a file for a billingCodeActivity.

Deletes an existing billingCodeActivity file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteBillingCodeActivityFile($billing_code_activity_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->deleteBillingCodeActivityFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeActivityTag**
> deleteBillingCodeActivityTag($billing_code_activity_id, $billing_code_activity_tag)

Delete a tag for a billingCodeActivity.

Deletes an existing billingCodeActivity tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to remove tag from
$billing_code_activity_tag = "billing_code_activity_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteBillingCodeActivityTag($billing_code_activity_id, $billing_code_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->deleteBillingCodeActivityTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to remove tag from |
 **billing_code_activity_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeActivityByFilter**
> \Infoplus\Infoplus\Model\BillingCodeActivity[] getBillingCodeActivityByFilter($filter, $page, $limit, $sort)

Search billingCodeActivitys by filter

Returns the list of billingCodeActivitys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
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
    $result = $apiInstance->getBillingCodeActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->getBillingCodeActivityByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\BillingCodeActivity[]**](../Model/BillingCodeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeActivityById**
> \Infoplus\Infoplus\Model\BillingCodeActivity getBillingCodeActivityById($billing_code_activity_id)

Get a billingCodeActivity by id

Returns the billingCodeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to be returned.

try {
    $result = $apiInstance->getBillingCodeActivityById($billing_code_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->getBillingCodeActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeActivity**](../Model/BillingCodeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeActivityFiles**
> getBillingCodeActivityFiles($billing_code_activity_id)

Get the files for a billingCodeActivity.

Get all existing billingCodeActivity files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to get files for

try {
    $apiInstance->getBillingCodeActivityFiles($billing_code_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->getBillingCodeActivityFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeActivityTags**
> getBillingCodeActivityTags($billing_code_activity_id)

Get the tags for a billingCodeActivity.

Get all existing billingCodeActivity tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to get tags for

try {
    $apiInstance->getBillingCodeActivityTags($billing_code_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->getBillingCodeActivityTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateBillingCodeActivityById**
> \Infoplus\Infoplus\Model\BillingCodeActivity getDuplicateBillingCodeActivityById($billing_code_activity_id)

Get a duplicated a billingCodeActivity by id

Returns a duplicated billingCodeActivity identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_activity_id = 56; // int | Id of the billingCodeActivity to be duplicated.

try {
    $result = $apiInstance->getDuplicateBillingCodeActivityById($billing_code_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->getDuplicateBillingCodeActivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_activity_id** | **int**| Id of the billingCodeActivity to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeActivity**](../Model/BillingCodeActivity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingCodeActivity**
> updateBillingCodeActivity($body)

Update a billingCodeActivity

Updates an existing billingCodeActivity using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillingCodeActivity(); // \Infoplus\Infoplus\Model\BillingCodeActivity | BillingCodeActivity to be updated.

try {
    $apiInstance->updateBillingCodeActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeActivityApi->updateBillingCodeActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillingCodeActivity**](../Model/BillingCodeActivity.md)| BillingCodeActivity to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

