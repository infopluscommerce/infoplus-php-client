# Infoplus\AsnApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAsn**](AsnApi.md#addAsn) | **POST** /beta/asn | Create an asn
[**addAsnAudit**](AsnApi.md#addAsnAudit) | **PUT** /beta/asn/{asnId}/audit/{asnAudit} | Add new audit for an asn
[**addAsnTag**](AsnApi.md#addAsnTag) | **PUT** /beta/asn/{asnId}/tag/{asnTag} | Add new tags for an asn.
[**deleteAsn**](AsnApi.md#deleteAsn) | **DELETE** /beta/asn/{asnId} | Delete an asn
[**deleteAsnTag**](AsnApi.md#deleteAsnTag) | **DELETE** /beta/asn/{asnId}/tag/{asnTag} | Delete a tag for an asn.
[**getAsnByFilter**](AsnApi.md#getAsnByFilter) | **GET** /beta/asn/search | Search asns by filter
[**getAsnById**](AsnApi.md#getAsnById) | **GET** /beta/asn/{asnId} | Get an asn by id
[**getAsnTags**](AsnApi.md#getAsnTags) | **GET** /beta/asn/{asnId}/tag | Get the tags for an asn.
[**getDuplicateAsnById**](AsnApi.md#getDuplicateAsnById) | **GET** /beta/asn/duplicate/{asnId} | Get a duplicated an asn by id
[**updateAsn**](AsnApi.md#updateAsn) | **PUT** /beta/asn | Update an asn
[**updateAsnCustomFields**](AsnApi.md#updateAsnCustomFields) | **PUT** /beta/asn/customFields | Update an asn custom fields


# **addAsn**
> \Infoplus\Model\Asn addAsn($body)

Create an asn

Inserts a new asn using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$body = new \Infoplus\Model\Asn(); // \Infoplus\Model\Asn | Asn to be inserted.

try { 
    $result = $api_instance->addAsn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->addAsn: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Asn**](\Infoplus\Model\Asn.md)| Asn to be inserted. | 

### Return type

[**\Infoplus\Model\Asn**](Asn.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addAsnAudit**
> addAsnAudit($asn_id, $asn_audit)

Add new audit for an asn

Adds an audit to an existing asn.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to add an audit to
$asn_audit = "asn_audit_example"; // string | The audit to add

try { 
    $api_instance->addAsnAudit($asn_id, $asn_audit);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->addAsnAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to add an audit to | 
 **asn_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addAsnTag**
> addAsnTag($asn_id, $asn_tag)

Add new tags for an asn.

Adds a tag to an existing asn.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to add a tag to
$asn_tag = "asn_tag_example"; // string | The tag to add

try { 
    $api_instance->addAsnTag($asn_id, $asn_tag);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->addAsnTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to add a tag to | 
 **asn_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteAsn**
> deleteAsn($asn_id)

Delete an asn

Deletes the asn identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to be deleted.

try { 
    $api_instance->deleteAsn($asn_id);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->deleteAsn: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteAsnTag**
> deleteAsnTag($asn_id, $asn_tag)

Delete a tag for an asn.

Deletes an existing asn tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to remove tag from
$asn_tag = "asn_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteAsnTag($asn_id, $asn_tag);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->deleteAsnTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to remove tag from | 
 **asn_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAsnByFilter**
> \Infoplus\Model\Asn[] getAsnByFilter($filter, $page, $limit, $sort)

Search asns by filter

Returns the list of asns that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getAsnByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->getAsnByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\Asn[]**](Asn.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAsnById**
> \Infoplus\Model\Asn getAsnById($asn_id)

Get an asn by id

Returns the asn identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to be returned.

try { 
    $result = $api_instance->getAsnById($asn_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->getAsnById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to be returned. | 

### Return type

[**\Infoplus\Model\Asn**](Asn.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getAsnTags**
> getAsnTags($asn_id)

Get the tags for an asn.

Get all existing asn tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to get tags for

try { 
    $api_instance->getAsnTags($asn_id);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->getAsnTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateAsnById**
> \Infoplus\Model\Asn getDuplicateAsnById($asn_id)

Get a duplicated an asn by id

Returns a duplicated asn identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$asn_id = 56; // int | Id of the asn to be duplicated.

try { 
    $result = $api_instance->getDuplicateAsnById($asn_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->getDuplicateAsnById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_id** | **int**| Id of the asn to be duplicated. | 

### Return type

[**\Infoplus\Model\Asn**](Asn.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateAsn**
> updateAsn($body)

Update an asn

Updates an existing asn using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$body = new \Infoplus\Model\Asn(); // \Infoplus\Model\Asn | Asn to be updated.

try { 
    $api_instance->updateAsn($body);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->updateAsn: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Asn**](\Infoplus\Model\Asn.md)| Asn to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateAsnCustomFields**
> updateAsnCustomFields($body)

Update an asn custom fields

Updates an existing asn custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\AsnApi();
$body = new \Infoplus\Model\Asn(); // \Infoplus\Model\Asn | Asn to be updated.

try { 
    $api_instance->updateAsnCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling AsnApi->updateAsnCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\Asn**](\Infoplus\Model\Asn.md)| Asn to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

