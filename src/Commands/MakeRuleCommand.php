<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\RuleMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeRuleCommand extends RuleMakeCommand
{
    use InteractsWithDomains;
}
