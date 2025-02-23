<?php

declare(strict_types=1);

use Alright\Laravel\Translation\TranslationServiceProvider;
use Alright\Laravel\Translation\ValidationServiceProvider;

/**
 * @internal
 * @coversNothing
 */
class TestCase extends Orchestra\Testbench\TestCase
{
    protected ?string $fixturesPath;

    public function setUp(): void
    {
        parent::setUp();

        $this->fixturesPath = __DIR__ . '/fixtures/files';
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup locale
        $app['config']->set('locale', 'en');

        // Set lang files path
        $app['path.lang'] = __DIR__ . '/../resources/lang';

        // Reset app base path, as it is set to orchestra vendor directory
        $app['path.base'] = __DIR__ . '/../src';
    }

    protected function getPackageProviders($app)
    {
        return [
            AppTestProvider::class,
            TranslationServiceProvider::class,
            ValidationServiceProvider::class,
        ];
    }
}
