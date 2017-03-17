# Infoplus\BillingCodeTypeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingCodeType**](BillingCodeTypeApi.md#addBillingCodeType) | **POST** /beta/billingCodeType | Create a billingCodeType
[**addBillingCodeTypeAudit**](BillingCodeTypeApi.md#addBillingCodeTypeAudit) | **PUT** /beta/billingCodeType/{billingCodeTypeId}/audit/{billingCodeTypeAudit} | Add new audit for a billingCodeType
[**addBillingCodeTypeTag**](BillingCodeTypeApi.md#addBillingCodeTypeTag) | **PUT** /beta/billingCodeType/{billingCodeTypeId}/tag/{billingCodeTypeTag} | Add new tags for a billingCodeType.
[**deleteBillingCodeType**](BillingCodeTypeApi.md#deleteBillingCodeType) | **DELETE** /beta/billingCodeType/{billingCodeTypeId} | Delete a billingCodeType
[**deleteBillingCodeTypeTag**](BillingCodeTypeApi.md#deleteBillingCodeTypeTag) | **DELETE** /beta/billingCodeType/{billingCodeTypeId}/tag/{billingCodeTypeTag} | Delete a tag for a billingCodeType.
[**getBillingCodeTypeByFilter**](BillingCodeTypeApi.md#getBillingCodeTypeByFilter) | **GET** /beta/billingCodeType/search | Search billingCodeTypes by filter
[**getBillingCodeTypeById**](BillingCodeTypeApi.md#getBillingCodeTypeById) | **GET** /beta/billingCodeType/{billingCodeTypeId} | Get a billingCodeType by id
[**getBillingCodeTypeTags**](BillingCodeTypeApi.md#getBillingCodeTypeTags) | **GET** /beta/billingCodeType/{billingCodeTypeId}/tag | Get the tags for a billingCodeType.
[**getDuplicateBillingCodeTypeById**](BillingCodeTypeApi.md#getDuplicateBillingCodeTypeById) | **GET** /beta/billingCodeType/duplicate/{billingCodeTypeId} | Get a duplicated a billingCodeType by id
[**updateBillingCodeType**](BillingCodeTypeApi.md#updateBillingCodeType) | **PUT** /beta/billingCodeType | Update a billingCodeType
[**updateBillingCodeTypeCustomFields**](BillingCodeTypeApi.md#updateBillingCodeTypeCustomFields) | **PUT** /beta/billingCodeType/customFields | Update a billingCodeType custom fields


# **addBillingCodeType**
> \Infoplus\Model\BillingCodeType addBillingCodeType($body)

Create a billingCodeType

Inserts a new billingCodeType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$body = new \Infoplus\Model\BillingCodeType(); // \Infoplus\Model\BillingCodeType | BillingCodeType to be inserted.

try { 
    $result = $api_instance->addBillingCodeType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillingCodeType**](\Infoplus\Model\BillingCodeType.md)| BillingCodeType to be inserted. | 

### Return type

[**\Infoplus\Model\BillingCodeType**](BillingCodeType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addBillingCodeTypeAudit**
> addBillingCodeTypeAudit($billing_code_type_id, $billing_code_type_audit)

Add new audit for a billingCodeType

Adds an audit to an existing billingCodeType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to add an audit to
$billing_code_type_audit = "billing_code_type_audit_example"; // string | The audit to add

try { 
    $api_instance->addBillingCodeTypeAudit($billing_code_type_id, $billing_code_type_audit);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to add an audit to | 
 **billing_code_type_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addBillingCodeTypeTag**
> addBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag)

Add new tags for a billingCodeType.

Adds a tag to an existing billingCodeType.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to add a tag to
$billing_code_type_tag = "billing_code_type_tag_example"; // string | The tag to add

try { 
    $api_instance->addBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->addBillingCodeTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to add a tag to | 
 **billing_code_type_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteBillingCodeType**
> deleteBillingCodeType($billing_code_type_id)

Delete a billingCodeType

Deletes the billingCodeType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to be deleted.

try { 
    $api_instance->deleteBillingCodeType($billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->deleteBillingCodeType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteBillingCodeTypeTag**
> deleteBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag)

Delete a tag for a billingCodeType.

Deletes an existing billingCodeType tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to remove tag from
$billing_code_type_tag = "billing_code_type_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteBillingCodeTypeTag($billing_code_type_id, $billing_code_type_tag);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->deleteBillingCodeTypeTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to remove tag from | 
 **billing_code_type_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillingCodeTypeByFilter**
> \Infoplus\Model\BillingCodeType[] getBillingCodeTypeByFilter($filter, $page, $limit, $sort)

Search billingCodeTypes by filter

Returns the list of billingCodeTypes that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getBillingCodeTypeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\BillingCodeType[]**](BillingCodeType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillingCodeTypeById**
> \Infoplus\Model\BillingCodeType getBillingCodeTypeById($billing_code_type_id)

Get a billingCodeType by id

Returns the billingCodeType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to be returned.

try { 
    $result = $api_instance->getBillingCodeTypeById($billing_code_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be returned. | 

### Return type

[**\Infoplus\Model\BillingCodeType**](BillingCodeType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBillingCodeTypeTags**
> getBillingCodeTypeTags($billing_code_type_id)

Get the tags for a billingCodeType.

Get all existing billingCodeType tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to get tags for

try { 
    $api_instance->getBillingCodeTypeTags($billing_code_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getBillingCodeTypeTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateBillingCodeTypeById**
> \Infoplus\Model\BillingCodeType getDuplicateBillingCodeTypeById($billing_code_type_id)

Get a duplicated a billingCodeType by id

Returns a duplicated billingCodeType identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$billing_code_type_id = 56; // int | Id of the billingCodeType to be duplicated.

try { 
    $result = $api_instance->getDuplicateBillingCodeTypeById($billing_code_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->getDuplicateBillingCodeTypeById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_code_type_id** | **int**| Id of the billingCodeType to be duplicated. | 

### Return type

[**\Infoplus\Model\BillingCodeType**](BillingCodeType.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBillingCodeType**
> updateBillingCodeType($body)

Update a billingCodeType

Updates an existing billingCodeType using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$body = new \Infoplus\Model\BillingCodeType(); // \Infoplus\Model\BillingCodeType | BillingCodeType to be updated.

try { 
    $api_instance->updateBillingCodeType($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->updateBillingCodeType: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillingCodeType**](\Infoplus\Model\BillingCodeType.md)| BillingCodeType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBillingCodeTypeCustomFields**
> updateBillingCodeTypeCustomFields($body)

Update a billingCodeType custom fields

Updates an existing billingCodeType custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BillingCodeTypeApi();
$body = new \Infoplus\Model\BillingCodeType(); // \Infoplus\Model\BillingCodeType | BillingCodeType to be updated.

try { 
    $api_instance->updateBillingCodeTypeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling BillingCodeTypeApi->updateBillingCodeTypeCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BillingCodeType**](\Infoplus\Model\BillingCodeType.md)| BillingCodeType to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

