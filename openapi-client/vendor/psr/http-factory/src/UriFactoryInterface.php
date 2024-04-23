<?php

namespace Axytos\FinancialServices\Psr\Http\Message;

/** @internal */
interface UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri($uri = '');
}
