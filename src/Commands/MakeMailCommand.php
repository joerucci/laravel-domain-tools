<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\MailMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeMailCommand extends MailMakeCommand
{
    use InteractsWithDomains;
}
