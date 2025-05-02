<?php

namespace Joerucci\DomainTools\Tests;

class MakeNotificationCommandTest extends TestCase
{
    public function test_it_creates_a_notification_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:notification',
            name: 'WelcomeUser',
            domain: 'Auth',
            expectedRelativePath: 'Notifications/WelcomeUser.php'
        );
    }
}
