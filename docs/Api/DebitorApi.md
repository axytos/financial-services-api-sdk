# Axytos\FinancialServicesAPI\Client\DebitorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DebitorCreatePost()**](DebitorApi.md#apiV1DebitorCreatePost) | **POST** /api/v1/Debitor/create | creates a debitor for the current user (creditor) on the axytos platform
[**apiV1DebitorSubscriptionPost()**](DebitorApi.md#apiV1DebitorSubscriptionPost) | **POST** /api/v1/Debitor/subscription | creates a new subscription for given debitor and tariff  new subscriptions must not overlap existing subscriptions


## `apiV1DebitorCreatePost()`

```php
apiV1DebitorCreatePost($axytos_api_models_debitor_creation_model)
```

creates a debitor for the current user (creditor) on the axytos platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\DebitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_debitor_creation_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsDebitorCreationModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsDebitorCreationModel

try {
    $apiInstance->apiV1DebitorCreatePost($axytos_api_models_debitor_creation_model);
} catch (Exception $e) {
    echo 'Exception when calling DebitorApi->apiV1DebitorCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_debitor_creation_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsDebitorCreationModel**](../Model/AxytosApiModelsDebitorCreationModel.md)|  | [optional]

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

## `apiV1DebitorSubscriptionPost()`

```php
apiV1DebitorSubscriptionPost($axytos_api_models_subscription_creation_model)
```

creates a new subscription for given debitor and tariff  new subscriptions must not overlap existing subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\DebitorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_subscription_creation_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsSubscriptionCreationModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsSubscriptionCreationModel

try {
    $apiInstance->apiV1DebitorSubscriptionPost($axytos_api_models_subscription_creation_model);
} catch (Exception $e) {
    echo 'Exception when calling DebitorApi->apiV1DebitorSubscriptionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_subscription_creation_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsSubscriptionCreationModel**](../Model/AxytosApiModelsSubscriptionCreationModel.md)|  | [optional]

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
