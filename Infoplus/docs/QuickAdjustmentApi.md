# Infoplus\QuickAdjustmentApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addQuickAdjustment**](QuickAdjustmentApi.md#addQuickAdjustment) | **POST** /beta/quickAdjustment | Create a quickAdjustment
[**addQuickAdjustmentAudit**](QuickAdjustmentApi.md#addQuickAdjustmentAudit) | **PUT** /beta/quickAdjustment/{quickAdjustmentId}/audit/{quickAdjustmentAudit} | Add new audit for a quickAdjustment
[**addQuickAdjustmentTag**](QuickAdjustmentApi.md#addQuickAdjustmentTag) | **PUT** /beta/quickAdjustment/{quickAdjustmentId}/tag/{quickAdjustmentTag} | Add new tags for a quickAdjustment.
[**deleteQuickAdjustment**](QuickAdjustmentApi.md#deleteQuickAdjustment) | **DELETE** /beta/quickAdjustment/{quickAdjustmentId} | Delete a quickAdjustment
[**deleteQuickAdjustmentTag**](QuickAdjustmentApi.md#deleteQuickAdjustmentTag) | **DELETE** /beta/quickAdjustment/{quickAdjustmentId}/tag/{quickAdjustmentTag} | Delete a tag for a quickAdjustment.
[**executeQuickAdjustment**](QuickAdjustmentApi.md#executeQuickAdjustment) | **POST** /beta/quickAdjustment/executeQuickAdjustment | Run the ExecuteQuickAdjustment process.
[**getDuplicateQuickAdjustmentById**](QuickAdjustmentApi.md#getDuplicateQuickAdjustmentById) | **GET** /beta/quickAdjustment/duplicate/{quickAdjustmentId} | Get a duplicated a quickAdjustment by id
[**getQuickAdjustmentByFilter**](QuickAdjustmentApi.md#getQuickAdjustmentByFilter) | **GET** /beta/quickAdjustment/search | Search quickAdjustments by filter
[**getQuickAdjustmentById**](QuickAdjustmentApi.md#getQuickAdjustmentById) | **GET** /beta/quickAdjustment/{quickAdjustmentId} | Get a quickAdjustment by id
[**getQuickAdjustmentTags**](QuickAdjustmentApi.md#getQuickAdjustmentTags) | **GET** /beta/quickAdjustment/{quickAdjustmentId}/tag | Get the tags for a quickAdjustment.
[**updateQuickAdjustment**](QuickAdjustmentApi.md#updateQuickAdjustment) | **PUT** /beta/quickAdjustment | Update a quickAdjustment
[**updateQuickAdjustmentCustomFields**](QuickAdjustmentApi.md#updateQuickAdjustmentCustomFields) | **PUT** /beta/quickAdjustment/customFields | Update a quickAdjustment custom fields


# **addQuickAdjustment**
> \Infoplus\Model\QuickAdjustment addQuickAdjustment($body)

Create a quickAdjustment

Inserts a new quickAdjustment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\QuickAdjustment(); // \Infoplus\Model\QuickAdjustment | QuickAdjustment to be inserted.

try { 
    $result = $api_instance->addQuickAdjustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickAdjustment**](\Infoplus\Model\QuickAdjustment.md)| QuickAdjustment to be inserted. | 

### Return type

[**\Infoplus\Model\QuickAdjustment**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addQuickAdjustmentAudit**
> addQuickAdjustmentAudit($quick_adjustment_id, $quick_adjustment_audit)

Add new audit for a quickAdjustment

Adds an audit to an existing quickAdjustment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add an audit to
$quick_adjustment_audit = "quick_adjustment_audit_example"; // string | The audit to add

try { 
    $api_instance->addQuickAdjustmentAudit($quick_adjustment_id, $quick_adjustment_audit);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add an audit to | 
 **quick_adjustment_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addQuickAdjustmentTag**
> addQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag)

Add new tags for a quickAdjustment.

Adds a tag to an existing quickAdjustment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to add a tag to
$quick_adjustment_tag = "quick_adjustment_tag_example"; // string | The tag to add

try { 
    $api_instance->addQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->addQuickAdjustmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to add a tag to | 
 **quick_adjustment_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteQuickAdjustment**
> deleteQuickAdjustment($quick_adjustment_id)

Delete a quickAdjustment

Deletes the quickAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be deleted.

try { 
    $api_instance->deleteQuickAdjustment($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteQuickAdjustmentTag**
> deleteQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag)

Delete a tag for a quickAdjustment.

Deletes an existing quickAdjustment tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to remove tag from
$quick_adjustment_tag = "quick_adjustment_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteQuickAdjustmentTag($quick_adjustment_id, $quick_adjustment_tag);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->deleteQuickAdjustmentTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to remove tag from | 
 **quick_adjustment_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **executeQuickAdjustment**
> \Infoplus\Model\ProcessOutputAPIModel[] executeQuickAdjustment($body)

Run the ExecuteQuickAdjustment process.



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel(); // \Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel | Input data for ExecuteQuickAdjustment process.

try { 
    $result = $api_instance->executeQuickAdjustment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->executeQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel**](\Infoplus\Model\ExecuteQuickAdjustmentInputAPIModel.md)| Input data for ExecuteQuickAdjustment process. | 

### Return type

[**\Infoplus\Model\ProcessOutputAPIModel[]**](ProcessOutputAPIModel.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateQuickAdjustmentById**
> \Infoplus\Model\QuickAdjustment getDuplicateQuickAdjustmentById($quick_adjustment_id)

Get a duplicated a quickAdjustment by id

Returns a duplicated quickAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be duplicated.

try { 
    $result = $api_instance->getDuplicateQuickAdjustmentById($quick_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getDuplicateQuickAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be duplicated. | 

### Return type

[**\Infoplus\Model\QuickAdjustment**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickAdjustmentByFilter**
> \Infoplus\Model\QuickAdjustment[] getQuickAdjustmentByFilter($filter, $page, $limit, $sort)

Search quickAdjustments by filter

Returns the list of quickAdjustments that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getQuickAdjustmentByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\QuickAdjustment[]**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickAdjustmentById**
> \Infoplus\Model\QuickAdjustment getQuickAdjustmentById($quick_adjustment_id)

Get a quickAdjustment by id

Returns the quickAdjustment identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to be returned.

try { 
    $result = $api_instance->getQuickAdjustmentById($quick_adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to be returned. | 

### Return type

[**\Infoplus\Model\QuickAdjustment**](QuickAdjustment.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getQuickAdjustmentTags**
> getQuickAdjustmentTags($quick_adjustment_id)

Get the tags for a quickAdjustment.

Get all existing quickAdjustment tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$quick_adjustment_id = 56; // int | Id of the quickAdjustment to get tags for

try { 
    $api_instance->getQuickAdjustmentTags($quick_adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->getQuickAdjustmentTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_adjustment_id** | **int**| Id of the quickAdjustment to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateQuickAdjustment**
> updateQuickAdjustment($body)

Update a quickAdjustment

Updates an existing quickAdjustment using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\QuickAdjustment(); // \Infoplus\Model\QuickAdjustment | QuickAdjustment to be updated.

try { 
    $api_instance->updateQuickAdjustment($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->updateQuickAdjustment: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickAdjustment**](\Infoplus\Model\QuickAdjustment.md)| QuickAdjustment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateQuickAdjustmentCustomFields**
> updateQuickAdjustmentCustomFields($body)

Update a quickAdjustment custom fields

Updates an existing quickAdjustment custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\QuickAdjustmentApi();
$body = new \Infoplus\Model\QuickAdjustment(); // \Infoplus\Model\QuickAdjustment | QuickAdjustment to be updated.

try { 
    $api_instance->updateQuickAdjustmentCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling QuickAdjustmentApi->updateQuickAdjustmentCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\QuickAdjustment**](\Infoplus\Model\QuickAdjustment.md)| QuickAdjustment to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

