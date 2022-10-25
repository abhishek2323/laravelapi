<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
            'id' => 1,
            'name' => 'Abhishek',
            'email' => 'aksn2323@gmail.com',
            'address' => 'New Delhi, India',
            'phone' => '8447850415',
            'created_at' => '2022-09-28 01:59:39',
            'updated_at' => '2022-09-28 01:59:39',
            ],
            [
            'id' => 2,
            'name' => 'Sameer',
            'email' => 'sameer@gmail.com',
            'address' => 'New Delhi, India',
            'phone' => '9876543212',
            'created_at' => '2022-09-28 02:59:39',
            'updated_at' => '2022-09-28 02:59:39',
            ],
            [
            'id' => 3,
            'name' => 'harish',
            'email' => 'aksn2323@gmail.com',
            'address' => 'New Delhi, India',
            'phone' => '1234567890',
            'created_at' => '2022-09-28 03:59:39',
            'updated_at' => '2022-09-28 03:59:39',
            ],
            [
            'id' => 4,
            'name' => 'Sachin',
            'email' => 'sachin@gmail.com',
            'address' => 'New Delhi, India',
            'phone' => '9834098756',
            'created_at' => '2022-09-28 03:59:39',
            'updated_at' => '2022-09-28 03:59:39',
            ],
        ]);
    }
}
