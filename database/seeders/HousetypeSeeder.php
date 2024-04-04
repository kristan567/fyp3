<?php

namespace Database\Seeders;

use App\Models\Housetype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Housetype::insert([

            [       // Data 1
                'id' => 1,
                'Type' => "Residential",
               
            ],

            [
                'id' => 1,
                'Type' => "Industrial",
            ],

            [
                'id' => 1,
                'Type' => "Institutional",
            ],

            [
                'id' => 1,
                'Type' => "Institutional",
            ],

            [
                'id' => 1,
                'Type' => "Recreational",
            ],

            [
                'id' => 1,
                'Type' => "Mixed-Use",
            ],

            [
                'id' => 1,
                'Type' => "Healthcare",
            ],
            
            [
                'id' => 1,
                'Type' => "Governmental",
            ],

            [
                'id' => 1,
                'Type' => "Religious",
            ],
            
            
            
            
            
            
        ]);

    }
}
