<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'email', 'no_hp', 'image', 'title', 'category', 'description'
    ];
}
