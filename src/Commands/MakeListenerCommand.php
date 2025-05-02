<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ListenerMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeListenerCommand extends ListenerMakeCommand
{
    use InteractsWithDomains;
}
