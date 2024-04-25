<?php

namespace App\Models;

use App\Models\ArticleBlog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
    ];

    public function articleBlog()
    {
        return $this->hasMany(ArticleBlog::class);
    }
}
