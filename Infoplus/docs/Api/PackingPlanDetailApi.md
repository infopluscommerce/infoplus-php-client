# Infoplus\PackingPlanDetailApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPackingPlanDetailAudit**](PackingPlanDetailApi.md#addPackingPlanDetailAudit) | **PUT** /beta/packingPlanDetail/{packingPlanDetailId}/audit/{packingPlanDetailAudit} | Add new audit for a packingPlanDetail
[**addPackingPlanDetailFile**](PackingPlanDetailApi.md#addPackingPlanDetailFile) | **POST** /beta/packingPlanDetail/{packingPlanDetailId}/file/{fileName} | Attach a file to a packingPlanDetail
[**addPackingPlanDetailFileByURL**](PackingPlanDetailApi.md#addPackingPlanDetailFileByURL) | **POST** /beta/packingPlanDetail/{packingPlanDetailId}/file | Attach a file to a packingPlanDetail by URL.
[**addPackingPlanDetailTag**](PackingPlanDetailApi.md#addPackingPlanDetailTag) | **PUT** /beta/packingPlanDetail/{packingPlanDetailId}/tag/{packingPlanDetailTag} | Add new tags for a packingPlanDetail.
[**deletePackingPlanDetailFile**](PackingPlanDetailApi.md#deletePackingPlanDetailFile) | **DELETE** /beta/packingPlanDetail/{packingPlanDetailId}/file/{fileId} | Delete a file for a packingPlanDetail.
[**deletePackingPlanDetailTag**](PackingPlanDetailApi.md#deletePackingPlanDetailTag) | **DELETE** /beta/packingPlanDetail/{packingPlanDetailId}/tag/{packingPlanDetailTag} | Delete a tag for a packingPlanDetail.
[**getDuplicatePackingPlanDetailById**](PackingPlanDetailApi.md#getDuplicatePackingPlanDetailById) | **GET** /beta/packingPlanDetail/duplicate/{packingPlanDetailId} | Get a duplicated a packingPlanDetail by id
[**getPackingPlanDetailByFilter**](PackingPlanDetailApi.md#getPackingPlanDetailByFilter) | **GET** /beta/packingPlanDetail/search | Search packingPlanDetails by filter
[**getPackingPlanDetailById**](PackingPlanDetailApi.md#getPackingPlanDetailById) | **GET** /beta/packingPlanDetail/{packingPlanDetailId} | Get a packingPlanDetail by id
[**getPackingPlanDetailFiles**](PackingPlanDetailApi.md#getPackingPlanDetailFiles) | **GET** /beta/packingPlanDetail/{packingPlanDetailId}/file | Get the files for a packingPlanDetail.
[**getPackingPlanDetailTags**](PackingPlanDetailApi.md#getPackingPlanDetailTags) | **GET** /beta/packingPlanDetail/{packingPlanDetailId}/tag | Get the tags for a packingPlanDetail.
[**updatePackingPlanDetailCustomFields**](PackingPlanDetailApi.md#updatePackingPlanDetailCustomFields) | **PUT** /beta/packingPlanDetail/customFields | Update a packingPlanDetail custom fields


# **addPackingPlanDetailAudit**
> addPackingPlanDetailAudit($packing_plan_detail_id, $packing_plan_detail_audit)

Add new audit for a packingPlanDetail

Adds an audit to an existing packingPlanDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to add an audit to
$packing_plan_detail_audit = "packing_plan_detail_audit_example"; // string | The audit to add

try {
    $apiInstance->addPackingPlanDetailAudit($packing_plan_detail_id, $packing_plan_detail_audit);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->addPackingPlanDetailAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to add an audit to |
 **packing_plan_detail_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanDetailFile**
> addPackingPlanDetailFile($packing_plan_detail_id, $file_name)

Attach a file to a packingPlanDetail

Adds a file to an existing packingPlanDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPackingPlanDetailFile($packing_plan_detail_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->addPackingPlanDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanDetailFileByURL**
> addPackingPlanDetailFileByURL($body, $packing_plan_detail_id)

Attach a file to a packingPlanDetail by URL.

Adds a file to an existing packingPlanDetail by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to add an file to

try {
    $apiInstance->addPackingPlanDetailFileByURL($body, $packing_plan_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->addPackingPlanDetailFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanDetailTag**
> addPackingPlanDetailTag($packing_plan_detail_id, $packing_plan_detail_tag)

Add new tags for a packingPlanDetail.

Adds a tag to an existing packingPlanDetail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to add a tag to
$packing_plan_detail_tag = "packing_plan_detail_tag_example"; // string | The tag to add

try {
    $apiInstance->addPackingPlanDetailTag($packing_plan_detail_id, $packing_plan_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->addPackingPlanDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to add a tag to |
 **packing_plan_detail_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingPlanDetailFile**
> deletePackingPlanDetailFile($packing_plan_detail_id, $file_id)

Delete a file for a packingPlanDetail.

Deletes an existing packingPlanDetail file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePackingPlanDetailFile($packing_plan_detail_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->deletePackingPlanDetailFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingPlanDetailTag**
> deletePackingPlanDetailTag($packing_plan_detail_id, $packing_plan_detail_tag)

Delete a tag for a packingPlanDetail.

Deletes an existing packingPlanDetail tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to remove tag from
$packing_plan_detail_tag = "packing_plan_detail_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePackingPlanDetailTag($packing_plan_detail_id, $packing_plan_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->deletePackingPlanDetailTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to remove tag from |
 **packing_plan_detail_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePackingPlanDetailById**
> \Infoplus\Infoplus\Model\PackingPlanDetail getDuplicatePackingPlanDetailById($packing_plan_detail_id)

Get a duplicated a packingPlanDetail by id

Returns a duplicated packingPlanDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to be duplicated.

try {
    $result = $apiInstance->getDuplicatePackingPlanDetailById($packing_plan_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->getDuplicatePackingPlanDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PackingPlanDetail**](../Model/PackingPlanDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanDetailByFilter**
> \Infoplus\Infoplus\Model\PackingPlanDetail[] getPackingPlanDetailByFilter($filter, $page, $limit, $sort)

Search packingPlanDetails by filter

Returns the list of packingPlanDetails that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
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
    $result = $apiInstance->getPackingPlanDetailByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->getPackingPlanDetailByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PackingPlanDetail[]**](../Model/PackingPlanDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanDetailById**
> \Infoplus\Infoplus\Model\PackingPlanDetail getPackingPlanDetailById($packing_plan_detail_id)

Get a packingPlanDetail by id

Returns the packingPlanDetail identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to be returned.

try {
    $result = $apiInstance->getPackingPlanDetailById($packing_plan_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->getPackingPlanDetailById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PackingPlanDetail**](../Model/PackingPlanDetail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanDetailFiles**
> getPackingPlanDetailFiles($packing_plan_detail_id)

Get the files for a packingPlanDetail.

Get all existing packingPlanDetail files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to get files for

try {
    $apiInstance->getPackingPlanDetailFiles($packing_plan_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->getPackingPlanDetailFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanDetailTags**
> getPackingPlanDetailTags($packing_plan_detail_id)

Get the tags for a packingPlanDetail.

Get all existing packingPlanDetail tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_detail_id = 56; // int | Id of the packingPlanDetail to get tags for

try {
    $apiInstance->getPackingPlanDetailTags($packing_plan_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->getPackingPlanDetailTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_detail_id** | **int**| Id of the packingPlanDetail to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackingPlanDetailCustomFields**
> updatePackingPlanDetailCustomFields($body)

Update a packingPlanDetail custom fields

Updates an existing packingPlanDetail custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PackingPlanDetail(); // \Infoplus\Infoplus\Model\PackingPlanDetail | PackingPlanDetail to be updated.

try {
    $apiInstance->updatePackingPlanDetailCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanDetailApi->updatePackingPlanDetailCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PackingPlanDetail**](../Model/PackingPlanDetail.md)| PackingPlanDetail to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

