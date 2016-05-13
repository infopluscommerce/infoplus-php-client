# Infoplus\ThirdPartyParcelAccountApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#addThirdPartyParcelAccount) | **POST** /v1.0/thirdPartyParcelAccount | Create a thirdPartyParcelAccount
[**deleteThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#deleteThirdPartyParcelAccount) | **DELETE** /v1.0/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Delete a thirdPartyParcelAccount
[**getThirdPartyParcelAccountByFilter**](ThirdPartyParcelAccountApi.md#getThirdPartyParcelAccountByFilter) | **GET** /v1.0/thirdPartyParcelAccount/search | Search thirdPartyParcelAccounts by filter
[**getThirdPartyParcelAccountById**](ThirdPartyParcelAccountApi.md#getThirdPartyParcelAccountById) | **GET** /v1.0/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Get a thirdPartyParcelAccount by id
[**updateThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#updateThirdPartyParcelAccount) | **PUT** /v1.0/thirdPartyParcelAccount | Update a thirdPartyParcelAccount


# **addThirdPartyParcelAccount**
> \Infoplus\Model\ThirdPartyParcelAccount addThirdPartyParcelAccount($body)

Create a thirdPartyParcelAccount

Inserts a new thirdPartyParcelAccount using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$body = new \Infoplus\Model\ThirdPartyParcelAccount(); // \Infoplus\Model\ThirdPartyParcelAccount | ThirdPartyParcelAccount to be inserted.

try { 
    $result = $api_instance->addThirdPartyParcelAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->addThirdPartyParcelAccount: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ThirdPartyParcelAccount**](\Infoplus\Model\ThirdPartyParcelAccount.md)| ThirdPartyParcelAccount to be inserted. | 

### Return type

[**\Infoplus\Model\ThirdPartyParcelAccount**](ThirdPartyParcelAccount.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteThirdPartyParcelAccount**
> deleteThirdPartyParcelAccount($third_party_parcel_account_id)

Delete a thirdPartyParcelAccount

Deletes the thirdPartyParcelAccount identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to be deleted.

try { 
    $api_instance->deleteThirdPartyParcelAccount($third_party_parcel_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->deleteThirdPartyParcelAccount: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getThirdPartyParcelAccountByFilter**
> \Infoplus\Model\ThirdPartyParcelAccount[] getThirdPartyParcelAccountByFilter($filter, $page, $limit, $sort)

Search thirdPartyParcelAccounts by filter

Returns the list of thirdPartyParcelAccounts that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getThirdPartyParcelAccountByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->getThirdPartyParcelAccountByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ThirdPartyParcelAccount[]**](ThirdPartyParcelAccount.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getThirdPartyParcelAccountById**
> \Infoplus\Model\ThirdPartyParcelAccount getThirdPartyParcelAccountById($third_party_parcel_account_id)

Get a thirdPartyParcelAccount by id

Returns the thirdPartyParcelAccount identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to be returned.

try { 
    $result = $api_instance->getThirdPartyParcelAccountById($third_party_parcel_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->getThirdPartyParcelAccountById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to be returned. | 

### Return type

[**\Infoplus\Model\ThirdPartyParcelAccount**](ThirdPartyParcelAccount.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateThirdPartyParcelAccount**
> updateThirdPartyParcelAccount($body)

Update a thirdPartyParcelAccount

Updates an existing thirdPartyParcelAccount using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$body = new \Infoplus\Model\ThirdPartyParcelAccount(); // \Infoplus\Model\ThirdPartyParcelAccount | ThirdPartyParcelAccount to be updated.

try { 
    $api_instance->updateThirdPartyParcelAccount($body);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->updateThirdPartyParcelAccount: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ThirdPartyParcelAccount**](\Infoplus\Model\ThirdPartyParcelAccount.md)| ThirdPartyParcelAccount to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

