# Infoplus\JobRecipeApi

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addJobRecipe**](JobRecipeApi.md#addJobRecipe) | **POST** /beta/jobRecipe | Create a jobRecipe
[**addJobRecipeAudit**](JobRecipeApi.md#addJobRecipeAudit) | **PUT** /beta/jobRecipe/{jobRecipeId}/audit/{jobRecipeAudit} | Add new audit for a jobRecipe
[**addJobRecipeFile**](JobRecipeApi.md#addJobRecipeFile) | **POST** /beta/jobRecipe/{jobRecipeId}/file/{fileName} | Attach a file to a jobRecipe
[**addJobRecipeFileByURL**](JobRecipeApi.md#addJobRecipeFileByURL) | **POST** /beta/jobRecipe/{jobRecipeId}/file | Attach a file to a jobRecipe by URL.
[**addJobRecipeTag**](JobRecipeApi.md#addJobRecipeTag) | **PUT** /beta/jobRecipe/{jobRecipeId}/tag/{jobRecipeTag} | Add new tags for a jobRecipe.
[**deleteJobRecipe**](JobRecipeApi.md#deleteJobRecipe) | **DELETE** /beta/jobRecipe/{jobRecipeId} | Delete a jobRecipe
[**deleteJobRecipeFile**](JobRecipeApi.md#deleteJobRecipeFile) | **DELETE** /beta/jobRecipe/{jobRecipeId}/file/{fileId} | Delete a file for a jobRecipe.
[**deleteJobRecipeTag**](JobRecipeApi.md#deleteJobRecipeTag) | **DELETE** /beta/jobRecipe/{jobRecipeId}/tag/{jobRecipeTag} | Delete a tag for a jobRecipe.
[**getDuplicateJobRecipeById**](JobRecipeApi.md#getDuplicateJobRecipeById) | **GET** /beta/jobRecipe/duplicate/{jobRecipeId} | Get a duplicated a jobRecipe by id
[**getJobRecipeByFilter**](JobRecipeApi.md#getJobRecipeByFilter) | **GET** /beta/jobRecipe/search | Search jobRecipes by filter
[**getJobRecipeById**](JobRecipeApi.md#getJobRecipeById) | **GET** /beta/jobRecipe/{jobRecipeId} | Get a jobRecipe by id
[**getJobRecipeFiles**](JobRecipeApi.md#getJobRecipeFiles) | **GET** /beta/jobRecipe/{jobRecipeId}/file | Get the files for a jobRecipe.
[**getJobRecipeTags**](JobRecipeApi.md#getJobRecipeTags) | **GET** /beta/jobRecipe/{jobRecipeId}/tag | Get the tags for a jobRecipe.
[**updateJobRecipe**](JobRecipeApi.md#updateJobRecipe) | **PUT** /beta/jobRecipe | Update a jobRecipe
[**updateJobRecipeCustomFields**](JobRecipeApi.md#updateJobRecipeCustomFields) | **PUT** /beta/jobRecipe/customFields | Update a jobRecipe custom fields


# **addJobRecipe**
> \Infoplus\Infoplus\Model\JobRecipe addJobRecipe($body)

Create a jobRecipe

Inserts a new jobRecipe using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobRecipe(); // \Infoplus\Infoplus\Model\JobRecipe | JobRecipe to be inserted.

try {
    $result = $apiInstance->addJobRecipe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->addJobRecipe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)| JobRecipe to be inserted. |

### Return type

[**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobRecipeAudit**
> addJobRecipeAudit($job_recipe_id, $job_recipe_audit)

Add new audit for a jobRecipe

Adds an audit to an existing jobRecipe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to add an audit to
$job_recipe_audit = "job_recipe_audit_example"; // string | The audit to add

try {
    $apiInstance->addJobRecipeAudit($job_recipe_id, $job_recipe_audit);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->addJobRecipeAudit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to add an audit to |
 **job_recipe_audit** | **string**| The audit to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobRecipeFile**
> addJobRecipeFile($job_recipe_id, $file_name)

Attach a file to a jobRecipe

Adds a file to an existing jobRecipe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to add a file to
$file_name = "file_name_example"; // string | Name of file

try {
    $apiInstance->addJobRecipeFile($job_recipe_id, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->addJobRecipeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to add a file to |
 **file_name** | **string**| Name of file |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobRecipeFileByURL**
> addJobRecipeFileByURL($body, $job_recipe_id)

Attach a file to a jobRecipe by URL.

Adds a file to an existing jobRecipe by URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\RecordFile(); // \Infoplus\Infoplus\Model\RecordFile | The url and optionly fileName to be used.
$job_recipe_id = 56; // int | Id of the jobRecipe to add an file to

try {
    $apiInstance->addJobRecipeFileByURL($body, $job_recipe_id);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->addJobRecipeFileByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\RecordFile**](../Model/RecordFile.md)| The url and optionly fileName to be used. |
 **job_recipe_id** | **int**| Id of the jobRecipe to add an file to |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addJobRecipeTag**
> addJobRecipeTag($job_recipe_id, $job_recipe_tag)

Add new tags for a jobRecipe.

Adds a tag to an existing jobRecipe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to add a tag to
$job_recipe_tag = "job_recipe_tag_example"; // string | The tag to add

try {
    $apiInstance->addJobRecipeTag($job_recipe_id, $job_recipe_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->addJobRecipeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to add a tag to |
 **job_recipe_tag** | **string**| The tag to add |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobRecipe**
> deleteJobRecipe($job_recipe_id)

Delete a jobRecipe

Deletes the jobRecipe identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to be deleted.

try {
    $apiInstance->deleteJobRecipe($job_recipe_id);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->deleteJobRecipe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobRecipeFile**
> deleteJobRecipeFile($job_recipe_id, $file_id)

Delete a file for a jobRecipe.

Deletes an existing jobRecipe file using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to remove file from
$file_id = 56; // int | Id of the file to delete

try {
    $apiInstance->deleteJobRecipeFile($job_recipe_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->deleteJobRecipeFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to remove file from |
 **file_id** | **int**| Id of the file to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJobRecipeTag**
> deleteJobRecipeTag($job_recipe_id, $job_recipe_tag)

Delete a tag for a jobRecipe.

Deletes an existing jobRecipe tag using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to remove tag from
$job_recipe_tag = "job_recipe_tag_example"; // string | The tag to delete

try {
    $apiInstance->deleteJobRecipeTag($job_recipe_id, $job_recipe_tag);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->deleteJobRecipeTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to remove tag from |
 **job_recipe_tag** | **string**| The tag to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDuplicateJobRecipeById**
> \Infoplus\Infoplus\Model\JobRecipe getDuplicateJobRecipeById($job_recipe_id)

Get a duplicated a jobRecipe by id

Returns a duplicated jobRecipe identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to be duplicated.

try {
    $result = $apiInstance->getDuplicateJobRecipeById($job_recipe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->getDuplicateJobRecipeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to be duplicated. |

### Return type

[**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobRecipeByFilter**
> \Infoplus\Infoplus\Model\JobRecipe[] getJobRecipeByFilter($filter, $page, $limit, $sort)

Search jobRecipes by filter

Returns the list of jobRecipes that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
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
    $result = $apiInstance->getJobRecipeByFilter($filter, $page, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->getJobRecipeByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\Infoplus\Infoplus\Model\JobRecipe[]**](../Model/JobRecipe.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobRecipeById**
> \Infoplus\Infoplus\Model\JobRecipe getJobRecipeById($job_recipe_id)

Get a jobRecipe by id

Returns the jobRecipe identified by the specified id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to be returned.

try {
    $result = $apiInstance->getJobRecipeById($job_recipe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->getJobRecipeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to be returned. |

### Return type

[**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobRecipeFiles**
> getJobRecipeFiles($job_recipe_id)

Get the files for a jobRecipe.

Get all existing jobRecipe files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to get files for

try {
    $apiInstance->getJobRecipeFiles($job_recipe_id);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->getJobRecipeFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to get files for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobRecipeTags**
> getJobRecipeTags($job_recipe_id)

Get the tags for a jobRecipe.

Get all existing jobRecipe tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_recipe_id = 56; // int | Id of the jobRecipe to get tags for

try {
    $apiInstance->getJobRecipeTags($job_recipe_id);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->getJobRecipeTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_recipe_id** | **int**| Id of the jobRecipe to get tags for |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobRecipe**
> updateJobRecipe($body)

Update a jobRecipe

Updates an existing jobRecipe using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobRecipe(); // \Infoplus\Infoplus\Model\JobRecipe | JobRecipe to be updated.

try {
    $apiInstance->updateJobRecipe($body);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->updateJobRecipe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)| JobRecipe to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobRecipeCustomFields**
> updateJobRecipeCustomFields($body)

Update a jobRecipe custom fields

Updates an existing jobRecipe custom fields using the specified data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');

$apiInstance = new Infoplus\Api\JobRecipeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Infoplus\Infoplus\Model\JobRecipe(); // \Infoplus\Infoplus\Model\JobRecipe | JobRecipe to be updated.

try {
    $apiInstance->updateJobRecipeCustomFields($body);
} catch (Exception $e) {
    echo 'Exception when calling JobRecipeApi->updateJobRecipeCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Infoplus\Infoplus\Model\JobRecipe**](../Model/JobRecipe.md)| JobRecipe to be updated. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

