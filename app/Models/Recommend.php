<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;

    protected $fillable = [

        'ProjectID',
        'user_id',
        'Project_Name',
        'Project_Type',
        'number_of_workers',
        'floor',
        'Location',
        'Size',
        'Design_Preferences',
        'Functional_Requirements',
        'labor_hourly_rate',
        'equipment_hourly_cost',
        'Room_number',
        'number_of_bedrooms',
        'bathroom',
        'Architectural_style',
        'start_date',
        'end_date',
        'price',
        'description',
        'duration',
        'images',
        

    ];
}
