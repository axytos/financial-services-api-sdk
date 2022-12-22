<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\Psr\Http\Message\MessageInterface;
final class BodySummarizer implements BodySummarizerInterface
{
    /**
     * @var int|null
     */
    private $truncateAt;
    /**
     * @param int $truncateAt
     */
    public function __construct($truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }
    /**
     * Returns a summarized message body.
     * @param \Axytos\FinancialServices\Psr\Http\Message\MessageInterface $message
     * @return string|null
     */
    public function summarize($message)
    {
        return $this->truncateAt === null ? \Axytos\FinancialServices\GuzzleHttp\Psr7\Message::bodySummary($message) : \Axytos\FinancialServices\GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
