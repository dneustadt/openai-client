# # AnswerPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | ID of the engine to use for completion. | [optional]
**question** | **string** | Question to get answered. | [optional]
**examples** | **array** | List of (question, answer) pairs that will help steer the model towards the tone and answer format you&#39;d like. We recommend adding 2 to 3 examples. | [optional]
**examples_context** | **string** | A text snippet containing the contextual information used to generate the answers for the examples you provide. | [optional]
**documents** | **array** | List of documents from which the answer for the input question should be derived. If this is an empty list, the question will be answered based on the question-answer examples. | [optional]
**file** | **string** | The ID of an uploaded file that contains documents to search over. See upload file for how to upload a file of the desired format and purpose. | [optional]
**search_model** | **string** | ID of the engine to use for Search. | [optional] [default to 'ada']
**temperature** | **float** | What sampling temperature to use. Higher values mean the model will take more risks and value 0 (argmax sampling) works better for scenarios with a well-defined answer. | [optional] [default to 0]
**logprobs** | **int** | Include the log probabilities on the logprobs most likely tokens, as well the chosen tokens. | [optional] [default to 0]
**max_tokens** | **int** | The maximum number of tokens allowed for the generated answer. | [optional] [default to 16]
**stop** | **string &#124; array** | Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence. | [optional]
**n** | **int** | How many answers to generate for each question. | [optional] [default to 1]
**logit_bias** | **object** | Modify the likelihood of specified tokens appearing in the completion. | [optional]
**return_metadata** | **bool** | A special boolean flag for showing metadata. If set to true, each document entry in the returned JSON will contain a \&quot;metadata\&quot; field. | [optional] [default to false]
**return_prompt** | **bool** | If set to true, the returned JSON will include a \&quot;prompt\&quot; field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes. | [optional] [default to false]
**expand** | **array** | If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support completion and file objects for expansion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
