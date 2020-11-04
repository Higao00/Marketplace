<?php

use App\Category;
use App\Category_product;
use App\Product;
use App\Store;
use App\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10) . '@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        factory(User::class, 50)->create()->each(function ($user) {
            factory(Store::class, 50)->create()->each(function ($store) {
                factory(Category::class, 50)->create()->each(function ($category) {
                    factory(Product::class, 50)->create()->each(function ($product) {
                    });
                });
            });
        });
    }
}
