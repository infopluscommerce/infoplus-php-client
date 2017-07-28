# Infoplus\InvoiceWorksheetApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoiceWorksheet**](InvoiceWorksheetApi.md#addInvoiceWorksheet) | **POST** /beta/invoiceWorksheet | Create an invoiceWorksheet
[**addInvoiceWorksheetAudit**](InvoiceWorksheetApi.md#addInvoiceWorksheetAudit) | **PUT** /beta/invoiceWorksheet/{invoiceWorksheetId}/audit/{invoiceWorksheetAudit} | Add new audit for an invoiceWorksheet
[**addInvoiceWorksheetTag**](InvoiceWorksheetApi.md#addInvoiceWorksheetTag) | **PUT** /beta/invoiceWorksheet/{invoiceWorksheetId}/tag/{invoiceWorksheetTag} | Add new tags for an invoiceWorksheet.
[**deleteInvoiceWorksheet**](InvoiceWorksheetApi.md#deleteInvoiceWorksheet) | **DELETE** /beta/invoiceWorksheet/{invoiceWorksheetId} | Delete an invoiceWorksheet
[**deleteInvoiceWorksheetTag**](InvoiceWorksheetApi.md#deleteInvoiceWorksheetTag) | **DELETE** /beta/invoiceWorksheet/{invoiceWorksheetId}/tag/{invoiceWorksheetTag} | Delete a tag for an invoiceWorksheet.
[**getDuplicateInvoiceWorksheetById**](InvoiceWorksheetApi.md#getDuplicateInvoiceWorksheetById) | **GET** /beta/invoiceWorksheet/duplicate/{invoiceWorksheetId} | Get a duplicated an invoiceWorksheet by id
[**getInvoiceWorksheetByFilter**](InvoiceWorksheetApi.md#getInvoiceWorksheetByFilter) | **GET** /beta/invoiceWorksheet/search | Search invoiceWorksheets by filter
[**getInvoiceWorksheetById**](InvoiceWorksheetApi.md#getInvoiceWorksheetById) | **GET** /beta/invoiceWorksheet/{invoiceWorksheetId} | Get an invoiceWorksheet by id
[**getInvoiceWorksheetTags**](InvoiceWorksheetApi.md#getInvoiceWorksheetTags) | **GET** /beta/invoiceWorksheet/{invoiceWorksheetId}/tag | Get the tags for an invoiceWorksheet.
[**updateInvoiceWorksheet**](InvoiceWorksheetApi.md#updateInvoiceWorksheet) | **PUT** /beta/invoiceWorksheet | Update an invoiceWorksheet


# **addInvoiceWorksheet**
> \Infoplus\Model\InvoiceWorksheet addInvoiceWorksheet($body)

Create an invoiceWorksheet

Inserts a new invoiceWorksheet using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$body = new \Infoplus\Model\InvoiceWorksheet(); // \Infoplus\Model\InvoiceWorksheet | InvoiceWorksheet to be inserted.

try { 
    $result = $api_instance->addInvoiceWorksheet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->addInvoiceWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\InvoiceWorksheet**](\Infoplus\Model\InvoiceWorksheet.md)| InvoiceWorksheet to be inserted. | 

### Return type

[**\Infoplus\Model\InvoiceWorksheet**](InvoiceWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addInvoiceWorksheetAudit**
> addInvoiceWorksheetAudit($invoice_worksheet_id, $invoice_worksheet_audit)

Add new audit for an invoiceWorksheet

Adds an audit to an existing invoiceWorksheet.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to add an audit to
$invoice_worksheet_audit = "invoice_worksheet_audit_example"; // string | The audit to add

try { 
    $api_instance->addInvoiceWorksheetAudit($invoice_worksheet_id, $invoice_worksheet_audit);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->addInvoiceWorksheetAudit: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to add an audit to | 
 **invoice_worksheet_audit** | **string**| The audit to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **addInvoiceWorksheetTag**
> addInvoiceWorksheetTag($invoice_worksheet_id, $invoice_worksheet_tag)

Add new tags for an invoiceWorksheet.

Adds a tag to an existing invoiceWorksheet.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to add a tag to
$invoice_worksheet_tag = "invoice_worksheet_tag_example"; // string | The tag to add

try { 
    $api_instance->addInvoiceWorksheetTag($invoice_worksheet_id, $invoice_worksheet_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->addInvoiceWorksheetTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to add a tag to | 
 **invoice_worksheet_tag** | **string**| The tag to add | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteInvoiceWorksheet**
> deleteInvoiceWorksheet($invoice_worksheet_id)

Delete an invoiceWorksheet

Deletes the invoiceWorksheet identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to be deleted.

try { 
    $api_instance->deleteInvoiceWorksheet($invoice_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->deleteInvoiceWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to be deleted. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteInvoiceWorksheetTag**
> deleteInvoiceWorksheetTag($invoice_worksheet_id, $invoice_worksheet_tag)

Delete a tag for an invoiceWorksheet.

Deletes an existing invoiceWorksheet tag using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to remove tag from
$invoice_worksheet_tag = "invoice_worksheet_tag_example"; // string | The tag to delete

try { 
    $api_instance->deleteInvoiceWorksheetTag($invoice_worksheet_id, $invoice_worksheet_tag);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->deleteInvoiceWorksheetTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to remove tag from | 
 **invoice_worksheet_tag** | **string**| The tag to delete | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDuplicateInvoiceWorksheetById**
> \Infoplus\Model\InvoiceWorksheet getDuplicateInvoiceWorksheetById($invoice_worksheet_id)

Get a duplicated an invoiceWorksheet by id

Returns a duplicated invoiceWorksheet identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to be duplicated.

try { 
    $result = $api_instance->getDuplicateInvoiceWorksheetById($invoice_worksheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->getDuplicateInvoiceWorksheetById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to be duplicated. | 

### Return type

[**\Infoplus\Model\InvoiceWorksheet**](InvoiceWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceWorksheetByFilter**
> \Infoplus\Model\InvoiceWorksheet[] getInvoiceWorksheetByFilter($filter, $page, $limit, $sort)

Search invoiceWorksheets by filter

Returns the list of invoiceWorksheets that match the given filter.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$filter = "filter_example"; // string | Query string, used to filter results.
$page = 56; // int | Result page number.  Defaults to 1.
$limit = 56; // int | Maximum results per page.  Defaults to 20.  Max allowed value is 250.
$sort = "sort_example"; // string | Sort results by specified field.

try { 
    $result = $api_instance->getInvoiceWorksheetByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->getInvoiceWorksheetByFilter: ', $e->getMessage(), "\n";
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

[**\Infoplus\Model\InvoiceWorksheet[]**](InvoiceWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceWorksheetById**
> \Infoplus\Model\InvoiceWorksheet getInvoiceWorksheetById($invoice_worksheet_id)

Get an invoiceWorksheet by id

Returns the invoiceWorksheet identified by the specified id.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to be returned.

try { 
    $result = $api_instance->getInvoiceWorksheetById($invoice_worksheet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->getInvoiceWorksheetById: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to be returned. | 

### Return type

[**\Infoplus\Model\InvoiceWorksheet**](InvoiceWorksheet.md)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInvoiceWorksheetTags**
> getInvoiceWorksheetTags($invoice_worksheet_id)

Get the tags for an invoiceWorksheet.

Get all existing invoiceWorksheet tags.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$invoice_worksheet_id = 56; // int | Id of the invoiceWorksheet to get tags for

try { 
    $api_instance->getInvoiceWorksheetTags($invoice_worksheet_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->getInvoiceWorksheetTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_worksheet_id** | **int**| Id of the invoiceWorksheet to get tags for | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateInvoiceWorksheet**
> updateInvoiceWorksheet($body)

Update an invoiceWorksheet

Updates an existing invoiceWorksheet using the specified data.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'BEARER');

$api_instance = new Infoplus\Api\InvoiceWorksheetApi();
$body = new \Infoplus\Model\InvoiceWorksheet(); // \Infoplus\Model\InvoiceWorksheet | InvoiceWorksheet to be updated.

try { 
    $api_instance->updateInvoiceWorksheet($body);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceWorksheetApi->updateInvoiceWorksheet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Model\InvoiceWorksheet**](\Infoplus\Model\InvoiceWorksheet.md)| InvoiceWorksheet to be updated. | 

### Return type

void (empty response body)

### Authorization

[api_key](../README.md#api_key)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

