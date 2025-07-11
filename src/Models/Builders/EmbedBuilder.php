<?php

declare(strict_types=1);

/*
 * CuadraAiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CuadraAiLib\Models\Builders;

use Core\Utils\CoreHelper;
use CuadraAiLib\Models\ContentEx;
use CuadraAiLib\Models\Embed;

/**
 * Builder for model Embed
 *
 * @see Embed
 */
class EmbedBuilder
{
    /**
     * @var Embed
     */
    private $instance;

    private function __construct(Embed $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Embed Builder object.
     *
     * @param string $model
     * @param ContentEx[] $content
     * @param string $purpose
     */
    public static function init(string $model, array $content, string $purpose): self
    {
        return new self(new Embed($model, $content, $purpose));
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
     * Initializes a new Embed object.
     */
    public function build(): Embed
    {
        return CoreHelper::clone($this->instance);
    }
}
