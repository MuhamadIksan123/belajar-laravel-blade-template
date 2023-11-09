<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function tessEach()
    {
        $this->view('each', [
            "users" => [
                [
                    "name" => "Eko",
                    "hobbies" => ["Coding", "Gaming"]
                ],
                [
                    "name" => "Kurniawan",
                    "hobbies" => ["Coding", "Gaming"]
                ]
            ]
        ])
        ->assertSeeText(".red", "Eko", "Coding", "Gaming", "Kurniawan", "Coding", "Gaming");
    }
}
