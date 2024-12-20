<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        // Call the SizeSeeder
        $this->call(SizeSeeder::class);
        
        // call the UnitSeeder
        $this->call(UnitSeeder::class);

        // call the ThicknessSeeder
        $this->call(ThicknessSeeder::class);

        // call the Product Seeder
        $this->call(ProductSeeder::class);

        // call the Product Variant Seeder
        $this->call(ProductVariantSeeder::class);
        
        
    }
}
