# Axytos\FinancialServicesAPI\Client\CustomerDataApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CustomerDataUploadCustomerDataPost()**](CustomerDataApi.md#apiV1CustomerDataUploadCustomerDataPost) | **POST** /api/v1/CustomerData/uploadCustomerData | Upload a CSV file containing customer data with this endpoint.


## `apiV1CustomerDataUploadCustomerDataPost()`

```php
apiV1CustomerDataUploadCustomerDataPost($file)
```

Upload a CSV file containing customer data with this endpoint.

* Content Type: multipart/form-data (see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST)  * single part \"file\":    * SupportedMimeTypes: text/csv    * fileName: optional      * maxLengthOfFileName: 150 chars    * fileContent: required      * maxFileSize: 28MB (currently, may be extended if necessary)      * CSV Content Encoding: UTF-8      * CSV ColumnSeparator: ';'      * CSV LineSeparator: '\\n', '\\r' or \"\\r\\n\" (no ';' at the end of a line)      * requiredColumns: \"active\", \"customerId1\", \"country\"      * country: 2-letter ISO-3166 Code. Currently only the following countries are supported: DE, AT, CH, BE, FR, IT, NL. For customers in other countries contact your project manager      * datetime values should be provided in ISO-8601 UTC, for example \"2020-01-23T08:04:12Z\".      * other columns: see Excel documentation transmitted to your project manager

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Axytos\FinancialServicesAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Axytos\FinancialServicesAPI\Client\Api\CustomerDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->apiV1CustomerDataUploadCustomerDataPost($file);
} catch (Exception $e) {
    echo 'Exception when calling CustomerDataApi->apiV1CustomerDataUploadCustomerDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
