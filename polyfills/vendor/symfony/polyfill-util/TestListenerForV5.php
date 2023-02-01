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

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TestListenerForV5 extends \PHPUnit_Framework_TestSuite implements \PHPUnit_Framework_TestListener
{
    private $suite;
    private $trait;

    public function __construct(\PHPUnit_Framework_TestSuite $suite = null)
    {
        if ($suite) {
            $this->suite = $suite;
            $this->setName($suite->getName().' with polyfills enabled');
            $this->addTest($suite);
        }
        $this->trait = new TestListenerTrait();
    }

    /**
     * @param \PHPUnit_Framework_TestSuite $suite
     */
    public function startTestSuite($suite)
    {
        $this->trait->startTestSuite($suite);
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \Exception $e
     */
    public function addError($test, $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \PHPUnit_Framework_Warning $e
     */
    public function addWarning($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \PHPUnit_Framework_AssertionFailedError $e
     */
    public function addFailure($test, $e, $time)
    {
        $this->trait->addError($test, $e, $time);
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \Exception $e
     */
    public function addIncompleteTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \Exception $e
     */
    public function addRiskyTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     * @param \Exception $e
     */
    public function addSkippedTest($test, $e, $time)
    {
    }

    /**
     * @param \PHPUnit_Framework_TestSuite $suite
     */
    public function endTestSuite($suite)
    {
    }

    /**
     * @param \PHPUnit_Framework_Test $test
     */
    public function startTest($test)
    {
    }

    /**
     * @param \PHPUnit_Framework_Test $test
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
