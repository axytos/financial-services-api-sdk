# Axytos\FinancialServicesAPI\Client\CustomProductApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CustomProductReportusagePost()**](CustomProductApi.md#apiV1CustomProductReportusagePost) | **POST** /api/v1/CustomProduct/reportusage | Tracks the usage of a custom (creditor-managed) product for a given debitor


## `apiV1CustomProductReportusagePost()`

```php
apiV1CustomProductReportusagePost($axytos_api_models_custom_product_usage_model)
```

Tracks the usage of a custom (creditor-managed) product for a given debitor

Note:                    This request is posted by the creditor, not the debitor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\CustomProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_custom_product_usage_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel

try {
    $apiInstance->apiV1CustomProductReportusagePost($axytos_api_models_custom_product_usage_model);
} catch (Exception $e) {
    echo 'Exception when calling CustomProductApi->apiV1CustomProductReportusagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_custom_product_usage_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel**](../Model/AxytosApiModelsCustomProductUsageModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
