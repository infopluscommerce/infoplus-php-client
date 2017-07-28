# Infoplus\ItemCategoryApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemCategory**](ItemCategoryApi.md#addItemCategory) | **POST** /beta/itemCategory | Create an itemCategory
[**addItemCategoryAudit**](ItemCategoryApi.md#addItemCategoryAudit) | **PUT** /beta/itemCategory/{itemCategoryId}/audit/{itemCategoryAudit} | Add new audit for an itemCategory
[**addItemCategoryTag**](ItemCategoryApi.md#addItemCategoryTag) | **PUT** /beta/itemCategory/{itemCategoryId}/tag/{itemCategoryTag} | Add new tags for an itemCategory.
[**deleteItemCategory**](ItemCategoryApi.md#deleteItemCategory) | **DELETE** /beta/itemCategory/{itemCategoryId} | Delete an itemCategory
[**deleteItemCategoryTag**](ItemCategoryApi.md#deleteItemCategoryTag) | **DELETE** /beta/itemCategory/{itemCategoryId}/tag/{itemCategoryTag} | Delete a tag for an itemCategory.
[**getDuplicateItemCategoryById**](ItemCategoryApi.md#getDuplicateItemCategoryById) | **GET** /beta/itemCategory/duplicate/{itemCategoryId} | Get a duplicated an itemCategory by id
[**getItemCategoryByFilter**](ItemCategoryApi.md#getItemCategoryByFilter) | **GET** /beta/itemCategory/search | Search itemCategorys by filter
[**getItemCategoryById**](ItemCategoryApi.md#getItemCategoryById) | **GET** /beta/itemCategory/{itemCategoryId} | Get an itemCategory by id
[**getItemCategoryTags**](ItemCategoryApi.md#getItemCategoryTags) | **GET** /beta/itemCategory/{itemCategoryId}/tag | Get the tags for an itemCategory.
[**updateItemCategory**](ItemCategoryApi.md#updateItemCategory) | **PUT** /beta/itemCategory | Update an itemCategory


# **addItemCategory**
> \Infoplus\Model\ItemCategory addItemCategory($body)

Create an itemCategory

Inserts a new itemCategory using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$body = new \Infoplus\Model\ItemCategory(); // \Infoplus\Model\ItemCategory | ItemCategory to be inserted.

try { 
    $result = $api_instance->addItemCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemCategory**](\Infoplus\Model\ItemCategory.md)| ItemCategory to be inserted. | 

### Return type

[**\Infoplus\Model\ItemCategory**](ItemCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemCategoryAudit**
> addItemCategoryAudit($item_category_id, $item_category_audit)

Add new audit for an itemCategory

Adds an audit to an existing itemCategory.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to add an audit to
$item_category_audit = "item_category_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemCategoryAudit($item_category_id, $item_category_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to add an audit to | 
 **item_category_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemCategoryTag**
> addItemCategoryTag($item_category_id, $item_category_tag)

Add new tags for an itemCategory.

Adds a tag to an existing itemCategory.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to add a tag to
$item_category_tag = "item_category_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemCategoryTag($item_category_id, $item_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->addItemCategoryTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to add a tag to | 
 **item_category_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemCategory**
> deleteItemCategory($item_category_id)

Delete an itemCategory

Deletes the itemCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to be deleted.

try { 
    $api_instance->deleteItemCategory($item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemCategoryTag**
> deleteItemCategoryTag($item_category_id, $item_category_tag)

Delete a tag for an itemCategory.

Deletes an existing itemCategory tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to remove tag from
$item_category_tag = "item_category_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemCategoryTag($item_category_id, $item_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->deleteItemCategoryTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to remove tag from | 
 **item_category_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemCategoryById**
> \Infoplus\Model\ItemCategory getDuplicateItemCategoryById($item_category_id)

Get a duplicated an itemCategory by id

Returns a duplicated itemCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemCategoryById($item_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getDuplicateItemCategoryById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemCategory**](ItemCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemCategoryByFilter**
> \Infoplus\Model\ItemCategory[] getItemCategoryByFilter($filter, $page, $limit, $sort)

Search itemCategorys by filter

Returns the list of itemCategorys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemCategoryByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemCategory[]**](ItemCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemCategoryById**
> \Infoplus\Model\ItemCategory getItemCategoryById($item_category_id)

Get an itemCategory by id

Returns the itemCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to be returned.

try { 
    $result = $api_instance->getItemCategoryById($item_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to be returned. | 

### Return type

[**\Infoplus\Model\ItemCategory**](ItemCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemCategoryTags**
> getItemCategoryTags($item_category_id)

Get the tags for an itemCategory.

Get all existing itemCategory tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$item_category_id = 56; // int | Id of the itemCategory to get tags for

try { 
    $api_instance->getItemCategoryTags($item_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->getItemCategoryTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_category_id** | **int**| Id of the itemCategory to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemCategory**
> updateItemCategory($body)

Update an itemCategory

Updates an existing itemCategory using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemCategoryApi();
$body = new \Infoplus\Model\ItemCategory(); // \Infoplus\Model\ItemCategory | ItemCategory to be updated.

try { 
    $api_instance->updateItemCategory($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemCategoryApi->updateItemCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemCategory**](\Infoplus\Model\ItemCategory.md)| ItemCategory to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

