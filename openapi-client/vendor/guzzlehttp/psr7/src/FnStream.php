<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
/**
 * Compose stream implementations based on a hash of functions.
 *
 * Allows for easy testing and extension of a provided stream without needing
 * to create a concrete class for a simple extension point.
 */
#[\AllowDynamicProperties]
final class FnStream implements StreamInterface
{
    const SLOTS = ['__toString', 'close', 'detach', 'rewind', 'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write', 'isReadable', 'read', 'getContents', 'getMetadata'];
    /** @var array<string, callable> */
    private $methods;
    /**
     * @param array<string, callable> $methods Hash of method name to a callable.
     */
    public function __construct(array $methods)
    {
        $this->methods = $methods;
        // Create the functions on the class
        foreach ($methods as $name => $fn) {
            $this->{'_fn_' . $name} = $fn;
        }
    }
    /**
     * Lazily determine which methods are not implemented.
     *
     * @throws \BadMethodCallException
     * @return void
     * @param string $name
     */
    public function __get($name)
    {
        $name = (string) $name;
        throw new \BadMethodCallException(str_replace('_fn_', '', $name) . '() is not implemented in the FnStream');
    }
    /**
     * The close method is called on the underlying stream only if possible.
     */
    public function __destruct()
    {
        if (isset($this->_fn_close)) {
            call_user_func($this->_fn_close);
        }
    }
    /**
     * An unserialize would allow the __destruct to run when the unserialized value goes out of scope.
     *
     * @throws \LogicException
     * @return void
     */
    public function __wakeup()
    {
        throw new \LogicException('FnStream should never be unserialized');
    }
    /**
     * Adds custom functionality to an underlying stream by intercepting
     * specific method calls.
     *
     * @param StreamInterface         $stream  Stream to decorate
     * @param array<string, callable> $methods Hash of method name to a closure
     *
     * @return FnStream
     */
    public static function decorate($stream, $methods)
    {
        // If any of the required methods were not provided, then simply
        // proxy to the decorated stream.
        foreach (array_diff(self::SLOTS, array_keys($methods)) as $diff) {
            /** @var callable $callable */
            $callable = [$stream, $diff];
            $methods[$diff] = $callable;
        }
        return new self($methods);
    }
    /**
     * @return string
     */
    public function __toString()
    {
        try {
            /** @var string */
            return call_user_func($this->_fn___toString);
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), \E_USER_ERROR);
            return '';
        } catch (\Exception $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), \E_USER_ERROR);
            return '';
        }
    }
    /**
     * @return void
     */
    public function close()
    {
        call_user_func($this->_fn_close);
    }
    public function detach()
    {
        return call_user_func($this->_fn_detach);
    }
    /**
     * @return int|null
     */
    public function getSize()
    {
        return call_user_func($this->_fn_getSize);
    }
    /**
     * @return int
     */
    public function tell()
    {
        return call_user_func($this->_fn_tell);
    }
    /**
     * @return bool
     */
    public function eof()
    {
        return call_user_func($this->_fn_eof);
    }
    /**
     * @return bool
     */
    public function isSeekable()
    {
        return call_user_func($this->_fn_isSeekable);
    }
    /**
     * @return void
     */
    public function rewind()
    {
        call_user_func($this->_fn_rewind);
    }
    /**
     * @return void
     */
    public function seek($offset, $whence = \SEEK_SET)
    {
        call_user_func($this->_fn_seek, $offset, $whence);
    }
    /**
     * @return bool
     */
    public function isWritable()
    {
        return call_user_func($this->_fn_isWritable);
    }
    /**
     * @return int
     */
    public function write($string)
    {
        return call_user_func($this->_fn_write, $string);
    }
    /**
     * @return bool
     */
    public function isReadable()
    {
        return call_user_func($this->_fn_isReadable);
    }
    /**
     * @return string
     */
    public function read($length)
    {
        return call_user_func($this->_fn_read, $length);
    }
    /**
     * @return string
     */
    public function getContents()
    {
        return call_user_func($this->_fn_getContents);
    }
    /**
     * @return mixed
     */
    public function getMetadata($key = null)
    {
        return call_user_func($this->_fn_getMetadata, $key);
    }
}
