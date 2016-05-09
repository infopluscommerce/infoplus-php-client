# Infoplus\OverrideReturnAddressApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOverrideReturnAddress**](OverrideReturnAddressApi.md#addOverrideReturnAddress) | **POST** /v1.0/overrideReturnAddress | Create an overrideReturnAddress
[**deleteOverrideReturnAddress**](OverrideReturnAddressApi.md#deleteOverrideReturnAddress) | **DELETE** /v1.0/overrideReturnAddress/{overrideReturnAddressId} | Delete an overrideReturnAddress
[**getOverrideReturnAddressByFilter**](OverrideReturnAddressApi.md#getOverrideReturnAddressByFilter) | **GET** /v1.0/overrideReturnAddress/search | Search overrideReturnAddresses by filter
[**getOverrideReturnAddressById**](OverrideReturnAddressApi.md#getOverrideReturnAddressById) | **GET** /v1.0/overrideReturnAddress/{overrideReturnAddressId} | Get an overrideReturnAddress by id
[**updateOverrideReturnAddress**](OverrideReturnAddressApi.md#updateOverrideReturnAddress) | **PUT** /v1.0/overrideReturnAddress | Update an overrideReturnAddress


# **addOverrideReturnAddress**
> \Infoplus\Model\OverrideReturnAddress addOverrideReturnAddress($body)

Create an overrideReturnAddress

Inserts a new overrideReturnAddress using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OverrideReturnAddressApi();
$body = new \Infoplus\Model\OverrideReturnAddress(); // \Infoplus\Model\OverrideReturnAddress | OverrideReturnAddress to be inserted.

try { 
    $result = $api_instance->addOverrideReturnAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverrideReturnAddressApi->addOverrideReturnAddress: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OverrideReturnAddress**](\Infoplus\Model\OverrideReturnAddress.md)| OverrideReturnAddress to be inserted. | 

### Return type

[**\Infoplus\Model\OverrideReturnAddress**](OverrideReturnAddress.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOverrideReturnAddress**
> deleteOverrideReturnAddress($override_return_address_id)

Delete an overrideReturnAddress

Deletes the overrideReturnAddress identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OverrideReturnAddressApi();
$override_return_address_id = 56; // int | Id of the overrideReturnAddress to be deleted.

try { 
    $api_instance->deleteOverrideReturnAddress($override_return_address_id);
} catch (Exception $e) {
    echo 'Exception when calling OverrideReturnAddressApi->deleteOverrideReturnAddress: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **override_return_address_id** | **int**| Id of the overrideReturnAddress to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOverrideReturnAddressByFilter**
> \Infoplus\Model\OverrideReturnAddress[] getOverrideReturnAddressByFilter($filter, $page, $limit, $sort)

Search overrideReturnAddresses by filter

Returns the list of overrideReturnAddresses that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OverrideReturnAddressApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOverrideReturnAddressByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverrideReturnAddressApi->getOverrideReturnAddressByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\OverrideReturnAddress[]**](OverrideReturnAddress.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOverrideReturnAddressById**
> \Infoplus\Model\OverrideReturnAddress getOverrideReturnAddressById($override_return_address_id)

Get an overrideReturnAddress by id

Returns the overrideReturnAddress identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OverrideReturnAddressApi();
$override_return_address_id = 56; // int | Id of the overrideReturnAddress to be returned.

try { 
    $result = $api_instance->getOverrideReturnAddressById($override_return_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverrideReturnAddressApi->getOverrideReturnAddressById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **override_return_address_id** | **int**| Id of the overrideReturnAddress to be returned. | 

### Return type

[**\Infoplus\Model\OverrideReturnAddress**](OverrideReturnAddress.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOverrideReturnAddress**
> updateOverrideReturnAddress($body)

Update an overrideReturnAddress

Updates an existing overrideReturnAddress using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OverrideReturnAddressApi();
$body = new \Infoplus\Model\OverrideReturnAddress(); // \Infoplus\Model\OverrideReturnAddress | OverrideReturnAddress to be updated.

try { 
    $api_instance->updateOverrideReturnAddress($body);
} catch (Exception $e) {
    echo 'Exception when calling OverrideReturnAddressApi->updateOverrideReturnAddress: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OverrideReturnAddress**](\Infoplus\Model\OverrideReturnAddress.md)| OverrideReturnAddress to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

