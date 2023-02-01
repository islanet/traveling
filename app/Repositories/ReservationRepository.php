<?php

namespace App\Repositories;

use App\Models\Reservation;

class ReservationRepository extends BaseRepository
{
    public function getModel()
    {
        return New Reservation();
    }
    public function findByUserId($userId)
    {
        return Reservation::where('user_id',$userId)->orderBy('activity_at')->with('activity')->paginate(env('PAGINATION'));
    }
}
