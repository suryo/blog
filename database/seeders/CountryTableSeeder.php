<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::insert([
            ['country_name' => 'Indonesia', 'status' => 1],
            ['country_name' => 'United States', 'status' => 1],
            ['country_name' => 'Canada', 'status' => 1],
            ['country_name' => 'Australia', 'status' => 0],
            ['country_name' => 'Germany', 'status' => 1],
        ]);
    }
}
