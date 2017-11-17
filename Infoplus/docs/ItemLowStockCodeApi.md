# Infoplus\ItemLowstockCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemLowstockCode**](ItemLowstockCodeApi.md#addItemLowstockCode) | **POST** /v2.0/itemLowstockCode | Create an itemLowstockCode
[**deleteItemLowstockCode**](ItemLowstockCodeApi.md#deleteItemLowstockCode) | **DELETE** /v2.0/itemLowstockCode/{itemLowstockCodeId} | Delete an itemLowstockCode
[**getDuplicateItemLowstockCodeById**](ItemLowstockCodeApi.md#getDuplicateItemLowstockCodeById) | **GET** /v2.0/itemLowstockCode/duplicate/{itemLowstockCodeId} | Get a duplicated an itemLowstockCode by id
[**getItemLowstockCodeByFilter**](ItemLowstockCodeApi.md#getItemLowstockCodeByFilter) | **GET** /v2.0/itemLowstockCode/search | Search itemLowstockCodes by filter
[**getItemLowstockCodeById**](ItemLowstockCodeApi.md#getItemLowstockCodeById) | **GET** /v2.0/itemLowstockCode/{itemLowstockCodeId} | Get an itemLowstockCode by id
[**updateItemLowstockCode**](ItemLowstockCodeApi.md#updateItemLowstockCode) | **PUT** /v2.0/itemLowstockCode | Update an itemLowstockCode


# **addItemLowstockCode**
> \Infoplus\Model\ItemLowstockCode addItemLowstockCode($body)

Create an itemLowstockCode

Inserts a new itemLowstockCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$body = new \Infoplus\Model\ItemLowstockCode(); // \Infoplus\Model\ItemLowstockCode | ItemLowstockCode to be inserted.

try { 
    $result = $api_instance->addItemLowstockCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->addItemLowstockCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemLowstockCode**](\Infoplus\Model\ItemLowstockCode.md)| ItemLowstockCode to be inserted. | 

### Return type

[**\Infoplus\Model\ItemLowstockCode**](ItemLowstockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteItemLowstockCode**
> deleteItemLowstockCode($item_lowstock_code_id)

Delete an itemLowstockCode

Deletes the itemLowstockCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be deleted.

try { 
    $api_instance->deleteItemLowstockCode($item_lowstock_code_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->deleteItemLowstockCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateItemLowstockCodeById**
> \Infoplus\Model\ItemLowstockCode getDuplicateItemLowstockCodeById($item_lowstock_code_id)

Get a duplicated an itemLowstockCode by id

Returns a duplicated itemLowstockCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be duplicated.

try { 
    $result = $api_instance->getDuplicateItemLowstockCodeById($item_lowstock_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getDuplicateItemLowstockCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be duplicated. | 

### Return type

[**\Infoplus\Model\ItemLowstockCode**](ItemLowstockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemLowstockCodeByFilter**
> \Infoplus\Model\ItemLowstockCode[] getItemLowstockCodeByFilter($filter, $page, $limit, $sort)

Search itemLowstockCodes by filter

Returns the list of itemLowstockCodes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getItemLowstockCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ItemLowstockCode[]**](ItemLowstockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getItemLowstockCodeById**
> \Infoplus\Model\ItemLowstockCode getItemLowstockCodeById($item_lowstock_code_id)

Get an itemLowstockCode by id

Returns the itemLowstockCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$item_lowstock_code_id = 56; // int | Id of the itemLowstockCode to be returned.

try { 
    $result = $api_instance->getItemLowstockCodeById($item_lowstock_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->getItemLowstockCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_lowstock_code_id** | **int**| Id of the itemLowstockCode to be returned. | 

### Return type

[**\Infoplus\Model\ItemLowstockCode**](ItemLowstockCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateItemLowstockCode**
> updateItemLowstockCode($body)

Update an itemLowstockCode

Updates an existing itemLowstockCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ItemLowstockCodeApi();
$body = new \Infoplus\Model\ItemLowstockCode(); // \Infoplus\Model\ItemLowstockCode | ItemLowstockCode to be updated.

try { 
    $api_instance->updateItemLowstockCode($body);
} catch (Exception $e) {
    echo 'Exception when calling ItemLowstockCodeApi->updateItemLowstockCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ItemLowstockCode**](\Infoplus\Model\ItemLowstockCode.md)| ItemLowstockCode to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

