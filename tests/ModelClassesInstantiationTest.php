<?php

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class ModelClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider modelClassNameProvider
     * @param string $className
     * @return void
     */
    public function testModelClassesCanBeConstructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public function modelClassNameProvider()
    {
        return [
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiEnumsOrderPaymentState'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsAddressCreationModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsBankAccountCreationModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsCustomProductUsageModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsDebitorCreationModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsErrorRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsInvoiceCreationModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsInvoiceCreationResponse'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsPaymentResponseModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsPaymentStateResponseModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsRefundRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsReportShippingModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsReturnRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsShippingTrackingInformationRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsSubscriptionCreationModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosApiModelsUpdateOrderModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonDebitorCompany'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonDebitorCustomerData'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsCustomerType'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsPaymentType'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonEnumsRiskTaker'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundBasket'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundBasketTaxGroup'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderRefundPositionModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonModelsOrderReturnPositionModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsCountryCode'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsGender'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsPaymentControlRequestMode'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsPaymentTypeSecurity'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIEnumsProofOfInterest'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsCommonCompanyRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsCommonCustomerDataRequestModel'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsCommonDeliveryAddress'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsCommonInvoiceAddress'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsInvoiceInvoiceBasket'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsInvoiceInvoiceBasketPosition'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsInvoiceInvoiceBasketTaxGroup'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsOrderBasket'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsOrderBasketPosition'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderCreateRequest'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsOrderOrderPreCheckRequest'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsOrderShippingBasketPosition'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlOrderPrecheckResponse'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasket'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlBasketPosition'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPITransactionTransactionMetadata'],
            ['Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails'],
        ];
    }
}
