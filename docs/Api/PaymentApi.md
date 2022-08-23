# Axytos\FinancialServicesAPI\Client\PaymentApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PaymentIdGet()**](PaymentApi.md#apiV1PaymentIdGet) | **GET** /api/v1/Payment/{id} | 


## `apiV1PaymentIdGet()`

```php
apiV1PaymentIdGet($id): \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsPaymentResponseModel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiV1PaymentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsPaymentResponseModel**](../Model/AxytosApiModelsPaymentResponseModel.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
