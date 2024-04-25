<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_blog_id',
        'picture_path',
    ];

    public function articleBlog()
    {
        return $this->belongsTo(ArticleBlog::class);
    }
}
