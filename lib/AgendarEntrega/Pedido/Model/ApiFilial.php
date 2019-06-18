<?php
/**
 * ApiFilial
 *
 * PHP version 5
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * gitlab.com/agendarentrega/servicos/pedido/proto/config.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AgendarEntrega\Pedido\Model;

use \ArrayAccess;
use \AgendarEntrega\Pedido\ObjectSerializer;

/**
 * ApiFilial Class Doc Comment
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiFilial implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiFilial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'identidade' => 'string',
        'nomeFantasia' => 'string',
        'entidade' => '\AgendarEntrega\Pedido\Model\ApiEntidade'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'identidade' => null,
        'nomeFantasia' => null,
        'entidade' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'identidade' => 'identidade',
        'nomeFantasia' => 'nome_fantasia',
        'entidade' => 'entidade'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'identidade' => 'setIdentidade',
        'nomeFantasia' => 'setNomeFantasia',
        'entidade' => 'setEntidade'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'identidade' => 'getIdentidade',
        'nomeFantasia' => 'getNomeFantasia',
        'entidade' => 'getEntidade'
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
        return self::$swaggerModelName;
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['identidade'] = isset($data['identidade']) ? $data['identidade'] : null;
        $this->container['nomeFantasia'] = isset($data['nomeFantasia']) ? $data['nomeFantasia'] : null;
        $this->container['entidade'] = isset($data['entidade']) ? $data['entidade'] : null;
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets identidade
     *
     * @return string
     */
    public function getIdentidade()
    {
        return $this->container['identidade'];
    }

    /**
     * Sets identidade
     *
     * @param string $identidade identidade
     *
     * @return $this
     */
    public function setIdentidade($identidade)
    {
        $this->container['identidade'] = $identidade;

        return $this;
    }

    /**
     * Gets nomeFantasia
     *
     * @return string
     */
    public function getNomeFantasia()
    {
        return $this->container['nomeFantasia'];
    }

    /**
     * Sets nomeFantasia
     *
     * @param string $nomeFantasia nomeFantasia
     *
     * @return $this
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->container['nomeFantasia'] = $nomeFantasia;

        return $this;
    }

    /**
     * Gets entidade
     *
     * @return \AgendarEntrega\Pedido\Model\ApiEntidade
     */
    public function getEntidade()
    {
        return $this->container['entidade'];
    }

    /**
     * Sets entidade
     *
     * @param \AgendarEntrega\Pedido\Model\ApiEntidade $entidade entidade
     *
     * @return $this
     */
    public function setEntidade($entidade)
    {
        $this->container['entidade'] = $entidade;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


