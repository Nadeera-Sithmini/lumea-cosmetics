<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Radiance Glow Serum',
            'slug' => 'radiance-glow-serum',
            'description' => 'A lightweight serum designed to brighten and hydrate the skin.',
            'price' => 4950,
            'old_price' => null,
            'image' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=700&q=85',
            'category' => 'Skincare',
            'stock' => 25,
            'is_featured' => true,
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Soft Blush Duo',
            'slug' => 'soft-blush-duo',
            'description' => 'A soft and natural blush duo for an effortless everyday look.',
            'price' => 3750,
            'old_price' => null,
            'image' => 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=700&q=85',
            'category' => 'Makeup',
            'stock' => 18,
            'is_featured' => true,
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Silk Body Butter',
            'slug' => 'silk-body-butter',
            'description' => 'A rich body butter that leaves skin feeling soft and smooth.',
            'price' => 3250,
            'old_price' => 3750,
            'image' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=700&q=85',
            'category' => 'Body Care',
            'stock' => 30,
            'is_featured' => true,
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Fleur Eau de Parfum',
            'slug' => 'fleur-eau-de-parfum',
            'description' => 'An elegant floral fragrance created for everyday confidence.',
            'price' => 7900,
            'old_price' => null,
            'image' => 'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=700&q=85',
            'category' => 'Fragrance',
            'stock' => 12,
            'is_featured' => true,
            'is_active' => true,
        ]);
    }
}