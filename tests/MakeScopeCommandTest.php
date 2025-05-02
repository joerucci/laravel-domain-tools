<?php

namespace Joerucci\DomainTools\Tests;

class MakeScopeCommandTest extends TestCase
{
    public function test_it_creates_a_scope_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:scope',
            name: 'ActiveScope',
            domain: 'Auth',
            expectedRelativePath: 'Scopes/ActiveScope.php'
        );
    }
}
