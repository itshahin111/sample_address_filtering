<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        District::insert([
            ['name' => 'Dhaka', 'division_id' => 1],
            ['name' => 'Gazipur', 'division_id' => 1],
            ['name' => 'Comilla', 'division_id' => 2],
            ['name' => 'Feni', 'division_id' => 2],
            ['name' => 'Khulna', 'division_id' => 3],
            ['name' => 'Bagerhat', 'division_id' => 3],
        ]);
    }
}