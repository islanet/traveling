<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\ReservationService;
use App\Http\Requests\Reservation\StoreRequest;
use Carbon\Carbon;

class ReservationController extends Controller
{
    protected $reservationService;

    public function __construct (ReservationService $reservationService ){
        $this->reservationService = $reservationService;
    }
    public function store(StoreRequest $request)
    {
        $reservation =  $this->reservationService->store($request);
        return json(["url" => route('reservation.confirmation')]);
    }
    public function confirmation(Request $request): View
    {
        return view('reservation.confirmation');
    }

    public function list(Request $request): View
    {
        $reservations =  $this->reservationService->findByUser($request->user()->id);
        return view('reservation.list', [
            'reservations' => $reservations
        ]);
    }

}
