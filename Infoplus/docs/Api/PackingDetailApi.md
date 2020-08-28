# Infoplus\PackingDetailApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPackingDetailAudit**](PackingDetailApi.md#addPackingDetailAudit) | **PUT** /beta/packingDetail/{packingDetailId}/audit/{packingDetailAudit} | Add new audit for a packingDetail
[**addPackingDetailFile**](PackingDetailApi.md#addPackingDetailFile) | **POST** /beta/packingDetail/{packingDetailId}/file/{fileName} | Attach a file to a packingDetail
[**addPackingDetailFileByURL**](PackingDetailApi.md#addPackingDetailFileByURL) | **POST** /beta/packingDetail/{packingDetailId}/file | Attach a file to a packingDetail by URL.
[**addPackingDetailTag**](PackingDetailApi.md#addPackingDetailTag) | **PUT** /beta/packingDetail/{packingDetailId}/tag/{packingDetailTag} | Add new tags for a packingDetail.
[**deletePackingDetailFile**](PackingDetailApi.md#deletePackingDetailFile) | **DELETE** /beta/packingDetail/{packingDetailId}/file/{fileId} | Delete a file for a packingDetail.
[**deletePackingDetailTag**](PackingDetailApi.md#deletePackingDetailTag) | **DELETE** /beta/packingDetail/{packingDetailId}/tag/{packingDetailTag} | Delete a tag for a packingDetail.
[**getDuplicatePackingDetailById**](PackingDetailApi.md#getDuplicatePackingDetailById) | **GET** /beta/packingDetail/duplicate/{packingDetailId} | Get a duplicated a packingDetail by id
[**getPackingDetailByFilter**](PackingDetailApi.md#getPackingDetailByFilter) | **GET** /beta/packingDetail/search | Search packingDetails by filter
[**getPackingDetailById**](PackingDetailApi.md#getPackingDetailById) | **GET** /beta/packingDetail/{packingDetailId} | Get a packingDetail by id
[**getPackingDetailFiles**](PackingDetailApi.md#getPackingDetailFiles) | **GET** /beta/packingDetail/{packingDetailId}/file | Get the files for a packingDetail.
[**getPackingDetailTags**](PackingDetailApi.md#getPackingDetailTags) | **GET** /beta/packingDetail/{packingDetailId}/tag | Get the tags for a packingDetail.
[**updatePackingDetailCustomFields**](PackingDetailApi.md#updatePackingDetailCustomFields) | **PUT** /beta/packingDetail/customFields | Update a packingDetail custom fields


# **addPackingDetailAudit**
> addPackingDetailAudit($packing_detail_id, $packing_detail_audit)

Add new audit for a packingDetail

Adds an audit to an existing packingDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to add an audit to
$packing_detail_audit = "packing_detail_audit_example"; // string | The audit to add

try {
    $apiInstance->addPackingDetailAudit($packing_detail_id, $packing_detail_audit);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->addPackingDetailAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to add an audit to |
 **packing_detail_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingDetailFile**
> addPackingDetailFile($packing_detail_id, $file_name)

Attach a file to a packingDetail

Adds a file to an existing packingDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPackingDetailFile($packing_detail_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->addPackingDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingDetailFileByURL**
> addPackingDetailFileByURL($body, $packing_detail_id)

Attach a file to a packingDetail by URL.

Adds a file to an existing packingDetail by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$packing_detail_id = 56; // int | Id of the packingDetail to add an file to

try {
    $apiInstance->addPackingDetailFileByURL($body, $packing_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->addPackingDetailFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **packing_detail_id** | **int**| Id of the packingDetail to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingDetailTag**
> addPackingDetailTag($packing_detail_id, $packing_detail_tag)

Add new tags for a packingDetail.

Adds a tag to an existing packingDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to add a tag to
$packing_detail_tag = "packing_detail_tag_example"; // string | The tag to add

try {
    $apiInstance->addPackingDetailTag($packing_detail_id, $packing_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->addPackingDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to add a tag to |
 **packing_detail_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingDetailFile**
> deletePackingDetailFile($packing_detail_id, $file_id)

Delete a file for a packingDetail.

Deletes an existing packingDetail file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePackingDetailFile($packing_detail_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->deletePackingDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingDetailTag**
> deletePackingDetailTag($packing_detail_id, $packing_detail_tag)

Delete a tag for a packingDetail.

Deletes an existing packingDetail tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to remove tag from
$packing_detail_tag = "packing_detail_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePackingDetailTag($packing_detail_id, $packing_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->deletePackingDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to remove tag from |
 **packing_detail_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePackingDetailById**
> \Infoplus\Infoplus\Model\PackingDetail getDuplicatePackingDetailById($packing_detail_id)

Get a duplicated a packingDetail by id

Returns a duplicated packingDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to be duplicated.

try {
    $result = $apiInstance->getDuplicatePackingDetailById($packing_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->getDuplicatePackingDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PackingDetail**](../Model/PackingDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingDetailByFilter**
> \Infoplus\Infoplus\Model\PackingDetail[] getPackingDetailByFilter($filter, $page, $limit, $sort)

Search packingDetails by filter

Returns the list of packingDetails that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
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
    $result = $apiInstance->getPackingDetailByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->getPackingDetailByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PackingDetail[]**](../Model/PackingDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingDetailById**
> \Infoplus\Infoplus\Model\PackingDetail getPackingDetailById($packing_detail_id)

Get a packingDetail by id

Returns the packingDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to be returned.

try {
    $result = $apiInstance->getPackingDetailById($packing_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->getPackingDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PackingDetail**](../Model/PackingDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingDetailFiles**
> getPackingDetailFiles($packing_detail_id)

Get the files for a packingDetail.

Get all existing packingDetail files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to get files for

try {
    $apiInstance->getPackingDetailFiles($packing_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->getPackingDetailFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingDetailTags**
> getPackingDetailTags($packing_detail_id)

Get the tags for a packingDetail.

Get all existing packingDetail tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_detail_id = 56; // int | Id of the packingDetail to get tags for

try {
    $apiInstance->getPackingDetailTags($packing_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->getPackingDetailTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_detail_id** | **int**| Id of the packingDetail to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackingDetailCustomFields**
> updatePackingDetailCustomFields($body)

Update a packingDetail custom fields

Updates an existing packingDetail custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PackingDetail(); // \Infoplus\Infoplus\Model\PackingDetail | PackingDetail to be updated.

try {
    $apiInstance->updatePackingDetailCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling PackingDetailApi->updatePackingDetailCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PackingDetail**](../Model/PackingDetail.md)| PackingDetail to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

