<?php

namespace Joerucci\DomainTools\Tests;

class MakeObserverCommandTest extends TestCase
{
    public function test_it_creates_an_observer_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:observer',
            name: 'UserObserver',
            domain: 'Auth',
            expectedRelativePath: 'Observers/UserObserver.php'
        );
    }
}
