# # FineTunesPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**training_file** | **string** | The ID of an uploaded file that contains training data. | [optional]
**validation_file** | **string** | The ID of an uploaded file that contains validation data. | [optional]
**model** | **string** | The name of the base model to fine-tune. You can select one of \&quot;ada\&quot;, \&quot;babbage\&quot;, \&quot;curie\&quot;, \&quot;davinci\&quot;, or a fine-tuned model created after 2022-04-21. To learn more about these models, see the Models documentation. | [optional] [default to 'curie']
**n_epochs** | **int** | The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset. | [optional] [default to 4]
**batch_size** | **int** | The batch size to use for training. The batch size is the number of training examples used to train a single forward and backward pass. | [optional]
**learning_rate_multiplier** | **float** | The learning rate multiplier to use for training. The fine-tuning learning rate is the original learning rate used for pretraining multiplied by this value. | [optional]
**prompt_loss_weight** | **float** | The weight to use for loss on the prompt tokens. This controls how much the model tries to learn to generate the prompt (as compared to the completion which always has a weight of 1.0), and can add a stabilizing effect to training when completions are short. | [optional] [default to 0.01]
**compute_classification_metrics** | **bool** | If set, we calculate classification-specific metrics such as accuracy and F-1 score using the validation set at the end of every epoch. These metrics can be viewed in the results file. | [optional] [default to false]
**classification_n_classes** | **int** | The number of classes in a classification task. | [optional]
**classification_positive_class** | **string** | The positive class in binary classification. | [optional] [default to 'null']
**classification_betas** | **array** | If this is provided, we calculate F-beta scores at the specified beta values. The F-beta score is a generalization of F-1 score. This is only used for binary classification. | [optional]
**suffix** | **string** | A string of up to 40 characters that will be added to your fine-tuned model name. | [optional] [default to 'null']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
