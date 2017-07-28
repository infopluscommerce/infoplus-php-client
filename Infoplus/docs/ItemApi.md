# Infoplus\ItemApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItem**](ItemApi.md#addItem) | **POST** /beta/item | Create an item
[**addItemAudit**](ItemApi.md#addItemAudit) | **PUT** /beta/item/{itemId}/audit/{itemAudit} | Add new audit for an item
[**addItemTag**](ItemApi.md#addItemTag) | **PUT** /beta/item/{itemId}/tag/{itemTag} | Add new tags for an item.
[**deleteItem**](ItemApi.md#deleteItem) | **DELETE** /beta/item/{itemId} | Delete an item
[**deleteItemTag**](ItemApi.md#deleteItemTag) | **DELETE** /beta/item/{itemId}/tag/{itemTag} | Delete a tag for an item.
[**getBySKU**](ItemApi.md#getBySKU) | **GET** /beta/item/getBySKU | Get an item by SKU
[**getDuplicateItemById**](ItemApi.md#getDuplicateItemById) | **GET** /beta/item/duplicate/{itemId} | Get a duplicated an item by id
[**getItemByFilter**](ItemApi.md#getItemByFilter) | **GET** /beta/item/search | Search items by filter
[**getItemById**](ItemApi.md#getItemById) | **GET** /beta/item/{itemId} | Get an item by id
[**getItemTags**](ItemApi.md#getItemTags) | **GET** /beta/item/{itemId}/tag | Get the tags for an item.
[**updateItem**](ItemApi.md#updateItem) | **PUT** /beta/item | Update an item
[**updateItemCustomFields**](ItemApi.md#updateItemCustomFields) | **PUT** /beta/item/customFields | Update an item custom fields


# **addItem**
> \Infoplus\Model\Item addItem($body)

Create an item

Inserts a new item using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$body = new \Infoplus\Model\Item(); // \Infoplus\Model\Item | Item to be inserted.

try { 
    $result = $api_instance->addItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->addItem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Item**](\Infoplus\Model\Item.md)| Item to be inserted. | 

### Return type

[**\Infoplus\Model\Item**](Item.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemAudit**
> addItemAudit($item_id, $item_audit)

Add new audit for an item

Adds an audit to an existing item.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to add an audit to
$item_audit = "item_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemAudit($item_id, $item_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->addItemAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to add an audit to | 
 **item_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemTag**
> addItemTag($item_id, $item_tag)

Add new tags for an item.

Adds a tag to an existing item.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to add a tag to
$item_tag = "item_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemTag($item_id, $item_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->addItemTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to add a tag to | 
 **item_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItem**
> deleteItem($item_id)

Delete an item

Deletes the item identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to be deleted.

try { 
    $api_instance->deleteItem($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteItem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemTag**
> deleteItemTag($item_id, $item_tag)

Delete a tag for an item.

Deletes an existing item tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to remove tag from
$item_tag = "item_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemTag($item_id, $item_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteItemTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to remove tag from | 
 **item_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBySKU**
> \Infoplus\Model\Item getBySKU($lob_id, $sku)

Get an item by SKU

Returns the item identified by the specified parameters.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$lob_id = 56; // int | lobId of the item to be returned.
$sku = "sku_example"; // string | sku of the item to be returned.

try { 
    $result = $api_instance->getBySKU($lob_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getBySKU: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lob_id** | **int**| lobId of the item to be returned. | 
 **sku** | **string**| sku of the item to be returned. | 

### Return type

[**\Infoplus\Model\Item**](Item.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemById**
> \Infoplus\Model\Item getDuplicateItemById($item_id)

Get a duplicated an item by id

Returns a duplicated item identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemById($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getDuplicateItemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to be duplicated. | 

### Return type

[**\Infoplus\Model\Item**](Item.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemByFilter**
> \Infoplus\Model\Item[] getItemByFilter($filter, $page, $limit, $sort)

Search items by filter

Returns the list of items that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Item[]**](Item.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemById**
> \Infoplus\Model\Item getItemById($item_id)

Get an item by id

Returns the item identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to be returned.

try { 
    $result = $api_instance->getItemById($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to be returned. | 

### Return type

[**\Infoplus\Model\Item**](Item.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemTags**
> getItemTags($item_id)

Get the tags for an item.

Get all existing item tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$item_id = 56; // int | Id of the item to get tags for

try { 
    $api_instance->getItemTags($item_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Id of the item to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItem**
> updateItem($body)

Update an item

Updates an existing item using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$body = new \Infoplus\Model\Item(); // \Infoplus\Model\Item | Item to be updated.

try { 
    $api_instance->updateItem($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Item**](\Infoplus\Model\Item.md)| Item to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemCustomFields**
> updateItemCustomFields($body)

Update an item custom fields

Updates an existing item custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemApi();
$body = new \Infoplus\Model\Item(); // \Infoplus\Model\Item | Item to be updated.

try { 
    $api_instance->updateItemCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItemCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Item**](\Infoplus\Model\Item.md)| Item to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

