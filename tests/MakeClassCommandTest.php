<?php

namespace Joerucci\DomainTools\Tests;

class MakeClassCommandTest extends TestCase
{
    public function test_it_creates_a_class_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:class',
            name: 'MyClass',
            domain: 'Auth',
            expectedRelativePath: 'MyClass.php'
        );
    }
}
