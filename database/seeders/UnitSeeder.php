<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the "units" table
        $units = [
            ['name' => 'Inches'],
            ['name' => 'Feet'],
            ['name' => 'cm'],
            // Add more units as needed
        ];

        foreach ($units as $row) {
            Unit::create($row);
        }
    }
}
