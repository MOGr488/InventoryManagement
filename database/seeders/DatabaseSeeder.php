<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Database\Factories\ProductFactory;
use Database\Factories\SupplierFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::factory(10)->create();
        Customer::factory(1)->create();
        Supplier::factory(5)->create();
        Purchase::factory(1)->create();
    }
}
