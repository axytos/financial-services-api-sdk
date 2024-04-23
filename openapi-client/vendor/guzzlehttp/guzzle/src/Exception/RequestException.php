<?php

namespace Axytos\FinancialServices\GuzzleHttp\Exception;

use Axytos\FinancialServices\GuzzleHttp\BodySummarizer;
use Axytos\FinancialServices\GuzzleHttp\BodySummarizerInterface;
use Axytos\FinancialServices\Psr\Http\Client\RequestExceptionInterface;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * HTTP Request exception
 * @internal
 */
class RequestException extends TransferException implements RequestExceptionInterface
{
    /**
     * @var RequestInterface
     */
    private $request;
    /**
     * @var ResponseInterface|null
     */
    private $response;
    /**
     * @var array
     */
    private $handlerContext;
    /**
     * @param string $message
     * @param \Throwable $previous
     */
    public function __construct($message, RequestInterface $request, ResponseInterface $response = null, $previous = null, array $handlerContext = [])
    {
        $message = (string) $message;
        // Set the code of the exception if the response is set and not future.
        $code = $response ? $response->getStatusCode() : 0;
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
        $this->handlerContext = $handlerContext;
    }
    /**
     * Wrap non-RequestExceptions with a RequestException
     * @param \Axytos\FinancialServices\Psr\Http\Message\RequestInterface $request
     * @param \Throwable $e
     * @return \Axytos\FinancialServices\GuzzleHttp\Exception\RequestException
     */
    public static function wrapException($request, $e)
    {
        return $e instanceof RequestException ? $e : new RequestException($e->getMessage(), $request, null, $e);
    }
    /**
     * Factory method to create a new exception with a normalized error message
     *
     * @param RequestInterface             $request        Request sent
     * @param \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface|null $response Response received
     * @param \Throwable|null              $previous       Previous exception
     * @param array                        $handlerContext Optional handler context
     * @param BodySummarizerInterface|null $bodySummarizer Optional body summarizer
     * @return $this
     */
    public static function create($request, $response = null, $previous = null, $handlerContext = [], $bodySummarizer = null)
    {
        if (!$response) {
            return new self('Error completing request', $request, null, $previous, $handlerContext);
        }
        $level = (int) \floor($response->getStatusCode() / 100);
        if ($level === 4) {
            $label = 'Client error';
            $className = ClientException::class;
        } elseif ($level === 5) {
            $label = 'Server error';
            $className = ServerException::class;
        } else {
            $label = 'Unsuccessful request';
            $className = __CLASS__;
        }
        $uri = $request->getUri();
        $uri = static::obfuscateUri($uri);
        // Client Error: `GET /` resulted in a `404 Not Found` response:
        // <html> ... (truncated)
        $message = \sprintf('%s: `%s %s` resulted in a `%s %s` response', $label, $request->getMethod(), $uri->__toString(), $response->getStatusCode(), $response->getReasonPhrase());
        $bodySummarizer = isset($bodySummarizer) ? $bodySummarizer : new BodySummarizer(); $summary = $bodySummarizer->summarize($response);
        if ($summary !== null) {
            $message .= ":\n{$summary}\n";
        }
        return new $className($message, $request, $response, $previous, $handlerContext);
    }
    /**
     * Obfuscates URI if there is a username and a password present
     * @return \Axytos\FinancialServices\Psr\Http\Message\UriInterface
     */
    private static function obfuscateUri(UriInterface $uri)
    {
        $userInfo = $uri->getUserInfo();
        if (\false !== ($pos = \strpos($userInfo, ':'))) {
            return $uri->withUserInfo(\substr($userInfo, 0, $pos), '***');
        }
        return $uri;
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
     * Get the associated response
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * Check if a response was received
     * @return bool
     */
    public function hasResponse()
    {
        return $this->response !== null;
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
