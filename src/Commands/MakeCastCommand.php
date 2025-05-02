<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\CastMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeCastCommand extends CastMakeCommand
{
    use InteractsWithDomains;
}
