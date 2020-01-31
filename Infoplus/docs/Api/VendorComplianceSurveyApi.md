# Infoplus\VendorComplianceSurveyApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVendorComplianceSurvey**](VendorComplianceSurveyApi.md#addVendorComplianceSurvey) | **POST** /beta/vendorComplianceSurvey | Create a vendorComplianceSurvey
[**addVendorComplianceSurveyAudit**](VendorComplianceSurveyApi.md#addVendorComplianceSurveyAudit) | **PUT** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/audit/{vendorComplianceSurveyAudit} | Add new audit for a vendorComplianceSurvey
[**addVendorComplianceSurveyFile**](VendorComplianceSurveyApi.md#addVendorComplianceSurveyFile) | **POST** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/file/{fileName} | Attach a file to a vendorComplianceSurvey
[**addVendorComplianceSurveyFileByURL**](VendorComplianceSurveyApi.md#addVendorComplianceSurveyFileByURL) | **POST** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/file | Attach a file to a vendorComplianceSurvey by URL.
[**addVendorComplianceSurveyTag**](VendorComplianceSurveyApi.md#addVendorComplianceSurveyTag) | **PUT** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/tag/{vendorComplianceSurveyTag} | Add new tags for a vendorComplianceSurvey.
[**deleteVendorComplianceSurvey**](VendorComplianceSurveyApi.md#deleteVendorComplianceSurvey) | **DELETE** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId} | Delete a vendorComplianceSurvey
[**deleteVendorComplianceSurveyFile**](VendorComplianceSurveyApi.md#deleteVendorComplianceSurveyFile) | **DELETE** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/file/{fileId} | Delete a file for a vendorComplianceSurvey.
[**deleteVendorComplianceSurveyTag**](VendorComplianceSurveyApi.md#deleteVendorComplianceSurveyTag) | **DELETE** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/tag/{vendorComplianceSurveyTag} | Delete a tag for a vendorComplianceSurvey.
[**getDuplicateVendorComplianceSurveyById**](VendorComplianceSurveyApi.md#getDuplicateVendorComplianceSurveyById) | **GET** /beta/vendorComplianceSurvey/duplicate/{vendorComplianceSurveyId} | Get a duplicated a vendorComplianceSurvey by id
[**getVendorComplianceSurveyByFilter**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyByFilter) | **GET** /beta/vendorComplianceSurvey/search | Search vendorComplianceSurveys by filter
[**getVendorComplianceSurveyById**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyById) | **GET** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId} | Get a vendorComplianceSurvey by id
[**getVendorComplianceSurveyFiles**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyFiles) | **GET** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/file | Get the files for a vendorComplianceSurvey.
[**getVendorComplianceSurveyTags**](VendorComplianceSurveyApi.md#getVendorComplianceSurveyTags) | **GET** /beta/vendorComplianceSurvey/{vendorComplianceSurveyId}/tag | Get the tags for a vendorComplianceSurvey.
[**updateVendorComplianceSurvey**](VendorComplianceSurveyApi.md#updateVendorComplianceSurvey) | **PUT** /beta/vendorComplianceSurvey | Update a vendorComplianceSurvey
[**updateVendorComplianceSurveyCustomFields**](VendorComplianceSurveyApi.md#updateVendorComplianceSurveyCustomFields) | **PUT** /beta/vendorComplianceSurvey/customFields | Update a vendorComplianceSurvey custom fields


# **addVendorComplianceSurvey**
> \Infoplus\Infoplus\Model\VendorComplianceSurvey addVendorComplianceSurvey($body)

Create a vendorComplianceSurvey

Inserts a new vendorComplianceSurvey using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\VendorComplianceSurvey(); // \Infoplus\Infoplus\Model\VendorComplianceSurvey | VendorComplianceSurvey to be inserted.

try {
    $result = $apiInstance->addVendorComplianceSurvey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)| VendorComplianceSurvey to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVendorComplianceSurveyAudit**
> addVendorComplianceSurveyAudit($vendor_compliance_survey_id, $vendor_compliance_survey_audit)

Add new audit for a vendorComplianceSurvey

Adds an audit to an existing vendorComplianceSurvey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to add an audit to
$vendor_compliance_survey_audit = "vendor_compliance_survey_audit_example"; // string | The audit to add

try {
    $apiInstance->addVendorComplianceSurveyAudit($vendor_compliance_survey_id, $vendor_compliance_survey_audit);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurveyAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to add an audit to |
 **vendor_compliance_survey_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVendorComplianceSurveyFile**
> addVendorComplianceSurveyFile($vendor_compliance_survey_id, $file_name)

Attach a file to a vendorComplianceSurvey

Adds a file to an existing vendorComplianceSurvey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addVendorComplianceSurveyFile($vendor_compliance_survey_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurveyFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVendorComplianceSurveyFileByURL**
> addVendorComplianceSurveyFileByURL($body, $vendor_compliance_survey_id)

Attach a file to a vendorComplianceSurvey by URL.

Adds a file to an existing vendorComplianceSurvey by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to add an file to

try {
    $apiInstance->addVendorComplianceSurveyFileByURL($body, $vendor_compliance_survey_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurveyFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVendorComplianceSurveyTag**
> addVendorComplianceSurveyTag($vendor_compliance_survey_id, $vendor_compliance_survey_tag)

Add new tags for a vendorComplianceSurvey.

Adds a tag to an existing vendorComplianceSurvey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to add a tag to
$vendor_compliance_survey_tag = "vendor_compliance_survey_tag_example"; // string | The tag to add

try {
    $apiInstance->addVendorComplianceSurveyTag($vendor_compliance_survey_id, $vendor_compliance_survey_tag);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->addVendorComplianceSurveyTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to add a tag to |
 **vendor_compliance_survey_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVendorComplianceSurvey**
> deleteVendorComplianceSurvey($vendor_compliance_survey_id)

Delete a vendorComplianceSurvey

Deletes the vendorComplianceSurvey identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to be deleted.

try {
    $apiInstance->deleteVendorComplianceSurvey($vendor_compliance_survey_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->deleteVendorComplianceSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVendorComplianceSurveyFile**
> deleteVendorComplianceSurveyFile($vendor_compliance_survey_id, $file_id)

Delete a file for a vendorComplianceSurvey.

Deletes an existing vendorComplianceSurvey file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteVendorComplianceSurveyFile($vendor_compliance_survey_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->deleteVendorComplianceSurveyFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVendorComplianceSurveyTag**
> deleteVendorComplianceSurveyTag($vendor_compliance_survey_id, $vendor_compliance_survey_tag)

Delete a tag for a vendorComplianceSurvey.

Deletes an existing vendorComplianceSurvey tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to remove tag from
$vendor_compliance_survey_tag = "vendor_compliance_survey_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteVendorComplianceSurveyTag($vendor_compliance_survey_id, $vendor_compliance_survey_tag);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->deleteVendorComplianceSurveyTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to remove tag from |
 **vendor_compliance_survey_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateVendorComplianceSurveyById**
> \Infoplus\Infoplus\Model\VendorComplianceSurvey getDuplicateVendorComplianceSurveyById($vendor_compliance_survey_id)

Get a duplicated a vendorComplianceSurvey by id

Returns a duplicated vendorComplianceSurvey identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to be duplicated.

try {
    $result = $apiInstance->getDuplicateVendorComplianceSurveyById($vendor_compliance_survey_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getDuplicateVendorComplianceSurveyById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorComplianceSurveyByFilter**
> \Infoplus\Infoplus\Model\VendorComplianceSurvey[] getVendorComplianceSurveyByFilter($filter, $page, $limit, $sort)

Search vendorComplianceSurveys by filter

Returns the list of vendorComplianceSurveys that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
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
    $result = $apiInstance->getVendorComplianceSurveyByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\VendorComplianceSurvey[]**](../Model/VendorComplianceSurvey.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorComplianceSurveyById**
> \Infoplus\Infoplus\Model\VendorComplianceSurvey getVendorComplianceSurveyById($vendor_compliance_survey_id)

Get a vendorComplianceSurvey by id

Returns the vendorComplianceSurvey identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to be returned.

try {
    $result = $apiInstance->getVendorComplianceSurveyById($vendor_compliance_survey_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorComplianceSurveyFiles**
> getVendorComplianceSurveyFiles($vendor_compliance_survey_id)

Get the files for a vendorComplianceSurvey.

Get all existing vendorComplianceSurvey files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to get files for

try {
    $apiInstance->getVendorComplianceSurveyFiles($vendor_compliance_survey_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorComplianceSurveyTags**
> getVendorComplianceSurveyTags($vendor_compliance_survey_id)

Get the tags for a vendorComplianceSurvey.

Get all existing vendorComplianceSurvey tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_compliance_survey_id = 56; // int | Id of the vendorComplianceSurvey to get tags for

try {
    $apiInstance->getVendorComplianceSurveyTags($vendor_compliance_survey_id);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->getVendorComplianceSurveyTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendor_compliance_survey_id** | **int**| Id of the vendorComplianceSurvey to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVendorComplianceSurvey**
> updateVendorComplianceSurvey($body)

Update a vendorComplianceSurvey

Updates an existing vendorComplianceSurvey using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\VendorComplianceSurvey(); // \Infoplus\Infoplus\Model\VendorComplianceSurvey | VendorComplianceSurvey to be updated.

try {
    $apiInstance->updateVendorComplianceSurvey($body);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->updateVendorComplianceSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)| VendorComplianceSurvey to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVendorComplianceSurveyCustomFields**
> updateVendorComplianceSurveyCustomFields($body)

Update a vendorComplianceSurvey custom fields

Updates an existing vendorComplianceSurvey custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\VendorComplianceSurveyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\VendorComplianceSurvey(); // \Infoplus\Infoplus\Model\VendorComplianceSurvey | VendorComplianceSurvey to be updated.

try {
    $apiInstance->updateVendorComplianceSurveyCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling VendorComplianceSurveyApi->updateVendorComplianceSurveyCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\VendorComplianceSurvey**](../Model/VendorComplianceSurvey.md)| VendorComplianceSurvey to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

