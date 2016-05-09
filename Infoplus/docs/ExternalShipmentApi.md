# Infoplus\ExternalShipmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExternalShipment**](ExternalShipmentApi.md#addExternalShipment) | **POST** /v1.0/externalShipment | Create an externalShipment
[**deleteExternalShipment**](ExternalShipmentApi.md#deleteExternalShipment) | **DELETE** /v1.0/externalShipment/{externalShipmentId} | Delete an externalShipment
[**getExternalShipmentByFilter**](ExternalShipmentApi.md#getExternalShipmentByFilter) | **GET** /v1.0/externalShipment/search | Search externalShipments by filter
[**getExternalShipmentById**](ExternalShipmentApi.md#getExternalShipmentById) | **GET** /v1.0/externalShipment/{externalShipmentId} | Get an externalShipment by id
[**updateExternalShipment**](ExternalShipmentApi.md#updateExternalShipment) | **PUT** /v1.0/externalShipment | Update an externalShipment


# **addExternalShipment**
> \Infoplus\Model\ExternalShipment addExternalShipment($body)

Create an externalShipment

Inserts a new externalShipment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShipmentApi();
$body = new \Infoplus\Model\ExternalShipment(); // \Infoplus\Model\ExternalShipment | ExternalShipment to be inserted.

try { 
    $result = $api_instance->addExternalShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShipmentApi->addExternalShipment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShipment**](\Infoplus\Model\ExternalShipment.md)| ExternalShipment to be inserted. | 

### Return type

[**\Infoplus\Model\ExternalShipment**](ExternalShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteExternalShipment**
> deleteExternalShipment($external_shipment_id)

Delete an externalShipment

Deletes the externalShipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShipmentApi();
$external_shipment_id = 56; // int | Id of the externalShipment to be deleted.

try { 
    $api_instance->deleteExternalShipment($external_shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShipmentApi->deleteExternalShipment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipment_id** | **int**| Id of the externalShipment to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShipmentByFilter**
> \Infoplus\Model\ExternalShipment[] getExternalShipmentByFilter($filter, $page, $limit, $sort)

Search externalShipments by filter

Returns the list of externalShipments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShipmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getExternalShipmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShipmentApi->getExternalShipmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ExternalShipment[]**](ExternalShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShipmentById**
> \Infoplus\Model\ExternalShipment getExternalShipmentById($external_shipment_id)

Get an externalShipment by id

Returns the externalShipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShipmentApi();
$external_shipment_id = 56; // int | Id of the externalShipment to be returned.

try { 
    $result = $api_instance->getExternalShipmentById($external_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShipmentApi->getExternalShipmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipment_id** | **int**| Id of the externalShipment to be returned. | 

### Return type

[**\Infoplus\Model\ExternalShipment**](ExternalShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalShipment**
> updateExternalShipment($body)

Update an externalShipment

Updates an existing externalShipment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShipmentApi();
$body = new \Infoplus\Model\ExternalShipment(); // \Infoplus\Model\ExternalShipment | ExternalShipment to be updated.

try { 
    $api_instance->updateExternalShipment($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShipmentApi->updateExternalShipment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShipment**](\Infoplus\Model\ExternalShipment.md)| ExternalShipment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

