# Infoplus\ParcelShipmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDuplicateParcelShipmentById**](ParcelShipmentApi.md#getDuplicateParcelShipmentById) | **GET** /v2.0/parcelShipment/duplicate/{parcelShipmentId} | Get a duplicated a parcelShipment by id
[**getParcelShipmentByFilter**](ParcelShipmentApi.md#getParcelShipmentByFilter) | **GET** /v2.0/parcelShipment/search | Search parcelShipments by filter
[**getParcelShipmentById**](ParcelShipmentApi.md#getParcelShipmentById) | **GET** /v2.0/parcelShipment/{parcelShipmentId} | Get a parcelShipment by id
[**updateParcelShipmentCustomFields**](ParcelShipmentApi.md#updateParcelShipmentCustomFields) | **PUT** /v2.0/parcelShipment/customFields | Update a parcelShipment custom fields


# **getDuplicateParcelShipmentById**
> \Infoplus\Model\ParcelShipment getDuplicateParcelShipmentById($parcel_shipment_id)

Get a duplicated a parcelShipment by id

Returns a duplicated parcelShipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ParcelShipmentApi();
$parcel_shipment_id = 56; // int | Id of the parcelShipment to be duplicated.

try { 
    $result = $api_instance->getDuplicateParcelShipmentById($parcel_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelShipmentApi->getDuplicateParcelShipmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_shipment_id** | **int**| Id of the parcelShipment to be duplicated. | 

### Return type

[**\Infoplus\Model\ParcelShipment**](ParcelShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getParcelShipmentByFilter**
> \Infoplus\Model\ParcelShipment[] getParcelShipmentByFilter($filter, $page, $limit, $sort)

Search parcelShipments by filter

Returns the list of parcelShipments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ParcelShipmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getParcelShipmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelShipmentApi->getParcelShipmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ParcelShipment[]**](ParcelShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getParcelShipmentById**
> \Infoplus\Model\ParcelShipment getParcelShipmentById($parcel_shipment_id)

Get a parcelShipment by id

Returns the parcelShipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ParcelShipmentApi();
$parcel_shipment_id = 56; // int | Id of the parcelShipment to be returned.

try { 
    $result = $api_instance->getParcelShipmentById($parcel_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelShipmentApi->getParcelShipmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_shipment_id** | **int**| Id of the parcelShipment to be returned. | 

### Return type

[**\Infoplus\Model\ParcelShipment**](ParcelShipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateParcelShipmentCustomFields**
> updateParcelShipmentCustomFields($body)

Update a parcelShipment custom fields

Updates an existing parcelShipment custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ParcelShipmentApi();
$body = new \Infoplus\Model\ParcelShipment(); // \Infoplus\Model\ParcelShipment | ParcelShipment to be updated.

try { 
    $api_instance->updateParcelShipmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ParcelShipmentApi->updateParcelShipmentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ParcelShipment**](\Infoplus\Model\ParcelShipment.md)| ParcelShipment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

