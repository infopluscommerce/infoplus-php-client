# Infoplus\EmailTemplateApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEmailTemplate**](EmailTemplateApi.md#addEmailTemplate) | **POST** /beta/emailTemplate | Create an emailTemplate
[**deleteEmailTemplate**](EmailTemplateApi.md#deleteEmailTemplate) | **DELETE** /beta/emailTemplate/{emailTemplateId} | Delete an emailTemplate
[**getEmailTemplateByFilter**](EmailTemplateApi.md#getEmailTemplateByFilter) | **GET** /beta/emailTemplate/search | Search emailTemplates by filter
[**getEmailTemplateById**](EmailTemplateApi.md#getEmailTemplateById) | **GET** /beta/emailTemplate/{emailTemplateId} | Get an emailTemplate by id
[**updateEmailTemplate**](EmailTemplateApi.md#updateEmailTemplate) | **PUT** /beta/emailTemplate | Update an emailTemplate
[**updateEmailTemplateCustomFields**](EmailTemplateApi.md#updateEmailTemplateCustomFields) | **PUT** /beta/emailTemplate/customFields | Update an emailTemplate custom fields


# **addEmailTemplate**
> \Infoplus\Model\EmailTemplate addEmailTemplate($body)

Create an emailTemplate

Inserts a new emailTemplate using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$body = new \Infoplus\Model\EmailTemplate(); // \Infoplus\Model\EmailTemplate | EmailTemplate to be inserted.

try { 
    $result = $api_instance->addEmailTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\EmailTemplate**](\Infoplus\Model\EmailTemplate.md)| EmailTemplate to be inserted. | 

### Return type

[**\Infoplus\Model\EmailTemplate**](EmailTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteEmailTemplate**
> deleteEmailTemplate($email_template_id)

Delete an emailTemplate

Deletes the emailTemplate identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$email_template_id = 56; // int | Id of the emailTemplate to be deleted.

try { 
    $api_instance->deleteEmailTemplate($email_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->deleteEmailTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEmailTemplateByFilter**
> \Infoplus\Model\EmailTemplate[] getEmailTemplateByFilter($filter, $page, $limit, $sort)

Search emailTemplates by filter

Returns the list of emailTemplates that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getEmailTemplateByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\EmailTemplate[]**](EmailTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEmailTemplateById**
> \Infoplus\Model\EmailTemplate getEmailTemplateById($email_template_id)

Get an emailTemplate by id

Returns the emailTemplate identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$email_template_id = 56; // int | Id of the emailTemplate to be returned.

try { 
    $result = $api_instance->getEmailTemplateById($email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to be returned. | 

### Return type

[**\Infoplus\Model\EmailTemplate**](EmailTemplate.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateEmailTemplate**
> updateEmailTemplate($body)

Update an emailTemplate

Updates an existing emailTemplate using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$body = new \Infoplus\Model\EmailTemplate(); // \Infoplus\Model\EmailTemplate | EmailTemplate to be updated.

try { 
    $api_instance->updateEmailTemplate($body);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->updateEmailTemplate: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\EmailTemplate**](\Infoplus\Model\EmailTemplate.md)| EmailTemplate to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateEmailTemplateCustomFields**
> updateEmailTemplateCustomFields($body)

Update an emailTemplate custom fields

Updates an existing emailTemplate custom fields using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\EmailTemplateApi();
$body = new \Infoplus\Model\EmailTemplate(); // \Infoplus\Model\EmailTemplate | EmailTemplate to be updated.

try { 
    $api_instance->updateEmailTemplateCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->updateEmailTemplateCustomFields: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\EmailTemplate**](\Infoplus\Model\EmailTemplate.md)| EmailTemplate to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

