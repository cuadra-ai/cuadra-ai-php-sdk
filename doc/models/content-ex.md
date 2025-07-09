
# Content Ex

Request content

*This model accepts additional fields of type array.*

## Structure

`ContentEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `text` | `string` | Required | Text is the task you want the AI to solve. | getText(): string | setText(string text): void |
| `inlineData` | [`?InlineDataEx`](../../doc/models/inline-data-ex.md) | Optional | Input Reference is the name of the file, if you're request is from a type other than text, and it's required for most types. It has to contain the same name as the file attached in the request. | getInlineData(): ?InlineDataEx | setInlineData(?InlineDataEx inlineData): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
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
```

