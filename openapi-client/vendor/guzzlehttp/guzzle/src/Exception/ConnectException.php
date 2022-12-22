<?php

namespace Axytos\FinancialServices\GuzzleHttp\Exception;

use Axytos\FinancialServices\Psr\Http\Client\NetworkExceptionInterface;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
/**
 * Exception thrown when a connection cannot be established.
 *
 * Note that no response is present for a ConnectException
 */
class ConnectException extends TransferException implements NetworkExceptionInterface
{
    /**
     * @var RequestInterface
     */
    private $request;
    /**
     * @var array
     */
    private $handlerContext;
    /**
     * @param string $message
     * @param \Throwable $previous
     */
    public function __construct($message, RequestInterface $request, $previous = null, array $handlerContext = [])
    {
        $message = (string) $message;
        parent::__construct($message, 0, $previous);
        $this->request = $request;
        $this->handlerContext = $handlerContext;
    }
    /**
     * Get the request that caused the exception
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Get contextual information about the error from the underlying handler.
     *
     * The contents of this array will vary depending on which handler you are
     * using. It may also be just an empty array. Relying on this data will
     * couple you to a specific handler, but can give more debug information
     * when needed.
     * @return mixed[]
     */
    public function getHandlerContext()
    {
        return $this->handlerContext;
    }
}
