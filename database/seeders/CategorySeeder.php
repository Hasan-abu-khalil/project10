<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Insert new data
        DB::table('categories')->insert([
            [
                'name' => 'Antique',
                'image' => '../img/a3.jfif',

            ],
            [
                'name' => 'Miscellaneus',
                'image' => '../img/4-1.jpg',

            ],
            [
                'name' => 'kitchen tools',
                'image' => '../img/k1.jpg',

            ] ,
            [
                'name' => 'electronic equipment ',
                'image' => '../img/11.jpg',

            ]
        ]);

    }


}
