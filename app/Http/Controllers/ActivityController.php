<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ActivityController extends Controller
{

    public function list(Request $request): View
    {
        return view('activity.list', [
            'activities' => Activity::get()
        ]);
    }
}
