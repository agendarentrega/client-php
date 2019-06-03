<?php

require_once __DIR__ . "/../client.php";

use \AgendarEntrega\Pedido\Model\ApiStatusPedido as StatusPedido;

try {
    $request = new AgendarEntrega\Pedido\Model\ApiImportarPedidoRequest([
        'codigo' => 'PEDIDO-1',
        'comprador' => [
            'email' => 'comprador@teste.com',
            'nome' => 'Nome',
            'sobrenome' => 'Sobrenome',
        ],
        'fornecedor' => [
            'cnpj' => '00000000000100',
        ],
        'emitente' => [
            'cnpj' => '11111111000100',
        ],
        'destinatario' => [
            'cnpj' => '11111111000200',
        ],
        'entrega' => [
            'data' => '2019-06-01',
            'horaInicio' => '08:00',
        ],
        'dataEmissao' => '2019-06-05 08:08',
        'observacoes' => 'Observações gerais existentes no pedido',
        'status' => StatusPedido::EM_ABERTO,
    ]);
    $result = $client->pedido()->importarPedido($request);
    print_r($result);

    $client->pedido()->alterarStatusPedido('11111111000100', 'PEDIDO-1',
        (new AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest())->setStatus(StatusPedido::CONCLUIDO));
} catch (AgendarEntrega\Pedido\ApiException $e) {
    var_dump($e->getMessage());
    var_dump(json_decode($e->getResponseBody()));
}
