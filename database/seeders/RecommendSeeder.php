<?php

namespace Database\Seeders;

use App\Models\Recommend;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecommendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $faker = Faker::create();

        // for ($i = 0; $i < 1000; $i++) {
        // $recommend = new Recommend;
        // // $recommend->ProjectID = "1";
        // // $recommend->user_id = "101";
        // // $recommend->Project_Name = "Dream Home";
        // // $recommend->Project_Type = "Residential";
        // // $recommend->material_unit_cost = "50";
        // // $recommend->material_unit_cost = "50";
        // // $recommend->floor = "2";
        // // $recommend->Size = "2500";
        // // $recommend->Design_Preferences = "Modern, Open Concept";
        // // $recommend->Functional_Requirements = "Energy Star Certified, Smart Home Technology";
        // // $recommend->labor_hourly_rate = "25";
        // // $recommend->equipment_hourly_cost = "20";
        // // $recommend->Room_number = "10";
        // // $recommend->number_of_bedrooms = "3";
        // // $recommend->bathroom = "2";
        // // $recommend->Architectural_style = "Contemporary";
        // // $recommend->start_date = "2024-01-01";
        // // $recommend->end_date = "2024-12-01";

        // $recommend->user_id = $faker->randomNumber(3); // Random user ID
        // $recommend->Project_Name = $faker->words(2, true); // Random project name
        // $recommend->Project_Type = $faker->randomElement(['Residential', 'Commercial', 'Institutional', 'Industrial']); // Random project type
        // $recommend->material_unit_cost = $faker->randomFloat(2, 10, 100); // Random material unit cost
        // $recommend->floor = $faker->numberBetween(1, 5); // Random number of floors
        // $recommend->Size = $faker->numberBetween(1000, 5000); // Random size in square feet
        // $recommend->Design_Preferences = $faker->words(2, true); // Random design preferences
        // $recommend->Functional_Requirements = $faker->words(3, true); // Random functional requirements
        // $recommend->labor_hourly_rate = $faker->randomFloat(2, 10, 50); // Random labor hourly rate
        // $recommend->equipment_hourly_cost = $faker->randomFloat(2, 5, 30); // Random equipment hourly cost
        // $recommend->Room_number = $faker->numberBetween(5, 15); // Random number of rooms
        // $recommend->number_of_bedrooms = $faker->numberBetween(2, 5); // Random number of bedrooms
        // $recommend->bathroom = $faker->numberBetween(1, 4); // Random number of bathrooms
        // $recommend->Architectural_style = $faker->randomElement(['Contemporary', 'Modern', 'Traditional']); // Random architectural style
        // $recommend->start_date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'); // Random start date within the past year
        // $recommend->end_date = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'); // Random end date within the next year

        // $recommend->save();
        // }
    }
}
