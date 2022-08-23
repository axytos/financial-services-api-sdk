# OpenAPIClient-php

Note: Please provide proper values in \"Try it out\". See schemas and endpoint description for possible values. <br/>DateTimes should always be provided in UTC and with the timezone attached, see ISO-8601 (example: 2021-10-13T20:00:30Z)

For more information, please visit [https://www.axytos.com/](https://www.axytos.com/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CheckApi* | [**apiV1CheckRiskPaymentcontrolCheckPost**](docs/Api/CheckApi.md#apiv1checkriskpaymentcontrolcheckpost) | **POST** /api/v1/Check/risk/paymentcontrol/check | checks which payment types can be offered safely
*CheckApi* | [**apiV1CheckRiskPaymentcontrolConfirmPost**](docs/Api/CheckApi.md#apiv1checkriskpaymentcontrolconfirmpost) | **POST** /api/v1/Check/risk/paymentcontrol/confirm | confirms payment without order creation
*CredentialsApi* | [**apiV1CredentialsValidateGet**](docs/Api/CredentialsApi.md#apiv1credentialsvalidateget) | **GET** /api/v1/Credentials/validate | validate credentials
*CustomProductApi* | [**apiV1CustomProductReportusagePost**](docs/Api/CustomProductApi.md#apiv1customproductreportusagepost) | **POST** /api/v1/CustomProduct/reportusage | Tracks the usage of a custom (creditor-managed) product for a given debitor
*CustomerDataApi* | [**apiV1CustomerDataUploadCustomerDataPost**](docs/Api/CustomerDataApi.md#apiv1customerdatauploadcustomerdatapost) | **POST** /api/v1/CustomerData/uploadCustomerData | Upload a CSV file containing customer data with this endpoint.
*DebitorApi* | [**apiV1DebitorCreatePost**](docs/Api/DebitorApi.md#apiv1debitorcreatepost) | **POST** /api/v1/Debitor/create | creates a debitor for the current user (creditor) on the axytos platform
*DebitorApi* | [**apiV1DebitorSubscriptionPost**](docs/Api/DebitorApi.md#apiv1debitorsubscriptionpost) | **POST** /api/v1/Debitor/subscription | creates a new subscription for given debitor and tariff  new subscriptions must not overlap existing subscriptions
*ErrorApi* | [**apiV1ErrorReportPost**](docs/Api/ErrorApi.md#apiv1errorreportpost) | **POST** /api/v1/Error/report | reports an error with the system.  for a better identification of the error, you can optionally provide a request-id.
*PaymentApi* | [**apiV1PaymentIdGet**](docs/Api/PaymentApi.md#apiv1paymentidget) | **GET** /api/v1/Payment/{id} | 
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderCancelExternalOrderIdPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceordercancelexternalorderidpost) | **POST** /api/v1/Payments/invoice/order/cancel/{externalOrderId} | cancels an order that is not shipped yet
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderConfirmPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderconfirmpost) | **POST** /api/v1/Payments/invoice/order/confirm | transmits an order to the axytos platform
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderCreateInvoicePost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceordercreateinvoicepost) | **POST** /api/v1/Payments/invoice/order/createInvoice | creates a an invoice from a corresponding order
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderPaymentstateExternalOrderIdGet**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderpaymentstateexternalorderidget) | **GET** /api/v1/Payments/invoice/order/paymentstate/{externalOrderId} | get the payment state for an existing order
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderPrecheckPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderprecheckpost) | **POST** /api/v1/Payments/invoice/order/precheck | checks which payment types can be offered safely
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderRefundPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderrefundpost) | **POST** /api/v1/Payments/invoice/order/refund | can partially refund individual invoice items
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderReportshippingPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderreportshippingpost) | **POST** /api/v1/Payments/invoice/order/reportshipping | reports the shipped positions
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderReturnPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderreturnpost) | **POST** /api/v1/Payments/invoice/order/return | can return invoice positions
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderTrackingInformationPost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceordertrackinginformationpost) | **POST** /api/v1/Payments/invoice/order/trackingInformation | reports tracking information for shippings
*PaymentsApi* | [**apiV1PaymentsInvoiceOrderUpdatePost**](docs/Api/PaymentsApi.md#apiv1paymentsinvoiceorderupdatepost) | **POST** /api/v1/Payments/invoice/order/update | Update an existing order.  Only possible, when no invoice is created yet.
*StaticContentApi* | [**apiV1StaticContentCreditcheckagreementGet**](docs/Api/StaticContentApi.md#apiv1staticcontentcreditcheckagreementget) | **GET** /api/v1/StaticContent/creditcheckagreement | returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case

## Models

- [AxytosApiEnumsOrderPaymentState](docs/Model/AxytosApiEnumsOrderPaymentState.md)
- [AxytosApiModelsAddressCreationModel](docs/Model/AxytosApiModelsAddressCreationModel.md)
- [AxytosApiModelsBankAccountCreationModel](docs/Model/AxytosApiModelsBankAccountCreationModel.md)
- [AxytosApiModelsCustomProductUsageModel](docs/Model/AxytosApiModelsCustomProductUsageModel.md)
- [AxytosApiModelsDebitorCreationModel](docs/Model/AxytosApiModelsDebitorCreationModel.md)
- [AxytosApiModelsErrorRequestModel](docs/Model/AxytosApiModelsErrorRequestModel.md)
- [AxytosApiModelsInvoiceCreationModel](docs/Model/AxytosApiModelsInvoiceCreationModel.md)
- [AxytosApiModelsInvoiceCreationResponse](docs/Model/AxytosApiModelsInvoiceCreationResponse.md)
- [AxytosApiModelsPaymentResponseModel](docs/Model/AxytosApiModelsPaymentResponseModel.md)
- [AxytosApiModelsPaymentStateResponseModel](docs/Model/AxytosApiModelsPaymentStateResponseModel.md)
- [AxytosApiModelsRefundRequestModel](docs/Model/AxytosApiModelsRefundRequestModel.md)
- [AxytosApiModelsReportShippingModel](docs/Model/AxytosApiModelsReportShippingModel.md)
- [AxytosApiModelsReturnRequestModel](docs/Model/AxytosApiModelsReturnRequestModel.md)
- [AxytosApiModelsShippingTrackingInformationRequestModel](docs/Model/AxytosApiModelsShippingTrackingInformationRequestModel.md)
- [AxytosApiModelsSubscriptionCreationModel](docs/Model/AxytosApiModelsSubscriptionCreationModel.md)
- [AxytosApiModelsUpdateOrderModel](docs/Model/AxytosApiModelsUpdateOrderModel.md)
- [AxytosCommonDebitorRegistrationCompany](docs/Model/AxytosCommonDebitorRegistrationCompany.md)
- [AxytosCommonDebitorRegistrationCustomerData](docs/Model/AxytosCommonDebitorRegistrationCustomerData.md)
- [AxytosCommonEnumsCustomerType](docs/Model/AxytosCommonEnumsCustomerType.md)
- [AxytosCommonEnumsPaymentType](docs/Model/AxytosCommonEnumsPaymentType.md)
- [AxytosCommonEnumsRiskTaker](docs/Model/AxytosCommonEnumsRiskTaker.md)
- [AxytosCommonModelsOrderRefundBasket](docs/Model/AxytosCommonModelsOrderRefundBasket.md)
- [AxytosCommonModelsOrderRefundBasketTaxGroup](docs/Model/AxytosCommonModelsOrderRefundBasketTaxGroup.md)
- [AxytosCommonModelsOrderRefundPositionModel](docs/Model/AxytosCommonModelsOrderRefundPositionModel.md)
- [AxytosCommonModelsOrderReturnPositionModel](docs/Model/AxytosCommonModelsOrderReturnPositionModel.md)
- [AxytosCommonPublicAPIEnumsCountryCode](docs/Model/AxytosCommonPublicAPIEnumsCountryCode.md)
- [AxytosCommonPublicAPIEnumsGender](docs/Model/AxytosCommonPublicAPIEnumsGender.md)
- [AxytosCommonPublicAPIEnumsPaymentControlRequestMode](docs/Model/AxytosCommonPublicAPIEnumsPaymentControlRequestMode.md)
- [AxytosCommonPublicAPIEnumsPaymentTypeSecurity](docs/Model/AxytosCommonPublicAPIEnumsPaymentTypeSecurity.md)
- [AxytosCommonPublicAPIEnumsProofOfInterest](docs/Model/AxytosCommonPublicAPIEnumsProofOfInterest.md)
- [AxytosCommonPublicAPIModelsCommonCompanyRequestModel](docs/Model/AxytosCommonPublicAPIModelsCommonCompanyRequestModel.md)
- [AxytosCommonPublicAPIModelsCommonCustomerDataRequestModel](docs/Model/AxytosCommonPublicAPIModelsCommonCustomerDataRequestModel.md)
- [AxytosCommonPublicAPIModelsCommonDeliveryAddress](docs/Model/AxytosCommonPublicAPIModelsCommonDeliveryAddress.md)
- [AxytosCommonPublicAPIModelsCommonInvoiceAddress](docs/Model/AxytosCommonPublicAPIModelsCommonInvoiceAddress.md)
- [AxytosCommonPublicAPIModelsInvoiceInvoiceBasket](docs/Model/AxytosCommonPublicAPIModelsInvoiceInvoiceBasket.md)
- [AxytosCommonPublicAPIModelsInvoiceInvoiceBasketPosition](docs/Model/AxytosCommonPublicAPIModelsInvoiceInvoiceBasketPosition.md)
- [AxytosCommonPublicAPIModelsInvoiceInvoiceBasketTaxGroup](docs/Model/AxytosCommonPublicAPIModelsInvoiceInvoiceBasketTaxGroup.md)
- [AxytosCommonPublicAPIModelsOrderBasket](docs/Model/AxytosCommonPublicAPIModelsOrderBasket.md)
- [AxytosCommonPublicAPIModelsOrderBasketPosition](docs/Model/AxytosCommonPublicAPIModelsOrderBasketPosition.md)
- [AxytosCommonPublicAPIModelsOrderOrderCreateRequest](docs/Model/AxytosCommonPublicAPIModelsOrderOrderCreateRequest.md)
- [AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest](docs/Model/AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest.md)
- [AxytosCommonPublicAPIModelsOrderShippingBasketPosition](docs/Model/AxytosCommonPublicAPIModelsOrderShippingBasketPosition.md)
- [AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse](docs/Model/AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse.md)
- [AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasket](docs/Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasket.md)
- [AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition](docs/Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition.md)
- [AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest](docs/Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest.md)
- [AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest](docs/Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest.md)
- [AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse](docs/Model/AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse.md)
- [AxytosCommonPublicAPITransactionTransactionMetadata](docs/Model/AxytosCommonPublicAPITransactionTransactionMetadata.md)
- [MicrosoftAspNetCoreMvcProblemDetails](docs/Model/MicrosoftAspNetCoreMvcProblemDetails.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
