# Infoplus\InventorySnapshotApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventorySnapshotAudit**](InventorySnapshotApi.md#addInventorySnapshotAudit) | **PUT** /beta/inventorySnapshot/{inventorySnapshotId}/audit/{inventorySnapshotAudit} | Add new audit for an inventorySnapshot
[**addInventorySnapshotTag**](InventorySnapshotApi.md#addInventorySnapshotTag) | **PUT** /beta/inventorySnapshot/{inventorySnapshotId}/tag/{inventorySnapshotTag} | Add new tags for an inventorySnapshot.
[**deleteInventorySnapshotTag**](InventorySnapshotApi.md#deleteInventorySnapshotTag) | **DELETE** /beta/inventorySnapshot/{inventorySnapshotId}/tag/{inventorySnapshotTag} | Delete a tag for an inventorySnapshot.
[**getDuplicateInventorySnapshotById**](InventorySnapshotApi.md#getDuplicateInventorySnapshotById) | **GET** /beta/inventorySnapshot/duplicate/{inventorySnapshotId} | Get a duplicated an inventorySnapshot by id
[**getInventorySnapshotByFilter**](InventorySnapshotApi.md#getInventorySnapshotByFilter) | **GET** /beta/inventorySnapshot/search | Search inventorySnapshots by filter
[**getInventorySnapshotById**](InventorySnapshotApi.md#getInventorySnapshotById) | **GET** /beta/inventorySnapshot/{inventorySnapshotId} | Get an inventorySnapshot by id
[**getInventorySnapshotTags**](InventorySnapshotApi.md#getInventorySnapshotTags) | **GET** /beta/inventorySnapshot/{inventorySnapshotId}/tag | Get the tags for an inventorySnapshot.


# **addInventorySnapshotAudit**
> addInventorySnapshotAudit($inventory_snapshot_id, $inventory_snapshot_audit)

Add new audit for an inventorySnapshot

Adds an audit to an existing inventorySnapshot.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to add an audit to
$inventory_snapshot_audit = "inventory_snapshot_audit_example"; // string | The audit to add

try { 
    $api_instance->addInventorySnapshotAudit($inventory_snapshot_id, $inventory_snapshot_audit);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->addInventorySnapshotAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to add an audit to | 
 **inventory_snapshot_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addInventorySnapshotTag**
> addInventorySnapshotTag($inventory_snapshot_id, $inventory_snapshot_tag)

Add new tags for an inventorySnapshot.

Adds a tag to an existing inventorySnapshot.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to add a tag to
$inventory_snapshot_tag = "inventory_snapshot_tag_example"; // string | The tag to add

try { 
    $api_instance->addInventorySnapshotTag($inventory_snapshot_id, $inventory_snapshot_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->addInventorySnapshotTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to add a tag to | 
 **inventory_snapshot_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteInventorySnapshotTag**
> deleteInventorySnapshotTag($inventory_snapshot_id, $inventory_snapshot_tag)

Delete a tag for an inventorySnapshot.

Deletes an existing inventorySnapshot tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to remove tag from
$inventory_snapshot_tag = "inventory_snapshot_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteInventorySnapshotTag($inventory_snapshot_id, $inventory_snapshot_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->deleteInventorySnapshotTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to remove tag from | 
 **inventory_snapshot_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateInventorySnapshotById**
> \Infoplus\Model\InventorySnapshot getDuplicateInventorySnapshotById($inventory_snapshot_id)

Get a duplicated an inventorySnapshot by id

Returns a duplicated inventorySnapshot identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to be duplicated.

try { 
    $result = $api_instance->getDuplicateInventorySnapshotById($inventory_snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->getDuplicateInventorySnapshotById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to be duplicated. | 

### Return type

[**\Infoplus\Model\InventorySnapshot**](InventorySnapshot.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventorySnapshotByFilter**
> \Infoplus\Model\InventorySnapshot[] getInventorySnapshotByFilter($filter, $page, $limit, $sort)

Search inventorySnapshots by filter

Returns the list of inventorySnapshots that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInventorySnapshotByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->getInventorySnapshotByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InventorySnapshot[]**](InventorySnapshot.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventorySnapshotById**
> \Infoplus\Model\InventorySnapshot getInventorySnapshotById($inventory_snapshot_id)

Get an inventorySnapshot by id

Returns the inventorySnapshot identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to be returned.

try { 
    $result = $api_instance->getInventorySnapshotById($inventory_snapshot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->getInventorySnapshotById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to be returned. | 

### Return type

[**\Infoplus\Model\InventorySnapshot**](InventorySnapshot.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventorySnapshotTags**
> getInventorySnapshotTags($inventory_snapshot_id)

Get the tags for an inventorySnapshot.

Get all existing inventorySnapshot tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventorySnapshotApi();
$inventory_snapshot_id = 56; // int | Id of the inventorySnapshot to get tags for

try { 
    $api_instance->getInventorySnapshotTags($inventory_snapshot_id);
} catch (Exception $e) {
    echo 'Exception when calling InventorySnapshotApi->getInventorySnapshotTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_snapshot_id** | **int**| Id of the inventorySnapshot to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

