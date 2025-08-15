# Infoplus\DasFeesApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDasFees**](DasFeesApi.md#addDasFees) | **POST** /beta/dasFees | Create a dasFees
[**addDasFeesAudit**](DasFeesApi.md#addDasFeesAudit) | **PUT** /beta/dasFees/{dasFeesId}/audit/{dasFeesAudit} | Add new audit for a dasFees
[**addDasFeesFile**](DasFeesApi.md#addDasFeesFile) | **POST** /beta/dasFees/{dasFeesId}/file/{fileName} | Attach a file to a dasFees
[**addDasFeesFileByURL**](DasFeesApi.md#addDasFeesFileByURL) | **POST** /beta/dasFees/{dasFeesId}/file | Attach a file to a dasFees by URL.
[**addDasFeesTag**](DasFeesApi.md#addDasFeesTag) | **PUT** /beta/dasFees/{dasFeesId}/tag/{dasFeesTag} | Add new tags for a dasFees.
[**deleteDasFees**](DasFeesApi.md#deleteDasFees) | **DELETE** /beta/dasFees/{dasFeesId} | Delete a dasFees
[**deleteDasFeesFile**](DasFeesApi.md#deleteDasFeesFile) | **DELETE** /beta/dasFees/{dasFeesId}/file/{fileId} | Delete a file for a dasFees.
[**deleteDasFeesTag**](DasFeesApi.md#deleteDasFeesTag) | **DELETE** /beta/dasFees/{dasFeesId}/tag/{dasFeesTag} | Delete a tag for a dasFees.
[**getDasFeesByFilter**](DasFeesApi.md#getDasFeesByFilter) | **GET** /beta/dasFees/search | Search dasFeeses by filter
[**getDasFeesById**](DasFeesApi.md#getDasFeesById) | **GET** /beta/dasFees/{dasFeesId} | Get a dasFees by id
[**getDasFeesFiles**](DasFeesApi.md#getDasFeesFiles) | **GET** /beta/dasFees/{dasFeesId}/file | Get the files for a dasFees.
[**getDasFeesTags**](DasFeesApi.md#getDasFeesTags) | **GET** /beta/dasFees/{dasFeesId}/tag | Get the tags for a dasFees.
[**getDuplicateDasFeesById**](DasFeesApi.md#getDuplicateDasFeesById) | **GET** /beta/dasFees/duplicate/{dasFeesId} | Get a duplicated a dasFees by id
[**updateDasFees**](DasFeesApi.md#updateDasFees) | **PUT** /beta/dasFees | Update a dasFees


# **addDasFees**
> \Infoplus\Infoplus\Model\DasFees addDasFees($body)

Create a dasFees

Inserts a new dasFees using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\DasFees(); // \Infoplus\Infoplus\Model\DasFees | DasFees to be inserted.

try {
    $result = $apiInstance->addDasFees($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->addDasFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\DasFees**](../Model/DasFees.md)| DasFees to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\DasFees**](../Model/DasFees.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDasFeesAudit**
> addDasFeesAudit($das_fees_id, $das_fees_audit)

Add new audit for a dasFees

Adds an audit to an existing dasFees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to add an audit to
$das_fees_audit = "das_fees_audit_example"; // string | The audit to add

try {
    $apiInstance->addDasFeesAudit($das_fees_id, $das_fees_audit);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->addDasFeesAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to add an audit to |
 **das_fees_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDasFeesFile**
> addDasFeesFile($das_fees_id, $file_name)

Attach a file to a dasFees

Adds a file to an existing dasFees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addDasFeesFile($das_fees_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->addDasFeesFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDasFeesFileByURL**
> addDasFeesFileByURL($body, $das_fees_id)

Attach a file to a dasFees by URL.

Adds a file to an existing dasFees by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$das_fees_id = 56; // int | Id of the dasFees to add an file to

try {
    $apiInstance->addDasFeesFileByURL($body, $das_fees_id);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->addDasFeesFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **das_fees_id** | **int**| Id of the dasFees to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDasFeesTag**
> addDasFeesTag($das_fees_id, $das_fees_tag)

Add new tags for a dasFees.

Adds a tag to an existing dasFees.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to add a tag to
$das_fees_tag = "das_fees_tag_example"; // string | The tag to add

try {
    $apiInstance->addDasFeesTag($das_fees_id, $das_fees_tag);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->addDasFeesTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to add a tag to |
 **das_fees_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDasFees**
> deleteDasFees($das_fees_id)

Delete a dasFees

Deletes the dasFees identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to be deleted.

try {
    $apiInstance->deleteDasFees($das_fees_id);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->deleteDasFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDasFeesFile**
> deleteDasFeesFile($das_fees_id, $file_id)

Delete a file for a dasFees.

Deletes an existing dasFees file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteDasFeesFile($das_fees_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->deleteDasFeesFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDasFeesTag**
> deleteDasFeesTag($das_fees_id, $das_fees_tag)

Delete a tag for a dasFees.

Deletes an existing dasFees tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to remove tag from
$das_fees_tag = "das_fees_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteDasFeesTag($das_fees_id, $das_fees_tag);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->deleteDasFeesTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to remove tag from |
 **das_fees_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDasFeesByFilter**
> \Infoplus\Infoplus\Model\DasFees[] getDasFeesByFilter($filter, $page, $limit, $sort)

Search dasFeeses by filter

Returns the list of dasFeeses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
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
    $result = $apiInstance->getDasFeesByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->getDasFeesByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\DasFees[]**](../Model/DasFees.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDasFeesById**
> \Infoplus\Infoplus\Model\DasFees getDasFeesById($das_fees_id)

Get a dasFees by id

Returns the dasFees identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to be returned.

try {
    $result = $apiInstance->getDasFeesById($das_fees_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->getDasFeesById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\DasFees**](../Model/DasFees.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDasFeesFiles**
> getDasFeesFiles($das_fees_id)

Get the files for a dasFees.

Get all existing dasFees files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to get files for

try {
    $apiInstance->getDasFeesFiles($das_fees_id);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->getDasFeesFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDasFeesTags**
> getDasFeesTags($das_fees_id)

Get the tags for a dasFees.

Get all existing dasFees tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to get tags for

try {
    $apiInstance->getDasFeesTags($das_fees_id);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->getDasFeesTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateDasFeesById**
> \Infoplus\Infoplus\Model\DasFees getDuplicateDasFeesById($das_fees_id)

Get a duplicated a dasFees by id

Returns a duplicated dasFees identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$das_fees_id = 56; // int | Id of the dasFees to be duplicated.

try {
    $result = $apiInstance->getDuplicateDasFeesById($das_fees_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->getDuplicateDasFeesById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **das_fees_id** | **int**| Id of the dasFees to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\DasFees**](../Model/DasFees.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDasFees**
> updateDasFees($body)

Update a dasFees

Updates an existing dasFees using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\DasFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\DasFees(); // \Infoplus\Infoplus\Model\DasFees | DasFees to be updated.

try {
    $apiInstance->updateDasFees($body);
} catch (Exception $e) {
    echo 'Exception when calling DasFeesApi->updateDasFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\DasFees**](../Model/DasFees.md)| DasFees to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

