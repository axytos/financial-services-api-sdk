# Axytos\FinancialServicesAPI\Client\CheckApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CheckRiskPaymentcontrolCheckPost()**](CheckApi.md#apiV1CheckRiskPaymentcontrolCheckPost) | **POST** /api/v1/Check/risk/paymentcontrol/check | checks which payment types can be offered safely
[**apiV1CheckRiskPaymentcontrolConfirmPost()**](CheckApi.md#apiV1CheckRiskPaymentcontrolConfirmPost) | **POST** /api/v1/Check/risk/paymentcontrol/confirm | confirms payment without order creation


## `apiV1CheckRiskPaymentcontrolCheckPost()`

```php
apiV1CheckRiskPaymentcontrolCheckPost($axytos_common_public_api_models_payment_control_payment_control_request): \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse
```

checks which payment types can be offered safely

This endpoint can be used in Single-Step- or 2-Step-Mode, configured using \"RequestMode\" property.  There are some required properties for the 3 resulting call variations:  * ProofOfInterest: required in Single-Step-Mode and in the 2nd request in 2-Step-Mode  * SelectedPaymentType: has no effect, reserved for future use  * PaymentTypeSecurity: The security of the selected payment type. Required in Single-Step-Mode and in the 2nd request in 2-Step-Mode    * \"S\" => selected payment type is considered a safe payment type.    * \"U\" => selected payment type is considered an unsafe payment type.  * PaymentControlResponse: required in the 2nd request in 2-Step-Mode; should not be transmitted in the 1st request in 2-Step-Mode; should also not be transmitted in Single-Step-Mode.                Regardless of the request mode, you can execute this request for both private persons and companies.  * In case of a private person, \"invoiceAddress.firstname\" and \"invoiceAddress.lastname\" are required. \"personalData.company\" should not be set.  * In case of a company, at least one field in the \"company\" structure is required.                General value constraints in request model:  * InvoiceAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * DeliveryAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * Basket.Positions.productCategory: requires a value of \"Shipping\" if position refers to a shipping method                Response model:  * Decision code:    * R: offer no payment types    * S: offer only safe payment types (for example Prepayment, Paypal)    * U: offer all payment types (for example Prepayment, Paypal, Invoice, ...)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_common_public_api_models_payment_control_payment_control_request = new \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest

try {
    $result = $apiInstance->apiV1CheckRiskPaymentcontrolCheckPost($axytos_common_public_api_models_payment_control_payment_control_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->apiV1CheckRiskPaymentcontrolCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_common_public_api_models_payment_control_payment_control_request** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest**](../Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest.md)|  | [optional]

### Return type

[**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse**](../Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1CheckRiskPaymentcontrolConfirmPost()`

```php
apiV1CheckRiskPaymentcontrolConfirmPost($axytos_common_public_api_models_payment_control_payment_control_confirm_request)
```

confirms payment without order creation

A valid preceded PaymentControl/Check is required (check/risk/paymentcontrol/check). Following fields need to be identical:  * PersonalData  * InvoiceAddress  * DeliveryAddress  * Basket  The full response of PaymentControl/Check must be passed to the property \"PaymentControlResponse\".    General value constraints in request model:  * InvoiceAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * DeliveryAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * Basket.Positions.productCategory: requires a value of \"Shipping\" if position refers to a shipping method    The payment type security is not validated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_common_public_api_models_payment_control_payment_control_confirm_request = new \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest

try {
    $apiInstance->apiV1CheckRiskPaymentcontrolConfirmPost($axytos_common_public_api_models_payment_control_payment_control_confirm_request);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->apiV1CheckRiskPaymentcontrolConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_common_public_api_models_payment_control_payment_control_confirm_request** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest**](../Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest.md)|  | [optional]

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
