<?php

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class RalouphieGetAllHeadersTest extends TestCase
{
    /**
     * @return void
     */
    public function test_getallheaders_function_exists()
    {
        $this->assertTrue(function_exists('\Axytos\FinancialServices\getallheaders'));
    }

    /**
     * @return void
     */
    public function test_getallheaders_function_can_be_called()
    {
        $this->assertTrue(is_array(\Axytos\FinancialServices\getallheaders()));
    }
}
