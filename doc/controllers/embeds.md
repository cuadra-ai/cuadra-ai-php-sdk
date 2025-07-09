# Embeds

Feed your custom models with relevant information.

```php
$embedsController = $client->getEmbedsController();
```

## Class Name

`EmbedsController`


# Embed

This endpoint creates a new embed for training your custom AI Models.

```php
function embed(Embed $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Embed`](../../doc/models/embed.md) | Body, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`EmbedResponseEx`](../../doc/models/embed-response-ex.md).

## Example Usage

```php
$body = EmbedBuilder::init(
    'ive.legal.1.1.0',
    [
        ContentExBuilder::init(
            'Guide me on creating a legal document for x.'
        )->build()
    ],
    'classification'
)->build();

$apiResponse = $embedsController->embed($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |

