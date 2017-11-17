# Infoplus\BillOfLadingApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillOfLading**](BillOfLadingApi.md#addBillOfLading) | **POST** /v2.0/billOfLading | Create a billOfLading
[**deleteBillOfLading**](BillOfLadingApi.md#deleteBillOfLading) | **DELETE** /v2.0/billOfLading/{billOfLadingId} | Delete a billOfLading
[**getBillOfLadingByFilter**](BillOfLadingApi.md#getBillOfLadingByFilter) | **GET** /v2.0/billOfLading/search | Search billOfLadings by filter
[**getBillOfLadingById**](BillOfLadingApi.md#getBillOfLadingById) | **GET** /v2.0/billOfLading/{billOfLadingId} | Get a billOfLading by id
[**getDuplicateBillOfLadingById**](BillOfLadingApi.md#getDuplicateBillOfLadingById) | **GET** /v2.0/billOfLading/duplicate/{billOfLadingId} | Get a duplicated a billOfLading by id
[**updateBillOfLading**](BillOfLadingApi.md#updateBillOfLading) | **PUT** /v2.0/billOfLading | Update a billOfLading
[**updateBillOfLadingCustomFields**](BillOfLadingApi.md#updateBillOfLadingCustomFields) | **PUT** /v2.0/billOfLading/customFields | Update a billOfLading custom fields


# **addBillOfLading**
> \Infoplus\Model\BillOfLading addBillOfLading($body)

Create a billOfLading

Inserts a new billOfLading using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$body = new \Infoplus\Model\BillOfLading(); // \Infoplus\Model\BillOfLading | BillOfLading to be inserted.

try { 
    $result = $api_instance->addBillOfLading($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->addBillOfLading: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillOfLading**](\Infoplus\Model\BillOfLading.md)| BillOfLading to be inserted. | 

### Return type

[**\Infoplus\Model\BillOfLading**](BillOfLading.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteBillOfLading**
> deleteBillOfLading($bill_of_lading_id)

Delete a billOfLading

Deletes the billOfLading identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$bill_of_lading_id = 56; // int | Id of the billOfLading to be deleted.

try { 
    $api_instance->deleteBillOfLading($bill_of_lading_id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->deleteBillOfLading: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillOfLadingByFilter**
> \Infoplus\Model\BillOfLading[] getBillOfLadingByFilter($filter, $page, $limit, $sort)

Search billOfLadings by filter

Returns the list of billOfLadings that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getBillOfLadingByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\BillOfLading[]**](BillOfLading.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillOfLadingById**
> \Infoplus\Model\BillOfLading getBillOfLadingById($bill_of_lading_id)

Get a billOfLading by id

Returns the billOfLading identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$bill_of_lading_id = 56; // int | Id of the billOfLading to be returned.

try { 
    $result = $api_instance->getBillOfLadingById($bill_of_lading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getBillOfLadingById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be returned. | 

### Return type

[**\Infoplus\Model\BillOfLading**](BillOfLading.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateBillOfLadingById**
> \Infoplus\Model\BillOfLading getDuplicateBillOfLadingById($bill_of_lading_id)

Get a duplicated a billOfLading by id

Returns a duplicated billOfLading identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$bill_of_lading_id = 56; // int | Id of the billOfLading to be duplicated.

try { 
    $result = $api_instance->getDuplicateBillOfLadingById($bill_of_lading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->getDuplicateBillOfLadingById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_of_lading_id** | **int**| Id of the billOfLading to be duplicated. | 

### Return type

[**\Infoplus\Model\BillOfLading**](BillOfLading.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBillOfLading**
> updateBillOfLading($body)

Update a billOfLading

Updates an existing billOfLading using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$body = new \Infoplus\Model\BillOfLading(); // \Infoplus\Model\BillOfLading | BillOfLading to be updated.

try { 
    $api_instance->updateBillOfLading($body);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->updateBillOfLading: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillOfLading**](\Infoplus\Model\BillOfLading.md)| BillOfLading to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBillOfLadingCustomFields**
> updateBillOfLadingCustomFields($body)

Update a billOfLading custom fields

Updates an existing billOfLading custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillOfLadingApi();
$body = new \Infoplus\Model\BillOfLading(); // \Infoplus\Model\BillOfLading | BillOfLading to be updated.

try { 
    $api_instance->updateBillOfLadingCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling BillOfLadingApi->updateBillOfLadingCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillOfLading**](\Infoplus\Model\BillOfLading.md)| BillOfLading to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

