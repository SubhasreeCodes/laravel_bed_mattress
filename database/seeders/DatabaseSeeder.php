<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Call the SizeSeeder
        $this->call(SizeSeeder::class);
        
        // call the UnitSeeder
        $this->call(UnitSeeder::class);

        // call the ThicknessSeeder
        $this->call(ThicknessSeeder::class);

        
    }
}
