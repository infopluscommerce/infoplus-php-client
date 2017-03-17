# Infoplus\ReplenishmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReplenishmentAudit**](ReplenishmentApi.md#addReplenishmentAudit) | **PUT** /beta/replenishment/{replenishmentId}/audit/{replenishmentAudit} | Add new audit for a replenishment
[**addReplenishmentTag**](ReplenishmentApi.md#addReplenishmentTag) | **PUT** /beta/replenishment/{replenishmentId}/tag/{replenishmentTag} | Add new tags for a replenishment.
[**deleteReplenishmentTag**](ReplenishmentApi.md#deleteReplenishmentTag) | **DELETE** /beta/replenishment/{replenishmentId}/tag/{replenishmentTag} | Delete a tag for a replenishment.
[**getDuplicateReplenishmentById**](ReplenishmentApi.md#getDuplicateReplenishmentById) | **GET** /beta/replenishment/duplicate/{replenishmentId} | Get a duplicated a replenishment by id
[**getReplenishmentByFilter**](ReplenishmentApi.md#getReplenishmentByFilter) | **GET** /beta/replenishment/search | Search replenishments by filter
[**getReplenishmentById**](ReplenishmentApi.md#getReplenishmentById) | **GET** /beta/replenishment/{replenishmentId} | Get a replenishment by id
[**getReplenishmentTags**](ReplenishmentApi.md#getReplenishmentTags) | **GET** /beta/replenishment/{replenishmentId}/tag | Get the tags for a replenishment.
[**updateReplenishmentCustomFields**](ReplenishmentApi.md#updateReplenishmentCustomFields) | **PUT** /beta/replenishment/customFields | Update a replenishment custom fields


# **addReplenishmentAudit**
> addReplenishmentAudit($replenishment_id, $replenishment_audit)

Add new audit for a replenishment

Adds an audit to an existing replenishment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to add an audit to
$replenishment_audit = "replenishment_audit_example"; // string | The audit to add

try { 
    $api_instance->addReplenishmentAudit($replenishment_id, $replenishment_audit);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to add an audit to | 
 **replenishment_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addReplenishmentTag**
> addReplenishmentTag($replenishment_id, $replenishment_tag)

Add new tags for a replenishment.

Adds a tag to an existing replenishment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to add a tag to
$replenishment_tag = "replenishment_tag_example"; // string | The tag to add

try { 
    $api_instance->addReplenishmentTag($replenishment_id, $replenishment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->addReplenishmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to add a tag to | 
 **replenishment_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteReplenishmentTag**
> deleteReplenishmentTag($replenishment_id, $replenishment_tag)

Delete a tag for a replenishment.

Deletes an existing replenishment tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to remove tag from
$replenishment_tag = "replenishment_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteReplenishmentTag($replenishment_id, $replenishment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->deleteReplenishmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to remove tag from | 
 **replenishment_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateReplenishmentById**
> \Infoplus\Model\Replenishment getDuplicateReplenishmentById($replenishment_id)

Get a duplicated a replenishment by id

Returns a duplicated replenishment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to be duplicated.

try { 
    $result = $api_instance->getDuplicateReplenishmentById($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getDuplicateReplenishmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to be duplicated. | 

### Return type

[**\Infoplus\Model\Replenishment**](Replenishment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentByFilter**
> \Infoplus\Model\Replenishment[] getReplenishmentByFilter($filter, $page, $limit, $sort)

Search replenishments by filter

Returns the list of replenishments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getReplenishmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Replenishment[]**](Replenishment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentById**
> \Infoplus\Model\Replenishment getReplenishmentById($replenishment_id)

Get a replenishment by id

Returns the replenishment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to be returned.

try { 
    $result = $api_instance->getReplenishmentById($replenishment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to be returned. | 

### Return type

[**\Infoplus\Model\Replenishment**](Replenishment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentTags**
> getReplenishmentTags($replenishment_id)

Get the tags for a replenishment.

Get all existing replenishment tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$replenishment_id = 56; // int | Id of the replenishment to get tags for

try { 
    $api_instance->getReplenishmentTags($replenishment_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->getReplenishmentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_id** | **int**| Id of the replenishment to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReplenishmentCustomFields**
> updateReplenishmentCustomFields($body)

Update a replenishment custom fields

Updates an existing replenishment custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentApi();
$body = new \Infoplus\Model\Replenishment(); // \Infoplus\Model\Replenishment | Replenishment to be updated.

try { 
    $api_instance->updateReplenishmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentApi->updateReplenishmentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Replenishment**](\Infoplus\Model\Replenishment.md)| Replenishment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

