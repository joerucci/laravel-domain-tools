<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\NotificationMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeNotificationCommand extends NotificationMakeCommand
{
    use InteractsWithDomains;
}
