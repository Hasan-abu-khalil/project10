<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Insert new data
        DB::table('products')->insert([

            [
                'name' => 'Organization Jar',
                'description' => 'The organization jar is made up of a total of five interconnected pieces. It\'s a versatile storage solution for your home.',
                'price' => 20.50,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/k2.webp',
            ],
            [
                'name' => 'Trays',
                'description' => 'Stylish and functional trays for serving and organizing. They add a touch of elegance to your home.',
                'price' => 8,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/m2.webp',
            ],
            [
                'name' => 'Old Keys',
                'description' => 'Vintage and antique keys that hold historical significance and can be a collector\'s delight.',
                'price' => 5.80,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/a1.jpg',
            ],
            [
                'name' => 'Sandblasting Glass',
                'description' => 'Exquisite glassware created through sandblasting techniques. Perfect for elegant table settings.',
                'price' => 80,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/a2.webp',
            ],
            [
                'name' => 'Pots',
                'description' => 'Decorative and functional pots for your home garden or indoor plants. Available in various designs.',
                'price' => 100,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/k6.webp',
            ],
            [
                'name' => 'Pocket Watch',
                'description' => 'Classic pocket watch with various materials. A timeless piece for collectors and enthusiasts.',
                'price' => 30,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/1-1.jpg',
            ],
            [
                'name' => 'Flower Vase',
                'description' => 'Decorative flower vase in various shapes and sizes. Elevate your home decor with these vases.',
                'price' => 55.20,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/1-2.jpg',
            ],
            [
                'name' => 'Washbasin Set',
                'description' => 'Complete washbasin set for your bathroom. Includes all necessary components for a modern bathroom.',
                'price' => 25,
                'quantity' => 1,
                'category_id' => 2,
                'image' => '../img/2-8.jpg',
            ],
            [
                'name' => 'Food Keeper',
                'description' => 'Airtight food keeper containers for storing and preserving your food items. Keep your food fresh and organized.',
                'price' => 12,
                'quantity' => 1,
                'category_id' => 2,
                'image' => '../img/4-2.jpg',
            ],
            [
                'name' => 'Knife Set',
                'description' => 'High-quality knife set for all your cutting and slicing needs. These knives are sharp, durable, and easy to use.',
                'price' => 8,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/k5.jfif',
            ],
            [
                'name' => 'Blender',
                'description' => 'A powerful blender for making smoothies, soups, and more. This blender is designed for convenience and efficiency.',
                'price' => 8,
                'quantity' => 1,
                'category_id' => 4,
                'image' => '../img/e2.jfif',
            ],
            [
                'name' => 'Hand Blender',
                'description' => 'Handheld blender for quick and easy food preparation. Blend, chop, and whisk with this versatile kitchen tool.',
                'price' => 35,
                'quantity' => 1,
                'category_id' => 4,
                'image' => '../img/e1jfif.jfif',
            ],
            [
                'name' => 'Ladles',
                'description' => 'Stylish ladles for serving soups, stews, and more. These ladles are both functional and attractive.',
                'price' => 14,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/k3.webp',
            ],
            [
                'name' => 'Vase',
                'description' => 'Elegant vase for displaying flowers and other decorative items. This vase adds a touch of sophistication to any room.',
                'price' => 44.5,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/1-8.jpg',
            ],
            [
                'name' => 'Straw Baskets',
                'description' => 'Handwoven straw baskets for storage and decor. These baskets are eco-friendly and add a rustic touch to your home.',
                'price' => 70,
                'quantity' => 1,
                'category_id' => 2,
                'image' => '../img/m1.jpg',
            ],
            [
                'name' => 'Land Line',
                'description' => 'A vintage landline telephone that adds a retro charm to your home. Ideal for those who appreciate nostalgic decor.',
                'price' => 5,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/1-4.jpg',
            ],
            [
                'name' => 'Spoon Holder',
                'description' => 'Practical spoon holder for your kitchen utensils. Keep your cooking area organized and mess-free.',
                'price' => 9,
                'quantity' => 1,
                'category_id' => 3,
                'image' => '../img/k7.jfif',
            ],
            [
                'name' => 'Soap Tools',
                'description' => 'A collection of soap-making tools and molds. Perfect for DIY soap enthusiasts and crafters.',
                'price' => 8,
                'quantity' => 1,
                'category_id' => 2,
                'image' => '../img/2-6.jpg',
            ],
            [
                'name' => 'Clock',
                'description' => 'A decorative wall clock for your home. Keep track of time in style with this elegant timepiece.',
                'price' => 8,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/a3.jfif',
            ],
            [
                'name' => 'Glass Set',
                'description' => 'A complete set of glassware for various beverages. Elevate your drinking experience with this glass set.',
                'price' => 76,
                'quantity' => 1,
                'category_id' => 1,
                'image' => '../img/13.jpg',
            ],



        ]);
    }
}
