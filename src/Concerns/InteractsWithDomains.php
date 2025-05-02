<?php

namespace Joerucci\DomainTools\Concerns;

use Exception;
use Illuminate\Support\Str;
use Joerucci\DomainTools\DomainRepository;
use Symfony\Component\Console\Input\InputArgument;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

trait InteractsWithDomains
{
    /**
     * Get the console command arguments.
     *
     * @return array<string>
     */
    protected function getArguments()
    {
        return array_merge([
            ['domain', InputArgument::REQUIRED, 'The domain to use'],
        ], parent::getArguments());
    }

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, \Closure>
     */
    protected function promptForMissingArgumentsUsing()
    {
        return array_merge(parent::promptForMissingArgumentsUsing(), [
            'domain' => fn () => $this->askForDomain(),
        ]);
    }

    /**
     * Ask for a domain select
     */
    protected function askForDomain(): mixed
    {
        $domains = app(DomainRepository::class)->all();

        if ($domains->isEmpty()) {
            return confirm(
                label: 'No domains could be found, would you like to create a new one?',
                default: true,
            ) ? $this->newDomainPrompt() : exit;
        }

        $domain = select(
            label: 'What domain should the '.strtolower($this->type).' be placed in?',
            options: $domains
                ->mapWithKeys(fn ($domain) => [$domain => $domain])
                ->put('New', 'New')
                ->all(),
            required: true,
            default: 0
        );

        return $domain === 'New' ? $this->newDomainPrompt() : $domain;
    }

    protected function newDomainPrompt(): string
    {
        return text(
            label: 'What should the domain be named?',
            placeholder: 'E.g. Account',
            required: true,
            hint: 'A domain is a high-level area of your app, like Auth, Orders, or Reports.'
        );
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $domain = $this->getStudlyDomain();

        return parent::getPath("{$domain}\\{$name}");
    }

    /**
     * Get the root namespace for the class.
     */
    protected function rootNamespace(): string
    {
        return 'App\\'.$this->getStudlyDomain().'\\';
    }

    /**
     * Get a "studly" version of the domain argument.
     */
    private function getStudlyDomain(): string
    {
        if (! $domain = $this->argument('domain')) {
            throw new Exception('A domain name is required.');
        }

        if (! is_string($domain)) {
            throw new Exception('Invalid domain name.');
        }

        return Str::studly($domain);
    }
}
