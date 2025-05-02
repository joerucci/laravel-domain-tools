<?php

namespace Joerucci\DomainTools\Tests;

class MakeJobMiddlewareCommandTest extends TestCase
{
    public function test_it_creates_a_job_middleware_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:job-middleware',
            name: 'MyJobMiddleware',
            domain: 'Auth',
            expectedRelativePath: 'Jobs/Middleware/MyJobMiddleware.php'
        );
    }
}
