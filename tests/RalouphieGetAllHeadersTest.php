<?php

declare(strict_types=1);

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class RalouphieGetAllHeadersTest extends TestCase
{
    public function test_getallheaders_function_exists(): void
    {
        $this->assertTrue(function_exists('\Axytos\FinancialServices\getallheaders'));
    }

    public function test_getallheaders_function_can_be_called(): void
    {
        $this->assertIsArray(\Axytos\FinancialServices\getallheaders());
    }
}
