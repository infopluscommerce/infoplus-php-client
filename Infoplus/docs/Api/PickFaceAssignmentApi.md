# Infoplus\PickFaceAssignmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPickFaceAssignment**](PickFaceAssignmentApi.md#addPickFaceAssignment) | **POST** /beta/pickFaceAssignment | Create a pickFaceAssignment
[**addPickFaceAssignmentAudit**](PickFaceAssignmentApi.md#addPickFaceAssignmentAudit) | **PUT** /beta/pickFaceAssignment/{pickFaceAssignmentId}/audit/{pickFaceAssignmentAudit} | Add new audit for a pickFaceAssignment
[**addPickFaceAssignmentFile**](PickFaceAssignmentApi.md#addPickFaceAssignmentFile) | **POST** /beta/pickFaceAssignment/{pickFaceAssignmentId}/file/{fileName} | Attach a file to a pickFaceAssignment
[**addPickFaceAssignmentFileByURL**](PickFaceAssignmentApi.md#addPickFaceAssignmentFileByURL) | **POST** /beta/pickFaceAssignment/{pickFaceAssignmentId}/file | Attach a file to a pickFaceAssignment by URL.
[**addPickFaceAssignmentTag**](PickFaceAssignmentApi.md#addPickFaceAssignmentTag) | **PUT** /beta/pickFaceAssignment/{pickFaceAssignmentId}/tag/{pickFaceAssignmentTag} | Add new tags for a pickFaceAssignment.
[**deletePickFaceAssignment**](PickFaceAssignmentApi.md#deletePickFaceAssignment) | **DELETE** /beta/pickFaceAssignment/{pickFaceAssignmentId} | Delete a pickFaceAssignment
[**deletePickFaceAssignmentFile**](PickFaceAssignmentApi.md#deletePickFaceAssignmentFile) | **DELETE** /beta/pickFaceAssignment/{pickFaceAssignmentId}/file/{fileId} | Delete a file for a pickFaceAssignment.
[**deletePickFaceAssignmentTag**](PickFaceAssignmentApi.md#deletePickFaceAssignmentTag) | **DELETE** /beta/pickFaceAssignment/{pickFaceAssignmentId}/tag/{pickFaceAssignmentTag} | Delete a tag for a pickFaceAssignment.
[**getDuplicatePickFaceAssignmentById**](PickFaceAssignmentApi.md#getDuplicatePickFaceAssignmentById) | **GET** /beta/pickFaceAssignment/duplicate/{pickFaceAssignmentId} | Get a duplicated a pickFaceAssignment by id
[**getPickFaceAssignmentByFilter**](PickFaceAssignmentApi.md#getPickFaceAssignmentByFilter) | **GET** /beta/pickFaceAssignment/search | Search pickFaceAssignments by filter
[**getPickFaceAssignmentById**](PickFaceAssignmentApi.md#getPickFaceAssignmentById) | **GET** /beta/pickFaceAssignment/{pickFaceAssignmentId} | Get a pickFaceAssignment by id
[**getPickFaceAssignmentFiles**](PickFaceAssignmentApi.md#getPickFaceAssignmentFiles) | **GET** /beta/pickFaceAssignment/{pickFaceAssignmentId}/file | Get the files for a pickFaceAssignment.
[**getPickFaceAssignmentTags**](PickFaceAssignmentApi.md#getPickFaceAssignmentTags) | **GET** /beta/pickFaceAssignment/{pickFaceAssignmentId}/tag | Get the tags for a pickFaceAssignment.
[**updatePickFaceAssignment**](PickFaceAssignmentApi.md#updatePickFaceAssignment) | **PUT** /beta/pickFaceAssignment | Update a pickFaceAssignment
[**updatePickFaceAssignmentCustomFields**](PickFaceAssignmentApi.md#updatePickFaceAssignmentCustomFields) | **PUT** /beta/pickFaceAssignment/customFields | Update a pickFaceAssignment custom fields


# **addPickFaceAssignment**
> \Infoplus\Infoplus\Model\PickFaceAssignment addPickFaceAssignment($body)

Create a pickFaceAssignment

Inserts a new pickFaceAssignment using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PickFaceAssignment(); // \Infoplus\Infoplus\Model\PickFaceAssignment | PickFaceAssignment to be inserted.

try {
    $result = $apiInstance->addPickFaceAssignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)| PickFaceAssignment to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPickFaceAssignmentAudit**
> addPickFaceAssignmentAudit($pick_face_assignment_id, $pick_face_assignment_audit)

Add new audit for a pickFaceAssignment

Adds an audit to an existing pickFaceAssignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to add an audit to
$pick_face_assignment_audit = "pick_face_assignment_audit_example"; // string | The audit to add

try {
    $apiInstance->addPickFaceAssignmentAudit($pick_face_assignment_id, $pick_face_assignment_audit);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignmentAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to add an audit to |
 **pick_face_assignment_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPickFaceAssignmentFile**
> addPickFaceAssignmentFile($pick_face_assignment_id, $file_name)

Attach a file to a pickFaceAssignment

Adds a file to an existing pickFaceAssignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPickFaceAssignmentFile($pick_face_assignment_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPickFaceAssignmentFileByURL**
> addPickFaceAssignmentFileByURL($body, $pick_face_assignment_id)

Attach a file to a pickFaceAssignment by URL.

Adds a file to an existing pickFaceAssignment by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to add an file to

try {
    $apiInstance->addPickFaceAssignmentFileByURL($body, $pick_face_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignmentFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPickFaceAssignmentTag**
> addPickFaceAssignmentTag($pick_face_assignment_id, $pick_face_assignment_tag)

Add new tags for a pickFaceAssignment.

Adds a tag to an existing pickFaceAssignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to add a tag to
$pick_face_assignment_tag = "pick_face_assignment_tag_example"; // string | The tag to add

try {
    $apiInstance->addPickFaceAssignmentTag($pick_face_assignment_id, $pick_face_assignment_tag);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to add a tag to |
 **pick_face_assignment_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePickFaceAssignment**
> deletePickFaceAssignment($pick_face_assignment_id)

Delete a pickFaceAssignment

Deletes the pickFaceAssignment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to be deleted.

try {
    $apiInstance->deletePickFaceAssignment($pick_face_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->deletePickFaceAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePickFaceAssignmentFile**
> deletePickFaceAssignmentFile($pick_face_assignment_id, $file_id)

Delete a file for a pickFaceAssignment.

Deletes an existing pickFaceAssignment file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePickFaceAssignmentFile($pick_face_assignment_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->deletePickFaceAssignmentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePickFaceAssignmentTag**
> deletePickFaceAssignmentTag($pick_face_assignment_id, $pick_face_assignment_tag)

Delete a tag for a pickFaceAssignment.

Deletes an existing pickFaceAssignment tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to remove tag from
$pick_face_assignment_tag = "pick_face_assignment_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePickFaceAssignmentTag($pick_face_assignment_id, $pick_face_assignment_tag);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->deletePickFaceAssignmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to remove tag from |
 **pick_face_assignment_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePickFaceAssignmentById**
> \Infoplus\Infoplus\Model\PickFaceAssignment getDuplicatePickFaceAssignmentById($pick_face_assignment_id)

Get a duplicated a pickFaceAssignment by id

Returns a duplicated pickFaceAssignment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to be duplicated.

try {
    $result = $apiInstance->getDuplicatePickFaceAssignmentById($pick_face_assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getDuplicatePickFaceAssignmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickFaceAssignmentByFilter**
> \Infoplus\Infoplus\Model\PickFaceAssignment[] getPickFaceAssignmentByFilter($filter, $page, $limit, $sort)

Search pickFaceAssignments by filter

Returns the list of pickFaceAssignments that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
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
    $result = $apiInstance->getPickFaceAssignmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PickFaceAssignment[]**](../Model/PickFaceAssignment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickFaceAssignmentById**
> \Infoplus\Infoplus\Model\PickFaceAssignment getPickFaceAssignmentById($pick_face_assignment_id)

Get a pickFaceAssignment by id

Returns the pickFaceAssignment identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to be returned.

try {
    $result = $apiInstance->getPickFaceAssignmentById($pick_face_assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickFaceAssignmentFiles**
> getPickFaceAssignmentFiles($pick_face_assignment_id)

Get the files for a pickFaceAssignment.

Get all existing pickFaceAssignment files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to get files for

try {
    $apiInstance->getPickFaceAssignmentFiles($pick_face_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickFaceAssignmentTags**
> getPickFaceAssignmentTags($pick_face_assignment_id)

Get the tags for a pickFaceAssignment.

Get all existing pickFaceAssignment tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to get tags for

try {
    $apiInstance->getPickFaceAssignmentTags($pick_face_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePickFaceAssignment**
> updatePickFaceAssignment($body)

Update a pickFaceAssignment

Updates an existing pickFaceAssignment using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PickFaceAssignment(); // \Infoplus\Infoplus\Model\PickFaceAssignment | PickFaceAssignment to be updated.

try {
    $apiInstance->updatePickFaceAssignment($body);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->updatePickFaceAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)| PickFaceAssignment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePickFaceAssignmentCustomFields**
> updatePickFaceAssignmentCustomFields($body)

Update a pickFaceAssignment custom fields

Updates an existing pickFaceAssignment custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PickFaceAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PickFaceAssignment(); // \Infoplus\Infoplus\Model\PickFaceAssignment | PickFaceAssignment to be updated.

try {
    $apiInstance->updatePickFaceAssignmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->updatePickFaceAssignmentCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PickFaceAssignment**](../Model/PickFaceAssignment.md)| PickFaceAssignment to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

