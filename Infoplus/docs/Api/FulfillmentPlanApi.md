# Infoplus\FulfillmentPlanApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFulfillmentPlan**](FulfillmentPlanApi.md#addFulfillmentPlan) | **POST** /beta/fulfillmentPlan | Create a fulfillmentPlan
[**addFulfillmentPlanAudit**](FulfillmentPlanApi.md#addFulfillmentPlanAudit) | **PUT** /beta/fulfillmentPlan/{fulfillmentPlanId}/audit/{fulfillmentPlanAudit} | Add new audit for a fulfillmentPlan
[**addFulfillmentPlanFile**](FulfillmentPlanApi.md#addFulfillmentPlanFile) | **POST** /beta/fulfillmentPlan/{fulfillmentPlanId}/file/{fileName} | Attach a file to a fulfillmentPlan
[**addFulfillmentPlanFileByURL**](FulfillmentPlanApi.md#addFulfillmentPlanFileByURL) | **POST** /beta/fulfillmentPlan/{fulfillmentPlanId}/file | Attach a file to a fulfillmentPlan by URL.
[**addFulfillmentPlanTag**](FulfillmentPlanApi.md#addFulfillmentPlanTag) | **PUT** /beta/fulfillmentPlan/{fulfillmentPlanId}/tag/{fulfillmentPlanTag} | Add new tags for a fulfillmentPlan.
[**deleteFulfillmentPlan**](FulfillmentPlanApi.md#deleteFulfillmentPlan) | **DELETE** /beta/fulfillmentPlan/{fulfillmentPlanId} | Delete a fulfillmentPlan
[**deleteFulfillmentPlanFile**](FulfillmentPlanApi.md#deleteFulfillmentPlanFile) | **DELETE** /beta/fulfillmentPlan/{fulfillmentPlanId}/file/{fileId} | Delete a file for a fulfillmentPlan.
[**deleteFulfillmentPlanTag**](FulfillmentPlanApi.md#deleteFulfillmentPlanTag) | **DELETE** /beta/fulfillmentPlan/{fulfillmentPlanId}/tag/{fulfillmentPlanTag} | Delete a tag for a fulfillmentPlan.
[**getDuplicateFulfillmentPlanById**](FulfillmentPlanApi.md#getDuplicateFulfillmentPlanById) | **GET** /beta/fulfillmentPlan/duplicate/{fulfillmentPlanId} | Get a duplicated a fulfillmentPlan by id
[**getFulfillmentPlanByFilter**](FulfillmentPlanApi.md#getFulfillmentPlanByFilter) | **GET** /beta/fulfillmentPlan/search | Search fulfillmentPlans by filter
[**getFulfillmentPlanById**](FulfillmentPlanApi.md#getFulfillmentPlanById) | **GET** /beta/fulfillmentPlan/{fulfillmentPlanId} | Get a fulfillmentPlan by id
[**getFulfillmentPlanFiles**](FulfillmentPlanApi.md#getFulfillmentPlanFiles) | **GET** /beta/fulfillmentPlan/{fulfillmentPlanId}/file | Get the files for a fulfillmentPlan.
[**getFulfillmentPlanTags**](FulfillmentPlanApi.md#getFulfillmentPlanTags) | **GET** /beta/fulfillmentPlan/{fulfillmentPlanId}/tag | Get the tags for a fulfillmentPlan.
[**updateFulfillmentPlan**](FulfillmentPlanApi.md#updateFulfillmentPlan) | **PUT** /beta/fulfillmentPlan | Update a fulfillmentPlan
[**updateFulfillmentPlanCustomFields**](FulfillmentPlanApi.md#updateFulfillmentPlanCustomFields) | **PUT** /beta/fulfillmentPlan/customFields | Update a fulfillmentPlan custom fields


# **addFulfillmentPlan**
> \Infoplus\Infoplus\Model\FulfillmentPlan addFulfillmentPlan($body)

Create a fulfillmentPlan

Inserts a new fulfillmentPlan using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FulfillmentPlan(); // \Infoplus\Infoplus\Model\FulfillmentPlan | FulfillmentPlan to be inserted.

try {
    $result = $apiInstance->addFulfillmentPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->addFulfillmentPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)| FulfillmentPlan to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentPlanAudit**
> addFulfillmentPlanAudit($fulfillment_plan_id, $fulfillment_plan_audit)

Add new audit for a fulfillmentPlan

Adds an audit to an existing fulfillmentPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to add an audit to
$fulfillment_plan_audit = "fulfillment_plan_audit_example"; // string | The audit to add

try {
    $apiInstance->addFulfillmentPlanAudit($fulfillment_plan_id, $fulfillment_plan_audit);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->addFulfillmentPlanAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to add an audit to |
 **fulfillment_plan_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentPlanFile**
> addFulfillmentPlanFile($fulfillment_plan_id, $file_name)

Attach a file to a fulfillmentPlan

Adds a file to an existing fulfillmentPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addFulfillmentPlanFile($fulfillment_plan_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->addFulfillmentPlanFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentPlanFileByURL**
> addFulfillmentPlanFileByURL($body, $fulfillment_plan_id)

Attach a file to a fulfillmentPlan by URL.

Adds a file to an existing fulfillmentPlan by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to add an file to

try {
    $apiInstance->addFulfillmentPlanFileByURL($body, $fulfillment_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->addFulfillmentPlanFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFulfillmentPlanTag**
> addFulfillmentPlanTag($fulfillment_plan_id, $fulfillment_plan_tag)

Add new tags for a fulfillmentPlan.

Adds a tag to an existing fulfillmentPlan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to add a tag to
$fulfillment_plan_tag = "fulfillment_plan_tag_example"; // string | The tag to add

try {
    $apiInstance->addFulfillmentPlanTag($fulfillment_plan_id, $fulfillment_plan_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->addFulfillmentPlanTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to add a tag to |
 **fulfillment_plan_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentPlan**
> deleteFulfillmentPlan($fulfillment_plan_id)

Delete a fulfillmentPlan

Deletes the fulfillmentPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to be deleted.

try {
    $apiInstance->deleteFulfillmentPlan($fulfillment_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->deleteFulfillmentPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentPlanFile**
> deleteFulfillmentPlanFile($fulfillment_plan_id, $file_id)

Delete a file for a fulfillmentPlan.

Deletes an existing fulfillmentPlan file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteFulfillmentPlanFile($fulfillment_plan_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->deleteFulfillmentPlanFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentPlanTag**
> deleteFulfillmentPlanTag($fulfillment_plan_id, $fulfillment_plan_tag)

Delete a tag for a fulfillmentPlan.

Deletes an existing fulfillmentPlan tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to remove tag from
$fulfillment_plan_tag = "fulfillment_plan_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteFulfillmentPlanTag($fulfillment_plan_id, $fulfillment_plan_tag);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->deleteFulfillmentPlanTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to remove tag from |
 **fulfillment_plan_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateFulfillmentPlanById**
> \Infoplus\Infoplus\Model\FulfillmentPlan getDuplicateFulfillmentPlanById($fulfillment_plan_id)

Get a duplicated a fulfillmentPlan by id

Returns a duplicated fulfillmentPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to be duplicated.

try {
    $result = $apiInstance->getDuplicateFulfillmentPlanById($fulfillment_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->getDuplicateFulfillmentPlanById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPlanByFilter**
> \Infoplus\Infoplus\Model\FulfillmentPlan[] getFulfillmentPlanByFilter($filter, $page, $limit, $sort)

Search fulfillmentPlans by filter

Returns the list of fulfillmentPlans that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
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
    $result = $apiInstance->getFulfillmentPlanByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->getFulfillmentPlanByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\FulfillmentPlan[]**](../Model/FulfillmentPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPlanById**
> \Infoplus\Infoplus\Model\FulfillmentPlan getFulfillmentPlanById($fulfillment_plan_id)

Get a fulfillmentPlan by id

Returns the fulfillmentPlan identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to be returned.

try {
    $result = $apiInstance->getFulfillmentPlanById($fulfillment_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->getFulfillmentPlanById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPlanFiles**
> getFulfillmentPlanFiles($fulfillment_plan_id)

Get the files for a fulfillmentPlan.

Get all existing fulfillmentPlan files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to get files for

try {
    $apiInstance->getFulfillmentPlanFiles($fulfillment_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->getFulfillmentPlanFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPlanTags**
> getFulfillmentPlanTags($fulfillment_plan_id)

Get the tags for a fulfillmentPlan.

Get all existing fulfillmentPlan tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_plan_id = 56; // int | Id of the fulfillmentPlan to get tags for

try {
    $apiInstance->getFulfillmentPlanTags($fulfillment_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->getFulfillmentPlanTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_plan_id** | **int**| Id of the fulfillmentPlan to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentPlan**
> updateFulfillmentPlan($body)

Update a fulfillmentPlan

Updates an existing fulfillmentPlan using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FulfillmentPlan(); // \Infoplus\Infoplus\Model\FulfillmentPlan | FulfillmentPlan to be updated.

try {
    $apiInstance->updateFulfillmentPlan($body);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->updateFulfillmentPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)| FulfillmentPlan to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentPlanCustomFields**
> updateFulfillmentPlanCustomFields($body)

Update a fulfillmentPlan custom fields

Updates an existing fulfillmentPlan custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\FulfillmentPlan(); // \Infoplus\Infoplus\Model\FulfillmentPlan | FulfillmentPlan to be updated.

try {
    $apiInstance->updateFulfillmentPlanCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPlanApi->updateFulfillmentPlanCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\FulfillmentPlan**](../Model/FulfillmentPlan.md)| FulfillmentPlan to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

