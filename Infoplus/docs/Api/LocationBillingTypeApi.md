# Infoplus\LocationBillingTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocationBillingType**](LocationBillingTypeApi.md#addLocationBillingType) | **POST** /beta/locationBillingType | Create a locationBillingType
[**addLocationBillingTypeAudit**](LocationBillingTypeApi.md#addLocationBillingTypeAudit) | **PUT** /beta/locationBillingType/{locationBillingTypeId}/audit/{locationBillingTypeAudit} | Add new audit for a locationBillingType
[**addLocationBillingTypeFile**](LocationBillingTypeApi.md#addLocationBillingTypeFile) | **POST** /beta/locationBillingType/{locationBillingTypeId}/file/{fileName} | Attach a file to a locationBillingType
[**addLocationBillingTypeFileByURL**](LocationBillingTypeApi.md#addLocationBillingTypeFileByURL) | **POST** /beta/locationBillingType/{locationBillingTypeId}/file | Attach a file to a locationBillingType by URL.
[**addLocationBillingTypeTag**](LocationBillingTypeApi.md#addLocationBillingTypeTag) | **PUT** /beta/locationBillingType/{locationBillingTypeId}/tag/{locationBillingTypeTag} | Add new tags for a locationBillingType.
[**deleteLocationBillingType**](LocationBillingTypeApi.md#deleteLocationBillingType) | **DELETE** /beta/locationBillingType/{locationBillingTypeId} | Delete a locationBillingType
[**deleteLocationBillingTypeFile**](LocationBillingTypeApi.md#deleteLocationBillingTypeFile) | **DELETE** /beta/locationBillingType/{locationBillingTypeId}/file/{fileId} | Delete a file for a locationBillingType.
[**deleteLocationBillingTypeTag**](LocationBillingTypeApi.md#deleteLocationBillingTypeTag) | **DELETE** /beta/locationBillingType/{locationBillingTypeId}/tag/{locationBillingTypeTag} | Delete a tag for a locationBillingType.
[**getDuplicateLocationBillingTypeById**](LocationBillingTypeApi.md#getDuplicateLocationBillingTypeById) | **GET** /beta/locationBillingType/duplicate/{locationBillingTypeId} | Get a duplicated a locationBillingType by id
[**getLocationBillingTypeByFilter**](LocationBillingTypeApi.md#getLocationBillingTypeByFilter) | **GET** /beta/locationBillingType/search | Search locationBillingTypes by filter
[**getLocationBillingTypeById**](LocationBillingTypeApi.md#getLocationBillingTypeById) | **GET** /beta/locationBillingType/{locationBillingTypeId} | Get a locationBillingType by id
[**getLocationBillingTypeFiles**](LocationBillingTypeApi.md#getLocationBillingTypeFiles) | **GET** /beta/locationBillingType/{locationBillingTypeId}/file | Get the files for a locationBillingType.
[**getLocationBillingTypeTags**](LocationBillingTypeApi.md#getLocationBillingTypeTags) | **GET** /beta/locationBillingType/{locationBillingTypeId}/tag | Get the tags for a locationBillingType.
[**updateLocationBillingType**](LocationBillingTypeApi.md#updateLocationBillingType) | **PUT** /beta/locationBillingType | Update a locationBillingType
[**updateLocationBillingTypeCustomFields**](LocationBillingTypeApi.md#updateLocationBillingTypeCustomFields) | **PUT** /beta/locationBillingType/customFields | Update a locationBillingType custom fields


# **addLocationBillingType**
> \Infoplus\Infoplus\Model\LocationBillingType addLocationBillingType($body)

Create a locationBillingType

Inserts a new locationBillingType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationBillingType(); // \Infoplus\Infoplus\Model\LocationBillingType | LocationBillingType to be inserted.

try {
    $result = $apiInstance->addLocationBillingType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)| LocationBillingType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationBillingTypeAudit**
> addLocationBillingTypeAudit($location_billing_type_id, $location_billing_type_audit)

Add new audit for a locationBillingType

Adds an audit to an existing locationBillingType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to add an audit to
$location_billing_type_audit = "location_billing_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addLocationBillingTypeAudit($location_billing_type_id, $location_billing_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to add an audit to |
 **location_billing_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationBillingTypeFile**
> addLocationBillingTypeFile($location_billing_type_id, $file_name)

Attach a file to a locationBillingType

Adds a file to an existing locationBillingType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLocationBillingTypeFile($location_billing_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationBillingTypeFileByURL**
> addLocationBillingTypeFileByURL($body, $location_billing_type_id)

Attach a file to a locationBillingType by URL.

Adds a file to an existing locationBillingType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$location_billing_type_id = 56; // int | Id of the locationBillingType to add an file to

try {
    $apiInstance->addLocationBillingTypeFileByURL($body, $location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **location_billing_type_id** | **int**| Id of the locationBillingType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLocationBillingTypeTag**
> addLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag)

Add new tags for a locationBillingType.

Adds a tag to an existing locationBillingType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to add a tag to
$location_billing_type_tag = "location_billing_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to add a tag to |
 **location_billing_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationBillingType**
> deleteLocationBillingType($location_billing_type_id)

Delete a locationBillingType

Deletes the locationBillingType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to be deleted.

try {
    $apiInstance->deleteLocationBillingType($location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->deleteLocationBillingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationBillingTypeFile**
> deleteLocationBillingTypeFile($location_billing_type_id, $file_id)

Delete a file for a locationBillingType.

Deletes an existing locationBillingType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLocationBillingTypeFile($location_billing_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->deleteLocationBillingTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocationBillingTypeTag**
> deleteLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag)

Delete a tag for a locationBillingType.

Deletes an existing locationBillingType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to remove tag from
$location_billing_type_tag = "location_billing_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->deleteLocationBillingTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to remove tag from |
 **location_billing_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLocationBillingTypeById**
> \Infoplus\Infoplus\Model\LocationBillingType getDuplicateLocationBillingTypeById($location_billing_type_id)

Get a duplicated a locationBillingType by id

Returns a duplicated locationBillingType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to be duplicated.

try {
    $result = $apiInstance->getDuplicateLocationBillingTypeById($location_billing_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getDuplicateLocationBillingTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationBillingTypeByFilter**
> \Infoplus\Infoplus\Model\LocationBillingType[] getLocationBillingTypeByFilter($filter, $page, $limit, $sort)

Search locationBillingTypes by filter

Returns the list of locationBillingTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
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
    $result = $apiInstance->getLocationBillingTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LocationBillingType[]**](../Model/LocationBillingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationBillingTypeById**
> \Infoplus\Infoplus\Model\LocationBillingType getLocationBillingTypeById($location_billing_type_id)

Get a locationBillingType by id

Returns the locationBillingType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to be returned.

try {
    $result = $apiInstance->getLocationBillingTypeById($location_billing_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationBillingTypeFiles**
> getLocationBillingTypeFiles($location_billing_type_id)

Get the files for a locationBillingType.

Get all existing locationBillingType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to get files for

try {
    $apiInstance->getLocationBillingTypeFiles($location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationBillingTypeTags**
> getLocationBillingTypeTags($location_billing_type_id)

Get the tags for a locationBillingType.

Get all existing locationBillingType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_billing_type_id = 56; // int | Id of the locationBillingType to get tags for

try {
    $apiInstance->getLocationBillingTypeTags($location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationBillingType**
> updateLocationBillingType($body)

Update a locationBillingType

Updates an existing locationBillingType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationBillingType(); // \Infoplus\Infoplus\Model\LocationBillingType | LocationBillingType to be updated.

try {
    $apiInstance->updateLocationBillingType($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->updateLocationBillingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)| LocationBillingType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationBillingTypeCustomFields**
> updateLocationBillingTypeCustomFields($body)

Update a locationBillingType custom fields

Updates an existing locationBillingType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LocationBillingTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LocationBillingType(); // \Infoplus\Infoplus\Model\LocationBillingType | LocationBillingType to be updated.

try {
    $apiInstance->updateLocationBillingTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->updateLocationBillingTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LocationBillingType**](../Model/LocationBillingType.md)| LocationBillingType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

