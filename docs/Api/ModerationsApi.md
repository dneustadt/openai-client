# OpenAI\Client\ModerationsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postModerations()**](ModerationsApi.md#postModerations) | **POST** /moderations | Classifies if text violates OpenAI&#39;s Content Policy


## `postModerations()`

```php
postModerations($open_ai_organization, $moderations_payload): \OpenAI\Client\Model\Moderations
```

Classifies if text violates OpenAI's Content Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ModerationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$moderations_payload = new \OpenAI\Client\Model\ModerationsPayload(); // \OpenAI\Client\Model\ModerationsPayload

try {
    $result = $apiInstance->postModerations($open_ai_organization, $moderations_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationsApi->postModerations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **moderations_payload** | [**\OpenAI\Client\Model\ModerationsPayload**](../Model/ModerationsPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Moderations**](../Model/Moderations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
