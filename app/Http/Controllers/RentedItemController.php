<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RentedItem;
use Illuminate\Http\Request;
use App\Repositories\RentedItemRepository;
use App\Repositories\RentedItemRepositoryInterface;

class RentedItemController extends Controller
{
    public function __construct(RentedItemRepositoryInterface $rentedItemRepository)
    {
        $this->rentedItemRepository = $rentedItemRepository;
    }

    public function fetchRentalStat($from_date, $to_date)
    {
        $data = $this->rentedItemRepository->fetchStatsBetweenDate($from_date, $to_date);

        return $data;
    }
}
