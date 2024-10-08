<?php

namespace Axytos\FinancialServices\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
class ComposerLockFilesExistTest extends TestCase
{
    /**
     * @return void
     */
    public function test_openapi_client_composer_lock_file_exists()
    {
        $this->assertTrue(file_exists(__DIR__ . '/../../openapi-client/composer.lock'));
    }

    /**
     * @return void
     */
    public function test_polyfills_composer_lock_file_exists()
    {
        $this->assertTrue(file_exists(__DIR__ . '/../../polyfills/composer.lock'));
    }
}
