<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ChannelMakeCommand;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeChannelCommand extends ChannelMakeCommand
{
    use InteractsWithDomains;
}
