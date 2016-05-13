# Infoplus\ReplenishmentPlanApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReplenishmentPlan**](ReplenishmentPlanApi.md#addReplenishmentPlan) | **POST** /v1.0/replenishmentPlan | Create a replenishmentPlan
[**deleteReplenishmentPlan**](ReplenishmentPlanApi.md#deleteReplenishmentPlan) | **DELETE** /v1.0/replenishmentPlan/{replenishmentPlanId} | Delete a replenishmentPlan
[**getReplenishmentPlanByFilter**](ReplenishmentPlanApi.md#getReplenishmentPlanByFilter) | **GET** /v1.0/replenishmentPlan/search | Search replenishmentPlans by filter
[**getReplenishmentPlanById**](ReplenishmentPlanApi.md#getReplenishmentPlanById) | **GET** /v1.0/replenishmentPlan/{replenishmentPlanId} | Get a replenishmentPlan by id
[**updateReplenishmentPlan**](ReplenishmentPlanApi.md#updateReplenishmentPlan) | **PUT** /v1.0/replenishmentPlan | Update a replenishmentPlan


# **addReplenishmentPlan**
> \Infoplus\Model\ReplenishmentPlan addReplenishmentPlan($body)

Create a replenishmentPlan

Inserts a new replenishmentPlan using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentPlanApi();
$body = new \Infoplus\Model\ReplenishmentPlan(); // \Infoplus\Model\ReplenishmentPlan | ReplenishmentPlan to be inserted.

try { 
    $result = $api_instance->addReplenishmentPlan($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentPlanApi->addReplenishmentPlan: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ReplenishmentPlan**](\Infoplus\Model\ReplenishmentPlan.md)| ReplenishmentPlan to be inserted. | 

### Return type

[**\Infoplus\Model\ReplenishmentPlan**](ReplenishmentPlan.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteReplenishmentPlan**
> deleteReplenishmentPlan($replenishment_plan_id)

Delete a replenishmentPlan

Deletes the replenishmentPlan identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentPlanApi();
$replenishment_plan_id = 56; // int | Id of the replenishmentPlan to be deleted.

try { 
    $api_instance->deleteReplenishmentPlan($replenishment_plan_id);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentPlanApi->deleteReplenishmentPlan: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_plan_id** | **int**| Id of the replenishmentPlan to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentPlanByFilter**
> \Infoplus\Model\ReplenishmentPlan[] getReplenishmentPlanByFilter($filter, $page, $limit, $sort)

Search replenishmentPlans by filter

Returns the list of replenishmentPlans that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentPlanApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getReplenishmentPlanByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentPlanApi->getReplenishmentPlanByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ReplenishmentPlan[]**](ReplenishmentPlan.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getReplenishmentPlanById**
> \Infoplus\Model\ReplenishmentPlan getReplenishmentPlanById($replenishment_plan_id)

Get a replenishmentPlan by id

Returns the replenishmentPlan identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentPlanApi();
$replenishment_plan_id = 56; // int | Id of the replenishmentPlan to be returned.

try { 
    $result = $api_instance->getReplenishmentPlanById($replenishment_plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentPlanApi->getReplenishmentPlanById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **replenishment_plan_id** | **int**| Id of the replenishmentPlan to be returned. | 

### Return type

[**\Infoplus\Model\ReplenishmentPlan**](ReplenishmentPlan.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateReplenishmentPlan**
> updateReplenishmentPlan($body)

Update a replenishmentPlan

Updates an existing replenishmentPlan using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ReplenishmentPlanApi();
$body = new \Infoplus\Model\ReplenishmentPlan(); // \Infoplus\Model\ReplenishmentPlan | ReplenishmentPlan to be updated.

try { 
    $api_instance->updateReplenishmentPlan($body);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentPlanApi->updateReplenishmentPlan: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ReplenishmentPlan**](\Infoplus\Model\ReplenishmentPlan.md)| ReplenishmentPlan to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

