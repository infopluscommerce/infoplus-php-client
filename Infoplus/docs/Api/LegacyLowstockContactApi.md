# Infoplus\LegacyLowstockContactApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLegacyLowstockContact**](LegacyLowstockContactApi.md#addLegacyLowstockContact) | **POST** /beta/legacyLowstockContact | Create a legacyLowstockContact
[**addLegacyLowstockContactAudit**](LegacyLowstockContactApi.md#addLegacyLowstockContactAudit) | **PUT** /beta/legacyLowstockContact/{legacyLowstockContactId}/audit/{legacyLowstockContactAudit} | Add new audit for a legacyLowstockContact
[**addLegacyLowstockContactFile**](LegacyLowstockContactApi.md#addLegacyLowstockContactFile) | **POST** /beta/legacyLowstockContact/{legacyLowstockContactId}/file/{fileName} | Attach a file to a legacyLowstockContact
[**addLegacyLowstockContactFileByURL**](LegacyLowstockContactApi.md#addLegacyLowstockContactFileByURL) | **POST** /beta/legacyLowstockContact/{legacyLowstockContactId}/file | Attach a file to a legacyLowstockContact by URL.
[**addLegacyLowstockContactTag**](LegacyLowstockContactApi.md#addLegacyLowstockContactTag) | **PUT** /beta/legacyLowstockContact/{legacyLowstockContactId}/tag/{legacyLowstockContactTag} | Add new tags for a legacyLowstockContact.
[**deleteLegacyLowstockContact**](LegacyLowstockContactApi.md#deleteLegacyLowstockContact) | **DELETE** /beta/legacyLowstockContact/{legacyLowstockContactId} | Delete a legacyLowstockContact
[**deleteLegacyLowstockContactFile**](LegacyLowstockContactApi.md#deleteLegacyLowstockContactFile) | **DELETE** /beta/legacyLowstockContact/{legacyLowstockContactId}/file/{fileId} | Delete a file for a legacyLowstockContact.
[**deleteLegacyLowstockContactTag**](LegacyLowstockContactApi.md#deleteLegacyLowstockContactTag) | **DELETE** /beta/legacyLowstockContact/{legacyLowstockContactId}/tag/{legacyLowstockContactTag} | Delete a tag for a legacyLowstockContact.
[**getDuplicateLegacyLowstockContactById**](LegacyLowstockContactApi.md#getDuplicateLegacyLowstockContactById) | **GET** /beta/legacyLowstockContact/duplicate/{legacyLowstockContactId} | Get a duplicated a legacyLowstockContact by id
[**getLegacyLowstockContactByFilter**](LegacyLowstockContactApi.md#getLegacyLowstockContactByFilter) | **GET** /beta/legacyLowstockContact/search | Search legacyLowstockContacts by filter
[**getLegacyLowstockContactById**](LegacyLowstockContactApi.md#getLegacyLowstockContactById) | **GET** /beta/legacyLowstockContact/{legacyLowstockContactId} | Get a legacyLowstockContact by id
[**getLegacyLowstockContactFiles**](LegacyLowstockContactApi.md#getLegacyLowstockContactFiles) | **GET** /beta/legacyLowstockContact/{legacyLowstockContactId}/file | Get the files for a legacyLowstockContact.
[**getLegacyLowstockContactTags**](LegacyLowstockContactApi.md#getLegacyLowstockContactTags) | **GET** /beta/legacyLowstockContact/{legacyLowstockContactId}/tag | Get the tags for a legacyLowstockContact.
[**updateLegacyLowstockContact**](LegacyLowstockContactApi.md#updateLegacyLowstockContact) | **PUT** /beta/legacyLowstockContact | Update a legacyLowstockContact


# **addLegacyLowstockContact**
> \Infoplus\Infoplus\Model\LegacyLowstockContact addLegacyLowstockContact($body)

Create a legacyLowstockContact

Inserts a new legacyLowstockContact using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LegacyLowstockContact(); // \Infoplus\Infoplus\Model\LegacyLowstockContact | LegacyLowstockContact to be inserted.

try {
    $result = $apiInstance->addLegacyLowstockContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LegacyLowstockContact**](../Model/LegacyLowstockContact.md)| LegacyLowstockContact to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\LegacyLowstockContact**](../Model/LegacyLowstockContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLegacyLowstockContactAudit**
> addLegacyLowstockContactAudit($legacy_lowstock_contact_id, $legacy_lowstock_contact_audit)

Add new audit for a legacyLowstockContact

Adds an audit to an existing legacyLowstockContact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to add an audit to
$legacy_lowstock_contact_audit = "legacy_lowstock_contact_audit_example"; // string | The audit to add

try {
    $apiInstance->addLegacyLowstockContactAudit($legacy_lowstock_contact_id, $legacy_lowstock_contact_audit);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContactAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to add an audit to |
 **legacy_lowstock_contact_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLegacyLowstockContactFile**
> addLegacyLowstockContactFile($legacy_lowstock_contact_id, $file_name)

Attach a file to a legacyLowstockContact

Adds a file to an existing legacyLowstockContact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLegacyLowstockContactFile($legacy_lowstock_contact_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContactFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLegacyLowstockContactFileByURL**
> addLegacyLowstockContactFileByURL($body, $legacy_lowstock_contact_id)

Attach a file to a legacyLowstockContact by URL.

Adds a file to an existing legacyLowstockContact by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to add an file to

try {
    $apiInstance->addLegacyLowstockContactFileByURL($body, $legacy_lowstock_contact_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContactFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLegacyLowstockContactTag**
> addLegacyLowstockContactTag($legacy_lowstock_contact_id, $legacy_lowstock_contact_tag)

Add new tags for a legacyLowstockContact.

Adds a tag to an existing legacyLowstockContact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to add a tag to
$legacy_lowstock_contact_tag = "legacy_lowstock_contact_tag_example"; // string | The tag to add

try {
    $apiInstance->addLegacyLowstockContactTag($legacy_lowstock_contact_id, $legacy_lowstock_contact_tag);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContactTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to add a tag to |
 **legacy_lowstock_contact_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLegacyLowstockContact**
> deleteLegacyLowstockContact($legacy_lowstock_contact_id)

Delete a legacyLowstockContact

Deletes the legacyLowstockContact identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be deleted.

try {
    $apiInstance->deleteLegacyLowstockContact($legacy_lowstock_contact_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->deleteLegacyLowstockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLegacyLowstockContactFile**
> deleteLegacyLowstockContactFile($legacy_lowstock_contact_id, $file_id)

Delete a file for a legacyLowstockContact.

Deletes an existing legacyLowstockContact file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLegacyLowstockContactFile($legacy_lowstock_contact_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->deleteLegacyLowstockContactFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLegacyLowstockContactTag**
> deleteLegacyLowstockContactTag($legacy_lowstock_contact_id, $legacy_lowstock_contact_tag)

Delete a tag for a legacyLowstockContact.

Deletes an existing legacyLowstockContact tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to remove tag from
$legacy_lowstock_contact_tag = "legacy_lowstock_contact_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLegacyLowstockContactTag($legacy_lowstock_contact_id, $legacy_lowstock_contact_tag);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->deleteLegacyLowstockContactTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to remove tag from |
 **legacy_lowstock_contact_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLegacyLowstockContactById**
> \Infoplus\Infoplus\Model\LegacyLowstockContact getDuplicateLegacyLowstockContactById($legacy_lowstock_contact_id)

Get a duplicated a legacyLowstockContact by id

Returns a duplicated legacyLowstockContact identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be duplicated.

try {
    $result = $apiInstance->getDuplicateLegacyLowstockContactById($legacy_lowstock_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getDuplicateLegacyLowstockContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LegacyLowstockContact**](../Model/LegacyLowstockContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegacyLowstockContactByFilter**
> \Infoplus\Infoplus\Model\LegacyLowstockContact[] getLegacyLowstockContactByFilter($filter, $page, $limit, $sort)

Search legacyLowstockContacts by filter

Returns the list of legacyLowstockContacts that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
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
    $result = $apiInstance->getLegacyLowstockContactByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LegacyLowstockContact[]**](../Model/LegacyLowstockContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegacyLowstockContactById**
> \Infoplus\Infoplus\Model\LegacyLowstockContact getLegacyLowstockContactById($legacy_lowstock_contact_id)

Get a legacyLowstockContact by id

Returns the legacyLowstockContact identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be returned.

try {
    $result = $apiInstance->getLegacyLowstockContactById($legacy_lowstock_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LegacyLowstockContact**](../Model/LegacyLowstockContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegacyLowstockContactFiles**
> getLegacyLowstockContactFiles($legacy_lowstock_contact_id)

Get the files for a legacyLowstockContact.

Get all existing legacyLowstockContact files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to get files for

try {
    $apiInstance->getLegacyLowstockContactFiles($legacy_lowstock_contact_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegacyLowstockContactTags**
> getLegacyLowstockContactTags($legacy_lowstock_contact_id)

Get the tags for a legacyLowstockContact.

Get all existing legacyLowstockContact tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to get tags for

try {
    $apiInstance->getLegacyLowstockContactTags($legacy_lowstock_contact_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLegacyLowstockContact**
> updateLegacyLowstockContact($body)

Update a legacyLowstockContact

Updates an existing legacyLowstockContact using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LegacyLowstockContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LegacyLowstockContact(); // \Infoplus\Infoplus\Model\LegacyLowstockContact | LegacyLowstockContact to be updated.

try {
    $apiInstance->updateLegacyLowstockContact($body);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->updateLegacyLowstockContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LegacyLowstockContact**](../Model/LegacyLowstockContact.md)| LegacyLowstockContact to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

