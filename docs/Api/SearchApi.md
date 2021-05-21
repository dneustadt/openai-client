# OpenAI\Client\SearchApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSearch()**](SearchApi.md#postSearch) | **POST** /engines/{engine_id}/search | The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.


## `postSearch()`

```php
postSearch($engine_id, $open_ai_organization, $search_payload): \OpenAI\Client\Model\Search
```

The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = 56; // int | The ID of the engine to use for this request
$open_ai_organization = 'open_ai_organization_example'; // string
$search_payload = new \OpenAI\Client\Model\SearchPayload(); // \OpenAI\Client\Model\SearchPayload

try {
    $result = $apiInstance->postSearch($engine_id, $open_ai_organization, $search_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_id** | **int**| The ID of the engine to use for this request |
 **open_ai_organization** | **string**|  | [optional]
 **search_payload** | [**\OpenAI\Client\Model\SearchPayload**](../Model/SearchPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Search**](../Model/Search.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
