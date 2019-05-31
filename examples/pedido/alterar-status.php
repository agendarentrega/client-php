<?php

require_once __DIR__ . "/../client.php";

use \AgendarEntrega\Pedido\Model\ApiStatusPedido as StatusPedido;

try {
    $client->pedido()->alterarStatusPedido('11111111000100', 'PEDIDO-1',
        (new AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest())->setStatus(StatusPedido::CONCLUIDO));
} catch (AgendarEntrega\Pedido\ApiException $e) {
    var_dump($e->getMessage());
    var_dump(json_decode($e->getResponseBody()));
}