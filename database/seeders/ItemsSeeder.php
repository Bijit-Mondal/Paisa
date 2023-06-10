<?php

namespace Database\Seeders;

use App\Models\temp;

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {
        temp::create(['item_name'=>'Rice','items_group_id'=>3]);
    }
}
