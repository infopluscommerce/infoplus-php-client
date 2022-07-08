# Infoplus\CartLocationApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCartLocationAudit**](CartLocationApi.md#addCartLocationAudit) | **PUT** /beta/cartLocation/{cartLocationId}/audit/{cartLocationAudit} | Add new audit for a cartLocation
[**addCartLocationFile**](CartLocationApi.md#addCartLocationFile) | **POST** /beta/cartLocation/{cartLocationId}/file/{fileName} | Attach a file to a cartLocation
[**addCartLocationFileByURL**](CartLocationApi.md#addCartLocationFileByURL) | **POST** /beta/cartLocation/{cartLocationId}/file | Attach a file to a cartLocation by URL.
[**addCartLocationTag**](CartLocationApi.md#addCartLocationTag) | **PUT** /beta/cartLocation/{cartLocationId}/tag/{cartLocationTag} | Add new tags for a cartLocation.
[**deleteCartLocationFile**](CartLocationApi.md#deleteCartLocationFile) | **DELETE** /beta/cartLocation/{cartLocationId}/file/{fileId} | Delete a file for a cartLocation.
[**deleteCartLocationTag**](CartLocationApi.md#deleteCartLocationTag) | **DELETE** /beta/cartLocation/{cartLocationId}/tag/{cartLocationTag} | Delete a tag for a cartLocation.
[**getCartLocationByFilter**](CartLocationApi.md#getCartLocationByFilter) | **GET** /beta/cartLocation/search | Search cartLocations by filter
[**getCartLocationById**](CartLocationApi.md#getCartLocationById) | **GET** /beta/cartLocation/{cartLocationId} | Get a cartLocation by id
[**getCartLocationFiles**](CartLocationApi.md#getCartLocationFiles) | **GET** /beta/cartLocation/{cartLocationId}/file | Get the files for a cartLocation.
[**getCartLocationTags**](CartLocationApi.md#getCartLocationTags) | **GET** /beta/cartLocation/{cartLocationId}/tag | Get the tags for a cartLocation.
[**getDuplicateCartLocationById**](CartLocationApi.md#getDuplicateCartLocationById) | **GET** /beta/cartLocation/duplicate/{cartLocationId} | Get a duplicated a cartLocation by id


# **addCartLocationAudit**
> addCartLocationAudit($cart_location_id, $cart_location_audit)

Add new audit for a cartLocation

Adds an audit to an existing cartLocation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to add an audit to
$cart_location_audit = "cart_location_audit_example"; // string | The audit to add

try {
    $apiInstance->addCartLocationAudit($cart_location_id, $cart_location_audit);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->addCartLocationAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to add an audit to |
 **cart_location_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartLocationFile**
> addCartLocationFile($cart_location_id, $file_name)

Attach a file to a cartLocation

Adds a file to an existing cartLocation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addCartLocationFile($cart_location_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->addCartLocationFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartLocationFileByURL**
> addCartLocationFileByURL($body, $cart_location_id)

Attach a file to a cartLocation by URL.

Adds a file to an existing cartLocation by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$cart_location_id = 56; // int | Id of the cartLocation to add an file to

try {
    $apiInstance->addCartLocationFileByURL($body, $cart_location_id);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->addCartLocationFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **cart_location_id** | **int**| Id of the cartLocation to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addCartLocationTag**
> addCartLocationTag($cart_location_id, $cart_location_tag)

Add new tags for a cartLocation.

Adds a tag to an existing cartLocation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to add a tag to
$cart_location_tag = "cart_location_tag_example"; // string | The tag to add

try {
    $apiInstance->addCartLocationTag($cart_location_id, $cart_location_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->addCartLocationTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to add a tag to |
 **cart_location_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartLocationFile**
> deleteCartLocationFile($cart_location_id, $file_id)

Delete a file for a cartLocation.

Deletes an existing cartLocation file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteCartLocationFile($cart_location_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->deleteCartLocationFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCartLocationTag**
> deleteCartLocationTag($cart_location_id, $cart_location_tag)

Delete a tag for a cartLocation.

Deletes an existing cartLocation tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to remove tag from
$cart_location_tag = "cart_location_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteCartLocationTag($cart_location_id, $cart_location_tag);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->deleteCartLocationTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to remove tag from |
 **cart_location_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartLocationByFilter**
> \Infoplus\Infoplus\Model\CartLocation[] getCartLocationByFilter($filter, $page, $limit, $sort)

Search cartLocations by filter

Returns the list of cartLocations that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
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
    $result = $apiInstance->getCartLocationByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->getCartLocationByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\CartLocation[]**](../Model/CartLocation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartLocationById**
> \Infoplus\Infoplus\Model\CartLocation getCartLocationById($cart_location_id)

Get a cartLocation by id

Returns the cartLocation identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to be returned.

try {
    $result = $apiInstance->getCartLocationById($cart_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->getCartLocationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\CartLocation**](../Model/CartLocation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartLocationFiles**
> getCartLocationFiles($cart_location_id)

Get the files for a cartLocation.

Get all existing cartLocation files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to get files for

try {
    $apiInstance->getCartLocationFiles($cart_location_id);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->getCartLocationFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCartLocationTags**
> getCartLocationTags($cart_location_id)

Get the tags for a cartLocation.

Get all existing cartLocation tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to get tags for

try {
    $apiInstance->getCartLocationTags($cart_location_id);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->getCartLocationTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateCartLocationById**
> \Infoplus\Infoplus\Model\CartLocation getDuplicateCartLocationById($cart_location_id)

Get a duplicated a cartLocation by id

Returns a duplicated cartLocation identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\CartLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_location_id = 56; // int | Id of the cartLocation to be duplicated.

try {
    $result = $apiInstance->getDuplicateCartLocationById($cart_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartLocationApi->getDuplicateCartLocationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_location_id** | **int**| Id of the cartLocation to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\CartLocation**](../Model/CartLocation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

