# Usage

Estimate you're request usage, and access to your current usage data.

```php
$usageController = $client->getUsageController();
```

## Class Name

`UsageController`

## Methods

* [Calculate Tokens](../../doc/controllers/usage.md#calculate-tokens)
* [Total Usage](../../doc/controllers/usage.md#total-usage)


# Calculate Tokens

This endpoint allows you to calculate the usage, so you get an idea of the amount of tokens that will be consumed.

```php
function calculateTokens(Chat $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Chat`](../../doc/models/chat.md) | Body, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`UsageCalculationEx`](../../doc/models/usage-calculation-ex.md).

## Example Usage

```php
$body = ChatBuilder::init(
    'ive.legal.1.1.0',
    [
        ContentExBuilder::init(
            'Guide me on creating a legal document for x.'
        )->build()
    ]
)->build();

$apiResponse = $usageController->calculateTokens($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |


# Total Usage

This endpoint calculates the amount of tokens used by the user in the given month.

```php
function totalUsage(): ApiResponse
```

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`TotalUsageEx`](../../doc/models/total-usage-ex.md).

## Example Usage

```php
$apiResponse = $usageController->totalUsage();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |

