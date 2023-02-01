<?php

namespace App\Services;
use App\Repositories\ReservationRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\Reservation\StoreRequest;

use Carbon\Carbon;

class ReservationService
{
    protected $reservationRepo;
    public function __construct (ReservationRepository $reservationRepository ){
        $this->reservationRepo = $reservationRepository;
    }

    public function store(StoreRequest $request)
    {
        $data=[];
        $data = $request->all();
        $data['reservation_at'] = Carbon::now()->format('Y-m-d');
        $data['user_id'] = $request->user()->id;
        return $this->reservationRepo->create($data);
    }

    public function findByUser(int $userId):LengthAwarePaginator
    {
        return $this->reservationRepo->findByUserId($userId);
    }
}
