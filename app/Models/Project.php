<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'start_date',
        'end_date',
        'completed', 
        'completed_at',
        'latitude',
        'longitude'

    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class,'project_id');
    }
}
