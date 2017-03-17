# Infoplus\OrderLineActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderLineActivity**](OrderLineActivityApi.md#addOrderLineActivity) | **POST** /beta/orderLineActivity | Create an orderLineActivity
[**addOrderLineActivityAudit**](OrderLineActivityApi.md#addOrderLineActivityAudit) | **PUT** /beta/orderLineActivity/{orderLineActivityId}/audit/{orderLineActivityAudit} | Add new audit for an orderLineActivity
[**addOrderLineActivityTag**](OrderLineActivityApi.md#addOrderLineActivityTag) | **PUT** /beta/orderLineActivity/{orderLineActivityId}/tag/{orderLineActivityTag} | Add new tags for an orderLineActivity.
[**deleteOrderLineActivity**](OrderLineActivityApi.md#deleteOrderLineActivity) | **DELETE** /beta/orderLineActivity/{orderLineActivityId} | Delete an orderLineActivity
[**deleteOrderLineActivityTag**](OrderLineActivityApi.md#deleteOrderLineActivityTag) | **DELETE** /beta/orderLineActivity/{orderLineActivityId}/tag/{orderLineActivityTag} | Delete a tag for an orderLineActivity.
[**getDuplicateOrderLineActivityById**](OrderLineActivityApi.md#getDuplicateOrderLineActivityById) | **GET** /beta/orderLineActivity/duplicate/{orderLineActivityId} | Get a duplicated an orderLineActivity by id
[**getOrderLineActivityByFilter**](OrderLineActivityApi.md#getOrderLineActivityByFilter) | **GET** /beta/orderLineActivity/search | Search orderLineActivitys by filter
[**getOrderLineActivityById**](OrderLineActivityApi.md#getOrderLineActivityById) | **GET** /beta/orderLineActivity/{orderLineActivityId} | Get an orderLineActivity by id
[**getOrderLineActivityTags**](OrderLineActivityApi.md#getOrderLineActivityTags) | **GET** /beta/orderLineActivity/{orderLineActivityId}/tag | Get the tags for an orderLineActivity.
[**updateOrderLineActivity**](OrderLineActivityApi.md#updateOrderLineActivity) | **PUT** /beta/orderLineActivity | Update an orderLineActivity


# **addOrderLineActivity**
> \Infoplus\Model\OrderLineActivity addOrderLineActivity($body)

Create an orderLineActivity

Inserts a new orderLineActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$body = new \Infoplus\Model\OrderLineActivity(); // \Infoplus\Model\OrderLineActivity | OrderLineActivity to be inserted.

try { 
    $result = $api_instance->addOrderLineActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->addOrderLineActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderLineActivity**](\Infoplus\Model\OrderLineActivity.md)| OrderLineActivity to be inserted. | 

### Return type

[**\Infoplus\Model\OrderLineActivity**](OrderLineActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderLineActivityAudit**
> addOrderLineActivityAudit($order_line_activity_id, $order_line_activity_audit)

Add new audit for an orderLineActivity

Adds an audit to an existing orderLineActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to add an audit to
$order_line_activity_audit = "order_line_activity_audit_example"; // string | The audit to add

try { 
    $api_instance->addOrderLineActivityAudit($order_line_activity_id, $order_line_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->addOrderLineActivityAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to add an audit to | 
 **order_line_activity_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderLineActivityTag**
> addOrderLineActivityTag($order_line_activity_id, $order_line_activity_tag)

Add new tags for an orderLineActivity.

Adds a tag to an existing orderLineActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to add a tag to
$order_line_activity_tag = "order_line_activity_tag_example"; // string | The tag to add

try { 
    $api_instance->addOrderLineActivityTag($order_line_activity_id, $order_line_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->addOrderLineActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to add a tag to | 
 **order_line_activity_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderLineActivity**
> deleteOrderLineActivity($order_line_activity_id)

Delete an orderLineActivity

Deletes the orderLineActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to be deleted.

try { 
    $api_instance->deleteOrderLineActivity($order_line_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->deleteOrderLineActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderLineActivityTag**
> deleteOrderLineActivityTag($order_line_activity_id, $order_line_activity_tag)

Delete a tag for an orderLineActivity.

Deletes an existing orderLineActivity tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to remove tag from
$order_line_activity_tag = "order_line_activity_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteOrderLineActivityTag($order_line_activity_id, $order_line_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->deleteOrderLineActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to remove tag from | 
 **order_line_activity_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateOrderLineActivityById**
> \Infoplus\Model\OrderLineActivity getDuplicateOrderLineActivityById($order_line_activity_id)

Get a duplicated an orderLineActivity by id

Returns a duplicated orderLineActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to be duplicated.

try { 
    $result = $api_instance->getDuplicateOrderLineActivityById($order_line_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->getDuplicateOrderLineActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to be duplicated. | 

### Return type

[**\Infoplus\Model\OrderLineActivity**](OrderLineActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineActivityByFilter**
> \Infoplus\Model\OrderLineActivity[] getOrderLineActivityByFilter($filter, $page, $limit, $sort)

Search orderLineActivitys by filter

Returns the list of orderLineActivitys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOrderLineActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->getOrderLineActivityByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\OrderLineActivity[]**](OrderLineActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineActivityById**
> \Infoplus\Model\OrderLineActivity getOrderLineActivityById($order_line_activity_id)

Get an orderLineActivity by id

Returns the orderLineActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to be returned.

try { 
    $result = $api_instance->getOrderLineActivityById($order_line_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->getOrderLineActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to be returned. | 

### Return type

[**\Infoplus\Model\OrderLineActivity**](OrderLineActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderLineActivityTags**
> getOrderLineActivityTags($order_line_activity_id)

Get the tags for an orderLineActivity.

Get all existing orderLineActivity tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$order_line_activity_id = 56; // int | Id of the orderLineActivity to get tags for

try { 
    $api_instance->getOrderLineActivityTags($order_line_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->getOrderLineActivityTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_line_activity_id** | **int**| Id of the orderLineActivity to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderLineActivity**
> updateOrderLineActivity($body)

Update an orderLineActivity

Updates an existing orderLineActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderLineActivityApi();
$body = new \Infoplus\Model\OrderLineActivity(); // \Infoplus\Model\OrderLineActivity | OrderLineActivity to be updated.

try { 
    $api_instance->updateOrderLineActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineActivityApi->updateOrderLineActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderLineActivity**](\Infoplus\Model\OrderLineActivity.md)| OrderLineActivity to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

