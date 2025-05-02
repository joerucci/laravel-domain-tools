<?php

namespace Joerucci\DomainTools\Tests;

class MakePolicyCommandTest extends TestCase
{
    public function test_it_creates_a_policy_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:policy',
            name: 'UserPolicy',
            domain: 'Auth',
            expectedRelativePath: 'Policies/UserPolicy.php'
        );
    }
}
