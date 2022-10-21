<?php

declare(strict_types=1);

namespace Alright\Laravel\Translation;

use Illuminate\Validation\Factory;

class ValidationFactory extends Factory
{
    public function __construct(Translator $translator, \Illuminate\Foundation\Application $container = null)
    {
        $this->container = $container;
        $this->translator = $translator;
    }
}
