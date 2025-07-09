
# Error Response Exception

Standard error response format for Cuadra AI

*This model accepts additional fields of type array.*

## Structure

`ErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | A message describing the error | getMessage(): ?string | setMessage(?string message): void |
| `status` | `?int` | Optional | HTTP status code | getStatus(): ?int | setStatus(?int status): void |
| `fieldErrors` | `?array<string,?string>` | Optional | Optional: Field-specific validation errors | getFieldErrors(): ?array | setFieldErrors(?array fieldErrors): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "message": "Incorrect request",
  "status": 400,
  "field_errors": {
    "model": "model cannot be null",
    "user_id": "must not be blank"
  },
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

