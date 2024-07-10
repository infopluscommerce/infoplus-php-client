# Infoplus\ReturnShipmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReturnShipmentAudit**](ReturnShipmentApi.md#addReturnShipmentAudit) | **PUT** /beta/returnShipment/{returnShipmentId}/audit/{returnShipmentAudit} | Add new audit for a returnShipment
[**addReturnShipmentFile**](ReturnShipmentApi.md#addReturnShipmentFile) | **POST** /beta/returnShipment/{returnShipmentId}/file/{fileName} | Attach a file to a returnShipment
[**addReturnShipmentFileByURL**](ReturnShipmentApi.md#addReturnShipmentFileByURL) | **POST** /beta/returnShipment/{returnShipmentId}/file | Attach a file to a returnShipment by URL.
[**addReturnShipmentTag**](ReturnShipmentApi.md#addReturnShipmentTag) | **PUT** /beta/returnShipment/{returnShipmentId}/tag/{returnShipmentTag} | Add new tags for a returnShipment.
[**deleteReturnShipmentFile**](ReturnShipmentApi.md#deleteReturnShipmentFile) | **DELETE** /beta/returnShipment/{returnShipmentId}/file/{fileId} | Delete a file for a returnShipment.
[**deleteReturnShipmentTag**](ReturnShipmentApi.md#deleteReturnShipmentTag) | **DELETE** /beta/returnShipment/{returnShipmentId}/tag/{returnShipmentTag} | Delete a tag for a returnShipment.
[**getDuplicateReturnShipmentById**](ReturnShipmentApi.md#getDuplicateReturnShipmentById) | **GET** /beta/returnShipment/duplicate/{returnShipmentId} | Get a duplicated a returnShipment by id
[**getReturnShipmentByFilter**](ReturnShipmentApi.md#getReturnShipmentByFilter) | **GET** /beta/returnShipment/search | Search returnShipments by filter
[**getReturnShipmentById**](ReturnShipmentApi.md#getReturnShipmentById) | **GET** /beta/returnShipment/{returnShipmentId} | Get a returnShipment by id
[**getReturnShipmentFiles**](ReturnShipmentApi.md#getReturnShipmentFiles) | **GET** /beta/returnShipment/{returnShipmentId}/file | Get the files for a returnShipment.
[**getReturnShipmentTags**](ReturnShipmentApi.md#getReturnShipmentTags) | **GET** /beta/returnShipment/{returnShipmentId}/tag | Get the tags for a returnShipment.
[**updateReturnShipmentCustomFields**](ReturnShipmentApi.md#updateReturnShipmentCustomFields) | **PUT** /beta/returnShipment/customFields | Update a returnShipment custom fields


# **addReturnShipmentAudit**
> addReturnShipmentAudit($return_shipment_id, $return_shipment_audit)

Add new audit for a returnShipment

Adds an audit to an existing returnShipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to add an audit to
$return_shipment_audit = "return_shipment_audit_example"; // string | The audit to add

try {
    $apiInstance->addReturnShipmentAudit($return_shipment_id, $return_shipment_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->addReturnShipmentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to add an audit to |
 **return_shipment_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnShipmentFile**
> addReturnShipmentFile($return_shipment_id, $file_name)

Attach a file to a returnShipment

Adds a file to an existing returnShipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addReturnShipmentFile($return_shipment_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->addReturnShipmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnShipmentFileByURL**
> addReturnShipmentFileByURL($body, $return_shipment_id)

Attach a file to a returnShipment by URL.

Adds a file to an existing returnShipment by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$return_shipment_id = 56; // int | Id of the returnShipment to add an file to

try {
    $apiInstance->addReturnShipmentFileByURL($body, $return_shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->addReturnShipmentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **return_shipment_id** | **int**| Id of the returnShipment to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addReturnShipmentTag**
> addReturnShipmentTag($return_shipment_id, $return_shipment_tag)

Add new tags for a returnShipment.

Adds a tag to an existing returnShipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to add a tag to
$return_shipment_tag = "return_shipment_tag_example"; // string | The tag to add

try {
    $apiInstance->addReturnShipmentTag($return_shipment_id, $return_shipment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->addReturnShipmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to add a tag to |
 **return_shipment_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnShipmentFile**
> deleteReturnShipmentFile($return_shipment_id, $file_id)

Delete a file for a returnShipment.

Deletes an existing returnShipment file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteReturnShipmentFile($return_shipment_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->deleteReturnShipmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnShipmentTag**
> deleteReturnShipmentTag($return_shipment_id, $return_shipment_tag)

Delete a tag for a returnShipment.

Deletes an existing returnShipment tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to remove tag from
$return_shipment_tag = "return_shipment_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteReturnShipmentTag($return_shipment_id, $return_shipment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->deleteReturnShipmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to remove tag from |
 **return_shipment_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateReturnShipmentById**
> \Infoplus\Infoplus\Model\ReturnShipment getDuplicateReturnShipmentById($return_shipment_id)

Get a duplicated a returnShipment by id

Returns a duplicated returnShipment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to be duplicated.

try {
    $result = $apiInstance->getDuplicateReturnShipmentById($return_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->getDuplicateReturnShipmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnShipment**](../Model/ReturnShipment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnShipmentByFilter**
> \Infoplus\Infoplus\Model\ReturnShipment[] getReturnShipmentByFilter($filter, $page, $limit, $sort)

Search returnShipments by filter

Returns the list of returnShipments that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
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
    $result = $apiInstance->getReturnShipmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->getReturnShipmentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ReturnShipment[]**](../Model/ReturnShipment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnShipmentById**
> \Infoplus\Infoplus\Model\ReturnShipment getReturnShipmentById($return_shipment_id)

Get a returnShipment by id

Returns the returnShipment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to be returned.

try {
    $result = $apiInstance->getReturnShipmentById($return_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->getReturnShipmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ReturnShipment**](../Model/ReturnShipment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnShipmentFiles**
> getReturnShipmentFiles($return_shipment_id)

Get the files for a returnShipment.

Get all existing returnShipment files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to get files for

try {
    $apiInstance->getReturnShipmentFiles($return_shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->getReturnShipmentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnShipmentTags**
> getReturnShipmentTags($return_shipment_id)

Get the tags for a returnShipment.

Get all existing returnShipment tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_shipment_id = 56; // int | Id of the returnShipment to get tags for

try {
    $apiInstance->getReturnShipmentTags($return_shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->getReturnShipmentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_shipment_id** | **int**| Id of the returnShipment to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnShipmentCustomFields**
> updateReturnShipmentCustomFields($body)

Update a returnShipment custom fields

Updates an existing returnShipment custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ReturnShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ReturnShipment(); // \Infoplus\Infoplus\Model\ReturnShipment | ReturnShipment to be updated.

try {
    $apiInstance->updateReturnShipmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReturnShipmentApi->updateReturnShipmentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ReturnShipment**](../Model/ReturnShipment.md)| ReturnShipment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

