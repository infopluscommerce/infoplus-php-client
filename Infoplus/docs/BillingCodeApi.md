# Infoplus\BillingCodeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingCode**](BillingCodeApi.md#addBillingCode) | **POST** /v1.0/billingCode | Create a billingCode
[**deleteBillingCode**](BillingCodeApi.md#deleteBillingCode) | **DELETE** /v1.0/billingCode/{billingCodeId} | Delete a billingCode
[**getBillingCodeByFilter**](BillingCodeApi.md#getBillingCodeByFilter) | **GET** /v1.0/billingCode/search | Search billingCodes by filter
[**getBillingCodeById**](BillingCodeApi.md#getBillingCodeById) | **GET** /v1.0/billingCode/{billingCodeId} | Get a billingCode by id
[**updateBillingCode**](BillingCodeApi.md#updateBillingCode) | **PUT** /v1.0/billingCode | Update a billingCode


# **addBillingCode**
> \Infoplus\Model\BillingCode addBillingCode($body)

Create a billingCode

Inserts a new billingCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeApi();
$body = new \Infoplus\Model\BillingCode(); // \Infoplus\Model\BillingCode | BillingCode to be inserted.

try { 
    $result = $api_instance->addBillingCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeApi->addBillingCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillingCode**](\Infoplus\Model\BillingCode.md)| BillingCode to be inserted. | 

### Return type

[**\Infoplus\Model\BillingCode**](BillingCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteBillingCode**
> deleteBillingCode($billing_code_id)

Delete a billingCode

Deletes the billingCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeApi();
$billing_code_id = 56; // int | Id of the billingCode to be deleted.

try { 
    $api_instance->deleteBillingCode($billing_code_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeApi->deleteBillingCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_id** | **int**| Id of the billingCode to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillingCodeByFilter**
> \Infoplus\Model\BillingCode[] getBillingCodeByFilter($filter, $page, $limit, $sort)

Search billingCodes by filter

Returns the list of billingCodes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getBillingCodeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeApi->getBillingCodeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\BillingCode[]**](BillingCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillingCodeById**
> \Infoplus\Model\BillingCode getBillingCodeById($billing_code_id)

Get a billingCode by id

Returns the billingCode identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeApi();
$billing_code_id = 56; // int | Id of the billingCode to be returned.

try { 
    $result = $api_instance->getBillingCodeById($billing_code_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeApi->getBillingCodeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_id** | **int**| Id of the billingCode to be returned. | 

### Return type

[**\Infoplus\Model\BillingCode**](BillingCode.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBillingCode**
> updateBillingCode($body)

Update a billingCode

Updates an existing billingCode using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeApi();
$body = new \Infoplus\Model\BillingCode(); // \Infoplus\Model\BillingCode | BillingCode to be updated.

try { 
    $api_instance->updateBillingCode($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeApi->updateBillingCode: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillingCode**](\Infoplus\Model\BillingCode.md)| BillingCode to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

