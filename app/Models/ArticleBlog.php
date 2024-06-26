<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'picture',
        'description',
        'user_id',
        'categorie_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
