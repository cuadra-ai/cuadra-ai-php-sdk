
# Paginated Response Ex List Model Ex

*This model accepts additional fields of type array.*

## Structure

`PaginatedResponseExListModelEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `page` | `?int` | Optional | - | getPage(): ?int | setPage(?int page): void |
| `size` | `?int` | Optional | - | getSize(): ?int | setSize(?int size): void |
| `data` | [`?(ModelEx[])`](../../doc/models/model-ex.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "page": 180,
  "size": 168,
  "data": [
    {
      "id": "id0",
      "name": "name0",
      "type": "type0",
      "description": "description0",
      "proprietary": false,
      "baseModel": "baseModel8",
      "baseModelId": "baseModelId4",
      "createdAt": "2016-03-13T12:52:32.123Z",
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    },
    {
      "id": "id0",
      "name": "name0",
      "type": "type0",
      "description": "description0",
      "proprietary": false,
      "baseModel": "baseModel8",
      "baseModelId": "baseModelId4",
      "createdAt": "2016-03-13T12:52:32.123Z",
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    }
  ],
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

