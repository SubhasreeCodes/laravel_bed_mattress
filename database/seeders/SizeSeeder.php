<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the "sizes" table
        $sizes = [
            ['name' => 'Small'],
            ['name' => 'Large'],
            ['name' => 'Queen'],
            ['name' => 'King'],
            ['name' => 'Custom'],
            // Add more sizes as needed
        ];

        foreach ($sizes as $row) {
            Size::create($row);
        }
    }
}
