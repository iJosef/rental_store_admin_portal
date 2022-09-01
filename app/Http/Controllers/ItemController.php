<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Repositories\ItemRepository;
use App\Repositories\ItemRepositoryInterface;

class ItemController extends Controller
{
    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function storeItem(StoreItemRequest $request)
    {
        $request->validated();

        $data = $this->itemRepository->storeOneItem();

        return $data;

    }

    public function getItems()
    {
        $data = $this->itemRepository->allItems();

        return response()->json($data, 200);

    }

    public function getItem($item_id)
    {
        $data = $this->itemRepository->getOneItem($item_id);

        return $data;
    }

    public function updateItem(UpdateItemRequest $request, $item_id)
    {
        $request->validated();

        $data = $this->itemRepository->updateOneItem($item_id);

        return $data;
    }

    public function deleteItem($item_id)
    {
        $data = $this->itemRepository->deleteOneItem($item_id);

        return $data;
    }
}
