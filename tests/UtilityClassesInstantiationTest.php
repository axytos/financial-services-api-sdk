<?php

declare(strict_types=1);

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class UtilityClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider utilityClassNameProvider
     */
    public function testUtilityClassesCanBeConstructed(string $className): void
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    public function utilityClassNameProvider(): array
    {
        return [
            ['Axytos\FinancialServices\OpenAPI\Client\ApiException'],
            ['Axytos\FinancialServices\OpenAPI\Client\Configuration'],
            ['Axytos\FinancialServices\OpenAPI\Client\HeaderSelector'],
            ['Axytos\FinancialServices\OpenAPI\Client\ObjectSerializer'],
        ];
    }
}
