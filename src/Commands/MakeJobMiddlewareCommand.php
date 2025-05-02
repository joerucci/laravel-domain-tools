<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\JobMiddlewareMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeJobMiddlewareCommand extends JobMiddlewareMakeCommand
{
    use InteractsWithDomains;
}
