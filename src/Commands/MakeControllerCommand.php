<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeControllerCommand extends ControllerMakeCommand
{
    use InteractsWithDomains;
}
