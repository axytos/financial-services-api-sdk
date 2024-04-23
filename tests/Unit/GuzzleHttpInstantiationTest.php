<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class GuzzleHttpInstantiationTest extends TestCase
{
    /**
     * @dataProvider guzzleHttpClassNameProvider
     * @param string $className
     * @return void
     */
    #[DataProvider('guzzleHttpClassNameProvider')]
    public function testGuzzleHttpClassesCanBeConstructed($className)
    {
        $instance = new $className();

        $this->assertNotNull($instance);
    }

    /**
     * @return mixed[]
     */
    public static function guzzleHttpClassNameProvider()
    {
        return [
            ['Axytos\FinancialServices\GuzzleHttp\Client'],
            ['Axytos\FinancialServices\GuzzleHttp\HandlerStack'],
        ];
    }

    /**
     * @return void
     */
    public function test_GuzzleHttpClient_implements_scoped_interface()
    {
        $this->assertInstanceOf(
            \Axytos\FinancialServices\GuzzleHttp\ClientInterface::class,
            new \Axytos\FinancialServices\GuzzleHttp\Client()
        );
    }
}
