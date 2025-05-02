<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ScopeMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeScopeCommand extends ScopeMakeCommand
{
    use InteractsWithDomains;
}
