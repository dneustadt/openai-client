# # ClassificationPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | ID of the engine to use for completion. | [optional]
**query** | **string** | Query to be classified. | [optional]
**examples** | **array** | A list of examples with labels. | [optional]
**file** | **string** | The ID of the uploaded file that contains training examples. See upload file for how to upload a file of the desired format and purpose. | [optional]
**labels** | **array** | The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized. | [optional]
**search_model** | **string** | ID of the engine to use for Search. | [optional] [default to 'ada']
**temperature** | **float** | What sampling temperature to use. Higher values mean the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer. | [optional] [default to 0]
**logprobs** | **int** | Include the log probabilities on the logprobs most likely tokens, as well the chosen tokens. | [optional] [default to 0]
**max_examples** | **int** | The maximum number of examples to be ranked by Search when using file. Setting it to a higher value leads to improved accuracy but with increased latency and cost. | [optional] [default to 200]
**logit_bias** | **object** | Modify the likelihood of specified tokens appearing in the completion. | [optional]
**return_prompt** | **bool** | If set to true, the returned JSON will include a \&quot;prompt\&quot; field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes. | [optional] [default to false]
**return_metadata** | **bool** | A special boolean flag for showing metadata. If set to true, each document entry in the returned JSON will contain a \&quot;metadata\&quot; field. | [optional] [default to false]
**expand** | **array** | If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support completion and file objects for expansion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
