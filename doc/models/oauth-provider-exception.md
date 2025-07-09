
# Oauth Provider Exception

OAuth 2 Authorization endpoint exception.

*This model accepts additional fields of type array.*

## Structure

`OauthProviderException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | [`string(OauthProviderError)`](../../doc/models/oauth-provider-error.md) | Required | Gets or sets error code. | getError(): string | setError(string error): void |
| `errorDescription` | `?string` | Optional | Gets or sets human-readable text providing additional information on error.<br>Used to assist the client developer in understanding the error that occurred. | getErrorDescription(): ?string | setErrorDescription(?string errorDescription): void |
| `errorUri` | `?string` | Optional | Gets or sets a URI identifying a human-readable web page with information about the error, used to provide the client developer with additional information about the error. | getErrorUri(): ?string | setErrorUri(?string errorUri): void |
| `additionalProperties` | `array<string, array\|null>` | Optional | - | findAdditionalProperty(string key): array\|null | additionalProperty(string key, array\|null value): void |

## Example (as JSON)

```json
{
  "error": "unsupported_grant_type",
  "error_description": "error_description8",
  "error_uri": "error_uri8",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

