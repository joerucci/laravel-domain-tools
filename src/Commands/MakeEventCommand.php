<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\EventMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeEventCommand extends EventMakeCommand
{
    use InteractsWithDomains;
}
