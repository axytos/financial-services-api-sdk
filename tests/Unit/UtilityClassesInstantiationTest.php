<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class UtilityClassesInstantiationTest extends TestCase
{
    /**
     * @dataProvider utilityClassNameProvider
     *
     * @param string $className
     *
     * @return void
     */
    #[DataProvider('utilityClassNameProvider')]
    public function test_utility_classes_can_be_constructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public static function utilityClassNameProvider()
    {
        return [
            ['Axytos\FinancialServices\OpenAPI\Client\ApiException'],
            ['Axytos\FinancialServices\OpenAPI\Client\Configuration'],
            ['Axytos\FinancialServices\OpenAPI\Client\HeaderSelector'],
            ['Axytos\FinancialServices\OpenAPI\Client\ObjectSerializer'],
        ];
    }
}
