<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        // \App\Models\ProductGallery::factory(10)->create();
        // \App\Models\Transaction::factory(10)->create();
        // \App\Models\TransactionItem::factory(10)->create();
    }
}
