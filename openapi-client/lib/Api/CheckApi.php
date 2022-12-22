<?php

/**
 * CheckApi
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
 * CheckApi Class Doc Comment
 *
 * @category Class
 * @package Axytos\FinancialServices\OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckApi
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
     * Operation apiV1CheckRiskPaymentcontrolCheckPost
     *
     * checks which payment types can be offered safely
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest $axytos_common_public_api_models_payment_control_payment_control_request axytos_common_public_api_models_payment_control_payment_control_request (optional)
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails
     */
    public function apiV1CheckRiskPaymentcontrolCheckPost($axytos_common_public_api_models_payment_control_payment_control_request = null)
    {
        list($response) = $this->apiV1CheckRiskPaymentcontrolCheckPostWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_request);
        return $response;
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolCheckPostWithHttpInfo
     *
     * checks which payment types can be offered safely
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest $axytos_common_public_api_models_payment_control_payment_control_request (optional)
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails|\Axytos\FinancialServices\OpenAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1CheckRiskPaymentcontrolCheckPostWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_request = null)
    {
        $request = $this->apiV1CheckRiskPaymentcontrolCheckPostRequest($axytos_common_public_api_models_payment_control_payment_control_request);
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
                throw new ApiException(\sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }
            switch ($statusCode) {
                case 200:
                    if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse' === '\\SplFileObject') {
                        $content = $response->getBody();
                        //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse' !== 'string') {
                            $content = \json_decode($content);
                        }
                    }
                    return [ObjectSerializer::deserialize($content, 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse', []), $response->getStatusCode(), $response->getHeaders()];
                case 400:
                    if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' === '\\SplFileObject') {
                        $content = $response->getBody();
                        //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' !== 'string') {
                            $content = \json_decode($content);
                        }
                    }
                    return [ObjectSerializer::deserialize($content, 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', []), $response->getStatusCode(), $response->getHeaders()];
                case 401:
                    if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' === '\\SplFileObject') {
                        $content = $response->getBody();
                        //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' !== 'string') {
                            $content = \json_decode($content);
                        }
                    }
                    return [ObjectSerializer::deserialize($content, 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', []), $response->getStatusCode(), $response->getHeaders()];
                case 403:
                    if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' === '\\SplFileObject') {
                        $content = $response->getBody();
                        //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\\Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails' !== 'string') {
                            $content = \json_decode($content);
                        }
                    }
                    return [ObjectSerializer::deserialize($content, 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', []), $response->getStatusCode(), $response->getHeaders()];
            }
            $returnType = 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse';
            if ($returnType === '\\SplFileObject') {
                $content = $response->getBody();
                //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = \json_decode($content);
                }
            }
            return [ObjectSerializer::deserialize($content, $returnType, []), $response->getStatusCode(), $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolCheckPostAsync
     *
     * checks which payment types can be offered safely
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest $axytos_common_public_api_models_payment_control_payment_control_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CheckRiskPaymentcontrolCheckPostAsync($axytos_common_public_api_models_payment_control_payment_control_request = null)
    {
        return $this->apiV1CheckRiskPaymentcontrolCheckPostAsyncWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_request)->then(function ($response) {
            return $response[0];
        });
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolCheckPostAsyncWithHttpInfo
     *
     * checks which payment types can be offered safely
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest $axytos_common_public_api_models_payment_control_payment_control_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CheckRiskPaymentcontrolCheckPostAsyncWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_request = null)
    {
        $returnType = 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\AxytosCommonPublicAPIModelsPaymentControlPaymentControlResponse';
        $request = $this->apiV1CheckRiskPaymentcontrolCheckPostRequest($axytos_common_public_api_models_payment_control_payment_control_request);
        return $this->client->sendAsync($request, $this->createHttpClientOption())->then(function ($response) use ($returnType) {
            if ($returnType === '\\SplFileObject') {
                $content = $response->getBody();
                //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = \json_decode($content);
                }
            }
            return [ObjectSerializer::deserialize($content, $returnType, []), $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(\sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
        });
    }
    /**
     * Create request for operation 'apiV1CheckRiskPaymentcontrolCheckPost'
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlRequest $axytos_common_public_api_models_payment_control_payment_control_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Psr7\Request
     */
    public function apiV1CheckRiskPaymentcontrolCheckPostRequest($axytos_common_public_api_models_payment_control_payment_control_request = null)
    {
        $resourcePath = '/api/v1/Check/risk/paymentcontrol/check';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = \false;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(['text/plain', 'application/json', 'text/json']);
        } else {
            $headers = $this->headerSelector->selectHeaders(['text/plain', 'application/json', 'text/json'], ['application/json-patch+json', 'application/json', 'text/json', 'application/*+json']);
        }
        // for model (json/xml)
        if (isset($axytos_common_public_api_models_payment_control_payment_control_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \Axytos\FinancialServices\GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($axytos_common_public_api_models_payment_control_payment_control_request));
            } else {
                $httpBody = $axytos_common_public_api_models_payment_control_payment_control_request;
            }
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];
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
        $headers = \array_merge($defaultHeaders, $headerParams, $headers);
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request('POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody);
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolConfirmPost
     *
     * confirms payment without order creation
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest $axytos_common_public_api_models_payment_control_payment_control_confirm_request axytos_common_public_api_models_payment_control_payment_control_confirm_request (optional)
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1CheckRiskPaymentcontrolConfirmPost($axytos_common_public_api_models_payment_control_payment_control_confirm_request = null)
    {
        $this->apiV1CheckRiskPaymentcontrolConfirmPostWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_confirm_request);
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolConfirmPostWithHttpInfo
     *
     * confirms payment without order creation
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest $axytos_common_public_api_models_payment_control_payment_control_confirm_request (optional)
     *
     * @throws \Axytos\FinancialServices\OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1CheckRiskPaymentcontrolConfirmPostWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_confirm_request = null)
    {
        $request = $this->apiV1CheckRiskPaymentcontrolConfirmPostRequest($axytos_common_public_api_models_payment_control_payment_control_confirm_request);
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
                throw new ApiException(\sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'Axytos\\FinancialServices\\OpenAPI\\Client\\Model\\MicrosoftAspNetCoreMvcProblemDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolConfirmPostAsync
     *
     * confirms payment without order creation
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest $axytos_common_public_api_models_payment_control_payment_control_confirm_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CheckRiskPaymentcontrolConfirmPostAsync($axytos_common_public_api_models_payment_control_payment_control_confirm_request = null)
    {
        return $this->apiV1CheckRiskPaymentcontrolConfirmPostAsyncWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_confirm_request)->then(function ($response) {
            return $response[0];
        });
    }
    /**
     * Operation apiV1CheckRiskPaymentcontrolConfirmPostAsyncWithHttpInfo
     *
     * confirms payment without order creation
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest $axytos_common_public_api_models_payment_control_payment_control_confirm_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CheckRiskPaymentcontrolConfirmPostAsyncWithHttpInfo($axytos_common_public_api_models_payment_control_payment_control_confirm_request = null)
    {
        $returnType = '';
        $request = $this->apiV1CheckRiskPaymentcontrolConfirmPostRequest($axytos_common_public_api_models_payment_control_payment_control_confirm_request);
        return $this->client->sendAsync($request, $this->createHttpClientOption())->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(\sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
        });
    }
    /**
     * Create request for operation 'apiV1CheckRiskPaymentcontrolConfirmPost'
     *
     * @param  \Axytos\FinancialServices\OpenAPI\Client\Model\AxytosCommonPublicAPIModelsPaymentControlPaymentControlConfirmRequest $axytos_common_public_api_models_payment_control_payment_control_confirm_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \Axytos\FinancialServices\GuzzleHttp\Psr7\Request
     */
    public function apiV1CheckRiskPaymentcontrolConfirmPostRequest($axytos_common_public_api_models_payment_control_payment_control_confirm_request = null)
    {
        $resourcePath = '/api/v1/Check/risk/paymentcontrol/confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = \false;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(['text/plain', 'application/json', 'text/json']);
        } else {
            $headers = $this->headerSelector->selectHeaders(['text/plain', 'application/json', 'text/json'], ['application/json-patch+json', 'application/json', 'text/json', 'application/*+json']);
        }
        // for model (json/xml)
        if (isset($axytos_common_public_api_models_payment_control_payment_control_confirm_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \Axytos\FinancialServices\GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($axytos_common_public_api_models_payment_control_payment_control_confirm_request));
            } else {
                $httpBody = $axytos_common_public_api_models_payment_control_payment_control_confirm_request;
            }
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];
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
        $headers = \array_merge($defaultHeaders, $headerParams, $headers);
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request('POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody);
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
            $options[RequestOptions::DEBUG] = \fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }
        return $options;
    }
}
