# OpenAI\Client\ModelsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteModel()**](ModelsApi.md#deleteModel) | **DELETE** /models/{model} | Delete a fine-tuned model. You must have the Owner role in your organization.
[**getModel()**](ModelsApi.md#getModel) | **GET** /models/{model} | Retrieves a model instance, providing basic information about the model such as the owner and permissioning.
[**getModels()**](ModelsApi.md#getModels) | **GET** /models | Lists the currently available models, and provides basic information about each one such as the owner and availability.


## `deleteModel()`

```php
deleteModel($model, $open_ai_organization): \OpenAI\Client\Model\ModelDelete
```

Delete a fine-tuned model. You must have the Owner role in your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = 'model_example'; // string | The model to delete
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->deleteModel($model, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->deleteModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**| The model to delete |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\ModelDelete**](../Model/ModelDelete.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModel()`

```php
getModel($model, $open_ai_organization): \OpenAI\Client\Model\Model
```

Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = 'model_example'; // string | The ID of the model to use for this request
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getModel($model, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**| The ID of the model to use for this request |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\Model**](../Model/Model.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModels()`

```php
getModels($open_ai_organization): \OpenAI\Client\Model\Models
```

Lists the currently available models, and provides basic information about each one such as the owner and availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getModels($open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\Models**](../Model/Models.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
