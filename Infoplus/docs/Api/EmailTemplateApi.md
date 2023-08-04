# Infoplus\EmailTemplateApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEmailTemplate**](EmailTemplateApi.md#addEmailTemplate) | **POST** /beta/emailTemplate | Create an emailTemplate
[**addEmailTemplateAudit**](EmailTemplateApi.md#addEmailTemplateAudit) | **PUT** /beta/emailTemplate/{emailTemplateId}/audit/{emailTemplateAudit} | Add new audit for an emailTemplate
[**addEmailTemplateFile**](EmailTemplateApi.md#addEmailTemplateFile) | **POST** /beta/emailTemplate/{emailTemplateId}/file/{fileName} | Attach a file to an emailTemplate
[**addEmailTemplateFileByURL**](EmailTemplateApi.md#addEmailTemplateFileByURL) | **POST** /beta/emailTemplate/{emailTemplateId}/file | Attach a file to an emailTemplate by URL.
[**addEmailTemplateTag**](EmailTemplateApi.md#addEmailTemplateTag) | **PUT** /beta/emailTemplate/{emailTemplateId}/tag/{emailTemplateTag} | Add new tags for an emailTemplate.
[**deleteEmailTemplate**](EmailTemplateApi.md#deleteEmailTemplate) | **DELETE** /beta/emailTemplate/{emailTemplateId} | Delete an emailTemplate
[**deleteEmailTemplateFile**](EmailTemplateApi.md#deleteEmailTemplateFile) | **DELETE** /beta/emailTemplate/{emailTemplateId}/file/{fileId} | Delete a file for an emailTemplate.
[**deleteEmailTemplateTag**](EmailTemplateApi.md#deleteEmailTemplateTag) | **DELETE** /beta/emailTemplate/{emailTemplateId}/tag/{emailTemplateTag} | Delete a tag for an emailTemplate.
[**getDuplicateEmailTemplateById**](EmailTemplateApi.md#getDuplicateEmailTemplateById) | **GET** /beta/emailTemplate/duplicate/{emailTemplateId} | Get a duplicated an emailTemplate by id
[**getEmailTemplateByFilter**](EmailTemplateApi.md#getEmailTemplateByFilter) | **GET** /beta/emailTemplate/search | Search emailTemplates by filter
[**getEmailTemplateById**](EmailTemplateApi.md#getEmailTemplateById) | **GET** /beta/emailTemplate/{emailTemplateId} | Get an emailTemplate by id
[**getEmailTemplateFiles**](EmailTemplateApi.md#getEmailTemplateFiles) | **GET** /beta/emailTemplate/{emailTemplateId}/file | Get the files for an emailTemplate.
[**getEmailTemplateTags**](EmailTemplateApi.md#getEmailTemplateTags) | **GET** /beta/emailTemplate/{emailTemplateId}/tag | Get the tags for an emailTemplate.
[**updateEmailTemplate**](EmailTemplateApi.md#updateEmailTemplate) | **PUT** /beta/emailTemplate | Update an emailTemplate
[**updateEmailTemplateCustomFields**](EmailTemplateApi.md#updateEmailTemplateCustomFields) | **PUT** /beta/emailTemplate/customFields | Update an emailTemplate custom fields


# **addEmailTemplate**
> \Infoplus\Infoplus\Model\EmailTemplate addEmailTemplate($body)

Create an emailTemplate

Inserts a new emailTemplate using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\EmailTemplate(); // \Infoplus\Infoplus\Model\EmailTemplate | EmailTemplate to be inserted.

try {
    $result = $apiInstance->addEmailTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)| EmailTemplate to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailTemplateAudit**
> addEmailTemplateAudit($email_template_id, $email_template_audit)

Add new audit for an emailTemplate

Adds an audit to an existing emailTemplate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to add an audit to
$email_template_audit = "email_template_audit_example"; // string | The audit to add

try {
    $apiInstance->addEmailTemplateAudit($email_template_id, $email_template_audit);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplateAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to add an audit to |
 **email_template_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailTemplateFile**
> addEmailTemplateFile($email_template_id, $file_name)

Attach a file to an emailTemplate

Adds a file to an existing emailTemplate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addEmailTemplateFile($email_template_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailTemplateFileByURL**
> addEmailTemplateFileByURL($body, $email_template_id)

Attach a file to an emailTemplate by URL.

Adds a file to an existing emailTemplate by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$email_template_id = 56; // int | Id of the emailTemplate to add an file to

try {
    $apiInstance->addEmailTemplateFileByURL($body, $email_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplateFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **email_template_id** | **int**| Id of the emailTemplate to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailTemplateTag**
> addEmailTemplateTag($email_template_id, $email_template_tag)

Add new tags for an emailTemplate.

Adds a tag to an existing emailTemplate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to add a tag to
$email_template_tag = "email_template_tag_example"; // string | The tag to add

try {
    $apiInstance->addEmailTemplateTag($email_template_id, $email_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->addEmailTemplateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to add a tag to |
 **email_template_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailTemplate**
> deleteEmailTemplate($email_template_id)

Delete an emailTemplate

Deletes the emailTemplate identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to be deleted.

try {
    $apiInstance->deleteEmailTemplate($email_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->deleteEmailTemplate: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailTemplateFile**
> deleteEmailTemplateFile($email_template_id, $file_id)

Delete a file for an emailTemplate.

Deletes an existing emailTemplate file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteEmailTemplateFile($email_template_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->deleteEmailTemplateFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailTemplateTag**
> deleteEmailTemplateTag($email_template_id, $email_template_tag)

Delete a tag for an emailTemplate.

Deletes an existing emailTemplate tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to remove tag from
$email_template_tag = "email_template_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteEmailTemplateTag($email_template_id, $email_template_tag);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->deleteEmailTemplateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to remove tag from |
 **email_template_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateEmailTemplateById**
> \Infoplus\Infoplus\Model\EmailTemplate getDuplicateEmailTemplateById($email_template_id)

Get a duplicated an emailTemplate by id

Returns a duplicated emailTemplate identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to be duplicated.

try {
    $result = $apiInstance->getDuplicateEmailTemplateById($email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getDuplicateEmailTemplateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplateByFilter**
> \Infoplus\Infoplus\Model\EmailTemplate[] getEmailTemplateByFilter($filter, $page, $limit, $sort)

Search emailTemplates by filter

Returns the list of emailTemplates that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try {
    $result = $apiInstance->getEmailTemplateByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\EmailTemplate[]**](../Model/EmailTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplateById**
> \Infoplus\Infoplus\Model\EmailTemplate getEmailTemplateById($email_template_id)

Get an emailTemplate by id

Returns the emailTemplate identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to be returned.

try {
    $result = $apiInstance->getEmailTemplateById($email_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplateFiles**
> getEmailTemplateFiles($email_template_id)

Get the files for an emailTemplate.

Get all existing emailTemplate files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to get files for

try {
    $apiInstance->getEmailTemplateFiles($email_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplateTags**
> getEmailTemplateTags($email_template_id)

Get the tags for an emailTemplate.

Get all existing emailTemplate tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_template_id = 56; // int | Id of the emailTemplate to get tags for

try {
    $apiInstance->getEmailTemplateTags($email_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->getEmailTemplateTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_id** | **int**| Id of the emailTemplate to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplate**
> updateEmailTemplate($body)

Update an emailTemplate

Updates an existing emailTemplate using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\EmailTemplate(); // \Infoplus\Infoplus\Model\EmailTemplate | EmailTemplate to be updated.

try {
    $apiInstance->updateEmailTemplate($body);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->updateEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)| EmailTemplate to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplateCustomFields**
> updateEmailTemplateCustomFields($body)

Update an emailTemplate custom fields

Updates an existing emailTemplate custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\EmailTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\EmailTemplate(); // \Infoplus\Infoplus\Model\EmailTemplate | EmailTemplate to be updated.

try {
    $apiInstance->updateEmailTemplateCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplateApi->updateEmailTemplateCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\EmailTemplate**](../Model/EmailTemplate.md)| EmailTemplate to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

