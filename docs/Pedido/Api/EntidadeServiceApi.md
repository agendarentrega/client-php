# AgendarEntrega\Pedido\EntidadeServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statusEntidade**](EntidadeServiceApi.md#statusEntidade) | **GET** /entidades/{entidadeUUID}/status | 


# **statusEntidade**
> \AgendarEntrega\Pedido\Model\ApiStatusEntidadeResponse statusEntidade($entidadeUUID)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AgendarEntrega\Pedido\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new AgendarEntrega\Pedido\Api\EntidadeServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entidadeUUID = "entidadeUUID_example"; // string | 

try {
    $result = $apiInstance->statusEntidade($entidadeUUID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntidadeServiceApi->statusEntidade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entidadeUUID** | **string**|  |

### Return type

[**\AgendarEntrega\Pedido\Model\ApiStatusEntidadeResponse**](../Model/ApiStatusEntidadeResponse.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

