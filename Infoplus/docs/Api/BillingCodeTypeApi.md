# Infoplus\BillingCodeTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingCodeType**](BillingCodeTypeApi.md#addBillingCodeType) | **POST** /beta/billingCodeType | Create a billingCodeType
[**addBillingCodeTypeAudit**](BillingCodeTypeApi.md#addBillingCodeTypeAudit) | **PUT** /beta/billingCodeType/{billingCodeTypeId}/audit/{billingCodeTypeAudit} | Add new audit for a billingCodeType
[**addBillingCodeTypeFile**](BillingCodeTypeApi.md#addBillingCodeTypeFile) | **POST** /beta/billingCodeType/{billingCodeTypeId}/file/{fileName} | Attach a file to a billingCodeType
[**addBillingCodeTypeFileByURL**](BillingCodeTypeApi.md#addBillingCodeTypeFileByURL) | **POST** /beta/billingCodeType/{billingCodeTypeId}/file | Attach a file to a billingCodeType by URL.
[**addBillingCodeTypeTag**](BillingCodeTypeApi.md#addBillingCodeTypeTag) | **PUT** /beta/billingCodeType/{billingCodeTypeId}/tag/{billingCodeTypeTag} | Add new tags for a billingCodeType.
[**deleteBillingCodeType**](BillingCodeTypeApi.md#deleteBillingCodeType) | **DELETE** /beta/billingCodeType/{billingCodeTypeId} | Delete a billingCodeType
[**deleteBillingCodeTypeFile**](BillingCodeTypeApi.md#deleteBillingCodeTypeFile) | **DELETE** /beta/billingCodeType/{billingCodeTypeId}/file/{fileId} | Delete a file for a billingCodeType.
[**deleteBillingCodeTypeTag**](BillingCodeTypeApi.md#deleteBillingCodeTypeTag) | **DELETE** /beta/billingCodeType/{billingCodeTypeId}/tag/{billingCodeTypeTag} | Delete a tag for a billingCodeType.
[**getBillingCodeTypeByFilter**](BillingCodeTypeApi.md#getBillingCodeTypeByFilter) | **GET** /beta/billingCodeType/search | Search billingCodeTypes by filter
[**getBillingCodeTypeById**](BillingCodeTypeApi.md#getBillingCodeTypeById) | **GET** /beta/billingCodeType/{billingCodeTypeId} | Get a billingCodeType by id
[**getBillingCodeTypeFiles**](BillingCodeTypeApi.md#getBillingCodeTypeFiles) | **GET** /beta/billingCodeType/{billingCodeTypeId}/file | Get the files for a billingCodeType.
[**getBillingCodeTypeTags**](BillingCodeTypeApi.md#getBillingCodeTypeTags) | **GET** /beta/billingCodeType/{billingCodeTypeId}/tag | Get the tags for a billingCodeType.
[**getDuplicateBillingCodeTypeById**](BillingCodeTypeApi.md#getDuplicateBillingCodeTypeById) | **GET** /beta/billingCodeType/duplicate/{billingCodeTypeId} | Get a duplicated a billingCodeType by id
[**updateBillingCodeType**](BillingCodeTypeApi.md#updateBillingCodeType) | **PUT** /beta/billingCodeType | Update a billingCodeType
[**updateBillingCodeTypeCustomFields**](BillingCodeTypeApi.md#updateBillingCodeTypeCustomFields) | **PUT** /beta/billingCodeType/customFields | Update a billingCodeType custom fields


# **addBillingCodeType**
> \Infoplus\Infoplus\Model\BillingCodeType addBillingCodeType($body)

Create a billingCodeType

Inserts a new billingCodeType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillingCodeType(); // \Infoplus\Infoplus\Model\BillingCodeType | BillingCodeType to be inserted.

try {
    $result = $apiInstance->addBillingCodeType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)| BillingCodeType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeTypeAudit**
> addBillingCodeTypeAudit($billing_code_type_id, $billing_code_type_audit)

Add new audit for a billingCodeType

Adds an audit to an existing billingCodeType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to add an audit to
$billing_code_type_audit = "billing_code_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addBillingCodeTypeAudit($billing_code_type_id, $billing_code_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to add an audit to |
 **billing_code_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeTypeFile**
> addBillingCodeTypeFile($billing_code_type_id, $file_name)

Attach a file to a billingCodeType

Adds a file to an existing billingCodeType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addBillingCodeTypeFile($billing_code_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeTypeFileByURL**
> addBillingCodeTypeFileByURL($body, $billing_code_type_id)

Attach a file to a billingCodeType by URL.

Adds a file to an existing billingCodeType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$billing_code_type_id = 56; // int | Id of the billingCodeType to add an file to

try {
    $apiInstance->addBillingCodeTypeFileByURL($body, $billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **billing_code_type_id** | **int**| Id of the billingCodeType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBillingCodeTypeTag**
> addBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag)

Add new tags for a billingCodeType.

Adds a tag to an existing billingCodeType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to add a tag to
$billing_code_type_tag = "billing_code_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to add a tag to |
 **billing_code_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeType**
> deleteBillingCodeType($billing_code_type_id)

Delete a billingCodeType

Deletes the billingCodeType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to be deleted.

try {
    $apiInstance->deleteBillingCodeType($billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->deleteBillingCodeType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeTypeFile**
> deleteBillingCodeTypeFile($billing_code_type_id, $file_id)

Delete a file for a billingCodeType.

Deletes an existing billingCodeType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteBillingCodeTypeFile($billing_code_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->deleteBillingCodeTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingCodeTypeTag**
> deleteBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag)

Delete a tag for a billingCodeType.

Deletes an existing billingCodeType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to remove tag from
$billing_code_type_tag = "billing_code_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->deleteBillingCodeTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to remove tag from |
 **billing_code_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeTypeByFilter**
> \Infoplus\Infoplus\Model\BillingCodeType[] getBillingCodeTypeByFilter($filter, $page, $limit, $sort)

Search billingCodeTypes by filter

Returns the list of billingCodeTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
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
    $result = $apiInstance->getBillingCodeTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\BillingCodeType[]**](../Model/BillingCodeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeTypeById**
> \Infoplus\Infoplus\Model\BillingCodeType getBillingCodeTypeById($billing_code_type_id)

Get a billingCodeType by id

Returns the billingCodeType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to be returned.

try {
    $result = $apiInstance->getBillingCodeTypeById($billing_code_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeTypeFiles**
> getBillingCodeTypeFiles($billing_code_type_id)

Get the files for a billingCodeType.

Get all existing billingCodeType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to get files for

try {
    $apiInstance->getBillingCodeTypeFiles($billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingCodeTypeTags**
> getBillingCodeTypeTags($billing_code_type_id)

Get the tags for a billingCodeType.

Get all existing billingCodeType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to get tags for

try {
    $apiInstance->getBillingCodeTypeTags($billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateBillingCodeTypeById**
> \Infoplus\Infoplus\Model\BillingCodeType getDuplicateBillingCodeTypeById($billing_code_type_id)

Get a duplicated a billingCodeType by id

Returns a duplicated billingCodeType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_code_type_id = 56; // int | Id of the billingCodeType to be duplicated.

try {
    $result = $apiInstance->getDuplicateBillingCodeTypeById($billing_code_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getDuplicateBillingCodeTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingCodeType**
> updateBillingCodeType($body)

Update a billingCodeType

Updates an existing billingCodeType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillingCodeType(); // \Infoplus\Infoplus\Model\BillingCodeType | BillingCodeType to be updated.

try {
    $apiInstance->updateBillingCodeType($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->updateBillingCodeType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)| BillingCodeType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingCodeTypeCustomFields**
> updateBillingCodeTypeCustomFields($body)

Update a billingCodeType custom fields

Updates an existing billingCodeType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\BillingCodeTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\BillingCodeType(); // \Infoplus\Infoplus\Model\BillingCodeType | BillingCodeType to be updated.

try {
    $apiInstance->updateBillingCodeTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->updateBillingCodeTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\BillingCodeType**](../Model/BillingCodeType.md)| BillingCodeType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

