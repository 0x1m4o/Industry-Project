<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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
