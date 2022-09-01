<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * Get the item_type that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item_type()
    {
        return $this->belongsTo(ItemType::class, 'item_type_id');
    }

    /**
     * Get all of the rented_items for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rented_items()
    {
        return $this->hasMany(RentedItem::class);
    }
}
