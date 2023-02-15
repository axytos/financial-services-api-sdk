<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\TestCase;

class UtilityClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider utilityClassNameProvider
     * @param string $className
     * @return void
     */
    public function testUtilityClassesCanBeConstructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public function utilityClassNameProvider()
    {
        return [
            ['Axytos\FinancialServices\OpenAPI\Client\ApiException'],
            ['Axytos\FinancialServices\OpenAPI\Client\Configuration'],
            ['Axytos\FinancialServices\OpenAPI\Client\HeaderSelector'],
            ['Axytos\FinancialServices\OpenAPI\Client\ObjectSerializer'],
        ];
    }
}
