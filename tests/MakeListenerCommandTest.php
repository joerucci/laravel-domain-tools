<?php

namespace Joerucci\DomainTools\Tests;

class MakeListenerCommandTest extends TestCase
{
    public function test_it_creates_a_listener_in_the_domain()
    {
        $this->markTestSkipped('RuntimeException: Unable to detect application namespace.');

        $this->assertGeneratedInDomain(
            command: 'make:listener',
            name: 'OrderShippedListener',
            domain: 'Auth',
            expectedRelativePath: 'Listeners/OrderShippedListener.php'
        );
    }
}
