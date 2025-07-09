
# Usage Ex

This is the token usage result of your request

*This model accepts additional fields of type array.*

## Structure

`UsageEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `billedTokens` | [`?TokensEx`](../../doc/models/tokens-ex.md) | Optional | Tokens used | getBilledTokens(): ?TokensEx | setBilledTokens(?TokensEx billedTokens): void |
| `usedTokens` | [`?TokensEx`](../../doc/models/tokens-ex.md) | Optional | Tokens used | getUsedTokens(): ?TokensEx | setUsedTokens(?TokensEx usedTokens): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
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
}
```

