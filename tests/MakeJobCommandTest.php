<?php

namespace Joerucci\DomainTools\Tests;

class MakeJobCommandTest extends TestCase
{
    public function test_it_creates_a_job_in_the_domain()
    {
        $this->assertGeneratedInDomain(
            command: 'make:job',
            name: 'ProcessPodcast',
            domain: 'Auth',
            expectedRelativePath: 'Jobs/ProcessPodcast.php'
        );
    }
}
