# Infoplus\ItemSubCategoryApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSubCategory**](ItemSubCategoryApi.md#addItemSubCategory) | **POST** /beta/itemSubCategory | Create an itemSubCategory
[**addItemSubCategoryAudit**](ItemSubCategoryApi.md#addItemSubCategoryAudit) | **PUT** /beta/itemSubCategory/{itemSubCategoryId}/audit/{itemSubCategoryAudit} | Add new audit for an itemSubCategory
[**addItemSubCategoryTag**](ItemSubCategoryApi.md#addItemSubCategoryTag) | **PUT** /beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag} | Add new tags for an itemSubCategory.
[**deleteItemSubCategory**](ItemSubCategoryApi.md#deleteItemSubCategory) | **DELETE** /beta/itemSubCategory/{itemSubCategoryId} | Delete an itemSubCategory
[**deleteItemSubCategoryTag**](ItemSubCategoryApi.md#deleteItemSubCategoryTag) | **DELETE** /beta/itemSubCategory/{itemSubCategoryId}/tag/{itemSubCategoryTag} | Delete a tag for an itemSubCategory.
[**getDuplicateItemSubCategoryById**](ItemSubCategoryApi.md#getDuplicateItemSubCategoryById) | **GET** /beta/itemSubCategory/duplicate/{itemSubCategoryId} | Get a duplicated an itemSubCategory by id
[**getItemSubCategoryByFilter**](ItemSubCategoryApi.md#getItemSubCategoryByFilter) | **GET** /beta/itemSubCategory/search | Search itemSubCategorys by filter
[**getItemSubCategoryById**](ItemSubCategoryApi.md#getItemSubCategoryById) | **GET** /beta/itemSubCategory/{itemSubCategoryId} | Get an itemSubCategory by id
[**getItemSubCategoryTags**](ItemSubCategoryApi.md#getItemSubCategoryTags) | **GET** /beta/itemSubCategory/{itemSubCategoryId}/tag | Get the tags for an itemSubCategory.
[**updateItemSubCategory**](ItemSubCategoryApi.md#updateItemSubCategory) | **PUT** /beta/itemSubCategory | Update an itemSubCategory


# **addItemSubCategory**
> \Infoplus\Model\ItemSubCategory addItemSubCategory($body)

Create an itemSubCategory

Inserts a new itemSubCategory using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$body = new \Infoplus\Model\ItemSubCategory(); // \Infoplus\Model\ItemSubCategory | ItemSubCategory to be inserted.

try { 
    $result = $api_instance->addItemSubCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSubCategory**](\Infoplus\Model\ItemSubCategory.md)| ItemSubCategory to be inserted. | 

### Return type

[**\Infoplus\Model\ItemSubCategory**](ItemSubCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemSubCategoryAudit**
> addItemSubCategoryAudit($item_sub_category_id, $item_sub_category_audit)

Add new audit for an itemSubCategory

Adds an audit to an existing itemSubCategory.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add an audit to
$item_sub_category_audit = "item_sub_category_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemSubCategoryAudit($item_sub_category_id, $item_sub_category_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add an audit to | 
 **item_sub_category_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemSubCategoryTag**
> addItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)

Add new tags for an itemSubCategory.

Adds a tag to an existing itemSubCategory.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to add a tag to
$item_sub_category_tag = "item_sub_category_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->addItemSubCategoryTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to add a tag to | 
 **item_sub_category_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemSubCategory**
> deleteItemSubCategory($item_sub_category_id)

Delete an itemSubCategory

Deletes the itemSubCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be deleted.

try { 
    $api_instance->deleteItemSubCategory($item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->deleteItemSubCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemSubCategoryTag**
> deleteItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag)

Delete a tag for an itemSubCategory.

Deletes an existing itemSubCategory tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to remove tag from
$item_sub_category_tag = "item_sub_category_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemSubCategoryTag($item_sub_category_id, $item_sub_category_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->deleteItemSubCategoryTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to remove tag from | 
 **item_sub_category_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemSubCategoryById**
> \Infoplus\Model\ItemSubCategory getDuplicateItemSubCategoryById($item_sub_category_id)

Get a duplicated an itemSubCategory by id

Returns a duplicated itemSubCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemSubCategoryById($item_sub_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getDuplicateItemSubCategoryById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemSubCategory**](ItemSubCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSubCategoryByFilter**
> \Infoplus\Model\ItemSubCategory[] getItemSubCategoryByFilter($filter, $page, $limit, $sort)

Search itemSubCategorys by filter

Returns the list of itemSubCategorys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemSubCategoryByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemSubCategory[]**](ItemSubCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSubCategoryById**
> \Infoplus\Model\ItemSubCategory getItemSubCategoryById($item_sub_category_id)

Get an itemSubCategory by id

Returns the itemSubCategory identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to be returned.

try { 
    $result = $api_instance->getItemSubCategoryById($item_sub_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to be returned. | 

### Return type

[**\Infoplus\Model\ItemSubCategory**](ItemSubCategory.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSubCategoryTags**
> getItemSubCategoryTags($item_sub_category_id)

Get the tags for an itemSubCategory.

Get all existing itemSubCategory tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$item_sub_category_id = 56; // int | Id of the itemSubCategory to get tags for

try { 
    $api_instance->getItemSubCategoryTags($item_sub_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->getItemSubCategoryTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sub_category_id** | **int**| Id of the itemSubCategory to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemSubCategory**
> updateItemSubCategory($body)

Update an itemSubCategory

Updates an existing itemSubCategory using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSubCategoryApi();
$body = new \Infoplus\Model\ItemSubCategory(); // \Infoplus\Model\ItemSubCategory | ItemSubCategory to be updated.

try { 
    $api_instance->updateItemSubCategory($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSubCategoryApi->updateItemSubCategory: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSubCategory**](\Infoplus\Model\ItemSubCategory.md)| ItemSubCategory to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

