# Infoplus\OrderActivityApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderActivity**](OrderActivityApi.md#addOrderActivity) | **POST** /beta/orderActivity | Create an orderActivity
[**addOrderActivityAudit**](OrderActivityApi.md#addOrderActivityAudit) | **PUT** /beta/orderActivity/{orderActivityId}/audit/{orderActivityAudit} | Add new audit for an orderActivity
[**addOrderActivityTag**](OrderActivityApi.md#addOrderActivityTag) | **PUT** /beta/orderActivity/{orderActivityId}/tag/{orderActivityTag} | Add new tags for an orderActivity.
[**deleteOrderActivity**](OrderActivityApi.md#deleteOrderActivity) | **DELETE** /beta/orderActivity/{orderActivityId} | Delete an orderActivity
[**deleteOrderActivityTag**](OrderActivityApi.md#deleteOrderActivityTag) | **DELETE** /beta/orderActivity/{orderActivityId}/tag/{orderActivityTag} | Delete a tag for an orderActivity.
[**getDuplicateOrderActivityById**](OrderActivityApi.md#getDuplicateOrderActivityById) | **GET** /beta/orderActivity/duplicate/{orderActivityId} | Get a duplicated an orderActivity by id
[**getOrderActivityByFilter**](OrderActivityApi.md#getOrderActivityByFilter) | **GET** /beta/orderActivity/search | Search orderActivitys by filter
[**getOrderActivityById**](OrderActivityApi.md#getOrderActivityById) | **GET** /beta/orderActivity/{orderActivityId} | Get an orderActivity by id
[**getOrderActivityTags**](OrderActivityApi.md#getOrderActivityTags) | **GET** /beta/orderActivity/{orderActivityId}/tag | Get the tags for an orderActivity.
[**updateOrderActivity**](OrderActivityApi.md#updateOrderActivity) | **PUT** /beta/orderActivity | Update an orderActivity


# **addOrderActivity**
> \Infoplus\Model\OrderActivity addOrderActivity($body)

Create an orderActivity

Inserts a new orderActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$body = new \Infoplus\Model\OrderActivity(); // \Infoplus\Model\OrderActivity | OrderActivity to be inserted.

try { 
    $result = $api_instance->addOrderActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->addOrderActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderActivity**](\Infoplus\Model\OrderActivity.md)| OrderActivity to be inserted. | 

### Return type

[**\Infoplus\Model\OrderActivity**](OrderActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderActivityAudit**
> addOrderActivityAudit($order_activity_id, $order_activity_audit)

Add new audit for an orderActivity

Adds an audit to an existing orderActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to add an audit to
$order_activity_audit = "order_activity_audit_example"; // string | The audit to add

try { 
    $api_instance->addOrderActivityAudit($order_activity_id, $order_activity_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->addOrderActivityAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to add an audit to | 
 **order_activity_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderActivityTag**
> addOrderActivityTag($order_activity_id, $order_activity_tag)

Add new tags for an orderActivity.

Adds a tag to an existing orderActivity.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to add a tag to
$order_activity_tag = "order_activity_tag_example"; // string | The tag to add

try { 
    $api_instance->addOrderActivityTag($order_activity_id, $order_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->addOrderActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to add a tag to | 
 **order_activity_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderActivity**
> deleteOrderActivity($order_activity_id)

Delete an orderActivity

Deletes the orderActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to be deleted.

try { 
    $api_instance->deleteOrderActivity($order_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->deleteOrderActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderActivityTag**
> deleteOrderActivityTag($order_activity_id, $order_activity_tag)

Delete a tag for an orderActivity.

Deletes an existing orderActivity tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to remove tag from
$order_activity_tag = "order_activity_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteOrderActivityTag($order_activity_id, $order_activity_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->deleteOrderActivityTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to remove tag from | 
 **order_activity_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateOrderActivityById**
> \Infoplus\Model\OrderActivity getDuplicateOrderActivityById($order_activity_id)

Get a duplicated an orderActivity by id

Returns a duplicated orderActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to be duplicated.

try { 
    $result = $api_instance->getDuplicateOrderActivityById($order_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->getDuplicateOrderActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to be duplicated. | 

### Return type

[**\Infoplus\Model\OrderActivity**](OrderActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderActivityByFilter**
> \Infoplus\Model\OrderActivity[] getOrderActivityByFilter($filter, $page, $limit, $sort)

Search orderActivitys by filter

Returns the list of orderActivitys that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOrderActivityByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->getOrderActivityByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\OrderActivity[]**](OrderActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderActivityById**
> \Infoplus\Model\OrderActivity getOrderActivityById($order_activity_id)

Get an orderActivity by id

Returns the orderActivity identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to be returned.

try { 
    $result = $api_instance->getOrderActivityById($order_activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->getOrderActivityById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to be returned. | 

### Return type

[**\Infoplus\Model\OrderActivity**](OrderActivity.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderActivityTags**
> getOrderActivityTags($order_activity_id)

Get the tags for an orderActivity.

Get all existing orderActivity tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$order_activity_id = new Number(); // Number | Id of the orderActivity to get tags for

try { 
    $api_instance->getOrderActivityTags($order_activity_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->getOrderActivityTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_activity_id** | [**Number**](.md)| Id of the orderActivity to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderActivity**
> updateOrderActivity($body)

Update an orderActivity

Updates an existing orderActivity using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderActivityApi();
$body = new \Infoplus\Model\OrderActivity(); // \Infoplus\Model\OrderActivity | OrderActivity to be updated.

try { 
    $api_instance->updateOrderActivity($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderActivityApi->updateOrderActivity: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\OrderActivity**](\Infoplus\Model\OrderActivity.md)| OrderActivity to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

