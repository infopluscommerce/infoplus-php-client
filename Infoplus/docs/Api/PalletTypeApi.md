# Infoplus\PalletTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPalletType**](PalletTypeApi.md#addPalletType) | **POST** /beta/palletType | Create a palletType
[**addPalletTypeAudit**](PalletTypeApi.md#addPalletTypeAudit) | **PUT** /beta/palletType/{palletTypeId}/audit/{palletTypeAudit} | Add new audit for a palletType
[**addPalletTypeFile**](PalletTypeApi.md#addPalletTypeFile) | **POST** /beta/palletType/{palletTypeId}/file/{fileName} | Attach a file to a palletType
[**addPalletTypeFileByURL**](PalletTypeApi.md#addPalletTypeFileByURL) | **POST** /beta/palletType/{palletTypeId}/file | Attach a file to a palletType by URL.
[**addPalletTypeTag**](PalletTypeApi.md#addPalletTypeTag) | **PUT** /beta/palletType/{palletTypeId}/tag/{palletTypeTag} | Add new tags for a palletType.
[**deletePalletType**](PalletTypeApi.md#deletePalletType) | **DELETE** /beta/palletType/{palletTypeId} | Delete a palletType
[**deletePalletTypeFile**](PalletTypeApi.md#deletePalletTypeFile) | **DELETE** /beta/palletType/{palletTypeId}/file/{fileId} | Delete a file for a palletType.
[**deletePalletTypeTag**](PalletTypeApi.md#deletePalletTypeTag) | **DELETE** /beta/palletType/{palletTypeId}/tag/{palletTypeTag} | Delete a tag for a palletType.
[**getDuplicatePalletTypeById**](PalletTypeApi.md#getDuplicatePalletTypeById) | **GET** /beta/palletType/duplicate/{palletTypeId} | Get a duplicated a palletType by id
[**getPalletTypeByFilter**](PalletTypeApi.md#getPalletTypeByFilter) | **GET** /beta/palletType/search | Search palletTypes by filter
[**getPalletTypeById**](PalletTypeApi.md#getPalletTypeById) | **GET** /beta/palletType/{palletTypeId} | Get a palletType by id
[**getPalletTypeFiles**](PalletTypeApi.md#getPalletTypeFiles) | **GET** /beta/palletType/{palletTypeId}/file | Get the files for a palletType.
[**getPalletTypeTags**](PalletTypeApi.md#getPalletTypeTags) | **GET** /beta/palletType/{palletTypeId}/tag | Get the tags for a palletType.
[**updatePalletType**](PalletTypeApi.md#updatePalletType) | **PUT** /beta/palletType | Update a palletType
[**updatePalletTypeCustomFields**](PalletTypeApi.md#updatePalletTypeCustomFields) | **PUT** /beta/palletType/customFields | Update a palletType custom fields


# **addPalletType**
> \Infoplus\Infoplus\Model\PalletType addPalletType($body)

Create a palletType

Inserts a new palletType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PalletType(); // \Infoplus\Infoplus\Model\PalletType | PalletType to be inserted.

try {
    $result = $apiInstance->addPalletType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->addPalletType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)| PalletType to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPalletTypeAudit**
> addPalletTypeAudit($pallet_type_id, $pallet_type_audit)

Add new audit for a palletType

Adds an audit to an existing palletType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to add an audit to
$pallet_type_audit = "pallet_type_audit_example"; // string | The audit to add

try {
    $apiInstance->addPalletTypeAudit($pallet_type_id, $pallet_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->addPalletTypeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to add an audit to |
 **pallet_type_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPalletTypeFile**
> addPalletTypeFile($pallet_type_id, $file_name)

Attach a file to a palletType

Adds a file to an existing palletType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPalletTypeFile($pallet_type_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->addPalletTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPalletTypeFileByURL**
> addPalletTypeFileByURL($body, $pallet_type_id)

Attach a file to a palletType by URL.

Adds a file to an existing palletType by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$pallet_type_id = 56; // int | Id of the palletType to add an file to

try {
    $apiInstance->addPalletTypeFileByURL($body, $pallet_type_id);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->addPalletTypeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **pallet_type_id** | **int**| Id of the palletType to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPalletTypeTag**
> addPalletTypeTag($pallet_type_id, $pallet_type_tag)

Add new tags for a palletType.

Adds a tag to an existing palletType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to add a tag to
$pallet_type_tag = "pallet_type_tag_example"; // string | The tag to add

try {
    $apiInstance->addPalletTypeTag($pallet_type_id, $pallet_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->addPalletTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to add a tag to |
 **pallet_type_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePalletType**
> deletePalletType($pallet_type_id)

Delete a palletType

Deletes the palletType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to be deleted.

try {
    $apiInstance->deletePalletType($pallet_type_id);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->deletePalletType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePalletTypeFile**
> deletePalletTypeFile($pallet_type_id, $file_id)

Delete a file for a palletType.

Deletes an existing palletType file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePalletTypeFile($pallet_type_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->deletePalletTypeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePalletTypeTag**
> deletePalletTypeTag($pallet_type_id, $pallet_type_tag)

Delete a tag for a palletType.

Deletes an existing palletType tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to remove tag from
$pallet_type_tag = "pallet_type_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePalletTypeTag($pallet_type_id, $pallet_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->deletePalletTypeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to remove tag from |
 **pallet_type_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePalletTypeById**
> \Infoplus\Infoplus\Model\PalletType getDuplicatePalletTypeById($pallet_type_id)

Get a duplicated a palletType by id

Returns a duplicated palletType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to be duplicated.

try {
    $result = $apiInstance->getDuplicatePalletTypeById($pallet_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->getDuplicatePalletTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPalletTypeByFilter**
> \Infoplus\Infoplus\Model\PalletType[] getPalletTypeByFilter($filter, $page, $limit, $sort)

Search palletTypes by filter

Returns the list of palletTypes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
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
    $result = $apiInstance->getPalletTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->getPalletTypeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PalletType[]**](../Model/PalletType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPalletTypeById**
> \Infoplus\Infoplus\Model\PalletType getPalletTypeById($pallet_type_id)

Get a palletType by id

Returns the palletType identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to be returned.

try {
    $result = $apiInstance->getPalletTypeById($pallet_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->getPalletTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPalletTypeFiles**
> getPalletTypeFiles($pallet_type_id)

Get the files for a palletType.

Get all existing palletType files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to get files for

try {
    $apiInstance->getPalletTypeFiles($pallet_type_id);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->getPalletTypeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPalletTypeTags**
> getPalletTypeTags($pallet_type_id)

Get the tags for a palletType.

Get all existing palletType tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pallet_type_id = 56; // int | Id of the palletType to get tags for

try {
    $apiInstance->getPalletTypeTags($pallet_type_id);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->getPalletTypeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pallet_type_id** | **int**| Id of the palletType to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePalletType**
> updatePalletType($body)

Update a palletType

Updates an existing palletType using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PalletType(); // \Infoplus\Infoplus\Model\PalletType | PalletType to be updated.

try {
    $apiInstance->updatePalletType($body);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->updatePalletType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)| PalletType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePalletTypeCustomFields**
> updatePalletTypeCustomFields($body)

Update a palletType custom fields

Updates an existing palletType custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PalletTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PalletType(); // \Infoplus\Infoplus\Model\PalletType | PalletType to be updated.

try {
    $apiInstance->updatePalletTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling PalletTypeApi->updatePalletTypeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PalletType**](../Model/PalletType.md)| PalletType to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

