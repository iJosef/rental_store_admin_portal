<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_types = [
            [
                'type' => 'Books',
            ],
            [
                'type' => 'Equipment'
            ]
        ];

        foreach ($item_types as $key => $item_type) {
            if (ItemType::where('type', $item_type['type'])->first() == null) {
                ItemType::create($item_type);
            }
        }
    }
}
