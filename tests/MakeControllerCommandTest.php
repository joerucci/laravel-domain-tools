<?php

namespace Joerucci\DomainTools\Tests;

class MakeControllerCommandTest extends TestCase
{
    public function test_it_creates_a_controller_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:controller',
            name: 'UserController',
            domain: 'Auth',
            expectedRelativePath: 'Http/Controllers/UserController.php'
        );
    }
}
