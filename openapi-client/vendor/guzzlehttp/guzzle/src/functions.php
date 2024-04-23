<?php

namespace Axytos\FinancialServices\GuzzleHttp;

/**
 * Debug function used to describe the provided value type and class.
 *
 * @param mixed $input Any type of variable to describe the type of. This
 *                     parameter misses a typehint because of that.
 *
 * @return string Returns a string containing the type of the variable and
 *                if a class is provided, the class name.
 *
 * @deprecated describe_type will be removed in guzzlehttp/guzzle:8.0. Use Utils::describeType instead.
 * @internal
 */
function describe_type($input)
{
    return Utils::describeType($input);
}
/**
 * Parses an array of header lines into an associative array of headers.
 *
 * @param iterable $lines Header lines array of strings in the following
 *                        format: "Name: Value"
 *
 * @deprecated headers_from_lines will be removed in guzzlehttp/guzzle:8.0. Use Utils::headersFromLines instead.
 * @internal
 * @return mixed[]
 */
function headers_from_lines($lines)
{
    return Utils::headersFromLines($lines);
}
/**
 * Returns a debug stream based on the provided variable.
 *
 * @param mixed $value Optional value
 *
 * @return resource
 *
 * @deprecated debug_resource will be removed in guzzlehttp/guzzle:8.0. Use Utils::debugResource instead.
 * @internal
 */
function debug_resource($value = null)
{
    return Utils::debugResource($value);
}
/**
 * Chooses and creates a default handler to use based on the environment.
 *
 * The returned handler is not wrapped by any default middlewares.
 *
 * @throws \RuntimeException if no viable Handler is available.
 *
 * @return callable(\Psr\Http\Message\RequestInterface, array): \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface Returns the best handler for the given system.
 *
 * @deprecated choose_handler will be removed in guzzlehttp/guzzle:8.0. Use Utils::chooseHandler instead.
 * @internal
 */
function choose_handler()
{
    return Utils::chooseHandler();
}
/**
 * Get the default User-Agent string to use with Guzzle.
 *
 * @deprecated default_user_agent will be removed in guzzlehttp/guzzle:8.0. Use Utils::defaultUserAgent instead.
 * @internal
 * @return string
 */
function default_user_agent()
{
    return Utils::defaultUserAgent();
}
/**
 * Returns the default cacert bundle for the current system.
 *
 * First, the openssl.cafile and curl.cainfo php.ini settings are checked.
 * If those settings are not configured, then the common locations for
 * bundles found on Red Hat, CentOS, Fedora, Ubuntu, Debian, FreeBSD, OS X
 * and Windows are checked. If any of these file locations are found on
 * disk, they will be utilized.
 *
 * Note: the result of this function is cached for subsequent calls.
 *
 * @throws \RuntimeException if no bundle can be found.
 *
 * @deprecated default_ca_bundle will be removed in guzzlehttp/guzzle:8.0. This function is not needed in PHP 5.6+.
 * @internal
 * @return string
 */
function default_ca_bundle()
{
    return Utils::defaultCaBundle();
}
/**
 * Creates an associative array of lowercase header names to the actual
 * header casing.
 *
 * @deprecated normalize_header_keys will be removed in guzzlehttp/guzzle:8.0. Use Utils::normalizeHeaderKeys instead.
 * @internal
 * @return mixed[]
 */
function normalize_header_keys(array $headers)
{
    return Utils::normalizeHeaderKeys($headers);
}
/**
 * Returns true if the provided host matches any of the no proxy areas.
 *
 * This method will strip a port from the host if it is present. Each pattern
 * can be matched with an exact match (e.g., "foo.com" == "foo.com") or a
 * partial match: (e.g., "foo.com" == "baz.foo.com" and ".foo.com" ==
 * "baz.foo.com", but ".foo.com" != "foo.com").
 *
 * Areas are matched in the following cases:
 * 1. "*" (without quotes) always matches any hosts.
 * 2. An exact match.
 * 3. The area starts with "." and the area is the last part of the host. e.g.
 *    '.mit.edu' will match any host that ends with '.mit.edu'.
 *
 * @param string   $host         Host to check against the patterns.
 * @param string[] $noProxyArray An array of host patterns.
 *
 * @throws Exception\InvalidArgumentException
 *
 * @deprecated is_host_in_noproxy will be removed in guzzlehttp/guzzle:8.0. Use Utils::isHostInNoProxy instead.
 * @internal
 * @return bool
 */
function is_host_in_noproxy($host, array $noProxyArray)
{
    $host = (string) $host;
    return Utils::isHostInNoProxy($host, $noProxyArray);
}
/**
 * Wrapper for json_decode that throws when an error occurs.
 *
 * @param string $json    JSON data to parse
 * @param bool   $assoc   When true, returned objects will be converted
 *                        into associative arrays.
 * @param int    $depth   User specified recursion depth.
 * @param int    $options Bitmask of JSON decode options.
 *
 * @return object|array|string|int|float|bool|null
 *
 * @throws Exception\InvalidArgumentException if the JSON cannot be decoded.
 *
 * @link https://www.php.net/manual/en/function.json-decode.php
 * @deprecated json_decode will be removed in guzzlehttp/guzzle:8.0. Use Utils::jsonDecode instead.
 * @internal
 */
function json_decode($json, $assoc = \false, $depth = 512, $options = 0)
{
    $json = (string) $json;
    $assoc = (bool) $assoc;
    $depth = (int) $depth;
    $options = (int) $options;
    return Utils::jsonDecode($json, $assoc, $depth, $options);
}
/**
 * Wrapper for JSON encoding that throws when an error occurs.
 *
 * @param mixed $value   The value being encoded
 * @param int   $options JSON encode option bitmask
 * @param int   $depth   Set the maximum depth. Must be greater than zero.
 *
 * @throws Exception\InvalidArgumentException if the JSON cannot be encoded.
 *
 * @link https://www.php.net/manual/en/function.json-encode.php
 * @deprecated json_encode will be removed in guzzlehttp/guzzle:8.0. Use Utils::jsonEncode instead.
 * @internal
 * @return string
 */
function json_encode($value, $options = 0, $depth = 512)
{
    $options = (int) $options;
    $depth = (int) $depth;
    return Utils::jsonEncode($value, $options, $depth);
}
