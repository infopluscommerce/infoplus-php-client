# Infoplus\PackingPlanApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPackingPlan**](PackingPlanApi.md#addPackingPlan) | **POST** /beta/packingPlan | Create a packingPlan
[**addPackingPlanAudit**](PackingPlanApi.md#addPackingPlanAudit) | **PUT** /beta/packingPlan/{packingPlanId}/audit/{packingPlanAudit} | Add new audit for a packingPlan
[**addPackingPlanFile**](PackingPlanApi.md#addPackingPlanFile) | **POST** /beta/packingPlan/{packingPlanId}/file/{fileName} | Attach a file to a packingPlan
[**addPackingPlanFileByURL**](PackingPlanApi.md#addPackingPlanFileByURL) | **POST** /beta/packingPlan/{packingPlanId}/file | Attach a file to a packingPlan by URL.
[**addPackingPlanTag**](PackingPlanApi.md#addPackingPlanTag) | **PUT** /beta/packingPlan/{packingPlanId}/tag/{packingPlanTag} | Add new tags for a packingPlan.
[**deletePackingPlan**](PackingPlanApi.md#deletePackingPlan) | **DELETE** /beta/packingPlan/{packingPlanId} | Delete a packingPlan
[**deletePackingPlanFile**](PackingPlanApi.md#deletePackingPlanFile) | **DELETE** /beta/packingPlan/{packingPlanId}/file/{fileId} | Delete a file for a packingPlan.
[**deletePackingPlanTag**](PackingPlanApi.md#deletePackingPlanTag) | **DELETE** /beta/packingPlan/{packingPlanId}/tag/{packingPlanTag} | Delete a tag for a packingPlan.
[**getDuplicatePackingPlanById**](PackingPlanApi.md#getDuplicatePackingPlanById) | **GET** /beta/packingPlan/duplicate/{packingPlanId} | Get a duplicated a packingPlan by id
[**getPackingPlanByFilter**](PackingPlanApi.md#getPackingPlanByFilter) | **GET** /beta/packingPlan/search | Search packingPlans by filter
[**getPackingPlanById**](PackingPlanApi.md#getPackingPlanById) | **GET** /beta/packingPlan/{packingPlanId} | Get a packingPlan by id
[**getPackingPlanFiles**](PackingPlanApi.md#getPackingPlanFiles) | **GET** /beta/packingPlan/{packingPlanId}/file | Get the files for a packingPlan.
[**getPackingPlanTags**](PackingPlanApi.md#getPackingPlanTags) | **GET** /beta/packingPlan/{packingPlanId}/tag | Get the tags for a packingPlan.
[**updatePackingPlan**](PackingPlanApi.md#updatePackingPlan) | **PUT** /beta/packingPlan | Update a packingPlan
[**updatePackingPlanCustomFields**](PackingPlanApi.md#updatePackingPlanCustomFields) | **PUT** /beta/packingPlan/customFields | Update a packingPlan custom fields


# **addPackingPlan**
> \Infoplus\Infoplus\Model\PackingPlan addPackingPlan($body)

Create a packingPlan

Inserts a new packingPlan using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PackingPlan(); // \Infoplus\Infoplus\Model\PackingPlan | PackingPlan to be inserted.

try {
    $result = $apiInstance->addPackingPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->addPackingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)| PackingPlan to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanAudit**
> addPackingPlanAudit($packing_plan_id, $packing_plan_audit)

Add new audit for a packingPlan

Adds an audit to an existing packingPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to add an audit to
$packing_plan_audit = "packing_plan_audit_example"; // string | The audit to add

try {
    $apiInstance->addPackingPlanAudit($packing_plan_id, $packing_plan_audit);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->addPackingPlanAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to add an audit to |
 **packing_plan_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanFile**
> addPackingPlanFile($packing_plan_id, $file_name)

Attach a file to a packingPlan

Adds a file to an existing packingPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addPackingPlanFile($packing_plan_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->addPackingPlanFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanFileByURL**
> addPackingPlanFileByURL($body, $packing_plan_id)

Attach a file to a packingPlan by URL.

Adds a file to an existing packingPlan by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$packing_plan_id = 56; // int | Id of the packingPlan to add an file to

try {
    $apiInstance->addPackingPlanFileByURL($body, $packing_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->addPackingPlanFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **packing_plan_id** | **int**| Id of the packingPlan to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackingPlanTag**
> addPackingPlanTag($packing_plan_id, $packing_plan_tag)

Add new tags for a packingPlan.

Adds a tag to an existing packingPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to add a tag to
$packing_plan_tag = "packing_plan_tag_example"; // string | The tag to add

try {
    $apiInstance->addPackingPlanTag($packing_plan_id, $packing_plan_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->addPackingPlanTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to add a tag to |
 **packing_plan_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingPlan**
> deletePackingPlan($packing_plan_id)

Delete a packingPlan

Deletes the packingPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to be deleted.

try {
    $apiInstance->deletePackingPlan($packing_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->deletePackingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingPlanFile**
> deletePackingPlanFile($packing_plan_id, $file_id)

Delete a file for a packingPlan.

Deletes an existing packingPlan file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deletePackingPlanFile($packing_plan_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->deletePackingPlanFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackingPlanTag**
> deletePackingPlanTag($packing_plan_id, $packing_plan_tag)

Delete a tag for a packingPlan.

Deletes an existing packingPlan tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to remove tag from
$packing_plan_tag = "packing_plan_tag_example"; // string | The tag to delete

try {
    $apiInstance->deletePackingPlanTag($packing_plan_id, $packing_plan_tag);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->deletePackingPlanTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to remove tag from |
 **packing_plan_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicatePackingPlanById**
> \Infoplus\Infoplus\Model\PackingPlan getDuplicatePackingPlanById($packing_plan_id)

Get a duplicated a packingPlan by id

Returns a duplicated packingPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to be duplicated.

try {
    $result = $apiInstance->getDuplicatePackingPlanById($packing_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->getDuplicatePackingPlanById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanByFilter**
> \Infoplus\Infoplus\Model\PackingPlan[] getPackingPlanByFilter($filter, $page, $limit, $sort)

Search packingPlans by filter

Returns the list of packingPlans that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
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
    $result = $apiInstance->getPackingPlanByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->getPackingPlanByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\PackingPlan[]**](../Model/PackingPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanById**
> \Infoplus\Infoplus\Model\PackingPlan getPackingPlanById($packing_plan_id)

Get a packingPlan by id

Returns the packingPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to be returned.

try {
    $result = $apiInstance->getPackingPlanById($packing_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->getPackingPlanById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanFiles**
> getPackingPlanFiles($packing_plan_id)

Get the files for a packingPlan.

Get all existing packingPlan files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to get files for

try {
    $apiInstance->getPackingPlanFiles($packing_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->getPackingPlanFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackingPlanTags**
> getPackingPlanTags($packing_plan_id)

Get the tags for a packingPlan.

Get all existing packingPlan tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packing_plan_id = 56; // int | Id of the packingPlan to get tags for

try {
    $apiInstance->getPackingPlanTags($packing_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->getPackingPlanTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packing_plan_id** | **int**| Id of the packingPlan to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackingPlan**
> updatePackingPlan($body)

Update a packingPlan

Updates an existing packingPlan using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PackingPlan(); // \Infoplus\Infoplus\Model\PackingPlan | PackingPlan to be updated.

try {
    $apiInstance->updatePackingPlan($body);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->updatePackingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)| PackingPlan to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackingPlanCustomFields**
> updatePackingPlanCustomFields($body)

Update a packingPlan custom fields

Updates an existing packingPlan custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\PackingPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\PackingPlan(); // \Infoplus\Infoplus\Model\PackingPlan | PackingPlan to be updated.

try {
    $apiInstance->updatePackingPlanCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling PackingPlanApi->updatePackingPlanCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\PackingPlan**](../Model/PackingPlan.md)| PackingPlan to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

