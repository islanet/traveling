<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Activity;
use App\Models\User;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    public function test_activities_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/activities');

        $response->assertOk();
    }
    public function test_find_activity(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/activities', [
                'activity_at' => '2023-02-01',
                'customer_count' => '2',
            ]);
        $response
            ->assertSessionHasNoErrors();
    }
    public function test_show_activity(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/activities/1');
        $response->assertSessionHasNoErrors();
    }

    public function test_activities_page_is_unsuccessful()
    {
        $response = $this
            ->get('/activities');
        $response->assertStatus(302);
    }

}
