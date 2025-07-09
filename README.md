
# Getting Started with Cuadra AI

## Introduction

API Documentation

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "cuadra-ai/cuadra-ai-sdk:1.0.4"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "cuadra-ai/cuadra-ai-sdk": "1.0.4"
}
```

You can also view the package at:
https://packagist.org/packages/cuadra-ai/cuadra-ai-sdk#1.0.4

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `30` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| authorizationCodeAuth | [`AuthorizationCodeAuth`](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/auth/oauth-2-authorization-code-grant.md) | The Credentials Setter for OAuth 2 Authorization Code Grant |

The API client can be initialized as follows:

```php
use CuadraAiLib\Logging\LoggingConfigurationBuilder;
use CuadraAiLib\Logging\RequestLoggingConfigurationBuilder;
use CuadraAiLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use CuadraAiLib\Environment;
use CuadraAiLib\Authentication\AuthorizationCodeAuthCredentialsBuilder;
use CuadraAiLib\CuadraAiClientBuilder;

$client = CuadraAiClientBuilder::init()
    ->authorizationCodeAuthCredentials(
        AuthorizationCodeAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret',
            'OAuthRedirectUri'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`OAuth2 (OAuth 2 Authorization Code Grant)`](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/auth/oauth-2-authorization-code-grant.md)

## List of APIs

* [Chat](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/controllers/chat.md)
* [Models](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/controllers/models.md)
* [Embeds](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/controllers/embeds.md)
* [Usage](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/controllers/usage.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/proxy-configuration-builder.md)
* [LoggingConfigurationBuilder](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/logging-configuration-builder.md)
* [RequestLoggingConfigurationBuilder](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/request-logging-configuration-builder.md)
* [ResponseLoggingConfigurationBuilder](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/response-logging-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/http-request.md)

### Utilities

* [ApiResponse](https://www.github.com/cuadra-ai/cuadra-ai-php-sdk/tree/1.0.4/doc/api-response.md)

