# Infoplus\InventoryAdjustmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventoryAdjustmentAudit**](InventoryAdjustmentApi.md#addInventoryAdjustmentAudit) | **PUT** /beta/inventoryAdjustment/{inventoryAdjustmentId}/audit/{inventoryAdjustmentAudit} | Add new audit for an inventoryAdjustment
[**addInventoryAdjustmentTag**](InventoryAdjustmentApi.md#addInventoryAdjustmentTag) | **PUT** /beta/inventoryAdjustment/{inventoryAdjustmentId}/tag/{inventoryAdjustmentTag} | Add new tags for an inventoryAdjustment.
[**deleteInventoryAdjustmentTag**](InventoryAdjustmentApi.md#deleteInventoryAdjustmentTag) | **DELETE** /beta/inventoryAdjustment/{inventoryAdjustmentId}/tag/{inventoryAdjustmentTag} | Delete a tag for an inventoryAdjustment.
[**getDuplicateInventoryAdjustmentById**](InventoryAdjustmentApi.md#getDuplicateInventoryAdjustmentById) | **GET** /beta/inventoryAdjustment/duplicate/{inventoryAdjustmentId} | Get a duplicated an inventoryAdjustment by id
[**getInventoryAdjustmentByFilter**](InventoryAdjustmentApi.md#getInventoryAdjustmentByFilter) | **GET** /beta/inventoryAdjustment/search | Search inventoryAdjustments by filter
[**getInventoryAdjustmentById**](InventoryAdjustmentApi.md#getInventoryAdjustmentById) | **GET** /beta/inventoryAdjustment/{inventoryAdjustmentId} | Get an inventoryAdjustment by id
[**getInventoryAdjustmentTags**](InventoryAdjustmentApi.md#getInventoryAdjustmentTags) | **GET** /beta/inventoryAdjustment/{inventoryAdjustmentId}/tag | Get the tags for an inventoryAdjustment.
[**updateInventoryAdjustmentCustomFields**](InventoryAdjustmentApi.md#updateInventoryAdjustmentCustomFields) | **PUT** /beta/inventoryAdjustment/customFields | Update an inventoryAdjustment custom fields


# **addInventoryAdjustmentAudit**
> addInventoryAdjustmentAudit($inventory_adjustment_id, $inventory_adjustment_audit)

Add new audit for an inventoryAdjustment

Adds an audit to an existing inventoryAdjustment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to add an audit to
$inventory_adjustment_audit = "inventory_adjustment_audit_example"; // string | The audit to add

try { 
    $api_instance->addInventoryAdjustmentAudit($inventory_adjustment_id, $inventory_adjustment_audit);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->addInventoryAdjustmentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to add an audit to | 
 **inventory_adjustment_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addInventoryAdjustmentTag**
> addInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag)

Add new tags for an inventoryAdjustment.

Adds a tag to an existing inventoryAdjustment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to add a tag to
$inventory_adjustment_tag = "inventory_adjustment_tag_example"; // string | The tag to add

try { 
    $api_instance->addInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->addInventoryAdjustmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to add a tag to | 
 **inventory_adjustment_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteInventoryAdjustmentTag**
> deleteInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag)

Delete a tag for an inventoryAdjustment.

Deletes an existing inventoryAdjustment tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to remove tag from
$inventory_adjustment_tag = "inventory_adjustment_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteInventoryAdjustmentTag($inventory_adjustment_id, $inventory_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->deleteInventoryAdjustmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to remove tag from | 
 **inventory_adjustment_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateInventoryAdjustmentById**
> \Infoplus\Model\InventoryAdjustment getDuplicateInventoryAdjustmentById($inventory_adjustment_id)

Get a duplicated an inventoryAdjustment by id

Returns a duplicated inventoryAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to be duplicated.

try { 
    $result = $api_instance->getDuplicateInventoryAdjustmentById($inventory_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getDuplicateInventoryAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to be duplicated. | 

### Return type

[**\Infoplus\Model\InventoryAdjustment**](InventoryAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryAdjustmentByFilter**
> \Infoplus\Model\InventoryAdjustment[] getInventoryAdjustmentByFilter($filter, $page, $limit, $sort)

Search inventoryAdjustments by filter

Returns the list of inventoryAdjustments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInventoryAdjustmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getInventoryAdjustmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InventoryAdjustment[]**](InventoryAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryAdjustmentById**
> \Infoplus\Model\InventoryAdjustment getInventoryAdjustmentById($inventory_adjustment_id)

Get an inventoryAdjustment by id

Returns the inventoryAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to be returned.

try { 
    $result = $api_instance->getInventoryAdjustmentById($inventory_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getInventoryAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to be returned. | 

### Return type

[**\Infoplus\Model\InventoryAdjustment**](InventoryAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryAdjustmentTags**
> getInventoryAdjustmentTags($inventory_adjustment_id)

Get the tags for an inventoryAdjustment.

Get all existing inventoryAdjustment tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$inventory_adjustment_id = 56; // int | Id of the inventoryAdjustment to get tags for

try { 
    $api_instance->getInventoryAdjustmentTags($inventory_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->getInventoryAdjustmentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_adjustment_id** | **int**| Id of the inventoryAdjustment to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateInventoryAdjustmentCustomFields**
> updateInventoryAdjustmentCustomFields($body)

Update an inventoryAdjustment custom fields

Updates an existing inventoryAdjustment custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryAdjustmentApi();
$body = new \Infoplus\Model\InventoryAdjustment(); // \Infoplus\Model\InventoryAdjustment | InventoryAdjustment to be updated.

try { 
    $api_instance->updateInventoryAdjustmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryAdjustmentApi->updateInventoryAdjustmentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\InventoryAdjustment**](\Infoplus\Model\InventoryAdjustment.md)| InventoryAdjustment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

