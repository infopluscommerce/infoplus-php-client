# Infoplus\CommodityCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCommodityCodeAudit**](CommodityCodeApi.md#addCommodityCodeAudit) | **PUT** /beta/commodityCode/{commodityCodeId}/audit/{commodityCodeAudit} | Add new audit for a commodityCode
[**addCommodityCodeFile**](CommodityCodeApi.md#addCommodityCodeFile) | **POST** /beta/commodityCode/{commodityCodeId}/file/{fileName} | Attach a file to a commodityCode
[**addCommodityCodeFileByURL**](CommodityCodeApi.md#addCommodityCodeFileByURL) | **POST** /beta/commodityCode/{commodityCodeId}/file | Attach a file to a commodityCode by URL.
[**addCommodityCodeTag**](CommodityCodeApi.md#addCommodityCodeTag) | **PUT** /beta/commodityCode/{commodityCodeId}/tag/{commodityCodeTag} | Add new tags for a commodityCode.
[**deleteCommodityCodeFile**](CommodityCodeApi.md#deleteCommodityCodeFile) | **DELETE** /beta/commodityCode/{commodityCodeId}/file/{fileId} | Delete a file for a commodityCode.
[**deleteCommodityCodeTag**](CommodityCodeApi.md#deleteCommodityCodeTag) | **DELETE** /beta/commodityCode/{commodityCodeId}/tag/{commodityCodeTag} | Delete a tag for a commodityCode.
[**getCommodityCodeByFilter**](CommodityCodeApi.md#getCommodityCodeByFilter) | **GET** /beta/commodityCode/search | Search commodityCodes by filter
[**getCommodityCodeById**](CommodityCodeApi.md#getCommodityCodeById) | **GET** /beta/commodityCode/{commodityCodeId} | Get a commodityCode by id
[**getCommodityCodeFiles**](CommodityCodeApi.md#getCommodityCodeFiles) | **GET** /beta/commodityCode/{commodityCodeId}/file | Get the files for a commodityCode.
[**getCommodityCodeTags**](CommodityCodeApi.md#getCommodityCodeTags) | **GET** /beta/commodityCode/{commodityCodeId}/tag | Get the tags for a commodityCode.
[**getDuplicateCommodityCodeById**](CommodityCodeApi.md#getDuplicateCommodityCodeById) | **GET** /beta/commodityCode/duplicate/{commodityCodeId} | Get a duplicated a commodityCode by id


# **addCommodityCodeAudit**
> addCommodityCodeAudit($commodity_code_id, $commodity_code_audit)

Add new audit for a commodityCode

Adds an audit to an existing commodityCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to add an audit to
$commodity_code_audit = "commodity_code_audit_example"; // string | The audit to add

try {
    $apiInstance->addCommodityCodeAudit($commodity_code_id, $commodity_code_audit);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->addCommodityCodeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to add an audit to |
 **commodity_code_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCommodityCodeFile**
> addCommodityCodeFile($commodity_code_id, $file_name)

Attach a file to a commodityCode

Adds a file to an existing commodityCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addCommodityCodeFile($commodity_code_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->addCommodityCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCommodityCodeFileByURL**
> addCommodityCodeFileByURL($body, $commodity_code_id)

Attach a file to a commodityCode by URL.

Adds a file to an existing commodityCode by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$commodity_code_id = 56; // int | Id of the commodityCode to add an file to

try {
    $apiInstance->addCommodityCodeFileByURL($body, $commodity_code_id);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->addCommodityCodeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **commodity_code_id** | **int**| Id of the commodityCode to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCommodityCodeTag**
> addCommodityCodeTag($commodity_code_id, $commodity_code_tag)

Add new tags for a commodityCode.

Adds a tag to an existing commodityCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to add a tag to
$commodity_code_tag = "commodity_code_tag_example"; // string | The tag to add

try {
    $apiInstance->addCommodityCodeTag($commodity_code_id, $commodity_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->addCommodityCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to add a tag to |
 **commodity_code_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommodityCodeFile**
> deleteCommodityCodeFile($commodity_code_id, $file_id)

Delete a file for a commodityCode.

Deletes an existing commodityCode file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteCommodityCodeFile($commodity_code_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->deleteCommodityCodeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommodityCodeTag**
> deleteCommodityCodeTag($commodity_code_id, $commodity_code_tag)

Delete a tag for a commodityCode.

Deletes an existing commodityCode tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to remove tag from
$commodity_code_tag = "commodity_code_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteCommodityCodeTag($commodity_code_id, $commodity_code_tag);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->deleteCommodityCodeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to remove tag from |
 **commodity_code_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommodityCodeByFilter**
> \Infoplus\Infoplus\Model\CommodityCode[] getCommodityCodeByFilter($filter, $page, $limit, $sort)

Search commodityCodes by filter

Returns the list of commodityCodes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
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
    $result = $apiInstance->getCommodityCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->getCommodityCodeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\CommodityCode[]**](../Model/CommodityCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommodityCodeById**
> \Infoplus\Infoplus\Model\CommodityCode getCommodityCodeById($commodity_code_id)

Get a commodityCode by id

Returns the commodityCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to be returned.

try {
    $result = $apiInstance->getCommodityCodeById($commodity_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->getCommodityCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\CommodityCode**](../Model/CommodityCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommodityCodeFiles**
> getCommodityCodeFiles($commodity_code_id)

Get the files for a commodityCode.

Get all existing commodityCode files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to get files for

try {
    $apiInstance->getCommodityCodeFiles($commodity_code_id);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->getCommodityCodeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommodityCodeTags**
> getCommodityCodeTags($commodity_code_id)

Get the tags for a commodityCode.

Get all existing commodityCode tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to get tags for

try {
    $apiInstance->getCommodityCodeTags($commodity_code_id);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->getCommodityCodeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateCommodityCodeById**
> \Infoplus\Infoplus\Model\CommodityCode getDuplicateCommodityCodeById($commodity_code_id)

Get a duplicated a commodityCode by id

Returns a duplicated commodityCode identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CommodityCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commodity_code_id = 56; // int | Id of the commodityCode to be duplicated.

try {
    $result = $apiInstance->getDuplicateCommodityCodeById($commodity_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommodityCodeApi->getDuplicateCommodityCodeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodity_code_id** | **int**| Id of the commodityCode to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\CommodityCode**](../Model/CommodityCode.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

