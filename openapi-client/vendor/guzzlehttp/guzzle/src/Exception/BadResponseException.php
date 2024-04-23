<?php

namespace Axytos\FinancialServices\GuzzleHttp\Exception;

use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
/**
 * Exception when an HTTP error occurs (4xx or 5xx error)
 * @internal
 */
class BadResponseException extends RequestException
{
    /**
     * @param string $message
     * @param \Throwable $previous
     */
    public function __construct($message, RequestInterface $request, ResponseInterface $response, $previous = null, array $handlerContext = [])
    {
        $message = (string) $message;
        parent::__construct($message, $request, $response, $previous, $handlerContext);
    }
    /**
     * Current exception and the ones that extend it will always have a response.
     * @return bool
     */
    public function hasResponse()
    {
        return \true;
    }
    /**
     * This function narrows the return type from the parent class and does not allow it to be nullable.
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface|null
     */
    public function getResponse()
    {
        /** @var ResponseInterface */
        return parent::getResponse();
    }
}
