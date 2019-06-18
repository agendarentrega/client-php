<?php

require_once __DIR__ . "/../client.php";

use \AgendarEntrega\Pedido\Model\PedidoStatusPedido as StatusPedido;

try {
    $client->pedido()->alterarStatusPedido('11111111000100', 'PEDIDO-1',
        (new AgendarEntrega\Pedido\Model\PedidoAlterarStatusPedidoRequest())->setStatus(StatusPedido::PEDIDO_CONCLUIDO));
} catch (AgendarEntrega\Pedido\ApiException $e) {
    var_dump($e->getMessage());
    var_dump(json_decode($e->getResponseBody()));
}