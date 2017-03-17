# Infoplus\WarehouseDocumentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWarehouseDocumentAudit**](WarehouseDocumentApi.md#addWarehouseDocumentAudit) | **PUT** /beta/warehouseDocument/{warehouseDocumentId}/audit/{warehouseDocumentAudit} | Add new audit for a warehouseDocument
[**addWarehouseDocumentTag**](WarehouseDocumentApi.md#addWarehouseDocumentTag) | **PUT** /beta/warehouseDocument/{warehouseDocumentId}/tag/{warehouseDocumentTag} | Add new tags for a warehouseDocument.
[**deleteWarehouseDocumentTag**](WarehouseDocumentApi.md#deleteWarehouseDocumentTag) | **DELETE** /beta/warehouseDocument/{warehouseDocumentId}/tag/{warehouseDocumentTag} | Delete a tag for a warehouseDocument.
[**getDuplicateWarehouseDocumentById**](WarehouseDocumentApi.md#getDuplicateWarehouseDocumentById) | **GET** /beta/warehouseDocument/duplicate/{warehouseDocumentId} | Get a duplicated a warehouseDocument by id
[**getWarehouseDocumentByFilter**](WarehouseDocumentApi.md#getWarehouseDocumentByFilter) | **GET** /beta/warehouseDocument/search | Search warehouseDocuments by filter
[**getWarehouseDocumentById**](WarehouseDocumentApi.md#getWarehouseDocumentById) | **GET** /beta/warehouseDocument/{warehouseDocumentId} | Get a warehouseDocument by id
[**getWarehouseDocumentTags**](WarehouseDocumentApi.md#getWarehouseDocumentTags) | **GET** /beta/warehouseDocument/{warehouseDocumentId}/tag | Get the tags for a warehouseDocument.
[**updateWarehouseDocumentCustomFields**](WarehouseDocumentApi.md#updateWarehouseDocumentCustomFields) | **PUT** /beta/warehouseDocument/customFields | Update a warehouseDocument custom fields


# **addWarehouseDocumentAudit**
> addWarehouseDocumentAudit($warehouse_document_id, $warehouse_document_audit)

Add new audit for a warehouseDocument

Adds an audit to an existing warehouseDocument.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to add an audit to
$warehouse_document_audit = "warehouse_document_audit_example"; // string | The audit to add

try { 
    $api_instance->addWarehouseDocumentAudit($warehouse_document_id, $warehouse_document_audit);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->addWarehouseDocumentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to add an audit to | 
 **warehouse_document_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addWarehouseDocumentTag**
> addWarehouseDocumentTag($warehouse_document_id, $warehouse_document_tag)

Add new tags for a warehouseDocument.

Adds a tag to an existing warehouseDocument.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to add a tag to
$warehouse_document_tag = "warehouse_document_tag_example"; // string | The tag to add

try { 
    $api_instance->addWarehouseDocumentTag($warehouse_document_id, $warehouse_document_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->addWarehouseDocumentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to add a tag to | 
 **warehouse_document_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteWarehouseDocumentTag**
> deleteWarehouseDocumentTag($warehouse_document_id, $warehouse_document_tag)

Delete a tag for a warehouseDocument.

Deletes an existing warehouseDocument tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to remove tag from
$warehouse_document_tag = "warehouse_document_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteWarehouseDocumentTag($warehouse_document_id, $warehouse_document_tag);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->deleteWarehouseDocumentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to remove tag from | 
 **warehouse_document_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateWarehouseDocumentById**
> \Infoplus\Model\WarehouseDocument getDuplicateWarehouseDocumentById($warehouse_document_id)

Get a duplicated a warehouseDocument by id

Returns a duplicated warehouseDocument identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to be duplicated.

try { 
    $result = $api_instance->getDuplicateWarehouseDocumentById($warehouse_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getDuplicateWarehouseDocumentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to be duplicated. | 

### Return type

[**\Infoplus\Model\WarehouseDocument**](WarehouseDocument.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWarehouseDocumentByFilter**
> \Infoplus\Model\WarehouseDocument[] getWarehouseDocumentByFilter($filter, $page, $limit, $sort)

Search warehouseDocuments by filter

Returns the list of warehouseDocuments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getWarehouseDocumentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getWarehouseDocumentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\WarehouseDocument[]**](WarehouseDocument.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWarehouseDocumentById**
> \Infoplus\Model\WarehouseDocument getWarehouseDocumentById($warehouse_document_id)

Get a warehouseDocument by id

Returns the warehouseDocument identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to be returned.

try { 
    $result = $api_instance->getWarehouseDocumentById($warehouse_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getWarehouseDocumentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to be returned. | 

### Return type

[**\Infoplus\Model\WarehouseDocument**](WarehouseDocument.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getWarehouseDocumentTags**
> getWarehouseDocumentTags($warehouse_document_id)

Get the tags for a warehouseDocument.

Get all existing warehouseDocument tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$warehouse_document_id = 56; // int | Id of the warehouseDocument to get tags for

try { 
    $api_instance->getWarehouseDocumentTags($warehouse_document_id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->getWarehouseDocumentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_document_id** | **int**| Id of the warehouseDocument to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateWarehouseDocumentCustomFields**
> updateWarehouseDocumentCustomFields($body)

Update a warehouseDocument custom fields

Updates an existing warehouseDocument custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\WarehouseDocumentApi();
$body = new \Infoplus\Model\WarehouseDocument(); // \Infoplus\Model\WarehouseDocument | WarehouseDocument to be updated.

try { 
    $api_instance->updateWarehouseDocumentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseDocumentApi->updateWarehouseDocumentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\WarehouseDocument**](\Infoplus\Model\WarehouseDocument.md)| WarehouseDocument to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

