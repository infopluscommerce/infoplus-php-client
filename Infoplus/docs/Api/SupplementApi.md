# Infoplus\SupplementApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSupplement**](SupplementApi.md#addSupplement) | **POST** /beta/supplement | Create a supplement
[**addSupplementAudit**](SupplementApi.md#addSupplementAudit) | **PUT** /beta/supplement/{supplementId}/audit/{supplementAudit} | Add new audit for a supplement
[**addSupplementFile**](SupplementApi.md#addSupplementFile) | **POST** /beta/supplement/{supplementId}/file/{fileName} | Attach a file to a supplement
[**addSupplementFileByURL**](SupplementApi.md#addSupplementFileByURL) | **POST** /beta/supplement/{supplementId}/file | Attach a file to a supplement by URL.
[**addSupplementTag**](SupplementApi.md#addSupplementTag) | **PUT** /beta/supplement/{supplementId}/tag/{supplementTag} | Add new tags for a supplement.
[**deleteSupplement**](SupplementApi.md#deleteSupplement) | **DELETE** /beta/supplement/{supplementId} | Delete a supplement
[**deleteSupplementFile**](SupplementApi.md#deleteSupplementFile) | **DELETE** /beta/supplement/{supplementId}/file/{fileId} | Delete a file for a supplement.
[**deleteSupplementTag**](SupplementApi.md#deleteSupplementTag) | **DELETE** /beta/supplement/{supplementId}/tag/{supplementTag} | Delete a tag for a supplement.
[**getDuplicateSupplementById**](SupplementApi.md#getDuplicateSupplementById) | **GET** /beta/supplement/duplicate/{supplementId} | Get a duplicated a supplement by id
[**getSupplementByFilter**](SupplementApi.md#getSupplementByFilter) | **GET** /beta/supplement/search | Search supplements by filter
[**getSupplementById**](SupplementApi.md#getSupplementById) | **GET** /beta/supplement/{supplementId} | Get a supplement by id
[**getSupplementFiles**](SupplementApi.md#getSupplementFiles) | **GET** /beta/supplement/{supplementId}/file | Get the files for a supplement.
[**getSupplementTags**](SupplementApi.md#getSupplementTags) | **GET** /beta/supplement/{supplementId}/tag | Get the tags for a supplement.
[**updateSupplement**](SupplementApi.md#updateSupplement) | **PUT** /beta/supplement | Update a supplement
[**updateSupplementCustomFields**](SupplementApi.md#updateSupplementCustomFields) | **PUT** /beta/supplement/customFields | Update a supplement custom fields


# **addSupplement**
> \Infoplus\Infoplus\Model\Supplement addSupplement($body)

Create a supplement

Inserts a new supplement using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Supplement(); // \Infoplus\Infoplus\Model\Supplement | Supplement to be inserted.

try {
    $result = $apiInstance->addSupplement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)| Supplement to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSupplementAudit**
> addSupplementAudit($supplement_id, $supplement_audit)

Add new audit for a supplement

Adds an audit to an existing supplement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to add an audit to
$supplement_audit = "supplement_audit_example"; // string | The audit to add

try {
    $apiInstance->addSupplementAudit($supplement_id, $supplement_audit);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplementAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to add an audit to |
 **supplement_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSupplementFile**
> addSupplementFile($supplement_id, $file_name)

Attach a file to a supplement

Adds a file to an existing supplement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addSupplementFile($supplement_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplementFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSupplementFileByURL**
> addSupplementFileByURL($body, $supplement_id)

Attach a file to a supplement by URL.

Adds a file to an existing supplement by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$supplement_id = 56; // int | Id of the supplement to add an file to

try {
    $apiInstance->addSupplementFileByURL($body, $supplement_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplementFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **supplement_id** | **int**| Id of the supplement to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSupplementTag**
> addSupplementTag($supplement_id, $supplement_tag)

Add new tags for a supplement.

Adds a tag to an existing supplement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to add a tag to
$supplement_tag = "supplement_tag_example"; // string | The tag to add

try {
    $apiInstance->addSupplementTag($supplement_id, $supplement_tag);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplementTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to add a tag to |
 **supplement_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplement**
> deleteSupplement($supplement_id)

Delete a supplement

Deletes the supplement identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to be deleted.

try {
    $apiInstance->deleteSupplement($supplement_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->deleteSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplementFile**
> deleteSupplementFile($supplement_id, $file_id)

Delete a file for a supplement.

Deletes an existing supplement file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteSupplementFile($supplement_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->deleteSupplementFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSupplementTag**
> deleteSupplementTag($supplement_id, $supplement_tag)

Delete a tag for a supplement.

Deletes an existing supplement tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to remove tag from
$supplement_tag = "supplement_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteSupplementTag($supplement_id, $supplement_tag);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->deleteSupplementTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to remove tag from |
 **supplement_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateSupplementById**
> \Infoplus\Infoplus\Model\Supplement getDuplicateSupplementById($supplement_id)

Get a duplicated a supplement by id

Returns a duplicated supplement identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to be duplicated.

try {
    $result = $apiInstance->getDuplicateSupplementById($supplement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getDuplicateSupplementById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplementByFilter**
> \Infoplus\Infoplus\Model\Supplement[] getSupplementByFilter($filter, $page, $limit, $sort)

Search supplements by filter

Returns the list of supplements that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
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
    $result = $apiInstance->getSupplementByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Supplement[]**](../Model/Supplement.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplementById**
> \Infoplus\Infoplus\Model\Supplement getSupplementById($supplement_id)

Get a supplement by id

Returns the supplement identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to be returned.

try {
    $result = $apiInstance->getSupplementById($supplement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplementFiles**
> getSupplementFiles($supplement_id)

Get the files for a supplement.

Get all existing supplement files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to get files for

try {
    $apiInstance->getSupplementFiles($supplement_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSupplementTags**
> getSupplementTags($supplement_id)

Get the tags for a supplement.

Get all existing supplement tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplement_id = 56; // int | Id of the supplement to get tags for

try {
    $apiInstance->getSupplementTags($supplement_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplement**
> updateSupplement($body)

Update a supplement

Updates an existing supplement using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Supplement(); // \Infoplus\Infoplus\Model\Supplement | Supplement to be updated.

try {
    $apiInstance->updateSupplement($body);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->updateSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)| Supplement to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSupplementCustomFields**
> updateSupplementCustomFields($body)

Update a supplement custom fields

Updates an existing supplement custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SupplementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Supplement(); // \Infoplus\Infoplus\Model\Supplement | Supplement to be updated.

try {
    $apiInstance->updateSupplementCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->updateSupplementCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Supplement**](../Model/Supplement.md)| Supplement to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

