<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
 */
#[\AllowDynamicProperties]
final class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;
    /** @var string */
    private $filename;
    /** @var string */
    private $mode;
    /**
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct($filename, $mode)
    {
        $filename = (string) $filename;
        $mode = (string) $mode;
        $this->filename = $filename;
        $this->mode = $mode;
    }
    /**
     * Creates the underlying stream lazily when required.
     * @return \Axytos\FinancialServices\Psr\Http\Message\StreamInterface
     */
    protected function createStream()
    {
        return Utils::streamFor(Utils::tryFopen($this->filename, $this->mode));
    }
}
