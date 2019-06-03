# client-php
Cliente PHP para serviços relacionados ao AgendarEntrega.com

## Instalação (utilizando composer)

```composer require agendarentrega/client-php```

## Exemplo de utilização

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use \AgendarEntrega\Pedido\Model\ApiStatusPedido as StatusPedido;

$apiKey = '[chave da api]';
$client = new \AgendarEntrega\Client($apiKey);

try {
    $client->pedido()->alterarStatusPedido('11111111000100', 'PEDIDO-1',
        (new AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest())->setStatus(StatusPedido::CONCLUIDO));
} catch (AgendarEntrega\Pedido\ApiException $e) {
    var_dump($e->getMessage());
    var_dump(json_decode($e->getResponseBody()));
}
```

Para consultar mais exemplos acesse a pasta [examples](examples)
