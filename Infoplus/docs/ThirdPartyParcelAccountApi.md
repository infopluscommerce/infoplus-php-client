# Infoplus\ThirdPartyParcelAccountApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#addThirdPartyParcelAccount) | **POST** /beta/thirdPartyParcelAccount | Create a thirdPartyParcelAccount
[**addThirdPartyParcelAccountAudit**](ThirdPartyParcelAccountApi.md#addThirdPartyParcelAccountAudit) | **PUT** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId}/audit/{thirdPartyParcelAccountAudit} | Add new audit for a thirdPartyParcelAccount
[**addThirdPartyParcelAccountTag**](ThirdPartyParcelAccountApi.md#addThirdPartyParcelAccountTag) | **PUT** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId}/tag/{thirdPartyParcelAccountTag} | Add new tags for a thirdPartyParcelAccount.
[**deleteThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#deleteThirdPartyParcelAccount) | **DELETE** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Delete a thirdPartyParcelAccount
[**deleteThirdPartyParcelAccountTag**](ThirdPartyParcelAccountApi.md#deleteThirdPartyParcelAccountTag) | **DELETE** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId}/tag/{thirdPartyParcelAccountTag} | Delete a tag for a thirdPartyParcelAccount.
[**getDuplicateThirdPartyParcelAccountById**](ThirdPartyParcelAccountApi.md#getDuplicateThirdPartyParcelAccountById) | **GET** /beta/thirdPartyParcelAccount/duplicate/{thirdPartyParcelAccountId} | Get a duplicated a thirdPartyParcelAccount by id
[**getThirdPartyParcelAccountByFilter**](ThirdPartyParcelAccountApi.md#getThirdPartyParcelAccountByFilter) | **GET** /beta/thirdPartyParcelAccount/search | Search thirdPartyParcelAccounts by filter
[**getThirdPartyParcelAccountById**](ThirdPartyParcelAccountApi.md#getThirdPartyParcelAccountById) | **GET** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Get a thirdPartyParcelAccount by id
[**getThirdPartyParcelAccountTags**](ThirdPartyParcelAccountApi.md#getThirdPartyParcelAccountTags) | **GET** /beta/thirdPartyParcelAccount/{thirdPartyParcelAccountId}/tag | Get the tags for a thirdPartyParcelAccount.
[**updateThirdPartyParcelAccount**](ThirdPartyParcelAccountApi.md#updateThirdPartyParcelAccount) | **PUT** /beta/thirdPartyParcelAccount | Update a thirdPartyParcelAccount
[**updateThirdPartyParcelAccountCustomFields**](ThirdPartyParcelAccountApi.md#updateThirdPartyParcelAccountCustomFields) | **PUT** /beta/thirdPartyParcelAccount/customFields | Update a thirdPartyParcelAccount custom fields


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

# **addThirdPartyParcelAccountAudit**
> addThirdPartyParcelAccountAudit($third_party_parcel_account_id, $third_party_parcel_account_audit)

Add new audit for a thirdPartyParcelAccount

Adds an audit to an existing thirdPartyParcelAccount.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to add an audit to
$third_party_parcel_account_audit = "third_party_parcel_account_audit_example"; // string | The audit to add

try { 
    $api_instance->addThirdPartyParcelAccountAudit($third_party_parcel_account_id, $third_party_parcel_account_audit);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->addThirdPartyParcelAccountAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to add an audit to | 
 **third_party_parcel_account_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addThirdPartyParcelAccountTag**
> addThirdPartyParcelAccountTag($third_party_parcel_account_id, $third_party_parcel_account_tag)

Add new tags for a thirdPartyParcelAccount.

Adds a tag to an existing thirdPartyParcelAccount.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to add a tag to
$third_party_parcel_account_tag = "third_party_parcel_account_tag_example"; // string | The tag to add

try { 
    $api_instance->addThirdPartyParcelAccountTag($third_party_parcel_account_id, $third_party_parcel_account_tag);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->addThirdPartyParcelAccountTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to add a tag to | 
 **third_party_parcel_account_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

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

# **deleteThirdPartyParcelAccountTag**
> deleteThirdPartyParcelAccountTag($third_party_parcel_account_id, $third_party_parcel_account_tag)

Delete a tag for a thirdPartyParcelAccount.

Deletes an existing thirdPartyParcelAccount tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to remove tag from
$third_party_parcel_account_tag = "third_party_parcel_account_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteThirdPartyParcelAccountTag($third_party_parcel_account_id, $third_party_parcel_account_tag);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->deleteThirdPartyParcelAccountTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to remove tag from | 
 **third_party_parcel_account_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateThirdPartyParcelAccountById**
> \Infoplus\Model\ThirdPartyParcelAccount getDuplicateThirdPartyParcelAccountById($third_party_parcel_account_id)

Get a duplicated a thirdPartyParcelAccount by id

Returns a duplicated thirdPartyParcelAccount identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to be duplicated.

try { 
    $result = $api_instance->getDuplicateThirdPartyParcelAccountById($third_party_parcel_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->getDuplicateThirdPartyParcelAccountById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to be duplicated. | 

### Return type

[**\Infoplus\Model\ThirdPartyParcelAccount**](ThirdPartyParcelAccount.md)

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

# **getThirdPartyParcelAccountTags**
> getThirdPartyParcelAccountTags($third_party_parcel_account_id)

Get the tags for a thirdPartyParcelAccount.

Get all existing thirdPartyParcelAccount tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ThirdPartyParcelAccountApi();
$third_party_parcel_account_id = 56; // int | Id of the thirdPartyParcelAccount to get tags for

try { 
    $api_instance->getThirdPartyParcelAccountTags($third_party_parcel_account_id);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->getThirdPartyParcelAccountTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **third_party_parcel_account_id** | **int**| Id of the thirdPartyParcelAccount to get tags for | 

### Return type

void (empty response body)

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

# **updateThirdPartyParcelAccountCustomFields**
> updateThirdPartyParcelAccountCustomFields($body)

Update a thirdPartyParcelAccount custom fields

Updates an existing thirdPartyParcelAccount custom fields using the specified data.

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
    $api_instance->updateThirdPartyParcelAccountCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyParcelAccountApi->updateThirdPartyParcelAccountCustomFields: ', $e->getMessage(), "\n";
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

