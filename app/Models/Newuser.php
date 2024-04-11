<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newuser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'number_of_users', 
        'email',
        'password',
        'message',
    ];
}
