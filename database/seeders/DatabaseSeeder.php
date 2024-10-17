<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\provinces;
use App\Models\citytowns;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        provinces::factory()->create([
            "province_id" => 1,
            "region_id" => 1,
            "province_name" => 'Metro Manila'
        ]);
        provinces::factory()->create([
            "province_id" => 2, 
            "region_id" => 3,
            "province_name" => 'Ilocos Sur'
        ]);
        provinces::factory()->create([
            "province_id" => 3, 
            "region_id" => 3,
            "province_name" => 'Ilocos Sur'
        ]);

            citytowns::factory()->create([
                "citytown_id" => 1,
                "province_id" => 2,
                "citytown_name" => "Adams"
            ]);

            citytowns::factory()->create([
                "citytown_id" => 2,
                "province_id" => 2,
                "citytown_name" => "Bacarra"
            ]);

            citytowns::factory()->create([
                "citytown_id" => 3,
                "province_id" => 2,
                "citytown_name" => "Badoc"
            ]);


    }
}
