<?php

namespace Joerucci\DomainTools\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Joerucci\DomainTools\DomainToolsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Override Laravel's internal app_path
        $customAppPath = realpath(__DIR__.'/Fixtures/App');
        $app->useAppPath($customAppPath);

        // Also update your package config
        $app['config']->set('domain-tools.paths.domains', $customAppPath);
    }

    protected function assertGeneratedInDomain(
        string $command,
        string $name,
        string $domain,
        string $expectedRelativePath
    ): void {
        $fullPath = app_path("{$domain}/{$expectedRelativePath}");

        if (file_exists($fullPath)) {
            unlink($fullPath);
        }

        $this->artisan($command, compact('name', 'domain'))
            ->assertExitCode(0);

        $this->assertFileExists($fullPath, "Expected file [{$fullPath}] was not created.");

        unlink($fullPath);
    }
}
