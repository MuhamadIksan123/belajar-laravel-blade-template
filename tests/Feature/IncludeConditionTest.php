<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeTest() {
        $this->view('include-condition', [
            "user" => [
                "name" => "Eko",
                "owner" => true
            ]
        ])
        ->assertSeeText("Selamat Datang Owner")
        ->assertSeeText("Selamat Datang Eko");

        $this->view('include-condition', [
            "user" => [
                "name" => "Eko",
                "owner" => false
            ]
        ])
        ->assertDontSee("Selamat Datang Owner")
        ->assertSeeText("Selamat Datang Eko");
    }
}
