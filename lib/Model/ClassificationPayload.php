<?php
/**
 * ClassificationPayload
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ClassificationPayload Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClassificationPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClassificationPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model' => 'string',
        'query' => 'string',
        'examples' => 'array',
        'file' => 'string',
        'labels' => 'array',
        'search_model' => 'string',
        'temperature' => 'float',
        'logprobs' => 'int',
        'max_examples' => 'int',
        'logit_bias' => 'object',
        'return_prompt' => 'bool',
        'return_metadata' => 'bool',
        'expand' => 'array'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model' => null,
        'query' => null,
        'examples' => null,
        'file' => null,
        'labels' => null,
        'search_model' => null,
        'temperature' => null,
        'logprobs' => null,
        'max_examples' => null,
        'logit_bias' => null,
        'return_prompt' => null,
        'return_metadata' => null,
        'expand' => null
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
        'model' => 'model',
        'query' => 'query',
        'examples' => 'examples',
        'file' => 'file',
        'labels' => 'labels',
        'search_model' => 'search_model',
        'temperature' => 'temperature',
        'logprobs' => 'logprobs',
        'max_examples' => 'max_examples',
        'logit_bias' => 'logit_bias',
        'return_prompt' => 'return_prompt',
        'return_metadata' => 'return_metadata',
        'expand' => 'expand'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'query' => 'setQuery',
        'examples' => 'setExamples',
        'file' => 'setFile',
        'labels' => 'setLabels',
        'search_model' => 'setSearchModel',
        'temperature' => 'setTemperature',
        'logprobs' => 'setLogprobs',
        'max_examples' => 'setMaxExamples',
        'logit_bias' => 'setLogitBias',
        'return_prompt' => 'setReturnPrompt',
        'return_metadata' => 'setReturnMetadata',
        'expand' => 'setExpand'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'query' => 'getQuery',
        'examples' => 'getExamples',
        'file' => 'getFile',
        'labels' => 'getLabels',
        'search_model' => 'getSearchModel',
        'temperature' => 'getTemperature',
        'logprobs' => 'getLogprobs',
        'max_examples' => 'getMaxExamples',
        'logit_bias' => 'getLogitBias',
        'return_prompt' => 'getReturnPrompt',
        'return_metadata' => 'getReturnMetadata',
        'expand' => 'getExpand'
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
        $this->container['model'] = $data['model'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['examples'] = $data['examples'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['search_model'] = $data['search_model'] ?? 'ada';
        $this->container['temperature'] = $data['temperature'] ?? 0;
        $this->container['logprobs'] = $data['logprobs'] ?? 0;
        $this->container['max_examples'] = $data['max_examples'] ?? 200;
        $this->container['logit_bias'] = $data['logit_bias'] ?? null;
        $this->container['return_prompt'] = $data['return_prompt'] ?? false;
        $this->container['return_metadata'] = $data['return_metadata'] ?? false;
        $this->container['expand'] = $data['expand'] ?? null;
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
     * @param string|null $model ID of the engine to use for completion.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query Query to be classified.
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets examples
     *
     * @return array|null
     */
    public function getExamples()
    {
        return $this->container['examples'];
    }

    /**
     * Sets examples
     *
     * @param array|null $examples A list of examples with labels.
     *
     * @return self
     */
    public function setExamples($examples)
    {
        $this->container['examples'] = $examples;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string|null $file The ID of the uploaded file that contains training examples. See upload file for how to upload a file of the desired format and purpose.
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return array|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param array|null $labels The set of categories being classified. If not specified, candidate labels will be automatically collected from the examples you provide. All the label strings will be normalized to be capitalized.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets search_model
     *
     * @return string|null
     */
    public function getSearchModel()
    {
        return $this->container['search_model'];
    }

    /**
     * Sets search_model
     *
     * @param string|null $search_model ID of the engine to use for Search.
     *
     * @return self
     */
    public function setSearchModel($search_model)
    {
        $this->container['search_model'] = $search_model;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return float|null
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param float|null $temperature What sampling temperature to use. Higher values mean the model will take more risks. Try 0.9 for more creative applications, and 0 (argmax sampling) for ones with a well-defined answer.
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets logprobs
     *
     * @return int|null
     */
    public function getLogprobs()
    {
        return $this->container['logprobs'];
    }

    /**
     * Sets logprobs
     *
     * @param int|null $logprobs Include the log probabilities on the logprobs most likely tokens, as well the chosen tokens.
     *
     * @return self
     */
    public function setLogprobs($logprobs)
    {
        $this->container['logprobs'] = $logprobs;

        return $this;
    }

    /**
     * Gets max_examples
     *
     * @return int|null
     */
    public function getMaxExamples()
    {
        return $this->container['max_examples'];
    }

    /**
     * Sets max_examples
     *
     * @param int|null $max_examples The maximum number of examples to be ranked by Search when using file. Setting it to a higher value leads to improved accuracy but with increased latency and cost.
     *
     * @return self
     */
    public function setMaxExamples($max_examples)
    {
        $this->container['max_examples'] = $max_examples;

        return $this;
    }

    /**
     * Gets logit_bias
     *
     * @return object|null
     */
    public function getLogitBias()
    {
        return $this->container['logit_bias'];
    }

    /**
     * Sets logit_bias
     *
     * @param object|null $logit_bias Modify the likelihood of specified tokens appearing in the completion.
     *
     * @return self
     */
    public function setLogitBias($logit_bias)
    {
        $this->container['logit_bias'] = $logit_bias;

        return $this;
    }

    /**
     * Gets return_prompt
     *
     * @return bool|null
     */
    public function getReturnPrompt()
    {
        return $this->container['return_prompt'];
    }

    /**
     * Sets return_prompt
     *
     * @param bool|null $return_prompt If set to true, the returned JSON will include a \"prompt\" field containing the final prompt that was used to request a completion. This is mainly useful for debugging purposes.
     *
     * @return self
     */
    public function setReturnPrompt($return_prompt)
    {
        $this->container['return_prompt'] = $return_prompt;

        return $this;
    }

    /**
     * Gets return_metadata
     *
     * @return bool|null
     */
    public function getReturnMetadata()
    {
        return $this->container['return_metadata'];
    }

    /**
     * Sets return_metadata
     *
     * @param bool|null $return_metadata A special boolean flag for showing metadata. If set to true, each document entry in the returned JSON will contain a \"metadata\" field.
     *
     * @return self
     */
    public function setReturnMetadata($return_metadata)
    {
        $this->container['return_metadata'] = $return_metadata;

        return $this;
    }

    /**
     * Gets expand
     *
     * @return array|null
     */
    public function getExpand()
    {
        return $this->container['expand'];
    }

    /**
     * Sets expand
     *
     * @param array|null $expand If an object name is in the list, we provide the full information of the object; otherwise, we only provide the object ID. Currently we support completion and file objects for expansion.
     *
     * @return self
     */
    public function setExpand($expand)
    {
        $this->container['expand'] = $expand;

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

