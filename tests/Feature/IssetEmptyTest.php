<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('isset-empty', [])
        ->assertDontSeeText('Hello, My name is Eko')
        ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', ["name" => "Eko"])
        ->assertSeeText('Hello, My name is Eko')
        ->assertSeeText("I don't have any hobbies", false);

        $this->view('isset-empty', ["name" => "Eko", "hobbies" => "Coding"])
        ->assertSeeText('Hello, My name is Eko')
        ->assertDontSeeText("I don't have any hobbies", false);
    }
}
