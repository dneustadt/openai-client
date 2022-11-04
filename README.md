# OpenAI PHP Client

OpenAI is an AI research and deployment company. Our mission is to ensure that artificial general intelligence benefits all of humanity.

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install via [Composer](https://getcomposer.org/):

`composer require dneustadt/openai-client`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = OpenAI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');

$apiInstance = new OpenAI\Client\Api\AnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_ai_organization = 'open_ai_organization_example'; // optional
$answer_payload = new \OpenAI\Client\Model\AnswerPayload(); // \OpenAI\Client\Model\AnswerPayload

try {
    $result = $apiInstance->postAnswer($open_ai_organization, $answer_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerApi->postAnswer: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.openai.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnswerApi* | [**postAnswer**](docs/Api/AnswerApi.md#postanswer) | **POST** /answers | Answers the specified question using the provided documents and examples.
*ClassificationApi* | [**postClassification**](docs/Api/ClassificationApi.md#postclarification) | **POST** /classifications | The endpoint first searches over the labeled examples to select the ones most relevant for the particular query. Then, the relevant examples are combined with the query to construct a prompt to produce the final label via the completions endpoint.
*CompletionsApi* | [**postCompletions**](docs/Api/CompletionsApi.md#postcompletions) | **POST** /engines/{engine_id}/completions | Creates a new completion for the provided prompt and parameters
*EnginesApi* | [**getEngineById**](docs/Api/EnginesApi.md#getenginebyid) | **GET** /engines/{engine_id} | Retrieves an engine instance, providing basic information about the engine such as the owner and availability.
*EnginesApi* | [**getEngines**](docs/Api/EnginesApi.md#getengines) | **GET** /engines | Lists the currently available engines, and provides basic information about each one such as the owner and availability.
*FilesApi* | [**deleteFile**](docs/Api/FilesApi.md#deletefile) | **DELETE** /files/{file_id} | Delete a file.
*FilesApi* | [**getFileById**](docs/Api/FilesApi.md#getfilebyid) | **GET** /files/{file_id} | Returns information about a specific file.
*FilesApi* | [**getFiles**](docs/Api/FilesApi.md#getfiles) | **GET** /files | Returns a list of files that belong to the user&#39;s organization.
*FilesApi* | [**postFile**](docs/Api/FilesApi.md#postfile) | **POST** /files | Upload a file that contains document(s) to be used across various endpoints/features.
*ImagesApi* | [**postImagesEdits**](docs/Api/ImagesApi.md#postimagesedits) | **POST** /images/edits | Creates an edited or extended image given an original image and a prompt.
*ImagesApi* | [**postImagesGenerations**](docs/Api/ImagesApi.md#postimagesgenerations) | **POST** /images/generations | Given a prompt and/or an input image, the model will generate a new image.
*ImagesApi* | [**postImagesVariations**](docs/Api/ImagesApi.md#postimagesvariations) | **POST** /images/variations | Creates a variation of a given image.
*SearchApi* | [**postSearch**](docs/Api/SearchApi.md#postsearch) | **POST** /engines/{engine_id}/search | The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

## Models

### Request Payloads

- [AnswerPayload](docs/Model/AnswerPayload.md)
- [ClassificationPayload](docs/Model/ClassificationPayload.md)
- [CompletionPayload](docs/Model/CompletionPayload.md)
- [ImagesGenerationsPayload](docs/Model/ImagesGenerationsPayload.md)
- [SearchPayload](docs/Model/SearchPayload.md)

### Response Models

- [Answer](docs/Model/Answer.md)
- [Classification](docs/Model/Classification.md)
- [Completion](docs/Model/Completion.md)
- [Engine](docs/Model/Engine.md)
- [File](docs/Model/File.md)
- [Files](docs/Model/Files.md)
- [Images](docs/Model/Images.md)
- [Search](docs/Model/Search.md)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

