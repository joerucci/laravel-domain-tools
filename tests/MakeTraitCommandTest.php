<?php

namespace Joerucci\DomainTools\Tests;

class MakeTraitCommandTest extends TestCase
{
    public function test_it_creates_a_trait_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:trait',
            name: 'LoggableTrait',
            domain: 'Auth',
            expectedRelativePath: 'LoggableTrait.php'
        );
    }
}
