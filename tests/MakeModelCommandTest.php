<?php

namespace Joerucci\DomainTools\Tests;

class MakeModelCommandTest extends TestCase
{
    public function test_it_creates_a_model_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:model',
            name: 'User',
            domain: 'Auth',
            expectedRelativePath: 'User.php'
        );
    }
}
