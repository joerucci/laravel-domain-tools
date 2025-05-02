<?php

namespace Joerucci\DomainTools\Tests;

class MakeRequestCommandTest extends TestCase
{
    public function test_it_creates_a_request_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:request',
            name: 'StoreUserRequest',
            domain: 'Auth',
            expectedRelativePath: 'Http/Requests/StoreUserRequest.php'
        );
    }
}
