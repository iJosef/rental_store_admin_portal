<?php

namespace App\Repositories;

interface RentedItemRepositoryInterface
{
    public function fetchStatsBetweenDate($from_date, $to_date);
}
