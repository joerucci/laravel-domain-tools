<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ClassMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeClassCommand extends ClassMakeCommand
{
    use InteractsWithDomains;
}
