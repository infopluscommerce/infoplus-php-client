# Infoplus\SubstitutionApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSubstitution**](SubstitutionApi.md#addSubstitution) | **POST** /beta/substitution | Create a substitution
[**addSubstitutionAudit**](SubstitutionApi.md#addSubstitutionAudit) | **PUT** /beta/substitution/{substitutionId}/audit/{substitutionAudit} | Add new audit for a substitution
[**addSubstitutionTag**](SubstitutionApi.md#addSubstitutionTag) | **PUT** /beta/substitution/{substitutionId}/tag/{substitutionTag} | Add new tags for a substitution.
[**deleteSubstitution**](SubstitutionApi.md#deleteSubstitution) | **DELETE** /beta/substitution/{substitutionId} | Delete a substitution
[**deleteSubstitutionTag**](SubstitutionApi.md#deleteSubstitutionTag) | **DELETE** /beta/substitution/{substitutionId}/tag/{substitutionTag} | Delete a tag for a substitution.
[**getDuplicateSubstitutionById**](SubstitutionApi.md#getDuplicateSubstitutionById) | **GET** /beta/substitution/duplicate/{substitutionId} | Get a duplicated a substitution by id
[**getSubstitutionByFilter**](SubstitutionApi.md#getSubstitutionByFilter) | **GET** /beta/substitution/search | Search substitutions by filter
[**getSubstitutionById**](SubstitutionApi.md#getSubstitutionById) | **GET** /beta/substitution/{substitutionId} | Get a substitution by id
[**getSubstitutionTags**](SubstitutionApi.md#getSubstitutionTags) | **GET** /beta/substitution/{substitutionId}/tag | Get the tags for a substitution.
[**updateSubstitution**](SubstitutionApi.md#updateSubstitution) | **PUT** /beta/substitution | Update a substitution
[**updateSubstitutionCustomFields**](SubstitutionApi.md#updateSubstitutionCustomFields) | **PUT** /beta/substitution/customFields | Update a substitution custom fields


# **addSubstitution**
> \Infoplus\Model\Substitution addSubstitution($body)

Create a substitution

Inserts a new substitution using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$body = new \Infoplus\Model\Substitution(); // \Infoplus\Model\Substitution | Substitution to be inserted.

try { 
    $result = $api_instance->addSubstitution($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitution: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Substitution**](\Infoplus\Model\Substitution.md)| Substitution to be inserted. | 

### Return type

[**\Infoplus\Model\Substitution**](Substitution.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addSubstitutionAudit**
> addSubstitutionAudit($substitution_id, $substitution_audit)

Add new audit for a substitution

Adds an audit to an existing substitution.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to add an audit to
$substitution_audit = "substitution_audit_example"; // string | The audit to add

try { 
    $api_instance->addSubstitutionAudit($substitution_id, $substitution_audit);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to add an audit to | 
 **substitution_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addSubstitutionTag**
> addSubstitutionTag($substitution_id, $substitution_tag)

Add new tags for a substitution.

Adds a tag to an existing substitution.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to add a tag to
$substitution_tag = "substitution_tag_example"; // string | The tag to add

try { 
    $api_instance->addSubstitutionTag($substitution_id, $substitution_tag);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->addSubstitutionTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to add a tag to | 
 **substitution_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteSubstitution**
> deleteSubstitution($substitution_id)

Delete a substitution

Deletes the substitution identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to be deleted.

try { 
    $api_instance->deleteSubstitution($substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->deleteSubstitution: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteSubstitutionTag**
> deleteSubstitutionTag($substitution_id, $substitution_tag)

Delete a tag for a substitution.

Deletes an existing substitution tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to remove tag from
$substitution_tag = "substitution_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteSubstitutionTag($substitution_id, $substitution_tag);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->deleteSubstitutionTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to remove tag from | 
 **substitution_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateSubstitutionById**
> \Infoplus\Model\Substitution getDuplicateSubstitutionById($substitution_id)

Get a duplicated a substitution by id

Returns a duplicated substitution identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to be duplicated.

try { 
    $result = $api_instance->getDuplicateSubstitutionById($substitution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getDuplicateSubstitutionById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be duplicated. | 

### Return type

[**\Infoplus\Model\Substitution**](Substitution.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSubstitutionByFilter**
> \Infoplus\Model\Substitution[] getSubstitutionByFilter($filter, $page, $limit, $sort)

Search substitutions by filter

Returns the list of substitutions that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getSubstitutionByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Substitution[]**](Substitution.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSubstitutionById**
> \Infoplus\Model\Substitution getSubstitutionById($substitution_id)

Get a substitution by id

Returns the substitution identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to be returned.

try { 
    $result = $api_instance->getSubstitutionById($substitution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to be returned. | 

### Return type

[**\Infoplus\Model\Substitution**](Substitution.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSubstitutionTags**
> getSubstitutionTags($substitution_id)

Get the tags for a substitution.

Get all existing substitution tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$substitution_id = 56; // int | Id of the substitution to get tags for

try { 
    $api_instance->getSubstitutionTags($substitution_id);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->getSubstitutionTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substitution_id** | **int**| Id of the substitution to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateSubstitution**
> updateSubstitution($body)

Update a substitution

Updates an existing substitution using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$body = new \Infoplus\Model\Substitution(); // \Infoplus\Model\Substitution | Substitution to be updated.

try { 
    $api_instance->updateSubstitution($body);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->updateSubstitution: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Substitution**](\Infoplus\Model\Substitution.md)| Substitution to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateSubstitutionCustomFields**
> updateSubstitutionCustomFields($body)

Update a substitution custom fields

Updates an existing substitution custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\SubstitutionApi();
$body = new \Infoplus\Model\Substitution(); // \Infoplus\Model\Substitution | Substitution to be updated.

try { 
    $api_instance->updateSubstitutionCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling SubstitutionApi->updateSubstitutionCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Substitution**](\Infoplus\Model\Substitution.md)| Substitution to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

