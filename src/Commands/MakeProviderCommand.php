<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ProviderMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeProviderCommand extends ProviderMakeCommand
{
    use InteractsWithDomains;
}
