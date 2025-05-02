<?php

namespace Joerucci\DomainTools\Tests;

class MakeProviderCommandTest extends TestCase
{
    public function test_it_creates_a_provider_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:provider',
            name: 'AuthServiceProvider',
            domain: 'Auth',
            expectedRelativePath: 'Providers/AuthServiceProvider.php'
        );
    }
}
