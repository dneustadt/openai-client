# OpenAI\Client\FilesApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFile()**](FilesApi.md#deleteFile) | **DELETE** /files/{file_id} | Delete a file.
[**getFileById()**](FilesApi.md#getFileById) | **GET** /files/{file_id} | Returns information about a specific file.
[**getFiles()**](FilesApi.md#getFiles) | **GET** /files | Returns a list of files that belong to the user&#39;s organization.
[**postFile()**](FilesApi.md#postFile) | **POST** /files | Upload a file that contains document(s) to be used across various endpoints/features.


## `deleteFile()`

```php
deleteFile($file_id, $open_ai_organization)
```

Delete a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_id = 56; // int
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $apiInstance->deleteFile($file_id, $open_ai_organization);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**|  |
 **open_ai_organization** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileById()`

```php
getFileById($file_id, $open_ai_organization): \OpenAI\Client\Model\File[]
```

Returns information about a specific file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 56; // int
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getFileById($file_id, $open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**|  |
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\File[]**](../Model/File.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiles()`

```php
getFiles($open_ai_organization): \OpenAI\Client\Model\Files
```

Returns a list of files that belong to the user's organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // string

try {
    $result = $apiInstance->getFiles($open_ai_organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_ai_organization** | **string**|  | [optional]

### Return type

[**\OpenAI\Client\Model\Files**](../Model/Files.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFile()`

```php
postFile($file, $purpose): \OpenAI\Client\Model\File
```

Upload a file that contains document(s) to be used across various endpoints/features.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload.
$purpose = 'purpose_example'; // string | The intended purpose of the uploaded documents.

try {
    $result = $apiInstance->postFile($file, $purpose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->postFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| File to upload. | [optional]
 **purpose** | **string**| The intended purpose of the uploaded documents. | [optional]

### Return type

[**\OpenAI\Client\Model\File**](../Model/File.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
