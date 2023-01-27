<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_activity', 'activity_father_id','activity_id');
    }


}
