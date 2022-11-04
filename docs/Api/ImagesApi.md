# OpenAI\Client\ImagesApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postImagesEdits()**](ImagesApi.md#postImagesEdits) | **POST** /images/edits | Creates an edited or extended image given an original image and a prompt.
[**postImagesGenerations()**](ImagesApi.md#postImagesGenerations) | **POST** /images/generations | Given a prompt and/or an input image, the model will generate a new image.
[**postImagesVariations()**](ImagesApi.md#postImagesVariations) | **POST** /images/variations | Creates a variation of a given image.


## `postImagesEdits()`

```php
postImagesEdits($image, $mark, $n, $size, $response_format, $user): \OpenAI\Client\Model\Images
```

Creates an edited or extended image given an original image and a prompt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where image should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as image.
$mark = "/path/to/file.txt"; // \SplFileObject | The image to edit. Must be a valid PNG file, less than 4MB, and square.
$n = 1; // int | The number of images to generate. Must be between 1 and 10.
$size = '1024x1024'; // string | The size of the generated images. Must be one of 256x256, 512x512, or 1024x1024.
$response_format = 'url'; // string | The format in which the generated images are returned. Must be one of url or b64_json.
$user = 'null'; // string | A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse.

try {
    $result = $apiInstance->postImagesEdits($image, $mark, $n, $size, $response_format, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->postImagesEdits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where image should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as image. | [optional]
 **mark** | **\SplFileObject****\SplFileObject**| The image to edit. Must be a valid PNG file, less than 4MB, and square. | [optional]
 **n** | **int**| The number of images to generate. Must be between 1 and 10. | [optional] [default to 1]
 **size** | **string**| The size of the generated images. Must be one of 256x256, 512x512, or 1024x1024. | [optional] [default to &#39;1024x1024&#39;]
 **response_format** | **string**| The format in which the generated images are returned. Must be one of url or b64_json. | [optional] [default to &#39;url&#39;]
 **user** | **string**| A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAI\Client\Model\Images**](../Model/Images.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postImagesGenerations()`

```php
postImagesGenerations($images_generations_payload): \OpenAI\Client\Model\Images
```

Given a prompt and/or an input image, the model will generate a new image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$images_generations_payload = new \OpenAI\Client\Model\ImagesGenerationsPayload(); // \OpenAI\Client\Model\ImagesGenerationsPayload

try {
    $result = $apiInstance->postImagesGenerations($images_generations_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->postImagesGenerations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **images_generations_payload** | [**\OpenAI\Client\Model\ImagesGenerationsPayload**](../Model/ImagesGenerationsPayload.md)|  | [optional]

### Return type

[**\OpenAI\Client\Model\Images**](../Model/Images.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postImagesVariations()`

```php
postImagesVariations($image, $n, $size, $response_format, $user): \OpenAI\Client\Model\Images
```

Creates a variation of a given image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square.
$n = 1; // int | The number of images to generate. Must be between 1 and 10.
$size = '1024x1024'; // string | The size of the generated images. Must be one of 256x256, 512x512, or 1024x1024.
$response_format = 'url'; // string | The format in which the generated images are returned. Must be one of url or b64_json.
$user = 'null'; // string | A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse.

try {
    $result = $apiInstance->postImagesVariations($image, $n, $size, $response_format, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->postImagesVariations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square. | [optional]
 **n** | **int**| The number of images to generate. Must be between 1 and 10. | [optional] [default to 1]
 **size** | **string**| The size of the generated images. Must be one of 256x256, 512x512, or 1024x1024. | [optional] [default to &#39;1024x1024&#39;]
 **response_format** | **string**| The format in which the generated images are returned. Must be one of url or b64_json. | [optional] [default to &#39;url&#39;]
 **user** | **string**| A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse. | [optional] [default to &#39;null&#39;]

### Return type

[**\OpenAI\Client\Model\Images**](../Model/Images.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
