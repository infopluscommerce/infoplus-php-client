# Infoplus\LocationApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocation**](LocationApi.md#addLocation) | **POST** /beta/location | Create a location
[**addLocationAudit**](LocationApi.md#addLocationAudit) | **PUT** /beta/location/{locationId}/audit/{locationAudit} | Add new audit for a location
[**addLocationTag**](LocationApi.md#addLocationTag) | **PUT** /beta/location/{locationId}/tag/{locationTag} | Add new tags for a location.
[**deleteLocation**](LocationApi.md#deleteLocation) | **DELETE** /beta/location/{locationId} | Delete a location
[**deleteLocationTag**](LocationApi.md#deleteLocationTag) | **DELETE** /beta/location/{locationId}/tag/{locationTag} | Delete a tag for a location.
[**getDuplicateLocationById**](LocationApi.md#getDuplicateLocationById) | **GET** /beta/location/duplicate/{locationId} | Get a duplicated a location by id
[**getLocationByFilter**](LocationApi.md#getLocationByFilter) | **GET** /beta/location/search | Search locations by filter
[**getLocationById**](LocationApi.md#getLocationById) | **GET** /beta/location/{locationId} | Get a location by id
[**getLocationTags**](LocationApi.md#getLocationTags) | **GET** /beta/location/{locationId}/tag | Get the tags for a location.
[**updateLocation**](LocationApi.md#updateLocation) | **PUT** /beta/location | Update a location
[**updateLocationCustomFields**](LocationApi.md#updateLocationCustomFields) | **PUT** /beta/location/customFields | Update a location custom fields


# **addLocation**
> \Infoplus\Model\Location addLocation($body)

Create a location

Inserts a new location using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$body = new \Infoplus\Model\Location(); // \Infoplus\Model\Location | Location to be inserted.

try { 
    $result = $api_instance->addLocation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->addLocation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Location**](\Infoplus\Model\Location.md)| Location to be inserted. | 

### Return type

[**\Infoplus\Model\Location**](Location.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addLocationAudit**
> addLocationAudit($location_id, $location_audit)

Add new audit for a location

Adds an audit to an existing location.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to add an audit to
$location_audit = "location_audit_example"; // string | The audit to add

try { 
    $api_instance->addLocationAudit($location_id, $location_audit);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->addLocationAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to add an audit to | 
 **location_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addLocationTag**
> addLocationTag($location_id, $location_tag)

Add new tags for a location.

Adds a tag to an existing location.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to add a tag to
$location_tag = "location_tag_example"; // string | The tag to add

try { 
    $api_instance->addLocationTag($location_id, $location_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->addLocationTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to add a tag to | 
 **location_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocation**
> deleteLocation($location_id)

Delete a location

Deletes the location identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to be deleted.

try { 
    $api_instance->deleteLocation($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->deleteLocation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocationTag**
> deleteLocationTag($location_id, $location_tag)

Delete a tag for a location.

Deletes an existing location tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to remove tag from
$location_tag = "location_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteLocationTag($location_id, $location_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->deleteLocationTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to remove tag from | 
 **location_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateLocationById**
> \Infoplus\Model\Location getDuplicateLocationById($location_id)

Get a duplicated a location by id

Returns a duplicated location identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to be duplicated.

try { 
    $result = $api_instance->getDuplicateLocationById($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getDuplicateLocationById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to be duplicated. | 

### Return type

[**\Infoplus\Model\Location**](Location.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationByFilter**
> \Infoplus\Model\Location[] getLocationByFilter($filter, $page, $limit, $sort)

Search locations by filter

Returns the list of locations that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLocationByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocationByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Location[]**](Location.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationById**
> \Infoplus\Model\Location getLocationById($location_id)

Get a location by id

Returns the location identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to be returned.

try { 
    $result = $api_instance->getLocationById($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocationById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to be returned. | 

### Return type

[**\Infoplus\Model\Location**](Location.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationTags**
> getLocationTags($location_id)

Get the tags for a location.

Get all existing location tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$location_id = 56; // int | Id of the location to get tags for

try { 
    $api_instance->getLocationTags($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->getLocationTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| Id of the location to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocation**
> updateLocation($body)

Update a location

Updates an existing location using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$body = new \Infoplus\Model\Location(); // \Infoplus\Model\Location | Location to be updated.

try { 
    $api_instance->updateLocation($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->updateLocation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Location**](\Infoplus\Model\Location.md)| Location to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationCustomFields**
> updateLocationCustomFields($body)

Update a location custom fields

Updates an existing location custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationApi();
$body = new \Infoplus\Model\Location(); // \Infoplus\Model\Location | Location to be updated.

try { 
    $api_instance->updateLocationCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->updateLocationCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Location**](\Infoplus\Model\Location.md)| Location to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

