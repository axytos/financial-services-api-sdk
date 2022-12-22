<?php

namespace Axytos\FinancialServices\GuzzleHttp\Handler;

use Axytos\FinancialServices\GuzzleHttp\Utils;
/**
 * @internal
 */
final class HeaderProcessor
{
    /**
     * Returns the HTTP version, status code, reason phrase, and headers.
     *
     * @param string[] $headers
     *
     * @throws \RuntimeException
     *
     * @return array{0:string, 1:int, 2:?string, 3:array}
     */
    public static function parseHeaders(array $headers)
    {
        if ($headers === []) {
            throw new \RuntimeException('Expected a non-empty array of header data');
        }
        $parts = \explode(' ', \array_shift($headers), 3);
        $version = isset(\explode('/', $parts[0])[1]) ? \explode('/', $parts[0])[1] : null;
        if ($version === null) {
            throw new \RuntimeException('HTTP version missing from header data');
        }
        $status = isset($parts[1]) ? $parts[1] : null;
        if ($status === null) {
            throw new \RuntimeException('HTTP status code missing from header data');
        }
        return [$version, (int) $status, isset($parts[2]) ? $parts[2] : null, Utils::headersFromLines($headers)];
    }
}
