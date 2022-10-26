<?php

declare(strict_types=1);

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class GuzzleHttpInstantiationTest extends TestCase
{
    /**
     * @dataProvider guzzleHttpClassNameProvider
     */
    public function testGuzzleHttpClassesCanBeConstructed(string $className): void
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    public function guzzleHttpClassNameProvider(): array
    {
        return [
            ['Axytos\FinancialServices\GuzzleHttp\Client'],
            ['Axytos\FinancialServices\GuzzleHttp\HandlerStack'],
        ];
    }

    public function test_GuzzleHttpClient_implements_scoped_interface(): void
    {
        $this->assertInstanceOf(
            \Axytos\FinancialServices\GuzzleHttp\ClientInterface::class,
            new \Axytos\FinancialServices\GuzzleHttp\Client()
        );
    }
}
