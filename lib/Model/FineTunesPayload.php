<?php
/**
 * FineTunesPayload
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAI API
 *
 * OpenAI is an AI research and deployment company. Our mission is to ensure that artificial general intelligence benefits all of humanity.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAI\Client\Model;

use \ArrayAccess;
use \OpenAI\Client\ObjectSerializer;

/**
 * FineTunesPayload Class Doc Comment
 *
 * @category Class
 * @package  OpenAI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FineTunesPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FineTunesPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'training_file' => 'string',
        'validation_file' => 'string',
        'model' => 'string',
        'n_epochs' => 'int',
        'batch_size' => 'int',
        'learning_rate_multiplier' => 'float',
        'prompt_loss_weight' => 'float',
        'compute_classification_metrics' => 'bool',
        'classification_n_classes' => 'int',
        'classification_positive_class' => 'string',
        'classification_betas' => 'array',
        'suffix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'training_file' => null,
        'validation_file' => null,
        'model' => null,
        'n_epochs' => null,
        'batch_size' => null,
        'learning_rate_multiplier' => null,
        'prompt_loss_weight' => null,
        'compute_classification_metrics' => null,
        'classification_n_classes' => null,
        'classification_positive_class' => null,
        'classification_betas' => null,
        'suffix' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'training_file' => 'training_file',
        'validation_file' => 'validation_file',
        'model' => 'model',
        'n_epochs' => 'n_epochs',
        'batch_size' => 'batch_size',
        'learning_rate_multiplier' => 'learning_rate_multiplier',
        'prompt_loss_weight' => 'prompt_loss_weight',
        'compute_classification_metrics' => 'compute_classification_metrics',
        'classification_n_classes' => 'classification_n_classes',
        'classification_positive_class' => 'classification_positive_class',
        'classification_betas' => 'classification_betas',
        'suffix' => 'suffix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'training_file' => 'setTrainingFile',
        'validation_file' => 'setValidationFile',
        'model' => 'setModel',
        'n_epochs' => 'setNEpochs',
        'batch_size' => 'setBatchSize',
        'learning_rate_multiplier' => 'setLearningRateMultiplier',
        'prompt_loss_weight' => 'setPromptLossWeight',
        'compute_classification_metrics' => 'setComputeClassificationMetrics',
        'classification_n_classes' => 'setClassificationNClasses',
        'classification_positive_class' => 'setClassificationPositiveClass',
        'classification_betas' => 'setClassificationBetas',
        'suffix' => 'setSuffix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'training_file' => 'getTrainingFile',
        'validation_file' => 'getValidationFile',
        'model' => 'getModel',
        'n_epochs' => 'getNEpochs',
        'batch_size' => 'getBatchSize',
        'learning_rate_multiplier' => 'getLearningRateMultiplier',
        'prompt_loss_weight' => 'getPromptLossWeight',
        'compute_classification_metrics' => 'getComputeClassificationMetrics',
        'classification_n_classes' => 'getClassificationNClasses',
        'classification_positive_class' => 'getClassificationPositiveClass',
        'classification_betas' => 'getClassificationBetas',
        'suffix' => 'getSuffix'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['training_file'] = $data['training_file'] ?? null;
        $this->container['validation_file'] = $data['validation_file'] ?? null;
        $this->container['model'] = $data['model'] ?? 'curie';
        $this->container['n_epochs'] = $data['n_epochs'] ?? 4;
        $this->container['batch_size'] = $data['batch_size'] ?? null;
        $this->container['learning_rate_multiplier'] = $data['learning_rate_multiplier'] ?? null;
        $this->container['prompt_loss_weight'] = $data['prompt_loss_weight'] ?? 0.01;
        $this->container['compute_classification_metrics'] = $data['compute_classification_metrics'] ?? false;
        $this->container['classification_n_classes'] = $data['classification_n_classes'] ?? null;
        $this->container['classification_positive_class'] = $data['classification_positive_class'] ?? 'null';
        $this->container['classification_betas'] = $data['classification_betas'] ?? null;
        $this->container['suffix'] = $data['suffix'] ?? 'null';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets training_file
     *
     * @return string|null
     */
    public function getTrainingFile()
    {
        return $this->container['training_file'];
    }

    /**
     * Sets training_file
     *
     * @param string|null $training_file The ID of an uploaded file that contains training data.
     *
     * @return self
     */
    public function setTrainingFile($training_file)
    {
        $this->container['training_file'] = $training_file;

        return $this;
    }

    /**
     * Gets validation_file
     *
     * @return string|null
     */
    public function getValidationFile()
    {
        return $this->container['validation_file'];
    }

    /**
     * Sets validation_file
     *
     * @param string|null $validation_file The ID of an uploaded file that contains validation data.
     *
     * @return self
     */
    public function setValidationFile($validation_file)
    {
        $this->container['validation_file'] = $validation_file;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The name of the base model to fine-tune. You can select one of \"ada\", \"babbage\", \"curie\", \"davinci\", or a fine-tuned model created after 2022-04-21. To learn more about these models, see the Models documentation.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets n_epochs
     *
     * @return int|null
     */
    public function getNEpochs()
    {
        return $this->container['n_epochs'];
    }

    /**
     * Sets n_epochs
     *
     * @param int|null $n_epochs The number of epochs to train the model for. An epoch refers to one full cycle through the training dataset.
     *
     * @return self
     */
    public function setNEpochs($n_epochs)
    {
        $this->container['n_epochs'] = $n_epochs;

        return $this;
    }

    /**
     * Gets batch_size
     *
     * @return int|null
     */
    public function getBatchSize()
    {
        return $this->container['batch_size'];
    }

    /**
     * Sets batch_size
     *
     * @param int|null $batch_size The batch size to use for training. The batch size is the number of training examples used to train a single forward and backward pass.
     *
     * @return self
     */
    public function setBatchSize($batch_size)
    {
        $this->container['batch_size'] = $batch_size;

        return $this;
    }

    /**
     * Gets learning_rate_multiplier
     *
     * @return float|null
     */
    public function getLearningRateMultiplier()
    {
        return $this->container['learning_rate_multiplier'];
    }

    /**
     * Sets learning_rate_multiplier
     *
     * @param float|null $learning_rate_multiplier The learning rate multiplier to use for training. The fine-tuning learning rate is the original learning rate used for pretraining multiplied by this value.
     *
     * @return self
     */
    public function setLearningRateMultiplier($learning_rate_multiplier)
    {
        $this->container['learning_rate_multiplier'] = $learning_rate_multiplier;

        return $this;
    }

    /**
     * Gets prompt_loss_weight
     *
     * @return float|null
     */
    public function getPromptLossWeight()
    {
        return $this->container['prompt_loss_weight'];
    }

    /**
     * Sets prompt_loss_weight
     *
     * @param float|null $prompt_loss_weight The weight to use for loss on the prompt tokens. This controls how much the model tries to learn to generate the prompt (as compared to the completion which always has a weight of 1.0), and can add a stabilizing effect to training when completions are short.
     *
     * @return self
     */
    public function setPromptLossWeight($prompt_loss_weight)
    {
        $this->container['prompt_loss_weight'] = $prompt_loss_weight;

        return $this;
    }

    /**
     * Gets compute_classification_metrics
     *
     * @return bool|null
     */
    public function getComputeClassificationMetrics()
    {
        return $this->container['compute_classification_metrics'];
    }

    /**
     * Sets compute_classification_metrics
     *
     * @param bool|null $compute_classification_metrics If set, we calculate classification-specific metrics such as accuracy and F-1 score using the validation set at the end of every epoch. These metrics can be viewed in the results file.
     *
     * @return self
     */
    public function setComputeClassificationMetrics($compute_classification_metrics)
    {
        $this->container['compute_classification_metrics'] = $compute_classification_metrics;

        return $this;
    }

    /**
     * Gets classification_n_classes
     *
     * @return int|null
     */
    public function getClassificationNClasses()
    {
        return $this->container['classification_n_classes'];
    }

    /**
     * Sets classification_n_classes
     *
     * @param int|null $classification_n_classes The number of classes in a classification task.
     *
     * @return self
     */
    public function setClassificationNClasses($classification_n_classes)
    {
        $this->container['classification_n_classes'] = $classification_n_classes;

        return $this;
    }

    /**
     * Gets classification_positive_class
     *
     * @return string|null
     */
    public function getClassificationPositiveClass()
    {
        return $this->container['classification_positive_class'];
    }

    /**
     * Sets classification_positive_class
     *
     * @param string|null $classification_positive_class The positive class in binary classification.
     *
     * @return self
     */
    public function setClassificationPositiveClass($classification_positive_class)
    {
        $this->container['classification_positive_class'] = $classification_positive_class;

        return $this;
    }

    /**
     * Gets classification_betas
     *
     * @return array|null
     */
    public function getClassificationBetas()
    {
        return $this->container['classification_betas'];
    }

    /**
     * Sets classification_betas
     *
     * @param array|null $classification_betas If this is provided, we calculate F-beta scores at the specified beta values. The F-beta score is a generalization of F-1 score. This is only used for binary classification.
     *
     * @return self
     */
    public function setClassificationBetas($classification_betas)
    {
        $this->container['classification_betas'] = $classification_betas;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix A string of up to 40 characters that will be added to your fine-tuned model name.
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


