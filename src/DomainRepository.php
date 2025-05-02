<?php

namespace Joerucci\DomainTools;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class DomainRepository
{
    protected string $domainPath;

    /**
     * @return \Illuminate\Support\Collection<int, string>
     */
    public function all(): Collection
    {
        $path = config('domain-tools.paths.domains');

        return collect(glob("{$path}/*", GLOB_ONLYDIR))
            ->map(fn ($dir) => basename($dir))
            ->filter(fn ($name) => $this->isValidDomainName($name))
            ->values();
    }

    public function exists(string $name): bool
    {
        return $this->all()->contains(Str::studly($name));
    }

    protected function isValidDomainName(string $name): bool
    {
        // Optionally filter out things like "Console", "Http", etc.
        return ! in_array($name, ['Console', 'Http', 'Providers']);
    }
}
