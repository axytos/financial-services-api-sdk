<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\Psr\Http\Message\MessageInterface;
interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message) : ?string;
}
