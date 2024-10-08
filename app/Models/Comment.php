<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'user_id',
        'comment_body',
    ];



    public function image(){
        return $this->belongsTo(Image::class,'image_id','id');
    }

    
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }


}
