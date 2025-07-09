
# Embed Response Ex

*This model accepts additional fields of type array.*

## Structure

`EmbedResponseEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Embed id | getId(): ?string | setId(?string id): void |
| `usage` | [`?UsageEx`](../../doc/models/usage-ex.md) | Optional | This is the token usage result of your request | getUsage(): ?UsageEx | setUsage(?UsageEx usage): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "id": "bd39e814-159d-4024-8e83-14025070ef77",
  "usage": {
    "billedTokens": {
      "inputTokens": 156,
      "outputTokens": 240,
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    },
    "usedTokens": {
      "inputTokens": 58,
      "outputTokens": 142,
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    },
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

