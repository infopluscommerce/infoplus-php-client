# Infoplus\OrderApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrder**](OrderApi.md#addOrder) | **POST** /beta/order | Create an order
[**addOrderAudit**](OrderApi.md#addOrderAudit) | **PUT** /beta/order/{orderId}/audit/{orderAudit} | Add new audit for an order
[**addOrderTag**](OrderApi.md#addOrderTag) | **PUT** /beta/order/{orderId}/tag/{orderTag} | Add new tags for an order.
[**applyOrderWarehouseFulfillmentPlan**](OrderApi.md#applyOrderWarehouseFulfillmentPlan) | **POST** /beta/order/applyOrderWarehouseFulfillmentPlan | Run the Apply Order Warehouse Fulfillment Plan method.
[**deleteOrder**](OrderApi.md#deleteOrder) | **DELETE** /beta/order/{orderId} | Delete an order
[**deleteOrderTag**](OrderApi.md#deleteOrderTag) | **DELETE** /beta/order/{orderId}/tag/{orderTag} | Delete a tag for an order.
[**getDuplicateOrderById**](OrderApi.md#getDuplicateOrderById) | **GET** /beta/order/duplicate/{orderId} | Get a duplicated an order by id
[**getOrderByFilter**](OrderApi.md#getOrderByFilter) | **GET** /beta/order/search | Search orders by filter
[**getOrderById**](OrderApi.md#getOrderById) | **GET** /beta/order/{orderId} | Get an order by id
[**getOrderTags**](OrderApi.md#getOrderTags) | **GET** /beta/order/{orderId}/tag | Get the tags for an order.
[**getOrderWarehouseFulfillmentData**](OrderApi.md#getOrderWarehouseFulfillmentData) | **POST** /beta/order/getOrderWarehouseFulfillmentData | Run the Get Order Warehouse Fulfillment Plan method.
[**updateOrder**](OrderApi.md#updateOrder) | **PUT** /beta/order | Update an order
[**updateOrderCustomFields**](OrderApi.md#updateOrderCustomFields) | **PUT** /beta/order/customFields | Update an order custom fields


# **addOrder**
> \Infoplus\Model\Order addOrder($body)

Create an order

Inserts a new order using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$body = new \Infoplus\Model\Order(); // \Infoplus\Model\Order | Order to be inserted.

try { 
    $result = $api_instance->addOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->addOrder: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Order**](\Infoplus\Model\Order.md)| Order to be inserted. | 

### Return type

[**\Infoplus\Model\Order**](Order.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderAudit**
> addOrderAudit($order_id, $order_audit)

Add new audit for an order

Adds an audit to an existing order.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to add an audit to
$order_audit = "order_audit_example"; // string | The audit to add

try { 
    $api_instance->addOrderAudit($order_id, $order_audit);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->addOrderAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to add an audit to | 
 **order_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addOrderTag**
> addOrderTag($order_id, $order_tag)

Add new tags for an order.

Adds a tag to an existing order.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to add a tag to
$order_tag = "order_tag_example"; // string | The tag to add

try { 
    $api_instance->addOrderTag($order_id, $order_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->addOrderTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to add a tag to | 
 **order_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **applyOrderWarehouseFulfillmentPlan**
> \Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanOutput applyOrderWarehouseFulfillmentPlan($body)

Run the Apply Order Warehouse Fulfillment Plan method.



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$body = new \Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanInput(); // \Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanInput | Input data for Apply Order Warehouse Fulfillment Plan process.

try { 
    $result = $api_instance->applyOrderWarehouseFulfillmentPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->applyOrderWarehouseFulfillmentPlan: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanInput**](\Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanInput.md)| Input data for Apply Order Warehouse Fulfillment Plan process. | 

### Return type

[**\Infoplus\Model\ApplyOrderWarehouseFulfillmentPlanOutput**](ApplyOrderWarehouseFulfillmentPlanOutput.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrder**
> deleteOrder($order_id)

Delete an order

Deletes the order identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to be deleted.

try { 
    $api_instance->deleteOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteOrderTag**
> deleteOrderTag($order_id, $order_tag)

Delete a tag for an order.

Deletes an existing order tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to remove tag from
$order_tag = "order_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteOrderTag($order_id, $order_tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrderTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to remove tag from | 
 **order_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateOrderById**
> \Infoplus\Model\Order getDuplicateOrderById($order_id)

Get a duplicated an order by id

Returns a duplicated order identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to be duplicated.

try { 
    $result = $api_instance->getDuplicateOrderById($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getDuplicateOrderById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to be duplicated. | 

### Return type

[**\Infoplus\Model\Order**](Order.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderByFilter**
> \Infoplus\Model\Order[] getOrderByFilter($filter, $page, $limit, $sort)

Search orders by filter

Returns the list of orders that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getOrderByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Order[]**](Order.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderById**
> \Infoplus\Model\Order getOrderById($order_id)

Get an order by id

Returns the order identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to be returned.

try { 
    $result = $api_instance->getOrderById($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to be returned. | 

### Return type

[**\Infoplus\Model\Order**](Order.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderTags**
> getOrderTags($order_id)

Get the tags for an order.

Get all existing order tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$order_id = new Number(); // Number | Id of the order to get tags for

try { 
    $api_instance->getOrderTags($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | [**Number**](.md)| Id of the order to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getOrderWarehouseFulfillmentData**
> \Infoplus\Model\GetOrderWarehouseFulfillmentDataOutput getOrderWarehouseFulfillmentData($body)

Run the Get Order Warehouse Fulfillment Plan method.



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$body = new \Infoplus\Model\GetOrderWarehouseFulfillmentDataInput(); // \Infoplus\Model\GetOrderWarehouseFulfillmentDataInput | Input data for Get Order Warehouse Fulfillment Plan process.

try { 
    $result = $api_instance->getOrderWarehouseFulfillmentData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderWarehouseFulfillmentData: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\GetOrderWarehouseFulfillmentDataInput**](\Infoplus\Model\GetOrderWarehouseFulfillmentDataInput.md)| Input data for Get Order Warehouse Fulfillment Plan process. | 

### Return type

[**\Infoplus\Model\GetOrderWarehouseFulfillmentDataOutput**](GetOrderWarehouseFulfillmentDataOutput.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrder**
> updateOrder($body)

Update an order

Updates an existing order using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$body = new \Infoplus\Model\Order(); // \Infoplus\Model\Order | Order to be updated.

try { 
    $api_instance->updateOrder($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Order**](\Infoplus\Model\Order.md)| Order to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateOrderCustomFields**
> updateOrderCustomFields($body)

Update an order custom fields

Updates an existing order custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\OrderApi();
$body = new \Infoplus\Model\Order(); // \Infoplus\Model\Order | Order to be updated.

try { 
    $api_instance->updateOrderCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrderCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Order**](\Infoplus\Model\Order.md)| Order to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

