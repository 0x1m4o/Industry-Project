<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // use HasFactory;
    public $fillable = ['nama', 'gambar', 'slug', 'deskripsi'];
    protected $guarded = [
        'id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    // private static $program = [
    //     [
    //         'nama'=> 'Judul Pertama',
    //         'blog' => 'Blog Pertama'
    //     ],
    // ];

    // public static function index() {
    //     return self::$program;
    // }
};
