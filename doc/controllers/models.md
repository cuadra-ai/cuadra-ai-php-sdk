# Models

Create your own custom model, train it and use it!

```php
$modelsController = $client->getModelsController();
```

## Class Name

`ModelsController`

## Methods

* [Get Models](../../doc/controllers/models.md#get-models)
* [Create Model](../../doc/controllers/models.md#create-model)
* [Get Model](../../doc/controllers/models.md#get-model)
* [Remove Model](../../doc/controllers/models.md#remove-model)
* [Update Model](../../doc/controllers/models.md#update-model)


# Get Models

This endpoint display all of our AI models.

```php
function getModels(?int $page = null, ?int $size = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | - |
| `size` | `?int` | Query, Optional | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`PaginatedResponseExListModelEx`](../../doc/models/paginated-response-ex-list-model-ex.md).

## Example Usage

```php
$apiResponse = $modelsController->getModels();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |


# Create Model

This endpoint creates a new custom Model for you to train and use.

```php
function createModel(ModelEx $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ModelEx`](../../doc/models/model-ex.md) | Body, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ModelEx`](../../doc/models/model-ex.md).

## Example Usage

```php
$body = ModelExBuilder::init(
    'ive.legal.1.1.0',
    'multimedia',
    'Oura-Legal is our next-generation AI model designed for powerful, intelligent, and adaptable legal purposes.'
)
    ->id('72dfb4f5-27dc-40e2-9278-b0de30e8b131')
    ->proprietary(false)
    ->baseModel('ive.legal.1.1.0')
    ->build();

$apiResponse = $modelsController->createModel($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |


# Get Model

This endpoint shows you information about a particular model given an id.

```php
function getModel(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ModelEx`](../../doc/models/model-ex.md).

## Example Usage

```php
$id = 'id0';

$apiResponse = $modelsController->getModel($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |


# Remove Model

This endpoint removes a custom model you created.

```php
function removeModel(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ModelEx`](../../doc/models/model-ex.md).

## Example Usage

```php
$id = 'id0';

$apiResponse = $modelsController->removeModel($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |


# Update Model

This endpoint updates a custom model you created.

```php
function updateModel(string $id, ModelEx $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `body` | [`ModelEx`](../../doc/models/model-ex.md) | Body, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ModelEx`](../../doc/models/model-ex.md).

## Example Usage

```php
$id = 'id0';

$body = ModelExBuilder::init(
    'ive.legal.1.1.0',
    'multimedia',
    'Oura-Legal is our next-generation AI model designed for powerful, intelligent, and adaptable legal purposes.'
)
    ->id('72dfb4f5-27dc-40e2-9278-b0de30e8b131')
    ->proprietary(false)
    ->baseModel('ive.legal.1.1.0')
    ->build();

$apiResponse = $modelsController->updateModel(
    $id,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request, read again our documentation or contact support for guidance. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 401 | Not authorized, check our OAuth2 doc. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |
| 500 | Internal error, if this error persist, please contact support. | [`ErrorResponseException`](../../doc/models/error-response-exception.md) |

