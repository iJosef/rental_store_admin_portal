<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\RentedItem;

class RentedItemRepository implements RentedItemRepositoryInterface
{
    public function fetchStatsBetweenDate($from_date, $to_date)
    {
        $fromDate = Carbon::parse($from_date);
        $toDate = Carbon::parse($to_date);
        $all_rentals = RentedItem::whereBetween('created_at',[$fromDate->format('Y-m-d')." 00:00:00", $toDate->format('Y-m-d')." 23:59:59"]);


        $total_rented_books = (clone $all_rentals)->whereHas('item', function($query) {
            $query->where('item_type_id', 1);
        })
        ->where('date_returned', null)
        ->count();

        $total_returned_books = (clone $all_rentals)->whereHas('item', function($query) {
            $query->where('item_type_id', 1);
        })
        ->where('date_returned', '!=', null)
        ->count();

        $total_rented_equipment = (clone $all_rentals)->whereHas('item', function($query) {
            $query->where('item_type_id', 2);
        })
        ->where('date_returned', null)
        ->count();

        $total_returned_equipment = (clone $all_rentals)->whereHas('item', function($query) {
            $query->where('item_type_id', 2);
        })
        ->where('date_returned', '!=', null)
        ->count();

        $data = [
            'status' => 'success',
            'message' => 'data fetched successfully',
            'total_rented_books' => $total_rented_books,
            'total_returned_books' => $total_returned_books,
            'total_rented_equipment' => $total_rented_equipment,
            'total_returned_equipment' => $total_returned_equipment
        ];

        return response()->json($data, 200);
    }
}
