<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ObserverMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeObserverCommand extends ObserverMakeCommand
{
    use InteractsWithDomains;
}
