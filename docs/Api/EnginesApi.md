# OpenAPI\Client\EnginesApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEngineById()**](EnginesApi.md#getEngineById) | **GET** /engines/{engine_id} | Retrieves an engine instance, providing basic information about the engine such as the owner and availability.
[**getEngines()**](EnginesApi.md#getEngines) | **GET** /engines | Lists the currently available engines, and provides basic information about each one such as the owner and availability.


## `getEngineById()`

```php
getEngineById($engine_id, $open_ai_organization): \OpenAPI\Client\Model\Engine
```

Retrieves an engine instance, providing basic information about the engine such as the owner and availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = 56; // int | The ID of the engine to use for this request
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getEngineById($engine_id, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->getEngineById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_id** | **int**| The ID of the engine to use for this request |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Engine**](../Model/Engine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEngines()`

```php
getEngines($open_ai_organization): \OpenAPI\Client\Model\Engine[]
```

Lists the currently available engines, and provides basic information about each one such as the owner and availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getEngines($open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->getEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Engine[]**](../Model/Engine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
