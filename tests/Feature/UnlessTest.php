<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view('unless', ["admin" => true])
        ->assertDontSeeText("You are not Admin!");

        $this->view('unless', ["admin" => false])
        ->assertSeeText("You are not Admin!");
    }
}
