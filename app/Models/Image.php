<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table  ='images';  

    protected $fillable = [
        'task_id',
        'images',
        'reason',
        'is_approved',

    ];


    public function  task() {
         return $this->belongsTo(Task::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class,'image_id','id');
    }

    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','id');
    // }
  
}
