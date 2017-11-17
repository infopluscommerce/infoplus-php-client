# Infoplus\ItemSectorApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemSector**](ItemSectorApi.md#addItemSector) | **POST** /v2.0/itemSector | Create an itemSector
[**deleteItemSector**](ItemSectorApi.md#deleteItemSector) | **DELETE** /v2.0/itemSector/{itemSectorId} | Delete an itemSector
[**getDuplicateItemSectorById**](ItemSectorApi.md#getDuplicateItemSectorById) | **GET** /v2.0/itemSector/duplicate/{itemSectorId} | Get a duplicated an itemSector by id
[**getItemSectorByFilter**](ItemSectorApi.md#getItemSectorByFilter) | **GET** /v2.0/itemSector/search | Search itemSectors by filter
[**getItemSectorById**](ItemSectorApi.md#getItemSectorById) | **GET** /v2.0/itemSector/{itemSectorId} | Get an itemSector by id
[**updateItemSector**](ItemSectorApi.md#updateItemSector) | **PUT** /v2.0/itemSector | Update an itemSector


# **addItemSector**
> \Infoplus\Model\ItemSector addItemSector($body)

Create an itemSector

Inserts a new itemSector using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$body = new \Infoplus\Model\ItemSector(); // \Infoplus\Model\ItemSector | ItemSector to be inserted.

try { 
    $result = $api_instance->addItemSector($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->addItemSector: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSector**](\Infoplus\Model\ItemSector.md)| ItemSector to be inserted. | 

### Return type

[**\Infoplus\Model\ItemSector**](ItemSector.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemSector**
> deleteItemSector($item_sector_id)

Delete an itemSector

Deletes the itemSector identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$item_sector_id = 56; // int | Id of the itemSector to be deleted.

try { 
    $api_instance->deleteItemSector($item_sector_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->deleteItemSector: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemSectorById**
> \Infoplus\Model\ItemSector getDuplicateItemSectorById($item_sector_id)

Get a duplicated an itemSector by id

Returns a duplicated itemSector identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$item_sector_id = 56; // int | Id of the itemSector to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemSectorById($item_sector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getDuplicateItemSectorById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemSector**](ItemSector.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSectorByFilter**
> \Infoplus\Model\ItemSector[] getItemSectorByFilter($filter, $page, $limit, $sort)

Search itemSectors by filter

Returns the list of itemSectors that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemSectorByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemSector[]**](ItemSector.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemSectorById**
> \Infoplus\Model\ItemSector getItemSectorById($item_sector_id)

Get an itemSector by id

Returns the itemSector identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$item_sector_id = 56; // int | Id of the itemSector to be returned.

try { 
    $result = $api_instance->getItemSectorById($item_sector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->getItemSectorById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_sector_id** | **int**| Id of the itemSector to be returned. | 

### Return type

[**\Infoplus\Model\ItemSector**](ItemSector.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemSector**
> updateItemSector($body)

Update an itemSector

Updates an existing itemSector using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemSectorApi();
$body = new \Infoplus\Model\ItemSector(); // \Infoplus\Model\ItemSector | ItemSector to be updated.

try { 
    $api_instance->updateItemSector($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemSectorApi->updateItemSector: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemSector**](\Infoplus\Model\ItemSector.md)| ItemSector to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

