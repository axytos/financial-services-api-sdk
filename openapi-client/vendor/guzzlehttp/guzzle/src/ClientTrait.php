<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\GuzzleHttp\Exception\GuzzleException;
use Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * Client interface for sending HTTP requests.
 * @internal
 */
trait ClientTrait
{
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
    public abstract function request($method, $uri, $options = []);
    /**
     * Create and send an HTTP GET request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function get($uri, $options = [])
    {
        return $this->request('GET', $uri, $options);
    }
    /**
     * Create and send an HTTP HEAD request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function head($uri, $options = [])
    {
        return $this->request('HEAD', $uri, $options);
    }
    /**
     * Create and send an HTTP PUT request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function put($uri, $options = [])
    {
        return $this->request('PUT', $uri, $options);
    }
    /**
     * Create and send an HTTP POST request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function post($uri, $options = [])
    {
        return $this->request('POST', $uri, $options);
    }
    /**
     * Create and send an HTTP PATCH request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function patch($uri, $options = [])
    {
        return $this->request('PATCH', $uri, $options);
    }
    /**
     * Create and send an HTTP DELETE request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     *
     * @throws GuzzleException
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function delete($uri, $options = [])
    {
        return $this->request('DELETE', $uri, $options);
    }
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
    public abstract function requestAsync($method, $uri, $options = []);
    /**
     * Create and send an asynchronous HTTP GET request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($uri, $options = [])
    {
        return $this->requestAsync('GET', $uri, $options);
    }
    /**
     * Create and send an asynchronous HTTP HEAD request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function headAsync($uri, $options = [])
    {
        return $this->requestAsync('HEAD', $uri, $options);
    }
    /**
     * Create and send an asynchronous HTTP PUT request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function putAsync($uri, $options = [])
    {
        return $this->requestAsync('PUT', $uri, $options);
    }
    /**
     * Create and send an asynchronous HTTP POST request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function postAsync($uri, $options = [])
    {
        return $this->requestAsync('POST', $uri, $options);
    }
    /**
     * Create and send an asynchronous HTTP PATCH request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function patchAsync($uri, $options = [])
    {
        return $this->requestAsync('PATCH', $uri, $options);
    }
    /**
     * Create and send an asynchronous HTTP DELETE request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string|UriInterface $uri     URI object or string.
     * @param array               $options Request options to apply.
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync($uri, $options = [])
    {
        return $this->requestAsync('DELETE', $uri, $options);
    }
}
