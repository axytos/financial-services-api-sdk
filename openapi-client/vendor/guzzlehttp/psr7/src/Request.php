<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use InvalidArgumentException;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * PSR-7 request implementation.
 * @internal
 */
class Request implements RequestInterface
{
    use MessageTrait;
    /** @var string */
    private $method;
    /** @var string|null */
    private $requestTarget;
    /** @var UriInterface */
    private $uri;
    /**
     * @param string                               $method  HTTP method
     * @param string|UriInterface                  $uri     URI
     * @param (string|string[])[]                  $headers Request headers
     * @param string|resource|StreamInterface|null $body    Request body
     * @param string                               $version Protocol version
     */
    public function __construct($method, $uri, array $headers = [], $body = null, $version = '1.1')
    {
        $method = (string) $method;
        $version = (string) $version;
        $this->assertMethod($method);
        if (!$uri instanceof UriInterface) {
            $uri = new Uri($uri);
        }
        $this->method = \strtoupper($method);
        $this->uri = $uri;
        $this->setHeaders($headers);
        $this->protocol = $version;
        if (!isset($this->headerNames['host'])) {
            $this->updateHostFromUri();
        }
        if ($body !== '' && $body !== null) {
            $this->stream = Utils::streamFor($body);
        }
    }
    /**
     * @return string
     */
    public function getRequestTarget()
    {
        if ($this->requestTarget !== null) {
            return $this->requestTarget;
        }
        $target = $this->uri->getPath();
        if ($target === '') {
            $target = '/';
        }
        if ($this->uri->getQuery() != '') {
            $target .= '?' . $this->uri->getQuery();
        }
        return $target;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function withRequestTarget($requestTarget)
    {
        if (\preg_match('#\\s#', $requestTarget)) {
            throw new InvalidArgumentException('Invalid request target provided; cannot contain whitespace');
        }
        $new = clone $this;
        $new->requestTarget = $requestTarget;
        return $new;
    }
    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function withMethod($method)
    {
        $this->assertMethod($method);
        $new = clone $this;
        $new->method = \strtoupper($method);
        return $new;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\UriInterface
     */
    public function getUri()
    {
        return $this->uri;
    }
    /**
     * @param \Axytos\FinancialServices\Psr\Http\Message\UriInterface $uri
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function withUri($uri, $preserveHost = \false)
    {
        if ($uri === $this->uri) {
            return $this;
        }
        $new = clone $this;
        $new->uri = $uri;
        if (!$preserveHost || !isset($this->headerNames['host'])) {
            $new->updateHostFromUri();
        }
        return $new;
    }
    /**
     * @return void
     */
    private function updateHostFromUri()
    {
        $host = $this->uri->getHost();
        if ($host == '') {
            return;
        }
        if (($port = $this->uri->getPort()) !== null) {
            $host .= ':' . $port;
        }
        if (isset($this->headerNames['host'])) {
            $header = $this->headerNames['host'];
        } else {
            $header = 'Host';
            $this->headerNames['host'] = 'Host';
        }
        // Ensure Host is the first header.
        // See: https://datatracker.ietf.org/doc/html/rfc7230#section-5.4
        $this->headers = [$header => [$host]] + $this->headers;
    }
    /**
     * @param mixed $method
     * @return void
     */
    private function assertMethod($method)
    {
        if (!\is_string($method) || $method === '') {
            throw new InvalidArgumentException('Method must be a non-empty string.');
        }
    }
}
