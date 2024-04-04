<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housetype extends Model
{
    use HasFactory;

    protected $fillable = [

        'type',

    ];


    public function recommends()
    {
        return $this->hasMany(Recommend::class,'housetype_id');
    }
}
