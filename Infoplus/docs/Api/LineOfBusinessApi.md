# Infoplus\LineOfBusinessApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLineOfBusiness**](LineOfBusinessApi.md#addLineOfBusiness) | **POST** /beta/lineOfBusiness | Create a lineOfBusiness
[**addLineOfBusinessAudit**](LineOfBusinessApi.md#addLineOfBusinessAudit) | **PUT** /beta/lineOfBusiness/{lineOfBusinessId}/audit/{lineOfBusinessAudit} | Add new audit for a lineOfBusiness
[**addLineOfBusinessFile**](LineOfBusinessApi.md#addLineOfBusinessFile) | **POST** /beta/lineOfBusiness/{lineOfBusinessId}/file/{fileName} | Attach a file to a lineOfBusiness
[**addLineOfBusinessFileByURL**](LineOfBusinessApi.md#addLineOfBusinessFileByURL) | **POST** /beta/lineOfBusiness/{lineOfBusinessId}/file | Attach a file to a lineOfBusiness by URL.
[**addLineOfBusinessTag**](LineOfBusinessApi.md#addLineOfBusinessTag) | **PUT** /beta/lineOfBusiness/{lineOfBusinessId}/tag/{lineOfBusinessTag} | Add new tags for a lineOfBusiness.
[**deleteLineOfBusinessFile**](LineOfBusinessApi.md#deleteLineOfBusinessFile) | **DELETE** /beta/lineOfBusiness/{lineOfBusinessId}/file/{fileId} | Delete a file for a lineOfBusiness.
[**deleteLineOfBusinessTag**](LineOfBusinessApi.md#deleteLineOfBusinessTag) | **DELETE** /beta/lineOfBusiness/{lineOfBusinessId}/tag/{lineOfBusinessTag} | Delete a tag for a lineOfBusiness.
[**getDuplicateLineOfBusinessById**](LineOfBusinessApi.md#getDuplicateLineOfBusinessById) | **GET** /beta/lineOfBusiness/duplicate/{lineOfBusinessId} | Get a duplicated a lineOfBusiness by id
[**getLineOfBusinessByFilter**](LineOfBusinessApi.md#getLineOfBusinessByFilter) | **GET** /beta/lineOfBusiness/search | Search lineOfBusinesses by filter
[**getLineOfBusinessById**](LineOfBusinessApi.md#getLineOfBusinessById) | **GET** /beta/lineOfBusiness/{lineOfBusinessId} | Get a lineOfBusiness by id
[**getLineOfBusinessFiles**](LineOfBusinessApi.md#getLineOfBusinessFiles) | **GET** /beta/lineOfBusiness/{lineOfBusinessId}/file | Get the files for a lineOfBusiness.
[**getLineOfBusinessTags**](LineOfBusinessApi.md#getLineOfBusinessTags) | **GET** /beta/lineOfBusiness/{lineOfBusinessId}/tag | Get the tags for a lineOfBusiness.
[**updateLineOfBusiness**](LineOfBusinessApi.md#updateLineOfBusiness) | **PUT** /beta/lineOfBusiness | Update a lineOfBusiness
[**updateLineOfBusinessCustomFields**](LineOfBusinessApi.md#updateLineOfBusinessCustomFields) | **PUT** /beta/lineOfBusiness/customFields | Update a lineOfBusiness custom fields


# **addLineOfBusiness**
> \Infoplus\Infoplus\Model\LineOfBusiness addLineOfBusiness($body)

Create a lineOfBusiness

Inserts a new lineOfBusiness using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LineOfBusiness(); // \Infoplus\Infoplus\Model\LineOfBusiness | LineOfBusiness to be inserted.

try {
    $result = $apiInstance->addLineOfBusiness($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->addLineOfBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)| LineOfBusiness to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLineOfBusinessAudit**
> addLineOfBusinessAudit($line_of_business_id, $line_of_business_audit)

Add new audit for a lineOfBusiness

Adds an audit to an existing lineOfBusiness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to add an audit to
$line_of_business_audit = "line_of_business_audit_example"; // string | The audit to add

try {
    $apiInstance->addLineOfBusinessAudit($line_of_business_id, $line_of_business_audit);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->addLineOfBusinessAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to add an audit to |
 **line_of_business_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLineOfBusinessFile**
> addLineOfBusinessFile($line_of_business_id, $file_name)

Attach a file to a lineOfBusiness

Adds a file to an existing lineOfBusiness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addLineOfBusinessFile($line_of_business_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->addLineOfBusinessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLineOfBusinessFileByURL**
> addLineOfBusinessFileByURL($body, $line_of_business_id)

Attach a file to a lineOfBusiness by URL.

Adds a file to an existing lineOfBusiness by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$line_of_business_id = 56; // int | Id of the lineOfBusiness to add an file to

try {
    $apiInstance->addLineOfBusinessFileByURL($body, $line_of_business_id);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->addLineOfBusinessFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **line_of_business_id** | **int**| Id of the lineOfBusiness to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLineOfBusinessTag**
> addLineOfBusinessTag($line_of_business_id, $line_of_business_tag)

Add new tags for a lineOfBusiness.

Adds a tag to an existing lineOfBusiness.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to add a tag to
$line_of_business_tag = "line_of_business_tag_example"; // string | The tag to add

try {
    $apiInstance->addLineOfBusinessTag($line_of_business_id, $line_of_business_tag);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->addLineOfBusinessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to add a tag to |
 **line_of_business_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLineOfBusinessFile**
> deleteLineOfBusinessFile($line_of_business_id, $file_id)

Delete a file for a lineOfBusiness.

Deletes an existing lineOfBusiness file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteLineOfBusinessFile($line_of_business_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->deleteLineOfBusinessFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLineOfBusinessTag**
> deleteLineOfBusinessTag($line_of_business_id, $line_of_business_tag)

Delete a tag for a lineOfBusiness.

Deletes an existing lineOfBusiness tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to remove tag from
$line_of_business_tag = "line_of_business_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteLineOfBusinessTag($line_of_business_id, $line_of_business_tag);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->deleteLineOfBusinessTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to remove tag from |
 **line_of_business_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateLineOfBusinessById**
> \Infoplus\Infoplus\Model\LineOfBusiness getDuplicateLineOfBusinessById($line_of_business_id)

Get a duplicated a lineOfBusiness by id

Returns a duplicated lineOfBusiness identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to be duplicated.

try {
    $result = $apiInstance->getDuplicateLineOfBusinessById($line_of_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getDuplicateLineOfBusinessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLineOfBusinessByFilter**
> \Infoplus\Infoplus\Model\LineOfBusiness[] getLineOfBusinessByFilter($filter, $page, $limit, $sort)

Search lineOfBusinesses by filter

Returns the list of lineOfBusinesses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
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
    $result = $apiInstance->getLineOfBusinessByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\LineOfBusiness[]**](../Model/LineOfBusiness.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLineOfBusinessById**
> \Infoplus\Infoplus\Model\LineOfBusiness getLineOfBusinessById($line_of_business_id)

Get a lineOfBusiness by id

Returns the lineOfBusiness identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to be returned.

try {
    $result = $apiInstance->getLineOfBusinessById($line_of_business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLineOfBusinessFiles**
> getLineOfBusinessFiles($line_of_business_id)

Get the files for a lineOfBusiness.

Get all existing lineOfBusiness files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to get files for

try {
    $apiInstance->getLineOfBusinessFiles($line_of_business_id);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLineOfBusinessTags**
> getLineOfBusinessTags($line_of_business_id)

Get the tags for a lineOfBusiness.

Get all existing lineOfBusiness tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line_of_business_id = 56; // int | Id of the lineOfBusiness to get tags for

try {
    $apiInstance->getLineOfBusinessTags($line_of_business_id);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->getLineOfBusinessTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line_of_business_id** | **int**| Id of the lineOfBusiness to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLineOfBusiness**
> updateLineOfBusiness($body)

Update a lineOfBusiness

Updates an existing lineOfBusiness using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LineOfBusiness(); // \Infoplus\Infoplus\Model\LineOfBusiness | LineOfBusiness to be updated.

try {
    $apiInstance->updateLineOfBusiness($body);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->updateLineOfBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)| LineOfBusiness to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLineOfBusinessCustomFields**
> updateLineOfBusinessCustomFields($body)

Update a lineOfBusiness custom fields

Updates an existing lineOfBusiness custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\LineOfBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\LineOfBusiness(); // \Infoplus\Infoplus\Model\LineOfBusiness | LineOfBusiness to be updated.

try {
    $apiInstance->updateLineOfBusinessCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LineOfBusinessApi->updateLineOfBusinessCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\LineOfBusiness**](../Model/LineOfBusiness.md)| LineOfBusiness to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

