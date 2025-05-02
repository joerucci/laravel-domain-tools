<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ExceptionMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeExceptionCommand extends ExceptionMakeCommand
{
    use InteractsWithDomains;
}
