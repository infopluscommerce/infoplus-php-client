# Infoplus\AisleApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAisle**](AisleApi.md#addAisle) | **POST** /v1.0/aisle | Create an aisle
[**deleteAisle**](AisleApi.md#deleteAisle) | **DELETE** /v1.0/aisle/{aisleId} | Delete an aisle
[**getAisleByFilter**](AisleApi.md#getAisleByFilter) | **GET** /v1.0/aisle/search | Search aisles by filter
[**getAisleById**](AisleApi.md#getAisleById) | **GET** /v1.0/aisle/{aisleId} | Get an aisle by id
[**updateAisle**](AisleApi.md#updateAisle) | **PUT** /v1.0/aisle | Update an aisle


# **addAisle**
> \Infoplus\Model\Aisle addAisle($body)

Create an aisle

Inserts a new aisle using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AisleApi();
$body = new \Infoplus\Model\Aisle(); // \Infoplus\Model\Aisle | Aisle to be inserted.

try { 
    $result = $api_instance->addAisle($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AisleApi->addAisle: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Aisle**](\Infoplus\Model\Aisle.md)| Aisle to be inserted. | 

### Return type

[**\Infoplus\Model\Aisle**](Aisle.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteAisle**
> deleteAisle($aisle_id)

Delete an aisle

Deletes the aisle identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AisleApi();
$aisle_id = 56; // int | Id of the aisle to be deleted.

try { 
    $api_instance->deleteAisle($aisle_id);
} catch (Exception $e) {
    echo 'Exception when calling AisleApi->deleteAisle: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aisle_id** | **int**| Id of the aisle to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAisleByFilter**
> \Infoplus\Model\Aisle[] getAisleByFilter($filter, $page, $limit, $sort)

Search aisles by filter

Returns the list of aisles that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AisleApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getAisleByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AisleApi->getAisleByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Aisle[]**](Aisle.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAisleById**
> \Infoplus\Model\Aisle getAisleById($aisle_id)

Get an aisle by id

Returns the aisle identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AisleApi();
$aisle_id = 56; // int | Id of the aisle to be returned.

try { 
    $result = $api_instance->getAisleById($aisle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AisleApi->getAisleById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aisle_id** | **int**| Id of the aisle to be returned. | 

### Return type

[**\Infoplus\Model\Aisle**](Aisle.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateAisle**
> updateAisle($body)

Update an aisle

Updates an existing aisle using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AisleApi();
$body = new \Infoplus\Model\Aisle(); // \Infoplus\Model\Aisle | Aisle to be updated.

try { 
    $api_instance->updateAisle($body);
} catch (Exception $e) {
    echo 'Exception when calling AisleApi->updateAisle: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Aisle**](\Infoplus\Model\Aisle.md)| Aisle to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

