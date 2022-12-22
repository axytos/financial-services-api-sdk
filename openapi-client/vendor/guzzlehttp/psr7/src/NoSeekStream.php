<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
/**
 * Stream decorator that prevents a stream from being seeked.
 */
final class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;
    /** @var StreamInterface */
    private $stream;
    /**
     * @return void
     */
    public function seek($offset, $whence = \SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }
    /**
     * @return bool
     */
    public function isSeekable()
    {
        return \false;
    }
}
