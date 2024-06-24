# Infoplus\CartonTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCartonType**](CartonTypeApi.md#addCartonType) | **POST** /beta/cartonType | Create a cartonType
[**addCartonTypeAudit**](CartonTypeApi.md#addCartonTypeAudit) | **PUT** /beta/cartonType/{cartonTypeId}/audit/{cartonTypeAudit} | Add new audit for a cartonType
[**addCartonTypeFile**](CartonTypeApi.md#addCartonTypeFile) | **POST** /beta/cartonType/{cartonTypeId}/file/{fileName} | Attach a file to a cartonType
[**addCartonTypeFileByURL**](CartonTypeApi.md#addCartonTypeFileByURL) | **POST** /beta/cartonType/{cartonTypeId}/file | Attach a file to a cartonType by URL.
[**addCartonTypeTag**](CartonTypeApi.md#addCartonTypeTag) | **PUT** /beta/cartonType/{cartonTypeId}/tag/{cartonTypeTag} | Add new tags for a cartonType.
[**deleteCartonType**](CartonTypeApi.md#deleteCartonType) | **DELETE** /beta/cartonType/{cartonTypeId} | Delete a cartonType
[**deleteCartonTypeFile**](CartonTypeApi.md#deleteCartonTypeFile) | **DELETE** /beta/cartonType/{cartonTypeId}/file/{fileId} | Delete a file for a cartonType.
[**deleteCartonTypeTag**](CartonTypeApi.md#deleteCartonTypeTag) | **DELETE** /beta/cartonType/{cartonTypeId}/tag/{cartonTypeTag} | Delete a tag for a cartonType.
[**getCartonTypeByFilter**](CartonTypeApi.md#getCartonTypeByFilter) | **GET** /beta/cartonType/search | Search cartonTypes by filter
[**getCartonTypeById**](CartonTypeApi.md#getCartonTypeById) | **GET** /beta/cartonType/{cartonTypeId} | Get a cartonType by id
[**getCartonTypeFiles**](CartonTypeApi.md#getCartonTypeFiles) | **GET** /beta/cartonType/{cartonTypeId}/file | Get the files for a cartonType.
[**getCartonTypeTags**](CartonTypeApi.md#getCartonTypeTags) | **GET** /beta/cartonType/{cartonTypeId}/tag | Get the tags for a cartonType.
[**getDuplicateCartonTypeById**](CartonTypeApi.md#getDuplicateCartonTypeById) | **GET** /beta/cartonType/duplicate/{cartonTypeId} | Get a duplicated a cartonType by id
[**updateCartonType**](CartonTypeApi.md#updateCartonType) | **PUT** /beta/cartonType | Update a cartonType
[**updateCartonTypeCustomFields**](CartonTypeApi.md#updateCartonTypeCustomFields) | **PUT** /beta/cartonType/customFields | Update a cartonType custom fields


# **addCartonType**
> \Infoplus\Infoplus\Model\CartonType addCartonType($body)

Create a cartonType

Inserts a new cartonType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CartonType(); // \Infoplus\Infoplus\Model\CartonType | CartonType to be inserted.

try {
    $result = $apiInstance->addCartonType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->addCartonType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)| CartonType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonTypeAudit**
> addCartonTypeAudit($carton_type_id, $carton_type_audit)

Add new audit for a cartonType

Adds an audit to an existing cartonType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to add an audit to
$carton_type_audit = "carton_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addCartonTypeAudit($carton_type_id, $carton_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->addCartonTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to add an audit to |
 **carton_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonTypeFile**
> addCartonTypeFile($carton_type_id, $file_name)

Attach a file to a cartonType

Adds a file to an existing cartonType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addCartonTypeFile($carton_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->addCartonTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonTypeFileByURL**
> addCartonTypeFileByURL($body, $carton_type_id)

Attach a file to a cartonType by URL.

Adds a file to an existing cartonType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$carton_type_id = 56; // int | Id of the cartonType to add an file to

try {
    $apiInstance->addCartonTypeFileByURL($body, $carton_type_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->addCartonTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **carton_type_id** | **int**| Id of the cartonType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartonTypeTag**
> addCartonTypeTag($carton_type_id, $carton_type_tag)

Add new tags for a cartonType.

Adds a tag to an existing cartonType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to add a tag to
$carton_type_tag = "carton_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addCartonTypeTag($carton_type_id, $carton_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->addCartonTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to add a tag to |
 **carton_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonType**
> deleteCartonType($carton_type_id)

Delete a cartonType

Deletes the cartonType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to be deleted.

try {
    $apiInstance->deleteCartonType($carton_type_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->deleteCartonType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonTypeFile**
> deleteCartonTypeFile($carton_type_id, $file_id)

Delete a file for a cartonType.

Deletes an existing cartonType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteCartonTypeFile($carton_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->deleteCartonTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartonTypeTag**
> deleteCartonTypeTag($carton_type_id, $carton_type_tag)

Delete a tag for a cartonType.

Deletes an existing cartonType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to remove tag from
$carton_type_tag = "carton_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteCartonTypeTag($carton_type_id, $carton_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->deleteCartonTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to remove tag from |
 **carton_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonTypeByFilter**
> \Infoplus\Infoplus\Model\CartonType[] getCartonTypeByFilter($filter, $page, $limit, $sort)

Search cartonTypes by filter

Returns the list of cartonTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
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
    $result = $apiInstance->getCartonTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->getCartonTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\CartonType[]**](../Model/CartonType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonTypeById**
> \Infoplus\Infoplus\Model\CartonType getCartonTypeById($carton_type_id)

Get a cartonType by id

Returns the cartonType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to be returned.

try {
    $result = $apiInstance->getCartonTypeById($carton_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->getCartonTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonTypeFiles**
> getCartonTypeFiles($carton_type_id)

Get the files for a cartonType.

Get all existing cartonType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to get files for

try {
    $apiInstance->getCartonTypeFiles($carton_type_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->getCartonTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartonTypeTags**
> getCartonTypeTags($carton_type_id)

Get the tags for a cartonType.

Get all existing cartonType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to get tags for

try {
    $apiInstance->getCartonTypeTags($carton_type_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->getCartonTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateCartonTypeById**
> \Infoplus\Infoplus\Model\CartonType getDuplicateCartonTypeById($carton_type_id)

Get a duplicated a cartonType by id

Returns a duplicated cartonType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carton_type_id = 56; // int | Id of the cartonType to be duplicated.

try {
    $result = $apiInstance->getDuplicateCartonTypeById($carton_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->getDuplicateCartonTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_type_id** | **int**| Id of the cartonType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCartonType**
> updateCartonType($body)

Update a cartonType

Updates an existing cartonType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CartonType(); // \Infoplus\Infoplus\Model\CartonType | CartonType to be updated.

try {
    $apiInstance->updateCartonType($body);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->updateCartonType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)| CartonType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCartonTypeCustomFields**
> updateCartonTypeCustomFields($body)

Update a cartonType custom fields

Updates an existing cartonType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartonTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CartonType(); // \Infoplus\Infoplus\Model\CartonType | CartonType to be updated.

try {
    $apiInstance->updateCartonTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling CartonTypeApi->updateCartonTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CartonType**](../Model/CartonType.md)| CartonType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

