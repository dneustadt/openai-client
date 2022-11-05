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
*ClassificationApi* | [**postClassification**](docs/Api/ClassificationApi.md#postclassification) | **POST** /classifications | The endpoint first searches over the labeled examples to select the ones most relevant for the particular query. Then, the relevant examples are combined with the query to construct a prompt to produce the final label via the completions endpoint.
*CompletionsApi* | [**postCompletions**](docs/Api/CompletionsApi.md#postcompletions) | **POST** /engines/{engine_id}/completions | Creates a new completion for the provided prompt and parameters
*EmbeddingsApi* | [**postEmbeddings**](docs/Api/EmbeddingsApi.md#postembeddings) | **POST** /embeddings | Creates an embedding vector representing the input text.
*EnginesApi* | [**getEngineById**](docs/Api/EnginesApi.md#getenginebyid) | **GET** /engines/{engine_id} | Retrieves an engine instance, providing basic information about the engine such as the owner and availability.
*EnginesApi* | [**getEngines**](docs/Api/EnginesApi.md#getengines) | **GET** /engines | Lists the currently available engines, and provides basic information about each one such as the owner and availability.
*FilesApi* | [**deleteFile**](docs/Api/FilesApi.md#deletefile) | **DELETE** /files/{file_id} | Delete a file.
*FilesApi* | [**getFileById**](docs/Api/FilesApi.md#getfilebyid) | **GET** /files/{file_id} | Returns information about a specific file.
*FilesApi* | [**getFiles**](docs/Api/FilesApi.md#getfiles) | **GET** /files | Returns a list of files that belong to the user&#39;s organization.
*FilesApi* | [**postFile**](docs/Api/FilesApi.md#postfile) | **POST** /files | Upload a file that contains document(s) to be used across various endpoints/features.
*FineTunesApi* | [**getFineTune**](docs/Api/FineTunesApi.md#getfinetune) | **GET** /fine-tunes/{fine_tune_id} | Gets info about the fine-tune job.
*FineTunesApi* | [**getFineTuneEvents**](docs/Api/FineTunesApi.md#getfinetuneevents) | **GET** /fine-tunes/{fine_tune_id}/events | Get fine-grained status updates for a fine-tune job.
*FineTunesApi* | [**getFineTunes**](docs/Api/FineTunesApi.md#getfinetunes) | **GET** /fine-tunes | List your organization&#39;s fine-tuning jobs
*FineTunesApi* | [**postFineTuneCancel**](docs/Api/FineTunesApi.md#postfinetunecancel) | **POST** /fine-tunes/{fine_tune_id}/cancel | Immediately cancel a fine-tune job.
*FineTunesApi* | [**postFineTunes**](docs/Api/FineTunesApi.md#postfinetunes) | **POST** /fine-tunes | Creates a job that fine-tunes a specified model from a given dataset.
*ImagesApi* | [**postImagesEdits**](docs/Api/ImagesApi.md#postimagesedits) | **POST** /images/edits | Creates an edited or extended image given an original image and a prompt.
*ImagesApi* | [**postImagesGenerations**](docs/Api/ImagesApi.md#postimagesgenerations) | **POST** /images/generations | Given a prompt and/or an input image, the model will generate a new image.
*ImagesApi* | [**postImagesVariations**](docs/Api/ImagesApi.md#postimagesvariations) | **POST** /images/variations | Creates a variation of a given image.
*ModelsApi* | [**deleteModel**](docs/Api/ModelsApi.md#deletemodel) | **DELETE** /models/{model} | Delete a fine-tuned model. You must have the Owner role in your organization.
*ModelsApi* | [**getModel**](docs/Api/ModelsApi.md#getmodel) | **GET** /models/{model} | Retrieves a model instance, providing basic information about the model such as the owner and permissioning.
*ModelsApi* | [**getModels**](docs/Api/ModelsApi.md#getmodels) | **GET** /models | Lists the currently available models, and provides basic information about each one such as the owner and availability.
*ModerationsApi* | [**postModerations**](docs/Api/ModerationsApi.md#postmoderations) | **POST** /moderations | Classifies if text violates OpenAI&#39;s Content Policy
*SearchApi* | [**postSearch**](docs/Api/SearchApi.md#postsearch) | **POST** /search | The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

## Models

### Request Payloads

- [AnswerPayload](docs/Model/AnswerPayload.md)
- [ClassificationPayload](docs/Model/ClassificationPayload.md)
- [CompletionPayload](docs/Model/CompletionPayload.md)
- [ImagesGenerationsPayload](docs/Model/ImagesGenerationsPayload.md)
- [SearchPayload](docs/Model/SearchPayload.md)
- [EmbeddingsPayload](docs/Model/EmbeddingsPayload.md)
- [FineTunesPayload](docs/Model/FineTunesPayload.md)
- [ModerationsPayload](docs/Model/ModerationsPayload.md)

### Response Models

- [Answer](docs/Model/Answer.md)
- [Classification](docs/Model/Classification.md)
- [Completion](docs/Model/Completion.md)
- [Engines](docs/Model/Engines.md)
- [Engine](docs/Model/Engine.md)
- [File](docs/Model/File.md)
- [Files](docs/Model/Files.md)
- [Images](docs/Model/Images.md)
- [Search](docs/Model/Search.md)
- [Embeddings](docs/Model/Embeddings.md)
- [FineTune](docs/Model/FineTune.md)
- [FineTuneEvents](docs/Model/FineTuneEvents.md)
- [FineTunes](docs/Model/FineTunes.md)
- [Models](docs/Model/Models.md)
- [Model](docs/Model/Model.md)
- [ModelDelete](docs/Model/ModelDelete.md)
- [Moderations](docs/Model/Moderations.md)
