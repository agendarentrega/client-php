<?php
/**
 * AccountUserType
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
 * AccountUserType Class Doc Comment
 *
 * @category Class
 * @package  AgendarEntrega\Pedido
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountUserType
{
    /**
     * Possible values of this enum
     */
    const API = 'Type_API';
    const USER = 'Type_USER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API,
            self::USER,
        ];
    }
}


