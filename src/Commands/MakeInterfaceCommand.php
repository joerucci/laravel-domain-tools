<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\InterfaceMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeInterfaceCommand extends InterfaceMakeCommand
{
    use InteractsWithDomains;
}
