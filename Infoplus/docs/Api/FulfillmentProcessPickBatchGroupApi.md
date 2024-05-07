# Infoplus\FulfillmentProcessPickBatchGroupApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFulfillmentProcessGroupPicksByById**](FulfillmentProcessPickBatchGroupApi.md#getFulfillmentProcessGroupPicksByById) | **GET** /beta/fulfillmentProcessPickBatchGroup/{fulfillmentProcessPickBatchGroupId} | Get a fulfillmentProcessPickBatchGroup by id
[**getFulfillmentProcessPickBatchGroupBySearchText**](FulfillmentProcessPickBatchGroupApi.md#getFulfillmentProcessPickBatchGroupBySearchText) | **GET** /beta/fulfillmentProcessPickBatchGroup/search | Search fulfillmentProcessPickBatchGroups


# **getFulfillmentProcessGroupPicksByById**
> \Infoplus\Infoplus\Model\FulfillmentProcessPickBatchGroup getFulfillmentProcessGroupPicksByById($fulfillment_process_pick_batch_group_id)

Get a fulfillmentProcessPickBatchGroup by id

Returns the fulfillmentProcessPickBatchGroup identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessPickBatchGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_process_pick_batch_group_id = "fulfillment_process_pick_batch_group_id_example"; // string | Id of fulfillmentProcessPickBatchGroup to be returned.

try {
    $result = $apiInstance->getFulfillmentProcessGroupPicksByById($fulfillment_process_pick_batch_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessPickBatchGroupApi->getFulfillmentProcessGroupPicksByById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_process_pick_batch_group_id** | **string**| Id of fulfillmentProcessPickBatchGroup to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcessPickBatchGroup**](../Model/FulfillmentProcessPickBatchGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentProcessPickBatchGroupBySearchText**
> \Infoplus\Infoplus\Model\FulfillmentProcessPickBatchGroup[] getFulfillmentProcessPickBatchGroupBySearchText($search_text, $page, $limit)

Search fulfillmentProcessPickBatchGroups

Returns the list of fulfillmentProcessPickBatchGroups that match the given searchText.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\FulfillmentProcessPickBatchGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_text = "search_text_example"; // string | Search text, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.

try {
    $result = $apiInstance->getFulfillmentProcessPickBatchGroupBySearchText($search_text, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProcessPickBatchGroupApi->getFulfillmentProcessPickBatchGroupBySearchText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text, used to filter results. | [optional]
 **page** | **int**| Result page number.  Defaults to 1. | [optional]
 **limit** | **int**| Maximum results per page.  Defaults to 20.  Max allowed value is 250. | [optional]

### Return type

[**\Infoplus\Infoplus\Model\FulfillmentProcessPickBatchGroup[]**](../Model/FulfillmentProcessPickBatchGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

