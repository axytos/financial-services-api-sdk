<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class ApiClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider apiClassNameProvider
     *
     * @param string $className
     *
     * @return void
     */
    #[DataProvider('apiClassNameProvider')]
    public function test_api_classes_can_be_constructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @dataProvider apiClassNameProvider
     *
     * @param string $className
     *
     * @return void
     */
    #[DataProvider('apiClassNameProvider')]
    public function test_scoped_guzzle_http_client_can_be_injected($className)
    {
        $client = new \Axytos\FinancialServices\GuzzleHttp\Client();
        $instance = new $className($client);

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public static function apiClassNameProvider()
    {
        return [
            ['Axytos\FinancialServices\OpenAPI\Client\Api\CheckApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\CredentialsApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\CustomerDataApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\CustomProductApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\DebitorApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\ErrorApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\PaymentApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\PaymentsApi'],
            ['Axytos\FinancialServices\OpenAPI\Client\Api\StaticContentApi'],
        ];
    }
}
