<?php
/**
 * PedidoStatusPedido
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
use \AgendarEntrega\Pedido\ObjectSerializer;

/**
 * PedidoStatusPedido Class Doc Comment
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PedidoStatusPedido
{
    /**
     * Possible values of this enum
     */
    const STATUS_PEDIDO_INDEFINIDO = 'STATUS_PEDIDO_INDEFINIDO';
    const PEDIDO_EM_ABERTO = 'PEDIDO_EM_ABERTO';
    const PEDIDO_CONCLUIDO = 'PEDIDO_CONCLUIDO';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STATUS_PEDIDO_INDEFINIDO,
            self::PEDIDO_EM_ABERTO,
            self::PEDIDO_CONCLUIDO,
        ];
    }
}


