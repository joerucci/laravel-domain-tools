<?php

namespace Joerucci\DomainTools\Tests;

class MakeDomainCommandTest extends TestCase
{
    public function test_it_creates_a_domain_directory()
    {
        $domain = 'Example';
        $path = app_path($domain);

        if (is_dir($path)) {
            \Illuminate\Support\Facades\File::deleteDirectory($path);
        }

        $this->artisan('make:domain', ['name' => $domain])
            ->assertExitCode(0)
            ->expectsOutput("Created domain: {$domain}");

        $this->assertDirectoryExists($path);

        \Illuminate\Support\Facades\File::deleteDirectory($path);
    }

    public function test_it_creates_a_service_provider_when_requested()
    {
        $domain = 'Billing';
        $path = app_path($domain);
        $provider = "{$domain}Provider.php";
        $providerPath = app_path("{$domain}/providers/{$provider}");

        // Clean up
        if (is_dir($path)) {
            \Illuminate\Support\Facades\File::deleteDirectory($path);
        }

        $this->artisan('make:domain', [
            'name' => $domain,
            '--provider' => true,
        ])
            ->assertExitCode(0)
            ->expectsOutput("Created domain: {$domain}")
            ->expectsOutput("Created provider: '{$domain}Provider', don't forget to register it in your bootstrap/providers.php");

        $this->assertFileExists($providerPath);
        \Illuminate\Support\Facades\File::deleteDirectory($path);
    }
}
