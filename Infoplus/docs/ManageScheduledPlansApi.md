# Infoplus\ManageScheduledPlansApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addManageScheduledPlans**](ManageScheduledPlansApi.md#addManageScheduledPlans) | **POST** /beta/manageScheduledPlans | Create a manageScheduledPlans
[**addManageScheduledPlansAudit**](ManageScheduledPlansApi.md#addManageScheduledPlansAudit) | **PUT** /beta/manageScheduledPlans/{manageScheduledPlansId}/audit/{manageScheduledPlansAudit} | Add new audit for a manageScheduledPlans
[**addManageScheduledPlansTag**](ManageScheduledPlansApi.md#addManageScheduledPlansTag) | **PUT** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag/{manageScheduledPlansTag} | Add new tags for a manageScheduledPlans.
[**deleteManageScheduledPlans**](ManageScheduledPlansApi.md#deleteManageScheduledPlans) | **DELETE** /beta/manageScheduledPlans/{manageScheduledPlansId} | Delete a manageScheduledPlans
[**deleteManageScheduledPlansTag**](ManageScheduledPlansApi.md#deleteManageScheduledPlansTag) | **DELETE** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag/{manageScheduledPlansTag} | Delete a tag for a manageScheduledPlans.
[**getDuplicateManageScheduledPlansById**](ManageScheduledPlansApi.md#getDuplicateManageScheduledPlansById) | **GET** /beta/manageScheduledPlans/duplicate/{manageScheduledPlansId} | Get a duplicated a manageScheduledPlans by id
[**getManageScheduledPlansByFilter**](ManageScheduledPlansApi.md#getManageScheduledPlansByFilter) | **GET** /beta/manageScheduledPlans/search | Search manageScheduledPlanses by filter
[**getManageScheduledPlansById**](ManageScheduledPlansApi.md#getManageScheduledPlansById) | **GET** /beta/manageScheduledPlans/{manageScheduledPlansId} | Get a manageScheduledPlans by id
[**getManageScheduledPlansTags**](ManageScheduledPlansApi.md#getManageScheduledPlansTags) | **GET** /beta/manageScheduledPlans/{manageScheduledPlansId}/tag | Get the tags for a manageScheduledPlans.
[**updateManageScheduledPlans**](ManageScheduledPlansApi.md#updateManageScheduledPlans) | **PUT** /beta/manageScheduledPlans | Update a manageScheduledPlans


# **addManageScheduledPlans**
> \Infoplus\Model\ManageScheduledPlans addManageScheduledPlans($body)

Create a manageScheduledPlans

Inserts a new manageScheduledPlans using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$body = new \Infoplus\Model\ManageScheduledPlans(); // \Infoplus\Model\ManageScheduledPlans | ManageScheduledPlans to be inserted.

try { 
    $result = $api_instance->addManageScheduledPlans($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlans: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ManageScheduledPlans**](\Infoplus\Model\ManageScheduledPlans.md)| ManageScheduledPlans to be inserted. | 

### Return type

[**\Infoplus\Model\ManageScheduledPlans**](ManageScheduledPlans.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addManageScheduledPlansAudit**
> addManageScheduledPlansAudit($manage_scheduled_plans_id, $manage_scheduled_plans_audit)

Add new audit for a manageScheduledPlans

Adds an audit to an existing manageScheduledPlans.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add an audit to
$manage_scheduled_plans_audit = "manage_scheduled_plans_audit_example"; // string | The audit to add

try { 
    $api_instance->addManageScheduledPlansAudit($manage_scheduled_plans_id, $manage_scheduled_plans_audit);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add an audit to | 
 **manage_scheduled_plans_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addManageScheduledPlansTag**
> addManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag)

Add new tags for a manageScheduledPlans.

Adds a tag to an existing manageScheduledPlans.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to add a tag to
$manage_scheduled_plans_tag = "manage_scheduled_plans_tag_example"; // string | The tag to add

try { 
    $api_instance->addManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->addManageScheduledPlansTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to add a tag to | 
 **manage_scheduled_plans_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteManageScheduledPlans**
> deleteManageScheduledPlans($manage_scheduled_plans_id)

Delete a manageScheduledPlans

Deletes the manageScheduledPlans identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be deleted.

try { 
    $api_instance->deleteManageScheduledPlans($manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->deleteManageScheduledPlans: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteManageScheduledPlansTag**
> deleteManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag)

Delete a tag for a manageScheduledPlans.

Deletes an existing manageScheduledPlans tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to remove tag from
$manage_scheduled_plans_tag = "manage_scheduled_plans_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteManageScheduledPlansTag($manage_scheduled_plans_id, $manage_scheduled_plans_tag);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->deleteManageScheduledPlansTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to remove tag from | 
 **manage_scheduled_plans_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateManageScheduledPlansById**
> \Infoplus\Model\ManageScheduledPlans getDuplicateManageScheduledPlansById($manage_scheduled_plans_id)

Get a duplicated a manageScheduledPlans by id

Returns a duplicated manageScheduledPlans identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be duplicated.

try { 
    $result = $api_instance->getDuplicateManageScheduledPlansById($manage_scheduled_plans_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getDuplicateManageScheduledPlansById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be duplicated. | 

### Return type

[**\Infoplus\Model\ManageScheduledPlans**](ManageScheduledPlans.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManageScheduledPlansByFilter**
> \Infoplus\Model\ManageScheduledPlans[] getManageScheduledPlansByFilter($filter, $page, $limit, $sort)

Search manageScheduledPlanses by filter

Returns the list of manageScheduledPlanses that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getManageScheduledPlansByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\ManageScheduledPlans[]**](ManageScheduledPlans.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManageScheduledPlansById**
> \Infoplus\Model\ManageScheduledPlans getManageScheduledPlansById($manage_scheduled_plans_id)

Get a manageScheduledPlans by id

Returns the manageScheduledPlans identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to be returned.

try { 
    $result = $api_instance->getManageScheduledPlansById($manage_scheduled_plans_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to be returned. | 

### Return type

[**\Infoplus\Model\ManageScheduledPlans**](ManageScheduledPlans.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getManageScheduledPlansTags**
> getManageScheduledPlansTags($manage_scheduled_plans_id)

Get the tags for a manageScheduledPlans.

Get all existing manageScheduledPlans tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$manage_scheduled_plans_id = 56; // int | Id of the manageScheduledPlans to get tags for

try { 
    $api_instance->getManageScheduledPlansTags($manage_scheduled_plans_id);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->getManageScheduledPlansTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_scheduled_plans_id** | **int**| Id of the manageScheduledPlans to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateManageScheduledPlans**
> updateManageScheduledPlans($body)

Update a manageScheduledPlans

Updates an existing manageScheduledPlans using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\ManageScheduledPlansApi();
$body = new \Infoplus\Model\ManageScheduledPlans(); // \Infoplus\Model\ManageScheduledPlans | ManageScheduledPlans to be updated.

try { 
    $api_instance->updateManageScheduledPlans($body);
} catch (Exception $e) {
    echo 'Exception when calling ManageScheduledPlansApi->updateManageScheduledPlans: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\ManageScheduledPlans**](\Infoplus\Model\ManageScheduledPlans.md)| ManageScheduledPlans to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

