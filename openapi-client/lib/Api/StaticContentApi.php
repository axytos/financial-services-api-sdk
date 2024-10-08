<?php

/**
 * StaticContentApi
 * PHP version 7.4
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Axytos API
 *
 * Note: Please provide proper values in \"Try it out\". See schemas and endpoint description for possible values. <br/>DateTimes should always be provided in UTC and with the timezone attached, see ISO-8601 (example: 2021-10-13T20:00:30Z)
 *
 * The version of the OpenAPI document: v1
 * Contact:
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace Axytos\FinancialServices\OpenAPI\Client\Api;

use Axytos\FinancialServices\GuzzleHttp\Client;
use Axytos\FinancialServices\GuzzleHttp\ClientInterface;
use Axytos\FinancialServices\GuzzleHttp\Exception\ConnectException;
use Axytos\FinancialServices\GuzzleHttp\Exception\RequestException;
use Axytos\FinancialServices\GuzzleHttp\Psr7\MultipartStream;
use Axytos\FinancialServices\GuzzleHttp\Psr7\Request;
use Axytos\FinancialServices\GuzzleHttp\RequestOptions;
use Axytos\FinancialServices\OpenAPI\Client\ApiException;
use Axytos\FinancialServices\OpenAPI\Client\Configuration;
use Axytos\FinancialServices\OpenAPI\Client\HeaderSelector;
use Axytos\FinancialServices\OpenAPI\Client\ObjectSerializer;
/**
 * StaticContentApi Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StaticContentApi
{
    /**
     * @var ClientInterface
     */
    protected $client;
    /**
     * @var Configuration
     */
    protected $config;
    /**
     * @var HeaderSelector
     */
    protected $headerSelector;
    /**
     * @var int Host index
     */
    protected $hostIndex;
    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null, $hostIndex = 0)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }
    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     * @return void
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }
    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }
    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation apiV1StaticContentCreditcheckagreementGet
     *
     * returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case
     *
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1StaticContentCreditcheckagreementGet()
    {
        $this->apiV1StaticContentCreditcheckagreementGetWithHttpInfo();
    }
    /**
     * Operation apiV1StaticContentCreditcheckagreementGetWithHttpInfo
     *
     * returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case
     *
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1StaticContentCreditcheckagreementGetWithHttpInfo()
    {
        $request = $this->apiV1StaticContentCreditcheckagreementGetRequest();
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            } catch (ConnectException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null);
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation apiV1StaticContentCreditcheckagreementGetAsync
     *
     * returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case
     *
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1StaticContentCreditcheckagreementGetAsync()
    {
        return $this->apiV1StaticContentCreditcheckagreementGetAsyncWithHttpInfo()->then(function ($response) {
            return $response[0];
        });
    }
    /**
     * Operation apiV1StaticContentCreditcheckagreementGetAsyncWithHttpInfo
     *
     * returns a partial html snippet containing the credit check agreement that has to be confirmed by the customer before each business case
     *
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1StaticContentCreditcheckagreementGetAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->apiV1StaticContentCreditcheckagreementGetRequest();
        return $this->client->sendAsync($request, $this->createHttpClientOption())->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
        });
    }
    /**
     * Create request for operation 'apiV1StaticContentCreditcheckagreementGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Psr7\Request
     */
    public function apiV1StaticContentCreditcheckagreementGetRequest()
    {
        $resourcePath = '/api/v1/StaticContent/creditcheckagreement';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = \false;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart([]);
        } else {
            $headers = $this->headerSelector->selectHeaders([], []);
        }
        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = ['name' => $formParamName, 'contents' => $formParamValueItem];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \Axytos\FinancialServices\GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge($defaultHeaders, $headerParams, $headers);
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request('GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody);
    }
    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }
        return $options;
    }
}
