<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\ActivityService;
use Carbon\Carbon;

class ActivityController extends Controller
{
    protected $activityService;
    public function __construct (ActivityService $activityService ){
        $this->activityService = $activityService;
    }
    public function list(Request $request): View
    {
        $activity_at = Carbon::parse(date('d-m-Y'));
        if ($request->has('activity_at')){
            $activity_at =  Carbon::parse($request->date('activity_at'));
        }
        $customer_count =  $request->query('customer_count', 1);
        $activities =  $this->activityService->findByActivityAtAndCustomerCount($activity_at, $customer_count);
        if ($request->ajax()){
            return view('activity.table', [
                'activities' => $activities
            ]);
        }
        return view('activity.list', [
            'activities' => $activities
        ]);
    }
}
