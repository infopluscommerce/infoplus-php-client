# Infoplus\SubstitutionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSubstitution**](SubstitutionApi.md#addSubstitution) | **POST** /beta/substitution | Create a substitution
[**addSubstitutionAudit**](SubstitutionApi.md#addSubstitutionAudit) | **PUT** /beta/substitution/{substitutionId}/audit/{substitutionAudit} | Add new audit for a substitution
[**addSubstitutionFile**](SubstitutionApi.md#addSubstitutionFile) | **POST** /beta/substitution/{substitutionId}/file/{fileName} | Attach a file to a substitution
[**addSubstitutionFileByURL**](SubstitutionApi.md#addSubstitutionFileByURL) | **POST** /beta/substitution/{substitutionId}/file | Attach a file to a substitution by URL.
[**addSubstitutionTag**](SubstitutionApi.md#addSubstitutionTag) | **PUT** /beta/substitution/{substitutionId}/tag/{substitutionTag} | Add new tags for a substitution.
[**deleteSubstitution**](SubstitutionApi.md#deleteSubstitution) | **DELETE** /beta/substitution/{substitutionId} | Delete a substitution
[**deleteSubstitutionFile**](SubstitutionApi.md#deleteSubstitutionFile) | **DELETE** /beta/substitution/{substitutionId}/file/{fileId} | Delete a file for a substitution.
[**deleteSubstitutionTag**](SubstitutionApi.md#deleteSubstitutionTag) | **DELETE** /beta/substitution/{substitutionId}/tag/{substitutionTag} | Delete a tag for a substitution.
[**getDuplicateSubstitutionById**](SubstitutionApi.md#getDuplicateSubstitutionById) | **GET** /beta/substitution/duplicate/{substitutionId} | Get a duplicated a substitution by id
[**getSubstitutionByFilter**](SubstitutionApi.md#getSubstitutionByFilter) | **GET** /beta/substitution/search | Search substitutions by filter
[**getSubstitutionById**](SubstitutionApi.md#getSubstitutionById) | **GET** /beta/substitution/{substitutionId} | Get a substitution by id
[**getSubstitutionFiles**](SubstitutionApi.md#getSubstitutionFiles) | **GET** /beta/substitution/{substitutionId}/file | Get the files for a substitution.
[**getSubstitutionTags**](SubstitutionApi.md#getSubstitutionTags) | **GET** /beta/substitution/{substitutionId}/tag | Get the tags for a substitution.
[**updateSubstitution**](SubstitutionApi.md#updateSubstitution) | **PUT** /beta/substitution | Update a substitution
[**updateSubstitutionCustomFields**](SubstitutionApi.md#updateSubstitutionCustomFields) | **PUT** /beta/substitution/customFields | Update a substitution custom fields


# **addSubstitution**
> \Infoplus\Infoplus\Model\Substitution addSubstitution($body)

Create a substitution

Inserts a new substitution using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Substitution(); // \Infoplus\Infoplus\Model\Substitution | Substitution to be inserted.

try {
    $result = $apiInstance->addSubstitution($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)| Substitution to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubstitutionAudit**
> addSubstitutionAudit($substitution_id, $substitution_audit)

Add new audit for a substitution

Adds an audit to an existing substitution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to add an audit to
$substitution_audit = "substitution_audit_example"; // string | The audit to add

try {
    $apiInstance->addSubstitutionAudit($substitution_id, $substitution_audit);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to add an audit to |
 **substitution_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubstitutionFile**
> addSubstitutionFile($substitution_id, $file_name)

Attach a file to a substitution

Adds a file to an existing substitution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addSubstitutionFile($substitution_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubstitutionFileByURL**
> addSubstitutionFileByURL($body, $substitution_id)

Attach a file to a substitution by URL.

Adds a file to an existing substitution by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$substitution_id = 56; // int | Id of the substitution to add an file to

try {
    $apiInstance->addSubstitutionFileByURL($body, $substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **substitution_id** | **int**| Id of the substitution to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSubstitutionTag**
> addSubstitutionTag($substitution_id, $substitution_tag)

Add new tags for a substitution.

Adds a tag to an existing substitution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to add a tag to
$substitution_tag = "substitution_tag_example"; // string | The tag to add

try {
    $apiInstance->addSubstitutionTag($substitution_id, $substitution_tag);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to add a tag to |
 **substitution_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubstitution**
> deleteSubstitution($substitution_id)

Delete a substitution

Deletes the substitution identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to be deleted.

try {
    $apiInstance->deleteSubstitution($substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->deleteSubstitution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubstitutionFile**
> deleteSubstitutionFile($substitution_id, $file_id)

Delete a file for a substitution.

Deletes an existing substitution file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteSubstitutionFile($substitution_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->deleteSubstitutionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubstitutionTag**
> deleteSubstitutionTag($substitution_id, $substitution_tag)

Delete a tag for a substitution.

Deletes an existing substitution tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to remove tag from
$substitution_tag = "substitution_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteSubstitutionTag($substitution_id, $substitution_tag);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->deleteSubstitutionTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to remove tag from |
 **substitution_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateSubstitutionById**
> \Infoplus\Infoplus\Model\Substitution getDuplicateSubstitutionById($substitution_id)

Get a duplicated a substitution by id

Returns a duplicated substitution identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to be duplicated.

try {
    $result = $apiInstance->getDuplicateSubstitutionById($substitution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getDuplicateSubstitutionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubstitutionByFilter**
> \Infoplus\Infoplus\Model\Substitution[] getSubstitutionByFilter($filter, $page, $limit, $sort)

Search substitutions by filter

Returns the list of substitutions that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
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
    $result = $apiInstance->getSubstitutionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Substitution[]**](../Model/Substitution.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubstitutionById**
> \Infoplus\Infoplus\Model\Substitution getSubstitutionById($substitution_id)

Get a substitution by id

Returns the substitution identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to be returned.

try {
    $result = $apiInstance->getSubstitutionById($substitution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubstitutionFiles**
> getSubstitutionFiles($substitution_id)

Get the files for a substitution.

Get all existing substitution files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to get files for

try {
    $apiInstance->getSubstitutionFiles($substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubstitutionTags**
> getSubstitutionTags($substitution_id)

Get the tags for a substitution.

Get all existing substitution tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substitution_id = 56; // int | Id of the substitution to get tags for

try {
    $apiInstance->getSubstitutionTags($substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubstitution**
> updateSubstitution($body)

Update a substitution

Updates an existing substitution using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Substitution(); // \Infoplus\Infoplus\Model\Substitution | Substitution to be updated.

try {
    $apiInstance->updateSubstitution($body);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->updateSubstitution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)| Substitution to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubstitutionCustomFields**
> updateSubstitutionCustomFields($body)

Update a substitution custom fields

Updates an existing substitution custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SubstitutionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Substitution(); // \Infoplus\Infoplus\Model\Substitution | Substitution to be updated.

try {
    $apiInstance->updateSubstitutionCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->updateSubstitutionCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Substitution**](../Model/Substitution.md)| Substitution to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

