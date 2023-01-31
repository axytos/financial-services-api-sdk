<?php

namespace Axytos\FinancialServices\GuzzleHttp\Handler;

use Axytos\FinancialServices\GuzzleHttp\Exception\RequestException;
use Axytos\FinancialServices\GuzzleHttp\HandlerStack;
use Axytos\FinancialServices\GuzzleHttp\Promise as P;
use Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface;
use Axytos\FinancialServices\GuzzleHttp\TransferStats;
use Axytos\FinancialServices\GuzzleHttp\Utils;
use Axytos\FinancialServices\Psr\Http\Message\RequestInterface;
use Axytos\FinancialServices\Psr\Http\Message\ResponseInterface;
use Axytos\FinancialServices\Psr\Http\Message\StreamInterface;
/**
 * Handler that returns responses or throw exceptions from a queue.
 *
 * @final
 */
class MockHandler implements \Countable
{
    /**
     * @var array
     */
    private $queue = [];
    /**
     * @var RequestInterface|null
     */
    private $lastRequest;
    /**
     * @var array
     */
    private $lastOptions = [];
    /**
     * @var callable|null
     */
    private $onFulfilled;
    /**
     * @var callable|null
     */
    private $onRejected;
    /**
     * Creates a new MockHandler that uses the default handler stack list of
     * middlewares.
     *
     * @param array|null    $queue       Array of responses, callables, or exceptions.
     * @param callable|null $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null $onRejected  Callback to invoke when the return value is rejected.
     * @return \Axytos\FinancialServices\GuzzleHttp\HandlerStack
     */
    public static function createWithMiddleware($queue = null, $onFulfilled = null, $onRejected = null)
    {
        return HandlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }
    /**
     * The passed in value must be an array of
     * {@see \Axytos\FinancialServices\Psr\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array<int, mixed>|null $queue       The parameters to be passed to the append function, as an indexed array.
     * @param callable|null          $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null          $onRejected  Callback to invoke when the return value is rejected.
     */
    public function __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
    {
        $this->onFulfilled = $onFulfilled;
        $this->onRejected = $onRejected;
        if ($queue) {
            // array_values included for BC
            $this->append(...\array_values($queue));
        }
    }
    /**
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options)
    {
        if (!$this->queue) {
            throw new \OutOfBoundsException('Mock queue is empty');
        }
        if (isset($options['delay']) && \is_numeric($options['delay'])) {
            \usleep((int) $options['delay'] * 1000);
        }
        $this->lastRequest = $request;
        $this->lastOptions = $options;
        $response = \array_shift($this->queue);
        if (isset($options['on_headers'])) {
            if (!\is_callable($options['on_headers'])) {
                throw new \InvalidArgumentException('on_headers must be callable');
            }
            try {
                $options['on_headers']($response);
            } catch (\Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $response = new RequestException($msg, $request, $response, $e);
            }
        }
        if (\is_callable($response)) {
            $response = $response($request, $options);
        }
        $response = ($throwable = $response) instanceof \Throwable || $throwable instanceof \Exception ? P\Create::rejectionFor($response) : P\Create::promiseFor($response);
        return $response->then(function ($value) use($request, $options) {
            $this->invokeStats($request, $options, $value);
            if ($this->onFulfilled) {
                call_user_func($this->onFulfilled, $value);
            }
            if ($value !== null && isset($options['sink'])) {
                $contents = (string) $value->getBody();
                $sink = $options['sink'];
                if (\is_resource($sink)) {
                    \fwrite($sink, $contents);
                } elseif (\is_string($sink)) {
                    \file_put_contents($sink, $contents);
                } elseif ($sink instanceof StreamInterface) {
                    $sink->write($contents);
                }
            }
            return $value;
        }, function ($reason) use($request, $options) {
            $this->invokeStats($request, $options, null, $reason);
            if ($this->onRejected) {
                call_user_func($this->onRejected, $reason);
            }
            return P\Create::rejectionFor($reason);
        });
    }
    /**
     * Adds one or more variadic requests, exceptions, callables, or promises
     * to the queue.
     *
     * @param mixed ...$values
     * @return void
     */
    public function append(...$values)
    {
        foreach ($values as $value) {
            if ($value instanceof ResponseInterface || (($throwable = $value) instanceof \Throwable || $throwable instanceof \Exception) || $value instanceof PromiseInterface || \is_callable($value)) {
                $this->queue[] = $value;
            } else {
                throw new \TypeError('Expected a Response, Promise, Throwable or callable. Found ' . Utils::describeType($value));
            }
        }
    }
    /**
     * Get the last received request.
     * @return \Axytos\FinancialServices\Psr\Http\Message\RequestInterface|null
     */
    public function getLastRequest()
    {
        return $this->lastRequest;
    }
    /**
     * Get the last received request options.
     * @return mixed[]
     */
    public function getLastOptions()
    {
        return $this->lastOptions;
    }
    /**
     * Returns the number of remaining items in the queue.
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return \count($this->queue);
    }
    /**
     * @return void
     */
    public function reset()
    {
        $this->queue = [];
    }
    /**
     * @param mixed $reason Promise or reason.
     * @return void
     */
    private function invokeStats(RequestInterface $request, array $options, ResponseInterface $response = null, $reason = null)
    {
        if (isset($options['on_stats'])) {
            $transferTime = isset($options['transfer_time']) ? $options['transfer_time'] : 0;
            $stats = new TransferStats($request, $response, $transferTime, $reason);
            $options['on_stats']($stats);
        }
    }
}
