# Axytos\FinancialServicesAPI\Client\PaymentsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost) | **POST** /api/v1/Payments/invoice/order/cancel/{externalOrderId} | cancels an order that is not shipped yet
[**apiV1PaymentsInvoiceOrderConfirmPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderConfirmPost) | **POST** /api/v1/Payments/invoice/order/confirm | transmits an order to the axytos platform
[**apiV1PaymentsInvoiceOrderCreateInvoicePost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderCreateInvoicePost) | **POST** /api/v1/Payments/invoice/order/createInvoice | creates a an invoice from a corresponding order
[**apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet) | **GET** /api/v1/Payments/invoice/order/paymentstate/{externalOrderId} | get the payment state for an existing order
[**apiV1PaymentsInvoiceOrderPrecheckPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderPrecheckPost) | **POST** /api/v1/Payments/invoice/order/precheck | checks which payment types can be offered safely
[**apiV1PaymentsInvoiceOrderRefundPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderRefundPost) | **POST** /api/v1/Payments/invoice/order/refund | can partially refund individual invoice items
[**apiV1PaymentsInvoiceOrderReportshippingPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderReportshippingPost) | **POST** /api/v1/Payments/invoice/order/reportshipping | reports the shipped positions
[**apiV1PaymentsInvoiceOrderReturnPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderReturnPost) | **POST** /api/v1/Payments/invoice/order/return | can return invoice positions
[**apiV1PaymentsInvoiceOrderTrackingInformationPost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderTrackingInformationPost) | **POST** /api/v1/Payments/invoice/order/trackingInformation | reports tracking information for shippings
[**apiV1PaymentsInvoiceOrderUpdatePost()**](PaymentsApi.md#apiV1PaymentsInvoiceOrderUpdatePost) | **POST** /api/v1/Payments/invoice/order/update | Update an existing order.  Only possible, when no invoice is created yet.


## `apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost()`

```php
apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost($external_order_id)
```

cancels an order that is not shipped yet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_order_id = 'external_order_id_example'; // string

try {
    $apiInstance->apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost($external_order_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_order_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PaymentsInvoiceOrderConfirmPost()`

```php
apiV1PaymentsInvoiceOrderConfirmPost($axytos_common_public_api_models_order_order_create_request)
```

transmits an order to the axytos platform

A valid preceded Order/PreCheck is required (payments/invoice/order/precheck). Following fields need to be identical:  * PersonalData  * InvoiceAddress  * DeliveryAddress  * Basket  The full response of Order/PreCheck must be passed to the property \"PaymentControlResponse\".                General value constraints in request model:  * InvoiceAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * DeliveryAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * Basket.Positions.productCategory: requires a value of \"Shipping\" if position refers to a shipping method  * PersonalData.Email: required if invoice delivery by Axytos is enabled for your tenant  * PaymentControlResponse.ApprovedPaymentTypeSecurities: must contain \"U\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_common_public_api_models_order_order_create_request = new \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderCreateRequest(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderCreateRequest

try {
    $apiInstance->apiV1PaymentsInvoiceOrderConfirmPost($axytos_common_public_api_models_order_order_create_request);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderConfirmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_common_public_api_models_order_order_create_request** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderCreateRequest**](../Model/AxytosCommonPublicAPIModelsOrderOrderCreateRequest.md)|  | [optional]

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

## `apiV1PaymentsInvoiceOrderCreateInvoicePost()`

```php
apiV1PaymentsInvoiceOrderCreateInvoicePost($axytos_api_models_invoice_creation_model): \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsInvoiceCreationResponse
```

creates a an invoice from a corresponding order

General value constraints in request model:  * Basket.Positions.productCategory: requires a value of \"Shipping\" if position refers to a shipping method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_invoice_creation_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsInvoiceCreationModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsInvoiceCreationModel

try {
    $result = $apiInstance->apiV1PaymentsInvoiceOrderCreateInvoicePost($axytos_api_models_invoice_creation_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderCreateInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_invoice_creation_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsInvoiceCreationModel**](../Model/AxytosApiModelsInvoiceCreationModel.md)|  | [optional]

### Return type

[**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsInvoiceCreationResponse**](../Model/AxytosApiModelsInvoiceCreationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet()`

```php
apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet($external_order_id): \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsPaymentStateResponseModel
```

get the payment state for an existing order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_order_id = 'external_order_id_example'; // string

try {
    $result = $apiInstance->apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet($external_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_order_id** | **string**|  |

### Return type

[**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsPaymentStateResponseModel**](../Model/AxytosApiModelsPaymentStateResponseModel.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PaymentsInvoiceOrderPrecheckPost()`

```php
apiV1PaymentsInvoiceOrderPrecheckPost($axytos_common_public_api_models_order_order_pre_check_request): \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse
```

checks which payment types can be offered safely

This endpoint can be used in Single-Step- or 2-Step-Mode, configured using \"RequestMode\" property.  There are some required properties for the 3 resulting call variations:  * ProofOfInterest: required in Single-Step-Mode and in the 2nd request in 2-Step-Mode  * SelectedPaymentType: has no effect, reserved for future use  * PaymentTypeSecurity: The security of the selected payment type. Required in Single-Step-Mode and in the 2nd request in 2-Step-Mode    * \"S\" => selected payment type is considered a safe payment type.    * \"U\" => selected payment type is considered an unsafe payment type.  * PaymentControlResponse: required in the 2nd request in 2-Step-Mode; should not be transmitted in the 1st request in 2-Step-Mode; should also not be transmitted in Single-Step-Mode.                Regardless of the request mode, you can execute this request for both private persons and companies.  * In case of a private person, \"invoiceAddress.firstname\" and \"invoiceAddress.lastname\" are required. \"personalData.company\" should not be set.  * In case of a company, at least one field in the \"company\" structure is required                General value constraints in request model:  * InvoiceAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * DeliveryAddress.Country: 2-letter ISO-3166 Code (AT, DE, CH)  * Basket.Positions.productCategory: requires a value of \"Shipping\" if position refers to a shipping method                Response model:  * Decision code:    * R: offer no payment types    * S: offer only safe payment types (for example Prepayment, Paypal)    * U: offer all payment types (for example Prepayment, Paypal, Invoice, ...)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_common_public_api_models_order_order_pre_check_request = new \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest

try {
    $result = $apiInstance->apiV1PaymentsInvoiceOrderPrecheckPost($axytos_common_public_api_models_order_order_pre_check_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderPrecheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_common_public_api_models_order_order_pre_check_request** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest**](../Model/AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest.md)|  | [optional]

### Return type

[**\Axytos\FinancialServicesAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse**](../Model/AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1PaymentsInvoiceOrderRefundPost()`

```php
apiV1PaymentsInvoiceOrderRefundPost($axytos_api_models_refund_request_model)
```

can partially refund individual invoice items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_refund_request_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsRefundRequestModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsRefundRequestModel

try {
    $apiInstance->apiV1PaymentsInvoiceOrderRefundPost($axytos_api_models_refund_request_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderRefundPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_refund_request_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsRefundRequestModel**](../Model/AxytosApiModelsRefundRequestModel.md)|  | [optional]

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

## `apiV1PaymentsInvoiceOrderReportshippingPost()`

```php
apiV1PaymentsInvoiceOrderReportshippingPost($axytos_api_models_report_shipping_model)
```

reports the shipped positions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_report_shipping_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReportShippingModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReportShippingModel

try {
    $apiInstance->apiV1PaymentsInvoiceOrderReportshippingPost($axytos_api_models_report_shipping_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderReportshippingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_report_shipping_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReportShippingModel**](../Model/AxytosApiModelsReportShippingModel.md)|  | [optional]

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

## `apiV1PaymentsInvoiceOrderReturnPost()`

```php
apiV1PaymentsInvoiceOrderReturnPost($axytos_api_models_return_request_model)
```

can return invoice positions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_return_request_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReturnRequestModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReturnRequestModel

try {
    $apiInstance->apiV1PaymentsInvoiceOrderReturnPost($axytos_api_models_return_request_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_return_request_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsReturnRequestModel**](../Model/AxytosApiModelsReturnRequestModel.md)|  | [optional]

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

## `apiV1PaymentsInvoiceOrderTrackingInformationPost()`

```php
apiV1PaymentsInvoiceOrderTrackingInformationPost($axytos_api_models_shipping_tracking_information_request_model)
```

reports tracking information for shippings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_shipping_tracking_information_request_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsShippingTrackingInformationRequestModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsShippingTrackingInformationRequestModel

try {
    $apiInstance->apiV1PaymentsInvoiceOrderTrackingInformationPost($axytos_api_models_shipping_tracking_information_request_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderTrackingInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_shipping_tracking_information_request_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsShippingTrackingInformationRequestModel**](../Model/AxytosApiModelsShippingTrackingInformationRequestModel.md)|  | [optional]

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

## `apiV1PaymentsInvoiceOrderUpdatePost()`

```php
apiV1PaymentsInvoiceOrderUpdatePost($axytos_api_models_update_order_model)
```

Update an existing order.  Only possible, when no invoice is created yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_update_order_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsUpdateOrderModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsUpdateOrderModel

try {
    $apiInstance->apiV1PaymentsInvoiceOrderUpdatePost($axytos_api_models_update_order_model);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->apiV1PaymentsInvoiceOrderUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_update_order_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsUpdateOrderModel**](../Model/AxytosApiModelsUpdateOrderModel.md)|  | [optional]

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
