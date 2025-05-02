<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\TraitMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeTraitCommand extends TraitMakeCommand
{
    use InteractsWithDomains;
}
