# Infoplus\ShipmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addShipmentAudit**](ShipmentApi.md#addShipmentAudit) | **PUT** /beta/shipment/{shipmentId}/audit/{shipmentAudit} | Add new audit for a shipment
[**addShipmentTag**](ShipmentApi.md#addShipmentTag) | **PUT** /beta/shipment/{shipmentId}/tag/{shipmentTag} | Add new tags for a shipment.
[**deleteShipmentTag**](ShipmentApi.md#deleteShipmentTag) | **DELETE** /beta/shipment/{shipmentId}/tag/{shipmentTag} | Delete a tag for a shipment.
[**getDuplicateShipmentById**](ShipmentApi.md#getDuplicateShipmentById) | **GET** /beta/shipment/duplicate/{shipmentId} | Get a duplicated a shipment by id
[**getShipmentByFilter**](ShipmentApi.md#getShipmentByFilter) | **GET** /beta/shipment/search | Search shipments by filter
[**getShipmentById**](ShipmentApi.md#getShipmentById) | **GET** /beta/shipment/{shipmentId} | Get a shipment by id
[**getShipmentTags**](ShipmentApi.md#getShipmentTags) | **GET** /beta/shipment/{shipmentId}/tag | Get the tags for a shipment.
[**updateShipmentCustomFields**](ShipmentApi.md#updateShipmentCustomFields) | **PUT** /beta/shipment/customFields | Update a shipment custom fields


# **addShipmentAudit**
> addShipmentAudit($shipment_id, $shipment_audit)

Add new audit for a shipment

Adds an audit to an existing shipment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to add an audit to
$shipment_audit = "shipment_audit_example"; // string | The audit to add

try { 
    $api_instance->addShipmentAudit($shipment_id, $shipment_audit);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->addShipmentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to add an audit to | 
 **shipment_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addShipmentTag**
> addShipmentTag($shipment_id, $shipment_tag)

Add new tags for a shipment.

Adds a tag to an existing shipment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to add a tag to
$shipment_tag = "shipment_tag_example"; // string | The tag to add

try { 
    $api_instance->addShipmentTag($shipment_id, $shipment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->addShipmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to add a tag to | 
 **shipment_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteShipmentTag**
> deleteShipmentTag($shipment_id, $shipment_tag)

Delete a tag for a shipment.

Deletes an existing shipment tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to remove tag from
$shipment_tag = "shipment_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteShipmentTag($shipment_id, $shipment_tag);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->deleteShipmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to remove tag from | 
 **shipment_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateShipmentById**
> \Infoplus\Model\Shipment getDuplicateShipmentById($shipment_id)

Get a duplicated a shipment by id

Returns a duplicated shipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to be duplicated.

try { 
    $result = $api_instance->getDuplicateShipmentById($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getDuplicateShipmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to be duplicated. | 

### Return type

[**\Infoplus\Model\Shipment**](Shipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getShipmentByFilter**
> \Infoplus\Model\Shipment[] getShipmentByFilter($filter, $page, $limit, $sort)

Search shipments by filter

Returns the list of shipments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getShipmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Shipment[]**](Shipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getShipmentById**
> \Infoplus\Model\Shipment getShipmentById($shipment_id)

Get a shipment by id

Returns the shipment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to be returned.

try { 
    $result = $api_instance->getShipmentById($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to be returned. | 

### Return type

[**\Infoplus\Model\Shipment**](Shipment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getShipmentTags**
> getShipmentTags($shipment_id)

Get the tags for a shipment.

Get all existing shipment tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$shipment_id = 56; // int | Id of the shipment to get tags for

try { 
    $api_instance->getShipmentTags($shipment_id);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipmentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **int**| Id of the shipment to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateShipmentCustomFields**
> updateShipmentCustomFields($body)

Update a shipment custom fields

Updates an existing shipment custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ShipmentApi();
$body = new \Infoplus\Model\Shipment(); // \Infoplus\Model\Shipment | Shipment to be updated.

try { 
    $api_instance->updateShipmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->updateShipmentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Shipment**](\Infoplus\Model\Shipment.md)| Shipment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

