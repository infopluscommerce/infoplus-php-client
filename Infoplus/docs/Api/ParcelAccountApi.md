# Infoplus\ParcelAccountApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addParcelAccount**](ParcelAccountApi.md#addParcelAccount) | **POST** /beta/parcelAccount | Create a parcelAccount
[**addParcelAccountAudit**](ParcelAccountApi.md#addParcelAccountAudit) | **PUT** /beta/parcelAccount/{parcelAccountId}/audit/{parcelAccountAudit} | Add new audit for a parcelAccount
[**addParcelAccountFile**](ParcelAccountApi.md#addParcelAccountFile) | **POST** /beta/parcelAccount/{parcelAccountId}/file/{fileName} | Attach a file to a parcelAccount
[**addParcelAccountFileByURL**](ParcelAccountApi.md#addParcelAccountFileByURL) | **POST** /beta/parcelAccount/{parcelAccountId}/file | Attach a file to a parcelAccount by URL.
[**addParcelAccountTag**](ParcelAccountApi.md#addParcelAccountTag) | **PUT** /beta/parcelAccount/{parcelAccountId}/tag/{parcelAccountTag} | Add new tags for a parcelAccount.
[**deleteParcelAccountFile**](ParcelAccountApi.md#deleteParcelAccountFile) | **DELETE** /beta/parcelAccount/{parcelAccountId}/file/{fileId} | Delete a file for a parcelAccount.
[**deleteParcelAccountTag**](ParcelAccountApi.md#deleteParcelAccountTag) | **DELETE** /beta/parcelAccount/{parcelAccountId}/tag/{parcelAccountTag} | Delete a tag for a parcelAccount.
[**getDuplicateParcelAccountById**](ParcelAccountApi.md#getDuplicateParcelAccountById) | **GET** /beta/parcelAccount/duplicate/{parcelAccountId} | Get a duplicated a parcelAccount by id
[**getParcelAccountByFilter**](ParcelAccountApi.md#getParcelAccountByFilter) | **GET** /beta/parcelAccount/search | Search parcelAccounts by filter
[**getParcelAccountById**](ParcelAccountApi.md#getParcelAccountById) | **GET** /beta/parcelAccount/{parcelAccountId} | Get a parcelAccount by id
[**getParcelAccountFiles**](ParcelAccountApi.md#getParcelAccountFiles) | **GET** /beta/parcelAccount/{parcelAccountId}/file | Get the files for a parcelAccount.
[**getParcelAccountTags**](ParcelAccountApi.md#getParcelAccountTags) | **GET** /beta/parcelAccount/{parcelAccountId}/tag | Get the tags for a parcelAccount.
[**updateParcelAccount**](ParcelAccountApi.md#updateParcelAccount) | **PUT** /beta/parcelAccount | Update a parcelAccount
[**updateParcelAccountCustomFields**](ParcelAccountApi.md#updateParcelAccountCustomFields) | **PUT** /beta/parcelAccount/customFields | Update a parcelAccount custom fields


# **addParcelAccount**
> \Infoplus\Infoplus\Model\ParcelAccount addParcelAccount($body)

Create a parcelAccount

Inserts a new parcelAccount using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ParcelAccount(); // \Infoplus\Infoplus\Model\ParcelAccount | ParcelAccount to be inserted.

try {
    $result = $apiInstance->addParcelAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->addParcelAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)| ParcelAccount to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelAccountAudit**
> addParcelAccountAudit($parcel_account_id, $parcel_account_audit)

Add new audit for a parcelAccount

Adds an audit to an existing parcelAccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to add an audit to
$parcel_account_audit = "parcel_account_audit_example"; // string | The audit to add

try {
    $apiInstance->addParcelAccountAudit($parcel_account_id, $parcel_account_audit);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->addParcelAccountAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to add an audit to |
 **parcel_account_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelAccountFile**
> addParcelAccountFile($parcel_account_id, $file_name)

Attach a file to a parcelAccount

Adds a file to an existing parcelAccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addParcelAccountFile($parcel_account_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->addParcelAccountFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelAccountFileByURL**
> addParcelAccountFileByURL($body, $parcel_account_id)

Attach a file to a parcelAccount by URL.

Adds a file to an existing parcelAccount by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$parcel_account_id = 56; // int | Id of the parcelAccount to add an file to

try {
    $apiInstance->addParcelAccountFileByURL($body, $parcel_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->addParcelAccountFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **parcel_account_id** | **int**| Id of the parcelAccount to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addParcelAccountTag**
> addParcelAccountTag($parcel_account_id, $parcel_account_tag)

Add new tags for a parcelAccount.

Adds a tag to an existing parcelAccount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to add a tag to
$parcel_account_tag = "parcel_account_tag_example"; // string | The tag to add

try {
    $apiInstance->addParcelAccountTag($parcel_account_id, $parcel_account_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->addParcelAccountTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to add a tag to |
 **parcel_account_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelAccountFile**
> deleteParcelAccountFile($parcel_account_id, $file_id)

Delete a file for a parcelAccount.

Deletes an existing parcelAccount file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteParcelAccountFile($parcel_account_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->deleteParcelAccountFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcelAccountTag**
> deleteParcelAccountTag($parcel_account_id, $parcel_account_tag)

Delete a tag for a parcelAccount.

Deletes an existing parcelAccount tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to remove tag from
$parcel_account_tag = "parcel_account_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteParcelAccountTag($parcel_account_id, $parcel_account_tag);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->deleteParcelAccountTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to remove tag from |
 **parcel_account_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateParcelAccountById**
> \Infoplus\Infoplus\Model\ParcelAccount getDuplicateParcelAccountById($parcel_account_id)

Get a duplicated a parcelAccount by id

Returns a duplicated parcelAccount identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to be duplicated.

try {
    $result = $apiInstance->getDuplicateParcelAccountById($parcel_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->getDuplicateParcelAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelAccountByFilter**
> \Infoplus\Infoplus\Model\ParcelAccount[] getParcelAccountByFilter($filter, $page, $limit, $sort)

Search parcelAccounts by filter

Returns the list of parcelAccounts that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
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
    $result = $apiInstance->getParcelAccountByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->getParcelAccountByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ParcelAccount[]**](../Model/ParcelAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelAccountById**
> \Infoplus\Infoplus\Model\ParcelAccount getParcelAccountById($parcel_account_id)

Get a parcelAccount by id

Returns the parcelAccount identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to be returned.

try {
    $result = $apiInstance->getParcelAccountById($parcel_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->getParcelAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelAccountFiles**
> getParcelAccountFiles($parcel_account_id)

Get the files for a parcelAccount.

Get all existing parcelAccount files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to get files for

try {
    $apiInstance->getParcelAccountFiles($parcel_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->getParcelAccountFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelAccountTags**
> getParcelAccountTags($parcel_account_id)

Get the tags for a parcelAccount.

Get all existing parcelAccount tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_account_id = 56; // int | Id of the parcelAccount to get tags for

try {
    $apiInstance->getParcelAccountTags($parcel_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->getParcelAccountTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_account_id** | **int**| Id of the parcelAccount to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParcelAccount**
> updateParcelAccount($body)

Update a parcelAccount

Updates an existing parcelAccount using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ParcelAccount(); // \Infoplus\Infoplus\Model\ParcelAccount | ParcelAccount to be updated.

try {
    $apiInstance->updateParcelAccount($body);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->updateParcelAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)| ParcelAccount to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParcelAccountCustomFields**
> updateParcelAccountCustomFields($body)

Update a parcelAccount custom fields

Updates an existing parcelAccount custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ParcelAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ParcelAccount(); // \Infoplus\Infoplus\Model\ParcelAccount | ParcelAccount to be updated.

try {
    $apiInstance->updateParcelAccountCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ParcelAccountApi->updateParcelAccountCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ParcelAccount**](../Model/ParcelAccount.md)| ParcelAccount to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

