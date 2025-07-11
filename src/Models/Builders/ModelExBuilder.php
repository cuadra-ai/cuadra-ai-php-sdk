<?php

declare(strict_types=1);

/*
 * CuadraAiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CuadraAiLib\Models\Builders;

use Core\Utils\CoreHelper;
use CuadraAiLib\Models\ModelEx;

/**
 * Builder for model ModelEx
 *
 * @see ModelEx
 */
class ModelExBuilder
{
    /**
     * @var ModelEx
     */
    private $instance;

    private function __construct(ModelEx $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Model Ex Builder object.
     *
     * @param string $name
     * @param string $type
     * @param string $description
     */
    public static function init(string $name, string $type, string $description): self
    {
        return new self(new ModelEx($name, $type, $description));
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets proprietary field.
     *
     * @param bool|null $value
     */
    public function proprietary(?bool $value): self
    {
        $this->instance->setProprietary($value);
        return $this;
    }

    /**
     * Sets base Model field.
     *
     * @param string|null $value
     */
    public function baseModel(?string $value): self
    {
        $this->instance->setBaseModel($value);
        return $this;
    }

    /**
     * Sets base Model Id field.
     *
     * @param string|null $value
     */
    public function baseModelId(?string $value): self
    {
        $this->instance->setBaseModelId($value);
        return $this;
    }

    /**
     * Sets created At field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated At field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Model Ex object.
     */
    public function build(): ModelEx
    {
        return CoreHelper::clone($this->instance);
    }
}
