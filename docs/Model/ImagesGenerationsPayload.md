# # ImagesGenerationsPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prompt** | **string** | A text description of the desired image(s). The maximum length is 1000 characters. | [optional]
**n** | **int** | The number of images to generate. Must be between 1 and 10. | [optional] [default to 1]
**size** | **string** | The size of the generated images. Must be one of 256x256, 512x512, or 1024x1024. | [optional] [default to '1024x1024']
**response_format** | **string** | The format in which the generated images are returned. Must be one of url or b64_json. | [optional] [default to 'url']
**user** | **string** | A unique identifier representing your end-user, which will help OpenAI to monitor and detect abuse. | [optional] [default to 'null']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
