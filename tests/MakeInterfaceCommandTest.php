<?php

namespace Joerucci\DomainTools\Tests;

class MakeInterfaceCommandTest extends TestCase
{
    public function test_it_creates_an_interface_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:interface',
            name: 'CustomInterface',
            domain: 'Auth',
            expectedRelativePath: 'CustomInterface.php'
        );
    }
}
