
# Total Usage Ex

*This model accepts additional fields of type array.*

## Structure

`TotalUsageEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalInput` | `?int` | Optional | Total Input Tokens used for this month | getTotalInput(): ?int | setTotalInput(?int totalInput): void |
| `totalOutput` | `?int` | Optional | Total Ouput Tokens used for this month | getTotalOutput(): ?int | setTotalOutput(?int totalOutput): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "totalInput": 12492,
  "totalOutput": 24381,
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

