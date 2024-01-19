# Infoplus\ManageScheduledPlansApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addManageScheduledPlans**](ManageScheduledPlansApi.md#addManageScheduledPlans) | **POST** /beta/manageScheduledPlans | Create a manageScheduledPlans
[**addManageScheduledPlansAudit**](ManageScheduledPlansApi.md#addManageScheduledPlansAudit) | **PUT** /beta/manageScheduledPlans/{manageScheduledPlansId}/audit/{manageScheduledPlansAudit} | Add new audit for a manageScheduledPlans
[**addManageScheduledPlansFile**](ManageScheduledPlansApi.md#addManageScheduledPlansFile) | **POST** /beta/manageScheduledPlans/{manageScheduledPlansId}/file/{fileName} | Attach a file to a manageScheduledPlans
[**addManageScheduledPlansFileByURL**](ManageScheduledPlansApi.md#addManageScheduledPlansFileByURL) | **POST** /beta/manageScheduledPlans/{manageScheduledPlansId}/file | Attach a file to a manageScheduledPlans by URL.
[**addManageScheduledPlansTag**](ManageScheduledPlansApi.md#addManageScheduledPlansTag) | **PUT** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag/{manageScheduledPlansTag} | Add new tags for a manageScheduledPlans.
[**deleteManageScheduledPlans**](ManageScheduledPlansApi.md#deleteManageScheduledPlans) | **DELETE** /beta/manageScheduledPlans/{manageScheduledPlansId} | Delete a manageScheduledPlans
[**deleteManageScheduledPlansFile**](ManageScheduledPlansApi.md#deleteManageScheduledPlansFile) | **DELETE** /beta/manageScheduledPlans/{manageScheduledPlansId}/file/{fileId} | Delete a file for a manageScheduledPlans.
[**deleteManageScheduledPlansTag**](ManageScheduledPlansApi.md#deleteManageScheduledPlansTag) | **DELETE** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag/{manageScheduledPlansTag} | Delete a tag for a manageScheduledPlans.
[**getDuplicateManageScheduledPlansById**](ManageScheduledPlansApi.md#getDuplicateManageScheduledPlansById) | **GET** /beta/manageScheduledPlans/duplicate/{manageScheduledPlansId} | Get a duplicated a manageScheduledPlans by id
[**getManageScheduledPlansByFilter**](ManageScheduledPlansApi.md#getManageScheduledPlansByFilter) | **GET** /beta/manageScheduledPlans/search | Search manageScheduledPlanses by filter
[**getManageScheduledPlansById**](ManageScheduledPlansApi.md#getManageScheduledPlansById) | **GET** /beta/manageScheduledPlans/{manageScheduledPlansId} | Get a manageScheduledPlans by id
[**getManageScheduledPlansFiles**](ManageScheduledPlansApi.md#getManageScheduledPlansFiles) | **GET** /beta/manageScheduledPlans/{manageScheduledPlansId}/file | Get the files for a manageScheduledPlans.
[**getManageScheduledPlansTags**](ManageScheduledPlansApi.md#getManageScheduledPlansTags) | **GET** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag | Get the tags for a manageScheduledPlans.
[**updateManageScheduledPlans**](ManageScheduledPlansApi.md#updateManageScheduledPlans) | **PUT** /beta/manageScheduledPlans | Update a manageScheduledPlans


# **addManageScheduledPlans**
> \Infoplus\Infoplus\Model\ManageScheduledPlans addManageScheduledPlans($body)

Create a manageScheduledPlans

Inserts a new manageScheduledPlans using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ManageScheduledPlans(); // \Infoplus\Infoplus\Model\ManageScheduledPlans | ManageScheduledPlans to be inserted.

try {
    $result = $apiInstance->addManageScheduledPlans($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ManageScheduledPlans**](../Model/ManageScheduledPlans.md)| ManageScheduledPlans to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\ManageScheduledPlans**](../Model/ManageScheduledPlans.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addManageScheduledPlansAudit**
> addManageScheduledPlansAudit($manage_scheduled_plans_id, $manage_scheduled_plans_audit)

Add new audit for a manageScheduledPlans

Adds an audit to an existing manageScheduledPlans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add an audit to
$manage_scheduled_plans_audit = "manage_scheduled_plans_audit_example"; // string | The audit to add

try {
    $apiInstance->addManageScheduledPlansAudit($manage_scheduled_plans_id, $manage_scheduled_plans_audit);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add an audit to |
 **manage_scheduled_plans_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addManageScheduledPlansFile**
> addManageScheduledPlansFile($manage_scheduled_plans_id, $file_name)

Attach a file to a manageScheduledPlans

Adds a file to an existing manageScheduledPlans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addManageScheduledPlansFile($manage_scheduled_plans_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addManageScheduledPlansFileByURL**
> addManageScheduledPlansFileByURL($body, $manage_scheduled_plans_id)

Attach a file to a manageScheduledPlans by URL.

Adds a file to an existing manageScheduledPlans by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add an file to

try {
    $apiInstance->addManageScheduledPlansFileByURL($body, $manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addManageScheduledPlansTag**
> addManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag)

Add new tags for a manageScheduledPlans.

Adds a tag to an existing manageScheduledPlans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add a tag to
$manage_scheduled_plans_tag = "manage_scheduled_plans_tag_example"; // string | The tag to add

try {
    $apiInstance->addManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add a tag to |
 **manage_scheduled_plans_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteManageScheduledPlans**
> deleteManageScheduledPlans($manage_scheduled_plans_id)

Delete a manageScheduledPlans

Deletes the manageScheduledPlans identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be deleted.

try {
    $apiInstance->deleteManageScheduledPlans($manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->deleteManageScheduledPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteManageScheduledPlansFile**
> deleteManageScheduledPlansFile($manage_scheduled_plans_id, $file_id)

Delete a file for a manageScheduledPlans.

Deletes an existing manageScheduledPlans file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteManageScheduledPlansFile($manage_scheduled_plans_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->deleteManageScheduledPlansFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteManageScheduledPlansTag**
> deleteManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag)

Delete a tag for a manageScheduledPlans.

Deletes an existing manageScheduledPlans tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to remove tag from
$manage_scheduled_plans_tag = "manage_scheduled_plans_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->deleteManageScheduledPlansTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to remove tag from |
 **manage_scheduled_plans_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateManageScheduledPlansById**
> \Infoplus\Infoplus\Model\ManageScheduledPlans getDuplicateManageScheduledPlansById($manage_scheduled_plans_id)

Get a duplicated a manageScheduledPlans by id

Returns a duplicated manageScheduledPlans identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be duplicated.

try {
    $result = $apiInstance->getDuplicateManageScheduledPlansById($manage_scheduled_plans_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getDuplicateManageScheduledPlansById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\ManageScheduledPlans**](../Model/ManageScheduledPlans.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManageScheduledPlansByFilter**
> \Infoplus\Infoplus\Model\ManageScheduledPlans[] getManageScheduledPlansByFilter($filter, $page, $limit, $sort)

Search manageScheduledPlanses by filter

Returns the list of manageScheduledPlanses that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
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
    $result = $apiInstance->getManageScheduledPlansByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\ManageScheduledPlans[]**](../Model/ManageScheduledPlans.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManageScheduledPlansById**
> \Infoplus\Infoplus\Model\ManageScheduledPlans getManageScheduledPlansById($manage_scheduled_plans_id)

Get a manageScheduledPlans by id

Returns the manageScheduledPlans identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be returned.

try {
    $result = $apiInstance->getManageScheduledPlansById($manage_scheduled_plans_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\ManageScheduledPlans**](../Model/ManageScheduledPlans.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManageScheduledPlansFiles**
> getManageScheduledPlansFiles($manage_scheduled_plans_id)

Get the files for a manageScheduledPlans.

Get all existing manageScheduledPlans files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to get files for

try {
    $apiInstance->getManageScheduledPlansFiles($manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManageScheduledPlansTags**
> getManageScheduledPlansTags($manage_scheduled_plans_id)

Get the tags for a manageScheduledPlans.

Get all existing manageScheduledPlans tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to get tags for

try {
    $apiInstance->getManageScheduledPlansTags($manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateManageScheduledPlans**
> updateManageScheduledPlans($body)

Update a manageScheduledPlans

Updates an existing manageScheduledPlans using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ManageScheduledPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\ManageScheduledPlans(); // \Infoplus\Infoplus\Model\ManageScheduledPlans | ManageScheduledPlans to be updated.

try {
    $apiInstance->updateManageScheduledPlans($body);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->updateManageScheduledPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\ManageScheduledPlans**](../Model/ManageScheduledPlans.md)| ManageScheduledPlans to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

