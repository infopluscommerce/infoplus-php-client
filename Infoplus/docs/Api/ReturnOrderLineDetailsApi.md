# Infoplus\ReturnOrderLineDetailsApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReturnOrderLineDetailsAudit**](ReturnOrderLineDetailsApi.md#addReturnOrderLineDetailsAudit) | **PUT** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/audit/{returnOrderLineDetailsAudit} | Add new audit for a returnOrderLineDetails
[**addReturnOrderLineDetailsFile**](ReturnOrderLineDetailsApi.md#addReturnOrderLineDetailsFile) | **POST** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/file/{fileName} | Attach a file to a returnOrderLineDetails
[**addReturnOrderLineDetailsFileByURL**](ReturnOrderLineDetailsApi.md#addReturnOrderLineDetailsFileByURL) | **POST** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/file | Attach a file to a returnOrderLineDetails by URL.
[**addReturnOrderLineDetailsTag**](ReturnOrderLineDetailsApi.md#addReturnOrderLineDetailsTag) | **PUT** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/tag/{returnOrderLineDetailsTag} | Add new tags for a returnOrderLineDetails.
[**deleteReturnOrderLineDetailsFile**](ReturnOrderLineDetailsApi.md#deleteReturnOrderLineDetailsFile) | **DELETE** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/file/{fileId} | Delete a file for a returnOrderLineDetails.
[**deleteReturnOrderLineDetailsTag**](ReturnOrderLineDetailsApi.md#deleteReturnOrderLineDetailsTag) | **DELETE** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/tag/{returnOrderLineDetailsTag} | Delete a tag for a returnOrderLineDetails.
[**getDuplicateReturnOrderLineDetailsById**](ReturnOrderLineDetailsApi.md#getDuplicateReturnOrderLineDetailsById) | **GET** /beta/returnOrderLineDetails/duplicate/{returnOrderLineDetailsId} | Get a duplicated a returnOrderLineDetails by id
[**getReturnOrderLineDetailsByFilter**](ReturnOrderLineDetailsApi.md#getReturnOrderLineDetailsByFilter) | **GET** /beta/returnOrderLineDetails/search | Search returnOrderLineDetailses by filter
[**getReturnOrderLineDetailsById**](ReturnOrderLineDetailsApi.md#getReturnOrderLineDetailsById) | **GET** /beta/returnOrderLineDetails/{returnOrderLineDetailsId} | Get a returnOrderLineDetails by id
[**getReturnOrderLineDetailsFiles**](ReturnOrderLineDetailsApi.md#getReturnOrderLineDetailsFiles) | **GET** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/file | Get the files for a returnOrderLineDetails.
[**getReturnOrderLineDetailsTags**](ReturnOrderLineDetailsApi.md#getReturnOrderLineDetailsTags) | **GET** /beta/returnOrderLineDetails/{returnOrderLineDetailsId}/tag | Get the tags for a returnOrderLineDetails.
[**updateReturnOrderLineDetailsCustomFields**](ReturnOrderLineDetailsApi.md#updateReturnOrderLineDetailsCustomFields) | **PUT** /beta/returnOrderLineDetails/customFields | Update a returnOrderLineDetails custom fields


# **addReturnOrderLineDetailsAudit**
> addReturnOrderLineDetailsAudit($return_order_line_details_id, $return_order_line_details_audit)

Add new audit for a returnOrderLineDetails

Adds an audit to an existing returnOrderLineDetails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to add an audit to
$return_order_line_details_audit = "return_order_line_details_audit_example"; // string | The audit to add

try {
    $apiInstance->addReturnOrderLineDetailsAudit($return_order_line_details_id, $return_order_line_details_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->addReturnOrderLineDetailsAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to add an audit to |
 **return_order_line_details_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineDetailsFile**
> addReturnOrderLineDetailsFile($return_order_line_details_id, $file_name)

Attach a file to a returnOrderLineDetails

Adds a file to an existing returnOrderLineDetails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReturnOrderLineDetailsFile($return_order_line_details_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->addReturnOrderLineDetailsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineDetailsFileByURL**
> addReturnOrderLineDetailsFileByURL($body, $return_order_line_details_id)

Attach a file to a returnOrderLineDetails by URL.

Adds a file to an existing returnOrderLineDetails by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to add an file to

try {
    $apiInstance->addReturnOrderLineDetailsFileByURL($body, $return_order_line_details_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->addReturnOrderLineDetailsFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnOrderLineDetailsTag**
> addReturnOrderLineDetailsTag($return_order_line_details_id, $return_order_line_details_tag)

Add new tags for a returnOrderLineDetails.

Adds a tag to an existing returnOrderLineDetails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to add a tag to
$return_order_line_details_tag = "return_order_line_details_tag_example"; // string | The tag to add

try {
    $apiInstance->addReturnOrderLineDetailsTag($return_order_line_details_id, $return_order_line_details_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->addReturnOrderLineDetailsTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to add a tag to |
 **return_order_line_details_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderLineDetailsFile**
> deleteReturnOrderLineDetailsFile($return_order_line_details_id, $file_id)

Delete a file for a returnOrderLineDetails.

Deletes an existing returnOrderLineDetails file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReturnOrderLineDetailsFile($return_order_line_details_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->deleteReturnOrderLineDetailsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnOrderLineDetailsTag**
> deleteReturnOrderLineDetailsTag($return_order_line_details_id, $return_order_line_details_tag)

Delete a tag for a returnOrderLineDetails.

Deletes an existing returnOrderLineDetails tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to remove tag from
$return_order_line_details_tag = "return_order_line_details_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReturnOrderLineDetailsTag($return_order_line_details_id, $return_order_line_details_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->deleteReturnOrderLineDetailsTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to remove tag from |
 **return_order_line_details_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReturnOrderLineDetailsById**
> \Infoplus\Infoplus\Model\ReturnOrderLineDetails getDuplicateReturnOrderLineDetailsById($return_order_line_details_id)

Get a duplicated a returnOrderLineDetails by id

Returns a duplicated returnOrderLineDetails identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to be duplicated.

try {
    $result = $apiInstance->getDuplicateReturnOrderLineDetailsById($return_order_line_details_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->getDuplicateReturnOrderLineDetailsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrderLineDetails**](../Model/ReturnOrderLineDetails.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineDetailsByFilter**
> \Infoplus\Infoplus\Model\ReturnOrderLineDetails[] getReturnOrderLineDetailsByFilter($filter, $page, $limit, $sort)

Search returnOrderLineDetailses by filter

Returns the list of returnOrderLineDetailses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
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
    $result = $apiInstance->getReturnOrderLineDetailsByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->getReturnOrderLineDetailsByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReturnOrderLineDetails[]**](../Model/ReturnOrderLineDetails.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineDetailsById**
> \Infoplus\Infoplus\Model\ReturnOrderLineDetails getReturnOrderLineDetailsById($return_order_line_details_id)

Get a returnOrderLineDetails by id

Returns the returnOrderLineDetails identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to be returned.

try {
    $result = $apiInstance->getReturnOrderLineDetailsById($return_order_line_details_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->getReturnOrderLineDetailsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnOrderLineDetails**](../Model/ReturnOrderLineDetails.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineDetailsFiles**
> getReturnOrderLineDetailsFiles($return_order_line_details_id)

Get the files for a returnOrderLineDetails.

Get all existing returnOrderLineDetails files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to get files for

try {
    $apiInstance->getReturnOrderLineDetailsFiles($return_order_line_details_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->getReturnOrderLineDetailsFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnOrderLineDetailsTags**
> getReturnOrderLineDetailsTags($return_order_line_details_id)

Get the tags for a returnOrderLineDetails.

Get all existing returnOrderLineDetails tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_order_line_details_id = 56; // int | Id of the returnOrderLineDetails to get tags for

try {
    $apiInstance->getReturnOrderLineDetailsTags($return_order_line_details_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->getReturnOrderLineDetailsTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_order_line_details_id** | **int**| Id of the returnOrderLineDetails to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnOrderLineDetailsCustomFields**
> updateReturnOrderLineDetailsCustomFields($body)

Update a returnOrderLineDetails custom fields

Updates an existing returnOrderLineDetails custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnOrderLineDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReturnOrderLineDetails(); // \Infoplus\Infoplus\Model\ReturnOrderLineDetails | ReturnOrderLineDetails to be updated.

try {
    $apiInstance->updateReturnOrderLineDetailsCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnOrderLineDetailsApi->updateReturnOrderLineDetailsCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReturnOrderLineDetails**](../Model/ReturnOrderLineDetails.md)| ReturnOrderLineDetails to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

