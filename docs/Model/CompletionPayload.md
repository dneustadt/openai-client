# # CompletionPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prompt** | **string &#124; array** | The prompt(s) to generate completions for, encoded as a string, a list of strings, or a list of token lists. | [optional]
**max_tokens** | **int** | The maximum number of tokens to generate. Requests can use up to 2048 tokens shared between prompt and completion. | [optional] [default to 16]
**temperature** | **float** | The maximum number of tokens to generate. Requests can use up to 2048 tokens shared between prompt and completion. | [optional] [default to 1]
**top_p** | **float** | An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. | [optional] [default to 1]
**n** | **int** | How many completions to generate for each prompt. | [optional] [default to 1]
**stream** | **bool** | Whether to stream back partial progress. If set, tokens will be sent as data-only server-sent events as they become available, with the stream terminated by a data: [DONE] message. | [optional] [default to false]
**logprobs** | **int** | Include the log probabilities on the logprobs most likely tokens, as well the chosen tokens. | [optional]
**echo** | **bool** | Echo back the prompt in addition to the completion. | [optional] [default to false]
**stop** | **string &#124; array** | Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence. | [optional]
**presence_penalty** | **float** | Number between 0 and 1 that penalizes new tokens based on whether they appear in the text so far. Increases the model&#39;s likelihood to talk about new topics. | [optional] [default to 0]
**frequency_penalty** | **float** | Number between 0 and 1 that penalizes new tokens based on their existing frequency in the text so far. Decreases the model&#39;s likelihood to repeat the same line verbatim. | [optional] [default to 0]
**best_of** | **int** | Generates best_of completions server-side and returns the \&quot;best\&quot; (the one with the lowest log probability per token). Results cannot be streamed. | [optional] [default to 1]
**logit_bias** | **object** | Modify the likelihood of specified tokens appearing in the completion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
