<?php

namespace Joerucci\DomainTools\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('make:domain')]
class MakeDomainCommand extends Command implements PromptsForMissingInput
{
    protected $signature = 'make:domain {name} {--provider}';

    protected $description = 'Scaffold a new domain';

    public function __construct(protected Filesystem $files)
    {
        parent::__construct();
    }

    public function handle(): void
    {
        $name = $this->argument('name');
        if (! is_string($name)) {
            throw new Exception('Invalid domain name.');
        }

        $domain = Str::studly($name);

        $this->makeDirectory(app_path($domain));
        $this->info("Created domain: {$domain}");

        if ($this->option('provider')) {
            $this->createProvider($domain);
        }
    }

    protected function makeDirectory(string $path): string
    {
        if (! $this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0755, true);
        }

        return $path;
    }

    protected function createProvider(string $domain): void
    {
        $name = "{$domain}Provider";

        $this->call('make:provider', compact('domain', 'name'));

        $this->info("Created provider: '{$name}', don't forget to register it in your bootstrap/providers.php");
    }
}
