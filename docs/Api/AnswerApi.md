# OpenAI\Client\AnswerApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAnswer()**](AnswerApi.md#postAnswer) | **POST** /answers | Answers the specified question using the provided documents and examples.


## `postAnswer()`

```php
postAnswer($open_ai_organization, $answer_payload): \OpenAI\Client\Model\Answer
```

Answers the specified question using the provided documents and examples.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\AnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$answer_payload = new \OpenAI\Client\Model\AnswerPayload(); // \OpenAI\Client\Model\AnswerPayload

try {
    $result = $apiInstance->postAnswer($open_ai_organization, $answer_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerApi->postAnswer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **answer_payload** | [**\OpenAI\Client\Model\AnswerPayload**](../Model/AnswerPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Answer**](../Model/Answer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
