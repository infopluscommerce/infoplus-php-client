# Infoplus\ReturnOrderLineApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReturnOrderLineAudit**](ReturnOrderLineApi.md#addReturnOrderLineAudit) | **PUT** /beta/returnOrderLine/{returnOrderLineId}/audit/{returnOrderLineAudit} | Add new audit for a returnOrderLine
[**addReturnOrderLineFile**](ReturnOrderLineApi.md#addReturnOrderLineFile) | **POST** /beta/returnOrderLine/{returnOrderLineId}/file/{fileName} | Attach a file to a returnOrderLine
[**addReturnOrderLineFileByURL**](ReturnOrderLineApi.md#addReturnOrderLineFileByURL) | **POST** /beta/returnOrderLine/{returnOrderLineId}/file | Attach a file to a returnOrderLine by URL.
[**addReturnOrderLineTag**](ReturnOrderLineApi.md#addReturnOrderLineTag) | **PUT** /beta/returnOrderLine/{returnOrderLineId}/tag/{returnOrderLineTag} | Add new tags for a returnOrderLine.
[**deleteReturnOrderLineFile**](ReturnOrderLineApi.md#deleteReturnOrderLineFile) | **DELETE** /beta/returnOrderLine/{returnOrderLineId}/file/{fileId} | Delete a file for a returnOrderLine.
[**deleteReturnOrderLineTag**](ReturnOrderLineApi.md#deleteReturnOrderLineTag) | **DELETE** /beta/returnOrderLine/{returnOrderLineId}/tag/{returnOrderLineTag} | Delete a tag for a returnOrderLine.
[**getDuplicateReturnOrderLineById**](ReturnOrderLineApi.md#getDuplicateReturnOrderLineById) | **GET** /beta/returnOrderLine/duplicate/{returnOrderLineId} | Get a duplicated a returnOrderLine by id
[**getReturnOrderLineByFilter**](ReturnOrderLineApi.md#getReturnOrderLineByFilter) | **GET** /beta/returnOrderLine/search | Search returnOrderLines by filter
[**getReturnOrderLineById**](ReturnOrderLineApi.md#getReturnOrderLineById) | **GET** /beta/returnOrderLine/{returnOrderLineId} | Get a returnOrderLine by id
[**getReturnOrderLineFiles**](ReturnOrderLineApi.md#getReturnOrderLineFiles) | **GET** /beta/returnOrderLine/{returnOrderLineId}/file | Get the files for a returnOrderLine.
[**getReturnOrderLineTags**](ReturnOrderLineApi.md#getReturnOrderLineTags) | **GET** /beta/returnOrderLine/{returnOrderLineId}/tag | Get the tags for a returnOrderLine.
[**updateReturnOrderLineCustomFields**](ReturnOrderLineApi.md#updateReturnOrderLineCustomFields) | **PUT** /beta/returnOrderLine/customFields | Update a returnOrderLine custom fields


# **addReturnOrderLineAudit**
> addReturnOrderLineAudit($return_order_line_id, $return_order_line_audit)

Add new audit for a returnOrderLine

Adds an audit to an existing returnOrderLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to add an audit to
$return_order_line_audit = "return_order_line_audit_example"; // string | The audit to add

try {
    $apiInstance->addReturnOrderLineAudit($return_order_line_id, $return_order_line_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->addReturnOrderLineAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to add an audit to |
 **return_order_line_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineFile**
> addReturnOrderLineFile($return_order_line_id, $file_name)

Attach a file to a returnOrderLine

Adds a file to an existing returnOrderLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReturnOrderLineFile($return_order_line_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->addReturnOrderLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineFileByURL**
> addReturnOrderLineFileByURL($body, $return_order_line_id)

Attach a file to a returnOrderLine by URL.

Adds a file to an existing returnOrderLine by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$return_order_line_id = 56; // int | Id of the returnOrderLine to add an file to

try {
    $apiInstance->addReturnOrderLineFileByURL($body, $return_order_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->addReturnOrderLineFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **return_order_line_id** | **int**| Id of the returnOrderLine to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineTag**
> addReturnOrderLineTag($return_order_line_id, $return_order_line_tag)

Add new tags for a returnOrderLine.

Adds a tag to an existing returnOrderLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to add a tag to
$return_order_line_tag = "return_order_line_tag_example"; // string | The tag to add

try {
    $apiInstance->addReturnOrderLineTag($return_order_line_id, $return_order_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->addReturnOrderLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to add a tag to |
 **return_order_line_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderLineFile**
> deleteReturnOrderLineFile($return_order_line_id, $file_id)

Delete a file for a returnOrderLine.

Deletes an existing returnOrderLine file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReturnOrderLineFile($return_order_line_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->deleteReturnOrderLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderLineTag**
> deleteReturnOrderLineTag($return_order_line_id, $return_order_line_tag)

Delete a tag for a returnOrderLine.

Deletes an existing returnOrderLine tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to remove tag from
$return_order_line_tag = "return_order_line_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReturnOrderLineTag($return_order_line_id, $return_order_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->deleteReturnOrderLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to remove tag from |
 **return_order_line_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReturnOrderLineById**
> \Infoplus\Infoplus\Model\ReturnOrderLine getDuplicateReturnOrderLineById($return_order_line_id)

Get a duplicated a returnOrderLine by id

Returns a duplicated returnOrderLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to be duplicated.

try {
    $result = $apiInstance->getDuplicateReturnOrderLineById($return_order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->getDuplicateReturnOrderLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrderLine**](../Model/ReturnOrderLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineByFilter**
> \Infoplus\Infoplus\Model\ReturnOrderLine[] getReturnOrderLineByFilter($filter, $page, $limit, $sort)

Search returnOrderLines by filter

Returns the list of returnOrderLines that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
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
    $result = $apiInstance->getReturnOrderLineByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->getReturnOrderLineByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReturnOrderLine[]**](../Model/ReturnOrderLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineById**
> \Infoplus\Infoplus\Model\ReturnOrderLine getReturnOrderLineById($return_order_line_id)

Get a returnOrderLine by id

Returns the returnOrderLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to be returned.

try {
    $result = $apiInstance->getReturnOrderLineById($return_order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->getReturnOrderLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrderLine**](../Model/ReturnOrderLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineFiles**
> getReturnOrderLineFiles($return_order_line_id)

Get the files for a returnOrderLine.

Get all existing returnOrderLine files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to get files for

try {
    $apiInstance->getReturnOrderLineFiles($return_order_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->getReturnOrderLineFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineTags**
> getReturnOrderLineTags($return_order_line_id)

Get the tags for a returnOrderLine.

Get all existing returnOrderLine tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_id = 56; // int | Id of the returnOrderLine to get tags for

try {
    $apiInstance->getReturnOrderLineTags($return_order_line_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->getReturnOrderLineTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_id** | **int**| Id of the returnOrderLine to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnOrderLineCustomFields**
> updateReturnOrderLineCustomFields($body)

Update a returnOrderLine custom fields

Updates an existing returnOrderLine custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReturnOrderLine(); // \Infoplus\Infoplus\Model\ReturnOrderLine | ReturnOrderLine to be updated.

try {
    $apiInstance->updateReturnOrderLineCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineApi->updateReturnOrderLineCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReturnOrderLine**](../Model/ReturnOrderLine.md)| ReturnOrderLine to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

