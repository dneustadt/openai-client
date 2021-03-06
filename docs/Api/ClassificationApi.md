# OpenAI\Client\ClassificationApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postClassification()**](ClassificationApi.md#postClassification) | **POST** /classifications | The endpoint first searches over the labeled examples to select the ones most relevant for the particular query. Then, the relevant examples are combined with the query to construct a prompt to produce the final label via the completions endpoint.


## `postClassification()`

```php
postClassification($open_ai_organization, $classification_payload): \OpenAI\Client\Model\Classification
```

The endpoint first searches over the labeled examples to select the ones most relevant for the particular query. Then, the relevant examples are combined with the query to construct a prompt to produce the final label via the completions endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ClassificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$classification_payload = new \OpenAI\Client\Model\ClassificationPayload(); // \OpenAI\Client\Model\ClassificationPayload

try {
    $result = $apiInstance->postClassification($open_ai_organization, $classification_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationApi->postClassification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **classification_payload** | [**\OpenAI\Client\Model\ClassificationPayload**](../Model/ClassificationPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Classification**](../Model/Classification.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
