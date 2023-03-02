<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar', 'nama', 'category', 'deskripsi'
    ];

    
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
