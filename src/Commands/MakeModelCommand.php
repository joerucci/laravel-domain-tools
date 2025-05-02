<?php

namespace Joerucci\DomainTools\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;
use Illuminate\Support\Str;
use Joerucci\DomainTools\Concerns\InteractsWithDomains;

class MakeModelCommand extends ModelMakeCommand
{
    use InteractsWithDomains;

    protected function createController()
    {
        $controller = Str::studly(class_basename($this->argument('name')));

        $modelName = $this->qualifyClass($this->getNameInput());

        $this->call('make:controller', array_filter([
            'domain' => $this->argument('domain'),
            'name' => "{$controller}Controller",
            '--model' => $this->option('resource') || $this->option('api') ? $modelName : null,
            '--api' => $this->option('api'),
            '--requests' => $this->option('requests') || $this->option('all'),
            '--test' => $this->option('test'),
            '--pest' => $this->option('pest'),
        ]));
    }

    protected function createFormRequests()
    {
        $request = Str::studly(class_basename($this->argument('name')));

        $this->call('make:request', [
            'domain' => $this->argument('domain'),
            'name' => "Store{$request}Request",
        ]);

        $this->call('make:request', [
            'domain' => $this->argument('domain'),
            'name' => "Update{$request}Request",
        ]);
    }

    protected function createPolicy()
    {
        $policy = Str::studly(class_basename($this->argument('name')));

        $this->call('make:policy', [
            'domain' => $this->argument('domain'),
            'name' => "{$policy}Policy",
            '--model' => $this->qualifyClass($this->getNameInput()),
        ]);
    }
}
