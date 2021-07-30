<?php

namespace Tests\Feature\Http\Controllrs;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $user = User::factory()->create();

        $this->withoutExceptionHandling();
        $response=$this->actingAs($user)->post('/task',[
            'description' => 'test task'
        ]);

        $response->assertStatus(302);
    }
}
