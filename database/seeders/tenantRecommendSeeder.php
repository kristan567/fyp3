<?php

namespace Database\Seeders;

use App\Models\Recommend;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tenantRecommendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // $recommend = new Recommend;

        // $recommend->user_id = "101";
        // $recommend->Project_Name = "Dream Home";
        // $recommend->Project_Type = "Residential";
        // $recommend->number_of_workers = "30";

        // $recommend->floor = "2";
        // $recommend->Size = "2500";
        // $recommend->Design_Preferences = "Modern, Open Concept";
        // $recommend->Functional_Requirements = "Energy Star Certified, Smart Home Technology";
        // $recommend->labor_hourly_rate = "25";
        // $recommend->equipment_hourly_cost = "20";
        // $recommend->Room_number = "10";
        // $recommend->number_of_bedrooms = "3";
        // $recommend->bathroom = "2";
        // $recommend->Architectural_style = "Contemporary";
        // $recommend->start_date = "2024-01-01";
        // $recommend->end_date = "2024-12-01";
        // $recommend->price ="987654321";
        // $recommend->Description = "this is the description";
        // $recommend->duration = "6 months";
        // $recommend->save();


        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $recommend = new Recommend;

            $recommend->user_id = $faker->randomNumber(3);
            $recommend->Project_Name = $faker->words(2, true);
            $recommend->Project_Type = $faker->randomElement(['Residential', 'Commercial']);
            $recommend->number_of_workers = $faker->numberBetween(10, 50);

            $recommend->floor = $faker->numberBetween(1, 3);
            $recommend->Size = $faker->numberBetween(1500, 3000);
            $recommend->Design_Preferences = $faker->sentence(3);
            $recommend->Functional_Requirements = $faker->sentence(5);
            $recommend->labor_hourly_rate = $faker->randomFloat(2, 20, 40);
            $recommend->equipment_hourly_cost = $faker->randomFloat(2, 10, 30);
            $recommend->Room_number = $faker->numberBetween(5, 15);
            $recommend->number_of_bedrooms = $faker->numberBetween(2, 5);
            $recommend->bathroom = $faker->numberBetween(1, 4);
            $recommend->Architectural_style = $faker->randomElement(['Contemporary', 'Modern']);
            $recommend->start_date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d');
            $recommend->end_date = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d');
            $recommend->price = $faker->randomNumber(7);
            $recommend->Description = $faker->paragraph;
            $recommend->duration = $faker->randomElement(['3 months', '6 months', '1 year']);
            $recommend->save();
        }
    }
}
