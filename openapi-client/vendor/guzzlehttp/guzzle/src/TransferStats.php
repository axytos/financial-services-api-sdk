<?php

namespace Axytos\FinancialServices\GuzzleHttp;

use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\UriInterface;
/**
 * Represents data at the point after it was transferred either successfully
 * or after a network error.
 */
final class TransferStats
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
     * @var float|null
     */
    private $transferTime;
    /**
     * @var array
     */
    private $handlerStats;
    /**
     * @var mixed|null
     */
    private $handlerErrorData;
    /**
     * @param RequestInterface       $request          Request that was sent.
     * @param ResponseInterface|null $response         Response received (if any)
     * @param float|null             $transferTime     Total handler transfer time.
     * @param mixed                  $handlerErrorData Handler error data.
     * @param array                  $handlerStats     Handler specific stats.
     */
    public function __construct(RequestInterface $request, $response = null, $transferTime = null, $handlerErrorData = null, array $handlerStats = [])
    {
        $this->request = $request;
        $this->response = $response;
        $this->transferTime = $transferTime;
        $this->handlerErrorData = $handlerErrorData;
        $this->handlerStats = $handlerStats;
    }
    /**
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Returns the response that was received (if any).
     * @return \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * Returns true if a response was received.
     * @return bool
     */
    public function hasResponse()
    {
        return $this->response !== null;
    }
    /**
     * Gets handler specific error data.
     *
     * This might be an exception, a integer representing an error code, or
     * anything else. Relying on this value assumes that you know what handler
     * you are using.
     *
     * @return mixed
     */
    public function getHandlerErrorData()
    {
        return $this->handlerErrorData;
    }
    /**
     * Get the effective URI the request was sent to.
     * @return \Axytos\FinancialServices\Psr\Http\Message\UriInterface
     */
    public function getEffectiveUri()
    {
        return $this->request->getUri();
    }
    /**
     * Get the estimated time the request was being transferred by the handler.
     *
     * @return float|null Time in seconds.
     */
    public function getTransferTime()
    {
        return $this->transferTime;
    }
    /**
     * Gets an array of all of the handler specific transfer data.
     * @return mixed[]
     */
    public function getHandlerStats()
    {
        return $this->handlerStats;
    }
    /**
     * Get a specific handler statistic from the handler by name.
     *
     * @param string $stat Handler specific transfer stat to retrieve.
     *
     * @return mixed|null
     */
    public function getHandlerStat($stat)
    {
        $stat = (string) $stat;
        return isset($this->handlerStats[$stat]) ? $this->handlerStats[$stat] : null;
    }
}
