<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\EnumMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeEnumCommand extends EnumMakeCommand
{
    use InteractsWithDomains;

    protected function rootNamespace(): string
    {
        return 'App\\'.$this->getStudlyDomain().'\\Enums\\';
    }

    protected function getPath($name)
    {
        return parent::getPath($this->getStudlyDomain().'\\Enums\\'.$name);
    }
}
