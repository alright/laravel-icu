<?php

declare(strict_types=1);

namespace Alright\Laravel\Translation;

use Illuminate\Contracts\Container\Container;
use Illuminate\Validation\Factory;

class ValidationFactory extends Factory
{
    public function __construct(Translator $translator, ?Container $container = null)
    {
        $this->container = $container;
        $this->translator = $translator;
    }
}
