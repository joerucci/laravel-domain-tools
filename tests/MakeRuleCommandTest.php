<?php

namespace Joerucci\DomainTools\Tests;

class MakeRuleCommandTest extends TestCase
{
    public function test_it_creates_a_rule_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:rule',
            name: 'ValidPhoneRule',
            domain: 'Auth',
            expectedRelativePath: 'Rules/ValidPhoneRule.php'
        );
    }
}
