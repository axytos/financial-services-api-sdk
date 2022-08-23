<?php
/**
 * CustomProductApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Axytos\FinancialServicesAPI\Client
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

namespace Axytos\FinancialServicesAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Axytos\FinancialServicesAPI\Client\ApiException;
use Axytos\FinancialServicesAPI\Client\Configuration;
use Axytos\FinancialServicesAPI\Client\HeaderSelector;
use Axytos\FinancialServicesAPI\Client\ObjectSerializer;

/**
 * CustomProductApi Class Doc Comment
 *
 * @category Class
 * @package  Axytos\FinancialServicesAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomProductApi
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
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
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
     * Operation apiV1CustomProductReportusagePost
     *
     * Tracks the usage of a custom (creditor-managed) product for a given debitor
     *
     * @param  \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel $axytos_api_models_custom_product_usage_model axytos_api_models_custom_product_usage_model (optional)
     *
     * @throws \Axytos\FinancialServicesAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1CustomProductReportusagePost($axytos_api_models_custom_product_usage_model = null)
    {
        $this->apiV1CustomProductReportusagePostWithHttpInfo($axytos_api_models_custom_product_usage_model);
    }

    /**
     * Operation apiV1CustomProductReportusagePostWithHttpInfo
     *
     * Tracks the usage of a custom (creditor-managed) product for a given debitor
     *
     * @param  \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel $axytos_api_models_custom_product_usage_model (optional)
     *
     * @throws \Axytos\FinancialServicesAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1CustomProductReportusagePostWithHttpInfo($axytos_api_models_custom_product_usage_model = null)
    {
        $request = $this->apiV1CustomProductReportusagePostRequest($axytos_api_models_custom_product_usage_model);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Axytos\FinancialServicesAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Axytos\FinancialServicesAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Axytos\FinancialServicesAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Axytos\FinancialServicesAPI\Client\Model\MicrosoftAspNetCoreMvcProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1CustomProductReportusagePostAsync
     *
     * Tracks the usage of a custom (creditor-managed) product for a given debitor
     *
     * @param  \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel $axytos_api_models_custom_product_usage_model (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CustomProductReportusagePostAsync($axytos_api_models_custom_product_usage_model = null)
    {
        return $this->apiV1CustomProductReportusagePostAsyncWithHttpInfo($axytos_api_models_custom_product_usage_model)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1CustomProductReportusagePostAsyncWithHttpInfo
     *
     * Tracks the usage of a custom (creditor-managed) product for a given debitor
     *
     * @param  \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel $axytos_api_models_custom_product_usage_model (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1CustomProductReportusagePostAsyncWithHttpInfo($axytos_api_models_custom_product_usage_model = null)
    {
        $returnType = '';
        $request = $this->apiV1CustomProductReportusagePostRequest($axytos_api_models_custom_product_usage_model);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1CustomProductReportusagePost'
     *
     * @param  \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsCustomProductUsageModel $axytos_api_models_custom_product_usage_model (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1CustomProductReportusagePostRequest($axytos_api_models_custom_product_usage_model = null)
    {

        $resourcePath = '/api/v1/CustomProduct/reportusage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/*+json']
            );
        }

        // for model (json/xml)
        if (isset($axytos_api_models_custom_product_usage_model)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($axytos_api_models_custom_product_usage_model));
            } else {
                $httpBody = $axytos_api_models_custom_product_usage_model;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

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

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
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
