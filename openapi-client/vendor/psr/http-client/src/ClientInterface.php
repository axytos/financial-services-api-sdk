<?php

namespace Axytos\FinancialServices\Psr\Http\Client;

use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
/** @internal */
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Axytos\FinancialServices\Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest($request);
}
