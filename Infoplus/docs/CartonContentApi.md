# Infoplus\CartonContentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCartonContent**](CartonContentApi.md#addCartonContent) | **POST** /beta/cartonContent | Create a cartonContent
[**addCartonContentAudit**](CartonContentApi.md#addCartonContentAudit) | **PUT** /beta/cartonContent/{cartonContentId}/audit/{cartonContentAudit} | Add new audit for a cartonContent
[**addCartonContentTag**](CartonContentApi.md#addCartonContentTag) | **PUT** /beta/cartonContent/{cartonContentId}/tag/{cartonContentTag} | Add new tags for a cartonContent.
[**deleteCartonContent**](CartonContentApi.md#deleteCartonContent) | **DELETE** /beta/cartonContent/{cartonContentId} | Delete a cartonContent
[**deleteCartonContentTag**](CartonContentApi.md#deleteCartonContentTag) | **DELETE** /beta/cartonContent/{cartonContentId}/tag/{cartonContentTag} | Delete a tag for a cartonContent.
[**getCartonContentByFilter**](CartonContentApi.md#getCartonContentByFilter) | **GET** /beta/cartonContent/search | Search cartonContents by filter
[**getCartonContentById**](CartonContentApi.md#getCartonContentById) | **GET** /beta/cartonContent/{cartonContentId} | Get a cartonContent by id
[**getCartonContentTags**](CartonContentApi.md#getCartonContentTags) | **GET** /beta/cartonContent/{cartonContentId}/tag | Get the tags for a cartonContent.
[**getDuplicateCartonContentById**](CartonContentApi.md#getDuplicateCartonContentById) | **GET** /beta/cartonContent/duplicate/{cartonContentId} | Get a duplicated a cartonContent by id
[**updateCartonContent**](CartonContentApi.md#updateCartonContent) | **PUT** /beta/cartonContent | Update a cartonContent
[**updateCartonContentCustomFields**](CartonContentApi.md#updateCartonContentCustomFields) | **PUT** /beta/cartonContent/customFields | Update a cartonContent custom fields


# **addCartonContent**
> \Infoplus\Model\CartonContent addCartonContent($body)

Create a cartonContent

Inserts a new cartonContent using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$body = new \Infoplus\Model\CartonContent(); // \Infoplus\Model\CartonContent | CartonContent to be inserted.

try { 
    $result = $api_instance->addCartonContent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->addCartonContent: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\CartonContent**](\Infoplus\Model\CartonContent.md)| CartonContent to be inserted. | 

### Return type

[**\Infoplus\Model\CartonContent**](CartonContent.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addCartonContentAudit**
> addCartonContentAudit($carton_content_id, $carton_content_audit)

Add new audit for a cartonContent

Adds an audit to an existing cartonContent.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to add an audit to
$carton_content_audit = "carton_content_audit_example"; // string | The audit to add

try { 
    $api_instance->addCartonContentAudit($carton_content_id, $carton_content_audit);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->addCartonContentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to add an audit to | 
 **carton_content_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addCartonContentTag**
> addCartonContentTag($carton_content_id, $carton_content_tag)

Add new tags for a cartonContent.

Adds a tag to an existing cartonContent.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to add a tag to
$carton_content_tag = "carton_content_tag_example"; // string | The tag to add

try { 
    $api_instance->addCartonContentTag($carton_content_id, $carton_content_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->addCartonContentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to add a tag to | 
 **carton_content_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteCartonContent**
> deleteCartonContent($carton_content_id)

Delete a cartonContent

Deletes the cartonContent identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to be deleted.

try { 
    $api_instance->deleteCartonContent($carton_content_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->deleteCartonContent: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteCartonContentTag**
> deleteCartonContentTag($carton_content_id, $carton_content_tag)

Delete a tag for a cartonContent.

Deletes an existing cartonContent tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to remove tag from
$carton_content_tag = "carton_content_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteCartonContentTag($carton_content_id, $carton_content_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->deleteCartonContentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to remove tag from | 
 **carton_content_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCartonContentByFilter**
> \Infoplus\Model\CartonContent[] getCartonContentByFilter($filter, $page, $limit, $sort)

Search cartonContents by filter

Returns the list of cartonContents that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getCartonContentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->getCartonContentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\CartonContent[]**](CartonContent.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCartonContentById**
> \Infoplus\Model\CartonContent getCartonContentById($carton_content_id)

Get a cartonContent by id

Returns the cartonContent identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to be returned.

try { 
    $result = $api_instance->getCartonContentById($carton_content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->getCartonContentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to be returned. | 

### Return type

[**\Infoplus\Model\CartonContent**](CartonContent.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getCartonContentTags**
> getCartonContentTags($carton_content_id)

Get the tags for a cartonContent.

Get all existing cartonContent tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to get tags for

try { 
    $api_instance->getCartonContentTags($carton_content_id);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->getCartonContentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateCartonContentById**
> \Infoplus\Model\CartonContent getDuplicateCartonContentById($carton_content_id)

Get a duplicated a cartonContent by id

Returns a duplicated cartonContent identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$carton_content_id = 56; // int | Id of the cartonContent to be duplicated.

try { 
    $result = $api_instance->getDuplicateCartonContentById($carton_content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->getDuplicateCartonContentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carton_content_id** | **int**| Id of the cartonContent to be duplicated. | 

### Return type

[**\Infoplus\Model\CartonContent**](CartonContent.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCartonContent**
> updateCartonContent($body)

Update a cartonContent

Updates an existing cartonContent using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$body = new \Infoplus\Model\CartonContent(); // \Infoplus\Model\CartonContent | CartonContent to be updated.

try { 
    $api_instance->updateCartonContent($body);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->updateCartonContent: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\CartonContent**](\Infoplus\Model\CartonContent.md)| CartonContent to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCartonContentCustomFields**
> updateCartonContentCustomFields($body)

Update a cartonContent custom fields

Updates an existing cartonContent custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\CartonContentApi();
$body = new \Infoplus\Model\CartonContent(); // \Infoplus\Model\CartonContent | CartonContent to be updated.

try { 
    $api_instance->updateCartonContentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling CartonContentApi->updateCartonContentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\CartonContent**](\Infoplus\Model\CartonContent.md)| CartonContent to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

