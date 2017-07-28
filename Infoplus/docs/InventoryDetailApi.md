# Infoplus\InventoryDetailApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventoryDetailAudit**](InventoryDetailApi.md#addInventoryDetailAudit) | **PUT** /beta/inventoryDetail/{inventoryDetailId}/audit/{inventoryDetailAudit} | Add new audit for an inventoryDetail
[**addInventoryDetailTag**](InventoryDetailApi.md#addInventoryDetailTag) | **PUT** /beta/inventoryDetail/{inventoryDetailId}/tag/{inventoryDetailTag} | Add new tags for an inventoryDetail.
[**deleteInventoryDetailTag**](InventoryDetailApi.md#deleteInventoryDetailTag) | **DELETE** /beta/inventoryDetail/{inventoryDetailId}/tag/{inventoryDetailTag} | Delete a tag for an inventoryDetail.
[**getDuplicateInventoryDetailById**](InventoryDetailApi.md#getDuplicateInventoryDetailById) | **GET** /beta/inventoryDetail/duplicate/{inventoryDetailId} | Get a duplicated an inventoryDetail by id
[**getInventoryDetailByFilter**](InventoryDetailApi.md#getInventoryDetailByFilter) | **GET** /beta/inventoryDetail/search | Search inventoryDetails by filter
[**getInventoryDetailById**](InventoryDetailApi.md#getInventoryDetailById) | **GET** /beta/inventoryDetail/{inventoryDetailId} | Get an inventoryDetail by id
[**getInventoryDetailTags**](InventoryDetailApi.md#getInventoryDetailTags) | **GET** /beta/inventoryDetail/{inventoryDetailId}/tag | Get the tags for an inventoryDetail.
[**updateInventoryDetailCustomFields**](InventoryDetailApi.md#updateInventoryDetailCustomFields) | **PUT** /beta/inventoryDetail/customFields | Update an inventoryDetail custom fields


# **addInventoryDetailAudit**
> addInventoryDetailAudit($inventory_detail_id, $inventory_detail_audit)

Add new audit for an inventoryDetail

Adds an audit to an existing inventoryDetail.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to add an audit to
$inventory_detail_audit = "inventory_detail_audit_example"; // string | The audit to add

try { 
    $api_instance->addInventoryDetailAudit($inventory_detail_id, $inventory_detail_audit);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->addInventoryDetailAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to add an audit to | 
 **inventory_detail_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addInventoryDetailTag**
> addInventoryDetailTag($inventory_detail_id, $inventory_detail_tag)

Add new tags for an inventoryDetail.

Adds a tag to an existing inventoryDetail.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to add a tag to
$inventory_detail_tag = "inventory_detail_tag_example"; // string | The tag to add

try { 
    $api_instance->addInventoryDetailTag($inventory_detail_id, $inventory_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->addInventoryDetailTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to add a tag to | 
 **inventory_detail_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteInventoryDetailTag**
> deleteInventoryDetailTag($inventory_detail_id, $inventory_detail_tag)

Delete a tag for an inventoryDetail.

Deletes an existing inventoryDetail tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to remove tag from
$inventory_detail_tag = "inventory_detail_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteInventoryDetailTag($inventory_detail_id, $inventory_detail_tag);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->deleteInventoryDetailTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to remove tag from | 
 **inventory_detail_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateInventoryDetailById**
> \Infoplus\Model\InventoryDetail getDuplicateInventoryDetailById($inventory_detail_id)

Get a duplicated an inventoryDetail by id

Returns a duplicated inventoryDetail identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to be duplicated.

try { 
    $result = $api_instance->getDuplicateInventoryDetailById($inventory_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getDuplicateInventoryDetailById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to be duplicated. | 

### Return type

[**\Infoplus\Model\InventoryDetail**](InventoryDetail.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryDetailByFilter**
> \Infoplus\Model\InventoryDetail[] getInventoryDetailByFilter($filter, $page, $limit, $sort)

Search inventoryDetails by filter

Returns the list of inventoryDetails that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInventoryDetailByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getInventoryDetailByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InventoryDetail[]**](InventoryDetail.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryDetailById**
> \Infoplus\Model\InventoryDetail getInventoryDetailById($inventory_detail_id)

Get an inventoryDetail by id

Returns the inventoryDetail identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to be returned.

try { 
    $result = $api_instance->getInventoryDetailById($inventory_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getInventoryDetailById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to be returned. | 

### Return type

[**\Infoplus\Model\InventoryDetail**](InventoryDetail.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInventoryDetailTags**
> getInventoryDetailTags($inventory_detail_id)

Get the tags for an inventoryDetail.

Get all existing inventoryDetail tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$inventory_detail_id = 56; // int | Id of the inventoryDetail to get tags for

try { 
    $api_instance->getInventoryDetailTags($inventory_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->getInventoryDetailTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_detail_id** | **int**| Id of the inventoryDetail to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateInventoryDetailCustomFields**
> updateInventoryDetailCustomFields($body)

Update an inventoryDetail custom fields

Updates an existing inventoryDetail custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InventoryDetailApi();
$body = new \Infoplus\Model\InventoryDetail(); // \Infoplus\Model\InventoryDetail | InventoryDetail to be updated.

try { 
    $api_instance->updateInventoryDetailCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDetailApi->updateInventoryDetailCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\InventoryDetail**](\Infoplus\Model\InventoryDetail.md)| InventoryDetail to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

