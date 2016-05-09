# Infoplus\CarrierServiceApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCarrierServiceById**](CarrierServiceApi.md#getCarrierServiceById) | **GET** /v1.0/carrierService/{carrierServiceId} | Get a carrierService by id
[**getCarrierServiceBySearchText**](CarrierServiceApi.md#getCarrierServiceBySearchText) | **GET** /v1.0/carrierService/search | Search carrierServices


# **getCarrierServiceById**
> \Infoplus\Model\CarrierService getCarrierServiceById($carrier_service_id)

Get a carrierService by id

Returns the carrierService identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CarrierServiceApi();
$carrier_service_id = "carrier_service_id_example"; // string | Id of carrierService to be returned.

try { 
    $result = $api_instance->getCarrierServiceById($carrier_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierServiceApi->getCarrierServiceById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_service_id** | **string**| Id of carrierService to be returned. | 

### Return type

[**\Infoplus\Model\CarrierService**](CarrierService.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCarrierServiceBySearchText**
> \Infoplus\Model\CarrierService[] getCarrierServiceBySearchText($search_text, $page, $limit)

Search carrierServices

Returns the list of carrierServices that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CarrierServiceApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getCarrierServiceBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarrierServiceApi->getCarrierServiceBySearchText: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text, used to filter results. | [optional] 
 **page** | **int**| Result page number.  Defaults to 1. | [optional] 
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional] 

### Return type

[**\Infoplus\Model\CarrierService[]**](CarrierService.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
