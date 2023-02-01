<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Polyfill\Util;

use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener as TestListenerInterface;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\Warning;
use PHPUnit\Framework\WarningTestCase;

/**
 * @author Ion Bazan <ion.bazan@gmail.com>
 */
class TestListenerForV7 extends TestSuite implements TestListenerInterface
{
    private $suite;
    private $trait;

    public function __construct(TestSuite $suite = null)
    {
        if ($suite) {
            $this->suite = $suite;
            $this->setName($suite->getName().' with polyfills enabled');
            $this->addTest($suite);
        }
        $this->trait = new TestListenerTrait();
    }

    /**
     * @param \PHPUnit\Framework\TestSuite $suite
     * @return void
     */
    public function startTestSuite($suite)
    {
        $this->trait->startTestSuite($suite);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Throwable $t
     * @param float $time
     * @return void
     */
    public function addError($test, $t, $time)
    {
        $this->trait->addError($test, $t, $time);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \PHPUnit\Framework\Warning $e
     * @param float $time
     * @return void
     */
    public function addWarning($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \PHPUnit\Framework\AssertionFailedError $e
     * @param float $time
     * @return void
     */
    public function addFailure($test, $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Throwable $t
     * @param float $time
     * @return void
     */
    public function addIncompleteTest($test, $t, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Throwable $t
     * @param float $time
     * @return void
     */
    public function addRiskyTest($test, $t, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Throwable $t
     * @param float $time
     * @return void
     */
    public function addSkippedTest($test, $t, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\TestSuite $suite
     * @return void
     */
    public function endTestSuite($suite)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @return void
     */
    public function startTest($test)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param float $time
     * @return void
     */
    public function endTest($test, $time)
    {
    }

    /**
     * @return \PHPUnit\Framework\WarningTestCase
     */
    public static function warning($message)
    {
        return new WarningTestCase($message);
    }

    /**
     * @return void
     * @before
     */
    protected function beforeEach()
    {
        TestListenerTrait::$enabledPolyfills = $this->suite->getName();
    }

    /**
     * @return void
     */
    protected function tearDown()
    {
        TestListenerTrait::$enabledPolyfills = false;
    }
}
