<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\Psr\Http\Message\MessageInterface;
/** @internal */
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     * @param \Axytos\FinancialServices\Psr\Http\Message\MessageInterface $message
     * @return string|null
     */
    public function summarize($message);
}
