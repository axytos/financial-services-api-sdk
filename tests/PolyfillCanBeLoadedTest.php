<?php

namespace Axytos\FinancialServices\Tests;

use PHPUnit\Framework\TestCase;

class PolyfillCanBeLoadedTest extends TestCase
{
    /**
     * @return void
     */
    public function test_random_bytes_is_polyfilled()
    {
        /**
         * this test should fail when executed with PHP 5.6 after:
         * - src/polyfills_include.php is removed from autoload-files
         * - composer dump-autoload is executed
         */
        $this->assertTrue(function_exists('random_bytes'), 'Polyfill for random_bytes could not be loaded.');
    }

    /**
     * @return void
     */
    public function test_Error_is_polyfilled()
    {
        /**
         * this test should fail when executed with PHP 5.6 after:
         * - src/polyfills_include.php is removed from autoload-files
         * - composer dump-autoload is executed
         */
        $this->assertTrue(class_exists('\Error'), 'Polyfill for Error could not be loaded.');
    }

    /**
     * @return void
     */
    public function test_TypeError_is_polyfilled()
    {
        /**
         * this test should fail when executed with PHP 5.6 after:
         * - src/polyfills_include.php is removed from autoload-files
         * - composer dump-autoload is executed
         */
        $this->assertTrue(class_exists('\TypeError'), 'Polyfill for TypeError could not be loaded.');
    }
}
