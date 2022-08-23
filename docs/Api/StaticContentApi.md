# Axytos\FinancialServicesAPI\Client\StaticContentApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1StaticContentCreditcheckagreementGet()**](StaticContentApi.md#apiV1StaticContentCreditcheckagreementGet) | **GET** /api/v1/StaticContent/creditcheckagreement | returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case


## `apiV1StaticContentCreditcheckagreementGet()`

```php
apiV1StaticContentCreditcheckagreementGet()
```

returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\StaticContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV1StaticContentCreditcheckagreementGet();
} catch (Exception $e) {
    echo 'Exception when calling StaticContentApi->apiV1StaticContentCreditcheckagreementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
