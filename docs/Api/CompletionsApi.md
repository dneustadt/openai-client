# OpenAI\Client\CompletionsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCompletions()**](CompletionsApi.md#postCompletions) | **POST** /completions | Creates a new completion for the provided prompt and parameters


## `postCompletions()`

```php
postCompletions($open_ai_organization, $completion_payload): \OpenAI\Client\Model\Completion
```

Creates a new completion for the provided prompt and parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\CompletionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$completion_payload = new \OpenAI\Client\Model\CompletionPayload(); // \OpenAI\Client\Model\CompletionPayload

try {
    $result = $apiInstance->postCompletions($open_ai_organization, $completion_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompletionsApi->postCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **completion_payload** | [**\OpenAI\Client\Model\CompletionPayload**](../Model/CompletionPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Completion**](../Model/Completion.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
