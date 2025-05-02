<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\RequestMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeRequestCommand extends RequestMakeCommand
{
    use InteractsWithDomains;
}
