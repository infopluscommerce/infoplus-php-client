# Infoplus\SupplementApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSupplement**](SupplementApi.md#addSupplement) | **POST** /beta/supplement | Create a supplement
[**deleteSupplement**](SupplementApi.md#deleteSupplement) | **DELETE** /beta/supplement/{supplementId} | Delete a supplement
[**getSupplementByFilter**](SupplementApi.md#getSupplementByFilter) | **GET** /beta/supplement/search | Search supplements by filter
[**getSupplementById**](SupplementApi.md#getSupplementById) | **GET** /beta/supplement/{supplementId} | Get a supplement by id
[**updateSupplement**](SupplementApi.md#updateSupplement) | **PUT** /beta/supplement | Update a supplement
[**updateSupplementCustomFields**](SupplementApi.md#updateSupplementCustomFields) | **PUT** /beta/supplement/customFields | Update a supplement custom fields


# **addSupplement**
> \Infoplus\Model\Supplement addSupplement($body)

Create a supplement

Inserts a new supplement using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$body = new \Infoplus\Model\Supplement(); // \Infoplus\Model\Supplement | Supplement to be inserted.

try { 
    $result = $api_instance->addSupplement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->addSupplement: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Supplement**](\Infoplus\Model\Supplement.md)| Supplement to be inserted. | 

### Return type

[**\Infoplus\Model\Supplement**](Supplement.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteSupplement**
> deleteSupplement($supplement_id)

Delete a supplement

Deletes the supplement identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$supplement_id = 56; // int | Id of the supplement to be deleted.

try { 
    $api_instance->deleteSupplement($supplement_id);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->deleteSupplement: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSupplementByFilter**
> \Infoplus\Model\Supplement[] getSupplementByFilter($filter, $page, $limit, $sort)

Search supplements by filter

Returns the list of supplements that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getSupplementByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Supplement[]**](Supplement.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSupplementById**
> \Infoplus\Model\Supplement getSupplementById($supplement_id)

Get a supplement by id

Returns the supplement identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$supplement_id = 56; // int | Id of the supplement to be returned.

try { 
    $result = $api_instance->getSupplementById($supplement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->getSupplementById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplement_id** | **int**| Id of the supplement to be returned. | 

### Return type

[**\Infoplus\Model\Supplement**](Supplement.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateSupplement**
> updateSupplement($body)

Update a supplement

Updates an existing supplement using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$body = new \Infoplus\Model\Supplement(); // \Infoplus\Model\Supplement | Supplement to be updated.

try { 
    $api_instance->updateSupplement($body);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->updateSupplement: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Supplement**](\Infoplus\Model\Supplement.md)| Supplement to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateSupplementCustomFields**
> updateSupplementCustomFields($body)

Update a supplement custom fields

Updates an existing supplement custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SupplementApi();
$body = new \Infoplus\Model\Supplement(); // \Infoplus\Model\Supplement | Supplement to be updated.

try { 
    $api_instance->updateSupplementCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling SupplementApi->updateSupplementCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Supplement**](\Infoplus\Model\Supplement.md)| Supplement to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

