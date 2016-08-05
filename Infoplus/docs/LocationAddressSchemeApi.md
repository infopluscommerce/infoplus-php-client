# Infoplus\LocationAddressSchemeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocationAddressScheme**](LocationAddressSchemeApi.md#addLocationAddressScheme) | **POST** /beta/locationAddressScheme | Create a locationAddressScheme
[**deleteLocationAddressScheme**](LocationAddressSchemeApi.md#deleteLocationAddressScheme) | **DELETE** /beta/locationAddressScheme/{locationAddressSchemeId} | Delete a locationAddressScheme
[**getLocationAddressSchemeByFilter**](LocationAddressSchemeApi.md#getLocationAddressSchemeByFilter) | **GET** /beta/locationAddressScheme/search | Search locationAddressSchemes by filter
[**getLocationAddressSchemeById**](LocationAddressSchemeApi.md#getLocationAddressSchemeById) | **GET** /beta/locationAddressScheme/{locationAddressSchemeId} | Get a locationAddressScheme by id
[**updateLocationAddressScheme**](LocationAddressSchemeApi.md#updateLocationAddressScheme) | **PUT** /beta/locationAddressScheme | Update a locationAddressScheme
[**updateLocationAddressSchemeCustomFields**](LocationAddressSchemeApi.md#updateLocationAddressSchemeCustomFields) | **PUT** /beta/locationAddressScheme/customFields | Update a locationAddressScheme custom fields


# **addLocationAddressScheme**
> \Infoplus\Model\LocationAddressScheme addLocationAddressScheme($body)

Create a locationAddressScheme

Inserts a new locationAddressScheme using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$body = new \Infoplus\Model\LocationAddressScheme(); // \Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be inserted.

try { 
    $result = $api_instance->addLocationAddressScheme($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->addLocationAddressScheme: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationAddressScheme**](\Infoplus\Model\LocationAddressScheme.md)| LocationAddressScheme to be inserted. | 

### Return type

[**\Infoplus\Model\LocationAddressScheme**](LocationAddressScheme.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocationAddressScheme**
> deleteLocationAddressScheme($location_address_scheme_id)

Delete a locationAddressScheme

Deletes the locationAddressScheme identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to be deleted.

try { 
    $api_instance->deleteLocationAddressScheme($location_address_scheme_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->deleteLocationAddressScheme: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationAddressSchemeByFilter**
> \Infoplus\Model\LocationAddressScheme[] getLocationAddressSchemeByFilter($filter, $page, $limit, $sort)

Search locationAddressSchemes by filter

Returns the list of locationAddressSchemes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLocationAddressSchemeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\LocationAddressScheme[]**](LocationAddressScheme.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationAddressSchemeById**
> \Infoplus\Model\LocationAddressScheme getLocationAddressSchemeById($location_address_scheme_id)

Get a locationAddressScheme by id

Returns the locationAddressScheme identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$location_address_scheme_id = 56; // int | Id of the locationAddressScheme to be returned.

try { 
    $result = $api_instance->getLocationAddressSchemeById($location_address_scheme_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->getLocationAddressSchemeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_address_scheme_id** | **int**| Id of the locationAddressScheme to be returned. | 

### Return type

[**\Infoplus\Model\LocationAddressScheme**](LocationAddressScheme.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationAddressScheme**
> updateLocationAddressScheme($body)

Update a locationAddressScheme

Updates an existing locationAddressScheme using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$body = new \Infoplus\Model\LocationAddressScheme(); // \Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be updated.

try { 
    $api_instance->updateLocationAddressScheme($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->updateLocationAddressScheme: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationAddressScheme**](\Infoplus\Model\LocationAddressScheme.md)| LocationAddressScheme to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationAddressSchemeCustomFields**
> updateLocationAddressSchemeCustomFields($body)

Update a locationAddressScheme custom fields

Updates an existing locationAddressScheme custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationAddressSchemeApi();
$body = new \Infoplus\Model\LocationAddressScheme(); // \Infoplus\Model\LocationAddressScheme | LocationAddressScheme to be updated.

try { 
    $api_instance->updateLocationAddressSchemeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationAddressSchemeApi->updateLocationAddressSchemeCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationAddressScheme**](\Infoplus\Model\LocationAddressScheme.md)| LocationAddressScheme to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

