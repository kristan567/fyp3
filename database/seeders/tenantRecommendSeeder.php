<?php

namespace Database\Seeders;

use App\Models\Housetype;
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

        // $projectTypes = Housetype::all();

        

        // $recommend = new Recommend;

        // $recommend->user_id = "101";
        // $recommend->Project_name = "Dream Home";
        // $recommend->'Project_Type' = "Residential";
        // $recommend->'number_of_workers' = "30";

        // $recommend->floor = "2";
        // $recommend->Size = "2500";
        // $recommend->Design_Preferences = "Modern, Open Concept   ";
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




        // $faker = Faker::create();

        // for ($i = 0; $i < 30; $i++) {
        //     $recommend = new Recommend;

        //     $recommend->user_id = $faker->randomNumber(3);
        //     $recommend->Project_Name = $faker->words(2, true);
        //     $recommend->Project_Type = $faker->randomElement(['Residential', 'Commercial']);
        //     $recommend->'number_of_workers' = $faker->numberBetween(10, 50);
        //     $recommend->floor = $faker->numberBetween(1, 3);
        //     $recommend->Size = $faker->numberBetween(1500, 3000);
        //     $recommend->Design_Preferences = $faker->sentence(3);
        //     $recommend->Functional_Requirements = $faker->sentence(5);
        //     $recommend->labor_hourly_rate = $faker->randomFloat(2, 20, 40);
        //     $recommend->equipment_hourly_cost = $faker->randomFloat(2, 10, 30);
        //     $recommend->Room_number = $faker->numberBetween(5, 15);
        //     $recommend->number_of_bedrooms = $faker->numberBetween(2, 5);
        //     $recommend->bathroom = $faker->numberBetween(1, 4);
        //     $recommend->Architectural_style = $faker->randomElement(['Contemporary', 'Modern']);
        //     $recommend->start_date = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d');
        //     $recommend->end_date = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d');
        //     $recommend->price = $faker->randomNumber(7);
        //     $recommend->Description = $faker->paragraph;
        //     $recommend->duration = $faker->randomElement(['3 months', '6 months', '1 year']);
        //     $recommend->save();
        // }


        // foreach ($projectTypes as $projectType) {

        //     $projectTypeId = $projectType->id;

        Recommend::insert([

            [       // Data 1
                'user_id' => 101,
                'Project_name' => "Dream Home",
                'Project_Type' => "Residential",
                'number_of_workers' => 30,
                // 'house_type' => $projectTypeId,
                'floor' => 2,
                'Size' => 2500,
                'Design_Preferences' => "Modern, Open Concept",
                'Functional_Requirements' => "Energy Star Certified, Smart Home Technology",
                'labor_hourly_rate' => 25,
                'equipment_hourly_cost' => 20,
                'Room_number' => 10,
                'number_of_bedrooms' => 3,
                'bathroom' => 2,
                'Architectural_style' => "Contemporary",
                'start_date' => "2024-01-01",
                'end_date' => "2024-12-01",
                'price' => 987654321,
                'Description' => "This is the 'Description'",
                'duration' => "6 months",
            ],

            // Data 2
            [
                'user_id' => 102,
                'Project_name' => "Cozy Cottage",
                'Project_Type' => "Residential",
                'number_of_workers' => 15,

                'floor' => 1,
                'Size' => 1800,
                'Design_Preferences' => "Rustic, Cottage-style",
                'Functional_Requirements' => "Fireplace, Garden View",
                'labor_hourly_rate' => 28,
                'equipment_hourly_cost' => 22,
                'Room_number' => 8,
                'number_of_bedrooms' => 2,
                'bathroom' => 2,
                'Architectural_style' => "Cottage",
                'start_date' => "2024-02-15",
                'end_date' => "2024-09-30",
                'price' => 750000,
                'Description' => "A charming cottage nestled in the countryside, featuring rustic aesthetics, a cozy fireplace, and beautiful garden views.",
                'duration' => "7 months",

            ],
            // Data 3
            [
                'user_id' => 103,
                'Project_name' => "Luxury Villa",
                'Project_Type' => "Residential",
                'number_of_workers' => 25,

                'floor' => 3,
                'Size' => 3500,
                'Design_Preferences' => "Mediterranean, Luxury",
                'Functional_Requirements' => "Infinity Pool, Home Theater",
                'labor_hourly_rate' => 35,
                'equipment_hourly_cost' => 30,
                'Room_number' => 15,
                'number_of_bedrooms' => 5,
                'bathroom' => 5,
                'Architectural_style' => "Mediterranean",
                'start_date' => "2024-03-20",
                'end_date' => "2024-12-31",
                'price' => 1500000,
                'Description' => "An exquisite luxury villa with Mediterranean-inspired architecture, boasting luxurious amenities such as an infinity pool and a home theater for unparalleled comfort and entertainment.",
                'duration' => "9 months",
            ],

            // Data 4
            [
                'user_id' => 104,
                'Project_name' => "Urban Loft",
                'Project_Type' => "Apartment Renovation",
                'number_of_workers' => 12,

                'floor' => 1,
                'Size' => 1800,
                'Design_Preferences' => "Industrial, Loft-style",
                'Functional_Requirements' => "Open Layout, Exposed Brick",
                'labor_hourly_rate' => 28,
                'equipment_hourly_cost' => 22,
                'Room_number' => 8,
                'number_of_bedrooms' => 2,
                'bathroom' => 2,
                'Architectural_style' => "Industrial Loft",
                'start_date' => "2024-04-01",
                'end_date' => "2024-10-15",
                'price' => 800000,
                'Description' => "An urban loft renovation project characterized by industrial aesthetics, featuring an open layout and exposed brick walls for a trendy, metropolitan living space.",
                'duration' => "6 months",
            ],

            // Data 5
            [
                'user_id' => 105,
                'Project_name' => "Seaside Retreat",
                'Project_Type' => "Vacation Home",
                'number_of_workers' => 20,

                'floor' => 2,
                'Size' => 2200,
                'Design_Preferences' => "Coastal, Relaxing",
                'Functional_Requirements' => "Beach Access, Ocean View",
                'labor_hourly_rate' => 30,
                'equipment_hourly_cost' => 25,
                'Room_number' => 10,
                'number_of_bedrooms' => 3,
                'bathroom' => 3,
                'Architectural_style' => "Beach House",
                'start_date' => "2024-05-10",
                'end_date' => "2024-11-30",
                'price' => 1100000,
                'Description' => "A tranquil seaside retreat featuring a beach house design, offering direct beach access and breathtaking ocean views for the ultimate relaxation.",
                'duration' => "7 months",
            ],

            // Data 6
            [
                'user_id' => 106,
                'Project_name' => "Family Farmhouse",
                'Project_Type' => "Rural Home",
                'number_of_workers' => 18,

                'floor' => 2,
                'Size' => 2400,
                'Design_Preferences' => "Farmhouse, Family-friendly",
                'Functional_Requirements' => "Wrap-around Porch, Vegetable Garden",
                'labor_hourly_rate' => 32,
                'equipment_hourly_cost' => 26,
                'Room_number' => 12,
                'number_of_bedrooms' => 4,
                'bathroom' => 3,
                'Architectural_style' => "Farmhouse",
                'start_date' => "2024-06-01",
                'end_date' => "2024-12-31",
                'price' => 1000000,
                'Description' => "A spacious family farmhouse with a welcoming wrap-around porch and ample space for a vegetable garden, offering a perfect blend of comfort and rural charm.",
                'duration' => "7 months",
            ],

            // Data 7
            [
                'user_id' => 107,
                'Project_name' => "Modern City Apartment",
                'Project_Type' => "Urban Residence",
                'number_of_workers' => 10,

                'floor' => 10,
                'Size' => 1500,
                'Design_Preferences' => "Modern, Minimalist",
                'Functional_Requirements' => "City View, Rooftop Terrace",
                'labor_hourly_rate' => 35,
                'equipment_hourly_cost' => 30,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 2,
                'Architectural_style' => "Contemporary",
                'start_date' => "2024-07-15",
                'end_date' => "2025-02-28",
                'price' => 900000,
                'Description' => "A sleek and modern city apartment located in the heart of downtown, featuring minimalist design elements and boasting stunning city views from its rooftop terrace.",
                'duration' => "8 months",
            ],

            // Data 8
            [
                'user_id' => 108,
                'Project_name' => "Country Estate",
                'Project_Type' => "Rural Residence",
                'number_of_workers' => 22,

                'floor' => 3,
                'Size' => 3000,
                'Design_Preferences' => "Country, Classic",
                'Functional_Requirements' => "Equestrian Facilities, Vineyard",
                'labor_hourly_rate' => 30,
                'equipment_hourly_cost' => 25,
                'Room_number' => 15,
                'number_of_bedrooms' => 5,
                'bathroom' => 4,
                'Architectural_style' => "Country",
                'start_date' => "2024-08-01",
                'end_date' => "2025-03-31",
                'price' => 1300000,
                'Description' => "A sprawling country estate offering classic charm and modern amenities, complete with equestrian facilities and a picturesque vineyard for a quintessential rural lifestyle.",
                'duration' => "8 months",
            ],

            // Data 9
            [
                'user_id' => 109,
                'Project_name' => "Lakefront Cabin",
                'Project_Type' => "Vacation Home",
                'number_of_workers' => 14,

                'floor' => 1,
                'Size' => 1200,
                'Design_Preferences' => "Cozy, Rustic",
                'Functional_Requirements' => "Lakeside Deck, Fishing Dock",
                'labor_hourly_rate' => 28,
                'equipment_hourly_cost' => 22,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 1,
                'Architectural_style' => "Log Cabin",
                'start_date' => "2024-09-15",
                'end_date' => "2025-04-30",
                'price' => 600000,
                'Description' => "A charming lakefront cabin nestled amidst nature, featuring a cozy log cabin design and offering serene lakeside views, perfect for relaxation and outdoor activities.",
                'duration' => "8 months",
            ],

            // Data 10
            [
                'user_id' => 110,
                'Project_name' => "Urban Penthouse",
                'Project_Type' => "Luxury Apartment",
                'number_of_workers' => 8,

                'floor' => 20,
                'Size' => 2000,
                'Design_Preferences' => "Luxury, Contemporary",
                'Functional_Requirements' => "Skyline View, Home Spa",
                'labor_hourly_rate' => 40,
                'equipment_hourly_cost' => 35,
                'Room_number' => 8,
                'number_of_bedrooms' => 3,
                'bathroom' => 3,
                'Architectural_style' => "Modern",
                'start_date' => "2024-10-01",
                'end_date' => "2025-05-31",
                'price' => 2000000,
                'Description' => "An exquisite urban penthouse offering luxurious living spaces and breathtaking skyline views, complete with a home spa for ultimate relaxation and indulgence.",
                'duration' => "8 months",
            ],

            // Data 11
            [
                'user_id' => 111,
                'Project_name' => "Sustainable Retreat",
                'Project_Type' => "Eco-Friendly Home",
                'number_of_workers' => 16,

                'floor' => 2,
                'Size' => 2200,
                'Design_Preferences' => "Contemporary, Green",
                'Functional_Requirements' => "Solar Panels, Rainwater Harvesting",
                'labor_hourly_rate' => 32,
                'equipment_hourly_cost' => 27,
                'Room_number' => 10,
                'number_of_bedrooms' => 3,
                'bathroom' => 2,
                'Architectural_style' => "Modern",
                'start_date' => "2024-11-15",
                'end_date' => "2025-07-31",
                'price' => 900000,
                'Description' => "A sustainable retreat designed for eco-conscious living, featuring contemporary architecture and innovative green technologies such as solar panels and rainwater harvesting.",
                'duration' => "9 months",
            ],

            // Data 12
            [
                'user_id' => 112,
                'Project_name' => "Historic Restoration",
                'Project_Type' => "Heritage Building",
                'number_of_workers' => 20,

                'floor' => 3,
                'Size' => 2800,
                'Design_Preferences' => "Victorian, Classic",
                'Functional_Requirements' => "Preservation, Restoration",
                'labor_hourly_rate' => 35,
                'equipment_hourly_cost' => 30,
                'Room_number' => 15,
                'number_of_bedrooms' => 4,
                'bathroom' => 3,
                'Architectural_style' => "Victorian",
                'start_date' => "2025-01-01",
                'end_date' => "2025-10-31",
                'price' => 1500000,
                'Description' => "A historic restoration project dedicated to preserving and restoring the grandeur of a Victorian-era building, showcasing classic architectural elements and timeless elegance.",
                'duration' => "10 months",
            ],

            // Data 13
            [
                'user_id' => 113,
                'Project_name' => "Mountain Chalet",
                'Project_Type' => "Ski Lodge",
                'number_of_workers' => 18,

                'floor' => 3,
                'Size' => 3200,
                'Design_Preferences' => "Alpine, Cozy",
                'Functional_Requirements' => "Ski-in/Ski-out Access, Hot Tub",
                'labor_hourly_rate' => 34,
                'equipment_hourly_cost' => 28,
                'Room_number' => 12,
                'number_of_bedrooms' => 5,
                'bathroom' => 4,
                'Architectural_style' => "Chalet",
                'start_date' => "2025-02-15",
                'end_date' => "2025-12-15",
                'price' => 1800000,
                'Description' => "A charming mountain chalet offering cozy accommodations and convenient ski-in/ski-out access, complete with a relaxing hot tub for après-ski relaxation.",
                'duration' => "10 months",
            ],

            // Data 14
            [
                'user_id' => 114,
                'Project_name' => "City Garden Oasis",
                'Project_Type' => "Urban Residence",
                'number_of_workers' => 12,

                'floor' => 1,
                'Size' => 1500,
                'Design_Preferences' => "Urban Garden, Contemporary",
                'Functional_Requirements' => "Green Roof, Outdoor Kitchen",
                'labor_hourly_rate' => 30,
                'equipment_hourly_cost' => 25,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 2,
                'Architectural_style' => "Modern",
                'start_date' => "2025-03-01",
                'end_date' => "2025-11-30",
                'price' => 950000,
                'Description' => "An urban oasis featuring a lush garden retreat atop a modern city residence, complete with a green roof and outdoor kitchen for a serene escape amidst the bustle of the city.",
                'duration' => "9 months",
            ],

            // Data 15
            [
                'user_id' => 115,
                'Project_name' => "Riverside Cottage",
                'Project_Type' => "Vacation Home",
                'number_of_workers' => 10,

                'floor' => 1,
                'Size' => 1200,
                'Design_Preferences' => "Quaint, Waterfront",
                'Functional_Requirements' => "Riverfront Deck, Kayak Launch",
                'labor_hourly_rate' => 28,
                'equipment_hourly_cost' => 22,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 1,
                'Architectural_style' => "Cottage",
                'start_date' => "2025-04-15",
                'end_date' => "2025-12-31",
                'price' => 700000,
                'Description' => "A charming riverside cottage offering tranquil waterfront views and direct river access, complete with a riverfront deck and kayak launch for endless outdoor enjoyment.",
                'duration' => "8 months",

            ],

            // Data 16
            [
                'user_id' => 116,
                'Project_name' => "Industrial Loft",
                'Project_Type' => "Urban Residence",
                'number_of_workers' => 8,

                'floor' => 2,
                'Size' => 1800,
                'Design_Preferences' => "Industrial, Loft-style",
                'Functional_Requirements' => "Exposed Ductwork, Warehouse Windows",
                'labor_hourly_rate' => 32,
                'equipment_hourly_cost' => 27,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 2,
                'Architectural_style' => "Industrial Loft",
                'start_date' => "2025-05-01",
                'end_date' => "2025-12-15",
                'price' => 850000,
                'Description' => "An industrial loft conversion project featuring exposed ductwork and warehouse-style windows, blending urban aesthetics with modern comfort for a unique living space.",
                'duration' => "8 months",
            ],

            // Data 17
            [
                'user_id' => 117,
                'Project_name' => "Seaside Villa",
                'Project_Type' => "Beachfront Property",
                'number_of_workers' => 16,

                'floor' => 2,
                'Size' => 2800,
                'Design_Preferences' => "Mediterranean, Coastal",
                'Functional_Requirements' => "Infinity Pool, Private Beach Access",
                'labor_hourly_rate' => 34,
                'equipment_hourly_cost' => 29,
                'Room_number' => 12,
                'number_of_bedrooms' => 4,
                'bathroom' => 3,
                'Architectural_style' => "Mediterranean",
                'start_date' => "2025-06-15",
                'end_date' => "2026-03-31",
                'price' => 2000000,
                'Description' => "A luxurious seaside villa boasting Mediterranean-inspired architecture and breathtaking coastal views, featuring an infinity pool and exclusive private beach access for unparalleled luxury.",
                'duration' => "9 months",
            ],

            // Data 18
            [
                'user_id' => 118,
                'Project_name' => "Mountain Retreat",
                'Project_Type' => "Rustic Cabin",
                'number_of_workers' => 14,

                'floor' => 2,
                'Size' => 2000,
                'Design_Preferences' => "Rustic, Cozy",
                'Functional_Requirements' => "Mountain Views, Fireplace",
                'labor_hourly_rate' => 30,
                'equipment_hourly_cost' => 25,
                'Room_number' => 8,
                'number_of_bedrooms' => 3,
                'bathroom' => 2,
                'Architectural_style' => "Log Cabin",
                'start_date' => "2025-07-01",
                'end_date' => "2026-02-28",
                'price' => 900000,
                'Description' => "A charming mountain retreat nestled amidst picturesque scenery, featuring a cozy log cabin design and offering stunning mountain views and a crackling fireplace for a rustic escape.",
                'duration' => "8 months",
            ],

            // Data 19
            [
                'user_id' => 119,
                'Project_name' => "Urban Townhouse",
                'Project_Type' => "City Residence",
                'number_of_workers' => 10,

                'floor' => 3,
                'Size' => 1800,
                'Design_Preferences' => "Contemporary, Urban",
                'Functional_Requirements' => "Rooftop Terrace, Home Gym",
                'labor_hourly_rate' => 32,
                'equipment_hourly_cost' => 27,
                'Room_number' => 8,
                'number_of_bedrooms' => 3,
                'bathroom' => 2,
                'Architectural_style' => "Modern",
                'start_date' => "2025-08-15",
                'end_date' => "2026-04-30",
                'price' => 1000000,
                'Description' => "A sleek urban townhouse offering contemporary living spaces and modern amenities, including a rooftop terrace with city views and a home gym for fitness enthusiasts.",
                'duration' => "9 months",
            ],

            // Data 20
            [
                'user_id' => 120,
                'Project_name' => "Rural Farm",
                'Project_Type' => "Agricultural Property",
                'number_of_workers' => 20,

                'floor' => 1,
                'Size' => 3500,
                'Design_Preferences' => "Farmhouse, Rural",
                'Functional_Requirements' => "Barn, Pasture",
                'labor_hourly_rate' => 30,
                'equipment_hourly_cost' => 25,
                'Room_number' => 6,
                'number_of_bedrooms' => 2,
                'bathroom' => 1,
                'Architectural_style' => "Farmhouse",
                'start_date' => "2025-09-01",
                'end_date' => "2026-06-30",
                'price' => 1200000,
                'Description' => "A sprawling rural farm featuring a classic farmhouse and agricultural facilities such as a barn and pasture, offering ample space for farming and rural living.",
                'duration' => "10 months",
            ],



        ]);
    // }
    }
}
