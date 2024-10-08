<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\GuzzleHttp\Exception\GuzzleException;
use Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * Client interface for sending HTTP requests.
 */
interface ClientInterface
{
    /**
     * The Guzzle major version.
     */
    const MAJOR_VERSION = 7;
    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function send($request, $options = []);
    /**
     * Asynchronously send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAsync($request, $options = []);
    /**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string              $method  HTTP method.
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function request($method, $uri, $options = []);
    /**
     * Create and send an asynchronous HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string              $method  HTTP method
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function requestAsync($method, $uri, $options = []);
    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
     *
     * @deprecated ClientInterface::getConfig will be removed in guzzlehttp/guzzle:8.0.
     */
    public function getConfig($option = null);
}
