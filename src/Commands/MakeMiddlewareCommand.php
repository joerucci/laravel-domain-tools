<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeMiddlewareCommand extends MiddlewareMakeCommand
{
    use InteractsWithDomains;
}
