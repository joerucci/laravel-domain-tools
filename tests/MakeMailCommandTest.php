<?php

namespace Joerucci\DomainTools\Tests;

class MakeMailCommandTest extends TestCase
{
    public function test_it_creates_a_mail_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:mail',
            name: 'WelcomeMail',
            domain: 'Auth',
            expectedRelativePath: 'Mail/WelcomeMail.php'
        );
    }
}
