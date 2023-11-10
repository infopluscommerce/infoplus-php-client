# Infoplus\CustomerInvoiceTemplateLineApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomerInvoiceTemplateLineAudit**](CustomerInvoiceTemplateLineApi.md#addCustomerInvoiceTemplateLineAudit) | **PUT** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/audit/{customerInvoiceTemplateLineAudit} | Add new audit for a customerInvoiceTemplateLine
[**addCustomerInvoiceTemplateLineFile**](CustomerInvoiceTemplateLineApi.md#addCustomerInvoiceTemplateLineFile) | **POST** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/file/{fileName} | Attach a file to a customerInvoiceTemplateLine
[**addCustomerInvoiceTemplateLineFileByURL**](CustomerInvoiceTemplateLineApi.md#addCustomerInvoiceTemplateLineFileByURL) | **POST** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/file | Attach a file to a customerInvoiceTemplateLine by URL.
[**addCustomerInvoiceTemplateLineTag**](CustomerInvoiceTemplateLineApi.md#addCustomerInvoiceTemplateLineTag) | **PUT** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/tag/{customerInvoiceTemplateLineTag} | Add new tags for a customerInvoiceTemplateLine.
[**deleteCustomerInvoiceTemplateLine**](CustomerInvoiceTemplateLineApi.md#deleteCustomerInvoiceTemplateLine) | **DELETE** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId} | Delete a customerInvoiceTemplateLine
[**deleteCustomerInvoiceTemplateLineFile**](CustomerInvoiceTemplateLineApi.md#deleteCustomerInvoiceTemplateLineFile) | **DELETE** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/file/{fileId} | Delete a file for a customerInvoiceTemplateLine.
[**deleteCustomerInvoiceTemplateLineTag**](CustomerInvoiceTemplateLineApi.md#deleteCustomerInvoiceTemplateLineTag) | **DELETE** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/tag/{customerInvoiceTemplateLineTag} | Delete a tag for a customerInvoiceTemplateLine.
[**getCustomerInvoiceTemplateLineByFilter**](CustomerInvoiceTemplateLineApi.md#getCustomerInvoiceTemplateLineByFilter) | **GET** /beta/customerInvoiceTemplateLine/search | Search customerInvoiceTemplateLines by filter
[**getCustomerInvoiceTemplateLineById**](CustomerInvoiceTemplateLineApi.md#getCustomerInvoiceTemplateLineById) | **GET** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId} | Get a customerInvoiceTemplateLine by id
[**getCustomerInvoiceTemplateLineFiles**](CustomerInvoiceTemplateLineApi.md#getCustomerInvoiceTemplateLineFiles) | **GET** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/file | Get the files for a customerInvoiceTemplateLine.
[**getCustomerInvoiceTemplateLineTags**](CustomerInvoiceTemplateLineApi.md#getCustomerInvoiceTemplateLineTags) | **GET** /beta/customerInvoiceTemplateLine/{customerInvoiceTemplateLineId}/tag | Get the tags for a customerInvoiceTemplateLine.
[**getDuplicateCustomerInvoiceTemplateLineById**](CustomerInvoiceTemplateLineApi.md#getDuplicateCustomerInvoiceTemplateLineById) | **GET** /beta/customerInvoiceTemplateLine/duplicate/{customerInvoiceTemplateLineId} | Get a duplicated a customerInvoiceTemplateLine by id
[**updateCustomerInvoiceTemplateLine**](CustomerInvoiceTemplateLineApi.md#updateCustomerInvoiceTemplateLine) | **PUT** /beta/customerInvoiceTemplateLine | Update a customerInvoiceTemplateLine


# **addCustomerInvoiceTemplateLineAudit**
> addCustomerInvoiceTemplateLineAudit($customer_invoice_template_line_id, $customer_invoice_template_line_audit)

Add new audit for a customerInvoiceTemplateLine

Adds an audit to an existing customerInvoiceTemplateLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to add an audit to
$customer_invoice_template_line_audit = "customer_invoice_template_line_audit_example"; // string | The audit to add

try {
    $apiInstance->addCustomerInvoiceTemplateLineAudit($customer_invoice_template_line_id, $customer_invoice_template_line_audit);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->addCustomerInvoiceTemplateLineAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to add an audit to |
 **customer_invoice_template_line_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCustomerInvoiceTemplateLineFile**
> addCustomerInvoiceTemplateLineFile($customer_invoice_template_line_id, $file_name)

Attach a file to a customerInvoiceTemplateLine

Adds a file to an existing customerInvoiceTemplateLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addCustomerInvoiceTemplateLineFile($customer_invoice_template_line_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->addCustomerInvoiceTemplateLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCustomerInvoiceTemplateLineFileByURL**
> addCustomerInvoiceTemplateLineFileByURL($body, $customer_invoice_template_line_id)

Attach a file to a customerInvoiceTemplateLine by URL.

Adds a file to an existing customerInvoiceTemplateLine by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to add an file to

try {
    $apiInstance->addCustomerInvoiceTemplateLineFileByURL($body, $customer_invoice_template_line_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->addCustomerInvoiceTemplateLineFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCustomerInvoiceTemplateLineTag**
> addCustomerInvoiceTemplateLineTag($customer_invoice_template_line_id, $customer_invoice_template_line_tag)

Add new tags for a customerInvoiceTemplateLine.

Adds a tag to an existing customerInvoiceTemplateLine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to add a tag to
$customer_invoice_template_line_tag = "customer_invoice_template_line_tag_example"; // string | The tag to add

try {
    $apiInstance->addCustomerInvoiceTemplateLineTag($customer_invoice_template_line_id, $customer_invoice_template_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->addCustomerInvoiceTemplateLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to add a tag to |
 **customer_invoice_template_line_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoiceTemplateLine**
> deleteCustomerInvoiceTemplateLine($customer_invoice_template_line_id)

Delete a customerInvoiceTemplateLine

Deletes the customerInvoiceTemplateLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to be deleted.

try {
    $apiInstance->deleteCustomerInvoiceTemplateLine($customer_invoice_template_line_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->deleteCustomerInvoiceTemplateLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoiceTemplateLineFile**
> deleteCustomerInvoiceTemplateLineFile($customer_invoice_template_line_id, $file_id)

Delete a file for a customerInvoiceTemplateLine.

Deletes an existing customerInvoiceTemplateLine file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteCustomerInvoiceTemplateLineFile($customer_invoice_template_line_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->deleteCustomerInvoiceTemplateLineFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerInvoiceTemplateLineTag**
> deleteCustomerInvoiceTemplateLineTag($customer_invoice_template_line_id, $customer_invoice_template_line_tag)

Delete a tag for a customerInvoiceTemplateLine.

Deletes an existing customerInvoiceTemplateLine tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to remove tag from
$customer_invoice_template_line_tag = "customer_invoice_template_line_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteCustomerInvoiceTemplateLineTag($customer_invoice_template_line_id, $customer_invoice_template_line_tag);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->deleteCustomerInvoiceTemplateLineTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to remove tag from |
 **customer_invoice_template_line_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInvoiceTemplateLineByFilter**
> \Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine[] getCustomerInvoiceTemplateLineByFilter($filter, $page, $limit, $sort)

Search customerInvoiceTemplateLines by filter

Returns the list of customerInvoiceTemplateLines that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
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
    $result = $apiInstance->getCustomerInvoiceTemplateLineByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->getCustomerInvoiceTemplateLineByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine[]**](../Model/CustomerInvoiceTemplateLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInvoiceTemplateLineById**
> \Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine getCustomerInvoiceTemplateLineById($customer_invoice_template_line_id)

Get a customerInvoiceTemplateLine by id

Returns the customerInvoiceTemplateLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to be returned.

try {
    $result = $apiInstance->getCustomerInvoiceTemplateLineById($customer_invoice_template_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->getCustomerInvoiceTemplateLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine**](../Model/CustomerInvoiceTemplateLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInvoiceTemplateLineFiles**
> getCustomerInvoiceTemplateLineFiles($customer_invoice_template_line_id)

Get the files for a customerInvoiceTemplateLine.

Get all existing customerInvoiceTemplateLine files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to get files for

try {
    $apiInstance->getCustomerInvoiceTemplateLineFiles($customer_invoice_template_line_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->getCustomerInvoiceTemplateLineFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerInvoiceTemplateLineTags**
> getCustomerInvoiceTemplateLineTags($customer_invoice_template_line_id)

Get the tags for a customerInvoiceTemplateLine.

Get all existing customerInvoiceTemplateLine tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to get tags for

try {
    $apiInstance->getCustomerInvoiceTemplateLineTags($customer_invoice_template_line_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->getCustomerInvoiceTemplateLineTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateCustomerInvoiceTemplateLineById**
> \Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine getDuplicateCustomerInvoiceTemplateLineById($customer_invoice_template_line_id)

Get a duplicated a customerInvoiceTemplateLine by id

Returns a duplicated customerInvoiceTemplateLine identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_invoice_template_line_id = 56; // int | Id of the customerInvoiceTemplateLine to be duplicated.

try {
    $result = $apiInstance->getDuplicateCustomerInvoiceTemplateLineById($customer_invoice_template_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->getDuplicateCustomerInvoiceTemplateLineById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_invoice_template_line_id** | **int**| Id of the customerInvoiceTemplateLine to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine**](../Model/CustomerInvoiceTemplateLine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerInvoiceTemplateLine**
> updateCustomerInvoiceTemplateLine($body)

Update a customerInvoiceTemplateLine

Updates an existing customerInvoiceTemplateLine using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CustomerInvoiceTemplateLineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine(); // \Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine | CustomerInvoiceTemplateLine to be updated.

try {
    $apiInstance->updateCustomerInvoiceTemplateLine($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomerInvoiceTemplateLineApi->updateCustomerInvoiceTemplateLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\CustomerInvoiceTemplateLine**](../Model/CustomerInvoiceTemplateLine.md)| CustomerInvoiceTemplateLine to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

