<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\EnumMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeEnumCommand extends EnumMakeCommand
{
    use InteractsWithDomains;
}
