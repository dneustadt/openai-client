# OpenAPI\Client\CompletionsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCompletions()**](CompletionsApi.md#postCompletions) | **POST** /engines/{engine_id}/completions | Creates a new completion for the provided prompt and parameters


## `postCompletions()`

```php
postCompletions($engine_id, $open_ai_organization, $completion_payload): \OpenAPI\Client\Model\Completion
```

Creates a new completion for the provided prompt and parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompletionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = 56; // int | The ID of the engine to use for this request
$open_ai_organization = 'open_ai_organization_example'; // string
$completion_payload = new \OpenAPI\Client\Model\CompletionPayload(); // \OpenAPI\Client\Model\CompletionPayload

try {
    $result = $apiInstance->postCompletions($engine_id, $open_ai_organization, $completion_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompletionsApi->postCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_id** | **int**| The ID of the engine to use for this request |
 **open_ai_organization** | **string**|  | [optional]
 **completion_payload** | [**\OpenAPI\Client\Model\CompletionPayload**](../Model/CompletionPayload.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Completion**](../Model/Completion.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
