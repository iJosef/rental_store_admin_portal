<?php

namespace App\Repositories;

use App\Models\Item;

class ItemRepository implements ItemRepositoryInterface
{
    public function storeOneItem()
    {
        $new_item                   = new Item();
        $new_item->item_name        = request()->item_name;
        $new_item->item_type_id     = request()->item_type_id;
        $new_item->description      = request()->description;
        $new_item->price_per_unit   = request()->price_per_unit;
        if ($new_item->save()) {
            $data = [
                'status' => 'success',
                'message' => 'Item saved successfully',
                'item' => $new_item
            ];
            return response()->json($data, 201);
        } else {
            $data = [
                'status' => 'error',
                'message' => 'An error occurred while saving item'
            ];
            return response()->json($data, 500);
        }
    }

    public function allItems()
    {
        return Item::with('item_type')->get();
    }

    public function getOneItem($item_id)
    {
        $item = Item::where('id', $item_id)->with('item_type')->first();
        if (!$item) {
            $data = [
                'status' => 'error',
                'message' => 'Item not found'
            ];

            return response()->json($data, 404);
        }

        $data = [
            'status' => 'success',
            'message' => 'items fetched successfully',
            'items' => $item
        ];

        return response()->json($data, 200);
    }

    public function updateOneItem($item_id)
    {
        $update_item                   = Item::where('id', $item_id)->first();

        if (!$update_item) {
            $data = [
                'status' => 'error',
                'message' => 'Item not found'
            ];

            return response()->json($data, 404);
        }

        $update_item->item_name        = request()->item_name;
        $update_item->item_type_id     = request()->item_type_id;
        $update_item->description      = request()->description;
        $update_item->price_per_unit   = request()->price_per_unit;
        if ($update_item->update()) {
            $data = [
                'status' => 'success',
                'message' => 'Item updated successfully',
                'item' => $update_item
            ];
            return response()->json($data, 201);
        } else {
            $data = [
                'status' => 'error',
                'message' => 'An error occurred while updating item'
            ];
            return response()->json($data, 500);
        }
    }

    public function deleteOneItem($item_id)
    {
        Item::where('id', $item_id)->delete();

        $data = [
            'status' => 'success',
            'message' => 'Item deleted successfully'
        ];

        return response()->json($data, 200);
    }
}
