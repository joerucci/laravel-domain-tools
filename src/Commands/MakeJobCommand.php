<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\JobMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeJobCommand extends JobMakeCommand
{
    use InteractsWithDomains;
}
