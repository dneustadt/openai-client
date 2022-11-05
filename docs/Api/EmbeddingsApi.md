# OpenAI\Client\EmbeddingsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postEmbeddings()**](EmbeddingsApi.md#postEmbeddings) | **POST** /embeddings | Creates an embedding vector representing the input text.


## `postEmbeddings()`

```php
postEmbeddings($open_ai_organization, $embeddings_payload): \OpenAI\Client\Model\Embeddings
```

Creates an embedding vector representing the input text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\EmbeddingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$embeddings_payload = new \OpenAI\Client\Model\EmbeddingsPayload(); // \OpenAI\Client\Model\EmbeddingsPayload

try {
    $result = $apiInstance->postEmbeddings($open_ai_organization, $embeddings_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddingsApi->postEmbeddings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **embeddings_payload** | [**\OpenAI\Client\Model\EmbeddingsPayload**](../Model/EmbeddingsPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Embeddings**](../Model/Embeddings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
