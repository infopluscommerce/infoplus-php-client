# Infoplus\KitApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addKit**](KitApi.md#addKit) | **POST** /v2.0/kit | Create a kit
[**deleteKit**](KitApi.md#deleteKit) | **DELETE** /v2.0/kit/{kitId} | Delete a kit
[**getDuplicateKitById**](KitApi.md#getDuplicateKitById) | **GET** /v2.0/kit/duplicate/{kitId} | Get a duplicated a kit by id
[**getKitByFilter**](KitApi.md#getKitByFilter) | **GET** /v2.0/kit/search | Search kits by filter
[**getKitById**](KitApi.md#getKitById) | **GET** /v2.0/kit/{kitId} | Get a kit by id
[**updateKit**](KitApi.md#updateKit) | **PUT** /v2.0/kit | Update a kit
[**updateKitCustomFields**](KitApi.md#updateKitCustomFields) | **PUT** /v2.0/kit/customFields | Update a kit custom fields


# **addKit**
> \Infoplus\Model\Kit addKit($body)

Create a kit

Inserts a new kit using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$body = new \Infoplus\Model\Kit(); // \Infoplus\Model\Kit | Kit to be inserted.

try { 
    $result = $api_instance->addKit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->addKit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Kit**](\Infoplus\Model\Kit.md)| Kit to be inserted. | 

### Return type

[**\Infoplus\Model\Kit**](Kit.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteKit**
> deleteKit($kit_id)

Delete a kit

Deletes the kit identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$kit_id = 56; // int | Id of the kit to be deleted.

try { 
    $api_instance->deleteKit($kit_id);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->deleteKit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_id** | **int**| Id of the kit to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateKitById**
> \Infoplus\Model\Kit getDuplicateKitById($kit_id)

Get a duplicated a kit by id

Returns a duplicated kit identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$kit_id = 56; // int | Id of the kit to be duplicated.

try { 
    $result = $api_instance->getDuplicateKitById($kit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->getDuplicateKitById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_id** | **int**| Id of the kit to be duplicated. | 

### Return type

[**\Infoplus\Model\Kit**](Kit.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getKitByFilter**
> \Infoplus\Model\Kit[] getKitByFilter($filter, $page, $limit, $sort)

Search kits by filter

Returns the list of kits that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getKitByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->getKitByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Kit[]**](Kit.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getKitById**
> \Infoplus\Model\Kit getKitById($kit_id)

Get a kit by id

Returns the kit identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$kit_id = 56; // int | Id of the kit to be returned.

try { 
    $result = $api_instance->getKitById($kit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->getKitById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kit_id** | **int**| Id of the kit to be returned. | 

### Return type

[**\Infoplus\Model\Kit**](Kit.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateKit**
> updateKit($body)

Update a kit

Updates an existing kit using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$body = new \Infoplus\Model\Kit(); // \Infoplus\Model\Kit | Kit to be updated.

try { 
    $api_instance->updateKit($body);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->updateKit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Kit**](\Infoplus\Model\Kit.md)| Kit to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateKitCustomFields**
> updateKitCustomFields($body)

Update a kit custom fields

Updates an existing kit custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\KitApi();
$body = new \Infoplus\Model\Kit(); // \Infoplus\Model\Kit | Kit to be updated.

try { 
    $api_instance->updateKitCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling KitApi->updateKitCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Kit**](\Infoplus\Model\Kit.md)| Kit to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

