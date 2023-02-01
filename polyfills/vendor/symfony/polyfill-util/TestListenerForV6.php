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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestListenerForV6 extends TestSuite implements TestListenerInterface
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
     */
    public function startTestSuite($suite)
    {
        $this->trait->startTestSuite($suite);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Exception $e
     */
    public function addError($test, $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \PHPUnit\Framework\Warning $e
     */
    public function addWarning($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \PHPUnit\Framework\AssertionFailedError $e
     */
    public function addFailure($test, $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Exception $e
     */
    public function addIncompleteTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Exception $e
     */
    public function addRiskyTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     * @param \Exception $e
     */
    public function addSkippedTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit\Framework\TestSuite $suite
     */
    public function endTestSuite($suite)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     */
    public function startTest($test)
    {
    }

    /**
     * @param \PHPUnit\Framework\Test $test
     */
    public function endTest($test, $time)
    {
    }

    public static function warning($message)
    {
        return parent::warning($message);
    }

    /**
     * @before
     */
    protected function beforeEach()
    {
        TestListenerTrait::$enabledPolyfills = $this->suite->getName();
    }

    protected function tearDown()
    {
        TestListenerTrait::$enabledPolyfills = false;
    }
}
