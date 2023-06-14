<?php

namespace Database\Seeders;

use App\Models\PriceList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriceList::insert([
            ['id' => 1, 'item_id' => 1, 'category_id' => 2, 'service_id' => 1, 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'item_id' => 1, 'category_id' => 1, 'service_id' => 1, 'price' => 3000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'item_id' => 2, 'category_id' => 1, 'service_id' => 1, 'price' => 4000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'item_id' => 2, 'category_id' => 2, 'service_id' => 1, 'price' => 12000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'item_id' => 5, 'category_id' => 1, 'service_id' => 1, 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'item_id' => 5, 'category_id' => 2, 'service_id' => 1, 'price' => 14000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'item_id' => 1, 'category_id' => 1, 'service_id' => 2, 'price' => 2000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'item_id' => 2, 'category_id' => 1, 'service_id' => 2, 'price' => 3000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'item_id' => 5, 'category_id' => 1, 'service_id' => 2, 'price' => 4000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'item_id' => 1, 'category_id' => 2, 'service_id' => 2, 'price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'item_id' => 2, 'category_id' => 2, 'service_id' => 2, 'price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'item_id' => 5, 'category_id' => 2, 'service_id' => 2, 'price' => 12000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
