<?php

namespace App\Repositories;

use App\Models\Activity;

class ActivityRepository extends BaseRepository
{
    public function getModel()
    {
        return New Activity();
    }

    public function findByActivityAt($activityAt)
    {
        return Activity::where('start_at','>=', $activityAt)->orWhere('end_at','>=', $activityAt)->orderBy('popularity', 'DESC')->paginate(env('PAGINATION'));
    }

}
