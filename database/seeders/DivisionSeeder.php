<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        Division::insert([
            ['name' => 'Dhaka'],
            ['name' => 'Chittagong'],
            ['name' => 'Khulna'],
            ['name' => 'Barisal'],
            ['name' => 'Sylhet'],
            ['name' => 'Rajshahi'],
            ['name' => 'Rangpur'],
            ['name' => 'Mymensingh'],
        ]);
    }
}