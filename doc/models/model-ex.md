
# Model Ex

*This model accepts additional fields of type array.*

## Structure

`ModelEx`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Model Id | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | Model name | getName(): string | setName(string name): void |
| `type` | `string` | Required | Model type of content generation and processing | getType(): string | setType(string type): void |
| `description` | `string` | Required | Brief description of the model | getDescription(): string | setDescription(string description): void |
| `proprietary` | `?bool` | Optional | Indicates whether is a custom model created by you or not | getProprietary(): ?bool | setProprietary(?bool proprietary): void |
| `baseModel` | `?string` | Optional | Base model name, if it was created from another model | getBaseModel(): ?string | setBaseModel(?string baseModel): void |
| `baseModelId` | `?string` | Optional | Base model id, if it was created from another model | getBaseModelId(): ?string | setBaseModelId(?string baseModelId): void |
| `createdAt` | `?DateTime` | Optional | Creation date | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Last time it was updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example (as JSON)

```json
{
  "id": "72dfb4f5-27dc-40e2-9278-b0de30e8b131",
  "name": "ive.legal.1.1.0",
  "type": "multimedia",
  "description": "Oura-Legal is our next-generation AI model designed for powerful, intelligent, and adaptable legal purposes.",
  "proprietary": false,
  "baseModel": "ive.legal.1.1.0",
  "baseModelId": "baseModelId8",
  "createdAt": "2016-03-13T12:52:32.123Z",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

