<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
/**
 * Provides a buffer stream that can be written to to fill a buffer, and read
 * from to remove bytes from the buffer.
 *
 * This stream returns a "hwm" metadata value that tells upstream consumers
 * what the configured high water mark of the stream is, or the maximum
 * preferred size of the buffer.
 * @internal
 */
final class BufferStream implements StreamInterface
{
    /** @var int */
    private $hwm;
    /** @var string */
    private $buffer = '';
    /**
     * @param int $hwm High water mark, representing the preferred maximum
     *                 buffer size. If the size of the buffer exceeds the high
     *                 water mark, then calls to write will continue to succeed
     *                 but will return 0 to inform writers to slow down
     *                 until the buffer has been drained by reading from it.
     */
    public function __construct($hwm = 16384)
    {
        $hwm = (int) $hwm;
        $this->hwm = $hwm;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getContents();
    }
    /**
     * @return string
     */
    public function getContents()
    {
        $buffer = $this->buffer;
        $this->buffer = '';
        return $buffer;
    }
    /**
     * @return void
     */
    public function close()
    {
        $this->buffer = '';
    }
    public function detach()
    {
        $this->close();
        return null;
    }
    /**
     * @return int|null
     */
    public function getSize()
    {
        return \strlen($this->buffer);
    }
    /**
     * @return bool
     */
    public function isReadable()
    {
        return \true;
    }
    /**
     * @return bool
     */
    public function isWritable()
    {
        return \true;
    }
    /**
     * @return bool
     */
    public function isSeekable()
    {
        return \false;
    }
    /**
     * @return void
     */
    public function rewind()
    {
        $this->seek(0);
    }
    /**
     * @return void
     */
    public function seek($offset, $whence = \SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a BufferStream');
    }
    /**
     * @return bool
     */
    public function eof()
    {
        return \strlen($this->buffer) === 0;
    }
    /**
     * @return int
     */
    public function tell()
    {
        throw new \RuntimeException('Cannot determine the position of a BufferStream');
    }
    /**
     * Reads data from the buffer.
     * @return string
     */
    public function read($length)
    {
        $currentLength = \strlen($this->buffer);
        if ($length >= $currentLength) {
            // No need to slice the buffer because we don't have enough data.
            $result = $this->buffer;
            $this->buffer = '';
        } else {
            // Slice up the result to provide a subset of the buffer.
            $result = \substr($this->buffer, 0, $length);
            $this->buffer = \substr($this->buffer, $length);
        }
        return $result;
    }
    /**
     * Writes data to the buffer.
     * @return int
     */
    public function write($string)
    {
        $this->buffer .= $string;
        if (\strlen($this->buffer) >= $this->hwm) {
            return 0;
        }
        return \strlen($string);
    }
    /**
     * @return mixed
     */
    public function getMetadata($key = null)
    {
        if ($key === 'hwm') {
            return $this->hwm;
        }
        return $key ? null : [];
    }
}
