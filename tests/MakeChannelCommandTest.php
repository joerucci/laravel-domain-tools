<?php

namespace Joerucci\DomainTools\Tests;

class MakeChannelCommandTest extends TestCase
{
    public function test_it_creates_a_channel_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:channel',
            name: 'SlackChannel',
            domain: 'Notifications',
            expectedRelativePath: 'Broadcasting/SlackChannel.php'
        );
    }
}
