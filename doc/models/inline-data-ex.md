
# Inline Data Ex

Input Reference is the name of the file, if you're request is from a type other than text, and it's required for most types. It has to contain the same name as the file attached in the request.

*This model accepts additional fields of type array.*

## Structure

`InlineDataEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mimeType` | `?string` | Optional | - | getMimeType(): ?string | setMimeType(?string mimeType): void |
| `data` | `?string` | Optional | - | getData(): ?string | setData(?string data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "mimeType": "mimeType0",
  "data": "data8",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

