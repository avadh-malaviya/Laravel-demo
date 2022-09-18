<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'user_id' => 1,
            'title' => 'watch',
            'description' => 'golden',
            'price' => 20000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'car',
            'description' => 'red colour',
            'price' => 500000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'watch',
            'description' => 'diamond',
            'price' => 50000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'statue',
            'description' => 'ganesh',
            'price' => 3000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'ring',
            'description' => 'diamond,golden',
            'price' => 18000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'cpu',
            'description' => 'hp',
            'price' => 28000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'monitor',
            'description' => 'lenovo',
            'price' => 6000,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'keyboard',
            'description' => 'logitech',
            'price' => 1200,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'mouse',
            'description' => 'logitech',
            'price' => 300,
            'compare_price' => 500,
            'charge_tax' => 1,
            'sale_channel' => ['demo', 'trial'],
            'vendor' => 'chrome',
            'tags' => ['tags', 'try', 'test'],
            'images' => 'fake/path/image.jpg'
        ]);
    }
}
