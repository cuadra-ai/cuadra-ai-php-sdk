
# Chat

*This model accepts additional fields of type array.*

## Structure

`Chat`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `model` | `string` | Required | Model name<br><br>**Constraints**: *Maximum Length*: `50` | getModel(): string | setModel(string model): void |
| `content` | [`ContentEx[]`](../../doc/models/content-ex.md) | Required | Request content | getContent(): array | setContent(array content): void |
| `chatId` | `?string` | Optional | If you want to keep context between request, otherwise leave it empty, you get one with every chat you create. | getChatId(): ?string | setChatId(?string chatId): void |
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
  "chatId": "chatId2",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

