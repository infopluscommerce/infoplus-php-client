# Infoplus\BusinessTransactionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBusinessTransactionAudit**](BusinessTransactionApi.md#addBusinessTransactionAudit) | **PUT** /beta/businessTransaction/{businessTransactionId}/audit/{businessTransactionAudit} | Add new audit for a businessTransaction
[**addBusinessTransactionTag**](BusinessTransactionApi.md#addBusinessTransactionTag) | **PUT** /beta/businessTransaction/{businessTransactionId}/tag/{businessTransactionTag} | Add new tags for a businessTransaction.
[**deleteBusinessTransactionTag**](BusinessTransactionApi.md#deleteBusinessTransactionTag) | **DELETE** /beta/businessTransaction/{businessTransactionId}/tag/{businessTransactionTag} | Delete a tag for a businessTransaction.
[**getBusinessTransactionByFilter**](BusinessTransactionApi.md#getBusinessTransactionByFilter) | **GET** /beta/businessTransaction/search | Search businessTransactions by filter
[**getBusinessTransactionById**](BusinessTransactionApi.md#getBusinessTransactionById) | **GET** /beta/businessTransaction/{businessTransactionId} | Get a businessTransaction by id
[**getBusinessTransactionTags**](BusinessTransactionApi.md#getBusinessTransactionTags) | **GET** /beta/businessTransaction/{businessTransactionId}/tag | Get the tags for a businessTransaction.
[**getDuplicateBusinessTransactionById**](BusinessTransactionApi.md#getDuplicateBusinessTransactionById) | **GET** /beta/businessTransaction/duplicate/{businessTransactionId} | Get a duplicated a businessTransaction by id
[**updateBusinessTransactionCustomFields**](BusinessTransactionApi.md#updateBusinessTransactionCustomFields) | **PUT** /beta/businessTransaction/customFields | Update a businessTransaction custom fields


# **addBusinessTransactionAudit**
> addBusinessTransactionAudit($business_transaction_id, $business_transaction_audit)

Add new audit for a businessTransaction

Adds an audit to an existing businessTransaction.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to add an audit to
$business_transaction_audit = "business_transaction_audit_example"; // string | The audit to add

try { 
    $api_instance->addBusinessTransactionAudit($business_transaction_id, $business_transaction_audit);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->addBusinessTransactionAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to add an audit to | 
 **business_transaction_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addBusinessTransactionTag**
> addBusinessTransactionTag($business_transaction_id, $business_transaction_tag)

Add new tags for a businessTransaction.

Adds a tag to an existing businessTransaction.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to add a tag to
$business_transaction_tag = "business_transaction_tag_example"; // string | The tag to add

try { 
    $api_instance->addBusinessTransactionTag($business_transaction_id, $business_transaction_tag);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->addBusinessTransactionTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to add a tag to | 
 **business_transaction_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteBusinessTransactionTag**
> deleteBusinessTransactionTag($business_transaction_id, $business_transaction_tag)

Delete a tag for a businessTransaction.

Deletes an existing businessTransaction tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to remove tag from
$business_transaction_tag = "business_transaction_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteBusinessTransactionTag($business_transaction_id, $business_transaction_tag);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->deleteBusinessTransactionTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to remove tag from | 
 **business_transaction_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBusinessTransactionByFilter**
> \Infoplus\Model\BusinessTransaction[] getBusinessTransactionByFilter($filter, $page, $limit, $sort)

Search businessTransactions by filter

Returns the list of businessTransactions that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getBusinessTransactionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getBusinessTransactionByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\BusinessTransaction[]**](BusinessTransaction.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBusinessTransactionById**
> \Infoplus\Model\BusinessTransaction getBusinessTransactionById($business_transaction_id)

Get a businessTransaction by id

Returns the businessTransaction identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to be returned.

try { 
    $result = $api_instance->getBusinessTransactionById($business_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getBusinessTransactionById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to be returned. | 

### Return type

[**\Infoplus\Model\BusinessTransaction**](BusinessTransaction.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBusinessTransactionTags**
> getBusinessTransactionTags($business_transaction_id)

Get the tags for a businessTransaction.

Get all existing businessTransaction tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to get tags for

try { 
    $api_instance->getBusinessTransactionTags($business_transaction_id);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getBusinessTransactionTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateBusinessTransactionById**
> \Infoplus\Model\BusinessTransaction getDuplicateBusinessTransactionById($business_transaction_id)

Get a duplicated a businessTransaction by id

Returns a duplicated businessTransaction identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$business_transaction_id = 56; // int | Id of the businessTransaction to be duplicated.

try { 
    $result = $api_instance->getDuplicateBusinessTransactionById($business_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->getDuplicateBusinessTransactionById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transaction_id** | **int**| Id of the businessTransaction to be duplicated. | 

### Return type

[**\Infoplus\Model\BusinessTransaction**](BusinessTransaction.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateBusinessTransactionCustomFields**
> updateBusinessTransactionCustomFields($body)

Update a businessTransaction custom fields

Updates an existing businessTransaction custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\BusinessTransactionApi();
$body = new \Infoplus\Model\BusinessTransaction(); // \Infoplus\Model\BusinessTransaction | BusinessTransaction to be updated.

try { 
    $api_instance->updateBusinessTransactionCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransactionApi->updateBusinessTransactionCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\BusinessTransaction**](\Infoplus\Model\BusinessTransaction.md)| BusinessTransaction to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

