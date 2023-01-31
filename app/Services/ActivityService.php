<?php

namespace App\Services;
use App\Repositories\ActivityRepository;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Models\Activity;
class ActivityService
{
    protected $activityRepo;
    public function __construct (ActivityRepository $activityRepo ){
        $this->activityRepo = $activityRepo;
    }

    public function findByActivityAtAndCustomerCount($activityAt, $customerCount):array
    {
        $date = Carbon::parse($activityAt);
        $activities = $this->activityRepo->findByActivityAt($date);
        $data = [];
        $item = [];
        foreach ($activities as $activity){
            $item = [
                "id" => $activity->id,
                "popularity" => $activity->popularity,
                "title" => $activity->title,
                "price" => $activity->price*$customerCount,
            ];
            array_push($data, $item);
        }
        return $data;

    }
    public function find(int $activityId) : Activity
    {
        return $this->activityRepo->find($activityId, ['activities']);

    }
}
