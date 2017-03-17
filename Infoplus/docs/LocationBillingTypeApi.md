# Infoplus\LocationBillingTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLocationBillingType**](LocationBillingTypeApi.md#addLocationBillingType) | **POST** /beta/locationBillingType | Create a locationBillingType
[**addLocationBillingTypeAudit**](LocationBillingTypeApi.md#addLocationBillingTypeAudit) | **PUT** /beta/locationBillingType/{locationBillingTypeId}/audit/{locationBillingTypeAudit} | Add new audit for a locationBillingType
[**addLocationBillingTypeTag**](LocationBillingTypeApi.md#addLocationBillingTypeTag) | **PUT** /beta/locationBillingType/{locationBillingTypeId}/tag/{locationBillingTypeTag} | Add new tags for a locationBillingType.
[**deleteLocationBillingType**](LocationBillingTypeApi.md#deleteLocationBillingType) | **DELETE** /beta/locationBillingType/{locationBillingTypeId} | Delete a locationBillingType
[**deleteLocationBillingTypeTag**](LocationBillingTypeApi.md#deleteLocationBillingTypeTag) | **DELETE** /beta/locationBillingType/{locationBillingTypeId}/tag/{locationBillingTypeTag} | Delete a tag for a locationBillingType.
[**getDuplicateLocationBillingTypeById**](LocationBillingTypeApi.md#getDuplicateLocationBillingTypeById) | **GET** /beta/locationBillingType/duplicate/{locationBillingTypeId} | Get a duplicated a locationBillingType by id
[**getLocationBillingTypeByFilter**](LocationBillingTypeApi.md#getLocationBillingTypeByFilter) | **GET** /beta/locationBillingType/search | Search locationBillingTypes by filter
[**getLocationBillingTypeById**](LocationBillingTypeApi.md#getLocationBillingTypeById) | **GET** /beta/locationBillingType/{locationBillingTypeId} | Get a locationBillingType by id
[**getLocationBillingTypeTags**](LocationBillingTypeApi.md#getLocationBillingTypeTags) | **GET** /beta/locationBillingType/{locationBillingTypeId}/tag | Get the tags for a locationBillingType.
[**updateLocationBillingType**](LocationBillingTypeApi.md#updateLocationBillingType) | **PUT** /beta/locationBillingType | Update a locationBillingType
[**updateLocationBillingTypeCustomFields**](LocationBillingTypeApi.md#updateLocationBillingTypeCustomFields) | **PUT** /beta/locationBillingType/customFields | Update a locationBillingType custom fields


# **addLocationBillingType**
> \Infoplus\Model\LocationBillingType addLocationBillingType($body)

Create a locationBillingType

Inserts a new locationBillingType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$body = new \Infoplus\Model\LocationBillingType(); // \Infoplus\Model\LocationBillingType | LocationBillingType to be inserted.

try { 
    $result = $api_instance->addLocationBillingType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationBillingType**](\Infoplus\Model\LocationBillingType.md)| LocationBillingType to be inserted. | 

### Return type

[**\Infoplus\Model\LocationBillingType**](LocationBillingType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addLocationBillingTypeAudit**
> addLocationBillingTypeAudit($location_billing_type_id, $location_billing_type_audit)

Add new audit for a locationBillingType

Adds an audit to an existing locationBillingType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to add an audit to
$location_billing_type_audit = "location_billing_type_audit_example"; // string | The audit to add

try { 
    $api_instance->addLocationBillingTypeAudit($location_billing_type_id, $location_billing_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to add an audit to | 
 **location_billing_type_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addLocationBillingTypeTag**
> addLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag)

Add new tags for a locationBillingType.

Adds a tag to an existing locationBillingType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to add a tag to
$location_billing_type_tag = "location_billing_type_tag_example"; // string | The tag to add

try { 
    $api_instance->addLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->addLocationBillingTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to add a tag to | 
 **location_billing_type_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocationBillingType**
> deleteLocationBillingType($location_billing_type_id)

Delete a locationBillingType

Deletes the locationBillingType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to be deleted.

try { 
    $api_instance->deleteLocationBillingType($location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->deleteLocationBillingType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLocationBillingTypeTag**
> deleteLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag)

Delete a tag for a locationBillingType.

Deletes an existing locationBillingType tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to remove tag from
$location_billing_type_tag = "location_billing_type_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteLocationBillingTypeTag($location_billing_type_id, $location_billing_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->deleteLocationBillingTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to remove tag from | 
 **location_billing_type_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateLocationBillingTypeById**
> \Infoplus\Model\LocationBillingType getDuplicateLocationBillingTypeById($location_billing_type_id)

Get a duplicated a locationBillingType by id

Returns a duplicated locationBillingType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to be duplicated.

try { 
    $result = $api_instance->getDuplicateLocationBillingTypeById($location_billing_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getDuplicateLocationBillingTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be duplicated. | 

### Return type

[**\Infoplus\Model\LocationBillingType**](LocationBillingType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationBillingTypeByFilter**
> \Infoplus\Model\LocationBillingType[] getLocationBillingTypeByFilter($filter, $page, $limit, $sort)

Search locationBillingTypes by filter

Returns the list of locationBillingTypes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLocationBillingTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\LocationBillingType[]**](LocationBillingType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationBillingTypeById**
> \Infoplus\Model\LocationBillingType getLocationBillingTypeById($location_billing_type_id)

Get a locationBillingType by id

Returns the locationBillingType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to be returned.

try { 
    $result = $api_instance->getLocationBillingTypeById($location_billing_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to be returned. | 

### Return type

[**\Infoplus\Model\LocationBillingType**](LocationBillingType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLocationBillingTypeTags**
> getLocationBillingTypeTags($location_billing_type_id)

Get the tags for a locationBillingType.

Get all existing locationBillingType tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$location_billing_type_id = 56; // int | Id of the locationBillingType to get tags for

try { 
    $api_instance->getLocationBillingTypeTags($location_billing_type_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->getLocationBillingTypeTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_billing_type_id** | **int**| Id of the locationBillingType to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationBillingType**
> updateLocationBillingType($body)

Update a locationBillingType

Updates an existing locationBillingType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$body = new \Infoplus\Model\LocationBillingType(); // \Infoplus\Model\LocationBillingType | LocationBillingType to be updated.

try { 
    $api_instance->updateLocationBillingType($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->updateLocationBillingType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationBillingType**](\Infoplus\Model\LocationBillingType.md)| LocationBillingType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLocationBillingTypeCustomFields**
> updateLocationBillingTypeCustomFields($body)

Update a locationBillingType custom fields

Updates an existing locationBillingType custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LocationBillingTypeApi();
$body = new \Infoplus\Model\LocationBillingType(); // \Infoplus\Model\LocationBillingType | LocationBillingType to be updated.

try { 
    $api_instance->updateLocationBillingTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationBillingTypeApi->updateLocationBillingTypeCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LocationBillingType**](\Infoplus\Model\LocationBillingType.md)| LocationBillingType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

