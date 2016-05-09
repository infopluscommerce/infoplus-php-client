# Infoplus\VendorComplianceSurveyApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVendorComplianceSurvey**](VendorComplianceSurveyApi.md#addVendorComplianceSurvey) | **POST** /v1.0/vendorComplianceSurvey | Create a vendorComplianceSurvey
[**deleteVendorComplianceSurvey**](VendorComplianceSurveyApi.md#deleteVendorComplianceSurvey) | **DELETE** /v1.0/vendorComplianceSurvey/{vendorComplianceSurveyId} | Delete a vendorComplianceSurvey
[**getVendorComplianceSurveyByFilter**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyByFilter) | **GET** /v1.0/vendorComplianceSurvey/search | Search vendorComplianceSurveys by filter
[**getVendorComplianceSurveyById**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyById) | **GET** /v1.0/vendorComplianceSurvey/{vendorComplianceSurveyId} | Get a vendorComplianceSurvey by id
[**updateVendorComplianceSurvey**](VendorComplianceSurveyApi.md#updateVendorComplianceSurvey) | **PUT** /v1.0/vendorComplianceSurvey | Update a vendorComplianceSurvey


# **addVendorComplianceSurvey**
> \Infoplus\Model\VendorComplianceSurvey addVendorComplianceSurvey($body)

Create a vendorComplianceSurvey

Inserts a new vendorComplianceSurvey using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorComplianceSurveyApi();
$body = new \Infoplus\Model\VendorComplianceSurvey(); // \Infoplus\Model\VendorComplianceSurvey | VendorComplianceSurvey to be inserted.

try { 
    $result = $api_instance->addVendorComplianceSurvey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurvey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\VendorComplianceSurvey**](\Infoplus\Model\VendorComplianceSurvey.md)| VendorComplianceSurvey to be inserted. | 

### Return type

[**\Infoplus\Model\VendorComplianceSurvey**](VendorComplianceSurvey.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteVendorComplianceSurvey**
> deleteVendorComplianceSurvey($vendor_compliance_survey_id)

Delete a vendorComplianceSurvey

Deletes the vendorComplianceSurvey identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorComplianceSurveyApi();
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to be deleted.

try { 
    $api_instance->deleteVendorComplianceSurvey($vendor_compliance_survey_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->deleteVendorComplianceSurvey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getVendorComplianceSurveyByFilter**
> \Infoplus\Model\VendorComplianceSurvey[] getVendorComplianceSurveyByFilter($filter, $page, $limit, $sort)

Search vendorComplianceSurveys by filter

Returns the list of vendorComplianceSurveys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorComplianceSurveyApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getVendorComplianceSurveyByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\VendorComplianceSurvey[]**](VendorComplianceSurvey.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getVendorComplianceSurveyById**
> \Infoplus\Model\VendorComplianceSurvey getVendorComplianceSurveyById($vendor_compliance_survey_id)

Get a vendorComplianceSurvey by id

Returns the vendorComplianceSurvey identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorComplianceSurveyApi();
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to be returned.

try { 
    $result = $api_instance->getVendorComplianceSurveyById($vendor_compliance_survey_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to be returned. | 

### Return type

[**\Infoplus\Model\VendorComplianceSurvey**](VendorComplianceSurvey.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateVendorComplianceSurvey**
> updateVendorComplianceSurvey($body)

Update a vendorComplianceSurvey

Updates an existing vendorComplianceSurvey using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorComplianceSurveyApi();
$body = new \Infoplus\Model\VendorComplianceSurvey(); // \Infoplus\Model\VendorComplianceSurvey | VendorComplianceSurvey to be updated.

try { 
    $api_instance->updateVendorComplianceSurvey($body);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->updateVendorComplianceSurvey: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\VendorComplianceSurvey**](\Infoplus\Model\VendorComplianceSurvey.md)| VendorComplianceSurvey to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

