<?php

namespace Joerucci\DomainTools\Tests;

class MakeEnumCommandTest extends TestCase
{
    public function test_it_creates_an_enum_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:enum',
            name: 'StatusEnum',
            domain: 'Auth',
            expectedRelativePath: 'StatusEnum.php'
        );
    }
}
