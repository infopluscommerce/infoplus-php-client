# Infoplus\IntegrationPartnerApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntegrationPartnerById**](IntegrationPartnerApi.md#getIntegrationPartnerById) | **GET** /v1.0/integrationPartner/{integrationPartnerId} | Get an integrationPartner by id
[**getIntegrationPartnerBySearchText**](IntegrationPartnerApi.md#getIntegrationPartnerBySearchText) | **GET** /v1.0/integrationPartner/search | Search integrationPartners


# **getIntegrationPartnerById**
> \Infoplus\Model\IntegrationPartner getIntegrationPartnerById($integration_partner_id)

Get an integrationPartner by id

Returns the integrationPartner identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\IntegrationPartnerApi();
$integration_partner_id = "integration_partner_id_example"; // string | Id of integrationPartner to be returned.

try { 
    $result = $api_instance->getIntegrationPartnerById($integration_partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationPartnerApi->getIntegrationPartnerById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_partner_id** | **string**| Id of integrationPartner to be returned. | 

### Return type

[**\Infoplus\Model\IntegrationPartner**](IntegrationPartner.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getIntegrationPartnerBySearchText**
> \Infoplus\Model\IntegrationPartner[] getIntegrationPartnerBySearchText($search_text, $page, $limit)

Search integrationPartners

Returns the list of integrationPartners that match the given searchText.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\IntegrationPartnerApi();
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try { 
    $result = $api_instance->getIntegrationPartnerBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationPartnerApi->getIntegrationPartnerBySearchText: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\IntegrationPartner[]**](IntegrationPartner.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

