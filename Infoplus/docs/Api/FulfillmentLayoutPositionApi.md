# Infoplus\FulfillmentLayoutPositionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFulfillmentLayoutPositionAudit**](FulfillmentLayoutPositionApi.md#addFulfillmentLayoutPositionAudit) | **PUT** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/audit/{fulfillmentLayoutPositionAudit} | Add new audit for a fulfillmentLayoutPosition
[**addFulfillmentLayoutPositionFile**](FulfillmentLayoutPositionApi.md#addFulfillmentLayoutPositionFile) | **POST** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/file/{fileName} | Attach a file to a fulfillmentLayoutPosition
[**addFulfillmentLayoutPositionFileByURL**](FulfillmentLayoutPositionApi.md#addFulfillmentLayoutPositionFileByURL) | **POST** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/file | Attach a file to a fulfillmentLayoutPosition by URL.
[**addFulfillmentLayoutPositionTag**](FulfillmentLayoutPositionApi.md#addFulfillmentLayoutPositionTag) | **PUT** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/tag/{fulfillmentLayoutPositionTag} | Add new tags for a fulfillmentLayoutPosition.
[**deleteFulfillmentLayoutPositionFile**](FulfillmentLayoutPositionApi.md#deleteFulfillmentLayoutPositionFile) | **DELETE** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/file/{fileId} | Delete a file for a fulfillmentLayoutPosition.
[**deleteFulfillmentLayoutPositionTag**](FulfillmentLayoutPositionApi.md#deleteFulfillmentLayoutPositionTag) | **DELETE** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/tag/{fulfillmentLayoutPositionTag} | Delete a tag for a fulfillmentLayoutPosition.
[**getDuplicateFulfillmentLayoutPositionById**](FulfillmentLayoutPositionApi.md#getDuplicateFulfillmentLayoutPositionById) | **GET** /beta/fulfillmentLayoutPosition/duplicate/{fulfillmentLayoutPositionId} | Get a duplicated a fulfillmentLayoutPosition by id
[**getFulfillmentLayoutPositionByFilter**](FulfillmentLayoutPositionApi.md#getFulfillmentLayoutPositionByFilter) | **GET** /beta/fulfillmentLayoutPosition/search | Search fulfillmentLayoutPositions by filter
[**getFulfillmentLayoutPositionById**](FulfillmentLayoutPositionApi.md#getFulfillmentLayoutPositionById) | **GET** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId} | Get a fulfillmentLayoutPosition by id
[**getFulfillmentLayoutPositionFiles**](FulfillmentLayoutPositionApi.md#getFulfillmentLayoutPositionFiles) | **GET** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/file | Get the files for a fulfillmentLayoutPosition.
[**getFulfillmentLayoutPositionTags**](FulfillmentLayoutPositionApi.md#getFulfillmentLayoutPositionTags) | **GET** /beta/fulfillmentLayoutPosition/{fulfillmentLayoutPositionId}/tag | Get the tags for a fulfillmentLayoutPosition.


# **addFulfillmentLayoutPositionAudit**
> addFulfillmentLayoutPositionAudit($fulfillment_layout_position_id, $fulfillment_layout_position_audit)

Add new audit for a fulfillmentLayoutPosition

Adds an audit to an existing fulfillmentLayoutPosition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to add an audit to
$fulfillment_layout_position_audit = "fulfillment_layout_position_audit_example"; // string | The audit to add

try {
    $apiInstance->addFulfillmentLayoutPositionAudit($fulfillment_layout_position_id, $fulfillment_layout_position_audit);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->addFulfillmentLayoutPositionAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to add an audit to |
 **fulfillment_layout_position_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentLayoutPositionFile**
> addFulfillmentLayoutPositionFile($fulfillment_layout_position_id, $file_name)

Attach a file to a fulfillmentLayoutPosition

Adds a file to an existing fulfillmentLayoutPosition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFulfillmentLayoutPositionFile($fulfillment_layout_position_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->addFulfillmentLayoutPositionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentLayoutPositionFileByURL**
> addFulfillmentLayoutPositionFileByURL($body, $fulfillment_layout_position_id)

Attach a file to a fulfillmentLayoutPosition by URL.

Adds a file to an existing fulfillmentLayoutPosition by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to add an file to

try {
    $apiInstance->addFulfillmentLayoutPositionFileByURL($body, $fulfillment_layout_position_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->addFulfillmentLayoutPositionFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentLayoutPositionTag**
> addFulfillmentLayoutPositionTag($fulfillment_layout_position_id, $fulfillment_layout_position_tag)

Add new tags for a fulfillmentLayoutPosition.

Adds a tag to an existing fulfillmentLayoutPosition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to add a tag to
$fulfillment_layout_position_tag = "fulfillment_layout_position_tag_example"; // string | The tag to add

try {
    $apiInstance->addFulfillmentLayoutPositionTag($fulfillment_layout_position_id, $fulfillment_layout_position_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->addFulfillmentLayoutPositionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to add a tag to |
 **fulfillment_layout_position_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentLayoutPositionFile**
> deleteFulfillmentLayoutPositionFile($fulfillment_layout_position_id, $file_id)

Delete a file for a fulfillmentLayoutPosition.

Deletes an existing fulfillmentLayoutPosition file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFulfillmentLayoutPositionFile($fulfillment_layout_position_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->deleteFulfillmentLayoutPositionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentLayoutPositionTag**
> deleteFulfillmentLayoutPositionTag($fulfillment_layout_position_id, $fulfillment_layout_position_tag)

Delete a tag for a fulfillmentLayoutPosition.

Deletes an existing fulfillmentLayoutPosition tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to remove tag from
$fulfillment_layout_position_tag = "fulfillment_layout_position_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFulfillmentLayoutPositionTag($fulfillment_layout_position_id, $fulfillment_layout_position_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->deleteFulfillmentLayoutPositionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to remove tag from |
 **fulfillment_layout_position_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFulfillmentLayoutPositionById**
> \Infoplus\Infoplus\Model\FulfillmentLayoutPosition getDuplicateFulfillmentLayoutPositionById($fulfillment_layout_position_id)

Get a duplicated a fulfillmentLayoutPosition by id

Returns a duplicated fulfillmentLayoutPosition identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to be duplicated.

try {
    $result = $apiInstance->getDuplicateFulfillmentLayoutPositionById($fulfillment_layout_position_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->getDuplicateFulfillmentLayoutPositionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentLayoutPosition**](../Model/FulfillmentLayoutPosition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentLayoutPositionByFilter**
> \Infoplus\Infoplus\Model\FulfillmentLayoutPosition[] getFulfillmentLayoutPositionByFilter($filter, $page, $limit, $sort)

Search fulfillmentLayoutPositions by filter

Returns the list of fulfillmentLayoutPositions that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
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
    $result = $apiInstance->getFulfillmentLayoutPositionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->getFulfillmentLayoutPositionByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FulfillmentLayoutPosition[]**](../Model/FulfillmentLayoutPosition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentLayoutPositionById**
> \Infoplus\Infoplus\Model\FulfillmentLayoutPosition getFulfillmentLayoutPositionById($fulfillment_layout_position_id)

Get a fulfillmentLayoutPosition by id

Returns the fulfillmentLayoutPosition identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to be returned.

try {
    $result = $apiInstance->getFulfillmentLayoutPositionById($fulfillment_layout_position_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->getFulfillmentLayoutPositionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentLayoutPosition**](../Model/FulfillmentLayoutPosition.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentLayoutPositionFiles**
> getFulfillmentLayoutPositionFiles($fulfillment_layout_position_id)

Get the files for a fulfillmentLayoutPosition.

Get all existing fulfillmentLayoutPosition files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to get files for

try {
    $apiInstance->getFulfillmentLayoutPositionFiles($fulfillment_layout_position_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->getFulfillmentLayoutPositionFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentLayoutPositionTags**
> getFulfillmentLayoutPositionTags($fulfillment_layout_position_id)

Get the tags for a fulfillmentLayoutPosition.

Get all existing fulfillmentLayoutPosition tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentLayoutPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_layout_position_id = 56; // int | Id of the fulfillmentLayoutPosition to get tags for

try {
    $apiInstance->getFulfillmentLayoutPositionTags($fulfillment_layout_position_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentLayoutPositionApi->getFulfillmentLayoutPositionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_layout_position_id** | **int**| Id of the fulfillmentLayoutPosition to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

