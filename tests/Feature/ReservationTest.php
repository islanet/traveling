<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Reservation;
use App\Models\User;

class ReservationTest extends TestCase
{
    public function test_activity_is_reserved(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/reservations/store', [
                'activity_at' => '2023-02-01',
                'customer_count' => '2',
                'activity_id' => '4',
                'price' => '137'
            ]);
            $response
            ->assertStatus(200);

        $reservation = Reservation::where('user_id', $user->id)->first();

        $this->assertSame(4, $reservation->activity_id);
        $this->assertSame(2, $reservation->customer_count);
        $this->assertSame('2023-02-01 00:00:00', $reservation->activity_at);
        $this->assertSame(137.0, $reservation->price);

    }

    public function test_reservations_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/reservations');

        $response->assertOk();
    }

    public function test_reservations_page_is_unsuccessful()
    {
        $response = $this
            ->get('/reservations');
        $response->assertStatus(302);
    }
}
