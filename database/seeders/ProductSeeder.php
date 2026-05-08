<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Seed 2 products into the database.
     */
    public function run(): void
    {
        Product::updateOrCreate([
            'title' => 'Nike Air Max 270 React',
        ], [
            'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400',
            'brand' => 'Nike',
            'rating' => 4.5,
            'reviews' => 234,
            'sellPrice' => 129.99,
            'orders' => '1500',
            'mrp' => '159.99',
            'discount' => 19,
            'category' => 'men',
        ]);

        Product::updateOrCreate([
            'title' => 'Adidas Ultraboost 22 Women',
        ], [
            'img' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400',
            'brand' => 'Adidas',
            'rating' => 4.7,
            'reviews' => 189,
            'sellPrice' => 149.99,
            'orders' => '2100',
            'mrp' => '189.99',
            'discount' => 21,
            'category' => 'women',
        ]);
    }
}
