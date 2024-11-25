<?php

namespace Database\Seeders;

use App\Models\Thickness;
use Illuminate\Database\Seeder;

class ThicknessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create multiple thickness records with sample data
        Thickness::create([
            'value_in_inches' => '4',
            'value_in_feet' => '0.33',
            'value_in_centimeters' => '10.16',
        ]);

        Thickness::create([
            'value_in_inches' => '6',
            'value_in_feet' => '0.5',
            'value_in_centimeters' => '15.24',
        ]);

        Thickness::create([
            'value_in_inches' => '8',
            'value_in_feet' => '0.67',
            'value_in_centimeters' => '20.32',
        ]);

        Thickness::create([
            'value_in_inches' => '10',
            'value_in_feet' => '0.83',
            'value_in_centimeters' => '25.4',
        ]);

        // You can add more records as needed
    }
}
