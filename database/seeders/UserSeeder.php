<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Insert new data
         DB::table('users')->insert([
            [
                'name' => 'admins',
                'email' => 'admin@admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                

            ],

        ]);
    }
}
