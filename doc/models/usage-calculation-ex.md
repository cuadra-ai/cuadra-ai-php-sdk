
# Usage Calculation Ex

*This model accepts additional fields of type array.*

## Structure

`UsageCalculationEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `estimatedTokens` | `?int` | Optional | Estimated tokens for your request | getEstimatedTokens(): ?int | setEstimatedTokens(?int estimatedTokens): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "estimatedTokens": 482,
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

