# # SearchPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documents** | **array** | The prompt(s) to generate completions for, encoded as a string, a list of strings, or a list of token lists. | [optional]
**file** | **string** | The ID of an uploaded file that contains documents to search over. You should specify either documents or a file, but not both. | [optional]
**query** | **string** | Query to search against the documents. | [optional]
**max_rerank** | **int** | The maximum number of documents to be re-ranked and returned by search. | [optional] [default to 200]
**return_metadata** | **bool** | A special boolean flag for showing metadata. If set to true, each document entry in the returned JSON will contain a \&quot;metadata\&quot; field. This flag only takes effect when file is set. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
