# # EmbeddingsPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | ID of the model to use. You can use the List models API to see all of your available models, or see our Model overview for descriptions of them. | [optional]
**input** | **string** | Input text to get embeddings for, encoded as a string or array of tokens. To get embeddings for multiple inputs in a single request, pass an array of strings or array of token arrays. Each input must not exceed 2048 tokens in length. | [optional]
**user** | **string** | A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse. | [optional] [default to 'null']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
