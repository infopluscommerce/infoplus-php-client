# Infoplus\PickFaceAssignmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPickFaceAssignment**](PickFaceAssignmentApi.md#addPickFaceAssignment) | **POST** /v1.0/pickFaceAssignment | Create a pickFaceAssignment
[**deletePickFaceAssignment**](PickFaceAssignmentApi.md#deletePickFaceAssignment) | **DELETE** /v1.0/pickFaceAssignment/{pickFaceAssignmentId} | Delete a pickFaceAssignment
[**getPickFaceAssignmentByFilter**](PickFaceAssignmentApi.md#getPickFaceAssignmentByFilter) | **GET** /v1.0/pickFaceAssignment/search | Search pickFaceAssignments by filter
[**getPickFaceAssignmentById**](PickFaceAssignmentApi.md#getPickFaceAssignmentById) | **GET** /v1.0/pickFaceAssignment/{pickFaceAssignmentId} | Get a pickFaceAssignment by id
[**updatePickFaceAssignment**](PickFaceAssignmentApi.md#updatePickFaceAssignment) | **PUT** /v1.0/pickFaceAssignment | Update a pickFaceAssignment


# **addPickFaceAssignment**
> \Infoplus\Model\PickFaceAssignment addPickFaceAssignment($body)

Create a pickFaceAssignment

Inserts a new pickFaceAssignment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PickFaceAssignmentApi();
$body = new \Infoplus\Model\PickFaceAssignment(); // \Infoplus\Model\PickFaceAssignment | PickFaceAssignment to be inserted.

try { 
    $result = $api_instance->addPickFaceAssignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->addPickFaceAssignment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\PickFaceAssignment**](\Infoplus\Model\PickFaceAssignment.md)| PickFaceAssignment to be inserted. | 

### Return type

[**\Infoplus\Model\PickFaceAssignment**](PickFaceAssignment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deletePickFaceAssignment**
> deletePickFaceAssignment($pick_face_assignment_id)

Delete a pickFaceAssignment

Deletes the pickFaceAssignment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PickFaceAssignmentApi();
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to be deleted.

try { 
    $api_instance->deletePickFaceAssignment($pick_face_assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->deletePickFaceAssignment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPickFaceAssignmentByFilter**
> \Infoplus\Model\PickFaceAssignment[] getPickFaceAssignmentByFilter($filter, $page, $limit, $sort)

Search pickFaceAssignments by filter

Returns the list of pickFaceAssignments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PickFaceAssignmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getPickFaceAssignmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\PickFaceAssignment[]**](PickFaceAssignment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getPickFaceAssignmentById**
> \Infoplus\Model\PickFaceAssignment getPickFaceAssignmentById($pick_face_assignment_id)

Get a pickFaceAssignment by id

Returns the pickFaceAssignment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PickFaceAssignmentApi();
$pick_face_assignment_id = 56; // int | Id of the pickFaceAssignment to be returned.

try { 
    $result = $api_instance->getPickFaceAssignmentById($pick_face_assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->getPickFaceAssignmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pick_face_assignment_id** | **int**| Id of the pickFaceAssignment to be returned. | 

### Return type

[**\Infoplus\Model\PickFaceAssignment**](PickFaceAssignment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updatePickFaceAssignment**
> updatePickFaceAssignment($body)

Update a pickFaceAssignment

Updates an existing pickFaceAssignment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\PickFaceAssignmentApi();
$body = new \Infoplus\Model\PickFaceAssignment(); // \Infoplus\Model\PickFaceAssignment | PickFaceAssignment to be updated.

try { 
    $api_instance->updatePickFaceAssignment($body);
} catch (Exception $e) {
    echo 'Exception when calling PickFaceAssignmentApi->updatePickFaceAssignment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\PickFaceAssignment**](\Infoplus\Model\PickFaceAssignment.md)| PickFaceAssignment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

