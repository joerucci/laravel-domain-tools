<?php

namespace Joerucci\DomainTools\Tests;

class MakeMiddlewareCommandTest extends TestCase
{
    public function test_it_creates_a_middleware_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:middleware',
            name: 'AuthenticateMiddleware',
            domain: 'Auth',
            expectedRelativePath: 'Http/Middleware/AuthenticateMiddleware.php'
        );
    }
}
