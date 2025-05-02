<?php

namespace Joerucci\DomainTools\Tests;

class MakeExceptionCommandTest extends TestCase
{
    public function test_it_creates_an_exception_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:exception',
            name: 'CustomException',
            domain: 'Auth',
            expectedRelativePath: 'Exceptions/CustomException.php'
        );
    }
}
