<?php

namespace AgendarEntrega;

use AgendarEntrega\Pedido;

class Client {
    /**
     * Client Pedido
     */
    private $pedido;

    public function __construct($apiKey, $host = 'https://agendarentrega.com/api') {
        $this->loadPedido($apiKey, $host);
    }

    private function loadPedido($apiKey, $host) {
        $config = Pedido\Configuration::getDefaultConfiguration()
            ->setHost("$host/pedido")
            ->setApiKey('Authorization', $apiKey);
        $this->pedido = new Pedido\Api\PedidoServiceApi(null, $config);
    }

    public function pedido() {
        return $this->pedido;
    }
}