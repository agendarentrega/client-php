<?php
/**
 * EntidadeEntidade
 *
 * PHP version 5
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * config.proto
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
 * EntidadeEntidade Class Doc Comment
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntidadeEntidade implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'entidadeEntidade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'cpfCnpjMatriz' => 'string',
        'nome' => 'string',
        'nomeFantasia' => 'string',
        'tipoPessoa' => '\AgendarEntrega\Pedido\Model\EntidadeTipoPessoa',
        'dataCadastro' => 'string',
        'logotipoPersonalizada' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'cpfCnpjMatriz' => null,
        'nome' => null,
        'nomeFantasia' => null,
        'tipoPessoa' => null,
        'dataCadastro' => 'int64',
        'logotipoPersonalizada' => 'boolean'
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
        'cpfCnpjMatriz' => 'cpfCnpjMatriz',
        'nome' => 'nome',
        'nomeFantasia' => 'nomeFantasia',
        'tipoPessoa' => 'tipoPessoa',
        'dataCadastro' => 'dataCadastro',
        'logotipoPersonalizada' => 'logotipoPersonalizada'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'cpfCnpjMatriz' => 'setCpfCnpjMatriz',
        'nome' => 'setNome',
        'nomeFantasia' => 'setNomeFantasia',
        'tipoPessoa' => 'setTipoPessoa',
        'dataCadastro' => 'setDataCadastro',
        'logotipoPersonalizada' => 'setLogotipoPersonalizada'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'cpfCnpjMatriz' => 'getCpfCnpjMatriz',
        'nome' => 'getNome',
        'nomeFantasia' => 'getNomeFantasia',
        'tipoPessoa' => 'getTipoPessoa',
        'dataCadastro' => 'getDataCadastro',
        'logotipoPersonalizada' => 'getLogotipoPersonalizada'
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
        $this->container['cpfCnpjMatriz'] = isset($data['cpfCnpjMatriz']) ? $data['cpfCnpjMatriz'] : null;
        $this->container['nome'] = isset($data['nome']) ? $data['nome'] : null;
        $this->container['nomeFantasia'] = isset($data['nomeFantasia']) ? $data['nomeFantasia'] : null;
        $this->container['tipoPessoa'] = isset($data['tipoPessoa']) ? $data['tipoPessoa'] : null;
        $this->container['dataCadastro'] = isset($data['dataCadastro']) ? $data['dataCadastro'] : null;
        $this->container['logotipoPersonalizada'] = isset($data['logotipoPersonalizada']) ? $data['logotipoPersonalizada'] : null;
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
     * Gets cpfCnpjMatriz
     *
     * @return string
     */
    public function getCpfCnpjMatriz()
    {
        return $this->container['cpfCnpjMatriz'];
    }

    /**
     * Sets cpfCnpjMatriz
     *
     * @param string $cpfCnpjMatriz cpfCnpjMatriz
     *
     * @return $this
     */
    public function setCpfCnpjMatriz($cpfCnpjMatriz)
    {
        $this->container['cpfCnpjMatriz'] = $cpfCnpjMatriz;

        return $this;
    }

    /**
     * Gets nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->container['nome'];
    }

    /**
     * Sets nome
     *
     * @param string $nome nome
     *
     * @return $this
     */
    public function setNome($nome)
    {
        $this->container['nome'] = $nome;

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
     * Gets tipoPessoa
     *
     * @return \AgendarEntrega\Pedido\Model\EntidadeTipoPessoa
     */
    public function getTipoPessoa()
    {
        return $this->container['tipoPessoa'];
    }

    /**
     * Sets tipoPessoa
     *
     * @param \AgendarEntrega\Pedido\Model\EntidadeTipoPessoa $tipoPessoa tipoPessoa
     *
     * @return $this
     */
    public function setTipoPessoa($tipoPessoa)
    {
        $this->container['tipoPessoa'] = $tipoPessoa;

        return $this;
    }

    /**
     * Gets dataCadastro
     *
     * @return string
     */
    public function getDataCadastro()
    {
        return $this->container['dataCadastro'];
    }

    /**
     * Sets dataCadastro
     *
     * @param string $dataCadastro dataCadastro
     *
     * @return $this
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->container['dataCadastro'] = $dataCadastro;

        return $this;
    }

    /**
     * Gets logotipoPersonalizada
     *
     * @return bool
     */
    public function getLogotipoPersonalizada()
    {
        return $this->container['logotipoPersonalizada'];
    }

    /**
     * Sets logotipoPersonalizada
     *
     * @param bool $logotipoPersonalizada logotipoPersonalizada
     *
     * @return $this
     */
    public function setLogotipoPersonalizada($logotipoPersonalizada)
    {
        $this->container['logotipoPersonalizada'] = $logotipoPersonalizada;

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

