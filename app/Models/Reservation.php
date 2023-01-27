<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function activity()
    {
        return $this->hasOne(Activity::class);
    }

}