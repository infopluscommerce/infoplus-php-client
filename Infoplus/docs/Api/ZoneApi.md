# Infoplus\ZoneApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addZone**](ZoneApi.md#addZone) | **POST** /beta/zone | Create a zone
[**addZoneAudit**](ZoneApi.md#addZoneAudit) | **PUT** /beta/zone/{zoneId}/audit/{zoneAudit} | Add new audit for a zone
[**addZoneFile**](ZoneApi.md#addZoneFile) | **POST** /beta/zone/{zoneId}/file/{fileName} | Attach a file to a zone
[**addZoneFileByURL**](ZoneApi.md#addZoneFileByURL) | **POST** /beta/zone/{zoneId}/file | Attach a file to a zone by URL.
[**addZoneTag**](ZoneApi.md#addZoneTag) | **PUT** /beta/zone/{zoneId}/tag/{zoneTag} | Add new tags for a zone.
[**deleteZone**](ZoneApi.md#deleteZone) | **DELETE** /beta/zone/{zoneId} | Delete a zone
[**deleteZoneFile**](ZoneApi.md#deleteZoneFile) | **DELETE** /beta/zone/{zoneId}/file/{fileId} | Delete a file for a zone.
[**deleteZoneTag**](ZoneApi.md#deleteZoneTag) | **DELETE** /beta/zone/{zoneId}/tag/{zoneTag} | Delete a tag for a zone.
[**getDuplicateZoneById**](ZoneApi.md#getDuplicateZoneById) | **GET** /beta/zone/duplicate/{zoneId} | Get a duplicated a zone by id
[**getZoneByFilter**](ZoneApi.md#getZoneByFilter) | **GET** /beta/zone/search | Search zones by filter
[**getZoneById**](ZoneApi.md#getZoneById) | **GET** /beta/zone/{zoneId} | Get a zone by id
[**getZoneFiles**](ZoneApi.md#getZoneFiles) | **GET** /beta/zone/{zoneId}/file | Get the files for a zone.
[**getZoneTags**](ZoneApi.md#getZoneTags) | **GET** /beta/zone/{zoneId}/tag | Get the tags for a zone.
[**updateZone**](ZoneApi.md#updateZone) | **PUT** /beta/zone | Update a zone
[**updateZoneCustomFields**](ZoneApi.md#updateZoneCustomFields) | **PUT** /beta/zone/customFields | Update a zone custom fields


# **addZone**
> \Infoplus\Infoplus\Model\Zone addZone($body)

Create a zone

Inserts a new zone using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Zone(); // \Infoplus\Infoplus\Model\Zone | Zone to be inserted.

try {
    $result = $apiInstance->addZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->addZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)| Zone to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZoneAudit**
> addZoneAudit($zone_id, $zone_audit)

Add new audit for a zone

Adds an audit to an existing zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to add an audit to
$zone_audit = "zone_audit_example"; // string | The audit to add

try {
    $apiInstance->addZoneAudit($zone_id, $zone_audit);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->addZoneAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to add an audit to |
 **zone_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZoneFile**
> addZoneFile($zone_id, $file_name)

Attach a file to a zone

Adds a file to an existing zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addZoneFile($zone_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->addZoneFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZoneFileByURL**
> addZoneFileByURL($body, $zone_id)

Attach a file to a zone by URL.

Adds a file to an existing zone by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$zone_id = 56; // int | Id of the zone to add an file to

try {
    $apiInstance->addZoneFileByURL($body, $zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->addZoneFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **zone_id** | **int**| Id of the zone to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addZoneTag**
> addZoneTag($zone_id, $zone_tag)

Add new tags for a zone.

Adds a tag to an existing zone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to add a tag to
$zone_tag = "zone_tag_example"; // string | The tag to add

try {
    $apiInstance->addZoneTag($zone_id, $zone_tag);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->addZoneTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to add a tag to |
 **zone_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZone**
> deleteZone($zone_id)

Delete a zone

Deletes the zone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to be deleted.

try {
    $apiInstance->deleteZone($zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZoneFile**
> deleteZoneFile($zone_id, $file_id)

Delete a file for a zone.

Deletes an existing zone file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteZoneFile($zone_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteZoneFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZoneTag**
> deleteZoneTag($zone_id, $zone_tag)

Delete a tag for a zone.

Deletes an existing zone tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to remove tag from
$zone_tag = "zone_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteZoneTag($zone_id, $zone_tag);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteZoneTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to remove tag from |
 **zone_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateZoneById**
> \Infoplus\Infoplus\Model\Zone getDuplicateZoneById($zone_id)

Get a duplicated a zone by id

Returns a duplicated zone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to be duplicated.

try {
    $result = $apiInstance->getDuplicateZoneById($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getDuplicateZoneById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZoneByFilter**
> \Infoplus\Infoplus\Model\Zone[] getZoneByFilter($filter, $page, $limit, $sort)

Search zones by filter

Returns the list of zones that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
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
    $result = $apiInstance->getZoneByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getZoneByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\Zone[]**](../Model/Zone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZoneById**
> \Infoplus\Infoplus\Model\Zone getZoneById($zone_id)

Get a zone by id

Returns the zone identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to be returned.

try {
    $result = $apiInstance->getZoneById($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getZoneById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZoneFiles**
> getZoneFiles($zone_id)

Get the files for a zone.

Get all existing zone files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to get files for

try {
    $apiInstance->getZoneFiles($zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getZoneFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZoneTags**
> getZoneTags($zone_id)

Get the tags for a zone.

Get all existing zone tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 56; // int | Id of the zone to get tags for

try {
    $apiInstance->getZoneTags($zone_id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getZoneTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| Id of the zone to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZone**
> updateZone($body)

Update a zone

Updates an existing zone using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Zone(); // \Infoplus\Infoplus\Model\Zone | Zone to be updated.

try {
    $apiInstance->updateZone($body);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->updateZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)| Zone to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZoneCustomFields**
> updateZoneCustomFields($body)

Update a zone custom fields

Updates an existing zone custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\Zone(); // \Infoplus\Infoplus\Model\Zone | Zone to be updated.

try {
    $apiInstance->updateZoneCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->updateZoneCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\Zone**](../Model/Zone.md)| Zone to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

