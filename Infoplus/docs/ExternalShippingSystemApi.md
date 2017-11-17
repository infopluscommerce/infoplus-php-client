# Infoplus\ExternalShippingSystemApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExternalShippingSystem**](ExternalShippingSystemApi.md#addExternalShippingSystem) | **POST** /v2.0/externalShippingSystem | Create an externalShippingSystem
[**deleteExternalShippingSystem**](ExternalShippingSystemApi.md#deleteExternalShippingSystem) | **DELETE** /v2.0/externalShippingSystem/{externalShippingSystemId} | Delete an externalShippingSystem
[**getDuplicateExternalShippingSystemById**](ExternalShippingSystemApi.md#getDuplicateExternalShippingSystemById) | **GET** /v2.0/externalShippingSystem/duplicate/{externalShippingSystemId} | Get a duplicated an externalShippingSystem by id
[**getExternalShippingSystemByFilter**](ExternalShippingSystemApi.md#getExternalShippingSystemByFilter) | **GET** /v2.0/externalShippingSystem/search | Search externalShippingSystems by filter
[**getExternalShippingSystemById**](ExternalShippingSystemApi.md#getExternalShippingSystemById) | **GET** /v2.0/externalShippingSystem/{externalShippingSystemId} | Get an externalShippingSystem by id
[**updateExternalShippingSystem**](ExternalShippingSystemApi.md#updateExternalShippingSystem) | **PUT** /v2.0/externalShippingSystem | Update an externalShippingSystem
[**updateExternalShippingSystemCustomFields**](ExternalShippingSystemApi.md#updateExternalShippingSystemCustomFields) | **PUT** /v2.0/externalShippingSystem/customFields | Update an externalShippingSystem custom fields


# **addExternalShippingSystem**
> \Infoplus\Model\ExternalShippingSystem addExternalShippingSystem($body)

Create an externalShippingSystem

Inserts a new externalShippingSystem using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be inserted.

try { 
    $result = $api_instance->addExternalShippingSystem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be inserted. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteExternalShippingSystem**
> deleteExternalShippingSystem($external_shipping_system_id)

Delete an externalShippingSystem

Deletes the externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be deleted.

try { 
    $api_instance->deleteExternalShippingSystem($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateExternalShippingSystemById**
> \Infoplus\Model\ExternalShippingSystem getDuplicateExternalShippingSystemById($external_shipping_system_id)

Get a duplicated an externalShippingSystem by id

Returns a duplicated externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be duplicated.

try { 
    $result = $api_instance->getDuplicateExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getDuplicateExternalShippingSystemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be duplicated. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShippingSystemByFilter**
> \Infoplus\Model\ExternalShippingSystem[] getExternalShippingSystemByFilter($filter, $page, $limit, $sort)

Search externalShippingSystems by filter

Returns the list of externalShippingSystems that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getExternalShippingSystemByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ExternalShippingSystem[]**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShippingSystemById**
> \Infoplus\Model\ExternalShippingSystem getExternalShippingSystemById($external_shipping_system_id)

Get an externalShippingSystem by id

Returns the externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be returned.

try { 
    $result = $api_instance->getExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be returned. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalShippingSystem**
> updateExternalShippingSystem($body)

Update an externalShippingSystem

Updates an existing externalShippingSystem using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try { 
    $api_instance->updateExternalShippingSystem($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalShippingSystemCustomFields**
> updateExternalShippingSystemCustomFields($body)

Update an externalShippingSystem custom fields

Updates an existing externalShippingSystem custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try { 
    $api_instance->updateExternalShippingSystemCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystemCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

