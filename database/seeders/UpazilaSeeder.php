<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Upazila;

class UpazilaSeeder extends Seeder
{
    public function run()
    {
        Upazila::insert([
            ['name' => 'Dhanmondi', 'district_id' => 1],
            ['name' => 'Gulshan', 'district_id' => 1],
            ['name' => 'Tongi', 'district_id' => 2],
            ['name' => 'Sadar South', 'district_id' => 3],
            ['name' => 'Feni Sadar', 'district_id' => 4],
            ['name' => 'Khulna Sadar', 'district_id' => 5],
        ]);
    }
}