# Axytos\FinancialServicesAPI\Client\ErrorApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1ErrorReportPost()**](ErrorApi.md#apiV1ErrorReportPost) | **POST** /api/v1/Error/report | reports an error with the system.  for a better identification of the error, you can optionally provide a request-id.


## `apiV1ErrorReportPost()`

```php
apiV1ErrorReportPost($axytos_api_models_error_request_model)
```

reports an error with the system.  for a better identification of the error, you can optionally provide a request-id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\ErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$axytos_api_models_error_request_model = new \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsErrorRequestModel(); // \Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsErrorRequestModel

try {
    $apiInstance->apiV1ErrorReportPost($axytos_api_models_error_request_model);
} catch (Exception $e) {
    echo 'Exception when calling ErrorApi->apiV1ErrorReportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **axytos_api_models_error_request_model** | [**\Axytos\FinancialServicesAPI\Client\Model\AxytosApiModelsErrorRequestModel**](../Model/AxytosApiModelsErrorRequestModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
