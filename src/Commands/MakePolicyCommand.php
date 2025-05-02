<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\PolicyMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakePolicyCommand extends PolicyMakeCommand
{
    use InteractsWithDomains;
}
