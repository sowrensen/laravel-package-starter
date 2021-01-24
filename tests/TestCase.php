<?php

namespace Sowren\Package\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Sowren\Package\SamplePackageServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SamplePackageServiceProvider::class,
        ];
    }
}
