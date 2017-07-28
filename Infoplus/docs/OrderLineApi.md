# Infoplus\OrderLineApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderLineAudit**](OrderLineApi.md#addOrderLineAudit) | **PUT** /beta/orderLine/{orderLineId}/audit/{orderLineAudit} | Add new audit for an orderLine
[**addOrderLineTag**](OrderLineApi.md#addOrderLineTag) | **PUT** /beta/orderLine/{orderLineId}/tag/{orderLineTag} | Add new tags for an orderLine.
[**deleteOrderLineTag**](OrderLineApi.md#deleteOrderLineTag) | **DELETE** /beta/orderLine/{orderLineId}/tag/{orderLineTag} | Delete a tag for an orderLine.
[**getDuplicateOrderLineById**](OrderLineApi.md#getDuplicateOrderLineById) | **GET** /beta/orderLine/duplicate/{orderLineId} | Get a duplicated an orderLine by id
[**getOrderLineByFilter**](OrderLineApi.md#getOrderLineByFilter) | **GET** /beta/orderLine/search | Search orderLines by filter
[**getOrderLineById**](OrderLineApi.md#getOrderLineById) | **GET** /beta/orderLine/{orderLineId} | Get an orderLine by id
[**getOrderLineTags**](OrderLineApi.md#getOrderLineTags) | **GET** /beta/orderLine/{orderLineId}/tag | Get the tags for an orderLine.
[**updateOrderLineCustomFields**](OrderLineApi.md#updateOrderLineCustomFields) | **PUT** /beta/orderLine/customFields | Update an orderLine custom fields


# **addOrderLineAudit**
> addOrderLineAudit($order_line_id, $order_line_audit)

Add new audit for an orderLine

Adds an audit to an existing orderLine.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to add an audit to
$order_line_audit = "order_line_audit_example"; // string | The audit to add

try { 
    $api_instance->addOrderLineAudit($order_line_id, $order_line_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->addOrderLineAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to add an audit to | 
 **order_line_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderLineTag**
> addOrderLineTag($order_line_id, $order_line_tag)

Add new tags for an orderLine.

Adds a tag to an existing orderLine.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to add a tag to
$order_line_tag = "order_line_tag_example"; // string | The tag to add

try { 
    $api_instance->addOrderLineTag($order_line_id, $order_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->addOrderLineTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to add a tag to | 
 **order_line_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderLineTag**
> deleteOrderLineTag($order_line_id, $order_line_tag)

Delete a tag for an orderLine.

Deletes an existing orderLine tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to remove tag from
$order_line_tag = "order_line_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteOrderLineTag($order_line_id, $order_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->deleteOrderLineTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to remove tag from | 
 **order_line_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateOrderLineById**
> \Infoplus\Model\OrderLine getDuplicateOrderLineById($order_line_id)

Get a duplicated an orderLine by id

Returns a duplicated orderLine identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to be duplicated.

try { 
    $result = $api_instance->getDuplicateOrderLineById($order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->getDuplicateOrderLineById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to be duplicated. | 

### Return type

[**\Infoplus\Model\OrderLine**](OrderLine.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineByFilter**
> \Infoplus\Model\OrderLine[] getOrderLineByFilter($filter, $page, $limit, $sort)

Search orderLines by filter

Returns the list of orderLines that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOrderLineByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->getOrderLineByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\OrderLine[]**](OrderLine.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineById**
> \Infoplus\Model\OrderLine getOrderLineById($order_line_id)

Get an orderLine by id

Returns the orderLine identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to be returned.

try { 
    $result = $api_instance->getOrderLineById($order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->getOrderLineById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to be returned. | 

### Return type

[**\Infoplus\Model\OrderLine**](OrderLine.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineTags**
> getOrderLineTags($order_line_id)

Get the tags for an orderLine.

Get all existing orderLine tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$order_line_id = 56; // int | Id of the orderLine to get tags for

try { 
    $api_instance->getOrderLineTags($order_line_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->getOrderLineTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_id** | **int**| Id of the orderLine to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderLineCustomFields**
> updateOrderLineCustomFields($body)

Update an orderLine custom fields

Updates an existing orderLine custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineApi();
$body = new \Infoplus\Model\OrderLine(); // \Infoplus\Model\OrderLine | OrderLine to be updated.

try { 
    $api_instance->updateOrderLineCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineApi->updateOrderLineCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderLine**](\Infoplus\Model\OrderLine.md)| OrderLine to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

