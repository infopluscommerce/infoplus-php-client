# Infoplus\RateCardApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRateCard**](RateCardApi.md#addRateCard) | **POST** /beta/rateCard | Create a rateCard
[**addRateCardAudit**](RateCardApi.md#addRateCardAudit) | **PUT** /beta/rateCard/{rateCardId}/audit/{rateCardAudit} | Add new audit for a rateCard
[**addRateCardFile**](RateCardApi.md#addRateCardFile) | **POST** /beta/rateCard/{rateCardId}/file/{fileName} | Attach a file to a rateCard
[**addRateCardFileByURL**](RateCardApi.md#addRateCardFileByURL) | **POST** /beta/rateCard/{rateCardId}/file | Attach a file to a rateCard by URL.
[**addRateCardTag**](RateCardApi.md#addRateCardTag) | **PUT** /beta/rateCard/{rateCardId}/tag/{rateCardTag} | Add new tags for a rateCard.
[**deleteRateCard**](RateCardApi.md#deleteRateCard) | **DELETE** /beta/rateCard/{rateCardId} | Delete a rateCard
[**deleteRateCardFile**](RateCardApi.md#deleteRateCardFile) | **DELETE** /beta/rateCard/{rateCardId}/file/{fileId} | Delete a file for a rateCard.
[**deleteRateCardTag**](RateCardApi.md#deleteRateCardTag) | **DELETE** /beta/rateCard/{rateCardId}/tag/{rateCardTag} | Delete a tag for a rateCard.
[**getDuplicateRateCardById**](RateCardApi.md#getDuplicateRateCardById) | **GET** /beta/rateCard/duplicate/{rateCardId} | Get a duplicated a rateCard by id
[**getRateCardByFilter**](RateCardApi.md#getRateCardByFilter) | **GET** /beta/rateCard/search | Search rateCards by filter
[**getRateCardById**](RateCardApi.md#getRateCardById) | **GET** /beta/rateCard/{rateCardId} | Get a rateCard by id
[**getRateCardFiles**](RateCardApi.md#getRateCardFiles) | **GET** /beta/rateCard/{rateCardId}/file | Get the files for a rateCard.
[**getRateCardTags**](RateCardApi.md#getRateCardTags) | **GET** /beta/rateCard/{rateCardId}/tag | Get the tags for a rateCard.
[**updateRateCard**](RateCardApi.md#updateRateCard) | **PUT** /beta/rateCard | Update a rateCard


# **addRateCard**
> \Infoplus\Infoplus\Model\RateCard addRateCard($body)

Create a rateCard

Inserts a new rateCard using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RateCard(); // \Infoplus\Infoplus\Model\RateCard | RateCard to be inserted.

try {
    $result = $apiInstance->addRateCard($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->addRateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RateCard**](../Model/RateCard.md)| RateCard to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\RateCard**](../Model/RateCard.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRateCardAudit**
> addRateCardAudit($rate_card_id, $rate_card_audit)

Add new audit for a rateCard

Adds an audit to an existing rateCard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to add an audit to
$rate_card_audit = "rate_card_audit_example"; // string | The audit to add

try {
    $apiInstance->addRateCardAudit($rate_card_id, $rate_card_audit);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->addRateCardAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to add an audit to |
 **rate_card_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRateCardFile**
> addRateCardFile($rate_card_id, $file_name)

Attach a file to a rateCard

Adds a file to an existing rateCard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addRateCardFile($rate_card_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->addRateCardFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRateCardFileByURL**
> addRateCardFileByURL($body, $rate_card_id)

Attach a file to a rateCard by URL.

Adds a file to an existing rateCard by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$rate_card_id = 56; // int | Id of the rateCard to add an file to

try {
    $apiInstance->addRateCardFileByURL($body, $rate_card_id);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->addRateCardFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **rate_card_id** | **int**| Id of the rateCard to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRateCardTag**
> addRateCardTag($rate_card_id, $rate_card_tag)

Add new tags for a rateCard.

Adds a tag to an existing rateCard.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to add a tag to
$rate_card_tag = "rate_card_tag_example"; // string | The tag to add

try {
    $apiInstance->addRateCardTag($rate_card_id, $rate_card_tag);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->addRateCardTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to add a tag to |
 **rate_card_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRateCard**
> deleteRateCard($rate_card_id)

Delete a rateCard

Deletes the rateCard identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to be deleted.

try {
    $apiInstance->deleteRateCard($rate_card_id);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->deleteRateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRateCardFile**
> deleteRateCardFile($rate_card_id, $file_id)

Delete a file for a rateCard.

Deletes an existing rateCard file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteRateCardFile($rate_card_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->deleteRateCardFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRateCardTag**
> deleteRateCardTag($rate_card_id, $rate_card_tag)

Delete a tag for a rateCard.

Deletes an existing rateCard tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to remove tag from
$rate_card_tag = "rate_card_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteRateCardTag($rate_card_id, $rate_card_tag);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->deleteRateCardTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to remove tag from |
 **rate_card_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateRateCardById**
> \Infoplus\Infoplus\Model\RateCard getDuplicateRateCardById($rate_card_id)

Get a duplicated a rateCard by id

Returns a duplicated rateCard identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to be duplicated.

try {
    $result = $apiInstance->getDuplicateRateCardById($rate_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->getDuplicateRateCardById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\RateCard**](../Model/RateCard.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRateCardByFilter**
> \Infoplus\Infoplus\Model\RateCard[] getRateCardByFilter($filter, $page, $limit, $sort)

Search rateCards by filter

Returns the list of rateCards that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
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
    $result = $apiInstance->getRateCardByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->getRateCardByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\RateCard[]**](../Model/RateCard.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRateCardById**
> \Infoplus\Infoplus\Model\RateCard getRateCardById($rate_card_id)

Get a rateCard by id

Returns the rateCard identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to be returned.

try {
    $result = $apiInstance->getRateCardById($rate_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->getRateCardById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\RateCard**](../Model/RateCard.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRateCardFiles**
> getRateCardFiles($rate_card_id)

Get the files for a rateCard.

Get all existing rateCard files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to get files for

try {
    $apiInstance->getRateCardFiles($rate_card_id);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->getRateCardFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRateCardTags**
> getRateCardTags($rate_card_id)

Get the tags for a rateCard.

Get all existing rateCard tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_card_id = 56; // int | Id of the rateCard to get tags for

try {
    $apiInstance->getRateCardTags($rate_card_id);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->getRateCardTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_card_id** | **int**| Id of the rateCard to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRateCard**
> updateRateCard($body)

Update a rateCard

Updates an existing rateCard using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\RateCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RateCard(); // \Infoplus\Infoplus\Model\RateCard | RateCard to be updated.

try {
    $apiInstance->updateRateCard($body);
} catch (Exception $e) {
    echo 'Exception when calling RateCardApi->updateRateCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RateCard**](../Model/RateCard.md)| RateCard to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

