# Infoplus\VendorApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVendor**](VendorApi.md#addVendor) | **POST** /v1.0/vendor | Create a vendor
[**deleteVendor**](VendorApi.md#deleteVendor) | **DELETE** /v1.0/vendor/{vendorId} | Delete a vendor
[**getVendorByFilter**](VendorApi.md#getVendorByFilter) | **GET** /v1.0/vendor/search | Search vendors by filter
[**getVendorById**](VendorApi.md#getVendorById) | **GET** /v1.0/vendor/{vendorId} | Get a vendor by id
[**updateVendor**](VendorApi.md#updateVendor) | **PUT** /v1.0/vendor | Update a vendor


# **addVendor**
> \Infoplus\Model\Vendor addVendor($body)

Create a vendor

Inserts a new vendor using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorApi();
$body = new \Infoplus\Model\Vendor(); // \Infoplus\Model\Vendor | Vendor to be inserted.

try { 
    $result = $api_instance->addVendor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->addVendor: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Vendor**](\Infoplus\Model\Vendor.md)| Vendor to be inserted. | 

### Return type

[**\Infoplus\Model\Vendor**](Vendor.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteVendor**
> deleteVendor($vendor_id)

Delete a vendor

Deletes the vendor identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorApi();
$vendor_id = 56; // int | Id of the vendor to be deleted.

try { 
    $api_instance->deleteVendor($vendor_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->deleteVendor: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_id** | **int**| Id of the vendor to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getVendorByFilter**
> \Infoplus\Model\Vendor[] getVendorByFilter($filter, $page, $limit, $sort)

Search vendors by filter

Returns the list of vendors that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getVendorByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->getVendorByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Vendor[]**](Vendor.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getVendorById**
> \Infoplus\Model\Vendor getVendorById($vendor_id)

Get a vendor by id

Returns the vendor identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorApi();
$vendor_id = 56; // int | Id of the vendor to be returned.

try { 
    $result = $api_instance->getVendorById($vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->getVendorById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_id** | **int**| Id of the vendor to be returned. | 

### Return type

[**\Infoplus\Model\Vendor**](Vendor.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateVendor**
> updateVendor($body)

Update a vendor

Updates an existing vendor using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\VendorApi();
$body = new \Infoplus\Model\Vendor(); // \Infoplus\Model\Vendor | Vendor to be updated.

try { 
    $api_instance->updateVendor($body);
} catch (Exception $e) {
    echo 'Exception when calling VendorApi->updateVendor: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Vendor**](\Infoplus\Model\Vendor.md)| Vendor to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

