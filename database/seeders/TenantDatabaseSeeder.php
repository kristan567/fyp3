<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Housetype;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name'=>'Project Manager']);
        Role::create(['name'=>'worker']);
        Role::create(['name'=>'handler']);


        $this ->call([tenantRecommendSeeder::class]);

        // $this ->call([HousetypeSeeder::class]);
        
    }
}
