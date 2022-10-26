<?php

declare(strict_types=1);

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class ApiClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider apiClassNameProvider
     */
    public function testApiClassesCanBeConstructed(string $className): void
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @dataProvider apiClassNameProvider
     */
    public function test_scoped_GuzzleHttp_client_can_be_injected(string $className): void
    {
        $client = new \Axytos\FinancialServices\GuzzleHttp\Client();
        $instance = new $className($client);

        $this->assertNotNull($instance);
    }

    public function apiClassNameProvider(): array
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
