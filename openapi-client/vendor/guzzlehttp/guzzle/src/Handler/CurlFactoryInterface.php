<?php

namespace Axytos\FinancialServices\GuzzleHttp\Handler;

use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
interface CurlFactoryInterface
{
    /**
     * Creates a cURL handle resource.
     *
     * @param RequestInterface $request Request
     * @param array            $options Transfer options
     *
     * @throws \RuntimeException when an option cannot be applied
     * @return \Axytos\FinancialServices\GuzzleHttp\Handler\EasyHandle
     */
    public function create($request, $options);
    /**
     * Release an easy handle, allowing it to be reused or closed.
     *
     * This function must call unset on the easy handle's "handle" property.
     * @param \Axytos\FinancialServices\GuzzleHttp\Handler\EasyHandle $easy
     * @return void
     */
    public function release($easy);
}
