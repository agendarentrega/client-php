# AgendarEntrega\Pedido\PedidoServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterarStatusPedido**](PedidoServiceApi.md#alterarStatusPedido) | **POST** /pedidos/importados/by-emitente/{cnpjEmitente}/{codigo}/set-status | 
[**importarPedido**](PedidoServiceApi.md#importarPedido) | **POST** /pedidos/importar | 


# **alterarStatusPedido**
> \AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoResponse alterarStatusPedido($cnpjEmitente, $codigo, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new AgendarEntrega\Pedido\Api\PedidoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cnpjEmitente = "cnpjEmitente_example"; // string | 
$codigo = "codigo_example"; // string | 
$body = new \AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest(); // \AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest | 

try {
    $result = $apiInstance->alterarStatusPedido($cnpjEmitente, $codigo, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidoServiceApi->alterarStatusPedido: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cnpjEmitente** | **string**|  |
 **codigo** | **string**|  |
 **body** | [**\AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoRequest**](../Model/ApiAlterarStatusPedidoRequest.md)|  |

### Return type

[**\AgendarEntrega\Pedido\Model\ApiAlterarStatusPedidoResponse**](../Model/ApiAlterarStatusPedidoResponse.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importarPedido**
> \AgendarEntrega\Pedido\Model\ApiImportarPedidoResponse importarPedido($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new AgendarEntrega\Pedido\Api\PedidoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AgendarEntrega\Pedido\Model\ApiImportarPedidoRequest(); // \AgendarEntrega\Pedido\Model\ApiImportarPedidoRequest | 

try {
    $result = $apiInstance->importarPedido($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PedidoServiceApi->importarPedido: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AgendarEntrega\Pedido\Model\ApiImportarPedidoRequest**](../Model/ApiImportarPedidoRequest.md)|  |

### Return type

[**\AgendarEntrega\Pedido\Model\ApiImportarPedidoResponse**](../Model/ApiImportarPedidoResponse.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

