# OpenAI\Client\FineTunesApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFineTune()**](FineTunesApi.md#getFineTune) | **GET** /fine-tunes/{fine_tune_id} | Gets info about the fine-tune job.
[**getFineTuneEvents()**](FineTunesApi.md#getFineTuneEvents) | **GET** /fine-tunes/{fine_tune_id}/events | Get fine-grained status updates for a fine-tune job.
[**getFineTunes()**](FineTunesApi.md#getFineTunes) | **GET** /fine-tunes | List your organization&#39;s fine-tuning jobs
[**postFineTuneCancel()**](FineTunesApi.md#postFineTuneCancel) | **POST** /fine-tunes/{fine_tune_id}/cancel | Immediately cancel a fine-tune job.
[**postFineTunes()**](FineTunesApi.md#postFineTunes) | **POST** /fine-tunes | Creates a job that fine-tunes a specified model from a given dataset.


## `getFineTune()`

```php
getFineTune($fine_tune_id, $open_ai_organization): \OpenAI\Client\Model\FineTune
```

Gets info about the fine-tune job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAI\Client\Api\FineTunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fine_tune_id = 'fine_tune_id_example'; // string | The ID of the fine-tune job
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getFineTune($fine_tune_id, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunesApi->getFineTune: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fine_tune_id** | **string**| The ID of the fine-tune job |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\FineTune**](../Model/FineTune.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFineTuneEvents()`

```php
getFineTuneEvents($fine_tune_id, $open_ai_organization, $stream): \OpenAI\Client\Model\FineTuneEvents
```

Get fine-grained status updates for a fine-tune job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAI\Client\Api\FineTunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fine_tune_id = 'fine_tune_id_example'; // string | The ID of the fine-tune job to get events for.
$open_ai_organization = 'open_ai_organization_example'; // string
$stream = True; // bool | Whether to stream events for the fine-tune job. If set to true, events will be sent as data-only server-sent events as they become available.

try {
    $result = $apiInstance->getFineTuneEvents($fine_tune_id, $open_ai_organization, $stream);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunesApi->getFineTuneEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fine_tune_id** | **string**| The ID of the fine-tune job to get events for. |
 **open_ai_organization** | **string**|  | [optional]
 **stream** | **bool**| Whether to stream events for the fine-tune job. If set to true, events will be sent as data-only server-sent events as they become available. | [optional]

### Return type

[**\OpenAI\Client\Model\FineTuneEvents**](../Model/FineTuneEvents.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFineTunes()`

```php
getFineTunes($open_ai_organization): \OpenAI\Client\Model\FineTunes
```

List your organization's fine-tuning jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FineTunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getFineTunes($open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunesApi->getFineTunes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\FineTunes**](../Model/FineTunes.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFineTuneCancel()`

```php
postFineTuneCancel($fine_tune_id, $open_ai_organization): \OpenAI\Client\Model\FineTune
```

Immediately cancel a fine-tune job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FineTunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fine_tune_id = 'fine_tune_id_example'; // string | The ID of the fine-tune job to cancel
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->postFineTuneCancel($fine_tune_id, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunesApi->postFineTuneCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fine_tune_id** | **string**| The ID of the fine-tune job to cancel |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\FineTune**](../Model/FineTune.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFineTunes()`

```php
postFineTunes($open_ai_organization, $fine_tunes_payload): \OpenAI\Client\Model\FineTune
```

Creates a job that fine-tunes a specified model from a given dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FineTunesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string
$fine_tunes_payload = new \OpenAI\Client\Model\FineTunesPayload(); // \OpenAI\Client\Model\FineTunesPayload

try {
    $result = $apiInstance->postFineTunes($open_ai_organization, $fine_tunes_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunesApi->postFineTunes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]
 **fine_tunes_payload** | [**\OpenAI\Client\Model\FineTunesPayload**](../Model/FineTunesPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\FineTune**](../Model/FineTune.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
