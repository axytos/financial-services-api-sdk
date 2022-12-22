<?php

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class ApiClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider apiClassNameProvider
     * @param string $className
     * @return void
     */
    public function testApiClassesCanBeConstructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @dataProvider apiClassNameProvider
     * @param string $className
     * @return void
     */
    public function test_scoped_GuzzleHttp_client_can_be_injected($className)
    {
        $client = new \Axytos\FinancialServices\GuzzleHttp\Client();
        $instance = new $className($client);

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public function apiClassNameProvider()
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
