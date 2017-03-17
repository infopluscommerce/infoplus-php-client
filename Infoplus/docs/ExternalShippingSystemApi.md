# Infoplus\ExternalShippingSystemApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExternalShippingSystem**](ExternalShippingSystemApi.md#addExternalShippingSystem) | **POST** /beta/externalShippingSystem | Create an externalShippingSystem
[**addExternalShippingSystemAudit**](ExternalShippingSystemApi.md#addExternalShippingSystemAudit) | **PUT** /beta/externalShippingSystem/{externalShippingSystemId}/audit/{externalShippingSystemAudit} | Add new audit for an externalShippingSystem
[**addExternalShippingSystemTag**](ExternalShippingSystemApi.md#addExternalShippingSystemTag) | **PUT** /beta/externalShippingSystem/{externalShippingSystemId}/tag/{externalShippingSystemTag} | Add new tags for an externalShippingSystem.
[**deleteExternalShippingSystem**](ExternalShippingSystemApi.md#deleteExternalShippingSystem) | **DELETE** /beta/externalShippingSystem/{externalShippingSystemId} | Delete an externalShippingSystem
[**deleteExternalShippingSystemTag**](ExternalShippingSystemApi.md#deleteExternalShippingSystemTag) | **DELETE** /beta/externalShippingSystem/{externalShippingSystemId}/tag/{externalShippingSystemTag} | Delete a tag for an externalShippingSystem.
[**getDuplicateExternalShippingSystemById**](ExternalShippingSystemApi.md#getDuplicateExternalShippingSystemById) | **GET** /beta/externalShippingSystem/duplicate/{externalShippingSystemId} | Get a duplicated an externalShippingSystem by id
[**getExternalShippingSystemByFilter**](ExternalShippingSystemApi.md#getExternalShippingSystemByFilter) | **GET** /beta/externalShippingSystem/search | Search externalShippingSystems by filter
[**getExternalShippingSystemById**](ExternalShippingSystemApi.md#getExternalShippingSystemById) | **GET** /beta/externalShippingSystem/{externalShippingSystemId} | Get an externalShippingSystem by id
[**getExternalShippingSystemTags**](ExternalShippingSystemApi.md#getExternalShippingSystemTags) | **GET** /beta/externalShippingSystem/{externalShippingSystemId}/tag | Get the tags for an externalShippingSystem.
[**updateExternalShippingSystem**](ExternalShippingSystemApi.md#updateExternalShippingSystem) | **PUT** /beta/externalShippingSystem | Update an externalShippingSystem
[**updateExternalShippingSystemCustomFields**](ExternalShippingSystemApi.md#updateExternalShippingSystemCustomFields) | **PUT** /beta/externalShippingSystem/customFields | Update an externalShippingSystem custom fields


# **addExternalShippingSystem**
> \Infoplus\Model\ExternalShippingSystem addExternalShippingSystem($body)

Create an externalShippingSystem

Inserts a new externalShippingSystem using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be inserted.

try { 
    $result = $api_instance->addExternalShippingSystem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be inserted. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addExternalShippingSystemAudit**
> addExternalShippingSystemAudit($external_shipping_system_id, $external_shipping_system_audit)

Add new audit for an externalShippingSystem

Adds an audit to an existing externalShippingSystem.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add an audit to
$external_shipping_system_audit = "external_shipping_system_audit_example"; // string | The audit to add

try { 
    $api_instance->addExternalShippingSystemAudit($external_shipping_system_id, $external_shipping_system_audit);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add an audit to | 
 **external_shipping_system_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addExternalShippingSystemTag**
> addExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag)

Add new tags for an externalShippingSystem.

Adds a tag to an existing externalShippingSystem.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to add a tag to
$external_shipping_system_tag = "external_shipping_system_tag_example"; // string | The tag to add

try { 
    $api_instance->addExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->addExternalShippingSystemTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to add a tag to | 
 **external_shipping_system_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteExternalShippingSystem**
> deleteExternalShippingSystem($external_shipping_system_id)

Delete an externalShippingSystem

Deletes the externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be deleted.

try { 
    $api_instance->deleteExternalShippingSystem($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteExternalShippingSystemTag**
> deleteExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag)

Delete a tag for an externalShippingSystem.

Deletes an existing externalShippingSystem tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to remove tag from
$external_shipping_system_tag = "external_shipping_system_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteExternalShippingSystemTag($external_shipping_system_id, $external_shipping_system_tag);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->deleteExternalShippingSystemTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to remove tag from | 
 **external_shipping_system_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateExternalShippingSystemById**
> \Infoplus\Model\ExternalShippingSystem getDuplicateExternalShippingSystemById($external_shipping_system_id)

Get a duplicated an externalShippingSystem by id

Returns a duplicated externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be duplicated.

try { 
    $result = $api_instance->getDuplicateExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getDuplicateExternalShippingSystemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be duplicated. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShippingSystemByFilter**
> \Infoplus\Model\ExternalShippingSystem[] getExternalShippingSystemByFilter($filter, $page, $limit, $sort)

Search externalShippingSystems by filter

Returns the list of externalShippingSystems that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getExternalShippingSystemByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ExternalShippingSystem[]**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShippingSystemById**
> \Infoplus\Model\ExternalShippingSystem getExternalShippingSystemById($external_shipping_system_id)

Get an externalShippingSystem by id

Returns the externalShippingSystem identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to be returned.

try { 
    $result = $api_instance->getExternalShippingSystemById($external_shipping_system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to be returned. | 

### Return type

[**\Infoplus\Model\ExternalShippingSystem**](ExternalShippingSystem.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getExternalShippingSystemTags**
> getExternalShippingSystemTags($external_shipping_system_id)

Get the tags for an externalShippingSystem.

Get all existing externalShippingSystem tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$external_shipping_system_id = 56; // int | Id of the externalShippingSystem to get tags for

try { 
    $api_instance->getExternalShippingSystemTags($external_shipping_system_id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->getExternalShippingSystemTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_shipping_system_id** | **int**| Id of the externalShippingSystem to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalShippingSystem**
> updateExternalShippingSystem($body)

Update an externalShippingSystem

Updates an existing externalShippingSystem using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try { 
    $api_instance->updateExternalShippingSystem($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystem: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalShippingSystemCustomFields**
> updateExternalShippingSystemCustomFields($body)

Update an externalShippingSystem custom fields

Updates an existing externalShippingSystem custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ExternalShippingSystemApi();
$body = new \Infoplus\Model\ExternalShippingSystem(); // \Infoplus\Model\ExternalShippingSystem | ExternalShippingSystem to be updated.

try { 
    $api_instance->updateExternalShippingSystemCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalShippingSystemApi->updateExternalShippingSystemCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExternalShippingSystem**](\Infoplus\Model\ExternalShippingSystem.md)| ExternalShippingSystem to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

