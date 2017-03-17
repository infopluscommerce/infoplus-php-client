# Infoplus\ItemBuyerApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemBuyer**](ItemBuyerApi.md#addItemBuyer) | **POST** /beta/itemBuyer | Create an itemBuyer
[**addItemBuyerAudit**](ItemBuyerApi.md#addItemBuyerAudit) | **PUT** /beta/itemBuyer/{itemBuyerId}/audit/{itemBuyerAudit} | Add new audit for an itemBuyer
[**addItemBuyerTag**](ItemBuyerApi.md#addItemBuyerTag) | **PUT** /beta/itemBuyer/{itemBuyerId}/tag/{itemBuyerTag} | Add new tags for an itemBuyer.
[**deleteItemBuyer**](ItemBuyerApi.md#deleteItemBuyer) | **DELETE** /beta/itemBuyer/{itemBuyerId} | Delete an itemBuyer
[**deleteItemBuyerTag**](ItemBuyerApi.md#deleteItemBuyerTag) | **DELETE** /beta/itemBuyer/{itemBuyerId}/tag/{itemBuyerTag} | Delete a tag for an itemBuyer.
[**getDuplicateItemBuyerById**](ItemBuyerApi.md#getDuplicateItemBuyerById) | **GET** /beta/itemBuyer/duplicate/{itemBuyerId} | Get a duplicated an itemBuyer by id
[**getItemBuyerByFilter**](ItemBuyerApi.md#getItemBuyerByFilter) | **GET** /beta/itemBuyer/search | Search itemBuyers by filter
[**getItemBuyerById**](ItemBuyerApi.md#getItemBuyerById) | **GET** /beta/itemBuyer/{itemBuyerId} | Get an itemBuyer by id
[**getItemBuyerTags**](ItemBuyerApi.md#getItemBuyerTags) | **GET** /beta/itemBuyer/{itemBuyerId}/tag | Get the tags for an itemBuyer.
[**updateItemBuyer**](ItemBuyerApi.md#updateItemBuyer) | **PUT** /beta/itemBuyer | Update an itemBuyer


# **addItemBuyer**
> \Infoplus\Model\ItemBuyer addItemBuyer($body)

Create an itemBuyer

Inserts a new itemBuyer using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$body = new \Infoplus\Model\ItemBuyer(); // \Infoplus\Model\ItemBuyer | ItemBuyer to be inserted.

try { 
    $result = $api_instance->addItemBuyer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemBuyer**](\Infoplus\Model\ItemBuyer.md)| ItemBuyer to be inserted. | 

### Return type

[**\Infoplus\Model\ItemBuyer**](ItemBuyer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemBuyerAudit**
> addItemBuyerAudit($item_buyer_id, $item_buyer_audit)

Add new audit for an itemBuyer

Adds an audit to an existing itemBuyer.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to add an audit to
$item_buyer_audit = "item_buyer_audit_example"; // string | The audit to add

try { 
    $api_instance->addItemBuyerAudit($item_buyer_id, $item_buyer_audit);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to add an audit to | 
 **item_buyer_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addItemBuyerTag**
> addItemBuyerTag($item_buyer_id, $item_buyer_tag)

Add new tags for an itemBuyer.

Adds a tag to an existing itemBuyer.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to add a tag to
$item_buyer_tag = "item_buyer_tag_example"; // string | The tag to add

try { 
    $api_instance->addItemBuyerTag($item_buyer_id, $item_buyer_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->addItemBuyerTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to add a tag to | 
 **item_buyer_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemBuyer**
> deleteItemBuyer($item_buyer_id)

Delete an itemBuyer

Deletes the itemBuyer identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to be deleted.

try { 
    $api_instance->deleteItemBuyer($item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->deleteItemBuyer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemBuyerTag**
> deleteItemBuyerTag($item_buyer_id, $item_buyer_tag)

Delete a tag for an itemBuyer.

Deletes an existing itemBuyer tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to remove tag from
$item_buyer_tag = "item_buyer_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteItemBuyerTag($item_buyer_id, $item_buyer_tag);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->deleteItemBuyerTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to remove tag from | 
 **item_buyer_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemBuyerById**
> \Infoplus\Model\ItemBuyer getDuplicateItemBuyerById($item_buyer_id)

Get a duplicated an itemBuyer by id

Returns a duplicated itemBuyer identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemBuyerById($item_buyer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getDuplicateItemBuyerById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemBuyer**](ItemBuyer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemBuyerByFilter**
> \Infoplus\Model\ItemBuyer[] getItemBuyerByFilter($filter, $page, $limit, $sort)

Search itemBuyers by filter

Returns the list of itemBuyers that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemBuyerByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemBuyer[]**](ItemBuyer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemBuyerById**
> \Infoplus\Model\ItemBuyer getItemBuyerById($item_buyer_id)

Get an itemBuyer by id

Returns the itemBuyer identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to be returned.

try { 
    $result = $api_instance->getItemBuyerById($item_buyer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to be returned. | 

### Return type

[**\Infoplus\Model\ItemBuyer**](ItemBuyer.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemBuyerTags**
> getItemBuyerTags($item_buyer_id)

Get the tags for an itemBuyer.

Get all existing itemBuyer tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$item_buyer_id = 56; // int | Id of the itemBuyer to get tags for

try { 
    $api_instance->getItemBuyerTags($item_buyer_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->getItemBuyerTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_buyer_id** | **int**| Id of the itemBuyer to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemBuyer**
> updateItemBuyer($body)

Update an itemBuyer

Updates an existing itemBuyer using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemBuyerApi();
$body = new \Infoplus\Model\ItemBuyer(); // \Infoplus\Model\ItemBuyer | ItemBuyer to be updated.

try { 
    $api_instance->updateItemBuyer($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemBuyerApi->updateItemBuyer: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemBuyer**](\Infoplus\Model\ItemBuyer.md)| ItemBuyer to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

