<?php

namespace App\Repositories;

interface ItemRepositoryInterface
{
    public function storeOneItem();

    public function allItems();

    public function getOneItem($item_id);

    public function updateOneItem($item_id);

    public function deleteOneItem($item_id);
}
