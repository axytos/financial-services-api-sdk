<?php

namespace Axytos\FinancialServices\GuzzleHttp\Psr7;

use Axytos\FinancialServices\Psr\Http\Message\RequestFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\ServerRequestFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\StreamFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
use Axytos\FinancialServices\Psr\Http\Message\UploadedFileFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\UploadedFileInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriFactoryInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * Implements all of the PSR-17 interfaces.
 *
 * Note: in consuming code it is recommended to require the implemented interfaces
 * and inject the instance of this class multiple times.
 */
final class HttpFactory implements RequestFactoryInterface, ResponseFactoryInterface, ServerRequestFactoryInterface, StreamFactoryInterface, UploadedFileFactoryInterface, UriFactoryInterface
{
    /**
     * @param \Axytos\FinancialServices\Psr\Http\Message\StreamInterface $stream
     * @param int|null $size
     * @param int $error
     * @param string|null $clientFilename
     * @param string|null $clientMediaType
     * @return \Axytos\FinancialServices\Psr\Http\Message\UploadedFileInterface
     */
    public function createUploadedFile($stream, $size = null, $error = \UPLOAD_ERR_OK, $clientFilename = null, $clientMediaType = null)
    {
        if ($size === null) {
            $size = $stream->getSize();
        }
        return new UploadedFile($stream, $size, $error, $clientFilename, $clientMediaType);
    }
    /**
     * @param string $content
     * @return \Axytos\FinancialServices\Psr\Http\Message\StreamInterface
     */
    public function createStream($content = '')
    {
        return Utils::streamFor($content);
    }
    /**
     * @param string $file
     * @param string $mode
     * @return \Axytos\FinancialServices\Psr\Http\Message\StreamInterface
     */
    public function createStreamFromFile($file, $mode = 'r')
    {
        try {
            $resource = Utils::tryFopen($file, $mode);
        } catch (\RuntimeException $e) {
            if ('' === $mode || \false === \in_array($mode[0], ['r', 'w', 'a', 'x', 'c'], \true)) {
                throw new \InvalidArgumentException(\sprintf('Invalid file opening mode "%s"', $mode), 0, $e);
            }
            throw $e;
        }
        return Utils::streamFor($resource);
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\StreamInterface
     */
    public function createStreamFromResource($resource)
    {
        return Utils::streamFor($resource);
    }
    /**
     * @param string $method
     * @param mixed[] $serverParams
     * @return \Axytos\FinancialServices\Psr\Http\Message\ServerRequestInterface
     */
    public function createServerRequest($method, $uri, $serverParams = [])
    {
        if (empty($method)) {
            if (!empty($serverParams['REQUEST_METHOD'])) {
                $method = $serverParams['REQUEST_METHOD'];
            } else {
                throw new \InvalidArgumentException('Cannot determine HTTP method');
            }
        }
        return new ServerRequest($method, $uri, [], null, '1.1', $serverParams);
    }
    /**
     * @param int $code
     * @param string $reasonPhrase
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface
     */
    public function createResponse($code = 200, $reasonPhrase = '')
    {
        return new Response($code, [], null, '1.1', $reasonPhrase);
    }
    /**
     * @param string $method
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function createRequest($method, $uri)
    {
        return new Request($method, $uri);
    }
    /**
     * @param string $uri
     * @return \Axytos\FinancialServices\Psr\Http\Message\UriInterface
     */
    public function createUri($uri = '')
    {
        return new Uri($uri);
    }
}
