<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class GuzzleHttpInstantiationTest extends TestCase
{
    /**
     * @dataProvider guzzleHttpClassNameProvider
     *
     * @param string $className
     *
     * @return void
     */
    #[DataProvider('guzzleHttpClassNameProvider')]
    public function test_guzzle_http_classes_can_be_constructed($className)
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
    public function test_guzzle_http_client_implements_scoped_interface()
    {
        $this->assertInstanceOf(
            \Axytos\FinancialServices\GuzzleHttp\ClientInterface::class,
            new \Axytos\FinancialServices\GuzzleHttp\Client()
        );
    }
}
