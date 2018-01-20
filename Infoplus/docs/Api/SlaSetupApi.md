# Infoplus\SlaSetupApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSlaSetupAudit**](SlaSetupApi.md#addSlaSetupAudit) | **PUT** /beta/slaSetup/{slaSetupId}/audit/{slaSetupAudit} | Add new audit for a slaSetup
[**addSlaSetupTag**](SlaSetupApi.md#addSlaSetupTag) | **PUT** /beta/slaSetup/{slaSetupId}/tag/{slaSetupTag} | Add new tags for a slaSetup.
[**deleteSlaSetupTag**](SlaSetupApi.md#deleteSlaSetupTag) | **DELETE** /beta/slaSetup/{slaSetupId}/tag/{slaSetupTag} | Delete a tag for a slaSetup.
[**getDuplicateSlaSetupById**](SlaSetupApi.md#getDuplicateSlaSetupById) | **GET** /beta/slaSetup/duplicate/{slaSetupId} | Get a duplicated a slaSetup by id
[**getSlaSetupByFilter**](SlaSetupApi.md#getSlaSetupByFilter) | **GET** /beta/slaSetup/search | Search slaSetups by filter
[**getSlaSetupById**](SlaSetupApi.md#getSlaSetupById) | **GET** /beta/slaSetup/{slaSetupId} | Get a slaSetup by id
[**getSlaSetupTags**](SlaSetupApi.md#getSlaSetupTags) | **GET** /beta/slaSetup/{slaSetupId}/tag | Get the tags for a slaSetup.


# **addSlaSetupAudit**
> addSlaSetupAudit($sla_setup_id, $sla_setup_audit)

Add new audit for a slaSetup

Adds an audit to an existing slaSetup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to add an audit to
$sla_setup_audit = "sla_setup_audit_example"; // string | The audit to add

try {
    $apiInstance->addSlaSetupAudit($sla_setup_id, $sla_setup_audit);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->addSlaSetupAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to add an audit to |
 **sla_setup_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSlaSetupTag**
> addSlaSetupTag($sla_setup_id, $sla_setup_tag)

Add new tags for a slaSetup.

Adds a tag to an existing slaSetup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to add a tag to
$sla_setup_tag = "sla_setup_tag_example"; // string | The tag to add

try {
    $apiInstance->addSlaSetupTag($sla_setup_id, $sla_setup_tag);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->addSlaSetupTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to add a tag to |
 **sla_setup_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSlaSetupTag**
> deleteSlaSetupTag($sla_setup_id, $sla_setup_tag)

Delete a tag for a slaSetup.

Deletes an existing slaSetup tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to remove tag from
$sla_setup_tag = "sla_setup_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteSlaSetupTag($sla_setup_id, $sla_setup_tag);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->deleteSlaSetupTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to remove tag from |
 **sla_setup_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateSlaSetupById**
> \Infoplus\Infoplus\Model\SlaSetup getDuplicateSlaSetupById($sla_setup_id)

Get a duplicated a slaSetup by id

Returns a duplicated slaSetup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to be duplicated.

try {
    $result = $apiInstance->getDuplicateSlaSetupById($sla_setup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->getDuplicateSlaSetupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\SlaSetup**](../Model/SlaSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlaSetupByFilter**
> \Infoplus\Infoplus\Model\SlaSetup[] getSlaSetupByFilter($filter, $page, $limit, $sort)

Search slaSetups by filter

Returns the list of slaSetups that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
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
    $result = $apiInstance->getSlaSetupByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->getSlaSetupByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\SlaSetup[]**](../Model/SlaSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlaSetupById**
> \Infoplus\Infoplus\Model\SlaSetup getSlaSetupById($sla_setup_id)

Get a slaSetup by id

Returns the slaSetup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to be returned.

try {
    $result = $apiInstance->getSlaSetupById($sla_setup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->getSlaSetupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\SlaSetup**](../Model/SlaSetup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlaSetupTags**
> getSlaSetupTags($sla_setup_id)

Get the tags for a slaSetup.

Get all existing slaSetup tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\SlaSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sla_setup_id = 56; // int | Id of the slaSetup to get tags for

try {
    $apiInstance->getSlaSetupTags($sla_setup_id);
} catch (Exception $e) {
    echo 'Exception when calling SlaSetupApi->getSlaSetupTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sla_setup_id** | **int**| Id of the slaSetup to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

