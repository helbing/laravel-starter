<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithoutEvents;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

abstract class UnitTestCase extends TestCase
{
    use WithoutEvents, WithoutMiddleware;

    public function setUp(): void
    {
        parent::setUp();
    }
}
