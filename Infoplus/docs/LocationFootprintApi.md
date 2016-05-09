# Infoplus\LocationFootprintApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocationFootprint**](LocationFootprintApi.md#addLocationFootprint) | **POST** /v1.0/locationFootprint | Create a locationFootprint
[**deleteLocationFootprint**](LocationFootprintApi.md#deleteLocationFootprint) | **DELETE** /v1.0/locationFootprint/{locationFootprintId} | Delete a locationFootprint
[**getLocationFootprintByFilter**](LocationFootprintApi.md#getLocationFootprintByFilter) | **GET** /v1.0/locationFootprint/search | Search locationFootprints by filter
[**getLocationFootprintById**](LocationFootprintApi.md#getLocationFootprintById) | **GET** /v1.0/locationFootprint/{locationFootprintId} | Get a locationFootprint by id
[**updateLocationFootprint**](LocationFootprintApi.md#updateLocationFootprint) | **PUT** /v1.0/locationFootprint | Update a locationFootprint


# **addLocationFootprint**
> \Infoplus\Model\LocationFootprint addLocationFootprint($body)

Create a locationFootprint

Inserts a new locationFootprint using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationFootprintApi();
$body = new \Infoplus\Model\LocationFootprint(); // \Infoplus\Model\LocationFootprint | LocationFootprint to be inserted.

try { 
    $result = $api_instance->addLocationFootprint($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationFootprintApi->addLocationFootprint: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationFootprint**](\Infoplus\Model\LocationFootprint.md)| LocationFootprint to be inserted. | 

### Return type

[**\Infoplus\Model\LocationFootprint**](LocationFootprint.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocationFootprint**
> deleteLocationFootprint($location_footprint_id)

Delete a locationFootprint

Deletes the locationFootprint identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationFootprintApi();
$location_footprint_id = 56; // int | Id of the locationFootprint to be deleted.

try { 
    $api_instance->deleteLocationFootprint($location_footprint_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationFootprintApi->deleteLocationFootprint: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_footprint_id** | **int**| Id of the locationFootprint to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationFootprintByFilter**
> \Infoplus\Model\LocationFootprint[] getLocationFootprintByFilter($filter, $page, $limit, $sort)

Search locationFootprints by filter

Returns the list of locationFootprints that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationFootprintApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLocationFootprintByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationFootprintApi->getLocationFootprintByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\LocationFootprint[]**](LocationFootprint.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationFootprintById**
> \Infoplus\Model\LocationFootprint getLocationFootprintById($location_footprint_id)

Get a locationFootprint by id

Returns the locationFootprint identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationFootprintApi();
$location_footprint_id = 56; // int | Id of the locationFootprint to be returned.

try { 
    $result = $api_instance->getLocationFootprintById($location_footprint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationFootprintApi->getLocationFootprintById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_footprint_id** | **int**| Id of the locationFootprint to be returned. | 

### Return type

[**\Infoplus\Model\LocationFootprint**](LocationFootprint.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationFootprint**
> updateLocationFootprint($body)

Update a locationFootprint

Updates an existing locationFootprint using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationFootprintApi();
$body = new \Infoplus\Model\LocationFootprint(); // \Infoplus\Model\LocationFootprint | LocationFootprint to be updated.

try { 
    $api_instance->updateLocationFootprint($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationFootprintApi->updateLocationFootprint: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationFootprint**](\Infoplus\Model\LocationFootprint.md)| LocationFootprint to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

