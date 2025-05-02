<?php

namespace Joerucci\DomainTools\Tests;

class MakeCastCommandTest extends TestCase
{
    public function test_it_creates_a_cast_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:cast',
            name: 'PriceCast',
            domain: 'Orders',
            expectedRelativePath: 'Casts/PriceCast.php'
        );
    }
}
