<?php

namespace asciito\Blog\Tests;

use asciito\Blog\BlogServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function getPackageProviders($app)
    {
        return [
            BlogServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        return [];
    }
}