
# Embed

*This model accepts additional fields of type array.*

## Structure

`Embed`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `model` | `string` | Required | Model name<br><br>**Constraints**: *Maximum Length*: `50` | getModel(): string | setModel(string model): void |
| `content` | [`ContentEx[]`](../../doc/models/content-ex.md) | Required | Request content | getContent(): array | setContent(array content): void |
| `purpose` | `string` | Required | The purpose of the embed, it could be 'search_document', 'search_query', 'classification', o 'clustering'.<br><br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `search_document\|search_query\|classification\|clustering` | getPurpose(): string | setPurpose(string purpose): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "model": "ive.legal.1.1.0",
  "content": [
    {
      "text": "Guide me on creating a legal document for x.",
      "inlineData": {
        "mimeType": "mimeType8",
        "data": "data6",
        "exampleAdditionalProperty": {
          "key1": "val1",
          "key2": "val2"
        }
      },
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    }
  ],
  "purpose": "classification",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

