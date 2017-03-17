# Infoplus\OrderSourceReservationApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderSourceReservation**](OrderSourceReservationApi.md#addOrderSourceReservation) | **POST** /beta/orderSourceReservation | Create an orderSourceReservation
[**addOrderSourceReservationAudit**](OrderSourceReservationApi.md#addOrderSourceReservationAudit) | **PUT** /beta/orderSourceReservation/{orderSourceReservationId}/audit/{orderSourceReservationAudit} | Add new audit for an orderSourceReservation
[**addOrderSourceReservationTag**](OrderSourceReservationApi.md#addOrderSourceReservationTag) | **PUT** /beta/orderSourceReservation/{orderSourceReservationId}/tag/{orderSourceReservationTag} | Add new tags for an orderSourceReservation.
[**deleteOrderSourceReservation**](OrderSourceReservationApi.md#deleteOrderSourceReservation) | **DELETE** /beta/orderSourceReservation/{orderSourceReservationId} | Delete an orderSourceReservation
[**deleteOrderSourceReservationTag**](OrderSourceReservationApi.md#deleteOrderSourceReservationTag) | **DELETE** /beta/orderSourceReservation/{orderSourceReservationId}/tag/{orderSourceReservationTag} | Delete a tag for an orderSourceReservation.
[**getDuplicateOrderSourceReservationById**](OrderSourceReservationApi.md#getDuplicateOrderSourceReservationById) | **GET** /beta/orderSourceReservation/duplicate/{orderSourceReservationId} | Get a duplicated an orderSourceReservation by id
[**getOrderSourceReservationByFilter**](OrderSourceReservationApi.md#getOrderSourceReservationByFilter) | **GET** /beta/orderSourceReservation/search | Search orderSourceReservations by filter
[**getOrderSourceReservationById**](OrderSourceReservationApi.md#getOrderSourceReservationById) | **GET** /beta/orderSourceReservation/{orderSourceReservationId} | Get an orderSourceReservation by id
[**getOrderSourceReservationTags**](OrderSourceReservationApi.md#getOrderSourceReservationTags) | **GET** /beta/orderSourceReservation/{orderSourceReservationId}/tag | Get the tags for an orderSourceReservation.
[**updateOrderSourceReservation**](OrderSourceReservationApi.md#updateOrderSourceReservation) | **PUT** /beta/orderSourceReservation | Update an orderSourceReservation
[**updateOrderSourceReservationCustomFields**](OrderSourceReservationApi.md#updateOrderSourceReservationCustomFields) | **PUT** /beta/orderSourceReservation/customFields | Update an orderSourceReservation custom fields


# **addOrderSourceReservation**
> \Infoplus\Model\OrderSourceReservation addOrderSourceReservation($body)

Create an orderSourceReservation

Inserts a new orderSourceReservation using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$body = new \Infoplus\Model\OrderSourceReservation(); // \Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be inserted.

try { 
    $result = $api_instance->addOrderSourceReservation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderSourceReservation**](\Infoplus\Model\OrderSourceReservation.md)| OrderSourceReservation to be inserted. | 

### Return type

[**\Infoplus\Model\OrderSourceReservation**](OrderSourceReservation.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderSourceReservationAudit**
> addOrderSourceReservationAudit($order_source_reservation_id, $order_source_reservation_audit)

Add new audit for an orderSourceReservation

Adds an audit to an existing orderSourceReservation.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add an audit to
$order_source_reservation_audit = "order_source_reservation_audit_example"; // string | The audit to add

try { 
    $api_instance->addOrderSourceReservationAudit($order_source_reservation_id, $order_source_reservation_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add an audit to | 
 **order_source_reservation_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderSourceReservationTag**
> addOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag)

Add new tags for an orderSourceReservation.

Adds a tag to an existing orderSourceReservation.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to add a tag to
$order_source_reservation_tag = "order_source_reservation_tag_example"; // string | The tag to add

try { 
    $api_instance->addOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->addOrderSourceReservationTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to add a tag to | 
 **order_source_reservation_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderSourceReservation**
> deleteOrderSourceReservation($order_source_reservation_id)

Delete an orderSourceReservation

Deletes the orderSourceReservation identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be deleted.

try { 
    $api_instance->deleteOrderSourceReservation($order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->deleteOrderSourceReservation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderSourceReservationTag**
> deleteOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag)

Delete a tag for an orderSourceReservation.

Deletes an existing orderSourceReservation tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to remove tag from
$order_source_reservation_tag = "order_source_reservation_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteOrderSourceReservationTag($order_source_reservation_id, $order_source_reservation_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->deleteOrderSourceReservationTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to remove tag from | 
 **order_source_reservation_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateOrderSourceReservationById**
> \Infoplus\Model\OrderSourceReservation getDuplicateOrderSourceReservationById($order_source_reservation_id)

Get a duplicated an orderSourceReservation by id

Returns a duplicated orderSourceReservation identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be duplicated.

try { 
    $result = $api_instance->getDuplicateOrderSourceReservationById($order_source_reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getDuplicateOrderSourceReservationById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be duplicated. | 

### Return type

[**\Infoplus\Model\OrderSourceReservation**](OrderSourceReservation.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderSourceReservationByFilter**
> \Infoplus\Model\OrderSourceReservation[] getOrderSourceReservationByFilter($filter, $page, $limit, $sort)

Search orderSourceReservations by filter

Returns the list of orderSourceReservations that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOrderSourceReservationByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\OrderSourceReservation[]**](OrderSourceReservation.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderSourceReservationById**
> \Infoplus\Model\OrderSourceReservation getOrderSourceReservationById($order_source_reservation_id)

Get an orderSourceReservation by id

Returns the orderSourceReservation identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to be returned.

try { 
    $result = $api_instance->getOrderSourceReservationById($order_source_reservation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to be returned. | 

### Return type

[**\Infoplus\Model\OrderSourceReservation**](OrderSourceReservation.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderSourceReservationTags**
> getOrderSourceReservationTags($order_source_reservation_id)

Get the tags for an orderSourceReservation.

Get all existing orderSourceReservation tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$order_source_reservation_id = 56; // int | Id of the orderSourceReservation to get tags for

try { 
    $api_instance->getOrderSourceReservationTags($order_source_reservation_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->getOrderSourceReservationTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_source_reservation_id** | **int**| Id of the orderSourceReservation to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderSourceReservation**
> updateOrderSourceReservation($body)

Update an orderSourceReservation

Updates an existing orderSourceReservation using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$body = new \Infoplus\Model\OrderSourceReservation(); // \Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be updated.

try { 
    $api_instance->updateOrderSourceReservation($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->updateOrderSourceReservation: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderSourceReservation**](\Infoplus\Model\OrderSourceReservation.md)| OrderSourceReservation to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderSourceReservationCustomFields**
> updateOrderSourceReservationCustomFields($body)

Update an orderSourceReservation custom fields

Updates an existing orderSourceReservation custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderSourceReservationApi();
$body = new \Infoplus\Model\OrderSourceReservation(); // \Infoplus\Model\OrderSourceReservation | OrderSourceReservation to be updated.

try { 
    $api_instance->updateOrderSourceReservationCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderSourceReservationApi->updateOrderSourceReservationCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderSourceReservation**](\Infoplus\Model\OrderSourceReservation.md)| OrderSourceReservation to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

