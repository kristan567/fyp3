<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' ,
        'project_id',
        'category_id' ,
        'user_id' ,
        'description' ,
        'priority',
        'status' ,
        'start_date' ,
        'end_date' ,
        'completed', 
        'completed_at',
    ];

    public function  project() {
        
        return $this->belongsTo(Project::class, 'project_id');

    }

    public function category(){

        return $this->belongsTo(Category::class, 'category_id');

    }
    
    public function user() {

        return $this->belongsTo(User::class, 'user_id');
        
    }

}
