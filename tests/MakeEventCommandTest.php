<?php

namespace Joerucci\DomainTools\Tests;

class MakeEventCommandTest extends TestCase
{
    public function test_it_creates_an_event_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:event',
            name: 'MyEvent',
            domain: 'Auth',
            expectedRelativePath: 'Events/MyEvent.php'
        );
    }
}
