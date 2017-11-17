# Infoplus\LegacyLowstockContactApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLegacyLowstockContact**](LegacyLowstockContactApi.md#addLegacyLowstockContact) | **POST** /v2.0/legacyLowstockContact | Create a legacyLowstockContact
[**deleteLegacyLowstockContact**](LegacyLowstockContactApi.md#deleteLegacyLowstockContact) | **DELETE** /v2.0/legacyLowstockContact/{legacyLowstockContactId} | Delete a legacyLowstockContact
[**getDuplicateLegacyLowstockContactById**](LegacyLowstockContactApi.md#getDuplicateLegacyLowstockContactById) | **GET** /v2.0/legacyLowstockContact/duplicate/{legacyLowstockContactId} | Get a duplicated a legacyLowstockContact by id
[**getLegacyLowstockContactByFilter**](LegacyLowstockContactApi.md#getLegacyLowstockContactByFilter) | **GET** /v2.0/legacyLowstockContact/search | Search legacyLowstockContacts by filter
[**getLegacyLowstockContactById**](LegacyLowstockContactApi.md#getLegacyLowstockContactById) | **GET** /v2.0/legacyLowstockContact/{legacyLowstockContactId} | Get a legacyLowstockContact by id
[**updateLegacyLowstockContact**](LegacyLowstockContactApi.md#updateLegacyLowstockContact) | **PUT** /v2.0/legacyLowstockContact | Update a legacyLowstockContact


# **addLegacyLowstockContact**
> \Infoplus\Model\LegacyLowstockContact addLegacyLowstockContact($body)

Create a legacyLowstockContact

Inserts a new legacyLowstockContact using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$body = new \Infoplus\Model\LegacyLowstockContact(); // \Infoplus\Model\LegacyLowstockContact | LegacyLowstockContact to be inserted.

try { 
    $result = $api_instance->addLegacyLowstockContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->addLegacyLowstockContact: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LegacyLowstockContact**](\Infoplus\Model\LegacyLowstockContact.md)| LegacyLowstockContact to be inserted. | 

### Return type

[**\Infoplus\Model\LegacyLowstockContact**](LegacyLowstockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteLegacyLowstockContact**
> deleteLegacyLowstockContact($legacy_lowstock_contact_id)

Delete a legacyLowstockContact

Deletes the legacyLowstockContact identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be deleted.

try { 
    $api_instance->deleteLegacyLowstockContact($legacy_lowstock_contact_id);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->deleteLegacyLowstockContact: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateLegacyLowstockContactById**
> \Infoplus\Model\LegacyLowstockContact getDuplicateLegacyLowstockContactById($legacy_lowstock_contact_id)

Get a duplicated a legacyLowstockContact by id

Returns a duplicated legacyLowstockContact identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be duplicated.

try { 
    $result = $api_instance->getDuplicateLegacyLowstockContactById($legacy_lowstock_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getDuplicateLegacyLowstockContactById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be duplicated. | 

### Return type

[**\Infoplus\Model\LegacyLowstockContact**](LegacyLowstockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLegacyLowstockContactByFilter**
> \Infoplus\Model\LegacyLowstockContact[] getLegacyLowstockContactByFilter($filter, $page, $limit, $sort)

Search legacyLowstockContacts by filter

Returns the list of legacyLowstockContacts that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getLegacyLowstockContactByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\LegacyLowstockContact[]**](LegacyLowstockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getLegacyLowstockContactById**
> \Infoplus\Model\LegacyLowstockContact getLegacyLowstockContactById($legacy_lowstock_contact_id)

Get a legacyLowstockContact by id

Returns the legacyLowstockContact identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$legacy_lowstock_contact_id = 56; // int | Id of the legacyLowstockContact to be returned.

try { 
    $result = $api_instance->getLegacyLowstockContactById($legacy_lowstock_contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->getLegacyLowstockContactById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_lowstock_contact_id** | **int**| Id of the legacyLowstockContact to be returned. | 

### Return type

[**\Infoplus\Model\LegacyLowstockContact**](LegacyLowstockContact.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateLegacyLowstockContact**
> updateLegacyLowstockContact($body)

Update a legacyLowstockContact

Updates an existing legacyLowstockContact using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\LegacyLowstockContactApi();
$body = new \Infoplus\Model\LegacyLowstockContact(); // \Infoplus\Model\LegacyLowstockContact | LegacyLowstockContact to be updated.

try { 
    $api_instance->updateLegacyLowstockContact($body);
} catch (Exception $e) {
    echo 'Exception when calling LegacyLowstockContactApi->updateLegacyLowstockContact: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\LegacyLowstockContact**](\Infoplus\Model\LegacyLowstockContact.md)| LegacyLowstockContact to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

